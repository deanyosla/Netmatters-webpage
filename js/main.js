

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

