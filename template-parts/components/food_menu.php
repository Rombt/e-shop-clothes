<div class="top-menu-wrap">
	<h2>
		<?php echo $args['title']; ?>
	</h2>
	<div class="food-menu">
		<div class="burger-open food-menu__burger">
			<span></span>
		</div>
		<?php wp_nav_menu( [ 
			'theme_location' => 'food_menu',
			'fallback_cb' => '__return_empty_string',
			'container' => 'nav',
			'container_class' => 'menu food-menu',
			'menu_class' => 'food-menu__list',
			'add_li_class' => 'food-menu__item',
			'add_link_class' => 'food-menu__link',
		] ); ?>
	</div>
	<div class="wrap-nenu__border"></div>
</div>