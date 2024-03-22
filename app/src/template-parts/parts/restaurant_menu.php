<?php global $restaurant_site_options; ?>
<?php


if (class_exists('ACF')) {

	$params = [
		'post_type' => 'food_menu_items',
		'posts_per_page' => -1,
		'meta_query' => [
			'relation' => 'OR',
			[
				'key' => 'food_menu_items_show-in-food-menu',
				// todo убрать это дублирование т.е. правильно сериализовать массив
				'value' => 'a:1:{i:0;s:4:"show";}',
				'compare' => 'LIKE',
			],
			[
				'key' => 'food_menu_items_show-in-food-menu',
				'value' => 'show',
				'compare' => 'LIKE',
			],
		],
	];
} else {

	$params = [
		'post_type' => 'food_menu_items',
		'posts_per_page' => 8,
	];
}
$query_Menu_items = new WP_Query($params);

?>

<div class="rstr-container" id="restaurant-menu">
	<?php get_template_part('template-parts/components/food_menu', null, ['title' => class_exists('ReduxFramework') ? esc_html($restaurant_site_options['restaurant_menu-section_title']) : ""]); ?>
	<section class="row-dish-menu dish-menu__row">
		<?php if ($query_Menu_items->have_posts()) {
			while ($query_Menu_items->have_posts()) {
				$query_Menu_items->the_post();
		?>
				<article <?php post_class('dish-menu'); ?> id="post-<?php the_id() ?>" data-post-id="<?php the_id() ?>">
					<div class="dish-menu__body">
						<a class="dish-menu__title" href="<?php echo esc_url(the_permalink()); ?>">
							<?php echo the_title() ?>
						</a>
						<div class="dish-menu__description">
							<?php echo rstr_trim_excerpt(12) ?>
						</div>
					</div>
					<footer class="dish-menu__price">
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

	</section>
	<?php if (class_exists('ReduxFramework') && ($restaurant_site_options['restaurant_menu-section_button_title'] || $restaurant_site_options['restaurant_menu-section_button_href'])) {
		$restaurant_menu_button_title = $restaurant_site_options['restaurant_menu-section_button_title'];
		$restaurant_menu_button_href = $restaurant_site_options['restaurant_menu-section_button_href'];
	} else {
		$restaurant_menu_button_title = '';
		$restaurant_menu_button_href = get_permalink();
	} ?>
	<?php get_template_part('template-parts/components/button', 'orange', ['href' => $restaurant_menu_button_href, 'title' => $restaurant_menu_button_title]); ?>
	<div class="wrap-img wrap-img__311x311">
		<img src="<?php echo rstr_get_pic_url('restaurant_menu-section_img_1') ?>" alt="">
	</div>
	<div class="wrap-img wrap-img__267x414">
		<img src="<?php echo rstr_get_pic_url('restaurant_menu-section_img_2') ?>" alt="">
	</div>
	<div class="wrap-img wrap-img__241x241">
		<img src="<?php echo rstr_get_pic_url('restaurant_menu-section_img_3') ?>" alt="">
	</div>

</div>