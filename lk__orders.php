<?php include('header.php');?>
<div class="breadcrumbs">
	<a href="lk.php">Вернуться в личный кабинет</a>
</div>
<div class="workarea">
	<div class="page-title">Мои заказы</div>
	<div class="base-card no-h-padding">
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
	</div>
</div> <!-- /.workarea -->
<?php include('footer.php');?>