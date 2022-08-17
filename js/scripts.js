$(function(){

	console.log("It's working");
	(function( $ ) {

	/**
	 * initMap
	 *
	 * Renders a Google Map onto the selected jQuery element
	 *
	 * @date    22/10/19
	 * @since   5.8.6
	 *
	 * @param   jQuery $el The jQuery element.
	 * @return  object The map instance.
	 */
	function initMap( $el ) {

	    // Find marker elements within map.
	    var $markers = $el.find('.marker');

	    // Create gerenic map.
	    var mapArgs = {
	        zoom        : $el.data('zoom') || 16,
	        mapTypeId   : google.maps.MapTypeId.ROADMAP
	    };
	    var map = new google.maps.Map( $el[0], mapArgs );

	    // Add markers.
	    map.markers = [];
	    $markers.each(function(){
	        initMarker( $(this), map );
	    });

	    // Center map based on markers.
	    centerMap( map );

	    // Return map instance.
	    return map;
	}

	/**
	 * initMarker
	 *
	 * Creates a marker for the given jQuery element and map.
	 *
	 * @date    22/10/19
	 * @since   5.8.6
	 *
	 * @param   jQuery $el The jQuery element.
	 * @param   object The map instance.
	 * @return  object The marker instance.
	 */
	function initMarker( $marker, map ) {

	    // Get position from marker.
	    var lat = $marker.data('lat');
	    var lng = $marker.data('lng');
	    var latLng = {
	        lat: parseFloat( lat ),
	        lng: parseFloat( lng )
	    };

	    // Create marker instance.
	    var marker = new google.maps.Marker({
	        position : latLng,
	        map: map
	    });

	    // Append to reference for later use.
	    map.markers.push( marker );

	    // If marker contains HTML, add it to an infoWindow.
	    if( $marker.html() ){

	        // Create info window.
	        var infowindow = new google.maps.InfoWindow({
	            content: $marker.html()
	        });

	        // Show info window when marker is clicked.
	        google.maps.event.addListener(marker, 'click', function() {
	            infowindow.open( map, marker );
	        });
	    }
	}

	/**
	 * centerMap
	 *
	 * Centers the map showing all markers in view.
	 *
	 * @date    22/10/19
	 * @since   5.8.6
	 *
	 * @param   object The map instance.
	 * @return  void
	 */
	function centerMap( map ) {

	    // Create map boundaries from all map markers.
	    var bounds = new google.maps.LatLngBounds();
	    map.markers.forEach(function( marker ){
	        bounds.extend({
	            lat: marker.position.lat(),
	            lng: marker.position.lng()
	        });
	    });

	    // Case: Single marker.
	    if( map.markers.length == 1 ){
	        map.setCenter( bounds.getCenter() );

	    // Case: Multiple markers.
	    } else{
	        map.fitBounds( bounds );
	    }
	}

	// Render maps on page load.
	$(document).ready(function(){
	    $('.acf-map').each(function(){
	        var map = initMap( $(this) );
	    });
	});

	})(jQuery);

	

	//languages options

	$('.aboutLangEach:nth-child(1)').addClass('visible');
	$('.languageLinkEach:nth-child(2)').addClass('higlightedLink');
	
	$('.lds-roller').hide();


	 // $(".languageLinkEach").click(function() {

	 //    if ($('.aboutLangEach').hasClass('visible')) {
	 //      $('.aboutLangEach').removeClass('visible');

	 //    } 
	 //    var id = $(this).index();
	 //    console.log(id);
	 //    $('aboutLangEach:nth-child(id)').addClass('visible');
	 //    $('.pageMain').eq(('.aboutLangEach').index(id)).addClass('visible');
	 //    // $(this).next('.languageChoiceContent').addClass('visible');

	 //  });

	 $( '.languageLinkEach' ).on( 'click', function() {
	 	   if ($('.languageLinkEach').hasClass('higlightedLink')) {
	 	     $('.languageLinkEach').removeClass('higlightedLink');

	 	   } 
	 	  $(this).addClass('higlightedLink');
	 	 var id = ($(this).index() - 1);
	    $('.aboutLangEach').removeClass( 'visible' ).eq( id ).addClass( 'visible' );
	 //    // $('.aboutLangEach').eq( $(this).index() ).addClass( 'visible' );
	 //     // $(".aboutLangEach").removeClass("visible"); $(e.href).addClass("visible", true);
	 });

	
	 $(function(){
	 //the shrinkHeader variable is where you tell the scroll effect to start.
	 var shrinkHeader = 50;
	 var x = $(window).width();
	  $(window).scroll(function() {
	    var scroll = getCurrentScroll();
	      if ( (scroll >= shrinkHeader) && (x >= 700) ) {
	           $('.headeContainer').addClass('smaller');
	        }
	        else {
	            $('.headeContainer').removeClass('smaller');
	        }
	  });
	function getCurrentScroll() {
	    return window.pageYOffset || document.documentElement.scrollTop;
	    }
	});



	$(window).scroll(function() {
	  var scrollBottom = $(document).height() - $(window).height() - $(window).scrollTop();
	  var x = $(window).width();
	  if ((scrollBottom > 350) && (x > 700)) {
	  	$(".pageSideContent").fadeIn(500);
	  	$(".pagesideContent").fadeIn(500);
	  	

	  } else if ((scrollBottom < 350) && (x > 700)) {
	    $(".pageSideContent").fadeOut(500);
	     $(".pagesideContent").fadeOut(500);



	  }
	});
	 //smoothscroll
	 	$("a").on('click', function(event) {

	 	  // Make sure this.hash has a value before overriding default behavior
	 	  if (this.hash !== "") {
	 	    // Prevent default anchor click behavior
	 	    event.preventDefault();

	 	    // Store hash
	 	    var hash = this.hash;

	 	    // Using jQuery's animate() method to add smooth page scroll
	 	    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
	 	    $('html, body').animate({

	 	      scrollTop: $(hash).offset().top
	 	    }, 800, function(){

	 	      // Add hash (#) to URL when done scrolling (default click behavior)
	 	      window.location.hash = hash;
	 	    });
	 	  } // End if
	 	});


});