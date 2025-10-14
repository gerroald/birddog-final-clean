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

	<!-- Main Content Area (WordPress Editor) -->
	<section class="service-section">
		<div class="l-container">
			<?php
			while (have_posts()) :
				the_post();
				the_content();
			endwhile;
			?>
		</div>
	</section>

	<!-- Features Grid (Optional - Uses ACF Repeater) -->
	<?php if (have_rows('service_features')): ?>
	<section class="service-section">
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
	<section class="service-pricing">
		<div class="l-container">
			<div class="service-pricing__grid">

				<!-- Standard Pricing -->
				<div class="service-pricing-card">
					<h3><?php echo get_field('pricing_title') ?: 'Standard Pricing'; ?></h3>

					<?php if (get_field('hourly_rate')): ?>
						<div style="margin-bottom: var(--space-lg);">
							<span style="font-size: var(--fs-900); font-weight: 700; color: var(--color-accent);">
								$<?php the_field('hourly_rate'); ?>/hr
							</span>
						</div>
					<?php endif; ?>

					<?php if (get_field('pricing_includes')): ?>
						<h4>What's Included:</h4>
						<?php echo wpautop(get_field('pricing_includes')); ?>
					<?php endif; ?>
				</div>

				<!-- Additional Services -->
				<?php if (get_field('additional_services')): ?>
				<div class="service-pricing-card">
					<h3>Additional Services</h3>
					<?php echo wpautop(get_field('additional_services')); ?>
				</div>
				<?php endif; ?>

			</div>
		</div>
	</section>
	<?php endif; ?>

	<!-- CTA Band -->
	<section class="service-section">
		<div class="l-container">
			<div class="service-cta-band">
				<h2><?php echo get_field('cta_heading') ?: 'Ready to get started?'; ?></h2>
				<p><?php echo get_field('cta_text') ?: 'Get a free, no-obligation quote for your move. We\'ll provide transparent pricing and a detailed plan.'; ?></p>

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
