export const ajax_cartCountUpdate = jQuery(document).ready(function ($) {
  $(document).ajaxComplete(function (event, xhr, settings) {
    if (settings.data.includes('update_cart')) {
      $.ajax({
        url: rstrAppData.rstrAjaxURL,
        type: 'POST',
        data: {
          action: 'cart_count_update',
          cartCountUpdate: true,
        },
        success: function (response) {
          $('.cart__cercle').html(response);
        },
        error: function (xhr, status, error) {
          // console.log('Ошибка при обновлении значения поля:', error);
        },
      });
    }
  });
});
