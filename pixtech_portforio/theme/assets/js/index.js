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

    function init() {
      openHamburger();
      openNavigator();
    }

    $toggleButton.on('click', init);
  }

  function activeSwiper() {
    const swiper = new Swiper('.mySwiper-gallery', {
      spaceBetween: 6,
      slidesPerView: 4,
    });

    const swiper2 = new Swiper('.mySwiper-slider', {
      thumbs: {
        swiper: swiper,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  }

  function fadeAnime() {
    const trigger = $('.js-fadeUpTrigger');
    $(trigger).each(function () {
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
      scroll: fadeAnime,
      load: fadeAnime,
    });
  }

  function init() {
    setEvent();
    activeSwiper();
    changeToggleMenu();
  }

  init();
  console.log('index.js is loading!!');
});
