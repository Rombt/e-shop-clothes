import { isWebp } from "./modules/isWebp.js"; // проверяет поддерживает ли браузер формат webp
import { swiperDish, swiperToday, swiperClients } from "./modules/sliders.js"; // проверяет поддерживает ли браузер формат webp
import { Burger } from "./modules/burger.js";



window.onload = function() {


    isWebp(); // проверяет поддерживает ли браузер формат webp

    let params_headerMenuBurger = {

        conteiner: 'heder-menu',
        menuList: 'menu__list',
        classActive: 'menu__sm',
        burgerOpen: 'heder-menu__burger',
        burgerClose: 'heder-menu__burger-close',

    }

    let params_foodMenuBurger = {

        conteiner: 'menu',
        menuList: 'menu__list',
        classActive: 'active',
        burgerOpen: 'menu__burger',
        burgerClose: 'burger__close',

    }

    const headerMenuBurger = new Burger(params_headerMenuBurger);
    headerMenuBurger.run();

    const foodMenuBurger = new Burger(params_foodMenuBurger);
    foodMenuBurger.run();

    // burgerMenu('heder-menu__burger', 'heder-menu', 'heder-menu__burger-close', 'menu__sm'); // burger_menu header
    // burgerMenu('food-menu-burger', 'food-menu', 'heder-menu__burger-close', 'active'); // burger_menu food-menu


    // function burgerMenu(menuBurger, menu, menuBurgerClose, active) {

    //     menuBurger = '.' + menuBurger;
    //     menu = '.' + menu;

    //     let burgerMenu = document.querySelector(menuBurger);
    //     let hederMenu = document.querySelector(menu);
    //     burgerMenu.addEventListener("click", () => {

    //         hederMenu.classList.toggle(active);
    //         burgerMenu.classList.toggle(menuBurgerClose);
    //     });;

    // }














}