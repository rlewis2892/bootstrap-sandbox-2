$(document).ready(function(){
	$(window).on('scroll', function() {

		// if the scroll position is greater than 100px
		if($(window).scrollTop() > 100) {
			//$('.navbar').css({backgroundColor: '#000', boxShadow: '0 0 50px rgba(0,0,0,0.8)'});
		} else {
			//$('.navbar').css({backgroundColor: 'rgba(0,0,0,0.50)', boxShadow: 'none'});
		}
	});
});