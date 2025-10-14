<?php
/**
 * Template Name: Service Hub
 * Description: Main services overview page with grid of service cards
 *
 * @package Bird_Dog_Moving
 */

get_header();
?>

<main class="service-page" id="main-content">

	<!-- Hero Section -->
	<section class="service-hero">
		<div class="l-container">
			<div class="service-hero__wrap">

				<!-- Hero Content -->
				<div class="service-hero__content">
					<p class="service-hero__eyebrow">Bird Dog's Delivery & Moving, Inc</p>

					<h1 class="service-hero__title">
						Professional Moving Services in Oklahoma City
					</h1>

					<p class="service-hero__lede">
						From residential moves to commercial relocations, we provide comprehensive moving solutions with transparent pricing and exceptional service.
					</p>

					<div class="service-hero__actions">
						<a href="/contact/#estimate" class="c-button c-button--primary">
							Get Free Quote
						</a>
						<a href="tel:<?php echo esc_attr(get_option('birddog_phone', '(405) 535-4554')); ?>" class="c-button c-button--ghost">
							Call <?php echo esc_html(get_option('birddog_phone', '(405) 535-4554')); ?>
						</a>
					</div>

					<nav class="service-breadcrumbs" aria-label="Breadcrumb">
						<a href="<?php echo esc_url(home_url('/')); ?>">Home</a> / Services
					</nav>
				</div>

				<!-- Quick Estimate Card -->
				<aside class="service-quote-card">
					<h3>Get an Instant Estimate</h3>
					<p class="service-quote-card__subtitle">Fill out the form below for a quick moving quote.</p>

					<!-- Replace with your calculator shortcode -->
					<?php echo do_shortcode('[moving_estimator_quick title="Quick Estimate" title_tag="h4"]'); ?>
				</aside>

			</div>
		</div>
	</section>

	<!-- Services Grid -->
	<section class="service-section">
		<div class="l-container">

			<div class="service-features__grid">

				<!-- Residential Moving -->
				<article class="service-feature-card">
					<span class="service-badge">Most Popular</span>
					<h3>Residential Moving</h3>
					<p>Complete home moving services for apartments, condos, and houses of all sizes.</p>

					<div style="margin-top: var(--space-md); padding-top: var(--space-md); border-top: 1px solid var(--color-border);">
						<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: var(--space-sm);">
							<span style="color: var(--color-muted);">Starting at</span>
							<strong style="font-size: var(--fs-700); color: var(--color-accent);">$120/hr</strong>
						</div>

						<ul style="margin: var(--space-md) 0; padding-left: 1.2rem; font-size: var(--fs-400);">
							<li>Furniture protection</li>
							<li>Packing services</li>
							<li>Flexible scheduling</li>
						</ul>

						<a href="/services/residential-moving/" class="c-button c-button--ghost" style="width: 100%; justify-content: center;">
							Learn More →
						</a>
					</div>
				</article>

				<!-- Office & Commercial -->
				<article class="service-feature-card">
					<h3>Office & Commercial</h3>
					<p>Professional business relocations with minimal downtime and secure handling.</p>

					<div style="margin-top: var(--space-md); padding-top: var(--space-md); border-top: 1px solid var(--color-border);">
						<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: var(--space-sm);">
							<span style="color: var(--color-muted);">Starting at</span>
							<strong style="font-size: var(--fs-700); color: var(--color-accent);">$189/hr</strong>
						</div>

						<ul style="margin: var(--space-md) 0; padding-left: 1.2rem; font-size: var(--fs-400);">
							<li>After-hours service</li>
							<li>IT equipment care</li>
							<li>Minimal downtime</li>
						</ul>

						<a href="/services/commercial-moving/" class="c-button c-button--ghost" style="width: 100%; justify-content: center;">
							Learn More →
						</a>
					</div>
				</article>

				<!-- Local Delivery -->
				<article class="service-feature-card">
					<h3>Local Delivery</h3>
					<p>Same-day delivery services for furniture, appliances, and large items.</p>

					<div style="margin-top: var(--space-md); padding-top: var(--space-md); border-top: 1px solid var(--color-border);">
						<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: var(--space-sm);">
							<span style="color: var(--color-muted);">Starting at</span>
							<strong style="font-size: var(--fs-700); color: var(--color-accent);">$99/hr</strong>
						</div>

						<ul style="margin: var(--space-md) 0; padding-left: 1.2rem; font-size: var(--fs-400);">
							<li>Same-day service</li>
							<li>Assembly included</li>
							<li>Appliance hookup</li>
						</ul>

						<a href="/services/local-delivery/" class="c-button c-button--ghost" style="width: 100%; justify-content: center;">
							Learn More →
						</a>
					</div>
				</article>

			</div>

		</div>
	</section>

	<!-- CTA Band -->
	<section class="service-section">
		<div class="l-container">
			<div class="service-cta-band">
				<h2>Ready to get started?</h2>
				<p>Get a free, no-obligation quote for your move. We'll provide transparent pricing and a detailed plan.</p>

				<div class="service-cta-band__actions">
					<a href="/contact/#estimate" class="c-button c-button--primary">Get Free Quote</a>
					<a href="tel:<?php echo esc_attr(get_option('birddog_phone', '(405) 535-4554')); ?>" class="c-button c-button--ghost-dark">
						Call <?php echo esc_html(get_option('birddog_phone', '(405) 535-4554')); ?>
					</a>
				</div>
			</div>
		</div>
	</section>

</main>

<?php
get_footer();
?>
