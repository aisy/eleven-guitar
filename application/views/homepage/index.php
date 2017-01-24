
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

    <!-- <input type="text" name="" id="input" value="" ng-model="cari"> -->

    <div ng-controller="searchctrl">

    <div ng-repeat="list in items">
        {{ list.nama_barang }}
      </div>

    </div>

    <div class="android-card-container mdl-grid">
      <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
        <div class="mdl-card__media">
          <img src="<?= base_url() ?>products/1.jpg">
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
        <button class="mdl-button mdl-js-button mdl-button--icon">
          <i class="material-icons">add_shopping_cart</i>
        </button>
        <button class="mdl-button mdl-js-button mdl-button--icon">
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
       <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
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
   <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
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
 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
   Find apps
   <i class="material-icons">chevron_right</i>
 </a>
</div>
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




