<div class="prod-card-grid">
	<figure class="wrap-img"><img src="<?php the_post_thumbnail_url() ?>" alt=""></figure>
	<div class="prod-card-grid__body">
		<h3>
			<?php echo the_title() ?>
		</h3>
		<?php echo rstr_trim_excerpt( 7 ) ?>
	</div>
	<div class="prod-card-grid__footer">
		<p>
			<span>$</span>
			<?php echo get_field( 'food_price' ) ?>
		</p>
	</div>
</div>