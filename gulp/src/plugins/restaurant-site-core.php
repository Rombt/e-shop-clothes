<?php
/*
Plugin Name: Restaurant-site core
Plugin URI: #
Description: A plugin that implements Restaurant-site theme functionality
Version: 1.0
Author: Automattic - Rombt
Author URI: #
License: GPLv2 or later
Text Domain: restaurant-site
 */

if (!function_exists('add_action')) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

require_once plugin_dir_path(__FILE__) . 'inc/elementor-addon/elementor-addon.php';
require_once plugin_dir_path(__FILE__) . 'inc/acf.php';


function rs_rewrite_rules()
{
    rs_register_post_types();

    flush_rewrite_rules();
}
add_action('after_switch_theme', 'rs_rewrite_rules');

add_action('init', 'rs_create_taxonomy');
function rs_create_taxonomy()
{

    register_taxonomy('food-categories', ['food-categories'], [
        'label' => '', // определяется параметром $labels->name
        'labels' => [
            'name' => esc_html__('Food categories', 'restaurant-site'),
            'singular_name' => esc_html__('Food categories', 'restaurant-site'),
            'search_items' => esc_html__('Search food categoriess', 'restaurant-site'),
            'all_items' => esc_html__('All food categoriess', 'restaurant-site'),
            'view_item ' => esc_html__('View food categories', 'restaurant-site'),
            'parent_item' => esc_html__('Parent food categories', 'restaurant-site'),
            'parent_item_colon' => esc_html__('Parent food categories:', 'restaurant-site'),
            'edit_item' => esc_html__('Edit food categories', 'restaurant-site'),
            'update_item' => esc_html__('Update food categories', 'restaurant-site'),
            'add_new_item' => esc_html__('Add New food categories', 'restaurant-site'),
            'new_item_name' => esc_html__('New food categories Name', 'restaurant-site'),
            'menu_name' => esc_html__('Food categories', 'restaurant-site'),
            'back_to_items' => esc_html__('← Back to food- ategories', 'restaurant-site'),
        ],
        'description' => esc_html__('Food categoriess our restaurant'),
        'rewrite' => ['slug' => 'food-categories'],
        'show_in_rest' => true,
        'show_admin_column' => true,
        'hierarchical' => true,
        'show_in_nav_menus' => true,
    ]);
}

