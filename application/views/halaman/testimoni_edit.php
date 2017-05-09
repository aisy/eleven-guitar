<main>

  <div class="col-lg-12 col-md-12">
    <div class="card card-login">
      <div class="card-block">
        <div class="text-center">
          <i class="fa fa-pencil"></i><span>Form Edit Banner Testimoni</span>
          <hr class="md-2">
        </div>
        <form action="<?= base_url().'admin/testimoni/edit/'.$testimoni[0]->id_ktestimoni ?>" method="POST" enctype="multipart/form-data">

          <div class="form-group">
            <input type="text" class="form-control" id="" name="judul_testimoni" placeholder="Judul..."  value="<?= $testimoni[0]->judul_testimoni ?>">
          </div>

          <div class="form-group">
            <textarea name="caption" class="md-textarea" rows="3" placeholder="Caption..."><?= $testimoni[0]->caption ?></textarea>
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
