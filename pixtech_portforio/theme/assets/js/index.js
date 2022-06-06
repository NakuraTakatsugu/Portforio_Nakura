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

  changeToggleMenu();
  console.log('index.js is loading!!');
});
