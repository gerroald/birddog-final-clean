<?php
/*
<<<<<<< HEAD
Template Name: 	Home WITH Teal Gradient BG Hero With Watermark
=======
Template Name: Home – Black/Yellow/Teal
>>>>>>> 1ef29258 (initial)
*/

get_header(); ?>
<!-- Hero Section -->
<!-- Hero Form on Right 6040 -->
<section class="hero hero--watermark hero--teal hero--two-col l-section" aria-labelledby="page-title">
  <div class="l-container">
    <!-- Column 1: Text FIRST in DOM -->
    <div class="hero__text">
      <p class="hero__eyebrow">
        Bird Dog's Delivery &amp; Moving, OKC
      </p>
      <h1 id="page-title" class="hero__title">
        The <span class="text-accent-yellow">Trusted Local</span> Moving Company in
        <span class="text-accent-yellow">Oklahoma City</span>
      </h1>
      <p class="hero__lead">
        Family-owned, licensed &amp; insured movers in OKC. Local expertise, transparent pricing, and stress-free service.
      </p>
      <ul class="hero__highlights">
        <li>Same-day crews available</li>
        <li>Floor, wall &amp; furniture protection</li> <!-- fixed &amp;amp; -->
        <li>Transparent, upfront pricing</li>
      </ul>
      <div class="hero__actions">
        <a href="<?php echo esc_url( home_url('/contact/#estimate') ); ?>" class="c-button c-button--primary">Get Your Estimate</a>
        <a href="<?php echo BUSINESS_PHONE_LINK; ?>" class="c-button c-button--ghost">Call <?php echo BUSINESS_PHONE; ?></a>
      </div>
    </div>

    <!-- Column 2: Estimator / card -->
    <aside class="hero__aside" aria-label="Instant moving estimate">
      <div class="hero-form-card c-card">
        <?php
          // Form shortcode slot - replace with actual form shortcode if needed
          $form_shortcode = '[wpforms id="248"]';
          // $form_shortcode = '[wpforms id="248"]';
          echo do_shortcode($form_shortcode);
        ?>
      </div>
    </aside>
  </div>
</section>
	

<!-- Trust Logos Section -->
<section class="trust l-section">
    <div class="l-container">
        <div class="trust__logos">
            <div class="trust__item">
                <a href="https://www.bbb.org/us/ok/oklahoma-city/profile/moving-companies/bird-dogs-delivery-moving-service-0995-90046474/#sealclick" target="_blank" rel="nofollow"><img src="https://seal-oklahomacity.bbb.org/seals/black-seal-187-130-bbb-90046474.png" style="border: 0;" alt="Bird Dogs Delivery & Moving Service BBB Business Review" data=reveal/></a>
            </div>
            <div class="trust__item">
<<<<<<< HEAD
                <a href="https://share.google/CtNMR8Xakxcj7JCbf" target="_blank" rel="nofollow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/badges/google-reviews.png" alt="Google Reviews" width="120" height="60" data-reveal></a>
            </div>
            <div class="trust__item">
                <a href="https://www.yelp.com/biz/bird-dogs-delivery-and-moving-service-oklahoma-city?osq=bird+dogs+delivery+%26+moving+services&override_cta=Get+pricing+%26+availability" target="_blank" rel="nofollow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/badges/yelp.png" alt="Yelp Reviews" width="120" height="60" data-reveal></a>
=======
                <a hrefhttps://share.google/CtNMR8Xakxcj7JCbf"><img src="http://localhost:10070/wp-content/uploads/2025/10/google_g_icon_download.png" alt="Google Reviews" width="120" height="60" data-reveal>
            </div>
            <div class="trust__item">
                <a href="https://www.yelp.com/biz/bird-dogs-delivery-and-moving-service-oklahoma-city?osq=bird+dogs+delivery+%26+moving+services&override_cta=Get+pricing+%26+availability" alt="Yelp"><img src="http://localhost:10070/wp-content/uploads/2025/10/yelp_logo.png" width="120" height="60" data-reveal>
