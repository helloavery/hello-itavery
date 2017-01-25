
$(window).load(function() {
  "use strict";
	$('.flexslider').flexslider({
		animation: "fade",
		start: function(slider) {
			$('.np-controls a.next').click(function(event){
				event.preventDefault();
				slider.flexAnimate(slider.getTarget("next"));
			});
			$('.np-controls a.previous').click(function(event){
				event.preventDefault();
				slider.flexAnimate(slider.getTarget("previous"));
			});
		}
	});
});




/* Skills */
jQuery(document).ready(function($) {
	"use strict";
	$('.skills-info').appear(function() {
	$('.skill1').css('width', '35%');
	$('.skill2').css('width', '40%');
	$('.skill3').css('width', '40%');
        $('.skill4').css('width', '70%');
	$('.skill5').css('width', '50%');
	$('.skill6').css('width', '80%');
        $('.skill7').css('width', '60%');
	$('.skill8').css('width', '60%');
	$('.skill9').css('width', '65%');
	$('.skill10').css('width', '65%');
	$('.skill11').css('width', '90%');
        $('.skill12').css('width', '75%');
        $('.skill13').css('width', '75%');
        $('.skill14').css('width', '85%');
	},{accX: 0, accY: -150});
});



