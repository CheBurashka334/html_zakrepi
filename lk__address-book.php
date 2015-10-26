<?php include('header.php');?>
<div class="breadcrumbs">
	<a href="lk.php">Вернуться в личный кабинет</a>
</div>
<div class="workarea">
	<div class="page-title">Адресная книга</div>
	<div class="row h-boxes address-book lk-boxes">
		<div class="col l4 address-item">
			<div class="base-card">
				<div class="card-content no-g-padding">
					<p class="color-text text-light">Адрес по умолчанию</p>
					<p class="medium-text">г. Ханты-Мансийск, ул. Мельникайте 128, кв. 180</p>
				</div>
				<div class="link-box">
					<a href="#">Изменить адрес</a>
				</div>
			</div>
		</div>
		<div class="col l4 address-item">
			<div class="base-card">
				<div class="card-content no-g-padding">
					<p><button class="btn btn-icon btn-delete-addr"><svg class="icon"><use xlink:href="#cross"/></svg></button></p>
					<p class="medium-text">г. Ханты-Мансийск, ул. Мельникайте 128, кв. 180</p>
				</div>
				<div class="link-box clearfix">
					<a href="#" class="left">Изменить адрес</a>
					<a href="#" class="right">Сделать по умолчанию</a>
				</div>
			</div>
		</div>
		<div class="col l4 address-item">
			<div class="base-card">
				<div class="card-content no-g-padding">
					<p><button class="btn btn-icon btn-delete-addr"><svg class="icon"><use xlink:href="#cross"/></svg></button></p>
					<p class="medium-text">г. Ханты-Мансийск, ул. Мельникайте 128, кв. 180</p>
				</div>
				<div class="link-box clearfix">
					<a href="#" class="left">Изменить адрес</a>
					<a href="#" class="right">Сделать по умолчанию</a>
				</div>
			</div>
		</div>
		<div class="col l4">
			<div class="base-card v-center">
				<a href="lk__address-book__new.php">Добавить новый адрес</a>
			</div>
		</div>
	</div>
</div> <!-- /.workarea -->
<?php include('footer.php');?>