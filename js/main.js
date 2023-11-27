
const hamburger = document.querySelector('.hamburger');
const menu_nav = document.querySelector('#sideMenu');
const closeSideMenu = document.getElementById('close-side-menu');
const body = document.getElementsByTagName('body');
const html = document.getElementsByTagName('html');

function toggleSideMenu() {
        hamburger.classList.add('hamburger--spin');
        hamburger.classList.toggle("is-active");
        menu_nav.classList.toggle('hidden-sidebar');
        body[0].classList.toggle('side-menu-active');
        closeSideMenu.classList.toggle('side-menu-active');
        body[0].classList.toggle('stop-scroll');
        html[0].classList.toggle('stop-scroll');        
}

hamburger.addEventListener('click', toggleSideMenu);
closeSideMenu.addEventListener('click', toggleSideMenu);

const nav = document.querySelector(".nav");
  let lastScrollY = window.scrollY;

  window.addEventListener("scroll", () => {
    if (lastScrollY < window.scrollY) {
      nav.classList.add("nav--hidden");
    } else {
      nav.classList.remove("nav--hidden");
    }

    lastScrollY = window.scrollY;
    if (window.scrollY <= 0 ) {

        nav.classList.remove('nav--hidden');
    }

  });