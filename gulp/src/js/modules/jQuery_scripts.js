export const jQuery_scripts = jQuery(document).ready(function ($) {
   $(".search-icon").on('click', function (e) {
      e.preventDefault();
      $('.searc-modal').show(500);
      $(document).on('keyup', function (e) {
         if ((e.keyCode == 27) || (e.keyCode == 13)) {
            $('.searc-modal').hide(500);
         }
      });

      $(document).on('click', function (e) {
         if (($('.searc-modal').css('display') === 'block')
            && (!e.target.className.includes('searc-modal'))
            && (!e.target.className.includes('search-icon'))
            && (e.target.id != 's')) {
            $('.searc-modal').hide(500);
         }
      });

      $(".close-window").on('click', function (e) {
         $('.searc-modal').hide(500);
      });
   });




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
      $menuHeaderMenu.append(burger);

      burger.one('click', function (e) {
         const modalMenu = $('<div class="modal-menu"></div>')
         $menuHeaderMenu.append(modalMenu);
      })
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