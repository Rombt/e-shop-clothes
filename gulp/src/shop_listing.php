<?php
/* Template Name: Shop listing */
?>


<?php get_header(); ?>


<!-- @@if(isProd == false){ @@include('html/debug-grid.html',{})} -->



<div class="conteiner shop-listing-conteiner">
   <div class="shop-listing-row">
      @@include('html/parts/shop-sidebar.html',{})
      <main class="shop-listing">
         <div class="shop-listing__title-row">
            <h2>Our Products</h2>
            <select class="default-sourting">
               <option value="option_1">option_1</option>
               <option selected value="option_2">option_2</option>
               <option value="option_3">option_3</option>
               <option value="option_4">option_4</option>
            </select>
            <div class="display-mode">
               <a href="#" class="wrap-img display-mode__blocks"><img src="@img/grid-view.png" alt="display mode grid view">
               </a>
               <a href="#" class="wrap-img display-mode__blocks"><img src="@img/list-view.png" alt="display mode list view">
               </a>
            </div>
            <div class="showing-block"> Showing 9 of 68 products </div>
         </div>

         @@include('html/parts/prod-card-from-shop.html',{})
         @@include('html/parts/prod-card-from-shop.html',{})
         @@include('html/parts/prod-card-from-shop.html',{})
         @@include('html/parts/prod-card-from-shop.html',{})
         @@include('html/parts/prod-card-from-shop.html',{})
         @@include('html/parts/prod-card-from-shop.html',{})
         @@include('html/parts/prod-card-from-shop.html',{})
         @@include('html/parts/prod-card-from-shop.html',{})
         @@include('html/parts/prod-card-from-shop.html',{})

         @@include('html/parts/pagination.html',{})
      </main>
   </div>
</div>



<?php get_footer();?>