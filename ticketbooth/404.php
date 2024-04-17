<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

?>

<div id="error-404-wrapper">
<div class="wrapper">

	<div class="container <?php //echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main">

					<section class="error-404 not-found">

						<header class="page-header">

							<h1 class="page-title">
								We can't find the page you're looking for!
								<?php //esc_html_e( 'Oops! That page can&rsquo;t be found.',
							//'understrap' ); ?>
							</h1>

						</header><!-- .page-header -->

						<div class="page-content">

							<h5>Chances are this content has moved somewhere else, never fear it'll return soon, or it<br> won't either way someone from the team will take a look for you!
							<?php //esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?',
							//'understrap' ); ?></h5>
							
							<div class="not-found-sect">
							<div class="row">
								<div class="col-md-4">
									<div class="inner-col-wrap">
										<img src="<?php echo site_url(); ?>/wp-content/uploads/2018/08/ticket.png"/>
										<p>Want to start <a href="<?php echo site_url(); ?>">selling tickets?</a></p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="inner-col-wrap">
										<img src="<?php echo site_url(); ?>/wp-content/uploads/2018/08/calender.png"/>
										<p>Are you trying to <a href="https://www.ticketbooth.com.au" target="_blank">purchase tickets or find an event?</a></p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="inner-col-wrap">
										<img src="<?php echo site_url(); ?>/wp-content/uploads/2018/08/clock.png"/>
										<p>Are you trying to <a href="https://admin.ticketbooth.com.au" target="_blank">access the admin?</a></p>
									</div>
								</div>
							</div>
							</div>
							

							<?php //get_search_form(); ?>

							<?php //the_widget( 'WP_Widget_Recent_Posts' ); ?>

							<?php //if ( understrap_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>

								<div class="widget widget_categories">

									<h2 class="widget-title"><?php// esc_html_e( 'Most Used Categories', 'understrap' ); ?></h2>

									<ul>
										<?php
										//wp_list_categories( array(
											//'orderby'    => 'count',
											//'order'      => 'DESC',
											//'show_count' => 1,
											//'title_li'   => '',
											//'number'     => 10,
										//) );
										?>
									</ul>

								</div><!-- .widget -->

							<?php //endif; ?>

							<?php

							/* translators: %1$s: smiley */
							//$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'understrap' ), convert_smilies( ':)' ) ) . '</p>';
							//the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

							//the_widget( 'WP_Widget_Tag_Cloud' );
							?>

						</div><!-- .page-content -->

					</section><!-- .error-404 -->

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->
</div>

<?php get_footer(); ?>
