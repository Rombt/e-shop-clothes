<?php



add_action( 'wp_ajax_menu_page_view', 'rstr_menu_page_view' );
add_action( 'wp_ajax_nopriv_menu_page_view', 'rstr_menu_page_view' );
function rstr_menu_page_view() {

	if ( ! wp_verify_nonce( $_POST['nonce'], 'rstr-ajax-nonce' ) ) {
		die;
	}


	$view_mod = $_POST['view_mod'];

	if ( $_POST['view_mod'] == 'grid' ) {
		echo $_POST['view_mod'];
		get_template_part( 'template-parts/parts/prod_card', 'grid' );

	} else if ( $_POST['view_mod'] == 'list' ) {
		echo $_POST['view_mod'];
		get_template_part( 'template-parts/parts/prod_card', 'list' );

	}

	wp_die();
}
;