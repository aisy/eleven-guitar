<main>
  <div class="container-fluid">

    <div class="col-md-8">
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
                    
                    <a href="<?= base_url().'admin/kategori/edit/'.$key->id_kategori ?>" class="btn btn-warning btn-sm">
                      Ubah
                    </a>
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

      <div class="col-md-4">
        <div class="card">
          <div class="card-block">

            <div class="text-center">
              <h3 class="yellow-text">
                <i class="fa fa-plus-square-o"></i> Insert kategori
              </h3>
              <hr class="mt-2 mb-2">
            </div>

            <form action="<?= base_url() ?>admin/kategori/tambah" method="POST" enctype="multipart/form-data">

              <div class="form-group">
                <input type="text" class="form-control" id="" name="nama_kategori" placeholder="Nama Kategori...">
              </div>

              <button type="submit" class="btn btn-success btn-block">
                Masukkan Data
              </button>

            </form>
          </div>
        </div>
      </div>

    </div>
  </main>
