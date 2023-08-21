<?php
defined( 'ABSPATH' ) || exit;


// Menu page sections start
Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__( 'Recipe Page', 'restaurant-site' ),
		'id' => 'settings_recipes-single-page',
		'desc' => esc_html__( 'Recipe page settings', 'restaurant-site' ),
		'customizer_width' => '450',
		'subsection' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(
			array(
				'id' => 'background_food_step_img',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__( 'The the background image of "Food step" block', 'restaurant-site' ),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => esc_url( get_template_directory_uri() ) . '/assets/img/food-step-background.jpg'
				),
			),
			array(
				'id' => 'small_img',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__( 'The small image in the background', 'restaurant-site' ),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => esc_url( get_template_directory_uri() ) . '/assets/img/Image_228x228.jpg'
				),
			),
			array(
				'id' => 'rating-star-active_img',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__( 'The icon of rating star  active', 'restaurant-site' ),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => esc_url( get_template_directory_uri() ) . '/assets/img/star-rating-icon.png'
				),
			),
			array(
				'id' => 'rating-star-passive_img',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__( 'The icon of rating star passive', 'restaurant-site' ),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => esc_url( get_template_directory_uri() ) . '/assets/img/star-white-rating-icon.png'
				),
			),

		),
	)
);