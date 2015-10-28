<?php include('header.php');?>
<div class="breadcrumbs">
	<a class="brdcmb-link" href="#">Главная</a> / 
	<a class="brdcmb-link" href="#">Бренды </a>
</div>
<div class="workarea" ng-controller="CatalogProductsCtrl">
	<div class="page-title">Bosch</div>
	<div class="row brand-info">
		<div class="col l3 brand-logo"><img src="images/content/brands/bosch-full.png"/></div>
		<div class="col l9 brand-text">
			<p>Всемирно известный бренд электроинструмента Bosch принадлежит немецкому концерну Robert Bosch GmbH. Под этой маркой также выпускается бытовая техника, запчасти и компоненты для автопрома, строительные системы. Вся продукция соответствует девизу компании — «Качество в каждой детали».</p>
			<p>Начало компании было положено в 1886 году, когда инженер Роберт Бош открыл частную мастерскую в Штутгарте. Уже в первые десятилетия фирма специализировалась на изготовлении электрооборудования. С 1930-х годов был налажен выпуск электроинструмента.</p>
		</div>
	</div>
	<div class="row">
		<div class="col l3">
			<ul class="menu sidebar-menu collapsible" data-collapsible="expandable">
				<li class="menu-item"><a href="#" class="menu-link primary-color">Популярные товары</a></li>
				<li class="menu-item">
					<div class="collapsible-header active">Электроинструмент</div>
					<div class="collapsible-body">
						<div class="collapsible-body-content">
							<a href="#" class="menu-link">Гайковерты</a>
							<a href="#" class="menu-link">Дрели</a>
							<a href="#" class="menu-link">Перфораторы</a>
						</div>
					</div>
				</li>
				<li class="menu-item">
					<div class="collapsible-header">Расходные материалы</div>
					<div class="collapsible-body">
						<div class="collapsible-body-content">
							<a href="#" class="menu-link">Круги и диски</a>
							<a href="#" class="menu-link">Для шлифования</a>
							<a href="#" class="menu-link">Биты, наборы бит</a>
						</div>
					</div>
				</li>
				<li class="menu-item"><a href="#" class="menu-link">Системы хранения</a></li>
				<li class="menu-item">
					<div class="collapsible-header">Метизы и крепежные изделия</div>
					<div class="collapsible-body">
						<div class="collapsible-body-content">
							<a href="#" class="menu-link">Метизы</a>
							<a href="#" class="menu-link">крепежные изделия</a>
						</div>
					</div>
				</li>
				<li class="menu-item">
					<div class="collapsible-header">Станки</div>
					<div class="collapsible-body">
						<div class="collapsible-body-content">
							<a href="#" class="menu-link">Заточные</a>
							<a href="#" class="menu-link">Сверлильные</a>
							<a href="#" class="menu-link">Токарные</a>
							<a href="#" class="menu-link">Рейсмусы</a>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="col l9 catalog no-padding" ng-controller="CatalogProductsCtrl">
			<div class="product-list clearfix">
				<div class="item col l3" ng-repeat="product in products | orderBy:sort:true">
					<div class="product-card">
						<div class="product-info">
							<a class="item-img" href="product__single.php" style="background-image:url({{product.image}});"></a>
							<div class="item-name"><a href="product__single.php">{{product.name}}</a></div>
							<div ng-class="'rating rate-'+product.rating">
								<svg class="star"><use xlink:href="#star"/></svg>
								<svg class="star"><use xlink:href="#star"/></svg>
								<svg class="star"><use xlink:href="#star"/></svg>
								<svg class="star"><use xlink:href="#star"/></svg>
								<svg class="star"><use xlink:href="#star"/></svg>
							</div>
							<div class="product-price">
								<div class="old-price" ng-if="product.oldprice">{{product.oldprice}} <i class="rouble">i</i></div>
								<!-- в цене тысячи отделить неразрывным пробелом &nbsp; -->
								<div class="price">{{product.price}} <i class="rouble">i</i></div>
							</div>
							<a href="#" class="shopping-card btn btn-icon primary">
								<svg class="icon"><use xlink:href="#cart"/></svg>
							</a>
						</div>
						<div class="compare">
							<input type="checkbox" id="compare_today_{{product.id}}" />
							<label class="checkbox-lbl" for="compare_today_{{product.id}}">Cравнить</label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> <!-- /.workarea -->
<?php include('footer.php');?>