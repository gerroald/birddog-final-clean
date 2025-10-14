<?php
require_once get_stylesheet_directory() . '/business-info.php';
add_action('wp_enqueue_scripts', function () {
  // Parent styles
  wp_enqueue_style('generatepress', get_template_directory_uri().'/style.css', [], null);

    // Child styles - tokens first, then professional themes, then site styles
    wp_enqueue_style('sr-tokens', get_stylesheet_directory_uri().'/assets/css/tokens.css', [], '1.0.1');
    // wp_enqueue_style('sr-professional-themes', get_stylesheet_directory_uri().'/assets/css/professional-themes.css', ['sr-tokens'], '1.0.1');
    wp_enqueue_style('sr-site', get_stylesheet_directory_uri().'/assets/css/site.css', ['sr-tokens'], '1.0.1');

    // Header styles (loaded after site.css to override)
    wp_enqueue_style('sr-header', get_stylesheet_directory_uri().'/assets/css/header.css', ['sr-site'], '1.0.0');

    // Service page templates (only load on service pages)
    if (is_page_template('page-templates/page-service-hub.php') ||
        is_page_template('page-templates/page-service-detail.php') ||
        is_page_template('page-templates/page-service-area.php')) {
        wp_enqueue_style('sr-services', get_stylesheet_directory_uri().'/assets/css/templates/services.css', ['sr-site'], '1.0.0');
    }

    // Blog templates (blog page and single posts)
    if (is_page_template('page-templates/page-blog.php') || is_single() || is_home() || is_archive()) {
        wp_enqueue_style('sr-blog', get_stylesheet_directory_uri().'/assets/css/templates/blog.css', ['sr-site'], '1.0.0');
    }

    // About & Contact pages
    if (is_page_template('page-templates/page-about.php') || is_page_template('page-templates/page-contact.php')) {
        wp_enqueue_style('sr-about-contact', get_stylesheet_directory_uri().'/assets/css/templates/about-contact.css', ['sr-site'], '1.0.0');
    }

    // WPForms custom styling to match HTML forms
    wp_enqueue_style('sr-wpforms-custom', get_stylesheet_directory_uri().'/assets/css/wpforms-custom.css', ['sr-site'], '1.0.8');

  // Child scripts with defer
  wp_enqueue_script('sr-site', get_stylesheet_directory_uri().'/assets/js/site.js', [], '1.0.1', true);
  // wp_enqueue_script('sr-simple-theme-switcher', get_stylesheet_directory_uri().'/assets/js/simple-theme-switcher.js', [], '1.0.1', true);

  // Header navigation script
  wp_enqueue_script('sr-header', get_stylesheet_directory_uri().'/assets/js/header.js', [], '1.0.0', true);

  // Blog filtering script
  if (is_page_template('page-templates/page-blog.php')) {
      wp_enqueue_script('sr-blog', get_stylesheet_directory_uri().'/assets/js/blog.js', [], '1.0.0', true);
  }
}, 999); // High priority to load after other styles

add_action('after_setup_theme', function () {
  register_nav_menus([
    'primary' => 'Primary Menu',
    'footer'  => 'Footer Menu',
  ]);
});

