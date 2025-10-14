<?php
/**
 * Template Name: Contact
 * Description: Contact page with multi-contact options, quick estimate, and SEO content
 *
 * @package Bird_Dog_Moving
 */

get_header();
?>

<main class="contact-page" id="main-content">

	<!-- Backward compatibility anchor -->
	<div id="quote" style="position:relative;top:-80px;height:0;overflow:hidden" aria-hidden="true"></div>

	<!-- Hero Section - Multi-Contact Options -->
	<section class="contact-hero">
		<div class="l-container">
			<div class="contact-hero__content">
				<h1 class="contact-hero__title">Get Your Free Moving Estimate</h1>
				<p class="contact-hero__lede">
					Fast response times • Same-day crews available • Licensed & insured
				</p>
			</div>

			<!-- Contact Options Grid -->
			<div class="contact-options">
				<div class="contact-option contact-option--primary">
					<div class="contact-option__icon">
						<svg width="32" height="32" viewBox="0 0 24 24" fill="none">
							<path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" fill="currentColor"/>
						</svg>
					</div>
					<div class="contact-option__content">
						<h3>Call Now</h3>
						<p class="contact-option__detail">
							<a href="tel:<?php echo esc_attr(get_option('birddog_phone', '(405) 535-4554')); ?>" class="contact-option__link">
								<?php echo esc_html(get_option('birddog_phone', '(405) 535-4554')); ?>
							</a>
						</p>
						<p class="contact-option__note">Available Mon-Sat • 8am-6pm</p>
					</div>
				</div>

				<div class="contact-option">
					<div class="contact-option__icon">
						<svg width="32" height="32" viewBox="0 0 24 24" fill="none">
							<path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" fill="currentColor"/>
						</svg>
					</div>
					<div class="contact-option__content">
						<h3>Email Us</h3>
						<p class="contact-option__detail">
							<a href="mailto:<?php echo esc_attr(get_option('birddog_email', 'info@birddogmoving.com')); ?>" class="contact-option__link">
								<?php echo esc_html(get_option('birddog_email', 'info@birddogmoving.com')); ?>
							</a>
						</p>
						<p class="contact-option__note">We respond within 2 hours</p>
					</div>
				</div>

				<div class="contact-option">
					<div class="contact-option__icon">
						<svg width="32" height="32" viewBox="0 0 24 24" fill="none">
							<path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 9h12v2H6V9zm8 5H6v-2h8v2zm4-6H6V6h12v2z" fill="currentColor"/>
						</svg>
					</div>
					<div class="contact-option__content">
						<h3>Text Us</h3>
						<p class="contact-option__detail">
							<a href="sms:<?php echo esc_attr(str_replace(['(', ')', ' ', '-'], '', get_option('birddog_phone', '4055354554'))); ?>" class="contact-option__link">
								<?php echo esc_html(get_option('birddog_phone', '(405) 535-4554')); ?>
							</a>
						</p>
						<p class="contact-option__note">Fastest way to reach us</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Quick Estimate Form -->
	<section id="estimate" class="contact-form">
		<div class="l-container">
			<div class="contact-form__grid">

				<!-- Form Column -->
				<div class="contact-form__main">
					<h2>Request Your Free Estimate</h2>
					<p class="contact-form__subtitle">Fill out the form below and we'll get back to you within 2 hours with a detailed quote.</p>

					<?php echo do_shortcode('[moving_estimator mode="booking" layout="default"]'); ?>

					<!-- Fallback if calculator not available -->
					<noscript>
						<p style="margin-top: var(--space-lg);">
							Can't see the form? <a href="tel:<?php echo esc_attr(get_option('birddog_phone', '(405) 535-4554')); ?>">Call us directly</a> for a quote.
						</p>
					</noscript>
				</div>

				<!-- Sidebar Column -->
				<aside class="contact-form__sidebar">
					<div class="contact-sidebar-card">
						<h3>Why Get an Estimate?</h3>
						<ul class="contact-sidebar-list">
							<li>Know your costs upfront</li>
							<li>No obligation or pressure</li>
							<li>Compare options (full service vs. labor-only)</li>
							<li>Plan your budget accurately</li>
							<li>Lock in availability</li>
						</ul>
					</div>

					<div class="contact-sidebar-card contact-sidebar-card--highlight">
						<h3>Need to Move Today?</h3>
						<p>We often have same-day crews available for emergency moves.</p>
						<a href="tel:<?php echo esc_attr(get_option('birddog_phone', '(405) 535-4554')); ?>" class="c-button c-button--primary" style="width: 100%; justify-content: center; margin-top: var(--space-md);">
							Call for Same-Day Service
						</a>
					</div>

					<div class="contact-sidebar-card">
						<h3>Response Time Guarantee</h3>
						<p><strong>Phone:</strong> Immediate (during business hours)</p>
						<p><strong>Email/Form:</strong> Within 2 hours</p>
						<p><strong>After Hours:</strong> Next business day by 10am</p>
					</div>
				</aside>

			</div>
		</div>
	</section>

	<!-- Location & Hours -->
	<section class="contact-location">
		<div class="l-container">
			<div class="contact-location__grid">

				<!-- Map Column -->
				<div class="contact-location__map">
					<?php if (get_field('map_embed')): ?>
						<?php the_field('map_embed'); ?>
					<?php else: ?>
						<div class="contact-map-placeholder">
							<svg width="64" height="64" viewBox="0 0 24 24" fill="none">
								<path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" fill="var(--color-accent-2)"/>
							</svg>
							<p>Map embed goes here</p>
						</div>
					<?php endif; ?>
				</div>

				<!-- Info Column -->
				<div class="contact-location__info">
					<h2>Visit Our Office</h2>

					<div class="contact-info-block">
						<h3>Address</h3>
						<p>
							<?php echo get_field('office_address') ?: 'Bird Dog Delivery & Moving<br>123 Main Street<br>Oklahoma City, OK 73101'; ?>
						</p>
					</div>

					<div class="contact-info-block">
						<h3>Business Hours</h3>
						<p>
							<strong>Monday - Friday:</strong> 8:00 AM - 6:00 PM<br>
							<strong>Saturday:</strong> 9:00 AM - 4:00 PM<br>
							<strong>Sunday:</strong> Closed (Emergency calls returned Monday)
						</p>
					</div>

					<div class="contact-info-block">
						<h3>Service Area</h3>
						<p>Oklahoma City metro area including Edmond, Norman, Moore, Yukon, Midwest City, and surrounding communities within 50 miles.</p>
					</div>

					<div class="contact-info-block">
						<h3>After-Hours Emergencies</h3>
						<p>For urgent same-day moves, call or text us. We'll do our best to accommodate rush requests.</p>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- FAQ Section -->
	<section class="contact-faq">
		<div class="l-container">
			<h2 class="contact-faq__title">Frequently Asked Questions</h2>
			<div class="contact-faq__grid">

				<details class="contact-faq__item">
					<summary>How quickly can I get an estimate?</summary>
					<div class="contact-faq__answer">
						<p>Most estimates are provided within 2 hours during business hours. For simple moves, you can get an instant estimate using our calculator above. Call us for same-day quotes.</p>
					</div>
				</details>

				<details class="contact-faq__item">
					<summary>Do you offer same-day moving services?</summary>
					<div class="contact-faq__answer">
						<p>Yes! We often have crews available for same-day moves, especially on weekdays. Call us as early as possible to check availability.</p>
					</div>
				</details>

				<details class="contact-faq__item">
					<summary>What information do I need for an estimate?</summary>
					<div class="contact-faq__answer">
						<p>We need: home size (bedrooms/square footage), number of floors/stairs, parking situation, move distance, and preferred date. The more details you provide, the more accurate your estimate.</p>
					</div>
				</details>

				<details class="contact-faq__item">
					<summary>Are estimates free and binding?</summary>
					<div class="contact-faq__answer">
						<p>Yes, all estimates are 100% free with no obligation. We provide honest quotes based on the information you give us. Final costs may vary slightly if job conditions differ.</p>
					</div>
				</details>

				<details class="contact-faq__item">
					<summary>How far in advance should I book?</summary>
					<div class="contact-faq__answer">
						<p>We recommend booking 1-2 weeks in advance for best availability, especially during peak season (May-September). However, we accept bookings as late as same-day based on crew availability.</p>
					</div>
				</details>

				<details class="contact-faq__item">
					<summary>What payment methods do you accept?</summary>
					<div class="contact-faq__answer">
						<p>We accept cash, checks, all major credit cards, and Venmo/Cash App. Payment is due upon completion of your move.</p>
					</div>
				</details>

			</div>
		</div>
	</section>

	<!-- WordPress Editor Content (SEO Content Below Fold) -->
	<?php if (have_posts()): while (have_posts()): the_post(); ?>
		<?php if (get_the_content()): ?>
		<section class="contact-content">
			<div class="l-container">
				<div class="contact-content__prose">
					<?php the_content(); ?>
				</div>
			</div>
		</section>
		<?php endif; ?>
	<?php endwhile; endif; ?>

	<!-- Final CTA -->
	<section class="contact-final-cta">
		<div class="l-container">
			<div class="contact-final-cta__content">
				<h2>Still Have Questions?</h2>
				<p>Our team is here to help. Reach out by phone, email, or text and we'll respond right away.</p>
				<div class="contact-final-cta__actions">
					<a href="tel:<?php echo esc_attr(get_option('birddog_phone', '(405) 535-4554')); ?>" class="c-button c-button--primary">
						Call <?php echo esc_html(get_option('birddog_phone', '(405) 535-4554')); ?>
					</a>
					<a href="mailto:<?php echo esc_attr(get_option('birddog_email', 'info@birddogmoving.com')); ?>" class="c-button c-button--ghost-dark">
						Email Us
					</a>
				</div>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>
