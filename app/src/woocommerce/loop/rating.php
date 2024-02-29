<?php

/**
 * Loop Rating
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/rating.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

if (!defined('ABSPATH')) {
	exit;
}

global $product;

if (!wc_review_ratings_enabled()) {
	return;
}

$rating = round($product->get_average_rating());
$rating_box_class = 'rating-box';
if ($rating > 2) {
	$rating_box_class .= ' rating-box_active';
}
?>

<div class="<?php echo $rating_box_class; ?>">
	<?php echo  $rating; ?>
	<svg>
		<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#star_2">
		</use>
	</svg>
</div>
<?php  ?>