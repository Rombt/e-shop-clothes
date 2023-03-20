
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

   // autoplay: {
   //    delay: 5000,
   // },
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
   mousewheel: {
      invert: true,
   },
});


export const swiperClients = new Swiper('.swiper.swiper-clients', {

   // slidesPerView: 3,
   // spaceBetween: 10,
   // loop: true,
   // speed: 1000,

   direction: 'horizontal',


   // // autoplay: {
   // //    delay: 5000,
   // // },
   // effect: 'fade',
   // fadeEffect: {
   //    crossFade: true,
   // },


   // navigation: {
   //    nextEl: '.swiper-clients__button-prev',
   //    prevEl: '.swiper-clients__button-next',
   // },

   navigation: {
      nextEl: '.swiper-button-next .swiper-clients__button-prev',
      prevEl: '.swiper-button-prev .swiper-clients__button-next',
   },


   // mousewheel: {
   //    invert: true,
   // },
});