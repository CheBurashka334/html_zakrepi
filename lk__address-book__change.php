<?php include('header.php');?>
<div class="breadcrumbs">
	<a href="lk.php">Вернуться в адресную книгу</a>
</div>
<div class="workarea">
	<div class="page-title">Изменить адрес</div>
	<div class="row address-book">
		<div class="col l7">
			<div class="base-card address-form">
				<div class="table-field">
					<span class="label">Город / Поселок / Деревня</span>
					<div class="field">
						<input type="text" value="Ханты-Мансийск" id="addr-city"/><label for="addr-city" class="textfield-placeholder">Например: Тюмень</label>
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
					<div class="field"><input type="text" value="128" id="addr-dom"/><label for="addr-dom" class="textfield-placeholder">Дом</label></div>/
					<div class="field"><input type="text" id="addr-korp"/><label for="addr-korp" class="textfield-placeholder">Корпус</label></div>/
					<div class="field"><input type="text" value="180" id="addr-kv"/><label for="addr-kv" class="textfield-placeholder">Квартира</label></div>
				</div>
				<p class="def-addr">
					<input type="checkbox" value="v1" id="default-addr"/>
					<label class="checkbox-lbl" for="default-addr">Адрес по умолчанию</label>
				</p>
			</div>
			<a href="#" class="btn primary fullwidth big">Изменить адрес</a>
		</div>
	</div>
</div> <!-- /.workarea -->
<?php include('footer.php');?>