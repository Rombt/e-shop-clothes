
export const jQuery_scripts = jQuery(document).ready(function ($) {

   multilevelHeaderMenu();






   //---------------------- funktions ---------------------

   function multilevelHeaderMenu() {
      // search modal window
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