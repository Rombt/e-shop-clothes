import { isWebp } from "./modules/isWebp.js"; // проверяет поддерживает ли браузер формат webp
import { Burger } from "./modules/Burger.js";
import { Swipe } from "./modules/Swipe.js";
import * as sliders from "./modules/sliders.js";
import { jQuery_scripts } from "./modules/jQuery_scripts.js";
import { ajax_scripts } from "./modules/ajax.js";


window.onload = function () {

    isWebp(); // проверяет поддерживает ли браузер формат webp

    let params_headerMenuBurger = {
        conteiner: 'heder-menu',
        // menuList: 'menu__list',
        classActive: 'menu__sm',
        burgerOpen: 'heder-menu__burger',
        burgerClose: 'heder-menu__burger-close',
    }
    const headerMenuBurger = new Burger(params_headerMenuBurger);
    headerMenuBurger.init();

    let params_foodMenuBurger = {
        conteiner: 'food-menu',
        // menuList: 'food-menu__list',
        classActive: 'food-menu__active',
        burgerOpen: 'food-menu__burger',
        burgerClose: 'burger-close',
    }
    const foodMenuBurger = new Burger(params_foodMenuBurger);
    foodMenuBurger.init();

    let params_recipesTitleNavBurger = {
        conteiner: 'menu-recipes',
        // menuList: 'menu-recipes__list',
        classActive: 'menu-recipes__active',
        burgerOpen: 'menu-recipes__burger',
        burgerClose: 'burger-close',
    }
    const recipesTitleNavBurger = new Burger(params_recipesTitleNavBurger);
    recipesTitleNavBurger.init();


    var swiper = new Swipe('.shop-sidebar');
    let touchToggle = document.querySelector('.touch-toggle')
    let sideBar = document.querySelector('.shop-sidebar')

    swiper.onLeft(function () {
        sideBar.classList.remove('swipe');
        touchToggle.classList.add('toggle-on');

    });
    swiper.onRight(function () {
        ;
        sideBar.classList.add('swipe');
        touchToggle.classList.remove('toggle-on');

    });
    swiper.run();

    var blogSwiper = new Swipe('.blog-sidebar');
    let blogTouchToggle = document.querySelector('.blog-touch-toggle')
    let blogSideBar = document.querySelector('.blog-sidebar')

    blogSwiper.onLeft(function () {
        blogSideBar.classList.add('blog-swipe');
        blogTouchToggle.classList.remove('blog-toggle-on');
    });
    blogSwiper.onRight(function () {
        blogSideBar.classList.remove('blog-swipe');
        blogTouchToggle.classList.add('blog-toggle-on');

    });
    blogSwiper.run();


}