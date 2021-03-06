adminApp.factory('Menu', [ '$q','$http',function ( $q, $http ) {
	
	var menu =  {};
	menu.getMenuList = function(){
		var deferred = $q.defer();
		$http.get('menu').success(function(data){
			deferred.resolve(data);
		});
		return deferred.promise;
	}
	menu.getAllSection = function(){
		return $http.get('section');
	}
	return menu;
}])