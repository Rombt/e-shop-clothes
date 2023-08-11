<?php


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