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
        <a class="mdl-navigation__link" href="">
          <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">featured_play_list</i>
          Konten
        </a>
        <a class="mdl-navigation__link" href="">
          <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">forum</i>
          Testimoni
        </a>
        <a class="mdl-navigation__link" href="">
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

        <div class="demo-cards mdl-cell mdl-cell--8-col mdl-cell--8-col-tablet mdl-grid mdl-grid--no-spacing">
          <table id="data_barang" cellspacing="0" width="100%" class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width">
            <thead>
              <tr>
                <th class="mdl-data-table__cell--non-numeric full-width">Nama Barang</th>
                <th>Foto</th>
                <th>Jenis</th>
                <th>Harga</th>
                <th>Pilihan</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($barang as $key) { ?>
              <tr>
                <td class="mdl-data-table__cell--non-numeric"><?= $key->nama_barang ?></td>
                <td>
                  <div class="image-container">
                    <img src="<?= base_url().'products/'.$key->foto ?>" alt="">
                  </div>
                </td>
                <td><?= $key->nama_kategori ?></td>
                <td>Rp.<?= $key->harga ?></td>
                <td>
                  <button class="mdl-button mdl-js-button mdl-button--raised edit mdl-button--accent">
                  Edit
                  </button>
                  <a href="<?= base_url().'barang/hapus/'.$key->id_barang ?>" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent" onclick="return confirm('Hapus barang ini ?')">
                    Hapus
                  </a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>

        <div class="demo-cards mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-grid mdl-grid--no-spacing">
          <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">

            <div class="mdl-card__supporting-text mdl-color-text--grey-600">
              <i class="material-icons">note_add</i> <span>Form Penambahan Data Barang</span>
            </div>
            <div class="mdl-card__actions mdl-card--border">

              <form action="<?= base_url() ?>barang/tambah_data" method="POST" enctype="multipart/form-data">

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-width">
                  <input class="mdl-textfield__input" type="text" id="nama_barang" name="nama_barang">
                  <label class="mdl-textfield__label" for="nama_barang">Nama Barang...</label>
                </div>

                <div class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label full-width">
                  <select class="mdl-selectfield__select" name="kategori_barang" id="kategori_barang">
                    <option value=""></option>
                    <option value="1">Gitar</option>
                    <option value="2">Bass</option>
                    <option value="3">Ampli</option>
                    <option value="4">Effect</option>
                    <option value="5">Pickup</option>
                  </select>
                  <div class="mdl-selectfield__icon"><i class="material-icons">arrow_drop_down</i></div>
                  <label class="mdl-selectfield__label" for="kategori_barang">Pilih kategori barang</label>
                </div>

                <div class="file_input_div full-width">
                  <div class="file_input">
                    <label class="image_input_button mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-js-ripple-effect mdl-button--colored">
                      <i class="material-icons">file_upload</i>
                      <input id="file_input_file" class="none" type="file" name="foto" />
                    </label>
                  </div>
                  <div id="file_input_text_div" class="mdl-textfield mdl-js-textfield textfield-demo full-width">
                    <input class="file_input_text mdl-textfield__input" type="text" disabled readonly id="file_input_text" />
                    <label class="mdl-textfield__label" for="file_input_text"></label>
                  </div>
                </div>

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-width">
                  <input class="mdl-textfield__input" type="text" id="harga" name="harga">
                  <label class="mdl-textfield__label" for="harga">Harga Barang...</label>
                </div>

                <div class="mdl-textfield mdl-js-textfield full-width">
                  <textarea name="keterangan" class="mdl-textfield__input" rows= "3" id="keterangan" ></textarea>
                  <label class="mdl-textfield__label" for="keterangan">Keterangan...</label>
                </div>

                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                  Masukkan Data
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
