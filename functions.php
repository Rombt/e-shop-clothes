<?php



require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/inc/Redux/redux-options.php';

define('rs_PATH_THEME', get_template_directory());
define('rs_URL_THEME', esc_url(get_template_directory_uri()));


/*===================	TODO	====================================

	Добавить хлебные крошки
	доработать страницу выдачи поисковых запросов
	добавить анимацию по максимуму!!!
	добавить картинки удвоеного качества для Rétina
	исправить адаптив шрифтов в части неболее чем указано
	+ добавить возможность делать логотип сайта текстом или кортинкой
		esc_html(bloginfo('name')) 
	доработать адаптив блока dish-widget.php
		прапорции картинки
		шрифты
	в разных местах оставляю закладки типа:  // todo
		по окончанию работы над темой найти все глобальным поиском
		использовать плагин для vsCode
	карту на страницу контактов https://devs.redux.io/core-extensions/google-maps.html
	заменить стандартные названия в файлах redux 
	use dynamic_section for redux
	выбор иконок https://devs.redux.io/core-extensions/icon-select.html
	изменение размера картинок
	смену шрифтов в теме через Redux панель опций
	форму и страницу поиска по сайту
	отдельные локации меню для мобильных устройств




*/

function restaurant_site_scripts()
{
	wp_enqueue_style('swiper-bundle', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', array(), '1.0', 'all');
	wp_enqueue_style('restaurant_site-main', get_template_directory_uri() . '/assets/styles/main-style.min.css', array(), '1.0', 'all');
	
	wp_enqueue_script('swiper-bundle', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array(), '', true);
	// wp_enqueue_script('swiper-bundle', 'https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js', array(), '', true);
	wp_enqueue_script('restaurant_site-app', get_template_directory_uri() . '/assets/js/app.min.js', array(), '1.0', true);



	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'restaurant_site_scripts', 20);



function simple_restaurant_site_setup()
{
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	register_nav_menus(
		array(
			'header_nav' => esc_html__('Header Navigation', 'restaurant-site'),
			'footer_nav' => esc_html__('Footer Navigation', 'restaurant-site'),
			'food_menu' => esc_html__('Food Menu', 'restaurant-site'),
		)
	);

	load_theme_textdomain('restaurant-site', get_template_directory() . '/languages');
	add_theme_support('automatic-feed-links'); 

}
add_action('after_setup_theme', 'simple_restaurant_site_setup');

function simple_restaurant_site_content_width()
{
	$GLOBALS['content_width'] = apply_filters('simple_restaurant_site_content_width', 640);
}
add_action('after_setup_theme', 'simple_restaurant_site_content_width', 0);

add_action('tgmpa_register', 'restaurant_site_register_required_plugins');
function restaurant_site_register_required_plugins()
{
	$plugins = array(

		array(
			'name'               => 'Restaurant site core', // The plugin name.
			'slug'               => 'restaurant-site-core', // The plugin slug (typically the folder name).
			'source'             => get_template_directory() . '/plugins/restaurant-site-core.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '1.0', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
		),

		array(
			'name'      => 'Advanced Custom Fields',
			'slug'      => 'advanced-custom-fields',
			'required'  => true,
		),

		array(
			'name'      => 'Redux Framework',
			'slug'      => 'redux-framework',
			'required'  => true,
		),

	);

	$config = array(
		'id'           => 'restaurant-site',       // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

	);

	tgmpa($plugins, $config);
}



function simple_restaurant_site_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'restaurant-site'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'restaurant-site'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'simple_restaurant_site_widgets_init');


//===========================================================================
//===========================================================================



// добавить классы элементам меню		не работает, разобраться!
function rs_add_class_on_li($classes, $item, $args)
{
	if (isset($args->add_li_class)) {
		$classes[] = $args->add_li_class;
	}

	return $classes;
}
add_filter('nav_menu_css_class', 'rs_add_class_on_li', 1, 3);
