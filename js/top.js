$(document).ready(function(e) {
	
	var currentWindow = $(window).width();
	
	if( currentWindow > 640 ) {
	
		var currentSlide = $("#index_slider").slick({
			dots: false,
		  slidesToShow: 1,
		  centerMode: true,
		  variableWidth: true,
		  infinite: true,
		  autoplay: true,
		  autoplaySpeed: 4000,
		  slidesToScroll: 1,
		  arrows: false,
		  asNavFor: '.slider-nav-thumbnails',
		});
		
		$('.btn_slider_next').click(function(){
			currentSlide.slick('slickNext');
		});
		
		$('.btn_slider_prev').click(function(){
	
			currentSlide.slick('slickPrev');
		});
		
		$('.slider-nav-thumbnails').slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			asNavFor: '#index_slider',
			dots: true,
			focusOnSelect: true,
			variableWidth: true,
			centerMode: true,
			centerPadding: '0px'
		 }); 
	} else {
	  	var currentSlide = $("#index_sp_slider").slick({
		  dots: false,
		  slidesToShow: 1,
		  variableWidth: false,
		  infinite: true,
		  autoplay: true,
		  autoplaySpeed: 4000,
		  slidesToScroll: 1,
		  arrows: false,
		  responsive: [
				{
				  breakpoint: 320,
				  settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				  }
				}
				// You can unslick at a given breakpoint now by adding:
				// settings: "unslick"
				// instead of a settings object
			  ]
		});
	}
	 
	 $("#index_box03_list").slick({
		dots: false,
	  slidesToShow: 5,
	  centerMode: true,
	  centerPadding: '50px',
	  variableWidth: true,
	  infinite: true,
	  autoplay: true,
      autoplaySpeed: 3000,
	  slidesToScroll: 1,
	  arrows: true,
	  responsive: [
				{
				  breakpoint: 320,
				  settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				  }
				}
				// You can unslick at a given breakpoint now by adding:
				// settings: "unslick"
				// instead of a settings object
		]
	});
});