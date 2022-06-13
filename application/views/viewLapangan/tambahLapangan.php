<main class="content">
  <div class="container-fluid p-0">

    <div class="mb-3">
      <h1 class="h3 d-inline align-middle">Tambah Data Lapangan</h1>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title mb-0 text-center">Tambah Data Lapangan</h5>
          </div>
          <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
              <div class="form-floating mb-3 ">
                <input type="text" class="form-control " id="kodelapangan" placeholder="Kode Lapangan" name="lkode">
                <label for="kodelapangan">Kode Lapangan</label>
                <small class="text-danger"><?= form_error('lkode'); ?></small>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="namaLapangan" placeholder="Nama Lapangan" name="lnama">
                <label for="namaLapangan">Nama Lapangan</label>
                <small class="text-danger"><?= form_error('lnama'); ?></small>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="jenisLapangan" placeholder="Jenis Lapangan" name="ljenis">
                <label for="jenisLapangan">Jenis Lapangan</label>
                <small class="text-danger"><?= form_error('ljenis'); ?></small>
              </div>
              <div class="input-group mb-3">
                <input type="file" class="form-control" id="gambar" name="gambar">
              </div>
              <div class="input-group">
                <small class="text-danger"><?= form_error('gambar'); ?></small>
              </div>
              <button type="submit" class="btn btn-primary float-end">Tambah Data </button>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</main>