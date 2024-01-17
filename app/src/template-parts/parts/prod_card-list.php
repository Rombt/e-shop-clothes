<div class="prod-card-list">
	<div class="prod-card-list__body">
		<h3>
			<a href="<?php echo get_permalink() ?>">
				<?php echo the_title() ?>
			</a>
		</h3>
		<p>
			<?php echo rstr_trim_excerpt( 5 ) ?>
		</p>
	</div>
	<div class="prod-card-list__footer">
		<p>
			<span>$</span>
			<?php echo get_field( 'food_price' ) ?>
		</p>
	</div>
</div>