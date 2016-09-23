(function(){
  'use strict';

  angular.module('credits')
         .config(['$routeProvider', '$locationProvider', CreditsRoute]);

  function CreditsRoute($routeProvider, $locationProvider, $q){
    $routeProvider
      .when('/credits', {
        templateUrl: base_url + 'angular/pages/credits/view/content.html',
        controller: 'CreditsController',
        controllerAs: 'credits'
      });
  }

})();
