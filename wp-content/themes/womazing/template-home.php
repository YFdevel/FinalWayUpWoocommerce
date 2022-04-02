<?php
/*
 * Template name: Home page
 */
global $redux;
get_header();
?>
    <section class="top-section" id="top-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-7">
                    <div class="slider">
                        <div class="slider__item">
                            <div class="offer">
                                <h1 class="offer__title"><?= $redux['home-top-section-title1']?></h1>
                                <p class="offer__text"><?= $redux['home-top-section-desc1']?></p>
                                <div class="offer-btns">
                                    <a class="offer-btns__arrow btn" href="<?= $redux['home-top-section-link-arrow']?>"><img src="<?= $redux['home-top-section-image-arrow']['url']?>"
                                                                                                  alt=""></a>
                                    <a class="offer-btns__btn btn btn-green"><?php echo $redux['home-top-section-text-btn']?></a>
                                </div>
                            </div>
                        </div>
                        <div class="slider__item">
                            <div class="offer">
                                <h1 class="offer__title"><?= $redux['home-top-section-title2']?></h1>
                                <p class="offer__text"><?= $redux['home-top-section-desc2']?></p>
                                <div class="offer-btns">
                                    <a class="offer-btns__arrow btn" href="<?= $redux['home-top-section-link-arrow']?>"><img src="<?= $redux['home-top-section-image-arrow']['url']?>"
                                                                                                  alt=""></a>
                                    <a class="offer-btns__btn btn btn-green"><?php echo $redux['home-top-section-text-btn']?></a>
                                </div>
                            </div>
                        </div>
                        <div class="slider__item">
                            <div class="offer">
                                <h1 class="offer__title"><?= $redux['home-top-section-title3']?></h1>
                                <p class="offer__text"><?= $redux['home-top-section-desc3']?></p>
                                <div class="offer-btns">
                                    <a class="offer-btns__arrow btn" href="<?= $redux['home-top-section-link-arrow']?>"><img src="<?= $redux['home-top-section-image-arrow']['url']?>"
                                                                                                  alt=""></a>
                                    <a class="offer-btns__btn btn btn-green"><?php echo $redux['home-top-section-text-btn']?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="top-image">
                        <?php

                        $image_ids = explode(',', $redux['home-top-section-gallery-list']);
                        $gallery = [];

                        foreach ($image_ids as $image_id) {
                            $gallery[] = wp_get_attachment_url($image_id);
                        }

                        ?>
                        <div class=" slider-big">
                            <div class="slider-big__item"><img src="<?= $gallery[0] ?>" alt="main"></div>
                            <div class="slider-big__item"><img src="<?= $gallery[1] ?>" alt="main"></div>
                            <div class="slider-big__item"><img src="<?= $gallery[2] ?>" alt="main"></div>
                        </div>
                        <div class="foto-second"><img src="<?= $redux['home-top-section-foto-image-little-right']['url']?>" alt=""></div>
                        <div class="foto-third"><img src="<?= $redux['home-top-section-foto-image-little-left']['url']?>" alt=""></div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section class="collection" id="collection">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title section-title_collection">
                        <?= $redux['new-title']?>
                    </h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card card_collection">
                        <div class="card__wrapper">
                            <img src=" <?= $redux['new-card1-image']['url'] ?>" alt="usa" class="card__image">
                            <div class="card__overlay">
                                <a href="http://localhost/final-wayup/product/футболка-usa/"><img src="<?= $redux['new-image-link']['url'] ?>" alt="search"></a>
                            </div>
                        </div>
                        <h4 class="card__title"> <?= $redux['new-card1-title']?></h4>
                        <span class="card__text"> <?= $redux['new-card1-price']?></span>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card card_collection">
                        <div class="card__wrapper">
                            <img src=" <?= $redux['new-card2-image']['url']?>" alt="glow" class="card__image">
                            <div class="card__overlay">
                                <a href="http://localhost/final-wayup/product/купальник-glow/"><img src="<?= $redux['new-image-link']['url'] ?>" alt="search"></a>
                            </div>
                        </div>
                        <h4 class="card__title"> <?= $redux['new-card2-title']?></h4>
                        <span class="card__text"> <?= $redux['new-card2-price']?></span>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card card_collection">
                        <div class="card__wrapper">
                            <img src=" <?= $redux['new-card3-image']['url']?>" alt="sweetshot" class="card__image">
                            <div class="card__overlay">
                                <a href="http://localhost/final-wayup/product/свитшот-sweet-shot/"><img src="<?= $redux['new-image-link']['url'] ?>" alt="search"></a>
                            </div>
                        </div>
                        <h4 class="card__title"> <?= $redux['new-card3-title']?></h4>
                        <span class="card__text"> <?= $redux['new-card3-price']?></span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <button class="collection-btn btn btn-green"><?php echo $redux['home-top-section-text-btn']?></button>
                </div>
            </div>

        </div>
    </section>

    <section class="important">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title section-title_important">
                        <?= $redux['important-title']?>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card card_important">
                        <img src="<?= $redux['important-card1-image']['url']?>" alt="quality" class="card__image card__image_important">
                        <h4 class="card__title card__title_important"><?= $redux['important-card1-title']?></h4>
                        <p class="card__text card__text_important"><?= $redux['important-card1-desc']?></p>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card card_important">
                        <img src="<?= $redux['important-card2-image']['url']?>" alt="speed" class="card__image card__image_important">
                        <h4 class="card__title card__title_important"><?= $redux['important-card2-title']?></h4>
                        <p class="card__text card__text_important"><?= $redux['important-card2-desc']?></p>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card card_important">
                        <img src="<?= $redux['important-card3-image']['url']?>" alt="hand" class="card__image card__image_important">
                        <h4 class="card__title card__title_important"><?= $redux['important-card3-title']?></h4>
                        <p class="card__text card__text_important"><?= $redux['important-card3-desc']?></p>
                    </div>
                </div>


            </div>

        </div>
    </section>

    <section class="dream">
        <?php
        $image_gallery_ids = explode(',', $redux['dream-gallery-list']);
        $dream_gallery = [];

        foreach ($image_gallery_ids as $image_id) {
            $dream_gallery[] = wp_get_attachment_url($image_id);
        }
        ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title section-title_dream">
                        <?= $redux['dream-section-title']?>
                    </h2>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <div class="slider-team">
                        <div class="slider-team__item">
                            <img src="   <?= $dream_gallery[0]?>" alt="dream-team">
                        </div>
                        <div class="slider-team__item">
                            <img src="<?= $dream_gallery[1]?>" alt="dream-team">
                        </div>
                        <div class="slider-team__item">
                            <img src="<?= $dream_gallery[2]?>" alt="dream-team">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="dream-content">
                        <h3 class="dream-content__title"> <?= $redux['dream-title2']?></h3>
                        <p class="dream-content__text"> <?= $redux['dream-desc1']?></p>
                        <p class="dream-content__text"><?= $redux['dream-desc2']?></p>
                        <a href="<?= $redux['dream-link-dir']?>" class="dream-content__link"><?= $redux['dream-link-text']?></a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <div id="back-top">
        <a title="Go to Top" href="#">
            <i class="fa fa-arrow-up"></i></a>
    </div>

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
                                    <input type="text" class="form-input popup-form__input" placeholder="E-mail" name="email">
                                    <input type="text" class="form-input popup-form__input" placeholder="Телефон" name="phone">
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