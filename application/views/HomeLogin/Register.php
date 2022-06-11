<main class="d-flex w-100">
  <div class="container d-flex flex-column">
    <div class="row vh-100">
      <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
        <div class="d-table-cell align-middle">
          <div class="card mt-4">
            <div class="card-body">
              <div class="text-center ">
                <h1 class="h2">Daftar Akun Rafhely</h1>
              </div>
              <div class="m-sm-4">
                <div class="text-center">
                  <img src="<?= base_url('assets/img/photos/Rafhely.png'); ?>" alt="Rafhely" class="img-fluid rounded-circle" width="132" height="132" />
                </div>
                <form action="" method="POST">
                  <div class="mb-3">
                    <label class="form-label" for="nama_lengkap">Nama Lengkap</label>
                    <input class="form-control form-control-lg" type="text" name="nama_lengkap" placeholder="Masukkan Nama Anda" />
                    <small class="text-danger"><?= form_error('nama_lengkap'); ?></small>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control form-control-lg" type="email" name="email" placeholder="Masukkan Email Anda" />
                    <small class="text-danger"><?= form_error('email'); ?></small>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="password">Password</label>
                    <input class="form-control form-control-lg" type="password" name="password" placeholder="Masukkan Password Anda" />
                    <small class="text-danger"><?= form_error('password'); ?></small>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="konfirpassword">Konfirmasi Password</label>
                    <input class="form-control form-control-lg" type="password" name="konfirpassword" placeholder="Konfirmasi Password Anda" />
                    <small class="text-danger"><?= form_error('konfirpassword'); ?></small>
                  </div>
                  <div class="text-center mt-3">
                    <button type="submit" class="btn btn-lg btn-primary">Daftar</button>
                  </div>
                  <div>
                    <label class="form-check pt-3 text-center">
                      <span class="form-check-label">
                        Sudah punya Akun ? <a href="<?= site_url('Login'); ?>">Silahkan Login</a>
                      </span>
                    </label>
                  </div>
                </form>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</main>