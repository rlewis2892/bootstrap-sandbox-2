$(document).ready(function(){

	/*hides all pages except first one*/
	$(".page").hide().first().show();

	/*this controls the numbered pager buttons*/
	$(".pager-lnk").click(function(){

		/*grabs the data-target attribute of the clicked link*/
		var divId = $(this).attr("data-target");

		/*hides all other pages on click*/
		$(".page").hide();

		/*shows the page with the data-target as id*/
		$("#" + divId).show();

	});

	/*controls the previous button*/
	$("#prev-lnk").click(function(){
		if ($(".pages .page:visible").prev().length != 0)
			$(".pages .page:visible").prev().show().next().hide();
		else {
			$(".pages .page:visible").hide();
			$(".pages .page:last").show();
		}
		return false;
	});

	/*controls the next button*/
	$("#nxt-lnk").click(function(){
		if ($(".pages .page:visible").next().length != 0)
			$(".pages .page:visible").next().show().prev().hide();
		else {
			$(".pages .page:visible").hide();
			$(".pages .page:first").show();
		}
		return false;
	});

});