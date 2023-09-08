<article <?php post_class( 'article-blog' ) ?> id="<?php the_ID() ?>">
	<figure class="wrap-img article-blog__img">
		<!-- <img src="@img/articles-img.jpg" alt=""> -->
		<?php echo get_the_post_thumbnail( $post->ID, 'post-img' ); ?>

	</figure>
	<div class="article-blog__body">
		<div class="square-date">
			<p>@@day</p>
			<p>@@month</p>
		</div>
		<div class="article-blog__text">
			<h2>
				<?php the_title() ?>
			</h2>
			<span>
				<?php the_content() ?>



			</span>
		</div>
	</div>

	<footer class="article-blog-footer" @@article-blog-footer-display>
		<!-- @@include('button-orange.html',{'mod':'','title':'read more', 'href':'blog-details.html'}) -->

		<!-- @@include('article-icons-block.html',{'likes-amounth':'65'}) -->
	</footer>


	<footer class="blog-details-footer" @@blog-details-footer-display>
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

	</footer>


</article>