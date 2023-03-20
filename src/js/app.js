import { isWebp } from "./modules/isWebp.js"; // проверяет поддерживает ли браузер формат webp
import { swiperDish, swiperToday, swiperClients } from "./modules/sliders.js"; // проверяет поддерживает ли браузер формат webp

window.onload = function () {


    isWebp(); // проверяет поддерживает ли браузер формат webp


    burgerMenu('heder-menu__burger', 'heder-menu', 'heder-menu__burger-close', 'menu__sm');       // burger_menu header
    burgerMenu('food-menu-burger', 'food-menu', 'heder-menu__burger-close', 'active');       // burger_menu food-menu


    function burgerMenu(menuBurger, menu, menuBurgerClose, active) {

        menuBurger = '.' + menuBurger;
        menu = '.' + menu;

        let burgerMenu = document.querySelector(menuBurger);
        let hederMenu = document.querySelector(menu);

        console.log("burgerMenu = ", burgerMenu);
        // console.log("hederMenu = ", hederMenu);

        burgerMenu.addEventListener("click", () => {

            hederMenu.classList.toggle(active);
            burgerMenu.classList.toggle(menuBurgerClose);
        });;

    }














}