<?php

require_once get_template_directory() . '/inc/functions/general.php';
require_once get_template_directory() . '/inc/admin/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/inc/Redux/redux-options.php';

define( 'rs_PATH_THEME', get_template_directory() );
define( 'rs_URL_THEME', esc_url( get_template_directory_uri() ) );

/*===================    TODO    ====================================
для второй версии темы:
Кнопку которая будет выполнять функцию аналогичную ctrl+z на админ страницах кастомных категорий
В опциях темы добавить возможность выбирать:
сколько слов будет выводится при обрезке текста
символ который будет выводится обрыве текста
Переключение тёмной и светлой темы сайта  https://youtu.be/JzC5_tNOK8k
Дать возможность пользователям рестарана регистрироваться на сайте
зарегестрированных пользователей добовлять в пост тайп our_clients
некоторых из них выводить на главную страницу в слайдер
Поддержку многоуровневых меню в footer
ввиде акардиона     https://youtu.be/0fg9bZcL1RM
Изменить архетиктуру темы таким обраом что бы проверка на существование ACF была только в одном месте
if (class_exists('ACF')) {}
Для Food Menu  исправить позиционирование при отсутствии выбранных элементов
Добавить таксономии по типам блюд:
По типу кухни:
Итальянская кухня
Французская кухня
Японская кухня
Мексиканская кухня
Индийская кухня
и т.д.
По основным ингредиентам:
Мясные блюда
Рыбные блюда
Блюда из птицы
Вегетарианские блюда
Блюда с морепродуктами
и т.д.
По времени приема пищи:
Завтраки
Обеды
Ужины
Поздний ужин/ночной меню
Бранч (завтрак+обед)
и т.д.
По типу блюда:
Супы
Салаты
Основные блюда
Паста и пицца
Десерты
Напитки
и т.д.
По сезонности:
Меню осени
Меню зимы
Меню весны
Меню лета
и т.д.
По ценовым категориям:
Бюджетные блюда
Среднего класса
Эксклюзивные блюда
Шеф-поварское меню
и т.д.
По диетическим потребностям:
Безглютеновое меню
Веганское меню
Постное меню
Меню для диабетиков
и т.д.
Предоставить пользователю возможность манипулировать блоками страницы из редактора страниц(!!)
настраивать геометрию блоков страниц
добавлять или удалять блоки
Все меню должны поддерживать второй и третий уровни вложенности
демо фотки сделать с помощью
плагина для GPT-chat Photorealistic подробнее сдесь: https://youtu.be/gX9z6irImto
добавить картинки удвоеного качества для Rétina
доработать страницу выдачи поисковых запросов
добавить анимацию по максимуму!!!
исправить адаптив шрифтов в части неболее чем указано
можно использовать условия Less
Пример:
.selector {
@if (@var > 5) {
color: red;
} else {
color: blue;
}}
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
форму и страницу поиска по сайту
отдельные локации меню для мобильных устройств
*/

function restaurant_site_scripts() {
	wp_enqueue_style( 'swiper-bundle', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'restaurant_site-main', get_template_directory_uri() . '/assets/styles/main-style.min.css', array(), '1.0', 'all' );

	wp_enqueue_script( 'swiper-bundle', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array(), '', true );
	wp_enqueue_script( 'restaurant_site-app', get_template_directory_uri() . '/assets/js/app.min.js', array( 'jquery' ), '1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'restaurant_site_scripts', 20 );

function restaurant_site_scripts_admin() {
	wp_enqueue_style( 'restaurant_site-admin_main', get_template_directory_uri() . '/admin/assets/css/admin-main-style.min.css', array(), '1.0', 'all' );
	wp_enqueue_script( 'restaurant_site-admin_core_jq', get_template_directory_uri() . '/admin/assets/js/jquery_scripts.js', array( 'jquery' ), '1.0', true );

}
add_action( 'admin_enqueue_scripts', 'restaurant_site_scripts_admin' );

function simple_restaurant_site_setup() {


	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
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
			'header_nav' => esc_html__( 'Header Navigation', 'restaurant-site' ),
			'footer_nav' => esc_html__( 'Footer Navigation', 'restaurant-site' ),
			'food_menu'  => esc_html__( 'Food Menu', 'restaurant-site' ),
		)
	);

	load_theme_textdomain( 'restaurant-site', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );

}
add_action( 'after_setup_theme', 'simple_restaurant_site_setup' );

function simple_restaurant_site_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'simple_restaurant_site_content_width', 640 );
}
add_action( 'after_setup_theme', 'simple_restaurant_site_content_width', 0 );

function restaurant_site_register_required_plugins() {
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
			'name'     => 'Advanced Custom Fields',
			'slug'     => 'advanced-custom-fields',
			'required' => true,
		),

		array(
			'name'     => 'Redux Framework',
			'slug'     => 'redux-framework',
			'required' => true,
		),

	);

	$config = array(
		'id'           => 'restaurant-site', // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '', // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true, // Show admin notices or not.
		'dismissable'  => true, // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '', // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false, // Automatically activate plugins after installation or not.
		'message'      => '', // Message to output right before the plugins table.

	);

	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'restaurant_site_register_required_plugins' );

function simple_restaurant_site_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'restaurant-site' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'restaurant-site' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'simple_restaurant_site_widgets_init' );

function menu_item_css_classes( $classes, $item, $args, $depth ) {
	if ( isset( $args->add_li_class ) ) {
		$classes[] = $args->add_li_class;
	}

	return $classes;
}
add_filter( 'nav_menu_css_class', 'menu_item_css_classes', 10, 4 );

function rstr_add_class_menus_links( $atts, $item, $args ) {
	if ( isset( $args->add_link_class ) ) {
		$atts['class'] = $args->add_link_class;
	}

	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'rstr_add_class_menus_links', 10, 3 );

function rstr_change_menus_items( $args, $item ) {
	global $restaurant_site_options;

	if ( $args->theme_location === 'food_menu' ) {
		if ( class_exists( 'ReduxFramework' ) && in_array( 'menu-item-type-post_type_archive', $item->classes ) ) {
			$args->before = '<img src="' . $restaurant_site_options['restaurant_menu-section_icon_first_item_menu']['url'] . '" alt="">';
		} else {

			if ( class_exists( 'ACF' ) ) {


				$args->before = '<img src="' . get_field( 'food-categories-icon', 'term_' . $item->object_id ) . '" alt="">';
			}

		}
	}

	return $args;
}
add_filter( 'nav_menu_item_args', 'rstr_change_menus_items', 10, 2 );




//===========================================================================
//===========================================================================
