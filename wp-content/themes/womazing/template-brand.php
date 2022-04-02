<?php

/*
 * Template name: Brand page
 */
get_header();
global $redux;
?>

<section class="breadcrumbs-section">
    <div class="container">
        <h1 class="breadcrumbs-title">
            О бренде
        </h1>
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item">
                <a href="#" class="breadcrumbs__link">
                    Главная
                </a>
            </li>
            <li class="breadcrumbs__item">
                <span class="breadcrumbs__text">
                   О бренде
                </span>
            </li>
        </ul>
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

<div class="modals">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div id="wrapper-modal">
                    <div id="overlay"></div>
                    <div id="modal-window" class="modal-window">
                        <div class="modal-window-content">
                            <img src="<?= $redux['modal-close']['url'] ?>" alt="close" class="popup-close">
                            <h4 class="modal-window-content__title">Заказать обратный звонок</h4>
                            <form action="#" class="form popup-form" id="popup-form" method="post">
                                <input type="text" class="form-input popup-form__input" placeholder="Имя" name="name">
                                <input type="text" class="form-input popup-form__input" placeholder="E-mail"
                                       name="email">
                                <input type="text" class="form-input popup-form__input" placeholder="Телефон"
                                       name="phone">
                                <button type="submit" class="popup-form__btn btn btn-green">Заказать звонок</button>
                            </form>
                            <div class="message-for-user">
                                <div class="text-success-form">
                                    Спасибо! Мы обязательно вам перезвоним
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php

get_footer();

?>