function rs_register_post_types()
{
    $labels_food_menu = array(
        'name' => esc_html_x('Menu items', 'Post type general name', 'restaurant-site'),
        'singular_name' => esc_html_x('Menu item', 'Post type singular name', 'restaurant-site'),
        'menu_name' => esc_html_x('Menu items', 'Admin Menu text', 'restaurant-site'),
        'name_admin_bar' => esc_html_x('Menu item', 'Add New on Toolbar', 'restaurant-site'),
        'add_new' => esc_html__('Add New', 'restaurant-site'),
        'add_new_item' => esc_html__('Add New menu item', 'restaurant-site'),
        'new_item' => esc_html__('New Menu item', 'restaurant-site'),
        'edit_item' => esc_html__('Edit Menu item', 'restaurant-site'),
        'view_item' => esc_html__('View Menu item', 'restaurant-site'),
        'all_items' => esc_html__('All Menu items', 'restaurant-site'),
        'search_items' => esc_html__('Search Menu items', 'restaurant-site'),
        'parent_item_colon' => esc_html__('Parent Menu items:', 'restaurant-site'),
        'not_found' => esc_html__('No Menu items found.', 'restaurant-site'),
        'not_found_in_trash' => esc_html__('No Menu items found in Trash.', 'restaurant-site'),
        'featured_image' => esc_html_x('Menu item Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'restaurant-site'),
        'set_featured_image' => esc_html_x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'restaurant-site'),
        'remove_featured_image' => esc_html_x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'restaurant-site'),
        'use_featured_image' => esc_html_x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'restaurant-site'),
        'archives' => esc_html_x('Menu item archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'restaurant-site'),
        'insert_into_item' => esc_html_x('Insert into Menu item', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'restaurant-site'),
        'uploaded_to_this_item' => esc_html_x('Uploaded to this Menu item', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'restaurant-site'),
        'filter_items_list' => esc_html_x('Filter Menu items list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'restaurant-site'),
        'items_list_navigation' => esc_html_x('Menu items list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'restaurant-site'),
        'items_list' => esc_html_x('Menu items list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'restaurant-site'),
    );

    $args_food_menu = array(
        'labels' => $labels_food_menu,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_rest' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'food-menu-items'),
        'has_archive' => true,
        'hierarchical' => true,
        'menu_position' => 4,
        'taxonomies' => ['food-categories'],
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'comments', 'custom-fields'),
        'menu_icon' => 'dashicons-image-filter',
        'show_in_nav_menus' => true,
    );
    register_post_type('food-menu-items', $args_food_menu);

    $labels_our_clients = array(
        'name' => esc_html_x('Our Clients', 'Post type general name', 'restaurant-site'),
        'singular_name' => esc_html_x('Our Clients', 'Post type singular name', 'restaurant-site'),
        'menu_name' => esc_html_x('Our Clientss', 'Admin Menu text', 'restaurant-site'),
        'name_admin_bar' => esc_html_x('Our Clients', 'Add New on Toolbar', 'restaurant-site'),
        'add_new' => esc_html__('Add New', 'restaurant-site'),
        'add_new_item' => esc_html__('Add New our clients', 'restaurant-site'),
        'new_item' => esc_html__('New Our Clients', 'restaurant-site'),
        'edit_item' => esc_html__('Edit Our Clients', 'restaurant-site'),
        'view_item' => esc_html__('View Our Clients', 'restaurant-site'),
        'all_items' => esc_html__('All Our Clientss', 'restaurant-site'),
        'search_items' => esc_html__('Search Our Clientss', 'restaurant-site'),
        'parent_item_colon' => esc_html__('Parent Our Clientss:', 'restaurant-site'),
        'not_found' => esc_html__('No Our Clientss found.', 'restaurant-site'),
        'not_found_in_trash' => esc_html__('No Our Clientss found in Trash.', 'restaurant-site'),
        'featured_image' => esc_html_x('Our Clients Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'restaurant-site'),
        'set_featured_image' => esc_html_x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'restaurant-site'),
        'remove_featured_image' => esc_html_x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'restaurant-site'),
        'use_featured_image' => esc_html_x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'restaurant-site'),
        'archives' => esc_html_x('Our Clients archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'restaurant-site'),
        'insert_into_item' => esc_html_x('Insert into Our Clients', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'restaurant-site'),
        'uploaded_to_this_item' => esc_html_x('Uploaded to this Our Clients', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'restaurant-site'),
        'filter_items_list' => esc_html_x('Filter Our Clientss list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'restaurant-site'),
        'items_list_navigation' => esc_html_x('Our Clientss list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'restaurant-site'),
        'items_list' => esc_html_x('Our Clientss list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'restaurant-site'),
    );

    $args_our_clients = array(
        'labels' => $labels_our_clients,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_rest' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'our-clients'),
        'has_archive' => true,
        'hierarchical' => true,
        'menu_position' => 4,
        // 'taxonomies' => ['food-categories'],
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'comments', 'custom-fields'),
        'menu_icon' => 'dashicons-image-filter',
        'show_in_nav_menus' => true,
    );
    register_post_type('our-clients', $args_our_clients);
}
add_action('init', 'rs_register_post_types');


if (class_exists('ACF')) {

    // Добавляем новую колонку в перечень записей
    function add_food_menu_items_column($columns)
    {
        $columns['show-food-menu'] = esc_html__('Show in the "Food menu" section ', 'restaurant-site');
        $columns['show-today-specialy'] = esc_html__('Show in the "Today Specialy" section ', 'restaurant-site');
        return $columns;
    }
    add_filter('manage_food-menu-items_posts_columns', 'add_food_menu_items_column');

    function display_custom_field_column($column, $post_id)
    {
        if ($column === 'show-food-menu') {
            $field_name = 'food-menu-items_show-in-food-menu';
            echo '<input type="checkbox" data-post-id="' . $post_id
                . '" data-field-name="' . $field_name . '" '
                . (get_field($field_name, $post_id) ? 'checked' : '')
                . ' class="check-show-food-menu">';
        }

        if ($column === 'show-today-specialy') {
            $field_name = 'food-menu-items_show-in-section-today-specialy';
            echo '<input type="checkbox" data-post-id="' . $post_id
                . '" data-field-name="' . $field_name . '" '
                . (get_field($field_name, $post_id) ? 'checked' : '')
                . ' class="check-show-today-specialy">';
        }

    }
    add_action('manage_food-menu-items_posts_custom_column', 'display_custom_field_column', 10, 2);

    function add_our_clients_column($columns)
    {
        $columns['show-our-clients'] = esc_html__('Show in the "Happy Clients" slider', 'restaurant-site');
        return $columns;
    }
    add_filter('manage_our-clients_posts_columns', 'add_our_clients_column');


    function display_our_clients__column($column, $post_id)
    {
        if ($column === 'show-our-clients') {
            $field_name = 'our-clients_show-slider-happy-clients';
            echo '<input type="checkbox" data-post-id="' . $post_id
                . '" data-field-name="' . $field_name . '" '
                . (get_field($field_name, $post_id) ? 'checked' : '')
                . ' class="check-show-slider-happy-clients">';
        }
    }
    add_action('manage_our-clients_posts_custom_column', 'display_our_clients__column', 10, 2);


}








//==============================================================================================
//==============================================================================================
