<?php

defined('ABSPATH') || exit;

if (!class_exists('Redux')) {
   return;
}

$opt_name = 'restaurant_site_options';
$dir = dirname(__FILE__) . DIRECTORY_SEPARATOR;
$sample_patterns_path = Redux_Core::$dir . '../sample/patterns/';
$sample_patterns_url  = Redux_Core::$url . '../sample/patterns/';
$sample_patterns      = array();

if (is_dir($sample_patterns_path)) {
   $sample_patterns_dir = opendir($sample_patterns_path);

   if ($sample_patterns_dir) {
      while (false !== ($sample_patterns_file = readdir($sample_patterns_dir))) {
         if (stristr($sample_patterns_file, '.png') !== false || stristr($sample_patterns_file, '.jpg') !== false) {
            $name              = explode('.', $sample_patterns_file);
            $name              = str_replace('.' . end($name), '', $sample_patterns_file);
            $sample_patterns[] = array(
               'alt' => $name,
               'img' => $sample_patterns_url . $sample_patterns_file,
            );
         }
      }
   }
}

$kses_exceptions = array(
   'a'      => array(
      'href' => array(),
   ),
   'strong' => array(),
   'br'     => array(),
   'code'   => array(),
);

/*
 * ---> BEGIN ARGUMENTS
 */

$theme = wp_get_theme();

$args = array(
   'opt_name'                  => $opt_name,
   'display_name'              => $theme->get('Name'),
   'display_version'           => $theme->get('Version'),

   // Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only).
   'menu_type'                 => 'submenu',
   // Show the sections below the admin menu item or not.
   'allow_sub_menu'            => false,
   // The text to appear in the admin menu.
   'menu_title'                => esc_html__('Опции темы', 'restaurant-site'),
   // The text to appear on the page title.
   'page_title'                => esc_html__('Опции темы', 'restaurant-site'),
   // Disable to create your own Google fonts loader.
   'disable_google_fonts_link' => false,
   // Show the panel pages on the admin bar.
   'admin_bar'                 => true,
   // Icon for the admin bar menu.
   'admin_bar_icon'            => 'dashicons-portfolio',
   // Priority for the admin bar menu.
   'admin_bar_priority'        => 50,
   // Sets a different name for your global variable other than the opt_name.
   'global_variable'           => $opt_name,
   // Show the time the page took to load, etc. (forced on while on localhost or when WP_DEBUG is enabled).
   'dev_mode'                  => true,
   // Enable basic customizer support.
   'customizer'                => true,
   // Allow the panel to open expanded.
   'open_expanded'             => false,
   // Disable the save warning when a user changes a field.
   'disable_save_warn'         => false,
   // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
   'page_priority'             => 90,
   // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters.
   'page_parent'               => 'themes.php',
   // Permissions needed to access the options panel.
   'page_permissions'          => 'manage_options',
   // Specify a custom URL to an icon.

   // Force your panel to always open to a specific tab (by id).
   'last_tab'                  => '',
   // Icon displayed in the admin panel next to your menu_title.
   'page_icon'                 => 'icon-themes',
   // Page slug used to denote the panel, will be based off page title, then menu title, then opt_name if not provided.
   'page_slug'                 => $opt_name,
   // On load save the defaults to DB before user clicks save.
   'save_defaults'             => true,
   // Display the default value next to each field when not set to the default value.
   'default_show'              => false,
   // What to print by the field's title if the value shown is default.
   'default_mark'              => '*',
   // Shows the Import/Export panel when not used as a field.
   'show_import_export'        => true,
   // The time transients will expire when the 'database' arg is set.
   'transient_time'            => 60 * MINUTE_IN_SECONDS,
   // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output.
   'output'                    => true,
   // Allows dynamic CSS to be generated for customizer and google fonts,
   // but stops the dynamic CSS from going to the page head.
   'output_tag'                => true,
   // Disable the footer credit of Redux. Please leave if you can help it.
   'footer_credit'             => '',
   // If you prefer not to use the CDN for ACE Editor.
   // You may download the Redux Vendor Support plugin to run locally or embed it in your code.
   'use_cdn'                   => true,
   // Set the theme of the option panel.  Use 'wp' to use a more modern style, default is classic.
   'admin_theme'               => 'wp',
   // Enable or disable flyout menus when hovering over a menu with submenus.
   'flyout_submenus'           => true,
   // Mode to display fonts (auto|block|swap|fallback|optional)
   // See: https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face/font-display.
   'font_display'              => 'swap',
   // HINTS.
   'hints'                     => array(
      'icon'          => 'el el-question-sign',
      'icon_position' => 'right',
      'icon_color'    => 'lightgray',
      'icon_size'     => 'normal',
      'tip_style'     => array(
         'color'   => 'red',
         'shadow'  => true,
         'rounded' => false,
         'style'   => '',
      ),
      'tip_position'  => array(
         'my' => 'top left',
         'at' => 'bottom right',
      ),
      'tip_effect'    => array(
         'show' => array(
            'effect'   => 'slide',
            'duration' => '500',
            'event'    => 'mouseover',
         ),
         'hide' => array(
            'effect'   => 'slide',
            'duration' => '500',
            'event'    => 'click mouseleave',
         ),
      ),
   ),

   // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
   // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
   'database'                  => '',
   'network_admin'             => true,
   'search'                    => true,
);


// SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
// PLEASE CHANGE THEME BEFORE RELEASING YOUR PRODUCT!!
// If these are left unchanged, they will not display in your panel!
// $args['share_icons'][] = array(
//    'url'   => '//github.com/ReduxFramework/ReduxFramework',
//    'title' => 'Visit us on GitHub',
//    'icon'  => 'el el-github',
// );
// $args['share_icons'][] = array(
//    'url'   => '//www.facebook.com/pages/Redux-Framework/243141545850368',
//    'title' => 'Like us on Facebook',
//    'icon'  => 'el el-facebook',
// );
// $args['share_icons'][] = array(
//    'url'   => '//twitter.com/reduxframework',
//    'title' => 'Follow us on Twitter',
//    'icon'  => 'el el-twitter',
// );
// $args['share_icons'][] = array(
//    'url'   => '//www.linkedin.com/company/redux-framework',
//    'title' => 'Find us on LinkedIn',
//    'icon'  => 'el el-linkedin',
// );


Redux::set_args($opt_name, $args);

/*
 * <--- END HELP TABS
 */


 
/*
 * ---> START SECTIONS
 */

Redux::set_section(
   $opt_name,
   array(
      'title'            => esc_html__('Pages settings', 'restaurant-site'),
      'id'               => 'section_of_pages',
      'desc'             => esc_html__('Settings header site', 'restaurant-site'),
      'customizer_width' => '450',
      // 'icon'             => 'el el-home',
   )
);

