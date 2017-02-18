// The main angular app and the name linked in the html file
// More on modules: https://docs.angularjs.org/guide/module

// ng-messages here: https://docs.angularjs.org/api/ngMessages
var frameApp = angular.module('frameApp', ['ngMessages', 'ngRoute']);


// a helper function, can be called e.g. with ng-repeat='i in 5 | range'
// src: http://stackoverflow.com/questions/16824853/way-to-ng-repeat-defined-number-of-times-instead-of-repeating-over-array
frameApp.filter('range', function(){
  return function(n) {
    var res = [];
    for (var i = 0; i < n; i++) {
      res.push(i);
    }
    return res;
  };
});