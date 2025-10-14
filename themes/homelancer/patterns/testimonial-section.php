<?php

/**
 * Title: Testimonial Section
 * Slug: homelancer/testimonial-section
 * Categories: homelancer-testimonial
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/rating_star.png',
    $homelancer_url . 'assets/images/team_1.jpg',
    $homelancer_url . 'assets/images/testimonial_1.jpg',
    $homelancer_url . 'assets/images/team_23.jpg',

);
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|80","bottom":"6rem"}},"border":{"radius":"24px"}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"1260px"}} -->
    <div class="wp-block-group has-primary-background-color has-background" style="border-radius:24px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:6rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"64px"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"840px","justifyContent":"center"}} -->
        <div class="wp-block-group" style="margin-bottom:64px"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"54px","lineHeight":"1.4"},"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}}},"textColor":"light-color"} -->
            <h1 class="wp-block-heading has-text-align-center has-light-color-color has-text-color has-link-color" style="font-size:54px;font-style:normal;font-weight:600;line-height:1.4"><?php esc_html_e('We Could Tell You How Great We Are—But Our Clients Do It Better', 'homelancer') ?></h1>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"30px"}}}} -->
        <div class="wp-block-columns"><!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-homelancer-boxshadow-medium","style":{"border":{"radius":"20px","width":"0px","style":"none"},"spacing":{"padding":{"left":"48px","right":"48px","top":"28px","bottom":"28px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"580px"}} -->
                <div class="wp-block-group is-style-homelancer-boxshadow-medium has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:20px;margin-top:0;margin-bottom:0;padding-top:28px;padding-right:48px;padding-bottom:28px;padding-left:48px"><!-- wp:image {"id":939,"width":"140px","height":"28px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"unset"}}} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" class="wp-image-939" style="object-fit:contain;width:140px;height:28px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"20px"}},"textColor":"foreground"} -->
                    <p class="has-text-align-left has-foreground-color has-text-color has-link-color" style="font-size:20px;font-style:normal;font-weight:400"><?php esc_html_e('I’m so impressed with the variety and quality of clothing! Everything I’ve ordered looks just like the pictures and fits perfectly. Plus, customer service is super helpful. Highly recommend!', 'homelancer') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":2415,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($homelancer_images[1]) ?>" alt="" class="wp-image-2415" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"heading-color","fontSize":"medium"} -->
                            <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Robert Mathew', 'homelancer') ?></h5>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"foreground","fontSize":"normal"} -->
                            <p class="has-foreground-color has-text-color has-link-color has-normal-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e('Business Owner', 'homelancer') ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-homelancer-boxshadow-medium","style":{"border":{"radius":"20px","width":"0px","style":"none"},"spacing":{"padding":{"left":"48px","right":"48px","top":"28px","bottom":"28px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"580px"}} -->
                <div class="wp-block-group is-style-homelancer-boxshadow-medium has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:20px;margin-top:0;margin-bottom:0;padding-top:28px;padding-right:48px;padding-bottom:28px;padding-left:48px"><!-- wp:image {"id":939,"width":"140px","height":"28px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"unset"}}} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" class="wp-image-939" style="object-fit:contain;width:140px;height:28px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"20px"}},"textColor":"foreground"} -->
                    <p class="has-text-align-left has-foreground-color has-text-color has-link-color" style="font-size:20px;font-style:normal;font-weight:400"><?php esc_html_e('I’m so impressed with the variety and quality of clothing! Everything I’ve ordered looks just like the pictures and fits perfectly. Plus, customer service is super helpful. Highly recommend!', 'homelancer') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":1069,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($homelancer_images[2]) ?>" alt="" class="wp-image-1069" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"heading-color","fontSize":"medium"} -->
                            <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Samantha Reyes', 'homelancer') ?></h5>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"foreground","fontSize":"normal"} -->
                            <p class="has-foreground-color has-text-color has-link-color has-normal-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e('HR Manager', 'homelancer') ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column"><!-- wp:group {"className":"is-style-homelancer-boxshadow-medium","style":{"border":{"radius":"20px","width":"0px","style":"none"},"spacing":{"padding":{"top":"28px","bottom":"28px","left":"48px","right":"48px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"580px"}} -->
                <div class="wp-block-group is-style-homelancer-boxshadow-medium has-light-color-background-color has-background" style="border-style:none;border-width:0px;border-radius:20px;margin-top:0;margin-bottom:0;padding-top:28px;padding-right:48px;padding-bottom:28px;padding-left:48px"><!-- wp:image {"id":939,"width":"140px","height":"28px","scale":"contain","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"unset"}}} -->
                    <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" class="wp-image-939" style="object-fit:contain;width:140px;height:28px" /></figure>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"20px"}},"textColor":"foreground"} -->
                    <p class="has-text-align-left has-foreground-color has-text-color has-link-color" style="font-size:20px;font-style:normal;font-weight:400"><?php esc_html_e('I’m so impressed with the variety and quality of clothing! Everything I’ve ordered looks just like the pictures and fits perfectly. Plus, customer service is super helpful. Highly recommend!', 'homelancer') ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
                    <div class="wp-block-group"><!-- wp:image {"id":1070,"width":"auto","height":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50px"}}} -->
                        <figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url($homelancer_images[3]) ?>" alt="" class="wp-image-1070" style="border-radius:50px;aspect-ratio:1;object-fit:cover;width:auto;height:60px" /></figure>
                        <!-- /wp:image -->

                        <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"heading-color","fontSize":"medium"} -->
                            <h5 class="wp-block-heading has-heading-color-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('John Miller', 'homelancer') ?></h5>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"foreground","fontSize":"normal"} -->
                            <p class="has-foreground-color has-text-color has-link-color has-normal-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e('Founder', 'homelancer') ?></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
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