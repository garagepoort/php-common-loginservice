angular.module('com.bendani.php.common.loginservice.login.directive', [])
    .directive('login', function (){
        return {
            scope: true,
            restrict: "E",
            templateUrl: function($scope){
                return $scope.$parent.partialsUrl + "login.html";
            },
            controller: ['$scope', function($scope) {
                $scope.login = function (user) {

                };
            }]
        };
    });