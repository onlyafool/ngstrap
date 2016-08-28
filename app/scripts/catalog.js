'use strict';

angular.module('wistoba.catalog', [])
    .controller('catalogCtrl', ['$scope', '$filter', 'productAPIservice',
        function($scope, $filter, productAPIservice) {

        var vm = this;
        vm.imagePath = appFiles.images;
        vm.order = "sorte";

        vm.categories = productAPIservice.Categories;
            console.log(vm.categories);


        productAPIservice.getProducts().success(function(data) {
            vm.productList = data.records;
            //console.log($scope.productList);
        });

    }])

    .controller('rubrikCtrl', ['$scope', '$filter', 'productAPIservice', '$routeParams',
        function($scope, $filter, productAPIservice, $routeParams) {

            var vm = this;
            vm.imagePath = appFiles.images;
            vm.order = "artikel_nr";
            vm.rubrik = $routeParams.rubrik;
            vm.categories = productAPIservice.Categories;

            productAPIservice.getProducts().success(function(data){
                vm.productList = $filter('filter')(data.records, {rubrik: vm.rubrik}, false);
                //console.log($scope.productList);


                });





    }])
