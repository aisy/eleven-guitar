<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login Admin</title>
  <link rel="shortcut icon" type="image/png" href="<?= base_url().'/mdb/' ?>favicon.ico"/>
  <link rel="stylesheet" href="<?= base_url().'mdb/' ?>font-awesome/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url().'mdb/' ?>css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url().'mdb/' ?>css/mdb.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url().'mdb/' ?>css/style.css">
</head>
<body>
  <!--Navigation & Intro-->
  <header>

      <!--Mask-->
      <div class="view hm-black-strong">
          <div class="full-bg-img flex-center">
              <div class="container">
                  <div class="row" id="home">

                      <!--First column-->
                      <div class="col-lg-6">
                          <div class="description">
                              <h2 class="h2-responsive wow fadeInLeft">Sign up right now! </h2>
                              <hr class="hr-light wow fadeInLeft">
                              <p class="wow fadeInLeft" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem repellendus quasi fuga nesciunt dolorum nulla magnam veniam sapiente, fugiat! Commodi sequi non animi ea dolor molestiae, quisquam iste, maiores. Nulla.</p>
                              <br>
                          </div>
                      </div>
                      <!--/.First column-->

                      <!--Second column-->
                      <div class="col-lg-6 wow fadeInRight">
                          <!--Form-->
                          <div class="card">
                              <div class="card-block">
                                <!--Header-->
                                <div class="form-header yellow darken-1">
                                  <h3><i class="fa fa-user"></i> Login </h3>
                                </div>

                                  <!--Body-->
                                  <div class="md-form">
                                      <i class="fa fa-envelope prefix"></i>
                                      <input type="text" id="username" class="form-control">
                                      <label for="username">Username</label>
                                  </div>

                                  <div class="md-form">
                                      <i class="fa fa-lock prefix"></i>
                                      <input type="text" id="password" class="form-control">
                                      <label for="password">Password</label>
                                  </div>

                                  <div class="text-xs-center">
                                      <button class="btn btn-primary btn-lg btn-block green">Sign up</button>

                                  </div>

                              </div>
                          </div>
                          <!--/.Form-->
                      </div>
                      <!--/Second column-->
                  </div>
              </div>
          </div>
      </div>
      <!--/.Mask-->

  </header>
  <!--/Navigation & Intro-->

  <script type="text/javascript" src="<?= base_url().'mdb/' ?>js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="<?= base_url().'mdb/' ?>js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?= base_url().'mdb/' ?>js/mdb.min.js"></script>
</body>
</html>
