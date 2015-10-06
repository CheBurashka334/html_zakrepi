<?php include('header.php');?>
<div class="workarea" ng-controller="CatalogProductsCtrl">
<div class="page-title">Гайковерты</div>
<div class="row">
	<div class="sort-box col l9">
		<span class="sort-text">Сортировать по:</span>
		<input type="radio" class="hide sort-ctrl" name="sort" id="sort-reviews" ng-model="sort" value="reviews" ng-init="sort = 'reviews'"/>
		<label class="sort-item" for="sort-reviews">популярности</label>
		<input type="radio" class="hide sort-ctrl" name="sort" id="sort-price" ng-model="sort" value="price"/>
		<label class="sort-item" for="sort-price">цене</label>
		<input type="radio" class="hide sort-ctrl" name="sort" id="sort-id" ng-model="sort" value="id"/>
		<label class="sort-item" for="sort-id">новизне</label>
		<input type="radio" class="hide sort-ctrl" name="sort" id="sort-rating" ng-model="sort" value="rating"/>
		<label class="sort-item" for="sort-rating">рейтингу</label>
	</div>
	<div class="compare-box col l3">
		<span class="compare-text">Нет товаров к сравнению</span>
	</div>
</div>
<div class="row">
	<div class="filter-box col l3">
		<?php include('filter.php');?>
	</div>
	<div class="catalog col l9 no-padding">
		<div class="product-list clearfix">
			<div class="item col l3" ng-repeat="product in products | orderBy:sort:true">
				<div class="product-card">
					<div class="product-info">
						<a class="item-img" href="#" style="background-image:url({{product.image}});"></a>
						<div class="item-name"><a href="#">{{product.name}}</a></div>
						<div ng-class="'rating rate-'+product.rating">
							<svg class="star"><use xlink:href="#star"/></svg>
							<svg class="star"><use xlink:href="#star"/></svg>
							<svg class="star"><use xlink:href="#star"/></svg>
							<svg class="star"><use xlink:href="#star"/></svg>
							<svg class="star"><use xlink:href="#star"/></svg>
						</div>
						<div class="product-price">
							<div class="old-price" ng-if="product.oldprice">{{product.oldprice}} <i class="rouble">i</i></div>
							<div class="price">{{product.price}} <i class="rouble">i</i></div>
						</div>
						<a href="#" class="shopping-card btn btn-icon primary">
							<svg class="icon"><use xlink:href="#cart"/>
						</a>
					</div>
					<div class="compare">
						<input type="checkbox" id="compare_today_{{product.id}}" />
						<label class="checkbox-lbl" for="compare_today_{{product.id}}">Cравнить</label>
					</div>
				</div>
			</div>
		</div>
		<?php include('pagination.php');?>
		<div class="text-box">
			<p>Гайковертом называется инструмент, предназначенный для сборки/разборки различных резьбовых соединений. Его используют в случаях, когда невозможно обойтись простым гаечным ключом: к примеру, когда необходимо разобрать труднодоступные соединения, заржавевший металл, прикипевшие гайки и т.п. </p>
			<p>В отличие от ручного инструмента, электрический гайковёрт позволяет существенно снизить затрачиваемые усилия и сократить время выполнения работ. Еще одним неоспоримым преимуществом является контролируемый момент при затяжке или отворачивании резьбовых соединений. Это позволяет обеспечить максимальную точность выполняемых работ.</p>
		</div>
	</div>
</div>
</div> <!-- /.workarea -->
<?php include('footer.php');?>