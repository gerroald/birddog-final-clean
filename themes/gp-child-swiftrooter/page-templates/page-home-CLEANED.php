<?php
/*
Template Name: Live Prod Version Home — CLEANED
*/

get_header(); ?>

<!-- Hero Section -->
<section class="hero-home">
  <div class="l-container hero-home__container">
    <!-- Text Side -->
    <div class="hero-home__content">
      <h1 class="hero-home__title">Oklahoma City's <span class="accent-yellow">#1 Rated</span> Moving Company</h1>
      <p class="hero-home__lead">Join 500+ satisfied customers this year with our 100% satisfaction guarantee. Licensed & insured. Book this week and save $50!</p>
      
      <div class="hero-home__actions">
        <a class="c-button c-button--accent" href="#estimate">Get Free Estimate — Save $50</a>
        <a class="c-button c-button--ghost-light" href="tel:+14055354554">Call (405) 535-4554</a>
      </div>
      
      <ul class="hero-home__pills">
        <li class="pill">✓ 500+ Moves This Year</li>
        <li class="pill">✓ BBB A+ Rating</li>
        <li class="pill">✓ Licensed & Insured</li>
        <li class="pill">✓ Same-Day Service</li>
      </ul>
    </div>

    <!-- Form Side -->
    <aside class="hero-home__form">
      <div class="c-card hero-form-card">
        <h3 class="hero-form-card__title">Get Your Free Moving Estimate</h3>
        <?php echo do_shortcode('[wpforms id="248"]'); ?>
      </div>
    </aside>
  </div>
</section>

<!-- Intro Section -->
<section class="section section--surface">
  <div class="l-container">
    <header class="section__header section__header--centered">
      <h2>Moving doesn't have to feel like a marathon you didn't train for.</h2>
      <p class="section__lead">
        Bird Dog Moving is your hometown team—family-owned, licensed, insured, and focused on keeping your move simple and stress-free. Your professional movers in Oklahoma City deliver friendly, transparent service.
      </p>
    </header>

    <ul class="trust-pills">
      <li class="trust-pill">
        <svg class="trust-pill__icon" viewBox="0 0 24 24" width="18" height="18" aria-hidden="true">
          <path d="M12 3l7 2v6c0 5.25-3.41 9.74-7 11-3.59-1.26-7-5.75-7-11V5l7-2z" fill="none" stroke="currentColor" stroke-width="2"/>
          <path d="M8.5 12.5l2 2 5-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
        </svg>
        Licensed & Insured
      </li>
      <li class="trust-pill">
        <svg class="trust-pill__icon" viewBox="0 0 24 24" width="18" height="18" aria-hidden="true">
          <path d="M3 11l9-8 9 8v9a2 2 0 0 1-2 2h-4v-6H9v6H5a2 2 0 0 1-2-2z" fill="none" stroke="currentColor" stroke-width="2"/>
        </svg>
        Family-Owned in OKC
      </li>
      <li class="trust-pill">
        <svg class="trust-pill__icon" viewBox="0 0 24 24" width="18" height="18" aria-hidden="true">
          <path d="M3 12h18M12 3v18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
        </svg>
        Transparent, Friendly Service
      </li>
    </ul>
  </div>
</section>

<!-- Why Choose Us Section -->
<section class="section section--light">
  <div class="l-container">
    <header class="section__header section__header--centered">
      <h2>Why OKC Homeowners Pick Bird Dog Moving</h2>
      <p class="section__lead">
        Bird Dog Moving is built on trust, reliability, and friendly service. We know Oklahoma City neighborhoods, routes, and building rules, ensuring efficient and neighborly moves. As licensed and insured local movers, we treat every home like it's our own.
      </p>
    </header>

    <div class="feature-grid">
      <article class="c-card feature-card">
        <div class="feature-card__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" width="24" height="24">
            <path d="M12 3l7 2v6c0 5.25-3.41 9.74-7 11-3.59-1.26-7-5.75-7-11V5l7-2z" fill="none" stroke="currentColor" stroke-width="2"/>
            <path d="M8.5 12.5l2 2 5-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
          </svg>
        </div>
        <h3 class="feature-card__title">Licensed & Insured</h3>
        <p>Full protection from start to finish.</p>
      </article>

      <article class="c-card feature-card">
        <div class="feature-card__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" width="24" height="24">
            <path d="M3 11l9-8 9 8v9a2 2 0 0 1-2 2h-4v-6H9v6H5a2 2 0 0 1-2-2z" fill="none" stroke="currentColor" stroke-width="2"/>
          </svg>
        </div>
        <h3 class="feature-card__title">Truly Local</h3>
        <p>Family-owned and rooted in Oklahoma City.</p>
      </article>

      <article class="c-card feature-card">
        <div class="feature-card__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" width="24" height="24">
            <path d="M5 12l4 4L19 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
          </svg>
        </div>
        <h3 class="feature-card__title">Professionally Trained Crews</h3>
        <p>Smart, careful movers with top packing techniques.</p>
      </article>

      <article class="c-card feature-card">
        <div class="feature-card__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" width="24" height="24">
            <path d="M3 6h18M3 12h18M3 18h18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
          </svg>
        </div>
        <h3 class="feature-card__title">Transparent Pricing</h3>
        <p>Upfront quotes with no surprise fees.</p>
      </article>
    </div>
  </div>
