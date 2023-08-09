<?php


function restaurant_site_acf_metaboxes() {

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
add_action( 'acf/init', 'restaurant_site_acf_metaboxes' );

function update_food_menu_items_show_in_front_page() // for change field value by ajax
{
	// nonce: '',     !!!!!!!!!!!
	// авторизованый пользователь должен иметь соответсвующие права (права админа например)

	// проверить существование   $_POST['field_name']; 

	$post_id = $_POST['post_id'];
	$field_name = $_POST['field_name'];
	$field_value = $_POST['field_value']; // проеобразовывать в PHP формат для хранения в базе данных нужно здесь а так же санитизация и прочее serialize()

	update_field( $field_name, $field_value, $post_id );
	wp_die();
}
add_action( 'wp_ajax_update_custom_field', 'update_food_menu_items_show_in_front_page' );