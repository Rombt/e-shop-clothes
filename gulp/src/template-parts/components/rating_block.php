<?php global $restaurant_site_options ?>

<div class="rstr-rating" data-post_id="<?php echo esc_attr( the_ID() ) ?>">

	<?php
	if ( class_exists( 'ReduxFramework' ) && $restaurant_site_options['quantity-rating-stars'] ) :

		$desired_quantity_likes = get_post_meta( $post->ID, 'desired_quantity_likes', true );
		if ( $desired_quantity_likes ) {
			$qautity_active_stars = esc_html( $desired_quantity_likes ? $desired_quantity_likes : 0 );
		} else {

			$qautity_active_stars = intval( get_post_meta( $post->ID, 'quantity_likes', true ) ?? 0 );
		}


		for ( $i = 0; $i < $qautity_active_stars; $i++ ) : ?>
			<div class="wrap-img">
				<img data-status="active" src="<?php echo esc_url( $restaurant_site_options['rating-star-active_img']['url'] ) ?>"
					alt="">
			</div>

			<?php
		endfor;

		for ( $i = 0; $i < ( intval( $restaurant_site_options['quantity-rating-stars'] ) - $qautity_active_stars ); $i++ ) : ?>
			<div class="wrap-img">
				<img data-status="pasive"
					src="<?php echo esc_url( $restaurant_site_options['rating-star-passive_img']['url'] ) ?>" alt="">
			</div>

		<?php endfor; ?>
	<?php endif; ?>

</div>