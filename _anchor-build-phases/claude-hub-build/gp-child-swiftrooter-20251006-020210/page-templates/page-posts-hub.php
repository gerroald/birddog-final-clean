<?php
/**
 * Template Name: Posts Hub (Custom Query)
 *
 * OWNER INSTRUCTIONS - HOW TO CREATE A TOPIC HUB:
 *
 * 1. Create a new Page (not Post)
 * 2. Title it with your topic (e.g., "Moving Tips", "Packing Guides", "Oklahoma City Moving")
 * 3. Add intro content in the page editor (appears as hero text)
 * 4. Select template: "Posts Hub (Custom Query)"
 * 5. OPTIONAL: If ACF is installed, configure these fields:
 *    - Hub Category: Enter category slug (e.g., "moving-tips")
 *    - Hub Tag: Enter tag slug (e.g., "okc")
 *    - Posts Per Page: Number of posts to show (default: 10)
 * 6. Publish the page
 * 7. Your hub will appear at /your-page-slug/
 * 8. Pagination will work at /your-page-slug/page/2/ etc.
 *
 * WITHOUT ACF: Shows 10 most recent posts (same as main blog)
 * WITH ACF: Filter by category, tag, or both
 *
 * EXAMPLES:
 * - /moving-tips/ (filter by "moving-tips" category)
 * - /okc-moving/ (filter by "okc" tag)
 * - /residential-moving/ (filter by "residential" category)
 */

get_header(); ?>

<main id="primary" class="site-main posts-hub l-section">
  <div class="l-container">

    <?php
    // Display page title and content as hub hero
    while ( have_posts() ) : the_post();
    ?>

      <header class="hub-header">
        <h1 class="hub-title"><?php the_title(); ?></h1>

        <?php if ( get_the_content() ) : ?>
          <div class="hub-intro prose">
            <?php the_content(); ?>
          </div>
        <?php endif; ?>

        <?php
        // Freshness indicator (page modified time)
        $modified = get_the_modified_time('U');
        $modified_date = get_the_modified_date();
        ?>
        <div class="hub-freshness" aria-label="Hub last updated">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z" fill="currentColor"/>
            <path d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z" fill="currentColor"/>
          </svg>
          <span>Updated <?php echo esc_html( $modified_date ); ?></span>
        </div>
      </header>

    <?php
    endwhile;

    // Reset post data before custom query
    wp_reset_postdata();

    // ===================================================================
    // CUSTOM QUERY - ACF Fields with Safe Defaults
    // ===================================================================

    $hub_args = [
      'post_type'      => 'post',
      'post_status'    => 'publish',
      'posts_per_page' => 10, // Default
      'paged'          => get_query_var('paged') ? get_query_var('paged') : 1,
    ];

    // Check if ACF is active and fields are set
    if ( function_exists('get_field') ) {

      // Category filter
      $hub_category = get_field('hub_category');
      if ( $hub_category ) {
        $hub_args['category_name'] = sanitize_text_field( $hub_category );
      }

      // Tag filter
      $hub_tag = get_field('hub_tag');
      if ( $hub_tag ) {
        $hub_args['tag'] = sanitize_text_field( $hub_tag );
      }

      // Posts per page
      $hub_ppp = get_field('hub_posts_per_page');
      if ( $hub_ppp && is_numeric($hub_ppp) ) {
        $hub_args['posts_per_page'] = (int) $hub_ppp;
      }

    }

    // Execute custom query
    $hub_query = new WP_Query( $hub_args );

    if ( $hub_query->have_posts() ) : ?>

      <div class="posts-grid">
        <?php while ( $hub_query->have_posts() ) : $hub_query->the_post(); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>

            <?php if ( has_post_thumbnail() ) : ?>
              <a href="<?php the_permalink(); ?>" class="post-card__image" aria-hidden="true" tabindex="-1">
                <?php the_post_thumbnail('medium_large', ['class' => 'post-card__thumbnail']); ?>
              </a>
            <?php endif; ?>

            <div class="post-card__content">

              <header class="post-card__header">
                <h2 class="post-card__title">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>

                <div class="post-card__meta">
                  <time datetime="<?php echo esc_attr( get_the_date('c') ); ?>">
                    <?php echo esc_html( get_the_date() ); ?>
                  </time>
                  <?php
                  $categories = get_the_category();
                  if ( $categories ) {
                    echo '<span class="post-card__category"> · ' . esc_html( $categories[0]->name ) . '</span>';
                  }
                  ?>
                </div>
              </header>

              <div class="post-card__excerpt">
                <?php the_excerpt(); ?>
              </div>

              <a href="<?php the_permalink(); ?>" class="post-card__link">
                Read more <span aria-hidden="true">→</span>
              </a>

            </div>

          </article>

        <?php endwhile; ?>
      </div>

      <?php
      // Clean pagination with page numbers
      $total_pages = $hub_query->max_num_pages;

      if ( $total_pages > 1 ) {
        $current_page = max( 1, get_query_var('paged') );

        echo '<nav class="pagination" aria-label="Posts navigation">';
        echo paginate_links([
          'base'      => get_pagenum_link(1) . '%_%',
          'format'    => 'page/%#%/',
          'current'   => $current_page,
          'total'     => $total_pages,
          'mid_size'  => 2,
          'prev_text' => '← Previous',
          'next_text' => 'Next →',
          'before_page_number' => '<span class="sr-only">Page </span>',
        ]);
        echo '</nav>';
      }
      ?>

    <?php else : ?>

      <div class="no-posts">
        <p><?php esc_html_e( 'No posts found in this hub. Check your category/tag settings or publish posts in this topic.', 'gp-child-swiftrooter' ); ?></p>
      </div>

    <?php endif;

    // Restore original post data
    wp_reset_postdata();
    ?>

  </div>
</main>

<?php get_footer(); ?>
