<?php
/* Template Name: Menu page grid */
?>


<?php get_header(); ?>
<?php get_template_part( 'template-parts/parts/head_pages' ); ?>

<main class="conteiner menu-page-conteiner">

	<?php get_template_part( 'template-parts/components/food_menu', null, [ 'title' => ( class_exists( 'ReduxFramework' ) ? esc_html__( $restaurant_site_options['menu_title'] ) : "" ) ] ); ?>

	<div class="menu-page-conteiner__row">

		<div class="prod-card-grid">
   <figure class="wrap-img"><img src="img/prod-card-img.jpg" alt="prod card img"></figure>
   <div class="prod-card-grid__body">
      <h3>jumbo carb thanroor</h3>
      <p>survived not only five centuries but the leap</p>
   </div>
   <div class="prod-card-grid__footer">
      <span>
         <p>$</p>50.00
      </span>
   </div>
</div>


		<div class="prod-card-grid">
   <figure class="wrap-img"><img src="img/prod-card-img.jpg" alt="prod card img"></figure>
   <div class="prod-card-grid__body">
      <h3>jumbo carb thanroor</h3>
      <p>survived not only five centuries but the leap</p>
   </div>
   <div class="prod-card-grid__footer">
      <span>
         <p>$</p>50.00
      </span>
   </div>
</div>

		<div class="prod-card-grid">
   <figure class="wrap-img"><img src="img/prod-card-img.jpg" alt="prod card img"></figure>
   <div class="prod-card-grid__body">
      <h3>jumbo carb thanroor</h3>
      <p>survived not only five centuries but the leap</p>
   </div>
   <div class="prod-card-grid__footer">
      <span>
         <p>$</p>50.00
      </span>
   </div>
</div>

		<div class="prod-card-grid">
   <figure class="wrap-img"><img src="img/prod-card-img.jpg" alt="prod card img"></figure>
   <div class="prod-card-grid__body">
      <h3>jumbo carb thanroor</h3>
      <p>survived not only five centuries but the leap</p>
   </div>
   <div class="prod-card-grid__footer">
      <span>
         <p>$</p>50.00
      </span>
   </div>
</div>

		<div class="prod-card-grid">
   <figure class="wrap-img"><img src="img/prod-card-img.jpg" alt="prod card img"></figure>
   <div class="prod-card-grid__body">
      <h3>jumbo carb thanroor</h3>
      <p>survived not only five centuries but the leap</p>
   </div>
   <div class="prod-card-grid__footer">
      <span>
         <p>$</p>50.00
      </span>
   </div>
</div>

		<div class="prod-card-grid">
   <figure class="wrap-img"><img src="img/prod-card-img.jpg" alt="prod card img"></figure>
   <div class="prod-card-grid__body">
      <h3>jumbo carb thanroor</h3>
      <p>survived not only five centuries but the leap</p>
   </div>
   <div class="prod-card-grid__footer">
      <span>
         <p>$</p>50.00
      </span>
   </div>
</div>

		<div class="prod-card-grid">
   <figure class="wrap-img"><img src="img/prod-card-img.jpg" alt="prod card img"></figure>
   <div class="prod-card-grid__body">
      <h3>jumbo carb thanroor</h3>
      <p>survived not only five centuries but the leap</p>
   </div>
   <div class="prod-card-grid__footer">
      <span>
         <p>$</p>50.00
      </span>
   </div>
</div>

		<div class="prod-card-grid">
   <figure class="wrap-img"><img src="img/prod-card-img.jpg" alt="prod card img"></figure>
   <div class="prod-card-grid__body">
      <h3>jumbo carb thanroor</h3>
      <p>survived not only five centuries but the leap</p>
   </div>
   <div class="prod-card-grid__footer">
      <span>
         <p>$</p>50.00
      </span>
   </div>
</div>

		<div class="prod-card-grid">
   <figure class="wrap-img"><img src="img/prod-card-img.jpg" alt="prod card img"></figure>
   <div class="prod-card-grid__body">
      <h3>jumbo carb thanroor</h3>
      <p>survived not only five centuries but the leap</p>
   </div>
   <div class="prod-card-grid__footer">
      <span>
         <p>$</p>50.00
      </span>
   </div>
</div>


		<?php get_template_part( 'template-parts/components/button', 'orange', [ 
			'href'  => esc_html__( class_exists( 'ReduxFramework' ) ? $restaurant_site_options['button_href'] : "" ),
			'title' => esc_html__( class_exists( 'ReduxFramework' ) ? $restaurant_site_options['button_title'] : "" ),
		] ); ?>
	</div>

</main>

<?php get_template_part( 'template-parts/parts/speciality_block' ); ?>
<?php get_template_part( 'template-parts/components/opening_hours' ); ?>

<?php get_footer(); ?>