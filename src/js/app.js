import { isWebp } from "./modules/isWebp.js"; // проверяет поддерживает ли браузер формат webp
// import { swiperDish, swiperToday, swiperClients } from "./modules/sliders.js";
import * as sliders from "./modules/sliders.js";
import { Burger } from "./modules/burger.js";
import { Swipe } from "./modules/Swipe.js";


window.onload = function () {

    isWebp(); // проверяет поддерживает ли браузер формат webp

    let params_headerMenuBurger = {
        conteiner: 'heder-menu',
        menuList: 'menu__list',
        classActive: 'menu__sm',
        burgerOpen: 'heder-menu__burger',
        burgerClose: 'heder-menu__burger-close',
    }
    const headerMenuBurger = new Burger(params_headerMenuBurger);
    headerMenuBurger.init();

    let params_foodMenuBurger = {
        conteiner: 'food-menu',
        menuList: 'food-menu__list',
        classActive: 'active',
        burgerOpen: 'burger-open',
        burgerClose: 'burger-close',
    }
    const foodMenuBurger = new Burger(params_foodMenuBurger);
    foodMenuBurger.init();

    let params_recipiesTitleNavBurger = {
        conteiner: 'menu-recipies',
        menuList: 'menu-recipies__list',
        classActive: 'menu-recipies-active',
        burgerOpen: 'menu-recipies-burger',
        burgerClose: 'burger-close',
    }
    const recipiesTitleNavBurger = new Burger(params_recipiesTitleNavBurger);
    recipiesTitleNavBurger.init();


    // var swiper = new Swipe('.toggle-on');
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