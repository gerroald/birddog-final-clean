<?php
/**
 * Single Post Template
 * Scalable blog post layout with auto-formatting
 *
 * /* Anchor Merge: 2025-10-06 – Route A/B finalized */
 *
 * @package Bird_Dog_Moving
 */

get_header();

while (have_posts()): the_post();
    $categories = get_the_category();
    $primary_category = !empty($categories) ? $categories[0] : null;
?>

<article class="blog-post" id="post-<?php the_ID(); ?>">

    <!-- Post Header -->
    <header class="blog-post__header">
        <div class="l-container">
            <div class="blog-post__header-content">

                <?php if ($primary_category): ?>
                <span class="blog-post__category"><?php echo esc_html($primary_category->name); ?></span>
                <?php endif; ?>

                <h1 class="blog-post__title"><?php the_title(); ?></h1>

                <div class="blog-post__meta">
                    <div class="blog-post__author">
                        <?php echo get_avatar(get_the_author_meta('ID'), 32); ?>
                        <span><?php the_author(); ?></span>
                    </div>
                    <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                    <span class="blog-post__reading-time"><?php echo ceil(str_word_count(get_the_content()) / 200); ?> min read</span>
                </div>

                <?php if (has_excerpt()): ?>
                <p class="blog-post__excerpt"><?php the_excerpt(); ?></p>
                <?php endif; ?>

            </div>
        </div>
    </header>

    <!-- Featured Image -->
    <?php if (has_post_thumbnail()): ?>
    <div class="l-container">
        <div class="blog-post__featured-image">
            <?php the_post_thumbnail('large'); ?>
        </div>
    </div>
    <?php endif; ?>

    <!-- Post Content -->
    <div class="l-container">
        <div class="blog-post__content">
            <?php the_content(); ?>
        </div>

        <!-- Post Footer -->
        <footer class="blog-post__footer">
            <?php
            $tags = get_the_tags();
            if ($tags):
            ?>
            <div class="blog-post__tags">
                <?php foreach ($tags as $tag): ?>
                <a href="<?php echo get_tag_link($tag->term_id); ?>" class="blog-post__tag">
                    <?php echo esc_html($tag->name); ?>
                </a>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <!-- Share buttons could go here -->
        </footer>
    </div>

</article>

<!-- Related Posts Partial -->
<?php
get_template_part('partials/related-posts');
endwhile;

get_footer();
?>
