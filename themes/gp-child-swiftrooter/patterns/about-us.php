<?php

/**
 * Title: About Us Section
 * Slug: homelancer/about-us
 * Categories: homelancer-about
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/about.jpg',
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"100px","bottom":"100px"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:100px;padding-right:var(--wp--preset--spacing--40);padding-bottom:100px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"0px","bottom":"0"},"blockGap":{"top":"var:preset|spacing|40","left":"80px"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0px;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center"} -->
        <div class="wp-block-column is-vertically-aligned-center"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[0]) ?>","id":1763,"dimRatio":0,"customOverlayColor":"#9b9185","isUserOverlayColor":false,"minHeight":560,"isDark":false,"sizeSlug":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0px"}},"border":{"radius":"24px"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover is-light" style="border-radius:24px;margin-top:0;margin-bottom:0px;min-height:560px"><img class="wp-block-cover__image-background wp-image-1763 size-full" alt="" src="<?php echo esc_url($homelancer_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#9b9185"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->
                </div>
            </div>
            <!-- /wp:cover -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"24px","padding":{"right":"0px","left":"0px"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="padding-right:0px;padding-left:0px"><!-- wp:heading {"level":5,"style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"small"} -->
            <h5 class="wp-block-heading has-foreground-color has-text-color has-link-color has-small-font-size" style="text-transform:uppercase"><?php esc_html_e('About Us', 'homelancer') ?></h5>
            <!-- /wp:heading -->

            <!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"20px","bottom":"0"}}},"fontSize":"mega"} -->
            <h1 class="wp-block-heading has-mega-font-size" style="margin-top:20px;margin-bottom:0;font-style:normal;font-weight:600;line-height:1.2"><?php esc_html_e('Your Trusted Home Service Experts', 'homelancer') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"}}} -->
            <p style="font-size:18px"><?php esc_html_e('Home services is a broad term that encompasses various services related to the maintenance, improvement, and well-being of a household. These services can be essential for homeowners to ensure the smooth functioning and comfort of their homes.', 'homelancer') ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column -->
                <div class="wp-block-column"><!-- wp:list {"className":"is-style-list-style-check-circle","style":{"spacing":{"padding":{"right":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
                    <ul style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0" class="wp-block-list is-style-list-style-check-circle"><!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e('100% Satisfaction Guarantee', 'homelancer') ?></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e('20+ Years in Industry', 'homelancer') ?></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column"><!-- wp:list {"className":"is-style-list-style-check-circle","style":{"spacing":{"padding":{"right":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
                    <ul style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0" class="wp-block-list is-style-list-style-check-circle"><!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e('Highly Experts Team', 'homelancer') ?></li>
                        <!-- /wp:list-item -->

                        <!-- wp:list-item {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
                        <li style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e('Deliver in Time', 'homelancer') ?></li>
                        <!-- /wp:list-item -->
                    </ul>
                    <!-- /wp:list -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

            <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"28px","bottom":"0"}}}} -->
            <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:28px;margin-bottom:0"><!-- wp:button {"backgroundColor":"secondary","textColor":"light-color","className":"is-style-button-hover-primary-bgcolor","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"border":{"width":"1px","radius":"6px"},"spacing":{"padding":{"left":"28px","right":"28px","top":"16px","bottom":"16px"}},"typography":{"textTransform":"none"}},"fontSize":"normal"} -->
                <div class="wp-block-button is-style-button-hover-primary-bgcolor"><a class="wp-block-button__link has-light-color-color has-secondary-background-color has-text-color has-background has-link-color has-normal-font-size has-custom-font-size wp-element-button" style="border-width:1px;border-radius:6px;padding-top:16px;padding-right:28px;padding-bottom:16px;padding-left:28px;text-transform:none"><?php esc_html_e('Schedule an Appointment', 'homelancer') ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->