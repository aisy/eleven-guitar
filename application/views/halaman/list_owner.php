<main>

  <div class="col-md-8">
    <div class="card">
      <div class="card-block">
        <table id="data_halaman" cellspacing="0" width="100%" class="table full-width">
          <thead>
            <tr>
              <th>Judul</th>
              <th>Header</th>
              <th>Isi Profil</th>
              <th>Pilihan</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($profil as $key) { ?>
              <tr>
                <td><?= $key->judul ?></td>
                <td>
                  <div class="image-container">
                    <img src="<?= base_url().'products/'.$key->gambar_header ?>" alt="Header">
                  </div>
                </td>
                <td><?= $key->isi_profil ?></td>
                <td>
                  <div class="btn-group">
                    <a href="<?= base_url().'admin/profil/edit/'.$key->id_profil ?>" class="btn btn-primary waves-effect btn-sm">
                      <i class="fa fa-pencil"></i>
                    </a>
                    <a href="<?= base_url().'admin/profil/hapus/'.$key->id_profil ?>" class="btn btn-danger waves-effect btn-sm" onclick="return confirm('Yakin..!!, Akan hapus barang ini ?')">
                      <i class="fa fa-trash"></i>
                    </a>
                  </div>
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
          <!--Header-->
          <div class="text-center">
            <h3 class="yellow-text">
              <i class="fa fa-plus-square-o"></i> Masukkan Profile Website
            </h3>
            <hr class="mt-2 mb-2">
          </div>

          <form action="<?= base_url() ?>admin/profil/tambah" method="POST" enctype="multipart/form-data">

            <div class="form-group">
              <input type="text" class="form-control" name="judul" placeholder="Judul...">
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
              <textarea name="isi_profil" class="md-textarea" rows="3" placeholder="Deskripsi..."></textarea>
            </div>

            <button type="submit" class="btn btn-success btn-block">
              Masukkan Data
            </button>

          </form>
        </div>
      </div>
    </div>

  </div>
  <div class="col-md-12">
    <hr class="batas">
  </div>

  <div class="col-md-8">
    <div class="card">
      <div class="card-block">
        <table id="data_barang" cellspacing="0" width="100%" class="table full-width">
          <thead>
            <tr>
              <th>Nama List</th>
              <th>Caption</th>
              <th>Nama Owner</th>
              <th>Pilihan</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($listown as $key) { ?>
              <tr>
                <td><?= $key->nama_list ?></td>
                <td><?= $key->caption ?></td>
                <td><?= $key->nama_owner ?></td>
                <td>
                  <div class="btn-group">
                    <a href="<?= base_url().'admin/tentang/edit/'.$key->id_listown ?>" class="btn btn-primary waves-effect btn-sm">
                      <i class="fa fa-pencil"></i>
                    </a>
                    <a href="<?= base_url().'admin/tentang/hapus/'.$key->id_listown ?>" class="btn btn-danger waves-effect btn-sm" onclick="return confirm('Yakin..!!, Akan hapus barang ini ?')">
                      <i class="fa fa-trash"></i>
                    </a>
                  </div>
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
          <!--Header-->
          <div class="text-center">
            <h3 class="yellow-text">
              <i class="fa fa-plus-square-o"></i> Masukkan list owner
            </h3>
            <hr class="mt-2 mb-2">
          </div>

          <form action="<?= base_url() ?>admin/tentang/tambah" method="POST" enctype="multipart/form-data">

            <div class="form-group">
              <input type="text" class="form-control" name="nama_list" placeholder="Nama List...">
            </div>

            <div class="form-group">
              <textarea name="caption" class="md-textarea" rows="3" placeholder="Caption..."></textarea>
            </div>

            <div class="form-group">
              <select class="mdb-select" name="id_powner">
                <option value="" disabled selected>Pilih owner...</option>
                <?php foreach ($owner as $key) { ?>
                  <option value="<?= $key->id_powner ?>"><?= $key->nama_owner ?></option>
                  <?php } ?>
                </select>
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
