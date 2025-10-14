<?php

/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package homelancer
 * @since 1.0.0
 */

if (function_exists('register_block_style')) {
    /**
     * Register block styles.
     *
     * @since 0.1
     *
     * @return void
     */
    function homelancer_register_block_styles()
    {
        register_block_style(
            'core/columns',
            array(
                'name'  => 'homelancer-boxshadow',
                'label' => __('Box Shadow', 'homelancer')
            )
        );

        register_block_style(
            'core/column',
            array(
                'name'  => 'homelancer-boxshadow',
                'label' => __('Box Shadow', 'homelancer')
            )
        );
        register_block_style(
            'core/column',
            array(
                'name'  => 'homelancer-boxshadow-medium',
                'label' => __('Box Shadow Medium', 'homelancer')
            )
        );
        register_block_style(
            'core/column',
            array(
                'name'  => 'homelancer-boxshadow-large',
                'label' => __('Box Shadow Large', 'homelancer')
            )
        );

        register_block_style(
            'core/group',
            array(
                'name'  => 'homelancer-boxshadow',
                'label' => __('Box Shadow', 'homelancer')
            )
        );
        register_block_style(
            'core/group',
            array(
                'name'  => 'homelancer-boxshadow-medium',
                'label' => __('Box Shadow Medium', 'homelancer')
            )
        );
        register_block_style(
            'core/group',
            array(
                'name'  => 'homelancer-boxshadow-large',
                'label' => __('Box Shadow Larger', 'homelancer')
            )
        );
        register_block_style(
            'core/group',
            array(
                'name'  => 'homelancer-gradient-border',
                'label' => __('Gradient Border Primary', 'homelancer')
            )
        );
        register_block_style(
            'core/group',
            array(
                'name'  => 'homelancer-gradient-border',
                'label' => __('Gradient Border Style', 'homelancer')
            )
        );
        register_block_style(
            'core/group',
            array(
                'name'  => 'homelancer-product-holder',
                'label' => __('Product Group', 'homelancer')
            )
        );
        register_block_style(
            'core/group',
            array(
                'name'  => 'homelancer-product-group',
                'label' => __('Product Image Group', 'homelancer')
            )
        );
        register_block_style(
            'core/group',
            array(
                'name'  => 'homelancer-overlay-navigaion',
                'label' => __('Overlay Navigation', 'homelancer')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'homelancer-boxshadow',
                'label' => __('Box Shadow', 'homelancer')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'homelancer-boxshadow-medium',
                'label' => __('Box Shadow Medium', 'homelancer')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'homelancer-boxshadow-larger',
                'label' => __('Box Shadow Large', 'homelancer')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'homelancer-image-pulse',
                'label' => __('Iamge Pulse Effect', 'homelancer')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'homelancer-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'homelancer')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'homelancer-image-hover-pulse',
                'label' => __('Pulse Effect on Hover', 'homelancer')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'homelancer-image-hover-rotate',
                'label' => __('Rotate On Hover', 'homelancer')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'homelancer-image-hover-zoom',
                'label' => __('Zoom On Hover', 'homelancer')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'homelancer-image-grayscale',
                'label' => __('Enable Grayscale', 'homelancer')
            )
        );
        register_block_style(
            'core/columns',
            array(
                'name'  => 'homelancer-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'homelancer')
            )
        );

        register_block_style(
            'core/column',
            array(
                'name'  => 'homelancer-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'homelancer')
            )
        );

        register_block_style(
            'core/group',
            array(
                'name'  => 'homelancer-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'homelancer')
            )
        );

        register_block_style(
            'core/post-terms',
            array(
                'name'  => 'categories-background-with-round',
                'label' => __('Background', 'homelancer')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-primary-color',
                'label' => __('Hover: Primary Color', 'homelancer')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-secondary-color',
                'label' => __('Hover: Secondary Color', 'homelancer')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-primary-bgcolor',
                'label' => __('Hover: Primary color fill', 'homelancer')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-secondary-bgcolor',
                'label' => __('Hover: Secondary color fill', 'homelancer')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-white-bgcolor',
                'label' => __('Hover: White color fill', 'homelancer')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-with-arrow-icon',
                'label' => __('Arrow Icon', 'homelancer')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-with-uparrow-icon',
                'label' => __('Upward Arrow Icon', 'homelancer')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-with-gradient-border',
                'label' => __('Gradient Border', 'homelancer')
            )
        );
        register_block_style(
            'core/buttons',
            array(
                'name'  => 'button-transofom-on-hover',
                'label' => __('Translate On Hover', 'homelancer')
            )
        );
        register_block_style(
            'core/buttons',
            array(
                'name'  => 'button-zoom-on-hover',
                'label' => __('Zoom On Hover', 'homelancer')
            )
        );

        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-primary-color',
                'label' => __('Hover: Primary Color', 'homelancer')
            )
        );
        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-secondary-color',
                'label' => __('Hover: Secondary Color', 'homelancer')
            )
        );
        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-primary-fill',
                'label' => __('Hover: Primary Fill', 'homelancer')
            )
        );
        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-secondary-fill',
                'label' => __('Hover: secondary Fill', 'homelancer')
            )
        );

        register_block_style(
            'core/list',
            array(
                'name'  => 'list-style-no-bullet',
                'label' => __('Hide bullet', 'homelancer')
            )
        );
        register_block_style(
            'core/list',
            array(
                'name'  => 'list-style-check-circle',
                'label' => __('Check Circle Primary', 'homelancer')
            )
        );
        register_block_style(
            'core/list',
            array(
                'name'  => 'list-style-check-circle-white',
                'label' => __('Check Circle White', 'homelancer')
            )
        );
        register_block_style(
            'core/list',
            array(
                'name'  => 'list-style-check-circle-fade',
                'label' => __('Check Circle Fade', 'homelancer')
            )
        );
        register_block_style(
            'core/list',
            array(
                'name'  => 'list-style-check-circle-fade-primary',
                'label' => __('Check Circle Primary Fade', 'homelancer')
            )
        );
        register_block_style(
            'core/list',
            array(
                'name'  => 'list-style-check-circle-black',
                'label' => __('Check Circle Black', 'homelancer')
            )
        );

        register_block_style(
            'core/gallery',
            array(
                'name'  => 'enable-grayscale-mode-on-image',
                'label' => __('Enable Grayscale Mode on Image', 'homelancer')
            )
        );
        register_block_style(
            'core/social-links',
            array(
                'name'  => 'social-icon-border',
                'label' => __('Border Style', 'homelancer')
            )
        );
        register_block_style(
            'core/page-list',
            array(
                'name'  => 'homelancer-page-list-bullet-hide-style',
                'label' => __('Hide Bullet Style', 'homelancer')
            )
        );
        register_block_style(
            'core/categories',
            array(
                'name'  => 'homelancer-categories-bullet-hide-style',
                'label' => __('Hide Bullet Style', 'homelancer')
            )
        );
        register_block_style(
            'core/cover',
            array(
                'name'  => 'homelancer-cover-unset-overflow',
                'label' => __('Unset Overflow', 'homelancer')
            )
        );
        register_block_style(
            'core/cover',
            array(
                'name'  => 'homelancer-cover-overlay-style',
                'label' => __('Overlay Style', 'homelancer')
            )
        );
        register_block_style(
            'core/cover',
            array(
                'name'  => 'homelancer-cover-hover-style',
                'label' => __('Hover Style', 'homelancer')
            )
        );
        register_block_style(
            'core/cover',
            array(
                'name'  => 'homelancer-cover-infinite-zoom-style',
                'label' => __('Infinite Zoom Effect', 'homelancer')
            )
        );
        register_block_style(
            'core/navigation',
            array(
                'name'  => 'homelancer-navigation-enable-menu-description',
                'label' => __('Enable Menu Description', 'homelancer')
            )
        );
        register_block_style(
            'core/wp-block-navigation-item',
            array(
                'name'  => 'homelancer-navigation-item-secondary',
                'label' => __('Secondary Color Description', 'homelancer')
            )
        );
        register_block_style(
            'core/details',
            array(
                'name'  => 'homelancer-detail-round-style',
                'label' => __('Round Style', 'homelancer')
            )
        );
    }
    add_action('init', 'homelancer_register_block_styles');
}
