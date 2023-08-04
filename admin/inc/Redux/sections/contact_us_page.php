<?php 
defined( 'ABSPATH' ) || exit;


// Menu page sections start
Redux::set_section(
   $opt_name,
   array(
      'title'            => esc_html__('Contact Page', 'restaurant-site'),
      'id'               => 'settings_contact-page',
      'desc'             => esc_html__('Contact us page settings', 'restaurant-site'),
      'customizer_width' => '450',
      'subsection' => true,
      // 'icon'             => 'el el-home',
      'fields'           => array(
         array(
            'id'       => 'our-address_title',
            'type'     => 'text',
            'title'    => esc_html__('Our Address title', 'restaurant-site'),
            'default'  => esc_html__('Our Address','restaurant-site'),
         ),
         array(
            'id'       => 'our-address',
            'type'     => 'textarea',
            'title'    => esc_html__('Add youre address', 'restaurant-site'),
            'default'  => __(wp_kses('<p>Luxury Restaurent</p><p>California Second Street</p><p>2nd floor</p>', array('p'=>array())),'restaurant-site'),
         ),
         array(
            'id'       => 'our-phone',
            'type'     => 'text',
            'title'    => esc_html__('Add youre phone number', 'restaurant-site'),
            'default'  => esc_html__('+91 8559 5585 6559'),
         ),
         array(
            'id'       => 'our-email',
            'type'     => 'text',
            'title'    => esc_html__('Add youre email', 'restaurant-site'),
            'default'  => esc_html__('info@luxuryrestaurent.com '),
         ),


         array(
            'id'       => 'button_title_contact-page',
            'type'     => 'text',
            'title'    => esc_html__('Button title', 'restaurant-site'),
            'default'  => esc_html__('send now','restaurant-site'),
         ),    
         array(
            'id'       => 'button_href_contact-page',
            'type'     => 'text',
            'title'    => esc_html__('Button href', 'restaurant-site'),
            'default'  => esc_url('#'),
         ),           
         


      ),
   )
);