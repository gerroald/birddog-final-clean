<?php
/**
 * Template Name: Live Prod Version Revised Service Hub
 * Description: Main services overview page with grid of service cards
 *
 * @package Bird_Dog_Moving
 */

get_header();
?>

<main id="main" class="bd-page bd-page--services" data-page="services-overview">

  <!-- HERO: Tight, centered -->
  <section class="section section--band-dark bd-hero bd-hero--tight" aria-labelledby="hero-title" style="background: var(--color-bg-dark); color: var(--color-text-inverse); padding: var(--space-3xl) var(--space-md);">
    <div class="bd-container" style="max-width: 1100px; margin: 0 auto; text-align: center;">
      <div class="bd-hero__content">
        <h1 id="hero-title" class="bd-hero__title" style="font-size: var(--fs-900); line-height: var(--lh-tight); font-weight: var(--fw-bold); color: var(--color-text-inverse); margin: 0 0 var(--space-md);">
          Moving Services for Every Need in Oklahoma City
        </h1>
        <p class="bd-hero__subtitle" style="font-size: var(--fs-600); color: var(--color-text-inverse-muted); margin: 0 0 var(--space-xl); max-width: 700px; margin-left: auto; margin-right: auto;">
          From residential moves to office relocations and specialty deliveries, we handle it all with care.
        </p>
        <div class="bd-hero__actions" style="display: flex; gap: var(--space-md); justify-content: center; flex-wrap: wrap;">
          <a class="bd-btn bd-btn--primary c-button c-button--accent c-button--large" href="/pricing/" style="display: inline-block; padding: var(--space-sm) var(--space-xl); font-weight: var(--fw-bold); border-radius: var(--radius-sm); text-decoration: none; background: var(--color-accent); color: var(--color-text); border: none; box-shadow: var(--shadow-card); transition: all var(--transition-base);">Get Free Quote</a>
          <a class="bd-btn bd-btn--ghost c-button c-button--ghost-light c-button--large" href="tel:+14055354554" style="display: inline-block; padding: var(--space-sm) var(--space-xl); font-weight: var(--fw-bold); border-radius: var(--radius-sm); text-decoration: none; background: transparent; color: var(--color-text-inverse); border: 1px solid var(--alias-alnp-border-ghost); transition: all var(--transition-base);">Call (405) 535-4554</a>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 1: Service Cards (White bg) -->
  <section class="section section--surface bd-section bd-section--pad" aria-labelledby="services-title" style="background: var(--color-surface); color: var(--color-text); padding: var(--alias-alnp-section-padding-y) var(--space-md);">
    <div class="bd-container" style="max-width: 1100px; margin: 0 auto;">
      <header class="bd-section__header" style="text-align: center; margin-bottom: var(--space-2xl);">
        <h2 id="services-title" class="bd-section__title" style="font-size: var(--fs-800); line-height: var(--lh-tight); font-weight: var(--fw-bold); color: var(--color-text); margin: 0 0 var(--space-sm);">Our Complete Moving Solutions</h2>
        <p class="bd-section__lead" style="font-size: var(--fs-500); color: var(--color-text-muted); margin: 0; max-width: 700px; margin-left: auto; margin-right: auto;">Moving isn't one-size-fits-all. We tailor every service to your specific needs.</p>
      </header>

      <div class="bd-services__grid bd-services__grid--cols-3" style="display: grid; gap: var(--space-lg); grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));">
        <!-- Residential Moving -->
        <article class="bd-card" style="background: var(--color-bg); border: 1px solid var(--color-border); border-radius: var(--alias-alnp-radius-m); padding: var(--space-xl); box-shadow: var(--shadow-card); display: flex; flex-direction: column;">
          <h3 class="bd-card__title" style="font-size: var(--fs-700); font-weight: var(--fw-semibold); color: var(--color-text); margin: 0 0 var(--space-sm);">Residential Moving</h3>
          <p class="bd-card__text" style="color: var(--color-text-muted); margin: 0 0 var(--space-md); flex-grow: 1;">From apartments to family estates, we handle every detail of your home move with care and professionalism.</p>
          <a class="bd-btn bd-btn--ghost" href="/residential-movers-okc/" style="display: inline-block; padding: var(--alias-alnp-btn-padding-y) var(--space-md); font-weight: var(--fw-semibold); border-radius: var(--alias-alnp-radius-s); text-decoration: none; background: transparent; color: var(--color-primary); border: 1px solid var(--color-primary); transition: all var(--transition-base); text-align: center;">View Residential Services →</a>
        </article>

        <!-- Commercial Moving -->
        <article class="bd-card" style="background: var(--color-bg); border: 1px solid var(--color-border); border-radius: var(--alias-alnp-radius-m); padding: var(--space-xl); box-shadow: var(--shadow-card); display: flex; flex-direction: column;">
          <h3 class="bd-card__title" style="font-size: var(--fs-700); font-weight: var(--fw-semibold); color: var(--color-text); margin: 0 0 var(--space-sm);">Commercial & Office Moving</h3>
          <p class="bd-card__text" style="color: var(--color-text-muted); margin: 0 0 var(--space-md); flex-grow: 1;">Minimize downtime with coordinated office moves that get your business back up and running fast.</p>
          <a class="bd-btn bd-btn--ghost" href="/commercial-movers-okc/" style="display: inline-block; padding: var(--alias-alnp-btn-padding-y) var(--space-md); font-weight: var(--fw-semibold); border-radius: var(--alias-alnp-radius-s); text-decoration: none; background: transparent; color: var(--color-primary); border: 1px solid var(--color-primary); transition: all var(--transition-base); text-align: center;">View Commercial Services →</a>
        </article>

        <!-- Specialty Services -->
        <article class="bd-card" style="background: var(--color-bg); border: 1px solid var(--color-border); border-radius: var(--alias-alnp-radius-m); padding: var(--space-xl); box-shadow: var(--shadow-card); display: flex; flex-direction: column;">
          <h3 class="bd-card__title" style="font-size: var(--fs-700); font-weight: var(--fw-semibold); color: var(--color-text); margin: 0 0 var(--space-sm);">Specialty & Delivery</h3>
          <p class="bd-card__text" style="color: var(--color-text-muted); margin: 0 0 var(--space-md); flex-grow: 1;">Pianos, antiques, safes, and unique items require expert handling. We've got you covered.</p>
          <a class="bd-btn bd-btn--ghost" href="/specialty-delivery/" style="display: inline-block; padding: var(--alias-alnp-btn-padding-y) var(--space-md); font-weight: var(--fw-semibold); border-radius: var(--alias-alnp-radius-s); text-decoration: none; background: transparent; color: var(--color-primary); border: 1px solid var(--color-primary); transition: all var(--transition-base); text-align: center;">View Specialty Services →</a>
        </article>
      </div>

      <div class="bd-section__cta" style="margin-top: var(--space-2xl); text-align: center;">
        <a class="bd-btn bd-btn--primary" href="/pricing/" style="display: inline-block; padding: var(--space-sm) var(--space-xl); font-weight: var(--fw-bold); border-radius: var(--radius-sm); text-decoration: none; background: var(--color-accent); color: var(--color-text); border: none; box-shadow: var(--shadow-card); transition: all var(--transition-base);">Get Your Free Moving Quote</a>
      </div>
    </div>
  </section>

  <!-- SECTION 2: Why Choose Bird Dog (Light gray bg) -->
  <section class="section bd-section bd-section--alt" aria-labelledby="trust-title" style="background: var(--color-bg); color: var(--color-text); padding: var(--alias-alnp-section-padding-y) var(--space-md);">
    <div class="bd-container" style="max-width: 1100px; margin: 0 auto;">
      <header class="bd-section__header" style="text-align: center; margin-bottom: var(--space-2xl);">
        <h2 id="trust-title" class="bd-section__title" style="font-size: var(--fs-800); line-height: var(--lh-tight); font-weight: var(--fw-bold); color: var(--color-text); margin: 0 0 var(--space-sm);">Why Choose Bird Dog Moving?</h2>
        <p class="bd-section__lead" style="font-size: var(--fs-500); color: var(--color-text-muted); margin: 0;">Your move deserves experienced professionals you can trust.</p>
      </header>

      <div class="bd-services__grid bd-services__grid--cols-4" style="display: grid; gap: var(--space-lg); grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));">
        <article class="bd-card" style="background: var(--color-surface); border: 1px solid var(--color-border); border-radius: var(--alias-alnp-radius-m); padding: var(--space-lg); box-shadow: var(--shadow-card); text-align: center;">
          <h3 class="bd-card__title" style="font-size: var(--fs-600); font-weight: var(--fw-semibold); color: var(--color-text); margin: 0 0 var(--space-sm);">Licensed & Insured</h3>
          <p class="bd-card__text" style="color: var(--color-text-muted); margin: 0; font-size: var(--fs-400);">Full protection and compliance. Your belongings are covered every step of the way.</p>
        </article>

        <article class="bd-card" style="background: var(--color-surface); border: 1px solid var(--color-border); border-radius: var(--alias-alnp-radius-m); padding: var(--space-lg); box-shadow: var(--shadow-card); text-align: center;">
          <h3 class="bd-card__title" style="font-size: var(--fs-600); font-weight: var(--fw-semibold); color: var(--color-text); margin: 0 0 var(--space-sm);">Local OKC Experts</h3>
          <p class="bd-card__text" style="color: var(--color-text-muted); margin: 0; font-size: var(--fs-400);">We know every neighborhood, shortcut, and traffic pattern in Oklahoma City.</p>
        </article>

        <article class="bd-card" style="background: var(--color-surface); border: 1px solid var(--color-border); border-radius: var(--alias-alnp-radius-m); padding: var(--space-lg); box-shadow: var(--shadow-card); text-align: center;">
          <h3 class="bd-card__title" style="font-size: var(--fs-600); font-weight: var(--fw-semibold); color: var(--color-text); margin: 0 0 var(--space-sm);">Transparent Pricing</h3>
          <p class="bd-card__text" style="color: var(--color-text-muted); margin: 0; font-size: var(--fs-400);">Clear, upfront quotes with no hidden fees or last-minute surprises.</p>
        </article>

        <article class="bd-card" style="background: var(--color-surface); border: 1px solid var(--color-border); border-radius: var(--alias-alnp-radius-m); padding: var(--space-lg); box-shadow: var(--shadow-card); text-align: center;">
          <h3 class="bd-card__title" style="font-size: var(--fs-600); font-weight: var(--fw-semibold); color: var(--color-text); margin: 0 0 var(--space-sm);">Flexible Scheduling</h3>
          <p class="bd-card__text" style="color: var(--color-text-muted); margin: 0; font-size: var(--fs-400);">We work around your timeline, including evenings and weekends.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- SECTION 3: How It Works (White bg) -->
  <section class="section section--surface bd-section bd-section--pad" aria-labelledby="process-title" style="background: var(--color-surface); color: var(--color-text); padding: var(--alias-alnp-section-padding-y) var(--space-md);">
    <div class="bd-container" style="max-width: 1100px; margin: 0 auto;">
      <header class="bd-section__header" style="text-align: center; margin-bottom: var(--space-2xl);">
        <h2 id="process-title" class="bd-section__title" style="font-size: var(--fs-800); line-height: var(--lh-tight); font-weight: var(--fw-bold); color: var(--color-text); margin: 0 0 var(--space-sm);">How Our Service Works</h2>
        <p class="bd-section__lead" style="font-size: var(--fs-500); color: var(--color-text-muted); margin: 0;">Three simple steps to a stress-free move.</p>
      </header>

      <div class="bd-services__grid bd-services__grid--cols-3" style="display: grid; gap: var(--space-lg); grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));">
        <article class="bd-card" style="background: var(--color-bg); border: 1px solid var(--color-border); border-radius: var(--alias-alnp-radius-m); padding: var(--space-xl); box-shadow: var(--shadow-card); text-align: center;">
          <p class="bd-card__meta" style="font-size: var(--fs-300); color: var(--color-text-muted); font-weight: var(--fw-semibold); text-transform: uppercase; letter-spacing: 0.05em; margin: 0 0 var(--space-sm);">Step 1</p>
          <h3 class="bd-card__title" style="font-size: var(--fs-700); font-weight: var(--fw-semibold); color: var(--color-text); margin: 0 0 var(--space-sm);">Get Your Free Quote</h3>
          <p class="bd-card__text" style="color: var(--color-text-muted); margin: 0;">Tell us about your move and receive a transparent estimate with no obligation.</p>
        </article>

        <article class="bd-card" style="background: var(--color-bg); border: 1px solid var(--color-border); border-radius: var(--alias-alnp-radius-m); padding: var(--space-xl); box-shadow: var(--shadow-card); text-align: center;">
          <p class="bd-card__meta" style="font-size: var(--fs-300); color: var(--color-text-muted); font-weight: var(--fw-semibold); text-transform: uppercase; letter-spacing: 0.05em; margin: 0 0 var(--space-sm);">Step 2</p>
          <h3 class="bd-card__title" style="font-size: var(--fs-700); font-weight: var(--fw-semibold); color: var(--color-text); margin: 0 0 var(--space-sm);">Schedule Your Move</h3>
          <p class="bd-card__text" style="color: var(--color-text-muted); margin: 0;">Choose a date that works for you. We'll confirm all details and send your moving team.</p>
        </article>

        <article class="bd-card" style="background: var(--color-bg); border: 1px solid var(--color-border); border-radius: var(--alias-alnp-radius-m); padding: var(--space-xl); box-shadow: var(--shadow-card); text-align: center;">
          <p class="bd-card__meta" style="font-size: var(--fs-300); color: var(--color-text-muted); font-weight: var(--fw-semibold); text-transform: uppercase; letter-spacing: 0.05em; margin: 0 0 var(--space-sm);">Step 3</p>
          <h3 class="bd-card__title" style="font-size: var(--fs-700); font-weight: var(--fw-semibold); color: var(--color-text); margin: 0 0 var(--space-sm);">Relax & Settle In</h3>
          <p class="bd-card__text" style="color: var(--color-text-muted); margin: 0;">Our professional crew handles the heavy lifting while you focus on your new space.</p>
        </article>
      </div>

      <div class="bd-section__cta" style="margin-top: var(--space-2xl); text-align: center;">
        <a class="bd-btn bd-btn--primary" href="/contact/" style="display: inline-block; padding: var(--space-sm) var(--space-xl); font-weight: var(--fw-bold); border-radius: var(--radius-sm); text-decoration: none; background: var(--color-accent); color: var(--color-text); border: none; box-shadow: var(--shadow-card); transition: all var(--transition-base);">Start Your Move Today</a>
      </div>
    </div>
  </section>

  <!-- SECTION 4: Service Areas (Light gray bg) -->
  <section class="section bd-section bd-section--alt" aria-labelledby="areas-title" style="background: var(--color-bg); color: var(--color-text); padding: var(--alias-alnp-section-padding-y) var(--space-md);">
    <div class="bd-container" style="max-width: 1100px; margin: 0 auto;">
      <header class="bd-section__header" style="text-align: center; margin-bottom: var(--space-2xl);">
        <h2 id="areas-title" class="bd-section__title" style="font-size: var(--fs-800); line-height: var(--lh-tight); font-weight: var(--fw-bold); color: var(--color-text); margin: 0 0 var(--space-sm);">Proudly Serving Oklahoma City & Beyond</h2>
        <p class="bd-section__lead" style="font-size: var(--fs-500); color: var(--color-text-muted); margin: 0;">Local expertise across the entire metro area.</p>
      </header>

      <div class="bd-services__grid bd-services__grid--cols-4" style="display: grid; gap: var(--space-lg); grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));">
        <article class="bd-card" style="background: var(--color-surface); border: 1px solid var(--color-border); border-radius: var(--alias-alnp-radius-m); padding: var(--space-lg); box-shadow: var(--shadow-card);">
          <h3 class="bd-card__title" style="font-size: var(--fs-600); font-weight: var(--fw-semibold); color: var(--color-text); margin: 0 0 var(--space-sm);">Downtown OKC</h3>
          <p class="bd-card__text" style="color: var(--color-text-muted); margin: 0; font-size: var(--fs-400);">Expert navigation of urban moves and high-rises.</p>
        </article>

        <article class="bd-card" style="background: var(--color-surface); border: 1px solid var(--color-border); border-radius: var(--alias-alnp-radius-m); padding: var(--space-lg); box-shadow: var(--shadow-card);">
          <h3 class="bd-card__title" style="font-size: var(--fs-600); font-weight: var(--fw-semibold); color: var(--color-text); margin: 0 0 var(--space-sm);">Edmond</h3>
          <p class="bd-card__text" style="color: var(--color-text-muted); margin: 0; font-size: var(--fs-400);">Serving families and businesses throughout Edmond.</p>
        </article>

        <article class="bd-card" style="background: var(--color-surface); border: 1px solid var(--color-border); border-radius: var(--alias-alnp-radius-m); padding: var(--space-lg); box-shadow: var(--shadow-card);">
          <h3 class="bd-card__title" style="font-size: var(--fs-600); font-weight: var(--fw-semibold); color: var(--color-text); margin: 0 0 var(--space-sm);">Norman</h3>
          <p class="bd-card__text" style="color: var(--color-text-muted); margin: 0; font-size: var(--fs-400);">Trusted movers for Norman residents and OU community.</p>
        </article>

        <article class="bd-card" style="background: var(--color-surface); border: 1px solid var(--color-border); border-radius: var(--alias-alnp-radius-m); padding: var(--space-lg); box-shadow: var(--shadow-card);">
          <h3 class="bd-card__title" style="font-size: var(--fs-600); font-weight: var(--fw-semibold); color: var(--color-text); margin: 0 0 var(--space-sm);">Metro Suburbs</h3>
          <p class="bd-card__text" style="color: var(--color-text-muted); margin: 0; font-size: var(--fs-400);">Moore, Yukon, Midwest City, and all surrounding areas.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- SECTION 5: FAQ (White bg) -->
  <section class="section section--surface bd-section bd-section--pad" aria-labelledby="faq-title" style="background: var(--color-surface); color: var(--color-text); padding: var(--alias-alnp-section-padding-y) var(--space-md);">
    <div class="bd-container" style="max-width: 900px; margin: 0 auto;">
      <header class="bd-section__header" style="text-align: center; margin-bottom: var(--space-2xl);">
        <h2 id="faq-title" class="bd-section__title" style="font-size: var(--fs-800); line-height: var(--lh-tight); font-weight: var(--fw-bold); color: var(--color-text); margin: 0 0 var(--space-sm);">Frequently Asked Questions</h2>
        <p class="bd-section__lead" style="font-size: var(--fs-500); color: var(--color-text-muted); margin: 0;">Quick answers to help you choose the right service.</p>
      </header>

      <div class="bd-faq" data-accordion>
        <details class="bd-faq__item" style="background: var(--color-bg); border: 1px solid var(--color-border); border-radius: var(--alias-alnp-radius-s); padding: var(--space-md); margin-bottom: var(--space-sm);">
          <summary class="bd-faq__question" style="font-weight: var(--fw-semibold); color: var(--color-text); cursor: pointer; font-size: var(--fs-500);">How do I know which moving service I need?</summary>
          <div class="bd-faq__answer" style="margin-top: var(--space-md); color: var(--color-text-muted); line-height: var(--lh-normal);">
            <p style="margin: 0;">Start with what you're moving. Residential is for homes and apartments, commercial is for offices and businesses, and specialty covers unique items like pianos or antiques. Not sure? <a href="tel:+14055354554">Call us at (405) 535-4554</a> and we'll help you figure it out.</p>
          </div>
        </details>

        <details class="bd-faq__item" style="background: var(--color-bg); border: 1px solid var(--color-border); border-radius: var(--alias-alnp-radius-s); padding: var(--space-md); margin-bottom: var(--space-sm);">
          <summary class="bd-faq__question" style="font-weight: var(--fw-semibold); color: var(--color-text); cursor: pointer; font-size: var(--fs-500);">Can you handle multiple services in one move?</summary>
          <div class="bd-faq__answer" style="margin-top: var(--space-md); color: var(--color-text-muted); line-height: var(--lh-normal);">
            <p style="margin: 0;">Absolutely. Many customers combine services—like residential moving with packing help, or commercial moves with junk removal. We'll create a custom plan that covers everything you need.</p>
          </div>
        </details>

        <details class="bd-faq__item" style="background: var(--color-bg); border: 1px solid var(--color-border); border-radius: var(--alias-alnp-radius-s); padding: var(--space-md); margin-bottom: var(--space-sm);">
          <summary class="bd-faq__question" style="font-weight: var(--fw-semibold); color: var(--color-text); cursor: pointer; font-size: var(--fs-500);">Do you move items long distance?</summary>
          <div class="bd-faq__answer" style="margin-top: var(--space-md); color: var(--color-text-muted); line-height: var(--lh-normal);">
            <p style="margin: 0;">Yes, we handle both local Oklahoma City moves and long-distance relocations. Our team can move you anywhere in the state or across the country.</p>
          </div>
        </details>

        <details class="bd-faq__item" style="background: var(--color-bg); border: 1px solid var(--color-border); border-radius: var(--alias-alnp-radius-s); padding: var(--space-md); margin-bottom: var(--space-sm);">
          <summary class="bd-faq__question" style="font-weight: var(--fw-semibold); color: var(--color-text); cursor: pointer; font-size: var(--fs-500);">What's included in a free quote?</summary>
          <div class="bd-faq__answer" style="margin-top: var(--space-md); color: var(--color-text-muted); line-height: var(--lh-normal);">
            <p style="margin: 0;">Your free quote includes an estimate based on your specific needs—size of move, distance, services required, and timeline. It's detailed, transparent, and comes with no obligation to book.</p>
          </div>
        </details>

        <details class="bd-faq__item" style="background: var(--color-bg); border: 1px solid var(--color-border); border-radius: var(--alias-alnp-radius-s); padding: var(--space-md); margin-bottom: var(--space-sm);">
          <summary class="bd-faq__question" style="font-weight: var(--fw-semibold); color: var(--color-text); cursor: pointer; font-size: var(--fs-500);">How far in advance should I book?</summary>
          <div class="bd-faq__answer" style="margin-top: var(--space-md); color: var(--color-text-muted); line-height: var(--lh-normal);">
            <p style="margin: 0;">We recommend booking 2-4 weeks in advance, especially during peak moving season (May-September). However, we often accommodate last-minute moves based on availability.</p>
          </div>
        </details>

        <details class="bd-faq__item" style="background: var(--color-bg); border: 1px solid var(--color-border); border-radius: var(--alias-alnp-radius-s); padding: var(--space-md);">
          <summary class="bd-faq__question" style="font-weight: var(--fw-semibold); color: var(--color-text); cursor: pointer; font-size: var(--fs-500);">Are packing supplies included?</summary>
          <div class="bd-faq__answer" style="margin-top: var(--space-md); color: var(--color-text-muted); line-height: var(--lh-normal);">
            <p style="margin: 0;">Basic moving supplies like blankets and dollies are included. Professional packing services with boxes and materials are available as an add-on. Check our packing services page for details.</p>
          </div>
        </details>
      </div>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section class="section section--band-dark">
    <div class="l-container section__header--centered">
      <p class="section__eyebrow">Ready to Move?</p>
      <h2 class="section__title">Book Your Stress-Free Move in Minutes</h2>
      <p class="section__lead">Local, licensed, insured. Fair pricing, friendly crews.</p>
      <div style="display:flex;gap:var(--space-md);justify-content:center;">
        <a class="c-button c-button--accent c-button--large" href="#estimate">Get Free Estimate</a>
        <a class="c-button c-button--ghost-light c-button--large" href="tel:+14055534554">Call (405) 553-4554</a>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>



