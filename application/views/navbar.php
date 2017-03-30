<!--Double navigation-->
<header>
  <!-- Sidebar navigation -->
  <ul id="slide-out" class="side-nav fixed custom-scrollbar">

    <!-- Logo -->
    <li>
      <div class="logo-wrapper waves-light">
        <a href="#"><img src="<?= base_url().'mdb/img/' ?>logo2.png" class="img-fluid flex-center"></a>
      </div>
    </li>
    <!--/. Logo -->

    <!--Social-->
    <li>
      <ul class="social">
        <li><a href="#" class="icons-sm fb-ic"><i class="fa fa-facebook"> </i></a></li>
        <li><a href="#" class="icons-sm ins-ic"><i class="fa fa-instagram"> </i></a></li>
      </ul>
    </li>
    <!--/Social-->

    <!-- Side navigation links -->
    <li>
      <ul class="collapsible collapsible-accordion">
        <li>
          <a href="<?= base_url() ?>" class="waves-effect">
            <i class="fa fa-home"></i> Halaman Utama
          </a>
        </li>
        <li>
          <a href="<?= base_url('produk/') ?>" class="waves-effect">
            <i class="fa fa-shopping-bag"></i> Produk
          </a>
        </li>
        <li>
          <a href="<?= base_url('pembayaran/') ?>" class="waves-effect">
            <i class="fa fa-credit-card"></i></i> Cara pembayaran
          </a>
        </li>
        <li>
          <a href="<?= base_url('testimoni/') ?>" class="waves-effect">
            <i class="fa fa-comments-o"></i> Testimoni
          </a>
        </li>
        <li>
          <a href="<?= base_url('about/') ?>" class="waves-effect">
            <i class="fa fa-info"></i> Tentang Kami
          </a>
        </li>
      </ul>
    </li>
    <!--/. Side navigation links -->

  </ul>
  <!--/. Sidebar navigation -->

  <!--Navbar-->
  <nav class="navbar navbar-fixed-top yellow darken-2 scrolling-navbar double-nav ">

    <!-- SideNav slide-out button -->
    <div class="float-xs-left">
      <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
    </div>

    <!-- Breadcrumb-->
    <div class="breadcrumb-dn">
      <p>Eleven Guitar</p>
    </div>


    <ul class="nav navbar-nav float-xs-right">
      <li class="nav-item ">
        <a href="<?= base_url('') ?>" class="nav-link">
          <i class="fa fa-home"></i>
          <span class="hidden-sm-down">Halaman Utama</span>
        </a>
      </li>
      <li class="nav-item ">
        <a href="<?= base_url('produk') ?>" class="nav-link">
          <i class="fa fa-shopping-bag"></i>
          <span class="hidden-sm-down">Produk</span>
        </a>
      </li>
      <li class="nav-item ">
        <a href="<?= base_url('pembayaran') ?>" class="nav-link">
          <i class="fa fa-credit-card"></i>
          <span class="hidden-sm-down">Cara Pembayaran</span>
        </a>
      </li>
      <li class="nav-item ">
        <a href="<?= base_url('testimoni') ?>" class="nav-link">
          <i class="fa fa-comments-o"></i>
          <span class="hidden-sm-down">Testimoni</span>
        </a>
      </li>
      <li class="nav-item ">
        <a href="<?= base_url('about') ?>" class="nav-link">
          <i class="fa fa-info"></i>
          <span class="hidden-sm-down">tentang kami</span>
        </a>
      </li>
    </ul>

  </nav>
  <!--/.Navbar-->
</header>
<!--/Double navigation-->
