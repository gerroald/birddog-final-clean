<?php

/**
 * Title: Latest News and Articles List Style
 * Slug: homelancer/latest-post-4
 * Categories: homelancer-post
 */
?>
<!-- wp:group {"align":"full","metadata":{"categories":["homelancer-post"],"patternName":"homelancer/latest-post-full","name":"Latest News and Articles"},"style":{"spacing":{"padding":{"top":"5rem","bottom":"6rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"980px"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:5rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:6rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"64px"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"680px","justifyContent":"center"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:64px"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"jumbo"} -->
        <h1 class="wp-block-heading has-text-align-center has-heading-color-color has-text-color has-link-color has-jumbo-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Latest Insights and Articles', 'homelancer') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center"><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'homelancer') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:query {"queryId":22,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
    <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"default","columnCount":3}} -->
        <!-- wp:group {"className":"is-style-default","style":{"spacing":{"padding":{"top":"0px","bottom":"28px","left":"0px","right":"0px"},"margin":{"bottom":"28px"}},"border":{"radius":"0px","bottom":{"color":"var:preset|color|border-color","width":"1px"},"top":{},"right":{},"left":{}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
        <div class="wp-block-group is-style-default" style="border-radius:0px;border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;margin-bottom:28px;padding-top:0px;padding-right:0px;padding-bottom:28px;padding-left:0px"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"40px"}}}} -->
            <div class="wp-block-columns"><!-- wp:column {"width":"40%"} -->
                <div class="wp-block-column" style="flex-basis:40%"><!-- wp:post-featured-image {"isLink":true,"height":"280px","style":{"border":{"radius":"0px"}}} /--></div>
                <!-- /wp:column -->

                <!-- wp:column {"width":""} -->
                <div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0"},"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"780px"}} -->
                    <div class="wp-block-group" style="margin-top:0px;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-terms {"term":"category","className":"is-style-categories-background-with-round","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"x-small"} /-->

                        <!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"0px","bottom":"var:preset|spacing|50"}}},"fontSize":"xx-large"} /-->

                        <!-- wp:post-excerpt {"excerptLength":32,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"spacing":{"margin":{"top":"10px","bottom":"10px"}}},"textColor":"foreground-alt"} /-->

                        <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                        <div class="wp-block-group"><!-- wp:read-more {"content":"Read More","className":"is-style-readmore-hover-primary-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"border":{"width":"1px"},"spacing":{"padding":{"top":"12px","bottom":"12px","left":"24px","right":"24px"}}},"textColor":"heading-color"} /--></div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->

    <!-- wp:buttons {"className":"is-style-button-transofom-on-hover","style":{"spacing":{"margin":{"top":"44px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons is-style-button-transofom-on-hover" style="margin-top:44px"><!-- wp:button {"backgroundColor":"transparent","textColor":"heading-color","className":"is-style-button-hover-primary-bgcolor","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"border":{"width":"1px","radius":"0px"},"spacing":{"padding":{"left":"40px","right":"40px","top":"17px","bottom":"17px"}}}} -->
        <div class="wp-block-button is-style-button-hover-primary-bgcolor"><a class="wp-block-button__link has-heading-color-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="border-width:1px;border-radius:0px;padding-top:17px;padding-right:40px;padding-bottom:17px;padding-left:40px"><?php esc_html_e('View All Articles', 'homelancer') ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->