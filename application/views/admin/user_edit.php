<body>
  <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">

    <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Home</span>
        <div class="mdl-layout-spacer"></div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
          <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
            <i class="material-icons">search</i>
          </label>
          <div class="mdl-textfield__expandable-holder">
            <input class="mdl-textfield__input" type="text" id="search">
            <label class="mdl-textfield__label" for="search">Enter your query...</label>
          </div>
        </div>
        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
          <i class="material-icons">more_vert</i>
        </button>
        <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
          <li class="mdl-menu__item">About</li>
          <li class="mdl-menu__item">Contact</li>
          <li class="mdl-menu__item">Legal information</li>
        </ul>
      </div>
    </header>

    <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">

      <header class="demo-drawer-header">
        <img src="<?= base_url().'mdl/' ?>images/user.jpg" class="demo-avatar">
        <div class="demo-avatar-dropdown">
          <span><?= $this->session->userdata('username'); ?></span>
          <div class="mdl-layout-spacer"></div>

        </div>
      </header>

      <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
        <a class="mdl-navigation__link" href="<?= base_url('admin/halaman-utama') ?>">
          <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>
          Dahsboard
        </a>
        <a class="mdl-navigation__link" href="<?= base_url('admin/barang') ?>">
          <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">list</i>
          Barang
        </a>
        <a class="mdl-navigation__link" href="<?= base_url('admin/kategori') ?>">
          <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">label</i>
          Kategori
        </a>
        <a class="mdl-navigation__link" href="">
          <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">featured_play_list</i>
          Konten
        </a>
        <a class="mdl-navigation__link" href="">
          <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">forum</i>
          Testimoni
        </a>
        <a class="mdl-navigation__link" href="<?= base_url('admin/user') ?>">
          <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">group</i>
          Admin
        </a>

        <div class="mdl-layout-spacer"></div>
        <a class="mdl-navigation__link" href="<?= base_url('Administrator/logout') ?>">
          <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">exit_to_app</i>
          <span class="">Keluar</span>
        </a>
      </nav>

    </div>


    <main class="mdl-layout__content mdl-color--grey-100">
      <div class="mdl-grid demo-content">

        <div class="demo-cards mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-grid mdl-grid--no-spacing">
          <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">

            <div class="mdl-card__supporting-text mdl-color-text--grey-600">
              <i class="material-icons">note_add</i> <span>Form Edit Data Barang</span>
            </div>
            <div class="mdl-card__actions mdl-card--border">

              <form action="<?= base_url().'user/edit/'. $admin[0]->id_admin ?>" method="POST" enctype="multipart/form-data">

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-width">
                  <input class="mdl-textfield__input" type="text" id="username" name="username" value="<?= $admin[0]->username ?>">
                  <label class="mdl-textfield__label" for="username">Username...</label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-width">
                  <input class="mdl-textfield__input" type="password" id="password" name="password">
                  <label class="mdl-textfield__label" for="password">Password Baru...</label>
                </div>

                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                  Simpan
                </button>

              </form>

            </div>
          </div>
        </div>

        <div class="demo-separator mdl-cell--1-col"></div>

      </div>
    </main>
  </div>

  <script src="<?= base_url().'mdl/' ?>js/material.min.js"></script>
  <script src="<?= base_url().'mdl/' ?>js/mdl-selectfield.js"></script>
</body>
</html>
