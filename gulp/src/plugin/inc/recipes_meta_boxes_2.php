<?php

$arr_blocks = [ 
	'block_ingredients' => 'ingredient',
	'block_nutritions' => 'nutrition',
	'block_food-step' => 'food-step',
];



add_action( 'add_meta_boxes', 'rstr_recipes_meta_box', 10, 2 );
function rstr_recipes_meta_box( $post_type, $post ) {
	add_meta_box( 'rstr_recipe_mb', esc_html__( 'Recipe data', 'restaurant-site' ), 'rstr_recipe_mb_html', 'recipes', 'normal' );
}





function rstr_recipe_mb_html( $post ) {

	global $arr_blocks;

	$post_id = $post->ID;
	$arr_filds = get_post_custom_keys( $post_id );
	wp_nonce_field( 'rstr_ingredients_fild', '_ingredients_metabox' );

	$args = [ 
		'post_id' => $post_id,
		'arr_filds' => $arr_filds,
	];
	array_walk( $arr_blocks, function ($value, $key, $args) {

		echo '<div class="' . esc_html__( $value ) . '-block">';
		echo '<div class="title-block">' . esc_html__( $value, 'restaurant-site' ) . '</div>';

		if ( ! in_array( $value . '_0', $args['arr_filds'] ) ) {

			$value = $value . '_0';
			$value_field = get_post_meta( $args['post_id'], $value . '_0', true ) ?? '###';

			include plugin_dir_path( __FILE__ ) . '../assets/template_parts/ingredient_block.php';
		} else {
			foreach ( $args['arr_filds'] as $value_field ) {

				if ( str_contains( $value_field, $value . '_' ) ) {
					$value_field = get_post_meta( $args['post_id'], $value_field, true ) ?? '###';
					include plugin_dir_path( __FILE__ ) . '../assets/template_parts/ingredient_block.php';
				}
			}
		}
		?>

		<div data-post_id="<?php echo esc_attr( $args['post_id'] ) ?>" class="add-button">Add <?php esc_html__( $value ) ?>
		</div>
		</div>

		<?php
	}, $args );

}



function rstr_save_metabox( $post_id, $post ) {

	global $arr_blocks;

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}
	if ( $post->post_type != 'recipes' ) {
		return $post_id;
	}
	$post_type = get_post_type_object( $post->post_type );
	if ( ! current_user_can( $post_type->cap->edit_post, $post_id ) ) {
		return $post_id;
	}

	echo '#############################################';
	foreach ( $_POST as $field_name => $field_value ) {


		// foreach ( $arr_blocks as $value ) {

		// if ( str_contains( $field_name, $value . '_' ) ) {

		// if ( ! isset( $_POST[ $field_name ] ) || ! wp_verify_nonce( $_POST['_ingredients_metabox'], 'rstr_ingredients_fild' ) ) {
		// 	return $post_id;
		// }

		if ( isset( $_POST[ $field_name ] ) ) {
			update_post_meta( $post_id, $field_name, sanitize_text_field( $_POST[ $field_name ] ) );
		} else {
			delete_post_meta( $post_id, $field_name );
		}
		// }

		// }

	}

	return $post_id;
}
add_action( 'save_post', 'rstr_save_metabox', 10, 2 );

// function display_my_variable() {
// 	$post_id = isset( $_GET['post'] ) ? $_GET['post'] : ( isset( $_POST['post_ID'] ) ? $_POST['post_ID'] : '' );

// 	if ( ! empty( $post_id ) ) {
// 		// Вызываем функцию rstr_save_metabox, чтобы получить значение переменной
// 		$my_variable = rstr_save_metabox( $post_id, get_post( $post_id ) );

// 		// Выводим значение переменной
// 		echo '*************************************';
// 		echo $my_variable;
// 	}
// }

// add_action( 'admin_notices', 'display_my_variable', 10, 2 );