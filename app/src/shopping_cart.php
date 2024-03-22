<?php
/* Template Name: Shop cart */
?>
<?php get_header(); ?>


<?php defined('ABSPATH') || exit; ?>


<?php get_template_part('template-parts/parts/head_pages'); ?>

<main class="rstr-container shopping-cart">
   <h2>Product Cart</h2>
   <div class="shopping-cart__row">


      <?php if (have_posts()) {
         while (have_posts()) :
            the_post();

            the_content();

         endwhile;
      } else {
         //   get_template_part('partials/notfound');
      }
      ?>


      <?php get_template_part('template-parts/components/pagination'); ?>



      <!-- <div class="summary">
         <div class="summary__table">
            <h3>Summary</h3>
            <table>
               <tr>
                  <th>Subtotal</th>
                  <td>: $300</td>
               </tr>
               <tr>
                  <th>Shipping cost</th>
                  <td>: $0</td>
               </tr>
               <tr>
                  <th>Tax</th>
                  <td>: $10.25</td>
               </tr>
            </table>
         </div>

         <div class="summary__total">
            <div class="summary__title">
               <span>Order Total</span>
               <span>: $ 310</span>
            </div>

            @@include('html/parts/button-orange.html',{'mod':'','title':'go to checkout'})
         </div> -->


   </div>
   </div>
</main>


<!-- @@include('html/parts/related-products.html',{'background':'background-related-products'}) -->


<?php get_footer(); ?>