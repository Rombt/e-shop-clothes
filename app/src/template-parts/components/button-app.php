<a href="<?php echo $args['href'] ?>" class="button-app">
      <?php if ($args['icon']) { ?>
            <img src="<?php echo esc_url($args['icon']) ?>" alt="">
      <?php }?>
   <p>
      <span><?php echo $args['text'] ?></span>
      <?php echo $args['title'] ?>
   </p>
</a>