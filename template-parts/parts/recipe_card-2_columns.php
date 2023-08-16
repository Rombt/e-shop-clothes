<?php global $restaurant_site_options; ?>

<div class="recipe-card-grid">
	<figure class="wrap-img"><img src="@@img_src" alt=""></figure>
	<div class="recipe-card-grid__body">
		<div class="recipe-card-grid__title">
			<h3>
				<?php _e( the_title(), 'restaurant-site' ); ?>
			</h3>
			<div class="rating">
				<img src="<?php echo esc_url( $restaurant_site_options['rating-star-active_img']['url'] ) ?>" alt="">
				<img src="<?php echo esc_url( $restaurant_site_options['rating-star-active_img']['url'] ) ?>" alt="">
				<img src="<?php echo esc_url( $restaurant_site_options['rating-star-active_img']['url'] ) ?>" alt="">
				<img src="<?php echo esc_url( $restaurant_site_options['rating-star-passive_img']['url'] ) ?>" alt="">
				<img src="<?php echo esc_url( $restaurant_site_options['rating-star-passive_img']['url'] ) ?>" alt="">
			</div>
		</div>
		<p>
			<?php _e( rstr_trim_excerpt( 19 ), 'restaurant-site' ); ?>
		</p>
		<?php get_template_part( 'template-parts/components/button', 'orange', [ 'title' => 'recipe details', 'href' => get_permalink(),] ) ?>
	</div>
</div>