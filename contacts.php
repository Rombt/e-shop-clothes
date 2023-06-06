<?php
/* Template Name: Contact */
?>


<?php get_header(); ?>

<body>
   

   <div class="background background-contact-us">
      <div class="wrap-img"><img src="img/background-contact-us.jpg" alt=""></div>
      <div class="conteiner">
         <div class="contact-us">
            <div class="contact-us__touch">
               <h2>Get in touch</h2>
               <form action="#" class="contact-us__form form">
                  <div class="form__input">
                     <img src="img/form_icon_name.png" alt="">
                     <p>Name*</p>
                     <input type="text">
                  </div>
                  <div class="form__input">
                     <img src="img/form_icon_email.png" alt="">
                     <p>Email*</p>
                     <input type="text">
                  </div>
                  <div class="form__input">
                     <img src="img/form_icon_message.png" alt="icon message">
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






<?php get_footer();?>