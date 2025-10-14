<?php

/**
 * homelancer: Block Patterns
 *
 * @since homelancer 1.0.0
 */

/**
 * Registers pattern categories for homelancer
 *
 * @since homelancer 1.0.0
 *
 * @return void
 */
function homelancer_register_pattern_category()
{
	$block_pattern_categories = array(
		'homelancer' => array('label' => __('HomeLancer Extra', 'homelancer')),
		'homelancer-header' => array('label' => __('Header Layout', 'homelancer')),
		'homelancer-footer' => array('label' => __('Footer Layout', 'homelancer')),
		'homelancer-homes' => array('label' => __('Homepage Templates', 'homelancer')),
		'homelancer-pages' => array('label' => __('Page Templates', 'homelancer')),
		'homelancer-hero' => array('label' => __('Hero / Banner / Slider', 'homelancer')),
		'homelancer-about' => array('label' => __('About / Content', 'homelancer')),
		'homelancer-service' => array('label' => __('Services Section', 'homelancer')),
		'homelancer-team' => array('label' => __('Teams', 'homelancer')),
		'homelancer-testimonial' => array('label' => __('Testimonials & Reviews', 'homelancer')),
		'homelancer-faq' => array('label' => __('FAQS', 'homelancer')),
		'homelancer-offer' => array('label' => __('Offer/ Promotions', 'homelancer')),
		'homelancer-portfolio' => array('label' => __('Portfolio & Showcase Gallery', 'homelancer')),
		'homelancer-pricing' => array('label' => __('Pricing', 'homelancer')),
		'homelancer-store' => array('label' => __('Store / Shop Sections', 'homelancer')),
		'homelancer-post' => array('label' => __('Posts / Blog', 'homelancer')),
		'homelancer-counter' => array('label' => __('Counters / Numbers', 'homelancer')),
		'homelancer-cta' => array('label' => __('CTA: Call To Action', 'homelancer')),
		'homelancer-wcu' => array('label' => __('Why Choose Us', 'homelancer')),
		'homelancer-logocase' => array('label' => __('Logo Showcase', 'homelancer')),
		'homelancer-contact' => array('label' => __('Contacts / Newsletter', 'homelancer')),
	);

	$block_pattern_categories = apply_filters('homelancer_block_pattern_categories', $block_pattern_categories);

	foreach ($block_pattern_categories as $name => $properties) {
		if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
			register_block_pattern_category($name, $properties); // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		}
	}
}
add_action('init', 'homelancer_register_pattern_category', 9);
