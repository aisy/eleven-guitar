<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Eleven Guitar Admin</title>

  <link rel="shortcut icon" type="image/png" href="<?= base_url().'/mdb/' ?>favicon.ico"/>

  <link rel="stylesheet" href="<?= base_url().'mdb/' ?>font-awesome/css/font-awesome.css">

  <link rel="stylesheet" type="text/css" href="<?= base_url().'mdb/' ?>css/bootstrap.css">

  <link rel="stylesheet" type="text/css" href="<?= base_url().'mdb/' ?>css/mdb.css">

  <link rel="stylesheet" type="text/css" href="<?= base_url().'mdb/' ?>css/dataTables.bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="<?= base_url().'mdb/' ?>css/dataTables.min.css">

  <link rel="stylesheet" type="text/css" href="<?= base_url().'mdb/' ?>css/style.css">
</head>

<body class="fixed-sn mdb-skin">

  <!--Double navigation-->
  <header>
    <!-- Sidebar navigation -->
    <ul id="slide-out" class="side-nav fixed custom-scrollbar">

      <!-- Logo -->
      <li>
        <div class="logo-wrapper sn-ad-avatar-wrapper">

          <!-- <img src="#" class="img-fluid rounded-circle"> -->
          <div class="rgba-stylish-strong">
            <p class="user white-text"><?= $this->session->userdata('logged_in')['username']; ?></p>

          </div>
        </div>
      </li>
      <!--/. Logo -->

      <!-- Side navigation links -->
      <li>
        <ul class="collapsible collapsible-accordion">
          <li>
            <a href="<?= base_url() ?>admin/halaman-utama" class="collapsible-header waves-effect arrow-r">
              <i class="fa fa-dashboard"></i> Dashboard awal
            </a>
          </li>
          <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-newspaper-o"></i> Halaman<i class="fa fa-angle-down rotate-icon"></i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="<?= base_url() ?>admin/home" class="waves-effect">Halaman awal</a>
                </li>
                <li><a href="<?= base_url() ?>admin/pembayaran" class="waves-effect">Halaman pembayaran</a>
                </li>
                <li><a href="<?= base_url() ?>admin/testimoni" class="waves-effect">Halaman testimoni</a>
                </li>
                <li><a href="<?= base_url() ?>admin/tentang" class="waves-effect">Halaman Tentang Kami</a>
                </li>
                <li><a href="<?= base_url() ?>admin/owner" class="waves-effect">Halaman Profil Owner</a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a href="<?= base_url() ?>admin/barang" class="collapsible-header waves-effect arrow-r">
              <i class="fa fa-comments-o"></i> Data Testimoni
            </a>
          </li>
          <li>
            <a href="<?= base_url() ?>admin/barang" class="collapsible-header waves-effect arrow-r">
              <i class="fa fa-list"></i> Data Produk
            </a>
          </li>
          <li>
            <a href="<?= base_url() ?>admin/kategori" class="collapsible-header waves-effect arrow-r">
              <i class="fa fa-tags"></i> Data Kategori
            </a>
          </li>
          <li>
            <a href="<?= base_url() ?>admin/user" class="collapsible-header waves-effect arrow-r">
              <i class="fa fa-user"></i> Data Pengelola
            </a>
          </li>
        </ul>
      </li>
      <!--/. Side navigation links -->

    </ul>
    <!--/. Sidebar navigation -->

    <!--Navbar-->
    <nav class="navbar navbar-fixed-top double-nav yellow darken-1">

      <!-- SideNav slide-out button -->
      <div class="float-xs-left">
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
      </div>

      <!-- Breadcrumb-->
      <div class="breadcrumb-dn">
        <p>Eleven Guitar Admin</p>
      </div>


      <ul class="nav navbar-nav float-xs-right">
        <li class="nav-item ">
          <a class="nav-link"><i class="fa fa-envelope"></i> <span class="hidden-sm-down">Contact</span></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link"><i class="fa fa-comments-o"></i> <span class="hidden-sm-down">Support</span></a>
        </li>
        <li class="nav-item ">
          <a href="<?= base_url() ?>admin/user" class="nav-link"><i class="fa fa-sign-in"></i> <span class="hidden-sm-down">Register</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> <span class="hidden-sm-down">Profile</span></a>
          <div class="dropdown-menu dropdown-primary dd-right" aria-labelledby="dropdownMenu1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">

            <a class="dropdown-item" href="<?= base_url() ?>Login/process_logout">Logout</a>
            <a class="dropdown-item" href="#">My account</a>
          </div>
        </li>
      </ul>

    </nav>
    <!--/.Navbar-->
  </header>
  <!--/Double navigation-->

  <!--Main layout-->
  <?= $content ?>
  <!--/Main layout-->

  <!-- SCRIPTS -->
  <script type="text/javascript" src="<?= base_url().'mdb/' ?>js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="<?= base_url().'mdb/' ?>js/tether.min.js"></script>
  <script type="text/javascript" src="<?= base_url().'mdb/' ?>js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?= base_url().'mdb/' ?>js/mdb.js"></script>
  <script type="text/javascript" src="<?= base_url().'mdb/' ?>js/dataTables.min.js"></script>
  <script type="text/javascript" src="<?= base_url().'mdb/' ?>js/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript" src="<?= base_url().'mdb/' ?>js/styles.js"></script>

</body>
</html>