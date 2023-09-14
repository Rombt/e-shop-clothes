<?php



add_action( 'add_meta_boxes', 'rstr_likes_meta_box', 10, 2 );
function rstr_likes_meta_box( $post_type, $post ) {
	add_meta_box( 'rstr_likes_mb', esc_html__( 'Likes', 'restaurant-site' ), 'rstr_likes_mb_html', [ 'post', 'recipes' ], 'side' );
}

function rstr_likes_mb_html( $post ) {

	$value = get_post_meta( $post->ID, 'desired_quantity_likes', true );
	wp_nonce_field( 'rstr_likes_fild', '_likes_fild_metabox' );
	?>

	<div class="likes-block" style="">
		<div class="real-likes" style="">
			<span>Real quantity</span>
			<div class="quantity-likes">9568</div>
		</div>
		<div class="desired-likes" style="">
			<label for="desired_quantity_likes">Set the desired quantity</label>
			<input type="text" id="desired_quantity_likes" name="desired_quantity_likes" value=<?php echo esc_html( $value ) ?>>
		</div>
	</div>

	<?php

}

function rstr_save_metabox_likes( $post_id, $post ) {

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}
	if ( $post->post_type != 'post' ) {
		return $post_id;
	}
	$post_type = get_post_type_object( $post->post_type );
	if ( ! current_user_can( $post_type->cap->edit_post, $post_id ) ) {
		return $post_id;
	}

	// foreach ( $_POST as $field_name => $field_value ) {

	if ( ! wp_verify_nonce( $_POST['_likes_fild_metabox'], 'rstr_likes_fild' ) ) {
		return $post_id;
	}

	if ( isset( $_POST['desired_quantity_likes'] ) ) {
		update_post_meta( $post_id, 'desired_quantity_likes', sanitize_text_field( $_POST['desired_quantity_likes'] ) );
	} else {
		delete_post_meta( $post_id, 'desired_quantity_likes' );
	}

	// }

	return $post_id;
}
add_action( 'save_post', 'rstr_save_metabox_likes', 10, 2 );