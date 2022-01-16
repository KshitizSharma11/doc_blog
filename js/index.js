(function () {
  "use strict";

  var carousels = function () {
    $(".owl-carousel1").owlCarousel({
      loop: true,
      center: true,
      margin: 0,
      responsiveClass: true,
      nav: false,
      autoplay:true,
autoplayTimeout:5000,
autoplayHoverPause:true,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        680: {
          items: 2,
          nav: false,
          loop: false
        },
        1000: {
          items: 3,
          nav: true
        }
      }
    });
  };

  (function () {
    carousels();
  })(jQuery);
})();

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    dots: false,
    nav:true,
    autoplay:true,
autoplayTimeout:5000,
autoplayHoverPause:true,
     navText : ["<button type='button' class='btn btn-dark' name='button'><i class='fa fa-chevron-left'></i></button>","<button type='button' class='btn btn-dark' name='button'><i class='fa fa-chevron-right'></i></button>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
