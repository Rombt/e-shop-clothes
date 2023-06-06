<?php 
defined( 'ABSPATH' ) || exit;


// Opening Hours sections start
Redux::set_section(
   $opt_name,
   array(
      'title'            => esc_html__('Opening Hours section', 'restaurant-site'),
      'id'               => 'opening-hours',
      'customizer_width' => '400px',
      // 'icon'             => 'el el-network',
      'fields'           => array(
         array(
            'id'       => 'opening-hours_maine-title',
            'type'     => 'text',
            'title'    => esc_html__('Maine Title for Speciality Section', 'restaurant-site'),
            'default'  => esc_html__('Opening Hours','restaurant-site'),
         ),           
         array(
            'id'       => 'opening-hours_title-1',
            'type'     => 'text',
            'title'    => esc_html__('Title number 1 for opening hours section', 'restaurant-site'),
            'default'  => esc_html__('Monday to Friday','restaurant-site'),
         ),  
         array(
            'id'       => 'opening-hours_subtitle-1',
            'type'     => 'text',
            'title'    => esc_html__('Subtitle number 1 for opening hours section', 'restaurant-site'),
            'default'  => __(wp_kses('<span>10am - 10pm</span>','post'),'restaurant-site'),
         ),  
         array(
            'id'       => 'opening-hours_title-2',
            'type'     => 'text',
            'title'    => esc_html__('Title number 2 for opening hours section', 'restaurant-site'),
            'default'  => esc_html__('Saturday to Sunday','restaurant-site'),
         ),  
         array(
            'id'       => 'opening-hours_subtitle-2',
            'type'     => 'text',
            'title'    => esc_html__('Subtitle number 2 for opening hours section', 'restaurant-site'),
            'default'  => __(wp_kses('<span>09am - 11pm</span>','post'), 'restaurant-site'),
         ),  
         array(
            'id'           => 'opening-hours_img',
            'type'         => 'media',
            'url'          => true,
            'title'        => esc_html__('Specialty section image', 'restaurant-site'),
            'compiler'     => 'true',
            'preview_size' => 'full',
            'default' =>   array(
               'url' => esc_url(get_template_directory_uri()) . '/assets/img/Image_210x210.jpg'
               ),            
            ),
      ),
   )
);