</section>

<!-- Services Section -->
<section id="services" class="section section--surface">
  <div class="l-container">
    <header class="section__header section__header--centered">
      <h2>Our Moving Services</h2>
      <p>Wherever you're headed across the metro, Bird Dog Moving has you covered.</p>
    </header>

    <div class="services-grid">
      <article class="c-card service-card">
        <figure class="service-card__media">
          <img src="https://picsum.photos/seed/residential/800/450" alt="Residential moving">
        </figure>
        <div class="service-card__body">
          <h3>Residential Moving</h3>
          <p>Careful loading, transport, and setup for homes of any size.</p>
          <a class="c-button c-button--secondary" href="<?php echo esc_url(home_url('/services/local-moving/')); ?>">View Services</a>
        </div>
      </article>

      <article class="c-card service-card">
        <figure class="service-card__media">
          <img src="https://picsum.photos/seed/office/800/450" alt="Office moving">
        </figure>
        <div class="service-card__body">
          <h3>Office & Commercial</h3>
          <p>Coordinated office, storefront, and build-out moves with minimal downtime.</p>
          <a class="c-button c-button--secondary" href="<?php echo esc_url(home_url('/services/labor-only/')); ?>">View Services</a>
        </div>
      </article>

      <article class="c-card service-card">
        <figure class="service-card__media">
          <img src="https://picsum.photos/seed/delivery/800/450" alt="Local delivery">
        </figure>
        <div class="service-card__body">
          <h3>Specialty & Delivery</h3>
          <p>Pianos, antiques, restaurant fixtures, and single-item deliveries. Haul-away help also available.</p>
          <a class="c-button c-button--secondary" href="<?php echo esc_url(home_url('/services/packing-services/')); ?>">View Specialty Moves</a>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- Areas Preview -->
<section class="section section--light">
  <div class="l-container">
    <header class="section__header section__header--centered">
      <h2>Areas We Serve</h2>
      <p>Providing reliable moving services throughout the Oklahoma City metro</p>
    </header>

    <div class="area-grid">
      <article class="c-card area-card">
        <h3>Oklahoma City</h3>
        <p>Full-service moving for Oklahoma City residents and businesses. Same-day crews, careful packing, and safe delivery.</p>
        <a class="c-button c-button--secondary" href="<?php echo esc_url(home_url('/service-area/oklahoma-city/')); ?>">View Services</a>
      </article>
      
      <article class="c-card area-card">
        <h3>Edmond</h3>
        <p>Professional moving services in Edmond. Same-day support for loading, unloading, and in-town moves.</p>
        <a class="c-button c-button--secondary" href="<?php echo esc_url(home_url('/service-area/edmond/')); ?>">View Services</a>
      </article>
      
      <article class="c-card area-card">
        <h3>Norman</h3>
        <p>Reliable moving solutions for Norman homes and businesses. Licensed crews with local expertise.</p>
        <a class="c-button c-button--secondary" href="<?php echo esc_url(home_url('/service-area/norman/')); ?>">View Services</a>
      </article>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section id="testimonials" class="section section--surface">
  <div class="l-container">
    <header class="section__header section__header--centered">
      <h2>What Our Customers Say</h2>
      <p>Real reviews from OKC families and businesses.</p>
    </header>
    <?php echo do_shortcode('[trustindex no-registration=google]'); ?>
  </div>
</section>

<!-- WordPress Content (if any) -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <section class="section section--surface">
    <div class="l-container prose">
      <?php the_content(); ?>
    </div>
  </section>
<?php endwhile; endif; ?>

<!-- CTA Band -->
<section class="section section--accent">
  <div class="l-container">
    <div class="cta-band">
      <h2>Ready to Move? Let's Get Started.</h2>
      <p>Your smooth, stress-free move is just a call or click away. Get your free moving estimate in OKC today.</p>
      <div class="cta-band__actions">
        <a href="<?php echo esc_url(home_url('/contact/#estimate')); ?>" class="c-button c-button--primary">Get My Free Estimate</a>
        <a href="tel:+14055354554" class="c-button c-button--ghost-dark">Call (405) 535-4554</a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
