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
	$count_Inputs = $_POST['count'];
	?>

	<div class="wrap_ingredient">
		<input type="text" class="ingredient-input" id="ingredient_ <?php $count_Inputs ?>"
			name="ingredient_ <?php $count_Inputs ?>" value="">
		<div class="del-ingredient"></div>
	</div>
	<?php
	wp_die();
}
add_action( 'wp_ajax_add_ingredient', 'add_ingredient_field' );