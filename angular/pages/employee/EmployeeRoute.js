(function(){
  'use strict';

  angular.module('employee')
         .config(['$routeProvider', '$locationProvider', EmployeeRoutes]);

  function EmployeeRoutes($routeProvider, $locationProvider, $q){
    $routeProvider
      .when('/employee', {
        templateUrl: base_url + 'angular/pages/employee/view/content.html',
        controller: 'EmployeeController',
        controllerAs: 'employee'
      });
  }

})();
