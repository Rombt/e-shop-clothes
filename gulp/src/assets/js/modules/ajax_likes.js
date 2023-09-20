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



   if ($('body').hasClass('recipes-template-default') || $('body').hasClass('post-type-archive-recipes')) {





      let arr_quantityStars = JSON.parse(localStorage.getItem("quantityStars")) || [];

      $('.wrap-img').on('click', function (e) {

         let postID = $(this).parent().data('post_id');
         let arr_stars = $(this).parent().find('.wrap-img > img');
         let starIndex = arr_stars.index($(this).find('img'));
         let rating = starIndex + 1;

         let indexToUpdate = arr_quantityStars.findIndex(item => item.hasOwnProperty(postID));
         let updated = false;

         arr_stars.each((index, element) => {
            let $element = $(element);

            if ($element.data('status') === 'pasive' && index <= starIndex) {
               $element.attr('src', rstrStarIconImg.rstrStarIconImgActive);
               $element.data('status', 'active');

               if (!updated) {
                  updated = true;
                  if (indexToUpdate !== -1) {
                     arr_quantityStars[indexToUpdate][postID] = rating;
                  } else {
                     arr_quantityStars.push({ [postID]: rating });
                  }
               }
            } else if ($element.data('status') === 'active' && index > starIndex) {
               $element.attr('src', rstrStarIconImg.rstrStarIconImgPasive);
               $element.data('status', 'pasive');

               if (indexToUpdate !== -1) {
                  arr_quantityStars[indexToUpdate][postID] = rating;
               }

            } else if ($element.data('status') === 'active' && starIndex == 0) {    // !!!!!!!!!!  клик по первой активной звезде должен делать её пасивной

               $element.attr('src', rstrStarIconImg.rstrStarIconImgPasive);
               $element.data('status', 'pasive');

               console.log("**starIndex = ", starIndex);
            }
         });

         localStorage.setItem("quantityStars", JSON.stringify(arr_quantityStars));
      });
   }



})