// Home page sections start
Redux::set_section(
   $opt_name,
   array(
      'title'            => esc_html__('Home page', 'restaurant-site'),
      'id'               => 'settings_home-page',
      'desc'             => esc_html__('Home page settings', 'restaurant-site'),
      'customizer_width' => '450',
      'subsection' => true,
      // 'icon'             => 'el el-home',
      'fields'           => array(
         array(
            'id'        => 'title-accordion-start',
            'type'      => 'accordion',
            'title'    => esc_html__( 'Title Section', 'restaurant-site' ),
            'subtitle'  => 'Add your content to the section \'Title\'',
            'position'  => 'start',    
            ),

            array(
               'id'       => 'home_page_title',
               'type'     => 'text',
               'title'    => esc_html__('Home page title', 'restaurant-site'),
               'default'  => __(wp_kses('Teast your fav dish','post'),'restaurant-site'),
            ),         
            array(
               'id'       => 'home_page_sub_title',
               'type'     => 'text',
               'title'    => esc_html__('Home page subtitle', 'restaurant-site'),
               'default'  => __(wp_kses('from <span>luxury restaurent.</span>','post'),'restaurant-site'),
            ),
            array(
               'id'       => 'dish-gallery',
               'type'     => 'gallery',
               'title'    => esc_html__( 'Add/Edit Dish Gallery', 'restaurant-site' ),
            ),
            array(
               'id'       => 'home_page_slogan',
               'type'     => 'text',
               'title'    => esc_html__('Home page slogan', 'restaurant-site'),
               'default'  => esc_html__('Explore food Menu'),
            ),
            array(
               'id'           => 'home_page_slogan_label',
               'type'         => 'media',
               'url'          => true,
               'title'        => esc_html__('Home Page label', 'restaurant-site'),
               'compiler'     => 'true',
               'preview_size' => 'full',
               'default' =>   array(
                  'url' => esc_url(get_template_directory_uri()) . '/assets/img/exlore-food-menu.png'
               ),            
            ),

         array(
            'id'        => 'title-accordion-end',
            'type'      => 'accordion',
            'position'  => 'end'
         ),

         array(
            'id'        => 'about-section-start',
            'type'      => 'accordion',
            'title'    => esc_html__( 'About Section', 'restaurant-site' ),
            'subtitle'  => 'Add your content to the section \'About\'',
            'position'  => 'start',    
            ),
            array(
               'id'       => 'about_section_title',
               'type'     => 'text',
               'title'    => esc_html__('About Section Title', 'restaurant-site'),
               'default'  => esc_html__('About Restaurant ','restaurant-site'),
            ), 
            array(
               'id'       => 'about_section_text',
               'type'     => 'textarea',
               'title'    => esc_html__('About Section Text', 'restaurant-site'),
            ), 
            array(
               'id'       => 'about_section_button_title',
               'type'     => 'text',
               'title'    => esc_html__('About Button Title', 'restaurant-site'),
               'default'  => esc_html__('READ MORE','restaurant-site'),
            ), 
            array(
               'id'           => 'about_section_img_small',
               'type'         => 'media',
               'url'          => true,
               'title'        => esc_html__('Imag small', 'restaurant-site'),
               'compiler'     => 'true',
               'preview_size' => 'full',
               'default' =>   array(
                  'url' => esc_url(get_template_directory_uri()) . '/assets/img/about-button-bg.jpg'
               ), 
            ),
            array(
               'id'           => 'about_section_img_1',
               'type'         => 'media',
               'url'          => true,
               'title'        => esc_html__('Imag 1', 'restaurant-site'),
               'compiler'     => 'true',
               'preview_size' => 'full',
               'default' =>   array(
                  'url' => esc_url(get_template_directory_uri()) . '/assets/img/about-row-bg.jpg'
               ),
            ), 
            array(
               'id'           => 'about_section_img_2',
               'type'         => 'media',
               'url'          => true,
               'title'        => esc_html__('Imag 2', 'restaurant-site'),
               'compiler'     => 'true',
               'preview_size' => 'full',
               'default' =>   array(
                  'url' => esc_url(get_template_directory_uri()) . '/assets/img/about-row-bg.jpg'
               ), 
            ),
            array(
               'id'           => 'about_section_img_3',
               'type'         => 'media',
               'url'          => true,
               'title'        => esc_html__('Imag 3', 'restaurant-site'),
               'compiler'     => 'true',
               'preview_size' => 'full',
               'default' =>   array(
                  'url' => esc_url(get_template_directory_uri()) . '/assets/img/about-row-bg.jpg'
               ), 
            ),
            array(
               'id'           => 'about_section_img_4',
               'type'         => 'media',
               'url'          => true,
               'title'        => esc_html__('Imag 4', 'restaurant-site'),
               'compiler'     => 'true',
               'preview_size' => 'full',
               'default' =>   array(
                  'url' => esc_url(get_template_directory_uri()) . '/assets/img/about-row-bg.jpg'
               ), 
            ),
            array(
               'id'           => 'read_revie_button',
               'type'         => 'media',
               'url'          => true,
               'title'        => esc_html__('Read Revie Button', 'restaurant-site'),
               'compiler'     => 'true',
               'preview_size' => 'full',
               'default' =>   array(
                  'url' => esc_url(get_template_directory_uri()) . '/assets/img/orang-sercle.png'
               ), 
            ),
            array(
               'id'           => 'read_revie_icon',
               'type'         => 'media',
               'url'          => true,
               'title'        => esc_html__('Read Revie Icon', 'restaurant-site'),
               'compiler'     => 'true',
               'preview_size' => 'full',
               'default' =>   array(
                  'url' => esc_url(get_template_directory_uri()) . '/assets/img/icon_reviews.png'
               ), 
            ),
             array(
               'id'       => 'read_revie_text',
               'type'     => 'text',
               'title'    => esc_html__('Read Revie Text', 'restaurant-site'),
               'default'  => __(wp_kses('READ <p>REVIEWS</p>', array('p'=>array())),'restaurant-site'),
            ),  
            array(
               'id'           => 'home_delivery_icon',
               'type'         => 'media',
               'url'          => true,
               'title'        => esc_html__('Home Delivery Icon', 'restaurant-site'),
               'compiler'     => 'true',
               'preview_size' => 'full',
               'default' =>   array(
                  'url' => esc_url(get_template_directory_uri()) . '/assets/img/icon_phone.png'
               ), 
            ),
             array(
               'id'       => 'home_delivery_text',
               'type'     => 'text',
               'title'    => esc_html__('Home Delivery Text', 'restaurant-site'),
               'default'  => __(wp_kses('CALL US NOW FOR <p>HOME DELIVERY</p>', array('p'=>array())),'restaurant-site'),
            ),           
         array(
            'id'        => 'about-accordion-end',
            'type'      => 'accordion',
            'position'  => 'end'
         ),

         array(
            'id'        => 'today-accordion-start',
            'type'      => 'accordion',
            'title'    => esc_html__( 'Today Section', 'restaurant-site' ),
            'subtitle'  => 'Add your content to the section \'Today\'',
            'position'  => 'start',    
            ),

            array(
               'id'       => 'today_section_title',
               'type'     => 'text',
               'title'    => esc_html__('Home page title', 'restaurant-site'),
               'default'  => esc_html__('Today Special', 'restaurant-site'),
            ),              
            array(
                  'id'       => 'today-gallery',
                  'type'     => 'gallery',
                  'title'    => esc_html__( 'Add/Edit Today Gallery', 'restaurant-site' ),
               ),
            array(
               'id'       => 'today_section_footer_text',
               'type'     => 'text',
               'title'    => esc_html__('Footer Text', 'restaurant-site'),
               'default'  => __(wp_kses('home <p> delivery </p>',array('p'=>array())), 'restaurant-site'),
            ),   

         array(
            'id'        => 'today-accordion-end',
            'type'      => 'accordion',
            'position'  => 'end'
         ),

         array(
            'id'        => 'restaurant_menu-accordion-start',
            'type'      => 'accordion',
            'title'    => esc_html__( 'Restaurant Menu', 'restaurant-site' ),
            'subtitle'  => 'Add your content to the section \'Restaurant Menu\'',
            'position'  => 'start',    
            ),

            array(
               'id'       => 'restaurant_menu-section_title',
               'type'     => 'text',
               'title'    => esc_html__('Restaurant menu section title', 'restaurant-site'),
               'default'  => esc_html__('Food Menu', 'restaurant-site'),
            ),
            array(
               'id'           => 'restaurant_menu-section_img_1',
               'type'         => 'media',
               'url'          => true,
               'title'        => esc_html__('Imag right', 'restaurant-site'),
               'compiler'     => 'true',
               'preview_size' => 'full',
               'default' =>   array(
                  'url' => esc_url(get_template_directory_uri()) . '/assets/img/Image_311x311.jpg'
               ), 
            ),
            array(
               'id'           => 'restaurant_menu-section_img_2',
               'type'         => 'media',
               'url'          => true,
               'title'        => esc_html__('Imag left', 'restaurant-site'),
               'compiler'     => 'true',
               'preview_size' => 'full',
               'default' =>   array(
                  'url' => esc_url(get_template_directory_uri()) . '/assets/img/Image_267x414.jpg'
               ), 
            ), 
            array(
               'id'           => 'restaurant_menu-section_img_3',
               'type'         => 'media',
               'url'          => true,
               'title'        => esc_html__('Imag down', 'restaurant-site'),
               'compiler'     => 'true',
               'preview_size' => 'full',
               'default' =>   array(
                  'url' => esc_url(get_template_directory_uri()) . '/assets/img/Image_241x241.jpg'
               ), 
            ),                          

         array(
            'id'        => 'restaurant_menu-accordion-end',
            'type'      => 'accordion',
            'position'  => 'end'
         ),


         array(
            'id'        => 'clients-accordion-start',
            'type'      => 'accordion',
            'title'    => esc_html__( 'Clients section', 'restaurant-site' ),
            'subtitle'  => 'Add your content to the section \'Clients Menu\'',
            'position'  => 'start',    
            ),

            array(
               'id'       => 'clients-section_title',
               'type'     => 'text',
               'title'    => esc_html__('Clients menu section title', 'restaurant-site'),
               'default'  => esc_html__('Happy Clients', 'restaurant-site'),
            ),
            array(
               'id'           => 'clients-section_background_img',
               'type'         => 'media',
               'url'          => true,
               'title'        => esc_html__('Background Img', 'restaurant-site'),
               'compiler'     => 'true',
               'preview_size' => 'full',
               'default' =>   array(
                  'url' => esc_url(get_template_directory_uri()) . '/assets/img/background-clients-block.jpg'
               ), 
            ),

         array(
            'id'        => 'clients-accordion-end',
            'type'      => 'accordion',
            'position'  => 'end'
         ),

         array(
            'id'        => 'reserve-accordion-start',
            'type'      => 'accordion',
            'title'    => esc_html__( 'Reserve section', 'restaurant-site' ),
            'subtitle'  => 'Add your content to the section \'Reserve Menu\'',
            'position'  => 'start',    
            ),

            array(
               'id'       => 'reserve-section_title',
               'type'     => 'text',
               'title'    => esc_html__('Reserve section title', 'restaurant-site'),
               'default'  => esc_html__('Reserve your table', 'restaurant-site'),
            ),

            array(
               'id'           => 'reserve-section_background_img',
               'type'         => 'media',
               'url'          => true,
               'title'        => esc_html__('Reserve Section Img', 'restaurant-site'),
               'compiler'     => 'true',
               'preview_size' => 'full',
               'default' =>   array(
                  'url' => esc_url(get_template_directory_uri()) . '/assets/img/Image_559x334.jpg'
               ), 
            ),
            array(
               'id'       => 'reserve-section_text',
               'type'     => 'text',
               'title'    => esc_html__('Reserve section title', 'restaurant-site'),
               'default'  => esc_html__(wp_kses('<span>for a reservation</span>', 'restaurant-site')),
            ),
            array(
               'id'       => 'reserve-section_text',
               'type'     => 'text',
               'title'    => esc_html__('Reserve section text', 'restaurant-site'),
               'default'  => esc_html__(wp_kses('You can also call <span>for a reservation</span>', 'restaurant-site')),
            ),
            array(
               'id'       => 'reserve-section_button-title',
               'type'     => 'text',
               'title'    => esc_html__('Reserve section button title', 'restaurant-site'),
               'default'  => esc_html__('Make reservation', 'restaurant-site'),
            ),
            array(
               'id'       => 'reserve-section_button-href',
               'type'     => 'text',
               'title'    => esc_html__('Reserve section button href', 'restaurant-site'),
               'default'  => esc_url('#'),
            ),

         array(
            'id'        => 'reserve-accordion-end',
            'type'      => 'accordion',
            'position'  => 'end'
         ),
      ),
   )
);
// 404 page sections start
Redux::set_section(
   $opt_name,
   array(
      'title'            => esc_html__('404 page', 'restaurant-site'),
      'id'               => 'settings_404-page',
      'desc'             => esc_html__('404 page settings', 'restaurant-site'),
      'customizer_width' => '450',
      'subsection' => true,
      // 'icon'             => 'el el-home',
      'fields'           => array(
         array(
            'id'           => '404_img',
            'type'         => 'media',
            'url'          => true,
            'title'        => esc_html__('404 image', 'restaurant-site'),
            'compiler'     => 'true',
            'preview_size' => 'full',
            'default' =>   array(
               'url' => esc_url(get_template_directory_uri()) . '/assets/img/Image_301x301.jpg'
            ),            
         ),

      ),
   )
);
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
// APP buttons sections start
Redux::set_section(
   $opt_name,
   array(
      'title'            => esc_html__('APP buttons', 'restaurant-site'),
      'id'               => 'settings_app-buttons',
      'desc'             => esc_html__('APP buttons settings', 'restaurant-site'),
      'customizer_width' => '450',
      'subsections' => true,
      // 'icon'             => 'el el-home',
      'fields'           => array(
         array(
            'id'           => 'icon-app-apple',
            'type'         => 'media',
            'url'          => true,
            'title'        => esc_html__('Apple APP Icon', 'restaurant-site'),
            'compiler'     => 'true',
            'preview_size' => 'full',
            'default' =>   array(
               'url' => esc_url(get_template_directory_uri()) . '/assets/img/icon_apple.png'
               ),            
            ),
         array(
            'id'       => 'linck-app-apple',
            'type'     => 'text',
            'title'    => esc_html__('Linck APP Apple', 'restaurant-site'),
            'default'  => esc_url('#'),
         ), 

         array(
            'id'           => 'icon-app-google',
            'type'         => 'media',
            'url'          => true,
            'title'        => esc_html__('Google APP icon', 'restaurant-site'),
            'compiler'     => 'true',
            'preview_size' => 'full',
            'default' =>   array(
               'url' => esc_url(get_template_directory_uri()) . '/assets/img/icon_google-play.png'
            ),            
         ),
         array(
            'id'       => 'linck-app-google',
            'type'     => 'text',
            'title'    => esc_html__('Linck APP Google', 'restaurant-site'),
            'default'  => esc_url('#'),
         ), 

      ),
   )
);
// Copyright settings start
Redux::set_section(
   $opt_name,
   array(
      'title'            => esc_html__('Copyright settings', 'restaurant-site'),
      'desc'             => esc_html__('Add a description of your copyright ownership here', 'restaurant-site'),
      'id'               => 'settings_copyright',
      'customizer_width' => '400px',
      // 'icon'             => 'el el-network',
      'fields'           => array(
         array(
            'id'       => 'copyright',
            'type'     => 'editor',
				'args'    => array(
					'media_buttons' => false,
					// 'textarea_rows' => 5,
				),            
            'title'    => esc_html__('Copyright', 'restaurant-site'),
            'default'  => esc_html__('2016 © Luxury RestaurAnt, All rights reserved'),
         ),

      ),
   )

);
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

