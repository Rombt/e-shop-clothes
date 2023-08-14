<div class="recipe-card-grid">
	<figure class="wrap-img"><img src="@@img_src" alt=""></figure>
	<div class="recipe-card-grid__body">
		<div class="recipe-card-grid__title">
			<h3>
				<?php _e( the_title(), 'restaurant-site' ); ?>
			</h3>
			<div class="rating">
				<img src="img/rating-star.png" alt="">
				<img src="img/rating-star.png" alt="">
				<img src="img/rating-star.png" alt="">
				<img src="img/rating-star.png" alt="">
				<img src="img/rating-star.png" alt="">
			</div>
		</div>
		<p>
			<?php _e( rstr_trim_excerpt( 19 ), 'restaurant-site' ); ?>
		</p>
		<?php get_template_part( 'template-parts/components/button', 'orange', [ 'title' => 'recipe details', 'href' => '#' ] ) ?>
	</div>
</div>