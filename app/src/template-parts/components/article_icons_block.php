<?php global $restaurant_site_options; ?>

<div class="article-icons-block">
	<div class="article-icons-block__likes">


		<?php if ( class_exists( 'ReduxFramework' ) && $restaurant_site_options['icon-heart-pasive']['url'] ) { ?>
			<div class="wrap-img like-img" data-post_id="<?php echo esc_attr( the_ID() ) ?>">
				<img class="" src="<?php echo esc_url( $restaurant_site_options['icon-heart-pasive']['url'] ) ?>" alt="">
			</div>
		<?php } ?>


		<div class="article-icons-block__likes-amounth">
			<?php

			if ( get_post_meta( $post->ID, 'desired_quantity_likes', true ) ) {
				$qautity_likes = esc_html( get_post_meta( $post->ID, 'desired_quantity_likes', true ) );
			} else {
				if ( get_post_meta( $post->ID, 'quantity_likes', true ) ) {
					$qautity_likes = esc_html( get_post_meta( $post->ID, 'quantity_likes', true ) );
				} else {
					$qautity_likes = 0;
				}
			}
			?>
			<p>
				<?php echo $qautity_likes; ?>
			</p>
		</div>
	</div>
	<div class="article-icons-block__icons">
		<!-- // todo куда должна вести ссылка?? share-link -->
		<a
			href="<?php class_exists( 'ReduxFramework' ) ? esc_url( $restaurant_site_options['article-blog_share-link'] ) : "#" ?>">
			<?php if ( class_exists( 'ReduxFramework' ) && $restaurant_site_options['article-icons_share_icon']['url'] ) { ?>
				<img src="<?php echo esc_url( $restaurant_site_options['article-icons_share_icon']['url'] ) ?>" alt="">
			<?php } ?>
		</a>

		<a
			href="<?php echo class_exists( 'ReduxFramework' ) ? esc_url( $restaurant_site_options['article-blog_facebook-link'] . get_permalink() ) : "#" ?>">

			<?php if ( class_exists( 'ReduxFramework' ) && $restaurant_site_options['article-blog_facebook_icon']['url'] ) { ?>
				<img src=" <?php echo esc_url( $restaurant_site_options['article-blog_facebook_icon']['url'] ) ?>" alt="">
			<?php } ?>
		</a>
		<a
			href="<?php class_exists( 'ReduxFramework' ) ? esc_url( $restaurant_site_options['article-blog_instagram-link'] ) : "#" ?> ">
			<?php if ( class_exists( 'ReduxFramework' ) && $restaurant_site_options['article-blog_instagram_icon']['url'] ) { ?>
				<img src=" <?php echo esc_url( $restaurant_site_options['article-blog_instagram_icon']['url'] ) ?>" alt="">
			<?php } ?>

		</a>
		<a
			href="<?php echo class_exists( 'ReduxFramework' ) ? esc_url( $restaurant_site_options['article-blog_twitt-link'] . get_permalink() ) : "#" ?>">
			<?php if ( class_exists( 'ReduxFramework' ) && $restaurant_site_options['article-blog_twitt_icon']['url'] ) { ?>
				<img src="<?php echo esc_url( $restaurant_site_options['article-blog_twitt_icon']['url'] ) ?>" alt="">
			<?php } ?>

		</a>
	</div>
</div>