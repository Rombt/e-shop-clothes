export const ajax_scripts = jQuery(document).ready(function ($) {

   const mainBlock = $('.menu-page-conteiner__row')


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
            view_mod: view_mod,
         },
         success: function (response) {
            mainBlock.html(response);

         },
         error: function (xhr, status, error) {
            // console.log('Ошибка при обновлении значения поля:', error);
         }
      });





   });






})