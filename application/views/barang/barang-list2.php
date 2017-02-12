<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />

<div class="android-content mdl-layout__content">
  <div class="android-more-section" ng-app="search">

    <div class="demo-blog__posts mdl-grid" ng-controller="searchctrl">

      <div class="mdl-card mdl-cell mdl-cell--8-col mdl-cell--3-col-desktop mdl-shadow--3dp">
        <div class="mdl-card__title">
          <i class="material-icons">redeem</i> <h5 class="mdl-card__title-text">Produk</h5>
        </div>
        <div class="mdl-card__supporting-text meta meta--fill mdl-color-text--grey-600">
          <ul class="mdl-list">
            <li class="mdl-list__item">
              <span class="mdl-list__item-primary-content">
                <a href="" ng-click="resetFilters()">Semua Produk</a>
              </span>
            </li>
            <li class="mdl-list__item">
              <span class="mdl-list__item-primary-content">
                <a href="" ng-click="cari.nama_kategori='Gitar' ">Gitar</a>
              </span>
            </li>

            <li class="mdl-list__item">
              <span class="mdl-list__item-primary-content">
               <a href="" ng-click="cari.nama_kategori='Bass'">Bass</a>
             </span>
           </li>
         </ul>
       </div>
     </div>

     <div class="mdl-card coffee-pic mdl-cell mdl-cell--8-col mdl-cell--8-col-desktop mdl-shadow--3dp">

      <div class="mdl-card__title mdl-color-text--grey-50">
        <div class="mdl-grid mdl-cell mdl-cell--12-col mdh-expandable-search mdl-cell--hide-phone" style="margin:0">
          <i class="material-icons">search</i>
          <input type="text" placeholder="Pencarian" size="1" ng-model="cari.nama_barang">
        </div>
      </div>

      <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
        <div class="mdl-grid android-card-container mdl-cell--12-col">

          <div ng-repeat="li in filtered = items | filter:cari | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit" class="mdl-card mdl-cell mdl-cell--4-col mdl-shadow--3dp">
            <div class="mdl-card__media">
              <img ng-src="products/{{ li.foto || 'products/no-image.jpg' }}">
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
    </div>

    <nav class="demo-nav mdl-cell mdl-cell--12-col">
      <div class="section-spacer"></div>
      <a href="entry.html" class="demo-nav__button" title="show more">
        More
        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" data-upgraded=",MaterialButton,MaterialRipple">
          <i class="material-icons" role="presentation">arrow_forward</i>
          <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
        </a>
      </nav>
    </div>

  </div>
</div>