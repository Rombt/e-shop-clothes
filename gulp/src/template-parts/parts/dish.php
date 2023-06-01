<?php 
    global $restaurant_site_options; 
   if (isset($restaurant_site_options['dish-gallery'])) {
       $arr_dish_gallery = explode(",", $restaurant_site_options['dish-gallery']);
    }
?>

<div class="background background__dish">
    <div class="swiper-dish swiper">
        <div class="swiper-wrapper">
            <?php if ( isset($arr_dish_gallery)) :
            foreach ($arr_dish_gallery as $image_id) :
                $image_data = wp_get_attachment_image_src($image_id, 'full');
                $image_url = $image_data[0];
            ?>
                <div class="swiper-slide">
                    <div class="wrap-img dish__wrap-img"> 
                        <img src=" <?php echo $image_url ?> " alt="">
                    </div>
                </div>
            <?php 
                endforeach;
            endif;
            ?>
        </div>
        <div class="swiper-pagination-dish swiper-pagination"></div>
    </div>
    <div class="conteiner" id="dish">
        <div class="dish-title">
            <p class="dish-title__title"> <?php _e($restaurant_site_options['home_page_title'],'restaurant-site') ?> </p>
            <p class="dish-title__subtitle-title"> <?php _e($restaurant_site_options['home_page_sub_title'],'restaurant-site') ?></p>
        </div>
        <div class="exlore-food-menu">
            <?php if ($restaurant_site_options['home_page_slogan_label']['url']) { ?>
                <img src="<?php echo esc_url($restaurant_site_options['home_page_slogan_label']['url']) ?>" alt="404 img">
            <?php }?>
            <p> <?php esc_html_e($restaurant_site_options['home_page_slogan'],'restaurant-site') ?> </p>
        </div>
    </div>
</div>