// echo '<br>.............................................................' . dirname( __FILE__ ).'/filds/';


Redux::set_section(
   $opt_name,
   array(
      'id'   => 'my-divide-sample',
      'type' => 'divide',
   )
);


//===============================================================================
//===============================================================================

if (!function_exists('change_defaults')) {
   /**
    * Filter hook for filtering the default value of any given field. Very useful in development mode.
    *
    * @param array $defaults Default value array.
    *
    * @return array
    */
   function change_defaults(array $defaults): array
   {
      $defaults['str_replace'] = esc_html__('Testing filter hook!', 'your-textdomain-here');

      return $defaults;
   }
}










// // -> START Basic Fields
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Basic Fields', 'your-textdomain-here' ),
		'id'               => 'basic',
		'desc'             => esc_html__( 'These are really basic fields!', 'your-textdomain-here' ),
		'customizer_width' => '400px',
		'icon'             => 'el el-home',
	)
);

require_once Redux_Core::$dir . '../sample/sections/basic-fields/checkbox.php';
// require_once Redux_Core::$dir . '../sample/sections/basic-fields/radio.php';
// require_once Redux_Core::$dir . '../sample/sections/basic-fields/sortable.php';
// require_once Redux_Core::$dir . '../sample/sections/basic-fields/text.php';
// require_once Redux_Core::$dir . '../sample/sections/basic-fields/multi-text.php';
// require_once Redux_Core::$dir . '../sample/sections/basic-fields/password.php';
// require_once Redux_Core::$dir . '../sample/sections/basic-fields/textarea.php';

