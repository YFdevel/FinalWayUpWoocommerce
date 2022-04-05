<?php

/*
 * Template name: Cart page
 */

get_header();

?>
    <section class="breadcrumbs-section breadcrumbs-section_one-item">
        <div class="container">
            <h1 class="breadcrumbs-title">
                Корзина
            </h1>

            <?php

            $args = array(
                'delimiter' => '<div class="delimiter"></div>',
                'wrap_before' => '<nav class="woocommerce-breadcrumb breadcrumbs">',
                'wrap_after' => '</nav>'
            );
            woocommerce_breadcrumb($args);
            ?>

        </div>
    </section>


    <section class="cart">
        <div class="container">
            <form class="woocommerce-cart-form" action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">

                <?php do_action('woocommerce_before_cart_table'); ?>

                <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents">

                    <?php do_action('woocommerce_before_cart_contents'); ?>
                    <div class="row">
                        <div class="col-12">
                            <?php
                            foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
                                $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
                                $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

                                if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
                                    $product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
                                    ?>
                                    <div class="cart-content woocommerce-cart-form__cart-item <?php echo esc_attr(apply_filters('woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key)); ?>">
                                        <div class="cart-heading">
                                            <span class="cart-heading-item">Товар</span>
                                            <span class="cart-heading-price">Цена</span>
                                            <span class="cart-heading-amount">Количество</span>
                                            <span class="cart-heading-total">Всего</span>
                                        </div>
                                        <div class="cart-bottom">
                                            <div class="cart-bottom-item">
                                                <button class="cart-bottom-item__delete product-remove">
                                                    <?php
                                                    echo apply_filters('woocommerce_cart_item_remove_link',
                                                        sprintf(
                                                            '<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
                                                            esc_url(wc_get_cart_remove_url($cart_item_key)),
                                                            esc_html__('Remove this item', 'woocommerce'),
                                                            esc_attr($product_id),
                                                            esc_attr($_product->get_sku())
                                                        ),
                                                        $cart_item_key
                                                    );
                                                    ?>
                                                </button>
                                                <?php echo $_product->get_image('full') ?>
                                                <span class="cart-bottom-item_desc"><?php echo $_product->get_name() ?></span>
                                            </div>
                                            <span class="cart-bottom-price product-price"
                                                  data-title="<?php esc_attr_e('Price', 'woocommerce'); ?>">
                                            <?php echo apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key); ?>
                                        </span>
                                            <div class="cart-bottom-amount product-quantity item-count-btn"
                                                 data-title="<?php esc_attr_e('Quantity', 'woocommerce'); ?>">
                                                <?php
                                                if ($_product->is_sold_individually()) {
                                                    $product_quantity = sprintf('1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key);
                                                } else {
                                                    $product_quantity = woocommerce_quantity_input(
                                                        array(
                                                            'input_name' => "cart[{$cart_item_key}][qty]",
                                                            'input_value' => $cart_item['quantity'],
                                                            'max_value' => $_product->get_max_purchase_quantity(),
                                                            'min_value' => '0',
                                                            'product_name' => $_product->get_name(),
                                                        ),
                                                        $_product,
                                                        false
                                                    );
                                                }

                                                echo apply_filters('woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item); // PHPCS: XSS ok.
                                                ?>
                                            </div>
                                            <span class="cart-bottom-total product-subtotal"
                                                  data-title="<?php esc_attr_e('Subtotal', 'woocommerce'); ?>">
                      <?php
                      echo apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($_product, $cart_item['quantity']), $cart_item, $cart_item_key);
                      ?>
                                            </span>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <?php do_action('woocommerce_cart_contents'); ?>

                    <div class="row">
                        <div class=" col-12">
                            <div class="actions cart-coupon"><?php if (wc_coupons_enabled()) { ?>
                                    <div class="coupon cart-coupon-apply">
                                        <input type="text" name="coupon_code"
                                               class="input-text cart-coupon-apply__input form-input" id="coupon_code"
                                               value=""
                                               placeholder="Введите купон"/>
                                        <button type="submit" class="button button cart-coupon-apply__btn btn btn-green"
                                                name="apply_coupon"
                                                value="<?php esc_attr_e('Apply coupon', 'woocommerce'); ?>"><?php esc_attr_e('Apply coupon', 'woocommerce'); ?></button>
                                        <?php do_action('woocommerce_cart_coupon'); ?>
                                    </div>
                                <?php } ?>

                                <button type="submit" class="button button cart-coupon-apply__btn btn btn-green"
                                        name="update_cart"
                                        value="<?php esc_attr_e('Update cart', 'woocommerce'); ?>"><?php esc_html_e('Update cart', 'woocommerce'); ?></button>

                                <?php do_action('woocommerce_cart_actions'); ?></div>

                            <?php wp_nonce_field('woocommerce-cart', 'woocommerce-cart-nonce'); ?>
                        </div>
                    </div>

                    <?php do_action('woocommerce_after_cart_contents'); ?>

                </table>
                <?php do_action('woocommerce_after_cart_table'); ?>


            <div class="row">
                <div class="col-lg-7 offset-lg-5">

                    <div class="cart-result">
                        <div class="cart-result-label">
                            <span class="cart-result-label__text">Подытог:</span>
                            <span class="cart-result-label__sum"><?= wc_cart_totals_subtotal_html();?></span>
                        </div>
                        <div class="cart-result-main">
                            <div class="cart-result-info">
                                <span class="cart-result-info__text">Итого:</span>
                                <span class="cart-result-info__sum"><?= wc_cart_totals_order_total_html(); ?></span>
                            </div>
                            <a href="/final-wayup/checkout" class="cart-result-btn btn btn-green">Оформить заказ</a>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </section>



<?php
get_footer();












