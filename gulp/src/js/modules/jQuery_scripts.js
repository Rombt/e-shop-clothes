
export const jQuery_scripts = jQuery(document).ready(function ($) {

   function modalWindow(iconOnClass, modalWindow, closeWindow) {


      console.log("iconOnClass = ", iconOnClass);

      $("." + iconOnClass).on('click', function (e) {
         e.preventDefault();

         $('.' + modalWindow).show(500);
         $(document).on('keyup', function (e) {
            if ((e.keyCode == 27) || (e.keyCode == 13)) {
               $('.' + modalWindow).hide(500);
            }
         });

         $(document).on('click', function (e) {

            let target = $(e.target);

            if (!target.is('.' + iconOnClass)
               && !target.is('.' + modalWindow + ' *:not([class="' + closeWindow + '"])')
               && !target.is('.' + modalWindow)
            ) {
               $('.' + modalWindow).hide(500);
            }
         });
      });


   }


   // search modal window
   modalWindow('search-icon', 'searc-modal', 'close-window');






   // multilevel header menu
   const $menuHeaderMenu = $('#menu-header-menu');
   const menuHeight = $menuHeaderMenu.height();
   const lineHeight = $menuHeaderMenu.css('line-height').replace('px', '');
   const amountOfLines = Math.floor(menuHeight / lineHeight);


   if (amountOfLines > 1) {
      const menuElementsHide = $menuHeaderMenu.children()
         .filter(function (index) {
            return $(this).position().top >= lineHeight;
         })
         .remove();

      const burger = $("<div class='hide-menu-burger'><span></span></div>");
      const modalMenu = $('<div class="modal-menu  modal-menu-hide"><div class="close-window"></div></div>')
      $menuHeaderMenu.append(burger);
      $menuHeaderMenu.append(modalMenu);


      // menu modal window
      modalWindow('hide-menu-burger', 'modal-menu  modal-menu-hide', 'close-window');

      // burger.on('click', function (e) {


      //    // burger.toggleClass('hide-menu-burger');
      //    modalMenu.toggle(500);



      //    console.log("***********");
      // })

      // $(".close-window").on('click', function (e) {
      //    modalMenu.hide(500);
      // });

   }


   // $(".heder-menu ul li a").mouseover(function () {

   //    const listElements = $(this).parent(".menu-item").children("ul .sub-menu").children("li")
   //    let sumHights = 0;

   //    listElements.each(function (i, elem) {
   //       sumHights += elem.offsetHeight;
   //    })

   //    $(this).parent(".menu-item")
   //       .children("ul .sub-menu")
   //       .stop()
   //       .animate({
   //          'height': sumHights * 3,
   //          'padding-top': '20px ',
   //          'padding-bottom': '20px'
   //       }, 5000)

   //    $(this).parent(".menu-item").children("ul .sub-menu").mouseleave(function () {
   //       $(this).parent(".menu-item").children("ul .sub-menu").stop().animate({
   //          'height': 0,
   //          'padding-top': '0px ',
   //          'padding-bottom': '0px'
   //       }, 1000);
   //    })
   // });










})