<?php 
   global $restaurant_site_options; 
   if (isset($restaurant_site_options['today-gallery'])) {
      $arr_dish_gallery = explode(",", $restaurant_site_options['today-gallery']);
   }
?>
<section>
   <div class="background background__today">
      <div class="swiper-today swiper">
         <div class="swiper-wrapper">
            <?php if ( !empty($arr_dish_gallery[0])) :
               foreach ($arr_dish_gallery as $image_id) :
                  $image_data = wp_get_attachment_image_src($image_id, 'full');
                  $image_url = $image_data[0];
            ?>         
            <div class="swiper-slide">
                  <div class="wrap-img today__wrap-img"> 
                      <img src=" <?php echo $image_url ?> " alt="">
                  </div>
            </div>
            <?php 
                endforeach;
            endif;
            ?>
         </div>
         <div class="swiper-pagination-today swiper-pagination"></div>
      </div>

      <div class="conteiner" id="today">
         <h2> <?php esc_html_e( $restaurant_site_options['today_section_title'] ); ?> </h2>
         <div class="today-row">
            <article class="food-card today-row__food-card">
               <div class="wrap-img food-card__wrap-img"><img src="@img/food-menu-card-img.jpg" alt=""></div>
               <div class="food-card__food-name">
                  <h3>Food Name one</h3>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro eveniet obcaecati sed numquam
                     explicabo reiciendis fuga veniam laudantium maiores
                  </p>
               </div>
               <footer class="food-card__order-block">
                  <div class="food-card__title">
                     <?php _e( $restaurant_site_options['today_section_footer_text'] );?>
                  </div>
                  <?php if ( $restaurant_site_options['phone-numbers_home-delivery'] ){ ?>
                  <a href="tel:<?php echo esc_html( $restaurant_site_options['phone-numbers_home-delivery'] );?>" class="food-card__phone-namber">
                     <?php echo esc_html( $restaurant_site_options['phone-numbers_home-delivery'] ); ?>
                  </a>
                  <?php }?>
                  <?php get_template_part( 'template-parts/components/price', null, ['price'=>'89,00']); ?>
               </footer>
            </article>
            <article class="food-card today-row__food-card">
               <div class="wrap-img food-card__wrap-img"><img src="@img/food-menu-card-img.jpg" alt=""></div>
               <div class="food-card__food-name">
                  <h3>Food Name one</h3>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro eveniet obcaecati sed numquam
                     explicabo reiciendis fuga veniam laudantium maiores
                  </p>
               </div>
               <footer class="food-card__order-block">
                  <div class="food-card__title">
                     <?php _e( $restaurant_site_options['today_section_footer_text'] );?>
                  </div>
                  <?php if ( $restaurant_site_options['phone-numbers_home-delivery'] ){ ?>
                  <a href="tel:<?php echo esc_html( $restaurant_site_options['phone-numbers_home-delivery'] );?>" class="food-card__phone-namber">
                     <?php echo esc_html( $restaurant_site_options['phone-numbers_home-delivery'] ); ?>
                  </a>
                  <?php }?>
                  <?php get_template_part( 'template-parts/components/price', null, ['price'=>'99,00']); ?>
               </footer>
            </article>
         </div>
      </div>
   </div>
</section>