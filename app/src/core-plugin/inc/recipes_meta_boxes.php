<?php

$arr_blocks = [ 
	'block_ingredients' => 'ingredient',
	'block_nutritions' => [ 
		'nutrition',
		'dv',
		'dv_percent',
	],
	'block_food-step' => 'food-step'
];

$arr_files_recire = get_files_list( wp_upload_dir()['basedir'] . '/files recipes' );

add_action( 'add_meta_boxes', 'rstr_recipes_meta_box', 10, 2 );
function rstr_recipes_meta_box( $post_type, $post ) {
	add_meta_box( 'rstr_recipe_mb', esc_html__( 'Recipe data', 'restaurant-site' ), 'rstr_recipe_mb_html', 'recipes', 'normal' );
}

function rstr_recipe_mb_html( $post ) {

	global $arr_blocks;
	global $arr_files_recire;

	$post_id = $post->ID;
	$arr_filds = get_post_custom_keys( $post_id );
	wp_nonce_field( 'rstr_ingredients_fild', '_ingredients_metabox' );
	?>

	<div class="recepe-time-block">
		<label for="read-in">read in</label>
		<input type="text" class="recepe-time-input" id="read-in" name="read-in"
			value="<?php esc_html_e( get_post_meta( $post_id, 'read-in', true ) ) ?>">
		<label for="cook-time">cook time</label>
		<input type="text" class="recepe-time-input" id="cook-time" name="cook-time"
			value="<?php esc_html_e( get_post_meta( $post_id, 'cook-time', true ) ) ?>">
		<label for="prep-time">prep time</label>
		<input type="text" class="recepe-time-input" id="prep-time" name="prep-time"
			value="<?php esc_html_e( get_post_meta( $post_id, 'prep-time', true ) ) ?>">
		<label for="download-file">file recipe</label>
		<?php // todo добавить всплывающe подсказкe "файл должен быть предворительно загружен на сервер" ?>
		<select class="download-file" name="file_recipe">
			<?php if ( ! get_post_meta( $post_id, 'file_recipe', true ) == '' || get_post_meta( $post_id, 'file_recipe', true ) == '' ) : ?>
				<option value="" selected>select file</option>
			<?php endif ?>
			<?php foreach ( $arr_files_recire as $value ) : ?>
				<?php if ( $value == get_post_meta( $post_id, 'file_recipe', true ) ) : ?>
					<option value="<?php esc_attr_e( $value ) ?>" selected><?php esc_html_e( $value ) ?></option>
				<?php else : ?>
					<option value="<?php esc_attr_e( $value ) ?>"><?php esc_html_e( $value ) ?></option>
				<?php endif ?>
			<?php endforeach ?>
		</select>
	</div>

	<?php
	$arr_filds = array_filter( $arr_filds, function ($value) use ($arr_blocks) {
		foreach ( $arr_blocks as $value_2 ) {
			if ( is_array( $value_2 ) ) {
				$value_2 = $value_2[0];
			}
			if ( preg_match( "/^" . $value_2 . "_d*/i", $value ) ) {
				return $value;
			}
		}
	} );
	$arr_filds = array_values( $arr_filds );
	$args = [ 
		'post_id' => $post_id,
		'arr_filds' => $arr_filds,
	];
	array_walk( $arr_blocks, function ($value, $key, $args) {

		if ( is_array( $value ) ) {
			foreach ( $value as $key => $additional_fields_value ) {
				if ( $key == 0 ) {
					continue;
				}
				$arr_additional_fields[ $additional_fields_value ] = '';
			}
			$value = $value[0];
		}

		echo '<div class="' . esc_html__( $value ) . '-block">';
		echo '<div class="title-block">' . esc_html__( $value, 'restaurant-site' ) . '</div>';

		$key_field = 0;
		foreach ( $args['arr_filds'] as $value_field ) {
			if ( stristr( $value_field, $value ) ) {
				if ( isset( $arr_additional_fields ) && count( $arr_additional_fields ) != 0 ) {
					foreach ( $arr_additional_fields as $key_additional_fields => $value_additional_fields ) {
						$arr_additional_fields[ $key_additional_fields ] = get_post_meta( $args['post_id'], $key_additional_fields . '_' . $key_field, true );
					}
				}
				$value_field = get_post_meta( $args['post_id'], $value_field, true );
				include plugin_dir_path( __FILE__ ) . '../assets/template_parts/ingredient_block.php';
				$key_field++;
			}
		}
		if ( $key_field == 0 ) {
			$key_field = 0;
			$value_field = '';
			include plugin_dir_path( __FILE__ ) . '../assets/template_parts/ingredient_block.php';
		}
		?>

		<div data-post_id="<?php echo esc_attr( $args['post_id'] ) ?>" class="add-button">Add <?php esc_html__( $value ) ?>
		</div>
		</div>

		<?php
	}, $args );

}

function rstr_save_metabox_recipes( $post_id, $post ) {

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

	foreach ( $_POST as $field_name => $field_value ) {

		if ( ! wp_verify_nonce( $_POST['_ingredients_metabox'], 'rstr_ingredients_fild' ) ) {
			return $post_id;
		}

		if ( isset( $_POST[ $field_name ] ) ) {
			update_post_meta( $post_id, $field_name, sanitize_text_field( $_POST[ $field_name ] ) );
		} else {
			delete_post_meta( $post_id, $field_name );
		}

	}

	return $post_id;
}
add_action( 'save_post', 'rstr_save_metabox_recipes', 10, 2 );