<?php

/**
 * Title: Portfolio Gallery
 * Slug: homelancer/portfolio-gallery
 * Categories: homelancer-portfolio
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/p101.jpg',
    $homelancer_url . 'assets/images/p102.jpg',
    $homelancer_url . 'assets/images/p104.jpg',
    $homelancer_url . 'assets/images/p105.jpg',
    $homelancer_url . 'assets/images/p106.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"84px","bottom":"84px"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:84px;padding-right:var(--wp--preset--spacing--40);padding-bottom:84px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"48px"}}},"layout":{"type":"constrained","contentSize":"680px"}} -->
    <div class="wp-block-group" style="margin-bottom:48px"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"54px","fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"}}} -->
        <h1 class="wp-block-heading has-text-align-center" style="font-size:54px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('We reshape the ordinary into the Extraordinary', 'homelancer') ?></h1>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"24px"}}}} -->
    <div class="wp-block-columns"><!-- wp:column {"width":""} -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[0]) ?>","id":901,"dimRatio":0,"isUserOverlayColor":true,"minHeight":430,"contentPosition":"bottom left","isDark":false,"sizeSlug":"full","className":"is-style-homelancer-cover-overlay-style","style":{"border":{"radius":"20px"},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left is-style-homelancer-cover-overlay-style has-background-color has-text-color has-link-color" style="border-radius:20px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);min-height:430px"><img class="wp-block-cover__image-background wp-image-901 size-full" alt="" src="<?php echo esc_url($homelancer_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"left","fontSize":"xx-large"} -->
                    <h2 class="wp-block-heading has-text-align-left has-xx-large-font-size"><?php esc_html_e('Home Maintenance', 'homelancer') ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'homelancer') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"20px"}}}} -->
                    <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:20px"><!-- wp:button {"backgroundColor":"light-color","textColor":"heading-color","className":"is-style-button-hover-secondary-bgcolor","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"padding":{"left":"18px","right":"18px","top":"10px","bottom":"10px"}}}} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-light-color-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:10px;padding-right:18px;padding-bottom:10px;padding-left:18px"><?php esc_html_e('Read More', 'homelancer') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":""} -->
        <div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[1]) ?>","id":904,"dimRatio":0,"overlayColor":"black-color","isUserOverlayColor":true,"minHeight":430,"contentPosition":"bottom left","isDark":false,"sizeSlug":"full","className":"is-style-homelancer-cover-overlay-style","style":{"border":{"radius":"20px"},"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|30"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left is-style-homelancer-cover-overlay-style has-background-color has-text-color has-link-color" style="border-radius:20px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);min-height:430px"><img class="wp-block-cover__image-background wp-image-904 size-full" alt="" src="<?php echo esc_url($homelancer_images[1]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-black-color-background-color has-background-dim-0 has-background-dim"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"left","fontSize":"xx-large"} -->
                    <h2 class="wp-block-heading has-text-align-left has-xx-large-font-size"><?php esc_html_e('Home Cleaning', 'homelancer') ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'homelancer') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"20px"}}}} -->
                    <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:20px"><!-- wp:button {"backgroundColor":"light-color","textColor":"heading-color","className":"is-style-button-hover-secondary-bgcolor","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"padding":{"left":"18px","right":"18px","top":"10px","bottom":"10px"}}}} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-light-color-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:10px;padding-right:18px;padding-bottom:10px;padding-left:18px"><?php esc_html_e('Read More', 'homelancer') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"24px"},"margin":{"top":"24px"}}}} -->
    <div class="wp-block-columns" style="margin-top:24px"><!-- wp:column {"width":"33.33%"} -->
        <div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[2]) ?>","id":908,"dimRatio":0,"overlayColor":"black-color","isUserOverlayColor":true,"minHeight":310,"contentPosition":"bottom left","isDark":false,"sizeSlug":"full","className":"is-style-homelancer-cover-overlay-style","style":{"border":{"radius":"20px"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"textColor":"background","layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left is-style-homelancer-cover-overlay-style has-background-color has-text-color has-link-color" style="border-radius:20px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);min-height:310px"><img class="wp-block-cover__image-background wp-image-908 size-full" alt="" src="<?php echo esc_url($homelancer_images[2]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-black-color-background-color has-background-dim-0 has-background-dim"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"left","fontSize":"xx-large"} -->
                    <h2 class="wp-block-heading has-text-align-left has-xx-large-font-size"><?php esc_html_e('Solar Installation', 'homelancer') ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'homelancer') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"20px"}}}} -->
                    <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:20px"><!-- wp:button {"backgroundColor":"light-color","textColor":"heading-color","className":"is-style-button-hover-secondary-bgcolor","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"padding":{"left":"18px","right":"18px","top":"10px","bottom":"10px"}}}} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-light-color-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:10px;padding-right:18px;padding-bottom:10px;padding-left:18px"><?php esc_html_e('Read More', 'homelancer') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"33.33%"} -->
        <div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[3]) ?>","id":909,"dimRatio":0,"overlayColor":"black-color","isUserOverlayColor":true,"minHeight":310,"contentPosition":"bottom left","isDark":false,"sizeSlug":"full","className":"is-style-homelancer-cover-overlay-style","style":{"border":{"radius":"20px"},"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left is-style-homelancer-cover-overlay-style" style="border-radius:20px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);min-height:310px"><img class="wp-block-cover__image-background wp-image-909 size-full" alt="" src="<?php echo esc_url($homelancer_images[3]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-black-color-background-color has-background-dim-0 has-background-dim"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"xx-large"} -->
                    <h2 class="wp-block-heading has-text-align-left has-background-color has-text-color has-link-color has-xx-large-font-size"><?php esc_html_e('Kitchen Remodeling', 'homelancer') ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
                    <p class="has-light-color-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'homelancer') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"20px"}}}} -->
                    <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:20px"><!-- wp:button {"backgroundColor":"light-color","textColor":"heading-color","className":"is-style-button-hover-secondary-bgcolor","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"padding":{"left":"18px","right":"18px","top":"10px","bottom":"10px"}}}} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-light-color-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:10px;padding-right:18px;padding-bottom:10px;padding-left:18px"><?php esc_html_e('Read More', 'homelancer') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"33.33%"} -->
        <div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[4]) ?>","id":907,"dimRatio":0,"overlayColor":"black-color","isUserOverlayColor":true,"minHeight":310,"contentPosition":"bottom left","sizeSlug":"full","className":"is-style-homelancer-cover-overlay-style","style":{"border":{"radius":"20px"},"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-left is-style-homelancer-cover-overlay-style" style="border-radius:20px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);min-height:310px"><img class="wp-block-cover__image-background wp-image-907 size-full" alt="" src="<?php echo esc_url($homelancer_images[4]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-black-color-background-color has-background-dim-0 has-background-dim"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"xx-large"} -->
                    <h2 class="wp-block-heading has-text-align-left has-background-color has-text-color has-link-color has-xx-large-font-size"><?php esc_html_e('Furniture and Sofa Repair', 'homelancer') ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'homelancer') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"20px"}}}} -->
                    <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:20px"><!-- wp:button {"backgroundColor":"light-color","textColor":"heading-color","className":"is-style-button-hover-secondary-bgcolor","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"padding":{"left":"18px","right":"18px","top":"10px","bottom":"10px"}}}} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-light-color-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:10px;padding-right:18px;padding-bottom:10px;padding-left:18px"><?php esc_html_e('Read More', 'homelancer') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->