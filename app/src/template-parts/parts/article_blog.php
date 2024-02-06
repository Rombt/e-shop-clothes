<?php global $restaurant_site_options; ?>

<?php
$class_article = 'article-blog';
$class_article_img = 'article-blog__img';
$class_article_body = 'article-blog__body';
$class_text = 'article-blog__text';
if ( 'our-clients' === get_post_type() ) {
	$class_article = 'article-client';
	$class_article_img = 'article-client__img';
	$class_article_body = 'article-client__body';
	$class_text = 'article-client__text';
} ?>



<article <?php post_class( $class_article ) ?> id="<?php the_ID() ?>">

	<figure class="wrap-img <?php echo $class_article_img ?>">
		<?php if ( '' != get_the_post_thumbnail() ) : ?>
			<?php echo get_the_post_thumbnail( $post->ID, 'rstr_post-img' ); ?>
		<?php else : ?>
			<?php if ( class_exists( 'ReduxFramework' ) && $restaurant_site_options['no-thumbnail']['url'] ) { ?>
				<img class="no-thumbnail" src="<?php echo esc_url( $restaurant_site_options['no-thumbnail']['url'] ) ?>" alt="" ">
																											<?php } ?>
		<?php endif ?>
	</figure>

	<div class=" <?php echo $class_article_body ?>">
		<?php if ( 'our-clients' !== get_post_type() ) {
			get_template_part( 'template-parts/components/date', 'square' );
		} ?>

		<div class="<?php echo $class_text ?>">
			<h2>
				<?php the_title() ?>
			</h2>
			<?php if ( 'our-clients' === get_post_type() ) {
				get_template_part( 'template-parts/components/date', 'line' );
			} ?>



			<span>
				<?php echo rstr_trim_excerpt( 40 ) ?>
			</span>
		</div>
		</div>

		<footer class="article-blog-footer">

			<?php get_template_part(
				'template-parts/components/button',
				'orange',
				[ 
					'href' => get_permalink(),
					'title' => class_exists( 'ReduxFramework' ) ? esc_html( $restaurant_site_options['article-blog_button-title'] ) : "",
				]
			); ?>
			<?php
			get_template_part( 'template-parts/components/article_icons_block' )
				?>


		</footer>
</article>


<?php

if ( is_single() ) {

	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;

}


?>