<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>



<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>" style="max-width: 1100px;">
	<?php get_sidebar( 'footerfull' ); ?>
	
		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

							<!--<a href="<?php  //echo esc_url( __( 'http://wordpress.org/','understrap' ) ); ?>"><?php// printf( 
							/* translators:*/
							//esc_html__( 'Proudly powered by %s', 'understrap' ),'WordPress' ); ?></a>
								<span class="sep"> | </span>-->
					
							<?php //printf( // WPCS: XSS ok.
							/* translators:*/
								//esc_html__( 'Theme: %1$s by %2$s.', 'understrap' ), $the_theme->get( 'Name' ),  '<a href="'.//esc_url( __('http://understrap.com', 'understrap')).'">understrap.com</a>' ); ?> 
				
							<?php //printf( // WPCS: XSS ok.
							/* translators:*/
								//esc_html__( 'Version: %1$s', 'understrap' ), $the_theme->get( 'Version' ) ); ?>
								
								<div class="footer-bootom">
									<div class="footer-left col-md-6">
										<?php
											dynamic_sidebar('Footer left bottom');
										?>
									</div>
									<div class="footer-right col-md-6">
										<?php
											dynamic_sidebar('Footer right bottom');
										?>
									</div>
								</div>
								
					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>


<script src="<?php echo get_template_directory_uri();?>/js/script.js"></script>

<script type='text/javascript'>
(function (d, t) {
  var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
  bh.type = 'text/javascript';
  bh.src = 'https://www.bugherd.com/sidebarv2.js?apikey=4aryvucu1ev8phncls27vw';
  s.parentNode.insertBefore(bh, s);
  })(document, 'script');
</script>

</body>
</html>

