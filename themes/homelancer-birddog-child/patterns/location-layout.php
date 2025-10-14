<?php
/**
 * Title: Location – Full Layout
 * Slug: birddog/location-layout
 * Categories: birddog
 * Block Types: core/post-content
 * Inserter: true
 */
?>

<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"72px","bottom":"72px"}},"color":{"background":"#0a4e56"}},"textColor":"white","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-white-color has-text-color has-background" style="background-color:#0a4e56;padding-top:72px;padding-bottom:72px">
  <!-- wp:group {"layout":{"type":"constrained","contentSize":"900px"}} -->
  <div class="wp-block-group">
    <!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px"}}} -->
    <p style="letter-spacing:1px;text-transform:uppercase">[bd field="eyebrow"]</p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"0"}}}} -->
    <h1 style="margin-top:0"><?php echo esc_html__( '{{Post Title}}', 'birddog' ); ?></h1>
    <!-- /wp:heading -->

    <!-- wp:paragraph -->
    <p><strong>[bd field="lede_bold"]</strong> [bd field="lede"]</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"style":{"spacing":{"blockGap":"12px"}}} -->
    <div class="wp-block-buttons">
      <!-- wp:button {"backgroundColor":"gold","textColor":"ink"} -->
      <div class="wp-block-button"><a class="wp-block-button__link has-ink-color has-gold-background-color has-text-color has-background"><?php echo esc_html__('Get Free {Location} Estimate','birddog'); ?></a></div>
      <!-- /wp:button -->

      <!-- wp:button {"className":"bd-btn-ghost"} -->
      <div class="wp-block-button bd-btn-ghost"><a class="wp-block-button__link"><?php echo esc_html__('Our {Location} Advantage','birddog'); ?></a></div>
      <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->

    <!-- wp:group {"style":{"spacing":{"margin":{"top":"24px"}}}} -->
    <div class="wp-block-group" style="margin-top:24px">[bd_badges]</div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"}},"color":{"background":"#f6fafa"}},"layout":{"type":"constrained","contentSize":"1100px"}} -->
<section class="wp-block-group" style="background-color:#f6fafa;padding-top:64px;padding-bottom:64px">
  <!-- wp:heading {"textAlign":"center"} -->
  <h2 class="has-text-align-center"><?php echo esc_html__('Why {Location} Businesses Choose Us','birddog'); ?></h2>
  <!-- /wp:heading -->

  <!-- wp:columns {"className":"is-style-bd-card","style":{"spacing":{"blockGap":{"left":"24px"},"margin":{"top":"24px"}}}} -->
  <div class="wp-block-columns is-style-bd-card" style="margin-top:24px">
    <!-- Repeat 3 columns x 2 rows (6 cards) -->
    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:group {"style":{"spacing":{"padding":"24px"},"border":{"radius":"14px"},"color":{"background":"#ffffff"}},"className":"is-style-bd-card"} -->
      <div class="wp-block-group is-style-bd-card" style="border-radius:14px;background-color:#ffffff;padding:24px">
        <div class="bd-service-head bg-teal-900"><strong>Loft &amp; Condo Moves</strong></div>
        <!-- wp:paragraph --><p>Industrial lofts, elevators, narrow streets—handled.</p><!-- /wp:paragraph -->
        <!-- wp:list --><ul><li>Freight elevator scheduling</li><li>Antique handling</li><li>Same-day unpacking</li></ul><!-- /wp:list -->
        <!-- wp:button {"className":"is-style-outline"} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link">Get Quote</a></div><!-- /wp:button -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column -->
    <div class="wp-block-column">
      <div class="wp-block-group is-style-bd-card" style="border-radius:14px;background-color:#ffffff;padding:24px">
        <div class="bd-service-head bg-teal-700"><strong>Restaurant Moves</strong></div>
        <p>Kitchen equipment &amp; health-dept coordination.</p>
        <ul><li>Minimal downtime scheduling</li><li>Permits</li><li>Clean equipment handling</li></ul>
        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link">Get Quote</a></div>
      </div>
    </div>
    <!-- /wp:column -->

    <!-- wp:column -->
    <div class="wp-block-column">
      <div class="wp-block-group is-style-bd-card" style="border-radius:14px;background-color:#ffffff;padding:24px">
        <div class="bd-service-head bg-teal-400"><strong>Retail Moves</strong></div>
        <p>Store fixtures, displays &amp; inventory relocation.</p>
        <ul><li>Store fixture installation</li><li>Display setup</li><li>Opening coordination</li></ul>
        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link">Get Quote</a></div>
      </div>
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->

  <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"24px"},"margin":{"top":"24px"}}}} -->
  <div class="wp-block-columns" style="margin-top:24px">
    <!-- duplicate 3 more cards -->
    <div class="wp-block-column">
      <div class="wp-block-group is-style-bd-card" style="border-radius:14px;background-color:#ffffff;padding:24px">
        <div class="bd-service-head bg-teal-700"><strong>Loading Dock Coordination</strong></div>
        <p>Pre-arranged dock &amp; elevator reservations.</p>
        <ul><li>24/7 availability checks</li><li>Building coordination</li><li>Freight elevator scheduling</li></ul>
        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link">Get Quote</a></div>
      </div>
    </div>
    <div class="wp-block-column">
      <div class="wp-block-group is-style-bd-card" style="border-radius:14px;background-color:#ffffff;padding:24px">
        <div class="bd-service-head bg-teal-400"><strong>Parking Permits</strong></div>
        <p>Downtown permits &amp; street closures.</p>
        <ul><li>City permit applications</li><li>Temporary zones</li><li>Street closure coordination</li></ul>
        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link">Get Quote</a></div>
      </div>
    </div>
    <div class="wp-block-column">
      <div class="wp-block-group is-style-bd-card" style="border-radius:14px;background-color:#ffffff;padding:24px">
        <div class="bd-service-head bg-teal-900"><strong>After-Hours Service</strong></div>
        <p>Evening/weekend moves to minimize disruption.</p>
        <ul><li>Weekend availability</li><li>Evening crews</li><li>Holiday scheduling</li></ul>
        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link">Get Quote</a></div>
      </div>
    </div>
  </div>
  <!-- /wp:columns -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"48px","bottom":"48px"}}},"layout":{"type":"constrained","contentSize":"1100px"}} -->
