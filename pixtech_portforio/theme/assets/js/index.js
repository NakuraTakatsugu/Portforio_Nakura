'use strict';

$(function () {
  function changeToggleMenu() {
    const $toggleButton = $('.js-nav-toggle');
    const $navList = $('.js-nav-list');

    function openHamburger() {
      $toggleButton.toggleClass('is-open');
    }

    function openNavigator() {
      $navList.toggleClass('is-open');
    }

    function closeOpenedNavigator() {
      $toggleButton.removeClass('is-open');
      $navList.removeClass('is-open');
    }

    function setEvent() {
      $toggleButton.on({
        click: function () {
          openHamburger();
          openNavigator();
        },
      });

      $navList.on('click', closeOpenedNavigator);
    }

    function init() {
      setEvent();
    }

    init();
  }

  function changeHeader() {
    const $header = $('.js-header');
    $(window).on('scroll', function () {
      let scroll = $(window).scrollTop();
      let windowHeight = $(window).height();
      if (windowHeight < scroll + 80) {
        $header.addClass('is-scrolled');
      } else {
        $header.removeClass('is-scrolled');
      }
    });
  }

  function activeSwiper() {
    const swiper = new Swiper('.mySwiper-gallery', {
      speed: 800,
      spaceBetween: 6,
      slidesPerView: 4,
    });

    const swiper2 = new Swiper('.mySwiper-slider', {
      thumbs: {
        swiper: swiper,
      },
      speed: 800,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  }

  function animationFadeUp() {
    function fadeUp() {
      const $trigger = $('.js-fadeUpTrigger');
      $trigger.each(function () {
        let elementPosition = $(this).offset().top - 50;
        let scroll = $(window).scrollTop();
        let windowHeight = $(window).height();
        if (scroll >= elementPosition - windowHeight) {
          $(this).addClass('fadeUp');
        }
      });
    }

    function setEvent() {
      $(window).on({
        scroll: fadeUp,
        load: fadeUp,
      });
    }

    function init() {
      setEvent();
    }

    init();
  }

  function init() {
    changeToggleMenu();
    changeHeader();
    activeSwiper();
    animationFadeUp();
  }

  init();
  console.log('index.js is loading!!');
});
