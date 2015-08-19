adminApp.controller('DashboardCtrl', ['$scope','$rootScope','$routeParams','Menu','Section','Upload', function ($scope,$rootScope,$routeParams, Menu,Section,Upload) {
	
	Section.getContentInSection($routeParams.section).success(function(contents){
		$scope.contents = contents;
	});
	$scope.getContentDetail = function(type){
		var id = $scope.photoID;
		$scope.editContentType = type;
		$scope.editContent = $scope.contents[type][id];
	}
	$scope.$watch('file', function (file) {
        $scope.upload([$scope.file]);
        console.log(file);
    });
    $scope.upload = function (files) {
        if (files && files.length) {
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                Upload.upload({
                    url: '../photo/service',
                    fields: {
                        'username': 'msadsad'
                    },
                    file: file
                }).progress(function (evt) { 
                	 var progressPercentage = parseInt(100.0 * evt.loaded / evt.total);
            		console.log('progress: ' + progressPercentage + '% ' + evt.config.file.name);
                }).success(function (data, status, headers, config) {
                	 console.log('file ' + config.file.name + 'uploaded. Response: ' + data);
                }).error(function (data, status, headers, config) {
		            console.log('error status: ' + status);
		        });
            }
        }
    };
}])