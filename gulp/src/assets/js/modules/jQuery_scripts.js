
export const jQuery_scripts = jQuery(document).ready(function ($) {

   multilevelHeaderMenu();

   accordionMenu('#footer-menu', '.sub-menu')

   paginationAdaptive();



   //---------------------- funktions ---------------------

   function paginationAdaptive() {

      let widthPaginationBTN = $('.pagination').children('.page-numbers').width();
      let allPaginationBTN = $('.pagination').children('.page-numbers').length;
      let widthPaginationBlock;
      let amounthPaginationBTN;
      let indexCurrentPaginationBTN = $('.pagination').children('.page-numbers').find('.current');
      console.log("indexCurrentPaginationBTN = ", index(indexCurrentPaginationBTN.eq(0)));

      $(window).resize(function () {
         widthPaginationBlock = $('.pagination').width();
         amounthPaginationBTN = widthPaginationBlock / widthPaginationBTN;


         // console.log("$(window).width() = ", $(window).width());
      });









   }










   function accordionMenu(menu, subMenu) {

      const $subMenu = $(`${menu} ${subMenu}`);
      const icon = '<div class="accordion-item__icon"></div>';

      if ($.isEmptyObject($subMenu)) {
         return false;
      }

      const $subMenuParent = $subMenu.parent('li');
      $subMenuParent.addClass('accordion-item');
      $subMenuParent.prepend(icon);

      $('.accordion-item__icon').on('click', function (e) {
         $(e.target).parent('li')
            .children('.sub-menu')
            .slideToggle(300);
         $(e.target).toggleClass(`accordion-item__icon-active`);
      });

   }

   function multilevelHeaderMenu() {
      modalWindow('search-icon', 'searc-modal', 'close-window');

      if (!$('#heder-menu > ul').length) {
         console.log($('#menu-header-menu').length);
         return false;
      }

      const $menuHeaderMenu = $('#heder-menu > ul');
      $('.heder-menu').attr('style', 'visibility: visible;')
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
         const modalMenu = $('<div class="modal-menu"><div class="close-window"></div></div>')
         // $menuHeaderMenu.append(burger);
         $menuHeaderMenu.append(burger);
         $menuHeaderMenu.append(modalMenu);
         modalMenu.hide();
         const $modalWindow = modalWindow('hide-menu-burger', 'modal-menu', 'close-window');
         menuElementsHide.each(function () {
            $(this).addClass('modal-item');
            $modalWindow.append($(this));
         });

      }
   }

   function modalWindow(iconOnClass, modalWindowClass, closeWindow) {

      const $modalWindow = $('.' + modalWindowClass)

      $("." + iconOnClass).on('click', function (e) {
         e.preventDefault();
         $modalWindow.show(500);
         $(document).on('keyup', function (e) {
            if ((e.keyCode == 27) || (e.keyCode == 13)) {
               $modalWindow.hide(500);
            }
         });
         $(document).on('click', function (e) {
            let target = $(e.target);
            if (!target.is('.' + iconOnClass)
               && !target.is('.' + modalWindowClass + ' *:not([class="' + closeWindow + '"])')
               && !target.is('.' + modalWindowClass)
            ) {
               $modalWindow.hide(500);
            }
         });
      });
      return $modalWindow;
   }

})