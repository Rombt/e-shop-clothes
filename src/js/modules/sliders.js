


export const swiperCoocs = new Swiper('.swiper-coocs', {

    direction: "horizontal",
    // loop: true,      //  в режиме петли не работает!
    // freeMode: true,

    pagination: {
        el: '.swiper-pagination',
        // el: '.swiper-coocs__pagination',
        type: 'bullets',
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '">  <span class="swiper-pagination__center"> </span> </span>';
        },

    },

    mousewheel: true,
    speed: 700,
    autoplay: {
        delay: 5000,
    },

    slidesPerView: 4,
    spaceBetween: 23,

    // breakpoints: {
    // 
    // 
    // },



});



















export const swiperDish = new Swiper('.swiper.swiper-dish', {
    direction: 'horizontal',
    speed: 1000,


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
    // mousewheel: {
    //    invert: true,
    // },
});

export const swiperToday = new Swiper('.swiper.swiper-today', {
    direction: 'horizontal',
    loop: true,
    speed: 1000,

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
    // mousewheel: {
    //    invert: true,
    // },
});


export const swiperClients = new Swiper('.swiper.swiper-clients', {
    loop: true,
    speed: 500,

    // autoplay: {
    //     delay: 5000,
    // },

    navigation: {
        nextEl: '.swiper-clients__button-prev',
        prevEl: '.swiper-clients__button-next',
    },

});


export const swiperFoodStep = new Swiper('.swiper-food-step', {

    direction: "vertical",
    slidesPerView: "auto",
    freeMode: true,
    scrollbar: {
        el: ".swiper-scrollbar",
        draggable: true,
    },
    mousewheel: true,
    speed: 500,
    autoplay: {
        delay: 5000,
    },

});
