// This is an example controller, pass services here.
// A list of available services can be found here:
// https://docs.angularjs.org/api/ng/service
frameApp.controller('mainController', ['$scope', '$log', 'frameService', function ($scope, $log, frameService) {
  
  // define scope variables
  $scope.name = 'Mat Schlenker';
  $scope.source = 'GitHub';

  // define scope functions
  $scope.someFunction = function (text) { console.log(text) };

  // see more here: https://docs.angularjs.org/api/ng/service/$log
  $scope.log = function () {
    $log.log('This is an log message.');
    $log.info('This is an info message.');
    $log.error('This is an error message.');
    $log.warn('This is an warning message.');
    $log.debug('This is an debug message.');
  };

  $scope.websites = [ 
    {
      url: 'http://github.com',
      name: 'github.com'
    },
    {
      url: 'http://google.com',
      name: 'google.com'
    },
    {
      url: 'http://blog.fefe.de',
      name: 'blog.fefe.de'
  }];

  $scope.addOne = function () {
    $scope.websites.push({
      url: 'http://example.com',
      name: 'example.com'
    });
  }

  // use the two way binding and watcher
  $scope.information = frameService.someInformation;

  $scope.$watch('information', function() {
    frameService.someInformation = $scope.information;
  });

}]);

// a second controller
frameApp.controller('listController', ['$scope', '$routeParams', 'frameService', function ($scope, $routeParams, frameService) {
  
  // get the information from the routing
  $scope.num = $routeParams.num;

  // use the two way binding and watcher
  $scope.information = frameService.someInformation;

  $scope.$watch('information', function() {
    frameService.someInformation = $scope.information;
  });

  // a helper function
  $scope.range = function(n) {
    return new Array(n);
  };

  // custom var
  $scope.group = 'Examplegroup';

}]);