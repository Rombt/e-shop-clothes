<?php
/* Template Name: Menu page grid */
?>


<?php get_header(); ?>
<?php get_template_part( 'template-parts/parts/head_pages' ); ?>

<main class="conteiner menu-page-conteiner">

	<?php get_template_part( 'template-parts/components/food_menu', null, [ 'title' => ( class_exists( 'ReduxFramework' ) ? esc_html__( $restaurant_site_options['menu_title'] ) : "" ) ] ); ?>

	<?php
	$params           = [ 
		'post_type'      => 'food-menu-items',
		'posts_per_page' => 9,
	];
	$query_Menu_items = new WP_Query( $params );
	?>

	<div class="menu-page-conteiner__row">

		<?php if ( $query_Menu_items->have_posts() ) {
			while ( $query_Menu_items->have_posts() ) {
				$query_Menu_items->the_post();
				if ( class_exists( 'ACF' ) ) { ?>

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


				<?php } ?>

				<?php
			}
			wp_reset_postdata();
		} else {
			// something
		}

		get_template_part( 'template-parts/components/pagination' );

		?>



		<?php
		// get_template_part( 'template-parts/components/button', 'orange', [ 
		// 	'href'  => esc_html__( class_exists( 'ReduxFramework' ) ? $restaurant_site_options['button_href'] : "" ),
		// 	'title' => esc_html__( class_exists( 'ReduxFramework' ) ? $restaurant_site_options['button_title'] : "" ),
		// ] ); 
		?>
	</div>

</main>

<?php get_template_part( 'template-parts/parts/speciality_block' ); ?>
<?php get_template_part( 'template-parts/components/opening_hours' ); ?>

<?php get_footer(); ?>