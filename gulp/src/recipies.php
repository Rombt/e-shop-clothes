<?php
/* Template Name: Recipies */
?>


<?php get_header(); ?>

<!-- @@if(isProd == false){ @@include('html/debug-grid.html',{})} -->

<div class="conteiner recipies-title">
    <div class="recipies-title__row">
        <h1>Our Spescial Recipies</h1>
        <div class="recipies-title__subtitle">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem excepturi ab natus cum iure in,
            veniam
            tempore magnam nostrum, itaque alias nemo id incidunt architecto debitis quos voluptates ipsum officia.
        </div>
        <div class="recipies-title-nav recipies-title__nav">
            <div class="select-view">
                <div class="select-view__colomns">2 column</div>
                <div class="select-view__grid"><img src="@img/title-nav__icon_two-grid.png" alt=""></div>
            </div>
            <div class="recipies-title-nav__brows-recipes">
                <h3>Brows Recipes</h3>
                <div class="menu-recipies-burger burger-open">
                    <span></span>
                </div>
                <nav class="menu-recipies">
                    <ul class="menu-recipies__list">
                        <li>
                            <a href="#">
                                <img src="@img/title-nav__icon_breakfast.png" alt="">
                                <p>Breakfast</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="@img/title-nav__icon_starter.png" alt="">
                                <p>Starter</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="@img/title-nav__icon_lunch.png" alt="">
                                <p>Lunch</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="@img/title-nav__icon_icon_dinner.png" alt="">
                                <p>Dinner</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="@img/title-nav__icon_icon_dessert.png" alt="">
                                <p>Dessert</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<main class="conteiner recipies-conteiner">
    <div class="recipies-conteiner__row">
        @@include('html/parts/recipe-card.html',{
        'title':'Prawns tikka',
        'img_src':'@img/recipe-card-img.jpg',
        'description':"Lorem Ipsum has been the industry's standard dummy text ever sistandard dummy text ever si"
        })
        @@include('html/parts/recipe-card.html',{
        'title':'Prawns tikka',
        'img_src':'@img/recipe-card-img.jpg',
        'description':"Lorem Ipsum has been the industry's standard dummy text ever sistandard dummy text ever si"
        })
        @@include('html/parts/recipe-card.html',{
        'title':'Prawns tikka',
        'img_src':'@img/recipe-card-img.jpg',
        'description':"Lorem Ipsum has been the industry's standard dummy text ever sistandard dummy text ever si"
        })
        @@include('html/parts/recipe-card.html',{
        'title':'Prawns tikka',
        'img_src':'@img/recipe-card-img.jpg',
        'description':"Lorem Ipsum has been the industry's standard dummy text ever sistandard dummy text ever si"
        })
        @@include('html/parts/recipe-card.html',{
        'title':'Prawns tikka',
        'img_src':'@img/recipe-card-img.jpg',
        'description':"Lorem Ipsum has been the industry's standard dummy text ever sistandard dummy text ever si"
        })
        @@include('html/parts/recipe-card.html',{
        'title':'Prawns tikka',
        'img_src':'@img/recipe-card-img.jpg',
        'description':"Lorem Ipsum has been the industry's standard dummy text ever sistandard dummy text ever si"
        })
    </div>
</main>


<?php get_template_part( 'template-parts/components/opening-hours'); ?>

<?php get_footer();?>