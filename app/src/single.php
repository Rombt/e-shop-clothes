<?php get_header(); ?>
<?php get_template_part('template-parts/parts/head_pages'); ?>

<main class="rstr-container menu-page-container">


	<div class="menu-page-container__row">

		<?php
		if (have_posts()) {
			while (have_posts()) {
				the_post();
				get_template_part('template-parts/parts/article_blog');
			}
		?>
	</div>
<?php
		} else {
			// something
		}
?>


</div>

</main>


<?php // get_template_part( 'template-parts/parts/speciality_block' ); 
?>
<?php // get_template_part( 'template-parts/components/opening_hours' ); 
?>

<?php get_footer(); ?>