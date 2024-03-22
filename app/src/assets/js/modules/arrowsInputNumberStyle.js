/**
 *
 * must be this html, look in the snippets:
 *
 * <div class="quantity-block">
 *    <button class="quantity-arrow-minus"> - </button>
 *    <input class="quantity-num" type="number" value="1" />
 *    <button class="quantity-arrow-plus"> + </button>
 * </div>
 *
 *
 */

function quantityProducts() {
  const QuantityBlocks = document.querySelectorAll(`.quantity`); // class of blocks quantity
  const changeEvent = new Event('change', { bubbles: true });

  console.log('***');

  QuantityBlocks.forEach(element => {
    const quantityArrowMinus = element.querySelector('.quantity-arrow-minus');
    const quantityArrowPlus = element.querySelector('.quantity-arrow-plus');
    const input = element.querySelector(`input`);

    quantityArrowMinus.addEventListener('click', quantityMinus);
    quantityArrowPlus.addEventListener('click', quantityPlus);

    function quantityMinus(e) {
      input.dispatchEvent(changeEvent);
      if (input.value > 1) input.value = +input.value - 1;
    }

    function quantityPlus(e) {
      input.dispatchEvent(changeEvent);
      input.value = +input.value + 1;
    }
  });
}

quantityProducts();

jQuery(document).ajaxComplete(function () {
  quantityProducts();
});
