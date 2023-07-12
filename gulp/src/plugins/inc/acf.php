<?php

// echo '***************************************************';

function restaurant_site_acf_metaboxes()
{

    acf_add_local_field_group(array(
        'key' => 'food-menu-items_properties',
        'title' => 'Properties Food Menu Item',
        'fields' => array(
            array(
                'key' => 'field_1',
                'name' => 'food_price',
                'label' => 'Dish price',
                'type' => 'number',
                'placeholder' => 'Add price this dish here',
                'prepend' => '$',
                'min' => '0.01',
                'max' => '',
                'step' => '0.01',
            ),
            array(
                'key' => 'field_2',
                'name' => 'food-menu-items_show-in-front-page',
                'label' => 'Show this dish on front page',
                'type' => 'checkbox',
                'choices' => array(
                    'show' => 'show-on',
                ),
                'layout' => 'horizontal',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'food-menu-items',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(),
        'return_format' => 'array',
    ));

    acf_add_local_field_group(array(
        'key' => 'properties-food-categories',
        'title' => 'Properties of Food Categories',
        'fields' => array(
            array(
                'key' => 'field_3',
                'name' => 'food-categories-icon',
                'label' => 'Icon for this food categories',
                'type' => 'image',
                'return_format' => 'url',
                'max_width' => '50px',
                'max_height' => '50px',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'taxonomy',
                    'operator' => '==',
                    'value' => 'food-categories',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        // 'instruction_placement' => 'label',
        // 'hide_on_screen' => array(),
        // 'return_format' => 'array',
    ));

}
add_action('acf/init', 'restaurant_site_acf_metaboxes');

add_action('wp_ajax_update_custom_field', 'update_food_menu_items_show_in_front_page');
function update_food_menu_items_show_in_front_page()  // for change field value by ajax
{
    $post_id = $_POST['post_id'];
    $field_name = $_POST['field_name'];
    $field_value = $_POST['field_value'];
    update_field($field_name, $field_value, $post_id);
    wp_die();
}
