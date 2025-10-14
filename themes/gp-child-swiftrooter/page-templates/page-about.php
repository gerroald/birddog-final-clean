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
				<p class="about-hero__eyebrow"><?php echo get_field('hero_eyebrow') ?: 'About Bird Dog Movers'; ?></p>
				<h1 class="about-hero__title">
					<?php echo get_field('hero_title') ?: 'The Trusted Local Moving Company in Oklahoma City'; ?>
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

	<!-- Intro Paragraph Section -->
	<section class="about-intro l-section section--surface">
		<div class="l-container">
			<div class="about-intro__prose">
				<p>Moving doesn't have to feel like running a marathon while juggling flaming kettlebells. At Bird Dog's Delivery & Moving Service, we specialize in making your Oklahoma City move as effortless as possible. Whether you're relocating your home, office, or anything in between, we've got your back (and your furniture) right here in OKC.</p>
			</div>
		</div>
	</section>

	<!-- Story Section -->
	<section class="about-story l-section">
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
					<h2><?php echo get_field('story_title') ?: 'Your Neighbors, Your Moving Team'; ?></h2>
					<p>We're not just movers—we're your neighbors! Bird Dog's Delivery & Moving Service has proudly served Oklahoma City for years, helping families settle into neighborhoods like Bricktown and businesses find their perfect spot near Midtown. We know OKC's streets like the back of our paw. From tight alleys to tricky staircases, we've seen it all.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Why Bird Dog Stands Out -->
	<section class="about-values l-section section--light">
		<div class="l-container">
			<h2 class="about-values__title">Why Bird Dog Stands Out</h2>
			<div class="about-values__grid">

				<div class="about-value-card">
					<div class="about-value-card__icon">
						<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" fill="#0D9488"/>
						</svg>
					</div>
					<h3>Expertise in Oklahoma City Moves</h3>
					<p>Our extensive experience with moves in and around Oklahoma City allows us to navigate the city efficiently, ensuring your belongings arrive safely and on time. Our familiarity with the area means we can anticipate and avoid common moving pitfalls, providing a hassle-free experience for every client.</p>
				</div>

				<div class="about-value-card">
					<div class="about-value-card__icon">
						<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z" fill="#0D9488"/>
						</svg>
					</div>
					<h3>Licensed and Insured for Your Protection</h3>
					<p>Choosing a licensed and insured moving company isn't just smart—it's essential. Our licensing serves as evidence that we adhere to state and federal regulations governing the moving industry. Our insurance provides financial protection by covering potential damages or loss of your belongings during transit.</p>
				</div>

				<div class="about-value-card">
					<div class="about-value-card__icon">
						<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z" fill="#0D9488"/>
						</svg>
					</div>
					<h3>Professional and Reliable Service</h3>
					<p>Our team brings expertise, reliability, and a sprinkle of friendly humor to make the moving process seamless. Every crew member receives hands-on training in proper packing and moving techniques. We're trained professionals adept at handling various aspects of the moving process, from packing to transportation.</p>
				</div>

				<div class="about-value-card">
					<div class="about-value-card__icon">
						<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" fill="#0D9488"/>
						</svg>
					</div>
					<h3>Personalized Moving Plans</h3>
					<p>We understand that no two moves are the same, which is why we offer customized moving plans to fit your specific requirements. Whether you need assistance with packing, loading, or even storage solutions, our team is ready to assist with a personalized approach that meets your needs.</p>
				</div>

				<div class="about-value-card">
					<div class="about-value-card__icon">
						<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z" fill="#0D9488"/>
						</svg>
					</div>
					<h3>Transparent Pricing, No Hidden Fees</h3>
					<p>At Bird Dog Moving, transparency is key. We provide clear and upfront pricing without hidden fees, so you know exactly what to expect. Quality shouldn't break the bank—we offer competitive pricing that fits your budget. This transparency extends to all aspects of our service.</p>
				</div>

				<div class="about-value-card">
					<div class="about-value-card__icon">
						<svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-7 9h-2V5h2v6zm0 4h-2v-2h2v2z" fill="#0D9488"/>
						</svg>
					</div>
					<h3>Dedicated Customer Support</h3>
					<p>Moving can be stressful, but our dedicated customer support team is here to help alleviate any concerns. We're available to answer questions, provide updates, and ensure your moving experience is as smooth as possible. Our commitment to excellent customer service is evident in our prompt responses and attention to detail.</p>
				</div>

			</div>
		</div>
	</section>

	<!-- What We Move Section -->
	<section class="about-services l-section section--surface">
		<div class="l-container">
			<h2 class="about-services__title">What We Move</h2>
			<div class="about-services__grid">

				<div class="about-service-card">
					<div class="about-service-card__icon">
						<svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" fill="#0D9488"/>
						</svg>
					</div>
					<h3>Residential Moves</h3>
					<p>Moving into your dream house in Nichols Hills or Capitol Hill? We'll ensure it stays a dream, not a nightmare.</p>
				</div>

				<div class="about-service-card">
					<div class="about-service-card__icon">
						<svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M17 11V3H7v4H3v14h8v-4h2v4h8V11h-4zM7 19H5v-2h2v2zm0-4H5v-2h2v2zm0-4H5V9h2v2zm4 4H9v-2h2v2zm0-4H9V9h2v2zm0-4H9V5h2v2zm4 8h-2v-2h2v2zm0-4h-2V9h2v2zm0-4h-2V5h2v2zm4 12h-2v-2h2v2zm0-4h-2v-2h2v2z" fill="#0D9488"/>
						</svg>
					</div>
					<h3>Apartment Moves</h3>
					<p>Navigating stairs, elevators, and tight spaces? That's our specialty.</p>
				</div>

				<div class="about-service-card">
					<div class="about-service-card__icon">
						<svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M20 6h-4V4c0-1.11-.89-2-2-2h-4c-1.11 0-2 .89-2 2v2H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-6 0h-4V4h4v2z" fill="#0D9488"/>
						</svg>
					</div>
					<h3>Office & Commercial Moves</h3>
					<p>Desks, cubicles, coffee machines—we handle it all so your team can get back to work ASAP. We provide professional packing, secure transportation, and efficient unpacking to ensure your business operations can resume quickly.</p>
				</div>

				<div class="about-service-card">
					<div class="about-service-card__icon">
						<svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" fill="#0D9488"/>
						</svg>
					</div>
					<h3>Specialty Items</h3>
					<p>Pianos, antiques, safes—if it's valuable or delicate, we've got the expertise to move it safely.</p>
				</div>

			</div>
		</div>
	</section>

	<!-- Community Commitment -->
	<section class="about-community l-section section--light">
		<div class="l-container">
			<div class="about-community__content">
				<h2>Community Commitment</h2>
				<p>We're proud to be part of the Oklahoma City community. Whether it's sponsoring local events or helping in times of need, we're here for more than just moving. Our movers are trained pros who know how to lift safely, pack securely, and move efficiently—and they genuinely care about making your move stress-free.</p>
			</div>
		</div>
	</section>

	<!-- Team Section (Optional - Uses ACF Repeater) -->
	<?php if (have_rows('team_members')): ?>
	<section class="about-team l-section section--surface">
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



	<!-- WordPress Editor Content (SEO Content Below Fold) -->
	<?php if (have_posts()): while (have_posts()): the_post(); ?>
		<?php if (get_the_content()): ?>
		<section class="about-content l-section section--surface">
			<div class="l-container">
				<div class="about-content__prose">
					<?php the_content(); ?>
				</div>
			</div>
		</section>
		<?php endif; ?>
	<?php endwhile; endif; ?>

	<!-- Our Promise CTA -->
	<section class="about-cta">
		<div class="l-container">
			<div class="about-cta__content">
				<h2>Our Promise</h2>
				<p>When you choose Bird Dog Moving, you're not just hiring movers—you're gaining partners who genuinely care about your experience. We've built a reputation for reliability and professionalism, making us a trusted choice for both residential and commercial moves in Oklahoma City.</p>
				<p>Your peace of mind and the safety of your belongings are our top priorities. That's why we're fully licensed and insured, providing an extra layer of confidence for our clients.</p>
				<p><strong>Ready to experience the Bird Dog difference? Contact us today for a free quote and discover why OKC trusts Bird Dog Delivery & Moving Service for stress-free moves, one bark at a time.</strong></p>
				<div class="about-cta__actions">
					<a href="/contact/#estimate" class="c-button c-button--primary">Get Your Free Quote</a>
					<a href="tel:<?php echo esc_attr(get_option('birddog_phone', '(405) 535-4554')); ?>" class="c-button c-button--secondary">
						Call <?php echo esc_html(get_option('birddog_phone', '(405) 535-4554')); ?>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Certifications/Trust Signals -->
	<section class="about-trust l-section">
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
</main>

<?php get_footer(); ?>