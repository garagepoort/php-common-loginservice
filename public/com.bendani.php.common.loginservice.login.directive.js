angular.module('com.bendani.php.common.loginservice.login.directive', ['com.bendani.bibliomania.authentication.model'])
    .directive('login', ['Authentication', '$rootScope', function (Authentication, $rootScope){
        return {
            scope: true,
            restrict: "E",
            template : '<div ng-include="getTemplateUrl()"></div>',
            controller: ['$scope', function($scope) {
                $scope.login = function (user) {
                    Authentication.save(user, function (data){
                        $rootScope.loggedInUser = data;
                        alert('success login');
                    });
                };

                $scope.getTemplateUrl = function(){
                    return $scope.$parent.baseUrl + "packages/bendani/php-common/login-service/login.html";
                }
            }]
        };
    }]);