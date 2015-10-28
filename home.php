<?php include('header.php');?>
<div class="workarea" ng-controller="CatalogProductsCtrl">
<!-- 
	jcarousel http://sorgalla.com/jcarousel/docs/
	+ по ТЗ добавлены атрибуты: 
		data-target - количество прокручиваемых элементов, по умолчанию 1
		data-interval - интревал автоскролла в мс, по умолчанию 3000
-->
<div class="carousel home-carousel row" data-jcarouselautoscroll="true" data-wrap="circular">
	<div class="carousel-inner clearfix">
		<div class="item col l12">
			<a href="#" class="item-link img-link"><img class="item-img" src="images/content/slides/niva.jpg" /></a>
		</div>
		<div class="item col l12">
			<a href="#" class="item-link img-link"><img class="item-img" src="images/content/slides/bosch.jpg" /></a>
		</div>
	</div>
	<ul class="carousel-nav"></ul>
</div>
<div class="brand-box">
	<ul class="brand-list">
		<li class="brand-item">
			<a href="#" class="brand-link img-link"><img class="brand-img" src="images/content/brands/bosch.png" /></a> 
		</li>
		<li class="brand-item">
			<a href="#" class="brand-link img-link"><img class="brand-img" src="images/content/brands/dewalt.png" /></a> 
		</li>
		<li class="brand-item">
			<a href="#" class="brand-link img-link"><img class="brand-img" src="images/content/brands/makita.png" /></a> 
		</li>
		<li class="brand-item">
			<a href="#" class="brand-link img-link"><img class="brand-img" src="images/content/brands/kovea.png" /></a> 
		</li>
		<li class="brand-item">
			<a href="#" class="brand-link img-link"><img class="brand-img" src="images/content/brands/metabo.png" /></a> 
		</li>
		<li class="brand-item">
			<a href="#" class="brand-link img-link"><img class="brand-img" src="images/content/brands/hitachi.png" /></a> 
		</li>
		<li class="brand-item">
			<a href="#" class="brand-link img-link"><img class="brand-img" src="images/content/brands/aeg.png" /></a> 
		</li>
		<li class="brand-item">
			<a href="brands.php" class="brand-link">Все бренды</a> 
		</li>
	</ul>
</div>
<div class="banner-box row">
	<div class="col l6">
		<div class="banner big"><a href="#" class="img-link"><img src="images/content/banners/tourism.jpg" class="banner-img"/></a></div>
	</div>
	<div class="col l3">
		<div class="banner small"><a href="#" class="img-link"><img src="images/content/banners/snow.jpg" class="banner-img"/></a></div>
		<div class="banner small"><a href="#" class="img-link"><img src="images/content/banners/fish.jpg" class="banner-img"/></a></div>
	</div>
	<div class="col l3">
		<div class="banner big"><a href="#" class="img-link"><img src="images/content/banners/hunt.jpg" class="banner-img"/></a></div>
	</div>
	<div class="col l3">
		<div class="banner big"><a href="#" class="img-link"><img src="images/content/banners/clothes.jpg" class="banner-img"/></a></div>
	</div>
	<div class="col l3">
		<div class="banner small"><a href="#" class="img-link"><img src="images/content/banners/dacha.jpg" class="banner-img"/></a></div>
		<div class="banner small"><a href="#" class="img-link"><img src="images/content/banners/benzopila.jpg" class="banner-img"/></a></div>
	</div>
	<div class="col l6">
		<div class="banner big"><a href="#" class="img-link"><img src="images/content/banners/electro.jpg" class="banner-img"/></a></div>
	</div>
</div>
<div class="box-title">Хиты продаж</div>
<div class="product-carousel carousel-box">
	<div class="carousel row" data-jcarouselautoscroll="true" data-target="+=4" data-wrap="circular" data-interval="5000">
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
		<button class="prev" data-target="-=4"><svg class="icon"><use xlink:href="#arrow"/></svg></button>
		<button class="next" data-target="+=4"><svg class="icon"><use xlink:href="#arrow"/></svg></button>
	</div>
</div>
<div class="box-title">Новинки</div>
<div class="product-carousel carousel-box">
	<div class="carousel row" data-jcarouselautoscroll="true" data-target="+=4" data-wrap="circular" data-interval="6000">
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
		<button class="prev" data-target="-=4"><svg class="icon"><use xlink:href="#arrow"/></svg></button>
		<button class="next" data-target="+=4"><svg class="icon"><use xlink:href="#arrow"/></svg></button>
	</div>
</div>
</div> <!-- /.workarea -->
<?php include('footer.php');?>