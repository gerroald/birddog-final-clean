<?php
/**
 * Plugin Name: BD Landing Loader
 * Description: Loads BirdDog landing styles on /quote/ without touching the theme.
 */

// Add body class so selectors like body.bd-sniper … will match.
add_filter('body_class', function ($classes) {
  if (is_page('quote')) $classes[] = 'bd-sniper';
  return $classes;
});

// Enqueue landing styles only on /quote/
add_action('wp_enqueue_scripts', function () {
  if (!is_page('quote')) return;

  $up = wp_upload_dir();
  $base_dir = trailingslashit($up['basedir']) . 'bd/';
  $base_url = trailingslashit($up['baseurl']) . 'bd/';

  // Helper for versioning (cache-bust if files exist)
  $v = function($file) use ($base_dir) {
    $p = $base_dir . $file;
    return file_exists($p) ? filemtime($p) : null;
  };

  // Base
  wp_enqueue_style(
    'bd-landing',
    $base_url . 'bd-landing.css',
    [],
    $v('bd-landing.css')
  );

  // Scoped sniper (depends on base)
  wp_enqueue_style(
    'bd-landing-sniper',
    $base_url . 'bd-landing-birddog-scoped-sniper.css',
    ['bd-landing'],
    $v('bd-landing-birddog-scoped-sniper.css')
  );

  // Final shim (last)
  wp_enqueue_style(
    'bd-landing-shim',
    $base_url . 'bd-landing-shim.css',
    ['bd-landing', 'bd-landing-sniper'],
    $v('bd-landing-shim.css')
  );
}, 99);

// Canary in <head> so you can View Source and confirm load
add_action('wp_head', function () {
  if (is_page('quote')) echo "\n<!-- BD Landing Loader active on /quote/ -->\n";
}, 1);
