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
            field_value: checked ? "show" : ""
         },
         success: function (response) {
            // console.log('Значение поля успешно обновлено!');
         },
         error: function (xhr, status, error) {
            // console.log('Ошибка при обновлении значения поля:', error);
         }
      });
   });


   //"Recipes" action
   $('#rstr_recipe_mb').on('click keypress', IngredientOperation)
   function IngredientOperation(e) {

      let data = {};
      let targetButton = $(e.target);
      let TargetBlock = $(e.target).parents()[0];
      let classTargetBlock = $(TargetBlock).attr("class");
      let countInputs = $(`.${classTargetBlock} input`).length;

      data.nameTargetBlock = classTargetBlock.replace('-block', '');
      data.postId = targetButton.data('post_id');
      data.ingredientId = targetButton.attr("id");
      data.action = 'ingredient_action';
      data.nonce = $('#_ingredients_metabox').val();
      data.count = countInputs;

      if ($(targetButton).attr('class') === "dell-ingredient") {
         data.operation = 'dell';
         TargetBlock.remove();
      } else if ($(targetButton).attr('class') === "add-button") {
         data.operation = 'add';
      } else if ($(targetButton).attr('class') === "ingredient-input") {
         if (e.type == 'keypress') {

            if (e.which === 13) {
               data.operation = 'add';
               TargetBlock = $(e.target).parents()[1];
            }
         }
      }

      ajaxRecepes(data, TargetBlock);
   }

   function ajaxRecepes(data, TargetBlock) {
      $.ajax({
         url: ajaxurl,
         type: 'POST',
         data: data,
         success: function (response) {
            $(TargetBlock).append(response);
            $(`#${data.nameTargetBlock}_` + data.count).focus();
         },
         error: function (xhr, status, error) {
            // console.log('Ошибка при обновлении значения поля:', error);
         }
      });
   }





});