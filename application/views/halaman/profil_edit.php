<main>

  <div class="col-lg-12 col-md-12">
    <div class="card card-login">
      <div class="card-block">
        <div class="text-center">
          <i class="fa fa-pencil"></i><span>Form Edit Data Profil</span>
          <hr class="md-2">
        </div>
        <form action="<?= base_url().'admin/profil/edit/'.$profil[0]->id_profil ?>" method="POST" enctype="multipart/form-data">

          <div class="form-group">
            <input type="text" class="form-control" id="" name="judul" placeholder="Judul..."  value="<?= $profil[0]->judul ?>">
          </div>

          <div class="form-group">
            <div class="file-field">
              <div class="btn btn-warning btn-sm">
                <!-- <span>Pilih file</span> -->
                <i class="fa fa-paperclip"></i>
                <input type="file" name="gambar_header">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="Upload file header">
              </div>
            </div>
          </div>

          <div class="form-group">
            <textarea name="isi_profil" class="md-textarea" rows="3" placeholder="Deskripsi..."><?= $profil[0]->isi_profil ?></textarea>
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
