// import { isWebp } from "./modules/isWebp.js"; // проверяет поддерживает ли браузер формат webp
import { Burger } from './modules/rstr_Burger.js';
import { Swipe } from './modules/Swipe.js';
import * as sliders from './modules/sliders.js';
import { jQuery_scripts } from './modules/jQuery_scripts.js';
import { ajax_selectView } from './modules/ajax_select-view.js';
import { ajax_likes } from './modules/ajax_likes.js';
import { ajax_cartCountUpdate } from './modules/ajax_cartCountUpdate.js';

import './modules/_isWebp.js';
import './modules/mobile.js';
import './modules/dynamic_adapt.js';
import './modules/popup.js';
import './modules/arrowsInputNumberStyle.js';

window.onload = function () {
  let params_headerMenuBurger = {
    container: 'heder-menu',
    // menuList: 'menu__list',
    classActive: 'menu__sm',
    burgerOpen: 'heder-menu__burger',
    burgerClose: 'heder-menu__burger-close',
  };
  const headerMenuBurger = new Burger(params_headerMenuBurger);
  headerMenuBurger.init();

  let params_foodMenuBurger = {
    container: 'food-menu',
    // menuList: 'food-menu__list',
    classActive: 'food-menu__active',
    burgerOpen: 'food-menu__burger',
    burgerClose: 'burger-close',
  };
  const foodMenuBurger = new Burger(params_foodMenuBurger);
  foodMenuBurger.init();

  var swiper = new Swipe('.shop-sidebar');
  let touchToggle = document.querySelector('.touch-toggle');
  let sideBar = document.querySelector('.shop-sidebar');

  swiper.onLeft(function () {
    sideBar.classList.remove('swipe');
    touchToggle.classList.add('toggle-on');
  });
  swiper.onRight(function () {
    sideBar.classList.add('swipe');
    touchToggle.classList.remove('toggle-on');
  });
  swiper.run();

  var blogSwiper = new Swipe('.blog-sidebar');
  let blogTouchToggle = document.querySelector('.blog-touch-toggle');
  let blogSideBar = document.querySelector('.blog-sidebar');
  const body = document.querySelector('body');

  blogSwiper.onLeft(function () {
    blogSideBar.classList.add('blog-swipe');
    blogTouchToggle.classList.remove('blog-toggle-on');
    body.classList.add('lock');
  });

  blogSwiper.onRight(function () {
    blogSideBar.classList.remove('blog-swipe');
    blogTouchToggle.classList.add('blog-toggle-on');
    body.classList.remove('lock');
  });

  blogSwiper.run();
};
