<?php global $restaurant_site_options; ?>
<div class="recipe-card-3col">
	<figure class="wrap-img recipe-card-3col__post-thumbnail"><img src="<?php the_post_thumbnail_url() ?>" alt="">
	</figure>
	<div class="recipe-card-3col__body">
		<div class="recipe-card-3col__title">
			<h3>
				<?php _e( the_title(), 'restaurant-site' ); ?>
			</h3>
		</div>
		<?php get_template_part( 'template-parts/components/rating_block' ) ?>
	</div>
	<p>
		<?php echo rstr_trim_excerpt( 20 ) ?>
	</p>

	<?php get_template_part( 'template-parts/components/button', 'orange', [ 'title' => 'recipe details', 'href' => esc_attr( get_permalink() ),] ) ?>
</div>