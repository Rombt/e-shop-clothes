 <?php global $restaurant_site_options; ?>
<div class="conteiner" id="restaurant-menu">
   <?php get_template_part( 'template-parts/components/food_menu', null, ['title' => esc_html( $restaurant_site_options['restaurant_menu-section_title'])]); ?>
   <section class="row-dish dish__row">
      <div class="col-dish">
         <div class="dish">
            <div class="dish__title">
               Ultimate organic fruit salad
               <p>survived not only five centuries but the leap</p>
            </div>
             <?php get_template_part( 'template-parts/components/price', null, ['price'=>'50,00']); ?>
         </div>
         <div class="dish">
            <div class="dish__title">
               Toasted jam
               <p>Phasellus a ex accumsan, sollicitudin</p>
            </div>
             <?php get_template_part( 'template-parts/components/price', null, ['price'=>'68,00']); ?>
         </div>
         <div class="dish">
            <div class="dish__title">
               Toasted jam copy
               <p>Phasellus a ex accumsan, sollicitudin copy</p>
            </div>
             <?php get_template_part( 'template-parts/components/price', null, ['price'=>'22,00']); ?>
         </div>
         <div class="dish">
            <div class="dish__title">
               Plain pancakes
               <p>Donec eget augue at diam euismod viverra</p>
            </div>
             <?php get_template_part( 'template-parts/components/price', null, ['price'=>'39,00']); ?>
         </div>
      </div>
      <div class="col-dish">
         <div class="dish">
            <div class="dish__title">
               Ultimate organic fruit salad
               <p>survived not only five centuries but the leap</p>
            </div>
             <?php get_template_part( 'template-parts/components/price', null, ['price'=>'50,00']); ?>
         </div>
         <div class="dish">
            <div class="dish__title">
               Toasted jam
               <p>Phasellus a ex accumsan, sollicitudin</p>
            </div>
             <?php get_template_part( 'template-parts/components/price', null, ['price'=>'68,00']); ?>
         </div>
         <div class="dish">
            <div class="dish__title">
               Toasted jam copy
               <p>Phasellus a ex accumsan, sollicitudin copy</p>
            </div>
             <?php get_template_part( 'template-parts/components/price', null, ['price'=>'22,00']); ?>
         </div>
         <div class="dish">
            <div class="dish__title">
               Plain pancakes
               <p>Donec eget augue at diam euismod viverra</p>
            </div>
             <?php get_template_part( 'template-parts/components/price', null, ['price'=>'39,00']); ?>
         </div>
      </div>
   </section>
   

   <div class="wrap-img wrap-img__311x311">
      <?php if ($restaurant_site_options['restaurant_menu-section_img_1']['url']) { ?>
      <img src="<?php echo esc_url($restaurant_site_options['restaurant_menu-section_img_1']['url']) ?>" alt="">
      <?php }?>
   </div>
   <div class="wrap-img wrap-img__267x414">
      <?php if ($restaurant_site_options['restaurant_menu-section_img_2']['url']) { ?>
      <img src="<?php echo esc_url($restaurant_site_options['restaurant_menu-section_img_2']['url']) ?>" alt="">
      <?php }?>      
   </div>
   <div class="wrap-img wrap-img__241x241">
      <?php if ($restaurant_site_options['restaurant_menu-section_img_3']['url']) { ?>
      <img src="<?php echo esc_url($restaurant_site_options['restaurant_menu-section_img_3']['url']) ?>" alt="">
      <?php }?>      
   </div>

</div>