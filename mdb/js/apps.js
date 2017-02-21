
var app = angular.module('apps',['infinite-scroll']);

app.filter('priceFilter', function () {
  return function (input, priceCategory) {
    var out = [];

    angular.forEach(input, function(row) {
      switch (priceCategory) {
        case 1:
          out.push(row);
        break;

        case 2:
          if(row.harga <= 50)
            out.push(row);
        break;

        case 3:
          if(row.harga > 50)
            out.push(row);
        break;
      }
    });

    return out;
  };
});

app.controller('searchCtrl', function($scope, $http){

  $scope.activeMenu = 'Seluruh';
  $scope.priceCategory = 1;

  $http.get('http://localhost/eleven-guitar/barang/barang_json_get').then(

    function success(data, status, header, config){

      $scope.items       = data.data;
      $scope.totalItems  = $scope.items.length;
      $scope.data        = $scope.items.slice(0, 1);

      $scope.nextPage = function(){
        $scope.data = $scope.items.slice(0, $scope.data.length + 4);
      }

      $scope.resetFilters = function (){
				$scope.cari = {};
			};

    },
    function error(data, status, header, config){
      $scope.items = {};
    }


  );
});

// app.controller('searchCtrl', function($scope, Elv){
//   $scope.elv = new Elv();
// });
//
// app.factory('Elv', function($http){
//   var Elv = function() {
//     this.repos = [],
//     this.busy  = false;
//     this.after = 1;
//   };
//
//   Elv.prototype.nextPage = function () {
//     if(this.busy) return;
//     this.busy = true;
//
//     var url = "https://api.github.com/search/repositories?q=angular&page="+ this.page + "&per_page=50";
//
//     $http.get(url).success(function(data){
//       var items = data.items;
//
//       for(var i =0; i < items.length; i++){
//         this.repos.push(items[i].data);
//       }
//
//       // this.after = this.items[this.items.length -1 ].id;
//       this.after += 1
//       this.busy=false;
//
//     }.bind(this));
//
//   };
//
//   return Elv;
// });
