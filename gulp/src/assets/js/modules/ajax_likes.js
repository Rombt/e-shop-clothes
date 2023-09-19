export const ajax_scripts = jQuery(document).ready(function ($) {


   if ($('body').attr('class').split(' ').includes('blog')) {

      let postID;
      let indexToDelete;
      let blockLikesQautity;
      let actionWithLike = '';
      let likes = JSON.parse(localStorage.getItem("likes")) || [];
      let hearts = $('.like-img');

      hearts.each(function (index, heart) {
         likes.forEach(id_like => {
            if ($(heart).data('post_id') == id_like) {
               $(heart).find('>img').attr("src", rstrLikeIconImg.rstrLikeIconImgActive);
               $(heart).css('visibility', 'visible')
            }
         });
         $(heart).css('visibility', 'visible')
      });

      $('.like-img').on('click', function (e) {
         blockLikesQautity = $(this).parent().find('.article-icons-block__likes-amounth>p');
         postID = $(this).data('post_id');

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
               $(blockLikesQautity).html(response);
            },
            error: function (xhr, status, error) {
               // console.log('Ошибка при обновлении значения поля:', error);
            }
         });

      });

   }



   if ($('body').attr('class').split(' ').includes('recipes-template-default')
      || $('body').attr('class').split(' ').includes('post-type-archive-recipes')
   ) {


      console.log("***********");

   }



})