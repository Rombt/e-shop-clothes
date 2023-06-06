<?php 
defined( 'ABSPATH' ) || exit;


// Menu page sections start
Redux::set_section(
   $opt_name,
   array(
      'title'            => esc_html__('Menu Page', 'restaurant-site'),
      'id'               => 'settings_menu-page',
      'desc'             => esc_html__('Menu page settings', 'restaurant-site'),
      'customizer_width' => '450',
      'subsection' => true,
      // 'icon'             => 'el el-home',
      'fields'           => array(
         array(
            'id'           => 'menu-page_img',
            'type'         => 'media',
            'url'          => true,
            'title'        => esc_html__('Menu Page image', 'restaurant-site'),
            'compiler'     => 'true',
            'preview_size' => 'full',
            'default' =>   array(
               'url' => esc_url(get_template_directory_uri()) . '/assets/img/'
            ),            
         ),

      ),
   )
);