export const swiperCoocs = new Swiper('.swiper-coocs', {

   direction: "horizontal",
   // freeMode: true,

   pagination: {
      el: '.swiper-pagination',
      // el: '.swiper-coocs__pagination',
      type: 'bullets',
   },


   // mousewheel: true,
   // speed: 500,
   // autoplay: {
   //    delay: 5000,
   // },


   slidesPerView: 1,
   spaceBetween: 10,
   pagination: {
      clickable: true,
   },

});







// export const _swiperCoocs = document.querySelector('swiper-coocs')
// Object.assign(swiperCoocs, {
//    slidesPerView: 1,
//    spaceBetween: 10,
//    pagination: {
//       clickable: true,
//    },
// breakpoints: {
//    "@0.00": {
//       slidesPerView: 1,
//       spaceBetween: 10,
//    },
//    "@0.75": {
//       slidesPerView: 2,
//       spaceBetween: 20,
//    },
//    "@1.00": {
//       slidesPerView: 3,
//       spaceBetween: 40,
//    },
//    "@1.50": {
//       slidesPerView: 4,
//       spaceBetween: 50,
//    },
// },
// });

// swiperCoocs.initialize();
































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

   autoplay: {
      delay: 5000,
   },

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

