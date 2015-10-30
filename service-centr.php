<?php include('header.php');?>
<div class="workarea">
	<div class="page-title">Сервисный центр</div>
	<p>Для поиска нужного сервисного центра, воспользуйтесь алфавитом или найдите в списке ниже</p>
	<div class="row">
		<div class="col l9">
			<div class="alphabet-menu">
				<ul class="horizontal-menu menu">
					<li class="menu-item"><a class="menu-link anchor-link" href="#a-box">a</a></li>
					<li class="menu-item"><a class="menu-link anchor-link" href="#b-box">b</a></li>
					<li class="menu-item"><a class="menu-link anchor-link" href="#c-box">c</a></li>
					<li class="menu-item"><a class="menu-link anchor-link" href="#d-box">d</a></li>
					<li class="menu-item"><a class="menu-link anchor-link" href="#e-box">e</a></li>
					<li class="menu-item"><a class="menu-link anchor-link" href="#f-box">f</a></li>
					<li class="menu-item"><a class="menu-link anchor-link" href="#g-box">g</a></li>
					<li class="menu-item"><a class="menu-link anchor-link" href="#h-box">h</a></li>
					<li class="menu-item"><a class="menu-link anchor-link" href="#i-box">i</a></li>
					<li class="menu-item"><a class="menu-link anchor-link" href="#j-box">j</a></li>
					<li class="menu-item"><a class="menu-link anchor-link" href="#k-box">k</a></li>
					<li class="menu-item"><a class="menu-link anchor-link" href="#l-box">l</a></li>
					<li class="menu-item"><a class="menu-link anchor-link" href="#m-box">m</a></li>
					<li class="menu-item"><a class="menu-link anchor-link" href="#n-box">n</a></li>
					<li class="menu-item"><a class="menu-link anchor-link" href="#o-box">o</a></li>
					<li class="menu-item"><a class="menu-link anchor-link" href="#p-box">p</a></li>
					<li class="menu-item"><a class="menu-link anchor-link" href="#q-box">q</a></li>
					<li class="menu-item"><a class="menu-link anchor-link" href="#r-box">r</a></li>
					<li class="menu-item"><a class="menu-link anchor-link" href="#s-box">s</a></li>
					<li class="menu-item"><a class="menu-link anchor-link" href="#t-box">t</a></li>
					<li class="menu-item"><a class="menu-link anchor-link" href="#u-box">u</a></li>
					<li class="menu-item"><a class="menu-link anchor-link" href="#v-box">v</a></li>
					<li class="menu-item"><a class="menu-link anchor-link" href="#w-box">w</a></li>
					<li class="menu-item"><a class="menu-link anchor-link" href="#x-box">x</a></li>
					<li class="menu-item"><a class="menu-link anchor-link" href="#y-box">y</a></li>
					<li class="menu-item"><a class="menu-link anchor-link" href="#z-box">z</a></li>
					<li class="menu-item"><a class="menu-link anchor-link" href="#aya-box">а-я</a></li>
				</ul>
			</div>
			<div class="brands-list" ng-controller="brandsCtrl">
				<div ng-if="letter!='а-я'" ng-repeat="letter in letters" class="brands-box clearfix" id="{{letter}}-box">
					<div class="letter-marker col l1 no-padding">{{letter}}</div>
					<div class="brands col l8 no-padding">
						<div ng-repeat="brand in brands | filter:{letter:letter}" class="brand-item col l2"><a href="brand__single.php">{{brand.title}}</a></div>
					</div>
				</div>
				<div ng-if="letter=='а-я'" ng-repeat="letter in letters" class="brands-box clearfix" id="aya-box">
					<div class="letter-marker col l1 no-padding">{{letter}}</div>
					<div class="brands col l8 no-padding">
						<div ng-repeat="brand in brands | filter:{letter:letter}" class="brand-item col l2"><a href="brand__single.php">{{brand.title}}</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> <!-- /.workarea -->
<?php include('footer.php');?>