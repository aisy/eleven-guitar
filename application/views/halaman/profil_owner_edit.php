<main>

  <div class="col-lg-12 col-md-12">
    <div class="card card-login">
      <div class="card-block">
        <div class="text-center">
          <i class="fa fa-pencil"></i><span>Form Edit Data Profil Owner</span>
          <hr class="md-2">
        </div>
        <form action="<?= base_url().'admin/owner/edit/'.$owner[0]->id_powner ?>" method="POST" enctype="multipart/form-data">

          <div class="form-group">
            <input type="text" class="form-control" id="" name="nama_owner" placeholder="Nama Owner..."  value="<?= $owner[0]->nama_owner ?>">
          </div>

          <div class="form-group">
            <div class="file-field">
              <div class="btn btn-warning btn-sm">
                <!-- <span>Pilih file</span> -->
                <i class="fa fa-paperclip"></i>
                <input type="file" name="foto">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="Upload file">
              </div>
            </div>
          </div>
<hr>
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
