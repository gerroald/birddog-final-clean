<?php
require_once get_stylesheet_directory() . '/business-info.php';

add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style('tokens-3', get_stylesheet_directory_uri().'/assets/css/tokens-3.css', [], '1.0');
  wp_enqueue_style('homepage-v2', get_stylesheet_directory_uri().'/assets/css/homepage-v2.css', ['tokens-3'], '1.0');
}, 20);

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
	
    // Custom styling for cards
    wp_enqueue_style('sr-cards', get_stylesheet_directory_uri().'/assets/css/cards.css', ['sr-site'], '1.0.0');
	
    // Styling for the graphite theme
    wp_enqueue_style('sr-graphite', get_stylesheet_directory_uri().'/assets/css/graphite.css', ['sr-site'], '1.0.0');

// Homepage (cleaned version)
    if (is_page_template('page-templates/page-home-CLEANED.php')) {
        wp_enqueue_style('sr-homepage', get_stylesheet_directory_uri().'/assets/css/homepage.css', ['sr-site'], '1.0.0');
    }
// Homepage V2 (visual redesign)
    if (is_page_template('page-templates/page-home-v2.php')) {
        wp_enqueue_style('sr-homepage-v2', get_stylesheet_directory_uri().'/assets/css/homepage-v2.css', ['sr-site'], '1.0.0');
    }
	
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
/* ==== Bird Dog launch shortcodes (no blocks needed) ==== */

/* 1) Pricing with description cards (3-up) */
add_shortcode('bd_pricing_pro', function($atts){
  $a = shortcode_atts([
    'h2' => 'Transparent, Simple Pricing',
    'p1_title'=>'2-Man Crew','p1_price'=>'$137.50/hr','p1_min'=>'2-hr min · $275',
    'p1_list'=>'26ft truck;Furniture wrap;Assembly/disassembly',
    'p2_title'=>'3-Man Crew','p2_price'=>'$187.50/hr','p2_min'=>'2-hr min · $375','p2_list'=>'Truck included;Protection;Pro crew',
    'p3_title'=>'4-Man Crew','p3_price'=>'$237.50/hr','p3_min'=>'2-hr min · $475','p3_list'=>'Faster move;All supplies;Set-up',
    'cta_label'=>'Get My Estimate','cta_href'=>'#estimate','feature'=>'1' /* which card to feature: 1/2/3 or 0 for none */
  ], $atts);
  $cards = [
    ['title'=>$a['p1_title'],'price'=>$a['p1_price'],'min'=>$a['p1_min'],'list'=>$a['p1_list']],
    ['title'=>$a['p2_title'],'price'=>$a['p2_price'],'min'=>$a['p2_min'],'list'=>$a['p2_list']],
    ['title'=>$a['p3_title'],'price'=>$a['p3_price'],'min'=>$a['p3_min'],'list'=>$a['p3_list']],
  ];
  ob_start(); ?>
  <section class="section section--light">
    <div class="l-container">
      <h2><?php echo esc_html($a['h2']); ?></h2>
      <div class="pricegrid" role="list">
        <?php foreach($cards as $i=>$c): $feat = ((int)$a['feature']===($i+1)) ? ' pricecard--feature':''; ?>
        <article class="pricecard<?php echo $feat; ?>" role="listitem">
          <h3 class="card__title"><?php echo esc_html($c['title']); ?></h3>
          <div class="pricecard__price"><?php echo esc_html($c['price']); ?></div>
          <p class="pricecard__desc"><?php echo esc_html($c['min']); ?></p>
          <?php $items = array_filter(array_map('trim', explode(';',$c['list']))); ?>
          <?php if($items): ?><ul class="pricecard__list">
            <?php foreach($items as $li): ?><li><?php echo esc_html($li); ?></li><?php endforeach; ?>
          </ul><?php endif; ?>
          <div style="margin-top:var(--space-md)"><a class="c-button c-button--primary" href="<?php echo esc_url($a['cta_href']); ?>"><?php echo esc_html($a['cta_label']); ?></a></div>
        </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php return ob_get_clean();
});

