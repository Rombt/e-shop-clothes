

jQuery(document).ready(function ($) {

   //"food-menu-items_show-in-front-page"   checkbox  change event handler
   $(document).on('change', '.check-show-in-front-page', function () {
      var postId = $(this).data('post-id');
      var fieldName = $(this).data('field-name');
      var checked = $(this).is(':checked');
      $.ajax({
         url: ajaxurl,
         type: 'POST',
         data: {
            action: 'update_custom_field',
            post_id: postId,
            field_name: fieldName,
            field_value: checked ? 'show' : ''
         },
         success: function (response) {
            // console.log('Значение поля успешно обновлено!');
         },
         error: function (xhr, status, error) {
            // console.log('Ошибка при обновлении значения поля:', error);
         }
      });
   });
});