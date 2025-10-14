<?php
// Child theme fallback for single Location + JSON-LD
get_header(); ?>
<main id="site-content" class="wp-site-blocks">
  <div class="wp-block-group" style="max-width:1100px;margin:0 auto;padding:24px">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>

      <?php
      // LocalBusiness JSON-LD
      $rating = get_post_meta(get_the_ID(),'rating', true) ?: '4.9';
      $moves  = get_post_meta(get_the_ID(),'moves_completed', true) ?: '100';
      $zips   = get_post_meta(get_the_ID(),'zips', true);
      $img    = get_the_post_thumbnail_url(get_the_ID(), 'large') ?: '';
      $data = [
        '@context' => 'https://schema.org',
        '@type'    => 'LocalBusiness',
        'name'     => get_the_title() . ' – Bird Dog Moving',
        'image'    => $img,
        'url'      => get_permalink(),
        'telephone'=> '(405) 535-4554',
        'areaServed' => $zips,
        'aggregateRating' => [
          '@type' => 'AggregateRating',
          'ratingValue' => $rating,
          'reviewCount' => $moves
        ]
      ];
      ?>
      <script type="application/ld+json"><?php echo wp_json_encode($data, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE); ?></script>

    <?php endwhile; else : ?>
      <p>Location not found.</p>
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>
