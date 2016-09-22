(function(){
  'use strict';

  angular.module('requisition')
         .config(['$routeProvider', '$locationProvider', RequisitionRoutes]);

  function RequisitionRoutes($routeProvider, $locationProvider, $q){
    $routeProvider
      .when('/requisition', {
        templateUrl: base_url + 'src/pages/requisition/view/content.html',
        controller: 'RequisitionController',
        controllerAs: 'page'
      });
  }

})();
