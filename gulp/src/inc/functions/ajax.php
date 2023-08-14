<?php

session_status() == PHP_SESSION_NONE ? session_start() : null;

add_action( 'wp_ajax_menu_page_view', 'rstr_menu_page_view' );
add_action( 'wp_ajax_nopriv_menu_page_view', 'rstr_menu_page_view' );
function rstr_menu_page_view() {

	if ( ! wp_verify_nonce( $_POST['nonce'], 'rstr-ajax-nonce' ) ) {
		die;
	}

	$current = $_POST['paged'];


	if ( $_POST['type_page'] == 'select-view__menu-page' ) {
		$view_mode = $_SESSION['View_Mode_Menu_Page'] = $_POST['view_mod'];
		$posts_per_page = ( $_SESSION['View_Mode_Menu_Page'] == 'grid' ) ? 9 : 12;
		$query = rst_custom_page_WPquery( 'food_menu_items', $posts_per_page, $current );

	} else if ( $_POST['type_page'] == 'select-view__recipes-page' ) {
		$view_mode = $_SESSION['View_Mode_Recipe_Page'] = $_POST['view_mod'];
		$posts_per_page = 12;
		$query = rst_custom_page_WPquery( 'recipes', $posts_per_page, $current );

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
;