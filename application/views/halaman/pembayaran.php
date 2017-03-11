<main>

  <section>
    <!--Form without header-->
    <div class="card">
      <div class="card-block">

        <!--Header-->
        <div class="text-center">
          <h3><i class="fa fa-lock"></i> Login:</h3>
          <hr class="mt-2 mb-2">
        </div>

        <!--Body-->
        <div class="md-form">
          <input type="text" id="form2" class="form-control">
          <label for="form2">Judul</label>
        </div>

        <!--Basic textarea-->
        <div class="md-form">
          <textarea type="text" id="form7" class="md-textarea"></textarea>
          <label for="form7">Caption</label>
        </div>

        <div class="text-center">
          <button class="btn btn-deep-purple">
            <i class="fa fa-save left"></i> Simpan
          </button>
        </div>

      </div>

    </div>
    <!--/Form without header-->

    <div class="col-md-8">
      <table id="" class="table" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>icon</th>
            <th>caption</th>
            <th>Warna</th>
            <th>pilihan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>

      <div class="col-md-4">
        <div class="card">
          <div class="card-block">
            <!--Header-->
            <div class="text-center">
              <h3 class="yellow-text">
                <i class="fa fa-plus-square-o"></i> Insert Barang
              </h3>
              <hr class="mt-2 mb-2">
            </div>

            <form action="http://localhost/elv-admin/barang/tambah_data" method="POST" enctype="multipart/form-data">

              <div class="form-group">
                <input type="text" class="form-control" id="" name="nama_barang" placeholder="Nama Barang...">
              </div>

              <div class="form-group">
                <select class="mdb-select" name="warna">
                  <option value="" disabled selected>Pilih Warna...</option>
                  <option value="red">Merah</option>
                  <option value="orange">jingga</option>
                  <option value="purple">Ungu</option>
                  <option value="blue">Biru</option>
                  <option value="green">Hijau</option>
                  <option value="pink">Merah muda</option>
                  <option value="indigo">Indigo</option>
                  <option value="cyan">Cyan</option>
                  <option value="amber">Amber</option>
                  </select>
                </div>

                <div class="form-group">
                  <select class="mdb-select" name="icon">
                    <option value="" disabled selected>Pilih icon...</option>
                    <option value="fa-credit-card"> Kartu Kredit</option>
                    <option value="fa-truck"> Pengiriman</option>
                    <option value="fa-hand-o-up"> Klik</option>
                    <option value="fa-envelope">Sms</option>
                    <option value="fa-check">Konfrmasi</option>
                    </select>
                  </div>

              <div class="form-group">
                <div class="file-field">
                  <div class="btn btn-warning btn-sm waves-effect waves-light">
                    <!-- <span>Pilih file</span> -->
                    <i class="fa fa-paperclip"></i>
                    <input type="file" name="foto">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload file">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <input type="number" class="form-control" name="harga" id="" placeholder="Harga...">
              </div>
              <div class="form-group">
                <textarea name="keterangan" class="md-textarea" rows="3" placeholder="Keterangan..."></textarea>
              </div>

              <button type="submit" class="btn btn-success btn-block waves-effect waves-light">
                Masukkan Data
              </button>

            </form>
          </div>
        </div>
      </div>


  </section>

</main>
