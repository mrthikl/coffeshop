(function () {
  'use strict';

  new Swiper(".swiper-hero", {
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
  new Swiper(".gallery-top", {
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
  new Swiper(".reviewBottom", {
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

  new Swiper(".swiperAbout", {
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

  const mediaMax1000 = window.matchMedia("(max-width: 1000px)");
  const mediaMin1024 = window.matchMedia("(min-width: 1024px)");
  const mediaMin768 = window.matchMedia("(min-width: 768px)");

  // Header
  $(".btnHeader").click(function () {
    $(this).toggleClass("openHamburger");
    $(".navigation").toggleClass("openHeader");
    $(".headerSecond").toggleClass("holdHeader");
  });
  $("body #btnLogin").click(function () {
    $(".loginSec").addClass("showLoginSec");
  });
  $(".btnCloseLoginSec").click(function () {
    $(".loginSec").removeClass("showLoginSec");
  });
  // Rellax
  new Rellax(".rellax2");
  if (mediaMin1024.matches) {
    new Rellax(".rellax");
  }
  if (mediaMin768.matches) {
    new Rellax(".rellax3");
  }

  AOS.init({
    duration: 600,
    once: true,
  });

  // observer API
  document.querySelector(".headerSecond");
  const hero = document.querySelector(".hero");
  const sectionOneOptions = {
    rootMargin: "-100px 0px 0px 0px",
    threshhold: 1,
  };
  const sectionOneObserver = new IntersectionObserver(function (
    entries,
    sectionOneObserver
  ) {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) {
        if (mediaMin1024.matches) {
          $(".headerSecond").css({ top: "0" });
        }
      } else {
        if (mediaMin1024.matches) {
          $(".headerSecond").css({ top: "-70px" });
        }
      }
    });
  },
  sectionOneOptions);
  sectionOneObserver.observe(hero);

  // Scroll Header
  var lastScroll = 0;

  if (mediaMax1000.matches) {
    jQuery(document).ready(function ($) {
      $(window).scroll(function () {
        setTimeout(function () {
          var scroll = $(window).scrollTop();
          if (scroll > lastScroll + 20) {
            $(".headerSecond").css({ top: "-70px " });
            $(".menuProduct").css({ top: "-40px" });
          } else if (scroll < lastScroll - 20) {
            $(".headerSecond").css({ top: "0" });
            $(".menuProduct").css({ top: "30px" });
          }
          lastScroll = scroll;
        });
      });
    });
  }

  // Radio Checked
  $("input:radio").click(() => {
    let name = $(undefined).attr("name");
    let self = $(undefined);
    [].filter
      .call($(`input[name=${name}]`), (ele) => {
        return self[0] !== $(ele)[0];
      })
      .forEach((ortherEle) => {
        $(ortherEle).removeAttr("data-check ");
      });

    if ($(undefined).attr("data-check")) {
      $(undefined).prop("checked", false);
      $(undefined).removeAttr("data-check");
    } else {
      $(undefined).attr("data-check", "1");
    }
  });

  // Page Scroll To id
  $(window).on("load", function () {
    $(".navProduct a").mPageScroll2id({
      highlightSelector: ".navProduct a",
      offset: 150,
    });
  });

}());
