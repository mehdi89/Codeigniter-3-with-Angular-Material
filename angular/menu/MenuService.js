(function(){
  'use strict';

  angular.module('menu')
         .service('menuService', ['$q', MenuService]);

  /**
   * Menu DataService
   * Uses embedded, hard-coded data model; acts asynchronously to simulate
   * remote data service call(s).
   *
   * @returns {{loadMenu: Function}}
   * @constructor
   */
  function MenuService($q){
    var menuItems = [
      {
        title: 'Employee',
        href: '#/employee',
        colorHex: 'A53434'
      },
      {
        title: 'Department',
        href: '#/department',
        colorHex: '#3b78e7'
      },
      {
        title: 'About',
        href: '#/about',
        colorHex: '21909E'
      },
      {
        title: 'Credits',
        href: '#/credits',
        colorHex: '#fdba2c'
      }
    ];

    // Promise-based API
    return {
      loadMenu : function() {
        // Simulate async nature of real remote calls
        return $q.when(menuItems);
      }
    };
  }

})();
