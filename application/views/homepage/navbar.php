
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
    <div class="mdl-layout__header-row">
      <span class="android-title mdl-layout-title">
        <img class="android-logo-image" src="<?= base_url().'mdl/' ?>images/eleven_title.png">
      </span>
      <!-- Add spacer, to align navigation to the right in desktop -->
      <div class="android-header-spacer mdl-layout-spacer"></div>
      <div class="android-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">

        <form action="" method="POST">
          <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
            <i class="material-icons">search</i>
          </label>
          <div class="mdl-textfield__expandable-holder">
            <input class="mdl-textfield__input" type="text" id="search-field">
          </div>
        </form>
        
      </div>
      <!-- Navigation -->
      <div class="android-navigation-container">
        <nav class="android-navigation mdl-navigation">
          <a href="<?= base_url().'kategori/gitar' ?>" class="mdl-navigation__link mdl-typography--text-uppercase" href="">Gitar</a>
          <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Bass</a>
          <!-- <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Aksesoris</a> -->

          <a href="" id="demo-menu-lower-left" class="mdl-navigation__link mdl-typography--text-uppercase">
            Aksesoris <i class="material-icons">arrow_drop_down</i>
          </a>

          <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-left">
            <li class="mdl-menu__item">
              Ampli
            </li>
            <li class="mdl-menu__item">
              Efek
            </li>
            <li class="mdl-menu__item">
              Pickup
            </li>
          </ul> 
          
        </nav>
      </div>
      <span class="android-mobile-title mdl-layout-title">
        <img class="android-logo-image" src="<?= base_url().'mdl/' ?>images/eleven_title.png">
      </span>

      <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect show-modal" id="show-modal-example">
        <i class="material-icons">perm_contact_calendar</i>
      </button>

    </div>
  </div>

  <div class="android-drawer mdl-layout__drawer">
    <span class="mdl-layout-title">
      <img class="android-logo-image" src="<?= base_url().'mdl/' ?>images/eleven_title_white.png">
    </span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="">Guitar</a>
      <a class="mdl-navigation__link" href="">Ampli</a>
      <a class="mdl-navigation__link" href="">Efek</a>
      <a class="mdl-navigation__link" href="">Bass</a>
      <a class="mdl-navigation__link" href="">Pickup</a>

      <!-- <div class="android-drawer-separator"></div>
      <span class="mdl-navigation__link" href="">Versions</span>
      <a class="mdl-navigation__link" href="">Lollipop 5.0</a>
      <a class="mdl-navigation__link" href="">KitKat 4.4</a>
      <a class="mdl-navigation__link" href="">Jelly Bean 4.3</a>
      <a class="mdl-navigation__link" href="">Android history</a> -->

    </nav>
  </div>