<?php 
defined( 'ABSPATH' ) || exit;


// Footer sections start
Redux::set_section(
   $opt_name,
   array(
      'title'            => esc_html__('Footer settings', 'restaurant-site'),
      'id'               => 'settings_footer',
      'customizer_width' => '400px',
      // 'icon'             => 'el el-network',
      'fields'           => array(
         array(
            'id'        => 'social_networks-accordion-start',
            'type'      => 'accordion',
            'title'    => esc_html__( 'Social Networks Section', 'restaurant-site' ),
            'subtitle'  => 'Add your social networks in this section ',
            'position'  => 'start',    
            ),         
         
            array(
               'id'       => 'social_networks_fb-link',
               'type'     => 'text',
               'title'    => esc_html__('Facebook link', 'restaurant-site'),
               'default'  => esc_url('https://www.facebook.com/'),
            ),
            array(
               'id'           => 'fb-link_icon',
               'type'         => 'media',
               'url'          => true,
               'title'        => esc_html__('Facebook icon', 'restaurant-site'),
               'compiler'     => 'true',
               'preview_size' => 'full',
               'default' =>   array(
                  'url' => esc_url(get_template_directory_uri()) . '/assets/img/icon_facebook.png'
               ),            
            ),

            array(
               'id'       => 'social_networks_instagram-link',
               'type'     => 'text',
               'title'    => esc_html__('Instagram link', 'restaurant-site'),
               'default'  => 'https://www.instagram.com/',
            ),
            array(
               'id'           => 'social_networks_instagram_icon',
               'type'         => 'media',
               'url'          => true,
               'title'        => esc_html__('Instagram icon', 'restaurant-site'),
               'compiler'     => 'true',
               'preview_size' => 'full',
               'default' =>   array(
                  'url' => esc_url(get_template_directory_uri()) . '/assets/img/icon_instagram.png'
               ),            
            ),

            array(
               'id'       => 'social_networks_twitt-link',
               'type'     => 'text',
               'title'    => esc_html__('Twitter link', 'restaurant-site'),
               'default'  => esc_url('https://twitter.com/'),
            ),
            array(
               'id'           => 'social_networks_twitt_icon',
               'type'         => 'media',
               'url'          => true,
               'title'        => esc_html__('Twitter icon', 'restaurant-site'),
               'compiler'     => 'true',
               'preview_size' => 'full',
               'default' =>   array(
                  'url' => esc_url(get_template_directory_uri()) . '/assets/img/icon_twitter.png'
               ),
            ),

         array(
            'id'        => 'social_networks-accordion-end',
            'type'      => 'accordion',
            'position'  => 'end'
         ),            

         array(
            'id'        => 'footer_title_section-accordion-start',
            'type'      => 'accordion',
            'title'    => esc_html__( 'Footer Title Section', 'restaurant-site' ),
            'subtitle'  => 'All titles of footer in this section ',
            'position'  => 'start',    
         ), 

            array(
               'id'       => 'title_one',
               'type'     => 'text',
               'title'    => esc_html__('Navigation', 'restaurant-site'),
               'desc'     => esc_html__('Navigation', 'restaurant-site'),
               'default'  => esc_html__('Navigation'),
            ),
            array(
               'id'       => 'title_two',
               'type'     => 'text',
               'title'    => esc_html__('News letter', 'restaurant-site'),
               'desc'     => esc_html__('News letter', 'restaurant-site'),
               'default'  => esc_html__('News letter'),
            ),
            array(
               'id'       => 'title_three',
               'type'     => 'text',
               'title'    => esc_html__('Our app avilable', 'restaurant-site'),
               'desc'     => esc_html__('Our app avilable', 'restaurant-site'),
               'default'  => esc_html__('Our app avilable'),
            ),

         array(
            'id'        => 'footer_title_section-accordion-end',
            'type'      => 'accordion',
            'position'  => 'end'
         ),    


      ),
   )

);