<section class="wp-block-group" style="padding-top:48px;padding-bottom:48px">
  <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"24px"}}}} -->
  <div class="wp-block-columns">
    <div class="wp-block-column">
      <!-- wp:group {"style":{"spacing":{"padding":"24px"},"border":{"radius":"12px","width":"1px"},"color":{"background":"#ffffff","border":"#e5e7eb"}}} -->
      <div class="wp-block-group" style="border-width:1px;border-color:#e5e7eb;border-radius:12px;background-color:#ffffff;padding:24px">
        <!-- wp:paragraph {"fontStyle":"italic","fontWeight":"400"} --><p style="font-style:italic;font-weight:400">“Tight loading dock, 6th floor loft… effortless.”</p><!-- /wp:paragraph -->
        <!-- wp:paragraph --><p><strong>Mike R.</strong> — Loft Resident, {Location}</p><!-- /wp:paragraph -->
      </div>
    </div>
    <div class="wp-block-column">
      <div class="wp-block-group" style="border-width:1px;border-color:#e5e7eb;border-radius:12px;background-color:#ffffff;padding:24px">
        <p style="font-style:italic;font-weight:400">“Moved our restaurant equipment on a Sunday with zero issues.”</p>
        <p><strong>Sarah K.</strong> — Restaurant Owner, {Location}</p>
      </div>
    </div>
  </div>
  <!-- /wp:columns -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px"}},"color":{"background":"#0a4e56"}},"textColor":"white"} -->
<section class="wp-block-group alignfull has-white-color has-text-color has-background" style="background-color:#0a4e56;padding-top:64px;padding-bottom:64px">
  <!-- wp:group {"layout":{"type":"constrained","contentSize":"900px"}} -->
  <div class="wp-block-group">
    <!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">Ready for a Stress-Free {Location} Move?</h2><!-- /wp:heading -->
    <!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center">Join 250+ satisfied customers. Get your free estimate in under 60 seconds.</p><!-- /wp:paragraph -->
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"12px"}}} -->
    <div class="wp-block-buttons">
      <div class="wp-block-button"><a class="wp-block-button__link has-ink-color has-gold-background-color has-text-color has-background">Get Instant Quote</a></div>
      <div class="wp-block-button is-style-outline"><a class="wp-block-button__link">Call (405) 535-4554</a></div>
    </div>
    <!-- /wp:buttons -->
    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px","lineHeight":"1.4"}}} --><p class="has-text-align-center" style="font-size:14px;line-height:1.4">Response guaranteed within 2 hours • No obligation</p><!-- /wp:paragraph -->
  </div>
  <!-- /wp:group -->
</section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"48px","bottom":"48px"}}},"layout":{"type":"constrained","contentSize":"900px"}} -->
<section class="wp-block-group" style="padding-top:48px;padding-bottom:48px">
  <!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">Frequently Asked Questions</h2><!-- /wp:heading -->
  <!-- wp:details --><details class="wp-block-details"><summary>Do you handle loading dock reservations?</summary><p>Yes, we coordinate dock/elevator schedules with building management.</p></details><!-- /wp:details -->
  <!-- wp:details --><details class="wp-block-details"><summary>What about downtown parking during the move?</summary><p>We obtain temporary permits and set up safe loading zones.</p></details><!-- /wp:details -->
  <!-- wp:details --><details class="wp-block-details"><summary>Do you offer flat-rate pricing?</summary><p>We provide transparent, flat-rate quotes for most moves.</p></details><!-- /wp:details -->
  <!-- wp:details --><details class="wp-block-details"><summary>Do you work around busy entertainment hours?</summary><p>Yes, after-hours service is available.</p></details><!-- /wp:details -->
</section>
<!-- /wp:group -->
