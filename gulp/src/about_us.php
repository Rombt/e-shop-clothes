<?php
/* Template Name: About us */
?>


<?php get_header(); ?>
<?php get_template_part( 'template-parts/parts/head_pages' ); ?>


<!-- @@if(isProd == false){ @@include('html/debug-grid.html',{})} -->

<main>
	<section class="conteiner history-blok">
		<div class="history-blok__row">
			<div class="history-blok__title">
				<h2>
					<?php echo class_exists( 'ReduxFramework' ) ? esc_html( $restaurant_site_options['about_us_title'] ) : ""; ?>
				</h2>
			</div>
			<div class="history-blok__text">
				<?php echo class_exists( 'ReduxFramework' ) ? wp_kses( $restaurant_site_options['about_us_subtitle'], 'post' ) : ""; ?>
			</div>
			<div class="video-blok-history">
				<?php if ( class_exists( 'ReduxFramework' ) && $restaurant_site_options['home_page_slogan_label']['url'] ) { ?>
					<figure class="wrap-video wrap-img">
						<?php echo wp_oembed_get( $restaurant_site_options['about_us_video'] ) ?>
					</figure>
				<?php } ?>
				<div class="video-blok-history__description">
					<?php echo class_exists( 'ReduxFramework' ) ? wp_kses( $restaurant_site_options['description-about_us_video'], 'post' ) : ""; ?>
				</div>
			</div>
		</div>
	</section>
	<div class="background background-cooks">
		<div class="wrap-img background-cooks__img">
			<img src="@img/background-cooks.jpg" alt="background cooks">
		</div>
		<section class="conteiner cooks">
			<h2 class="cooks__title"> Our Cooks </h2>
			<div class="swiper swiper-cooks">
				<!-- Slider main container -->
				<div class="swiper-wrapper">
					<!-- Additional required wrapper -->
					<div class="swiper-slide swiper-cooks__card">
						<div class="wrap-img swiper-cooks__img">
							<img src="@img/Image_270x263.jpg" alt="">
						</div>
						<span>Cheff. John cliff</span>
					</div>
					<div class="swiper-slide swiper-cooks__card">
						<div class="wrap-img swiper-cooks__img">
							<img src="@img/Image_270x263.jpg" alt="">
						</div>
						<span>Cheff. peter vasko</span>
					</div>
					<div class="swiper-slide swiper-cooks__card">
						<div class="wrap-img swiper-cooks__img">
							<img src="@img/Image_270x263.jpg" alt="">
						</div>
						<span>Cheff. Mariya thomas</span>
					</div>
					<div class="swiper-slide swiper-cooks__card">
						<div class="wrap-img swiper-cooks__img">
							<img src="@img/Image_270x263.jpg" alt="">
						</div>
						<span>Cheff. james dico</span>
					</div>
					<div class="swiper-slide swiper-cooks__card">
						<div class="wrap-img swiper-cooks__img">
							<img src="@img/Image_270x263.jpg" alt="">
						</div>
						<span>Cheff. james dico</span>
					</div>
					<div class="swiper-slide swiper-cooks__card">
						<div class="wrap-img swiper-cooks__img">
							<img src="@img/Image_270x263.jpg" alt="">
						</div>
						<span>Cheff. james dico</span>
					</div>
					<div class="swiper-slide swiper-cooks__card">
						<div class="wrap-img swiper-cooks__img">
							<img src="@img/Image_270x263.jpg" alt="">
						</div>
						<span>Cheff. james dico</span>
					</div>
				</div>
				<div class="swiper-pagination swiper-cooks__pagination"></div>
			</div>
		</section>
	</div>
</main>

<?php get_template_part( 'template-parts/parts/speciality_block', 'white' ); ?>
<?php get_template_part( 'template-parts/components/opening_hours' ); ?>

<?php get_footer(); ?>