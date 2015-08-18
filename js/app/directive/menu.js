adminApp.directive('adminMenu', [function () {
	return {
		restrict: 'E',
		link: function (scope, iElement, iAttrs) {
			// console.log(scope);
		},
		templateUrl : '../templates/admin/menu.html'
	};
}])