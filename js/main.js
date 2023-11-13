const hamburger = document.querySelector('.hamburger');
// const menu_nav = document.querySelector('.mobile-nav');
hamburger.addEventListener('click', function () {
    hamburger.classList.add('hamburger--spin');
    hamburger.classList.toggle("is-active");
    menu_nav.classList.toggle("is-active");
});