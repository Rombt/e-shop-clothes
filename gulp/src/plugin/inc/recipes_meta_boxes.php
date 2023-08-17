<?php


add_action( 'add_meta_boxes', 'rstr_recipes_meta_box', 10, 2 );
function rstr_recipes_meta_box( $post_type, $post ) {

	add_meta_box( 'rstr_recipe_mb', esc_html__( 'Recipe data', 'restaurant-site' ), 'rstr_recipe_mb_html', 'recipes', 'normal' );


}





function rstr_recipe_mb_html( $post ) {

	$post_id = $post->ID;
	$ingredients_0 = get_post_meta( $post->ID, 'ingredient_0', true );
	wp_nonce_field( 'rstr_ingredients_fild', '_ingredients_metabox' );
	$arr_filds = get_post_custom_keys( $post_id );
	?>

	<div class="ingredient-block">
		<div class="title-block">
			<?php esc_html_e( 'ingredients', 'restaurant-site' ); ?>
		</div>
		<?php
		if ( ! in_array( 'ingredient_0', $arr_filds ) ) {
			$value = "ingredient_0";
			include plugin_dir_path( __FILE__ ) . '../assets/template_parts/ingredient_block.php';
		} else {
			foreach ( $arr_filds as $value ) {
				if ( str_contains( $value, 'ingredient_' ) ) {
					include plugin_dir_path( __FILE__ ) . '../assets/template_parts/ingredient_block.php';
				}
			}
		}
		?>
		<div data-post_id="<?php echo esc_attr( $post_id ) ?>" class="add-button">Add Ingredient</div>
	</div>

	<div class="nutrition-block">

		<div class="title-block">
			<?php esc_html_e( 'nutrition', 'restaurant-site' ); ?>
		</div>
		<?php
		if ( ! in_array( 'nutrition_0', $arr_filds ) ) {
			$value = "nutrition_0";
			include plugin_dir_path( __FILE__ ) . '../assets/template_parts/ingredient_block.php';
		} else {
			foreach ( $arr_filds as $value ) {
				if ( str_contains( $value, 'ingredient_' ) ) {
					include plugin_dir_path( __FILE__ ) . '../assets/template_parts/ingredient_block.php';
				}
			}
		}
		?>
		<div data-post_id="<?php echo esc_attr( $post_id ) ?>" class="add-button">Add Nutrition</div>


	</div>


	<div class="food-step-block">

		<div class="title-block">
			<?php esc_html_e( 'nutrition', 'restaurant-site' ); ?>
		</div>
		<?php
		if ( ! in_array( 'nutrition_0', $arr_filds ) ) {
			$value = "nutrition_0";
			include plugin_dir_path( __FILE__ ) . '../assets/template_parts/ingredient_block.php';
		} else {
			foreach ( $arr_filds as $value ) {
				if ( str_contains( $value, 'ingredient_' ) ) {
					include plugin_dir_path( __FILE__ ) . '../assets/template_parts/ingredient_block.php';
				}
			}
		}
		?>
		<div data-post_id="<?php echo esc_attr( $post_id ) ?>" class="add-button">Add Nutrition</div>


	</div>


	<?php
}



function rstr_save_metabox( $post_id, $post ) {

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

		if ( str_contains( $field_name, 'ingredient_' ) ) {

			if ( ! isset( $_POST[ $field_name ] ) || ! wp_verify_nonce( $_POST['_ingredients_metabox'], 'rstr_ingredients_fild' ) ) {
				return $post_id;
			}

			if ( isset( $_POST[ $field_name ] ) ) {
				update_post_meta( $post_id, $field_name, sanitize_text_field( $_POST[ $field_name ] ) );
			} else {
				delete_post_meta( $post_id, $field_name );
			}
		}


	}

	return $post_id;
}
add_action( 'save_post', 'rstr_save_metabox', 10, 2 );