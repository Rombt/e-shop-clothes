<?php get_header(); ?>






<main>
    <div class="background background__dish">
    <div class="swiper-dish swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="wrap-img dish__wrap-img"> <img src="img/dish-bg-1.jpg" alt=""></div>
            </div>
            <div class="swiper-slide">
                <div class="wrap-img dish__wrap-img"> <img src="img/dish-bg-2.jpg" alt=""></div>
            </div>
            <div class="swiper-slide">
                <div class="wrap-img dish__wrap-img"> <img src="img/dish-bg-3.jpg" alt=""></div>
            </div>
        </div>
        <div class="swiper-pagination-dish swiper-pagination"></div>
    </div>
    <div class="conteiner" id="dish">
        <div class="dish-title">
            <p class="dish-title__title">Teast your fav dish</p>
            <p class="dish-title__subtitle-title">from <span>luxury restaurent.</span></p>
        </div>
        <div class="exlore-food-menu">
            <img src="./img/exlore-food-menu.png" alt="exlore-food-menu.jpg">
            <p>Explore food Menu</p>
        </div>
    </div>
</div>
    <div class="conteiner" id="about">
    <nav class="about-row__top-menu">
        <a href="#" class="read">
            <img src="img/icon_reviews.png" class="read__icon" alt="reviews">
            <div>READ <p>REVIEWS</p>
            </div>
            <img src="img/orang-sercle.png" class="read__cercle" alt="orang sercle">
        </a>
        <a href="tel:1008005006" class="about-call-us">
            <img src="img/icon_phone.png" class="read__cercle" alt="icon phone">
            <div class="about-call-us__text">
                CALL US NOW FOR
                <p>HOME DELIVERY</p>
            </div>
            <div class="phone-number">
                1-008 005 006
            </div>
        </a>
    </nav>
    <section class="about-row">
        <div class="about-row__text">
            <h2>
                About Restaurant
            </h2>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate itaque dolorum exercitationem
                officiis
                maiores natus repellat error mollitia tempora tenetur provident architecto soluta, enim vero fuga quidem
                fugit inventore quisquam!
                Fuga doloribus nisi placeat, amet facere rem deserunt vitae ad tenetur dicta error omnis
            </p>
            <div class="about-row__text-buttons">
                <a href="#" class="button-orange ">READ MORE</a>
                <div class="wrap-img">
                    <img src="img/about-button-bg.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="about-row__img">
            <div class="wrap-img about-row__wrap-img"><img src="img/about-row-bg.jpg" alt=""></div>
            <div class="wrap-img about-row__wrap-img"><img src="img/about-row-bg.jpg" alt=""></div>
            <div class="wrap-img about-row__wrap-img"><img src="img/about-row-bg.jpg" alt=""></div>
            <div class="wrap-img about-row__wrap-img"><img src="img/about-row-bg.jpg" alt=""></div>
        </div>
    </section>
</div>
    <section>
   <div class="background background__today">
      <div class="swiper-today swiper">
         <div class="swiper-wrapper">
            <div class="swiper-slide">
               <div class="wrap-img today__wrap-img"> <img src="img/today-bg-1.jpg" alt=""></div>
            </div>
            <div class="swiper-slide">
               <div class="wrap-img today__wrap-img"> <img src="img/today-bg-2.jpg" alt=""></div>
            </div>
            <div class="swiper-slide">
               <div class="wrap-img today__wrap-img"> <img src="img/today-bg-3.jpg" alt=""></div>
            </div>
         </div>
         <div class="swiper-pagination-today swiper-pagination"></div>
      </div>

      <div class="conteiner" id="today">
         <h2> Today Special </h2>
         <div class="today-row">
            <article class="food-card today-row__food-card">
               <div class="wrap-img food-card__wrap-img"><img src="img/food-menu-card-img.jpg" alt=""></div>
               <div class="food-card__food-name">
                  <h3>Food Name one</h3>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro eveniet obcaecati sed numquam
                     explicabo reiciendis fuga veniam laudantium maiores
                  </p>
               </div>
               <footer class="food-card__order-block">
                  <div class="food-card__title">home <p>delivery</p>
                  </div>
                  <a href="tel:1008005006" class="food-card__phone-namber">1-008 005 006</a>
                  <div class="price">
   <p>$</p>89.00
</div>
               </footer>
            </article>
            <article class="food-card today-row__food-card">
               <div class="wrap-img food-card__wrap-img"><img src="img/food-menu-card-img.jpg" alt=""></div>
               <div class="food-card__food-name">
                  <h3>Food Name one</h3>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro eveniet obcaecati sed numquam
                     explicabo reiciendis fuga veniam laudantium maiores
                  </p>
               </div>
               <footer class="food-card__order-block">
                  <div class="food-card__title">home <p>delivery</p>
                  </div>
                  <a href="tel:1008005006" class="food-card__phone-namber">1-008 005 006</a>
                  <div class="price">
   <p>$</p>99.00
