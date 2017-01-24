/**
* search Module
*
* Description
*/

// buat module
var app = angular.module('search', ['ui.bootstrap']);

//mengatur filter saat aplikasi web berjalan
app.filter('startFrom', function () {
	return function (input, start) {
		if (input) {
			start = +start;
			return input.slice(start);
		}
		return [];
	};
});

// buat controller
app.controller('searchctrl', function($scope, $http, filterFilter){

	$scope.$emit("LOAD")

	// ambil method get dari web
	$http.get('http://localhost/eleven-guitar/barang/barang_json_get')
	.then(

		// jika ada data
		function success(data, status, header, config){

			// mengambil data dari http.get
			$scope.items = data.data;
			$scope.$emit('UNLOAD')
			// console.log(data);

			// membuat model pencarian kosong untuk memanggil $watch
			$scope.search = {};

			$scope.resetFilters = function () {
				// dibutuhkan untuk menjadi fungsi atau tidak akan memanggil $watch
				$scope.search = {};
			};

			// mengatur pagination
			$scope.currentPage	= 1;
			$scope.totalItems	= $scope.items.lenght;
			$scope.entryLimit	= 2;
			$scope.noOfPages	= Math.ceil($scope.totalItems / $scope.entryLimit);

			// $watch pencarian untuk mengubah pagination
			$scope.$watch('search', function (newVal, oldVal) {
				$scope.filtered 	= filterFilter($scope.items, newVal);
				$scope.totalItems 	= $scope.filtered.length;
				$scope.noOfPages 	= Math.ceil($scope.totalItems / $scope.entryLimit);
				$scope.currentPage 	= 1;
			}, true);

		},

		// jika tidak ada data
		function error(data, status, header, config){
			console.log('Tidak ada Data..');
		});
	
});

app.controller('loadctrl', function($scope){
	$scope.$on("LOAD", function(){$scope.loading=true});
	$scope.$on("UNLOAD", function(){$scope.loading=false});
});
