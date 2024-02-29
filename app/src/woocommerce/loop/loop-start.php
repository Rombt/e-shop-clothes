<?php

/**
 * Product Loop Start
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-start.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woo.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.3.0
 */

if (!defined('ABSPATH')) {
	exit;
}
?>
<div class="shop-listing__title-row">
	<h2>Our Products</h2>
	<?php woocommerce_catalog_ordering(); ?>

	<div class="showing-block"> <?php woocommerce_result_count(); ?> </div>
</div>

<ul class="products columns-<?php echo esc_attr(wc_get_loop_prop('columns')); ?>">