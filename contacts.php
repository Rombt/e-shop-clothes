<?php
/* Template Name: Contact */
?>


<?php get_header(); ?>

<body>
   

   <div class="background background-contact-us">
      <div class="wrap-img"><picture><source srcset="img/background-contact-us.webp" type="image/webp"><img src="img/background-contact-us.jpg" alt=""></picture></div>
      <div class="conteiner">
         <div class="contact-us">
            <div class="contact-us__touch">
               <h2>Get in touch</h2>
               <form action="#" class="contact-us__form form">
                  <div class="form__input">
                     <picture><source srcset="img/form_icon_name.webp" type="image/webp"><img src="img/form_icon_name.png" alt=""></picture>
                     <p>Name*</p>
                     <input type="text">
                  </div>
                  <div class="form__input">
                     <picture><source srcset="img/form_icon_email.webp" type="image/webp"><img src="img/form_icon_email.png" alt=""></picture>
                     <p>Email*</p>
                     <input type="text">
                  </div>
                  <div class="form__input">
                     <picture><source srcset="img/form_icon_message.webp" type="image/webp"><img src="img/form_icon_message.png" alt="icon message"></picture>
                     <p>Message*</p>
                     <textarea name="mesage" id="mesage"></textarea>
                  </div>
               </form>
               <a href="#" class="button-orange ">send now</a>
            </div>
            <div class="contact-us__address">
               <h2>Our Address</h2>
               <div>
                  <h3>address</h3>
                  <p>Luxury Restaurent</p>
                  <p>California Second Street</p>
                  <p>2nd floor</p>
               </div>
               <div>
                  <h3>Phone</h3>
                  <a href="tel:+91855955856559">+91 8559 5585 6559</a>
               </div>
               <div>
                  <h3> Email</h3>
                  info@luxuryrestaurent.com
               </div>
               <div>
                  <h3>Follow us</h3>
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
            </div>
         </div>
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
                  <picture><source srcset="img/form-icon_email.webp" type="image/webp"><img src="img/form-icon_email.png" alt=""></picture>
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
   <picture><source srcset="img/icon_apple.webp" type="image/webp"><img src="img/icon_apple.png" alt=""></picture>
   <p>
      <span>Avilable&nbspon&nbspthe</span>
      App&nbspStore
   </p>
</a>
            <a href="#" class="button-app">
   <picture><source srcset="img/icon_google-play.webp" type="image/webp"><img src="img/icon_google-play.png" alt=""></picture>
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
   <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js?_v=20230510123753"></script>
   <script src="js/app.min.js?_v=20230510123753"></script>
</body>

</html>