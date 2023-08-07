export const ajax_scripts = jQuery(document).ready(function ($) {

   const mainBlock = $('.menu-page-conteiner__row');
   const paginationBlock = '.pagination';

   let view_mod_0 = 'grid';
   let view_mod_1 = 'list';


   let fullUrl = window.location.pathname.split("/");
   let currentPage = fullUrl[fullUrl.length - 2];



   $('.select-view__colomns').on('click', function (e) {
      e.preventDefault();
      mainBlock.empty();
      let view_mod = $('.select-view__colomns>h3').text().toLowerCase();

      console.log("view_mod = ", view_mod);

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
            mainBlock.html(response);
            $(e.target).html((view_mod == view_mod_1) ? view_mod_0 : view_mod_1);
            $(paginationBlock) ? $(paginationBlock).css('visibility', 'visible') : null;
         },
         error: function (xhr, status, error) {
            // console.log('Ошибка при обновлении значения поля:', error);
         }
      });

   });






})