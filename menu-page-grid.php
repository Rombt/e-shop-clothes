<?php
/* Template Name: Menu page grid */
?>


<?php get_header(); ?>







<main class="conteiner menu-page-conteiner">

   <div class="top-menu-wrap">
   <h2>Menu Grid View</h2>
   <div class="wrap-nenu">
      <div class="food-menu__burger burger-open">
         <span></span>
      </div>


      <?php 
      // wp_nav_menu(      // неработает добавление классов li
      //       array(
      //          'theme_location' => 'food-menu',
      //          'container' => 'nav',
      //          'container_class' => 'menu food-menu',
      //          'menu_class' => 'food-menu__list',
      //          'add_li_class'=>'food-menu__sub-item',
      //       )
      // ); 
      ?>





      <nav class="menu food-menu">
         <ul class="food-menu__list">
            <li class="food-menu__item">
               <img src="img/icon_all.png" alt="">
               <a class="food-menu__link" href="#">All</a>
               <ul class="food-menu__sub-menu-list">
                  <li class="food-menu__sub-item"><a class="food-menu__sub-link" href="#">sub menu item</a></li>
               </ul>
            </li>
            <li class="food-menu__item">
               <img src="img/icon_breakfast.png" alt="">
               <a class="food-menu__link" href="#">Breakfast</a>
               <ul class="food-menu__sub-menu-list">
                  <li class="food-menu__sub-item"><a class="food-menu__sub-link" href="#">sub menu item</a></li>
                  <li class="food-menu__sub-item"><a class="food-menu__sub-link" href="#">sub menu item</a></li>
                  <li class="food-menu__sub-item"><a class="food-menu__sub-link" href="#">sub menu item</a></li>
               </ul>
            </li>
            <li class="food-menu__item">
               <img src="img/icon_lunch.png" alt="">
               <a class="food-menu__link" href="#">Lunch</a>
               <ul class="food-menu__sub-menu-list">
                  <li class="food-menu__sub-item"><a class="food-menu__sub-link" href="#">sub menu item</a></li>
                  <li class="food-menu__sub-item"><a class="food-menu__sub-link" href="#">sub menu item</a></li>
                  <li class="food-menu__sub-item"><a class="food-menu__sub-link" href="#">sub menu item</a></li>
                  <li class="food-menu__sub-item"><a class="food-menu__sub-link" href="#">sub menu item</a></li>
                  <li class="food-menu__sub-item"><a class="food-menu__sub-link" href="#">sub menu item</a></li>
               </ul>
            </li>
            <li class="food-menu__item">
               <img src="img/icon_snacks.png" alt="">
               <a class="food-menu__link" href="#">Snacks</a>
               <ul class="food-menu__sub-menu-list">
                  <li class="food-menu__sub-item"><a class="food-menu__sub-link" href="#">sub menu item</a></li>
                  <li class="food-menu__sub-item"><a class="food-menu__sub-link" href="#">sub menu item</a></li>
                  <li class="food-menu__sub-item"><a class="food-menu__sub-link" href="#">sub menu item</a></li>
                  <li class="food-menu__sub-item"><a class="food-menu__sub-link" href="#">sub menu item</a></li>
                  <li class="food-menu__sub-item"><a class="food-menu__sub-link" href="#">sub menu item</a></li>
                  <li class="food-menu__sub-item"><a class="food-menu__sub-link" href="#">sub menu item</a></li>
               </ul>
            </li>
            <li class="food-menu__item">
               <img src="img/icon_pizza.png" alt="">
               <a class="food-menu__link" href="#">Pizza</a>
               <ul class="food-menu__sub-menu-list">
                  <li class="food-menu__sub-item"><a class="food-menu__sub-link" href="#">sub menu item</a></li>
                  <li class="food-menu__sub-item"><a class="food-menu__sub-link" href="#">sub menu item</a></li>
                  <li class="food-menu__sub-item"><a class="food-menu__sub-link" href="#">sub menu item</a></li>
                  <li class="food-menu__sub-item"><a class="food-menu__sub-link" href="#">sub menu item</a></li>
                  <li class="food-menu__sub-item"><a class="food-menu__sub-link" href="#">sub menu item</a></li>
                  <li class="food-menu__sub-item"><a class="food-menu__sub-link" href="#">sub menu item</a></li>
                  <li class="food-menu__sub-item"><a class="food-menu__sub-link" href="#">sub menu item</a></li>
                  <li class="food-menu__sub-item"><a class="food-menu__sub-link" href="#">sub menu item</a></li>
                  <li class="food-menu__sub-item"><a class="food-menu__sub-link" href="#">sub menu item</a></li>
                  <li class="food-menu__sub-item"><a class="food-menu__sub-link" href="#">sub menu item</a></li>
               </ul>
            </li>
            <li class="food-menu__item">
               <img src="img/icon_soups.png" alt="">
               <a class="food-menu__link" href="#">Soups</a>
               <ul class="food-menu__sub-menu-list">
                  <li class="food-menu__sub-item"><a class="food-menu__sub-link" href="#">sub menu item</a></li>
                  <li class="food-menu__sub-item"><a class="food-menu__sub-link" href="#">sub menu item</a></li>
                  <li class="food-menu__sub-item"><a class="food-menu__sub-link" href="#">sub menu item</a></li>
                  <li class="food-menu__sub-item"><a class="food-menu__sub-link" href="#">sub menu item</a></li>
                  <li class="food-menu__sub-item"><a class="food-menu__sub-link" href="#">sub menu item</a></li>
               </ul>
            </li>
            <li class="food-menu__item">
               <img src="img/icon_binner.png" alt="">
               <a class="food-menu__link" href="#">Dinner</a>
               <ul class="food-menu__sub-menu-list">
                  <li class="food-menu__sub-item"><a class="food-menu__sub-link" href="#">sub menu item</a></li>
                  <li class="food-menu__sub-item"><a class="food-menu__sub-link" href="#">sub menu item</a></li>
                  <li class="food-menu__sub-item"><a class="food-menu__sub-link" href="#">sub menu item</a></li>
                  <li class="food-menu__sub-item"><a class="food-menu__sub-link" href="#">sub menu item</a></li>
               </ul>
            </li>
         </ul>
      </nav>
   </div>
   <div class="wrap-nenu__border"></div>
