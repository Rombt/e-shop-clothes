<?php 
defined( 'ABSPATH' ) || exit;


// Menu page sections start
Redux::set_section(
   $opt_name,
   array(
      'title'            => esc_html__('Recipies Page', 'restaurant-site'),
      'id'               => 'settings_recipies-page',
      'desc'             => esc_html__('Recipies page settings', 'restaurant-site'),
      'customizer_width' => '450',
      'subsection' => true,
      // 'icon'             => 'el el-home',
      'fields'           => array(
         array(
            'id'       => 'recipies_title',
            'type'     => 'text',
            'title'    => esc_html__('Recipies title', 'restaurant-site'),
            'default'  => esc_html__('Our Spescial Recipies','restaurant-site'),
         ), 
         array(
            'id'       => 'recipies_subtitle',
            'type'     => 'editor',
				'args'    => array(
					'media_buttons' => false,
					// 'textarea_rows' => 5,
				),            
            'title'    => esc_html__('Recipies Subtitle', 'restaurant-site'),
            'default'  => esc_html__('Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem excepturi ab natus cum iure in, veniam tempore magnam nostrum, itaque alias nemo id incidunt architecto debitis quos voluptates ipsum officia'),
         ),   

      ),
   )
);