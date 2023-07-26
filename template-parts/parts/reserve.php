<?php global $restaurant_site_options; ?>

<div class="conteiner" id="reserve">
   <h2><?php class_exists('ReduxFramework') ? _e($restaurant_site_options['reserve-section_title']) : "" ?></h2>
   <section class="reserve-row">
      <div class="wrap-img reserve-row__img">
         <?php if (class_exists('ReduxFramework') &&  $restaurant_site_options['reserve-section_background_img']['url']) { ?>
               <img src="<?php echo esc_url($restaurant_site_options['reserve-section_background_img']['url']) ?>" alt="">
         <?php }?>         
      </div>
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
            <?php get_template_part(
                'template-parts/components/button',
                'orange',
                [
                              'href'=>class_exists('ReduxFramework') ? esc_html($restaurant_site_options['reserve-section_button-href']) : "",
                              'title'=>class_exists('ReduxFramework') ? esc_html($restaurant_site_options['reserve-section_button-title']) : "",
                           ]
            ); ?>
            <p>
               <?php class_exists('ReduxFramework') ? _e($restaurant_site_options['reserve-section_text']) : "" ?>
            </p>
            <?php if (class_exists('ReduxFramework') &&  $restaurant_site_options['phone-numbers_reservation']) { ?>
            <span class="reserve-call-us__tel">
               <a href="tel:<?php echo class_exists('ReduxFramework') ? esc_html($restaurant_site_options['phone-numbers_reservation']) : "" ?>">
                  <?php echo class_exists('ReduxFramework') ? esc_html($restaurant_site_options['phone-numbers_reservation']) : "" ?>
               </a>
            </span>
            <?php }?>
         </div>
      </div>
   </section>
</div>