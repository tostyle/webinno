adminApp.factory('Section', ['$http',function ($http) {
	var section={};
	section.getContentInSection = function( sectionName ){
		return $http.get('content/'+sectionName);
	};
	section.saveContent = function( content ){
		return $http({
		  method  : 'post',
		  url     : 'content',
		  data    : content,  // pass in data as strings
		  headers : { 'Content-Type': 'application/json' }  // set the headers so angular passing info as form data (not request payload)
		 });
	};
	return section;
}])