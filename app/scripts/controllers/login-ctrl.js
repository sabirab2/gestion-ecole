'use strict';
app.controller('LoginCtrl',  function($scope,ServiceLogin,$location,ServiceSession){
 	$scope.login={};
 	$scope.message='';
 	$scope.authentication = function()
 	{

 		ServiceLogin.getAuthentication($scope.login).success(function(data){
 	 		if(data){
 	 			ServiceSession.set('user',data);
 	 			$location.path('/etudiants');
 	 		}
 	 		else{
 	 			$location.path('/');
 	 		}
 	 	}).error(function(data){
 	 		console.log(data);
 	 	});
 	 };
 	 $scope.logout= function () {
 	 	ServiceSession.set('user');
 	 	$location.path('/');
 	 };
 });