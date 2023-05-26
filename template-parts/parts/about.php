<div class="conteiner" id="about">
    <?php global $restaurant_site_options; ?>

    <nav class="about-row__top-menu">
        <a href="#" class="read">
            <img src="img/icon_reviews.png" class="read__icon" alt="reviews">
            <div>READ <p>REVIEWS</p>
            </div>
            <img src="img/orang-sercle.png" class="read__cercle" alt="">
        </a>

        <?php if ($restaurant_site_options['home_delivery_number']){   ?>
        <a href="tel: <?php echo esc_html( $restaurant_site_options['home_delivery_number'] ) ?> " class="about-call-us">


            <img src="img/icon_phone.png" class="read__cercle" alt="">
            <div class="about-call-us__text">
                CALL US NOW FOR
                <p>HOME DELIVERY</p>
            </div>
            <div class="phone-number">
                <?php echo esc_html( $restaurant_site_options['home_delivery_number'] ); ?>
            </div>
        </a>
        <?php }?>



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
                <?php get_template_part( 'template-parts/components/button', 'orange', ['href'=>'#','title'=>'READ MORE']); ?>
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