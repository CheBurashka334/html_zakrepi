<?php include('header.php');?>
<div class="breadcrumbs">
	<a href="lk.php">Вернуться в личный кабинет</a>
</div>
<div class="workarea">
	<div class="page-title">Изменение рассылки новостей</div>
	<div class="row">
		<div class="col l7">
			<div class="base-card subs-form">
				<div class="title big-text">Укажите варианты новостей, которые вы хотите получать</div>
				<div class="card-content">
					<p class="">
						<input type="checkbox" value="v1" id="subs-v1"/>
						<label class="checkbox-lbl" for="subs-v1">Новости компании</label>
					</p>
					<p class="">
						<input type="checkbox" value="v2" id="subs-v2"/>
						<label class="checkbox-lbl" for="subs-v2">Акции компании</label>
					</p>
				</div>
			</div>
			<a href="#" class="btn primary fullwidth big">Сохранить изменения</a>
		</div>
	</div>
</div> <!-- /.workarea -->
<?php include('footer.php');?>