<?php

if (!empty($_SERVER['SCRIPT_FILENAME'] && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))) {
	die('Please do not load this page directly. Thanks');
}

if (post_password_required()) { // todo add styles for this section!!!!!
?> ?>
	<p class="nocomments">
		<?php _e("This post is password protected. Enter the password to view comments.", 'restaurant-site') ?>
	</p>
<?php return;
}

$post_id = get_the_ID();
$user = wp_get_current_user();
$user_identity = $user->exists() ? $user->display_name : '';
$aria_req = true; // todo  значенине должно задаваться в опциях темы
$html5 = 'html5';
$req = true; // get_option( 'require_name_email' );
$html_req = ($req ? " required='required'" : '');

?>


<div class="background comments-background">
	<div class="conteiner comments" id="comments">
		<?php // if ( have_comments() ) : 
		?>
		<div class="comments__row">
			<h2>
				<?php comments_number(esc_html__('Comments', 'restaurant-site') . ' (0)', esc_html__('Comment', 'restaurant-site') . ' (1)', esc_html__('Comments', 'restaurant-site') . ' &#40;%&#41;') ?>
			</h2>
			<?php // if ( have_comments() ) : 
			?>
			<?php if (post_password_required()) : // todo add styles for this section!!!!!
			?>
				<p class="comments-protected">
					<?php esc_html_e('This post is password protected. Enter the password to view comments.', 'restaurant-site'); ?>
				</p>
			<?php
				return;
			endif; ?>
			<?php if (have_comments()) : ?>
				<?php wp_list_comments(array('callback' => 'rstr_comment_default', 'style' => 'div', 'max_depth' => 5, 'avatar_size' => 55,)); ?>
				<?php if (get_comment_pages_count() > 1) : // todo !!!!! are there comments to navigate,  add styles for this section!!!!! 
				?>
					<nav class="comments-nav" class="pager">
						<div class="previous">
							<?php previous_comments_link(esc_html__('&larr; Older comments', 'restaurant-site')); ?>
						</div>
						<div class="next">
							<?php next_comments_link(esc_html__('Newer comments &rarr;', 'restaurant-site')); ?>
						</div>
					</nav>
				<?php endif; ?>
			<?php endif; ?>
		</div>
		<?php // endif; 
		?>
		<?php
		if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) : // todo add styles for this section!!!!!
		?>
			<p class="no-comments">
				<?php esc_html_e('Comments are closed.', 'restaurant-site'); ?>
			</p>
		<?php endif; ?>


	</div>
</div>

<div class="background background-comment-form">
	<div class="conteiner leave-comment">
		<div class="leave-comment__row">
			<?php
			$rstr_args_form_comment = array(
				'fields' => [
					'author' => '  <div class="leave-comment-form__input">
												<img src="' . get_site_url() . '/wp-content/themes/restaurant-site/assets/img/form_icon_name.png" alt="">
												<p>Name*</p>
												<input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . ($aria_req ? ' aria-required="true"' : '') . $html_req . ' />
											</div>',
					'email' => '   <div class="leave-comment-form__input">
												<img src="' . get_site_url() . '/wp-content/themes/restaurant-site/assets/img/form_icon_email.png" alt="">
												<p>Email*</p>
												<input id="email" name="email" ' . ($html5 ? 'type="email"' : 'type="text"') . ' value="' . esc_attr($commenter['comment_author_email']) . '" size="30" aria-describedby="email-notes"' . ($aria_req ? ' aria-required="true"' : '') . $html_req . ' />
											</div>',
				],
				'comment_field' => '<div class="leave-comment-form__textarea">
														
														<label for="comment"> <img src="' . get_site_url() . '/wp-content/themes/restaurant-site/assets/img/form_icon_masage.png" alt="">' . _x('Masage*', 'noun', 'restaurant-site') . '</label>
														<textarea id="comment" name="comment" cols="45" rows="8"  aria-required="true" required="required"></textarea>
													</div>',
				'must_log_in' => '<p class="must-log-in">' . sprintf(__('You must be <a href="%s">logged in</a> to post a comment.'), wp_login_url(apply_filters('the_permalink', get_permalink($post_id)))) . '</p>',
				'logged_in_as' => '',
				'comment_notes_before' => '',
				'comment_notes_after' => '',
				'id_form' => 'commentform',
				'id_submit' => 'submit',
				'class_container' => 'leave-comment-form',
				'class_form' => 'leave-comment-form',
				'class_submit' => 'button-with-border',
				'name_submit' => 'submit',
				'title_reply' => __('Leave a Comment'),
				'title_reply_to' => __('Leave a Comment to %s'),
				'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
				'title_reply_after' => '</h2>',
				'cancel_reply_before' => '',
				'cancel_reply_after' => '',
				'cancel_reply_link' => __('<div class="close-window"></div>'),
				'label_submit' => __('Comment now'),
				'submit_button' => '<button name="%1$s" type="submit" id="%2$s" class="%3$s" > %4$s </button>',
				'submit_field' => '<p class="form-submit">%1$s %2$s</p>',
			);
			add_filter('comment_form_fields', 'rstr_reorder_comment_fields');
			function rstr_reorder_comment_fields($fields)
			{
				$new_fields = array();
				$myorder = array('author', 'email', 'comment');
				foreach ($myorder as $key) {
					$new_fields[$key] = $fields[$key];
					unset($fields[$key]);
				}
				if ($fields)
					foreach ($fields as $key => $val)
						$new_fields[$key] = $val;
				return $new_fields;
			}
			comment_form($rstr_args_form_comment);
			?>
		</div>
	</div>
</div>