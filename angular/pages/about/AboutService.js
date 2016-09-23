(function(){
  'use strict';

  angular.module('about')
         .service('aboutService', ['$q', AboutService]);

  /**
   * About DataService
   * Uses embedded, hard-coded data model; acts asynchronously to simulate
   * remote data service call(s).
   *
   * @returns {{loadContent: Function}}
   * @constructor
   */
  function AboutService($q){
    var data = {
      title: 'Hello World',
      description: 'My self MEHEDI HASAN, This is a ready-to-use AngularJS starter app with Codeigniter 3 based on Google Material Design. It uses Angular Material components. There is CRUD example using Laravel Elequent ORM inside Codeigniter. Check this out its AWESOME.'
    };

    // Promise-based API
    return {
      loadContent : function() {
        // Simulate async nature of real remote calls
        return $q.when(data);
      }
    };
  }

})();
