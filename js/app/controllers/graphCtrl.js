adminApp.controller('GraphCtrl', ['$scope','$rootScope','$routeParams','$q','Menu','Section','Upload', function ($scope,$rootScope,$routeParams,$q, Menu,Section,Upload) {
	
    Section.getGraph().success(function(respose){
        $scope.graphs = respose;
        console.log($scope.graphs)
    });
	$scope.getContentDetail = function(){

		$scope.editContent = $scope.graphs[$scope.graphID];
	}
	
    $scope.saveContent =function(){
      
        Section.updateGraph( $scope.editContent ).success(function(result){
            if(result.success)
                alert('content updated');
        });
    }
}])