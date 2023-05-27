<?php global $restaurant_site_options; ?>
<section>
   <div class="background background__today">
      <div class="swiper-today swiper">
         <div class="swiper-wrapper">
            <div class="swiper-slide">
               <div class="wrap-img today__wrap-img"> <img src="img/today-bg-1.jpg" alt=""></div>
            </div>
            <div class="swiper-slide">
               <div class="wrap-img today__wrap-img"> <img src="img/today-bg-2.jpg" alt=""></div>
            </div>
            <div class="swiper-slide">
               <div class="wrap-img today__wrap-img"> <img src="img/today-bg-3.jpg" alt=""></div>
            </div>
         </div>
         <div class="swiper-pagination-today swiper-pagination"></div>
      </div>

      <div class="conteiner" id="today">
         <h2> Today Special </h2>
         <div class="today-row">
            <article class="food-card today-row__food-card">
               <div class="wrap-img food-card__wrap-img"><img src="img/food-menu-card-img.jpg" alt=""></div>
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
                  <?php if ( $restaurant_site_options['home_delivery_number'] ){ ?>
                  <a href="tel:<?php echo esc_html( $restaurant_site_options['home_delivery_number'] );?>" class="food-card__phone-namber">
                     <?php echo esc_html( $restaurant_site_options['home_delivery_number'] ); ?>
                  </a>
                  <?php }?>
                  <?php get_template_part( 'template-parts/components/price', null, ['price'=>'89,00']); ?>
               </footer>
            </article>
            <article class="food-card today-row__food-card">
               <div class="wrap-img food-card__wrap-img"><img src="img/food-menu-card-img.jpg" alt=""></div>
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
                  <?php if ( $restaurant_site_options['home_delivery_number'] ){ ?>
                  <a href="tel:<?php echo esc_html( $restaurant_site_options['home_delivery_number'] );?>" class="food-card__phone-namber">
                     <?php echo esc_html( $restaurant_site_options['home_delivery_number'] ); ?>
                  </a>
                  <?php }?>
                  <?php get_template_part( 'template-parts/components/price', null, ['price'=>'99,00']); ?>
               </footer>
            </article>

         </div>

      </div>
   </div>
</section>