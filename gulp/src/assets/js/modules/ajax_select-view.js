export const ajax_scripts = jQuery(document).ready(function ($) {

   let mainBlock;
   let TempBlock;

   let view_mod_0;
   let view_mod_1;
   let view_mod;

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

   $('.select-view').on('click', function (e) {
      e.preventDefault();
      let typePage = $('.select-view').children().first().attr('class');

      if (typePage == 'select-view__recipes-page') {
         view_mod_0 = '2_columns';
         view_mod_1 = '3_columns';
         view_mod = $('.select-view__recipes-page>h3').text().toLowerCase().replace(/ /g, '_');

         mainBlock = $('.recipes-page-conteiner__row');
         TempBlock = $('<div style="visibility: hidden;" class="recipes-page-conteiner__row"></div>');

      } else if (typePage == 'select-view__menu-page') {
         view_mod_0 = 'grid';
         view_mod_1 = 'list';
         view_mod = $('.select-view__menu-page>h3').text().toLowerCase();

         mainBlock = $('.menu-page-conteiner__row');
         TempBlock = $('<div style="visibility: hidden;" class="menu-page-conteiner__row"></div>');
      }

      $.ajax({
         url: rstrAppData.rstrAjaxURL,
         type: 'POST',
         data: {
            action: 'menu_page_view',
            nonce: rstrAppData.rstrAjaxNonce,
            view_mod: view_mod,
            paged: currentPage,
            type_page: typePage,
         },
         success: function (response) {
            $(e.target).html((view_mod == view_mod_1) ? view_mod_0.replace(/_/g, ' ') : view_mod_1.replace(/_/, ' '));
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