<?php include('header.php');?>
<div class="workarea" ng-controller="CatalogProductsCtrl">
<div class="box-title">Хиты продаж</div>
<div class="product-carousel carousel-box">
	<div class="carousel row">
		<div class="carousel-inner product-list clearfix">
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
	</div>
	<div class="carousel-controlls">
		<button class="prev"><svg class="icon"><use xlink:href="#arrow"/></svg></button>
		<button class="next"><svg class="icon"><use xlink:href="#arrow"/></svg></button>
	</div>
</div>
<div class="box-title">Новинки</div>
<div class="product-carousel carousel-box">
	<div class="carousel row">
		<div class="carousel-inner product-list clearfix">
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
	</div>
	<div class="carousel-controlls">
		<button class="prev"><svg class="icon"><use xlink:href="#arrow"/></svg></button>
		<button class="next"><svg class="icon"><use xlink:href="#arrow"/></svg></button>
	</div>
</div>
</div> <!-- /.workarea -->
<?php include('footer.php');?>