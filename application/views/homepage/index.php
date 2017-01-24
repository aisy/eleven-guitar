
<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />

<!-- HEADER -->
<div class="android-content mdl-layout__content">
  <a name="top"></a>

  <div class="android-be-together-section mdl-typography--text-center">
    <div class="android_bg-container-overlay">
      <img src="<?= base_url().'mdl/' ?>images/Asset6.png" class="img-responsive android-logo" alt="Image">
      <div class="logo-font android-slogan">be together. not the same.</div>
      <div class="logo-font android-sub-slogan">Selamat datang di Eleven Guitar... be yourself. do your thing. see what's going on.</div>
    </div>
    <!-- AKHIR HEADER -->


    <a href="#screens">
      <button class="android-fab mdl-button mdl-button--colored mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-shadow--4dp" data-scroll-to="android-screen-section">
        <i class="material-icons">expand_more</i>
      </button>
    </a>

  </div>

  <!-- <div class="android-customized-section">
    <div class="android-customized-section-text">
      <a name="screens" class="screens"></a>
      <div class="mdl-typography--font-light mdl-typography--display-1-color-contrast">Customised by you, for you</div>
      <p class="mdl-typography--font-light">
        Put the stuff that you care about right on your home screen: the latest news, the weather or a stream of your recent photos.
        <br>
        <a href="" class="android-link mdl-typography--font-light">Customise your phone</a>
      </p>
    </div>
    <div class="android-customized-section-image"></div>
  </div> -->

  <div class="android-more-section" ng-app="search">
    <div class="android-section-title mdl-typography--display-1-color-contrast">
      <i class="material-icons">shopping_cart</i> Our Products
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

     <pagination page="currentPage" max-size="noOfPages" total-items="totalItems" items-per-page="entryLimit"></pagination>

   </div>
 </div>
</div>


<footer class="android-footer mdl-mega-footer">
  <div class="mdl-mega-footer--top-section">
    <div class="mdl-mega-footer--left-section">
     <a href="http://Instagram.com/home?status=" title="Share on Instagram" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--instagram"><i class="fa fa-instagram fa-fw"></i></a>
     <!-- Facebook -->
     <a href="https://www.facebook.com/sharer/sharer.php?u=" title="Share on Facebook" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--facebook"><i class="fa fa-facebook fa-fw"></i></a>
   </div>
   <div class="mdl-mega-footer--right-section">
    <a class="mdl-typography--font-light" href="#top">
      Back to Top
      <i class="material-icons">expand_less</i>
    </a>
  </div>
</div>

<div class="mdl-mega-footer--middle-section">
  <p class="mdl-typography--font-light">Satellite imagery: © 2016 Astrium, DigitalGlobe</p>
  <p class="mdl-typography--font-light">Some features and devices may not be available in all areas</p>
</div>


</footer>
</div>




