<?php
global $restaurant_site_options;
if (isset($restaurant_site_options['today-gallery'])) {
	$arr_dish_gallery = explode(",", $restaurant_site_options['today-gallery']);
}


if (class_exists('ACF')) {

	$params = [
		'post_type' => 'food_menu_items',
		'posts_per_page' => -1,
		'meta_query' => [
			'relation' => 'OR',
			[
				'key' => 'food_menu_items_show-in-section-today-specialy',
				'value' => 'a:1:{i:0;s:4:"show";}',
				'compare' => 'LIKE',
			],
			[
				'key' => 'food_menu_items_show-in-section-today-specialy',
				'value' => 'show',
				'compare' => 'LIKE',
			],
		],
	];
} else {

	$params = [
		'post_type' => 'food_menu_items',
		'posts_per_page' => 2,
	];
}


$query_Menu_items = new WP_Query($params);

?>
<section>
	<div class="background background-today">
		<div class="swiper-today swiper">
			<div class="swiper-wrapper">
				<?php if (!empty($arr_dish_gallery[0])) :
					foreach ($arr_dish_gallery as $image_id) :
						$image_data = wp_get_attachment_image_src($image_id, 'full');
						$image_url = $image_data[0];
				?>
						<div class="swiper-slide">
							<div class="wrap-img today__wrap-img">
								<img src=" <?php echo $image_url ?> " alt="">
							</div>
						</div>
				<?php
					endforeach;
				endif;
				?>
			</div>
			<div class="swiper-pagination-today swiper-pagination"></div>
		</div>

		<div class="rstr-container" id="today">
			<h2>
				<?php esc_html_e($restaurant_site_options['today_section_title']); ?>
			</h2>
			<div class="today-row">
				<?php if ($query_Menu_items->have_posts()) {
					while ($query_Menu_items->have_posts()) {
						$query_Menu_items->the_post();
				?>
						<article class="food-card today-row__food-card">
							<header class="wrap-img food-card__wrap-img"><img src="<?php the_post_thumbnail_url() ?>" alt="">
							</header>
							<div class="food-card__food-body">
								<h3>
									<?php echo the_title() ?>
								</h3>
								<p>
									<?php echo rstr_trim_excerpt(20) ?>
								</p>
							</div>
							<footer class="food-card__order-block">
								<div class="food-card__title">
									<?php class_exists('ReduxFramework') ? _e($restaurant_site_options['today_section_footer_text']) : ""; ?>
								</div>
								<?php if (class_exists('ReduxFramework') && isset($restaurant_site_options['phone-numbers_home-delivery'])) { ?>
									<a href="tel:<?php echo class_exists('ReduxFramework') ? esc_html($restaurant_site_options['phone-numbers_home-delivery']) : ""; ?>" class="food-card__phone-namber">
										<?php echo class_exists('ReduxFramework') ? esc_html($restaurant_site_options['phone-numbers_home-delivery']) : ""; ?>
									</a>
								<?php } ?>
								<?php if (class_exists('ACF')) {
									get_template_part('template-parts/components/price', null, ['price' => get_field('food_price')]);
								}
								?>
							</footer>
						</article>


				<?php
					}
					wp_reset_postdata();
				} else {
					// something
				}
				?>

			</div>
		</div>
	</div>
</section>