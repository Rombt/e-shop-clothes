<?php global $restaurant_site_options;?>
<?php


if (class_exists('ACF')) {

    $params = [
       'post_type' => 'food-menu-items',
       'posts_per_page' => -1,
          'meta_query'     => [
             'relation' => 'OR',
             [
                   'key'     => 'food-menu-items_show-in-food-menu',
                   'value'   => 'a:1:{i:0;s:4:"show";}',
                   'compare' => 'LIKE',
             ],
             [
                   'key'     => 'food-menu-items_show-in-food-menu',
                   'value'   => 'show',
                   'compare' => 'LIKE',
             ],
          ],
       ];

} else {

    $params = [
       'post_type' => 'food-menu-items',
       'posts_per_page' => 8,
       ];
}


$query_Menu_items = new WP_Query($params);

?>

<div class="conteiner" id="restaurant-menu">
   <?php get_template_part('template-parts/components/food_menu', null, ['title' => esc_html($restaurant_site_options['restaurant_menu-section_title'])]);?>
   <section class="row-dish-menu dish-menu__row">
      <?php if ($query_Menu_items->have_posts()) {
          while ($query_Menu_items->have_posts()) {
              $query_Menu_items->the_post();

              //   if (class_exists('ACF') && !get_field('food-menu-items_show-in-food-menu')) {
              //       continue;
              //   }
              ?>
         <article <?php post_class('dish-menu');?> id="post-<?php the_id()?>" data-post-id="<?php the_id()?>">
            <a href="<?php echo esc_url(the_permalink()); ?>">
               <div class="dish-menu__title">
                  <?php echo the_title() ?>
                  <p><?php echo rstr_trim_excerpt(12) ?></p>
               </div>
               <?php if (class_exists('ACF')) {
                   get_template_part('template-parts/components/price', null, ['price' => get_field('food_price')]);
               }
              ?>
            </a>
         </article>
         <?php
          }
          wp_reset_postdata();
      } else {
          // something
      }
?>

   </section>
   <!-- @@include('./parts/button-orange.html',{'mod':'','title':'Explor food menu', 'href':'#'}) -->

   <div class="wrap-img wrap-img__311x311">
      <?php if ($restaurant_site_options['restaurant_menu-section_img_1']['url']) {?>
      <img src="<?php echo esc_url($restaurant_site_options['restaurant_menu-section_img_1']['url']) ?>" alt="">
      <?php }?>
   </div>
   <div class="wrap-img wrap-img__267x414">
      <?php if ($restaurant_site_options['restaurant_menu-section_img_2']['url']) {?>
      <img src="<?php echo esc_url($restaurant_site_options['restaurant_menu-section_img_2']['url']) ?>" alt="">
      <?php }?>
   </div>
   <div class="wrap-img wrap-img__241x241">
      <?php if ($restaurant_site_options['restaurant_menu-section_img_3']['url']) {?>
      <img src="<?php echo esc_url($restaurant_site_options['restaurant_menu-section_img_3']['url']) ?>" alt="">
      <?php }?>
   </div>

</div>