<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />

<div class="android-content mdl-layout__content">
  <div class="android-more-section" ng-app="search">

    <div>
      <div class="android-card-container mdl-grid" ng-controller="searchctrl">

        <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-phone mdl-card-search mdl-shadow--12dp">

          <div class="mdl-grid">

            <div class="mdl-cell mdl-cell--3-col mdl-card mdl-shadow--3dp">
              <div class="mdl-card__title">
                <i class="material-icons">redeem</i> <h5 class="mdl-card__title-text">Produk</h5>
              </div>
              <hr>
              <div class="mdl-card__supporting-text">

                <ul class="mdl-list">
                  <li class="mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                      <a href="" ng-click="resetFilters()">Semua Produk</a>
                    </span>
                  </li>
                  <li class="mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                      <a href="" ng-click="cari.id_kategori='1' ">Gitar</a>
                    </span>
                  </li>

                  <li class="mdl-list__item">
                    <span class="mdl-list__item-primary-content">
                     <a href="" ng-click="cari.id_kategori='2'">Bass</a>
                   </span>
                 </li>
               </ul>

             </div>
             <div class="mdl-card__actions">
              <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="" data-upgraded=",MaterialButton">
                androidify.com
                <i class="material-icons">chevron_right</i>
              </a>
            </div>
          </div>

          <div class="mdl-card mdl-cell mdl-cell--9-col mdl-shadow--3dp">
            <div class="mdl-card__title">
              <div class="mdl-grid mdl-cell mdl-cell--12-col mdh-expandable-search mdl-cell--hide-phone" style="margin:0">
                <i class="material-icons">search</i>
                <!--         <form action="#"> -->
                <input type="text" placeholder="Pencarian" size="1" ng-model="cari.nama_barang">
                <!-- </form> -->
              </div>
            </div>
            <hr>
            <div class="mdl-card__supporting-text">
              <div class="mdl-grid">
                <div ng-repeat="li in filtered = items | filter:cari | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit" class="mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--4dp">
                  <div class="mdl-card__media">
                    <img src="products/{{ li.foto }}">
                  </div>
                  <div class="mdl-card__title">
                    <h4 class="mdl-card__title-text">{{ li.nama_barang }}</h4>
                  </div>
                  <div class="mdl-card__supporting-text">
                    <p>Rp. {{ li.harga }}</p>
                    <span class="mdl-typography--font-light mdl-typography--subhead">
                      {{ li.keterangan | limitTo:100 }}
                    </span>
                  </div>
                  <div class="mdl-card__actions">
                    <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                      Lihat Detail
                      <i class="material-icons">chevron_right</i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <hr>
            <div class="mdl-card__actions">
              <!-- <div class="mdl-cell mdl-cell--12-col"> -->
                <pagination page="currentPage" max-size="noOfPages" total-items="totalItems" items-per-page="entryLimit"></pagination>
              <!-- </div> -->
            </div>
          </div>

          </div>
        </div>

      </div>
    </div>
  </div>
</div>