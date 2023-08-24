<?php

session_status() == PHP_SESSION_NONE ? session_start() : null;

add_action( 'wp_ajax_menu_page_view', 'rstr_menu_page_view' );
add_action( 'wp_ajax_nopriv_menu_page_view', 'rstr_menu_page_view' );
function rstr_menu_page_view() {
	global $restaurant_site_options;

	if ( ! wp_verify_nonce( $_POST['nonce'], 'rstr-ajax-nonce' ) ) {
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
;