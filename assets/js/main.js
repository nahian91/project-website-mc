(function ($) {
	"use strict";

	jQuery(document).ready(function ($) {
		
		/* Slider Item Slide
		============================*/
		$(".slider").owlCarousel({
			items: 1,
			autoplay: true,
			loop: true,
			dots: false,
			smartSpeed: 500
		});

		$('.gallery-images').magnificPopup({
			type:'image',
			gallery:{
				enabled:true
			}
		});

	});
}(jQuery));