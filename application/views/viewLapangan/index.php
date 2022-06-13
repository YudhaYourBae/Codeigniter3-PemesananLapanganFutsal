<?php if ($this->session->flashdata('Pesan')) : ?>
  <?= $this->session->flashdata('Pesan'); ?>
  <?php $this->session->unset_userdata('Pesan'); ?>
<?php endif; ?>
<main class="content">
  <div class="container-fluid p-0">
    <div class="row">
      <div class="col-md-3">
        <div class="mb-3 d-flex flex-column">
          <h1 class="h3 align-middle">Detail Lapangan</h1>
          <a href="<?= site_url('Lapangan/TambahLapangan'); ?>" class="btn btn-success p-2"> <i class="fas fa-fw fa-passport"></i> Tambah Lapangan</a>
        </div>
      </div>
    </div>
    <div class="row">
      <?php foreach ($Lapangan as $L) : ?>
        <div class="col-12 col-md-6">
          <div class="card">
            <div class="card-header bg-secondary ">
              <h5 class="card-title mb-0 text-white text-center text-capitalize"><?= $L->lkode; ?></h5>
            </div>
            <img class="card-img-top img-fluid" src="<?= base_url('assets/img/lapangan/') . $L->gambar; ?>" alt="<?= $L->lnama; ?>">
            <div class="card-body text-dark fw-bolder">
              <p class="card-text text-capitalize">Nama Lapangan : <?= $L->lnama; ?></p>
              <p class="card-text text-capitalize">Jenis Lapangan :<?= $L->ljenis; ?></p>
              <div class="d-flex align-items-center justify-content-between">
                <a href="#" class="btn btn-primary "><i class="far fa-fw fa-credit-card"></i> Sewa Lapangan</a>
                <a href="<?= site_url('Lapangan/HapusLapangan/') . $L->Id; ?>" class="btn btn-danger "><i class="fas fa-fw fa-trash-alt"></i> Hapus Data Lapangan</a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</main>