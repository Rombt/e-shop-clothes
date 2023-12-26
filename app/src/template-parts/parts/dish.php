<?php
global $restaurant_site_options;
if (isset($restaurant_site_options['dish-gallery'])) {
    $arr_dish_gallery = explode(",", $restaurant_site_options['dish-gallery']);
}
?>

<div class="background background__dish">
    <div class="swiper-dish swiper">
        <div class="swiper-wrapper">
            <?php if (!empty($arr_dish_gallery[0])) :
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
        <div class="dish-title redux_font-dish_title">
            <p class="dish-title__title"> <?php class_exists('ReduxFramework') ? _e($restaurant_site_options['home_page_title'], 'restaurant-site') : '' ?> </p>
            <p class="dish-title__subtitle-title"> <?php class_exists('ReduxFramework') ? _e($restaurant_site_options['home_page_sub_title'], 'restaurant-site') : '' ?></p>
        </div>
        <div class="exlore-food-menu redux_font-explore_food_menu">
            <?php if (class_exists('ReduxFramework') &&  $restaurant_site_options['home_page_slogan_label']['url']) { ?>
                <img src="<?php echo esc_url($restaurant_site_options['home_page_slogan_label']['url']) ?>" alt="404 img">
            <?php }?>
            <p> <?php echo class_exists('ReduxFramework') ? esc_html($restaurant_site_options['home_page_slogan'], 'restaurant-site') : "" ?> </p>
        </div>
    </div>
</div>