>>>>>>> 1ef29258 (initial)
            </div>
 
        </div>
        <p class="trust__caption">Licensed &amp; Insured • Same-Day Moves • Oklahoma City Locals</p>
    </div>
</section>


<!-- Services Preview Section -->
<section class="services-preview l-section section--light">
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
                    <li>Fully licensed &amp; insured for your confidence</li>
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
                <h3 class="services-preview__card-title">Office &amp; Commercial Moves</h3>
                <ul class="services-preview__features">
                    <li>Efficient, professional teams tailored to your business needs</li>
                    <li>Expertise in office spaces, retail, and commercial properties</li>
                    <li>Licensed &amp; insured for reliable service</li>
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
<h3 class="services-preview__card-title">Junk Removal</h3>
                <ul class="services-preview__features">
                    <li>Quick and hassle-free removal services</li>
                    <li>Residential and commercial spaces of all sizes</li>
                    <li>Licensed &amp; insured for your peace of mind</li>
                </ul>
                <p>Need to clear out the clutter? We offer quick, hassle-free junk removal for residential and commercial spaces of all sizes.</p>
                <a href="<?php echo esc_url(home_url('/services/junk-removal/')); ?>" class="c-button c-button--ghost services-preview__link">Learn more</a>
            </div>
        </div>
    </div>
</section>

<!-- Areas Preview Section -->
<section class="areas-preview l-section section--surface">
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

<!-- Testimonials Teaser Section -->
<section class="testimonials-teaser l-section section-light">
    <div class="l-container">
        <div class="testimonials-teaser__header">
            <h2 class="testimonials-teaser__title">What Our Customers Say</h2>
            <p class="testimonials-teaser__subtitle">Real reviews from satisfied customers across Oklahoma City</p>
        </div>
        <div class="testimonials-teaser__grid u-grid u-grid--3">
            <div class="c-card testimonials-teaser__card" data-reveal>
                <blockquote class="testimonials-teaser__quote">
                    "<?php echo BUSINESS_NAME; ?> got our three-bedroom home packed, moved, and set back up in a single day. Nothing was scratched and the crew was upbeat the whole time."
                </blockquote>
                <figcaption class="testimonials-teaser__author">
                    <strong>Sarah M.</strong><br>
                    <span class="testimonials-teaser__location">Oklahoma City</span>
                </figcaption>
            </div>
            
            <div class="c-card testimonials-teaser__card" data-reveal>
                <blockquote class="testimonials-teaser__quote">
                    "Transparent pricing and excellent communication. They coordinated with our building manager and kept our downtown office move right on schedule."
                </blockquote>
                <figcaption class="testimonials-teaser__author">
                    <strong>Mike R.</strong><br>
                    <span class="testimonials-teaser__location">Edmond</span>
                </figcaption>
            </div>
            
            <div class="c-card testimonials-teaser__card" data-reveal>
                <blockquote class="testimonials-teaser__quote">
                    "From the first walkthrough to the final box, the crew treated our belongings with care and even helped stage the new space. We'll hire them again."
                </blockquote>
                <figcaption class="testimonials-teaser__author">
                    <strong>Jennifer L.</strong><br>
                    <span class="testimonials-teaser__location">Norman</span>
                </figcaption>
            </div>
        </div>
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
<section class="cta-band l-section section-tealband">
    <div class="l-container">
        <div class="cta-band__content">
            <h2 class="cta-band__title">Ready to Get Started?</h2>
            <p class="cta-band__subtitle">Contact <?php echo BUSINESS_NAME; ?> today for fast, reliable moving services in Oklahoma City</p>
            <div class="cta-band__actions">
                <a href="<?php echo esc_url(home_url('/contact/#estimate')); ?>" class="c-button c-button--primary" data-reveal>Get Free Estimate</a>
                <a href="<?php echo BUSINESS_PHONE_LINK; ?>" class="c-button c-button--secondary" data-reveal>Call <?php echo BUSINESS_PHONE; ?></a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
