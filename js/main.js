
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


// Set up to use local storage
const storageType = localStorage;
const consentPropertyName = 'jdc_consent';

// Check if the user should see the consent popup
const shouldShowPopup = () => !storageType.getItem(consentPropertyName);

// Save user's consent to local storage
const saveToStorage = () => storageType.setItem(consentPropertyName, true);

// Get references to HTML elements
const body = document.getElementsByTagName('body');
const html = document.getElementsByTagName('html');
const consentParent = document.querySelector('.consent-div');
const background = document.getElementById('bground');
let consentPopup;
// Run this code when the DOM content has fully loaded
document.addEventListener('DOMContentLoaded', () => {

  // Function to run when the user clicks "Accept"
  const acceptFn = event => {
    saveToStorage(storageType);
    background.classList.remove('cookie-background');
    background.classList.add('bg-hidden');
    consentParent.classList.add('hide');
    body[0].classList.remove('stop-scroll');
    html[0].classList.remove('stop-scroll');
  };

  // Get references to HTML elements inside the page
  consentPopup = document.getElementById('consent-popup');
  const acceptBtn = document.getElementById('accept');


  // Set up "Accept" button to run the function when clicked
  acceptBtn.addEventListener('click', acceptFn);

  // If the user hasn't given consent, show the popup when the page loads
  if (shouldShowPopup(storageType)) {
    background.classList.remove('bg-hidden');
    background.classList.add('cookie-background');
    consentParent.classList.remove('hide');
    body[0].classList.add('stop-scroll');
    html[0].classList.add('stop-scroll');
  }

  // Get reference to the consent button
  const consentButton = document.getElementById('consent-btn');
  // Set up the consent button to toggle visibility and scrolling when clicked
  consentButton.addEventListener('click', () => {
    background.classList.toggle('bg-hidden');
    consentParent.classList.toggle('hide');
    body[0].classList.toggle('stop-scroll');
    html[0].classList.toggle('stop-scroll');
  });

});
