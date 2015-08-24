acoisa.controller('loginCtrl', function($scope, $http){
    $scope.submit = function(){
        alert('opa');
        $http.get("/login")
        .then(function(response) {
            alert(response);
        });
    }
});