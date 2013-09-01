/*global angular, $, console*/

var Azaliya = angular.module('Azaliya', ['ngResource', 'ngLocale']);

(function (Azaliya) {
    'use strict';

    Azaliya.config(function ($locationProvider) {
        $locationProvider.hashPrefix('!');

        $(function() {
            angular.element('#quick-search').autocomplete( {
                url: 'api/search/goods?output=json',
                remoteDataType: 'json',
                useCache: false,
                processData: function(data) {
                    return data.data;
                }
            });
        });
    });
})(Azaliya);
