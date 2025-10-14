<?php
/*
Template Name: Reviews – Full Width
*/

get_header(); ?>

<main class="l-section">
    <div class="l-container">
        <!-- Hero Section -->
        <section class="reviews-hero">
            <h1 class="reviews-hero__title">Customer Reviews</h1>
            <p class="reviews-hero__lead">Real feedback from moves across Oklahoma City</p>
        </section>

        <!-- Reviews Grid -->
        <section class="reviews-grid l-section">
            <?php
            $reviewsArray = [
                [
                    'quote' => BUSINESS_NAME . ' made our move stress-free. Professional crew, careful with our belongings, and finished ahead of schedule.',
                    'name' => 'Sarah M.',
                    'area' => 'Oklahoma City'
                ],
                [
                    'quote' => 'Excellent service from start to finish. They packed everything carefully and nothing was damaged during the move.',
                    'name' => 'Mike R.',
                    'area' => 'Edmond'
                ],
                [
                    'quote' => 'Great experience! The team was punctual, professional, and handled our fragile items with care.',
                    'name' => 'Jennifer L.',
                    'area' => 'Norman'
                ],
                [
                    'quote' => 'Highly recommend Bird Dog Delivery & Moving. Fair pricing, reliable service, and friendly staff.',
                    'name' => 'David K.',
                    'area' => 'Yukon'
                ],
                [
                    'quote' => 'They made our office relocation seamless. Professional, efficient, and great communication throughout.',
                    'name' => 'Lisa W.',
                    'area' => 'Mustang'
                ],
                [
                    'quote' => 'Outstanding moving service! They were careful with our antiques and worked quickly to minimize downtime.',
                    'name' => 'Tom H.',
                    'area' => 'Moore'
                ],
                [
                    'quote' => 'Best moving company we\'ve used. Honest pricing, no hidden fees, and everything arrived in perfect condition.',
                    'name' => 'Amanda S.',
                    'area' => 'Oklahoma City'
                ],
                [
                    'quote' => 'Professional crew, fair rates, and excellent customer service. Will definitely use them again.',
                    'name' => 'Robert T.',
                    'area' => 'Edmond'
                ],
                [
                    'quote' => 'They handled our cross-town move perfectly. Great communication and everything went smoothly.',
                    'name' => 'Maria G.',
                    'area' => 'Norman'
                ]
            ];
            ?>
            
            <div class="reviews-grid__container u-grid u-grid--3">
                <?php foreach ($reviewsArray as $review): ?>
                <div class="c-card reviews-grid__card" data-reveal>
                    <blockquote class="reviews-grid__quote">
                        "<?php echo esc_html($review['quote']); ?>"
                    </blockquote>
                    <figcaption class="reviews-grid__author">
                        <strong><?php echo esc_html($review['name']); ?></strong><br>
                        <span class="reviews-grid__area"><?php echo esc_html($review['area']); ?></span>
                    </figcaption>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- External Reviews Links -->
        <section class="reviews-external l-section">
            <div class="reviews-external__content">
                <h2 class="reviews-external__title">Read More Reviews</h2>
                <p class="reviews-external__subtitle">See what our customers are saying on these platforms</p>
                <div class="reviews-external__links">
                    <a href="#" class="c-button c-button--ghost" target="_blank" rel="noopener">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" style="margin-right: 0.5rem;">
                            <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                            <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                            <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                            <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                        </svg>
                        Google Reviews
                    </a>
                    <a href="#" class="c-button c-button--ghost" target="_blank" rel="noopener">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" style="margin-right: 0.5rem;">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                        Facebook Reviews
                    </a>
                </div>
            </div>
        </section>
    </div>
</main>

<?php
// Schema slot for future implementation
if ( function_exists('sr_print_reviews_schema') ) { 
    sr_print_reviews_schema($reviewsArray); 
}
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <section class="l-section">
    <div class="l-container prose">
      <?php the_content(); ?>
    </div>
  </section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
