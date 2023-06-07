<?php
/* Template Name: Menu page list */
?>


<?php get_header(); ?>






<main class="conteiner menu-page-conteiner">

 <?php get_template_part( 'template-parts/components/food-menu', null, ['title' => esc_html( $restaurant_site_options['menu_title'])]); ?>   

   <div class="menu-page-conteiner__row">

      <div class="prod-card-list">
   <div class="prod-card-list__body">
      <a href="#">
         <h3>jumbo carb thanroor</h3>
         <p>survived not only five centuries but the leap</p>
      </a>
   </div>
   <div class="prod-card-list__footer">
      <p>
         <span>$</span>50.00
      </p>
   </div>
</div>
      <div class="prod-card-list">
   <div class="prod-card-list__body">
      <a href="#">
         <h3>jumbo carb thanroor</h3>
         <p>survived not only five centuries but the leap</p>
      </a>
   </div>
   <div class="prod-card-list__footer">
      <p>
         <span>$</span>50.00
      </p>
   </div>
</div>
      <div class="prod-card-list">
   <div class="prod-card-list__body">
      <a href="#">
         <h3>jumbo carb thanroor</h3>
         <p>survived not only five centuries but the leap</p>
      </a>
   </div>
   <div class="prod-card-list__footer">
      <p>
         <span>$</span>50.00
      </p>
   </div>
</div>
      <div class="prod-card-list">
   <div class="prod-card-list__body">
      <a href="#">
         <h3>jumbo carb thanroor</h3>
         <p>survived not only five centuries but the leap</p>
      </a>
   </div>
   <div class="prod-card-list__footer">
      <p>
         <span>$</span>50.00
      </p>
   </div>
</div>
      <div class="prod-card-list">
   <div class="prod-card-list__body">
      <a href="#">
         <h3>jumbo carb thanroor</h3>
         <p>survived not only five centuries but the leap</p>
      </a>
   </div>
   <div class="prod-card-list__footer">
      <p>
         <span>$</span>50.00
      </p>
   </div>
</div>
      <div class="prod-card-list">
   <div class="prod-card-list__body">
      <a href="#">
         <h3>jumbo carb thanroor</h3>
         <p>survived not only five centuries but the leap</p>
      </a>
   </div>
   <div class="prod-card-list__footer">
      <p>
         <span>$</span>50.00
      </p>
   </div>
</div>
      <div class="prod-card-list">
   <div class="prod-card-list__body">
      <a href="#">
         <h3>jumbo carb thanroor</h3>
         <p>survived not only five centuries but the leap</p>
      </a>
   </div>
   <div class="prod-card-list__footer">
      <p>
         <span>$</span>50.00
      </p>
   </div>
</div>
      <div class="prod-card-list">
   <div class="prod-card-list__body">
      <a href="#">
         <h3>jumbo carb thanroor</h3>
         <p>survived not only five centuries but the leap</p>
      </a>
   </div>
   <div class="prod-card-list__footer">
      <p>
         <span>$</span>50.00
      </p>
   </div>
</div>
      <div class="prod-card-list">
   <div class="prod-card-list__body">
      <a href="#">
         <h3>jumbo carb thanroor</h3>
         <p>survived not only five centuries but the leap</p>
      </a>
   </div>
   <div class="prod-card-list__footer">
      <p>
         <span>$</span>50.00
      </p>
   </div>
</div>
      <div class="prod-card-list">
   <div class="prod-card-list__body">
      <a href="#">
         <h3>jumbo carb thanroor</h3>
         <p>survived not only five centuries but the leap</p>
      </a>
   </div>
   <div class="prod-card-list__footer">
      <p>
         <span>$</span>50.00
      </p>
   </div>
</div>
      <div class="prod-card-list">
   <div class="prod-card-list__body">
      <a href="#">
         <h3>jumbo carb thanroor</h3>
         <p>survived not only five centuries but the leap</p>
      </a>
   </div>
   <div class="prod-card-list__footer">
      <p>
         <span>$</span>50.00
      </p>
   </div>
</div>
      <div class="prod-card-list">
   <div class="prod-card-list__body">
      <a href="#">
         <h3>jumbo carb thanroor</h3>
         <p>survived not only five centuries but the leap</p>
      </a>
   </div>
   <div class="prod-card-list__footer">
      <p>
         <span>$</span>50.00
      </p>
   </div>
</div>

         <?php get_template_part( 'template-parts/components/button', 'orange', [
            'href'=> esc_html( $restaurant_site_options['button_href']),
            'title'=>esc_html( $restaurant_site_options['button_title']),
         ]); ?>
   </div>

</main>

<?php get_template_part( 'template-parts/parts/speciality-block'); ?>
<?php get_template_part( 'template-parts/components/opening_hours'); ?>

<?php get_footer();?>