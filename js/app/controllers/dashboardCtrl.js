adminApp.controller('DashboardCtrl', ['$scope','$rootScope','$routeParams','Menu','Section', function ($scope,$rootScope,$routeParams, Menu,Section) {
	
	Section.getContentInSection($routeParams.section).success(function(contents){
		$scope.contents = contents;
	});
	$scope.getContentDetail = function(type){
		var id = $scope.photoID;
		$scope.editContentType = type;
		$scope.editContent = $scope.contents[type][id];
	}
}])