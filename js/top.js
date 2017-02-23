$(document).ready(function(e) {
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
});