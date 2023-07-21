<?php global $restaurant_site_options; ?>
<?php

if (class_exists('ACF')) {

    $params = [
         'post_type' => 'our-clients',
         'posts_per_page' => -1,
         'meta_query'     => [
            'relation' => 'OR',
            [
                  'key'     => 'our-clients_show-slider-happy-clients',
                  'value'   => 'a:1:{i:0;s:4:"show";}',
                  'compare' => 'LIKE',
            ],
            [
                  'key'     => 'our-clients_show-slider-happy-clients',
                  'value'   => 'show',
                  'compare' => 'LIKE',
            ],
         ],
     ];

} else {
    $params = [
       'post_type' => 'our-clients',
       'posts_per_page' => 4,
    ];
}
$query_Our_clients = new WP_Query($params);
?>


<div class="background background__clients">
   <div class="wrap-img background-clients__wrap-img">
      <?php if ($restaurant_site_options['clients-section_background_img']['url']) { ?>
            <img src="<?php echo esc_url($restaurant_site_options['clients-section_background_img']['url']) ?>" alt="">
      <?php }?>
   </div>

   <section class="conteiner" id="clients">
      <h2 class="slide-body__title"><?php _e($restaurant_site_options['clients-section_title'], 'restaurant-site') ?></h2>
      <div class="swiper swiper-clients">
         <div class="swiper-wrapper  clients__swiper-wrapper">
            
         <?php if ($query_Our_clients->have_posts()) {
             while ($query_Our_clients->have_posts()) {
                 $query_Our_clients->the_post();?>

               <div class="swiper-slide">
                  <div class="slide-body">
                     <div class="slide-body__text">
                        <?php echo rstr_trim_excerpt(50) ?>
                     </div>
                     
                     <div class="wrap-img slide-body__client-avatar">
                        <?php echo get_the_post_thumbnail($id, 'thumbnail'); ?>
                     </div>
                     
                     <div class="name">
                        <?php echo the_title(); ?>
                     </div>
                     <div class="rating">
                        <img src="@img/star-rating-icon.png" alt="">
                        <img src="@img/star-rating-icon.png" alt="">
                        <img src="@img/star-rating-icon.png" alt="">
                        <img src="@img/star-rating-icon.png" alt="">
                        <img src="@img/star-rating-icon.png" alt="">
                     </div>
                  </div>
               </div>
         <?php
             }
             wp_reset_postdata();
         } else {
             // something
         }
?>


         </div>
         <div class="swiper-button-next swiper-clients__button-next"></div>
         <div class="swiper-button-prev swiper-clients__button-prev"></div>
      </div>
   </section>
</div>