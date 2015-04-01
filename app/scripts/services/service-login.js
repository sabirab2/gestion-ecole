'use strict';
app.factory('ServiceLogin', function ($http) {
	
	var page = 'login-ctrl.php';
	return {
		getAuthentication : function(data) {
			return $http.post(page, data);
		},
		


	};
});