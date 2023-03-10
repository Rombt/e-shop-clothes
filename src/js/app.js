import { isWebp } from "./modules/isWebp.js"; // проверяет поддерживает ли браузер формат webp



isWebp();



let burgerMenu = document.querySelector('.menu__burger');
let hederMenu = document.querySelector('.heder-menu');



burgerMenu.addEventListener("click", () => {

    // hederMenu.style.display = 'block';
    hederMenu.classList.toggle('menu__burger-active');


});;