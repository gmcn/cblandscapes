( function($) {

  $('.parallax').paroller();

  /**
   * Match Height (Including Safari onload fix)
   */
  function startMatchHeight() {
    $('.matchheight').matchHeight();
  }
  window.onload = startMatchHeight;

  // fancybox
  $(document).ready(function() {
  		$(".fancybox").fancybox();
  	});

} ) (jQuery);

window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#F9B877",
      "text": "#8B5542;"
    },
    "button": {
      "background": "#8B5542;"
    }
  },
  "theme": "edgeless",
  "position": "bottom",
  "static": true,
  "content": {
    "message": "This site uses cookies. By continuing to browse the site, you are agreeing to our use of cookies.",
    "dismiss": "Close This",
    "link": "Find out more",
    "href": "data-policy"
  }
});

var swiper = new Swiper('.swiper-container', {
  loop: true,
  slidesPerView: 2,
  slidesPerColumn: 3,
  spaceBetween: 15,

  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 576px
    576: {
      slidesPerView: 2,
      slidesPerColumn: 3,
    },
    // when window width is >= 768px
    768: {
      slidesPerView: 2,
      slidesPerColumn: 3,
    },
    // when window width is >= 992px
    992: {
      slidesPerView: 3,
      slidesPerColumn: 3,
    },
    // when window width is >= 1200px
    1200: {
      slidesPerView: 6,
      slidesPerColumn: 3,
    }
  },

  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next-unique',
    prevEl: '.swiper-button-prev-unique',
  },
});

var swiper2 = new Swiper('.project-testimonials', {
  loop: true,
  navigation: {
    nextEl: '.swiper-button-next-testimonials',
    prevEl: '.swiper-button-prev-testimonials',
  },
});

var swiperPortfolio = new Swiper('.swiper-portfolio', {
  loop: true,
  slidesPerView: 1,
  spaceBetween: 0,
  centeredSlides: true,

  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 576px
    576: {
      slidesPerView: 1,
      spaceBetween: 0,
    },
    // when window width is >= 992px
    992: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    // when window width is >= 1200px
    1200: {
      slidesPerView: 3,
      spaceBetween: 85,
    }
  },

  // freeMode: true,
  navigation: {
    nextEl: '.swiper-button-next-unique',
    prevEl: '.swiper-button-prev-unique',
  },
});
