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
      nav: true,
      smartSpeed: 500,
    });

    $(".testimonial").owlCarousel({
      items: 3,
      autoplay: true,
      loop: true,
      dots: true,
      smartSpeed: 500,
      margin: 30,
    });

    $(".gallery-images").magnificPopup({
      type: "image",
      gallery: {
        enabled: true,
      },
    });

    $(".video-play-btn").magnificPopup({
      type: "iframe",
    });

    $(".counter").counterUp();
  });

  /* Sticky Header
		============================*/
  $(window).on("scroll", function () {
    if ($(this).scrollTop() > 20) {
      $(".header-fixed").addClass("sticky");
    } else {
      $(".header-fixed").removeClass("sticky");
    }
  });
})(jQuery);
