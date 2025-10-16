<?php

/**
 * Title: Latest News and Articles 3
 * Slug: homelancer/latest-post-3
 * Categories: homelancer-post
 */
?>
<!-- wp:group {"align":"full","metadata":{"categories":["homelancer-post"],"patternName":"homelancer/latest-post-2","name":"Latest News and Articles"},"style":{"spacing":{"padding":{"top":"5rem","bottom":"6rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group alignfull has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:5rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:6rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"60px"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"680px","justifyContent":"left"}} -->
    <div class="wp-block-group" style="margin-top:0;margin-bottom:60px"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","fontSize":"jumbo"} -->
        <h1 class="wp-block-heading has-text-align-left has-heading-color-color has-text-color has-link-color has-jumbo-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e('Latest Posts &amp; Articles', 'homelancer') ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p><?php esc_html_e('Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'homelancer') ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:query {"queryId":22,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
    <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"28px"}},"layout":{"type":"grid","columnCount":3}} -->
        <!-- wp:group {"className":"is-style-default","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":"0px"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group is-style-default" style="border-radius:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"customOverlayColor":"#866a57","isUserOverlayColor":false,"minHeight":340,"contentPosition":"bottom left","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-cover has-custom-content-position is-position-bottom-left" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:340px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#866a57"></span>
                <div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
                    <p class="has-text-align-center has-large-font-size"></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"28px","right":"28px"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group has-primary-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:28px;padding-bottom:var(--wp--preset--spacing--20);padding-left:28px"><!-- wp:post-date {"textAlign":"center","format":"j","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","lineHeight":"1"}},"fontSize":"jumbo"} /-->

                            <!-- wp:post-date {"format":"F ","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} /-->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
            </div>
            <!-- /wp:cover -->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"24px","bottom":"0"},"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-top:24px;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-terms {"term":"category","className":"is-style-categories-background-with-round","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"x-small"} /-->

                <!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"0px"}}},"fontSize":"large"} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->