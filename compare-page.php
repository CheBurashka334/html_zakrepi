<?php include('header.php');?>
<div class="workarea" ng-controller="CatalogProductsCtrl">
<div class="breadcrumbs">
	<a href="#">Вернуться в каталог</a>
</div>
<div class="page-title">Сравнение товаров</div>
<div class="compare">
	<div class="row compare-header">
		<div class="col l3 compare-actions">
			<button class="btn-link active">Все параметры</button>
			<button class="btn-link">Различия</button>
		</div>
		<div class="col compare-products">
			<div class="carousel">
				<div class="carousel-inner clearfix">
					<div class="item compare-item col l2" ng-repeat="product in products | orderBy: id">
						<div class="prod-img"><img ng-src="{{product.image}}"/></div>
						<div class="prod-name">
							<a href="product__single.php">{{product.name}}</a>
							<button class="btn btn-icon btn-compare-delete"><svg class="icon"><use xlink:href="#cross"/></svg></button>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-controlls">
				<button class="prev"><svg class="icon"><use xlink:href="#arrow"/></svg></button>
				<button class="next"><svg class="icon"><use xlink:href="#arrow"/></svg></button>
			</div>
		</div>
	</div>
	<div class="compare-body">
		<div class="row param-line price">
			<div class="col l3 param-name">Средняя цена</div>
			<div class="carousel col param-value">
				<div class="carousel-inner">
					<div class="item col l2" ng-repeat="product in products">{{product.price}} <span class="rouble">i</span></div>
				</div>
			</div>
		</div>
		<div class="row param-line" ng-repeat="param in params">
			<div class="col l3 param-name">{{param.name}}</div>
			<div class="carousel col l8 product-params">
				<div class="carousel-inner">
					<div class="item col l2" ng-repeat="product in products">{{product.params[param.id].value}}</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div> <!-- /.workarea -->
<?php include('footer.php');?>