// // -> START Editors.
// Redux::set_section(
// 	$opt_name,
// 	array(
// 		'title'            => esc_html__( 'Editors', 'your-textdomain-here' ),
// 		'id'               => 'editor',
// 		'customizer_width' => '500px',
// 		'icon'             => 'el el-edit',
// 	)
// );

// require_once Redux_Core::$dir . '../sample/sections/editors/wordpress-editor.php';
// require_once Redux_Core::$dir . '../sample/sections/editors/ace-editor.php';

// // -> START Color Selection.
// Redux::set_section(
// 	$opt_name,
// 	array(
// 		'title' => esc_html__( 'Color Selection', 'your-textdomain-here' ),
// 		'id'    => 'color',
// 		'icon'  => 'el el-brush',
// 	)
// );

// require_once Redux_Core::$dir . '../sample/sections/color-selection/color.php';
// require_once Redux_Core::$dir . '../sample/sections/color-selection/color-gradient.php';
// require_once Redux_Core::$dir . '../sample/sections/color-selection/color-rgba.php';
// require_once Redux_Core::$dir . '../sample/sections/color-selection/link-color.php';
// require_once Redux_Core::$dir . '../sample/sections/color-selection/palette.php';
// require_once Redux_Core::$dir . '../sample/sections/color-selection/color-palette.php';

