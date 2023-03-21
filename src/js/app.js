import { isWebp } from "./modules/isWebp.js"; // проверяет поддерживает ли браузер формат webp
import { swiperDish, swiperToday, swiperClients } from "./modules/sliders.js";
import { Burger } from "./modules/burger.js";



window.onload = function () {


    isWebp(); // проверяет поддерживает ли браузер формат webp

    let params_headerMenuBurger = {

        conteiner: 'heder-menu',
        menuList: 'menu__list',
        classActive: 'menu__sm',
        burgerOpen: 'heder-menu__burger',
        burgerClose: 'heder-menu__burger-close',

    }

    let params_foodMenuBurger = {

        conteiner: 'food-menu',
        menuList: 'food-menu__list',
        classActive: 'active',
        burgerOpen: 'food-menu-burger',
        burgerClose: 'burger__close',

    }


    const headerMenuBurger = new Burger(params_headerMenuBurger);
    headerMenuBurger.init();

    const foodMenuBurger = new Burger(params_foodMenuBurger);
    foodMenuBurger.init();















}