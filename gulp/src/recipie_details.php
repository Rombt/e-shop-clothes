<?php
/* Template Name: Recipie details */
?>


<?php get_header(); ?>
<?php get_template_part( 'template-parts/parts/head_pages'); ?>

<!-- @@if(isProd == false){ @@include('html/debug-grid.html',{})} -->



<div class="conteiner recipe-details-title">
   <div class="recipe-details-title__row">
      <h2>Pakoda Chatny</h2>
      <div class="recipe-details-title__rating">
         <img src="@img/rating-star.png" alt="rating star">
         <img src="@img/rating-star.png" alt="rating star">
         <img src="@img/rating-star.png" alt="rating star">
         <img src="@img/rating-star.png" alt="rating star">
         <img src="@img/rating-star.png" alt="rating star">
      </div>
   </div>
</div>
<main class="conteiner recipe-details">
   <div class="recipe-details__row">
      <div class="wrap-img recipe-details__wrap-img">
         <img src="@img/recipe-details-main.jpg" alt="">
      </div>
      <div class="white-box">
         <div class="white-box__items">
            <p>
               15 M
               <span>Prep time</span>
            </p>
            <p>
               30 M
               <span>Cook Time</span>
            </p>
            <p>
               50 M
               <span>
                  Read in
               </span>
            </p>
         </div>
         <div class="white-box__download">
            <a href="#">
               <img src="@img/icon-pdf.png" alt="">
               <p>
                  Download
                  <span> Food RecipieFood </span>
               </p>
            </a>
         </div>
      </div>
      <div class="recipe-details__text">
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste eius laborum, dicta temporibus est quibusdam
         id
         voluptatibus illo aspernatur ex nam dolores quidem doloribus repellendus recusandae reprehenderit officia
         labore fuga. voluptatibus illo aspernatur ex nam dolores quidem doloribus repellendus recusandae
      </div>
      <div class="recipe-details__blocks">
         <div class="ingredients">
            <h3>Ingredients</h3>
            <ul>
               <li>
                  <img src="@img/arrow_bg.png" alt="arrow">
                  1/2 cup chopped red onions
               </li>
               <li>
                  <img src="@img/arrow_bg.png" alt="arrow">
                  2 ounce lemon drops chupas chups bear
               </li>
               <li>
                  <img src="@img/arrow_bg.png" alt="arrow">
                  3 pound seasme snaps powder gingerbread
               </li>
               <li>
                  <img src="@img/arrow_bg.png" alt="arrow">
                  1/4 cup jujubes jelly chupa
               </li>
               <li>
                  <img src="@img/arrow_bg.png" alt="arrow">
                  1/2 cup sour cream (optional)
               </li>
               <li>
                  <img src="@img/arrow_bg.png" alt="arrow">
                  1 ounce suger plum pastry fruitcake
               </li>
               <li>
                  <img src="@img/arrow_bg.png" alt="arrow">
                  1/4 cup jujubes jelly chupa
               </li>
            </ul>
         </div>
         <div class="nutrition">
            <h3>Nutrition</h3>
            <table>
               <thead>
                  <tr>
                     <th>Nutrient</th>
                     <th>DV</th>
                     <th>%DV</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>Protein</td>
                     <td>3.2 gr</td>
                     <td>5%</td>
                  </tr>
                  <tr>
                     <td>Fat</td>
                     <td>6.5 gr</td>
                     <td>6%</td>
                  </tr>
                  <tr>
                     <td>Carbohydrates</td>
                     <td>4.8 gr</td>
                     <td>2%</td>
                  </tr>
                  <tr>
                     <td>calories</td>
                     <td>4.8 gr</td>
                     <td>2%</td>
                  </tr>
                  <tr>
                     <td>cholesterol</td>
                     <td>102 kcal</td>
                     <td>8%</td>
                  </tr>
               </tbody>
            </table>
         </div>
         <div class="wrap-img recipe-details__blocks-img">
            <img src="@img/Image_228x228.jpg" alt="">
         </div>
      </div>
   </div>
</main>

