<?php include('header.php');?>
<div class="workarea">
	<div class="page-title">Регистрация</div>
	<div class="row">
		<div class="col l7">
			<div class="base-card register-form">
				<div class="title big-text">Я регистрируюсь как:</div>
				<div class="card-content">
					<div class="table-field">
						<p class="first-field">
							<input type="radio" checked name="usertype" value="v1" id="usertype-v1"/>
							<label class="radio-lbl btn-toggle-block" data-hide-block=".ul-field" data-show-block=".fl-field" for="usertype-v1">Физическое лицо</label>
						</p>
						<p class="field">
							<input type="radio" name="usertype" value="v2" id="usertype-v2"/>
							<label class="radio-lbl btn-toggle-block" data-hide-block=".fl-field" data-show-block=".ul-field" for="usertype-v2">Юридическое лицо</label>
						</p>
					</div>
					<div class="table-field fl-field">
						<label class="label">Фамилия</label>
						<div class="field"><input type="text" /></div>
					</div>
					<div class="table-field fl-field">
						<label class="label">Имя</label>
						<div class="field"><input type="text" /></div>
					</div>
					<div class="table-field ul-field hide">
						<label class="label">Назв. организации / ИП</label>
						<div class="field"><input type="text" /></div>
					</div>
					<div class="table-field ul-field hide">
						<p class="first-field">
							<input type="radio" name="comptype" value="v1" id="comptype-v1"/>
							<label class="radio-lbl" for="comptype-v1">Организация</label>
						</p>
						<p class="field">
							<input type="radio" checked name="comptype" value="v2" id="comptype-v2"/>
							<label class="radio-lbl" for="comptype-v2">ИП</label>
						</p>
					</div>
					<div class="table-field ul-field hide">
						<label class="label">Контактное лицо</label>
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
					<div class="table-field ul-field hide">
						<label class="label">Юридический адрес</label>
						<div class="field"><input type="text" /></div>
					</div>
					<div class="table-field cols-2 ul-field hide">
						<span class="label">Банк / Расчетный счет</span>
						<div class="field"><input type="text" id="bank"/><label for="bank" class="textfield-placeholder">Банк</label></div>/
						<div class="field"><input type="text" id="rs"/><label for="rs" class="textfield-placeholder">Расчетный счет</label></div>
					</div>
					<div class="table-field cols-2 ul-field hide">
						<span class="label">Кор. счет / ИНН</span>
						<div class="field"><input type="text" id="ks"/><label for="ks" class="textfield-placeholder">Кор. счет</label></div>/
						<div class="field"><input type="text" id="inn"/><label for="inn" class="textfield-placeholder">ИНН</label></div>
					</div>
					<div class="table-field cols-2 ul-field hide">
						<span class="label">КПП / БИК банка</span>
						<div class="field"><input type="text" id="kpp"/><label for="kpp" class="textfield-placeholder">КПП</label></div>/
						<div class="field"><input type="text" id="bik"/><label for="bik" class="textfield-placeholder">БИК банка</label></div>
					</div>
					<div class="table-field cols-2 ul-field hide">
						<span class="label">ОКДП / ОКПО</span>
						<div class="field"><input type="text" id="okdp"/><label for="okdp" class="textfield-placeholder">ОКДП</label></div>/
						<div class="field"><input type="text" id="okpo"/><label for="okpo" class="textfield-placeholder">ОКПО</label></div>
					</div>
					<div class="table-field cols-2 ul-field hide">
						<span class="label">ОКОНХ / Сайт орг.</span>
						<div class="field"><input type="text" id="okonh"/><label for="okonh" class="textfield-placeholder">ОКОНХ</label></div>/
						<div class="field"><input type="text" id="site"/><label for="site" class="textfield-placeholder">Сайт организации</label></div>
					</div>
					<div class="table-field">
						<label class="label">Ваш пароль</label>
						<div class="field"><input type="password" /></div>
					</div>
					<div class="table-field">
						<label class="label">Повторите пароль</label>
						<div class="field"><input type="password" /></div>
					</div>
					<p class="color-text text-light">Нажимая кнопку «Зарегистрироваться», я даю свое согласие на обработку персональных данных в соответствии с <a href="#" class="text-primary">Политикой конфеденциальности</a></p>
				</div>
			</div>
			<a href="#" class="btn primary big fullwidth">Зарегистрироваться</a>
		</div>
	</div>
</div> <!-- /.workarea -->
<?php include('footer.php');?>