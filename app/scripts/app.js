'use strict';
//var  _URL_ = "http://localhost/ecole/src/controllers/";

var app = angular.module('ecoleApp',
 ['ngAnimate',
 'ngRoute',
 'angularUtils.directives.dirPagination',
 'ui.bootstrap',
 'ngMessages',
 'ngLoadingSpinner']);

app.config(['$routeProvider', function ($routeProvider) {
  
  $routeProvider
  .when('/', 
    {
      templateUrl: 'views/login.html',
      controller: 'LoginCtrl'
    })
  .when('/contact', 
    {
      templateUrl: 'views/contact.html',
      controller: 'ContactCtrl'
    })
  .when('/etudiants', 
    {
      templateUrl: 'views/etudiant/etudiants.html',
      controller: 'EtudiantCtrl'
    })
  .when('/etudiants/inscription', 
    {
      templateUrl: 'views/etudiant/inscriptionEtudiant.html',
      controller: 'EtudiantCtrl'
    })
  .otherwise({ redirectTo: '/' });
}]);
