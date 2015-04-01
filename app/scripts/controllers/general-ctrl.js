'use strict';
app.controller('GeneralCtrl', ['$scope','$location','ServiceSession', function($scope,$location,ServiceSession){
	

	
	$scope.isActive = function(path){
		$scope.agrandir = 'fa-2x';
		console.log($location.path());
		var pathEx = new RegExp(path+'.*');
		return pathEx.test($location.path());
		};

		$scope.items= items;

		
}]);

