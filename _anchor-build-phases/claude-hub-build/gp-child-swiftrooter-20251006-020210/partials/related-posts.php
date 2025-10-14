<?php
/**
 * Partial: Related Posts
 *
 * Displays 3-6 related posts from the same primary category
 * Excludes the current post
 * Safe for reuse in any single post template
 */

// Get current post ID and primary category
$current_post_id = get_the_ID();
$categories = get_the_category();

if ( empty($categories) ) {
  return; // No categories, no related posts
}

$primary_category_id = $categories[0]->term_id;

// Query related posts
$related_query = new WP_Query([
  'post_type'      => 'post',
  'post_status'    => 'publish',
  'category__in'   => [$primary_category_id],
  'post__not_in'   => [$current_post_id],
  'posts_per_page' => 4, // Show 4 related posts
  'orderby'        => 'rand', // Randomize for variety
]);

if ( ! $related_query->have_posts() ) {
  return; // No related posts found
}
?>

<aside class="related-posts l-section section--light" aria-labelledby="related-posts-heading">
  <div class="l-container">

    <header class="related-posts__header">
      <h2 id="related-posts-heading" class="related-posts__title">Related Articles</h2>
      <p class="related-posts__subtitle">More helpful content from <?php echo esc_html( $categories[0]->name ); ?></p>
    </header>

    <div class="related-posts__grid">

      <?php while ( $related_query->have_posts() ) : $related_query->the_post(); ?>

        <article class="related-post-card">

          <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>" class="related-post-card__image" aria-hidden="true" tabindex="-1">
              <?php the_post_thumbnail('medium', ['class' => 'related-post-card__thumbnail']); ?>
            </a>
          <?php endif; ?>

          <div class="related-post-card__content">

            <h3 class="related-post-card__title">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>

            <div class="related-post-card__meta">
              <time datetime="<?php echo esc_attr( get_the_date('c') ); ?>">
                <?php echo esc_html( get_the_date() ); ?>
              </time>
            </div>

            <div class="related-post-card__excerpt">
              <?php echo wp_trim_words( get_the_excerpt(), 15, '...' ); ?>
            </div>

          </div>

        </article>

      <?php endwhile; ?>

    </div>

  </div>
</aside>

<?php
// Restore original post data
wp_reset_postdata();
?>
