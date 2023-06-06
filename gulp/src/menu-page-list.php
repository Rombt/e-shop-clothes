<?php
/* Template Name: Menu page list */
?>


<?php get_header(); ?>


<!-- @@if(isProd == false){ @@include('html/debug-grid.html',{})} -->



<main class="conteiner menu-page-conteiner">

   @@include('html/parts/food-menu.html',{'title':'Menu Grid View'})

   <div class="menu-page-conteiner__row">

      @@include('html/parts/prod-card__list.html',{
      'title':'jumbo carb thanroor',
      'img_src':'@img/prod-card-img.jpg',
      'description':'survived not only five centuries but the leap',
      'price':'50.00',
      })
      @@include('html/parts/prod-card__list.html',{
      'title':'jumbo carb thanroor',
      'img_src':'@img/prod-card-img.jpg',
      'description':'survived not only five centuries but the leap',
      'price':'50.00',
      })
      @@include('html/parts/prod-card__list.html',{
      'title':'jumbo carb thanroor',
      'img_src':'@img/prod-card-img.jpg',
      'description':'survived not only five centuries but the leap',
      'price':'50.00',
      })
      @@include('html/parts/prod-card__list.html',{
      'title':'jumbo carb thanroor',
      'img_src':'@img/prod-card-img.jpg',
      'description':'survived not only five centuries but the leap',
      'price':'50.00',
      })
      @@include('html/parts/prod-card__list.html',{
      'title':'jumbo carb thanroor',
      'img_src':'@img/prod-card-img.jpg',
      'description':'survived not only five centuries but the leap',
      'price':'50.00',
      })
      @@include('html/parts/prod-card__list.html',{
      'title':'jumbo carb thanroor',
      'img_src':'@img/prod-card-img.jpg',
      'description':'survived not only five centuries but the leap',
      'price':'50.00',
      })
      @@include('html/parts/prod-card__list.html',{
      'title':'jumbo carb thanroor',
      'img_src':'@img/prod-card-img.jpg',
      'description':'survived not only five centuries but the leap',
      'price':'50.00',
      })
      @@include('html/parts/prod-card__list.html',{
      'title':'jumbo carb thanroor',
      'img_src':'@img/prod-card-img.jpg',
      'description':'survived not only five centuries but the leap',
      'price':'50.00',
      })
      @@include('html/parts/prod-card__list.html',{
      'title':'jumbo carb thanroor',
      'img_src':'@img/prod-card-img.jpg',
      'description':'survived not only five centuries but the leap',
      'price':'50.00',
      })
      @@include('html/parts/prod-card__list.html',{
      'title':'jumbo carb thanroor',
      'img_src':'@img/prod-card-img.jpg',
      'description':'survived not only five centuries but the leap',
      'price':'50.00',
      })
      @@include('html/parts/prod-card__list.html',{
      'title':'jumbo carb thanroor',
      'img_src':'@img/prod-card-img.jpg',
      'description':'survived not only five centuries but the leap',
      'price':'50.00',
      })
      @@include('html/parts/prod-card__list.html',{
      'title':'jumbo carb thanroor',
      'img_src':'@img/prod-card-img.jpg',
      'description':'survived not only five centuries but the leap',
      'price':'50.00',
      })

      @@include('html/parts/button-orange.html',{'mod':'','title':'Explor food menu', 'href':'#'})
   </div>

</main>

<?php get_template_part( 'template-parts/parts/speciality-block'); ?>

@@include('html/parts/opening-hours.html',{})

<?php get_footer();?>