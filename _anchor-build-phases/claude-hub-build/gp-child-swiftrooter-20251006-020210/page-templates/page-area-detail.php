<?php
/*
Template Name: Area Detail
*/

// Determine slug from current page
$slug = get_post_field('post_name', get_post());
if (empty($slug)) {
    $slug = 'oklahoma-city'; // fallback
}

$areasMap = [
    'oklahoma-city' => [
        'name' => 'Oklahoma City',
        'blurb' => 'From Midtown to the suburbs, same-day crews available.',
        'neighborhoods' => ['Midtown', 'Paseo', 'Plaza District', 'Bricktown', 'Deep Deuce', 'Automobile Alley', 'Film Row'],
        'top_services' => ['local-moving', 'labor-only', 'furniture-delivery'],
        'testimonials' => [
            ['quote' => 'Fast and professional service in Midtown.', 'author' => 'Sarah M.'],
            ['quote' => 'Great experience moving to Bricktown.', 'author' => 'Mike R.'],
            ['quote' => 'They handled our office move perfectly.', 'author' => 'Jennifer L.']
        ]
    ],
    'edmond' => [
        'name' => 'Edmond',
        'blurb' => 'Reliable moving services for Edmond homes and businesses.',
        'neighborhoods' => ['Downtown Edmond', 'Oak Tree', 'Coffee Creek', 'Kickingbird', 'Fairfax', 'Chisholm Creek'],
        'top_services' => ['local-moving', 'packing-services', 'furniture-delivery'],
        'testimonials' => [
            ['quote' => 'Excellent service in Edmond.', 'author' => 'David K.'],
            ['quote' => 'Professional crew in Oak Tree.', 'author' => 'Lisa W.'],
            ['quote' => 'Smooth move to Coffee Creek.', 'author' => 'Tom H.']
        ]
    ],
    'norman' => [
        'name' => 'Norman',
        'blurb' => 'Expert movers serving Norman and surrounding communities.',
        'neighborhoods' => ['Campus Corner', 'Brookhaven', 'Westside', 'Eastside', 'University North', 'Alameda'],
        'top_services' => ['labor-only', 'local-moving', 'item-haul-away'],
        'testimonials' => [
            ['quote' => 'Great service near OU campus.', 'author' => 'Amanda S.'],
            ['quote' => 'Professional movers in Norman.', 'author' => 'Robert T.'],
            ['quote' => 'Quick and efficient service.', 'author' => 'Maria G.']
        ]
    ],
    'yukon' => [
        'name' => 'Yukon',
        'blurb' => 'Professional moving services for Yukon residents.',
        'neighborhoods' => ['Downtown Yukon', 'Richmond Hills', 'Parkland', 'Surrey Hills'],
        'top_services' => ['local-moving', 'furniture-delivery', 'packing-services'],
        'testimonials' => [
            ['quote' => 'Reliable service in Yukon.', 'author' => 'John D.'],
            ['quote' => 'Great experience moving here.', 'author' => 'Susan B.'],
            ['quote' => 'Professional and friendly crew.', 'author' => 'Mark P.']
        ]
    ],
    'mustang' => [
        'name' => 'Mustang',
        'blurb' => 'Trusted movers serving Mustang and nearby areas.',
        'neighborhoods' => ['Mustang Valley', 'Wildhorse', 'Mustang Creek', 'Mustang Ridge'],
        'top_services' => ['labor-only', 'local-moving', 'item-haul-away'],
        'testimonials' => [
            ['quote' => 'Excellent service in Mustang.', 'author' => 'Karen L.'],
            ['quote' => 'Professional movers here.', 'author' => 'Steve M.'],
            ['quote' => 'Great experience overall.', 'author' => 'Nancy R.']
        ]
    ],
    'moore' => [
        'name' => 'Moore',
        'blurb' => 'Reliable moving services throughout Moore.',
        'neighborhoods' => ['Central Moore', 'East Moore', 'West Moore', 'Moore Station'],
        'top_services' => ['local-moving', 'packing-services', 'furniture-delivery'],
        'testimonials' => [
            ['quote' => 'Fast service in Moore.', 'author' => 'Chris W.'],
            ['quote' => 'Professional crew here.', 'author' => 'Diane F.'],
            ['quote' => 'Great moving experience.', 'author' => 'Kevin J.']
        ]
    ]
];

