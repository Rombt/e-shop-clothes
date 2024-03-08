<div class="icons-block" data-da=".footer, 1120, last">
	<?php global $restaurant_site_options; ?>
	<?php if (class_exists('ReduxFramework') && $restaurant_site_options['social_networks_fb-link']) { ?>
		<a href="<?php echo esc_url($restaurant_site_options['social_networks_fb-link']) ?>">
			<img src="<?php echo rstr_get_pic_url('fb-link_icon') ?>" alt="icon_facebook">
		</a>
	<?php } ?>

	<?php if (class_exists('ReduxFramework') && $restaurant_site_options['social_networks_instagram-link']) { ?>
		<a href="<?php echo esc_url($restaurant_site_options['social_networks_instagram-link']) ?>">
			<img src="<?php echo rstr_get_pic_url('social_networks_twitt_icon') ?>" alt="icon_twitter">
		</a>

	<?php } ?>

	<?php if (class_exists('ReduxFramework') && $restaurant_site_options['social_networks_twitt-link']) { ?>
		<a href="<?php echo esc_url($restaurant_site_options['social_networks_instagram-link']) ?>">
			<img src="<?php echo rstr_get_pic_url('social_networks_instagram_icon') ?>" alt="icon_instagram">
		</a>
	<?php } ?>




</div>