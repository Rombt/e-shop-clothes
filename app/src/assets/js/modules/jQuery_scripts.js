
export const jQuery_scripts = jQuery(document).ready(function ($) {

   multilevelHeaderMenu();

   accordionMenu('#footer-menu', '.sub-menu')

   paginationAdaptive();

   modalWindow('recipes-title-nav__burger', 'menu-recipes', '');



   //---------------------- funktions ---------------------

   function paginationAdaptive() {


      let PaginationBlock = $('.rstr-pagination');
      if (PaginationBlock.children('.page-numbers').length == 0 || PaginationBlock.css("visibility", "hidden")) {
         return false;
      }
      let WidthPaginationBTN = PaginationBlock.children('.page-numbers')[0].offsetWidth;
      let AllPaginationBTN = PaginationBlock.children('.page-numbers').length;
      let PaginationBTNs = PaginationBlock.children('.page-numbers')
      let indexCurrentPaginationBTN = PaginationBlock.children('.page-numbers').index($('.page-numbers.current'));
      let GupNexAndCurrentPaginationBTN;
      let amounthVisiblePaginationBTN;
      let widthPaginationBlock;

      if ($('.page-numbers.current').next().position() == undefined) {
         GupNexAndCurrentPaginationBTN = $('.page-numbers.current').position().left - $('.page-numbers.current').prev().position().left - WidthPaginationBTN;
      } else {
         GupNexAndCurrentPaginationBTN = $('.page-numbers.current').next().position().left - $('.page-numbers.current').position().left - WidthPaginationBTN;
      }

      updatePaginationBTN();
      $(window).resize(updatePaginationBTN);

      function updatePaginationBTN() {
         PaginationBTNs.detach();

         widthPaginationBlock = PaginationBlock.width();
         amounthVisiblePaginationBTN = Math.floor((widthPaginationBlock + GupNexAndCurrentPaginationBTN) / (WidthPaginationBTN + GupNexAndCurrentPaginationBTN) / 2);

         let VisiblePaginationBTNs = PaginationBTNs.map(function (index, elem) {
            if (
               index == 0 ||
               index == indexCurrentPaginationBTN ||
               index == AllPaginationBTN - 1 ||
               (index > indexCurrentPaginationBTN - amounthVisiblePaginationBTN + 1 && index < indexCurrentPaginationBTN + amounthVisiblePaginationBTN)
            ) {
               return elem;
            }
         });

         PaginationBlock.append(VisiblePaginationBTNs);
         PaginationBlock.css('visibility', 'visible');

      }
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
      } else if ($('#heder-menu > ul').length < 4) {
         $('#heder-menu > ul').css("justify-content", "flex-start");
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