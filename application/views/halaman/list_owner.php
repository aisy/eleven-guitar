<main>

    <div class="col-md-8">
      <div class="card">
        <div class="card-block">
          <table id="data_barang" cellspacing="0" width="100%" class="table full-width">
            <thead>
              <tr>
                <th>Nama List</th>
                <th>Caption</th>
                <th>Icon</th>
                <th>Pilihan</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <!-- <?php foreach ($barang as $key) { ?>
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
                <?php } ?> -->
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

            <form action="<?= base_url() ?>barang/tambah_data" method="POST" enctype="multipart/form-data">

              <div class="form-group">
                <input type="text" class="form-control" name="nama_list" placeholder="Nama List...">
              </div>

              <div class="form-group">
                <select class="mdb-select" name="icon">
                  <option value="" disabled selected>Pilih Icon...</option>
                    <option value="">lol <i class="fa fa-heart"></i></option>
                    <option value=""><i class="fa fa-newspaper-o"></i>lah</option>
                  </select>
                </div>

                <div class="form-group">
                  <textarea name="caption" class="md-textarea" rows="3" placeholder="Deskripsi..."></textarea>
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
