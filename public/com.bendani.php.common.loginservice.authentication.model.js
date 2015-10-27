angular.module('com.bendani.bibliomania.authentication.model', [ 'ngResource' ])
    .factory('Authentication', ['$resource', function ($scope, $resource) {
        var url = $scope.baseUrl + "login";
        return $resource(url, {});
    } ]);
