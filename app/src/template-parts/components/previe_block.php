<div class="conteiner previe-block">
	<div class="breadcrumbs-conteiner">
		<div class="breadcrumbs-conteiner__row">

			<?php if (is_woocommerce()) : ?>
				<?php woocommerce_breadcrumb(); ?>
			<?php else : ?>
				<?php echo rstr_get_breadcrumbs(); ?>
			<?php endif ?>

		</div>


	</div>
	<?php get_template_part('template-parts/components/select_vie_block', 'recipes_page'); ?>
</div>