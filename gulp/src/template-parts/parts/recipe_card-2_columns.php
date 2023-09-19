<?php global $restaurant_site_options; ?>

<div class="recipe-card-2col">
	<figure class="wrap-img recipe-card-2col__post-thumbnail"><img src="<?php the_post_thumbnail_url() ?>" alt="">
	</figure>
	<div class="recipe-card-2col__body">
		<div class="recipe-card-2col__title">
			<h3>
				<?php _e( the_title(), 'restaurant-site' ); ?>
			</h3>
			<?php get_template_part( 'template-parts/components/rating-block' ) ?>
		</div>
		<p>
			<?php _e( rstr_trim_excerpt( 19 ), 'restaurant-site' ); ?>
		</p>
		<?php get_template_part( 'template-parts/components/button', 'orange', [ 'title' => 'recipe details', 'href' => esc_attr( get_permalink() ),] ) ?>
	</div>
</div>