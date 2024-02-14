<?php

if (!is_active_sidebar('rstr_blog_sidebar')) {
	return;
}



?>





<aside class="blog-sidebar" data-da=".theme-restaurant-site, 767, first">

	<div class="blog-touch-toggle">
		<img src="<?php echo get_template_directory_uri() ?>/assets/img/orang-sercle.png" class="read__cercle" alt="orang sercle">
	</div>
	<div class="blog-sidebar__body">
		<?php dynamic_sidebar('rstr_blog_sidebar') ?>
	</div>

</aside>