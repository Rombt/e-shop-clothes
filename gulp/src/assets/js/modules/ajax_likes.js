export const ajax_scripts = jQuery(document).ready(function ($) {


   if (!$('body').attr('class').split(' ').includes('blog')) {
      return;
   }

   // rstrLikeIconImg.rstrLikeIconImgActive
   // rstrLikeIconImg.rstrLikeIconImgPasive

   const arr_likesImg = $('.like-img');
   let postID;
   arr_likesImg.each(function () {
      postID = $(this).data('post_id');
      console.log("postID = ", postID);

      if (getCookie(`like-${postID}`)) {

         $(this).find('>img').attr("src", rstrLikeIconImg.rstrLikeIconImgActive);
      };

   });



   $('').on('click', function (e) {
      e.preventDefault();


      $.ajax({
         url: rstrAppData.rstrAjaxURL,
         type: 'POST',
         data: {
            action: 'blog_page_likes',
            nonce: '',
         },
         success: function (response) {

         },
         error: function (xhr, status, error) {
            // console.log('Ошибка при обновлении значения поля:', error);
         }
      });
   });


   function getCookie(name) {
      let matches = document.cookie.match(new RegExp(
         "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
      ));
      return matches ? decodeURIComponent(matches[1]) : undefined;
   }
})