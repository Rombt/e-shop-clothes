<?php global $restaurant_site_options; ?>

<div class="background background-title-page-block">
	<div class="wrap-img">
		<?php if (class_exists('ReduxFramework') && isset($restaurant_site_options['background-title-img']['url'])) { ?>
			<img src="<?php echo rstr_get_pic_url('background-title-img') ?>" alt="" ">
		<?php } ?>
	</div>


	<?php
	if (is_singular('recipes') && $restaurant_site_options['title_into_background_title_image_recipe'] == false) {
		// your code if it you need 
	} else if (is_singular('food_menu_items') && $restaurant_site_options['title_into_background_title_image_food_menu_items'] == false) {
		// your code if it you need 
	} else if ((is_home() || is_page(['blog', 'Blog'])) && $restaurant_site_options['title_into_background_title_image_blog'] == false) {
		// your code if it you need 
	} else if (is_woocommerce()) {
		if (apply_filters('woocommerce_show_page_title', true)) { ?>
			<h1 class=" woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	<?php }
	} else {
		get_template_part('template-parts/components/h1_for_head');
	}
	?>

	</div>


	<?php get_template_part('template-parts/components/previe_block'); ?>