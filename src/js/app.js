import { isWebp } from "./modules/isWebp.js"; // проверяет поддерживает ли браузер формат webp



isWebp(); // проверяет поддерживает ли браузер формат webp


// burger_menu 
let burgerMenu = document.querySelector('.menu__burger');
let hederMenu = document.querySelector('.heder-menu');
burgerMenu.addEventListener("click", () => {
    hederMenu.classList.toggle('menu__sm');
    burgerMenu.classList.toggle('menu__burger-close');
});;