<?php get_header(); ?>

<?php get_template_part( 'template-parts/parts/head_pages' ); ?>


<main id="primary" class="site-main conteiner-for-wp-blocs">

	<?php if ( have_posts() ) : ?>



		<h1> Is archive.php </h1>

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
		the_posts_navigation();

	else :

		get_template_part( 'template-parts/content', 'none' );

	endif;
	?>

</main><!-- #main -->

<?php
// get_sidebar();
get_footer();