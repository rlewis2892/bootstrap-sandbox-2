$(document).ready(function(){


	// if the scroll position is greater than 100px - swap nav classes
	$(window).on('scroll', function() {
		if($(window).scrollTop() > 120) {
			$('.navbar').addClass("navbar-fixed-top scrolled");
			$('main').addClass("nav-padding-top");
		} else {
			$('.navbar').removeClass("navbar-fixed-top scrolled");
			$('main').removeClass("nav-padding-top");
		}
	});

});