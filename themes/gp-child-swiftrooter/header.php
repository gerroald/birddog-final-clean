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

<header class="site-header" role="banner">
    <div class="l-container">
        <!-- Logo -->
        <a class="site-logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php bloginfo('name'); ?> - Home">
            <img
                src="<?php echo esc_url('http://localhost:10070/wp-content/uploads/2025/10/logo-lockup-512-black-e1759429063411.png'); ?>"
                alt="<?php bloginfo('name'); ?> logo"/>
        </a>

<!-- Primary Navigation -->
<nav class="site-nav" id="site-nav" aria-label="Primary">
  <?php
  wp_nav_menu([
    'theme_location' => 'primary',
    'menu_id'        => 'primary-menu',
    'menu_class'     => 'menu',   // keep WP's default class if you want
    'container'      => false,
    'depth'          => 3,
  ]);
  ?>
</nav>



        <!-- CTA Buttons -->
        <div class="site-cta">
            <!-- Text Me Button -->
            <a href="sms:<?php echo esc_attr(str_replace(['(', ')', ' ', '-'], '', BUSINESS_PHONE)); ?>" class="site-cta__text" aria-label="Text us">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 9h12v2H6V9zm8 5H6v-2h8v2zm4-6H6V6h12v2z" fill="currentColor"/>
                </svg>
            </a>

            <!-- Call Button -->
            <a href="<?php echo esc_url(BUSINESS_PHONE_LINK); ?>" class="site-cta__button">
                <span class="site-cta__icon" aria-hidden="true">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.62 10.79a15.1 15.1 0 006.59 6.59l2.2-2.2a1 1 0 011.05-.24c1.12.37 2.33.57 3.54.57a1 1 0 011 1v3.5a1 1 0 01-1 1C10.2 21 3 13.8 3 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.21.2 2.42.57 3.54a1 1 0 01-.25 1.05l-2.2 2.2z" fill="currentColor"/>
                    </svg>
                </span>
                <span class="site-cta__number"><?php echo esc_html(BUSINESS_PHONE); ?></span>
            </a>
        </div>

        <!-- Mobile Navigation Toggle -->
        <button class="nav-toggle" 
                aria-controls="site-nav" 
                aria-expanded="false" 
                aria-label="Open menu">
            <span class="nav-toggle__bar"></span>
            <span class="nav-toggle__bar"></span>
            <span class="nav-toggle__bar"></span>
			
			
            <span class="sr-only">Toggle navigation menu</span>
        </button>
    </div>
	
</header>
<?php echo do_shortcode('[bd_modern_header]'); ?>
<main id="main" class="site-main" role="main">
