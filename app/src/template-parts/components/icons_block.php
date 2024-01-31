<div class="icons-block" data-da=".footer, 1120, last">
	<?php global $restaurant_site_options; ?>
	<?php if ( class_exists( 'ReduxFramework' ) && $restaurant_site_options['social_networks_fb-link'] ) { ?>
		<a href="<?php echo esc_url( $restaurant_site_options['social_networks_fb-link'] ) ?>">
			<?php if ( class_exists( 'ReduxFramework' ) && $restaurant_site_options['fb-link_icon']['url'] ) { ?>
				<img src="<?php echo esc_url( $restaurant_site_options['fb-link_icon']['url'] ) ?>" alt="icon_facebook">
			<?php } ?>
		</a>
	<?php } ?>

	<?php if ( class_exists( 'ReduxFramework' ) && $restaurant_site_options['social_networks_instagram-link'] ) { ?>
		<a href="<?php echo esc_url( $restaurant_site_options['social_networks_instagram-link'] ) ?>">
			<?php if ( class_exists( 'ReduxFramework' ) && $restaurant_site_options['social_networks_twitt_icon']['url'] ) { ?>
				<img src="<?php echo esc_url( $restaurant_site_options['social_networks_twitt_icon']['url'] ) ?>"
					alt="icon_twitter">
			<?php } ?>
		</a>



	<?php } ?>

	<?php if ( class_exists( 'ReduxFramework' ) && $restaurant_site_options['social_networks_twitt-link'] ) { ?>
		<a href="<?php echo esc_url( $restaurant_site_options['social_networks_instagram-link'] ) ?>">
			<?php if ( class_exists( 'ReduxFramework' ) && $restaurant_site_options['social_networks_instagram_icon']['url'] ) { ?>
				<img src="<?php echo esc_url( $restaurant_site_options['social_networks_instagram_icon']['url'] ) ?>"
					alt="icon_instagram">
			<?php } ?>
		</a>
	<?php } ?>




</div>