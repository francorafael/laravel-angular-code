/**
 * Created by rafael.franco on 17/03/2016.
 */
angular.module('app.controllers').controller('LoginController', ['$scope', '$location', 'OAuth', function($scope, $location, OAuth){
    $scope.user = {
        username: '',
        password: ''
    };

    //Autenticando
    $scope.login = function() {
        console.log($scope.user);
        OAuth.getAccessToken($scope.user).then(function(){
            $location.path('home');
        }), function () {
            alert('Login inválido');
        };
    };
}]);