<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package womazing
 */
global $redux;
?>
</main>

<div class="footer" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3">
                <div class="logo logo-footer d-none d-lg-flex">
	                <?php the_custom_logo(); ?>
                </div>
                <div class="politics">
                    <span><?= $redux['fс-poly-1']?></span>
                    <span><?= $redux['fс-poly-2']?></span>
                    <span><?= $redux['fс-poly-3']?></span>
                </div>
            </div>

            <div class="col-lg-5 offset-lg-1 d-none d-lg-block">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-2',
                        'menu_id'        => 'secondary-menu',
                    )
                );
                ?>
            </div>

            <div class="col-12 col-lg-2 offset-lg-1">
                <div class="footer-contacts">
                    <a href="tel:<?= $redux['header-content-tel-text']?>" class="footer-contacts__tel"><?= $redux['header-content-tel-text']?></a>
                    <a href="mailto:hello@womazing.com" class="footer-contacts__email"><?= $redux['fc-email']?></a>
                </div>
                <div class="footer-socials-wrapper">
                    <ul class="socials-list">
                        <li class="socials-list__item">
                            <!--noindex-->
                            <a href="<?= $redux['fc-socials-link1']?>" rel="nofollow noopener noreferrer" target="_blank">
                                <img src="<?= $redux['fc-socials-image1']['url']?>" alt="instagram">
                            </a>
                            <!--/noindex-->
                        </li>
                        <li class="socials-list__item">
                            <!--noindex-->
                            <a href="<?= $redux['fc-socials-link2']?>" rel="nofollow noopener noreferrer" target="_blank">
                                <img src="<?= $redux['fc-socials-image2']['url']?>" alt="facebook">
                            </a>
                            <!--/noindex-->
                        </li>
                        <li class="socials-list__item">
                            <!--noindex-->
                            <a href="<?= $redux['fc-socials-link3']?>" rel="nofollow noopener noreferrer"
                               target="_blank">
                                <img src="<?= $redux['fc-socials-image3']['url']?>" alt="twitter">
                            </a>
                            <!--/noindex-->
                        </li>
                    </ul>
                    <div class="visa-img"><img src="<?= $redux['fc-image-paycard']['url']?>" alt="visa"></div>
                </div>

            </div>
        </div>

    </div>
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
                                <input type="text" class="form-input popup-form__input" placeholder="Имя"
                                       name="name">
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

<?php wp_footer(); ?>

</body>
</html>
