adminApp.controller('DashboardCtrl', ['$scope','Menu', function ($scope, Menu) {

	var promise = Menu.getMenuList();
	promise.then(function(menus) {
    	$scope.menus  = menus;
	});
}])