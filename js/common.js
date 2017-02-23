$(document).ready(function(e) {

	var fBoxOuter = $('#footer_top');
		heightBox = fBoxOuter.height();
		fBoxOuter.hide();
		$(window).scroll(function() {
			var bdH = $('#wrapper').height();
			var winH = $(window).height();
			var scrlTop = $(window).scrollTop();
			if (bdH - 230 < scrlTop + winH) {
				fBoxOuter.addClass('remove_fixed');
				$("#footer_bottom").css('margin-top', 0);
			} else {
				fBoxOuter.removeClass('remove_fixed');
				$("#footer_bottom").css('margin-top', heightBox);
				
			};
	
			if ($(window).scrollTop() > 200) {
				fBoxOuter.fadeIn();
			} else {
				fBoxOuter.fadeOut();
			}
		});  
	 
});

















