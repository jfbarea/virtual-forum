/*global angular, document, DATA */
/*exported home, students, companies */

// var students = angular.module('vf-app.students', []);
// var companies = angular.module('vf-app.companies', []);
// var home = angular.module('vf-app.home', []);

var app = angular.module('app', ['ngRoute']);

app.config(['$routeProvider', function ($routeProvider) {
	'use strict';

	var routes = [{
		path: '/',
		title: '',
		templateUrl: 'views/home.html',
		controller: 'home-controller'
	}, {
		path: '/upload-cv',
		title: '',
		templateUrl: 'views/upload-cv.html',
		controller: 'cv-controller'
	}, {
		path: '/companies',
		title: '',
		templateUrl: 'views/companies.html',
		controller: 'companies-controller'
	},
		{
		path: '/chats',
		title: '',
		templateUrl: 'views/chats.html',
		controller: 'companies-controller'
	}];
	routes.forEach(function(route){
		var options =  {
			title: route.title,
			templateUrl:route.templateUrl,
			controller:route.controller
		}
		if(!settings.forumActive) {
			options =  {
				title: '',
				templateUrl:'views/closed.html',
				controller:route.controller
			}
		}
		$routeProvider.when(route.path, options);
	});
	$routeProvider.otherwise({
		redirectTo: '/'
	});
}]);

app.filter("sanitize", ['$sce', function($sce) {
	return function(htmlCode){
		return $sce.trustAsHtml(htmlCode);
	}
}]);

app.filter('trusted', ['$sce', function ($sce) {
	return function(url) {
		url = url.replace("watch?v=", "v/");
		return $sce.trustAsResourceUrl(url);
	};
}]);
