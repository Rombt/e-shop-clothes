<?php 
defined( 'ABSPATH' ) || exit;


// Typography sections start

Redux::set_section(
	$opt_name,
	array(
		'title'  => esc_html__( 'Buttons app', 'restaurant-site' ),
		'id'     => 'button-app-typography',
		'desc'   => esc_html__( 'Typography settings', 'restaurant-site' ),
      'customizer_width' => '450',
      'subsection' => true,      
		'icon'   => 'el el-font',
		'fields' => array(

            array(
               'id'                => 'button_app_text-typography',
               'type'              => 'typography',
               'google'            => true,
               'font_family_clear' => false,
               'color_alpha'       => true,
               'margin-top'        => true,
               'margin-bottom'     => true,
               'text-transform'     => true,
               'letter-spacing'     => true,
               'word-spacing'     => true,
               'line-height'     => true,
               'text-shadow'       => true,
               'default'           => array(
                  'color'       => '#ffffff',
                  'font-size'   => '',
                  'font-family' => '',
                  'font-weight' => '',
                  'font-style'  => '',
                  'line-height' => '',
                  'margin-top'    => '',
                  'margin-bottom' => '',
                  'shadow-color'       => '',
                  'shadow-horizontal'  => '0',
                  'shadow-vertical'  => '0',
                  'shadow-blur'  => '0',
               ),
               'output'            => array( '.footer__app > a.button-app > p' ),
            ),


		),
	)
);
