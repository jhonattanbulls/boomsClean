//[Javascript]



$(function () {
    "use strict";   
		
	/* BOOTSTRAP SLIDER */
		$('.slider').slider()
	
	
	/* flexslider SLIDER */
		$('.flexslider').flexslider({
			animation: "slide"
		  });
		  $('.flexslider2').flexslider({
			animation: "slide",
			controlNav: "thumbnails"
		  });
	/* owl-carousel SLIDER */
		$('.owl-carousel').owlCarousel({
			loop: true,
			margin: 10,
			responsiveClass: true,
			autoplay: true,
			responsive: {
			  0: {
				items: 1,
				nav: false
			  },
			  600: {
				items: 3,
				nav: false
			  },
			  1000: {
				items: 4,
				nav: true,
				margin: 20
			  }
			}
		});
	
  }); // End of use strict


      /**=====================
    Owl-carousel js Start
==========================**/

(function ($) {
  "use strict";
  var owl_carousel_custom = {
    init: function () {
      var owl = $("#owl-carousel-13");
      owl.owlCarousel({
        items: 5,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 1000,
        autoplayHoverPause: true,
        nav: false,
        responsive: {
          320: {
            items: 1,
            mergeFit: true,
          },
          768: {
            items: 2,
            mergeFit: true,
          },
          992: {
            items: 3,
            mergeFit: true,
          },
          1440: {
            items: 5,
            mergeFit: true,
          },
        },
      }),
        $(".play").on("click", function () {
          owl.trigger("play.owl.autoplay", [1000]);
        }),
        $(".stop").on("click", function () {
          owl.trigger("stop.owl.autoplay");
        }),
        $("#owl-carousel-14").owlCarousel({
          items: 1,
          margin: 10,
          autoHeight: true,
          nav: false,
        });
      var owl = $("#owl-carousel-15");
      owl.owlCarousel({
        loop: true,
        nav: false,
        margin: 10,
        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 3,
          },
          960: {
            items: 5,
          },
          1200: {
            items: 5,
          },
        },
      }),
        owl.on("mousewheel", ".owl-stage", function (e) {
          if (e.deltaY > 0) {
            owl.trigger("next.owl");
          } else {
            owl.trigger("prev.owl");
          }
          e.preventDefault();
        });
    },
  };

  owl_carousel_custom.init();
})(jQuery);

/**=====================
  Owl-carousel Ends
==========================**/