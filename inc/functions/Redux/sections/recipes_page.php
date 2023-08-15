<?php
defined( 'ABSPATH' ) || exit;


// Menu page sections start
Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__( 'Recipes Page', 'restaurant-site' ),
		'id' => 'settings_recipes-page',
		'desc' => esc_html__( 'Recipes page settings', 'restaurant-site' ),
		'customizer_width' => '450',
		'subsection' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(
			array(
				'id' => 'recipes_title',
				'type' => 'text',
				'title' => esc_html__( 'Recipes title', 'restaurant-site' ),
				'default' => esc_html__( 'Our Spescial Recipes', 'restaurant-site' ),
			),
			array(
				'id' => 'recipes_subtitle',
				'type' => 'editor',
				'args' => array(
					'media_buttons' => false,
					// 'textarea_rows' => 5,
				),
				'title' => esc_html__( 'Recipes Subtitle', 'restaurant-site' ),
				'default' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem excepturi ab natus cum iure in, veniam tempore magnam nostrum, itaque alias nemo id incidunt architecto debitis quos voluptates ipsum officia' ),
			),

		),
	)
);