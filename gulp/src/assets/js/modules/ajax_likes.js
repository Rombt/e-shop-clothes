export const ajax_scripts = jQuery(document).ready(function ($) {


   if (!$('body').attr('class').split(' ').includes('blog')) {
      return;
   }

   let likes = [];
   let postID;
   let indexToDelete;
   let actionWithLike = '';

   $('.like-img').on('click', function (e) {
      // e.preventDefault();
      postID = $(this).data('post_id');
      likes = JSON.parse(localStorage.getItem("likes")) || [];
      indexToDelete = likes.indexOf(postID);
      if (indexToDelete !== -1) {
         likes.splice(indexToDelete, 1);
         $(this).find('>img').attr("src", rstrLikeIconImg.rstrLikeIconImgPasive);
         actionWithLike = 'del';
      } else {
         likes.push(postID);
         $(this).find('>img').attr("src", rstrLikeIconImg.rstrLikeIconImgActive);
         actionWithLike = 'add';
      }
      localStorage.setItem("likes", JSON.stringify(likes));

      $.ajax({
         url: rstrAppData.rstrAjaxURL,
         type: 'POST',
         data: {
            action: 'blog_page_likes',
            nonce: rstrLikeIconImg.rstrAjaxNonceLike,
            actionWithLike: actionWithLike,
            postID: postID,
         },
         success: function (response) {

         },
         error: function (xhr, status, error) {
            // console.log('Ошибка при обновлении значения поля:', error);
         }
      });

   });






})