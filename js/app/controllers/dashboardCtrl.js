adminApp.controller('DashboardCtrl', ['$scope','$rootScope','$routeParams','Menu','Section','Upload', function ($scope,$rootScope,$routeParams, Menu,Section,Upload) {
	
	Section.getContentInSection($routeParams.section).success(function(contents){
		$scope.contents = contents;
	});
    Menu.getAllSection().success(function(sections){
        $scope.sections = sections;
        // console.log(sections);
    });
    $scope.tinymceOptions={
         menubar: false,
         forced_root_block : false
    };
	$scope.getContentDetail = function(type){

		var id = $scope.photoID;
        if(type=='text')
            id = $scope.contentID;
		$scope.editContentType = type;
		$scope.editContent = $scope.contents[type][id];
	}
	$scope.$watch('file', function (file) {
        if(file){
        $scope.upload([$scope.file]);
        console.log(file);
        }
    });
    $scope.saveContent =function(){
         console.log($scope.editContent);
        Section.saveContent( $scope.editContent ).success(function(result){
            console.log(result);
        });
    }
    $scope.upload = function (files) {
        if (files && files.length) {
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                Upload.upload({
                    url: 'uploadPic',
                    fields: {
                        'contentDetail': $scope.editContent
                    },
                    file: file
                }).progress(function (evt) { 
              //   	 var progressPercentage = parseInt(100.0 * evt.loaded / evt.total);
            		// console.log('progress: ' + progressPercentage + '% ' + evt.config.file.name);
                }).success(function (data, status, headers, config) { 
                    
                	 console.log('file ' + config.file.name + 'uploaded. Response: ' + data);
                }).error(function (data, status, headers, config) {
		            console.log('error status: ' + status);
		        });
            }
        }
    };
}])