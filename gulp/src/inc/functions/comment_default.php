<?php


function rstr_comment_default( $comment, $args, $depth ) { // todo to use semantic tags

	$GLOBALS['comment'] = $comment;
	extract( $args, EXTR_SKIP );

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
	?>

	<<?php echo esc_attr( $tag ) ?>
		<?php comment_class( 'rstr_comment' ) ?>
		<?php echo 'id="comment-' . get_comment_ID() . '">'; ?>

		<?php if ( $depth > 1 ) { ?>
			<div class="comment-item child-level" style="margin-left:<?php echo $depth * 50 ?>px">
				<div class="response"></div>
			<?php } else { ?>
				<div class="comment-item">
				<?php } ?>
				<div class="wrap-img avatar">
					<?php if ( $args['avatar_size'] != 0 )
						echo get_avatar( $comment, $args['avatar_size'] ); ?>
				</div>
				<div class="rstr_comment__box">
					<?php printf( "<div class='rstr_comment__author'>" . esc_html__( '%s', 'restaurant-site' ), get_comment_author_link() ); ?>
					<p>
						<?php echo human_time_diff( get_comment_time( 'U' ), current_time( 'timestamp' ) ) ?>
					</p>
					<?php echo "</div>" ?>
					<?php comment_text() ?>

					<?php if ( $depth <= 5 ) { ?>
						<?php comment_reply_link( array_merge( $args, array(
							'add_below' => $add_below,
							'depth' => $depth,
							'max_depth' => $args['max_depth'],
							'reply_text' => '<div class="wrap-img rstr_comment__reply-icon"> <img src="//localhost:3000/ms/wp-content/themes/restaurant-site/assets/img/icon_reply.png" alt="reply icon"></div> <p>Reply</p>',
						) ) ) // todo  ?>

					<?php } ?>
					<?php if ( $comment->comment_approved == '0' ) : ?>
						<em class="comment-awaiting-moderation">
							<?php esc_html_e( 'Your comment is awaiting moderation.', 'restaurant-site' ) ?>
						</em>
						<br />
					<?php endif; ?>

				</div>

			</div>
			<?php if ( 'div' != $args['style'] ) : ?>
			</div>
		<?php endif; ?>
		<?php






}