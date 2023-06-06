<?php global $restaurant_site_options; ?>
<section class="conteiner opening-hours-conteiner">

   <div class="opening-hours-conteiner__row">
      <div class="opening-hours-conteiner__title">
         <h2><?php echo esc_html($restaurant_site_options['opening-hours_maine-title'],'restaurant-site') ?></h2>
      </div>

      <p>
         <?php echo esc_html($restaurant_site_options['opening-hours_title-1'],'restaurant-site') ?>
         <?php _e(wp_kses($restaurant_site_options['opening-hours_subtitle-1'], 'post'),'restaurant-site') ?>
      </p>
      <p>
         <?php echo esc_html($restaurant_site_options['opening-hours_title-2'],'restaurant-site') ?>
         <?php _e(wp_kses($restaurant_site_options['opening-hours_subtitle-2'], 'post'),'restaurant-site') ?>
      </p>
      <div class="wrap-img opening-hours-conteiner__wrap-img">
         <?php if ($restaurant_site_options['opening-hours_img']['url']) { ?>
            <img src="<?php echo esc_url($restaurant_site_options['opening-hours_img']['url']) ?>" alt="">
         <?php }?>
      </div>
   </div>

</section>