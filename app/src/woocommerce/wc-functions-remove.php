<?php



remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);   // общее количество товаров
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);  // сортировка товаров
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
