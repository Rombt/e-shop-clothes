<?php global $restaurant_site_options; ?>
<section class="background speciality-block">
	<figure class="wrap-img speciality-block__img">
		<?php if ( class_exists( 'ReduxFramework' ) && $restaurant_site_options['speciality_img']['url'] ) { ?>
			<img src="<?php echo esc_url( $restaurant_site_options['speciality_img']['url'] ) ?>" alt="">
		<?php } ?>
	</figure>
	<div class="speciality-block__text-wrap">
		<h2>
			<?php echo class_exists( 'ReduxFramework' ) ? esc_html__( $restaurant_site_options['speciality_maine-title'], 'restaurant-site' ) : "" ?>
		</h2>
		<div class="speciality-block__text">
			<h3>
				<?php echo class_exists( 'ReduxFramework' ) ? esc_html__( $restaurant_site_options['speciality_title-1'], 'restaurant-site' ) : "" ?>
			</h3>
			<p>
				<?php echo class_exists( 'ReduxFramework' ) ? esc_html__( $restaurant_site_options['speciality_subtitle-1'], 'restaurant-site' ) : "" ?>
			</p>
		</div>
		<div class="speciality-block__text">
			<h3>
				<?php echo class_exists( 'ReduxFramework' ) ? esc_html__( $restaurant_site_options['speciality_title-2'], 'restaurant-site' ) : "" ?>
			</h3>
			<p>
				<?php echo class_exists( 'ReduxFramework' ) ? esc_html__( $restaurant_site_options['speciality_subtitle-2'], 'restaurant-site' ) : "" ?>
			</p>
		</div>
		<div class="speciality-block__text">
			<h3>
				<?php echo class_exists( 'ReduxFramework' ) ? esc_html__( $restaurant_site_options['speciality_title-3'], 'restaurant-site' ) : "" ?>
			</h3>
			<p>
				<?php echo class_exists( 'ReduxFramework' ) ? esc_html__( $restaurant_site_options['speciality_subtitle-3'], 'restaurant-site' ) : "" ?>
			</p>
		</div>
	</div>
</section>