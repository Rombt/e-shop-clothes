<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- <title>только для главной страницы</title> -->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php global $restaurant_site_options; ?>

    <div class="conteiner">
        <header class="header ">
            <a href="<?php echo get_home_url(); ?>" class="logo">
                <?php if ( $restaurant_site_options['logo_site']['url']) { ?>
                    <img src="<?php echo esc_url($restaurant_site_options['logo_site']['url']) ?>" alt="Site logo">
                <?php }?>
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
                    <a href="shopping-cart.html">
                        <?php if ( $restaurant_site_options['icon_cart']['url']) { ?>
                            <img src="<?php echo esc_url($restaurant_site_options['icon_cart']['url']) ?>" alt="icon cart">
                        <?php }?>
                    </a>
                </div>

                <?php get_template_part( 'template-parts/components/button', 'book', ['href'=>'#','title'=>'BOOK YOU TABLE']); ?>


            </div>
        </header>
    </div>

    <?php if (!is_front_page() && !is_404()) {  ?>
        <div class="background background-title-page-block">
            <div class="wrap-img">
                <!-- <img src="img/background-title-page-block.jpg" alt=""> -->

            <?php if ($restaurant_site_options['background-title-img']['url']) { ?>
                <img src="<?php echo esc_url($restaurant_site_options['background-title-img']['url']) ?>" alt="">
            <?php }?>


            </div>
            
            <?php if (is_search()) { ?>
               <h1> Результаты поиска </h1>
            <?php } else { ?>
            <h1> <?php wp_title("") ?> </h1>
            <?php } ?>
            
        </div>
    <?php } ?>