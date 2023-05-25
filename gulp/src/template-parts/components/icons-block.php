<div class="icons-block">
   <?php global $restaurant_site_options; ?>
   <?php if ($restaurant_site_options['social_networks_fb-link']){ ?>
   <a href="<?php echo esc_url($restaurant_site_options['social_networks_fb-link']) ?>">
      <?php if ($restaurant_site_options['fb-link_icon']['url']){ ?>
      <img src="<?php echo esc_url($restaurant_site_options['fb-link_icon']['url']) ?>" alt="icon_facebook">
      <?php } else {?>
         <!-- demo_content -->
         <img src="<?php echo bloginfo('template_url')?> /assets/img/icon_facebook.png" alt="">
      <?php }?>
   </a>
   <?php }?>

   <?php if ($restaurant_site_options['social_networks_instagram-link']){ ?>
   <a href="<?php echo esc_url($restaurant_site_options['social_networks_instagram-link']) ?>">
      <?php if ($restaurant_site_options['social_networks_twitt_icon']['url']){ ?>
      <img src="<?php echo esc_url($restaurant_site_options['social_networks_twitt_icon']['url']) ?>"
         alt="icon_twitter">
      <?php } else {?>
         <!-- demo_content -->
         <img src="<?php echo bloginfo('template_url')?> /assets/img/icon_twitter.png" alt="">
      <?php }?>
   </a>



   <?php }?>

   <?php if ($restaurant_site_options['social_networks_twitt-link']){ ?>
   <a href="<?php echo esc_url($restaurant_site_options['social_networks_instagram-link']) ?>">
      <?php if ($restaurant_site_options['social_networks_instagram_icon']['url']){ ?>
      <img src="<?php echo esc_url($restaurant_site_options['social_networks_instagram_icon']['url']) ?>"
         alt="icon_instagram">
      <?php } else {?>
         <!-- demo_content -->
         <img src="<?php echo bloginfo('template_url')?> /assets/img/icon_instagram.png" alt="">
      <?php }?>
   </a>
   <?php }?>




</div>