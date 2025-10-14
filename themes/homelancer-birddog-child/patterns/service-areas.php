<?php
/**
 * Title: Service Areas – Index
 * Slug: birddog/service-areas
 * Categories: birddog
 * Inserter: true
 */
?>

<!-- Hero -->
<!-- wp:group {"tagName":"section","align":"full","style":{"color":{"background":"#0a4e56"},"spacing":{"padding":{"top":"72px","bottom":"72px"}}},"textColor":"white"} -->
<section class="wp-block-group alignfull has-white-color has-text-color has-background" style="background-color:#0a4e56;padding-top:72px;padding-bottom:72px">
  <!-- wp:group {"layout":{"type":"constrained","contentSize":"900px"}} -->
  <div class="wp-block-group">
    <p style="letter-spacing:1px;text-transform:uppercase">Service Areas</p>
    <h1>Local Expertise in Every Neighborhood</h1>
    <p>We know Oklahoma City inside and out — unique downtown loading docks to historic homes. We’ve mastered them all.</p>

    <!-- Search + filters -->
    <!-- wp:search {"label":"Search areas","buttonText":"Search","showLabel":false} /-->
    <!-- wp:buttons {"style":{"spacing":{"blockGap":"8px"}}} -->
    <div class="wp-block-buttons" style="margin-top:12px">
      <div class="wp-block-button is-style-outline"><a class="wp-block-button__link">All</a></div>
      <div class="wp-block-button is-style-outline"><a class="wp-block-button__link">Cities</a></div>
      <div class="wp-block-button is-style-outline"><a class="wp-block-button__link">Neighborhoods</a></div>
    </div>
    <!-- /wp:buttons -->
  </div>
  <!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- Featured Areas -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"48px","bottom":"24px"}},"color":{"background":"#f6fafa"}},"layout":{"type":"constrained","contentSize":"1100px"}} -->
<div class="wp-block-group" style="background-color:#f6fafa;padding-top:48px;padding-bottom:24px">
  <h2>Featured Service Areas</h2>

  <!-- Query: show 'featured' locations (set a term or custom field as needed) -->
  <!-- wp:query {"queryId":1,"query":{"perPage":2,"pages":0,"offset":0,"postType":"location","order":"desc","orderBy":"date","inherit":false},"displayLayout":{"type":"flex","columns":2},"layout":{"type":"constrained"}} -->
  <div class="wp-block-query">
    <!-- wp:post-template -->
      <!-- wp:group {"style":{"spacing":{"padding":"24px"},"border":{"radius":"14px","width":"1px"},"color":{"background":"#ffffff","border":"#e5e7eb"}},"className":"is-style-bd-card"} -->
      <div class="wp-block-group is-style-bd-card" style="border-width:1px;border-color:#e5e7eb;border-radius:14px;background-color:#ffffff;padding:24px">
        <!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","letterSpacing":"1px","textTransform":"uppercase"}}} --><p style="font-size:14px;letter-spacing:1px;text-transform:uppercase">Top Rated • ★ [bd field="rating"]</p><!-- /wp:paragraph -->
        <!-- wp:post-title {"level":3,"isLink":true} /-->
        <!-- wp:post-excerpt {"moreText":""} /-->
        <!-- wp:paragraph --><p><span class="bd-chip">High-rise Moves</span> <span class="bd-chip">Office</span> <span class="bd-chip">Parking Permits</span></p><!-- /wp:paragraph -->
        <!-- wp:paragraph --><p>📦 [bd field="moves_completed"]+ moves completed</p><!-- /wp:paragraph -->
        <!-- wp:buttons --><div class="wp-block-buttons"><div class="wp-block-button"><a class="wp-block-button__link" href="#">Learn More</a></div></div><!-- /wp:buttons -->
      </div>
      <!-- /wp:group -->
    <!-- /wp:post-template -->
  </div>
  <!-- /wp:query -->
</div>
<!-- /wp:group -->

<!-- All Areas Grid -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"64px"}},"color":{"background":"#f6fafa"}},"layout":{"type":"constrained","contentSize":"1100px"}} -->
<div class="wp-block-group" style="background-color:#f6fafa;padding-top:24px;padding-bottom:64px">
  <h2>All Service Areas</h2>

  <!-- wp:query {"queryId":2,"query":{"perPage":9,"pages":0,"offset":0,"postType":"location","order":"asc","orderBy":"title","inherit":false},"displayLayout":{"type":"grid","columns":3}} -->
  <div class="wp-block-query">
    <!-- wp:post-template -->
      <!-- wp:group {"style":{"spacing":{"padding":"24px"},"border":{"radius":"14px","width":"1px"},"color":{"background":"#ffffff","border":"#e5e7eb"}},"className":"is-style-bd-card"} -->
      <div class="wp-block-group is-style-bd-card" style="border-width:1px;border-color:#e5e7eb;border-radius:14px;background-color:#ffffff;padding:24px">
        <!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","textTransform":"uppercase"}}} --><p style="font-size:14px;text-transform:uppercase"><strong><em><span class="bd-chip">[bd field="area_label"]</span></em></strong></p><!-- /wp:paragraph -->
        <!-- wp:post-title {"level":3,"isLink":true} /-->
        <!-- wp:post-excerpt {"moreText":""} /-->
        <!-- wp:paragraph --><p><span class="bd-chip">ZIPs: [bd field="zips"]</span></p><!-- /wp:paragraph -->

        <!-- wp:buttons {"style":{"spacing":{"blockGap":"8px"}}} -->
        <div class="wp-block-buttons">
          <div class="wp-block-button"><a class="wp-block-button__link">Get Quote</a></div>
          <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Details</a></div>
        </div>
        <!-- /wp:buttons -->
      </div>
      <!-- /wp:group -->
    <!-- /wp:post-template -->

    <!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
      <!-- wp:query-pagination-previous /-->
      <!-- wp:query-pagination-numbers /-->
      <!-- wp:query-pagination-next /-->
    <!-- /wp:query-pagination -->
  </div>
  <!-- /wp:query -->
</div>
<!-- /wp:group -->

<!-- Bottom CTA -->
<!-- wp:group {"align":"full","style":{"color":{"background":"#0a4e56"},"spacing":{"padding":{"top":"56px","bottom":"56px"}}},"textColor":"white"} -->
<div class="wp-block-group alignfull has-white-color has-text-color has-background" style="background-color:#0a4e56;padding-top:56px;padding-bottom:56px">
  <!-- wp:group {"layout":{"type":"constrained","contentSize":"900px"}} -->
  <div class="wp-block-group">
    <h2 class="has-text-align-center">Don't See Your Area?</h2>
    <p class="has-text-align-center">We serve the entire OKC metro. Get in touch and we’ll take care of your move.</p>
    <div class="wp-block-buttons" style="justify-content:center;gap:12px;display:flex">
      <div class="wp-block-button"><a class="wp-block-button__link has-ink-color has-gold-background-color has-text-color has-background">Get Free Quote</a></div>
      <div class="wp-block-button is-style-outline"><a class="wp-block-button__link">Call (405) 535-4554</a></div>
    </div>
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
