<?php
/* Template Name: Contact */
?>


<?php get_header(); ?>

<body>
   <!-- @@if(isProd == false){ @@include('html/debug-grid.html',{})} -->

   <div class="background background-contact-us">
      <div class="wrap-img"><img src="@img/background-contact-us.jpg" alt=""></div>
      <div class="conteiner">
         <div class="contact-us">
            <div class="contact-us__touch">
               <h2>Get in touch</h2>
               <form action="#" class="contact-us__form form">
                  <div class="form__input">
                     <img src="@img/form_icon_name.png" alt="">
                     <p>Name*</p>
                     <input type="text">
                  </div>
                  <div class="form__input">
                     <img src="@img/form_icon_email.png" alt="">
                     <p>Email*</p>
                     <input type="text">
                  </div>
                  <div class="form__input">
                     <img src="@img/form_icon_message.png" alt="icon message">
                     <p>Message*</p>
                     <textarea name="mesage" id="mesage"></textarea>
                  </div>
               </form>
               @@include('html/parts/button-orange.html',{'mod':'','title':'send now', 'href':'#'})
            </div>
            <div class="contact-us__address">
               <h2>Our Address</h2>
               <div>
                  <h3>address</h3>
                  <p>Luxury Restaurent</p>
                  <p>California Second Street</p>
                  <p>2nd floor</p>
               </div>
               <div>
                  <h3>Phone</h3>
                  <a href="tel:+91855955856559">+91 8559 5585 6559</a>
               </div>
               <div>
                  <h3> Email</h3>
                  info@luxuryrestaurent.com
               </div>
               <div>
                  <h3>Follow us</h3>
                  @@include('html/parts/icons-block.html',{})
               </div>
            </div>
         </div>
      </div>
   </div>






   @@include('html/footer.html',{})
   <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
   <script src="js/app.min.js"></script>
</body>

</html>