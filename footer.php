<div class="background background__footer">
	<?php global $restaurant_site_options; ?>
	<div class="footer conteiner">
		<section class="footer__row">
			<div class="footer__navigation">
				<?php echo $restaurant_site_options['title_one'] ? '<h2>' . esc_html($restaurant_site_options['title_one']) . '</h2>' : '' ?>
				<?php wp_nav_menu(
					array(
						'theme_location' => 'footer_nav',
						'container' => false,
					)
				); ?>
			</div>
			<div class="footer__news">
				<?php echo $restaurant_site_options['title_two'] ? '<h2>' . esc_html($restaurant_site_options['title_two']) . '</h2>' : '' ?>
				<span>Enter your email address and subscribe daily newsletter</span>
				<div class="form-footer">
					<div class="form-footer__input">
						<img src="img/form-icon_email.png" alt="">
						<p>Email Address</p>
						<input type="email">
					</div>
					<a href="#" class="button-orange ">Subscribe</a>
				</div>
				<?php get_template_part( 'template-parts/components/icons-block'); ?>
			</div>
			<div class="footer__app">
				<?php echo $restaurant_site_options['title_three'] ? '<h2>' . esc_html($restaurant_site_options['title_three']) . '</h2>' : '' ?>
				<a href="#" class="button-app">
   <img src="img/icon_apple.png" alt="">
   <p>
      <span>Avilable&nbspon&nbspthe</span>
      App&nbspStore
   </p>
</a>
				<a href="#" class="button-app">
   <img src="img/icon_google-play.png" alt="">
   <p>
      <span>Get&nbspit&nbspon</span>
      Google&nbspPlay
   </p>
</a>
			</div>
		</section>
	</div>
	<div class="copyright-block">
		<span></span>
		<?php echo $restaurant_site_options['copyright'] ? '<p>' . wp_kses_post($restaurant_site_options['copyright']) . '</p>' : '<p>' . esc_html_e('2016 © Luxury RestaurAnt, All rights reserved') . '</p>' ?>
		<span></span>
	</div>
</div>



<?php wp_footer(); ?>
</body>

</html>