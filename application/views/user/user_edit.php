<main>

  <div class="col-lg-12 col-md-12">
    <div class="card card-login">
      <div class="card-block">
        <div class="text-center">
          <i class="fa fa-pencil"></i><span>Form Edit Data User</span>
          <hr class="md-2">
        </div>
        <form action="<?= base_url().'user/edit/'. $admin[0]->id_admin ?>" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <input type="text" class="form-control" id="" name="username" placeholder="Username..." value="<?= $admin[0]->username ?>">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" name="password" id="" placeholder="Password...">
          </div>

            <button type="submit" class="btn btn-primary btn-sm">
              Simpan
            </button>
            <button type="button" onclick="window.history.back()" class="btn btn-warning btn-sm">
              Batal
            </button>

          </form>
        </div>
      </div>
    </div>

  </main>
