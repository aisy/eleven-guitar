<main ng-app="search">
  <div class="container" ng-controller="searchctrl">
    <section>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

          <div class="widget-wrapper">
            <h4>Kategori:</h4>
            <br>
            <div class="list-group">
              <a href="#" ng-click="resetFilters()" class="list-group-item">Seluruh Produk</a>
              <a href="#" ng-click="cari.nama_kategori='Gitar'" class="list-group-item">Gitar</a>
              <a href="#" ng-click="cari.nama_kategori='Bass'" class="list-group-item">Bass</a>
              <a href="#" ng-click="cari.nama_kategori='Pick'" class="list-group-item">Pick</a>
              <a href="#" ng-click="cari.nama_kategori='Ampli'" class="list-group-item">Ampli</a>
            </div>
          </div>

          <div class="widget-wrapper">
            <h4>Subscription form:</h4>
            <br>
            <div class="card">
              <div class="card-block">
                <p><strong>Subscribe to our newsletter</strong></p>
                <p>Once a week we will send you a summary of the most useful news</p>
                <div class="md-form">
                  <i class="fa fa-user prefix"></i>
                  <input type="text" id="form1" class="form-control">
                  <label for="form1">Your name</label>
                </div>
                <div class="md-form">
                  <i class="fa fa-envelope prefix"></i>
                  <input type="text" id="form2" class="form-control">
                  <label for="form2">Your email</label>
                </div>
                <button class="btn btn-primary">Submit</button>

              </div>
            </div>
          </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">

          <div class="md-form input-group">
            <span class="input-group-addon" id="basic-addon1"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Cari Nama Produk..." ng-model="cari.nama_barang">
          </div>

          <!-- List item -->
          <div class="row">

            <div class="col-md-6" ng-repeat="li in filtered = items | filter:cari | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit" class="mdl-card mdl-cell mdl-cell--4-col mdl-shadow--3dp">

              <!--Card-->
              <div class="card card-cascade narrower">

                <!--Card image-->
                <div class="view overlay hm-white-slight">
                  <img src="http://mdbootstrap.com/images/ecommerce/reg/reg%20(21).jpg" class="img-fluid" alt="">
                  <a>
                    <div class="mask waves-effect waves-light"></div>
                  </a>
                </div>
                <!--/.Card image-->

                <!--Card content-->
                <div class="card-block text-xs-center">
                  <!--Category & Title-->
                  <h5>{{ li.nama_kategori }}</h5>
                  <h4 class="card-title"><strong><a href="">{{ li.nama_barang }}</a></strong></h4>

                  <!--Description-->
                  <p class="card-text">{{ li.keterangan | limitTo:100 }}</p>

                  <!--Card footer-->
                  <div class="card-footer">
                    <span class="left">Rp. {{ li.harga }}</span>
                    <span class="right">
                      <a class="" data-toggle="tooltip" data-placement="top" title="Quick Look">
                      <i class="fa fa-list"></i></i>
                      </a>
                    </span>
                  </div>

                </div>
                <!--/.Card content-->

              </div>
              <!--/.Card-->

            </div>

          </div>
          <!-- List item -->

        </div>

      </div>
    </section>

  </div>
</main>


