<?php
/**
 * Title: Pricing – Bird Dog
 * Slug: birddog/pricing
 * Categories: birddog
 * Inserter: true
 */
?>

<!-- HERO -->
<!-- wp:group {"tagName":"section","align":"full","style":{"color":{"background":"#0a4e56"},"spacing":{"padding":{"top":"56px","bottom":"36px"}}},"textColor":"white"} -->
<section class="wp-block-group alignfull has-white-color has-text-color has-background" style="background-color:#0a4e56;padding-top:56px;padding-bottom:36px">
  <div class="wp-block-group" style="max-width:900px;margin:0 auto;text-align:center">
    <h1>Transparent Moving Prices in Oklahoma City</h1>
    <p>Clear, written estimates. No hidden fees, ever. Choose hourly or flat-rate, with options for packing only.</p>
    <div class="wp-block-buttons" style="justify-content:center;gap:12px;display:flex">
      <div class="wp-block-button"><a class="wp-block-button__link has-ink-color has-gold-background-color has-text-color has-background" href="/quote">Get a Free Quote</a></div>
      <div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="tel:14055354554">Call (405) 535-4554</a></div>
    </div>
  </div>
</section>
<!-- /wp:group -->

<!-- INTERACTIVE PRICE CARD -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"32px","bottom":"8px"}}},"layout":{"type":"constrained","contentSize":"900px"}} -->
<section class="wp-block-group" style="padding-top:32px;padding-bottom:8px">

  <!-- wp:heading {"level":2,"className":"has-text-align-center"} -->
  <h2 class="has-text-align-center">Pick a plan that fits your move</h2>
  <!-- /wp:heading -->

  <!-- wp:html -->
  <div class="bd-price-card" data-active="hourly" role="region" aria-label="Pricing options">
    <div class="bd-price-tabs" role="tablist" aria-label="Price options">
      <button class="bd-price-tab is-active" role="tab" aria-selected="true" aria-controls="bd-price-hourly" data-target="hourly">Hourly</button>
      <button class="bd-price-tab" role="tab" aria-selected="false" aria-controls="bd-price-flat" data-target="flat">Flat-Rate</button>
      <button class="bd-price-tab" role="tab" aria-selected="false" aria-controls="bd-price-pack" data-target="pack">Packing Only</button>
    </div>

    <!-- Hourly -->
    <article id="bd-price-hourly" class="bd-price-pane is-active" role="tabpanel">
      <header class="bd-price-head">
        <h3>Hourly Moving</h3>
        <p class="bd-price-number"><strong>$129–$189</strong> / hr</p>
        <p class="bd-price-sub">Based on crew size (2–4 movers) • 2-hour minimum</p>
      </header>
      <ul class="bd-price-list">
        <li>Clean, careful crew + truck</li>
        <li>Blankets, shrink wrap, floor & door protection</li>
        <li>Load, transport, and room placement</li>
        <li>Fuel & basic equipment included</li>
      </ul>
      <footer class="bd-price-cta">
        <a class="bd-btn bd-btn-primary" href="/quote">Get My Hourly Estimate</a>
        <a class="bd-btn bd-btn-ghost" href="tel:14055354554">Call (405) 535-4554</a>
      </footer>
    </article>

    <!-- Flat -->
    <article id="bd-price-flat" class="bd-price-pane" role="tabpanel" hidden>
      <header class="bd-price-head">
        <h3>Flat-Rate Moving</h3>
        <p class="bd-price-number"><strong>Custom</strong> per job</p>
        <p class="bd-price-sub">Locked price after virtual/onsite walkthrough</p>
      </header>
      <ul class="bd-price-list">
        <li>Exact price in writing—no surprises</li>
        <li>Ideal for long distance or multi-stop moves</li>
        <li>Includes route planning & building coordination</li>
        <li>Ask about after-hours / weekend moves</li>
      </ul>
      <footer class="bd-price-cta">
        <a class="bd-btn bd-btn-primary" href="/quote">Get My Flat-Rate Quote</a>
        <a class="bd-btn bd-btn-ghost" href="/long-distance-movers-oklahoma-city">See Long-Distance</a>
      </footer>
    </article>

    <!-- Packing -->
    <article id="bd-price-pack" class="bd-price-pane" role="tabpanel" hidden>
      <header class="bd-price-head">
        <h3>Packing Only</h3>
        <p class="bd-price-number"><strong>$65–$85</strong> / hr each</p>
        <p class="bd-price-sub">Pro packers • Materials available</p>
      </header>
      <ul class="bd-price-list">
        <li>Kitchen, closets, art & fragile items</li>
        <li>Labeled rooms and inventory list</li>
        <li>Materials billed at cost (or provide your own)</li>
        <li>Add to any move or schedule independently</li>
      </ul>
      <footer class="bd-price-cta">
        <a class="bd-btn bd-btn-primary" href="/quote">Book Packing Help</a>
        <a class="bd-btn bd-btn-ghost" href="/residential-movers-oklahoma-city">See Residential</a>
      </footer>
    </article>
  </div>

  <script>
    (function(){
      const wrap = document.currentScript.previousElementSibling;
      const tabs = wrap.querySelectorAll('.bd-price-tab');
      const panes = wrap.querySelectorAll('.bd-price-pane');
      tabs.forEach(btn=>{
        btn.addEventListener('click', ()=>{
          const target = btn.dataset.target;
          // tabs
          tabs.forEach(b=>{ b.classList.toggle('is-active', b===btn); b.setAttribute('aria-selected', b===btn?'true':'false'); });
          // panes
          panes.forEach(p=>{
            const show = p.id === 'bd-price-' + target;
            p.classList.toggle('is-active', show);
            p.hidden = !show;
          });
          wrap.setAttribute('data-active', target);
        });
      });
    })();
  </script>
  <!-- /wp:html -->

  <p style="text-align:center;margin-top:10px"><em>Rates vary by crew size, access (stairs/elevator), distance, and specialty items (pianos, safes). Get your written estimate below.</em></p>
