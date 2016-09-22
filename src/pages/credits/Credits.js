(function(){
  'use strict';

  // Prepare the 'purpose' module for subsequent registration of controllers and delegates
  angular.module('credits', [ 'ngMaterial', 'ngRoute' ])
  .controller('CreditsController', [
          CreditsController
       ]);

  /**
   * Controller
   * @constructor
   */
  function CreditsController() {
    var self = this;
    console.log(self); 
    /**
     * No functionality here
     */
  }
})();
