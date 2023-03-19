import { isWebp } from "./modules/isWebp.js"; // проверяет поддерживает ли браузер формат webp



isWebp(); // проверяет поддерживает ли браузер формат webp


// burger_menu 
let burgerMenu = document.querySelector('.menu__burger');
let hederMenu = document.querySelector('.heder-menu');
burgerMenu.addEventListener("click", () => {
    hederMenu.classList.toggle('menu__sm');
    burgerMenu.classList.toggle('menu__burger-close');
});;



const swiperDish = new Swiper('.swiper.swiper-dish', {
    direction: 'horizontal',

    breakpoints: {
        1250: {
            direction: 'vertical',
        }
    },

    loop: true,
    autoplay: {
        delay: 5000,
    },
    effect: 'fade',
    fadeEffect: {
        crossFade: true,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '">  <span class="swiper-pagination__center"> </span> </span>';
        },
    },
    mousewheel: {
        invert: true,
    },
});

const swiperToday = new Swiper('.swiper.swiper-today', {
    direction: 'horizontal',
    loop: true,

    autoplay: {
        delay: 5000,
    },
    effect: 'fade',
    fadeEffect: {
        crossFade: true,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '">  <span class="swiper-pagination__center"> </span> </span>';
        },
    },
    mousewheel: {
        invert: true,
    },
});