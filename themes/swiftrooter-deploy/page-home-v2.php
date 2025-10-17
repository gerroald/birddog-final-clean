<?php
/*
Template Name: Homepage V2 — Visual Redesign
*/

get_header(); ?>

<!-- Hero Section with Real Truck Background -->
<section class="hero-v2 hero-v2--disciplined">
  <div class="hero-v2__background">
    <!-- Bulletproof fallback image layer -->
    <div class="hero-v2__bg-fallback" style="background-image:url('<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/bird-dog-moving-van-branded.jpg' ); ?>');"></div>

    <div class="hero-v2__media hero-v2__media--svg" style="--hero-img: url('<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/bird-dog-moving-van-branded.jpg' ); ?>');">
      <svg viewBox="0 0 800 400" preserveAspectRatio="xMidYMid slice" role="img" aria-label="Bird Dog Moving truck and crew in Oklahoma City" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <defs>
          <mask id="hero-v2-mask" maskUnits="userSpaceOnUse" x="0" y="0" width="800" height="400">
            <rect width="800" height="400" fill="#fff"></rect>
          </mask>
        </defs>
        <g mask="url(#hero-v2-mask)">
          <image xlink:href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/bird-dog-moving-van-branded.jpg' ); ?>" href="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/bird-dog-moving-van-branded.jpg' ); ?>" x="0" y="0" width="800" height="400" preserveAspectRatio="xMidYMid slice" />
        </g>
      </svg>
    </div>
    <div class="hero-v2__overlay"></div>
  </div>
  
  <div class="l-container hero-v2__container">
    <!-- Text Side -->
    <div class="hero-v2__content">
      <div class="hero-v2__badge">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
        </svg>
        OKC's #1 Rated Moving Company
      </div>
      
      <h1 class="hero-v2__title">Your Friendly<br>Neighborhood<br><span class="hero-v2__title-accent">Moving Pros</span></h1>
      
      <p class="hero-v2__lead">Licensed, insured, and locally owned. We've helped 500+ OKC families move this year with zero surprises and 100% care.</p>
      
      <div class="hero-v2__actions">
        <a class="c-button c-button--accent c-button--large" href="#estimate">
          Get Free Estimate — Save $50
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
          </svg>
        </a>
        <a class="c-button c-button--ghost-light c-button--large" href="tel:+14055354554">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
          </svg>
          (405) 535-4554
        </a>
      </div>
      
      <div class="hero-v2__trust">
        <div class="trust-stat">
          <strong>500+</strong>
          <span>Moves This Year</span>
        </div>
        <div class="trust-stat">
          <strong>A+</strong>
          <span>BBB Rating</span>
        </div>
        <div class="trust-stat">
          <strong>4.9★</strong>
          <span>Google Reviews</span>
        </div>
      </div>
    </div>

    <!-- Form Side -->
    <aside class="hero-v2__form">
      <div id="estimate" class="estimate-card">
        <h3 class="estimate-card__title">Get Your Free Estimate</h3>
        <p class="estimate-card__subtitle">Quick estimate in under 2 minutes</p>
        <?php echo do_shortcode('[wpforms id="248"]'); ?>
        <div class="estimate-card__trust">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
          </svg>
          No commitment required • Licensed &amp; insured
        </div>
      </div>
    </aside>
  </div>
 <script>
document.addEventListener('DOMContentLoaded', () => {
  const hero = document.querySelector('.hero-v2');
  const img = hero?.querySelector('.hero-v2__media--svg image');

  if (!img) return;

  const preload = new Image();
  const src = img.getAttribute('href') || img.getAttribute('xlink:href');

  preload.onload = () => hero.classList.add('hero--ready');
  preload.src = src;
});
</script>

</section>

<!-- Social Proof Bar -->
<section class="proof-bar">
  <div class="l-container">
    <div class="proof-bar__content">
      <p class="proof-bar__text">Trusted by Oklahoma City families since 2015</p>
      <div class="proof-bar__badges">
        <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/badges/google.svg' ); ?>" alt="Google" class="proof-badge" loading="lazy">
        <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/badges/bbb.svg' ); ?>" alt="BBB A+" class="proof-badge" loading="lazy">
        <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/badges/yelp.svg' ); ?>" alt="Yelp" class="proof-badge" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- Services Section with Illustrations -->
