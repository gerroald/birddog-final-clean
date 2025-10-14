<?php
/*
<<<<<<< HEAD
Template Name: Live Prod Version Home – 
=======
Template Name: Home – Black/Yellow/Teal
>>>>>>> 1ef29258 (initial)
*/

get_header(); ?>

<!-- Hero Section -->
<!--<section class="hero l-section">
    <div class="l-container">
        <div class="hero__content">
            <div class="hero__form">
                <div class="hero-form-card c-card">
                    <h2 class="hero-form-card__title">Get Your Free Moving Estimate</h2>
                    <div class="c-form" data-reveal>
                        <?php
                        // Form shortcode slot - replace with actual form shortcode
                        //$form_shortcode = '[wpforms id="248"]'; // Placeholder
                        //echo do_shortcode($form_shortcode);
                        ?>
                    </div>
                </div>
            </div>

            <div class="hero__text">
                <p class="hero__eyebrow"><span class="text-accent">Trusted residential & commercial movers<span></p>
                <h1 class="hero__title">Stress-Free <span class="text-accent">Moving Services</span> for the Oklahoma City Metro</h1>
                <p class="hero__lead">Bird Dog Delivery &amp; Moving provides licensed, insured teams for local moves, office relocations, packing, and specialty deliveries.</p>
                <ul class="hero__highlights">
                    <li>Same-day crews available</li>
                    <li>Floor, wall &amp; furniture protection</li>
                    <li>Transparent, upfront pricing</li>
                </ul>
                <div class="hero__actions">
                    <a href="<?php echo esc_url(home_url('/contact/#estimate')); ?>" class="c-button c-button--primary">Get Your Estimate</a>
                    <a href="<?php echo BUSINESS_PHONE_LINK; ?>" class="c-button c-button--ghost">Call <?php echo BUSINESS_PHONE; ?></a>
                </div>
            </div>
        </div>
    </div>
