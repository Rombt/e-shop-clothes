export const jQuery_scripts = jQuery(document).ready(function ($) {


   //"food-menu-items_show-food-menu"   checkbox  change event handler
   $(document).on('change', '.check-show-food-menu', function () {
      let postId = $(this).data('post-id');
      let fieldName = $(this).data('field-name');
      let checked = $(this).is(':checked');
      let nonce = $('#_rstr_show-food-menu_metabox').val();

      $.ajax({
         url: ajaxurl,
         type: 'POST',
         data: {
            nonce: nonce,
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
      let postId = $(this).data('post-id');
      let fieldName = $(this).data('field-name');
      let checked = $(this).is(':checked');
      let nonce = $('#_rstr_show-today-specialy_metabox').val();
      $.ajax({
         url: ajaxurl,
         type: 'POST',
         data: {
            nonce: nonce,
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

      let postId = $(this).data('post-id');
      let fieldName = $(this).data('field-name');
      let checked = $(this).is(':checked');
      let nonce = $('#_rstr_show-our-clients_metabox').val();
      $.ajax({
         url: ajaxurl,
         type: 'POST',
         data: {
            nonce: nonce,
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
      let TargetBlock;
      let classTargetBlock;

      data.postId = targetButton.data('post_id');
      data.action = 'ingredient_action';
      data.nonce = $('#_ingredients_metabox').val();


      if ($(targetButton).attr('class') === "dell-ingredient") {
         data.ingredientId = targetButton.attr("id");
         data.operation = 'dell';
         TargetBlock = $(e.target).parents()[0];
         TargetBlock.remove();
         ajaxRecepes(data, TargetBlock);
      } else if ($(targetButton).attr('class') === "add-button") {
         data.operation = 'add';
         TargetBlock = $(e.target).parents()[0];
         classTargetBlock = $(TargetBlock).attr("class");
         data.nameTargetBlock = classTargetBlock.replace('-block', '');
         data.count = $(`.${classTargetBlock} .ingredient-input`).length;
         data.objAdditionalFields = $(`.${classTargetBlock} .additional-field`).map(function () {
            const start = this.id.lastIndexOf('_');
            return this.id.slice(0, start)
         }).get();
         ajaxRecepes(data, TargetBlock);
      } else if ($(targetButton).attr('class') === "ingredient-input" || $(targetButton).attr('class') === "additional-field") {
         if (e.type == 'keypress') {

            if (e.which === 13) {
               data.operation = 'add';
               TargetBlock = $(e.target).parents()[1];
               classTargetBlock = $(TargetBlock).attr("class");
               data.nameTargetBlock = classTargetBlock.replace('-block', '');
               data.count = $(`.${classTargetBlock} .ingredient-input`).length;
               data.objAdditionalFields = $(`.${classTargetBlock} .additional-field`).map(function () {
                  const start = this.id.lastIndexOf('_');
                  return this.id.slice(0, start)
               }).get();
            }
         }

         ajaxRecepes(data, TargetBlock);
      }
   }

   function ajaxRecepes(data, TargetBlock) {
      $.ajax({
         url: ajaxurl,
         type: 'POST',
         data: data,
         dataType: "html",

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