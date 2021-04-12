<?php
/**
 * Template Name: Page with Image Header
 * Front page template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>


<div class="py-5 text-center section-parallax section-dark" style="background-image: url(assets/app/Header-full.jpg);">
    <!-- <div class="pt-5 bg-primary section-parallax" style="background: url(assets/app/Header-full.jpg) no-repeat center center;"> -->
    <div class="container mv-5 p-5">
      <div class="row text-white">
        <div class="col-md-12 my-5 text-lg-left text-center align-self-center d-flex flex-column justify-content-center align-items-center">
          <span class="lead text-uppercase" style="">Revolutionary Digital Asset Ecosystem</span>
          <h1 class="display-2" style="font-weight: 400">Play. Trade. Learn.</h1>
        </div>
      </div>
    </div>
  </div>



<div class="wrapper" id="index-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
		<div class="row">
			<!-- Do the left sidebar check and opens the primary div -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>
			<main class="site-main" id="main">
				<?php
				if ( have_posts() ) {
					// Start the Loop.
					while ( have_posts() ) {
						the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', get_post_format() );
					}
				} else {
					get_template_part( 'loop-templates/content', 'none' );
				}
				?>
			</main><!-- #main -->
			<!-- The pagination component -->
			<?php understrap_pagination(); ?>
			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>
		</div><!-- .row -->
	</div><!-- #content -->
</div><!-- #index-wrapper -->
<?php
get_footer();
