<?php

/*
 * Template name: Brand page
 */
get_header();
global $redux;
?>

<section class="breadcrumbs-section breadcrumbs-section_one-item">
    <div class="container">
        <h1 class="breadcrumbs-title">
           О бренде
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

<section class="desc-section">
    <div class="container">
        <div class="row">
            <div class="desc-content">
                <div class="col-lg-5">
                    <div class="desc-content__img">
                        <img src="<?= $redux['brand-s1-image']['url'] ?>" alt="foto">
                    </div>
                </div>
                <div class="col-lg--7">
                    <div class="desc-content__wrapper">
                        <h3 class="desc-content__title">
                            <?= $redux['brand-s1-title'] ?>
                        </h3>
                        <p class="desc-content__text">
                            <?= $redux['brand-s1-desc1'] ?>


                        </p>
                        <p class="desc-content__text">
                            <?= $redux['brand-s1-desc2'] ?>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="desc-section">
    <div class="container">
        <div class="row">

            <div class="desc-content desc-content_reverse">
                <div class="col-lg-5">
                    <div class="desc-content__img">
                        <img src="<?= $redux['brand-s2-image']['url'] ?>" alt="foto">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="desc-content__wrapper desc-content__wrapper_reverse">
                        <h3 class="desc-content__title">
                            <?= $redux['brand-s2-title'] ?>
                        </h3>
                        <p class="desc-content__text">
                            <?= $redux['brand-s2-desc1'] ?>


                        </p>
                        <p class="desc-content__text">
                            <?= $redux['brand-s2-desc2'] ?>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="section-btn">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="/final-wayup/shop" class="btn btn-green btn_brand">Перейти в магазин</a>
            </div>
        </div>
    </div>

</section>


<?php

get_footer();

?>


