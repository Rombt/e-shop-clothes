<?php

session_status() == PHP_SESSION_NONE ? session_start() : null;

add_action( 'wp_ajax_menu_page_view', 'rstr_menu_page_view' );
add_action( 'wp_ajax_nopriv_menu_page_view', 'rstr_menu_page_view' );
function rstr_menu_page_view() {

	if ( ! wp_verify_nonce( $_POST['nonce'], 'rstr-ajax-nonce' ) ) {
		die;
	}

	$_SESSION['View_Mode_Menu_Page'] = $_POST['view_mod'];

	$current = $_POST['paged'];
	$query_Menu_items = rst_menu_page_WPquery( $current );


	if ( $query_Menu_items->have_posts() ) {
		while ( $query_Menu_items->have_posts() ) {
			$query_Menu_items->the_post();
			if ( class_exists( 'ACF' ) ) {
				get_template_part( 'template-parts/parts/prod_card', $_SESSION['View_Mode_Menu_Page'] );
			}
		}
	} else {
		// something
	}
	wp_reset_postdata();







	wp_die();
}
;