// // -> START Design Fields.
// Redux::set_section(
// 	$opt_name,
// 	array(
// 		'title' => esc_html__( 'Design Fields', 'your-textdomain-here' ),
// 		'id'    => 'design',
// 		'icon'  => 'el el-wrench',
// 	)
// );

// require_once Redux_Core::$dir . '../sample/sections/design-fields/background.php';
// require_once Redux_Core::$dir . '../sample/sections/design-fields/box-shadow.php';
// require_once Redux_Core::$dir . '../sample/sections/design-fields/border.php';
// require_once Redux_Core::$dir . '../sample/sections/design-fields/dimensions.php';
// require_once Redux_Core::$dir . '../sample/sections/design-fields/spacing.php';

// // -> START Media Uploads.
// Redux::set_section(
// 	$opt_name,
// 	array(
// 		'title' => esc_html__( 'Media Uploads', 'your-textdomain-here' ),
// 		'id'    => 'media',
// 		'icon'  => 'el el-picture',
// 	)
// );

// require_once Redux_Core::$dir . '../sample/sections/media-uploads/gallery.php';
// require_once Redux_Core::$dir . '../sample/sections/media-uploads/media.php';
// require_once Redux_Core::$dir . '../sample/sections/media-uploads/multi-media.php';
// require_once Redux_Core::$dir . '../sample/sections/media-uploads/slides.php';

// // -> START Presentation Fields.
// Redux::set_section(
// 	$opt_name,
// 	array(
// 		'title' => esc_html__( 'Presentation Fields', 'your-textdomain-here' ),
// 		'id'    => 'presentation',
// 		'icon'  => 'el el-screen',
// 	)
// );

// require_once Redux_Core::$dir . '../sample/sections/presentation-fields/divide.php';
// require_once Redux_Core::$dir . '../sample/sections/presentation-fields/info.php';
// require_once Redux_Core::$dir . '../sample/sections/presentation-fields/section.php';

// // Redux::set_section(
// // 	$opt_name,
// // 	array(
// // 		'id'   => 'presentation-divide-sample',
// // 		'type' => 'divide',
// // 	)
// // );

// // -> START Switch & Button Set.
// Redux::set_section(
// 	$opt_name,
// 	array(
// 		'title' => esc_html__( 'Switch / Button Set', 'your-textdomain-here' ),
// 		'id'    => 'switch_buttonset',
// 		'icon'  => 'el el-cogs',
// 	)
// );

// require_once Redux_Core::$dir . '../sample/sections/switch-button/button-set.php';
// require_once Redux_Core::$dir . '../sample/sections/switch-button/switch.php';

// // -> START Select Fields.
// Redux::set_section(
// 	$opt_name,
// 	array(
// 		'title' => esc_html__( 'Select Fields', 'your-textdomain-here' ),
// 		'id'    => 'select',
// 		'icon'  => 'el el-list-alt',
// 	)
// );

// require_once Redux_Core::$dir . '../sample/sections/select-fields/select.php';
// require_once Redux_Core::$dir . '../sample/sections/select-fields/image-select.php';
// require_once Redux_Core::$dir . '../sample/sections/select-fields/select-image.php';

// // -> START Slider / Spinner.
// Redux::set_section(
// 	$opt_name,
// 	array(
// 		'title' => esc_html__( 'Slider / Spinner', 'your-textdomain-here' ),
// 		'id'    => 'slider_spinner',
// 		'icon'  => 'el el-adjust-alt',
// 	)
// );

// require_once Redux_Core::$dir . '../sample/sections/slider-spinner/slider.php';
// require_once Redux_Core::$dir . '../sample/sections/slider-spinner/spinner.php';

// // -> START Typography.
// require_once Redux_Core::$dir . '../sample/sections/typography/typography.php';

