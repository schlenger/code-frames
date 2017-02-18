// use the angular routing
frameApp.config(function ($routeProvider) {

  $routeProvider

  .when('/', {
    templateUrl: 'pages/start.html',
    controller: 'mainController'
  })

  .when('/list', {
    templateUrl: 'pages/list.html',
    controller: 'listController'
  })

  // pattern matching with :num -> $routeParams.num
  .when('/list/:num', {
    templateUrl: 'pages/list.html',
    controller: 'listController'
  })

});