<?php
/*
Plugin Name: Restaurant-site core
Plugin URI: #
Description: A plugin that implements Restaurant-site theme functionality
Version: 1.0
Author: Automattic - Rombt
Author URI: #
License: GPLv2 or later
Text Domain: restaurant-site
*/


if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}
require_once (plugin_dir_path(__FILE__ ) . 'inc\elementor-addon\elementor-addon.php') ;

function rs_rewrite_rules(){
	rs_register_post_types_dishe();

	flush_rewrite_rules();
}
add_action('after_switch_theme','rs_rewrite_rules');





//==============================================================================================
//==============================================================================================


add_action( 'init', 'rs_create_taxonomy' );
function rs_create_taxonomy(){

	register_taxonomy( 'soup', [ 'dishe' ], [
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => [
			'name'              => esc_html__('Soup','restaurant-site'),
			'singular_name'     => esc_html__('Soup','restaurant-site'),
			'search_items'      => esc_html__('Search soups','restaurant-site'),
			'all_items'         => esc_html__('All soups','restaurant-site'),
			'view_item '        => esc_html__('View soup','restaurant-site'),
			'parent_item'       => esc_html__('Parent soup','restaurant-site'),
			'parent_item_colon' => esc_html__('Parent soup:','restaurant-site'),
			'edit_item'         => esc_html__('Edit soup','restaurant-site'),
			'update_item'       => esc_html__('Update soup','restaurant-site'),
			'add_new_item'      => esc_html__('Add New soup','restaurant-site'),
			'new_item_name'     => esc_html__('New soup Name','restaurant-site'),
			'menu_name'         => esc_html__('Soup','restaurant-site'),
			'back_to_items'     => esc_html__('← Back to soup','restaurant-site'),
		],
		'description'           => esc_html__('Блюда нашего рестарана'),
		'rewrite'               => ['slug' => 'dishe'],
	] );

	register_taxonomy( 'salad', [ 'dishe' ], [
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => [
			'name'              => esc_html__('Salad','restaurant-site'),
			'singular_name'     => esc_html__('Salad','restaurant-site'),
			'search_items'      => esc_html__('Search salads','restaurant-site'),
			'all_items'         => esc_html__('All salads','restaurant-site'),
			'view_item '        => esc_html__('View salad','restaurant-site'),
			'parent_item'       => esc_html__('Parent salad','restaurant-site'),
			'parent_item_colon' => esc_html__('Parent salad:','restaurant-site'),
			'edit_item'         => esc_html__('Edit salad','restaurant-site'),
			'update_item'       => esc_html__('Update salad','restaurant-site'),
			'add_new_item'      => esc_html__('Add New salad','restaurant-site'),
			'new_item_name'     => esc_html__('New salad Name','restaurant-site'),
			'menu_name'         => esc_html__('Salad','restaurant-site'),
			'back_to_items'     => esc_html__('← Back to salad','restaurant-site'),
		],
		'description'           => esc_html__('Блюда нашего рестарана'),
		'rewrite'               => ['slug' => 'salad'],
	] );
}

function rs_register_post_types_dishe() {
	$labels = array(
		'name'                  => esc_html_x( 'Dishes', 'Post type general name', 'restaurant-site' ),
		'singular_name'         => esc_html_x( 'Dishe', 'Post type singular name', 'restaurant-site' ),
		'menu_name'             => esc_html_x( 'Dishes', 'Admin Menu text', 'restaurant-site' ),
		'name_admin_bar'        => esc_html_x( 'Dishe', 'Add New on Toolbar', 'restaurant-site' ),
		'add_new'               => esc_html__( 'Add New', 'restaurant-site' ),
		'add_new_item'          => esc_html__( 'Add New Dishe', 'restaurant-site' ),
		'new_item'              => esc_html__( 'New Dishe', 'restaurant-site' ),
		'edit_item'             => esc_html__( 'Edit Dishe', 'restaurant-site' ),
		'view_item'             => esc_html__( 'View Dishe', 'restaurant-site' ),
		'all_items'             => esc_html__( 'All Dishes', 'restaurant-site' ),
		'search_items'          => esc_html__( 'Search Dishes', 'restaurant-site' ),
		'parent_item_colon'     => esc_html__( 'Parent Dishes:', 'restaurant-site' ),
		'not_found'             => esc_html__( 'No Dishes found.', 'restaurant-site' ),
		'not_found_in_trash'    => esc_html__( 'No Dishes found in Trash.', 'restaurant-site' ),
		'featured_image'        => esc_html_x( 'Dishe Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'restaurant-site' ),
		'set_featured_image'    => esc_html_x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'restaurant-site' ),
		'remove_featured_image' => esc_html_x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'restaurant-site' ),
		'use_featured_image'    => esc_html_x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'restaurant-site' ),
		'archives'              => esc_html_x( 'Dishe archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'restaurant-site' ),
		'insert_into_item'      => esc_html_x( 'Insert into Dishe', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'restaurant-site' ),
		'uploaded_to_this_item' => esc_html_x( 'Uploaded to this Dishe', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'restaurant-site' ),
		'filter_items_list'     => esc_html_x( 'Filter Dishes list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'restaurant-site' ),
		'items_list_navigation' => esc_html_x( 'Dishes list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'restaurant-site' ),
		'items_list'            => esc_html_x( 'Dishes list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'restaurant-site' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'dishesss' ),
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => 4,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		'menu_icon'				=> 'dashicons-image-filter',
	);

	register_post_type( 'dishe', $args );
}

add_action( 'init', 'rs_register_post_types_dishe' );