<?php

/**
 * Title: Contact with Form
 * Slug: homelancer/contact-with-form
 * Categories: homelancer-contact
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/icon_location.png',
    $homelancer_url . 'assets/images/icon_call.png',
    $homelancer_url . 'assets/images/icon_email.png',
    $homelancer_url . 'assets/images/icon_clock.png',
);
?>
<!-- wp:group {"align":"full","metadata":{"categories":["homelancer-contact"],"patternName":"homelancer/contact-with-form","name":"Contact with Form"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"60px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
    <div class="wp-block-group" style="margin-bottom:60px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"64px"}}},"layout":{"type":"constrained","contentSize":"840px","justifyContent":"left"}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:64px"><!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|black-color"}}}},"textColor":"black-color","fontSize":"xxx-large"} -->
            <h1 class="wp-block-heading has-black-color-color has-text-color has-link-color has-xxx-large-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Feel Free to Contact Us Anytime — We’re Always Here to Support You', 'homelancer') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"lineHeight":1.7,"fontSize":"18px"},"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
            <p class="has-foreground-alt-color has-text-color has-link-color" style="font-size:18px;line-height:1.7"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'homelancer') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"100px"}}}} -->
        <div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top"} -->
            <div class="wp-block-column is-vertically-aligned-top"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"margin":{"top":"0px","bottom":"0"}}}} -->
                <div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0px;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"52px"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:52px"><!-- wp:image {"id":681,"width":"52px","height":"52px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" class="wp-image-681" style="object-fit:contain;width:52px;height:52px" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}}} -->
                    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#969595"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"color":{"text":"#969595"}},"fontSize":"small"} -->
                        <p class="has-text-color has-link-color has-small-font-size" style="color:#969595"><?php esc_html_e('Address', 'homelancer') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"heading-color"} -->
                        <p class="has-heading-color-color has-text-color has-link-color"><a href="#"><?php esc_html_e('123 Sample St, Sydney NSW 2000 USA', 'homelancer') ?></a></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->

                <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
                <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"52px"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:52px"><!-- wp:image {"id":676,"scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full"><img src="<?php echo esc_url($homelancer_images[1]) ?>" alt="" class="wp-image-676" style="object-fit:contain" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}}} -->
                    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#969595"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"color":{"text":"#969595"}},"fontSize":"small"} -->
                        <p class="has-text-color has-link-color has-small-font-size" style="color:#969595"><?php esc_html_e('Phone', 'homelancer') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"heading-color"} -->
                        <p class="has-heading-color-color has-text-color has-link-color"><a href="#"><?php esc_html_e('+1 (000) 012-3456', 'homelancer') ?></a></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->

                <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
                <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"52px"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:52px"><!-- wp:image {"id":680,"width":"52px","height":"52px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($homelancer_images[2]) ?>" alt="" class="wp-image-680" style="object-fit:contain;width:52px;height:52px" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}}} -->
                    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#969595"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"color":{"text":"#969595"}},"fontSize":"small"} -->
                        <p class="has-text-color has-link-color has-small-font-size" style="color:#969595"><?php esc_html_e('Email', 'homelancer') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"heading-color"} -->
                        <p class="has-heading-color-color has-text-color has-link-color"><a href="#"><?php esc_html_e('yourmail@example.com', 'homelancer') ?></a></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->

                <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
                <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"52px"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:52px"><!-- wp:image {"id":683,"width":"52px","height":"52px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                        <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($homelancer_images[3]) ?>" alt="" class="wp-image-683" style="object-fit:contain;width:52px;height:52px" /></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}}} -->
                    <div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#969595"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"color":{"text":"#969595"}},"fontSize":"small"} -->
                        <p class="has-text-color has-link-color has-small-font-size" style="color:#969595"><?php esc_html_e('Office Hour', 'homelancer') ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"heading-color"} -->
                        <p class="has-heading-color-color has-text-color has-link-color"><a href="#"><?php esc_html_e('Monday- Friday : 9:00AM - 8:00PM', 'homelancer') ?></a></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"64px"},"padding":{"top":"20px"}},"border":{"top":{"color":"var:preset|color|border-color","width":"1px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border-color);border-top-width:1px;margin-top:64px;padding-top:20px"><!-- wp:heading {"level":4,"fontSize":"medium"} -->
                    <h4 class="wp-block-heading has-medium-font-size"><?php esc_html_e('Follow us on', 'homelancer') ?></h4>
                    <!-- /wp:heading -->

                    <!-- wp:social-links {"iconBackgroundColor":"heading-color","iconBackgroundColorValue":"#0F0106","style":{"spacing":{"margin":{"top":"0px"},"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
                    <ul class="wp-block-social-links has-icon-background-color" style="margin-top:0px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

                        <!-- wp:social-link {"url":"#","service":"x"} /-->

                        <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

                        <!-- wp:social-link {"url":"#","service":"instagram"} /-->
                    </ul>
                    <!-- /wp:social-links -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"top","width":"60%"} -->
            <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:60%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"64px","bottom":"64px","left":"64px","right":"64px"}},"border":{"radius":"0px","width":"1px"}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-border-color has-border-color-border-color" style="border-width:1px;border-radius:0px;padding-top:64px;padding-right:64px;padding-bottom:64px;padding-left:64px"><!-- wp:contact-form-7/contact-form-selector {"id":651,"hash":"ca116b5","title":"Contact form 1"} -->
                    <div class="wp-block-contact-form-7-contact-form-selector">[contact-form-7 id="ca116b5" title="Contact form 1"]</div>
                    <!-- /wp:contact-form-7/contact-form-selector -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->