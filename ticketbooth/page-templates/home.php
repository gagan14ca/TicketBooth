<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<?php $takeover=true;?>
<div class="wrapper <?php if ($takeover) echo 'takeover' ?>" id="full-width-page-wrapper" style="display:flex;">
    <?php //if($takeover) echo'<a href="#" id="takeoverL">&nbsp;</a>' ?>
	<div class="takeover-left">
			<?php
				dynamic_sidebar('Takeover left');
			?>
	</div>
    <div class="<?php echo esc_attr( $container ); ?>" id="content" style="max-width: 1300px;">

        <?php echo do_shortcode('[slider]'); ?>

        <!-- Main Events -->
        <div class="row">
            <div class="col-sm-12"><h3>Trending Events</h3></div>
            <div class="col-md-12 col-lg-8 content-area" id="primary">

                <main class="home-main" id="main" role="main">
                    <?php echo do_shortcode('[trending_events]'); ?>
                </main><!-- #main -->

            </div><!-- #primary -->

            <div class="d-sm-none d-lg-flex col-lg-4 content-area" id="primary">

                <aside class="home-sidebar" id="main" role="aside">
                    <div class="row">
                        <div class="col-sm-6 col-md-12 mb-3 content-area" id="home-subscribe-form">
                            <div class="card">
                                <div class="card-header"><h4>Subscribe For Updates</h4></div>
                                <div class="card-body">
									<?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=true tabindex=49]');?>
	                                <?php //if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home Page Sidebar #1") ) : ?>
	                                <?php //endif;?>
                                </div>
                            </div>


                        </div>
                        <div class="col-sm-6 col-md-12 mb-3 content-area" id="waitlist_events">
                            <div class="card">
                                <div class="card-header"><h4>Waitlist Events</h4></div>
				                <?php echo do_shortcode('[waitlist_events_widgets]');?>
                            </div>
                        </div>
                    </div>
                </aside><!-- #main -->

            </div><!-- #primary -->

        </div><!-- .row end -->
        <div class="event-listings">
            <div><h2 class="top-event-list-title">Top Events Around You</h2></div>
			<?php echo do_shortcode('[top_events]');?>
        </div>
		
	    <?php //if($takeovertakeover) echo'<a href="#" id="takeoverR">&nbsp;</a>' ?>

    </div><!-- Container end -->
	<div class="takeover-right">
			<?php
				dynamic_sidebar('Takeover Right');
			?>
	</div>
</div><!-- Wrapper end -->

<?php function waitlist_item(){
	return '               <div class="waitlist-item">
                            <div class="waitlist-image"><img class="profile-image" src="https://sc-events.s3.amazonaws.com/4682601/main_132_132.jpg"></div>
                            <div class="waitlist-info">
                                <p>10/20/2018</p>
                                <h6>2018 Kids Wonderland</h6>
</div>    
                            </div>';
}?>

<?php function hot_card(){
    return '                <div class="card">
                                <div class="card-header" style="background:url(\'https://sc-schemes.s3.amazonaws.com/22263/header_image.png\')">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-text">Real Bodies Exhibition</h5>
                                </div>
                                <div class="card-footer cta">
                                    <a href="#">Get Tickets</a>
                                </div>
                            </div>';
      }?>

<?php function new_card(){
	return '                            <a href="#"><div class="card">
                                <div class="card-header" style="background:url(\'https://sc-schemes.s3.amazonaws.com/22263/header_image.png\')">
                                    <img class="profile-image" src="https://sc-events.s3.amazonaws.com/4682601/main_132_132.jpg">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-text">Real Bodies Exhibition</h5>
                                </div>
                                <div class="card-footer">
                                    <p>Newcastle Forshore</p><em>01/12/2018</em>
                                </div>
                            </div></a>';
}?>
<?php get_footer(); ?>
