<?php
/**
 * Plugin Name: Content Workflow Orchestrator
 * Description: Publishes web signals, updates hub freshness, and creates human "lane-change" tasks when automation ends.
 * Version: 0.1.0
 * Author: You
 */
if ( ! defined('ABSPATH') ) { exit; }

// ---- Load config ----
function cwo_get_config() {
  static $cfg = null;
  if ( $cfg !== null ) return $cfg;
  $path = WP_CONTENT_DIR . '/uploads/workflow-config-cache.json';
  // try cached config first
  if ( file_exists( $path ) ) {
    $cfg = json_decode( file_get_contents( $path ), true );
  } else {
    $cfg = array();
  }
  // also try reading from theme config (source of truth)
  $theme_cfg = get_stylesheet_directory() . '/config/workflow.json';
  if ( file_exists( $theme_cfg ) ) {
    $cfg = json_decode( file_get_contents( $theme_cfg ), true );
    // cache to uploads so mu-plugin can read even if theme changes
    if ( wp_mkdir_p( WP_CONTENT_DIR . '/uploads' ) ) {
      file_put_contents( $path, json_encode( $cfg, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES ) );
    }
  }
  return $cfg ?: array();
}

function cwo_is_staging() {
  $cfg = cwo_get_config();
  if ( isset($cfg['env']) && strtolower($cfg['env']) === 'staging' ) return true;
  if ( !empty($cfg['staging_no_external_pings']) ) return true;
  if ( defined('WP_ENV') && strtolower(WP_ENV) === 'staging' ) return true;
  return false;
}

// ---- Action Scheduler helper (soft dependency) ----
function cwo_enqueue_job( $hook, $args = array() ) {
  if ( function_exists('as_enqueue_async_action') ) {
    return as_enqueue_async_action( $hook, $args );
  }
  // Fallback: run immediately (synchronous)
  do_action( $hook, $args );
  return true;
}

// ---- Primary publish/update hooks ----
add_action('transition_post_status', function($new, $old, $post){
  if ( 'post' !== $post->post_type ) return;
  $published_now = ( in_array($old, array('draft','pending','future','auto-draft'), true ) && 'publish' === $new );
  $updated_live  = ( 'publish' === $old && 'publish' === $new );

  if ( !($published_now || $updated_live) ) return;

  // Prevent recursion with a post meta flag
  if ( get_post_meta($post->ID, '_cwo_handled', true) ) return;
  update_post_meta($post->ID, '_cwo_handled', time());

  $data = array(
    'post_id' => $post->ID,
    'url'     => get_permalink($post),
    'title'   => get_the_title($post),
  );

  // Map primary category to hub page (placeholder function)
  $hub_id = cwo_map_primary_category_to_hub( $post->ID );
  if ( $hub_id ) {
    // bump hub freshness meta to affect modified date
    update_post_meta( $hub_id, 'hub_last_child_published', time() );
    cwo_enqueue_job('cwo_ping_urls', array('urls'=> array( get_permalink($post), get_permalink($hub_id) )));
  } else {
    cwo_enqueue_job('cwo_ping_urls', array('urls'=> array( get_permalink($post) )));
  }

  // Featured image check
  if ( ! has_post_thumbnail( $post ) ) {
    cwo_enqueue_job('cwo_notify_lane_change', array(
      'title' => 'Featured image missing',
      'message' => 'Add a featured image to: ' . get_the_title($post),
      'links' => array('Edit Post' => get_edit_post_link($post->ID))
    ));
  }

  // TODO: Orphan check / suggest contextual links (placeholder)
  // cwo_enqueue_job('cwo_suggest_context_links', array('target_id' => $post->ID, 'hub_id' => $hub_id ));

  // clear the flag after request ends
  add_action('shutdown', function() use ($post){
    delete_post_meta($post->ID, '_cwo_handled');
  });
}, 10, 3);

