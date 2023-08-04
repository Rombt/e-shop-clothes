<?php
defined( 'ABSPATH' ) || exit;


// Pagination sections start
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Pagination settings', 'restaurant-site' ),
		'id'               => 'settings_pagination',
		'desc'             => esc_html__( 'Settings pagination site', 'restaurant-site' ),
		'customizer_width' => '450',
		'subsections'      => true,
		'fields'           => array(
			array(
				'id'           => 'pagination-prev',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Pagination Prev', 'restaurant-site' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
				'default'      => array(
					'url' => esc_url( get_template_directory_uri() ) . '/assets/img/pagination-left-arrow.png'
				),
			),
			array(
				'id'           => 'pagination-next',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Pagination Next', 'restaurant-site' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
				'default'      => array(
					'url' => esc_url( get_template_directory_uri() ) . '/assets/img/pagination-right-arrow.png'
				),
			),
		),
	)
);