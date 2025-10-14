<?php
/**
 * Template Part: Service Quote Form
 * Quick estimate form card
 *
 * @package Bird_Dog_Moving
 */

// Default values - can be overridden before get_template_part()
$form_title = $form_title ?? 'Get an Instant Estimate';
$form_subtitle = $form_subtitle ?? 'Fill out the form below for a quick moving quote.';
$calculator_shortcode = $calculator_shortcode ?? '[moving_estimator_quick title="Quick Estimate" title_tag="h4"]';
?>

<aside class="service-quote-card">
	<h3><?php echo esc_html($form_title); ?></h3>
	<p class="service-quote-card__subtitle"><?php echo esc_html($form_subtitle); ?></p>

	<?php echo do_shortcode($calculator_shortcode); ?>
</aside>
