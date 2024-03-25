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

	<?php if (session_status() == PHP_SESSION_NONE) {
		session_start();
	} ?>

	<?php global $restaurant_site_options; ?>
	<?php // get_template_part('template-parts/components/debug-grid');
	?>

	<?php get_template_part('template-parts/components/access_to_admin_panel'); ?>

	<div class="rstr-container">
		<header class="header ">
			<a href="<?php echo esc_url(get_home_url()); ?>" class="logo">
				<?php if (rstr_get_pic_url('logo_site')) { ?>
					<img src="<?php echo rstr_get_pic_url('logo_site'); ?>" alt="Site logo">

				<?php  } else { ?>
					<h1 class='redux_font-title_site'> <?php esc_attr(bloginfo('title')) ?> </h1>
				<?php  } ?>
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
						'container_id' => 'heder-menu',
					)
				);
			} ?>

			<div class="cart-book">
				<a href="#" class="wrap-img search-icon" data-da=".header, 767">
					<?php if (rstr_get_pic_url('search_icon')) { ?>
						<img class="wrap-img" src="<?php echo rstr_get_pic_url('search_icon') ?>" alt="">
					<?php } else { ?>
						<svg>
							<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#search_6">
							</use>
						</svg>
					<?php } ?>
				</a>
				<a href="<?php echo wc_get_cart_url(); ?>" class="cart wrap-img" data-da=".header, 767">
					<div class="cart__cercle"><?php echo WC()->cart->get_cart_contents_count(); ?></div>
					<?php if (rstr_get_pic_url('icon_cart')) { ?>
						<img src="<?php echo rstr_get_pic_url('icon_cart'); ?>" alt="icon cart">
					<?php } else { ?>
						<svg>
							<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#cart_2">
							</use>
						</svg>
					<?php } ?>
				</a>
				<?php get_template_part('template-parts/components/button', 'book', ['href' => '#', 'title' => 'BOOK YOU TABLE']); ?>
			</div>
		</header>
	</div>
	<?php get_template_part('template-parts/parts/searchform'); ?>