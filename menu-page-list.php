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
               <picture><source srcset="img/icon_all.webp" type="image/webp"><img src="img/icon_all.png" alt=""></picture>
               <a class="food-menu__link" href="#">All</a>
               <ul class="food-menu__sub-menu-list">
                  <li class="food-menu__sub-item"><a class="food-menu__sub-link" href="#">sub menu item</a></li>
               </ul>
            </li>
            <li class="food-menu__item">
               <picture><source srcset="img/icon_breakfast.webp" type="image/webp"><img src="img/icon_breakfast.png" alt=""></picture>
               <a class="food-menu__link" href="#">Breakfast</a>
               <ul class="food-menu__sub-menu-list">
                  <li class="food-menu__sub-item"><a class="food-menu__sub-link" href="#">sub menu item</a></li>
                  <li class="food-menu__sub-item"><a class="food-menu__sub-link" href="#">sub menu item</a></li>
                  <li class="food-menu__sub-item"><a class="food-menu__sub-link" href="#">sub menu item</a></li>
               </ul>
            </li>
            <li class="food-menu__item">
               <picture><source srcset="img/icon_lunch.webp" type="image/webp"><img src="img/icon_lunch.png" alt=""></picture>
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
               <picture><source srcset="img/icon_snacks.webp" type="image/webp"><img src="img/icon_snacks.png" alt=""></picture>
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
               <picture><source srcset="img/icon_pizza.webp" type="image/webp"><img src="img/icon_pizza.png" alt=""></picture>
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
               <picture><source srcset="img/icon_soups.webp" type="image/webp"><img src="img/icon_soups.png" alt=""></picture>
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
               <picture><source srcset="img/icon_binner.webp" type="image/webp"><img src="img/icon_binner.png" alt=""></picture>
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

<section class="background speciality-block">
   <figure class="wrap-img speciality-block__img"><picture><source srcset="img/speciality-block.webp" type="image/webp"><img src="img/speciality-block.jpg" alt=""></picture></figure>
   <div class="speciality-block__text-wrap ">
      <h2>Speciality</h2>
      <div class="speciality-block__text">
         <h3>EXCELLENT SERVICE</h3>
         <p>Survived not only five centuries, but also the leap into electr</p>
      </div>
      <div class="speciality-block__text">
         <h3>FREE Home DELIVERY</h3>
         <p>Lorem Ipsum is simply dummy text of the printing and typesettin</p>
      </div>
      <div class="speciality-block__text">
         <h3>Cool atmosphere</h3>
         <p>Letraset sheets containing Lorem Ipsum passages, and more recen</p>
      </div>
   </div>
</section>
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
         <picture><source srcset="img/Image_210x210.webp" type="image/webp"><img src="img/Image_210x210.jpg" alt=""></picture>
      </div>
   </div>

</section>
<div class="background background__footer">
   <div class="footer conteiner">
      <section class="footer__row">
         <div class="footer__navigation">
            <h2>Navigation</h2>
            <ul>
               <li><a href="#">Home</a></li>
               <li><a href="#">About us</a></li>
               <li><a href="#">Menu</a></li>
               <li><a href="#">Reservation</a></li>
               <li><a href="#">Recipe</a></li>
               <li><a href="#">Blog</a></li>
               <li><a href="#">Contact Us</a></li>
            </ul>
         </div>
         <div class="footer__news">
            <h2>News letter</h2>
            <span>Enter your email address and subscribe daily newsletter</span>
            <div class="form-footer">
               <div class="form-footer__input">
                  <picture><source srcset="img/form-icon_email.webp" type="image/webp"><img src="img/form-icon_email.png" alt=""></picture>
                  <p>Email Address</p>
                  <input type="email">
               </div>
               <a href="#" class="button-orange ">Subscribe</a>
            </div>
            <div class="icons-block">
   <?php if ($restaurant_site_options['social_networks_fb-link']){ ?>
   <a href="<?php echo esc_url($restaurant_site_options['social_networks_fb-link']) ?>">
      <?php if ($restaurant_site_options['fb-link_icon']['url']){ ?>
      <img src="<?php echo esc_url($restaurant_site_options['fb-link_icon']['url']) ?>" alt="icon_facebook">
      <?php }?>
   </a>
   <?php }?>

   <?php if ($restaurant_site_options['social_networks_instagram-link']){ ?>
   <a href="<?php echo esc_url($restaurant_site_options['social_networks_instagram-link']) ?>">
      <?php if ($restaurant_site_options['social_networks_twitt_icon']['url']){ ?>
      <img src="<?php echo esc_url($restaurant_site_options['social_networks_twitt_icon']['url']) ?>"
         alt="icon_twitter">
      <?php }?>
   </a>
   <?php }?>

   <?php if ($restaurant_site_options['social_networks_twitt-link']){ ?>
   <a href="<?php echo esc_url($restaurant_site_options['social_networks_instagram-link']) ?>">
      <?php if ($restaurant_site_options['social_networks_instagram_icon']['url']){ ?>
      <img src="<?php echo esc_url($restaurant_site_options['social_networks_instagram_icon']['url']) ?>"
         alt="icon_instagram">
      <?php }?>
   </a>
   <?php }?>




</div>
         </div>
         <div class="footer__app">
            <h2>Our app avilable</h2>
            <a href="#" class="button-app">
   <picture><source srcset="img/icon_apple.webp" type="image/webp"><img src="img/icon_apple.png" alt=""></picture>
   <p>
      <span>Avilable&nbspon&nbspthe</span>
      App&nbspStore
   </p>
</a>
            <a href="#" class="button-app">
   <picture><source srcset="img/icon_google-play.webp" type="image/webp"><img src="img/icon_google-play.png" alt=""></picture>
   <p>
      <span>Get&nbspit&nbspon</span>
      Google&nbspPlay
   </p>
</a>
         </div>
      </section>
   </div>
   <div class="copyright-block">
      <span></span>
      <p>2016 © Luxury RestaurAnt, All rights reserved</p>
      <span></span>
   </div>
</div>



<?php get_footer(); ?>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js?_v=20230510123753"></script>
<script src="js/app.min.js?_v=20230510123753"></script>
</body>

</html>