$area = $areasMap[$slug] ?? [
    'name' => get_the_title(),
    'blurb' => 'Professional moving services in your area.',
    'neighborhoods' => ['Various neighborhoods'],
    'top_services' => ['local-moving', 'labor-only', 'furniture-delivery'],
    'testimonials' => [
        ['quote' => 'Great service in our area.', 'author' => 'Local Customer'],
        ['quote' => 'Professional and reliable.', 'author' => 'Happy Client'],
        ['quote' => 'Excellent moving experience.', 'author' => 'Satisfied Customer']
    ]
]; // fallback to generic content

get_header(); ?>

<!-- Breadcrumb -->
<nav aria-label="Breadcrumb" class="breadcrumb">
    <div class="l-container">
        <ol style="display: flex; gap: var(--space-xs); list-style: none; padding: 0; margin: 0;">
            <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
            <li aria-hidden="true">»</li>
            <li><a href="<?php echo esc_url(home_url('/service-areas/')); ?>">Service Areas</a></li>
            <li aria-hidden="true">»</li>
            <li><?php echo esc_html($area['name']); ?></li>
        </ol>
    </div>
</nav>

<main class="l-section">
    <div class="l-container">
        <!-- Hero Section -->
        <section class="area-hero">
            <h1 class="area-hero__title">We Serve <?php echo esc_html($area['name']); ?> Daily</h1>
            <p class="area-hero__lead"><?php echo esc_html($area['blurb']); ?></p>
        </section>

        <!-- Neighborhoods List -->
        <section class="area-neighborhoods l-section">
            <h2 class="area-neighborhoods__title">Neighborhoods We Serve</h2>
            <ul class="area-neighborhoods__list">
                <?php foreach ($area['neighborhoods'] as $neighborhood): ?>
                <li data-reveal><?php echo esc_html($neighborhood); ?></li>
                <?php endforeach; ?>
            </ul>
        </section>

        <!-- Top Services -->
        <section class="area-services l-section">
            <h2 class="area-services__title">Top Services in <?php echo esc_html($area['name']); ?></h2>
            <div class="area-services__grid u-grid u-grid--3">
                <?php 
                $serviceNames = [
                    'local-moving' => 'Local Moving',
                    'labor-only' => 'Labor-Only Service',
                    'furniture-delivery' => 'Furniture Delivery',
                    'packing-services' => 'Packing & Supplies',
                    'item-haul-away' => 'Item Haul-Away'
                ];
                
                foreach ($area['top_services'] as $serviceSlug): 
                    $serviceName = $serviceNames[$serviceSlug] ?? ucwords(str_replace('-', ' ', $serviceSlug));
                ?>
                <div class="c-card area-services__card" data-reveal>
                    <h3 class="area-services__card-title"><?php echo esc_html($serviceName); ?></h3>
                    <p class="area-services__card-desc">Professional <?php echo esc_html(strtolower($serviceName)); ?> services in <?php echo esc_html($area['name']); ?>.</p>
                    <a href="<?php echo esc_url(home_url('/services/' . $serviceSlug . '/')); ?>" class="area-services__link">Learn More</a>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Local Testimonials -->
        <section class="area-testimonials l-section">
            <h2 class="area-testimonials__title">What <?php echo esc_html($area['name']); ?> Customers Say</h2>
            <div class="area-testimonials__grid u-grid u-grid--3">
                <?php foreach ($area['testimonials'] as $testimonial): ?>
                <div class="c-card area-testimonials__card" data-reveal>
                    <blockquote class="area-testimonials__quote">
                        "<?php echo esc_html($testimonial['quote']); ?>"
                    </blockquote>
                    <figcaption class="area-testimonials__author">
                        <strong><?php echo esc_html($testimonial['author']); ?></strong><br>
                        <span class="area-testimonials__location"><?php echo esc_html($area['name']); ?></span>
                    </figcaption>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Map Embed -->
        <section class="area-map l-section">
            <h2 class="area-map__title">Find Us in <?php echo esc_html($area['name']); ?></h2>
            <div class="map-embed media-tilt" data-reveal>
                <!-- Map embed placeholder - replace with actual map embed code -->
                <div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; color: var(--color-muted);">
                    Map of <?php echo esc_html($area['name']); ?>
                </div>
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
                <h2 class="cta-band__title">Ready to Move in <?php echo esc_html($area['name']); ?>?</h2>
                <p class="cta-band__subtitle">Contact Bird Dog Delivery & Moving for professional moving services</p>
            <div class="cta-band__actions">
                <a href="<?php echo esc_url(home_url('/contact/#estimate')); ?>" class="c-button c-button--primary" data-reveal>Get Free Estimate</a>
                <a href="<?php echo BUSINESS_PHONE_LINK; ?>" class="c-button c-button--secondary" data-reveal>Call <?php echo BUSINESS_PHONE; ?></a>
            </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>
