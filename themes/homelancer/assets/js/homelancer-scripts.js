(function ($) {
  "use strict";
  //Loading AOS animation with css class

  //fade animation
  $(".homelancer-fade-up").attr({
    "data-aos": "fade-up",
  });
  $(".homelancer-fade-down").attr({
    "data-aos": "fade-down",
  });
  $(".homelancer-fade-left").attr({
    "data-aos": "fade-left",
  });
  $(".homelancer-fade-right").attr({
    "data-aos": "fade-right",
  });
  $(".homelancer-fade-up-right").attr({
    "data-aos": "fade-up-right",
  });
  $(".homelancer-fade-up-left").attr({
    "data-aos": "fade-up-left",
  });
  $(".homelancer-fade-down-right").attr({
    "data-aos": "fade-down-right",
  });
  $(".homelancer-fade-down-left").attr({
    "data-aos": "fade-down-left",
  });

  //slide animation
  $(".homelancer-slide-left").attr({
    "data-aos": "slide-left",
  });
  $(".homelancer-slide-right").attr({
    "data-aos": "slide-right",
  });
  $(".homelancer-slide-up").attr({
    "data-aos": "slide-up",
  });
  $(".homelancer-slide-down").attr({
    "data-aos": "slide-down",
  });

  //zoom animation
  $(".homelancer-zoom-in").attr({
    "data-aos": "zoom-in",
  });
  $(".homelancer-zoom-in-up").attr({
    "data-aos": "zoom-in-up",
  });
  $(".homelancer-zoom-in-down").attr({
    "data-aos": "zoom-in-down",
  });
  $(".homelancer-zoom-in-left").attr({
    "data-aos": "zoom-in-left",
  });
  $(".homelancer-zoom-in-right").attr({
    "data-aos": "zoom-in-right",
  });
  $(".homelancer-zoom-out").attr({
    "data-aos": "zoom-out",
  });
  $(".homelancer-zoom-out-up").attr({
    "data-aos": "zoom-out-up",
  });
  $(".homelancer-zoom-out-down").attr({
    "data-aos": "zoom-out-down",
  });
  $(".homelancer-zoom-out-left").attr({
    "data-aos": "zoom-out-left",
  });
  $(".homelancer-zoom-out-right").attr({
    "data-aos": "zoom-out-right",
  });

  //flip animation
  $(".homelancer-flip-up").attr({
    "data-aos": "flip-up",
  });
  $(".homelancer-flip-down").attr({
    "data-aos": "flip-down",
  });
  $(".homelancer-flip-left").attr({
    "data-aos": "flip-left",
  });
  $(".homelancer-flip-right").attr({
    "data-aos": "flip-right",
  });

  //animation ease attributes
  $(".homelancer-linear").attr({
    "data-aos-easing": "linear",
  });
  $(".homelancer-ease").attr({
    "data-aos-easing": "ease",
  });
  $(".homelancer-ease-in").attr({
    "data-aos-easing": "ease-in",
  });
  $(".homelancer-ease-in-back").attr({
    "data-aos-easing": "ease-in-back",
  });
  $(".homelancer-ease-out").attr({
    "data-aos-easing": "ease-out",
  });
  $(".homelancer-ease-out-back").attr({
    "data-aos-easing": "ease-out-back",
  });
  $(".homelancer-ease-in-out-back").attr({
    "data-aos-easing": "ease-in-out-back",
  });
  $(".homelancer-ease-in-shine").attr({
    "data-aos-easing": "ease-in-shine",
  });
  $(".homelancer-ease-out-shine").attr({
    "data-aos-easing": "ease-out-shine",
  });
  $(".homelancer-ease-in-out-shine").attr({
    "data-aos-easing": "ease-in-out-shine",
  });
  $(".homelancer-ease-in-quad").attr({
    "data-aos-easing": "ease-in-quad",
  });
  $(".homelancer-ease-out-quad").attr({
    "data-aos-easing": "ease-out-quad",
  });
  $(".homelancer-ease-in-out-quad").attr({
    "data-aos-easing": "ease-in-out-quad",
  });
  $(".homelancer-ease-in-cubic").attr({
    "data-aos-easing": "ease-in-cubic",
  });
  $(".homelancer-ease-out-cubic").attr({
    "data-aos-easing": "ease-out-cubic",
  });
  $(".homelancer-ease-in-out-cubic").attr({
    "data-aos-easing": "ease-in-out-cubic",
  });
  $(".homelancer-ease-in-quart").attr({
    "data-aos-easing": "ease-in-quart",
  });
  $(".homelancer-ease-out-quart").attr({
    "data-aos-easing": "ease-out-quart",
  });
  $(".homelancer-ease-in-out-quart").attr({
    "data-aos-easing": "ease-in-out-quart",
  });

  setTimeout(function () {
    AOS.init({
      once: true,
      duration: 1200,
    });
  }, 100);

  $(window).scroll(function () {
    var scrollTop = $(this).scrollTop();
    var homelancerStickyMenu = $(".homelancer-sticky-menu");
    var homelancerStickyNavigation = $(".homelancer-sticky-navigation");

    if (homelancerStickyMenu.length && scrollTop > 0) {
      homelancerStickyMenu.addClass("sticky-menu-enabled homelancer-zoom-in-up");
    } else {
      homelancerStickyMenu.removeClass("sticky-menu-enabled");
    }
  });
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      jQuery(".homelancer-scrollto-top a").addClass("show");
    } else {
      jQuery(".homelancer-scrollto-top a").removeClass("show");
    }
  });
  jQuery(".homelancer-scrollto-top a").click(function () {
    jQuery("html, body").animate({ scrollTop: 0 }, 600);
    return false;
  });

  /* Featured Slider */
  var homelancerSlider = new Swiper(".homelancer-slider", {
    slidesPerView: 1,
    speed: 1000,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".homelancer-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".homelancer-button-next",
      prevEl: ".homelancer-button-prev",
    },
  });
})(jQuery);
