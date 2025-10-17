<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header header--stuck hdr-classic" role="banner">
    <div class="l-container hdr-grid">
        <div class="hdr-left">
            <button class="nav-toggle hamburger" type="button" aria-controls="drawer" aria-expanded="false">
                <span class="sr-only"><?php esc_html_e('Toggle navigation', 'gp-child-swiftrooter'); ?></span>
                <span class="nav-toggle__bar"></span>
                <span class="nav-toggle__bar"></span>
                <span class="nav-toggle__bar"></span>
            </button>

            <a class="book-now-chip" href="#estimate" aria-hidden="true" tabindex="-1">Book&nbsp;Now</a>

            <a class="hdr-logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php bloginfo('name'); ?> - Home">
                <picture>
                    <source media="(max-width: 768px)" srcset="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/logo-icon-white.png' ); ?>">
                    <img
                        src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/logo-lockup-white.png' ); ?>"
                        alt="<?php bloginfo('name'); ?> - Bird Dog Delivery & Moving"
                        width="240"
                        height="48"/>
                </picture>
            </a>
        </div>

        <nav class="hdr-nav" aria-label="<?php esc_attr_e('Primary', 'gp-child-swiftrooter'); ?>">
            <?php
            if (has_nav_menu('primary')) {
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'hdr-nav__list',
                    'depth'          => 2,
                    'fallback_cb'    => false,
                ]);
            }
            ?>
        </nav>

        <div class="hdr-actions">
            <a class="btn btn--ghost" href="<?php echo esc_url(BUSINESS_PHONE_LINK); ?>">
                <span class="hdr-actions__icon" aria-hidden="true">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.62 10.79a15.1 15.1 0 006.59 6.59l2.2-2.2a1 1 0 011.05-.24c1.12.37 2.33.57 3.54.57a1 1 0 011 1v3.5a1 1 0 01-1 1C10.2 21 3 13.8 3 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.21.2 2.42.57 3.54a1 1 0 01-.25 1.05l-2.2 2.2z" fill="currentColor"/>
                    </svg>
                </span>
                <span><?php esc_html_e('Call', 'gp-child-swiftrooter'); ?></span>
            </a>
            <a class="btn btn--accent" href="#estimate"><?php esc_html_e('Get Free Estimate', 'gp-child-swiftrooter'); ?></a>
        </div>
    </div>
</header>

<aside id="drawer" class="drawer" aria-hidden="true">
    <nav class="drawer__nav" aria-label="<?php esc_attr_e('Mobile Primary', 'gp-child-swiftrooter'); ?>">
        <?php bird_dog_render_mobile_menu(); ?>
    </nav>
</aside>

<main id="main" class="site-main" role="main">
