<?php global $restaurant_site_options; ?>

<?php
$class_article = 'article-blog';
$class_article_img = 'article-blog__img';
$class_article_body = 'article-blog__body';
$class_text = 'article-blog__text';
if ('our-clients' === get_post_type()) {
	$class_article = 'article-client';
	$class_article_img = 'article-client__img';
	$class_article_body = 'article-client__body';
	$class_text = 'article-client__text';
} ?>

<?php
$article_blog_footer = 'article-blog-footer';
if (is_single()) {
	$article_blog_footer .= ' article-blog-footer_pagination';
}
?>


<article <?php post_class($class_article) ?> id="<?php the_ID() ?>">

	<figure class="wrap-img <?php echo $class_article_img ?>">
		<?php if ('' != get_the_post_thumbnail()) : ?>
			<?php echo get_the_post_thumbnail($post->ID, 'rstr_post-img'); ?>
		<?php else : ?>
			<img class="no-thumbnail" src="<?php echo rstr_get_pic_url('no-thumbnail') ?>" alt="" ">
		<?php endif ?>
	</figure>

	<div class=" <?php echo $class_article_body ?>">
			<?php if ('our-clients' !== get_post_type()) {
				get_template_part('template-parts/components/date', 'square');
			} ?>

			<div class="<?php echo $class_text ?>">
				<h2>
					<?php the_title() ?>
				</h2>
				<?php if ('our-clients' === get_post_type()) {
					get_template_part('template-parts/components/date', 'line');
				} ?>
				<?php if (!is_single()) { ?>
					<span>
						<?php echo rstr_trim_excerpt(40) ?>
					</span>
				<?php } ?>
			</div>

			<?php if (is_single()) { ?>
				<div class="article-blog__content">
					<?php the_content(); ?>
				</div>

			<?php } ?>
			</div>

			<footer class="<?php echo $article_blog_footer ?>">

				<?php if (is_single()) {
					get_template_part('template-parts/components/pagination');
				} else {

					get_template_part(
						'template-parts/components/button',
						'orange',
						[
							'href' => get_permalink(),
							'title' => class_exists('ReduxFramework') ? esc_html($restaurant_site_options['article-blog_button-title']) : "",
						]
					);
				} ?>

				<?php
				get_template_part('template-parts/components/article_icons_block')
				?>


			</footer>
</article>


<?php





if (is_single()) {
	if (comments_open() || get_comments_number()) :
		comments_template();
	endif;
}


?>