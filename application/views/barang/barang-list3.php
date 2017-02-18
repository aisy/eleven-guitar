<main ng-app="search">
  <div class="container" ng-controller="loadCtrl">
    <section ng-controller="searchctrl">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

          <div class="widget-wrapper">
            <h4><i class="fa fa-shopping-bag"></i> Kategori Produk :</h4>
            <br>
            <div class="list-group">
              <a href="#" ng-class="{active : activeMenu === 'Seluruh'}" ng-click="resetFilters(); activeMenu = 'Seluruh';" class="list-group-item">Seluruh Produk</a>
              <a href="#" ng-class="{active : activeMenu === 'Gitar'}" ng-click="cari.nama_kategori='Gitar'; activeMenu='Gitar';" class="list-group-item">Gitar</a>
              <a href="#" ng-class="{active : activeMenu === 'Bass'}" ng-click="cari.nama_kategori='Bass'; activeMenu='Bass'" class="list-group-item">Bass</a>
              <a href="#" ng-class="{active : activeMenu === 'Pick'}" ng-click="cari.nama_kategori='Pick'; activeMenu='Pick'" class="list-group-item">Pick</a>
              <a href="#" ng-class="{active : activeMenu === 'Ampli'}" ng-click="cari.nama_kategori='Ampli'; activeMenu='Ampli'" class="list-group-item">Ampli</a>
            </div>
          </div>

          <div class="widget-wrapper">
            <h4><i class="fa fa-list-alt"></i> Filter Item</h4>
            <br>
            <div class="card">
              <div class="card-block">

                <!-- form range harga -->
                <div class="md-form">
                  <div class="row">
                    <!--First column-->
                    <div class="col-md-6">
                      <div class="md-form">
                        <input ng-model="priceMin" type="number" id="form81" class="form-control validate">
                        <label for="form81">Harga Min</label>
                      </div>
                    </div>

                    <!--Second column-->
                    <div class="col-md-6">
                      <div class="md-form">
                        <input ng-model="priceMax" type="number" id="form82" class="form-control validate">
                        <label for="form82">Harga Max</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- form range harga -->
                <!-- {{ totalItems }} -->
                {{totalItems}}

              </div>
            </div>
          </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">

          <div class="md-form input-group grey lighten-5 z-depth-1">
            <span class="input-group-addon grey lighten-5" id="basic-addon1">
              <i class="fa fa-search"></i>
            </span>
            <input type="text" class="form-control grey lighten-5 search" placeholder="Cari Nama Produk..." ng-model="cari.nama_barang">
          </div>

          <!-- List item -->
          <div class="row">

            <div class="col-md-6" ng-repeat="li in filtered = items | filter:cari | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit | filter:rangePrice">

              <!--Card-->
              <div class="card ovf-hidden">

                <!--Card image-->
                <div class="view overlay hm-white-slight">
                  <img src="http://mdbootstrap.com/images/ecommerce/reg/reg%20(21).jpg" class="img-fluid" alt="">
                  <a>
                    <div class="mask waves-effect waves-light"></div>
                  </a>
                </div>
                <!--/.Card image-->

                <!--Button-->
                <a class="btn-floating btn-action activator yellow darken-1"><i class="fa fa-chevron-right"></i></a>

                <!--Card content-->
                <div class="card-block text-xs-center">
                  <!--Category & Title-->
                  <h5>{{ li.nama_kategori }}</h5>
                  <h4 class="card-title yellow-text"><strong>{{ li.nama_barang }}</strong></h4>

                  <!--Card footer-->
                  <div class="card-footer green-text">
                    <span class="center">Rp. {{ li.harga }}</span>
                  </div>

                </div>
                <!--/.Card content-->

                <!--Card reveal-->
                <div class="card-reveal">
                  <!--Content-->
                  <div class="content text-xs-center">

                    <h4 class="card-title">Detail Produk <i class="fa fa-close"></i></h4>
                    <hr>

                    <!--Description-->
                    <p class="card-text">{{ li.keterangan | limitTo:100 }}</p>
                    <hr>

                    <!--Social Icons-->
                    <button type="button" class="btn btn-default">
                      Lihat Selengkapnya
                    </button>

                  </div>
                  <!--/.Content-->

                </div>
                <!--/.Card reveal-->

              </div>
              <!--/.Card-->

            </div>

            <div ng-hide="totalItems" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
              <div class="jumbotron text-xs-center">
                <div class="container">
                  <i class="fa fa-frown-o fa-4x yellow-text"></i>
                  <h1>Maaf Produk yang anda cari tidak di temukan atau tidak tersedia</h1>
                </div>
              </div>
            </div>

          </div>
          <!-- List item -->

          <!-- Pagination  -->
          <div class="text-xs-center">
            <pagination
            class="z-depth-1"
            page="currentPage"
            max-size="maxSize"
            total-items="totalItems"
            boundary-links="true" rotate="false"
            items-per-page="entryLimit"
            >
          </pagination>
        </div>

      </div>

    </div>
  </section>

</div>
</main>
