<?php include('header.php');?>
<div class="workarea">
	<div class="page-title">Вход</div>
	<div class="row">
		<div class="col l7">
			<div class="base-card error-box">
				<div class="title big-text">Ошибка</div>
				<div class="card-content no-g-padding">
					<p class="medium-text medium">Неверное имя пользователя или пароль.</p>
					<p class="medium-text">Проверьте правильность введенных данных:</p>
					<ul>
						<li>Возможно, у вас нажата клавиша Caps Lock?</li>
						<li>Или включена неправильная раскладка?</li>
						<li>Попробуйте набрать свой пароль в текстовом редакторе и скопировать в графу «Пароль»</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col l7">
			<div class="base-card authorize-form">
				<div class="title big-text">Войти, используя аккаунт</div>
				<div class="card-content">
					<div class="table-field">
						<label class="label">Электронная почта</label>
						<div class="field"><input type="email" /></div>
					</div>
					<div class="table-field">
						<label class="label">Пароль</label>
						<div class="field"><input type="password" /></div>
					</div>
					<div class="table-field">
						<div class="second-field">
							<a href="pass-rec.php">Забыли пароль?</a>
						</div>
					</div>
				</div>
			</div>
			<a href="#" class="btn primary big fullwidth">Войти</a>
		</div>
		<div class="col l4">
			<div class="base-card">
				<div class="card-content no-h-padding">Нет аккаунта? <a href="registration.php">Зарегистрируйтесь!</a></div>
			</div>
			<div class="base-card soc-login">
				<div class="title big-text">Войти через соц. сеть</div>
				<div class="card-content">
					<ul class="soc-list horizontal">
						<li class="soc-item"><a class="soc-link fb" href="#"><svg class="icon"><use xlink:href="#fb"/></svg></a></li>
						<li class="soc-item"><a class="soc-link vk" href="#"><svg class="icon"><use xlink:href="#vk"/></svg></a></li>
						<li class="soc-item"><a class="soc-link ok" href="#"><svg class="icon"><use xlink:href="#ok"/></svg></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div> <!-- /.workarea -->
<?php include('footer.php');?>