// ---- Ping job (IndexNow minimal) ----
add_action('cwo_ping_urls', function($payload){
  $cfg = cwo_get_config();
  $urls = isset($payload['urls']) ? (array)$payload['urls'] : array();
  if ( empty($urls) ) return;

  // Log only on staging
  if ( cwo_is_staging() ) {
    foreach ( $urls as $u ) {
      cwo_log('STAGING ping skipped: ' . $u);
    }
    return;
  }

  if ( !empty($cfg['ping_services']) && in_array('indexnow', $cfg['ping_services'], true) ) {
    $endpoint = 'https://api.indexnow.org/indexnow';
    $body = array(
      'host' => parse_url( home_url(), PHP_URL_HOST ),
      'key'  => $cfg['indexnow']['key'] ?? '',
      'keyLocation' => $cfg['indexnow']['key_location'] ?? '',
      'urlList' => array_values($urls),
    );
    $res = wp_remote_post( $endpoint, array(
      'headers' => array('Content-Type' => 'application/json'),
      'body'    => wp_json_encode($body),
      'timeout' => 15,
    ));
    cwo_log('IndexNow response: ' . (is_wp_error($res) ? $res->get_error_message() : wp_remote_retrieve_response_code($res)));
  }
}, 10, 1);

// ---- Lane-change notifier (Slack webhook minimal) ----
add_action('cwo_notify_lane_change', function($payload){
  $cfg = cwo_get_config();
  $text = isset($payload['title']) ? $payload['title'] : 'Workflow task';
  if ( !empty($payload['message']) ) $text .= "\n" . $payload['message'];

  // Always log locally
  cwo_log('Lane-change: ' . $text);

  if ( cwo_is_staging() ) return; // no external posts on staging

  $webhook = $cfg['slack_webhook_url'] ?? '';
  if ( ! $webhook ) return;

  $blocks = array(
    array('type'=>'section','text'=>array('type'=>'mrkdwn','text'=>$text)),
  );
  if ( !empty($payload['links']) && is_array($payload['links']) ) {
    $elements = array();
    foreach ( $payload['links'] as $label => $url ) {
      $elements[] = array('type'=>'button','text'=>array('type'=>'plain_text','text'=>$label),'url'=>$url);
    }
    $blocks[] = array('type'=>'actions','elements'=>$elements);
  }

  $res = wp_remote_post( $webhook, array(
    'headers' => array('Content-Type'=>'application/json'),
    'body' => wp_json_encode(array('blocks'=>$blocks)),
    'timeout' => 15,
  ));
  cwo_log('Slack response: ' . (is_wp_error($res) ? $res->get_error_message() : wp_remote_retrieve_response_code($res)));
}, 10, 1);

// ---- Health: REST heartbeat ----
add_action('rest_api_init', function(){
  register_rest_route('workflow/v1', '/ping', array(
    'methods'  => 'GET',
    'callback' => function(){
      $ok = true;
      $data = array(
        'ok' => $ok,
        'time' => gmdate('c'),
      );
      return rest_ensure_response($data);
    },
    'permission_callback' => '__return_true',
  ));
});

// ---- Logging helper ----
function cwo_log($msg){
  $dir = WP_CONTENT_DIR . '/uploads/workflow-logs';
  if ( wp_mkdir_p($dir) ) {
    $file = $dir . '/log-' . gmdate('Y-m-d') . '.log';
    error_log('['.gmdate('H:i:s').'] '.$msg."\n", 3, $file);
  }
}

// ---- Placeholder: map primary category to hub page ----
function cwo_map_primary_category_to_hub( $post_id ){
  // TODO: replace with your real mapping logic (e.g., options, ACF, or name conventions).
  // Return a Page ID of the hub if found; otherwise 0/null.
  return 0;
}

// ---- Admin Tools page (status lite) ----
add_action('admin_menu', function(){
  add_management_page('Workflow Status', 'Workflow Status', 'manage_options', 'workflow-status', function(){
    echo '<div class="wrap"><h1>Workflow Status</h1>';
    echo '<p>Heartbeat: <code>'. esc_html( home_url('/wp-json/workflow/v1/ping') ) .'</code></p>';
    $dir = WP_CONTENT_DIR . '/uploads/workflow-logs';
    if ( is_dir($dir) ) {
      $files = array_slice( array_reverse( glob($dir . '/*.log') ), 0, 5 );
      echo '<h2>Recent Logs</h2><ul>';
      foreach ( $files as $f ) {
        echo '<li><code>'. esc_html( basename($f) ) .'</code></li>';
      }
      echo '</ul>';
    }
    echo '</div>';
  });
});
