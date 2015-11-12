<?php include('header.php');?>
<div class="workarea" ng-controller="CatalogProductsCtrl">
<div class="row page-title-basket">
	<div class="page-title col l10">Корзина</div>
	<div class="col l2 right-align"><button class="btn-link btn-clear-basket btn-modal" data-modal="delete-from-card-box_all">Очистить корзину</button></div>
</div>
<div class="base-card">
	Бесплатная доставка курьером по г. Тюмень на заказы свыше 10 000 <span class="rouble">i</span>
	<!-- eсли заказ меньше 10000 -->
	<!--, для ее получения, добавьте в корзину товаров на сумму <span class="primary-text">(10000 минус сумма заказа) <span class="rouble">i</span></span>  -->
</div>
<div class="row col">
	<div class="base-card basket-table flex-table no-padding">
		<div class="table-row table-header">
			<div class="col l6">Товар</div>
			<div class="col l2">Количество</div>
			<div class="col l3">Стоимость</div>
		</div>
		<div class="table-body">
			<div class="table-row product-item">
				<div class="col l2 product-img">
					<img src="images/content/products/cataloge-product-2.jpg"/>
				</div>
				<div class="col l4 product-name">Гайковерт ударный Makita 6951</div>
				<div class="col l2 quantity">
					<div class="quantity-field">
						<input type="text" class="quantity-value" value="2" size="1"/>
						<button class="btn-up"></button>
						<button class="btn-down"></button>
					</div>
				</div>
				<div class="col l3 sum">8 599 <span class="rouble">i</span></div>
				<div class="col l1 delete">
					<button class="btn btn-icon btn-delete-from-card btn-modal" data-modal="delete-from-card-box_product-1"><svg class="icon"><use xlink:href="#cross"/></svg></button>
					<div class="modal delete-from-card-box center-align" id="delete-from-card-box_product-1">
						<div class="item-text">Вы точно хотите удалить этот товар из корзины?</div>
						<div class="item-actions">
							<button class="btn primary">Да</button><!-- кнопка удаления товара, можно ссылкой -->
							<button class="btn standart-color btn-close-modal">Отмена</button>
						</div>
					</div>
				</div>
			</div>
			<div class="table-row product-item">
				<div class="col l2 product-img">
					<img src="images/content/products/product-moika.jpg"/>
				</div>
				<div class="col l4 product-name">Мойка высокого давления STIHL RE98 110 бар 1,7 кВт</div>
				<div class="col l2 quantity">
					<div class="quantity-field">
						<input type="text" class="quantity-value" value="1" size="1"/>
						<button class="btn-up"></button>
						<button class="btn-down" disabled></button>
					</div>
				</div>
				<div class="col l3 sum">20 599 <span class="rouble">i</span></div>
				<div class="col l1 delete">
					<button class="btn btn-icon btn-delete-from-card btn-modal" data-modal="delete-from-card-box_product-2"><svg class="icon"><use xlink:href="#cross"/></svg></button>
					<div class="modal delete-from-card-box center-align" id="delete-from-card-box_product-2">
						<div class="item-text">Вы точно хотите удалить этот товар из корзины?</div>
						<div class="item-actions">
							<button class="btn primary">Да</button><!-- кнопка удаления товара, можно ссылкой -->
							<button class="btn standart-color btn-close-modal">Отмена</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal delete-from-card-box delete-all center-align" id="delete-from-card-box_all">
		<div class="item-text">Вы точно хотите удалить все товары из корзины?</div>
		<div class="item-actions">
			<button class="btn primary">Да</button><!-- кнопка удаления товаров, можно ссылкой -->
			<button class="btn standart-color btn-close-modal">Отмена</button>
		</div>
	</div>
</div>
<div class="row">
	<div class="col l3">
		<div class="promo-code-box base-card">Есть промокод?  <a href="#" class="btn-toggle-block" data-block=".promo-code-box">Активируйте!</a></div>
		<div class="promo-code-box base-card hide">Введите промокод
			<div class="promocode-field">
				<input type="text"/><button class="btn btn-icon primary small"><svg class="icon"><use xlink:href="#arr"/></svg></button>
			</div>
		</div>
	</div>
	<div class="col l4 right total-sum-box">
		<div class="base-card">
			<div class="big-text title">Стоимость товаров</div>
			<table class="nostyle">
				<tr><td>Стоимость без скидки:</td><td class="sum" align="right">29 599 <span class="rouble">i</span></td></tr>
				<tr><td>Скидка:</td><td class="sum" align="right">0 <span class="rouble">i</span></td></tr>
				<tr>
					<td>
						К оплате:
						<!-- eсли заказ меньше 10000 -->
						<!-- Итого, без учета доставки -->
					</td>
					<td class="sum" align="right">29 599 <span class="rouble">i</span></td>
				</tr>
			</table>
		</div>
		<a class="btn primary fullwidth big btn-checkout" href="#">Оформить заказ</a>
	</div>
</div>
</div> <!-- /.workarea -->
<!-- если корзина пустая, для пустой страницы избранного - то же, текст "списо избранного пуст"
<div class="workarea">
	<div class="page-empty">
		<div class="title large-text color-text text-light light center-align">Ваша корзина пуста</div>
	</div>
</div>
-->
<?php include('footer.php');?>