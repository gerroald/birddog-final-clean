<?php

/**
 * Title: Hero
 * Slug: homelancer/hero
 * Categories: homelancer-hero
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/hero.jpg',
);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($homelancer_images[0]) ?>","id":1651,"dimRatio":60,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":680,"sizeSlug":"large","style":{"color":{"duotone":"var:preset|duotone|mixed-tone"}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
    <div class="wp-block-cover" style="min-height:680px"><img class="wp-block-cover__image-background wp-image-1651 size-large" alt="" src="<?php echo esc_url($homelancer_images[0]) ?>" data-object-fit="cover" /><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-60 has-background-dim"></span>
        <div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"100px"}}}} -->
            <div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"52%"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:52%"><!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.2","fontSize":"74px"}}} -->
                    <h1 class="wp-block-heading" style="font-size:74px;font-style:normal;font-weight:600;line-height:1.2"><?php esc_html_e('Your One-Stop Solution for All Home Services!', 'homelancer') ?></h1>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color","fontSize":"medium"} -->
                    <p class="has-light-color-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e('From repairs to renovations, cleaning to installations — we deliver trusted, professional home services tailored to your needs, all in one place.', 'homelancer') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
                    <div class="wp-block-buttons is-style-button-transofom-on-hover"><!-- wp:button {"backgroundColor":"secondary","className":"is-style-button-hover-primary-bgcolor","style":{"spacing":{"padding":{"left":"28px","right":"28px","top":"18px","bottom":"18px"}},"border":{"radius":"10px"}},"fontSize":"normal"} -->
                        <div class="wp-block-button is-style-button-hover-primary-bgcolor"><a class="wp-block-button__link has-secondary-background-color has-background has-normal-font-size has-custom-font-size wp-element-button" style="border-radius:10px;padding-top:18px;padding-right:28px;padding-bottom:18px;padding-left:28px"><?php esc_html_e('Schedule an Appointment', 'homelancer') ?></a></div>
                        <!-- /wp:button -->

                        <!-- wp:button {"backgroundColor":"light-color","textColor":"heading-color","className":"is-style-button-hover-secondary-bgcolor","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"padding":{"left":"28px","right":"28px","top":"18px","bottom":"18px"}},"border":{"radius":"10px"}},"fontSize":"normal"} -->
                        <div class="wp-block-button is-style-button-hover-secondary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-light-color-background-color has-text-color has-background has-link-color has-normal-font-size has-custom-font-size wp-element-button" style="border-radius:10px;padding-top:18px;padding-right:28px;padding-bottom:18px;padding-left:28px"><?php esc_html_e('Request Quote', 'homelancer') ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center"} -->
                <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"border":{"radius":{"topLeft":"24px","topRight":"24px","bottomLeft":"24px","bottomRight":"24px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"blockGap":"0","padding":{"top":"28px","bottom":"28px","left":"40px","right":"40px"}}},"backgroundColor":"background-alt","textColor":"heading-color","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group has-heading-color-color has-background-alt-background-color has-text-color has-background has-link-color" style="border-top-left-radius:24px;border-top-right-radius:24px;border-bottom-left-radius:24px;border-bottom-right-radius:24px;padding-top:28px;padding-right:40px;padding-bottom:28px;padding-left:40px"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
                        <h3 class="wp-block-heading" style="font-style:normal;font-weight:600"><?php esc_html_e('Request a Quote', 'homelancer') ?></h3>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph -->
                        <p><?php esc_html_e('Please insert the Contact Form 7 shortcode here with the custom class "<code>homelancer-form-1</code>" to ensure the form displays correctly.', 'homelancer') ?></p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
    </div>
    <!-- /wp:cover -->
</div>
<!-- /wp:group -->