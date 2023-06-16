export const jQuery_scripts = jQuery(document).ready(function ($) {
   $(".search-icon").on('click', function (e) {
      e.preventDefault();
      $('.searc-modal').show(500);
      $(document).on('keyup', function (e) {
         if ((e.keyCode == 27) || (e.keyCode == 13)) {
            $('.searc-modal').hide(500);
         }
      });

      $(document).on('click', function (e) {
         if (($('.searc-modal').css('display') === 'block')
            && (!e.target.className.includes('searc-modal'))
            && (!e.target.className.includes('search-icon'))
            && (e.target.id != 's')) {
            $('.searc-modal').hide(500);
         }
      });

      $(".close-window").on('click', function (e) {
         $('.searc-modal').hide(500);
      });

   });


})