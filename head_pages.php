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
            <a href="<?php echo esc_url(get_home_url()); ?>" class="logo">
                <?php if ($restaurant_site_options['logo_site']['url']) { ?>
                    <img src="<?php echo esc_url($restaurant_site_options['logo_site']['url']) ?>" alt="Site logo">
                <?php } else {?>
                    <h1 class='redux_font-title_site'> <?php esc_attr(bloginfo('title')) ?> </h1>
                <?php }?>     
            </a>
            <?php if (has_nav_menu('header_nav')) { ?>
            <div class="heder-menu__burger">
                <span></span>
            </div>
            
            <?php wp_nav_menu(
                array(
                                                'theme_location' => 'header_nav',
                                                'container' => 'nav',
                                                'container_class' => 'heder-menu redux_font-heder_navigation',
                                            )
            );
            } ?>
            
            <div class="cart-book">
                <?php if ($restaurant_site_options['search_icon']['url']) { ?>
                <div href="#" class="wrap-img search-icon">
                    <img class="wrap-img search-icon" src="<?php echo esc_url($restaurant_site_options['search_icon']['url']) ?>" alt="">
                </div>
                <?php }?>
                <div class="cart">
                    <div class="cart__cercle">3</div>
                    <a href="shopping-cart.html">
                        <?php if ($restaurant_site_options['icon_cart']['url']) { ?>
                            <img src="<?php echo esc_url($restaurant_site_options['icon_cart']['url']) ?>" alt="icon cart">
                        <?php }?>
                    </a>
                </div>
                <?php get_template_part('template-parts/components/button', 'book', ['href'=>'#','title'=>'BOOK YOU TABLE']); ?>
            </div>
        </header>
    </div>
    <?php get_template_part('template-parts/parts/searchform'); ?>


    <?php  if (is_home()) {
        echo 'is_home()';
    }  // срабатывает на странице блога. Есле главной страниценй сайта назначена динамическая страница с последними записями то сработает на ней и не сработает на странице с слагом blog?>                            
    <?php  if (is_front_page()) {
        echo 'is_front_page()';
    }  // срабатывает на странице которая назначена главной в не зависимости того какой шаблон для неё выбран?>       


    <?php  if (is_home() && is_front_page()) { ?>
    
        <div class="background background-title-page-block">
            <div class="wrap-img">
                <?php if ($restaurant_site_options['background-title-img']['url']) { ?>
                <img src="<?php echo esc_url($restaurant_site_options['background-title-img']['url']) ?>" alt="">
                <?php }?>
            </div>
            <h1> <?php   echo '--Blog--'; ?> </h1>
        </div>
    <?php } ?>




    <?php if (!is_front_page()) {  ?>


        <div class="background background-title-page-block">
            <div class="wrap-img">
                <?php if ($restaurant_site_options['background-title-img']['url']) { ?>
                <img src="<?php echo esc_url($restaurant_site_options['background-title-img']['url']) ?>" alt="">
                <?php }?>
            </div>
            <h1>  
                <?php
                if(is_category()) {
                    echo esc_html__('Category', 'restaurant-site') . single_cat_title("", false);
                } elseif(is_author()) {
                    echo esc_html__('Author', 'restaurant-site') . get_the_author();
                } elseif(is_tag()) {
                    echo esc_html__('Tag', 'restaurant-site') . single_tag_title("", false);
                } elseif(is_search()) {
                    echo esc_html__($restaurant_site_options['search-page_title'], 'restaurant-site');
                } elseif(is_archive()) {
                    if (is_day()) :
                        echo sprintf(esc_html__('Daily Archive: %s', 'restaurant-site'), get_the_date());
                    elseif (is_month()) :
                        echo  sprintf(esc_html__('Monthly Archive: %s', 'restaurant-site'), get_the_date(_x('F Y', 'monthly archives date format', 'restaurant-site')));
                    elseif (is_year()) :
                        echo  sprintf(esc_html__('Yearly Archive: %s', 'restaurant-site'), get_the_date(_x('Y', 'yearly archives date format', 'restaurant-site')));
                    else :
                        echo  esc_html__('Archive', 'restaurant-site');
                    endif;
                } elseif(is_404()) {
                    echo  esc_html__('Page not found', 'restaurant-site');
                } else {
                    echo  wp_title("");
                } ?>          
            </h1>
        </div>
    <?php } ?>

    <div class="conteiner breadcrumbs-conteiner">
        <div class="breadcrumbs-conteiner__row">
            <?php echo rstr_get_breadcrumbs(); ?>

        </div>
        
     </div>

