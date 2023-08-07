export const ajax_scripts = jQuery(document).ready(function ($) {

   const mainBlock = $('.menu-page-conteiner__row');
   // const toggleBlock = $('.select-view__colomns');


   let view_mod = 'grid';


   $('.select-view__colomns').on('click', function (e) {
      e.preventDefault();
      view_mod = (view_mod == 'grid') ? 'list' : 'grid';

      mainBlock.empty();




      $.ajax({
         url: rstrAppData.rstrAjaxURL,
         type: 'POST',
         data: {
            action: 'menu_page_view',
            nonce: rstrAppData.rstrAjaxNonce,
            view_mod: view_mod,
         },
         success: function (response) {
            mainBlock.html(response);
            $(e.target).html(view_mod);

         },
         error: function (xhr, status, error) {
            // console.log('Ошибка при обновлении значения поля:', error);
         }
      });





   });






})