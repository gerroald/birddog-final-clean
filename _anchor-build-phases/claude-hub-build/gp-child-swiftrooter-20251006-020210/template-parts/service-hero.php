<?php
/**
 * Template Part: Service Hero
 * Two-column hero section with content and quote form
 *
 * @package Bird_Dog_Moving
 */

// Default values - can be overridden before get_template_part()
$eyebrow = $eyebrow ?? 'Bird Dog\'s Delivery & Moving, Inc';
$show_breadcrumbs = $show_breadcrumbs ?? true;
$show_quote_form = $show_quote_form ?? true;
?>

<section class="service-hero">
	<div class="l-container">
		<div class="service-hero__wrap">

			<!-- Hero Content -->
			<div class="service-hero__content">
				<p class="service-hero__eyebrow"><?php echo esc_html($eyebrow); ?></p>

				<h1 class="service-hero__title">
					<?php the_title(); ?>
				</h1>

				<?php if (get_field('service_lede') || get_field('area_lede')): ?>
					<p class="service-hero__lede">
						<?php echo get_field('service_lede') ?: get_field('area_lede'); ?>
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

				<?php if ($show_breadcrumbs): ?>
				<nav class="service-breadcrumbs" aria-label="Breadcrumb">
					<a href="<?php echo esc_url(home_url('/')); ?>">Home</a> /
					<a href="<?php echo esc_url(home_url('/services/')); ?>">Services</a> /
					<?php the_title(); ?>
				</nav>
				<?php endif; ?>
			</div>

			<!-- Quote Form Sidebar -->
			<?php if ($show_quote_form): ?>
				<?php get_template_part('template-parts/service-quote-form'); ?>
			<?php endif; ?>

		</div>
	</div>
</section>