</div>
               </footer>
            </article>

         </div>

      </div>
   </div>
</section>
    <div class="conteiner" id="restaurant-menu">
   <div class="top-menu-wrap">
   <h2>food menu</h2>
   <div class="wrap-nenu">
      <div class="food-menu__burger burger-open">
         <span></span>
      </div>
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
   <section class="row-dish dish__row">
      <div class="col-dish">
         <div class="dish">
            <div class="dish__title">
               Ultimate organic fruit salad
               <p>survived not only five centuries but the leap</p>
            </div>
            <div class="price">
   <p>$</p>50.00
</div>
         </div>
         <div class="dish">
            <div class="dish__title">
               Toasted jam
               <p>Phasellus a ex accumsan, sollicitudin</p>
            </div>
            <div class="price">
   <p>$</p>68.00
</div>
         </div>
         <div class="dish">
            <div class="dish__title">
               Toasted jam copy
               <p>Phasellus a ex accumsan, sollicitudin copy</p>
            </div>
            <div class="price">
   <p>$</p>22.00
</div>
         </div>
         <div class="dish">
            <div class="dish__title">
               Plain pancakes
               <p>Donec eget augue at diam euismod viverra</p>
            </div>
            <div class="price">
   <p>$</p>39.00
</div>
         </div>
      </div>
      <div class="col-dish">
         <div class="dish">
            <div class="dish__title">
               Ultimate organic fruit salad
               <p>survived not only five centuries but the leap</p>
            </div>
            <div class="price">
   <p>$</p>50.00
</div>
         </div>
         <div class="dish">
            <div class="dish__title">
               Toasted jam
               <p>Phasellus a ex accumsan, sollicitudin</p>
            </div>
            <div class="price">
   <p>$</p>68.00
</div>
         </div>
         <div class="dish">
            <div class="dish__title">
               Toasted jam copy
               <p>Phasellus a ex accumsan, sollicitudin copy</p>
            </div>
            <div class="price">
   <p>$</p>22.00
</div>
         </div>
         <div class="dish">
            <div class="dish__title">
               Plain pancakes
               <p>Donec eget augue at diam euismod viverra</p>
            </div>
            <div class="price">
   <p>$</p>39.00
</div>
         </div>
      </div>
   </section>
   <a href="#" class="button-orange ">Explor food menu</a>

   <div class="wrap-img wrap-img__311x311"><img src="img/Image_311x311.jpg" alt=""></div>
   <div class="wrap-img wrap-img__267x414"><img src="img/Image_267x414.jpg" alt=""></div>
   <div class="wrap-img wrap-img__241x241"><img src="img/Image_241x241.jpg" alt=""></div>

