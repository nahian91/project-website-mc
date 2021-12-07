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

		$(".testimonial").owlCarousel({
			items: 3,
			autoplay: true,
			loop: true,
			dots: true,
			smartSpeed: 500,
			margin: 30
		});

		$('.gallery-images').magnificPopup({
			type:'image',
			gallery:{
				enabled:true
			}
		});

	});
}(jQuery));