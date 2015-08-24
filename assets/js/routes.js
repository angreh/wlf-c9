acoisa.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/x_example', {
        templateUrl: 'front/partials/login/index.html',
        controller: 'PhoneListCtrl'
      }).
      when('/login', {
        templateUrl: 'front/partials/login/index.html',
      }).
      otherwise({
        redirectTo: '/login'
      });
  }]);