/* 2) Clean card grid baseline */
add_shortcode('bd_cards', function($atts, $content=''){
  // Usage: [bd_cards cols="3"]Title|Body||Title2|Body2[/bd_cards]
  $a = shortcode_atts(['cols'=>'3','title'=>''], $atts);
  $items=[]; foreach(explode('||', trim($content)) as $pair){ $p = array_map('trim', explode('|',$pair,2)); if(!empty($p[0])) $items[]=$p; }
  $cols = in_array($a['cols'],['2','3']) ? $a['cols'] : '3';
  ob_start(); ?>
  <section class="section section--light">
    <div class="l-container">
      <?php if($a['title']) echo '<h2>'.esc_html($a['title']).'</h2>'; ?>
      <div class="cards cards--<?php echo esc_attr($cols); ?>">
        <?php foreach($items as $it): ?>
          <article class="card">
            <h3 class="card__title"><?php echo esc_html($it[0]); ?></h3>
            <p class="card__body"><?php echo !empty($it[1])? wp_kses_post($it[1]) : ''; ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php return ob_get_clean();
});

/* 3) Feature box + three boxes below (standalone) */
add_shortcode('bd_feature_three', function($atts, $content=''){
  $a = shortcode_atts([
    'title'=>'Why Choose Bird Dog’s',
    'sub'=>'Local, licensed, and seriously careful with your stuff.'
  ], $atts);
  // child items via content: Box Title|Box text||...
  $items=[]; foreach(explode('||', trim($content)) as $pair){ $p = array_map('trim', explode('|',$pair,2)); if(!empty($p[0])) $items[]=$p; }
  ob_start(); ?>
  <section class="section section--surface">
    <div class="l-container">
      <div class="featurebox">
        <h2 class="featurebox__title"><?php echo esc_html($a['title']); ?></h2>
        <p class="featurebox__sub"><?php echo esc_html($a['sub']); ?></p>
        <div class="featurebox__grid">
          <?php foreach(array_slice($items,0,3) as $it): ?>
            <article class="card">
              <h3 class="card__title"><?php echo esc_html($it[0]); ?></h3>
              <p class="card__body"><?php echo !empty($it[1])? wp_kses_post($it[1]) : ''; ?></p>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
  <?php return ob_get_clean();
});

/* 4) About: hero as content box (no big image) */
add_shortcode('bd_about_content_hero', function($atts){
  $a = shortcode_atts([
    'eyebrow'=>'Bird Dog’s Delivery & Moving, OKC',
    'h1'=>'About Our Team',
    'p'=>'Family-owned, licensed & insured. Transparent pricing and careful crews.',
    'cta_label'=>'Get My Estimate','cta_href'=>'#estimate'
  ], $atts);
  ob_start(); ?>
  <section class="section section--light">
    <div class="l-container contenthero">
      <div>
        <div class="contenthero__kicker"><?php echo esc_html($a['eyebrow']); ?></div>
        <h1 style="font:800 clamp(2rem,3vw + 1rem,3rem)/1.1 var(--font-sans); margin:.25rem 0 var(--space-sm); color:var(--color-text)"><?php echo esc_html($a['h1']); ?></h1>
        <p><?php echo esc_html($a['p']); ?></p>
        <div style="display:flex;gap:.75rem;flex-wrap:wrap">
          <a class="c-button c-button--primary" href="<?php echo esc_url($a['cta_href']); ?>"><?php echo esc_html($a['cta_label']); ?></a>
          <a class="c-button c-button--secondary" href="tel:+14055354554">Call (405) 535-4554</a>
        </div>
      </div>
      <aside class="contenthero__aside">
        <div class="shortcode-card" id="estimate"><?php echo do_shortcode('[moving_estimator mode="quick" layout="compact"]'); ?></div>
        <p class="card__body" style="margin-top:.5rem">Avg. response in 2 hours.</p>
      </aside>
    </div>
  </section>
  <?php return ob_get_clean();
});

