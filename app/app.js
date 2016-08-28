'use strict';

angular.module('wistoba', [
    'ngRoute',
    'wistoba.catalog',
    'wistoba.product',
    'wistoba.product-service'
    ])
    .config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) {

        $locationProvider.html5Mode(false);

        $routeProvider
        .when("/", {
            templateUrl: appFiles.partials + 'cardlist.html',
            controller: 'catalogCtrl',
            controllerAs: 'cat'
        })
        .when("/:rubrik", {
            templateUrl: appFiles.partials + 'cardlist.html',
            controller: 'rubrikCtrl',
            controllerAs: 'cat'
    })
        .when("/product/:id", {
            templateUrl: appFiles.partials + 'product.html',
            controller: 'productCtrl',
            controllerAs: 'prod'
        })
            .otherwise({
                redirectTo: "/"
            })
       ;

    }])

    .run(function($rootScope, $location) {
        var history = [];

        $rootScope.$on('$routeChangeSuccess', function() {
            history.push($location.$path);
        });

        $rootScope.back = function () {
            var prevUrl = history.length > 1 ? history.splice(-2)[0] : "/";
            $location.path(prevUrl);
        };
    })

    .filter('colordrops', ['productAPIservice', function(productAPIservice) {

        return function(input) {
            return productAPIservice.primFaktoren(input);
        }
    }])

    .filter('escape', function() {
        return window.encodeURIComponent;
    })

    .filter('unique', function() {
        return function (arr, field) {
            return _.uniq(arr, function(a) { return a[field]; });
        };
    });
