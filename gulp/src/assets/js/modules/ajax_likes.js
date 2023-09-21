export const ajax_scripts = jQuery(document).ready(function ($) {


   if ($('body').attr('class').split(' ').includes('blog')) {

      let actionWithLike = '';
      let likes = JSON.parse(localStorage.getItem("likes")) || [];
      let hearts = $('.like-img');

      hearts.each(function (index, heart) {
         const $heart = $(heart);

         likes.forEach(id_like => {
            if ($heart.data('post_id') == id_like) {
               $heart.find('>img').attr("src", rstrLikeIconImg.rstrLikeIconImgActive);
               $heart.css('visibility', 'visible')
            }
         });
         $heart.css('visibility', 'visible')
      });

      $('.like-img').on('click', function (e) {
         const $this = $(this);
         const postID = $this.data('post_id');
         const indexToDelete = likes.indexOf(postID);
         const blockLikesQautity = $this.parent().find('.article-icons-block__likes-amounth>p');

         if (indexToDelete !== -1) {
            likes.splice(indexToDelete, 1);
            $this.find('>img').attr("src", rstrLikeIconImg.rstrLikeIconImgPasive);
            actionWithLike = 'del';
         } else {
            likes.push(postID);
            $this.find('>img').attr("src", rstrLikeIconImg.rstrLikeIconImgActive);
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

      // проверить зарегтстрирован ли пользователь
      // если нет вывести окно с предложнением зарегистрироватся и ссылкай на страницу регестрации




      $('.wrap-img').on('click', function (e) {

         const $this = $(this);
         const blockStars = $this.parent();
         const postID = blockStars.data('post_id');
         const arr_stars = blockStars.find('.wrap-img > img');
         const starIndex = arr_stars.index($this.find('img'));
         const rating = starIndex + 1;


         $.ajax({
            url: rstrAppData.rstrAjaxURL,
            type: 'POST',
            data: {
               action: 'recipes_page_stars',
               nonce: rstrStarIconImg.rstrAjaxNonceStar,
               rating: rating,
               postID: postID,
            },
            success: function (response) {

               if (response === 'unregUser') {

                  confirm('You must register');    // todo  модальное окно с формой регестрации пользователя
                  return;
               }
               let arr_quantityStars = JSON.parse(localStorage.getItem("quantityStars")) || [];
               const indexToUpdate = arr_quantityStars.findIndex(item => item.hasOwnProperty(postID));
               let updated = false;
               arr_stars.each((index, element) => {
                  const $element = $(element);

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
                     (indexToUpdate !== -1) ? arr_quantityStars[indexToUpdate][postID] = rating : null;
                  }
                  else if ($element.data('status') === 'active' && starIndex == 0 && arr_quantityStars[indexToUpdate][postID] == 1) {
                     $element.attr('src', rstrStarIconImg.rstrStarIconImgPasive);
                     $element.data('status', 'pasive');
                  }
               });



            },
            error: function (xhr, status, error) {
               // console.log('Ошибка при обновлении значения поля:', error);
            }
         });

      });

   }



})





