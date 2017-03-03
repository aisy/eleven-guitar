<main>

  <div class="col-md-8">
    <?php foreach ($owner as $key) { ?>
    <div class="card testimonial-card">

      <!--Bacground color-->
      <div class="card-up default-color-dark">
      </div>

      <!--Avatar-->
      <div class="avatar"><img src="<?= base_url().'products/'. $key->foto ?>" class="rounded-circle img-responsive" alt="Foto Owner">
      </div>

      <div class="card-block">
        <!--Name-->
        <h4 class="card-title"><?= $key->nama_owner ?></h4>
        <hr>

        <p>
          <div class="btn-group">
            <a href="<?= base_url().'admin/owner/edit/'.$key->id_powner ?>" class="btn btn-primary waves-effect btn-sm">
              <i class="fa fa-pencil"></i>
            </a>
            <a href="<?= base_url().'admin/owner/hapus/'.$key->id_powner ?>" class="btn btn-danger waves-effect btn-sm" onclick="return confirm('Yakin..!!, Akan hapus barang ini ?')">
              <i class="fa fa-trash"></i>
            </a>
          </div>
        </p>
      </div>

    </div>
    <?php } ?>
  </div>

  <div class="col-md-4">
    <div class="card">
      <div class="card-block">
        <!--Header-->
        <div class="text-center">
          <h3 class="yellow-text">
            <i class="fa fa-plus-square-o"></i> Masukkan Owner Baru
          </h3>
          <hr class="mt-2 mb-2">
        </div>

        <form action="<?= base_url() ?>admin/owner/tambah" method="POST" enctype="multipart/form-data">

          <div class="form-group">
            <input type="text" class="form-control" name="nama_owner" placeholder="Nama Owner...">
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

          <button type="submit" class="btn btn-success btn-block">
            Masukkan Data
          </button>

        </form>
      </div>
    </div>
  </div>

</main>
