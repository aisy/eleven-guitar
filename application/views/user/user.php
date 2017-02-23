<main>
  <div class="container-fluid">

    <div class="col-lg-6 col-md-12">
      <div class="card">
        <div class="card-block">
          <table id="data_barang" cellspacing="0" width="100%" class="table full-width">
            <thead>
              <tr>
                <th>No.</th>
                <th>Username</th>
                <th>Status</th>
                <th>Pilihan</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i = 1;
              foreach ($admin as $key) { ?>
                <tr>
                  <td><?= $i++ ?></td>
                  <td><?= $key->username ?></td>
                  <td><?php
                  if ($key->admin == 1) {
                    echo "admin";
                  }
                  ?></td>
                  <td>
                    <a href="<?= base_url().'user/edit/'.$key->id_admin ?>" class="btn btn-primary btn-sm">
                      Edit
                    </a>
                    <a href="<?= base_url().'user/hapus/'.$key->id_admin ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yahin..!!, Akan hapus admin ini ?')">
                      Hapus
                    </a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-md-12">
        <div class="card">
          <div class="card-block">
            <div class="text-center">
              <i class="fa fa-plus-square"></i><span>Form Penambahan Data User</span>
              <hr class="md-2">
            </div>
            <form action="<?= base_url() ?>user/tambah" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <input type="text" class="form-control" id="" name="username" placeholder="Username...">
              </div>

              <div class="form-group">
                <input type="password" class="form-control" name="password" id="" placeholder="Password...">
              </div>

              <button type="submit" class="btn btn-primary btn-sm">
                Masukkan Data
              </button>

            </form>
          </div>
        </div>
      </div>

    </div>
  </main>