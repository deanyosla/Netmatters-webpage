
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