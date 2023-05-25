<?php
/* Template Name: 404-page */
?>
<?php get_header(); ?>

<main id="primary" class="site-main background e404-page-background">
	<div class="conteiner e404-page">



		<div class="e404-page__title">

			<span>
				4
			</span>
			<div class="wrap-img e404-page__wrap-img">

				<?php if ($restaurant_site_options['404_img']['url']) { ?>
					<img src="<?php echo esc_url($restaurant_site_options['404_img']['url']) ?>" alt="404 img">
				<?php } else {?>
					<!-- demo_content -->
					<img src="<?php echo bloginfo('template_url')?> /assets/img/Image_301x301.jpg" alt="">
				<?php }?>

			</div>
			<span>
				4
			</span>

		</div>



		<div class="e404-page__body">
			<h2>oops!!</h2>
			<p>the page you are looking for doesn't exit</p>
		</div>

		<a href="index.html" class="button-with-border"> back to home page </a>

	</div>
</main><!-- #main -->

<?php
get_footer();
