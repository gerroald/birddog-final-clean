<?php
/**
 * Template Name: Service Detail
 * Description: Individual service page with hero, quote form, features, and pricing
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
						<?php the_title(); ?>
					</h1>

					<?php if (get_field('service_lede')): ?>
						<p class="service-hero__lede">
							<?php the_field('service_lede'); ?>
						</p>
					<?php else: ?>
						<p class="service-hero__lede">
							<?php echo wp_trim_words(get_the_excerpt(), 30); ?>
						</p>
					<?php endif; ?>

					<div class="service-hero__actions">
						<a href="/contact/#estimate" class="c-button c-button--primary">
							Get Free Quote
						</a>
						<a href="tel:<?php echo esc_attr(get_option('birddog_phone', '(405) 535-4554')); ?>" class="c-button c-button--ghost">
							Call <?php echo esc_html(get_option('birddog_phone', '(405) 535-4554')); ?>
						</a>
					</div>

					<nav class="service-breadcrumbs" aria-label="Breadcrumb">
						<a href="<?php echo esc_url(home_url('/')); ?>">Home</a> /
						<a href="<?php echo esc_url(home_url('/services/')); ?>">Services</a> /
						<?php the_title(); ?>
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

	<!-- Service Overview -->
	<section class="service-overview l-section section--surface">
		<div class="l-container">
			<div class="service-overview__content">
				<h2>Complete Moving Solutions</h2>
				<p>Every move is different, and we tailor our approach to fit your specific needs. From packing and loading to transport and setup, our experienced team handles every detail with care and professionalism.</p>
			</div>
		</div>
	</section>

	<!-- Main Content Area (WordPress Editor) -->
	<section class="service-content l-section">
		<div class="l-container">
			<div class="service-content__prose">
				<?php
				while (have_posts()) :
					the_post();
					the_content();
				endwhile;
				?>
			</div>
		</div>
	</section>

	<!-- Service Types Grid -->
	<section class="service-types l-section section--light">
		<div class="l-container">
			<h2 class="service-types__title">Our Moving Services</h2>
			<div class="service-types__grid">

				<div class="service-type-card">
					<div class="service-type-card__icon">
						<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" fill="#0D9488"/>
						</svg>
					</div>
					<h3>Residential Moving</h3>
					<p>Moving homes requires careful planning and execution. We handle everything from single-family homes to large estates, ensuring your furniture, boxes, and precious memories arrive safely at your new address. Our team uses protective padding, careful packing techniques, and efficient load/unload methods to keep your home move smooth and on schedule.</p>
					<a href="<?php echo esc_url(home_url('/services/residential-moving/')); ?>" class="service-type-card__link">
						Learn more about residential moving →
					</a>
				</div>

				<div class="service-type-card">
					<div class="service-type-card__icon">
						<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z" fill="#0D9488"/>
						</svg>
					</div>
					<h3>Commercial & Office Moving</h3>
					<p>Minimize downtime and keep your business running smoothly. We coordinate every detail—from packing up workstations to carefully transporting sensitive equipment—so your team can get back to work quickly. Our crews are trained to handle office furniture, electronics, files, and specialized equipment with the utmost care.</p>
					<a href="<?php echo esc_url(home_url('/services/commercial-moving/')); ?>" class="service-type-card__link">
						Explore commercial moving services →
					</a>
				</div>

				<div class="service-type-card">
					<div class="service-type-card__icon">
						<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" fill="#0D9488"/>
						</svg>
					</div>
					<h3>Specialty Services</h3>
					<p>Have something unique to move? We handle specialty items like pianos, antiques, safes, and large appliances. Our delivery services are perfect for single-item transport, and we offer packing assistance, storage solutions, and flexible scheduling to meet your timeline.</p>
					<a href="<?php echo esc_url(home_url('/services/specialty-moving/')); ?>" class="service-type-card__link">
						View specialty services →
					</a>
				</div>

			</div>
		</div>
	</section>

	<!-- Why Choose Bird Dog -->
	<section class="service-why l-section section--surface">
		<div class="l-container">
			<h2 class="service-why__title">Why Choose Bird Dog for Your OKC Move</h2>
			<div class="service-why__grid">

				<div class="service-why-item">
					<div class="service-why-item__icon">
						<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z" fill="#0D9488"/>
						</svg>
					</div>
					<div class="service-why-item__content">
						<h3>Licensed & Insured</h3>
						<p>Your move is fully protected with proper licensing and comprehensive insurance coverage</p>
					</div>
				</div>

				<div class="service-why-item">
					<div class="service-why-item__icon">
						<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" fill="#0D9488"/>
						</svg>
					</div>
					<div class="service-why-item__content">
						<h3>Local Expertise</h3>
						<p>We know Oklahoma City neighborhoods, traffic patterns, and the most efficient routes</p>
					</div>
				</div>

				<div class="service-why-item">
					<div class="service-why-item__icon">
						<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z" fill="#0D9488"/>
						</svg>
					</div>
					<div class="service-why-item__content">
						<h3>Transparent Pricing</h3>
						<p>Clear, upfront quotes with no hidden fees</p>
					</div>
				</div>

				<div class="service-why-item">
					<div class="service-why-item__icon">
						<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" fill="#0D9488"/>
						</svg>
					</div>
					<div class="service-why-item__content">
						<h3>Professional Crews</h3>
						<p>Trained movers who handle your belongings with care and respect</p>
					</div>
				</div>

				<div class="service-why-item">
					<div class="service-why-item__icon">
						<svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z" fill="#0D9488"/>
						</svg>
					</div>
					<div class="service-why-item__content">
						<h3>Flexible Scheduling</h3>
						<p>We work around your timeline, including evenings and weekends</p>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- Features Grid (Optional - Uses ACF Repeater) -->
	<?php if (have_rows('service_features')): ?>
	<section class="service-features l-section section--light">
		<div class="l-container">
			<div class="service-features__head">
				<h2><?php echo get_field('features_heading') ?: 'What\'s Included'; ?></h2>
			</div>

			<div class="service-features__grid">
				<?php while (have_rows('service_features')): the_row(); ?>
				<article class="service-feature-card">
					<?php if (get_sub_field('feature_badge')): ?>
						<span class="service-badge"><?php the_sub_field('feature_badge'); ?></span>
					<?php endif; ?>
					<h3><?php the_sub_field('feature_title'); ?></h3>
					<p><?php the_sub_field('feature_description'); ?></p>
				</article>
				<?php endwhile; ?>
			</div>
		</div>
	</section>
	<?php endif; ?>

	<!-- Pricing Section (Optional - Uses ACF) -->
	<?php if (get_field('show_pricing')): ?>
	<section class="service-pricing l-section section--surface">
		<div class="l-container">
			<div class="service-pricing__grid">

				<!-- Standard Pricing -->
				<div class="service-pricing-card">
					<h3><?php echo get_field('pricing_title') ?: 'Standard Pricing'; ?></h3>

					<?php if (get_field('hourly_rate')): ?>
						<div class="service-pricing-card__rate">
							<span class="service-pricing-card__amount">
								$<?php the_field('hourly_rate'); ?>
							</span>
							<span class="service-pricing-card__period">/hr</span>
						</div>
					<?php endif; ?>

					<?php if (get_field('pricing_includes')): ?>
						<h4>What's Included:</h4>
						<div class="service-pricing-card__includes">
							<?php echo wpautop(get_field('pricing_includes')); ?>
						</div>
					<?php endif; ?>
				</div>

				<!-- Additional Services -->
				<?php if (get_field('additional_services')): ?>
				<div class="service-pricing-card">
					<h3>Additional Services</h3>
					<div class="service-pricing-card__additional">
						<?php echo wpautop(get_field('additional_services')); ?>
					</div>
				</div>
				<?php endif; ?>

			</div>
		</div>
	</section>
	<?php endif; ?>

	<!-- CTA Band -->
	<section class="service-cta l-section">
		<div class="l-container">
			<div class="service-cta__content">
				<h2><?php echo get_field('cta_heading') ?: 'Ready to Get Started?'; ?></h2>
				<p><?php echo get_field('cta_text') ?: 'Tell us about your move and we\'ll provide a free, no-obligation quote. Whether you\'re planning a residential relocation, office move, or need specialty moving services, Bird Dog has the experience and equipment to make it happen.'; ?></p>

				<div class="service-cta__actions">
					<a href="/contact/#estimate" class="c-button c-button--primary">Request Your Free Quote</a>
					<a href="tel:<?php echo esc_attr(get_option('birddog_phone', '(405) 535-4554')); ?>" class="c-button c-button--secondary">
						Call <?php echo esc_html(get_option('birddog_phone', '(405) 535-4554')); ?>
					</a>
				</div>

				<p class="service-cta__link-text">Or explore our service areas to confirm we serve your location:</p>
				<a href="<?php echo esc_url(home_url('/service-areas/')); ?>" class="service-cta__link">
					View Service Areas →
				</a>
			</div>
		</div>
	</section>

</main>

<?php
get_footer();
?>