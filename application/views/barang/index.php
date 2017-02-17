<main>
  <div class="container-fluid">

    <div class="col-lg-6 col-md-12">
      <div class="card">
        <div class="card-block">
          <table id="data_barang" cellspacing="0" width="100%" class="table full-width">
            <thead>
              <tr>
                <th>Nama Barang</th>
                <th>Foto</th>
                <th>Jenis</th>
                <th>Harga</th>
                <th>Pilihan</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($barang as $key) { ?>
                <tr>
                  <td><?= $key->nama_barang ?></td>
                  <td>
                    <div class="image-container">
                      <img src="<?= base_url().'products/'.$key->foto ?>" alt="produk">
                    </div>
                  </td>
                  <td><?= $key->nama_kategori ?></td>
                  <td>Rp.<?= $key->harga ?></td>
                  <td>
                    <a href="<?= base_url().'barang/edit/'.$key->id_barang ?>" class="btn btn-primary btn-sm">
                      Edit
                    </a>
                    <a href="<?= base_url().'barang/hapus/'.$key->id_barang ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin..!!, Akan hapus barang ini ?')">
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
              <i class="fa fa-plus-square"></i><span>Form Penambahan Data Barang</span>
              <hr class="md-2">
            </div>
            <form action="<?= base_url() ?>barang/tambah_data" method="POST" enctype="multipart/form-data">

              <div class="form-group">
                <input type="text" class="form-control" id="" name="nama_barang" placeholder="Nama Barang...">
              </div>

              <div class="form-group">
                <select class="mdb-select" name="id_kategori">
                    <option value="" disabled selected>Pilih kategori...</option>
                    <?php foreach ($kategori as $key) { ?>
                    <option value="<?= $key->id_kategori ?>"><?= $key->nama_kategori ?></option>
                    <?php } ?>
                  </select>
                </div>

                <div class="form-group">
                  <div class="file-field">
                    <div class="btn btn-primary btn-sm">
                      <span>Choose file</span>
                      <input type="file" name="foto">
                    </div>
                    <div class="file-path-wrapper">
                      <input class="file-path validate" type="text" placeholder="Upload file">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" name="harga" id="" placeholder="Harga...">
                </div>
                <div class="form-group">
                  <textarea name="keterangan" class="md-textarea" rows="3" placeholder="Keterangan..."></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-sm">
                  Masukkan Data
                </button>

              </form>
            </div>
          </div>
        </div>

      </div>

    </div>
  </main>
