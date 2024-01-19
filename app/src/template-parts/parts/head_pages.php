<?php global $restaurant_site_options; ?>

<div class="background background-title-page-block">
	<div class="wrap-img">
		<?php if ( class_exists( 'ReduxFramework' ) && isset( $restaurant_site_options['background-title-img']['url'] ) ) { ?>
			<?php echo wp_get_attachment_image( $restaurant_site_options['background-title-img']['id'], 'rstr_header-img' ); ?>
		<?php } ?>
	</div>


	<?php
	if ( is_singular( 'recipes' ) && $restaurant_site_options['title_into_background_title_image_recipe'] == false ) {
		// your code if it you need 
	} else if ( is_singular( 'food_menu_items' ) && $restaurant_site_options['title_into_background_title_image_food_menu_items'] == false ) {
		// your code if it you need 
	} else if ( ( is_home() || is_page( [ 'blog', 'Blog' ] ) ) && $restaurant_site_options['title_into_background_title_image_blog'] == false ) {
		// your code if it you need 
	} else {
		get_template_part( 'template-parts/components/h1_for_head' );
	}
	?>

</div>


<?php get_template_part( 'template-parts/components/previe_block' ); ?>