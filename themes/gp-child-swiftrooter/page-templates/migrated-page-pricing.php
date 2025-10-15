<?php
/*
Template Name: Combined Pricing & Estimates
*/

get_header(); ?>
<div class="mp-hero">
    <h1>Transparent, Simple Pricing</h1>
    <p>No Hidden Fees. No Surprises. Just Honest Moving from the best movers OKC has to offer.</p>
</div>

<div class="mp-tabs">
    <button type="button" class="mp-tab-button is-active" data-tab="residential">Residential</button>
    <button type="button" class="mp-tab-button" data-tab="commercial">Commercial</button>
    <button type="button" class="mp-tab-button" data-tab="specialty">Specialty Services</button>
</div>

<div class="mp-tab-panels">
    <div class="mp-tab-panel is-active" data-panel="residential">
        <div class="mp-crew-grid">
            <div class="mp-crew-card is-active" data-crew-size="2" data-crew-rate="137.5" data-crew-base="275" data-popular="true">
                <div class="mp-badge">Most Popular</div>
                <div class="mp-crew-size">2-Man Crew</div>
                <div class="mp-crew-rate">$137.50 <span class="mp-per-hour">/hr</span></div>
                <div class="mp-crew-minimum">2-hour minimum: $275</div>
                <button type="button" class="mp-select-button is-active">Selected ✓</button>
            </div>
            <div class="mp-crew-card" data-crew-size="3" data-crew-rate="187.5" data-crew-base="375">
                <div class="mp-crew-size">3-Man Crew</div>
                <div class="mp-crew-rate">$187.50 <span class="mp-per-hour">/hr</span></div>
                <div class="mp-crew-minimum">2-hour minimum: $375</div>
                <button type="button" class="mp-select-button">Select</button>
            </div>
            <div class="mp-crew-card" data-crew-size="4" data-crew-rate="237.5" data-crew-base="475">
                <div class="mp-crew-size">4-Man Crew</div>
                <div class="mp-crew-rate">$237.50 <span class="mp-per-hour">/hr</span></div>
                <div class="mp-crew-minimum">2-hour minimum: $475</div>
                <button type="button" class="mp-select-button">Select</button>
            </div>
        </div>

        <div class="mp-included">
            <div class="mp-included-grid">
                <div>✓ 26ft box truck with liftgate</div>
                <div>✓ Furniture wrap &amp; blankets</div>
                <div>✓ Assembly/disassembly</div>
                <div>✓ Professional crew</div>
            </div>
        </div>

        <div class="mp-calculator">
            <h3>Estimate Your Move Cost</h3>
            <p>Get a free moving estimate and see how our transparent moving prices make planning your move stress-free.</p>
            <div class="mp-calc-row">
                <label for="mp-crew-select">Crew Size:</label>
                <select id="mp-crew-select" class="mp-select">
                    <option value="2">2-Man Crew ($137.50/hr)</option>
                    <option value="3">3-Man Crew ($187.50/hr)</option>
                    <option value="4">4-Man Crew ($237.50/hr)</option>
                </select>
            </div>
            <div class="mp-calc-row">
                <label for="mp-hours-select">Estimated Hours:</label>
                <select id="mp-hours-select" class="mp-select">
                    <option value="2">2 hours</option>
                    <option value="3" selected>3 hours</option>
                    <option value="4">4 hours</option>
                    <option value="5">5 hours</option>
                    <option value="6">6 hours</option>
                    <option value="7">7 hours</option>
                    <option value="8">8 hours</option>
                    <option value="9">8+ hours (contact us)</option>
                </select>
            </div>
            <div class="mp-breakdown">
                <div class="mp-line">
                    <span id="mp-labor-description">Labor (3 hrs × $137.50)</span>
                    <span id="mp-labor-amount">$412.50</span>
                </div>
                <div class="mp-line">
                    <span>One-time fuel charge</span>
                    <span id="mp-fuel-amount">$75.00</span>
                </div>
                <div class="mp-divider"></div>
                <div class="mp-total">
                    <span>Estimated Total</span>
                    <span id="mp-total-amount">$487.50</span>
                </div>
            </div>
            <a class="mp-call-button" href="tel:405-535-4554">📞 Call 405-535-4554 to Book</a>
        </div>

        <div class="mp-fine-print">
            <ul>
                <li>2-hour minimum applies to all moves</li>
                <li>$75 fuel charge covers all local metro trips for the day</li>
                <li>Final cost based on actual time (billed by the hour after minimum)</li>
                <li>Long-distance moves: fuel costs passed through at actual cost</li>
            </ul>
        </div>
    </div>
</div>

<section class="bd-section" aria-labelledby="faq-title">
    <div class="bd-container">
        <h2 id="faq-title" class="bd-section__title">Pricing &amp; Quote FAQs</h2>

        <div class="bd-faq" data-accordion>
            <details class="bd-faq__item">
                <summary class="bd-faq__question">How much do movers cost in OKC?</summary>
                <div class="bd-faq__answer">
                    The cost depends on crew size, hours, and services. Use our <a href="/residential-movers-okc">Residential Movers OKC</a> page for more details.
                </div>
            </details>

            <details class="bd-faq__item">
                <summary class="bd-faq__question">Do you offer free estimates for moves outside Oklahoma City?</summary>
                <div class="bd-faq__answer">
                    Yes, we provide free moving estimates for all areas we serve. Contact us to learn more.
                </div>
            </details>
        </div>
    </div>
</section>

<section class="bd-final-cta">
    <div class="bd-container">
        <h2 class="bd-final-cta__title">Know Before You Move—Get a Clear, Honest Number</h2>
        <div class="bd-final-cta__actions">
            <a class="bd-btn bd-btn--primary js-cta-quote" href="#quote-form">Get My Free Quote</a>
            <a class="bd-btn bd-btn--secondary" href="/contact">Schedule Your Moving Estimate</a>
        </div>
    </div>
</section>
<?php get_footer(); ?>
