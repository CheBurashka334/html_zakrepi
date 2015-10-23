<?php include('header.php');?>
<div class="workarea">
	<div class="page-title">Оформление заказа</div>
	<div class="row"><div class="col l7">
		<p class="page-note-text">
			Обращаем ваше внимание, что все заказы обрабатываются и отправляются в будние дни до 17:00</br>
			Заказы, совершенные после, обрабатываются уже на следующий день.
		</p>
		<div class="base-card">
			<div class="title big-text">1. Контактные данные</div>
			<div class="card-content">
				<div class="inline-field">
					<label class="label">Фамилия</label>
					<div class="field">
						<input type="text" id="cont-family" />
						<label for="cont-family" class="textfield-placeholder">Укажите как в паспорте</label>
					</div>
				</div>
				<div class="inline-field">
					<label class="label">Имя</label>
					<div class="field">
						<input type="text" id="cont-name" />
						<label for="cont-name" class="textfield-placeholder">Укажите как в паспорте</label>
					</div>
				</div>
				<div class="inline-field">
					<label class="label">Номер телефона</label>
					<div class="field">
						<span class="tel-before">+7</span>
						<input type="tel" id="cont-tel" />
						<label for="cont-tel" class="textfield-placeholder">Например: 9222123456</label>
					</div>
				</div>
				<div class="inline-field">
					<label class="label">Электронная почта</label>
					<div class="field">
						<input type="email" id="cont-email" />
						<label for="cont-email" class="textfield-placeholder">В формате mymail@mail.ru</label>
					</div>
				</div>
			</div>
		</div>
		<div class="base-card">
			<div class="title big-text">2. Способ доставки</div>
			<div class="card-content">
				<p>
					<input type="radio" name="delivery" value="v1" id="delivery-v1"/>
					<label class="radio-lbl btn-toggle-block" data-hide-block=".delivery-address" for="delivery-v1">Самовывоз из магазина <span class="color-text text-light">по адресу ул. 50 лет Октября 8/1</span></label>
				</p>
				<p>
					<input type="radio" checked name="delivery" value="v2" id="delivery-v2"/>
					<label class="radio-lbl btn-toggle-block" data-show-block=".delivery-address" for="delivery-v2">Доставка курьером</label>
				</p>
				<div class="delivery-address new-addr">
					<div class="inline-field">
						<span class="label">Город / Поселок / Деревня</span>
						<div class="field">
							<input type="text" id="addr-city"/><label for="addr-city" class="textfield-placeholder">Например: Тюмень</label>
						</div>
					</div>
					<div class="inline-field">
						<span class="label">Улица </span>
						<div class="field">
							<input type="text" id="addr-street"/><label for="addr-street" class="textfield-placeholder">Например: Мельникайте</label>
						</div>
					</div>
					<div class="inline-field cols-3">
						<span class="label">Дом / Корпус / Квартира</span>
						<div class="field"><input type="text" id="addr-dom"/><label for="addr-dom" class="textfield-placeholder">Дом</label></div>/
						<div class="field"><input type="text" id="addr-korp"/><label for="addr-korp" class="textfield-placeholder">Корпус</label></div>/
						<div class="field"><input type="text" id="addr-kv"/><label for="addr-kv" class="textfield-placeholder">Квартира</label></div>
					</div>
				</div>
			</div>
		</div>
		<div class="base-card">
			<div class="title big-text">3. Способ оплаты</div>
			<div class="card-content">
				<p class="primary-text">Прямо сейчас</p>
				<p>
					<input type="radio" checked name="payment" value="v1" id="payment-v1"/>
					<label class="radio-lbl" for="payment-v1">Банковской картой 
					<img class="inline-img" src="images/psystems/visa.png"> 
					<img class="inline-img" src="images/psystems/master-card.png"></label>
				</p>
				<p>
					<input type="radio" name="payment" value="v2" id="payment-v2"/>
					<label class="radio-lbl" for="payment-v2">Электронными деньгами 
					<img class="inline-img" src="images/psystems/webmoney.png"> 
					<img class="inline-img" src="images/psystems/yadengi.png"></label>
				</p>
				<p class="primary-text mrg">При получении товара</p>
				<p>
					<input type="radio" name="payment" value="v3" id="payment-v3"/>
					<label class="radio-lbl" for="payment-v3">Наличными</label>
				</p>
				<p>
					<input type="radio" name="payment" value="v4" id="payment-v4"/>
					<label class="radio-lbl" for="payment-v4">Банковской картой
					<img class="inline-img" src="images/psystems/visa.png"> 
					<img class="inline-img" src="images/psystems/master-card.png"></label></label>
				</p>
			</div>
		</div>
		<div class="base-card total-sum-box">
			<div class="title big-text">4. Ваш заказ</div>
			<div class="card-content">
				<table class="nostyle">
					<tr><td>3 товара на сумму:</td><td class="sum" align="right">29 599 <span class="rouble">i</span></td></tr>
					<tr><td>Доставка:</td><td align="right">Бесплатно</td></tr>
					<tr><td>Всего к оплате:</td><td class="sum" align="right">29 599 <span class="rouble">i</span></td></tr>
				</table>
				<p class="color-text text-light">Нажимая кнопку «Оформить заказ», я автоматически соглашаюсь с условиями </br>
				<a href="#" class="text-primary">Договора оферты</a></p>
			</div>
		</div>
		<a href="#" class="btn primary big fullwidth btn-checkout">Оформить заказ</a>
	</div></div>
</div> <!-- /.workarea -->
<?php include('footer.php');?>