<?php
if (! defined('HOMELANCER_VERSION')) {
	// Replace the version number of the theme on each release.
	define('HOMELANCER_VERSION', wp_get_theme()->get('Version'));
}
define('HOMELANCER_DEBUG', defined('WP_DEBUG') && WP_DEBUG === true);
define('HOMELANCER_DIR', trailingslashit(get_template_directory()));
define('HOMELANCER_URL', trailingslashit(get_template_directory_uri()));

if (! function_exists('homelancer_support')) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since walker_fse 1.0.0
	 *
	 * @return void
	 */
	function homelancer_support()
	{
		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');
		// Add support for block styles.
		add_theme_support('wp-block-styles');
		add_theme_support('post-thumbnails');
		// Enqueue editor styles.
		add_editor_style('style.css');
		// Removing default patterns.
		remove_theme_support('core-block-patterns');
	}

endif;
add_action('after_setup_theme', 'homelancer_support');

/*
----------------------------------------------------------------------------------
Enqueue Styles
-----------------------------------------------------------------------------------*/
if (! function_exists('homelancer_styles')) :
	function homelancer_styles()
	{
		// registering style for theme
		wp_enqueue_style('homelancer-style', get_stylesheet_uri(), array(), HOMELANCER_VERSION);
		wp_enqueue_style('homelancer-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css', array(), HOMELANCER_VERSION);
		wp_enqueue_style('homelancer-aos-style', get_template_directory_uri() . '/assets/css/aos.css', array(), HOMELANCER_VERSION);
		if (is_rtl()) {
			wp_enqueue_style('homelancer-rtl-css', get_template_directory_uri() . '/assets/css/rtl.css', 'rtl_css', HOMELANCER_VERSION);
		}
		wp_enqueue_script('homelancer-aos-scripts', get_template_directory_uri() . '/assets/js/aos.js', array(), HOMELANCER_VERSION, true);
		wp_enqueue_script('homelancer-scripts', get_template_directory_uri() . '/assets/js/homelancer-scripts.js', array('jquery'), HOMELANCER_VERSION, true);
	}
endif;

add_action('wp_enqueue_scripts', 'homelancer_styles');

/**
 * Enqueue scripts for admin area
 */
function homelancer_admin_style()
{
	$hello_notice_current_screen = get_current_screen();
	if (! empty($_GET['page']) && 'about-homelancer' === $_GET['page'] || $hello_notice_current_screen->id === 'themes' || $hello_notice_current_screen->id === 'dashboard' || $hello_notice_current_screen->id === 'plugins') {
		wp_enqueue_style('homelancer-admin-style', get_template_directory_uri() . '/inc/admin/css/admin-style.css', array(), HOMELANCER_VERSION, 'all');
		wp_enqueue_script('homelancer-admin-scripts', get_template_directory_uri() . '/inc/admin/js/homelancer-admin-scripts.js', array('jquery'), HOMELANCER_VERSION, true);

		wp_localize_script(
			'homelancer-admin-scripts',
			'homelancer_admin_localize',
			array(
				'ajax_url'     => admin_url('admin-ajax.php'),
				'nonce'        => wp_create_nonce('homelancer_admin_nonce'),
				'welcomeNonce' => wp_create_nonce('homelancer_welcome_nonce'),
				'redirect_url' => admin_url('themes.php?page=about-homelancer'),
				'scrollURL'    => admin_url('plugins.php?cozy-addons-scroll=true'),
				'demoURL'      => admin_url('themes.php?page=advanced-import'),
			)
		);
	}
}
add_action('admin_enqueue_scripts', 'homelancer_admin_style');

/**
 * Enqueue assets scripts for both backend and frontend
 */
function homelancer_block_assets()
{
	wp_enqueue_style('homelancer-swiper-bundle-editor-style', get_template_directory_uri() . '/assets/css/swiper-bundle.css', array(), HOMELANCER_VERSION);
	wp_enqueue_style('homelancer-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css');
	wp_enqueue_script('homelancer-swiper-bundle-editor-scripts', get_template_directory_uri() . '/assets/js/swiper-bundle.js', array(), HOMELANCER_VERSION, true);
}
add_action('enqueue_block_assets', 'homelancer_block_assets');

/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/core/init.php';

/**
 * Load welcome page file.
 */
require_once get_template_directory() . '/inc/admin/welcome-notice.php';

if (! function_exists('homelancer_excerpt_more_postfix')) {
	function homelancer_excerpt_more_postfix($more)
	{
		if (is_admin()) {
			return $more;
		}
		return '...';
	}
	add_filter('excerpt_more', 'homelancer_excerpt_more_postfix');
}
function homelancer_add_woocommerce_support()
{
	add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'homelancer_add_woocommerce_support');
