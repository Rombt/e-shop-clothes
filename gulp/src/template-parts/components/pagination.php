<div class="rstr-pagination">

	<?php
	global $wp_query;

	if ( empty( $args['query'] ) ) {
		$query = $wp_query;
		$current_page = max( 1, get_query_var( 'paged' ) );
	} else {
		$query = $args['query'];
		$current_page = $args['current'];
	}

	if ( empty( $args['current'] ) ) {
		$current_page = absint( max( 1, get_query_var( 'paged' ) ? get_query_var( 'paged' ) : get_query_var( 'page' ) ) );
	} else {
		$current_page = $args['current'];
	}

	$prev_link = get_previous_posts_link( '<div class="rstr-pagination-icon rstr-pagination-icon__prev"></div> <p> ' . esc_html__( "prev" ) . ' </p>' );

	if ( $prev_link ) {
		echo str_replace( '<a', '<a class="prev page-numbers active"', $prev_link );
	} else {
		echo '<div class="prev page-numbers" ><div class="rstr-pagination-icon rstr-pagination-icon__prev"></div> <p> prev </p></div>';
	}

	$big = 999999999;
	echo paginate_links(
		array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'total' => $query->max_num_pages,
			'current' => $current_page,
			'format' => '?paged=%#%',
			'prev_next' => false,
		)
	);

	$next_link = get_next_posts_link( '<p>' . esc_html__( "next" ) . '</p> <div class="rstr-pagination-icon rstr-pagination-icon__next"></div>', $query->max_num_pages );

	if ( $next_link ) {
		echo str_replace( '<a', '<a class="next page-numbers active"', $next_link );
	} else {
		echo '<div class="prev page-numbers" > <p>' . esc_html__( "next" ) . '</p> <div class="rstr-pagination-icon rstr-pagination-icon__next"></div></div>';
	}
	?>
</div>