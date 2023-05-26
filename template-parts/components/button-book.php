<?php global $restaurant_site_options; ?>

<a href="<?php echo $args['href'] ?>" class="heder-menu-button">
   <?php if ( $restaurant_site_options['icon_button_book']['url']) { ?>
      <img src="<?php echo esc_url($restaurant_site_options['icon_button_book']['url']) ?>" alt="icon button book">
   <?php }?>
   <?php echo $args['title'] ?>
</a>