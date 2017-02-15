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

	// $scope.$emit("LOAD")
	$scope.activeMenu = 'Seluruh';

	// ambil method get dari web
	$http.get('http://localhost/eleven-guitar/barang/barang_json_get')
	.then(

		// jika ada data
		function success(data, status, header, config){

			$scope.items = data.data; // mengambil data dari http.get
			$scope.$emit('UNLOAD')

			// membuat model pencarian kosong untuk memanggil $watch dari model cari
			$scope.cari = {};

			// fungsi reset
			$scope.resetFilters = function () {
				// dibutuhkan untuk menjadi fungsi atau tidak akan memanggil $watch
				$scope.cari = {};
			};

			// mengatur pagination
			$scope.currentPage	= 1;
			$scope.totalItems	= $scope.items.lenght;
			$scope.entryLimit	= 9;
			$scope.maxSize = 5;
			$scope.noOfPages	= Math.ceil($scope.totalItems / $scope.entryLimit);

			// $watch pencarian untuk mengubah pagination, watch diambil dari model
			$scope.$watch('cari', function (newVal, oldVal) {
				$scope.filtered 	= filterFilter($scope.items, newVal);
				$scope.totalItems 	= $scope.filtered.length;
				$scope.noOfPages 	= Math.ceil($scope.totalItems / $scope.entryLimit);
				$scope.currentPage 	= 1;
			}, true);


		},

		// jika tidak ada data
		function error(data, status, header, config){
			// console.log('Tidak ada Data..');
			$scope.items=[];
		});

	});

	app.controller('loadCtrl', function($scope){
		$scope.$on("LOAD", function(){$scope.loading=true});
		$scope.$on("UNLOAD", function(){$scope.loading=false});
	});


	app.controller('sliderCtrl', function($scope, $http){

		$http.get('http://localhost/eleven2/Barang/barang_slider').then(
			function success(data, status, header, config){
				$scope.slider_item = data.data;
			},

			function error(data, status, header, config){
				console.log('Tidak ada data');
			});
		});