/* 5) Trust section (dark) + benefits bullets */
add_shortcode('bd_trust_benefits_dark', function($atts, $content=''){
  $a = shortcode_atts(['title'=>'Trusted by OKC movers like you'], $atts);
  // content lines become bullets separated by ||
  $bullets = array_filter(array_map('trim', explode('||',$content)));
  ob_start(); ?>
  <section class="band--dark" aria-label="Trust & benefits">
    <div class="l-container">
      <h2 style="color:#fff"><?php echo esc_html($a['title']); ?></h2>
      <div class="benefits">
        <?php foreach($bullets as $b): ?>
          <div class="card" style="background:rgba(255,255,255,.05);border-color:rgba(255,255,255,.18);color:#fff">
            <div class="bullet"><div><?php echo esc_html($b); ?></div></div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php return ob_get_clean();
});

/* 5.1) What We Move (dark) + list with bullets */
add_shortcode('bd_what_we_move_dark', function($atts, $content=''){
  $a = shortcode_atts(['title'=>'What We Move'], $atts);
  // content lines become bullets separated by ||
  $bullets = array_filter(array_map('trim', explode('||',$content)));
  ob_start(); ?>
  <section class="band--dark" aria-label="What We Move in OKC">
    <div class="l-container">
      <h2><?php echo esc_html($a['title']); ?></h2>
      <div class="benefits">
        <?php foreach($bullets as $b): ?>
          <div class="card">
            <div class="bullet"><?php echo esc_html($b); ?></div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php return ob_get_clean();
});

/* 6) Split wrapper (great spacing helper around any two blocks) */
add_shortcode('bd_split', function($atts, $content=''){
  // Usage: [bd_split]LEFT_HTML||RIGHT_HTML[/bd_split]
  $parts = array_map('trim', explode('||', $content, 2));
  $left = $parts[0] ?? ''; $right = $parts[1] ?? '';
  ob_start(); ?>
  <section class="section section--light">
    <div class="l-container split">
      <div><?php echo do_shortcode($left); ?></div>
      <aside><?php echo do_shortcode($right); ?></aside>
    </div>
  </section>
  <?php return ob_get_clean();
});
/* ===========================================================
 * Bird Dog  –  Card Components as Shortcodes
 * =========================================================== */

/**   Floating content box */
add_shortcode('bd_cards_1', function ($atts) {
  $a = shortcode_atts([
    'title' => 'Moving Services That Fit Your Needs',
    'subtitle' => 'Professional packing, loading, and transport services.',
    'list' => 'Careful handling of fragile items||Full packing services available||Professional moving equipment',
    'cta1_text' => 'Get Free Quote',
    'cta1_url' => '#estimate',
    'cta2_text' => 'See All Services',
    'cta2_url' => '/services/'
  ], $atts);
  $items = array_filter(array_map('trim', explode('||', $a['list'])));
  ob_start(); ?>
<div class="cards" style="grid-template-columns:1fr">
  <article class="card card--floating">
    <h3><?php echo esc_html($a['title']); ?></h3>
    <p class="sub"><?php echo esc_html($a['subtitle']); ?></p>
    <ul>
      <?php foreach($items as $item): ?>
        <li><?php echo esc_html($item); ?></li>
      <?php endforeach; ?>
    </ul>
    <div class="cta-row">
      <a class="c-button c-button--primary" href="<?php echo esc_url($a['cta1_url']); ?>"><?php echo esc_html($a['cta1_text']); ?></a>
      <a class="c-button c-button--secondary" href="<?php echo esc_url($a['cta2_url']); ?>"><?php echo esc_html($a['cta2_text']); ?></a>
    </div>
  </article>
</div>
<?php
return ob_get_clean();
});

