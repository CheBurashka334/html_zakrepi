//"use strict"
var zakrepi = angular.module('zakrepi',[]);

zakrepi.controller('actionsCtrl', function($scope, $http){
	/*$http.get('content/home-products.json').success(function(data){
		$scope.products = data;
		console.log($scope.products);
	});*/
	$scope.actions = [
		{
			"id": 1,
			"title": "Скидка 40%  на электроинструменты",
			"image": "images/content/actions/actions-1.jpg",
			"anons": "Спецпредложение на технику Bosch",
			"terms": "Даты проведения акции: 18 сентября - 30 октября 2015г."
		},
		{
			"id": 2,
			"title": "Cнегоуборщики по прошлогодним ценам!",
			"image": "images/content/actions/actions-2.jpg",
			"anons": "Надежный помошник по уборке снега",
			"terms": "Даты проведения акции: 18 сентября - 30 октября 2015г."
		},
		{
			"id": 3,
			"title": "Новое измерение твоей свободы",
			"image": "images/content/actions/actions-3.jpg",
			"anons": "Палатки, рюкзаки, мебель и многое другое",
			"terms": "Даты проведения акции: 18 сентября - 30 октября 2015г."
		},
		{
			"id": 4,
			"title": "Распродажа!",
			"image": "images/content/actions/actions-4.jpg",
			"anons": "Надежный помошник по уборке снега",
			"terms": "Даты проведения акции: 18 сентября - 30 октября 2015г."
		},
		{
			"id": 5,
			"title": "Пора на охоту",
			"image": "images/content/actions/actions-5.jpg",
			"anons": "Камуфляжная демисезонная  одежда",
			"terms": "Даты проведения акции: 18 сентября - 30 октября 2015г."
		},
		{
			"id": 6,
			"title": "Рыбалка",
			"image": "images/content/actions/actions-6.jpg",
			"anons": "Большой выбор лодок и мотоблоков",
			"terms": "Даты проведения акции: 18 сентября - 30 октября 2015г."
		},
	];
});
zakrepi.controller('newsCtrl', function($scope, $http){
	/*$http.get('content/home-products.json').success(function(data){
		$scope.products = data;
		console.log($scope.products);
	});*/
	$scope.news = [
		{
			"id": 1,
			"title": "Настоящий предприниматель – тот, кто умеет работать на пикирующем рынке.",
			"image": "images/content/news/news-1.jpg",
			"date": "2015-09-25"
		},
		{
			"id": 2,
			"title": "Грамотный спрос - грамотное предложение.",
			"image": "images/content/news/news-2.jpg",
			"date": "25 сентября 2015"
		},
		{
			"id": 3,
			"title": "Участвуй в бесплатном вебинаре!",
			"image": "images/content/news/news-3.jpg",
			"date": "25 сентября 2015"
		},
		{
			"id": 4,
			"title": "Мы в \"100 лучших товаров Тюменской области\"",
			"image": "images/content/news/news-4.jpg",
			"date": "25 сентября 2015"
		},
		{
			"id": 5,
			"title": "Подари себе путешествие!",
			"image": "images/content/news/news-5.jpg",
			"date": "25 сентября 2015"
		},
		{
			"id": 6,
			"title": "День Строителя!",
			"image": "images/content/news/news-6.jpg",
			"date": "25 сентября 2015"
		},{
			"id": 7,
			"title": "Лодки от 4999 р.",
			"image": "images/content/news/news-7.jpg",
			"date": "25 сентября 2015"
		},
		{
			"id": 8,
			"title": "Франчайзинг как стратегия развития моего бизнеса",
			"image": "images/content/news/news-8.jpg",
			"date": "25 сентября 2015"
		},
		{
			"id": 9,
			"title": "Подарочные сертификаты КрепыЖ!",
			"image": "images/content/news/news-9.jpg",
			"date": "25 сентября 2015"
		},
		{
			"id": 10,
			"title": "Рыбалка в Северном Вагае",
			"image": "images/content/news/news-10.jpg",
			"date": "25 сентября 2015"
		},
		{
			"id": 11,
			"title": "Выставка франчайзинг регионы",
			"image": "images/content/news/news-11.jpg",
			"date": "25 сентября 2015"
		},
		{
			"id": 12,
			"title": "Распродажа моек высокого давления!",
			"image": "images/content/news/news-12.jpg",
			"date": "25 сентября 2015"
		},
	];
});
zakrepi.controller('CatalogProductsCtrl', function($scope, $http){
	/*$http.get('content/catalog-products.json').success(function(data){
		$scope.products = data;
		//console.log($scope.products);
	});*/
	$scope.orderProp = 'id';
	$scope.products = [
		{
			"id": 1,
			"name": "Гайковерт ударный Makita 6271DWPE",
			"image": "images/content/products/cataloge-product-1.jpg",
			"rating": 2,
			"reviews": 13,
			"oldprice": "",
			"price": 7299,
			"quantity": 1,
			"params" : [
				{
					'id': 1,
					'value': 30,
				},
				{
					'id': 2,
					'value': 1,
				},
				{
					'id': 3,
					'value': 1.3,
				},
				{
					'id': 4,
					'value': 12,
				},
				{
					'id': 5,
					'value': 'Ni-Cd',
				},
				{
					'id': 6,
					'value': 1,
				},
				{
					'id': 7,
					'value': 'Импульсное',
				},
				{
					'id': 8,
					'value': 1300,
				},
				{
					'id': 9,
					'value': 25,
				},
				{
					'id': 10,
					'value': 10,
				},
				{
					'id': 11,
					'value': '-',
				},
				{
					'id': 12,
					'value': '+',
				},
				{
					'id': 13,
					'value': '-',
				},
				{
					'id': 14,
					'value': 192,
				},
				{
					'id': 15,
					'value': 240,
				},
				{
					'id': 16,
					'value': 1.5,
				},
				{
					'id': 17,
					'value': 'Два аккмулятора, зарядное устройство, кейс',
				},
			],
		},
		{
			"id": 2,
			"name": "Гайковерт ударный Makita 6951",
			"image": "images/content/products/cataloge-product-2.jpg",
			"rating": 4,
			"reviews": 8,
			"oldprice": "",
			"price": 8599,
			"quantity": 2,
			"params" : [
				{
					'id': 1,
					'value': 24,
				},
				{
					'id': 2,
					'value': 1,
				},
				{
					'id': 3,
					'value': 1.4,
				},
				{
					'id': 4,
					'value': 9,
				},
				{
					'id': 5,
					'value': 'Ni-Cd',
				},
				{
					'id': 6,
					'value': 1,
				},
				{
					'id': 7,
					'value': 'Импульсное',
				},
				{
					'id': 8,
					'value': 1300,
				},
				{
					'id': 9,
					'value': 21,
				},
				{
					'id': 10,
					'value': 12,
				},
				{
					'id': 11,
					'value': '-',
				},
				{
					'id': 12,
					'value': '+',
				},
				{
					'id': 13,
					'value': '-',
				},
				{
					'id': 14,
					'value': 182,
				},
				{
					'id': 15,
					'value': 239,
				},
				{
					'id': 16,
					'value': 1.4,
				},
				{
					'id': 17,
					'value': 'Два аккмулятора, зарядное устройство, кейс',
				},
			],
		},
		{
			"id": 3,
			"name": "Гайковерт ударный AEG BSS 18C 12Z-0",
			"image": "images/content/products/cataloge-product-3.jpg",
			"rating": 5,
			"reviews": 3,
			"oldprice": 6600,
			"price": 6060,
			"quantity": 3,
			"params" : [
				{
					'id': 1,
					'value': 30,
				},
				{
					'id': 2,
					'value': 0.8,
				},
				{
					'id': 3,
					'value': 1.5,
				},
				{
					'id': 4,
					'value': 14,
				},
				{
					'id': 5,
					'value': 'Li-Ion',
				},
				{
					'id': 6,
					'value': 1,
				},
				{
					'id': 7,
					'value': 'Обычное',
				},
				{
					'id': 8,
					'value': 1300,
				},
				{
					'id': 9,
					'value': 25,
				},
				{
					'id': 10,
					'value': 12,
				},
				{
					'id': 11,
					'value': '-',
				},
				{
					'id': 12,
					'value': '+',
				},
				{
					'id': 13,
					'value': '-',
				},
				{
					'id': 14,
					'value': 204,
				},
				{
					'id': 15,
					'value': 229,
				},
				{
					'id': 16,
					'value': 1.3,
				},
				{
					'id': 17,
					'value': 'Два аккмулятора, зарядное устройство, кейс',
				},
			],
		},
		{
			"id": 4,
			"name": "Гайковерт угловой Makita 6766D",
			"image": "images/content/products/cataloge-product-4.jpg",
			"rating": 2,
			"reviews": 11,
			"oldprice": 13990,
			"price": 9990,
			"quantity": 10,
			"params" : [
				{
					'id': 1,
					'value': 30,
				},
				{
					'id': 2,
					'value': 0.9,
				},
				{
					'id': 3,
					'value': 1.3,
				},
				{
					'id': 4,
					'value': 12,
				},
				{
					'id': 5,
					'value': 'Ni-Cd',
				},
				{
					'id': 6,
					'value': 1,
				},
				{
					'id': 7,
					'value': 'Импульсное',
				},
				{
					'id': 8,
					'value': 1200,
				},
				{
					'id': 9,
					'value': 21,
				},
				{
					'id': 10,
					'value': 10,
				},
				{
					'id': 11,
					'value': '-',
				},
				{
					'id': 12,
					'value': '+',
				},
				{
					'id': 13,
					'value': '-',
				},
				{
					'id': 14,
					'value': 192,
				},
				{
					'id': 15,
					'value': 240,
				},
				{
					'id': 16,
					'value': 1.5,
				},
				{
					'id': 17,
					'value': 'Два аккмулятора, зарядное устройство, кейс',
				},
			],
		},
		{
			"id": 5,
			"name": "Гайковерт угловой  Milwaukee M12 IR",
			"image": "images/content/products/cataloge-product-5.jpg",
			"rating": 4,
			"reviews": 1,
			"oldprice": "",
			"price": 12395,
			"quantity": 1,
			"params" : [
				{
					'id': 1,
					'value': 30,
				},
				{
					'id': 2,
					'value': 1,
				},
				{
					'id': 3,
					'value': 1.3,
				},
				{
					'id': 4,
					'value': 12,
				},
				{
					'id': 5,
					'value': 'Ni-Cd',
				},
				{
					'id': 6,
					'value': 1,
				},
				{
					'id': 7,
					'value': 'Импульсное',
				},
				{
					'id': 8,
					'value': 1300,
				},
				{
					'id': 9,
					'value': 25,
				},
				{
					'id': 10,
					'value': 10,
				},
				{
					'id': 11,
					'value': '-',
				},
				{
					'id': 12,
					'value': '+',
				},
				{
					'id': 13,
					'value': '-',
				},
				{
					'id': 14,
					'value': 192,
				},
				{
					'id': 15,
					'value': 240,
				},
				{
					'id': 16,
					'value': 1.5,
				},
				{
					'id': 17,
					'value': 'Два аккмулятора, зарядное устройство, кейс',
				},
			],
		},
		{
			"id": 6,
			"name": "Гайковерт угловой FEIN SCW 16-6",
			"image": "images/content/products/cataloge-product-6.jpg",
			"rating": 5,
			"reviews": 3,
			"oldprice": 26060,
			"price": 19060,
			"quantity": 25,
			"params" : [
				{
					'id': 1,
					'value': 24,
				},
				{
					'id': 2,
					'value': 1,
				},
				{
					'id': 3,
					'value': 1.4,
				},
				{
					'id': 4,
					'value': 9,
				},
				{
					'id': 5,
					'value': 'Ni-Cd',
				},
				{
					'id': 6,
					'value': 1,
				},
				{
					'id': 7,
					'value': 'Импульсное',
				},
				{
					'id': 8,
					'value': 1300,
				},
				{
					'id': 9,
					'value': 21,
				},
				{
					'id': 10,
					'value': 12,
				},
				{
					'id': 11,
					'value': '-',
				},
				{
					'id': 12,
					'value': '+',
				},
				{
					'id': 13,
					'value': '-',
				},
				{
					'id': 14,
					'value': 182,
				},
				{
					'id': 15,
					'value': 239,
				},
				{
					'id': 16,
					'value': 1.4,
				},
				{
					'id': 17,
					'value': 'Два аккмулятора, зарядное устройство, кейс',
				},
			],
		},
		{
			"id": 7,
			"name": "Гайковерт ударный Makita 6271DWPE",
			"image": "images/content/products/cataloge-product-1.jpg",
			"rating": 2,
			"reviews": 13,
			"oldprice": "",
			"price": 7299,
			"quantity": 1,
			"params" : [
				{
					'id': 1,
					'value': 26,
				},
				{
					'id': 2,
					'value': 1,
				},
				{
					'id': 3,
					'value': 1.4,
				},
				{
					'id': 4,
					'value': 12,
				},
				{
					'id': 5,
					'value': 'Ni-Cd',
				},
				{
					'id': 6,
					'value': 1,
				},
				{
					'id': 7,
					'value': 'Обычное',
				},
				{
					'id': 8,
					'value': 1200,
				},
				{
					'id': 9,
					'value': 21,
				},
				{
					'id': 10,
					'value': 12,
				},
				{
					'id': 11,
					'value': '-',
				},
				{
					'id': 12,
					'value': '+',
				},
				{
					'id': 13,
					'value': '-',
				},
				{
					'id': 14,
					'value': 182,
				},
				{
					'id': 15,
					'value': 200,
				},
				{
					'id': 16,
					'value': 1.7,
				},
				{
					'id': 17,
					'value': 'Дрель Hitachi DS12DVF3, два аккумулятора EB1214S, зарядное устройство UC18НYG, фонарь UB12D, набор насадок, держатель насадок.',
				},
			],
		},
		{
			"id": 8,
			"name": "Гайковерт ударный Makita 6951",
			"image": "images/content/products/cataloge-product-2.jpg",
			"rating": 4,
			"reviews": 8,
			"oldprice": "9600",
			"price": 8599,
			"quantity": 2,
			"params" : [
				{
					'id': 1,
					'value': 30,
				},
				{
					'id': 2,
					'value': 1,
				},
				{
					'id': 3,
					'value': 1.3,
				},
				{
					'id': 4,
					'value': 12,
				},
				{
					'id': 5,
					'value': 'Ni-Cd',
				},
				{
					'id': 6,
					'value': 1,
				},
				{
					'id': 7,
					'value': 'Импульсное',
				},
				{
					'id': 8,
					'value': 1300,
				},
				{
					'id': 9,
					'value': 25,
				},
				{
					'id': 10,
					'value': 10,
				},
				{
					'id': 11,
					'value': '-',
				},
				{
					'id': 12,
					'value': '+',
				},
				{
					'id': 13,
					'value': '-',
				},
				{
					'id': 14,
					'value': 192,
				},
				{
					'id': 15,
					'value': 240,
				},
				{
					'id': 16,
					'value': 1.5,
				},
				{
					'id': 17,
					'value': 'Два аккмулятора, зарядное устройство, кейс',
				},
			],
		},
		{
			"id": 9,
			"name": "Гайковерт ударный AEG BSS 18C 12Z-0",
			"image": "images/content/products/cataloge-product-3.jpg",
			"rating": 5,
			"reviews": 3,
			"oldprice": 6600,
			"price": 6060,
			"quantity": 3,
			"params" : [
				{
					'id': 1,
					'value': 30,
				},
				{
					'id': 2,
					'value': 1,
				},
				{
					'id': 3,
					'value': 1.3,
				},
				{
					'id': 4,
					'value': 12,
				},
				{
					'id': 5,
					'value': 'Ni-Cd',
				},
				{
					'id': 6,
					'value': 1,
				},
				{
					'id': 7,
					'value': 'Импульсное',
				},
				{
					'id': 8,
					'value': 1300,
				},
				{
					'id': 9,
					'value': 25,
				},
				{
					'id': 10,
					'value': 10,
				},
				{
					'id': 11,
					'value': '-',
				},
				{
					'id': 12,
					'value': '+',
				},
				{
					'id': 13,
					'value': '-',
				},
				{
					'id': 14,
					'value': 192,
				},
				{
					'id': 15,
					'value': 240,
				},
				{
					'id': 16,
					'value': 1.5,
				},
				{
					'id': 17,
					'value': 'Два аккмулятора, зарядное устройство, кейс',
				},
			],
		},
		{
			"id": 10,
			"name": "Гайковерт угловой Makita 6766D",
			"image": "images/content/products/cataloge-product-4.jpg",
			"rating": 2,
			"reviews": 11,
			"oldprice": "",
			"price": 9990,
			"quantity": 10,
			"params" : [
				{
					'id': 1,
					'value': 24,
				},
				{
					'id': 2,
					'value': 1,
				},
				{
					'id': 3,
					'value': 1.4,
				},
				{
					'id': 4,
					'value': 9,
				},
				{
					'id': 5,
					'value': 'Ni-Cd',
				},
				{
					'id': 6,
					'value': 1,
				},
				{
					'id': 7,
					'value': 'Импульсное',
				},
				{
					'id': 8,
					'value': 1300,
				},
				{
					'id': 9,
					'value': 21,
				},
				{
					'id': 10,
					'value': 12,
				},
				{
					'id': 11,
					'value': '-',
				},
				{
					'id': 12,
					'value': '+',
				},
				{
					'id': 13,
					'value': '-',
				},
				{
					'id': 14,
					'value': 182,
				},
				{
					'id': 15,
					'value': 239,
				},
				{
					'id': 16,
					'value': 1.4,
				},
				{
					'id': 17,
					'value': 'Два аккмулятора, зарядное устройство, кейс',
				},
			],
		},
		{
			"id": 11,
			"name": "Гайковерт угловой  Milwaukee M12 IR",
			"image": "images/content/products/cataloge-product-5.jpg",
			"rating": 4,
			"reviews": 1,
			"oldprice": "",
			"price": 12395,
			"quantity": 1,
			"params" : [
				{
					'id': 1,
					'value': 30,
				},
				{
					'id': 2,
					'value': 1,
				},
				{
					'id': 3,
					'value': 1.3,
				},
				{
					'id': 4,
					'value': 12,
				},
				{
					'id': 5,
					'value': 'Ni-Cd',
				},
				{
					'id': 6,
					'value': 1,
				},
				{
					'id': 7,
					'value': 'Импульсное',
				},
				{
					'id': 8,
					'value': 1300,
				},
				{
					'id': 9,
					'value': 25,
				},
				{
					'id': 10,
					'value': 10,
				},
				{
					'id': 11,
					'value': '-',
				},
				{
					'id': 12,
					'value': '+',
				},
				{
					'id': 13,
					'value': '-',
				},
				{
					'id': 14,
					'value': 192,
				},
				{
					'id': 15,
					'value': 240,
				},
				{
					'id': 16,
					'value': 1.5,
				},
				{
					'id': 17,
					'value': 'Два аккмулятора, зарядное устройство, кейс',
				},
			],
		},
		{
			"id": 12,
			"name": "Гайковерт угловой FEIN SCW 16-6",
			"image": "images/content/products/cataloge-product-6.jpg",
			"rating": 5,
			"reviews": 3,
			"oldprice": 26060,
			"price": 19060,
			"quantity": 25,
			"params" : [
				{
					'id': 1,
					'value': 30,
				},
				{
					'id': 2,
					'value': 1,
				},
				{
					'id': 3,
					'value': 1.3,
				},
				{
					'id': 4,
					'value': 12,
				},
				{
					'id': 5,
					'value': 'Ni-Cd',
				},
				{
					'id': 6,
					'value': 1,
				},
				{
					'id': 7,
					'value': 'Импульсное',
				},
				{
					'id': 8,
					'value': 1300,
				},
				{
					'id': 9,
					'value': 25,
				},
				{
					'id': 10,
					'value': 10,
				},
				{
					'id': 11,
					'value': '-',
				},
				{
					'id': 12,
					'value': '+',
				},
				{
					'id': 13,
					'value': '-',
				},
				{
					'id': 14,
					'value': 192,
				},
				{
					'id': 15,
					'value': 240,
				},
				{
					'id': 16,
					'value': 1.5,
				},
				{
					'id': 17,
					'value': 'Два аккмулятора, зарядное устройство, кейс ',
				},
			],
		},
	];
	$scope.params = [
		{
			'id': 0,
			'name': 'Максимальный крутящий момент (Н/м)'
		},
		{
			'id': 1,
			'name': 'Диаметр патрона, мин. (мм)'
		},
		{
			'id': 2,
			'name': 'Емкость аккумулятора'
		},
		{
			'id': 3,
			'name': 'Напряжение аккумулятора (В)'
		},
		{
			'id': 4,
			'name': 'Тип аккумулятора'
		},
		{
			'id': 5,
			'name': 'Время зарядки аккумулятора (ч)'
		},
		{
			'id': 6,
			'name': 'Тип зарядного устройства'
		},
		{
			'id': 7,
			'name': 'Макс. число оборотов холостого хода (об/мин)'
		},
		{
			'id': 8,
			'name': 'Макс. диаметр сверления дерево (мм)'
		},
		{
			'id': 9,
			'name': 'Макс. диаметр сверления металл (мм)'
		},
		{
			'id': 10,
			'name': 'Гнездо в корпусе для крепления бит'
		},
		{
			'id': 11,
			'name': 'Фиксация шпинделя'
		},
		{
			'id': 12,
			'name': 'Тормоз двигателя'
		},
		{
			'id': 13,
			'name': 'Длина (мм)'
		},
		{
			'id': 14,
			'name': 'Высота (мм)'
		},
		{
			'id': 15,
			'name': 'Вес (кг)'
		},
		{
			'id': 16,
			'name': 'Комплектация'
		},
	];
});
zakrepi.controller('brandsCtrl', function($scope, $http){
	/*$http.get('content/home-products.json').success(function(data){
		$scope.products = data;
		console.log($scope.products);
	});*/
	$scope.brands = [
		{
			"id": 01,
			"title": "ABAC",
			"letter": "a",
		},
		{
			"id": 02,
			"title": "BALLU",
			"letter": "b",
		},
		{
			"id": 03,
			"title": "Belamos",
			"letter": "b",
		},
		{
			"id": 04,
			"title": "BLUEWELD",
			"letter": "b",
		},
		{
			"id": 05,
			"title": "BOSCH / DREMEL",
			"letter": "b",
		},
		{
			"id": 06,
			"title": "Dahatsu",
			"letter": "d",
		},
		{
			"id": 07,
			"title": "Denzel",
			"letter": "d",
		},
		{
			"id": 08,
			"title": "Dorkel",
			"letter": "d",
		},
		{
			"id": 09,
			"title": "DWT",
			"letter": "d",
		},
		{
			"id": 10,
			"title": "Daire",
			"letter": "d",
		},
		{
			"id": 11,
			"title": "Elitech",
			"letter": "e",
		},
		{
			"id": 12,
			"title": "ENDRESS",
			"letter": "e",
		},
		{
			"id": 13,
			"title": "ENGY",
			"letter": "e",
		},
		{
			"id": 14,
			"title": "Elmos",
			"letter": "e",
		},
		{
			"id": 15,
			"title": "Extra",
			"letter": "e",
		},
		{
			"id": 16,
			"title": "Ergus",
			"letter": "e",
		},
		{
			"id": 17,
			"title": "FIT",
			"letter": "f",
		},
		{
			"id": 18,
			"title": "FUBAG",
			"letter": "f",
		},
		{
			"id": 19,
			"title": "Golfstream",
			"letter": "g",
		},
		{
			"id": 20,
			"title": "Hammer",
			"letter": "h",
		},
		{
			"id": 21,
			"title": "HDX",
			"letter": "h",
		},
		{
			"id": 22,
			"title": "HILTT",
			"letter": "h",
		},
		{
			"id": 23,
			"title": "HITACHI",
			"letter": "h",
		},
		{
			"id": 24,
			"title": "Husqvarna",
			"letter": "h",
		},
		{
			"id": 25,
			"title": "Karcher",
			"letter": "k",
		},
		{
			"id": 26,
			"title": "MAKITA",
			"letter": "m",
		},
		{
			"id": 27,
			"title": "Marina",
			"letter": "m",
		},
		{
			"id": 28,
			"title": "Matrix, Gross",
			"letter": "m",
		},
		{
			"id": 29,
			"title": "PARK",
			"letter": "p",
		},
		{
			"id": 30,
			"title": "PARTNER",
			"letter": "p",
		},
		{
			"id": 31,
			"title": "PATRIOT GARDEN",
			"letter": "p",
		},
		{
			"id": 32,
			"title": "ProRab",
			"letter": "p",
		},
		{
			"id": 33,
			"title": "QQW",
			"letter": "q",
		},
		{
			"id": 34,
			"title": "Ranger",
			"letter": "r",
		},
		{
			"id": 35,
			"title": "REBIR",
			"letter": "r",
		},
		{
			"id": 36,
			"title": "Saturn, Atlanta",
			"letter": "s",
		},
		{
			"id": 37,
			"title": "Scarlett",
			"letter": "s",
		},
		{
			"id": 38,
			"title": "Skat",
			"letter": "s",
		},
		{
			"id": 39,
			"title": "Skil",
			"letter": "s",
		},
		{
			"id": 40,
			"title": "SPARKY",
			"letter": "s",
		},
		{
			"id": 41,
			"title": "Stern",
			"letter": "s",
		},
		{
			"id": 42,
			"title": "STIHL, Viking",
			"letter": "s",
		},
		{
			"id": 43,
			"title": "Zitrek",
			"letter": "z",
		},
		{
			"id": 44,
			"title": "Бикор",
			"letter": "а-я",
		},
		{
			"id": 45,
			"title": "Вихрь",
			"letter": "а-я",
		},
		{
			"id": 46,
			"title": "Водолей",
			"letter": "а-я",
		},
		{
			"id": 47,
			"title": "ДИОЛД",
			"letter": "а-я",
		},
		{
			"id": 48,
			"title": "ЕРМАК",
			"letter": "а-я",
		},
		{
			"id": 49,
			"title": "ЗУБР",
			"letter": "а-я",
		},
		{
			"id": 50,
			"title": "ИНТЕРСКОЛ",
			"letter": "а-я",
		},
		{
			"id": 51,
			"title": "Корвет",
			"letter": "а-я",
		},
		{
			"id": 52,
			"title": "Кратон",
			"letter": "а-я",
		},
		{
			"id": 53,
			"title": "ЛЕПСЕ",
			"letter": "а-я",
		},
		{
			"id": 54,
			"title": "Лесник",
			"letter": "а-я",
		},
		{
			"id": 55,
			"title": "Мастер-Универсал",
			"letter": "а-я",
		},
		{
			"id": 56,
			"title": "ПАРМА",
			"letter": "а-я",
		},
		{
			"id": 57,
			"title": "Ресанта ",
			"letter": "а-я",
		},
		{
			"id": 58,
			"title": "РИТМ",
			"letter": "а-я",
		},
		{
			"id": 59,
			"title": "Рысь",
			"letter": "а-я",
		},
		{
			"id": 60,
			"title": "Элвин",
			"letter": "а-я",
		},
		{
			"id": 61,
			"title": "Энкор",
			"letter": "а-я",
		},
		{
			"id": 62,
			"title": "CONDTROL",
			"letter": "c",
		},
	];
	$scope.letters = [];
	for (var $i = 0; $i < $scope.brands.length; $i++){
		if($scope.letters.indexOf($scope.brands[$i].letter) == -1){
			$scope.letters.push($scope.brands[$i].letter);
		}
	}
	$scope.letters.sort();
});
zakrepi.controller('geoCtrl', function($scope, $http){
	$scope.cities = [
		{
			"id": 1,
			"name": "Тюмень",
			"region": "Тюменская область"
		},
		{
			"id": 2,
			"name": "Салехард",
			"region": "Ямало-Ненецкий автономный округ"
		},
		{
			"id": 3,
			"name": "Заводоуковск",
			"region": "Тюменская область"
		},
		{
			"id": 4,
			"name": "Екатеринбург",
			"region": "Свердловская область"
		},
		{
			"id": 5,
			"name": "Тюкалинск",
			"region": "Омская область"
		},
	];
});