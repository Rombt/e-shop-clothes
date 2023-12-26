<?php get_header(); ?>

<?php get_template_part( 'template-parts/parts/head_pages' ); ?>



<main id="primary" class="site-main conteiner-for-wp-blocs menu-page-conteiner">

	<?php if ( have_posts() ) : ?>



		<h1> Is taxonomy-food_categories.php </h1>

		<?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>


		<?php
		echo '<hr>';
		echo '<hr>';
		echo '<br>';
		/* Start the Loop */
		while ( have_posts() ) :

			the_post();
			echo '<h1>';
			the_title();
			echo '</h1>';
			the_content();
			echo '<hr>';
		endwhile;

		echo '<br>';

	else :

		get_template_part( 'template-parts/content', 'none' );

	endif;
	?>

	<?php get_template_part( 'template-parts/components/pagination' ); ?>



</main><!-- #main -->


<?php get_footer(); ?>