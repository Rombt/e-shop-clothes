<div class="prod-card-list">
	<div class="prod-card-list__body">
		<a href="#">
			<h3>
				<?php echo the_title() ?>
			</h3>
			<p>
				<?php echo rstr_trim_excerpt( 5 ) ?>
			</p>
		</a>
	</div>
	<div class="prod-card-list__footer">
		<p>
			<span>$</span>
			<?php echo get_field( 'food_price' ) ?>
		</p>
	</div>
</div>