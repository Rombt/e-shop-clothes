<?php

session_status() == PHP_SESSION_NONE ? session_start() : null;

add_action( 'wp_ajax_menu_page_view', 'rstr_menu_page_view' );
add_action( 'wp_ajax_nopriv_menu_page_view', 'rstr_menu_page_view' );
function rstr_menu_page_view() {
	global $restaurant_site_options;

	if ( ! wp_verify_nonce( $_POST['nonce'], 'rstr-ajax-nonce-view' ) ) {
		die;
	}

	$current = $_POST['paged'];

	if ( $_POST['type_page'] == 'select-view__menu-page' ) {
		$view_mode = $_SESSION['View_Mode_Menu_Page'] = $_POST['view_mod'];
		if ( class_exists( 'ReduxFramework' ) ) {
			if ( $view_mode == 'grid' ) {
				$posts_per_page = esc_html( $restaurant_site_options['menu_page_grid_posts_per_page'] );
			} else {
				$posts_per_page = esc_html( $restaurant_site_options['menu_page_list_posts_per_page'] );
			}
		}
		$query = rstr_custom_WPquery( 'food_menu_items', $posts_per_page, $current );

	} else if ( $_POST['type_page'] == 'select-view__recipes-page' ) {
		$view_mode = $_SESSION['View_Mode_Recipe_Page'] = $_POST['view_mod'];
		if ( class_exists( 'ReduxFramework' ) ) {
			if ( $view_mode == '3_columns' ) {
				$posts_per_page = esc_html( $restaurant_site_options['recipes_page_3_columns_posts_per_page'] );
			} else {
				$posts_per_page = esc_html( $restaurant_site_options['recipes_page_2_columns_posts_per_page'] );

			}
		}
		$query = rstr_custom_WPquery( 'recipes', $posts_per_page, $current );

	}

	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();
			if ( class_exists( 'ACF' ) ) {
				if ( $_POST['type_page'] == 'select-view__menu-page' ) {
					get_template_part( 'template-parts/parts/prod_card', $view_mode );
				} elseif ( $_POST['type_page'] == 'select-view__recipes-page' ) {
					get_template_part( 'template-parts/parts/recipe_card', $view_mode );
				}
			}
		}
	} else {
		// something
	}
	wp_reset_postdata();

	wp_die();
}


add_action( 'wp_ajax_blog_page_likes', 'rstr_blog_page_likes' );
add_action( 'wp_ajax_nopriv_blog_page_likes', 'rstr_blog_page_likes' );
function rstr_blog_page_likes() {
	if ( ! wp_verify_nonce( $_POST['nonce'], 'rstr-ajax-nonce-like' ) ) {
		die;
	}

	$post_id = $_POST['postID'];
	if ( get_post_meta( $post_id, 'desired_quantity_likes', true ) ) {
		$quantity_likes = get_post_meta( $post_id, 'desired_quantity_likes', true );
		$fild_likes = 'desired_quantity_likes';
	} elseif ( get_post_meta( $post_id, 'quantity_likes', true ) ) {
		$quantity_likes = get_post_meta( $post_id, 'quantity_likes', true );
		$fild_likes = 'quantity_likes';
	} else {
		$quantity_likes = 0;
		$fild_likes = 'quantity_likes';
	}

	if ( 'add' == $_POST['actionWithLike'] ) {
		$quantity_likes++;
	} else {
		$quantity_likes--;
	}

	update_post_meta( $post_id, $fild_likes, $quantity_likes );
	echo $quantity_likes;
	wp_die();

}

add_action( 'wp_ajax_recipes_page_stars', 'rstr_recipes_page_stars' );
add_action( 'wp_ajax_nopriv_recipes_page_stars', 'rstr_recipes_page_stars' );
function rstr_recipes_page_stars() {
	if ( ! wp_verify_nonce( $_POST['nonce'], 'rstr-ajax-nonce-star' ) ) {
		die;
	}

	// $user_id = get_current_user_id();		// todo пользователь в настройках темы указывает разрешено и не зарегистрированным пользователям участвывать в оценке
	// if ( $user_id === 0 ) {
	// 	echo json_encode( 'unregUser' );
	// 	wp_die();
	// }
	// $user_has_rated = false;




	$post_id = $_POST['postID'];
	$d_rating = intval( $_POST['d_rating'] );
	$UserHasRated = $_POST['UserHasRated'];
	$number_of_raters = 0;
	$rating = 0;

	$arr_ratings = unserialize( get_post_meta( $post_id, 'rating', true ) ) ?: [];

	if ( count( $arr_ratings ) == 0 ) {
		$arr_ratings[] = $number_of_raters;
		$arr_ratings[] = $d_rating;
	} else {
		$number_of_raters = $arr_ratings[0];
		$rating = $arr_ratings[1];
	}

	$number_of_raters = ( $UserHasRated == 'true' ) ? $number_of_raters + 1 : $number_of_raters;
	$rating = floor( ( ( $rating * $number_of_raters ) + $d_rating ) / $number_of_raters );
	$arr_ratings = [ $number_of_raters, $rating ];

	update_post_meta( $post_id, 'rating', serialize( $arr_ratings ) );
	echo json_encode( [ 'rating' => $rating ] );

	wp_die();

}