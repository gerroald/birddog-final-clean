<?php

/**
 * Title: Services Section
 * Slug: homelancer/services-section
 * Categories: homelancer-service
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/icon_101.png',
    $homelancer_url . 'assets/images/icon_102.png',
    $homelancer_url . 'assets/images/icon_103.png',
    $homelancer_url . 'assets/images/icon_104.png',
    $homelancer_url . 'assets/images/icon_105.png',
    $homelancer_url . 'assets/images/icon_106.png',
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"6rem","bottom":"7rem"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group alignfull has-primary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:6rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:7rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"60px"}}},"layout":{"type":"constrained","contentSize":"680px","justifyContent":"center"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:60px"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.3","fontSize":"54px"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
        <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color" style="font-size:54px;font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('Bringing Our Services to You', 'homelancer') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|border-color"}}}},"textColor":"border-color"} -->
        <p class="has-text-align-center has-border-color-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'homelancer') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":{"left":"28px"}}}} -->
    <div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"0px"}}} -->
        <div class="wp-block-column" style="border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"},"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}},"border":{"radius":"24px"}},"backgroundColor":"light-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-light-color-background-color has-background" style="border-radius:24px;margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:image {"id":1750,"width":"60px","height":"60px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"radius":"50%"},"color":{"duotone":"var:preset|duotone|secondary-white"}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" class="wp-image-1750" style="border-radius:50%;object-fit:contain;width:60px;height:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"28px","bottom":"0"}}},"fontSize":"large"} -->
                <h3 class="wp-block-heading has-large-font-size" style="margin-top:28px;margin-bottom:0"><?php esc_html_e('Handyman Services', 'homelancer') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'homelancer') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"20px"}}}} -->
                <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:20px"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","className":"is-style-button-hover-secondary-bgcolor","style":{"typography":{"textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"border":{"radius":"6px","width":"1px"},"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"small"} -->
                    <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color has-small-font-size has-custom-font-size wp-element-button" style="border-width:1px;border-radius:6px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30);text-transform:none"><?php esc_html_e('Read More', 'homelancer') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"0px"}}} -->
        <div class="wp-block-column" style="border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"},"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}},"border":{"radius":"24px"}},"backgroundColor":"light-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-light-color-background-color has-background" style="border-radius:24px;margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:image {"id":1746,"width":"60px","height":"60px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"radius":"50%"},"color":{"duotone":"var:preset|duotone|secondary-white"}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[1]) ?>" alt="" class="wp-image-1746" style="border-radius:50%;object-fit:contain;width:60px;height:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"28px","bottom":"0"}}},"fontSize":"large"} -->
                <h3 class="wp-block-heading has-large-font-size" style="margin-top:28px;margin-bottom:0"><?php esc_html_e('Interior Design &amp; Renovation', 'homelancer') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'homelancer') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"20px"}}}} -->
                <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:20px"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","className":"is-style-button-hover-secondary-bgcolor","style":{"typography":{"textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"border":{"radius":"6px","width":"1px"},"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"small"} -->
                    <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color has-small-font-size has-custom-font-size wp-element-button" style="border-width:1px;border-radius:6px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30);text-transform:none"><?php esc_html_e('Read More', 'homelancer') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"0px"}}} -->
        <div class="wp-block-column" style="border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"},"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}},"border":{"radius":"24px"}},"backgroundColor":"light-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-light-color-background-color has-background" style="border-radius:24px;margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:image {"id":1753,"width":"60px","height":"60px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"duotone":"var:preset|duotone|secondary-white"},"border":{"radius":"50%"}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[2]) ?>" alt="" class="wp-image-1753" style="border-radius:50%;object-fit:contain;width:60px;height:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"28px","bottom":"0"}}},"fontSize":"large"} -->
                <h3 class="wp-block-heading has-large-font-size" style="margin-top:28px;margin-bottom:0"><?php esc_html_e('Plumbing Services', 'homelancer') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'homelancer') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"20px"}}}} -->
                <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:20px"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","className":"is-style-button-hover-secondary-bgcolor","style":{"typography":{"textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"border":{"radius":"6px","width":"1px"},"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"small"} -->
                    <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color has-small-font-size has-custom-font-size wp-element-button" style="border-width:1px;border-radius:6px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30);text-transform:none"><?php esc_html_e('Read More', 'homelancer') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"28px","bottom":"0"},"blockGap":{"left":"28px"}}}} -->
    <div class="wp-block-columns" style="margin-top:28px;margin-bottom:0"><!-- wp:column {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"0px"}}} -->
        <div class="wp-block-column" style="border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"},"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}},"border":{"radius":"24px"}},"backgroundColor":"light-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-light-color-background-color has-background" style="border-radius:24px;margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:image {"id":1756,"width":"60px","height":"60px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"duotone":"var:preset|duotone|secondary-white"},"border":{"radius":"50%"}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[3]) ?>" alt="" class="wp-image-1756" style="border-radius:50%;object-fit:contain;width:60px;height:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"28px","bottom":"0"}}},"fontSize":"large"} -->
                <h3 class="wp-block-heading has-large-font-size" style="margin-top:28px;margin-bottom:0"><?php esc_html_e('HVAC Services', 'homelancer') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'homelancer') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"20px"}}}} -->
                <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:20px"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","className":"is-style-button-hover-secondary-bgcolor","style":{"typography":{"textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"border":{"radius":"6px","width":"1px"},"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"small"} -->
                    <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color has-small-font-size has-custom-font-size wp-element-button" style="border-width:1px;border-radius:6px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30);text-transform:none"><?php esc_html_e('Read More', 'homelancer') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"0px"}}} -->
        <div class="wp-block-column" style="border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"},"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}},"border":{"radius":"24px"}},"backgroundColor":"light-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-light-color-background-color has-background" style="border-radius:24px;margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:image {"id":1755,"width":"60px","height":"60px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"duotone":"var:preset|duotone|secondary-white"},"border":{"radius":"50%"}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[4]) ?>" alt="" class="wp-image-1755" style="border-radius:50%;object-fit:contain;width:60px;height:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"28px","bottom":"0"}}},"fontSize":"large"} -->
                <h3 class="wp-block-heading has-large-font-size" style="margin-top:28px;margin-bottom:0"><?php esc_html_e('Electrical Services', 'homelancer') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'homelancer') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"20px"}}}} -->
                <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:20px"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","className":"is-style-button-hover-secondary-bgcolor","style":{"typography":{"textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"border":{"radius":"6px","width":"1px"},"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"small"} -->
                    <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color has-small-font-size has-custom-font-size wp-element-button" style="border-width:1px;border-radius:6px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30);text-transform:none"><?php esc_html_e('Read More', 'homelancer') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"0px"}}} -->
        <div class="wp-block-column" style="border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"},"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}},"border":{"radius":"24px"}},"backgroundColor":"light-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-light-color-background-color has-background" style="border-radius:24px;margin-top:0;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:image {"id":1751,"width":"60px","height":"60px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"color":{"duotone":"var:preset|duotone|secondary-white"},"border":{"radius":"50%"}}} -->
                <figure class="wp-block-image size-full is-resized has-custom-border" style="margin-top:0;margin-bottom:0"><img src="<?php echo esc_url($homelancer_images[5]) ?>" alt="" class="wp-image-1751" style="border-radius:50%;object-fit:contain;width:60px;height:60px" /></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"28px","bottom":"0"}}},"fontSize":"large"} -->
                <h3 class="wp-block-heading has-large-font-size" style="margin-top:28px;margin-bottom:0"><?php esc_html_e('Landscaping &amp; Lawn Care', 'homelancer') ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'homelancer') ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"20px"}}}} -->
                <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:20px"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","className":"is-style-button-hover-secondary-bgcolor","style":{"typography":{"textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"border":{"radius":"6px","width":"1px"},"spacing":{"padding":{"left":"var:preset|spacing|30","right":"var:preset|spacing|30","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"small"} -->
                    <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color has-small-font-size has-custom-font-size wp-element-button" style="border-width:1px;border-radius:6px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30);text-transform:none"><?php esc_html_e('Read More', 'homelancer') ?></a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->