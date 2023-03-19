import { isWebp } from "./modules/isWebp.js"; // проверяет поддерживает ли браузер формат webp
import { swiperDish, swiperToday, swiperClients } from "./modules/sliders.js"; // проверяет поддерживает ли браузер формат webp

window.onload = function () {


    isWebp(); // проверяет поддерживает ли браузер формат webp


    // burger_menu 
    let burgerMenu = document.querySelector('.menu__burger');
    let hederMenu = document.querySelector('.heder-menu');
    burgerMenu.addEventListener("click", () => {
        hederMenu.classList.toggle('menu__sm');
        burgerMenu.classList.toggle('menu__burger-close');
    });;














}