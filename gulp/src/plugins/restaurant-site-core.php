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






//==============================================================================================
//==============================================================================================


add_action( 'init', 'rs_create_taxonomy_soup' );
function rs_create_taxonomy_soup(){

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
}

add_action( 'init', 'rs_register_post_types_dishe' );

function rs_register_post_types_dishe(){
	
	register_post_type( 'dishe', [
		'label'  => esc_html__('Dishes','restaurant-site'),
		'labels' => [
			'name'               => esc_html__('Dishes','restaurant-site'),
			'singular_name'      => esc_html__('Dishe','restaurant-site'),
			'add_new'            => esc_html__('Add Dishe','restaurant-site'),
			'add_new_item'       => esc_html__('Add Dishe','restaurant-site'),
			'edit_item'          => esc_html__('Редактирование Dishe','restaurant-site'),
			'new_item'           => esc_html__('New Dishe','restaurant-site'),
			'view_item'          => esc_html__('View Dishe','restaurant-site'),
			'search_items'       => esc_html__('Found Dishe','restaurant-site'),
			'not_found'          => esc_html__('Dishe не найдено','restaurant-site'),
			'not_found_in_trash' => esc_html__('Dishe не найдено в корзине','restaurant-site'),
			'menu_name'          => esc_html__('Dishes','restaurant-site'),
		],
		'description'           => esc_html__('Dishes our restaurant','restaurant-site'),
		'suports' => array('title','editor','author','thumbnail'),
		'public'                => true,
		'publicly_queryable'  	=> true, 
		'show_ui'  		         => true, // зависит от public
		'show_in_menu'          => true, // показывать ли в меню админки
		'has_archive'           => true,
		
		
		
		// // 'exclude_from_search' => null, // зависит от public
		// // 'show_in_nav_menus'   => null, // зависит от public
		// // 'show_in_admin_bar'   => null, // зависит от show_in_menu
		// 'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		// 'rest_base'           => null, // $post_type. C WP 4.7
		// 'menu_position'       => null,
		// 'menu_icon'           => null,
		// //'capability_type'   => 'post',
		// //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		// //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		// 'hierarchical'        => false,
		// 'supports'            => [ 'title', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		// 'taxonomies'          => [],
		// // 'rewrite'             => true,
		// 'query_var'           => true,
	] );

}