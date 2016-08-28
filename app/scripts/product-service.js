'use strict';

angular.module('wistoba.product-service', [])
    .factory('productAPIservice', ['$http', function($http) {
        var productAPI = {};

        productAPI.Categories = ['Feinhaarpinsel', 'Feinborstpinsel', 'Flachpinsel', 'Spezialwerkzeug', 'Ringpinsel', 'Deckenbürsten', 'Flächenstreicher', 'Heizkörperpinsel', 'Fassadenpinsel', 'Abstäuber und Tapezierbürsten', 'Winkelpinsel und Quäste', 'Farbroller'];


        productAPI.getProducts = function() {
            return $http.get(appFiles.data + 'wistoba-produkte.json');
        }

        productAPI.getUsage = function() {
            return $http.get(appFiles.data + 'Einteilung.json');
        }

        productAPI.primFaktoren = function(zahl) {
            var primfaktoren = [];

            for (var i=2; i<=parseInt(zahl/2); i+=0) {
                if (zahl %i == 0) {
                    zahl/=i;
                    primfaktoren.push(i);
                } else {
                    i++;
                }
            }
            primfaktoren.push(zahl);
            return primfaktoren;
        }


        return productAPI;

    }]);

