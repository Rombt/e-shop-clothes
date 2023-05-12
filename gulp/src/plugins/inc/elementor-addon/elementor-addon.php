<?php



/**
 * Plugin Name: Elementor Restaurant-site Addon
 * Description: Elementor addon for the Restaurant-site theme.
 * Plugin URI:  #
 * Version:     1.0.0
 * Author:      Rombt
 * Author URI:  #
 * Text Domain: restaurant_site_addon
 * 
 * Elementor tested up to: 3.7.0
 * Elementor Pro tested up to: 3.7.0
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}




//      не работает:
function elementor_restaurant_site_addon() {

	require_once( __DIR__ . '/includes/plugin.php' );

	\Elementor_Restaurant_Site_Addon\Plugin::instance();

}
add_action( 'plugins_loaded', 'elementor_restaurant_site_addon' );



function add_elementor_widget_categories( $elements_manager ) {

	$elements_manager->add_category(
		'restaurant-site',
		[
			'title' => esc_html__( 'Restaurant site', 'restaurant-site-core' ),
			// 'icon' => 'fa fa-plug',
			'icon' => 'eicon-code',
		]
	);

}
add_action( 'elementor/elements/categories_registered', 'add_elementor_widget_categories' );