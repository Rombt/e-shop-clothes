export const ajax_scripts = jQuery(document).ready(function ($) {

   const mainBlock = $('.menu-page-conteiner__row');
   const paginationBlock = '.pagination';

   let view_mod_0 = 'grid';
   let view_mod_1 = 'list';

   let fullUrl = window.location.pathname.split("/");
   let currentPage = fullUrl[fullUrl.length - 2];

   // let heightMainBlock = mainBlock.height();
   // mainBlock.css('height', heightMainBlock);


   $('.select-view__colomns').on('click', function (e) {
      e.preventDefault();


      mainBlock.fadeOut(400, function () {
         mainBlock.empty();
         mainBlock.fadeIn(400);
      });


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


            // mainBlock.slideUp(400, function () {
            // mainBlock.slideDown();

            // });
            mainBlock.fadeOut(400, function () {
               mainBlock.fadeIn(400);
               mainBlock.html(response);
            });


            // $(paginationBlock) ? $(paginationBlock).css('visibility', 'visible') : null;
         },
         error: function (xhr, status, error) {
            // console.log('Ошибка при обновлении значения поля:', error);
         }
      });

   });






})