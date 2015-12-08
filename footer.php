		<!--/div> <!-- /.workarea -->
	</div><!-- /.workarea-wrapper -->
	<div class="footer-wrapper">
		<div class="subscribe-box">
			<div class="container row">
				<div class="sbscr-text col l6">Подпишись на новости, скидки и акции компании</div>
				<div class="sbscr-form col l6 no-padding">
					<div class="col l4">
						<input type="email" class="inputtext" id="sbscr-field"/>
						<label for="sbscr-field" class="textfield-placeholder">Введите свой email</label>
					</div>
					<div class="col l2">
						<input type="submit" class="btn primary fullwidth" value="Подписаться"/>
					</div>
				</div>
			</div>
		</div>
		<div class="footer container row">
			<div class="footer-menu col l3">
				<div class="menu-title box-title">Компания</div>
				<ul class="menu vertical-menu">
					<li class="menu-item"><a class="menu-link" href="history.php">История компании</a></li>
					<li class="menu-item"><a class="menu-link" href="structura-companii.php">Структура компании</a></li>
					<li class="menu-item"><a class="menu-link" href="news.php">Новости компании</a></li>
					<li class="menu-item"><a class="menu-link" href="vakansii.php">Вакансии</a></li>
					<li class="menu-item"><a class="menu-link" href="#">Франшиза</a></li>
					<li class="menu-item"><a class="menu-link" href="shops.php">Наши магазины</a></li>
					<li class="menu-item"><a class="menu-link" href="#">Контакты</a></li>
				</ul>
			</div>
			<div class="footer-menu col l3">
				<div class="menu-title box-title">Покупателю</div>
				<ul class="menu vertical-menu">
					<li class="menu-item"><a class="menu-link" href="actsii.php">Акции</a></li>
					<li class="menu-item"><a class="menu-link" href="#">Помощь в выборе товара</a></li>
					<li class="menu-item"><a class="menu-link" href="#">Тест-драйв</a></li>
					<li class="menu-item"><a class="menu-link" href="#">Сервисный центр</a></li>
					<li class="menu-item"><a class="menu-link" href="brands.php">Бренды</a></li>
					<li class="menu-item"><a class="menu-link" href="#">Крепыж-бонус</a></li>
					<li class="menu-item"><a class="menu-link" href="#">Подарочные сертификаты</a></li>
					<li class="menu-item"><a class="menu-link" href="#">Центр поддержки пенсионеров-садоводов</a></li>
				</ul>
			</div>
			<div class="footer-menu col l3">
				<div class="menu-title box-title">Информация</div>
				<ul class="menu vertical-menu">
					<li class="menu-item"><a class="menu-link" href="oplata-dostavka.php">Оплата и доставка</a></li>
					<li class="menu-item"><a class="menu-link" href="garanties.php">Гарантия и возврат</a></li>
					<li class="menu-item"><a class="menu-link" href="#">Политика конфиденциальности</a></li>
					<li class="menu-item"><a class="menu-link" href="#">Договор-оферта</a></li>
				</ul>
			</div>
			<div class="contact-box col l3">
				<div class="phone-box">
					<div class="box-title">Обратная связь</div>
					<a href="callto:+78043334140" class="nostyle phone-link xbig-text">8-804-333-41-40</a><br/>
					<span class="small light-color small-text">Звонок по России бесплатный</span>
				</div>
				<div class="schedule-box">
					<div class="box-title">Режим работы</div>
					<p>Будние дни: с 8:00 до 20:00</p>
					<p>Суббота: с 8:00 до 20:00</p>
					<p>Воскресенье: с 9:00 до 19:00</p>
				</div>
				<div class="soc-box">
					<ul class="soc-list horizontal">
						<li class="soc-item"><a class="soc-link fb" href="#"><svg class="icon"><use xlink:href="#fb"/></svg></a></li>
						<li class="soc-item"><a class="soc-link vk" href="#"><svg class="icon"><use xlink:href="#vk"/></svg></a></li>
						<li class="soc-item"><a class="soc-link ok" href="#"><svg class="icon"><use xlink:href="#ok"/></svg></a></li>
						<li class="soc-item"><a class="soc-link yt" href="#"><svg class="icon"><use xlink:href="#youtube"/></svg></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="bottombar">
			<div class="container row">
				<div class="col l6">© Крепыж, 2004 — 2015</div>
				<div class="col l6 right-align"><a href="#" class="img-link"><img src="images/logo-legacy.png" /></a></div>
			</div>
		</div>
	</div>
</div> <!-- /.page -->
</div> <!-- /.layout -->
<div class="dark-bg"></div>
<div class="modal geo-modal" id="geo">
	<button class="btn btn-icon btn-close btn-close-modal"><svg class="icon"><use xlink:href="#cross"/></svg></button>
	<div class="modal-content" ng-controller="geoCtrl">
		<div class="title">Выбор города</div>
		<div class="geo-search-box search-box">
			<input type="text" class="search inputtext" id="h-search" ng-model="geosearch.name">
			<label for="h-search" class="textfield-placeholder">Введите название для поиска</label>
			<button class="search-btn btn btn-icon"><svg class="icon"><use xlink:href="#search"></use></svg></button>
		</div>
		<ul class="geo-list">
			<li class="geo-item" ng-repeat="city in cities | filter:geosearch">
				<a class="item-name" href="#">{{city.name}}</a>, <span class="item-region color-text text-light">{{city.region}}</span>
			</li>
		</ul>
	</div>
</div>
</body>
</html>