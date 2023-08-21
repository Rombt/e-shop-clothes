<?php

if ( ! class_exists( 'ACF' ) ) {
	return;
}
function rstr_food_menu_items_acf_metaboxes() {

	acf_add_local_field_group(
		array(
			'key' => 'food_menu_items_properties',
			'title' => 'Properties Food Menu Item',
			'fields' => array(
				array(
					'key' => 'fmip_field-1',
					'name' => 'food_price',
					'label' => 'Dish price',
					'type' => 'number',
					'placeholder' => 'Add price this dish here',
					'prepend' => '$',
					'min' => '0.01',
					'max' => '',
					'step' => '0.01',
				),
				array(
					'key' => 'fmip_field-2',
					'name' => 'food_menu_items_show-in-food-menu',
					'label' => 'Show this dish on front page',
					'type' => 'checkbox',
					'choices' => array(
						'show' => 'show on',
					),
					// 'layout' => 'horizontal',
				),
				array(
					'key' => 'fmip_field-3',
					'name' => 'food_menu_items_show-in-section-today-specialy',
					'label' => 'Show this dish in the section "Today Specialy"',
					'type' => 'checkbox',
					'choices' => array(
						'show' => 'show on',
					),
					// 'layout' => 'horizontal',
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'food_menu_items',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => array(),
			'return_format' => 'array',
		)
	);

	acf_add_local_field_group(
		array(
			'key' => 'properties-food-categories',
			'title' => 'Properties of Food Categories',
			'fields' => array(
				array(
					'key' => 'pfc_field-1',
					'name' => 'food-categories-icon',
					'label' => 'Icon for this food categories',
					'type' => 'image',
					'return_format' => 'url',
					'max_width' => '50px',
					'max_height' => '50px',
				),
				array(
					'key' => 'pfc_field-2',
					'name' => 'food-recepes-icon',
					'label' => 'Icon this food categories for browser of recipes',
					'type' => 'image',
					'return_format' => 'url',
					'max_width' => '50px',
					'max_height' => '50px',
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'taxonomy',
						'operator' => '==',
						'value' => 'food-categories',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
		)
	);

	acf_add_local_field_group(
		array(
			'key' => 'our-clients_properties',
			'title' => 'Properties Our Clients',
			'fields' => array(
				array(
					'key' => 'ocp_field-1',
					'name' => 'our-clients_show-slider-happy-clients',
					'label' => 'Show this client on the "Happy Clients" slider ',
					'type' => 'checkbox',
					'choices' => array(
						'show' => 'show on',
					),
					// 'layout' => 'horizontal',
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'our-clients',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => array(),
			'return_format' => 'array',
		)
	);
}
add_action( 'acf/init', 'rstr_food_menu_items_acf_metaboxes' );




// Добавляем новую колонку в перечень записей
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
	if ( $column === 'show-food-menu' ) {
		render_custom_columns(
			'food_menu_items_show-in-food-menu',
			'check-show-food-menu',
			$post_id,
			'rstr_food_menu_items_show_in_front_page',
			'_rstr_' . $column . '_metabox'
		);
	}

	if ( $column === 'show-today-specialy' ) {
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
	if ( $column === 'show-our-clients' ) {
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