<section id="services" class="section section--surface services-v2">
  <div class="l-container">
    <header class="section__header section__header--centered">
      <div class="section__eyebrow">What We Do</div>
      <h2 class="section__title">Moving Services Built Around You</h2>
      <p class="section__lead">Whether you're moving across town or just need help with the heavy lifting, we've got your back.</p>
    </header>

    <div class="service-showcase">
      <article class="service-showcase__item">
        <div class="service-showcase__visual">
          <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/couple-packing-room.png' ); ?>" alt="Residential moving illustration" loading="lazy" width="1232" height="928">
        </div>
        <div class="service-showcase__content">
          <h3 class="service-showcase__title">Residential Moving</h3>
          <p class="service-showcase__description">From studio apartments to 5-bedroom homes, we handle every detail. Professional packing, careful loading, and safe delivery to your new place.</p>
          <ul class="service-showcase__features">
            <li>Full packing services available</li>
            <li>Furniture disassembly & reassembly</li>
            <li>Protection for floors, walls, and doorways</li>
            <li>Same-day service available</li>
          </ul>
          <a href="<?php echo esc_url(home_url('/services/residential-moving-services/')); ?>" class="c-button c-button--secondary">
            Learn More
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
        </div>
      </article>

      <article class="service-showcase__item service-showcase__item--reverse">
        <div class="service-showcase__visual">
          <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/office-with-packed-boxes.png' ); ?>" alt="Office moving illustration" loading="lazy" width="1232" height="928">
        </div>
        <div class="service-showcase__content">
          <h3 class="service-showcase__title">Office & Commercial</h3>
          <p class="service-showcase__description">Minimize downtime with our coordinated office moves. We handle everything from cubicles to conference rooms, working around your schedule.</p>
          <ul class="service-showcase__features">
            <li>After-hours and weekend moves</li>
            <li>IT equipment handled with care</li>
            <li>Modular furniture expertise</li>
            <li>Minimal business disruption</li>
          </ul>
          <a href="<?php echo esc_url(home_url('/services/office-commercial-moving-services')); ?>" class="c-button c-button--secondary">
            Learn More
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
        </div>
      </article>

      <article class="service-showcase__item">
        <div class="service-showcase__visual">
          <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/moving-equipment-pads-dollies.jpg' ); ?>" alt="Specialty moving equipment" loading="lazy" width="1920" height="1920">
        </div>
        <div class="service-showcase__content">
          <h3 class="service-showcase__title">Specialty & Delivery</h3>
          <p class="service-showcase__description">Pianos, antiques, restaurant equipment, single-item delivery—if it's heavy, valuable, or tricky, we've moved it before.</p>
          <ul class="service-showcase__features">
            <li>Piano & large instrument moving</li>
            <li>Antique furniture handling</li>
            <li>Restaurant fixture installation</li>
            <li>Junk & haul-away services</li>
          </ul>
          <a href="<?php echo esc_url(home_url('/services/specialty-moving-services/')); ?>" class="c-button c-button--secondary">
            Learn More
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- Why Choose Us -->
<section class="section section--primary why-choose">
  <div class="l-container">
    <div class="why-choose__layout">
      <div class="why-choose__content">
        <div class="section__eyebrow section__eyebrow--light">Why Bird Dog</div>
        <h2 class="why-choose__title">Moving Done Right,<br>Every Single Time</h2>
        <p class="why-choose__lead">We're not just movers—we're your neighbors. Family-owned, locally operated, and obsessed with making your move the smoothest part of your day.</p>
        
        <div class="why-grid">
          <div class="why-item">
            <div class="why-item__icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
              </svg>
            </div>
            <div class="why-item__content">
              <h3>Licensed & Insured</h3>
              <p>Full protection from the moment we load to the moment we unload.</p>
            </div>
          </div>
          
          <div class="why-item">
            <div class="why-item__icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
              </svg>
            </div>
            <div class="why-item__content">
              <h3>Trained Crews</h3>
              <p>Professional movers who treat your stuff like their own.</p>
            </div>
          </div>
          
          <div class="why-item">
            <div class="why-item__icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="3" y1="9" x2="21" y2="9"></line>
                <line x1="9" y1="21" x2="9" y2="9"></line>
              </svg>
            </div>
            <div class="why-item__content">
              <h3>Transparent Pricing</h3>
              <p>Upfront quotes with zero surprise fees or hidden charges.</p>
            </div>
          </div>
          
          <div class="why-item">
            <div class="why-item__icon">
              <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="10"></circle>
                <polyline points="12 6 12 12 16 14"></polyline>
              </svg>
            </div>
            <div class="why-item__content">
              <h3>On-Time, Every Time</h3>
              <p>We show up when we say we will—no excuses, no delays.</p>
            </div>
          </div>
        </div>
      </div>
      
      <div class="why-choose__image">
        <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/bird-dog-box-truck-classic.jpg' ); ?>" alt="Bird Dog Moving truck" loading="lazy" width="1920" height="1440">
      </div>
    </div>
  </div>
