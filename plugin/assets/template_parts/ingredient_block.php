<div class="wrap-ingredient">
	<input type="text" class="ingredient-input" id="<?php echo esc_attr( $value ) ?>"
		name="<?php echo esc_attr( $value ) ?>"
		value="<?php echo esc_attr( get_post_meta( $post->ID, $value, true ) ); ?>">
	<div data-post_id="<?php echo esc_attr( $post_id ) ?>" class="dell-ingredient" id="<?php echo esc_attr( $value ) ?>">
	</div>
</div>