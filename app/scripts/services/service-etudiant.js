'use strict';
app.factory('ServiceEtudiant', function ($http) {
		
				
		return {

			getEtudiants : function(){
				
				return  $http.get('api/etudiants');
				
			} ,
			getEtudiant : function(id){
				
				return  $http.get('api/etudiants/'+id);	
			} ,
			addEtudiant : function(data){
				
				return $http.post('api/etudiants',data);
				
			},
			deleteEtudiant : function(id){
				
				return $http.delete('api/etudiants/'+id);
				
			},
			uploadFile : function (data) {
				return $http.post('api/etudiants/upload-photo', data, {
					      	withCredentials: true,
					      	cache : false,
					        headers: {'Content-Type': undefined },
					        transformRequest: angular.identity
   			 });
			}
		};		
});

