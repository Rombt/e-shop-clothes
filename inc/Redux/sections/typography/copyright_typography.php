<?php 
defined( 'ABSPATH' ) || exit;


// Typography sections start

Redux::set_section(
	$opt_name,
	array(
		'title'  => esc_html__( 'Copyright', 'restaurant-site' ),
		'id'     => 'copyright-typography',
		'desc'   => esc_html__( 'Typography settings', 'restaurant-site' ),
      'customizer_width' => '450',
      'subsection' => true,      
		'icon'   => 'el el-font',
		'fields' => array(
         
         array(
            'id'                => 'copyright-typography',
            'title'             => esc_html__( 'Copyright', 'restaurant-site' ),
            'subtitle'          => 'Set typography for "Copyright" Section',
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
               'color'       => '#edf1f3',
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
            'output'            => array( '.copyright-block > p' ),
         ),

		),
	)
);
