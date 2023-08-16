<?php global $restaurant_site_options; ?>
<div class="recipe-card-3col">
	<figure class="wrap-img"><img src="@@img_src" alt=""></figure>
	<div class="recipe-card-3col__body">
		<div class="recipe-card-3col__title">
			<h3>
				<?php _e( the_title(), 'restaurant-site' ); ?>
			</h3>
		</div>
		<div class="rating">
			<img src="<?php echo esc_url( $restaurant_site_options['rating-star-active_img']['url'] ) ?>" alt="">
			<img src="<?php echo esc_url( $restaurant_site_options['rating-star-active_img']['url'] ) ?>" alt="">
			<img src="<?php echo esc_url( $restaurant_site_options['rating-star-active_img']['url'] ) ?>" alt="">
			<img src="<?php echo esc_url( $restaurant_site_options['rating-star-passive_img']['url'] ) ?>" alt="">
			<img src="<?php echo esc_url( $restaurant_site_options['rating-star-passive_img']['url'] ) ?>" alt="">
		</div>
	</div>
	<p>
		<?php echo rstr_trim_excerpt( 20 ) ?>
	</p>

	<?php get_template_part( 'template-parts/components/button', 'orange', [ 'title' => 'recipe details', 'href' => esc_attr( get_permalink() ),] ) ?>
</div>