</section>

<!-- How It Works -->
<section class="section section--light how-it-works">
  <div class="l-container">
    <header class="section__header section__header--centered">
      <div class="section__eyebrow">Simple Process</div>
      <h2 class="section__title">How It Works</h2>
      <p class="section__lead">Three easy steps to a stress-free move</p>
    </header>
    
    <div class="steps-grid">
      <div class="step-card">
        <div class="step-card__number">1</div>
        <h3 class="step-card__title">Get Your Quote</h3>
        <p class="step-card__text">Tell us about your move and get an accurate estimate in minutes—no pressure, no games.</p>
      </div>
      
      <div class="step-card">
        <div class="step-card__number">2</div>
        <h3 class="step-card__title">Schedule Your Move</h3>
        <p class="step-card__text">Pick a day and time that works for you. We'll send a professional crew ready to work.</p>
      </div>
      
      <div class="step-card">
        <div class="step-card__number">3</div>
        <h3 class="step-card__title">Relax & Unpack</h3>
        <p class="step-card__text">We handle the heavy lifting, loading, transport, and unloading. You just point us where things go.</p>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section id="testimonials" class="section section--surface testimonials-v2">
  <div class="l-container">
    <header class="section__header section__header--centered">
      <div class="section__eyebrow">Reviews</div>
      <h2 class="section__title">What Our Customers Say</h2>
      <p class="section__lead">Real reviews from real Oklahoma City neighbors</p>
    </header>
    <?php echo do_shortcode('[trustindex no-registration=google]'); ?>
  </div>
</section>

<!-- Areas We Serve -->
<section class="section section--light areas-v2">
  <div class="l-container">
    <header class="section__header section__header--centered">
      <div class="section__eyebrow">Service Area</div>
      <h2 class="section__title">Serving the Entire OKC Metro</h2>
      <p class="section__lead">Professional moving services throughout Oklahoma City and surrounding areas</p>
    </header>

    <div class="area-grid-v2">
      <article class="area-card-v2">
        <h3 class="area-card-v2__title">Oklahoma City</h3>
        <p class="area-card-v2__text">Full-service moving for all OKC neighborhoods. From Midtown to Nichols Hills, we know the routes and the parking rules.</p>
        <a class="area-card-v2__link" href="<?php echo esc_url(home_url('/service-area/oklahoma-city/')); ?>">
          View OKC Services
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
          </svg>
        </a>
      </article>
      
      <article class="area-card-v2">
        <h3 class="area-card-v2__title">Edmond</h3>
        <p class="area-card-v2__text">Trusted by Edmond families for local and long-distance moves. Same-day service available for urgent moves.</p>
        <a class="area-card-v2__link" href="<?php echo esc_url(home_url('/service-area/edmond/')); ?>">
          View Edmond Services
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
          </svg>
        </a>
      </article>
      
      <article class="area-card-v2">
        <h3 class="area-card-v2__title">Norman</h3>
        <p class="area-card-v2__text">Reliable moving for Norman residents and OU students. Apartment moves, home relocations, and storage transport.</p>
        <a class="area-card-v2__link" href="<?php echo esc_url(home_url('/service-area/norman/')); ?>">
          View Norman Services
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
          </svg>
        </a>
      </article>
      
      <article class="area-card-v2">
        <h3 class="area-card-v2__title">Metro Areas</h3>
        <p class="area-card-v2__text">Yukon, Moore, Midwest City, Del City, and beyond. If it's in the metro, we'll get you there.</p>
        <a class="area-card-v2__link" href="<?php echo esc_url(home_url('/service-areas/')); ?>">
          View All Areas
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
          </svg>
        </a>
      </article>
    </div>
  </div>
</section>

<!-- Final CTA -->
<section class="section section--accent cta-final">
  <div class="l-container">
    <div class="cta-final__content">
      <h2 class="cta-final__title">Ready to Move Without the Stress?</h2>
      <p class="cta-final__subtitle">Get your free estimate today and see why 500+ OKC families trusted us this year.</p>
      <div class="cta-final__actions">
        <a href="<?php echo esc_url(home_url('/contact/#estimate')); ?>" class="c-button c-button--accent c-button--large">
          Get My Free Estimate
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
          </svg>
        </a>
        <a href="tel:+14055354554" class="c-button c-button--ghost-light c-button--large">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
          </svg>
          Call (405) 535-4554
        </a>
      </div>
      <p class="cta-final__note">Book this week and save $50 on your move</p>
    </div>
  </div>
</section>

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

<?php get_footer(); ?>
