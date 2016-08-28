'use strict';

angular.module('wistoba.product', [])
    .controller('productCtrl', ['$scope', '$filter','productAPIservice', '$routeParams',
        function($scope, $filter, productAPIservice, $routeParams) {

            var vm = this;
            vm.product = {};
            vm.imagePath = appFiles.images;
            vm.productId = $routeParams.id;
            vm.categories = productAPIservice.Categories;

            productAPIservice.getProducts().success(function(data) {
                //$filter('filter')(array, expression, comparator, anyPropertyKey)
                vm.product = $filter('filter')(data.records, {artikel_nr: parseInt(vm.productId)}, false)[0];
                if (vm.product.bestellgroesse) {
                    vm.bestellgroesse = vm.product.bestellgroesse.split('|');
                } else {
                    vm.bestellgroesse = null;
                }

                if (vm.product.durchmesser_mm) {
                    vm.durchmesser = vm.product.durchmesser_mm.split('|');
                } else {
                    vm.durchmesser = null;
                }

                if (vm.product.haarlaenge_mm) {
                    vm.haarlaenge = vm.product.haarlaenge_mm.split('|');
                } else {
                    vm.haarlaenge = null;
                }

                if (vm.product.ve) {
                    vm.ve = vm.product.ve.split('|');
                } else {
                    vm.ve = null;
                }

               vm.farbtropfen = productAPIservice.primFaktoren(parseInt(vm.product.farbsystem));
               //console.log(vm.farbtropfen);


               vm.anwendungen = {
                   sortnr: '2', 'name': 'Lösemittelbasierende Lacke & Lasuren',
                   sortnr: '3', 'name': 'Wasserbasierende Lacke & Lasuren'
                }

                console.log(vm.anwendungen.sortnr);

            });



            return vm;

    }])

