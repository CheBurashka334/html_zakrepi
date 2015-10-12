<?include('header.php');?>
<div class="workarea" ng-controller="actionsCtrl">
<div class="page-title">Акции</div>
<div class="row action-list">
	<div class="action-item news-card col l6" ng-repeat="action in actions | orderBy:id">
		<a href="action__single.php" class="img-link">
			<img class="item-img" ng-src="{{action.image}}" />
			<div class="overlay"></div>
			<div class="item-terms">{{action.terms}}</div>
			<div class="item-text">
				<div class="item-title big-text">{{action.title}}</div>
				<div class="preview-text medium-text">{{action.anons}}</div>
			</div>
		</a>
	</div>
</div>
<a class="btn flat fullsize btn-more" href="#">Показать еще</a>
<?php include('pagination.php');?>
</div> <!-- /.workarea -->
<?php include('footer.php');?>
