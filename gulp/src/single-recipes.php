<?php get_header(); ?>
<?php get_template_part( 'template-parts/parts/head_pages' ); ?>

<?php global $restaurant_site_options; ?>


<div class="conteiner recipe-details-title">
	<div class="recipe-details-title__row">

		<?php
		if ( $wp_query->have_posts() ) {
			$wp_query->the_post();
			?>

			<h2>
				<?php echo the_title() ?>
			</h2>
			<div class="rating">
				<img src="<?php echo esc_url( $restaurant_site_options['rating-star-active_img']['url'] ) ?>" alt="">
				<img src="<?php echo esc_url( $restaurant_site_options['rating-star-active_img']['url'] ) ?>" alt="">
				<img src="<?php echo esc_url( $restaurant_site_options['rating-star-active_img']['url'] ) ?>" alt="">
				<img src="<?php echo esc_url( $restaurant_site_options['rating-star-passive_img']['url'] ) ?>" alt="">
				<img src="<?php echo esc_url( $restaurant_site_options['rating-star-passive_img']['url'] ) ?>" alt="">
			</div>
		</div>
	</div>
	<main class="conteiner recipe-details">
		<div class="recipe-details__row">

			<figure class="wrap-img recipe-details__wrap-img">
				<img src="<?php the_post_thumbnail_url() ?>" alt="">
			</figure>
			<div class="white-box">
				<div class="white-box__items">
					<p>
						15 M
						<span>Prep time</span>
					</p>
					<p>
						30 M
						<span>Cook Time</span>
					</p>
					<p>
						50 M
						<span>
							Read in
						</span>
					</p>
				</div>
				<div class="white-box__download">
					<a href="#">
						<img src="@img/icon-pdf.png" alt="">
						<p>
							Download
							<span> Food RecipieFood </span>
						</p>
					</a>
				</div>
			</div>
			<div class="recipe-details__text">
				<?php the_content(); ?>

				<?php

				$arr_all_filds = get_post_meta( get_the_ID() );

				$arr_ingredients = array_filter( $arr_all_filds, function ($key) {
					if ( preg_match( "/^ingredient_d*/i", $key ) ) {
						return $key;
					}
				}, ARRAY_FILTER_USE_KEY );
				$arr_ingredients = array_map( function ($value) {
					return $value[0];
				}, $arr_ingredients );
				?>




			</div>
			<div class="recipe-details__blocks">
				<div class="ingredients">
					<h3>Ingredients</h3>
					<ul>
						<?php
						foreach ( $arr_ingredients as $value ) : ?>
							<li>
								<?php if ( class_exists( 'ReduxFramework' ) && isset( $restaurant_site_options['marker_list_ingr_img']['url'] ) ) : ?>
									<img src="<?php echo esc_url( $restaurant_site_options['marker_list_ingr_img']['url'] ) ?>" alt="">
								<?php endif ?>
								<p>
									<?php echo $value ?>
								</p>
							</li>
						<?php endforeach ?>
					</ul>
				</div>
				<div class="nutrition">
					<h3>Nutrition</h3>
					<table>
						<thead>
							<tr>
								<th>Nutrient</th>
								<th>DV</th>
								<th>%DV</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Protein</td>
								<td>3.2 gr</td>
								<td>5%</td>
							</tr>
							<tr>
								<td>Fat</td>
								<td>6.5 gr</td>
								<td>6%</td>
							</tr>
							<tr>
								<td>Carbohydrates</td>
								<td>4.8 gr</td>
								<td>2%</td>
							</tr>
							<tr>
								<td>calories</td>
								<td>4.8 gr</td>
								<td>2%</td>
							</tr>
							<tr>
								<td>cholesterol</td>
								<td>102 kcal</td>
								<td>8%</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="wrap-img recipe-details__blocks-img">
					<?php if ( class_exists( 'ReduxFramework' ) && isset( $restaurant_site_options['small_img']['url'] ) ) { ?>
						<img src="<?php echo esc_url( $restaurant_site_options['small_img']['url'] ) ?>" alt="">
					<?php } ?>
				</div>
			</div>


			<?php



		} else {
			// something
		}
		?>










	</div>
</main>

