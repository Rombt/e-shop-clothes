<div class="wrap-ingredient">
	<input type="text" class="ingredient-input" id="<?php echo $value . '_' . $key_field ?>"
		name="<?php echo $value . '_' . $key_field ?>" value="<?php echo esc_attr( $value_field ) ?>"
		data-post_id="<?php echo esc_attr( $args['post_id'] ) ?>">
	<div data-post_id="<?php echo esc_attr( $args['post_id'] ) ?>" class="dell-ingredient"
		id="<?php echo $value . '_' . $key_field ?>">
	</div>
</div>