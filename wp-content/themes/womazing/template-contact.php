<?php

/*
 * Template name: Contact page
 */

get_header();
global $redux;
?>

<section class="breadcrumbs-section">
	<div class="container">
		<h1 class="breadcrumbs-title">
			Контакты
		</h1>
		<ul class="breadcrumbs">
			<li class="breadcrumbs__item">
				<a href="#" class="breadcrumbs__link">
					Главная
				</a>
			</li>
			<li class="breadcrumbs__item">
                <span class="breadcrumbs__text">
                   Контакты
                </span>
			</li>
		</ul>
	</div>
</section>

<section class="map">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
<!--				<span class="text-map"> Карта с любой точкой</span>-->
                <?php  echo do_shortcode('[wpgmza id="1"]')?>
			</div>
		</div>
	</div>

</section>

<section class="section-contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="contact-item">
					<p class="contact-item__text"><?= $redux['contact-s1-title'] ?></p>
					<a href="tel:<?= $redux['header-content-tel-text']?>" class="contact-item__text contact-item__text_link"><?= $redux['header-content-tel-text']?></a>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="contact-item">
					<p class="contact-item__text"><?= $redux['contact-s2-title'] ?></p>
					<a href="mailto:<?= $redux['contact-s2-text'] ?>" class="contact-item__text contact-item__text_link"><?= $redux['contact-s2-text'] ?></a>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="contact-item">
					<p class="contact-item__text"><?= $redux['contact-s3-title'] ?></p>
					<p class="contact-item__text contact-item__text_link"><?= $redux['contact-s3-text'] ?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section-contact-form">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
                <div class="contact-form-wrapper">
                <h4 class="contact-form-title"><?= $redux['contact-form-title'] ?></h4>
                <?php echo do_shortcode('[contact-form-7 id="62" title="Контактная форма 1"]')?>
<!--				<form action="#" class="form contact-form" id="contact-form" method="post">-->
<!--					<input type="text" class="form-input contact-form__input" placeholder="Имя" name="user">-->
<!--					<input type="text" class="form-input contact-form__input" placeholder="E-mail" name="email">-->
<!--					<input type="text" class="form-input contact-form__input" placeholder="Телефон" name="phone">-->
<!--					<textarea class="form-input contact-form__textarea" placeholder="Сообщение"-->
<!--					          name="message"></textarea>-->
<!--					<button type="submit" class="contact-form__btn btn btn-green">Заказать звонок</button>-->
<!--					<div class="message-for-user-contact-page">-->
<!--						<div class="text-success-form">-->
<!--							Спасибо! Мы обязательно вам перезвоним-->
<!--						</div>-->
<!--					</div>-->
<!--				</form>-->

                </div>
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
