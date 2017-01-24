/**
* search Module
*
* Description
*/

var app = angular.module('search', []);

// app.controller('searchctrl', function($scope, $http){
// 	$http.get('http://localhost/eleven-gitar/barang/barang_json_get')
// 	.success(
// 		function(data, status, header, config) {
// 			$scope.items = data;
// 		})
// 	.error(
// 		function(data, status, header, config){
// 			console.log('Tidak ada Data..');
// 		});
// });

app.controller('searchctrl', function($scope, $http){
	$http.get('http://localhost/eleven-gitar/barang/barang_json_get')
	.then(
		function success(data, status, header, config){
			$scope.items = data.data;
			console.log(data);
		},
		function error(data, status, header, config){
			console.log('Tidak ada Data..');
	});
});
