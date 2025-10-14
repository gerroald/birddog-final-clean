<?php
/**
 * Template Name: About
 * Description: About page with trust-building hero, team intro, and SEO content
 *
 * @package Bird_Dog_Moving
 */

get_header();
?>

<main class="about-page" id="main-content">

	<!-- Hero Section - Trust Building -->
	<section class="about-hero">
		<div class="l-container">
			<div class="about-hero__content">
				<p class="about-hero__eyebrow"><?php echo get_field('hero_eyebrow') ?: 'About Us'; ?></p>
				<h1 class="about-hero__title">
					<?php echo get_field('hero_title') ?: 'Oklahoma City\'s Trusted Local Movers Since 2005'; ?>
				</h1>
				<p class="about-hero__lede">
					<?php echo get_field('hero_lede') ?: 'Family-owned, licensed & insured. We treat your belongings like our own and your home like ours.'; ?>
				</p>
				<div class="about-hero__stats">
					<div class="about-hero__stat">
						<strong><?php echo get_field('stat_1_number') ?: '10,000+'; ?></strong>
						<span><?php echo get_field('stat_1_label') ?: 'Moves Completed'; ?></span>
					</div>
					<div class="about-hero__stat">
						<strong><?php echo get_field('stat_2_number') ?: '20+'; ?></strong>
						<span><?php echo get_field('stat_2_label') ?: 'Years Experience'; ?></span>
					</div>
					<div class="about-hero__stat">
						<strong><?php echo get_field('stat_3_number') ?: '4.9/5'; ?></strong>
						<span><?php echo get_field('stat_3_label') ?: 'Star Rating'; ?></span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Story Section -->
	<section class="about-story">
		<div class="l-container">
			<div class="about-story__grid">
				<div class="about-story__image">
					<?php if (get_field('story_image')): ?>
						<?php echo wp_get_attachment_image(get_field('story_image'), 'large'); ?>
					<?php else: ?>
						<img src="https://via.placeholder.com/600x400/0891B2/ffffff?text=Your+Team" alt="Bird Dog Moving Team">
					<?php endif; ?>
				</div>
				<div class="about-story__content">
					<h2><?php echo get_field('story_title') ?: 'Our Story'; ?></h2>
					<?php if (get_field('story_content')): ?>
						<?php echo wpautop(get_field('story_content')); ?>
					<?php else: ?>
						<p>Founded in 2005, Bird Dog Delivery & Moving started with a simple mission: provide honest, reliable moving services that treat customers like family.</p>
						<p>What began as a one-truck operation has grown into Oklahoma City's most trusted moving company, but we've never forgotten our roots. Every move still gets the same personal attention and care we gave our very first customer.</p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>

	<!-- Values/Why Choose Us -->
	<section class="about-values">
		<div class="l-container">
			<h2 class="about-values__title"><?php echo get_field('values_title') ?: 'Why Choose Bird Dog Moving'; ?></h2>
			<div class="about-values__grid">

				<div class="about-value-card">
					<div class="about-value-card__icon">
						<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" fill="var(--color-accent)"/>
						</svg>
					</div>
					<h3>Licensed & Insured</h3>
					<p>Full licensing and comprehensive insurance for your complete peace of mind on every move.</p>
				</div>

				<div class="about-value-card">
					<div class="about-value-card__icon">
						<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" fill="var(--color-accent)"/>
						</svg>
					</div>
					<h3>Transparent Pricing</h3>
					<p>Upfront quotes with no hidden fees. You'll know exactly what you're paying before we start.</p>
				</div>

				<div class="about-value-card">
					<div class="about-value-card__icon">
						<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z" fill="var(--color-accent)"/>
						</svg>
					</div>
					<h3>Experienced Crews</h3>
					<p>Background-checked, trained professionals who know how to handle your belongings with care.</p>
				</div>

				<div class="about-value-card">
					<div class="about-value-card__icon">
						<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z" fill="var(--color-accent)"/>
						</svg>
					</div>
					<h3>Same-Day Service</h3>
					<p>Need to move today? We often have crews available for same-day and emergency moves.</p>
				</div>

				<div class="about-value-card">
					<div class="about-value-card__icon">
						<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M9 11H7v2h2v-2zm4 0h-2v2h2v-2zm4 0h-2v2h2v-2zm2-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z" fill="var(--color-accent)"/>
						</svg>
					</div>
					<h3>Flexible Scheduling</h3>
					<p>Weekend and after-hours moves available to fit your schedule and minimize disruption.</p>
				</div>

				<div class="about-value-card">
					<div class="about-value-card__icon">
						<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z" fill="var(--color-accent)"/>
						</svg>
					</div>
					<h3>Protection Guaranteed</h3>
					<p>Floor protection, wall guards, and furniture padding on every move—no exceptions.</p>
				</div>

			</div>
		</div>
	</section>

	<!-- Team Section (Optional - Uses ACF Repeater) -->
	<?php if (have_rows('team_members')): ?>
	<section class="about-team">
		<div class="l-container">
			<h2 class="about-team__title">Meet the Team</h2>
			<div class="about-team__grid">
				<?php while (have_rows('team_members')): the_row(); ?>
				<div class="about-team-card">
					<?php if (get_sub_field('photo')): ?>
						<?php echo wp_get_attachment_image(get_sub_field('photo'), 'medium'); ?>
					<?php endif; ?>
					<h3><?php the_sub_field('name'); ?></h3>
					<p class="about-team-card__title"><?php the_sub_field('title'); ?></p>
					<?php if (get_sub_field('bio')): ?>
						<p><?php the_sub_field('bio'); ?></p>
					<?php endif; ?>
				</div>
				<?php endwhile; ?>
			</div>
		</div>
	</section>
	<?php endif; ?>

	<!-- Certifications/Trust Signals -->
	<section class="about-trust">
		<div class="l-container">
			<div class="about-trust__content">
				<h2>Licensed, Insured & Ready to Serve</h2>
				<div class="about-trust__badges">
					<div class="about-trust__badge">
						<strong>Licensed</strong>
						<span>Oklahoma Corporation Commission</span>
					</div>
					<div class="about-trust__badge">
						<strong>Insured</strong>
						<span>Full liability & workers comp</span>
					</div>
					<div class="about-trust__badge">
						<strong>BBB Accredited</strong>
						<span>A+ Rating</span>
					</div>
					<div class="about-trust__badge">
						<strong>Background Checked</strong>
						<span>All crew members</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- WordPress Editor Content (SEO Content Below Fold) -->
	<?php if (have_posts()): while (have_posts()): the_post(); ?>
		<?php if (get_the_content()): ?>
		<section class="about-content">
			<div class="l-container">
				<div class="about-content__prose">
					<?php the_content(); ?>
				</div>
			</div>
		</section>
		<?php endif; ?>
	<?php endwhile; endif; ?>

	<!-- CTA Section -->
	<section class="about-cta">
		<div class="l-container">
			<div class="about-cta__content">
				<h2>Ready to Experience the Bird Dog Difference?</h2>
				<p>Get your free estimate today and see why Oklahoma City trusts us with their moves.</p>
				<div class="about-cta__actions">
					<a href="/contact/#estimate" class="c-button c-button--primary">Get Free Estimate</a>
					<a href="tel:<?php echo esc_attr(get_option('birddog_phone', '(405) 535-4554')); ?>" class="c-button c-button--ghost-dark">
						Call <?php echo esc_html(get_option('birddog_phone', '(405) 535-4554')); ?>
					</a>
				</div>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>
