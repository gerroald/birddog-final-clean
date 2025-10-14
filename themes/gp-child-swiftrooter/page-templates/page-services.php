<?php
/*
Template Name: Services Hub
*/

get_header(); ?>

<!-- Breadcrumb -->
<nav aria-label="Breadcrumb" class="breadcrumb">
    <div class="l-container">
        <ol style="display: flex; gap: var(--space-xs); list-style: none; padding: 0; margin: 0;">
            <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
            <li aria-hidden="true">»</li>
            <li>Services</li>
        </ol>
    </div>
</nav>

<!-- Intro Section -->
<section class="services-intro l-section">
    <div class="l-container">
        <div class="services-intro__content">
            <h1 class="services-intro__title">Moving Services in Oklahoma City</h1>
            <p class="services-intro__lead">Professional moving solutions for your home and business. From local moves to labor-only services, Bird Dog Delivery & Moving delivers reliable service you can trust.</p>
        </div>
    </div>
</section>

<!-- Services Grid -->
<section class="services-grid l-section">
    <div class="l-container">
        <?php
        $services = [
            ['slug'=>'local-moving','title'=>'Local Moving','desc'=>'By-the-hour crews for house, apartment, and office moves within the metro.','icon'=>'truck.svg'],
            ['slug'=>'labor-only','title'=>'Labor-Only Loading/Unloading','desc'=>'You provide the truck or pod—we load, unload, and stage safely.','icon'=>'dolly.svg'],
            ['slug'=>'furniture-delivery','title'=>'Furniture Delivery','desc'=>'Store-to-home or room-to-room delivery with careful placement.','icon'=>'couch.svg'],
            ['slug'=>'packing-services','title'=>'Packing & Supplies','desc'=>'Full or partial packing, boxes, wrap, and labels.','icon'=>'boxes.svg'],
            ['slug'=>'item-haul-away','title'=>'Single-Item Haul-Away','desc'=>'Couches, mattresses, appliances—quick pickup and disposal.','icon'=>'recycle.svg']
        ];
        ?>
        
        <div class="services-grid__container u-grid u-grid--3">
            <?php foreach ($services as $service): ?>
            <div class="c-card services-grid__card" data-reveal>
                <div class="services-grid__icon">
                    <?php 
                    $icon_path = get_stylesheet_directory_uri() . '/assets/icons/' . $service['icon'];
                    ?>
                    <img src="<?php echo esc_url($icon_path); ?>" alt="<?php echo esc_attr($service['title']); ?> icon" width="28" height="28">
                </div>
                <h2 class="services-grid__title"><?php echo esc_html($service['title']); ?></h2>
                <p class="services-grid__description"><?php echo esc_html($service['desc']); ?></p>
                <a href="<?php echo esc_url(home_url('/services/' . $service['slug'] . '/')); ?>" class="services-grid__link">View Service</a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Trust Logos Section -->
<?php /*
<section class="trust l-section">
    <div class="l-container">
        <div class="trust__logos">
            <div class="trust__item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-better-business-bureau.svg" alt="Better Business Bureau" width="120" height="60" data-reveal>
            </div>
            <div class="trust__item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-angie-list.svg" alt="Angie's List" width="120" height="60" data-reveal>
            </div>
            <div class="trust__item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-homeadvisor.svg" alt="HomeAdvisor" width="120" height="60" data-reveal>
            </div>
            <div class="trust__item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-google.svg" alt="Google Reviews" width="120" height="60" data-reveal>
            </div>
        </div>
        <p class="trust__caption">Licensed & insured • Same-day crews • Proudly serving Oklahoma City</p>
    </div>
</section>
*/ ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <section class="l-section">
    <div class="l-container prose">
      <?php the_content(); ?>
    </div>
  </section>
<?php endwhile; endif; ?>


<!-- CTA Band -->
<section class="cta-band l-section">
    <div class="l-container">
        <div class="cta-band__content">
            <h2 class="cta-band__title">Need help today?</h2>
            <p class="cta-band__subtitle">Contact Bird Dog Delivery & Moving for fast, reliable moving services in Oklahoma City</p>
            <div class="cta-band__actions">
                <a href="<?php echo esc_url(home_url('/contact/#estimate')); ?>" class="c-button c-button--primary" data-reveal>Get Free Estimate</a>
                <a href="<?php echo BUSINESS_PHONE_LINK; ?>" class="c-button c-button--ghost" data-reveal>Call <?php echo BUSINESS_PHONE; ?></a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
