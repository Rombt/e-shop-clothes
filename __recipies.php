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
		<div class="recipe-card-grid">
   <figure class="wrap-img"><img src="img/recipe-card-img.jpg" alt=""></figure>
   <div class="recipe-card-grid__body">
      <div class="recipe-card-grid__title">
         <h3>Prawns tikka</h3>
         <div class="rating">
            <img src="img/rating-star.png" alt="">
            <img src="img/rating-star.png" alt="">
            <img src="img/rating-star.png" alt="">
            <img src="img/rating-star.png" alt="">
            <img src="img/rating-star.png" alt="">
         </div>
      </div>
      <p>Lorem Ipsum has been the industry's standard dummy text ever sistandard dummy text ever si</p>
      <a href="recipie-details.html" class="button-orange ">recipe details</a>
   </div>
</div>
		<div class="recipe-card-grid">
   <figure class="wrap-img"><img src="img/recipe-card-img.jpg" alt=""></figure>
   <div class="recipe-card-grid__body">
      <div class="recipe-card-grid__title">
         <h3>Prawns tikka</h3>
         <div class="rating">
            <img src="img/rating-star.png" alt="">
            <img src="img/rating-star.png" alt="">
            <img src="img/rating-star.png" alt="">
            <img src="img/rating-star.png" alt="">
            <img src="img/rating-star.png" alt="">
         </div>
      </div>
      <p>Lorem Ipsum has been the industry's standard dummy text ever sistandard dummy text ever si</p>
      <a href="recipie-details.html" class="button-orange ">recipe details</a>
   </div>
</div>
		<div class="recipe-card-grid">
   <figure class="wrap-img"><img src="img/recipe-card-img.jpg" alt=""></figure>
   <div class="recipe-card-grid__body">
      <div class="recipe-card-grid__title">
         <h3>Prawns tikka</h3>
         <div class="rating">
            <img src="img/rating-star.png" alt="">
            <img src="img/rating-star.png" alt="">
            <img src="img/rating-star.png" alt="">
            <img src="img/rating-star.png" alt="">
            <img src="img/rating-star.png" alt="">
         </div>
      </div>
      <p>Lorem Ipsum has been the industry's standard dummy text ever sistandard dummy text ever si</p>
      <a href="recipie-details.html" class="button-orange ">recipe details</a>
   </div>
</div>
		<div class="recipe-card-grid">
   <figure class="wrap-img"><img src="img/recipe-card-img.jpg" alt=""></figure>
   <div class="recipe-card-grid__body">
      <div class="recipe-card-grid__title">
         <h3>Prawns tikka</h3>
         <div class="rating">
            <img src="img/rating-star.png" alt="">
            <img src="img/rating-star.png" alt="">
            <img src="img/rating-star.png" alt="">
            <img src="img/rating-star.png" alt="">
            <img src="img/rating-star.png" alt="">
         </div>
      </div>
      <p>Lorem Ipsum has been the industry's standard dummy text ever sistandard dummy text ever si</p>
      <a href="recipie-details.html" class="button-orange ">recipe details</a>
   </div>
</div>
		<div class="recipe-card-grid">
   <figure class="wrap-img"><img src="img/recipe-card-img.jpg" alt=""></figure>
   <div class="recipe-card-grid__body">
      <div class="recipe-card-grid__title">
         <h3>Prawns tikka</h3>
         <div class="rating">
            <img src="img/rating-star.png" alt="">
            <img src="img/rating-star.png" alt="">
            <img src="img/rating-star.png" alt="">
            <img src="img/rating-star.png" alt="">
            <img src="img/rating-star.png" alt="">
         </div>
      </div>
      <p>Lorem Ipsum has been the industry's standard dummy text ever sistandard dummy text ever si</p>
      <a href="recipie-details.html" class="button-orange ">recipe details</a>
   </div>
</div>
		<div class="recipe-card-grid">
   <figure class="wrap-img"><img src="img/recipe-card-img.jpg" alt=""></figure>
   <div class="recipe-card-grid__body">
      <div class="recipe-card-grid__title">
         <h3>Prawns tikka</h3>
         <div class="rating">
            <img src="img/rating-star.png" alt="">
            <img src="img/rating-star.png" alt="">
            <img src="img/rating-star.png" alt="">
            <img src="img/rating-star.png" alt="">
            <img src="img/rating-star.png" alt="">
         </div>
      </div>
      <p>Lorem Ipsum has been the industry's standard dummy text ever sistandard dummy text ever si</p>
      <a href="recipie-details.html" class="button-orange ">recipe details</a>
   </div>
</div>
	</div>
</main>


<?php get_template_part( 'template-parts/components/opening_hours' ); ?>

<?php get_footer(); ?>