<?php get_header(); ?>



<!-- @@if(isProd == false){ @@include('html/debug-grid.html',{})} -->


<main>
    @@include('html/dish.html',{})
    <?php get_template_part( 'template-parts/parts/about'); ?>
    @@include('html/today.html',{})
    @@include('html/restaurant-menu.html',{})
    @@include('html/clients.html',{})
    @@include('html/reserve.html',{})
</main>


<?php get_footer();
