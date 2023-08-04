<?php 
defined( 'ABSPATH' ) || exit;


// Speciality sections start
Redux::set_section(
   $opt_name,
   array(
      'title'            => esc_html__('Speciality section', 'restaurant-site'),
      'id'               => 'Speciality',
      'customizer_width' => '400px',
      // 'icon'             => 'el el-network',
      'fields'           => array(
         array(
            'id'       => 'speciality_maine-title',
            'type'     => 'text',
            'title'    => esc_html__('Maine Title number for Speciality section', 'restaurant-site'),
            'default'  => esc_html__('Speciality'),
         ),           array(
            'id'       => 'speciality_title-1',
            'type'     => 'text',
            'title'    => esc_html__('Title number 1 for Speciality section', 'restaurant-site'),
            'default'  => esc_html__('EXCELLENT SERVICE'),
         ),  
         array(
            'id'       => 'speciality_subtitle-1',
            'type'     => 'text',
            'title'    => esc_html__('Subtitle number 1 for Speciality section', 'restaurant-site'),
            'default'  => esc_html__('Survived not only five centuries, but also the leap into electr'),
         ),  
         array(
            'id'       => 'speciality_title-2',
            'type'     => 'text',
            'title'    => esc_html__('Title number 2 for Speciality section', 'restaurant-site'),
            'default'  => esc_html__('FREE Home DELIVERY'),
         ),  
         array(
            'id'       => 'speciality_subtitle-2',
            'type'     => 'text',
            'title'    => esc_html__('Subtitle number 2 for Speciality section', 'restaurant-site'),
            'default'  => esc_html__('Lorem Ipsum is simply dummy text of the printing and typesettin'),
         ),  
         array(
            'id'       => 'speciality_title-3',
            'type'     => 'text',
            'title'    => esc_html__('Title number 3 for Speciality section', 'restaurant-site'),
            'default'  => esc_html__('Cool atmosphere'),
         ),  
         array(
            'id'       => 'speciality_subtitle-3',
            'type'     => 'text',
            'title'    => esc_html__('Subtitle number 3 for Speciality section', 'restaurant-site'),
            'default'  => esc_html__('Letraset sheets containing Lorem Ipsum passages, and more recen'),
         ),  
         array(
            'id'           => 'speciality_img',
            'type'         => 'media',
            'url'          => true,
            'title'        => esc_html__('Specialty section image', 'restaurant-site'),
            'compiler'     => 'true',
            'preview_size' => 'full',
            'default' =>   array(
               'url' => esc_url(get_template_directory_uri()) . '/assets/img/speciality-block.jpg'
               ),            
            ),
      ),
   )
);