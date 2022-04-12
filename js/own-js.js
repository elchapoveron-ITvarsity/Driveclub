jQuery(document).ready(function($){


	$('.header').height($(window).height());

	$("#new-button").click(function() {
		$("#musicinfo").show();
		$("#musicinfo").toggleClass('clicked');
	});

	jQuery("p.exit").click(function() {
		jQuery("#musicinfo").hide();
		
	});
    
});