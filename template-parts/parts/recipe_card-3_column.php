<div class="recipe-card-grid-2">
	<figure class="wrap-img"><img src="@@img_src" alt=""></figure>
	<div class="recipe-card-grid-2__body">
		<div class="recipe-card-g<?php echo the_title() ?>echo args['title']</h3>
			<div class=" rating">
			<img src="img/rating-star.png" alt="">
			<img src="img/rating-star.png" alt="">
			<img src="img/rating-star.png" alt="">
			<img src="img/rating-star.png" alt="">
			<img src="img/rating-star.png" alt="">
		</div>
	</div>
	<p>
		<?php echo rstr_trim_excerpt( 20 ) ?>
	</p>

	<?php get_template_part( 'template-parts/components/button', 'orange', [ 'title' => 'recipe details', 'href' => '#' ] ) ?>
	?>
</div>
</div>