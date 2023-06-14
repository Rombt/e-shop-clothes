<?php
/* Template Name: Menu page grid */
?>


<?php get_header(); ?>

<main class="conteiner menu-page-conteiner">

   <?php get_template_part( 'template-parts/components/food_menu', null, ['title' => esc_html( $restaurant_site_options['menu_title'])]); ?>   

   <div class="menu-page-conteiner__row">

      @@include('html/parts/prod-card__grid.html',{
      'title':'jumbo carb thanroor',
      'img_src':'@img/prod-card-img.jpg',
      'description':'survived not only five centuries but the leap',
      'price':'50.00',
      })


      @@include('html/parts/prod-card__grid.html',{
      'title':'jumbo carb thanroor',
      'img_src':'@img/prod-card-img.jpg',
      'description':'survived not only five centuries but the leap',
      'price':'50.00',
      })

      @@include('html/parts/prod-card__grid.html',{
      'title':'jumbo carb thanroor',
      'img_src':'@img/prod-card-img.jpg',
      'description':'survived not only five centuries but the leap',
      'price':'50.00',
      })

      @@include('html/parts/prod-card__grid.html',{
      'title':'jumbo carb thanroor',
      'img_src':'@img/prod-card-img.jpg',
      'description':'survived not only five centuries but the leap',
      'price':'50.00',
      })

      @@include('html/parts/prod-card__grid.html',{
      'title':'jumbo carb thanroor',
      'img_src':'@img/prod-card-img.jpg',
      'description':'survived not only five centuries but the leap',
      'price':'50.00',
      })

      @@include('html/parts/prod-card__grid.html',{
      'title':'jumbo carb thanroor',
      'img_src':'@img/prod-card-img.jpg',
      'description':'survived not only five centuries but the leap',
      'price':'50.00',
      })

      @@include('html/parts/prod-card__grid.html',{
      'title':'jumbo carb thanroor',
      'img_src':'@img/prod-card-img.jpg',
      'description':'survived not only five centuries but the leap',
      'price':'50.00',
      })

      @@include('html/parts/prod-card__grid.html',{
      'title':'jumbo carb thanroor',
      'img_src':'@img/prod-card-img.jpg',
      'description':'survived not only five centuries but the leap',
      'price':'50.00',
      })

      @@include('html/parts/prod-card__grid.html',{
      'title':'jumbo carb thanroor',
      'img_src':'@img/prod-card-img.jpg',
      'description':'survived not only five centuries but the leap',
      'price':'50.00',
      })


      <?php get_template_part( 'template-parts/components/button', 'orange', [
         'href'=> esc_html( $restaurant_site_options['button_href']),
         'title'=>esc_html( $restaurant_site_options['button_title']),
         ]); ?>
   </div>

</main>

<?php get_template_part( 'template-parts/parts/speciality_block'); ?>
<?php get_template_part( 'template-parts/components/opening_hours'); ?>

<?php get_footer();?>