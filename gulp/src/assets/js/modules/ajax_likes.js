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

      $('.wrap-img').on('click', function (e) {
         const $this = $(this);
         const blockStars = $this.parent();
         const postID = blockStars.data('post_id');
         const arr_stars = blockStars.find('.wrap-img > img');
         const starIndex = arr_stars.index($this.find('img'));

         let rating = starIndex + 1;
         let ratings = JSON.parse(localStorage.getItem("ratings")) || {};
         let oldRating = ratings[postID];
         let d_Rating = 0;
         let UserHasRated = false;

         if ($this.find('img').data('status') === 'active' && starIndex == 0 && $(arr_stars[1]).data('status') === 'pasive') {
            rating = starIndex;
         }

         if (typeof oldRating === 'undefined') {      // если это первая оценка этого пользователя
            UserHasRated = true;
            d_Rating = rating
         } else {
            d_Rating = rating - oldRating;
         }

         $.ajax({
            url: rstrAppData.rstrAjaxURL,
            type: 'POST',
            data: {
               action: 'recipes_page_stars',
               nonce: rstrStarIconImg.rstrAjaxNonceStar,
               d_rating: d_Rating,
               UserHasRated: UserHasRated,
               postID: postID,
            },
            success: function (response) {
               response = JSON.parse(response);
               if (response === 'unregUser') {
                  confirm('You must register');    // todo  модальное окно с формой регестрации пользователя
                  return;
               };

               if (response.hasOwnProperty('rating')) {

                  ratings[postID] = rating;

                  localStorage.setItem("ratings", JSON.stringify(ratings));
                  const indexToUpdate = response.rating;

                  arr_stars.each((index, element) => {
                     const $element = $(element);

                     if (index >= rstrStarIconImg.rstrQuantityRatingStars) {
                        return;
                     }

                     if ($element.data('status') === 'pasive' && index <= starIndex) {
                        $element.attr('src', rstrStarIconImg.rstrStarIconImgActive);
                        $element.data('status', 'active');
                     } else if ($element.data('status') === 'active' && index > starIndex) {
                        $element.attr('src', rstrStarIconImg.rstrStarIconImgPasive);
                        $element.data('status', 'pasive');
                     }
                     else if ($element.data('status') === 'active' && starIndex == 0 && (indexToUpdate <= 1)) {
                        $element.attr('src', rstrStarIconImg.rstrStarIconImgPasive);
                        $element.data('status', 'pasive');
                     }
                  });
               }
            },
            error: function (xhr, status, error) {
               // console.log('Ошибка при обновлении значения поля:', error);
            }
         });

      });

   }



})





