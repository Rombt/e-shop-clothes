<?php
// if ( post_password_required() ) {
// 	return;
// }


// $post_id = get_the_ID();
// $user = wp_get_current_user();
// $user_identity = $user->exists() ? $user->display_name : '';

// $req = get_option( 'require_name_email' );
?>


<div class="background comments-background">
	<div class="conteiner comments">
		<div class="comments__row">
			<h2>
				<?php comments_number( esc_html__( 'Comments', 'restaurant-site' ) . ' (0) ', esc_html__( 'Comment', 'restaurant-site' ) . ' (1)', esc_html__( 'Comments', 'restaurant-site' ) . ' (%)' ) ?>
			</h2>


			<?php wp_list_comments( array( 'callback' => 'rstr_comment_default', 'style' => 'div', 'max_depth' => 2, 'avatar_size' => 55, ) ); ?>
			<?php // wp_list_comments(); ?>
			<?php the_comments_navigation(); ?>
			<?php comment_form(); ?>


		</div>

	</div>
</div>