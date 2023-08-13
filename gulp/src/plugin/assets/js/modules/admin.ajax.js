export const jQuery_scripts = jQuery(document).ready(function ($) {


   //"food-menu-items_show-food-menu"   checkbox  change event handler
   $(document).on('change', '.check-show-food-menu', function () {
      var postId = $(this).data('post-id');
      var fieldName = $(this).data('field-name');
      var checked = $(this).is(':checked');
      $.ajax({
         url: ajaxurl,
         type: 'POST',
         data: {
            // nonce: '',     *************
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

   //"food-menu-items_show-today-specialy"   checkbox  change event handler
   $(document).on('change', '.check-show-today-specialy', function () {


      var postId = $(this).data('post-id');
      var fieldName = $(this).data('field-name');
      var checked = $(this).is(':checked');
      $.ajax({
         url: ajaxurl,
         type: 'POST',
         data: {
            // nonce: '',     !!!!!!!!!!!
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

   //"our-clients_show-slider-happy-clients"   checkbox  change event handler
   $(document).on('change', '.check-show-slider-happy-clients', function () {

      var postId = $(this).data('post-id');
      var fieldName = $(this).data('field-name');
      var checked = $(this).is(':checked');
      $.ajax({
         url: ajaxurl,
         type: 'POST',
         data: {
            // nonce: '',     !!!!!!!!!!!
            action: 'update_custom_field',
            post_id: postId,
            field_name: fieldName,
            field_value: checked ? "show" : ""     // todo проеобразовать в PHP формат для хранения в базе данных
         },
         success: function (response) {
            // console.log('Значение поля успешно обновлено!');
         },
         error: function (xhr, status, error) {
            // console.log('Ошибка при обновлении значения поля:', error);
         }
      });
   });








   //"Recipes"   ingredient action
   $(document).on('click', '.add-button, .dell-ingredient', function (e) {
      var postId = $(this).data('post_id');
      var countInputs = $('.ingredient-input').length;


      if ($(this).attr("class") === "dell-ingredient") {
         var ingredientId = $(this).attr("id");
         var operation = 'dell';
         $(this).parent($(this)).remove();
      }


      $.ajax({
         url: ajaxurl,
         type: 'POST',
         data: {
            action: 'ingredient_action',
            nonce: $('#_ingredients_metabox').val(),
            post_id: postId,
            count: countInputs,
            operation: operation,
            ingredientId: ingredientId,
         },
         success: function (response) {
            $('.ingredient-block').append(response);
            $("#ingredient_" + countInputs).focus();
         },
         error: function (xhr, status, error) {
            // console.log('Ошибка при обновлении значения поля:', error);
         }
      });
   });












});