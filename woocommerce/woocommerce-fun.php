<?php


////
add_filter('woocommerce_product_tabs', 'woo_remove_product_tabs', 98);

function woo_remove_product_tabs($tabs)
{

    unset($tabs['additional_information']); // Убираем вкладку "Свойства"

    return $tabs;
}


// Форма оформление заказа
/*
 * Добавляем часть формы к фрагменту
 */
add_filter('woocommerce_update_order_review_fragments', 'awoohc_add_update_form_billing', 110);
function awoohc_add_update_form_billing($fragments)
{
    $checkout = WC()->checkout();
    ob_start();
?>
    <div class="woocommerce-billing-fields__field-wrapper">
        <?php
        $fields = $checkout->get_checkout_fields('billing');
        foreach ($fields as $key => $field) {
            if (isset($field['country_field'], $fields[$field['country_field']])) {
                $field['country'] = $checkout->get_value($field['country_field']);
            }
            woocommerce_form_field($key, $field, $checkout->get_value($key));
        }
        ?>
    </div>
    <?php
    $art_add_update_form_billing              = ob_get_clean();
    $fragments['.woocommerce-billing-fields'] = $art_add_update_form_billing;

    return $fragments;
}

/*
 * Убираем поля для конкретного способа доставки
 */
add_filter('woocommerce_checkout_fields', 'awoohc_override_checkout_fields');
function awoohc_override_checkout_fields($fields)
{
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_state']);
    unset($fields['billing']['billing_city']);
    $fields['billing']['billing_first_name']['class'][0] = 'form-row-first';
    $fields['billing']['billing_last_name']['class'][0] = 'form-row-first';
    $fields['billing']['billing_email']['class'][0]      = 'form-row-first';
    $fields['billing']['billing_phone']['class'][0]      = 'form-row-first';
    $chosen_methods                                      = WC()->session->get('chosen_shipping_methods');
    if ('flat_rate:12' === $chosen_methods[0]) {
        $fields['billing']['billing_address_1']['class'][0] = 'form-row-first';
    } else {
        unset($fields['billing']['billing_address_1']);
    }

    return $fields;
}
/*
* Обновление формы
*/
add_action('wp_footer', 'awoohc_add_script_update_shipping_method');
function awoohc_add_script_update_shipping_method()
{
    if (is_checkout()) {
    ?>
        <!--Скроем поле Страна. Если успользуется поле Страна, то следцет убрать скрытие-->
        <style>
            #billing_country_field {
                display: none !important;
            }
        </style>
        <!--Выполняем обновление полей при переключении доставки-->
        <script>
            jQuery(document).ready(function($) {
                $(document.body).on('updated_checkout updated_shipping_method', function(event, xhr, data) {

                    $('input[name="shipping_method"]').on('change', function() {
                        $('.woocommerce-billing-fields__field-wrapper').block({
                            message: null,
                            overlayCSS: {
                                background: '#fff',
                                'z-index': 1000000,
                                opacity: 0.3
                            }
                        });
                    });


                    var first_name = $('#billing_first_name').val(),
                        last_name = $('#billing_last_name').val(),
                        phone = $('#billing_phone').val(),
                        email = $('#billing_email').val(),
                        address1 = $('#billing_address_1').val();

                    $(".woocommerce-billing-fields__field-wrapper").html(xhr.fragments[".woocommerce-billing-fields"]);
                    $(".woocommerce-billing-fields__field-wrapper").find('input[name="billing_first_name"]').val(first_name);
                    $(".woocommerce-billing-fields__field-wrapper").find('input[name="billing_last_name"]').val(last_name);
                    $(".woocommerce-billing-fields__field-wrapper").find('input[name="billing_phone"]').val(phone);
                    $(".woocommerce-billing-fields__field-wrapper").find('input[name="billing_email"]').val(email);
                    $(".woocommerce-billing-fields__field-wrapper").find('input[name="billing_address_1"]').val(address1);
                    $('.woocommerce-billing-fields__field-wrapper').unblock();
                });
            });
        </script>
<?php
    }
}

add_filter( 'woocommerce_variable_price_html', 'truemisha_variation_price', 20, 2 );
 
function truemisha_variation_price( $price, $product ) {
 
	$min_regular_price = $product->get_variation_regular_price( 'min', true );
	$min_sale_price = $product->get_variation_sale_price( 'min', true );
	$max_regular_price = $product->get_variation_regular_price( 'max', true );
	$max_sale_price = $product->get_variation_sale_price( 'max', true );
 
	if ( ! ( $min_regular_price == $max_regular_price && $min_sale_price == $max_sale_price ) ) {
		if ( $min_sale_price < $min_regular_price ) {
			$price = sprintf( 'от <del>%1$s</del><ins>%2$s</ins>', wc_price( $min_regular_price ), wc_price( $min_sale_price ) );
		} else {
			$price = sprintf( 'от %1$s', wc_price( $min_regular_price ) );
		}
	}
 
	return $price;
 
}
// Изменение комментария при оформлении заказа
add_filter( 'woocommerce_checkout_fields', 'custom_comment_order_fields', 900 );
function custom_comment_order_fields( $array ) {
    $array['order']['order_comments']['label'] = 'Комментарий к заказу: ';
    $array['order']['order_comments']['placeholder'] = 'Возможные уточнения и комментарии к вашему заказу';
    return $array;
}


//код марта2021/

//включить редактирование шаблонов магазина/

 function eyeline_add_woocommerce_support()
{
   add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'eyeline_add_woocommerce_support');
 
 //поменять знак рубля/
 /* Изменяет символ валюты на буквы */
// add_filter('woocommerce_currency_symbol', 'change_existing_currency_symbol', 10, 2);

// function change_existing_currency_symbol( $currency_symbol, $currency ) {
//      switch( $currency ) {
//           case 'RUB': $currency_symbol = 'руб.'; break;
//      }
//      return $currency_symbol;
// }
 
 //изменяем название кнопки в цикле
add_filter( 'add_to_cart_text', 'woo_custom_product_add_to_cart_text' );            // < 2.1
add_filter( 'woocommerce_product_add_to_cart_text', 'woo_custom_product_add_to_cart_text' );  // 2.1 +
  
function woo_custom_product_add_to_cart_text() {
  
    return __( 'заказать', 'woocommerce' );
  
}

//убираем количество товаров в начале цикла
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );


//убираем элементы из хука карточки товара справа

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );

remove_action( 'woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 20 );
add_action( 'woocommerce_checkout_after_order_review', 'woocommerce_checkout_payment', 900 );

add_action( 'woocommerce_before_single_product', 'woocommerce_template_single_meta', 11 );
add_action( 'optika_prod_exerption', 'woocommerce_template_single_excerpt' );

//корзина в header
function optika_cart_summ(){
    echo explode( '.', WC()->cart->get_cart_contents_total() )[0];
}

// Создаем свой хук для woo-БРЭДКРАМБС и меняем разделитель
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
add_action( 'optika_woocommerce_breadcrumb', 'woocommerce_breadcrumb', 20 );
add_filter('woocommerce_breadcrumb_defaults','in_woocommerce_breadcrumb_defaults');
function in_woocommerce_breadcrumb_defaults($args){
    $args['delimiter']   = '&nbsp;&#62;&nbsp;';
    return $args;
}

