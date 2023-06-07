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
            'id'       => 'menu_title',
            'type'     => 'text',
            'title'    => esc_html__('Menu title', 'restaurant-site'),
            'default'  => esc_html__('Menu Grid View','restaurant-site'),
         ), 
         array(
            'id'       => 'button_title',
            'type'     => 'text',
            'title'    => esc_html__('Button title', 'restaurant-site'),
            'default'  => esc_html__('Explor food menu','restaurant-site'),
         ),    
         array(
            'id'       => 'button_href',
            'type'     => 'text',
            'title'    => esc_html__('Button href', 'restaurant-site'),
            'default'  => esc_url('#'),
         ),    

      ),
   )
);