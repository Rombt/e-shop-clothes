<div class="wrap-ingredient">
	<input type="text" class="ingredient-input" id="<?php echo $value . '_' . $key_field ?>"
		name="<?php echo $value . '_' . $key_field ?>" value="<?php echo esc_attr( $value_field ) ?>"
		data-post_id="<?php echo esc_attr( $args['post_id'] ) ?>">

	<?php if ( isset( $arr_additional_fields ) && count( $arr_additional_fields ) != 0 ) :

		foreach ( $arr_additional_fields as $name_additional_field => $value_additional_field ) : ?>

			<input type="text" class="additional-field" id="<?php echo $name_additional_field . '_' . $key_field ?>"
				name="<?php echo $name_additional_field . '_' . $key_field ?>"
				value="<?php echo esc_attr( $value_additional_field ) ?>">

		<?php endforeach; ?>
	<?php endif; ?>





	<div data-post_id="<?php echo esc_attr( $args['post_id'] ) ?>" class="dell-ingredient"
		id="<?php echo $value . '_' . $key_field ?>">
	</div>
</div>