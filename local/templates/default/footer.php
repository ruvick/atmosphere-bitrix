<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>

</main>
		<footer id="footer" class="footer">
	<div class="footer__container _container">

		<div class="footer__row d-flex">
			<a href="index.html" class="footer__logo logo-icon">
			</a> 

			<ul class="footer__menu menu-list d-flex"> 
				<li><a href="club.html" class="menu-list__link">О клубе</a></li>
				<li><a href="club-cards.html" class="menu-list__link">Клубные карты</a></li>
				<li><a href="zones.html" class="menu-list__link">Услуги</a></li>
				<li><a href="#" class="menu-list__link">Клубная жизнь</a></li>
				<li><a href="stock.html" class="menu-list__link">Акции</a></li>
				<li><a href="#" class="menu-list__link">Расписание</a></li>
				<li><a href="#" class="menu-list__link">Контакты</a></li>
			</ul>
		</div>

	</div>
</footer>
	</div>
	<!-- Popup-с формой -->
<div class="popup popup_callback">
	<div class="popup__content">
		<div class="popup__body">
			<div class="popup__close"></div>
			<div class="popup__item d-flex">
				<div class="popup__img">
					<picture><source srcset="<?=SITE_TEMPLATE_PATH?>/img/popup.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH?>/img/popup.jpg?_v=1633466607061" alt=""></picture>
				</div>
				<div class="popup__form-block">
					<h2>Заказать звонок</h2>
					<p class="popup__notific">Оставьте заявку и мы свяжемся с Вами в течении 15 минут</p>
					<form action="#" class="form">
						<div class="form__line">
							<input id="name" autocomplete="off" type="text" name="form[]" data-error="Ошибка" data-value="Имя"
								class="popup__form-input input _req">
							<input id="tel2" autocomplete="off" type="text" name="form[]" data-error="Ошибка" data-value="Телефон"
								class="popup__form-input input _phone _req">
							<input id="email" autocomplete="off" type="text" name="form[]" data-error="Ошибка" data-value="Email"
								class="popup__form-input input _email _req">
						</div>
						<p class="popup__policy">Заполняя данную форму вы соглашаетесь с <a href="#">политикой
								конфиденциальности</a></p>
						<button class="popup__form-btn form__btn btn">Заказать</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>

</html>

