angular.module('com.bendani.php.common.loginservice.login.directive', ['com.bendani.bibliomania.authentication.model'])
    .directive('login', ['Authentication', function (Authentication){
        return {
            scope: true,
            restrict: "E",
            templateUrl: function($scope){
                return $scope.$parent.partialsUrl + "packages/bendani/php-common/login-service/login.html";
            },
            controller: ['$scope', function($scope) {
                $scope.login = function (user) {
                    Authentication.save(user, function (){
                        alert('success login');
                    });
                };
            }]
        };
    }]);