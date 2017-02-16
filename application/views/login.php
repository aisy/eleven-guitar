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
  <div class="container-fluid">

    <div class="card">
      <div class="card-block">

        <!--Header-->

        <div class="form-header  yellow darken-1">

          <h3><i class="fa fa-lock"></i> Login</h3>
        </div>

        <!--Body-->
        <form action="Login/process_login" method="post">

          <div class="md-form">
            <i class="fa fa-envelope prefix"></i>
            <input type="text" id="form2" class="form-control" name="username">
            <label for="form2">Username</label>
          </div>

          <div class="md-form">
            <i class="fa fa-lock prefix"></i>
            <input type="password" id="form4" class="form-control" name="password">
            <label for="form4">Password</label>
          </div>

          <div class="text-center">

            <button class="btn btn-yellow" type="submit">Login</button>

          </div>

        </form>

      </div>

      <!--Footer-->
      <div class="modal-footer">
        <div class="options">
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>

    </div>
  </div>

  <script type="text/javascript" src="<?= base_url().'mdb/' ?>js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="<?= base_url().'mdb/' ?>js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?= base_url().'mdb/' ?>js/mdb.min.js"></script>
</body>
</html>
