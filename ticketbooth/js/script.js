jQuery(document).ready(function() {
  	jQuery("#searchbtn").click( function(e) {
		if(jQuery('#keyword1').val() != '') {
		  e.preventDefault();
		  jQuery("#event_search_list").html(''); 
		  jQuery("#loading").show();
		  var keyword = jQuery("#keyword1").val();
		  var locate = jQuery("#location1").val();
		  jQuery('#keyword_title').html('Events matching <b>"'+keyword+'"</b>');
		  jQuery.ajax({
			type : "get",			
			dataType:"jsonp",
			crossDomain:true,			
			 url : "https://admin.ticketbooth.com.au/rest.api/Event/search?partner[]=40&partner[]=185&by=popularity&keyword="+keyword+"&location="+locate,			
			 success: function(response) {
				var data = response;
				if( data == ""){
				jQuery("#loading").fadeOut(1000);
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
					
					/* var img = data[i]['image'];		
					var title = data[i]['event'];	
					var event_start = data[i]['event_start'];	
					var listing_url = data[i]['listing_url'];	
					var url = data[i]['venue']; */
					var venueHtml = '';
					get_venue(data[i]);
					
					/* html+='<li><div class="events-info-sect"><div class="row"><div class="col-md-3 img-div"><div class="inner-evnt-img" style="background:url('+img+'); background-color:#000;"></div></div><div class="col-md-6"><div class="small-img-icon"><img src="'+img+'"/></div><div class="title_sect">'+title+'</div><div class="descrip"><p id="event_'+i+'">'+venueHtml+'</p></div><div class="date"><span class="event-date">'+event_start+'</span></div></div><div class="col-md-3"><a href="'+listing_url+'" target="_blank">GET TICKETS</a></div></div></div></li>'; */
				}
			
				/* html+='';
				jQuery("#events-data").html(html); */
				}
				
		  }
			 
		  }); 
		  	}
	   });

});




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
			jQuery("#loading").fadeOut(1000);
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

/*
document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'interactive') {
       document.getElementById('waitlist').style.display="none";
  } else if (state == 'complete') {
      setTimeout(function(){
         document.getElementById('interactive');
         document.getElementById('load').style.display="none";
         document.getElementById('waitlist').style.display="block";
      },1000);
  }
} 
*/

jQuery(window).scroll(function(){
    if (jQuery(window).scrollTop() >= 300) {
        jQuery('nav').addClass('fixed-header');
    }
    else {
        jQuery('nav').removeClass('fixed-header');
    }
});


if(jQuery(window).width() < 767)
{
	jQuery('.events-scroll').removeClass('row');
}