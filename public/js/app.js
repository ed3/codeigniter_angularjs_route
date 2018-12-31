var myApp = angular.module('myApp',['ngRoute']);
myApp.controller('navController', function ($scope){});
myApp.config(['$routeProvider','$locationProvider',function ($routeProvider,$locationProvider){
$routeProvider
	.when('/',{title: 'home',templateUrl: 'pages/home.html'})
	.when('/about',{title: 'about',templateUrl: 'pages/about.html'})
	.when('/404', {title:'Not found', templateUrl:'pages/notfound.html'})
	.otherwise({redirectTo: '/404'});
$locationProvider.html5Mode(true);
}]);
//myApp.get('*', function(req,res,next){
//return res.redirect('/#'+req.originalUrl);
//});