<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />  
  
<div class="android-more-section" ng-app="search">
  <div class="android-section-title mdl-typography--display-1-color-contrast">
    <?= strtoupper($nama_kategori); ?>
    </div>

  <div ng-controller="loadctrl">
    <div class="android-card-container mdl-grid" ng-controller="searchctrl">

      <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-phone mdl-card-search mdl-shadow--12dp">
        <div class="mdh-expandable-search mdl-cell--hide-phone">
          <i class="material-icons">search</i>
          <!--         <form action="#"> -->
          <input type="text" placeholder="Pencarian" size="1" ng-model="cari.nama_barang">
          <!-- </form> -->
        </div>
      </div>

      <div ng-show="loading" class="mdl-spinner mdl-spinner--single-color mdl-js-spinner is-active"></div>
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

      <div class="mdl-grid">
        <div class="mdl-cell mdl-cell--12-col">
          <pagination page="currentPage" max-size="noOfPages" total-items="totalItems" items-per-page="entryLimit"></pagination>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="android-more-section">
    <div class="android-section-title mdl-typography--display-1-color-contrast">
    <?= strtoupper($nama_kategori); ?>
    </div>
    <div class="android-card-container mdl-grid">
      <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
        <div class="mdl-card__media">
          <img src="http://localhost/eleven-gitar/products/1.jpg">
        </div>
        <div class="mdl-card__title">
         <h4 class="mdl-card__title-text">Get going on Android</h4>
       </div>
       <!-- <div class="mdl-card__supporting-text"> -->
       <ul class="demo-list-icon mdl-list">
        <li class="mdl-list__item">
          <span class="mdl-list__item-primary-content">
            <i class="material-icons">attach_money</i>
            Bryan Cranston
          </span>
        </li>
      </ul>
      <!-- </div> -->
      <div class="mdl-card__actions">
        <button class="mdl-button mdl-js-button mdl-button--icon" data-upgraded=",MaterialButton">
          <i class="material-icons">add_shopping_cart</i>
        </button>
        <button class="mdl-button mdl-js-button mdl-button--icon" data-upgraded=",MaterialButton">
          <i class="material-icons">list</i>
        </button>
            <!-- <a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect mdl-button--accent" href="">
             <i class="material-icons">add_shopping_cart</i>
           </a>
           <a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" href="">
             <i class="material-icons">list</i>
           </a> -->
         </div>
       </div>

       <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
        <div class="mdl-card__media">
          <img src="products/2.jpg">
        </div>
        <div class="mdl-card__title">
         <h4 class="mdl-card__title-text">Create your own Android character</h4>
       </div>
       <div class="mdl-card__supporting-text">
        <span class="mdl-typography--font-light mdl-typography--subhead">Turn the little green Android mascot into you, your friends, anyone!</span>
      </div>
      <div class="mdl-card__actions">
       <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="" data-upgraded=",MaterialButton">
         androidify.com
         <i class="material-icons">chevron_right</i>
       </a>
     </div>
   </div>

   <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
    <div class="mdl-card__media">
      <img src="products/3.jpg">
    </div>
    <div class="mdl-card__title">
     <h4 class="mdl-card__title-text">Get a clean customisable home screen</h4>
   </div>
   <div class="mdl-card__supporting-text">
    <span class="mdl-typography--font-light mdl-typography--subhead">A clean, simple, customisable home screen that comes with the power of Google Now: Traffic alerts, weather and much more, just a swipe away.</span>
  </div>
  <div class="mdl-card__actions">
   <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="" data-upgraded=",MaterialButton">
     Download now
     <i class="material-icons">chevron_right</i>
   </a>
 </div>
</div>

<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
  <div class="mdl-card__media">
    <img src="products/4.jpg">
  </div>
  <div class="mdl-card__title">
   <h4 class="mdl-card__title-text">Millions to choose from</h4>
 </div>
 <div class="mdl-card__supporting-text">
  <span class="mdl-typography--font-light mdl-typography--subhead">Hail a taxi, find a recipe, run through a temple – Google Play has all the apps and games that let you make your Android device uniquely yours.</span>
</div>
<div class="mdl-card__actions">
 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="" data-upgraded=",MaterialButton">
   Find apps
   <i class="material-icons">chevron_right</i>
 </a>
</div>
</div>

</div>
</div>