</div>
    <div class="background background__clients">
   <div class="wrap-img background-clients__wrap-img">
      <img src="img/background-clients-block.jpg" alt="">
   </div>

   <section class="conteiner" id="clients">
      <h2 class="slide-body__title">Happy Clients</h2>
      <div class="swiper swiper-clients">
         <div class="swiper-wrapper  clients__swiper-wrapper">
            <div class="swiper-slide">
               <div class="slide-body">
                  <!-- <h2 class="slide-body__title">Happy Clients</h2> -->
                  <div class="slide-body__text">
                     Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model
                     text,
                     and a search for
                     'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved
                     over
                     the years,
                     sometimes by accident, sometimes on purpose.
                  </div>
                  <div class="wrap-img slide-body__client-avatar"><img src="img/icon-clients.jpg" alt=""></div>
                  <div class="name">Dr. Prabakaran John</div>
                  <div class="rating">
                     <img src="img/star-rating-icon.png" alt="">
                     <img src="img/star-rating-icon.png" alt="">
                     <img src="img/star-rating-icon.png" alt="">
                     <img src="img/star-rating-icon.png" alt="">
                     <img src="img/star-rating-icon.png" alt="">
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="slide-body">
                  <!-- <h2 class="slide-body__title">Happy Clients</h2> -->
                  <div class="slide-body__text">
                     Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model
                     text,
                     and a search for
                     'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved
                     over
                     the years,
                     sometimes by accident, sometimes on purpose.
                  </div>
                  <div class="wrap-img slide-body__client-avatar"><img src="img/icon-clients.jpg" alt=""></div>
                  <div class="name">Dr. Prabakaran John</div>
                  <div class="rating">
                     <img src="img/star-rating-icon.png" alt="">
                     <img src="img/star-rating-icon.png" alt="">
                     <img src="img/star-rating-icon.png" alt="">
                     <img src="img/star-rating-icon.png" alt="">
                     <img src="img/star-rating-icon.png" alt="">
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="slide-body">
                  <!-- <h2 class="slide-body__title">Happy Clients</h2> -->
                  <div class="slide-body__text">
                     Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model
                     text,
                     and a search for
                     'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved
                     over
                     the years,
                     sometimes by accident, sometimes on purpose.
                  </div>
                  <div class="wrap-img slide-body__client-avatar"><img src="img/icon-clients.jpg" alt=""></div>
                  <div class="name">Dr. Prabakaran John</div>
                  <div class="rating">
                     <img src="img/star-rating-icon.png" alt="">
                     <img src="img/star-rating-icon.png" alt="">
                     <img src="img/star-rating-icon.png" alt="">
                     <img src="img/star-rating-icon.png" alt="">
                     <img src="img/star-rating-icon.png" alt="">
                  </div>
               </div>
            </div>
            <div class="swiper-slide">
               <div class="slide-body">
                  <!-- <h2 class="slide-body__title">Happy Clients</h2> -->
                  <div class="slide-body__text">
                     Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model
                     text,
                     and a search for
                     'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved
                     over
                     the years,
                     sometimes by accident, sometimes on purpose.
                  </div>
                  <div class="wrap-img slide-body__client-avatar"><img src="img/icon-clients.jpg" alt=""></div>
                  <div class="name">Dr. Prabakaran John</div>
                  <div class="rating">
                     <img src="img/star-rating-icon.png" alt="">
                     <img src="img/star-rating-icon.png" alt="">
                     <img src="img/star-rating-icon.png" alt="">
                     <img src="img/star-rating-icon.png" alt="">
                     <img src="img/star-rating-icon.png" alt="">
                  </div>
               </div>
            </div>

         </div>
         <div class="swiper-button-next swiper-clients__button-next"></div>
         <div class="swiper-button-prev swiper-clients__button-prev"></div>
      </div>
   </section>
</div>
    <div class="conteiner" id="reserve">

   <h2>Reserve your table</h2>
   <section class="reserve-row">
      <div class="wrap-img reserve-row__img"><img src="img/Image_559x334.jpg" alt=""></div>
      <div class="reserve-row__form">
         <form action="#" name="reserve-form" class="reserve-form">
            <div class="reserve-form__input">
               <p>Name*</p>
               <input type="text" tabindex="1" name="name" value="">
               <img src="img/form_icon_name.png" alt="">
            </div>
            <div class="reserve-form__input">
               <p>Time*</p><input type="text" tabindex="2" name="time" value="">
               <img src="img/form_icon_time.png" alt="">
            </div>
            <div class="reserve-form__input">
               <p>Guests*</p><input type="text" tabindex="3" name="guests" value="">
               <img src="img/form_icon_guest.png" alt="">
            </div>
            <div class="reserve-form__input">
               <p>Date*</p><input type="text" tabindex="4" name="date" value="">
               <img src="img/form_icon_calander.png" alt="">
            </div>
            <div class="reserve-form__input">
               <p>Email Address*</p><input type="email" tabindex="5" name="email-address" value="">
               <img src="img/form_icon_email.png" alt="">
            </div>
            <div class="reserve-form__input">
               <p>Phone Number*</p><input type="tel" tabindex="6" name="phone-number" value="">
               <img src="img/form_icon_phone.png" alt="">
            </div>
         </form>
         <div class="reserve-call-us">
            <a href="#" class="button-orange ">Make reservation</a>
            <p>
               You can also call <span>for a reservation</span>
            </p>
            <span class="reserve-call-us__tel">
               <a href="tel:1007000005">1-007 000 005</a>
            </span>
         </div>
      </div>
   </section>


</div>
</main>

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
                  <img src="img/form-icon_email.png" alt="">
                  <p>Email Address</p>
                  <input type="email">
               </div>
               <a href="#" class="button-orange ">Subscribe</a>
            </div>
            <div class="icons-block">
   <img src="img/icon_facebook.png" alt="icon_facebook">
   <img src="img/icon_twitter.png" alt="icon_twitter">
   <img src="img/icon_google.png" alt="icon_google+">
</div>
         </div>
         <div class="footer__app">
            <h2>Our app avilable</h2>
            <a href="#" class="button-app">
   <img src="img/icon_apple.png" alt="">
   <p>
      <span>Avilable&nbspon&nbspthe</span>
      App&nbspStore
   </p>
</a>
            <a href="#" class="button-app">
   <img src="img/icon_google-play.png" alt="">
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


<!-- <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="js/app.min.js"></script> -->