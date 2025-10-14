<?php

/**
 * Title: Newsletter Section
 * Slug: homelancer/newsletter-section
 * Categories: homelancer-contact
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|80","bottom":"var:preset|spacing|70"}},"color":{"background":"#f2f2f2"}},"layout":{"type":"constrained","contentSize":"788px"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#f2f2f2;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"xxx-large"} -->
    <h2 class="wp-block-heading has-text-align-center has-xxx-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Join Our Community – Stay Updated!', 'homelancer') ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center"><?php esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.', 'homelancer') ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:contact-form-7/contact-form-selector {"id":253,"hash":"f245613","title":"Newsletter","className":"homelancer-newsletter-2"} -->
    <div class="wp-block-contact-form-7-contact-form-selector homelancer-newsletter-2">[contact-form-7 id="f245613" title="Newsletter"]</div>
    <!-- /wp:contact-form-7/contact-form-selector -->
</div>
<!-- /wp:group -->