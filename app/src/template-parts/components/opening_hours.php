<?php global $restaurant_site_options; ?>
<section class="rstr-container opening-hours-container">

	<div class="opening-hours-container__row">
		<div class="opening-hours-container__title">
			<h2>
				<?php echo class_exists('ReduxFramework') ? esc_html__($restaurant_site_options['opening-hours_maine-title'], 'restaurant-site') : "" ?>
			</h2>
		</div>

		<p>
			<?php echo class_exists('ReduxFramework') ? esc_html__($restaurant_site_options['opening-hours_title-1'], 'restaurant-site') : "" ?>
			<?php class_exists('ReduxFramework') ? _e(wp_kses($restaurant_site_options['opening-hours_subtitle-1'], 'post'), 'restaurant-site') : "" ?>
		</p>
		<p>
			<?php echo class_exists('ReduxFramework') ? esc_html__($restaurant_site_options['opening-hours_title-2'], 'restaurant-site') : "" ?>
			<?php class_exists('ReduxFramework') ? _e(wp_kses($restaurant_site_options['opening-hours_subtitle-2'], 'post'), 'restaurant-site') : "" ?>
		</p>
		<div class="wrap-img opening-hours-container__wrap-img">
			<?php if (class_exists('ReduxFramework') && isset($restaurant_site_options['opening-hours_img']['url'])) { ?>
				<img src="<?php echo esc_url($restaurant_site_options['opening-hours_img']['url']) ?>" alt="">
			<?php } ?>
		</div>
	</div>

</section>