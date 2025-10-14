<?php
/*
Template Name: Service Areas Hub
*/

get_header(); ?>

<main class="l-section">
    <div class="l-container">
        <!-- Hero/Intro Section -->
        <section class="areas-hero">
            <h1 class="areas-hero__title">Service Areas</h1>
            <p class="areas-hero__lead">Professional moving services throughout the Oklahoma City metro area</p>
        </section>

        <!-- Search/Filter -->
        <section class="areas-filter">
            <label for="area-search" class="sr-only">Search service areas</label>
            <input type="text" id="area-search" class="filter" placeholder="Search cities..." aria-label="Search service areas">
        </section>

        <!-- Areas Grid -->
        <section class="areas-grid l-section">
            <?php
            $areasMap = [
                'oklahoma-city' => [
                    'name' => 'Oklahoma City',
                    'blurb' => 'From Midtown to the suburbs, same-day crews available.',
                    'neighborhoods' => ['Midtown', 'Paseo', 'Plaza District', 'Bricktown'],
                    'top_services' => ['local-moving', 'labor-only', 'furniture-delivery']
                ],
                'edmond' => [
                    'name' => 'Edmond',
                    'blurb' => 'Reliable moving services for Edmond homes and businesses.',
                    'neighborhoods' => ['Downtown Edmond', 'Oak Tree', 'Coffee Creek', 'Kickingbird'],
                    'top_services' => ['local-moving', 'packing-services', 'furniture-delivery']
                ],
                'norman' => [
                    'name' => 'Norman',
                    'blurb' => 'Expert movers serving Norman and surrounding communities.',
                    'neighborhoods' => ['Campus Corner', 'Brookhaven', 'Westside', 'Eastside'],
                    'top_services' => ['labor-only', 'local-moving', 'item-haul-away']
                ],
                'yukon' => [
                    'name' => 'Yukon',
                    'blurb' => 'Professional moving services for Yukon residents.',
                    'neighborhoods' => ['Downtown Yukon', 'Richmond Hills', 'Parkland'],
                    'top_services' => ['local-moving', 'furniture-delivery', 'packing-services']
                ],
                'mustang' => [
                    'name' => 'Mustang',
                    'blurb' => 'Trusted movers serving Mustang and nearby areas.',
                    'neighborhoods' => ['Mustang Valley', 'Wildhorse', 'Mustang Creek'],
                    'top_services' => ['labor-only', 'local-moving', 'item-haul-away']
                ],
                'moore' => [
                    'name' => 'Moore',
                    'blurb' => 'Reliable moving services throughout Moore.',
                    'neighborhoods' => ['Central Moore', 'East Moore', 'West Moore'],
                    'top_services' => ['local-moving', 'packing-services', 'furniture-delivery']
                ]
            ];
            ?>
            
            <div class="area-cards">
                <?php foreach ($areasMap as $slug => $area): ?>
                <div class="c-card area-card" data-city="<?php echo esc_attr(strtolower($area['name'])); ?>" data-reveal>
                    <h2 class="area-card__title"><?php echo esc_html($area['name']); ?></h2>
                    <p class="area-card__blurb"><?php echo esc_html($area['blurb']); ?></p>
                    <a href="<?php echo esc_url(home_url('/service-areas/' . $slug . '/')); ?>" class="area-card__link">View Area</a>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <section class="l-section">
    <div class="l-container prose">
      <?php the_content(); ?>
    </div>
  </section>
<?php endwhile; endif; ?>

		
        <!-- CTA Band -->
        <section class="cta-band l-section">
            <div class="cta-band__content">
                <h2 class="cta-band__title">Need help today?</h2>
                <p class="cta-band__subtitle">Contact Bird Dog Delivery & Moving for fast, reliable moving services</p>
            <div class="cta-band__actions">
                <a href="<?php echo esc_url(home_url('/contact/#estimate')); ?>" class="c-button c-button--primary" data-reveal>Get Free Estimate</a>
                <a href="<?php echo BUSINESS_PHONE_LINK; ?>" class="c-button c-button--ghost" data-reveal>Call <?php echo BUSINESS_PHONE; ?></a>
            </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>
