<?include('header.php');?>
<div class="workarea" ng-controller="newsCtrl">
<div class="row">
	<div class="page-title col l9">Новости</div>
	<div class="archive-box col l3 right-align medium-text">
		<span>Архив новостей: </span>
		<select>
			<option value="2015" selected>2015</option>
			<option value="2014">2014</option>
			<option value="2013">2013</option>
		</select>
	</div>
</div>
<div class="row news-list">
	<div class="news-item news-card col l6" ng-repeat="new in news | orderBy:date">
		<a href="news.php" class="img-link">
			<img class="item-img" ng-src="{{new.image}}" />
			<div class="overlay"></div>
			<div class="item-text">
				<div class="item-date">{{new.date}}</div>
				<div class="item-title big-text">{{new.title}}</div>
			</div>
		</a>
	</div>
</div>
<a class="btn flat fullsize btn-more" href="#">Показать еще</a>
<?php include('pagination.php');?>
</div> <!-- /.workarea -->
<?php include('footer.php');?>