<main class="service-page" id="main-content" data-page="service-hub">

	<!-- Hero Section -->
	<section class="section section--surface service-hero u-section">
		<div class="l-container">
			<div class="service-hero__wrap">

				<!-- Hero Content -->
				<div class="service-hero__content">
					<p class="service-hero__eyebrow">Bird Dog's Delivery &amp; Moving, Inc</p>

					<h1 class="service-hero__title">
						Moving Services for Every Need in Oklahoma City
					</h1>

					<p class="service-hero__lede">
						Explore Bird Dog’s full range of moving services in Oklahoma City. Whether you're moving your family home, your entire office, or just one heavy item, we have a service that fits. Let's make it easy with your trusted moving company in Oklahoma City.
					</p>

					<div class="service-hero__actions">
						<a href="/contact/#estimate" class="c-button c-button--primary c-button--accent">
							Get My Free Estimate
						</a>
						<a href="tel:<?php echo esc_attr(get_option('birddog_phone', '(405) 535-4554')); ?>" class="c-button c-button--ghost c-button--ghost-light">
							Call <?php echo esc_html(get_option('birddog_phone', '(405) 535-4554')); ?>
						</a>
					</div>

					<nav class="service-breadcrumbs" aria-label="Breadcrumb">
						<a href="<?php echo esc_url(home_url('/')); ?>">Home</a> / Services
					</nav>
				</div>

				<!-- Quick Estimate Card -->
				

			</div>
		</div>
	</section>

	<!-- Services Grid -->
	<section class="section section--surface service-section u-section">
		<div class="l-container">
    <h2 class="service-overview__content about-team__title">Our Complete Moving Solutions</h2>
    <p class="service-overview__content">Moving isn’t one-size-fits-all. That’s why we tailor our approach to your specific needs. From careful packing to efficient transport, our team handles every detail. As local movers in OKC, we’re here to make your move stress-free.</p>
			<div class="service-features__grid">

				<!-- Residential Moving -->
				<article class="service-feature-card">
					<span class="service-badge">Most Popular</span>
					<h3>Residential Moving</h3>
					<p>Moving homes is a big deal. We handle everything from apartments to large family estates, ensuring your furniture, boxes, and memories arrive safely. Learn more about our <a href="/residential-movers-okc/">residential movers in OKC</a>.</p>

					<div style="margin-top: var(--space-md); padding-top: var(--space-md); border-top: 1px solid var(--color-border);">
						<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: var(--space-sm);">
							<span style="color: var(--color-muted);">Starting at</span>
							<strong style="font-size: var(--fs-700); color: var(--color-accent);">$375</strong>
						</div>

						<ul style="margin: var(--space-md) 0; padding-left: 1.2rem; font-size: var(--fs-400);">
							<li>Furniture protection</li>
							<li>Packing services</li>
							<li>Flexible scheduling</li>
						</ul>

						<a href="/services/residential-moving/" class="c-button c-button--ghost c-button--ghost-light" style="width: 100%; justify-content: center;">
							Learn More →
						</a>
					</div>
				</article>

				<!-- Office & Commercial -->
				<article class="service-feature-card">
					<h3>Office & Commercial</h3>
					<p>Minimize downtime and keep your business running. We coordinate every detail, from packing workstations to moving sensitive equipment, so your team gets back to work fast. Explore <a href="/commercial-movers-okc/">office and commercial moving services in OKC</a>.</p>

					

						<ul style="margin: var(--space-md) 0; padding-left: 1.2rem; font-size: var(--fs-400);">
							<li>After-hours service</li>
							<li>IT equipment care</li>
							<li>Minimal downtime</li>
						</ul>

						<a href="/services/commercial-moving/" class="c-button c-button--ghost c-button--ghost-light" style="width: 100%; justify-content: center;">
							Learn More →
						</a>
					</div>
				</article>

				<!-- Local Delivery -->
				<article class="service-feature-card">
					<h3>Specialty Items &amp; Junk Removal</h3>
					<p>Have something tricky to move? We’re experts with pianos, antiques, safes, and other unique items. Our <a href="/junk-removal-okc/">junk removal OKC</a> and <a href="/junk-removal-okc/">specialty moves team</a> make every move easier.</p>

					

						<ul style="margin: var(--space-md) 0; padding-left: 1.2rem; font-size: var(--fs-400);">
							<li>Same-day service</li>
							<li>Disposal available</li>
							<li>Installation available</li>
						</ul>

						<a href="/services/local-delivery/" class="c-button c-button--ghost c-button--ghost-light" style="width: 100%; justify-content: center;">
							Learn More →
						</a>
					</div>
				</article>

			</div>

		</div>
	</section>
