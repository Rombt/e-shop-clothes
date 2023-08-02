export const ajax_scripts = jQuery(document).ready(function ($) {

   // Обработчик события клика по кнопке
   $('.select-view__colomns').on('click', function () {



      var templatePart = $(this).data('template-part'); // Получение имени шаблона из атрибута data

      // AJAX-запрос на сервер
      $.ajax({
         url: ajaxurl, // Специальная переменная WordPress, содержащая URL для AJAX-обработчика
         type: 'post',
         data: {
            action: 'load_template_part', // Название вашего AJAX-обработчика на сервере
            template_part: templatePart // Передача имени шаблона на сервер
         },
         success: function (response) {
            // Обновление содержимого контейнера на странице
            $('#template-container').html(response);
         },
         error: function (errorThrown) {
            console.log(errorThrown); // Обработка ошибок (если есть)
         }
      });
   });




})