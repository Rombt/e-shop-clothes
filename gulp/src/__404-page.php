<?php
/* Template Name: __404-page */
?>


<?php get_header(); ?>



<div class="background e404-page-background">

   <div class="conteiner e404-page">
      <div class="e404-page__title">

         <div class="wrap-img e404-page__img-404">
            <img src="@img/404.jpg" alt="404">
         </div>

         <span>
            4
         </span>
         <!-- <div class="wrap-img e404-page__img-301x301"> -->
         <div class="wrap-img e404-page__wrap-img">
            <img src="@img/Image_301x301.jpg" alt="e404 page">
         </div>
         <span>
            4
         </span>

      </div>
      <div class="e404-page__body">
         <h2>oops!!</h2>
         <p>the page you are looking for doesn't exit</p>
      </div>

      @@include('html/parts/button-with-border.html',{
      'title':'back to home page',
      'href':'index.html',
      })

   </div>




</div>





@@include('html/footer.html',{})
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="js/app.min.js"></script>
</body>


</html>