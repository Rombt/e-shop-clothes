<?php
/* Template Name: Shop cart */
?>
<?php get_header(); ?>


<!-- @@if(isProd == false){ @@include('html/debug-grid.html',{})} -->
<?php get_template_part( 'template-parts/parts/head_pages'); ?>

<main class="conteiner shopping-cart-conteiner">
   <h2>Product Cart</h2>
   <div class="shopping-cart__row">
      <div class="product-cart">
         <table>
            <tr>
               <th>Item</th>
               <th>Price</th>
               <th>Qty</th>
               <th>Subtotal</th>
            </tr>
            <tr>
               <td>
                  <div class="produkt-img-block">
                     <img class="produkt-img-block__icon-close" src="@img/icon_close-button.png" alt="icon close button">
                     <div class="produkt-img-block__img wrap-img"><img src="@img/Image_115x115.jpg" alt="produkt img">
                     </div>
                  </div>
                  <p>green mung beas</p>
               </td>
               <td>$ 100</td>
               <td>1</td>
               <td>$ 100</td>
            </tr>
            <tr>
               <td>
                  <div class="produkt-img-block">
                     <img class="produkt-img-block__icon-close" src="@img/icon_close-button.png" alt="icon close button">
                     <div class="produkt-img-block__img wrap-img"><img src="@img/Image_115x115.jpg" alt="produkt img">
                     </div>
                  </div>
                  laird green ientils
               </td>
               <td>$ 100</td>
               <td>1</td>
               <td>$ 100</td>
            </tr>
            <tr>
               <td>
                  <div class="produkt-img-block">
                     <img class="produkt-img-block__icon-close" src="@img/icon_close-button.png" alt="icon close button">
                     <div class="produkt-img-block__img wrap-img"><img src="@img/Image_115x115.jpg" alt="produkt img">
                     </div>
                  </div>
                  Fava bean
               </td>
               <td>$ 100</td>
               <td>1</td>
               <td>$ 100</td>
            </tr>
         </table>
      </div>
      <div class="summary">
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
         </div>


      </div>
   </div>
</main>


@@include('html/parts/related-products.html',{'background':'background-related-products'})


<?php get_footer();?>