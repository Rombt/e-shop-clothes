<?php
/* Template Name: Recipies page */
?>


<?php get_header(); ?>
<?php get_template_part( 'template-parts/parts/head_pages' ); ?>


<div class="conteiner recipies-title">
	<div class="recipies-title__row">
		<h1>
			<?php echo class_exists( 'ReduxFramework' ) ? esc_html__( $restaurant_site_options['recipies_title'] ) : ""; ?>
		</h1>
		<div class="recipies-title__subtitle">
			<?php echo class_exists( 'ReduxFramework' ) ? wp_kses( $restaurant_site_options['recipies_subtitle'], 'post' ) : ""; ?>
		</div>

	</div>
</div>
<main class="conteiner recipies-conteiner">
	<div class="recipies-conteiner__row">



		<?php $view_mode = isset( $_SESSION['View_Mode_Menu_Page'] ) ? $_SESSION['View_Mode_Menu_Page'] : 'grid'; ?>

		<?php
		$current = absint( max( 1, get_query_var( 'paged' ) ? get_query_var( 'paged' ) : get_query_var( 'page' ) ) );

		$posts_per_page = ( $view_mode == 'grid' ) ? 9 : 12;
		$query_Menu_items = rst_menu_page_WPquery( 'recipes', $posts_per_page, $current );

		if ( $query_Menu_items->have_posts() ) {

			while ( $query_Menu_items->have_posts() ) {
				$query_Menu_items->the_post();
				if ( class_exists( 'ACF' ) ) {
					get_template_part( 'template-parts/parts/recipe_card', $view_mode );
				}
			}

			?>
		</div>

		<?php get_template_part( 'template-parts/components/pagination', null, [ 'query' => $query_Menu_items, 'current' => $current ] );

		} else {
			// something
		}
		?>

	<?php wp_reset_postdata(); ?>




	<!-- @@include('html/parts/recipe-card.html',{
		'title':'Prawns tikka',
		'img_src':'@img/recipe-card-img.jpg',
		'description':"Lorem Ipsum has been the industry's standard dummy text ever sistandard dummy text ever si"
		}) -->

	</div>
</main>


<?php get_template_part( 'template-parts/components/opening_hours' ); ?>

<?php get_footer(); ?>