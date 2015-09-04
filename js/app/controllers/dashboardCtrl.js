adminApp.controller('DashboardCtrl', ['$scope','$rootScope','$routeParams','$q','Menu','Section','Upload', function ($scope,$rootScope,$routeParams,$q, Menu,Section,Upload) {
	
    var contentCanAddPicture = ['home','modal-award'];
    var contentCanAddText    = ['career'];
    var isInArray = function(value, array) {
      return array.indexOf(value) > -1;
    }

    if( isInArray($routeParams.section,contentCanAddPicture) )
        $scope.canAddPic = true;
    if( isInArray($routeParams.section,contentCanAddText) )
        $scope.canAddText = true;

	Section.getContentInSection($routeParams.section,$routeParams.language).success(function(contents){
		$scope.contents = contents;
	});
    Menu.getAllSection().success(function(sections){
        $scope.sections = sections;
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
      
        Section.saveContent( $scope.editContent ).success(function(result){
            if(result.success)
                alert('content updated');
        });
    }
    $scope.deleteContent=function(){
        Section.deleteContent( $scope.editContent ).success(function(result){
            if(result.success)
                alert('content updated');
        });
    }
    $scope.addContent= function(){ 
        $scope.newContent.section  = $routeParams.section;
        $scope.newContent.language = $routeParams.language;
        if( $scope.canAddText){
            var uploadNewPic = Upload.upload({
                url: 'addNewPic',
                fields: {
                    'contentDetail': $scope.newContent
                },
                file: $scope.newContent.picFile
            });
            var addNewContent = Section.addContent( $scope.newContent );
            $q.all([uploadNewPic, addNewContent]).then(function(results) {
                alert('Update Completed');
            });
        }
        else if( $scope.canAddPic){
            Upload.upload({
                url: 'addNewPic',
                fields: {
                    'contentDetail': $scope.newContent
                },
                file: $scope.newContent.picFile
            }).progress(function (evt) { 
          //     var progressPercentage = parseInt(100.0 * evt.loaded / evt.total);
                // console.log('progress: ' + progressPercentage + '% ' + evt.config.file.name);
            }).success(function (data, status, headers, config) {
                 alert('Update Completed');
            }).error(function (data, status, headers, config) {
                console.log('error status: ' + status);
            });
        }
        
    }
    $scope.upload = function (file) {
        if (file) {
           
                Upload.upload({
                    url: 'uploadPic',
                    fields: {
                        'contentDetail': $scope.editContent
                    },
                    file: file
                }).progress(function (evt) { 
              //     var progressPercentage = parseInt(100.0 * evt.loaded / evt.total);
                    // console.log('progress: ' + progressPercentage + '% ' + evt.config.file.name);
                }).success(function (data, status, headers, config) {
                     console.log('file ' + config.file.name + 'uploaded. Response: ' + data);
                }).error(function (data, status, headers, config) {
                    console.log('error status: ' + status);
                });
           
        }
        else
        {
            Section.saveContent( $scope.editContent ).success(function(result){
                if(result.success)
                    alert('content updated');
            });
        }
    };
}])