// // -> START Additional Types.
// Redux::set_section(
// 	$opt_name,
// 	array(
// 		'title' => esc_html__( 'Additional Types', 'your-textdomain-here' ),
// 		'id'    => 'additional',
// 		'icon'  => 'el el-magic',
// 	)
// );

// require_once Redux_Core::$dir . '../sample/sections/additional-types/date.php';
// require_once Redux_Core::$dir . '../sample/sections/additional-types/date-time-picker.php';
// require_once Redux_Core::$dir . '../sample/sections/additional-types/sorter.php';
// require_once Redux_Core::$dir . '../sample/sections/additional-types/raw.php';

// Redux::set_section(
// 	$opt_name,
// 	array(
// 		'title' => esc_html__( 'Advanced Features', 'your-textdomain-here' ),
// 		'icon'  => 'el el-thumbs-up',
// 	)
// );

// require_once Redux_Core::$dir . '../sample/sections/advanced-features/callback.php';

// // -> START Validation.
// require_once Redux_Core::$dir . '../sample/sections/advanced-features/field-validation.php';

// // -> START Sanitizing.
// require_once Redux_Core::$dir . '../sample/sections/advanced-features/field-sanitizing.php';

// // -> START Required.
// require_once Redux_Core::$dir . '../sample/sections/advanced-features/field-required-linking.php';

// require_once Redux_Core::$dir . '../sample/sections/advanced-features/wpml-integration.php';

// // -> START Disabling.
// Redux::set_section(
// 	$opt_name,
// 	array(
// 		'title' => esc_html__( 'Disabling', 'your-textdomain-here' ),
// 		'icon'  => 'el el-lock',
// 	)
// );

// require_once Redux_Core::$dir . '../sample/sections/disabling/disable-field.php';
// require_once Redux_Core::$dir . '../sample/sections/disabling/disable-section.php';

// // -> START Pro Fields.

// Redux::set_section(
// 	$opt_name,
// 	array(
// 		'title' => esc_html__( 'Redux Extensions', 'your-textdomain-here' ),
// 		'id'    => 'redux-extensions',
// 		'icon'  => 'el el-redux',
// 		'class' => 'pro_highlight',
// 		'desc'  => esc_html__( 'For full documentation on this field, visit: ', 'your-textdomain-here' ) . '<a href="https://devs.redux.io/core-extensions/" target="_blank">https://devs.redux.io/core-extensions/</a>',
// 	)
// );

// require_once Redux_Core::$dir . '../sample/sections/extensions/accordion.php';
// require_once Redux_Core::$dir . '../sample/sections/extensions/custom-fonts.php';
// require_once Redux_Core::$dir . '../sample/sections/extensions/google-maps.php';
// require_once Redux_Core::$dir . '../sample/sections/extensions/js-button.php';
// require_once Redux_Core::$dir . '../sample/sections/extensions/repeater.php';
// require_once Redux_Core::$dir . '../sample/sections/extensions/search.php';
// require_once Redux_Core::$dir . '../sample/sections/extensions/shortcodes.php';
// require_once Redux_Core::$dir . '../sample/sections/extensions/social-profiles.php';
// require_once Redux_Core::$dir . '../sample/sections/extensions/widget-areas.php';
// require_once Redux_Core::$dir . '../sample/sections/extensions/users.php';

// if ( class_exists( 'Redux_Pro' ) ) {
// 	require_once Redux_Core::$dir . '../sample/sections/extensions/color-scheme.php';
// 	require_once Redux_Core::$dir . '../sample/sections/extensions/icon-select.php';
// 	require_once Redux_Core::$dir . '../sample/sections/extensions/taxonomy.php';
// 	require_once Redux_Core::$dir . '../sample/sections/extensions/users.php';
// }

// /**
//  * Metaboxes
//  */
// require_once Redux_Core::$dir . '../sample/metaboxes.php';

// /**
//  * Raw README
//  */
// if ( file_exists( $dir . '/../README.md' ) ) {
// 	$section = array(
// 		'icon'   => 'el el-list-alt',
// 		'title'  => esc_html__( 'Documentation', 'your-textdomain-here' ),
// 		'fields' => array(
// 			array(
// 				'id'           => 'opt-raw-documentation',
// 				'type'         => 'raw',
// 				'markdown'     => true,
// 				'content_path' => dirname( __FILE__ ) . '/../README.md', // FULL PATH, not relative please.
// 			),
// 		),
// 	);

// 	Redux::set_section( $opt_name, $section );
// }

