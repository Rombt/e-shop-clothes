<?php

if (!in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
   exit;
}


function rstr_wc_site_setup()
{
   add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'rstr_wc_site_setup');


/**
 * Rename "home" in breadcrumb
 */
add_filter('woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb');
function wcc_change_breadcrumb($defaults)
{
   // Change the breadcrumb home text from 'Home' to 'Apartment'
   $defaults['home'] = 'home';
   // $defaults['delimiter'] = ' &gt; ';
   return $defaults;
}



add_action('woocommerce_before_variations_form', 'woocommerce_single_variation', 11);
add_action('woocommerce_after_cart_table', 'woocommerce_cart_totals', 10);
add_action('woocommerce_after_cart', 'woocommerce_cross_sell_display');
