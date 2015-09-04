adminApp.controller('HomeCtrl', ['$scope','$location','$rootScope', function ($scope, $location, $rootScope) {
	$scope.name= 'password';
	$scope.login = function() {
	    $rootScope.loggedInUser = $scope.password;
	    $location.path("/dashboard/home/en");
	};
}])