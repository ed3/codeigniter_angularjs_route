<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
<base href="/" />
<title>Angularjs</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="public/css/bootstrap.min.css" rel="stylesheet">
<script src="public/js/angular.min.js"></script>
<script src="public/js/angular-route.min.js"></script>
<script src="public/js/app.js"></script>
</head>
<body ng-controller="navController">
<div class="container">
	<div class="navbar navbar-inverse" role="navigation">
	<div class="navbar-header"><a class="navbar-brand" href="/">LOGO</a></div>
	<ul class="navbar-nav nav">
		<li><a href="/">Home</a></li>
		<li><a href="/about">About</a></li>
	</ul>
	</div>
</div>
<div class="container">
	<div ng-view="" id="ng-view" class="slide-animation"></div>
</div>
</body>
</html>