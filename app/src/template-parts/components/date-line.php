<div class="date-line">
	<?php $arr_str_data = explode( ' ', get_post_time( 'd M y', true ) ); ?>
	<p>
		<?php echo $arr_str_data[0] . '-' . $arr_str_data[1] . '-' . $arr_str_data[2] ?>
	</p>
</div>