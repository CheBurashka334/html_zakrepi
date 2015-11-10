<?php include('header.php');?>
<div class="workarea">
	<div class="page-title">Личный кабинет</div>
	<p class="page-note-text">Здравствуйте, Константин, добро пожаловать в ваш личный кабинет!</p>
	<div class="base-card">
		<div class="title big-text">Последние заказы в интернет-магазине</div>
		<div class="orders-table flex-table center-align row">
			<div class="table-row table-header">
				<div class="col l2">Дата заказа</div>
				<div class="col l2">Номер заказа</div>
				<div class="col l3">Статус</div>
				<div class="col l2">Стоимость</div>
			</div>
			<div class="table-row">
				<div class="col l2">01.10.2015</div>
				<div class="col l2">150000123</div>
				<div class="col l3">Принят</div>
				<div class="col l2">8 599 <span class="rouble">i</span></div>
				<div class="col l3"><a href="lk__orders__single.php">Посмотреть детали</a></div>
			</div>
			<div class="table-row">
				<div class="col l2">02.09.2015</div>
				<div class="col l2">150000122</div>
				<div class="col l3">Доставляется</div>
				<div class="col l2">10 599 <span class="rouble">i</span></div>
				<div class="col l3"><a href="lk__orders__single.php">Посмотреть детали</a></div>
			</div>
			<div class="table-row">
				<div class="col l2">27.08.2015</div>
				<div class="col l2">150000121</div>
				<div class="col l3">Выполнен</div>
				<div class="col l2">5 599 <span class="rouble">i</span></div>
				<div class="col l3"><a href="lk__orders__single.php">Посмотреть детали</a></div>
			</div>
			<div class="table-row">
				<div class="col l2">17.08.2015</div>
				<div class="col l2">150000119</div>
				<div class="col l3">Отменен</div>
				<div class="col l2">27 599 <span class="rouble">i</span></div>
				<div class="col l3"><a href="lk__orders__single.php">Посмотреть детали</a></div>
			</div>
		</div>
		<a href="lk__orders.php" class="btn primary center">Посмотреть все заказы</a>
	</div>
	<div class="row h-boxes lk-boxes">
		<div class="col l4">
			<div class="base-card">
				<div class="title big-text">Личные данные</div>
				<div class="card-content no-g-padding">
					<p class="medium-text">Константин Константинопольский</p>
					<p>konstantin@gmail.com</p>
					<p>+7 (922) 123-45-67</p>
				</div>
				<div class="link-box">
					<p><a href="lk__change-ld.php">Изменить личные данные</a></p>
					<p><a href="lk__change-pas.php">Изменить пароль</a></p>
				</div>
			</div>
		</div>
		<div class="col l4">
			<div class="base-card">
				<div class="title big-text">Адресная книга</div>
				<div class="card-content no-g-padding">
					<p class="color-text text-light">Адрес по умолчанию</p>
					<p class="medium-text">г. Ханты-Мансийск, ул. Мельникайте 128, кв. 180</p>
				</div>
				<div class="link-box">
					<p><a href="lk__address-book.php">Изменить адрес по умолчанию</a></p>
					<p><a href="lk__address-book__new.php">Добавить новый адрес</a></p>
				</div>
			</div>
		</div>
		<!-- физ. лица не подписаны
		<div class="col l4">
			<div class="base-card">
				<div class="title big-text">Рассылка новостей</div>
				<div class="card-content no-g-padding">
					<p class="medium-text">Вы не подписаны ни на одну рассылку новостей</p>
				</div>
				<div class="link-box">
					<p><a href="lk__change-subs.php">Настроить рассылку</a></p>
				</div>
			</div>
		</div> -->
		<!-- физ. лица подписаны -->
		<div class="col l4">
			<div class="base-card">
				<div class="title big-text">Рассылка новостей</div>
				<div class="card-content no-g-padding">
					<p class="medium-text">Вы подписаны на рассылку:</p>
					<ul>
						<li>Подписка на новости</li>
						<li>Подписка на спецпредложения недели</li>
					</ul>
				</div>
				<div class="link-box">
					<p><a href="lk__change-subs.php">Настроить рассылку</a></p>
				</div>
			</div>
		</div>
		<!-- юр. лица 
		<div class="col l4">
			<div class="base-card">
				<div class="title big-text">Ваш менеджер</div>
				<div class="card-content no-g-padding">
					<p class="medium-text">Екатерина Иванова</p>
					<p><a href="mailto:#">e.ivanova@zakrepi.ru</a></p>
					<p>+7 (922) 123-45-67</p>
				</div>
			</div>
		</div>-->
		<!-- не привязаны -->
		<div class="col l4">
			<div class="base-card">
				<div class="title big-text">Привязанные аккаунты</div>
				<div class="card-content no-g-padding">
					<p class="medium-text">Нет привязанных аккаунтов</p>
				</div>
				<div class="link-box">
					<span class="color-text text-light note left">Связать соц. сети</span>
					<ul class="soc-list horizontal">
						<li class="soc-item"><a class="soc-link vk" href="#"><svg class="icon"><use xlink:href="#vk"/></svg></a></li>
						<li class="soc-item"><a class="soc-link fb" href="#"><svg class="icon"><use xlink:href="#fb"/></svg></a></li>
						<li class="soc-item"><a class="soc-link ok" href="#"><svg class="icon"><use xlink:href="#ok"/></svg></a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- один аккаунт -->
		<div class="col l4">
			<div class="base-card">
				<div class="title big-text">Привязанные аккаунты</div>
				<div class="card-content no-g-padding">
					<div class="account clearfix">
						<div class="soc-item left"><a class="soc-link vk" href="#"><svg class="icon"><use xlink:href="#vk"/></svg></a></div>
						<div class="account-info">
							<div class="item-name medium-text">Konstantin Konstantinopolskii</div>
							<a href="#" class="small-text color-text text-light">Отвязать аккаунт</a>
						</div>
					</div>
				</div>
				<div class="link-box">
					<span class="color-text text-light note left">Связать соц. сети</span>
					<ul class="soc-list horizontal">
						<li class="soc-item"><a class="soc-link fb" href="#"><svg class="icon"><use xlink:href="#fb"/></svg></a></li>
						<li class="soc-item"><a class="soc-link ok" href="#"><svg class="icon"><use xlink:href="#ok"/></svg></a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- несколько аккаунтов -->
		<div class="col l4">
			<div class="base-card">
				<div class="title big-text">Привязанные аккаунты</div>
				<div class="card-content no-g-padding">
					<div class="account clearfix">
						<div class="soc-item left"><a class="soc-link vk" href="#"><svg class="icon"><use xlink:href="#vk"/></svg></a></div>
						<div class="account-info">
							<div class="item-name medium-text">Konstantin Konstantinopolskii</div>
							<a href="#" class="small-text color-text text-light">Отвязать аккаунт</a>
						</div>
					</div>
					<div class="account clearfix">
						<div class="soc-item left"><a class="soc-link fb" href="#"><svg class="icon"><use xlink:href="#fb"/></svg></a></div>
						<div class="account-info">
							<div class="item-name medium-text">Konstantin Konstantinopolskii</div>
							<a href="#" class="small-text color-text text-light">Отвязать аккаунт</a>
						</div>
					</div>
				</div>
				<div class="link-box">
					<span class="color-text text-light note left">Связать соц. сети</span>
					<ul class="soc-list horizontal">
						<li class="soc-item"><a class="soc-link ok" href="#"><svg class="icon"><use xlink:href="#ok"/></svg></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div> <!-- /.workarea -->
<?php include('footer.php');?>