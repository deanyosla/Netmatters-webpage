
$(document).ready(function() {
        const $hamburger = $('.hamburger');
        const $menuNav = $('#sideMenu');
        const $closeSideMenu = $('#close-side-menu');
        const $body = $('body');
        const $html = $('html');
    
        function toggleSideMenu() {
            $hamburger.addClass('hamburger--spin');
            $hamburger.toggleClass('is-active');
            $menuNav.toggleClass('hidden-sidebar');
            $body.toggleClass('side-menu-active');
            $closeSideMenu.toggleClass('side-menu-active');
            $body.toggleClass('stop-scroll');
            $html.toggleClass('stop-scroll');
        }
    
        $hamburger.click(toggleSideMenu);
        $closeSideMenu.click(toggleSideMenu);
    });



const head = $('.stickyH');
const mainHeader = $('.header'); 
const headerHeight = mainHeader.height() + 40;
let lastScrollTop = 0;

window.onscroll = function(e) {
    const currentScrollTop = window.scrollY;
    const isScrollingDown = currentScrollTop > lastScrollTop;

    onScroll(isScrollingDown);
    lastScrollTop = currentScrollTop;
};

function onScroll(isScrollingDown) {
    let scroll = window.scrollY;

    if (isScrollingDown && scroll > headerHeight) {
        removeSticky();
    } else {
        addSticky();
    }
}

function addSticky() {
    head.removeClass('sticky');
}

function removeSticky() {
    head.addClass('sticky');
}

$(document).ready(function() {
    const popup = $('#consent-popup');

    // Check if the user has accepted the cookie
    const hasAcceptedCookie = localStorage.getItem('jdc_consent');

    // If the cookie has not been accepted, show the popup
    if (!hasAcceptedCookie) {
      popup.show();
    }

    // Function to run when the user clicks "Accept"
    $('#accept').click(function() {
      // Save the acceptance in localStorage
      localStorage.setItem('jdc_consent', true);

      // Hide the cookie popup
      popup.hide();
      $('body, html').removeClass('stop-scroll');
      $('#bground').removeClass('cookie-background');
    });

    // Get reference to the consent button
    const consentButton = $('#consent-btn');

    // Set up the consent button to toggle visibility and scrolling when clicked
    consentButton.click(function() {
      popup.toggle();
      $('body, html').toggleClass('stop-scroll');
    });
  });