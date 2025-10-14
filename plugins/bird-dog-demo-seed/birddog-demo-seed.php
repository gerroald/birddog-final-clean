<?php
/**
 * Plugin Name: Bird Dog Demo Seed
 * Description: Seeds ACF fields (if available), sample Locations CPT content & a Service Areas page for Homelancer child theme.
 * Version: 1.0.1
 */

if (!defined('ABSPATH')) exit;

/** Ensure CPT exists (safe if already registered in theme). */
/** Regitered in theme **/

/** Register ACF fields via local JSON/PHP if ACF is active */
add_action('acf/init', function () {
  if (!function_exists('acf_add_local_field_group')) return;

  acf_add_local_field_group([
    'key' => 'group_bd_location',
    'title' => 'Location Details',
    'fields' => [
      ['key'=>'field_bd_eyebrow','label'=>'Eyebrow','name'=>'eyebrow','type'=>'text'],
      ['key'=>'field_bd_lede_bold','label'=>'Lede (bold part)','name'=>'lede_bold','type'=>'text'],
      ['key'=>'field_bd_lede','label'=>'Lede (rest)','name'=>'lede','type'=>'textarea','rows'=>2],
      ['key'=>'field_bd_area_label','label'=>'Area Label (City/Neighborhood)','name'=>'area_label','type'=>'text'],
      ['key'=>'field_bd_zips','label'=>'ZIPs (CSV)','name'=>'zips','type'=>'text'],
      ['key'=>'field_bd_rating','label'=>'Star Rating','name'=>'rating','type'=>'text'],
      ['key'=>'field_bd_moves','label'=>'Moves Completed','name'=>'moves_completed','type'=>'text'],
      [
        'key'=>'field_bd_badges','label'=>'Trust Badges','name'=>'trust_badges','type'=>'repeater',
        'layout'=>'table','button_label'=>'Add Badge',
        'sub_fields'=>[['key'=>'field_bd_badge_label','label'=>'Label','name'=>'label','type'=>'text']]
      ],
    ],
    'location' => [[['param'=>'post_type','operator'=>'==','value'=>'location']]],
    'position' => 'normal'
  ]);
});