<div class="food-step-background background ">
   <div class="wrap-img food-step-background__img">
      <img src="@img/food-step-background.jpg" alt="food step background">
   </div>
   <div class="conteiner food-step">
      <h2>Food Step</h2>
      <div class="food-step__row">
         <div class="swiper swiper-food-step">
            <div class="swiper-wrapper">
               <div class="swiper-slide step-row">
                  <div class="step-square">
                     <p>1</p>
                     <p>Step</p>
                  </div>
                  <div class="step-row__text">
                     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda omnis totam tempora,
                     voluptatem
                     ratione architecto, consectetur praesentium dolorem. Magni omnis architecto odit sit at nobis
                     doloribus culpa cum eaque? Laborum.
                  </div>
               </div>
               <div class="swiper-slide step-row">
                  <div class="step-square">
                     <p>2</p>
                     <p>Step</p>
                  </div>
                  <div class="step-row__text">
                     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda omnis totam tempora,
                     voluptatem
                     ratione architecto, consectetur praesentium dolorem. Magni omnis architecto odit sit at nobis
                     doloribus culpa cum eaque? Laborum.
                  </div>
               </div>
               <div class="swiper-slide step-row">
                  <div class="step-square">
                     <p>3</p>
                     <p>Step</p>
                  </div>
                  <div class="step-row__text">
                     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda omnis totam tempora,
                     voluptatem
                     ratione architecto, consectetur praesentium dolorem. Magni omnis architecto odit sit at nobis
                     doloribus culpa cum eaque? Laborum.
                  </div>
               </div>
               <div class="swiper-slide step-row">
                  <div class="step-square">
                     <p>4</p>
                     <p>Step</p>
                  </div>
                  <div class="step-row__text">
                     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda omnis totam tempora,
                     voluptatem
                     ratione architecto, consectetur praesentium dolorem. Magni omnis architecto odit sit at nobis
                     doloribus culpa cum eaque? Laborum.
                  </div>
               </div>
               <div class="swiper-slide step-row">
                  <div class="step-square">
                     <p>5</p>
                     <p>Step</p>
                  </div>
                  <div class="step-row__text">
                     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda omnis totam tempora,
                     voluptatem
                     ratione architecto, consectetur praesentium dolorem. Magni omnis architecto odit sit at nobis
                     doloribus culpa cum eaque? Laborum.
                  </div>
               </div>
               <div class="swiper-slide step-row">
                  <div class="step-square">
                     <p>6</p>
                     <p>Step</p>
                  </div>
                  <div class="step-row__text">
                     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda omnis totam tempora,
                     voluptatem
                     ratione architecto, consectetur praesentium dolorem. Magni omnis architecto odit sit at nobis
                     doloribus culpa cum eaque? Laborum.
                  </div>
               </div>
               <div class="swiper-slide step-row">
                  <div class="step-square">
                     <p>7</p>
                     <p>Step</p>
                  </div>
                  <div class="step-row__text">
                     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda omnis totam tempora,
                     voluptatem
                     ratione architecto, consectetur praesentium dolorem. Magni omnis architecto odit sit at nobis
                     doloribus culpa cum eaque? Laborum.
                  </div>
               </div>
               <div class="swiper-slide step-row">
                  <div class="step-square">
                     <p>8</p>
                     <p>Step</p>
                  </div>
                  <div class="step-row__text">
                     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda omnis totam tempora,
                     voluptatem
                     ratione architecto, consectetur praesentium dolorem. Magni omnis architecto odit sit at nobis
                     doloribus culpa cum eaque? Laborum.
                  </div>
               </div>
            </div>
            <div class="swiper-scrollbar food-step__scrollbar"></div>
         </div>
      </div>
   </div>
</div>

<div class="conteiner featured-recipies">
   <div class="featured-recipies__title">Featured Recipies</div>
   <div class="featured-recipies__row">
      @@include('html/parts/recipe-card-2.html',{
      'title':'Prawns tikka',
      'img_src':'@img/recipe-card-img-2.jpg',
      'description':"Lorem Ipsum has been the industry's standard dummy text ever sistandard"
      })
      @@include('html/parts/recipe-card-2.html',{
      'title':'Prawns tikka',
      'img_src':'@img/recipe-card-img-2.jpg',
      'description':"Lorem Ipsum has been the industry's standard dummy text ever sistandard"
      })
      @@include('html/parts/recipe-card-2.html',{
      'title':'Prawns tikka',
      'img_src':'@img/recipe-card-img-2.jpg',
      'description':"Lorem Ipsum has been the industry's standard dummy text ever sistandard"
      })

   </div>
</div>


<?php get_template_part( 'template-parts/components/opening_hours'); ?>

<?php get_footer();?>