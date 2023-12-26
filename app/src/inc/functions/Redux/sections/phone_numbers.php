<?php 
defined( 'ABSPATH' ) || exit;


// Phone-numbers sections start
Redux::set_section(
   $opt_name,
   array(
      'title'            => esc_html__('Phone-numbers', 'restaurant-site'),
      'id'               => 'phone_numbers',
      'customizer_width' => '400px',
      // 'icon'             => 'el el-network',
      'fields'           => array(
         array(
            'id'       => 'phone-numbers_home-delivery',
            'type'     => 'text',
            'title'    => esc_html__('Number phone for block home delivery', 'restaurant-site'),
            'default'  => esc_html__('1-008 005 006'),
         ),         
         array(
            'id'       => 'phone-numbers_reservation',
            'type'     => 'text',
            'title'    => esc_html__('Number phone for block a reservation', 'restaurant-site'),
            'default'  => esc_html__('1-007 000 005'),
         ),
      ),
   )
);