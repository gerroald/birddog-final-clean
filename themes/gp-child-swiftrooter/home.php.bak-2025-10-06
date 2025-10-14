<?php
/**
 * Template: Blog Index (Canonical)
 * Route: /blog/ (set in Settings → Reading → Posts page)
 *
 * OWNER INSTRUCTIONS:
 * 1. Go to Settings → Reading
 * 2. Set "Posts page" to a page titled "Blog" (or any name)
 * 3. This template will automatically display at /blog/
 * 4. Uses main WordPress query (no custom filtering)
 * 5. Shows all posts in reverse chronological order
 * 6. Pagination works automatically with /blog/page/2/ etc.
 */

get_header(); ?>

<main id="primary" class="site-main blog-index l-section">
  <div class="l-container">

    <?php
    // Get the Posts page title and optional intro content
    $posts_page_id = (int) get_option('page_for_posts');
    if ( $posts_page_id ) : ?>
      <header class="archive-header">
        <h1 class="archive-title"><?php echo esc_html( get_the_title( $posts_page_id ) ); ?></h1>
        <?php
        $intro = get_post_field('post_content', $posts_page_id);
        if ( $intro ) {
          echo '<div class="archive-intro prose">' . wp_kses_post( apply_filters('the_content', $intro) ) . '</div>';
        }
        ?>
      </header>
    <?php endif; ?>

    <?php if ( have_posts() ) : ?>

      <div class="posts-grid">
        <?php while ( have_posts() ) : the_post(); ?>

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
      // Accessible pagination
      the_posts_pagination([
        'mid_size'  => 2,
        'prev_text' => '← Previous',
        'next_text' => 'Next →',
        'before_page_number' => '<span class="sr-only">Page </span>',
        'aria_label' => 'Blog posts navigation',
      ]);
      ?>

    <?php else : ?>

      <div class="no-posts">
        <p><?php esc_html_e( 'No posts found. Check back soon!', 'gp-child-swiftrooter' ); ?></p>
      </div>

    <?php endif; ?>

  </div>
</main>

<?php get_footer(); ?>
