$(document).ready(function(e) {
    $("#index_slider").slick({
		dots: false,
	  slidesToShow: 3,
	  centerMode: true,
	  variableWidth: true,
	  infinite: true,
	  autoplay: true,
      autoplaySpeed: 3000,
	  slidesToScroll: 1,
	  arrows: false,
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
	  arrows: false,
	});
});