<?php global $restaurant_site_options; ?>

<div class="background background-title-page-block">
	<div class="wrap-img">
		<?php if ( class_exists( 'ReduxFramework' ) && isset( $restaurant_site_options['background-title-img']['url'] ) ) { ?>
			<?php echo wp_get_attachment_image( $restaurant_site_options['background-title-img']['id'], 'rstr_header-img' ); ?>
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
		} elseif ( is_tax() ) {
			$current_query_object = get_queried_object();
			if ( is_a( $current_query_object, 'WP_Term' ) ) {
				echo $current_query_object->name;
			}
		} elseif ( is_archive() ) {
			if ( is_day() ) :
				echo sprintf( esc_html__( 'Daily Archive: %s', 'restaurant-site' ), get_the_date() );
			elseif ( is_month() ) :
				echo sprintf( esc_html__( 'Monthly Archive: %s', 'restaurant-site' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'restaurant-site' ) ) );
			elseif ( is_year() ) :
				echo sprintf( esc_html__( 'Yearly Archive: %s', 'restaurant-site' ), get_the_date( _x( 'Y', 'yearly archives date format', 'restaurant-site' ) ) );
			elseif ( is_post_type_archive( 'food_menu_items' ) ) :
				echo esc_html__( 'menu', 'restaurant-site' );
			elseif ( is_post_type_archive( 'recipes' ) ) :
				echo esc_html__( 'recipes', 'restaurant-site' );
			else :
				echo esc_html__( 'Archive', 'restaurant-site' );
			endif;
		} elseif ( is_singular( 'recipes' ) ) {
			echo esc_html__( wp_title( "" ) );
		} elseif ( is_404() ) {
			echo esc_html__( 'Page not found', 'restaurant-site' );
		} else {
			echo esc_html__( wp_title( "" ) );
		}
		?>
	</h1>
</div>


<?php get_template_part( 'template-parts/components/previe_block' ); ?>