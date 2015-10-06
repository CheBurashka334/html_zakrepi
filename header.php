<!DOCTYPE html>
<html>
<head>
	<title>Крепыж</title>
	<!--meta name="viewport" content="width=device-width, initial-scale=1"-->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<!--link rel="shortcut icon" href="favicon.ico" type="image/x-icon"-->
	<!--link rel="shortcut icon" href="favicon.png" type="image/png"-->
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/modernizr-custom.js"></script>
	<script src="js/materialize.min.js"></script>
	<script src="js/angular.js"></script>
	<script src="js/content-app.js"></script>
	<script src="js/jquery.jcarousel.min.js"></script>
	<script src="js/svg-lib.js"></script>
	<script src="js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="template_styles.css" />
</head>
<body>
<div id="svg-placeholder" class="hide"></div>
<div class="layout">
<!-- для главной добавить класс home-page к page, для новостей и благотворительности - news-page,
	для проектов - projects-page -->
<div class="page" ng-app="zakrepi">
	<!-- если не 404 -->
	<div class="header-wrapper">
		<div class="topbar">
			<div class="container row">
				<div class="geo-box col l3 small-text">
					<svg class="icon"><use xlink:href="#location"/></svg>
					Петропавловск-Камчатский
				</div>
				<div class="top-menu col l6">
					<ul class="menu horizontal-menu">
						<li class="menu-item"><a class="menu-link" href="#">Доставка и оплата</a></li>
						<li class="menu-item"><a class="menu-link" href="#">Гарантия и возврат</a></li>
						<li class="menu-item"><a class="menu-link" href="#">Организациям</a></li>
						<li class="menu-item"><a class="menu-link" href="#">Наши магазины</a></li>
					</ul>
				</div>
				<div class="auth-box col l3">
					<a class="auth-link login" href="#"><svg class="icon"><use xlink:href="#profile"/></svg> Вход</a>
					<a class="auth-link register" href="#">Регистрация</a>
				</div>
			</div>
		</div>
		<div class="header">
			<div class="container row">
				<div class="logo col l3">
					<a class="img-link" href="home.php"><img src="images/logo.png"/></a>
				</div>
				<div class="phone-box col l3">
					<a href="callto:+78043334140" class="nostyle phone-link xbig-text">8-804-333-41-40</a><br/>
					<span class="small light-color small-text">Звонок по России бесплатный</span>
				</div>
				<div class="search-box col l3">
					<input type="text" class="search inputtext" id="h-search" />
					<label for="h-search" class="textfield-placeholder">Поиск по товарам</label>
					<button class="search-btn btn btn-icon"><svg class="icon"><use xlink:href="#search"/></svg></button>
				</div>
				<div class="shopping-card-box col l3">
					<a href="#" class="btn btn-favorite btn-icon col"><svg class="icon"><use xlink:href="#heart"/></svg></a>
					<a class="btn standart btn-with-icon col l2 btn-minicart" href="#"><svg class="icon"><use xlink:href="#cart"/></svg> Нет товаров</a>
				</div>
			</div>
		</div>
		<div class="main-menu">
			<div class="container row">
				<ul class="menu horizontal-multilvl-menu col">
					<li class="menu-item"><a class="menu-link" href="#">строительство и ремонт</a></li>
					<li class="menu-item"><a class="menu-link" href="#">сад и огород</a></li>
					<li class="menu-item"><a class="menu-link" href="#">отдых и туризм</a></li>
					<li class="menu-item"><a class="menu-link" href="#">спецодежда</a></li>
					<li class="menu-item"><a class="menu-link" href="#">акции</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /если не 404 -->
	<div class="workarea-wrapper container">
		<!-- если не главная -->
		<div class="breadcrumbs">
			<a class="brdcmb-link" href="#">Главная</a> / 
			<a class="brdcmb-link" href="#">Строительство и ремонт</a> / 
			<a class="brdcmb-link" href="#">Инструменты</a> / 
			<span class="brdcmb-curpage">Электроинструменты</span>
		</div>
		<!-- /если не главная -->
		<!--div class="workarea"-->