adminApp.factory('Section', ['$http',function ($http) {
	var section={};
	section.getContentInSection = function( sectionName ,language){
		return $http.get('content/'+sectionName+'/'+language);
	};
	section.saveContent = function( content ){
		return $http({
		  method  : 'post',
		  url     : 'content',
		  data    : content,  // pass in data as strings
		  headers : { 'Content-Type': 'application/json' }  // set the headers so angular passing info as form data (not request payload)
		 });
	};
	section.addContent = function( content ){
		return $http({
		  method  : 'post',
		  url     : 'newContent',
		  data    : content,  // pass in data as strings
		  headers : { 'Content-Type': 'application/json' }  // set the headers so angular passing info as form data (not request payload)
		 });
	};
	return section;
}])