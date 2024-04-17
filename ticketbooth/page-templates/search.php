<?php
/**
 * Template Name: Search Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );

?>
<?php //$takeover=true;?>
<div class="wrapper <?php //if ($takeover) echo 'takeover' ?>" id="full-width-page-wrapper">
    <?php //if($takeover) echo'<a href="#" id="takeoverL">&nbsp;</a>' ?>
    
</div><!-- Wrapper end -->

	
	<div class="container">
      <div class='row' id='contents'>
        <div class='col-lg-8' id="event_list">
		<p id="vanue_data" style="display:none;"></p>
	
			<div id="events-data">
			<h2 id="keyword_title"></h2>
			<div  id="loading">
				<div class="ph-item">
					<div class="ph-col-3">
					  <div class="ph-picture"></div>
					</div>

					<div>
					  <div class="ph-row">
						<div class="ph-col-6 ph-top"></div>
						<div class="ph-col-6 empty"></div>
						<div class="ph-col-4"></div>
						<div class="ph-col-4 empty"></div>
						<div class="ph-col-4"></div>
						<div class="ph-col-4"></div>
						<div class="ph-col-8 empty"></div>
					  </div>
					</div>
				</div>
				<div class="ph-item">
					<div class="ph-col-3">
					  <div class="ph-picture"></div>
					</div>

					<div>
					  <div class="ph-row">
						<div class="ph-col-6 ph-top"></div>
						<div class="ph-col-6 empty"></div>
						<div class="ph-col-4"></div>
						<div class="ph-col-4 empty"></div>
						<div class="ph-col-4"></div>
						<div class="ph-col-4"></div>
						<div class="ph-col-8 empty"></div>
					  </div>
					</div>
				</div>
				<div class="ph-item">
					<div class="ph-col-3">
					  <div class="ph-picture"></div>
					</div>

					<div>
					  <div class="ph-row">
						<div class="ph-col-6 ph-top"></div>
						<div class="ph-col-6 empty"></div>
						<div class="ph-col-4"></div>
						<div class="ph-col-4 empty"></div>
						<div class="ph-col-4"></div>
						<div class="ph-col-4"></div>
						<div class="ph-col-8 empty"></div>
					  </div>
					</div>
				</div>

			</div>
			<ul id="event_search_list">
				<h3>Find events near you.</h3>
				<p>Use the events search above to find tickets to events taking place near you.</p>
			</ul> 
			<div id="loadMore">Load more results</div>
			<p id="nothing_found"></p>
			</div>
		</div>
           <div class='col-lg-4' id="sidebar"><?php dynamic_sidebar( 'left-sidebar' ); ?>
        </div>
           <div class='clear'></div>
        </div>
      </div>
	  </div>
   

<script>

	jQuery(document).on('click','#loadMore',function () {
					size_li = jQuery("#event_search_list li").size();
					x= (x+15 <= size_li) ? x+15 : size_li;
					jQuery('#event_search_list li:lt('+x+')').show();
					if(x == size_li){
						jQuery('#loadMore').hide();
					}
	}); 
	
	<?php if(isset($_GET['keyword']) && !empty($_GET['keyword']))
	{
	?>
		  jQuery("#event_search_list").html('');
		  var keyword = "<?php echo $_GET['keyword']; ?>";
		  jQuery('#keyword_title').html('Events matching <b>"'+keyword+'"</b>');
		  jQuery("#loading").show();
		  jQuery.ajax({
			type : "get",			
			dataType:"jsonp",
			crossDomain:true,			
			 url : "https://admin.ticketbooth.com.au/rest.api/Event/search?partner[]=40&partner[]=185&by=popularity&keyword="+keyword,			
			 success: function(response) {
				
				
				var data = response; 
				if( data == ""){
				jQuery("#loading").fadeOut(500);
				var	message = 'Try making your search parameters more brief, or trying searching part of the event name. If you are still unable to find an event please contact visit our <a href="https://support.ticketbooth.com.au/contact/" target="_blank">contact us</a> section of our website and one of our staff will be happy to assist.';
				jQuery('#nothing_found').show();
				jQuery('#loadMore').hide();
				jQuery("#nothing_found").html(message);
				}
				else{
				jQuery('#nothing_found').hide();
				var html = '<h2>Events matching <b>"'+keyword+'"</b></h2>';
				for(i=0;i<data.length;i++)
				{
					
					var venueHtml = '';
					get_venue(data[i]);
					
				}
				}
			 }
				}); 
	<?php
	}
	?>
	
	
	
	function get_venue(data)
{	

	var img = data['image'];		
	var title = data['event'];	
	if( data['event_start'] != null ){
		var event_start = data['event_start'];	
	}else{
		var event_start = '';
	}	
	var listing_url = data['listing_url'];	
	var url = data['venue'];
	var html;				
	jQuery.ajax({
		type : "get",
		dataType:"jsonp",
		crossDomain:true,
		aynsc:false,
		url : url,	
		success: function(venue) {							
			
			venueHtml = venue.venue_name+', '+venue.address+', '+venue.city+', '+venue.state+', '+venue.country;
			 var mydate = new Date(event_start);
			 var str = new Date(mydate).toDateString('MMM d, y');
			 if( str == 'Invalid Date'){
				 var rst = '';
			 }else{
				 var rst = str;
			 }
			html='<li><div class="events-info-sect"><div class="row"><div class="col-md-3 img-div"><div class="inner-evnt-img" style="background:url('+img+'); background-color:#ddd;"></div></div><div class="col-md-6"><div class="small-img-icon"><img src="'+img+'"/></div><div class="title_sect">'+title+'</div><div class="descrip"><p id="event_'+i+'">'+venueHtml+'</p></div><div class="date"><span class="event-date">'+rst+'</span></div></div><div class="col-md-3"><a href="'+listing_url+'" target="_blank">GET TICKETS</a></div></div></div></li>';
			jQuery("#event_search_list").append(html);
			jQuery("#loading").fadeOut(500);
			size_li = jQuery("#event_search_list li").size();
				x=15;
			jQuery('#event_search_list li:lt('+x+')').show();
			if(size_li > 15){
				jQuery('#loadMore').show();
			}else{
				jQuery('#loadMore').hide();
			}
		}
		
	}); 
	
}
</script>

<?php get_footer(); ?>


