<?php


function update_food_menu_items_show_in_front_page() {
	// nonce: '',     !!!!!!!!!!!
	// wp_nonce_field( 'rstr_*******', '_food_menu_items_checked' );
	// авторизованый пользователь должен иметь соответсвующие права (права админа например)

	// проверить существование   $_POST['field_name']; 

	$post_id = $_POST['post_id'];
	$field_name = $_POST['field_name'];
	$field_value = $_POST['field_value']; // проеобразовывать в PHP формат для хранения в базе данных нужно здесь а так же санитизация и прочее serialize()

	update_field( $field_name, $field_value, $post_id );
	wp_die();
}
add_action( 'wp_ajax_update_custom_field', 'update_food_menu_items_show_in_front_page' );



function add_ingredient_field() {
	// nonce: '',     !!!!!!!!!!!
	// wp_nonce_field( 'rstr_*******', '_food_menu_items_checked' );
	// авторизованый пользователь должен иметь соответсвующие права (права админа например)


	$post_id = $_POST['post_id'];



	echo '<input type="text" class="ingredient-input" id="ingredient_3" name="ingredient_" value="">';

	echo "<pre>";
	print_r( get_post_custom_keys( $post_id ) );
	echo "</pre>";

	wp_die();
}
add_action( 'wp_ajax_add_ingredient', 'add_ingredient_field' );