<!-- TRUST SECTION -->
<section class="section bd-trust">
  <div class="l-container service-why">
    <h2 class="service-why__title">Why Choose Bird Dog for Your Move?</h2>
    <div class="service-features__grid">
      <article>
        <h3>Licensed & Insured</h3>
        <p>Your move is fully protected. We carry all the proper licensing and insurance, so you can have complete peace of mind.</p>
      </article>
      <article>
        <h3>Local OKC Experts</h3>
        <p>We know the city’s neighborhoods, traffic, and quickest routes, which saves you time and headaches on moving day.</p>
      </article>
      <article>
        <h3>Transparent Pricing</h3>
        <p>No mysteries here. We give you clear, upfront quotes so you know exactly what to expect. <a href="/pricing/">See our transparent moving rates</a>.</p>
      </article>
      <article>
        <h3>Flexible Scheduling</h3>
        <p>Your timeline is our priority. We work with you to find a moving day and time that fits your schedule, including evenings and weekends.</p>
      </article>
    </div>
  </div>
</section>
	<!-- CTA Band -->
<!-- CTA SECTION -->
<section class="section service-cta">
  <div class="service-cta__content">
    <h2 class="service-why__title">Ready to Get Started?</h2>
    <p class="service-why__title_text">Tell us a little about your move, and we’ll get back to you with a free, no-obligation estimate. Whether you need a full residential relocation or just a little help with the heavy lifting, the Bird Dog team is ready to make it happen. <a href="/contact/">Request your free moving estimate</a> today.</p>
    <a class="bd-btn" href="/contact/">Request Your Free Estimate Today</a>
  </div>
</section>

<section id="estimate" class="section section--band-dark">
  <div class="l-container section__header--centered">
    <p class="section__eyebrow">Ready to Move?</p>
    <h2 class="section__title">Book Your Stress-Free Move in Minutes</h2>
    <p class="section__lead">Local, licensed, insured. Fair pricing, friendly crews.</p>
    <div style="display:flex;gap:var(--space-md);justify-content:center;">
      <a class="c-button c-button--accent c-button--large" href="#estimate">Get Free Estimate</a>
      <a class="c-button c-button--ghost-light c-button--large" href="tel:+14055534554">Call (405) 553-4554</a>
    </div>
  </div>
</section>

</main>

<?php
get_footer();
?>
