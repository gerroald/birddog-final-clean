<?php

/**
 * Title: Latest News and Articles
 * Slug: homelancer/latest-post
 * Categories: homelancer-post
 */
?>
<!-- wp:group {"metadata":{"categories":["homelancer"],"patternName":"homelancer/latest-post","name":"Latest News and Articles"},"align":"full","style":{"spacing":{"padding":{"top":"5rem","bottom":"6rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light-color","layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group alignfull has-light-color-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:5rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:6rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"44px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
    <div class="wp-block-group" style="margin-bottom:44px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0px"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"680px","justifyContent":"left"}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:0px"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"54px"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color"} -->
            <h1 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color has-link-color" style="font-size:54px;font-style:normal;font-weight:600"><?php esc_html_e('Latest Post and Articles', 'homelancer') ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p><?php esc_html_e('Home services" is a broad term that encompasses various services related to the maintenance, improvement, and well-being of a household.', 'homelancer') ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"0px","bottom":"0"}}}} -->
        <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:0px;margin-bottom:0"><!-- wp:button {"backgroundColor":"secondary","textColor":"light-color","className":"is-style-button-hover-primary-bgcolor","style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"}}},"border":{"radius":"6px","width":"0px","style":"none"},"spacing":{"padding":{"left":"28px","right":"28px","top":"16px","bottom":"16px"}},"typography":{"textTransform":"none"}},"fontSize":"normal"} -->
            <div class="wp-block-button is-style-button-hover-primary-bgcolor"><a class="wp-block-button__link has-light-color-color has-secondary-background-color has-text-color has-background has-link-color has-normal-font-size has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-radius:6px;padding-top:16px;padding-right:28px;padding-bottom:16px;padding-left:28px;text-transform:none"><?php esc_html_e('More Articles', 'homelancer') ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->

    <!-- wp:query {"queryId":22,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
    <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"28px"}},"layout":{"type":"grid","columnCount":3}} -->
        <!-- wp:group {"className":"is-style-default","style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}},"border":{"radius":"24px","width":"1px"}},"borderColor":"border-color","layout":{"type":"constrained"}} -->
        <div class="wp-block-group is-style-default has-border-color has-border-color-border-color" style="border-width:1px;border-radius:24px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:post-featured-image {"isLink":true,"height":"240px","style":{"border":{"radius":"20px"}}} /-->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"24px","bottom":"0"},"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-top:24px;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-terms {"term":"category","className":"is-style-categories-background-with-round","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"x-small"} /-->

                <!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.4"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|secondary"}}}},"spacing":{"margin":{"top":"0px"}}},"fontSize":"x-large"} /-->

                <!-- wp:post-excerpt {"excerptLength":13,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"spacing":{"margin":{"top":"10px","bottom":"10px"}}},"textColor":"foreground-alt","fontSize":"normal"} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->