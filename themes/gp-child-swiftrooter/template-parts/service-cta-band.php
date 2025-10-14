<?php
/**
 * Template Part: Service CTA Band
 * Call-to-action section
 *
 * @package Bird_Dog_Moving
 */

// Default values - can be overridden before get_template_part()
$cta_heading = $cta_heading ?? get_field('cta_heading') ?? 'Ready to get started?';
$cta_text = $cta_text ?? get_field('cta_text') ?? 'Get a free, no-obligation quote for your move. We\'ll provide transparent pricing and a detailed plan.';
?>

<section class="service-section">
	<div class="l-container">
		<div class="service-cta-band">
			<h2><?php echo esc_html($cta_heading); ?></h2>
			<p><?php echo esc_html($cta_text); ?></p>

			<div class="service-cta-band__actions">
				<a href="/contact/#estimate" class="c-button c-button--primary">Get Free Quote</a>
				<a href="tel:<?php echo esc_attr(get_option('birddog_phone', '(405) 535-4554')); ?>" class="c-button c-button--ghost-dark">
					Call <?php echo esc_html(get_option('birddog_phone', '(405) 535-4554')); ?>
				</a>
			</div>
		</div>
	</div>
</section>
