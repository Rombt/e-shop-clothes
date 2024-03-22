jQuery(document).ready(function ($) {
  // hiding the metaboxies block
  $('#rstr_recipe_mb .handlediv').on('click', function () {
    $('#rstr_recipe_mb .inside').slideToggle(500);
  });
});
