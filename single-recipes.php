<?php get_header(); ?>
<?php get_template_part( 'template-parts/parts/head_pages' ); ?>

<?php global $restaurant_site_options; ?>
<?php $arr_all_filds = get_post_meta( get_the_ID() ); ?>



<div class="conteiner recipe-details-title">
	<div class="recipe-details-title__row">
		<?php if ( $wp_query->have_posts() ) :
			$wp_query->the_post(); ?>
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
						<?php esc_html_e( get_post_meta( get_the_ID(), 'read-in', true ) ) ?>
						<span>Prep time</span>
					</p>
					<p>
						<?php esc_html_e( get_post_meta( get_the_ID(), 'cook-time', true ) ) ?>
						<span>Cook Time</span>
					</p>
					<p>
						<?php esc_html_e( get_post_meta( get_the_ID(), 'prep-time', true ) ) ?>
						<span>
							Read in
						</span>
					</p>
				</div>
				<div class="white-box__download">
					<a download
						href="<?php esc_attr_e( wp_upload_dir()['baseurl'] . '/files recipes/' . get_post_meta( get_the_ID(), 'file_recipe', true ) ) ?>">
						<?php if ( class_exists( 'ReduxFramework' ) && isset( $restaurant_site_options['icon_download_file_recipe']['url'] ) ) : ?>
							<img src="<?php echo esc_url( $restaurant_site_options['icon_download_file_recipe']['url'] ) ?>" alt="">
						<?php endif ?>
						<p>
							Download
							<span> Food RecipieFood </span>
						</p>
					</a>
				</div>
			</div>
			<div class="recipe-details__text">
				<?php the_content(); ?>
			</div>
			<div class="recipe-details__blocks">
				<div class="ingredients">
					<?php
					$arr_ingredients = array_filter( $arr_all_filds, function ($key) {
						if ( preg_match( "/^ingredient_d*/i", $key ) ) {
							return $key;
						}
					}, ARRAY_FILTER_USE_KEY );
					$arr_ingredients = array_map( function ($value) {
						return $value[0];
					}, $arr_ingredients );
					?>
					<h3>Ingredients</h3>
					<ul>
						<?php
						foreach ( $arr_ingredients as $value ) : ?>
							<li>
								<?php if ( class_exists( 'ReduxFramework' ) && isset( $restaurant_site_options['marker_list_ingr_img']['url'] ) ) : ?>
									<img src="<?php echo esc_url( $restaurant_site_options['marker_list_ingr_img']['url'] ) ?>" alt="">
								<?php endif ?>
								<p>
									<?php esc_html_e( $value, 'restaurant-site' ) ?>
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
							<?php foreach ( $arr_all_filds as $key => $value ) :
								if ( preg_match( "/^nutrition_d*/i", $key, ) ) :
									preg_match( "/\d*$/i", $key, $current ) ?>
									<tr>
										<td>
											<?php esc_html_e( $value[0], 'restaurant-site' ) ?>
										</td>
										<td>
											<?php esc_html_e( implode( '', $arr_all_filds[ "dv_$current[0]" ] ), 'restaurant-site' ) ?>
										</td>
										<td>
											<?php esc_html_e( implode( '', $arr_all_filds[ "dv_percent_$current[0]" ] ), 'restaurant-site' ) ?>
										</td>
									</tr>
								<?php endif;
							endforeach;
							?>
						</tbody>
					</table>
				</div>
				<div class="wrap-img recipe-details__blocks-img">
					<?php if ( class_exists( 'ReduxFramework' ) && isset( $restaurant_site_options['small_img']['url'] ) ) { ?>
						<img src="<?php echo esc_url( $restaurant_site_options['small_img']['url'] ) ?>" alt="">
					<?php } ?>
				</div>
			</div>
		<?php else :
			// something
		endif ?>
	</div>
</main>

<div class="food-step-background background ">
	<div class="wrap-img food-step-background__img">
		<?php if ( class_exists( 'ReduxFramework' ) && isset( $restaurant_site_options['background_food_step_img']['url'] ) ) { ?>
			<img src="<?php echo esc_url( $restaurant_site_options['background_food_step_img']['url'] ) ?>" alt="">
		<?php } ?>
	</div>
	<div class="conteiner food-step">
		<?php
		$arr_food_step = array_filter( $arr_all_filds, function ($key) {
			if ( preg_match( "/^food-step_d*/i", $key ) ) {
				return $key;
			}
		}, ARRAY_FILTER_USE_KEY );
		$arr_food_step = array_map( function ($value) {
			return $value[0];
		}, $arr_food_step );
		$current_step = 0;
		?>
		<h2>Food Step</h2>
		<div class="food-step__row">
			<div class="swiper swiper-food-step">
				<div class="swiper-wrapper">
					<?php
					foreach ( $arr_food_step as $value ) :
						$current_step++ ?>
						<div class="swiper-slide step-row">
							<div class="step-square">
								<p>
									<?php esc_html_e( $current_step, 'restaurant-site' ) ?>
								</p>
								<p>Step</p>
							</div>
							<div class="step-row__text">
								<?php esc_html_e( $value, 'restaurant-site' ) // todo разобраться с шрифтом ?>
							</div>
						</div>
					<?php endforeach ?>
				</div>
				<div class="swiper-scrollbar food-step__scrollbar"></div>
			</div>
		</div>
	</div>
</div>

<div class="conteiner featured-recipes">
	<div class="featured-recipes__title">Featured Recipes</div>
	<div class="featured-recipes__row">
		<?php
		$rstr_fr_query = rstr_custom_WPquery( 'recipes', 3 ); // todo выбирать рецепты по какомуто признаку пр: связанные, похожие, популярные, из той же категории и т.п.
		if ( $rstr_fr_query->have_posts() ) {
			while ( $rstr_fr_query->have_posts() ) {
				$rstr_fr_query->the_post();
				if ( class_exists( 'ACF' ) ) {
					get_template_part( '/template-parts/parts/recipe_card', '3_columns' );
				}
			}
			?>
		</div>
		<?php
		} else {
			// todo something
		}
		wp_reset_postdata();
		?>

</div>


<?php if ( get_the_tags() ) { ?>
	<p class="tagsphar">
		<?php the_tags( esc_html__( 'Tags: ', 'restaurant-site' ), ' ', '' ); ?>
	</p>
<?php } ?>


<?php if ( comments_open() || get_comments_number() ) : ?>
	<?php comments_template(); ?>
<?php endif; ?>

<?php get_template_part( 'template-parts/components/opening_hours' ); ?>

<?php get_footer(); ?>