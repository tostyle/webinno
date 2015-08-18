adminApp.factory('Section', ['$http',function ($http) {

	return {
		getContentInSection : function( sectionName ){
			return $http.get('content/'+sectionName);
		}
	};
}])