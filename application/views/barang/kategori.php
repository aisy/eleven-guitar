<main>
  <div class="container-fluid">

    <div class="col-lg-6 col-md-12">
      <div class="card">
        <div class="card-block">
          <table id="data_barang" cellspacing="0" width="100%" class="table full-width">
            <thead>
              <tr>
                <th>No.</th>
                <th>Kategori</th>
                <th>Pilihan</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no=1;
              foreach ($kategori as $key) {
                ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td>
                    <form id="form<?=$key->id_kategori?>" action="<?= base_url() ?>admin/kategori/edit/<?= $key->id_kategori ?>" method="POST" enctype="multipart/form-data">
                      <input class="form-control" name="nama_kategori" type="text" value="<?= $key->nama_kategori ?>">
                    </form>
                  </td>
                  <td>
                    <input form="form<?=$key->id_kategori ?>" type="submit" class="btn btn-primary btn-sm" value="Edit">
                    <a href="<?= base_url().'admin/kategori/hapus/'.$key->id_kategori ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin..!!, Akan hapus kategori ini ?')">
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
              <i class="fa fa-plus-square"></i><span>Form Penambahan Data Kategori</span>
              <hr class="md-2">
            </div>
            <form action="<?= base_url() ?>admin/kategori/tambah" method="POST" enctype="multipart/form-data">

              <div class="form-group">
                <input type="text" class="form-control" id="" name="nama_kategori" placeholder="Kategori...">
              </div>

              <button type="submit" class="btn btn-primary">
                Masukkan Data
              </button>

            </form>
          </div>
        </div>
      </div>

    </div>
  </main>
