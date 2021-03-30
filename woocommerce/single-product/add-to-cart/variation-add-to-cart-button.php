<?php
/**
 * Single variation cart button
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;
?>
<div class="woocommerce-variation-add-to-cart variations_button">
	<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>
    
    <div class="card_options_total flex">
        <p class="card_options_smalltext">Цены на сайте и в салонах<br> оптики могут отличаться.</p>
        <div class="card_options_total_number">
          <span id="opt_price">  
          <?php
          
          $sale = get_post_meta( get_the_ID(), '_price', true);
         
          if (!empty($sale)){
            echo $sale;
          } else {
            echo $price;
          }
          ?>
          </span>
          <span class="rub">руб.</span>
        </div>
    </div>


	<button type="submit" class="single_add_to_cart_button button alt"><i class="fa fa-cart-arrow-down" aria-hidden="true" style="font-size: 23px;">&nbsp;&nbsp;</i>
<?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>

	<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>

	<input type="hidden" name="add-to-cart" value="<?php echo absint( $product->get_id() ); ?>" />
	<input type="hidden" name="product_id" value="<?php echo absint( $product->get_id() ); ?>" />
	<input type="hidden" name="variation_id" class="variation_id" value="0" />
</div>

