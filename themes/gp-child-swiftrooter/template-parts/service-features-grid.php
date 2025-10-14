<?php
/**
 * Template Part: Service Features Grid
 * Displays service features in a grid layout
 *
 * @package Bird_Dog_Moving
 */

// Default values - can be overridden before get_template_part()
$features_heading = $features_heading ?? get_field('features_heading') ?? 'What\'s Included';
$acf_field_name = $acf_field_name ?? 'service_features';
?>

<?php if (have_rows($acf_field_name)): ?>
<section class="service-section">
	<div class="l-container">
		<div class="service-features__head">
			<h2><?php echo esc_html($features_heading); ?></h2>
		</div>

		<div class="service-features__grid">
			<?php while (have_rows($acf_field_name)): the_row(); ?>
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
