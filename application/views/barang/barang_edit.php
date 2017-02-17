<main>

  <div class="col-lg-12 col-md-12">
    <div class="card card-login">
      <div class="card-block">
        <div class="text-center">
          <i class="fa fa-pencil"></i><span>Form Edit Data Barang</span>
          <hr class="md-2">
        </div>
        <form action="<?= base_url().'barang/edit/'.$barang[0]->id_barang ?>" method="POST" enctype="multipart/form-data">

          <div class="form-group">
            <input type="text" class="form-control" id="" name="nama_barang" placeholder="Nama Barang..."  value="<?= $barang[0]->nama_barang ?>">
          </div>

          <div class="form-group">
            <select class="mdb-select" name="id_kategori">
              <option value="<?= $barang[0]->id_kategori ?>"><?= $barang[0]->nama_kategori ?></option>
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
              <input type="text" class="form-control" name="harga" id="" placeholder="Harga..." value="<?= $barang[0]->harga ?>">
            </div>
            <div class="form-group">
              <textarea name="keterangan" class="md-textarea" rows="3" placeholder="Keterangan..."><?= $barang[0]->keterangan ?></textarea>
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
