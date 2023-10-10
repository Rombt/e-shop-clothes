<?php global $restaurant_site_options; ?>

<article <?php post_class( 'article-blog' ) ?> id="<?php the_ID() ?>">

	<figure class="wrap-img article-blog__img">
		<?php if ( '' != get_the_post_thumbnail() ) : ?>
			<?php echo get_the_post_thumbnail( $post->ID, 'rstr_post-img' ); ?>
		<?php else : ?>
			<?php if ( class_exists( 'ReduxFramework' ) && $restaurant_site_options['no-thumbnail']['url'] ) { ?>
				<img class="no-thumbnail" src="<?php echo esc_url( $restaurant_site_options['no-thumbnail']['url'] ) ?>" alt="" ">
				<?php } ?>
		<?php endif ?>
	</figure>

	<div class=" article-blog__body">
		<div class="square-date">
			<?php $arr_str_data = explode( ' ', get_post_time( 'd M y', true ) ); ?>
			<p>
				<?php echo $arr_str_data[0] ?>
			</p>
			<p>
				<?php echo $arr_str_data[1] . '-' . $arr_str_data[2] ?>
			</p>
		</div>
		<div class="article-blog__text">
			<h2>
				<?php the_title() ?>
			</h2>
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