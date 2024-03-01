<?php global $restaurant_site_options; ?>

<a href="<?php echo $args['href'] ?>" class="heder-menu-button">
   <?php if (class_exists('ReduxFramework') &&  $restaurant_site_options['icon_button_book']['url']) { ?>
      <img src="<?php echo esc_url(get_template_directory_uri()) . $restaurant_site_options['icon_button_book']['url'] ?>" alt="icon button book">
   <?php } ?>
   <?php echo $args['title'] ?>
</a>