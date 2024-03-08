<?php global $restaurant_site_options; ?>

<a href="<?php echo $args['href'] ?>" class="heder-menu-button">
   <?php if (rstr_get_pic_url('icon_button_book')) { ?>
      <img src="<?php echo rstr_get_pic_url('icon_button_book') ?>" alt="icon button book">
   <?php } ?>
   <?php echo $args['title'] ?>
</a>