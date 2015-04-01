'use strict';
app.controller('DatepickerDemoCtrl', function ($scope) {
  $scope.today = function() {
    $scope.dt = new Date();
  };

  $scope.clear = function () {
    $scope.dt = null;
  };

  // Disable weekend selection
  $scope.disabled = function(date, mode) {
    return ( mode === 'day' && ( date.getDay() === 0 || date.getDay() === 6 ) );
  };

  $scope.toggleMin = function() {
    var d= new Date();
    var year=parseInt(d.getFullYear())-25;
    $scope.minDate = $scope.minDate ? null : new Date().setFullYear(year);
  };
  $scope.toggleMin();

  $scope.open = function($event) {
    $event.preventDefault();
    $event.stopPropagation();

    $scope.opened = true;
  };

  var d= new Date();
  var year=parseInt(d.getFullYear())-5;
  d.setDate(1);
  d.setFullYear(year);
  d.setMonth(0);
  $scope.maxDate = d;


 console.log(  $scope.maxDate);

  $scope.dateOptions = {
    formatYear: 'yy',
    startingDay: 1
  };

  $scope.formats = ['dd-MMMM-yyyy', 'yyyy/MM/dd', 'dd.MM.yyyy', 'shortDate'];
  $scope.format = $scope.formats[0];
});