<?php
/* Template Name: __404-page */
?>


<?php get_header(); ?>



<div class="background e404-page-background">

   <div class="conteiner e404-page">
      <div class="e404-page__title">

         <div class="wrap-img e404-page__img-404">
            <img src="img/404.jpg" alt="404">
         </div>

         <span>
            4
         </span>
         <!-- <div class="wrap-img e404-page__img-301x301"> -->
         <div class="wrap-img e404-page__wrap-img">
            <img src="img/Image_301x301.jpg" alt="e404 page">
         </div>
         <span>
            4
         </span>

      </div>
      <div class="e404-page__body">
         <h2>oops!!</h2>
         <p>the page you are looking for doesn't exit</p>
      </div>

      <a href="index.html" class="button-with-border">
   back to home page
</a>

   </div>




</div>





<div class="background background__footer">
   <div class="footer conteiner">
      <section class="footer__row">
         <div class="footer__navigation">
            <h2>Navigation</h2>
            <ul>
               <li><a href="#">Home</a></li>
               <li><a href="#">About us</a></li>
               <li><a href="#">Menu</a></li>
               <li><a href="#">Reservation</a></li>
               <li><a href="#">Recipe</a></li>
               <li><a href="#">Blog</a></li>
               <li><a href="#">Contact Us</a></li>
            </ul>
         </div>
         <div class="footer__news">
            <h2>News letter</h2>
            <span>Enter your email address and subscribe daily newsletter</span>
            <div class="form-footer">
               <div class="form-footer__input">
                  <img src="img/form-icon_email.png" alt="">
                  <p>Email Address</p>
                  <input type="email">
               </div>
               <a href="#" class="button-orange ">Subscribe</a>
            </div>
            <div class="icons-block">
   <?php if (class_exists('ReduxFramework') &&  $restaurant_site_options['social_networks_fb-link']){ ?>
   <a href="<?php echo esc_url($restaurant_site_options['social_networks_fb-link']) ?>">
      <?php if (class_exists('ReduxFramework') &&  $restaurant_site_options['fb-link_icon']['url']){ ?>
      <img src="<?php echo esc_url($restaurant_site_options['fb-link_icon']['url']) ?>" alt="icon_facebook">
      <?php }?>
   </a>
   <?php }?>

   <?php if (class_exists('ReduxFramework') &&  $restaurant_site_options['social_networks_instagram-link']){ ?>
   <a href="<?php echo esc_url($restaurant_site_options['social_networks_instagram-link']) ?>">
      <?php if (class_exists('ReduxFramework') &&  $restaurant_site_options['social_networks_twitt_icon']['url']){ ?>
      <img src="<?php echo esc_url($restaurant_site_options['social_networks_twitt_icon']['url']) ?>"
         alt="icon_twitter">
      <?php }?>
   </a>
   <?php }?>

   <?php if (class_exists('ReduxFramework') &&  $restaurant_site_options['social_networks_twitt-link']){ ?>
   <a href="<?php echo esc_url($restaurant_site_options['social_networks_instagram-link']) ?>">
      <?php if (class_exists('ReduxFramework') &&  $restaurant_site_options['social_networks_instagram_icon']['url']){ ?>
      <img src="<?php echo esc_url($restaurant_site_options['social_networks_instagram_icon']['url']) ?>"
         alt="icon_instagram">
      <?php }?>
   </a>
   <?php }?>




</div>
         </div>
         <div class="footer__app">
            <h2>Our app avilable</h2>
            <a href="#" class="button-app">
   <img src="img/icon_apple.png" alt="">
   <p>
      <span>Avilable&nbspon&nbspthe</span>
      App&nbspStore
   </p>
</a>
            <a href="#" class="button-app">
   <img src="img/icon_google-play.png" alt="">
   <p>
      <span>Get&nbspit&nbspon</span>
      Google&nbspPlay
   </p>
</a>
         </div>
      </section>
   </div>
   <div class="copyright-block">
      <span></span>
      <p>2016 © Luxury RestaurAnt, All rights reserved</p>
      <span></span>
   </div>
</div>



</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="js/app.min.js"></script>
</body>


</html>