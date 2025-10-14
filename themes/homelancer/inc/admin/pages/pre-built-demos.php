<?php
$page_images = array(
	trailingslashit(get_template_directory_uri()) . 'inc/admin/images/demo-collection.png',
);
?>
<div class="homelancer-page__demos">
	<?php
	$has_required_plugins = true;

	if (! homelancer_is_plugin_installed('cozy-essential-addons/cozy-essential-addons.php') || ! homelancer_is_plugin_installed('advanced-import/advanced-import.php')) {
		$has_required_plugins = false;
	} elseif (! homelancer_is_plugin_activated('cozy-essential-addons/cozy-essential-addons.php') || ! homelancer_is_plugin_activated('advanced-import/advanced-import.php')) {
		$has_required_plugins = false;
	}

	$classes   = array();
	$classes[] = 'demo-importer__redirection';
	$classes[] = 'top';
	$classes[] = ! $has_required_plugins ? 'plugins-unavailable' : '';
	?>
	<div>
		<h3><?php esc_html_e('Launch your website faster with pre-built starter templates for home services businesss, ready for effortless one-click import.', 'homelancer'); ?></h3>
		<div class="demo-importer__redirection-wrap">
			<a href="#" class="<?php echo esc_attr(implode(' ', array_map('sanitize_html_class', array_filter($classes)))); ?>"><?php esc_html_e('Browse Demos & Import Instantly', 'homelancer'); ?></a>
		</div>
	</div>

	<figure class="demo-importer__img">
		<img src="<?php echo esc_url($page_images[0]); ?>" />
	</figure>
</div>
<?php
