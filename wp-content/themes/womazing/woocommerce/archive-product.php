<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

get_header('shop');
global $redux;

$uri = $_SERVER['REQUEST_URI'];

$parts = parse_url($uri);
parse_str($parts['query'], $query);
$param = $query['cat'];


/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
//do_action('woocommerce_before_main_content');

?>

    <section class="breadcrumbs-section">
        <div class="container">
            <h1 class="breadcrumbs-title">
                <?php woocommerce_page_title(); ?>
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


    <section class="shop">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="tabs tabs_goods">
                        <button type="button" class="tab-item tab-item_goods btn" value="">Все</button>
                        <button type="button" class="tab-item tab-item_goods btn" value="swimwear">Купальники</button>
                        <button type="button" class="tab-item tab-item_goods btn" value="sweetshot">Свитшоты</button>
                        <button type="button" class="tab-item tab-item_goods btn" value="shirt">Футболки</button>
                        <button type="button" class="tab-item tab-item_goods btn" value="hoodie">Толстовки</button>
                    </div>
                </div>
            </div>
            <?php

            $query_array = array(
                'post_type' => 'product',
                'product_cat' => $param,
                'posts_per_page' => 9,
                'paged' => $paged,
            );
            $paged = (get_query_var('page')) ? get_query_var('page') : 1;
            $query = new WP_Query($query_array);

            ?>


            <span class="amount-of-goods">

                   <?php
                   if ($query->have_posts()) {
                       /**
                        * Hook: woocommerce_before_shop_loop.
                        *
                        * @hooked woocommerce_output_all_notices - 10
                        * @hooked woocommerce_result_count - 20
                        * @hooked woocommerce_catalog_ordering - 30
                        */
                       do_action('woocommerce_before_shop_loop');
                   }
                   ?>
            </span>

            <div class="shop-content">
                <div class="row">


                    <?php
                    if ($query->have_posts()) {
                        if (wc_get_loop_prop('total')) {

                            while ($query->have_posts()) {
                                $query->the_post();

                                global $product;
                                ?>
                                <div class="col-12 col-lg-4">
                                    <div class="card card_shop">
                                        <div class="card__wrapper">
                                            <?php
                                            echo $product->get_image('full');
                                            ?>
                                            <div class="card__overlay">
                                                <a href="<?= $product->get_permalink() ?>"><img
                                                            src="<?php echo $redux['new-image-link']['url'] ?>"
                                                            alt="search"></a>
                                            </div>
                                        </div>
                                        <h4 class="card__title"><?= $product->get_name() ?></h4>
                                        <span class="card__text"><span
                                                    class="rub">&#8381;</span><?= $product->get_price() ?></span>
                                    </div>
                                </div>

                                <?php
                            }
                        }
                        woocommerce_product_loop_end();
                    } else {
                        /**
                         * Hook: woocommerce_no_products_found.
                         *
                         * @hooked wc_no_products_found - 10
                         */
                        // do_action('woocommerce_no_products_found');
                        wc_no_products_found();
                    }
                    ?>

                </div>

            </div>


            <span class="amount-of-goods">
                 <?php
                 if ($query->have_posts()) {
                     /**
                      * Hook: woocommerce_before_shop_loop.
                      *
                      * @hooked woocommerce_output_all_notices - 10
                      * @hooked woocommerce_result_count - 20
                      * @hooked woocommerce_catalog_ordering - 30
                      */
                     do_action('woocommerce_before_shop_loop');
                 }
                 ?>
            </span>

            <div class="row">
                <div class="col-12">

                    <?php
                    /**
                     * Hook: woocommerce_after_shop_loop.
                     *
                     * @hooked woocommerce_pagination - 10
                     */
                    do_action('woocommerce_after_shop_loop');
                    ?>

                </div>
            </div>


        </div>
    </section>


<?php

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
//do_action('woocommerce_after_main_content');


get_footer('shop');




