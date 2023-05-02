<?php get_header(); ?>



<!-- @@if(isProd == false){ @@include('html/debug-grid.html',{})} -->


<main>
    @@include('html/dish.html',{})
    @@include('html/about.html',{})
    @@include('html/today.html',{})
    @@include('html/restaurant-menu.html',{})
    @@include('html/clients.html',{})
    @@include('html/reserve.html',{})
</main>

@@include('html/footer.html',{})


<!-- <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="js/app.min.js"></script> -->