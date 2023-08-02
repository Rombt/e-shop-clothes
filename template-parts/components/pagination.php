<div class="pagination">
	<?php
	$big = 999999999;
	echo paginate_links(
		array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'total' => $args['query']->max_num_pages,
			'current' => $args['current'],
			'format' => '?paged=%#%',
			'prev_text' => '<div class="pagination-icon pagination-icon__prev"></div> <p> ' . esc_html__( "prev" ) . ' </p>',
			'next_text' => '<p>' . esc_html__( "next" ) . '</p> <div class="pagination-icon pagination-icon__next"></div>',
		)
	); ?>
</div>