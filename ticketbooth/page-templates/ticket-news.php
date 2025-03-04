<?php
/**
 * Template Name: Ticket News (Right Sidebar)
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">
	<div class="container">
		<div class="row">
			
			<div class="<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>col-md-8<?php else : ?>col-md-12<?php endif; ?> content-area"
				id="primary">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'page' ); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
						?>

					<?php endwhile; // end of the loop. ?>
					
					

				</main><!-- #main -->

			</div><!-- #primary -->

			<div class='col-md-4' id="sidebar"><?php dynamic_sidebar( 'left-sidebar' ); ?>

		</div><!-- .row -->
		</div>

	</div><!-- Container end -->

</div><!-- Wrapper end -->




<?php get_footer(); ?>