</section>-->
<style>
:root{
  --teal-700:#0a5560; --teal-600:#0e6e78; --teal-500:#007B82; --teal-400:#2aa6ad; --teal-300:#5fc6cb;
  --navy:#1A3A5E; --ink:#1a1a1a; --muted:#5a5f6a; --border:#e6e6e6; --bg:#ffffff; --bg-2:#f6f8f9;
  --yellow:#FFD600; --yellow-500:#ffcf00;
  --radius:12px; --shadow-sm:0 1px 2px rgba(0,0,0,.06); --shadow-lg:0 10px 24px rgba(0,0,0,.10);
  --wrap:1200px;
}
*{box-sizing:border-box}
html,body{margin:0}
body{font-family:Inter,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Arial,sans-serif;color:var(--ink);background:#fff;line-height:1.55;

/* Utilities */
.wrap{max-width:var(--wrap);margin:0 auto;padding:0 24px}
.section{padding:72px 0}
.section--alt{background:var(--bg-2)}
.section--brand{background:var(--navy);color:#fff}
h1,h2,h3{margin:0 0 16px;line-height:1.2}
p{margin:0 0 14px;color:var(--muted)}
.btn{display:inline-flex;align-items:center;justify-content:center;gap:10px;padding:12px 20px;border-radius:10px;
     text-decoration:none;font-weight:800;border:0;cursor:pointer;transition:.25s ease}
.btn--primary{background:var(--yellow);color:var(--navy);box-shadow:var(--shadow-sm)}
.btn--primary:hover{background:var(--yellow-500);transform:translateY(-1px)}
.btn--ghost{border:2px solid currentColor;color:inherit;background:transparent}
.btn--ghost:hover{background:rgba(255,255,255,.14)}
.pill-list{display:flex;gap:8px;flex-wrap:wrap}
.pill{display:inline-block;background:rgba(255,255,255,.14);border:1px solid rgba(255,255,255,.3);
     color:#fff;padding:6px 10px;border-radius:999px;font-weight:700}
.grid{display:grid;gap:24px}
.grid-3{grid-template-columns:repeat(auto-fit,minmax(260px,1fr))}

/* Header (simple for preview) */
.header{position:sticky;top:0;background:rgba(255,255,255,.92);backdrop-filter:blur(12px);border-bottom:1px solid var(--border);z-index:10}
.header .bar{display:flex;align-items:center;justify-content:space-between;padding:14px 24px}
.logo{display:flex;align-items:center;gap:10px;font-weight:900;color:var(--navy);text-decoration:none}
.logo-badge{width:40px;height:40px;border-radius:10px;background:linear-gradient(135deg,var(--yellow),#ffe97e);
display:flex;align-items:center;justify-content:center;color:var(--navy);font-weight:900;box-shadow:var(--shadow-sm)}

/* Hero */
.hero{background:linear-gradient(135deg,var(--teal-600),var(--teal-400));color:#fff;position:relative;overflow:hidden}
.hero::before{content:"";position:absolute;inset:-20% -10% -10% -20%;
background:radial-gradient(60% 60% at 20% 20%,rgba(255,214,0,.12) 0%,transparent 70%),
           radial-gradient(40% 40% at 80% 70%,rgba(255,214,0,.08) 0%,transparent 70%);
z-index:0}
.hero .wrap{position:relative;z-index:1}
.hero-grid{display:grid;grid-template-columns:1.4fr 1fr;gap:36px;align-items:center}
.hero h1{font-size:clamp(2.2rem,5vw,3.6rem);font-weight:900;text-shadow:0 10px 30px rgba(0,0,0,.18)}
.hero-sub{font-size:1.1rem;color:#f7f9fb}
.hero-actions{display:flex;gap:14px;flex-wrap:wrap;margin:16px 0 12px}

/* Form */
.form{background:#fff;border:1px solid var(--border);border-radius:16px;box-shadow:var(--shadow-lg);padding:20px}
.form h3{color:var(--teal-600);margin:0 0 10px}
.row{display:grid;grid-template-columns:1fr 1fr;gap:12px}
label .lbl{display:block;font-size:.85rem;font-weight:700;color:var(--teal-600);margin:8px 0 6px}
input,select{width:100%;padding:12px;border:2px solid var(--border);border-radius:10px;font:inherit}
input:focus,select:focus{outline:none;border-color:var(--teal-500);box-shadow:0 0 0 3px rgba(0,123,130,.14)}
</style>
<!--<header class="header">
  <div class="wrap bar">
    <a class="logo" href="#"><span class="logo-badge">BD</span>Bird Dog Moving</a>
    <nav style="display:flex;gap:18px">
      <a href="#services">Services</a>
      <a href="#testimonials">Reviews</a>
      <a href="#estimate" class="btn btn--primary" style="padding:8px 14px">Get estimate</a>
    </nav>
  </div>
</header>-->

<!-- HERO -->
<section class="section hero">
  <div class="wrap">
    <div class="hero-grid">
      <div>
        <h1>Oklahoma City's <span style="color:var(--yellow)">#1 Rated</span> Moving Company</h1>
        <p class="hero-sub">Join 500+ satisfied customers this year with our 100% satisfaction guarantee. Licensed & insured. Book this week and save $50!</p>
        <div class="hero-actions">
          <a class="btn btn--primary" href="#estimate">Get Free Estimate — Save $50</a>
          <a class="btn btn--ghost" href="tel:+14055354554">Call (405) 535-4554</a>
        </div>
        <div class="pill-list" style="margin-top:10px">
          <span class="pill">✓ 500+ Moves This Year</span>
          <span class="pill">✓ BBB A+ Rating</span>
          <span class="pill">✓ Licensed & Insured</span>
          <span class="pill">✓ Same-Day Service</span>
        </div>
      </div>

      <aside class="form" id="estimate" aria-label="Get Your Free Moving estimate">
        <h3>Get Your Free Moving Estimate</h3>
        <form>
        <?php
          // Form shortcode slot - replace with actual form shortcode if needed
          $form_shortcode = '[wpforms id="248"]';
          // $form_shortcode = '[wpforms id="248"]';
          echo do_shortcode($form_shortcode);
        ?>
        </form>
      </aside>
    </div>
  </div>
</section>

<!-- ===== INTRO SECTION (after hero) ===== -->
<section class="section section--surface intro intro--home" aria-labelledby="intro-title">
  <div class="l-container intro__wrap">
    <header class="intro__header">
      <h2 id="intro-title" class="intro__title">
        Moving doesn't have to feel like a marathon you didn't train for.
      </h2>
      <p class="intro__lede">
        Bird Dog Moving is your hometown team—family-owned, licensed, insured, and focused on keeping your move simple and stress-free. Your professional movers in Oklahoma City deliver friendly, transparent service.
      </p>
    </header>

    <ul class="intro__pillbar" aria-label="Fast trust highlights">
      <li class="intro__pill">
        <svg class="intro__icon" viewBox="0 0 24 24" width="18" height="18" aria-hidden="true">
          <path d="M12 3l7 2v6c0 5.25-3.41 9.74-7 11-3.59-1.26-7-5.75-7-11V5l7-2z" fill="none" stroke="currentColor" stroke-width="2"/>
          <path d="M8.5 12.5l2 2 5-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
        </svg>
        Licensed &amp; Insured
      </li>
      <li class="intro__pill">
        <svg class="intro__icon" viewBox="0 0 24 24" width="18" height="18" aria-hidden="true">
          <path d="M3 11l9-8 9 8v9a2 2 0 0 1-2 2h-4v-6H9v6H5a2 2 0 0 1-2-2z" fill="none" stroke="currentColor" stroke-width="2"/>
        </svg>
        Family-Owned in OKC
      </li>
      <li class="intro__pill">
        <svg class="intro__icon" viewBox="0 0 24 24" width="18" height="18" aria-hidden="true">
          <path d="M3 12h18M12 3v18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
        </svg>
        Transparent, Friendly Service
      </li>
    </ul>
  </div>
</section>

<!-- ===== WHY SECTION ===== -->
<section class="section section--light why why--home" aria-labelledby="why-title">
  <div class="l-container why__wrap">
    <header class="why__header">
      <h2 id="why-title" class="why__title">Why OKC Homeowners Pick Bird Dog Moving</h2>
      <p class="why__lede">
        Bird Dog Moving is built on trust, reliability, and friendly service. We know Oklahoma City neighborhoods, routes, and building rules, ensuring efficient and neighborly moves. As licensed and insured local movers, we treat every home like it's our own.
      </p>
    </header>

    <div class="why__grid" role="list">
      <article class="why__card c-card" role="listitem">
        <div class="why__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" width="24" height="24"><path d="M12 3l7 2v6c0 5.25-3.41 9.74-7 11-3.59-1.26-7-5.75-7-11V5l7-2z" fill="none" stroke="currentColor" stroke-width="2"/><path d="M8.5 12.5l2 2 5-5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
        </div>
        <h3 class="why__card-title">Licensed &amp; Insured</h3>
        <p class="why__card-text">Full protection from start to finish.</p>
      </article>

      <article class="why__card c-card" role="listitem">
        <div class="why__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" width="24" height="24"><path d="M3 11l9-8 9 8v9a2 2 0 0 1-2 2h-4v-6H9v6H5a2 2 0 0 1-2-2z" fill="none" stroke="currentColor" stroke-width="2"/></svg>
        </div>
        <h3 class="why__card-title">Truly Local</h3>
        <p class="why__card-text">Family-owned and rooted in Oklahoma City.</p>
      </article>

      <article class="why__card c-card" role="listitem">
        <div class="why__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" width="24" height="24"><path d="M5 12l4 4L19 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
        </div>
        <h3 class="why__card-title">Professionally Trained Crews</h3>
        <p class="why__card-text">Smart, careful movers with top packing techniques.</p>
      </article>

      <article class="why__card c-card" role="listitem">
        <div class="why__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" width="24" height="24"><path d="M3 6h18M3 12h18M3 18h18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
        </div>
        <h3 class="why__card-title">Transparent Pricing</h3>
        <p class="why__card-text">Upfront quotes with no surprise fees.</p>
      </article>
    </div>
  </div>
</section>




<!-- HEADER -->
<!--<header class="site-header">
  <div class="l-container header-grid">
    <!-- Left: logo spans two rows -->
    <!--<div class="site-logo">
      <a href="/">
        <img src="/path/to/logo-birddog-lockup.svg" alt="Bird Dog Moving">
      </a>
    </div>-->

    <!-- Top-right: CTA (ghost teal, no wrap) -->
    <!--<div class="site-cta">
      <a class="c-button c-button--ghost header-call" href="tel:+14055354554">
        <span class="site-cta__icon" aria-hidden="true">📞</span>
        <span class="site-cta__number">(405) 535-4554</span>
      </a>
    </div>

    <!-- Bottom: centered primary nav -->
    <!--<nav class="site-nav" aria-label="Primary">
      <ul class="menu main-menu">
        <li class="menu-item current-menu-item"><a href="/">Home</a></li>
        <li class="menu-item"><a href="#services">Services</a></li>
        <li class="menu-item menu-item-estimates">
          <a href="/estimates-pricing/">Free Estimates!<br><span class="line2">&amp; Pricing</span></a>
        </li>
        <li class="menu-item"><a href="/about/">About</a></li>
        <li class="menu-item"><a href="/contact/">Contact</a></li>
      </ul>
    </nav>
  </div>
</header>-->

<!-- HERO -->
<!--<section class="hero">
  <div class="l-container">
    <!-- Make .hero__content a “display: contents” container so children can land in grid columns -->
   <!-- <div class="hero__content">
      <div class="hero__text">
        <p class="eyebrow">Trusted Residential &amp; Commercial Movers</p>
        <h1>Stress-Free <span class="accent">Moving Services</span> for the Oklahoma City Metro</h1>
        <p class="lead">
          Bird Dog Delivery &amp; Moving provides licensed, insured teams for local moves,
          office relocations, packing, and specialty deliveries.
        </p>
        <ul class="hero__highlights checklist">
          <li>Same-day crews available</li>
          <li>Floor, wall &amp; furniture protection</li>
          <li>Transparent, upfront pricing</li>
        </ul>
        <div class="btn-row">
          <a class="c-button c-button--primary" href="#estimate">Get Your Estimate</a>
          <a class="c-button c-button--ghost" href="tel:+14055354554">Call (405) 535-4554</a>
        </div>
      </div>

      <aside class="hero__form">
        <div class="c-card">
          <h3 class="card__title">Get Your Free Moving Estimate</h3>
          <form>
            <div class="form-row two">
              <label>
                <span class="lbl">From ZIP</span>
                <input type="text" placeholder="73101" required>
              </label>
              <label>
                <span class="lbl">To ZIP</span>
                <input type="text" placeholder="73102" required>
              </label>
            </div>
            <div class="form-row two">
              <label>
                <span class="lbl">Move Type</span>
                <select required>
                  <option value="">Select Type</option>
                  <option value="residential">Residential</option>
                  <option value="office">Office/Commercial</option>
                  <option value="both">Both</option>
                </select>
              </label>
              <label>
                <span class="lbl">Property Size</span>
                <select required>
                  <option value="">Select Size</option>
                  <option value="1br">1 Bedroom</option>
                  <option value="2br">2 Bedroom</option>
                  <option value="3br">3+ Bedroom</option>
                  <option value="office">Office Space</option>
                </select>
              </label>
            </div>
            <div class="form-row two">
              <label>
                <span class="lbl">Email</span>
                <input type="email" placeholder="you@email.com" required>
              </label>
              <label>
                <span class="lbl">Phone</span>
                <input type="tel" placeholder="(405) 555-0123" required>
              </label>
            </div>

            <button type="submit" class="c-button c-button--primary u-w-100">Get My Free Estimate Now</button>
            <p class="form-note">Response within 2 hours • No obligation</p>
          </form>
        </div>
      </aside>
    </div>
  </div>
</section>-->

<!-- SERVICES -->
<section id="services" class="services-preview section">
  <div class="l-container">
    <header class="section__header">
      <h2>Our Moving Services</h2>
      <p>Wherever you’re headed across the metro, Bird Dog Moving has you covered.</p>
    </header>

    <div class="services-preview__grid">
      <article class="services-preview__card c-card">
        <figure class="card__media">
          <img src="https://picsum.photos/seed/residential/800/450" alt="Residential moving">
        </figure>
        <div class="card__body">
          <h3>Residential Moving</h3>
          <p>Careful loading, transport, and setup for homes of any size.</p>
          <a class="c-button c-button--ghost" href="#">View Services</a>
        </div>
      </article>

      <article class="services-preview__card c-card">
        <figure class="card__media">
          <img src="https://picsum.photos/seed/office/800/450" alt="Office moving">
        </figure>
        <div class="card__body">
          <h3>Office &amp; Commercial</h3>
          <p>Coordinated office, storefront, and build-out moves with minimal downtime.</p>
          <a class="c-button c-button--ghost" href="#">View Services</a>
        </div>
      </article>

      <article class="services-preview__card c-card">
        <figure class="card__media">
          <img src="https://picsum.photos/seed/delivery/800/450" alt="Local delivery">
        </figure>
        <div class="card__body">
          <h3>Specialty &amp; Delivery</h3>
          <p>Pianos, antiques, restaurant fixtures, and single-item deliveries. Haul-away help also available.</p>
          <a class="c-button c-button--ghost" href="#">View Specialty Item Moves</a> or <a class="c-button c-button--ghost" href="#">View Junk Removal</a>
        </div>
      </article>
    </div>
  </div>
</section>



<!-- FINAL CTA -->
<!--<section class="final-cta section">
  <div class="l-container">
    <h2 class="ta-center">Ready to get moving?</h2>
    <p class="ta-center">Fast estimates, flexible scheduling, COI-ready crews.</p>
    <div class="btn-row ta-center">
      <a class="c-button c-button--primary" href="#estimate">Get Free Estimate</a>
      <a class="c-button c-button--ghost" href="tel:+14055354554">Call (405) 535-4554</a>
    </div>
  </div>
</section>

<!-- FOOTER (kept compatible with your typography/colors) -->
<!--<footer class="site-footer">
  <div class="l-container footer-grid">
    <div class="footer-col">
      <div class="footer-brand">
        <img class="footer-logo" src="/path/to/logo-birddog-lockup.svg" alt="Bird Dog Moving">
        <strong>Bird Dog Moving</strong>
      </div>
      <p>Oklahoma City's most trusted moving company. Professional, reliable, and local since 2018.</p>
    </div>
    <div class="footer-col">
      <strong>Services</strong>
      <ul class="u-list-clean">
        <li><a href="#">Residential Moving</a></li>
        <li><a href="#">Office &amp; Commercial</a></li>
        <li><a href="#">Local Delivery</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <strong>Service Areas</strong>
      <ul class="u-list-clean">
        <li><a href="#">Bricktown</a></li>
        <li><a href="#">Downtown OKC</a></li>
        <li><a href="#">Edmond</a></li>
        <li><a href="#">Norman</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <strong>Contact</strong>
      <ul class="u-list-clean">
        <li><a href="tel:+14055354554">(405) 535-4554</a></li>
        <li><a href="mailto:hello@birddogmoving.com">hello@birddogmoving.com</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="l-container">
      <small>&copy; <span id="year"></span> Bird Dog Moving. All rights reserved.</small>
      <nav class="footer-meta"><a href="#">Privacy</a> · <a href="#">Terms</a> · <a href="#">Sitemap</a></nav>
    </div>
  </div>
</footer>-->

<script>/*document.getElementById('year').textContent=new Date().getFullYear();</script>

<!-- Trust Logos Section -->
<?php /*
<section class="trust l-section">
    <div class="l-container">
        <div class="trust__logos">
            <div class="trust__item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-better-business-bureau.svg" alt="Better Business Bureau" width="120" height="60" data-reveal>
            </div>
            <div class="trust__item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-angie-list.svg" alt="Angie's List" width="120" height="60" data-reveal>
            </div>
            <div class="trust__item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-homeadvisor.svg" alt="HomeAdvisor" width="120" height="60" data-reveal>
            </div>
            <div class="trust__item">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-google.svg" alt="Google Reviews" width="120" height="60" data-reveal>
            </div>
        </div>
        <p class="trust__caption">Licensed & insured • Same-day crews • Proudly serving Oklahoma City</p>
    </div>
</section>
*/ ?>

<!-- Services Preview Section -->
<section class="services-preview l-section">
    <div class="l-container">
        <div class="services-preview__header">
            <h2 class="services-preview__title">Our Services</h2>
            <p class="services-preview__subtitle">Professional Moving Services for your home and business</p>
        </div>
        <div class="services-preview__grid u-grid u-grid--3">
            <div class="c-card services-preview__card" data-reveal>
                <div class="services-preview__icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 7h18v2H3V7zm0 4h18v2H3v-2zm0 4h18v2H3v-2z" fill="#0D9488"/>
                    </svg>
                </div>
                <h3 class="services-preview__card-title">Residential Moving</h3>
                <ul class="services-preview__features">
                    <li>Dependable by-the-hour moving crews</li>
                    <li>Seamless moves for houses, apartments, and condos</li>
                    <li>Fully licensed & insured for your confidence</li>
                </ul>
                <p>From compact apartments to expansive homes, we provide personalized care and precision, ensuring your move is stress-free from start to finish.</p>
                <a href="<?php echo esc_url(home_url('/services/local-moving/')); ?>" class="c-button c-button--ghost services-preview__link">Learn more</a>
            </div>
            
            <div class="c-card services-preview__card" data-reveal>
                <div class="services-preview__icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" fill="#0D9488"/>
                    </svg>
                </div>
                <h3 class="services-preview__card-title">Office & Commercial Moves</h3>
                <ul class="services-preview__features">
                    <li>Efficient, professional teams tailored to your business needs</li>
                    <li>Expertise in office spaces, retail, and commercial properties</li>
                    <li>Licensed & insured for reliable service</li>
                </ul>
                <p>We handle your office relocation with minimal disruption to your operations, letting you focus on what matters most.</p>
                <a href="<?php echo esc_url(home_url('/services/labor-only/')); ?>" class="c-button c-button--ghost services-preview__link">Learn more</a>
            </div>
            
            <div class="c-card services-preview__card" data-reveal>
                <div class="services-preview__icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" fill="#0D9488"/>
                    </svg>
                </div>
                <h3 class="services-preview__card-title">Packing & Specialty Moves</h3>
                <ul class="services-preview__features">
                    <li>Professional packing, labeling, and staging</li>
                    <li>Safe handling for pianos, safes, and oversized items</li>
                    <li>Optional haul-away for packing debris</li>
                </ul>
                <p>Need extra care for fragile pieces or a last-minute pack-out? Our trained crews prep, protect, and deliver so every item arrives exactly where it belongs.</p>
                <a href="<?php echo esc_url(home_url('/services/packing-services/')); ?>" class="c-button c-button--ghost services-preview__link">Learn more</a>
            </div>
        </div>
    </div>
</section>

<!-- Areas Preview Section -->
<section class="areas-preview l-section">
    <div class="l-container">
        <div class="areas-preview__header">
            <h2 class="areas-preview__title">Areas We Serve</h2>
            <p class="areas-preview__subtitle">Providing reliable moving services throughout the Oklahoma City metro</p>
        </div>
        <div class="areas-preview__grid u-grid u-grid--3">
            <div class="c-card areas-preview__card" data-reveal>
                <h3 class="areas-preview__card-title">Oklahoma City</h3>
                <p class="areas-preview__description">Full-service moving for Oklahoma City residents and businesses. Same-day crews, careful packing, and safe delivery.</p>
                <a href="<?php echo esc_url(home_url('/service-area/oklahoma-city/')); ?>" class="c-button c-button--ghost areas-preview__link">View Services</a>
            </div>
            
            <div class="c-card areas-preview__card" data-reveal>
                <h3 class="areas-preview__card-title">Edmond</h3>
                <p class="areas-preview__description">Professional moving services in Edmond. Same-day support for loading, unloading, and in-town moves.</p>
                <a href="<?php echo esc_url(home_url('/service-area/edmond/')); ?>" class="c-button c-button--ghost areas-preview__link">View Services</a>
            </div>
            
            <div class="c-card areas-preview__card" data-reveal>
                <h3 class="areas-preview__card-title">Norman</h3>
                <p class="areas-preview__description">Reliable moving solutions for Norman homes and businesses. Licensed crews with local expertise.</p>
                <a href="<?php echo esc_url(home_url('/service-area/norman/')); ?>" class="c-button c-button--ghost areas-preview__link">View Services</a>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS (kept simple, classed for your cards) -->
<section id="testimonials" class="testimonials section">
  <div class="l-container">
    <header class="section__header">
      <h2>What Our Customers Say</h2>
      <p>Real reviews from OKC families and businesses.</p>
    </header>
<!-- Testimonials Teaser Section -->
<?
          // Form shortcode slot - replace with actual form shortcode if needed
          $review_shortcode = '[trustindex no-registration=google]';
          // $form_shortcode = '[wpforms id="248"]';
          echo do_shortcode($review_shortcode);
        ?>
  </div>
</section>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <section class="l-section">
    <div class="l-container prose">
      <?php the_content(); ?>
    </div>
  </section>
<?php endwhile; endif; ?>

<!-- CTA Band Section -->
<section class="cta-band l-section">
    <div class="l-container">
        <div class="cta-band__content">
            <h2 class="cta-band__title">Ready to Move? Let’s Get Started.</h2>
            <p class="cta-band__subtitle">Your smooth, stress-free move is just a call or click away. Get your free moving estimate in OKC today.</p>
            <div class="cta-band__actions">
                <a href="<?php echo esc_url(home_url('/contact/#estimate')); ?>" class="c-button c-button--primary" data-reveal>Get My Free Estimate</a>
                <a href="<?php echo BUSINESS_PHONE_LINK; ?>" class="c-button c-button--secondary" data-reveal>Call <?php echo BUSINESS_PHONE; ?></a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
