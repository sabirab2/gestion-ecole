'use strict';
app.directive('alertEcole', [function () {
	return {
		priority: 0,
		template: '<div class="alert-shadow alert alert-dismissible alert-success"  ng-hide="!message" ng-show="message" ng-click="message=\'\'" ng-blur="message=\'\'" ><button type="button" class="close" data-dismiss="alert" aria-hidden="true" ng-click="message=\'\'">&times;</button><strong ng-transclude> </strong></div>',
		
		replace: true,
		transclude: true,
		restrict: 'A'
		
	};
}])

