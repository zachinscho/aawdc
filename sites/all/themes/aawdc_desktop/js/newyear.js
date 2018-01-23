(function($) {

 $(document).ready(function () {
	
	//WAYPOINTS
	$('.imageHero').waypoint(function(){
	  $('.ny-subnav').toggleClass("sticky"); 
	}, {
	  offset: '-450'
	})
	
	$('.sign').waypoint(function(){
	  $(this[0,'element']).toggleClass("flyin"); 
	}, {
	  offset: '95%'
	})
	
	//SLIDERS
	$('#stories').slick({
	  infinite: true,
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  dots: true,
	  arrows: false,
	  autoplay: true,
		autoplaySpeed: 9000,
		responsive: [
	    {
	      breakpoint: 768,
	      settings: {
	        arrows: false,
	      }
	    }
	  ]
	});
	
	$('#services-slides').slick({
	  infinite: true,
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  dots: true,
	  arrows: false,
	  autoplay: true,
		autoplaySpeed: 9000,
		responsive: [
	    {
	      breakpoint: 768,
	      settings: {
	        arrows: false,
	      }
	    }
	  ]
	});
	
		
	});

}(jQuery));