<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php global $restaurant_site_options; ?>

    <div class="conteiner">
        <header class="header ">
            <a href="<?php echo get_home_url(); ?>">
                <?php if ( isset($restaurant_site_options['logo_site']['url'])) { ?>
                    <img src="<?php echo esc_url($restaurant_site_options['logo_site']['url']) ?>" alt="Site logo">
                <?php } ?>
            </a>

            <div class="heder-menu__burger">
                <span></span>
            </div>

            <?php wp_nav_menu(
                array(
                    'theme_location' => 'header_nav',
                    'container' => 'nav',
                    'container_class' => 'heder-menu',
                )
            ); ?>

            <div class="cart-book">
                <div class="cart">
                    <div class="cart__cercle">3</div>
                    <?php if ( isset($restaurant_site_options['icon_cart']['url'])) { ?>
                        <a href="shopping-cart.html">
                            <img src="<?php echo esc_url($restaurant_site_options['icon_cart']['url']) ?>" alt="icon cart">
                        </a>
                    <?php } ?>
                    <img src="./img/arrow-cart.png" alt="">
                </div>
                <a href="#" class="heder-menu-button">
                    <?php if ( isset($restaurant_site_options['icon_botton_book']['url'])) { ?>
                        <img src="<?php echo esc_url($restaurant_site_options['icon_botton_book']['url']) ?>" alt="icon botton book">
                    <?php } ?>
                    BOOK YOU TABLE
                </a>
            </div>
        </header>
    </div>

    <?php if (!is_front_page() && !is_404()) {  ?>
        <div class="background background-title-page-block">
            <div class="wrap-img"><img src="img/background-title-page-block.jpg" alt=""></div>
            
            <?php if (is_search()) { ?>
               <h1> Результаты поиска </h1>
            <?php } else { ?>
            <h1> <?php wp_title("") ?> </h1>
            <?php } ?>
            
        </div>
    <?php } ?>