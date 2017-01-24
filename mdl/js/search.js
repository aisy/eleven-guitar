/**
* search Module
*
* Description
*/

// buat module
var app = angular.module('search', []);

// buat controller
app.controller('searchctrl', function($scope, $http){

	// ambil method get dari web
	$http.get('http://localhost/eleven-gitar/barang/barang_json_get')
	.then(

		// jika ada data
		function success(data, status, header, config){
			$scope.items = data.data;
			// console.log(data);
		},

		// jika tidak ada data
		function error(data, status, header, config){
			console.log('Tidak ada Data..');
	});
	
});
