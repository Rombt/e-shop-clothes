<?php

// echo '***************************************************';

// function restaurant_site_acf_metaboxes()
// {

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
));

// }
// add_action('acf/init', 'restaurant_site_acf_metaboxes');
