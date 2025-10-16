<?php

/**
 * Title: Latest News and Articles 2
 * Slug: homelancer/latest-post-2
 * Categories: homelancer-post
 */
?>
<!-- wp:group {"align":"full","metadata":{"categories":["homelancer-post"],"patternName":"homelancer/latest-post","name":"Latest News and Articles"},"style":{"spacing":{"padding":{"top":"5rem","bottom":"6rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group alignfull has-background-alt-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:5rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:6rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"60px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:60px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0px"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"680px","justifyContent":"left"}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:0px"><!-- wp:heading {"textAlign":"left","level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"small"} -->
            <h5 class="wp-block-heading has-text-align-left has-foreground-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:500;text-transform:uppercase"><?php esc_html_e('Blogs &amp; Articles', 'homelancer') ?></h5>
            <!-- /wp:heading -->

            <!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"jumbo"} -->
            <h1 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color has-link-color has-jumbo-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Latest Insights and Trends', 'homelancer') ?></h1>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:buttons -->
        <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","className":"is-style-button-hover-primary-bgcolor","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"border":{"width":"1px","radius":"0px"},"spacing":{"padding":{"left":"40px","right":"40px","top":"16px","bottom":"16px"}}}} -->
            <div class="wp-block-button is-style-button-hover-primary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:0px;padding-top:16px;padding-right:40px;padding-bottom:16px;padding-left:40px"><?php esc_html_e('View All Articles', 'homelancer') ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

    <!-- wp:query {"queryId":22,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
    <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"28px"}},"layout":{"type":"grid","columnCount":3}} -->
        <!-- wp:group {"className":"is-style-default","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"0px"}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
        <div class="wp-block-group is-style-default has-background-background-color has-background" style="border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"isLink":true,"height":"260px","style":{"border":{"radius":"0px"}}} /-->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0"},"padding":{"top":"28px","bottom":"28px","left":"28px","right":"28px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-top:0px;margin-bottom:0;padding-top:28px;padding-right:28px;padding-bottom:28px;padding-left:28px"><!-- wp:post-terms {"term":"category","className":"is-style-categories-background-with-round","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"x-small"} /-->

                <!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"0px"}}},"fontSize":"large"} /-->

                <!-- wp:post-excerpt {"excerptLength":13,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"spacing":{"margin":{"top":"10px","bottom":"10px"}}},"textColor":"foreground-alt"} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->