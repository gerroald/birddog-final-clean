<?php
/**
 * Homelancer Child – Bird Dog
 * Safe enqueue, CPT, and robust shortcodes.
 */

/** Enqueue parent + child CSS (with cache-busting) */
add_action('wp_enqueue_scripts', function () {
  // Enqueue parent if registered (adjust handle if Homelancer uses a different one)
  $parent_handle = 'homelancer-style';
  if (wp_style_is($parent_handle, 'registered')) {
    wp_enqueue_style($parent_handle);
  }
  wp_enqueue_style(
    'homelancer-birddog-child',
    get_stylesheet_uri(),
    array($parent_handle),
    filemtime(get_stylesheet_directory() . '/style.css')
  );
}, 20);

/** Location CPT + Taxonomy (archive + singles URLs) */
add_action('init', function () {

  register_post_type('location', array(
    'label'        => 'Locations',
    'public'       => true,
    'has_archive'  => 'service-areas', // /service-areas/
    'rewrite'      => array('slug' => 'service-area', 'with_front' => false), // /service-area/{slug}/
    'show_in_rest' => true,
    'supports'     => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields')
  ));

  register_taxonomy('area_type', 'location', array(
    'label'        => 'Area Type',
    'hierarchical' => false,
    'public'       => true,
    'rewrite'      => array('slug' => 'area-type'),
    'show_in_rest' => true
  ));

});

/** Flush rewrites once on theme switch so slugs work immediately */
add_action('after_switch_theme', function () {
  flush_rewrite_rules();
});

/** Pattern category */
add_action('init', function () {
  register_block_pattern_category('birddog', array(
    'label' => __('Bird Dog Patterns', 'birddog')
  ));
});

/**
 * [bd field="eyebrow"] – safe field fetch
 * - Uses ACF if available, else falls back to post meta
 * - Handles array values gracefully
 */
add_shortcode('bd', function ($atts) {
  $a = shortcode_atts(array('field' => ''), $atts);
  $key = trim($a['field']);
  if (!$key) return '';

  $val = '';
  if (function_exists('get_field')) {
    $val = get_field($key);
  } else {
    $val = get_post_meta(get_the_ID(), $key, true);
  }

  if (is_array($val)) {
    // Prefer a 'label' subkey if present, else join scalar values
    if (isset($val['label']) && is_scalar($val['label'])) {
      $val = (string)$val['label'];
    } else {
      $flat = array();
      foreach ($val as $item) {
        if (is_array($item) && isset($item['label'])) { $flat[] = (string)$item['label']; }
        elseif (is_scalar($item)) { $flat[] = (string)$item; }
      }
      $val = implode(', ', $flat);
    }
  }

  if (!is_scalar($val) || $val === null) return '';
  return esc_html((string)$val);
});

/**
 * [bd_badges] – outputs pills from:
 * - ACF Repeater 'trust_badges' (sub field 'label'), OR
 * - meta 'trust_badges' as CSV string, OR
 * - meta 'trust_badges' as array (from imports)
 * Robust against null/array/scalar.
 */
add_shortcode('bd_badges', function () {
  $out = '';

  // 1) ACF repeater
  if (function_exists('have_rows') && have_rows('trust_badges', get_the_ID())) {
    while (have_rows('trust_badges', get_the_ID())) {
      the_row();
      $label = get_sub_field('label');
      if (is_scalar($label) && $label !== '') {
        $out .= '<span class="bd-badge" style="margin-right:.5rem;margin-bottom:.5rem">'
             . esc_html((string)$label) . '</span>';
      }
    }
    return $out;
  }

  // 2) Post meta (could be string CSV or array)
  $meta = get_post_meta(get_the_ID(), 'trust_badges', true);

  $labels = array();
  if (is_array($meta)) {
    // Array could be ['Label1','Label2'] or [['label'=>'Label1'], ...]
    foreach ($meta as $item) {
      if (is_array($item) && isset($item['label']) && is_scalar($item['label'])) {
        $labels[] = (string)$item['label'];
      } elseif (is_scalar($item)) {
        $labels[] = (string)$item;
      }
    }
  } elseif (is_string($meta) && $meta !== '') {
    // CSV string (allow comma or pipe as separator)
    $parts = preg_split('/\s*[,|]\s*/', $meta);
    foreach ($parts as $p) {
      $p = trim($p);
      if ($p !== '') $labels[] = $p;
    }
  }

  if (!$labels) return '';
  foreach ($labels as $label) {
    $out .= '<span class="bd-badge" style="margin-right:.5rem;margin-bottom:.5rem">'
         . esc_html($label) . '</span>';
  }
  return $out;
});
// === BirdDog block styles (editor pickers) ===
add_action('init', function () {
  $targets = [
    ['core/group','bd-hero','BD • Gradient Hero'],
    ['core/group','bd-section','BD • Section (Alt BG)'],
    ['core/group','bd-card','BD • Card'],
    ['core/buttons','bd-cta-row','BD • CTA Row (Centered)'],
    ['core/button','bd-btn-ghost','BD • Ghost Button'],
    ['core/button','bd-btn-gold','BD • Gold Button'],
    ['core/columns','bd-cards-3','BD • 3-Up Cards'],
    ['core/columns','bd-cards-2','BD • 2-Up Cards'],
    ['core/details','bd-accordion','BD • Accordion'],
  ];
  foreach ($targets as [$block,$name,$label]) {
    register_block_style($block, ['name'=>$name,'label'=>$label]);
  }
});
