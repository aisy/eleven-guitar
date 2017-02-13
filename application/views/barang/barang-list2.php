<main ng-app="search">
  <div class="container" ng-controller="searchctrl">
    <section>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

          <div class="widget-wrapper">
            <h4><i class="fa fa-shopping-bag"></i> Produk :</h4>
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

          <div class="md-form input-group grey lighten-5 z-depth-1">
            <span class="input-group-addon grey lighten-5" id="basic-addon1">
              <i class="fa fa-search"></i>
            </span>
            <input type="text" class="form-control grey lighten-5" placeholder="Cari Nama Produk..." ng-model="cari.nama_barang">
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

         <pagination page="currentPage" max-size="noOfPages" total-items="totalItems" items-per-page="entryLimit"></pagination>

       </div>

     </div>
   </section>

 </div>
</main>



