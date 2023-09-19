<?php get_header(); ?>




<?php get_template_part( 'template-parts/parts/head_pages' ); ?>

<div class="conteiner articles-conteiner">

	<?php
	if ( class_exists( 'ReduxFramework' )
		&& $restaurant_site_options['icon-heart-active']['url']
		&& $restaurant_site_options['icon-heart-pasive']['url']
	) {
		wp_localize_script( 'restaurant_site-app', 'rstrLikeIconImg', [ 
			'rstrLikeIconImgActive' => esc_url( $restaurant_site_options['icon-heart-active']['url'] ),
			'rstrLikeIconImgPasive' => esc_url( $restaurant_site_options['icon-heart-pasive']['url'] ),
			'rstrAjaxNonceLike' => wp_create_nonce( 'rstr-ajax-nonce-like' ),
		] );
	}
	?>

	<div class="articles-page-row">
		<main class="article-row">

			<?php if ( have_posts() ) {
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/parts/article-blog' );
				endwhile;
			} else {
				//   get_template_part('partials/notfound');
			}
			?>



			<?php get_template_part( 'template-parts/components/pagination' ); ?>

		</main>

		<aside class="blog-sidebar">
    <div class="blog-sidebar__body">
        <section class="rstr-category">
            <h2>category</h2>
            <ul>
                <li>
                    <img src="img/category-icon-arrow.png" alt="arrow category">
                    <a href="#">All foods</a>
                </li>
                <li>
                    <img src="img/category-icon-arrow.png" alt="arrow category">
                    <a href="#">vegitabales</a>
                </li>
                <li>
                    <img src="img/category-icon-arrow.png" alt="arrow category">
                    <a href="#">delicious food</a>
                </li>
                <li>
                    <img src="img/category-icon-arrow.png" alt="arrow category">
                    <a href="#">Special dishes</a>
                </li>
                <li>
                    <img src="img/category-icon-arrow.png" alt="arrow category">
                    <a href="#">juices</a>
                </li>
            </ul>
        </section>
        <section class="recent-post">
            <h2>Recent Post</h2>
            <div class="recent-post-slider">
                <a href="#" class="recent-post__row">
                    <div class="wrap-img recent-post__img">
                        <img src="img/Image_70x70.jpg" alt="thimb recent post">
                    </div>
                    <div class="recent-post__body">
                        <p>08-nov-2016</p>
                        <span>Suspendisse eu dui libero malesuada</span>
                    </div>
                </a>
                <a href="#" class="recent-post__row">
                    <div class="wrap-img recent-post__img">
                        <img src="img/Image_70x70.jpg" alt="thimb recent post">
                    </div>
                    <div class="recent-post__body">
                        <p>13-nov-2016</p>
                        <span>Quisque pellentes turpis sit amet</span>
                    </div>
                </a>
                <a href="#" class="recent-post__row">
                    <div class="wrap-img recent-post__img">
                        <img src="img/Image_70x70.jpg" alt="thimb recent post">
                    </div>
                    <div class="recent-post__body">
                        <p>20-nov-2016</p>
                        <span>Suspendisse eu dui libero malesuada</span>
                    </div>
                </a>
            </div>
            <div class="pagination"></div>
        </section>
        <section class="archive-sidebar">
            <h2>Archive</h2>
            <ul>
                <li>
                    <span>january</span>
                    <span>( 15 )</span>
                </li>
                <li>
                    <span>february</span>
                    <span>( 08 )</span>
                </li>
                <li>
                    <span>march</span>
                    <span>( 09 )</span>
                </li>
                <li>
                    <span>april</span>
                    <span>( 55 )</span>
                </li>
                <li>
                    <span>may</span>
                    <span>( 36 )</span>
                </li>
            </ul>
        </section>
        <section class="tag-block">
            <h2>Tags</h2>
            <a href="#">Juce</a>
            <a href="#">vegitabales</a>
            <a href="#">Special dishes</a>
            <a href="#">lunch</a>
        </section>
        <div class="blog-touch-toggle blog-toggle-on">
            <img src="img/orang-sercle.png" class="read__cercle" alt="orang sercle">
        </div>
    </div>
</aside>
	</div>

</div>


<?php get_footer();