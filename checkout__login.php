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
				<div class="table-field">
					<label class="label">Фамилия</label>
					<div class="field"><input type="text" /></div>
				</div>
				<div class="table-field">
					<label class="label">Имя</label>
					<div class="field"><input type="text" /></div>
				</div>
				<div class="table-field">
					<label class="label">Номер телефона</label>
					<div class="field"><span class="tel-before">+7</span><input type="tel" /></div>
				</div>
				<div class="table-field">
					<label class="label">Электронная почта</label>
					<div class="field"><input type="email" /></div>
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
					<label class="radio-lbl btn-toggle-block" data-show-block=".delivery-address.loged-in" for="delivery-v2">Доставка курьером</label>
				</p>
				<div class="table-field delivery-address loged-in clearfix">
					<label class="label">Адрес доставки</label>
					<div class="select-box hide-on-large-only">
						<select id="del-addr" name="del-addr-sel">
							<option value="v1" selected>ул. Мельникайте, 100, кв. 120</option>
							<option value="v2">ул. Горпищекомбинатовская, 100А к.1/3</option>
						</select>
						<div class="triangle"></div>
					</div>
					<div class="dropdown-box hide-on-med-and-down">
						<div class="dropdown-value">
							<div class="item-text"></div>
							<div class="triangle"></div>
						</div>
						<ul class="dropdown-list select-synh hide-on-med-and-down" data-select="del-addr">
							<li class="dropdown-item" data-active="active">
								<input type="radio" class="dropdown-inp" name="del-addr" value="v1" id="del-addr-rad-v1" checked="checked" data-value-text="ул. Мельникайте, 100, кв. 120"/>
								<label class="dropdown-title" for="del-addr-rad-v1">
									<div class="item-text">ул. Мельникайте, 100, кв. 120</div>
								</label>
							</li>
							<li class="dropdown-item">
								<input type="radio" class="dropdown-inp" name="del-addr" value="v2" id="del-addr-rad-v2" checked="checked" data-value-text="ул. Горпищекомбинатовская, 100А к.1/3"/>
								<label class="dropdown-title" for="del-addr-rad-v2">
									<div class="item-text">ул. Горпищекомбинатовская, 100А к.1/3</div>
								</label>
							</li>
						</ul>
					</div>
					<div class="addr-actions right">
						<a class="btn-toggle-block" href="#" data-show-block=".delivery-address.change-addr" data-hide-block=".delivery-address.new-addr">Изменить адрес </a>
						<a class="btn-toggle-block" href="#" data-show-block=".delivery-address.new-addr" data-hide-block=".delivery-address.change-addr">Указать новый адрес</a>
					</div>
				</div>
				<div class="delivery-address change-addr hide">
					<div class="table-field">
						<span class="label">Город / Поселок / Деревня</span>
						<div class="field">
							<input type="text" value="Тюмень" id="addr-city"/><label for="addr-city" class="textfield-placeholder">Например: Тюмень</label>
						</div>
					</div>
					<div class="table-field">
						<span class="label">Улица </span>
						<div class="field">
							<input type="text" value="Мельникайте" id="addr-street"/><label for="addr-street" class="textfield-placeholder">Например: Мельникайте</label>
						</div>
					</div>
					<div class="table-field cols-3">
						<span class="label">Дом / Корпус / Квартира</span>
						<div class="field"><input type="text" value="100" id="addr-dom"/><label for="addr-dom" class="textfield-placeholder">Дом</label></div>/
						<div class="field"><input type="text" id="addr-korp"/><label for="addr-korp" class="textfield-placeholder">Корпус</label></div>/
						<div class="field"><input type="text" value="120" id="addr-kv"/><label for="addr-kv" class="textfield-placeholder">Квартира</label></div>
					</div>
				</div>
				<div class="delivery-address new-addr hide">
					<div class="table-field">
						<span class="label">Город / Поселок / Деревня</span>
						<div class="field">
							<input type="text" id="addr-city"/><label for="addr-city" class="textfield-placeholder">Например: Тюмень</label>
						</div>
					</div>
					<div class="table-field">
						<span class="label">Улица </span>
						<div class="field">
							<input type="text" id="addr-street"/><label for="addr-street" class="textfield-placeholder">Например: Мельникайте</label>
						</div>
					</div>
					<div class="table-field cols-3">
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