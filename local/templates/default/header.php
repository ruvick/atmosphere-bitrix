<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>
<?
use Bitrix\Main\Page\Asset;
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<? $APPLICATION->ShowHead() ?>
	<title><? $APPLICATION->ShowTitle() ?></title>
	<?
		Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/css/style.min.css');
		Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/js/vendors.min.js');
		Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . '/js/app.js');
		Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
	 ?>
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
	<meta name="format-detection" content="telephone=no">
	<link rel="icon" type="image/png" href="img/favicons/icon256.png" sizes="256x256">
	<link rel="icon" type="image/png" href="img/favicons/icon128.png" sizes="128x128">
	<link rel="icon" type="image/png" href="img/favicons/icon64.png" sizes="64x64">
	<link rel="icon" type="image/png" href="img/favicons/icon32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="img/favicons/icon16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="img/favicons/icon.svg" sizes="any">
	<link rel="shortcut icon" href="favicon.ico">
</head>

<body>

<div id="panel"><? $APPLICATION->showPanel(); ?></div>

	<div class="wrapper">
		<header id="header" class="header">
	<div class="header__container _container">

		<div class="header__row d-flex">

			<a href="index.html" class="header__logo logo-icon"></a>

			<div class="header__navigation">
				<ul class="header__menu-list menu-list d-flex">
					<li><a href="club.html" class="menu-list__link">О клубе</a></li>
					<li><a href="club-cards.html" class="menu-list__link">Клубные карты</a></li>
					<li><a href="zones.html" class="menu-list__link">Услуги</a></li>
					<li><a href="#" class="menu-list__link">Клубная жизнь</a></li>
					<li><a href="stock.html" class="menu-list__link">Акции</a></li>
					<li><a href="#" class="menu-list__link">Расписание</a></li>
					<li><a href="#" class="menu-list__link">Контакты</a></li> 
				</ul>

				<div class="header__contacts d-flex">
					<a href="tel:79005555155" class="header__phone">7 (900) 5555-155</a>
					<a href="#callback" class="header__popup-link btn _popup-link">Заявка On-Line</a>
				</div>
				<a href="tel:79005555155" class="mob-callback__phone"></a>

				<div class="menu__icon icon-menu">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>

		</div>

	</div>
</header>

<!-- Мобильное меню -->
<div class="header__mob-menu mob-menu">
	<ul class="mob-menu__list">
		<li><a href="club.html" class="menu-list__link">О клубе</a></li>
		<li><a href="club-cards.html" class="menu-list__link">Клубные карты</a></li>
		<li><a href="zones.html" class="menu-list__link">Услуги</a></li>
		<li><a href="#" class="menu-list__link">Клубная жизнь</a></li>
		<li><a href="stock.html" class="menu-list__link">Акции</a></li>
		<li><a href="#" class="menu-list__link">Расписание</a></li>
		<li><a href="#" class="menu-list__link">Контакты</a></li>
	</ul>
	<a href="#callback" class="header__popup-link header__popup-link_mob btn _popup-link">ЗАКАЗАТЬ ЗВОНОК</a>
</div>
		<main class="page">