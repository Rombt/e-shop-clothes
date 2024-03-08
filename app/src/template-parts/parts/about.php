<div class="conteiner about">
	<?php global $restaurant_site_options; ?>

	<nav class="about-menu">
		<div class="read">
			<?php if (class_exists('ReduxFramework') && $restaurant_site_options['read_revie_button']['url']) { ?>
				<a href="#">
					<img class='read__cercle' src="<?php echo rstr_get_pic_url('read_revie_button') ?>" alt="">
				</a>
			<?php } ?>

			<div>
				<?php class_exists('ReduxFramework') ? _e($restaurant_site_options['read_revie_text']) : '' ?>
			</div>
			<img class='read__icon' src="<?php echo rstr_get_pic_url('read_revie_icon') ?>" alt="">
		</div>
		<div class="vertical-border"></div>
		<?php if (class_exists('ReduxFramework') && $restaurant_site_options['phone-numbers_home-delivery']) { ?>
			<a href="tel: <?php class_exists('ReduxFramework') ? esc_html_e($restaurant_site_options['phone-numbers_home-delivery']) : "" ?> " class="about-call-us">
				<img class='read__cercle' src="<?php echo rstr_get_pic_url('home_delivery_icon') ?>" alt="">

				<div class="about-call-us__text">
					<?php class_exists('ReduxFramework') ? _e($restaurant_site_options['home_delivery_text']) : '' ?>
				</div>
				<div class="vertical-border-short"></div>
				<div class="phone-number">
					<?php class_exists('ReduxFramework') ? esc_html_e($restaurant_site_options['phone-numbers_home-delivery']) : ''; ?>
				</div>
			</a>
		<?php } ?>



	</nav>
	<section class="about-row">
		<div class="about-row__text">
			<h2>
				<?php class_exists('ReduxFramework') ? esc_html_e($restaurant_site_options['about_section_title']) : ''; ?>
			</h2>
			<p>
				<?php echo rstr_trim_excerpt(50, class_exists('ReduxFramework') ? esc_html__($restaurant_site_options['about_section_text']) : ''); ?>
			</p>
			<div class="about-row__text-buttons">
				<?php if (class_exists('ReduxFramework') && ($restaurant_site_options['about_section_button_title'] || $restaurant_site_options['about_section_button_href'])) {
					$about_section_button_title = $restaurant_site_options['about_section_button_title'];
					$about_section_button_href = $restaurant_site_options['about_section_button_href'];
				} else {
					$about_section_button_title = '';
					$about_section_button_href = get_permalink();
				} ?>
				<?php get_template_part('template-parts/components/button', 'orange', ['href' => $about_section_button_href, 'title' => $about_section_button_title]); ?>
			</div>
		</div>
		<div class="about-row__img">
			<div class="wrap-img about-row__wrap-img">
				<img src="<?php echo rstr_get_pic_url('about_section_img_1') ?>" alt="about section img">
			</div>
			<div class="wrap-img about-row__wrap-img">
				<img src="<?php echo rstr_get_pic_url('about_section_img_2') ?>" alt="about section img">
			</div>
			<div class="wrap-img about-row__wrap-img">
				<img src="<?php echo rstr_get_pic_url('about_section_img_3') ?>" alt="about section img">
			</div>
			<div class="wrap-img about-row__wrap-img">
				<img src="<?php echo rstr_get_pic_url('about_section_img_4') ?>" alt="about section img">
			</div>
		</div>
	</section>
</div>