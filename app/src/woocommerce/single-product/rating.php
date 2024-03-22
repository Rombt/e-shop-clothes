<?php

/**
 * Single Product Rating
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/rating.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

global $product;

if (!wc_review_ratings_enabled()) {
	return;
}

$rating_count = $product->get_rating_count();
$review_count = $product->get_review_count();
$average      = $product->get_average_rating();

if ($rating_count > 0) : ?>

	<div class="rating-block">
		<div class="woocommerce-product-rating">
			<?php echo $rating_count; ?>
			<svg>
				<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#star_2">
				</use>
			</svg>
		</div>
		<a href="#reviews" class="woocommerce-review-link" rel="nofollow">(<?php printf(_n('%s customer review', '%s customer reviews', $review_count, 'woocommerce'), '<span class="count">' . esc_html($review_count) . '</span>'); ?>)</a>
	</div>

<?php endif; ?>