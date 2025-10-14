<?php
/**
 * Template Name: Blog Hub
 * Description: Blog landing page with featured categories and organized post listings
 *
 * @package Bird_Dog_Moving
 */

get_header();

// Get featured categories (use ACF to select up to 3)
$featured_cats = get_field('featured_categories'); // ACF relationship field
$primary_cat = get_field('primary_category'); // Single category
$layout_mode = get_field('category_layout') ?: 'even'; // 'even' or 'primary'

// Default to popular categories if none selected
if (empty($featured_cats)) {
    $featured_cats = get_categories([
        'taxonomy' => 'category',
        'orderby' => 'count',
        'order' => 'DESC',
        'number' => 3,
        'hide_empty' => true
    ]);
}
?>

<main class="blog-page" id="main-content">

    <!-- Hero Section -->
    <section class="blog-hero">
        <div class="l-container">
            <div class="blog-hero__content">
                <h1 class="blog-hero__title"><?php echo get_field('blog_title') ?: 'Moving Tips & Resources'; ?></h1>
                <p class="blog-hero__lede">
                    <?php echo get_field('blog_description') ?: 'Expert moving advice, local insights, and guides from Bird Dog Moving\'s team.'; ?>
                </p>
            </div>
        </div>
    </section>

    <!-- Featured Categories -->
    <?php if (!empty($featured_cats)): ?>
    <section class="blog-featured">
        <div class="l-container">
            <div class="blog-featured__grid <?php echo $layout_mode === 'primary' ? 'blog-featured__grid--primary' : 'blog-featured__grid--even'; ?>">

                <?php foreach ($featured_cats as $index => $cat):
                    $is_primary = ($layout_mode === 'primary' && $index === 0);
                    $cat_posts = new WP_Query([
                        'cat' => $cat->term_id,
                        'posts_per_page' => $is_primary ? 1 : 1,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    ]);
                ?>

                <article class="blog-featured__card <?php echo $is_primary ? 'blog-featured__card--primary' : ''; ?>">
                    <?php if ($cat_posts->have_posts()):
                        $cat_posts->the_post();
                        if (has_post_thumbnail()): ?>
                        <div class="blog-featured__image">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                        <?php endif; ?>

                        <div class="blog-featured__content">
                            <span class="blog-featured__category"><?php echo esc_html($cat->name); ?></span>
                            <h2 class="blog-featured__post-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <p class="blog-featured__excerpt"><?php echo wp_trim_words(get_the_excerpt(), $is_primary ? 25 : 15); ?></p>
                            <div class="blog-featured__meta">
                                <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                                <span class="blog-featured__reading-time"><?php echo ceil(str_word_count(get_the_content()) / 200); ?> min read</span>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="c-button c-button--ghost">Read More</a>
                        </div>
                    <?php else: ?>
                        <div class="blog-featured__content">
                            <span class="blog-featured__category"><?php echo esc_html($cat->name); ?></span>
                            <h2 class="blog-featured__post-title"><?php echo esc_html($cat->name); ?></h2>
                            <p class="blog-featured__excerpt"><?php echo esc_html($cat->description); ?></p>
                            <a href="<?php echo get_category_link($cat->term_id); ?>" class="c-button c-button--ghost">View Category</a>
                        </div>
                    <?php endif;
                    wp_reset_postdata(); ?>
                </article>

                <?php endforeach; ?>

            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Blog Posts Section -->
    <section class="blog-posts">
        <div class="l-container">

            <!-- Category Filter Tabs (Optional) -->
            <?php
            $all_cats = get_categories(['hide_empty' => true]);
            if (!empty($all_cats)):
            ?>
            <div class="blog-filter">
                <button class="blog-filter__tab blog-filter__tab--active" data-category="all">All Posts</button>
                <?php foreach ($all_cats as $cat): ?>
                <button class="blog-filter__tab" data-category="<?php echo esc_attr($cat->slug); ?>">
                    <?php echo esc_html($cat->name); ?>
                </button>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <!-- Posts Grid -->
            <div class="blog-posts__grid">
                <?php
                $blog_query = new WP_Query([
                    'post_type' => 'post',
                    'posts_per_page' => 12,
                    'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
                    'orderby' => 'date',
                    'order' => 'DESC'
                ]);

                if ($blog_query->have_posts()):
                    while ($blog_query->have_posts()): $blog_query->the_post();
                        $categories = get_the_category();
                        $primary_category = !empty($categories) ? $categories[0] : null;
                ?>

                <article class="blog-card" data-category="<?php echo $primary_category ? esc_attr($primary_category->slug) : 'uncategorized'; ?>">
                    <?php if (has_post_thumbnail()): ?>
                    <a href="<?php the_permalink(); ?>" class="blog-card__image">
                        <?php the_post_thumbnail('medium'); ?>
                    </a>
                    <?php endif; ?>

                    <div class="blog-card__content">
                        <?php if ($primary_category): ?>
                        <span class="blog-card__category"><?php echo esc_html($primary_category->name); ?></span>
                        <?php endif; ?>

                        <h3 class="blog-card__title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>

                        <p class="blog-card__excerpt"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>

                        <div class="blog-card__meta">
                            <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                            <span class="blog-card__reading-time"><?php echo ceil(str_word_count(get_the_content()) / 200); ?> min read</span>
                        </div>
                    </div>
                </article>

                <?php
                    endwhile;
                else:
                ?>
                <p>No posts found.</p>
                <?php endif; ?>
            </div>

            <!-- Pagination -->
            <?php if ($blog_query->max_num_pages > 1): ?>
            <div class="blog-pagination">
                <?php
                echo paginate_links([
                    'total' => $blog_query->max_num_pages,
                    'current' => max(1, get_query_var('paged')),
                    'prev_text' => '← Previous',
                    'next_text' => 'Next →',
                    'type' => 'list'
                ]);
                ?>
            </div>
            <?php endif;
            wp_reset_postdata(); ?>

        </div>
    </section>

</main>

<?php get_footer(); ?>
