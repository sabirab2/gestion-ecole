'use strict';
app.controller('EtudiantCtrl', ['$scope','ServiceEtudiant', function($scope,ServiceEtudiant) {
	$scope.etudiant = {
	 nom: 'kjlcd', prenom: 'lkjlde', tel: '0655443366', email: 'kjd@jhje' 
	};

	$scope.etudiant.photo = 'avatar.jpg';
	$scope.ajouterEtudiant = function(){
		
		ServiceEtudiant.addEtudiant($scope.etudiant).success(function(data){
					
			 		$scope.message = data ;
			 	}).error(function(data){
			 		console.log(data);
			 	});

		$scope.etudiant = {};
		$scope.etudiant.photo = 'avatar.jpg';
	};
	$scope.etudiantList = function(){
		ServiceEtudiant.getEtudiants().success(function(data){
			$scope.etudiants = data;
			console.log(data);
	 	}).error(function(data){
	 		console.log(data);
	 	});
 	};



 	$scope.supprimerEtudiant = function(id){
 		if(confirm('Voulez-vous vraiment supprimer cet etudiant ?'))
 		{
 			ServiceEtudiant.deleteEtudiant(id).success(function(data){
 			$scope.etudiantList();
 			$scope.message = data ;
 		}).error(function(data, status, headers, config){
 			alert(status+' : '+data+'\n'+headers);
 		})
 		}	
 	};

 	$scope.uploadFile = function (files) {
 		var fd = new FormData();
 		fd.append('file',files[0]);
 		//var fullname = angular.element('#nom').val()+'-'+angular.element('#prenom').val();
 		ServiceEtudiant.uploadFile(fd).success(function(data){
 			$scope.etudiant.photo = data.valid;
 			$scope.errors = data.error;
 			console.log(data.error);
 		}).error(function(data, status, headers, config){
 			console.info(status+' : '+data+'\n'+headers);
 		})

 		/*var reader = new FileReader();

 		reader.onload = function(e) {
		      $scope.$apply(function() {
		          $scope.etudiant.photo = e.target.result//reader.result;
		      });
		  };

		  reader.readAsDataURL(files[0]);*/

 	};
	
}]);