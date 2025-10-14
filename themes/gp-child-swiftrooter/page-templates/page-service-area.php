<?php
/**
 * Template Name: Service Area
 * Description: Location-based service page with sidebar for weather, promos, and local content
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
					<p class="service-hero__eyebrow">Service Area</p>

					<h1 class="service-hero__title">
						<?php the_title(); ?>
					</h1>

					<?php if (get_field('area_lede')): ?>
						<p class="service-hero__lede">
							<?php the_field('area_lede'); ?>
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

					<!-- Location Tags (Optional - Uses ACF) -->
					<?php if (have_rows('nearby_locations')): ?>
					<div class="service-pill-list">
						<?php while (have_rows('nearby_locations')): the_row(); ?>
							<span class="service-pill"><?php the_sub_field('location_name'); ?></span>
						<?php endwhile; ?>
					</div>
					<?php endif; ?>
				</div>

				<!-- Quick Estimate Card -->
				<aside class="service-quote-card">
					<h3>Get an Instant Estimate</h3>
					<p class="service-quote-card__subtitle">Fill out the form for <?php the_title(); ?> moving services.</p>

					<?php echo do_shortcode('[moving_estimator_quick title="Quick Estimate" title_tag="h4"]'); ?>
				</aside>

			</div>
		</div>
	</section>

	<!-- Two-Column Content with Sidebar -->
	<section class="service-section">
		<div class="l-container">
			<div class="service-area__cols">

				<!-- Main Content -->
				<div class="service-area__main">

					<!-- WordPress Editor Content -->
					<div style="margin-bottom: var(--space-2xl);">
						<?php
						while (have_posts()) :
							the_post();
							the_content();
						endwhile;
						?>
					</div>

					<!-- Service Features Grid (Optional - Uses ACF) -->
					<?php if (have_rows('area_features')): ?>
					<div class="service-features__grid">
						<?php while (have_rows('area_features')): the_row(); ?>
						<article class="service-feature-card">
							<?php if (get_sub_field('feature_badge')): ?>
								<span class="service-badge"><?php the_sub_field('feature_badge'); ?></span>
							<?php endif; ?>
							<h3><?php the_sub_field('feature_title'); ?></h3>
							<p><?php the_sub_field('feature_description'); ?></p>
						</article>
						<?php endwhile; ?>
					</div>
					<?php endif; ?>

					<!-- Map Placeholder (Optional - Uses ACF for embed) -->
					<?php if (get_field('show_map')): ?>
					<div class="service-map" style="margin-top: var(--space-2xl);">
						<?php if (get_field('map_embed')): ?>
							<?php the_field('map_embed'); ?>
						<?php else: ?>
							<div style="display: flex; align-items: center; justify-content: center; height: 100%; color: var(--color-muted);">
								Map placeholder - Add embed code via ACF
							</div>
						<?php endif; ?>
					</div>
					<?php endif; ?>

				</div>

				<!-- Sidebar -->
				<aside class="service-sidebar">

					<!-- Weather Widget -->
					<?php if (is_active_sidebar('service-sidebar')): ?>
						<?php dynamic_sidebar('service-sidebar'); ?>
					<?php else: ?>
						<!-- Default widgets when sidebar isn't registered yet -->

						<div class="service-sidebar__widget">
							<h3>Local Weather</h3>
							<p style="color: var(--color-muted); font-size: var(--fs-400);">
								Weather widget placeholder. Register widget area or add weather embed code.
							</p>
						</div>

						<div class="service-sidebar__widget">
							<h3>Special Offers</h3>
							<p style="margin-bottom: var(--space-md);">Check out our current promotions for <?php the_title(); ?>.</p>
							<a href="/contact/#estimate" class="c-button c-button--primary" style="width: 100%; justify-content: center;">
								Get Free Quote
							</a>
						</div>

						<div class="service-sidebar__widget">
							<h3>Local Partnerships</h3>
							<p style="color: var(--color-muted); font-size: var(--fs-400);">
								We work with trusted local businesses to provide you with the best service.
							</p>
						</div>

						<div class="service-sidebar__widget">
							<h3>Service Hours</h3>
							<p style="font-size: var(--fs-500); margin: 0;">
								<strong>Monday - Friday:</strong> 7:00 AM - 6:00 PM<br>
								<strong>Saturday:</strong> 8:00 AM - 4:00 PM<br>
								<strong>Sunday:</strong> Closed
							</p>
							<p style="margin-top: var(--space-md); padding-top: var(--space-md); border-top: 1px solid var(--color-border);">
								<a href="tel:<?php echo esc_attr(get_option('birddog_phone', '(405) 535-4554')); ?>" class="c-button c-button--ghost" style="width: 100%; justify-content: center;">
									Call <?php echo esc_html(get_option('birddog_phone', '(405) 535-4554')); ?>
								</a>
							</p>
						</div>
					<?php endif; ?>

				</aside>

			</div>
		</div>
	</section>

	<!-- CTA Band -->
	<section class="service-section">
		<div class="l-container">
			<div class="service-cta-band">
				<h2>Ready to get started?</h2>
				<p>Get a free, no-obligation quote for your move in <?php the_title(); ?>.</p>

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