/**   Price + Checklist + Commercial trio */
add_shortcode('bd_cards_2', function ($atts) {
  $a = shortcode_atts([
    'p1_ribbon' => 'Popular',
    'p1_overline' => 'Residential',
    'p1_title' => 'Local Moves',
    'p1_price' => 'Starting at $137.50/hr',
    'p1_list' => '2-man crew included||26ft truck with liftgate||Furniture protection',
    'p1_disclaimer' => 'Pricing based on 2-hour minimum.',
    'p1_cta_text' => 'Get Instant Quote',
    'p1_cta_url' => '#estimate',
    'p2_title' => 'Packing Services',
    'p2_subtitle' => 'Professional packing for fragile items.',
    'p2_list' => 'All packing materials included||Careful wrapping & boxing||Furniture disassembly',
    'p2_cta_text' => 'View Services',
    'p2_cta_url' => '/services/',
    'p3_overline' => 'Commercial',
    'p3_title' => 'Office Moves',
    'p3_price' => 'Custom Quotes',
    'p3_list' => 'After-hours available||Specialized equipment||Minimal downtime',
    'p3_cta_text' => 'Request Bid',
    'p3_cta_url' => '/contact/'
  ], $atts);
  $p1_items = array_filter(array_map('trim', explode('||', $a['p1_list'])));
  $p2_items = array_filter(array_map('trim', explode('||', $a['p2_list'])));
  $p3_items = array_filter(array_map('trim', explode('||', $a['p3_list'])));
  ob_start(); ?>
<div class="cards">
  <article class="card card--price">
    <?php if($a['p1_ribbon']): ?><span class="ribbon"><?php echo esc_html($a['p1_ribbon']); ?></span><?php endif; ?>
    <div class="overline"><?php echo esc_html($a['p1_overline']); ?></div>
    <h3><?php echo esc_html($a['p1_title']); ?></h3>
    <div class="price"><?php echo esc_html($a['p1_price']); ?></div>
    <ul>
      <?php foreach($p1_items as $item): ?>
        <li><?php echo esc_html($item); ?></li>
      <?php endforeach; ?>
    </ul>
    <p class="disclaimer"><?php echo esc_html($a['p1_disclaimer']); ?></p>
    <div class="cta-row"><a class="c-button c-button--primary" href="<?php echo esc_url($a['p1_cta_url']); ?>"><?php echo esc_html($a['p1_cta_text']); ?></a></div>
  </article>

  <article class="card card--checklist card--outline">
    <h3><?php echo esc_html($a['p2_title']); ?></h3>
    <p class="sub"><?php echo esc_html($a['p2_subtitle']); ?></p>
    <ul>
      <?php foreach($p2_items as $item): ?>
        <li><?php echo esc_html($item); ?></li>
      <?php endforeach; ?>
    </ul>
    <div class="cta-row"><a class="c-button c-button--secondary" href="<?php echo esc_url($a['p2_cta_url']); ?>"><?php echo esc_html($a['p2_cta_text']); ?></a></div>
  </article>

  <article class="card card--price">
    <div class="overline"><?php echo esc_html($a['p3_overline']); ?></div>
    <h3><?php echo esc_html($a['p3_title']); ?></h3>
    <div class="price"><?php echo esc_html($a['p3_price']); ?></div>
    <ul>
      <?php foreach($p3_items as $item): ?>
        <li><?php echo esc_html($item); ?></li>
      <?php endforeach; ?>
    </ul>
    <div class="cta-row"><a class="c-button c-button--secondary" href="<?php echo esc_url($a['p3_cta_url']); ?>"><?php echo esc_html($a['p3_cta_text']); ?></a></div>
  </article>
</div>
<?php
return ob_get_clean();
});

