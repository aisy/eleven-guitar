<main>

  <section>
    <!--Form without header-->
    <div class="col-md-7">
      <div class="card">
        <div class="card-block text-center">
          <h3>
            <?php
            if ($testimoni->judul_testimoni == null) {
              echo "Tidak ada data";
            }else {
              echo $testimoni->judul_testimoni;
            }
            ?>
          </h3>
          <hr>
          <label for=""><?= $testimoni->caption ?></label>
          <hr>
          <div class="btn-group">
            <a data-toggle="tooltip" data-placement="bottom" title="ubah" href="<?= base_url().'admin/testimoni/edit/'.$testimoni->id_ktestimoni ?>" class="btn btn-primary waves-effect btn-sm">
              <i class="fa fa-pencil"></i>
            </a>
            <a data-toggle="tooltip" data-placement="bottom" title="hapus" href="<?= base_url().'admin/testimoni/hapus/'.$testimoni->id_ktestimoni ?>" class="btn btn-danger waves-effect btn-sm" onclick="return confirm('Yahin..!!, Akan hapus banner ini ?')">
              <i class="fa fa-trash"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!--/Form without header-->

    <div class="col-md-5">
      <div class="card">
        <div class="card-block">
          <!--Header-->
          <div class="text-center">
            <h3 class="yellow-text">
              <i class="fa fa-plus-square-o"></i> Insert Banner Testimoni
            </h3>
            <hr class="mt-2 mb-2">
          </div>

          <form action="<?= base_url() ?>admin/testimoni/tambah" method="POST" enctype="multipart/form-data">

            <div class="form-group">
              <input type="text" class="form-control" id="" name="judul_testimoni" placeholder="Judul...">
            </div>

            <div class="form-group">
              <textarea name="caption" class="md-textarea" rows="3" placeholder="Caption..."></textarea>
            </div>

            <button type="submit" class="btn btn-success btn-block waves-effect waves-light">
              Masukkan Data
            </button>

          </form>
        </div>
      </div>
    </div>


    <table id="" class="table" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>caption</th>
          <th>Warna</th>
          <th>pilihan</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($litestimoni as $key) { ?>
        <tr>
          <td><?= $key->nama_user ?></td>
          <td><?= $key->isi_testimoni ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>


  </section>

</main>