</div>

   <div class="menu-page-conteiner__row">

      <div class="prod-card-grid">
   <figure class="wrap-img"><img src="img/prod-card-img.jpg" alt="prod card img"></figure>
   <div class="prod-card-grid__body">
      <h3>jumbo carb thanroor</h3>
      <p>survived not only five centuries but the leap</p>
   </div>
   <div class="prod-card-grid__footer">
      <span>
         <p>$</p>50.00
      </span>
   </div>
</div>


      <div class="prod-card-grid">
   <figure class="wrap-img"><img src="img/prod-card-img.jpg" alt="prod card img"></figure>
   <div class="prod-card-grid__body">
      <h3>jumbo carb thanroor</h3>
      <p>survived not only five centuries but the leap</p>
   </div>
   <div class="prod-card-grid__footer">
      <span>
         <p>$</p>50.00
      </span>
   </div>
</div>

      <div class="prod-card-grid">
   <figure class="wrap-img"><img src="img/prod-card-img.jpg" alt="prod card img"></figure>
   <div class="prod-card-grid__body">
      <h3>jumbo carb thanroor</h3>
      <p>survived not only five centuries but the leap</p>
   </div>
   <div class="prod-card-grid__footer">
      <span>
         <p>$</p>50.00
      </span>
   </div>
</div>

      <div class="prod-card-grid">
   <figure class="wrap-img"><img src="img/prod-card-img.jpg" alt="prod card img"></figure>
   <div class="prod-card-grid__body">
      <h3>jumbo carb thanroor</h3>
      <p>survived not only five centuries but the leap</p>
   </div>
   <div class="prod-card-grid__footer">
      <span>
         <p>$</p>50.00
      </span>
   </div>
</div>

      <div class="prod-card-grid">
   <figure class="wrap-img"><img src="img/prod-card-img.jpg" alt="prod card img"></figure>
   <div class="prod-card-grid__body">
      <h3>jumbo carb thanroor</h3>
      <p>survived not only five centuries but the leap</p>
   </div>
   <div class="prod-card-grid__footer">
      <span>
         <p>$</p>50.00
      </span>
   </div>
</div>

      <div class="prod-card-grid">
   <figure class="wrap-img"><img src="img/prod-card-img.jpg" alt="prod card img"></figure>
   <div class="prod-card-grid__body">
      <h3>jumbo carb thanroor</h3>
      <p>survived not only five centuries but the leap</p>
   </div>
   <div class="prod-card-grid__footer">
      <span>
         <p>$</p>50.00
      </span>
   </div>
</div>

      <div class="prod-card-grid">
   <figure class="wrap-img"><img src="img/prod-card-img.jpg" alt="prod card img"></figure>
   <div class="prod-card-grid__body">
      <h3>jumbo carb thanroor</h3>
      <p>survived not only five centuries but the leap</p>
   </div>
   <div class="prod-card-grid__footer">
      <span>
         <p>$</p>50.00
      </span>
   </div>
</div>

      <div class="prod-card-grid">
   <figure class="wrap-img"><img src="img/prod-card-img.jpg" alt="prod card img"></figure>
   <div class="prod-card-grid__body">
      <h3>jumbo carb thanroor</h3>
      <p>survived not only five centuries but the leap</p>
   </div>
   <div class="prod-card-grid__footer">
      <span>
         <p>$</p>50.00
      </span>
   </div>
</div>

      <div class="prod-card-grid">
   <figure class="wrap-img"><img src="img/prod-card-img.jpg" alt="prod card img"></figure>
   <div class="prod-card-grid__body">
      <h3>jumbo carb thanroor</h3>
      <p>survived not only five centuries but the leap</p>
   </div>
   <div class="prod-card-grid__footer">
      <span>
         <p>$</p>50.00
      </span>
   </div>
</div>



      <a href="#" class="button-orange ">Explor food menu</a>
   </div>

</main>

<?php get_template_part( 'template-parts/parts/speciality_block'); ?>
<?php get_template_part( 'template-parts/components/opening_hours'); ?>

<?php get_footer();?>