(function(){
  'use strict';

  angular.module('purpose')
         .config(['$routeProvider', '$locationProvider', PurposeRoutes]);

  function PurposeRoutes($routeProvider, $locationProvider, $q){
    $routeProvider
      .when('/purpose', {
        templateUrl: base_url + 'src/pages/purpose/view/content.html',
        controller: 'PurposeController',
        controllerAs: 'page'
      });
  }

})();
