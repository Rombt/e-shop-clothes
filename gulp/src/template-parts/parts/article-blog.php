<?php global $restaurant_site_options; ?>

<article <?php post_class( 'article-blog' ) ?> id="<?php the_ID() ?>">

	<figure class="wrap-img article-blog__img">
		<?php if ( '' != get_the_post_thumbnail() ) : ?>
			<?php echo get_the_post_thumbnail( $post->ID, 'post-img' ); ?>
		<?php else : ?>
			<?php if ( class_exists( 'ReduxFramework' ) && $restaurant_site_options['no-thumbnail']['url'] ) { ?>
				<img src="<?php echo esc_url( $restaurant_site_options['no-thumbnail']['url'] ) ?>" alt="">
			<?php } ?>
		<?php endif ?>
	</figure>

	<div class="article-blog__body">
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

	<footer class="article-blog-footer" @@article-blog-footer-display>

		<?php get_template_part(
			'template-parts/components/button',
			'orange',
			[ 
				'href' => get_permalink(),
				'title' => class_exists( 'ReduxFramework' ) ? esc_html( $restaurant_site_options['article-blog_button-title'] ) : "",
			]
		); ?>
		<!-- @@include('article-icons-block.html',{'likes-amounth':'65'}) -->
		<?php
		get_template_part( 'template-parts/components/article_icons_block' )
			?>


	</footer>


	<!-- <footer class="blog-details-footer" @@blog-details-footer-display>
		<div class="blog-details-footer__quotes quotes-left">
			<img src="@img/quotes-article__left.png" alt="">
		</div>

		<div class="blog-details-footer__text">

			Uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by
			accident,
			sometimes on purpose (injected humour and the like).

		</div>

		<div class="blog-details-footer__quotes quotes-right">
			<img src="@img/quotes-article__right.png" alt="">
		</div>

	</footer> -->


</article>