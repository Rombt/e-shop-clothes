<?php global $restaurant_site_options ?>

<div class="rstr-rating" data-post_id="<?php echo esc_attr( the_ID() ) ?>">

	<?php

	if ( class_exists( 'ReduxFramework' ) && $restaurant_site_options['quantity-rating-stars'] ) :
		for ( $i = 0; $i < $restaurant_site_options['quantity-rating-stars']; $i++ ) : ?>
			<div class="wrap-img">
				<img data-status="pasive"
					src="<?php echo esc_url( $restaurant_site_options['rating-star-passive_img']['url'] ) ?>" alt="">
			</div>

		<?php endfor ?>
	<?php endif ?>


	<!-- <div class="wrap-img"><img
			src="<?php // echo esc_url( $restaurant_site_options['rating-star-active_img']['url'] ) ?>"=""></div>
	<div class="wrap-img"><img src="<?php // echo esc_url( $restaurant_site_options['rating-star-active_img']['url'] ) ?>"
			alt=""></div>
	<div class="wrap-img"><img
			src="<?php // echo esc_url( $restaurant_site_options['rating-star-passive_img']['url'] ) ?>"=""></div>
	<div class="wrap-img"><img src="<?php // echo esc_url( $restaurant_site_options['rating-star-passive_img']['url'] ) ?>"
			alt=""></div> -->
</div>