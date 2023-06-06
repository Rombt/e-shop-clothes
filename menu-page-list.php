<?php
/* Template Name: Menu page list */
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

      <a href="#" class="button-orange ">Explor food menu</a>
   </div>

</main>

<?php get_template_part( 'template-parts/parts/speciality-block'); ?>

<section class="conteiner opening-hours-conteiner">

   <div class="opening-hours-conteiner__row">
      <div class="opening-hours-conteiner__title">
         <h2>Opening Hours</h2>
      </div>

      <p>
         Monday to Friday
         <span>10am - 10pm</span>
      </p>
      <p>
         Saturday to Sunday
         <span>09am - 11pm</span>
      </p>
      <div class="wrap-img opening-hours-conteiner__wrap-img">
         <img src="img/Image_210x210.jpg" alt="">
      </div>
   </div>

</section>

<?php get_footer();?>