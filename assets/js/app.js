'use strict';

/* App Module */

var acoisa = angular.module('acoisa', [
  'ngRoute',
  'gettext'
  
]);

acoisa.run(function(gettextCatalog){
    gettextCatalog.currentLanguage = 'pt';
    gettextCatalog.debug = true;
});