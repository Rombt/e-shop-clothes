<?php get_header(); ?>


<!-- @@if(isProd == false){ @@include('html/debug-grid.html',{})} -->

<?php get_template_part('template-parts/parts/head_pages'); ?>

<div class="rstr-container articles-container">
	<div class="articles-page-row">
		<main class="article-row">

			<?php if (have_posts()) {
				while (have_posts()) :
					the_post();
					get_template_part('template-parts/parts/article_blog');
				endwhile;
			} else {
				//   get_template_part('partials/notfound');
			}
			?>


			<?php get_template_part('template-parts/components/pagination'); ?>

		</main>

	</div>

	<?php get_sidebar('blog'); ?>
</div>


<?php get_footer();



?>