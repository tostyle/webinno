var adminApp = angular.module('adminApp', ['ngMaterial','ngRoute','ngFileUpload','ui.tinymce'])
	.config(function($mdThemingProvider , $routeProvider ) {
		$mdThemingProvider.theme('altTheme')
			.backgroundPalette('blue' ,{
     			'default' : '700',
     			'hue-1': '300'
     		});

  		$mdThemingProvider.theme('default')
    		.primaryPalette('blue',{
    			'default' :'800',
    			'hue-1': '300'
    		})
    		.accentPalette('orange')
     		.backgroundPalette('indigo' ,{
     			'default' : '100',
     			'hue-1' : '500'
     		});

     	$routeProvider
     		.when('/', {
	     		templateUrl: '../templates/admin/home.html',
	     		controller: 'HomeCtrl'
	     	})
	     	.when('/dashboard/:section?', {
				templateUrl : '../templates/admin/dashboard.html',
				controller  : 'DashboardCtrl'
			})
			.when('/home', {
				templateUrl : '../templates/admin/dashboard.html',
				controller  : 'DashboardCtrl'
			})
	})
	.run(function( $rootScope, $location , Menu ) {
		$rootScope.$on( "$routeChangeStart", function(event, next, current) {
	      	// if ($rootScope.loggedInUser == null || $rootScope.loggedInUser !='pass') {
	       //  // no logged user, redirect to /login
		      //   // if ( next.templateUrl === "partials/login.html") {
		      //   // } else {
		      //     $location.path("/");
		      //     if( $rootScope.loggedInUser && $rootScope.loggedInUser !='pass' )
		      //           alert('not correct password');
		      //   // }
		      //   console.log($rootScope.loggedInUser);
	      	// }
      	});
	    var promise = Menu.getMenuList();
		promise.then(function(menus) {
	    	$rootScope.menus  = menus;
		});
	   
	});