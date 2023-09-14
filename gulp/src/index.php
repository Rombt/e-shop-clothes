<?php get_header(); ?>


<!-- @@if(isProd == false){ @@include('html/debug-grid.html',{})} -->

<?php get_template_part( 'template-parts/parts/head_pages' ); ?>

<div class="conteiner articles-conteiner">

	<?php
	if ( class_exists( 'ReduxFramework' ) && $restaurant_site_options['icon-heart-pasive']['url'] ) {
		wp_localize_script( 'restaurant_site-app', 'rstrLikeIconImg', [ 
			'rstrLikeIconImgActive' => esc_url( $restaurant_site_options['icon-heart-active']['url'] ),
			'rstrLikeIconImgPasive' => esc_url( $restaurant_site_options['icon-heart-pasive']['url'] ),
		] );
	}
	?>



	<div class="articles-page-row">
		<main class="article-row">


			<?php
			// echo "<pre>";
			// print_r( $wp_query );
			// echo "</pre>";
			?>

			<?php if ( have_posts() ) {
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/parts/article-blog' );
				endwhile;
			} else {
				//   get_template_part('partials/notfound');
			}
			; ?>











			<!-- @@include('html/parts/article-blog.html',{
			'day':'08',
			'month':'nov-06',
			'title':'Aenean pharetra lectus utsto.',
			'text':'Lorem&nbspipsum,&nbspdolor&nbspsit&nbspamet&nbspconsectetur&nbspadipisicing&nbspelit.&nbspQuam&nbspharum&nbspdelectus&nbspcumque&nbspdeserunt&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsplaboriosam&nbspquis&nbspdicta&nbspsuscipit&nbsplaudantium&nbspcorrupti&nbspquos&nbspdoloremque&nbspasperiores,&nbspconsequuntur&nbsput&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsprepellendus!&nbspLaudantium&nbspsint&nbspaut&nbspest&nbspeum!',
			'likes-amounth':'65',
			'article-blog-footer-display':'',
			'blog-details-footer-display':'style="display:none"',
			}) -->


			<!-- <?php get_template_part( 'template-parts/components/pagination' ); ?> -->

		</main>

		@@include('html/parts/blog-sidebar.html',{})
	</div>

</div>


<?php get_footer();