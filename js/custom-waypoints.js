$(document).ready(function() {

	/**
	 * Waypoints Animation
	 *
	 * The Waypoints functionality has been limited to screen widths
	 * of > 992px (md breakpoint) for better UX on mobile.
	 *
	 * Each section has it's own function, so it can be customized. See offset
	 * and the addClass
	 *
	 * Animate.css classes have been added in the addClass function.
	 *
	 * Offsets are added relative to the top of the screen. This is where
	 * the section will scroll into view.
	 *
	**/
	if($(window).width() > 991){

		// hide all waypoints sections onload by default by applying a class
		$(".waypoint, footer .col-xs-12").addClass("opacity-0");

		// section 1
		$("#waypoint-1").waypoint(function() {
			// remove opacity-0 class, add Animate.css class to animate into view
			$("#waypoint-1").removeClass("opacity-0").addClass("fadeInLeft");
		}, {offset: "25%"});

		// section 2
		$("#waypoint-2").waypoint(function() {
			// remove opacity-0 class, add Animate.css class to animate into view
			$("#waypoint-2").removeClass("opacity-0").addClass("fadeInRight");
		}, {offset: "25%"});

		// section 3
		$("#waypoint-3").waypoint(function() {
			// remove opacity-0 class, add Animate.css class to animate into view
			$("#waypoint-3").removeClass("opacity-0").addClass("fadeInLeft");
		}, {offset: "50%"});

		// footer
		$("footer .col-xs-12").waypoint(function() {
			// remove opacity-0 class, add Animate.css class to animate into view
			$("footer .col-xs-12").removeClass("opacity-0").addClass("fadeInUp");
		}, {offset: "100%"});


	}// end if condition
});// end document.ready()