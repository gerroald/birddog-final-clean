<?php

/**
 * Title: Logos Showcase
 * Slug: homelancer/logo-showcase
 * Categories: homelancer-logocase
 */
$homelancer_url = trailingslashit(get_template_directory_uri());
$homelancer_images = array(
    $homelancer_url . 'assets/images/logo_1.png',
    $homelancer_url . 'assets/images/logo_2.png',
    $homelancer_url . 'assets/images/logo_3.png',
    $homelancer_url . 'assets/images/logo_4.png',
    $homelancer_url . 'assets/images/logo_5.png',
    $homelancer_url . 'assets/images/logo_6.png'
);
?>
<!-- wp:group {"metadata":{"categories":["homelancer-logocase"],"patternName":"homelancer/logo-showcase","name":"Logos Showcase"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"color":"var:preset|color|background-alt","width":"1px"},"top":[],"right":[],"left":[]}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull has-light-color-background-color has-background" style="border-bottom-color:var(--wp--preset--color--background-alt);border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0"},"padding":{"bottom":"0px"}},"border":{"bottom":{"width":"0px","style":"none"},"top":[],"right":[],"left":[]}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
    <div class="wp-block-group" style="border-bottom-style:none;border-bottom-width:0px;margin-top:0px;margin-bottom:0;padding-bottom:0px"><!-- wp:gallery {"columns":6,"imageCrop":false,"linkTo":"none","className":"homelancer-brands is-style-enable-grayscale-mode-on-image","style":{"spacing":{"margin":{"top":"0px"},"blockGap":{"left":"0"}}}} -->
        <figure class="wp-block-gallery has-nested-images columns-6 homelancer-brands is-style-enable-grayscale-mode-on-image" style="margin-top:0px"><!-- wp:image {"id":1610,"sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image size-large"><img src="<?php echo esc_url($homelancer_images[0]) ?>" alt="" class="wp-image-1610" /></figure>
            <!-- /wp:image -->

            <!-- wp:image {"id":1613,"sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image size-large"><img src="<?php echo esc_url($homelancer_images[1]) ?>" alt="" class="wp-image-1613" /></figure>
            <!-- /wp:image -->

            <!-- wp:image {"id":1612,"sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image size-large"><img src="<?php echo esc_url($homelancer_images[2]) ?>" alt="" class="wp-image-1612" /></figure>
            <!-- /wp:image -->

            <!-- wp:image {"id":1608,"sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image size-large"><img src="<?php echo esc_url($homelancer_images[3]) ?>" alt="" class="wp-image-1608" /></figure>
            <!-- /wp:image -->

            <!-- wp:image {"id":1611,"sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image size-large"><img src="<?php echo esc_url($homelancer_images[4]) ?>" alt="" class="wp-image-1611" /></figure>
            <!-- /wp:image -->

            <!-- wp:image {"id":1609,"sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image size-large"><img src="<?php echo esc_url($homelancer_images[5]) ?>" alt="" class="wp-image-1609" /></figure>
            <!-- /wp:image -->
        </figure>
        <!-- /wp:gallery -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->