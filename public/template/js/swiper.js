const swiperHero = new Swiper(".swiper-hero", {
  direction: "horizontal",
  loop: true,
  effect: "fade",
  parallax: true,
  speed: 800,
  simulateTouch: false,
  preventClicks: false,
  autoplay: {
    delay: 5000,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: "true",
  },

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    320: {
      simulateTouch: false,
      preventClicks: false,
    },
    1024: {
      simulateTouch: true,
      preventClicks: true,
    },
  },
});

var galleryThumbs = new Swiper(".gallery-thumbs", {
  spaceBetween: 10,
  slidesPerView: 3,
  freeMode: true,
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
});
var galleryTop = new Swiper(".gallery-top", {
  spaceBetween: 10,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  thumbs: {
    swiper: galleryThumbs,
  },
});

var reviewTop = new Swiper(".reviewTop", {
  slidesPerView: 3,
  breakpoints: {
    320: {
      direction: "vertical",
    },
    1280: {
      direction: "horizontal",
    },
  },
});
var reviewBottom = new Swiper(".reviewBottom", {
  spaceBetween: 10,
  slidesPerView: 1,
  freeMode: true,
  speed: 0,
  simulateTouch: false,
  preventClicks: false,
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
  thumbs: {
    swiper: reviewTop,
  },
});

const swiperAbout = new Swiper(".swiperAbout", {
  direction: "horizontal",
  loop: true,
  speed: 800,
  autoplay: {
    delay: 5000,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: "true",
  },
});