</section>
<!-- /wp:group -->

<!-- COMPARISON TABLE -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"16px","bottom":"24px"}}},"layout":{"type":"constrained","contentSize":"1100px"}} -->
<section class="wp-block-group" style="padding-top:16px;padding-bottom:24px">
  <h2>What’s Included</h2>

  <!-- wp:table {"className":"bd-compare"} -->
  <figure class="wp-block-table bd-compare"><table>
    <thead>
      <tr>
        <th>Feature</th>
        <th>Hourly</th>
        <th>Flat-Rate</th>
        <th>Packing Only</th>
      </tr>
    </thead>
    <tbody>
      <tr><td>Licensed & Insured Crew</td><td>✔</td><td>✔</td><td>✔</td></tr>
      <tr><td>Truck & Fuel</td><td>✔</td><td>✔</td><td>—</td></tr>
      <tr><td>Floor & Door Protection</td><td>✔</td><td>✔</td><td>—</td></tr>
      <tr><td>Packing Materials</td><td>Optional</td><td>Optional</td><td>Optional</td></tr>
      <tr><td>Building / Permit Coordination</td><td>Optional</td><td>✔</td><td>—</td></tr>
      <tr><td>After-Hours Options</td><td>✔</td><td>✔</td><td>—</td></tr>
      <tr><td>Written Estimate</td><td>✔</td><td>✔ (locked)</td><td>✔</td></tr>
    </tbody>
  </table></figure>
  <!-- /wp:table -->
</section>
<!-- /wp:group -->

<!-- FAQ -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"8px","bottom":"16px"}}},"layout":{"type":"constrained","contentSize":"900px"}} -->
<section class="wp-block-group" style="padding-top:8px;padding-bottom:16px">
  <h2>Pricing FAQs</h2>
  <details class="wp-block-details"><summary>What affects my price?</summary><p>Crew size, inventory, distance, access (stairs/elevator), and specialty items. We’ll give you a written estimate before booking.</p></details>
  <details class="wp-block-details"><summary>Is there a minimum?</summary><p>Hourly moves have a 2-hour minimum. Flat-rate moves are quoted after a walkthrough.</p></details>
  <details class="wp-block-details"><summary>Do you charge travel fees?</summary><p>Within OKC core, travel is included for most jobs. For outer metros, we’ll list any travel time on your estimate.</p></details>
</section>
<!-- /wp:group -->

<!-- CTA BAND -->
<!-- wp:group {"align":"full","style":{"color":{"background":"linear-gradient(90deg,#0e6f76 0%,#48c6a9 100%)"},"spacing":{"padding":{"top":"32px","bottom":"32px"}}},"textColor":"white"} -->
<div class="wp-block-group alignfull has-white-color has-text-color has-background" style="background:linear-gradient(90deg,#0e6f76 0%,#48c6a9 100%);padding-top:32px;padding-bottom:32px">
  <div class="wp-block-group" style="max-width:900px;margin:0 auto;text-align:center">
    <h2>Ready to see your exact price?</h2>
    <div class="wp-block-buttons" style="justify-content:center;gap:12px;display:flex">
      <div class="wp-block-button"><a class="wp-block-button__link has-ink-color has-gold-background-color has-text-color has-background" href="/quote">Start My Free Estimate</a></div>
      <div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="tel:14055354554">Call (405) 535-4554</a></div>
    </div>
  </div>
</div>
<!-- /wp:group -->