/**  Split feature + Stat + Testimonial */
add_shortcode('bd_cards_3', function ($atts) {
  $a = shortcode_atts([
    'feature_img' => '',
    'feature_title' => 'Specialty Moving Services',
    'feature_text' => 'Piano moves, artwork, antiques, and more.',
    'feature_cta_text' => 'Learn More',
    'feature_cta_url' => '/services/',
    'stat_num' => '98%',
    'stat_title' => 'On-Time Arrivals',
    'stat_label' => 'Based on last 12 months',
    'testimonial_quote' => 'These guys are amazing! Professional, careful, and on time. Highly recommend!',
    'testimonial_author' => 'Sarah M. • ★★★★★ (Google)'
  ], $atts);
  ob_start(); ?>
<div class="cards">
  <article class="card card--split">
    <?php if($a['feature_img']): ?>
      <figure class="media"><img src="<?php echo esc_url($a['feature_img']); ?>" alt="<?php echo esc_attr($a['feature_title']); ?>"/></figure>
    <?php endif; ?>
    <div>
      <h3><?php echo esc_html($a['feature_title']); ?></h3>
      <p class="sub"><?php echo esc_html($a['feature_text']); ?></p>
      <a class="c-button c-button--secondary" href="<?php echo esc_url($a['feature_cta_url']); ?>"><?php echo esc_html($a['feature_cta_text']); ?></a>
    </div>
  </article>

  <article class="card card--stat">
    <div class="num"><?php echo esc_html($a['stat_num']); ?></div>
    <div><h3><?php echo esc_html($a['stat_title']); ?></h3><div class="label"><?php echo esc_html($a['stat_label']); ?></div></div>
  </article>

  <article class="card card--testimonial">
    <div class="quote-mark">"</div>
    <p><?php echo esc_html($a['testimonial_quote']); ?></p>
    <div class="who">— <?php echo esc_html($a['testimonial_author']); ?></div>
  </article>
</div>
<?php
return ob_get_clean();
});

/**   Promo strip */
add_shortcode('bd_cards_4', function ($atts) {
  $a = shortcode_atts([
    'title' => 'Special Moving Promotion',
    'subtitle' => 'Limited time offer — Book now and save',
    'cta_text' => 'Book Now',
    'cta_url' => '/contact/'
  ], $atts);
  ob_start(); ?>
<div class="cards" style="grid-template-columns:1fr">
  <article class="card card--promo">
    <div>
      <strong><?php echo esc_html($a['title']); ?></strong><br>
      <span class="sub"><?php echo esc_html($a['subtitle']); ?></span>
    </div>
    <a class="c-button c-button--primary" href="<?php echo esc_url($a['cta_url']); ?>"><?php echo esc_html($a['cta_text']); ?></a>
  </article>
</div>
<?php
return ob_get_clean();
});
/* ---------- Modern header ---------- */
add_shortcode('bd_modern_header', function(){
  ob_start(); ?>
  <header class="modern-header">
    <div class="modern-header__container l-container">
      <a class="modern-header__logo" href="<?php echo esc_url(home_url('/')); ?>">
        <span aria-hidden="true"></span> Bird Dog's Delivery &amp; Moving Service
      </a>
      <nav aria-label="Primary" class="modern-header__nav">
        <ul class="modern-header__menu">
          <li><a href="<?php echo esc_url(home_url('/services/')); ?>">Services</a></li>
          <li><a href="<?php echo esc_url(home_url('/about/')); ?>">About</a></li>
          <li><a href="<?php echo esc_url(home_url('/free-estimates-pricing/')); ?>">Pricing</a></li>
          <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a></li>
        </ul>
      </nav>
      <div class="modern-header__actions">
        <a href="tel:+14055354554" class="modern-header__phone">(405) 535-4554</a>
        <a href="#estimate" class="c-button c-button--primary">Get Free Quote</a>
      </div>
    </div>
	<!-- Fonts: no FOUT + faster paint -->
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preload" as="style" href="/assets/fonts/your-font.css">
<link rel="stylesheet" href="/assets/fonts/your-font.css" media="print" onload="this.media='all'">
<noscript><link rel="stylesheet" href="/assets/fonts/your-font.css"></noscript>

<!-- Preload hero image to kill the last flash -->
<link rel="preload" as="image" href="<?php echo esc_url( get_stylesheet_directory_uri().'/assets/img/bird-dog-moving-van-branded.jpg' ); ?>">

  </header>
  <?php return ob_get_clean();
});

