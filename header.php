<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div class="conteiner">
        <header class="header ">
            <a href="index.html" class="logo"><img src="./img/logo.png" alt="logo"></a>
            <div class="heder-menu__burger">
                <span></span>
            </div>
            <nav class="heder-menu">
                <ul class="menu__list">
                    <li><a href="index.html">home</a></li>
                    <!-- <li><a href="menu-page-grid.html">menu</a></li> -->
                    <li><a href="menu-page-list.html">menu</a></li>
                    <li><a href="recipies.html">recipe</a></li>
                    <li><a href="blog-page.html">blog</a></li>
                    <li><a href="about-us.html">about</a></li>
                    <li><a href="contacts.html">contact</a></li>
                    <li><a href="shop-listing.html">Shop</a></li>
                </ul>
            </nav>
            <div class="cart-book">
                <div class="cart">
                    <div class="cart__cercle">3</div>
                    <a href="shopping-cart.html">
                        <img src="./img/icon_cart.png" alt="">
                    </a>
                    <img src="./img/arrow-cart.png" alt="">
                </div>
                <a href="#" class="heder-menu-button">
                    <img src="./img/icon_plate.png" alt="">
                    BOOK YOU TABLE
                </a>
            </div>
        </header>
    </div>