/**
* search Module
*
* Description
*/
var app = angular.module('search', []);

app.controller('search', function($scope, $http){
	$http.get('').success(function(data, status, header, config) {
		$scope.items = data.data;
	}).error(function(data, status, header, config){
		console.log('Tidak ada Data..');
	});
});