/* ---------- Modern hero ---------- */
add_shortcode('bd_modern_hero', function($atts){
  $a = shortcode_atts([
    'badge' => '🏆 Oklahoma City #1 Rated Movers',
    'title' => 'Professional Moving Services You Can Trust',
    'subtitle' => 'Expert movers, transparent pricing, and careful handling for homes and businesses.',
    'cta1_label' => 'Get Free Quote',
    'cta1_href' => '#estimate',
    'cta2_label' => 'Call Now',
    'cta2_href' => 'tel:+14055354554',
    'feature1_icon' => '⚡',
    'feature1_title' => 'Fast Service',
    'feature1_text' => 'Same-day moves available',
    'feature2_icon' => '🛡️',
    'feature2_title' => 'Licensed & Insured',
    'feature2_text' => 'Full protection coverage',
    'feature3_icon' => '⭐',
    'feature3_title' => '5-Star Rated',
    'feature3_text' => 'Trusted by OKC families'
  ], $atts);
  ob_start(); ?>
  <section class="modern-hero">
    <div class="l-container modern-hero__container">
      <div class="modern-hero__content">
        <div class="modern-hero__badge"><?php echo esc_html($a['badge']); ?></div>
        <h1 class="modern-hero__title"><?php echo esc_html($a['title']); ?></h1>
        <p class="modern-hero__lead"><?php echo esc_html($a['subtitle']); ?></p>
        <div class="modern-hero__actions">
          <a class="c-button c-button--primary" href="<?php echo esc_url($a['cta1_href']); ?>"><?php echo esc_html($a['cta1_label']); ?></a>
          <a class="c-button c-button--secondary" href="<?php echo esc_url($a['cta2_href']); ?>"><?php echo esc_html($a['cta2_label']); ?></a>
        </div>
      </div>
      <div class="modern-hero__features grid-3">
        <div class="c-card modern-hero__feature">
          <div class="modern-hero__feature-icon"><?php echo $a['feature1_icon']; ?></div>
          <strong><?php echo esc_html($a['feature1_title']); ?></strong>
          <p><?php echo esc_html($a['feature1_text']); ?></p>
        </div>
        <div class="c-card modern-hero__feature">
          <div class="modern-hero__feature-icon"><?php echo $a['feature2_icon']; ?></div>
          <strong><?php echo esc_html($a['feature2_title']); ?></strong>
          <p><?php echo esc_html($a['feature2_text']); ?></p>
        </div>
        <div class="c-card modern-hero__feature">
          <div class="modern-hero__feature-icon"><?php echo $a['feature3_icon']; ?></div>
          <strong><?php echo esc_html($a['feature3_title']); ?></strong>
          <p><?php echo esc_html($a['feature3_text']); ?></p>
        </div>
      </div>
    </div>
  </section>
  <?php return ob_get_clean();
});

/* ---------- Modern footer ---------- */
add_shortcode('bd_modern_footer', function(){
  ob_start(); ?>
  <footer class="modern-footer">
    <div class="l-container modern-footer__container">
      <div class="modern-footer__info">
        <div class="modern-footer__brand">
          <strong>Bird Dog Moving</strong><br />
          <small>Professional moving & delivery across Oklahoma City.</small>
        </div>
        <div class="modern-footer__contact">
          <div><strong>Phone:</strong> (405) 535-4554</div>
          <div><strong>Email:</strong> birddogmoving@gmail.com</div>
        </div>
      </div>
      <div class="modern-footer__legal">
        © <?php echo date('Y'); ?> Bird Dog Moving. Licensed & Insured.
      </div>
    </div>
  </footer>
  <?php return ob_get_clean();
});


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


