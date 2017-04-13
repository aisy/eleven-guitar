var app = angular.module('apps', ['infinite-scroll']);

app.filter('priceFilter', function() {
    return function(input, priceCategory) {
        var out = [];

        angular.forEach(input, function(row) {
            switch (priceCategory) {
                case 1:
                    out.push(row);
                    break;
                case 2:
                    if (row.harga <= 50)
                        out.push(row);
                    break;
                case 3:
                    if (row.harga > 50)
                        out.push(row);
                    break;
            }
        });

        return out;
    };
});

app.factory('GHRepo', function($http) {
    var GHRepo = function() {
        this.repos = [];
        this.busy = false;
        this.page = 1;
        this.allData = 1;
    };

    GHRepo.prototype.nextPage = function() {
        if (this.repos.length < this.allData) {
            if (this.busy) return;
            this.busy = true;

            var url = "http://localhost/elv-admin/barang/api/" + this.page + "/5";
            $http.get(url).then(function(response) {
                console.log(response.data);
                var items = response.data.items;

                for (var i = 0; i < items.length; i++) {
                    this.repos.push(items[i]);
                }
                this.page += 1;
                this.busy = false;
                this.allData = response.data.total_count;
            }.bind(this));
        }
    };

    return GHRepo;
});

app.controller('searchCtrl', function($scope, $http, $filter, GHRepo) {

    $scope.activeMenu = 'Seluruh';
    $scope.priceCategory = 1;
    $scope.orderName = "id_barang";
    $scope.orderLabel = 3;
    $scope.desc = true;
    $scope.ghRepo = new GHRepo();

    $http.get('http://localhost/elv-admin/barang/api').then(

        function success(data, status, header, config) {

            $scope.items = data.data;
            $scope.totalItems = $scope.items.length;
            $scope.batas = 2;

            // $scope.data        = $scope.items.slice(0, 1);

            // $scope.nextPage = function(){
            //
            //   if($scope.batas +2 <= $scope.items.length){
            //     $scope.batas += 2;
            //   }else{
            //     $scope.batas = $scope.items.length;
            //   }
            //   // $scope.data = $scope.items.slice(0, $scope.data.length + 4);
            // }

            $scope.resetFilters = function() {
                $scope.cari = {};
                // $scope.ghRepo = new GHRepo();
            };

            $scope.ubahInt = function(harga) {
                return parseInt(harga);
            };

            $scope.$watch('cari.nama_kategori', (newVal, oldVal) => {
                $scope.ghRepo.nextPage();
            });
        },
        function error(data, status, header, config) {
            $scope.items = {};
        }


    );

    // Show Modal
    $scope.showModal = function (id_barang) {

      $http.get('http://localhost/elv-admin/serviceBarang/getBarangDetail/' + id_barang).then(

          function success(response) {
              var data = response.data;
              console.log(data);
              $scope.detail_nama_barang = data.nama_barang;
              $scope.detail_nama_kategori = data.nama_kategori;
              $scope.detail_keterangan = data.keterangan;
              $scope.detail_foto = data.foto;
              $scope.detail_harga = data.harga;
          }

      );
    };
});

app.controller('halamanUtama', function($scope, $http) {
    $http.get('admin.elevenguitar.com/ServiceHalut/getData').then(
      function success(data){
        $scope.konten = data.data;
      },function error(){
        console.log("error");
      }
    );
});

app.controller('testimoni',function($scope, $http) {
  $http.get('').then(
    function success(data){
      $scope.konten = data;
    },function error(){
      console.log("error");
    }
  );
});

app.controller('logika', function($scope, $http) {
  $http.get('').then(
    function success(data) {
      $scope.konten = data;
    },
    function error() {
      console.log("error");
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
