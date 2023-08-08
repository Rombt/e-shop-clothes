export const ajax_scripts = jQuery(document).ready(function ($) {

   const mainBlock = $('.menu-page-conteiner__row');
   const TempBlock = $('<div style="visibility: hidden;" class="menu-page-conteiner__row"></div>');;

   let view_mod_0 = 'grid';
   let view_mod_1 = 'list';

   let fullUrl = window.location.pathname.split("/");
   let currentPage = fullUrl[fullUrl.length - 2];

   let heightMainBlock;
   let animationParamsHide = {
      height: heightMainBlock + 'px',
      opacity: 0,
   };
   let animationParamsShow = {
      height: heightMainBlock + 'px',
      opacity: 1,
   };

   $('.select-view__colomns').on('click', function (e) {
      e.preventDefault();

      let view_mod = $('.select-view__colomns>h3').text().toLowerCase();
      $.ajax({
         url: rstrAppData.rstrAjaxURL,
         type: 'POST',
         data: {
            action: 'menu_page_view',
            nonce: rstrAppData.rstrAjaxNonce,
            view_mod: view_mod,
            paged: currentPage,
         },
         success: function (response) {
            $(e.target).html((view_mod == view_mod_1) ? view_mod_0 : view_mod_1);

            TempBlock.html(response);
            $('.menu-page-conteiner__row').append(TempBlock);
            heightMainBlock = TempBlock.height();
            TempBlock.remove();

            mainBlock.animate(animationParamsHide, {
               duration: 500,
               complete: function () {
                  mainBlock.empty();
               },
            });

            mainBlock.animate(animationParamsShow, {
               duration: 500,
               start: function () {
                  mainBlock.html(response);
               },
            });
         },
         error: function (xhr, status, error) {
            // console.log('Ошибка при обновлении значения поля:', error);
         }
      });
   });
})