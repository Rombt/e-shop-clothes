<?php get_header(); ?>

<?php get_template_part( 'template-parts/parts/head_pages' ); ?>



<main id="primary" class="site-main conteiner-for-wp-blocs menu-page-conteiner">

	<?php if ( have_posts() ) : ?>




		<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
		<?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>


		<?php
		echo '<hr><hr>';
		?>
		<h2> <b>Is the file of name: "taxonomy.php"</b> </h2>

		<b>archive pages ??!!</b>
		<br>
		<b>single post type pages ??!!</b>


		<hr>
		<hr>
		<br><br><br><br><br>
		<br><br><br><br><br>
		<hr>
		<hr>
		<br>
		<?php
		/* Start the Loop */
		while ( have_posts() ) :

			the_post();
			echo '<h1>';
			the_title();
			echo '</h1>';
			the_content();
			echo '+++++++++++++++<hr>+++++++++++++++';
		endwhile;

		echo '<br>';

	else :

		get_template_part( 'template-parts/content', 'none' );

	endif;
	?>

	<?php get_template_part( 'template-parts/components/pagination' ); ?>



</main><!-- #main -->


<?php get_footer(); ?>