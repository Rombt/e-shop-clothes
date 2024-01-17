<div class="prod-card-grid">
	<figure class="wrap-img">
		<a href="<?php echo get_permalink() ?>"><img src="<?php the_post_thumbnail_url() ?>" alt=""></a>
	</figure>
	<div class="prod-card-grid__body">
		<h3>
			<a href="<?php echo get_permalink() ?>">
				<?php echo the_title() ?>
			</a>
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