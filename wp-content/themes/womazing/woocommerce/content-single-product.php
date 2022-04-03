<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;
global $redux;


/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
    echo get_the_password_form(); // WPCS: XSS ok.
    return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>

    <?php
    /**
     * Hook: woocommerce_before_single_product_summary.
     *
     * @hooked woocommerce_show_product_sale_flash - 10
     * @hooked woocommerce_show_product_images - 20
     */
   // do_action( 'woocommerce_before_single_product_summary' );
    ?>
    <section class="breadcrumbs-section breadcrumbs-section_one-item">
        <div class="container">
            <h1 class="breadcrumbs-title">
                <?php
                echo $product->get_name();
                ?>
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


    <section class="one-item">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="one-item-img">
                        <?php

                        woocommerce_show_product_images();
                        ?>
                    </div>
                </div>
                <div class="col-lg-6">

                    <form class="one-item-desc">

                        <div class="one-item-desc__prices">
                                        <?php
                                        woocommerce_template_single_price();
                                        ?>
                        </div>
                        <fieldset class="one-item-desc__size">
                            <?php

                            $size_gallery_ids = explode(',', $product->get_attribute('size'));
                            $size_gallery = [];

                            foreach ($size_gallery_ids as $size_id) {
                                $size_gallery[] = $size_id;
                            }
                            $color_gallery_ids = explode(',', $product->get_attribute('color'));
                            $color_gallery = [];

                            foreach ($color_gallery_ids as $color_id) {
                                $color_gallery[] = $color_id;
                            }
                            ?>
                            <legend class="item-size-label">Выберите размер</legend>
                            <?php
                            foreach ($size_gallery as $size) {
                                ?>
                                <input type="radio" class="item-size-value" name="size" value="<?= $size ?>">
                                <?php
                            }
                            ?>
                        </fieldset>
                        <fieldset class="one-item-desc__color">
                            <legend class="item-color-label">Выберите цвет</legend>
                            <?php
                            foreach ($color_gallery as $color) {
                                ?>
                                <input type="radio" class="item-color-value" name="color" value="<?= $color ?>">
                                <?php
                            }
                            ?>
                        </fieldset>

                        <div class="one-item-desc__btns">
                            <input type="number" name="quantity" class="item-count-btn btn" value="1">
                            <button type="submit" name="add-to-cart" class="item-submit-btn btn btn-green"
                                    value="<?= $product->get_id() ?>">Добавить в корзину
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </section>

    <section class="bind-item">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="bind-item-goods">
                        <?php

                        $related_gallery = wc_get_related_products( $product->get_id(), 3 );

                        foreach ($related_gallery as $related) {
                            ?>
                            <div class="card card_one-item">
                                <div class="card__wrapper">
                                    <?php
                                    echo wc_get_product($related)->get_image('full');
                                    ?>
                                    <div class="card__overlay">
                                        <a href="<?= wc_get_product($related)->get_permalink()?>"><img
                                                    src="<?php echo $redux['new-image-link']['url'] ?>"
                                                    alt="search"></a>
                                    </div>
                                </div>
                                <h4 class="card__title">
                                    <?= wc_get_product($related)->get_name();?>
                                </h4>
                                <span class="card__text">
                                    <?= wc_get_product($related)->get_price();?>
                                </span>
                            </div>
                            <?php
                        }
                        ?>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="summary entry-summary">
        <?php
        /**
         * Hook: woocommerce_single_product_summary.
         *
         * @hooked woocommerce_template_single_title - 5
         * @hooked woocommerce_template_single_rating - 10
         * @hooked woocommerce_template_single_price - 10
         * @hooked woocommerce_template_single_excerpt - 20
         * @hooked woocommerce_template_single_add_to_cart - 30
         * @hooked woocommerce_template_single_meta - 40
         * @hooked woocommerce_template_single_sharing - 50
         * @hooked WC_Structured_Data::generate_product_data() - 60
         */
       // do_action( 'woocommerce_single_product_summary','generate_product_data' );
        ?>
    </div>

    <?php
    /**
     * Hook: woocommerce_after_single_product_summary.
     *
     * @hooked woocommerce_output_product_data_tabs - 10
     * @hooked woocommerce_upsell_display - 15
     * @hooked woocommerce_output_related_products - 20
     */
    //do_action( 'woocommerce_after_single_product_summary' );
    ?>
</div>

<?php
//do_action( 'woocommerce_after_single_product' );
?>
