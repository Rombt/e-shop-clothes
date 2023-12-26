<?php


function rstr_register_blocks() {

	if ( ! function_exists( 'register_block_type' ) ) {
		return;
	}

	// wp_register_script( 'rstr_recent_posts', plugins_url( '/rstr-recent-posts/rstr-recent-posts.js', __FILE__ ), [ 'wp-blocks', 'wp-element', 'wp-editor' ], 1.0 );
	// wp_register_style( 'rstr_recent_posts', plugins_url( '/rstr-recent-posts/rstr-recent-posts.css', __FILE__ ), [], 1.0 );
	// register_block_type( 'rstr/recent-posts', [ 'style' => 'rstr_recent_posts', 'editor_script' => 'rstr_recent_posts' ] );

	register_block_type( __DIR__ . 'rstr/recent-posts' );



}
add_action( 'init', 'rstr_register_blocks' );


