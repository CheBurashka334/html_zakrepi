<?php include('header.php');?>
<div class="breadcrumbs">
	<a class="brdcmb-link" href="#">Главная</a> / 
	<a class="brdcmb-link" href="#">Акции</a>
</div>
<div class="workarea">
<div class="page-title">Скидка 40% на электроинструменты</div>
<div class="action-single">
	<div class="date color-text text-light">25 сентября 2015</div>
	<div class="item-img"><img src="images/content/actions/action-full.jpg"/></div>
	<div class="row">
		<div class="col l9 center item-text">
			<p>Компания BOSCH, несмотря на свою длинную историю всегда являлась прогрессивной. Об этом говорит инновационность производимого оборудования и гибкая система скидок, поощрений, специальных предложений и проведения всевозможных акций. Все акции проводимые компанией BOSCH по всему миру, также, доступны в Тюмени, нашим покупателям!</p>
		</div>
		<div class="product-list col l9 center clearfix no-padding" ng-controller="CatalogProductsCtrl">
			<div class="item col l3" ng-repeat="product in products | orderBy:id" ng-if="product.oldprice">
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
</div>
</div> <!-- /.workarea -->
<?php include('footer.php');?>