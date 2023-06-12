<?php 
defined( 'ABSPATH' ) || exit;


// Typography sections start

Redux::set_section(
	$opt_name,
	array(
		'title'  => esc_html__( 'Dish Typography', 'restaurant-site' ),
		'id'     => 'dish_typography',
		'desc'   => esc_html__( 'Typography settings "dish" section', 'restaurant-site' ),
      'customizer_width' => '450',
      'subsection' => true,      
		'icon'   => 'el el-font',
		'fields' => array(
         array(
            'id'        => 'dish_typography-accordion-start',
            'type'      => 'accordion',
            'title'    => esc_html__( 'Title Section Dish', 'restaurant-site' ),
            'subtitle'  => 'Set typography for title section Dish',
            'position'  => 'start',    
            ),

            array(
               'id'                => 'dish_title-typography',
               'title'             => esc_html__( 'Title', 'restaurant-site' ),
               'subtitle'          => 'Set typography for title',
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
                  'font-family' => 'Playfair Display',
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
               'output'            => array( '.redux_font-dish_title' ),
            ),
            array(
               'id'                => 'dish_subtitle_1-typography',
               'title'             => esc_html__( 'Subtitle 1', 'restaurant-site' ),
               'subtitle'          => 'Set typography for subtitle 1',
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
                  'font-family' => 'Playfair Display',
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
               'output'            => array( '.dish-title__subtitle-title' ),
            ),
            array(
               'id'                => 'dish_subtitle_2-typography',
               'title'             => esc_html__( 'Subtitle 2', 'restaurant-site' ),
               'subtitle'          => 'Set typography for subtitle 1',
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
                  'color'       => '#fea100',
                  'font-size'   => '',
                  'font-family' => 'Playfair Display',
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
               'output'            => array( '.dish-title__subtitle-title span' ),
            ),

         array(
            'id'        => 'dish_typography-accordion-end',
            'type'      => 'accordion',
            'position'  => 'end'
         ),
          
         array(
            'id'        => 'explore-food-menu_typography-accordion-start',
            'type'      => 'accordion',
            'title'    => esc_html__( 'Explore food Menu', 'restaurant-site' ),
            'subtitle'  => 'Set typography for title section Explore food Menu ',
            'position'  => 'start',    
            ),

            array(
               'id'                => 'explore-food-menu_typography',
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
                  'font-family' => 'Playfair Display',
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
               'output'            => array( '.redux_font-explore_food_menu' ),
            ),

         array(
            'id'        => 'explore-food-menu_typography-accordion-end',
            'type'      => 'accordion',
            'position'  => 'end'
         ),
		),
	)
);
