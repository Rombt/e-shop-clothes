<?php


add_action( 'add_meta_boxes', 'rstr_recipes_meta_box', 10, 2 );
function rstr_recipes_meta_box( $post_type, $post ) {

	add_meta_box( 'rstr_recipe_mb', esc_html__( 'Recipe data', 'restaurant-site' ), 'rstr_recipe_mb_html', 'recipes', 'normal' );


}





function rstr_recipe_mb_html( $post ) {

	$ingredients_0 = get_post_meta( $post->ID, 'ingredient_0', true );
	$ingredients_1 = get_post_meta( $post->ID, 'ingredient_1', true );
	$ingredients_2 = get_post_meta( $post->ID, 'ingredient_2', true );
	$ingredients_3 = get_post_meta( $post->ID, 'ingredient_3', true );

	wp_nonce_field( 'rstr_ingredients_fild', '_ingredient_metabox' );

	?>

	<!-- Добавить кнобку удалеия ингридиента -->

	<div class="ingredient-block">
		<div class="title-block">
			<?php esc_html_e( 'ingredients', 'restaurant-site' ); ?>
		</div>
		<input type="text" class="ingredient-input" id="ingredient_0" name="ingredient_0"
			value="<?php echo esc_attr( $ingredients_0 ); ?>">
		<input type="text" class="ingredient-input" id="ingredient_1" name="ingredient_1"
			value="<?php echo esc_attr( $ingredients_1 ); ?>">
		<input type="text" class="ingredient-input" id="ingredient_2" name="ingredient_2"
			value="<?php echo esc_attr( $ingredients_2 ); ?>">
		<input type="text" class="ingredient-input" id="ingredient_3" name="ingredient_3"
			value="<?php echo esc_attr( $ingredients_3 ); ?>">
		<div class="add-button">Add Ingredient</div>
	</div>

	<?php

}


function rstr_save_metabox( $post_id, $post ) {

	if ( ! isset( $_POST['ingredient_0'] ) || ! wp_verify_nonce( $_POST['_ingredient_metabox'], 'rstr_ingredients_fild' ) ) {
		return $post_id;
	}
	if ( ! isset( $_POST['ingredient_1'] ) || ! wp_verify_nonce( $_POST['_ingredient_metabox'], 'rstr_ingredients_fild' ) ) {
		return $post_id;
	}
	if ( ! isset( $_POST['ingredient_2'] ) || ! wp_verify_nonce( $_POST['_ingredient_metabox'], 'rstr_ingredients_fild' ) ) {
		return $post_id;
	}
	if ( ! isset( $_POST['ingredient_3'] ) || ! wp_verify_nonce( $_POST['_ingredient_metabox'], 'rstr_ingredients_fild' ) ) {
		return $post_id;
	}
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

	if ( isset( $_POST['ingredient_0'] ) ) {
		update_post_meta( $post_id, 'ingredient_0', sanitize_text_field( $_POST['ingredient_0'] ) );
	} else {
		delete_post_meta( $post_id, 'ingredient_0' );
	}

	if ( isset( $_POST['ingredient_1'] ) ) {
		update_post_meta( $post_id, 'ingredient_1', sanitize_text_field( $_POST['ingredient_1'] ) );
	} else {
		delete_post_meta( $post_id, 'ingredient_1' );
	}

	if ( isset( $_POST['ingredient_2'] ) ) {
		update_post_meta( $post_id, 'ingredient_2', sanitize_text_field( $_POST['ingredient_2'] ) );
	} else {
		delete_post_meta( $post_id, 'ingredient_2' );
	}

	if ( isset( $_POST['ingredient_3'] ) ) {
		update_post_meta( $post_id, 'ingredient_3', sanitize_text_field( $_POST['ingredient_3'] ) );
	} else {
		delete_post_meta( $post_id, 'ingredient_3' );
	}

	return $post_id;
}
;
add_action( 'save_post', 'rstr_save_metabox', 10, 2 );