/** Seed data on activation (once) */
register_activation_hook(__FILE__, function () {
  if (get_option('bd_seeded')) return;

  // Create "Service Areas" page with pattern
  $page_id = wp_insert_post([
    'post_title'   => 'Service Areas',
    'post_type'    => 'page',
    'post_status'  => 'publish',
    'post_name'    => 'service-areas',
    'post_content' => '<!-- wp:pattern {"slug":"birddog/service-areas"} /-->'
  ]);

  // Ensure terms exist
  $city_term  = term_exists('City', 'area_type');
  $nbhd_term  = term_exists('Neighborhood', 'area_type');
  if (!$city_term) $city_term = wp_insert_term('City', 'area_type');
  if (!$nbhd_term) $nbhd_term = wp_insert_term('Neighborhood', 'area_type');

  // Sample locations (title, area_type, fields/meta)
  $locations = [
    [
      'title'=>'Bricktown',
      'type'=>'Neighborhood',
      'meta'=>[
        'eyebrow'=>'Bricktown Moving Specialists',
        'lede_bold'=>'Navigate tight loading docks, freight elevators, and downtown logistics',
        'lede'=>'with Oklahoma City’s most experienced Bricktown movers. Free downtown parking coordination included.',
        'area_label'=>'Neighborhood',
        'zips'=>'73104, 73102',
        'rating'=>'4.9',
        'moves_completed'=>'250',
        'trust_badges'=>['250+ Bricktown Moves','Loading Dock Certified','Same-Day Service'],
      ]
    ],
    [
      'title'=>'Downtown',
      'type'=>'City',
      'meta'=>[
        'eyebrow'=>'Downtown OKC Specialists',
        'lede_bold'=>'High-rise buildings and corporate offices with complex logistics',
        'lede'=>'We handle permits, elevators, and building coordination end-to-end.',
        'area_label'=>'City',
        'zips'=>'73102, 73103',
        'rating'=>'4.8',
        'moves_completed'=>'400',
        'trust_badges'=>['High-Rise Specialists','Corporate Accounts','Permit Handling'],
      ]
    ],
    [
      'title'=>'Midtown',
      'type'=>'Neighborhood',
      'meta'=>[
        'eyebrow'=>'Midtown Moving Specialists',
        'lede_bold'=>'Historic homes and small businesses in OKC’s cultural heart',
        'lede'=>'Delicate handling and precise scheduling to protect your space.',
        'area_label'=>'Neighborhood',
        'zips'=>'73103',
        'rating'=>'4.9',
        'moves_completed'=>'300',
        'trust_badges'=>['Historic Homes','Small Business','Art & Antiques'],
      ]
    ],
    [
      'title'=>'Deep Deuce',
      'type'=>'Neighborhood',
      'meta'=>[
        'eyebrow'=>'Deep Deuce Specialists',
        'lede_bold'=>'Modern condos and apartments with urban logistics challenges',
        'lede'=>'Freight elevators, loading zones, and tight timelines handled.',
        'area_label'=>'Neighborhood',
        'zips'=>'73104',
        'rating'=>'4.7',
        'moves_completed'=>'180',
        'trust_badges'=>['Modern Condos','Urban Logistics','Same-Day Service'],
      ]
    ],
    [
      'title'=>'Automobile Alley',
      'type'=>'Neighborhood',
      'meta'=>[
        'eyebrow'=>'Automobile Alley Specialists',
        'lede_bold'=>'Mixed-use district with businesses, lofts, and creative spaces',
        'lede'=>'Flexible crews for off-hours moves and retail setups.',
        'area_label'=>'Neighborhood',
        'zips'=>'73104, 73103',
        'rating'=>'4.8',
        'moves_completed'=>'120',
        'trust_badges'=>['Creative Spaces','Mixed-Use Buildings','Business Moves'],
      ]
    ],
    [
      'title'=>'The Paseo',
      'type'=>'Neighborhood',
      'meta'=>[
        'eyebrow'=>'The Paseo Specialists',
        'lede_bold'=>'Arts district with galleries, studios, and unique residential spaces',
        'lede'=>'Careful packing and white-glove handling.',
        'area_label'=>'Neighborhood',
        'zips'=>'73103, 73112',
        'rating'=>'4.9',
        'moves_completed'=>'95',
        'trust_badges'=>['Art Studios','Gallery Moves','Creative Residential'],
      ]
    ],
  ];

  foreach ($locations as $loc) {
    $content = '<!-- wp:pattern {"slug":"birddog/location-layout"} /-->';
    $post_id = wp_insert_post([
      'post_title'   => $loc['title'],
      'post_type'    => 'location',
      'post_status'  => 'publish',
      'post_content' => $content,
      'post_excerpt' => wp_strip_all_tags($loc['meta']['lede_bold'].' '.$loc['meta']['lede'])
    ]);

    if (is_wp_error($post_id)) continue;

    // assign taxonomy
    $term_id = ($loc['type']==='City') ? ($city_term['term_id'] ?? $city_term) : ($nbhd_term['term_id'] ?? $nbhd_term);
    wp_set_post_terms($post_id, [$term_id], 'area_type', false);

    // save meta (works without ACF)
    foreach ($loc['meta'] as $k=>$v) {
      if ($k==='trust_badges') {
        update_post_meta($post_id, 'trust_badges', implode(',', $v));
      } else {
        update_post_meta($post_id, $k, $v);
      }
    }

    // also store to ACF fields if available
    if (function_exists('update_field')) {
      foreach ($loc['meta'] as $k=>$v) {
        if ($k==='trust_badges') {
          // build repeater
          $rows = [];
          foreach ($v as $label) $rows[] = ['label'=>$label];
          update_field('trust_badges', $rows, $post_id);
        } else {
          update_field($k, $v, $post_id);
        }
      }
    }
  }

  update_option('bd_seeded', 1);
});

/** Helper: reset seeding via WP-CLI: wp option delete bd_seeded && wp plugin deactivate birddog-demo-seed && wp plugin activate birddog-demo-seed */
