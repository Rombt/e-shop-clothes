<?php
/**
 * Plugin Name: Elementor Addon
 * Description: my test widget
 * Version:     1.0.0
 * Author:      Rombt
 * Author URI:  #
 * Text Domain: restaurant-site-widget
 */

function register_hello_world_widget( $widgets_manager ) {

	require_once( __DIR__ . '\includes\widgets\dish-widget.php' );

	$widgets_manager->register( new \Elementor_Dish_Widget() );

}
add_action( 'elementor/widgets/register', 'register_hello_world_widget' );