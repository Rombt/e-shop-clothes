<?php global $restaurant_site_options; ?>

<div class="background background-title-page-block">
	<div class="wrap-img">
		<?php if ( class_exists( 'ReduxFramework' ) && $restaurant_site_options['background-title-img']['url'] ) { ?>
			<img src="<?php echo esc_url( $restaurant_site_options['background-title-img']['url'] ) ?>" alt="">
		<?php } ?>
	</div>
	<h1>
		<?php
		if ( is_front_page() ) {
			echo wp_get_document_title();
		} elseif ( is_category() ) {
			echo esc_html__( 'Category', 'restaurant-site' ) . single_cat_title( "", false );
		} elseif ( is_author() ) {
			echo esc_html__( 'Author', 'restaurant-site' ) . get_the_author();
		} elseif ( is_tag() ) {
			echo esc_html__( 'Tag', 'restaurant-site' ) . single_tag_title( "", false );
		} elseif ( is_search() ) {
			echo esc_html__( $restaurant_site_options['search-page_title'], 'restaurant-site' );
		} elseif ( is_archive() ) {
			if ( is_day() ) :
				echo sprintf( esc_html__( 'Daily Archive: %s', 'restaurant-site' ), get_the_date() );
			elseif ( is_month() ) :
				echo sprintf( esc_html__( 'Monthly Archive: %s', 'restaurant-site' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'restaurant-site' ) ) );
			elseif ( is_year() ) :
				echo sprintf( esc_html__( 'Yearly Archive: %s', 'restaurant-site' ), get_the_date( _x( 'Y', 'yearly archives date format', 'restaurant-site' ) ) );
			else :
				echo esc_html__( 'Archive', 'restaurant-site' );
			endif;
		} elseif ( is_404() ) {
			echo esc_html__( 'Page not found', 'restaurant-site' );
		} else {
			echo wp_title( "" );
		}
		?>
	</h1>
</div>


<div class="conteiner breadcrumbs-conteiner">
	<div class="breadcrumbs-conteiner__row">
		<?php echo rstr_get_breadcrumbs(); ?>
	</div>

</div>