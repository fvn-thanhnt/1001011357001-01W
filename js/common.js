$(document).ready(function(e) {
	currentWindow = $(window).width();
	if(currentWindow > 640) {
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
	}
});

$(document).ready(function(){
	"use strict";
	$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
		$(this).toggleClass('open');
		$("#GlobalNav").stop(1,0).slideToggle();
		
	});
	$('#close_btn').click(function(){
		$("#nav-icon3").toggleClass('open');
		$("#GlobalNav").stop(1,0).slideToggle();	
	});
});


//gnavi_sp
$(document).ready(function(){
	"use strict";
		$('.sub_sp').click(function(){
			$(this).find(".sublink_sp").stop(1,1).slideToggle();	
			$(this).toggleClass('open');
		});
});

$(document).ready(function() {
	"use strict";
	$('body').animate({
		opacity: 1,
	}, 150);
});