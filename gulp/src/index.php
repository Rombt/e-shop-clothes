<?php get_header(); ?>



<!-- @@if(isProd == false){ @@include('html/debug-grid.html',{})} -->


<main>
    <?php get_template_part( 'template-parts/parts/dish'); ?>
    <?php get_template_part( 'template-parts/parts/about'); ?>
    <?php get_template_part( 'template-parts/parts/today'); ?>
    @@include('html/today.html',{})
    @@include('html/restaurant-menu.html',{})
    @@include('html/clients.html',{})
    @@include('html/reserve.html',{})
</main>


<?php get_footer();
