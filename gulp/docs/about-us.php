<?php
/* Template Name: About us */
?>


<?php get_header(); ?>




<main>
   <section class="conteiner history-blok">
      <div class="history-blok__row">
         <div class="history-blok__title">
            <h2>Our History</h2>
         </div>
         <div class="history-blok__text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, quam! Dolor dolores veniam natus
            doloribus
            ducimus doloremque iure odio dolore a quod! Qui aliquam cumque voluptatum accusamus ipsam numquam
            repudiandae dicta, ad est iste sit tempore debitis laboriosam exercitationem porro perspiciatis adipisci
         </div>
         <div class="video-blok-history">
            <figure class="wrap-video wrap-img">
               <!-- Вставляем видео при помощи тега video -->
               <!-- <video src="video.mp4" controls></video> -->
               <img src="img/video-blok-history-img.jpg" alt="video blok history">
            </figure>
            <div class="video-blok-history__description">
               Our hotel video
            </div>
         </div>
      </div>
   </section>
   <div class="background background-cooks">
      <div class="wrap-img background-cooks__img">
         <img src="img/background-cooks.jpg" alt="background cooks">
      </div>
      <section class="conteiner cooks">
         <h2 class="cooks__title"> Our Cooks </h2>
         <div class="swiper swiper-cooks">
            <!-- Slider main container -->
            <div class="swiper-wrapper">
               <!-- Additional required wrapper -->
               <div class="swiper-slide swiper-cooks__card">
                  <div class="wrap-img swiper-cooks__img">
                     <img src="img/Image_270x263.jpg" alt="">
                  </div>
                  <span>Cheff. John cliff</span>
               </div>
               <div class="swiper-slide swiper-cooks__card">
                  <div class="wrap-img swiper-cooks__img">
                     <img src="img/Image_270x263.jpg" alt="">
                  </div>
                  <span>Cheff. peter vasko</span>
               </div>
               <div class="swiper-slide swiper-cooks__card">
                  <div class="wrap-img swiper-cooks__img">
                     <img src="img/Image_270x263.jpg" alt="">
                  </div>
                  <span>Cheff. Mariya thomas</span>
               </div>
               <div class="swiper-slide swiper-cooks__card">
                  <div class="wrap-img swiper-cooks__img">
                     <img src="img/Image_270x263.jpg" alt="">
                  </div>
                  <span>Cheff. james dico</span>
               </div>
               <div class="swiper-slide swiper-cooks__card">
                  <div class="wrap-img swiper-cooks__img">
                     <img src="img/Image_270x263.jpg" alt="">
                  </div>
                  <span>Cheff. james dico</span>
               </div>
               <div class="swiper-slide swiper-cooks__card">
                  <div class="wrap-img swiper-cooks__img">
                     <img src="img/Image_270x263.jpg" alt="">
                  </div>
                  <span>Cheff. james dico</span>
               </div>
               <div class="swiper-slide swiper-cooks__card">
                  <div class="wrap-img swiper-cooks__img">
                     <img src="img/Image_270x263.jpg" alt="">
                  </div>
                  <span>Cheff. james dico</span>
               </div>
            </div>
            <div class="swiper-pagination swiper-cooks__pagination"></div>
         </div>
      </section>
   </div>
</main>
<section class="background speciality-block">
   <figure class="wrap-img speciality-block__img"><img src="img/speciality-block.jpg" alt=""></figure>
   <div class="speciality-block__text-wrap speciality-block-cooks-page">
      <h2>Speciality</h2>
      <div class="speciality-block__text">
         <h3>EXCELLENT SERVICE</h3>
         <p>Survived not only five centuries, but also the leap into electr</p>
      </div>
      <div class="speciality-block__text">
         <h3>FREE Home DELIVERY</h3>
         <p>Lorem Ipsum is simply dummy text of the printing and typesettin</p>
      </div>
      <div class="speciality-block__text">
         <h3>Cool atmosphere</h3>
         <p>Letraset sheets containing Lorem Ipsum passages, and more recen</p>
      </div>
   </div>
</section>
<section class="conteiner opening-hours-conteiner">

   <div class="opening-hours-conteiner__row">
      <div class="opening-hours-conteiner__title">
         <h2>Opening Hours</h2>
      </div>

      <p>
         Monday to Friday
         <span>10am - 10pm</span>
      </p>
      <p>
         Saturday to Sunday
         <span>09am - 11pm</span>
      </p>
      <div class="wrap-img opening-hours-conteiner__wrap-img">
         <img src="img/Image_210x210.jpg" alt="">
      </div>
   </div>

</section>
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
   <?php if ($restaurant_site_options['social_networks_fb-link']){ ?>
   <a href="<?php echo esc_url($restaurant_site_options['social_networks_fb-link']) ?>">
      <?php if ($restaurant_site_options['fb-link_icon']['url']){ ?>
      <img src="<?php echo esc_url($restaurant_site_options['fb-link_icon']['url']) ?>" alt="icon_facebook">
      <?php }?>
   </a>
   <?php }?>

   <?php if ($restaurant_site_options['social_networks_instagram-link']){ ?>
   <a href="<?php echo esc_url($restaurant_site_options['social_networks_instagram-link']) ?>">
      <?php if ($restaurant_site_options['social_networks_twitt_icon']['url']){ ?>
      <img src="<?php echo esc_url($restaurant_site_options['social_networks_twitt_icon']['url']) ?>"
         alt="icon_twitter">
      <?php }?>
   </a>
   <?php }?>

   <?php if ($restaurant_site_options['social_networks_twitt-link']){ ?>
   <a href="<?php echo esc_url($restaurant_site_options['social_networks_instagram-link']) ?>">
      <?php if ($restaurant_site_options['social_networks_instagram_icon']['url']){ ?>
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



<?php get_footer(); ?>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="js/app.min.js"></script>
</body>

</html>