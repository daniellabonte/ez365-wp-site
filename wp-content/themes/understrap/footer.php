<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>
<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>
<div class="p-5 bg-primary">
	<div class="container">

	<!-- start socialmediaicons -->
		<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'socialmediaicons',
						'container_class' => 'row justify-content-center',
						'menu_class' => 'list-inline text-muted d-flex justify-content-center footer-links',
					)
				);
				?>
				<!-- end socialmediaicons -->
		<div class="row m-1">
			<div class="col-md-12">
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'footer',
						'menu_class' => 'list-inline text-muted d-flex justify-content-center footer-links',
					)
				);
				?>
			</div>
		</div>
		<div class="row mt-1">
			<div class="col-md-12 text-center">
				<p class="text-muted">&copy; Copyright EZ365 Limited 2019. All rights reserved.</p>
			</div>
		</div>
	</div>
</div>
</div><!-- #page we need this extra closing tag here -->
<?php wp_footer(); ?>
</body>

</html>