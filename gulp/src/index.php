<?php get_header(); ?>


<!-- @@if(isProd == false){ @@include('html/debug-grid.html',{})} -->

<?php get_template_part( 'template-parts/parts/head_pages' ); ?>

<div class="conteiner articles-conteiner">

	<!-- <?php
	// if ( class_exists( 'ReduxFramework' )
	// 	&& $restaurant_site_options['icon-heart-active']['url']
	// 	&& $restaurant_site_options['icon-heart-pasive']['url']
	// ) {
	// 	wp_localize_script( 'restaurant_site-app', 'rstrLikeIconImg', [ 
	// 		'rstrLikeIconImgActive' => esc_url( $restaurant_site_options['icon-heart-active']['url'] ),
	// 		'rstrLikeIconImgPasive' => esc_url( $restaurant_site_options['icon-heart-pasive']['url'] ),
	// 		'rstrAjaxNonceLike' => wp_create_nonce( 'rstr-ajax-nonce-like' ),
	// 	] );
	// }
	?> -->

	<div class="articles-page-row">
		<main class="article-row">

			<?php if ( have_posts() ) {
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/parts/article_blog' );
				endwhile;
			} else {
				//   get_template_part('partials/notfound');
			}
			?>



			<?php get_template_part( 'template-parts/components/pagination' ); ?>

		</main>

		@@include('html/parts/blog-sidebar.html',{})
	</div>

</div>


<?php get_footer();