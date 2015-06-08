$(document).ready(function(){

	$(".pager-lnk").click(function(){
		/*grabs the data-target attribute of the clicked link*/
		var divId = $(this).attr("data-target");

		/*hides all other pages on click*/
		$(".page").hide();

		/*shows the page with the data-target as id*/
		$("#" + divId).show();

	});

});