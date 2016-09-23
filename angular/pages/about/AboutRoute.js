(function(){
  'use strict';

  angular.module('about')
         .config(['$routeProvider', '$locationProvider', AboutRoutes]);

  function AboutRoutes($routeProvider, $locationProvider, $q){
    $routeProvider
      .when('/about', {
        templateUrl: base_url + 'angular/pages/about/view/content.html',
        controller: 'AboutController',
        controllerAs: 'about'
      })
      .when('/', {
        templateUrl: base_url + 'angular/pages/about/view/content.html',
        controller: 'AboutController',
        controllerAs: 'about'
      });
  }

})();
