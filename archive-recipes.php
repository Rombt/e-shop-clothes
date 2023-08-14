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
<main class="conteiner recipies-page-conteiner">
	<div class="recipies-page-conteiner__row">

		<?php
		$view_mode = isset( $_SESSION['View_Mode_Recipe_Page'] ) ? $_SESSION['View_Mode_Recipe_Page'] : '2_columns';
		$current = absint( max( 1, get_query_var( 'paged' ) ? get_query_var( 'paged' ) : get_query_var( 'page' ) ) );
		$posts_per_page = 12;
		$query_Recipes = rst_custom_page_WPquery( 'recipes', $posts_per_page, $current );

		if ( $query_Recipes->have_posts() ) {
			while ( $query_Recipes->have_posts() ) {
				$query_Recipes->the_post();
				if ( class_exists( 'ACF' ) ) {
					get_template_part( 'template-parts/parts/recipe_card', $view_mode );
				}
			}
			?>
		</div>
		<?php
		get_template_part( 'template-parts/components/pagination', null, [ 'query' => $query_Recipes, 'current' => $current ] );
		} else {
			// something
		}
		wp_reset_postdata();
		?>

</main>


<?php get_template_part( 'template-parts/components/opening_hours' ); ?>

<?php get_footer(); ?>