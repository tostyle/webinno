var adminApp = angular.module('adminApp', ['ngMaterial','ngRoute'])
	.config(function($mdThemingProvider , $routeProvider ) {

  		$mdThemingProvider.theme('default')
    		.primaryPalette('pink')
    		.accentPalette('orange')
     		.backgroundPalette('blue-grey');
     	$routeProvider
     		.when('/', {
	     		templateUrl: '../templates/admin/home.html',
	     		controller: 'HomeCtrl'
	     	})
	     	.when('/dashboard', {
				templateUrl : '../templates/admin/dashboard.html',
				controller  : 'DashboardCtrl'
			})
	})
	.run(function( $rootScope, $location , Menu ) {
		$rootScope.$on( "$routeChangeStart", function(event, next, current) {
	      	if ($rootScope.loggedInUser == null || $rootScope.loggedInUser !='pass') {
	        // no logged user, redirect to /login
		        // if ( next.templateUrl === "partials/login.html") {
		        // } else {
		          $location.path("/");
		          if( $rootScope.loggedInUser && $rootScope.loggedInUser !='pass' )
		                alert('not correct password');
		        // }
		        console.log($rootScope.loggedInUser);
	      	}
      	});
	    var promise = Menu.getMenuList();
		promise.then(function(menus) {
	    	$rootScope.menus  = menus;
		});
	   
	});