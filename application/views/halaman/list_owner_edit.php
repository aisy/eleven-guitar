<main>

  <div class="col-lg-12 col-md-12">
    <div class="card card-login">
      <div class="card-block">
        <div class="text-center">
          <i class="fa fa-pencil"></i><span>Form Edit Data List Owner</span>
          <hr class="md-2">
        </div>
        <form action="<?= base_url().'admin/testimoni/edit/'.$listown[0]->id_listown ?>" method="POST" enctype="multipart/form-data">

          <div class="form-group">
            <input type="text" class="form-control" id="" name="nama_list" placeholder="Nama Barang..."  value="<?= $listown[0]->nama_list ?>">
          </div>

            <div class="form-group">
              <textarea name="caption" class="md-textarea" rows="3" placeholder="Keterangan..."><?= $listown[0]->caption ?></textarea>
            </div>
            
            <div class="form-group">
              <select class="mdb-select" name="id_powner">
                <option value="" disabled selected>Pilih owner...</option>
                <?php foreach ($owner as $key) { ?>
                  <option value="<?= $key->id_powner ?>"><?= $key->nama_owner ?></option>
                  <?php } ?>
                </select>
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
