<?php
/* Template Name: Contact */
?>


<?php get_header(); ?>
<?php get_template_part( 'template-parts/parts/head_pages' ); ?>

<body>
	<div class="background background-contact-us">
		<div class="wrap-img">
			<?php if ( class_exists( 'ReduxFramework' ) && $restaurant_site_options['contact_img']['url'] ) { ?>
				<img src="<?php echo esc_url( $restaurant_site_options['contact_img']['url'] ) ?>" alt="contact_img">
			<?php } ?>
		</div>
		<div class="conteiner">
			<div class="contact-us">
				<div class="contact-us__touch">
					<h2>Get in touch</h2>
					<form action="#" class="contact-us__form form">
						<div class="form__input">
							<svg>
								<use
									xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#user_name">
								</use>
							</svg>
							<p>Name*</p>
							<input type="text">
						</div>
						<div class="form__input">
							<svg>
								<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#email">
								</use>
							</svg>
							<p>Email*</p>
							<input type="text">
						</div>
						<div class="form__input">
							<svg>
								<use
									xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#messages">
								</use>
							</svg>
							<p>Message*</p>
							<textarea name="mesage" id="mesage"></textarea>
						</div>
					</form>
					<?php get_template_part( 'template-parts/components/button', 'orange', [ 
						'href' => ( class_exists( 'ReduxFramework' ) ? esc_html__( $restaurant_site_options['button_href_contact-page'] ) : "" ),
						'title' => ( class_exists( 'ReduxFramework' ) ? esc_html__( $restaurant_site_options['button_title_contact-page'] ) : "" ),
					] );
					?>
				</div>
				<div class="contact-us__address">
					<h2>
						<?php echo class_exists( 'ReduxFramework' ) ? esc_html( $restaurant_site_options['our-address_title'] ) : "" ?>
					</h2>
					<div>
						<h3>
							<?php echo class_exists( 'ReduxFramework' ) ? __( $restaurant_site_options['our-address'] ) : "" ?>
						</h3>
					</div>
					<div>
						<h3>Phone</h3>
						<a
							href="tel:<?php echo class_exists( 'ReduxFramework' ) ? preg_replace( '![^0-9]+!', '', $restaurant_site_options['our-phone'] ) : "" // delete spaces?>">
							<?php echo class_exists( 'ReduxFramework' ) ? preg_replace( '![^0-9\s]+!', '', $restaurant_site_options['our-phone'] ) : "" ?>
						</a>
					</div>
					<div>
						<h3> Email</h3>
						<!-- info@luxuryrestaurent.com -->
						<?php echo class_exists( 'ReduxFramework' ) ? esc_html( $restaurant_site_options['our-email'] ) : "" ?>
					</div>
					<div>
						<h3>Follow us</h3>
						<?php get_template_part( 'template-parts/components/icons_block' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>






	<?php get_footer(); ?>