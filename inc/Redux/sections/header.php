<?php 
defined( 'ABSPATH' ) || exit;


// Header sections start
Redux::set_section(
   $opt_name,
   array(
      'title'            => esc_html__('Header settings', 'restaurant-site'),
      'id'               => 'settings_header',
      'desc'             => esc_html__('Settings header site', 'restaurant-site'),
      'customizer_width' => '450',
      'subsections' => true,
      // 'icon'             => 'el el-home',
      'fields'           => array(
         array(
            'id'           => 'logo_site',
            'type'         => 'media',
            'url'          => true,
            'title'        => esc_html__('Site logo', 'restaurant-site'),
            'compiler'     => 'true',
            'preview_size' => 'full',
            'default' =>   array(
               'url' => esc_url(get_template_directory_uri()) . '/assets/img/logo.png'
            ),            
         ),
         array(
            'id'           => 'background-title-img',
            'type'         => 'media',
            'url'          => true,
            'title'        => esc_html__('Background title image', 'restaurant-site'),
            'compiler'     => 'true',
            'preview_size' => 'full',
            'default' =>   array(
               'url' => esc_url(get_template_directory_uri()) . '/assets/img/background-title-page-block.jpg'
            ),            
         ),
         array(
            'id'           => 'search_icon',
            'type'         => 'media',
            'url'          => true,
            'title'        => esc_html__('Search icon', 'restaurant-site'),
            'compiler'     => 'true',
            'preview_size' => 'full',
            'default' =>   array(
               'url' => esc_url(get_template_directory_uri()) . '/assets/img/search_icon-2.png'
            ),            
         ),
         array(
            'id'           => 'icon_cart',
            'type'         => 'media',
            'url'          => true,
            'title'        => esc_html__('Icon cart', 'restaurant-site'),
            'compiler'     => 'true',
            'preview_size' => 'full',
            'default' =>   array(
               'url' => esc_url(get_template_directory_uri()) . '/assets/img/icon_cart.png'
            ),            
         ),
         array(
            'id'           => 'icon_button_book',
            'type'         => 'media',
            'url'          => true,
            'title'        => esc_html__('Icon button book', 'restaurant-site'),
            'compiler'     => 'true',
            'preview_size' => 'full',
            'default' =>   array(
               'url' => esc_url(get_template_directory_uri()) . '/assets/img/icon_button-book.png'
            ),            
         ),
      ),
   )
);