<main ng-app="apps">
  <div class="container">
    <section ng-controller="searchCtrl">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

          <div class="widget-wrapper">
            <h4><i class="fa fa-shopping-bag"></i> Kategori Produk </h4>
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

            <!--Accordion wrapper-->
            <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="card">
                <div class="card-header darken-1" role="tab" id="headingOne">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseHarga" aria-expanded="true" aria-controls="collapseOne">
                    <h5 class="mb-0">
                      <i class="fa fa-price"></i> Harga <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                  </a>
                </div>
                <div id="collapseHarga" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                  <div class="card-block">
                    <fieldset class="form-group">
                      <input name="group1" type="radio" id="price1" ng-model="priceCategory" ng-value="1">
                      <label for="price1">Semua harga</label>
                    </fieldset>

                    <fieldset class="form-group">
                      <input name="group1" type="radio" id="price2" ng-model="priceCategory" ng-value="2">
                      <label for="price2">Dibawah 50</label>
                    </fieldset>

                    <fieldset class="form-group">
                      <input name="group1" type="radio" id="price3" ng-model="priceCategory" ng-value="3">
                      <label for="price3">Diatas 50</label>
                    </fieldset>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header darken-1" role="tab" id="headingTwo">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <h5 class="mb-0">
                      Urutkan <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                  </a>
                </div>

                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="card-block">
                    <div class="card-block">

                      <fieldset class="form-group">
                        <input name="group2" type="radio" id="namaAsc" ng-model="orderLabel" ng-value="1">
                        <label for="namaAsc" ng-click="orderName = 'nama_barang'; desc = false">Nama Barang (Ascending)</label>
                      </fieldset>

                      <fieldset class="form-group">
                        <input name="group2" type="radio" id="namaDesc" ng-model="orderLabel" ng-value="2">
                        <label for="namaDesc" ng-click="orderName = 'nama_barang'; desc = true">Nama Barang (Descending)</label>
                      </fieldset>

                      <fieldset class="form-group">
                        <input name="group2" type="radio" id="terbaru" ng-model="orderLabel" ng-value="3">
                        <label for="terbaru" ng-click="orderName = 'id_barang'; desc = true">Produk Terbaru</label>
                      </fieldset>

                      <fieldset class="form-group">
                        <input name="group2" type="radio" id="terlama" ng-model="orderLabel" ng-value="4">
                        <label for="terlama" ng-click="orderName = 'id_barang'; desc = false">Produk Terlama</label>
                      </fieldset>

                      <fieldset class="form-group">
                        <input name="group2" type="radio" id="termurah" ng-model="orderLabel" ng-value="5">
                        <label for="termurah" ng-click="orderName = 'harga'; desc = false">Harga Termurah</label>
                      </fieldset>

                      <fieldset class="form-group">
                        <input name="group2" type="radio" id="termahal" ng-model="orderLabel" ng-value="6">
                        <label for="termahal" ng-click="orderName = 'harga'; desc = true">Harga Termahal</label>
                      </fieldset>
                      <!-- {{ orderLabel }}
                      {{ orderName }}
                      {{ desc }} -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--/.Accordion wrapper-->


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
          <!-- <div class="row"> -->
          <div class="row" infinite-scroll="ghRepo.nextPage()" infinite-scroll-distance="1">

            <div class="col-md-6" ng-repeat="li in ghRepo.repos | orderBy:orderName:desc | filter:cari | priceFilter:priceCategory as filteredItems" ng-init="ubahInt(li.harga)">

              <!--Card-->
              <div class="card ovf-hidden">

                <!--Card image-->
                <div class="view overlay hm-white-slight">
                  <img src="<?= base_url() ?>products/1.jpg" class="img-fluid" alt="">
                  <a>
                    <div class="mask waves-effect waves-light"></div>
                  </a>
                </div>
                <!--/.Card image-->

                <!--Button-->
                <a class="btn-floating btn-action activator yellow darken-2"><i class="fa fa-th-list"></i></a>

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
                    <a class="btn btn-default" href="produk/{{ li.id_barang }}">
                      Lihat Selengkapnya
                    </a>

                  </div>
                  <!--/.Content-->

                </div>
                <!--/.Card reveal-->

              </div>
              <!--/.Card-->

            </div>

            <div ng-show='ghRepo.busy'>
              <div class="row">
                <div class="col-lg-12" align="center">
                  <div class="preloader-wrapper small active">
                    <div class="spinner-layer spinner-yellow-only">
                      <div class="circle-clipper left">
                        <div class="circle"></div>
                      </div><div class="gap-patch">
                        <div class="circle"></div>
                      </div><div class="circle-clipper right">
                        <div class="circle"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div ng-show='elv.busy'>Loading data...</div> -->

            <div ng-hide="filteredItems.length" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
              <div class="jumbotron text-xs-center">
                <div class="container">
                  <i class="fa fa-frown-o fa-3x yellow-text"></i>
                  <h5>Maaf Produk yang anda cari tidak di temukan atau tidak tersedia</h5>
                </div>
              </div>
            </div>

    </div>
    <!-- List item -->


  </div>

</div>

</div>
</section>

</div>
</main>
