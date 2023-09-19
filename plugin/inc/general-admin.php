<?php







function add_likes_column_recipes( $columns ) {
	$columns['quantity_likes_recipe'] = esc_html__( 'Quantity of likes', 'restaurant-site' );
	$columns['desired-quantity_likes_recipe'] = esc_html__( 'Desired quantity of likes', 'restaurant-site' );
	return $columns;
}
add_filter( 'manage_recipes_posts_columns', 'add_likes_column_recipes' );


function add_likes_column_posts( $columns ) {
	$columns['quantity_likes_post'] = esc_html__( 'Quantity of likes posts', 'restaurant-site' );
	$columns['desired-quantity_likes_post'] = esc_html__( 'Desired quantity of likes posts', 'restaurant-site' );
	return $columns;
}
add_filter( 'manage_post_posts_columns', 'add_likes_column_posts' );


function display_custom_field_column_likes( $column, $post_id ) {
	if ( 'quantity_likes_recipe' === $column || 'quantity_likes_post' === $column ) {
		if ( get_post_meta( $post_id, 'quantity_likes', true ) )
			echo esc_html( get_post_meta( $post_id, 'quantity_likes', true ) );
		else
			echo 0;
	}

	if ( 'desired-quantity_likes_recipe' === $column || 'desired-quantity_likes_post' === $column ) {
		if ( get_post_meta( $post_id, 'desired_quantity_likes', true ) )
			echo esc_html( get_post_meta( $post_id, 'desired_quantity_likes', true ) );
		else
			echo 0;
	}
}
add_action( 'manage_post_posts_custom_column', 'display_custom_field_column_likes', 10, 2 );
















//===============================================================================================
//===============================================================================================

// Add new column on page of all recipes
function add_food_menu_items_column( $columns ) {
	$columns['show-food-menu'] = esc_html__( 'Show in the "Food menu" section ', 'restaurant-site' );
	$columns['show-today-specialy'] = esc_html__( 'Show in the "Today Specialy" section ', 'restaurant-site' );
	return $columns;
}
add_filter( 'manage_food_menu_items_posts_columns', 'add_food_menu_items_column' );

function add_our_clients_column( $columns ) {
	$columns['show-our-clients'] = esc_html__( 'Show in the "Happy Clients" slider', 'restaurant-site' );
	return $columns;
}
add_filter( 'manage_our-clients_posts_columns', 'add_our_clients_column' );

function display_custom_field_column( $column, $post_id ) {
	if ( 'show-food-menu' === $column ) {
		render_custom_columns(
			'food_menu_items_show-in-food-menu',
			'check-show-food-menu',
			$post_id,
			'rstr_food_menu_items_show_in_front_page',
			'_rstr_' . $column . '_metabox'
		);
	}

	if ( 'show-today-specialy' === $column ) {
		render_custom_columns(
			'food_menu_items_show-in-section-today-specialy',
			'check-show-today-specialy',
			$post_id,
			'rstr_food_menu_items_show_in_front_page',
			'_rstr_' . $column . '_metabox'
		);
	}

}
add_action( 'manage_food_menu_items_posts_custom_column', 'display_custom_field_column', 10, 2 );

function display_our_clients__column( $column, $post_id ) {
	if ( 'show-our-clients' === $column ) {
		render_custom_columns(
			'our-clients_show-slider-happy-clients',
			'check-show-slider-happy-clients',
			$post_id,
			'rstr_food_menu_items_show_in_front_page',
			'_rstr_' . $column . '_metabox'
		);
	}
}
add_action( 'manage_our-clients_posts_custom_column', 'display_our_clients__column', 10, 2 );

function render_custom_columns( $name_field, $class_checkbox, $post_id, $nonce, $id_nonce ) {

	wp_nonce_field( $nonce, $id_nonce );

	echo '<input type="checkbox" data-post-id="' . $post_id
		. '" data-field-name="' . $name_field . '" '
		. ( get_field( $name_field, $post_id ) ? 'checked' : '' )
		. ' class="' . $class_checkbox . '">';
}

function get_files_list( $path ) {

	$files = scandir( $path ); // Получаем список файлов в директории
	$file_options = array();

	foreach ( $files as $file ) {
		if ( $file !== '.' && $file !== '..' ) {
			$file_options[] = $file; // Создаем массив для использования в метабоксе
		}
	}

	return $file_options;
}