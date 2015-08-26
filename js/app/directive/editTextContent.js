adminApp.directive('editTextContent', [function () {
	return {
		restrict: 'A',
		link: function (scope, iElement, iAttrs) {
			console.log(iElement);
			tinymce.init({selector:'textarea'});
		}
	};
}])