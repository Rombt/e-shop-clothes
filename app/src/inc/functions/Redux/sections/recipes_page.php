<?php
defined( 'ABSPATH' ) || exit;


Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__( 'Recipes Page', 'restaurant-site' ),
		'id' => 'settings_recipes-page',
		'desc' => esc_html__( 'Recipes page settings', 'restaurant-site' ),
		'customizer_width' => '450',
		'subsection' => true,
		'fields' => array(
			array(
				'id' => 'recipes_title',
				'type' => 'text',
				'title' => esc_html__( 'Title of Recipes page', 'restaurant-site' ),
				'default' => esc_html__( 'Our Spescial Recipes', 'restaurant-site' ),
			),
			array(
				'id' => 'recipes_subtitle',
				'type' => 'editor',
				'args' => array(
					'media_buttons' => false,
					// 'textarea_rows' => 5,
				),
				'title' => esc_html__( 'Subtitle of Recipes page', 'restaurant-site' ),
				'default' => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem excepturi ab natus cum iure in, veniam tempore magnam nostrum, itaque alias nemo id incidunt architecto debitis quos voluptates ipsum officia' ),
			),
			array(
				'id' => 'recipes_page_2_columns_posts_per_page',
				'type' => 'text',
				'title' => esc_html__( 'Posts Per Page to two columns view', 'restaurant-site' ),
				'default' => esc_html__( 8, 'restaurant-site' ),
			),
			array(
				'id' => 'recipes_page_3_columns_posts_per_page',
				'type' => 'text',
				'title' => esc_html__( 'Posts Per Page to three columns view', 'restaurant-site' ),
				'default' => esc_html__( 12, 'restaurant-site' ),
			),
			array(
				'id' => 'rating-section-accordion-start',
				'type' => 'accordion',
				'title' => esc_html__( 'Rating Section', 'restaurant-site' ),
				'subtitle' => 'Add settings for rating of recipes',
				'position' => 'start',
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
			array(
				'id' => 'quantity-rating-stars',
				'type' => 'text',
				'title' => esc_html__( 'Quantity of rating stars', 'restaurant-site' ),
				'default' => esc_html__( 5, 'restaurant-site' ),
			),
			array(
				'id' => 'rights_set_rating',
				'type' => 'switch',
				'on' => 'Yes',
				'off' => 'No',
				'title' => esc_html__( 'Rights for set rating', 'restaurant-site' ),
				'subtitle' => esc_html__( 'Would you allow set rating for unregistered users', 'restaurant-site' )
			),
			array(
				'id' => 'rating-section-accordion-end',
				'type' => 'accordion',
				'position' => 'end'
			),

		),
	)
);