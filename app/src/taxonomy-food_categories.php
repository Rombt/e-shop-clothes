<?php get_header(); ?>
<?php get_template_part( 'template-parts/parts/head_pages' ); ?>

<main class="conteiner menu-page-conteiner">

	<?php get_template_part( 'template-parts/components/food_menu', null, [ 'title' => get_the_archive_title(),] ); ?>
	<?php global $rstr_taxonomy; ?>

	<?php

	$rstr_queried_object = get_queried_object();
	$_SESSION['rstr_taxonomy'] = $rstr_queried_object->taxonomy;
	$_SESSION['name'] = $rstr_queried_object->name;


	?>


	<div class="menu-page-conteiner__row">
		<?php $view_mode = isset( $_SESSION['View_Mode_Menu_Page'] ) ? $_SESSION['View_Mode_Menu_Page'] : 'grid'; ?>
		<?php
		if ( class_exists( 'ReduxFramework' ) ) { // количество постов на странице задаётся в админке
			if ( $view_mode == 'grid' ) {
				$posts_per_page = esc_html( $restaurant_site_options['menu_page_grid_posts_per_page'] );
			} else {
				$posts_per_page = esc_html( $restaurant_site_options['menu_page_list_posts_per_page'] );
			}
		}
		?>
		<?php if ( have_posts() ) : ?>
			<?php
			/* Start the Loop */
			while ( have_posts() ) {
				the_post();
				if ( class_exists( 'ACF' ) ) {
					get_template_part( 'template-parts/parts/prod_card', $view_mode );
				}
			}
			?>
		</div>
		<?php
		else : // something
		endif;
		?>
	<?php get_template_part( 'template-parts/components/pagination' ); ?>

</main>

<?php get_template_part( 'template-parts/parts/speciality_block' ); ?>
<?php get_template_part( 'template-parts/components/opening_hours' ); ?>

<?php get_footer(); ?>