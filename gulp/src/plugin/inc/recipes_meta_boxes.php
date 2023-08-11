<?php


add_action( 'add_meta_boxes', 'rstr_recipes_meta_box', 10, 2 );
function rstr_recipes_meta_box( $post_type, $post ) {

	add_meta_box( 'rstr_recipe_mb', esc_html__( 'Recipe data', 'restaurant-site' ), 'rstr_recipe_mb_html', 'recipes', 'normal' );


}





function rstr_recipe_mb_html( $post ) {

	$ingredients = get_post_meta( $post->ID, 'ingredient', true );

	?>

	<div class="ingredient-block">
		<label for="ingredients">
			<?php esc_html_e( 'ingredients', 'restaurant-site' ); ?>
		</label>
		<input type="text" class="ingredient-input" id="ingredient" name="Ingredient"
			value="<?php echo esc_attr( $ingredients ); ?>">
		<div class="add-button">Add Ingredient</div>
	</div>

	<?php

}