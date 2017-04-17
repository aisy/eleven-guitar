<main ng-app="apps" id="top-section">

  <div class="fixed-action-btn smooth-scroll" style="bottom: 45px; right: 24px;">
    <a href="#top-section" class="btn-floating btn-large yellow darken-2">
      <i class="fa fa-arrow-up"></i>
    </a>
  </div>

  <div class="container">
    <section ng-controller="searchCtrl">

      <!-- Modal Detail Barang  -->

      <!-- Modal -->
      <div class="modal fade ql-modal" id="detailBarang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <!--Content-->
          <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title" id="myModalLabel">{{ detail_nama_barang }}</h4>
            </div>
            <!--Body-->
            <div class="modal-body">
              <!--Grid-->
              <div class="container-fluid">
                <div class="row">

                  <!--First column-->
                  <div class="col-md-3">
                    <h4>Galeri</h4>
                    <hr>
                    <!--Carousel Wrapper-->
                    <div id="carousel-example-1" class="carousel slide carousel-fade" data-ride="carousel">

                      <!--Slides-->
                      <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(13).jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(15).jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                          <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(16).jpg" alt="Third slide">
                        </div>
                      </div>
                      <!--/.Slides-->

                      <!--Controls-->
                      <a class="left carousel-control" href="#carousel-example-1" role="button" data-slide="prev">
                        <span class="icon-prev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#carousel-example-1" role="button" data-slide="next">
                        <span class="icon-next" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                      <!--/.Controls-->
                    </div>
                    <!--/.Carousel Wrapper-->
                  </div>
                  <!--/.First column-->

                  <!--Second column-->
                  <div class="col-md-4">
                    <!--Title-->
                    <h4>Informasi Produk</h4>
                    <hr>

                    <h1 class="yellow-text">{{ detail_nama_barang }}</h1>

                    <!--Price-->
                    <div class="price">
                      <p><span class="price-after">Rp. {{ detail_harga }}</span></p>
                      <!-- <span class="label">-20%</span> -->
                    </div>

                    <div class="chip yellow darken-2 white-text">
                      {{ detail_nama_kategori }}
                    </div>

                  </div>
                  <!--/.Second column-->

                  <!--Third column-->
                  <div class="col-md-5">
                    <h4>Penjelasan Produk</h4>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit est, ex nulla voluptates eaque aperiam repudiandae consectetur quae quod.</p>
                    <br>
                  </div>
                  <!--/.Third column-->
                </div>
              </div>
              <!--/.Grid-->

            </div>
            <!--Footer-->
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Keluar</button>
            </div>
          </div>
          <!--/.Content-->
        </div>
      </div>
      <!--/Modal-->



      <!-- Modal Detail Barang  -->


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
                <a class="btn-floating btn-action yellow darken-2" data-toggle="modal" data-target="#detailBarang" ng-click="showModal(li.id_barang)"><i class="fa fa-th-list"></i></a>

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
