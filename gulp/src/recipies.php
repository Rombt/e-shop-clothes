<?php
/* Template Name: Recipies page */
?>


<?php get_header(); ?>
<?php get_template_part( 'template-parts/parts/head_pages' ); ?>

<!-- @@if(isProd == false){ @@include('html/debug-grid.html',{})} -->

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
		@@include('html/parts/recipe-card.html',{
		'title':'Prawns tikka',
		'img_src':'@img/recipe-card-img.jpg',
		'description':"Lorem Ipsum has been the industry's standard dummy text ever sistandard dummy text ever si"
		})
		@@include('html/parts/recipe-card.html',{
		'title':'Prawns tikka',
		'img_src':'@img/recipe-card-img.jpg',
		'description':"Lorem Ipsum has been the industry's standard dummy text ever sistandard dummy text ever si"
		})
		@@include('html/parts/recipe-card.html',{
		'title':'Prawns tikka',
		'img_src':'@img/recipe-card-img.jpg',
		'description':"Lorem Ipsum has been the industry's standard dummy text ever sistandard dummy text ever si"
		})
		@@include('html/parts/recipe-card.html',{
		'title':'Prawns tikka',
		'img_src':'@img/recipe-card-img.jpg',
		'description':"Lorem Ipsum has been the industry's standard dummy text ever sistandard dummy text ever si"
		})
		@@include('html/parts/recipe-card.html',{
		'title':'Prawns tikka',
		'img_src':'@img/recipe-card-img.jpg',
		'description':"Lorem Ipsum has been the industry's standard dummy text ever sistandard dummy text ever si"
		})
		@@include('html/parts/recipe-card.html',{
		'title':'Prawns tikka',
		'img_src':'@img/recipe-card-img.jpg',
		'description':"Lorem Ipsum has been the industry's standard dummy text ever sistandard dummy text ever si"
		})
	</div>
</main>


<?php get_template_part( 'template-parts/components/opening_hours' ); ?>

<?php get_footer(); ?>