<div class="food-step-background background ">
	<div class="wrap-img food-step-background__img">
		<!-- <img src="@img/food-step-background.jpg" alt="food step background"> -->
		<?php if ( class_exists( 'ReduxFramework' ) && isset( $restaurant_site_options['background_food_step_img']['url'] ) ) { ?>
			<img src="<?php echo esc_url( $restaurant_site_options['background_food_step_img']['url'] ) ?>" alt="">
		<?php } ?>
	</div>
	<div class="conteiner food-step">
		<h2>Food Step</h2>
		<div class="food-step__row">
			<div class="swiper swiper-food-step">
				<div class="swiper-wrapper">
					<div class="swiper-slide step-row">
						<div class="step-square">
							<p>1</p>
							<p>Step</p>
						</div>
						<div class="step-row__text">
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda omnis totam tempora,
							voluptatem
							ratione architecto, consectetur praesentium dolorem. Magni omnis architecto odit sit at nobis
							doloribus culpa cum eaque? Laborum.
						</div>
					</div>
					<div class="swiper-slide step-row">
						<div class="step-square">
							<p>2</p>
							<p>Step</p>
						</div>
						<div class="step-row__text">
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda omnis totam tempora,
							voluptatem
							ratione architecto, consectetur praesentium dolorem. Magni omnis architecto odit sit at nobis
							doloribus culpa cum eaque? Laborum.
						</div>
					</div>
					<div class="swiper-slide step-row">
						<div class="step-square">
							<p>3</p>
							<p>Step</p>
						</div>
						<div class="step-row__text">
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda omnis totam tempora,
							voluptatem
							ratione architecto, consectetur praesentium dolorem. Magni omnis architecto odit sit at nobis
							doloribus culpa cum eaque? Laborum.
						</div>
					</div>
					<div class="swiper-slide step-row">
						<div class="step-square">
							<p>4</p>
							<p>Step</p>
						</div>
						<div class="step-row__text">
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda omnis totam tempora,
							voluptatem
							ratione architecto, consectetur praesentium dolorem. Magni omnis architecto odit sit at nobis
							doloribus culpa cum eaque? Laborum.
						</div>
					</div>
					<div class="swiper-slide step-row">
						<div class="step-square">
							<p>5</p>
							<p>Step</p>
						</div>
						<div class="step-row__text">
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda omnis totam tempora,
							voluptatem
							ratione architecto, consectetur praesentium dolorem. Magni omnis architecto odit sit at nobis
							doloribus culpa cum eaque? Laborum.
						</div>
					</div>
					<div class="swiper-slide step-row">
						<div class="step-square">
							<p>6</p>
							<p>Step</p>
						</div>
						<div class="step-row__text">
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda omnis totam tempora,
							voluptatem
							ratione architecto, consectetur praesentium dolorem. Magni omnis architecto odit sit at nobis
							doloribus culpa cum eaque? Laborum.
						</div>
					</div>
					<div class="swiper-slide step-row">
						<div class="step-square">
							<p>7</p>
							<p>Step</p>
						</div>
						<div class="step-row__text">
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda omnis totam tempora,
							voluptatem
							ratione architecto, consectetur praesentium dolorem. Magni omnis architecto odit sit at nobis
							doloribus culpa cum eaque? Laborum.
						</div>
					</div>
					<div class="swiper-slide step-row">
						<div class="step-square">
							<p>8</p>
							<p>Step</p>
						</div>
						<div class="step-row__text">
							Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda omnis totam tempora,
							voluptatem
							ratione architecto, consectetur praesentium dolorem. Magni omnis architecto odit sit at nobis
							doloribus culpa cum eaque? Laborum.
						</div>
					</div>
				</div>
				<div class="swiper-scrollbar food-step__scrollbar"></div>
			</div>
		</div>
	</div>
</div>

<div class="conteiner featured-recipes">
	<div class="featured-recipes__title">Featured Recipies</div>
	<div class="featured-recipes__row">
		@@include('html/parts/recipe-card-2.html',{
		'title':'Prawns tikka',
		'img_src':'@img/recipe-card-img-2.jpg',
		'description':"Lorem Ipsum has been the industry's standard dummy text ever sistandard"
		})
		@@include('html/parts/recipe-card-2.html',{
		'title':'Prawns tikka',
		'img_src':'@img/recipe-card-img-2.jpg',
		'description':"Lorem Ipsum has been the industry's standard dummy text ever sistandard"
		})
		@@include('html/parts/recipe-card-2.html',{
		'title':'Prawns tikka',
		'img_src':'@img/recipe-card-img-2.jpg',
		'description':"Lorem Ipsum has been the industry's standard dummy text ever sistandard"
		})

	</div>
</div>


<?php get_template_part( 'template-parts/components/opening_hours' ); ?>

<?php get_footer(); ?>