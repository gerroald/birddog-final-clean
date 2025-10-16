<?php

/**
 * Title: Footer Default
 * Slug: homelancer/footer-default
 * Categories: homelancer-footer
 * Block Types: core/template-part/footer
 * Post Types: wp_template
 * Inserter: true
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/homelancer.png',
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"homelancer-footer","style":{"spacing":{"padding":{"top":"0px","right":"0","left":"0","bottom":"0px"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"0px","style":"none"}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"100%"}} -->
    <div class="wp-block-group homelancer-footer has-primary-background-color has-background" style="border-style:none;border-width:0px;margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"84px","bottom":"84px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:84px;padding-right:var(--wp--preset--spacing--40);padding-bottom:84px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"margin":{"top":"0px"},"blockGap":{"left":"48px"}}}} -->
            <div class="wp-block-columns" style="margin-top:0px"><!-- wp:column {"width":"30%"} -->
                <div class="wp-block-column" style="flex-basis:30%"><!-- wp:group {"layout":{"type":"constrained","contentSize":"","justifyContent":"left"}} -->
                    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                        <div class="wp-block-group"><!-- wp:image {"id":787,"width":"40px","height":"40px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" class="wp-image-787" style="object-fit:contain;width:40px;height:40px" /></figure>
                            <!-- /wp:image -->

                            <!-- wp:site-title {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-large"} /-->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background-alt"}}}},"textColor":"background-alt"} -->
                        <p class="has-background-alt-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'homelancer') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:social-links {"iconColor":"light-color","iconColorValue":"#FFFFFE","customIconBackgroundColor":"#ffffff0d","iconBackgroundColorValue":"#ffffff0d","className":"is-style-default","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"bottom":"0"}}}} -->
                    <ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default" style="margin-bottom:0"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

                        <!-- wp:social-link {"url":"#","service":"facebook"} /-->

                        <!-- wp:social-link {"url":"#","service":"linkedin"} /-->

                        <!-- wp:social-link {"url":"#","service":"vk"} /-->

                        <!-- wp:social-link {"url":"#","service":"x"} /-->

                        <!-- wp:social-link {"url":"#","service":"youtube"} /-->
                    </ul>
                    <!-- /wp:social-links -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"className":"homelancer-footer-list","style":{"spacing":{"padding":{"right":"0px","left":"0px"}},"border":{"left":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"}}}} -->
                <div class="wp-block-column homelancer-footer-list" style="border-right-style:none;border-right-width:0px;border-left-style:none;border-left-width:0px;padding-right:0px;padding-left:0px"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"large"} -->
                    <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-large-font-size"><?php esc_html_e('About', 'homelancer') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:list {"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"24px","bottom":"0"}},"typography":{"lineHeight":"1.5","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|background-alt"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"fontSize":"normal"} -->
                    <ul style="margin-top:24px;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5;text-transform:none" class="wp-block-list is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-normal-font-size"><!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#"><?php esc_html_e('About Us', 'homelancer') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#"><?php esc_html_e('Policy', 'homelancer') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#"><?php esc_html_e('Terms and Conditions', 'homelancer') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#"><?php esc_html_e('Career', 'homelancer') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#"><?php esc_html_e('Blog', 'homelancer') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#"><?php esc_html_e('Contact Us', 'homelancer') ?></a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"className":"homelancer-footer-list","style":{"spacing":{"padding":{"right":"0px","left":"0px"}},"border":{"left":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"}}}} -->
                <div class="wp-block-column homelancer-footer-list" style="border-right-style:none;border-right-width:0px;border-left-style:none;border-left-width:0px;padding-right:0px;padding-left:0px"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"large"} -->
                    <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-large-font-size"><?php esc_html_e('Services', 'homelancer') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:list {"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"24px","bottom":"0"}},"typography":{"lineHeight":"1.5","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|background-alt"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"fontSize":"normal"} -->
                    <ul style="margin-top:24px;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5;text-transform:none" class="wp-block-list is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-normal-font-size"><!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#"><?php esc_html_e('Gardening Services', 'homelancer') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#"><?php esc_html_e('HVAC Services', 'homelancer') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#"><?php esc_html_e('Plumbing Services', 'homelancer') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#"><?php esc_html_e('Electrician Services', 'homelancer') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#"><?php esc_html_e('Home Repair', 'homelancer') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#"><?php esc_html_e('Cleaning Services', 'homelancer') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#"><?php esc_html_e('Painting Services', 'homelancer') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#"><?php esc_html_e('Drywall and Wall Repair', 'homelancer') ?></a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"className":"homelancer-footer-list","style":{"spacing":{"blockGap":"0"}}} -->
                <div class="wp-block-column homelancer-footer-list"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"large"} -->
                    <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-large-font-size"><?php esc_html_e('Contact Us', 'homelancer') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:list {"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"24px","bottom":"0"}},"typography":{"lineHeight":"1.5","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|background-alt"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"fontSize":"normal"} -->
                    <ul style="margin-top:24px;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5;text-transform:none" class="wp-block-list is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-normal-font-size"><!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#"><?php esc_html_e('14th Street, Caltech, New Jersey, Alabama', 'homelancer') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#"><?php esc_html_e('+1 (000) 012-3456', 'homelancer') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#"><?php esc_html_e('email@example.com', 'homelancer') ?></a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->

                    <!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"spacing":{"margin":{"top":"28px"}}},"textColor":"light-color","fontSize":"large"} -->
                    <h3 class="wp-block-heading has-light-color-color has-text-color has-link-color has-large-font-size" style="margin-top:28px"><?php esc_html_e('Business Hours', 'homelancer') ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:list {"className":"is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"20px","bottom":"0"}},"typography":{"lineHeight":"1.5","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|background-alt"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"fontSize":"normal"} -->
                    <ul style="margin-top:20px;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:1.5;text-transform:none" class="wp-block-list is-style-hide-bullet-list-link-hover-style-white is-style-list-style-no-bullet has-link-color has-normal-font-size"><!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#"><?php esc_html_e('Monday-Friday : 10:00AM - 6:00PM', 'homelancer') ?></a></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><a href="#"><?php esc_html_e('Sunday-Monday : Closed', 'homelancer') ?></a></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"32px","bottom":"32px"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"color":"#ffffff17","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
        <div class="wp-block-group" style="border-top-color:#ffffff17;border-top-width:1px;margin-top:0;margin-bottom:0;padding-top:32px;padding-right:var(--wp--preset--spacing--40);padding-bottom:32px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|background-alt"}}},"typography":{"lineHeight":"1.5"}},"textColor":"background-alt","fontSize":"normal"} -->
                <p class="has-text-align-center has-background-alt-color has-text-color has-link-color has-normal-font-size" style="line-height:1.5"><?php esc_html_e('Proudly powered by WordPress | Theme HomeLancer by CozyThemes', 'homelancer') ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
    <div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"backgroundColor":"primary","textColor":"foregound-alt","className":"homelancer-scrollto-top is-style-button-hover-secondary-bgcolor","style":{"border":{"radius":"50%"}}} -->
        <div class="wp-block-button homelancer-scrollto-top is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-foregound-alt-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:50%"><?php esc_html_e('Scroll to Top', 'homelancer') ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->