// Redux::set_section(
// 	$opt_name,
// 	array(
// 		'icon'            => 'el el-list-alt',
// 		'title'           => esc_html__( 'Customizer Only', 'your-textdomain-here' ),
// 		'desc'            => '<p class="description">' . esc_html__( 'This Section should be visible only in Customizer', 'your-textdomain-here' ) . '</p>',
// 		'customizer_only' => true,
// 		'fields'          => array(
// 			array(
// 				'id'              => 'opt-customizer-only',
// 				'type'            => 'select',
// 				'title'           => esc_html__( 'Customizer Only Option', 'your-textdomain-here' ),
// 				'subtitle'        => esc_html__( 'The subtitle is NOT visible in customizer', 'your-textdomain-here' ),
// 				'desc'            => esc_html__( 'The field desc is NOT visible in customizer.', 'your-textdomain-here' ),
// 				'customizer_only' => true,
// 				'options'         => array(
// 					'1' => esc_html__( 'Opt 1', 'your-textdomain-here' ),
// 					'2' => esc_html__( 'Opt 2', 'your-textdomain-here' ),
// 					'3' => esc_html__( 'Opt 3', 'your-textdomain-here' ),
// 				),
// 				'default'         => '2',
// 			),
// 		),
// 	)
// );

/*
 * <--- END SECTIONS
 */

/*
 * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR OTHER CONFIGS MAY OVERRIDE YOUR CODE.
 */

/*
 * --> Action hook examples.
 */

// // Function to test the compiler hook and demo CSS output.
// // Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
// // add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);
// //
// // Change the arguments after they've been declared, but before the panel is created.
// // add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );
// //
// // Change the default value of a field after it's been set, but before it's been used.
// // add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );
// //
// // Dynamically add a section. Can be also used to modify sections/fields.
// // add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');
// // .
// if (!function_exists('compiler_action')) {
//    /**
//     * This is a test function that will let you see when the compiler hook occurs.
//     * It only runs if a field's value has changed and compiler=>true is set.
//     *
//     * @param array  $options        Options values.
//     * @param string $css            Compiler selector CSS values  compiler => array( CSS SELECTORS ).
//     * @param array  $changed_values Any values changed since last save.
//     */
//    function compiler_action(array $options, string $css, array $changed_values)
//    {
//       echo '<h1>The compiler hook has run!</h1>';
//       echo '<pre>';
//       // phpcs:ignore WordPress.PHP.DevelopmentFunctions
//       print_r($changed_values); // Values that have changed since the last save.
//       // echo '<br/>';
//       // print_r($options); //Option values.
//       // echo '<br/>';
//       // print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS ).
//       echo '</pre>';
//    }
// }

// if (!function_exists('redux_validate_callback_function')) {
//    /**
//     * Custom function for the callback validation referenced above
//     *
//     * @param array $field          Field array.
//     * @param mixed $value          New value.
//     * @param mixed $existing_value Existing value.
//     *
//     * @return array
//     */
//    function redux_validate_callback_function(array $field, $value, $existing_value): array
//    {
//       $error   = false;
//       $warning = false;

//       // Do your validation.
//       if (1 === (int) $value) {
//          $error = true;
//          $value = $existing_value;
//       } elseif (2 === (int) $value) {
//          $warning = true;
//          $value   = $existing_value;
//       }

//       $return['value'] = $value;

//       if (true === $error) {
//          $field['msg']    = 'your custom error message';
//          $return['error'] = $field;
//       }

//       if (true === $warning) {
//          $field['msg']      = 'your custom warning message';
//          $return['warning'] = $field;
//       }

//       return $return;
//    }
// }


// // if (!function_exists('dynamic_section')) {
// //    /**
// //     * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
// //     * Simply include this function in the child themes functions.php file.
// //     * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
// //     * so you must use get_template_directory_uri() if you want to use any of the built-in icons.
// //     *
// //     * @param array $sections Section array.
// //     *
// //     * @return array
// //     */
// //    function dynamic_section(array $sections): array
// //    {
// //       $sections[] = array(
// //          'title'  => esc_html__('Section via hook', 'your-textdomain-here'),
// //          'desc'   => '<p class="description">' . esc_html__('This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.', 'your-textdomain-here') . '</p>',
// //          'icon'   => 'el el-paper-clip',

// //          // Leave this as a blank section, no options just some intro text set above.
// //          'fields' => array(),
// //       );

// //       return $sections;
// //    }
// // }

// // if (!function_exists('change_arguments')) {
// //    /**
// //     * Filter hook for filtering the args.
// //     * Good for child themes to override or add to the args array. Can also be used in other functions.
// //     *
// //     * @param array $args Global arguments array.
// //     *
// //     * @return array
// //     */
// //    function change_arguments(array $args): array
// //    {
// //       $args['dev_mode'] = true;

// //       return $args;
// //    }
// // }



if (!function_exists('redux_custom_sanitize')) {
   /**
    * Function to be used if the field sanitize argument.
    * Return value MUST be the formatted or cleaned text to display.
    *
    * @param string $value Value to evaluate or clean.  Required.
    *
    * @return string
    */
   function redux_custom_sanitize(string $value): string
   {
      $return = '';

      foreach (explode(' ', $value) as $w) {
         foreach (str_split($w) as $k => $v) {
            if (($k + 1) % 2 !== 0 && ctype_alpha($v)) {
               $return .= mb_strtoupper($v);
            } else {
               $return .= $v;
            }
         }

         $return .= ' ';
      }

      return $return;
   }
}
