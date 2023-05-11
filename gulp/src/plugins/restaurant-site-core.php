<?php
/*
Plugin Name: Restaurant-site core
Plugin URI: #
Description: A plugin that implements Restaurant-site theme functionality
Version: 1.0
Author: Automattic - Rombt
Author URI: #
License: GPLv2 or later
Text Domain: restaurant-site-core
*/


if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

require_once (plugin_dir_path(__FILE__ ) . 'inc/elementor/elementor-addon.php') ;