// Register service sidebar widget area
add_action('widgets_init', function () {
  register_sidebar([
    'name'          => 'Service Sidebar',
    'id'            => 'service-sidebar',
    'description'   => 'Appears on service area pages for weather, promos, and local content',
    'before_widget' => '<div class="service-sidebar__widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ]);
});

// Include schema functions
require_once get_stylesheet_directory() . '/components/schema.php';

// Schema.org JSON-LD in wp_head
add_action('wp_head', function(){
  if(function_exists('sr_print_org_schema')) sr_print_org_schema();
});

// Head snippets (Analytics) in wp_head
add_action('wp_head', function(){
  if (defined('GA4_MEASUREMENT_ID') || defined('META_PIXEL_ID')) {
    get_template_part('components/head-snippets');
  }
});
// Append a small toggle button to parent items (primary menu only), after the <a>
add_filter('walker_nav_menu_start_el', function($item_output, $item, $depth, $args){
  if (($args->theme_location ?? '') !== 'primary') return $item_output;

  $classes = is_array($item->classes) ? $item->classes : [];
  $is_parent = in_array('menu-item-has-children', $classes, true);
  if (!$is_parent) return $item_output;

  $button = sprintf(
    '<button class="submenu-toggle" aria-label="%s" aria-expanded="false" aria-controls="submenu-%d" tabindex="-1">▾</button>',
    esc_attr__('Expand submenu', 'gp-child-swiftrooter'),
    (int) $item->ID
  );

  return $item_output . ' ' . $button;
}, 10, 4);

/*** BD: GP Free components (trust strip, callbar, FAB) ***/
add_shortcode('bd_trust', function () {
  ob_start(); ?>
  <section class="trust" aria-label="Trusted Badges" data-reveal>
    <div class="trust__logos">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/badges/bbb.svg" alt="BBB Accredited">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/badges/google.svg" alt="Google Reviews">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/badges/yelp.svg" alt="Yelp">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/badges/homeadvisor.svg" alt="HomeAdvisor">
    </div>
    <p class="trust__caption">Licensed &amp; insured • Five-star reviews • Serving OKC, Edmond &amp; Norman</p>
  </section>
  <?php
  return ob_get_clean();
});

add_shortcode('bd_callbar', function () {
  return '<div class="callbar" role="region" aria-label="Quick actions">
    <a class="c-button c-button--primary" href="'.esc_url(home_url('/contact/#estimate')).'">Get Free Estimate</a>
    <a class="c-button c-button--ghost" href="tel:4055354554">Call (405) 535-4554</a>
  </div>';
});

add_shortcode('bd_fab', function () {
  ob_start(); ?>
  <div class="fab-panel-mobile clean-mode" role="region" aria-label="Quick actions">
    <button class="fab-toggle btn-pulse" aria-expanded="false" aria-controls="fab-panel">
      <svg width="22" height="22" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 5v14M5 12h14" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
      <span class="sr-only">Open quick actions</span>
    </button>
    <div class="fab-panel" id="fab-panel">
      <a class="fab-link" href="tel:4055354554">Call Now</a>
      <a class="fab-link" href="sms:+14055354554">Text Us</a>
      <a class="fab-link" href="<?php echo esc_url(home_url('/contact/#estimate')); ?>">Get Free Estimate</a>
      <a class="fab-link" href="mailto:birddogmoving@gmail.com">Email</a>
    </div>
  </div>
  <?php return ob_get_clean();
});

/* Auto-inject sticky bars without GP Premium */
add_action('wp_body_open', function () { echo do_shortcode('[bd_callbar]'); });
add_action('wp_footer', function () { echo do_shortcode('[bd_fab]'); }, 99);

/* Enqueue FAB assets */
add_action('wp_enqueue_scripts', function () {
  $dir = get_stylesheet_directory();
  $uri = get_stylesheet_directory_uri();
  if (file_exists("$dir/assets/css/modern-chik-fab.css")) {
    wp_enqueue_style('bd-fab', $uri . '/assets/css/modern-chik-fab.css', [], filemtime("$dir/assets/css/modern-chik-fab.css"));
  }
  if (file_exists("$dir/assets/js/modern-chik-fab.js")) {
    wp_enqueue_script('bd-fab', $uri . '/assets/js/modern-chik-fab.js', [], filemtime("$dir/assets/js/modern-chik-fab.js"), true);
  }
});
/**
 * BDM autoloader: patterns, blocks, and block styles
 * Place in your child theme (e.g., /gp-child-swiftrooter/gp-child-swiftrooter.php)
 */

add_action('init', function () {

  /* ---------- SETTINGS ---------- */
  $theme_dir   = get_stylesheet_directory();
  $patternsDir = $theme_dir . '/patterns';
  $blocksDir   = $theme_dir . '/blocks';
  $stylesJson  = $theme_dir . '/block-styles.json';
  $category    = 'bdm';      // pattern category slug
  $categoryLbl = 'BDM Patterns';

  /* ---------- PATTERNS: auto-register *.html ---------- */
  if (is_dir($patternsDir)) {
    if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($category)) {
      register_block_pattern_category($category, ['label' => $categoryLbl]);
    }

    foreach (glob($patternsDir . '/*.html') as $file) {
      $slugBase = basename($file, '.html');
      $slug     = sanitize_title($slugBase);
      $content  = file_get_contents($file);

      // Optional HTML front-matter (at top of file):
      // <!--
      // Title: Services Hub
      // Categories: bdm, text
      // Description: Overview of residential & commercial services
      // -->
      $title = preg_match('/<!--\s*Title:\s*(.+?)\s*-->/si', $content, $m1)
        ? trim($m1[1])
        : ucwords(str_replace(['-','_'],' ', $slugBase));

      $cats = [$category];
      if (preg_match('/<!--\s*Categories:\s*(.+?)\s*-->/si', $content, $m2)) {
        $cats = array_filter(array_map('trim', explode(',', $m2[1])));
      }

      $desc = preg_match('/<!--\s*Description:\s*(.+?)\s*-->/si', $content, $m3)
        ? trim($m3[1])
        : '';

      $patternArgs = [
        'title'       => $title,
        'categories'  => $cats,
        'content'     => $content,
      ];
      if ($desc) $patternArgs['description'] = $desc;

      // Register once per slug
      $fullSlug = "bdm/{$slug}";
      if (!WP_Block_Patterns_Registry::get_instance()->is_registered($fullSlug)) {
        register_block_pattern($fullSlug, $patternArgs);
      }
    }
  }

  /* ---------- BLOCKS: auto-register each blocks*/
  if (is_dir($blocksDir)) {
    foreach (glob($blocksDir . '/*/block.json') as $json) {
      // Each directory can also contain render.php, editor.css, style.css, etc.
      register_block_type(dirname($json));
    }
  }

  /* ---------- BLOCK STYLES: optional JSON config ---------- */
  // Create /gp-child-swiftrooter/block-styles.json with:
  // [
  //   {"block":"core/group","name":"bdm-band-plain","label":"BDM · Band · Plain"},
  //   {"block":"core/group","name":"bdm-band-tint","label":"BDM · Band · Tint"}
  // ]
  if (file_exists($stylesJson)) {
    $styles = json_decode(file_get_contents($stylesJson), true);
    if (is_array($styles)) {
      foreach ($styles as $s) {
        if (!empty($s['block']) && !empty($s['name']) && !empty($s['label'])) {
          // You can also pass 'inline_style' or 'style_handle' in $s if needed
          register_block_style($s['block'], [
            'name'         => sanitize_title($s['name']),
            'label'        => $s['label'],
            'inline_style' => $s['inline_style'] ?? '',
            'style_handle' => $s['style_handle'] ?? null,
          ]);
        }
      }
    }
  }

});

/* UI Fix Pack: Menu label line break for mobile */
add_filter('nav_menu_item_title', function($title, $item) {
  // Allow controlled line break for "Free Estimates! & Pricing" menu item
  if (is_string($title) && strip_tags($title) === 'Free Estimates! & Pricing') {
    return 'Free Estimates!<br>& Pricing';
  }
  return $title;
}, 10, 2);
