<?php if ($this->session->flashdata('Created')) : ?>
	<?= $this->session->flashdata('Created'); ?>
	<?php $this->session->unset_userdata('Created'); ?>
<?php endif; ?>
<?php if ($this->session->flashdata('Pesan')) : ?>
	<?= $this->session->flashdata('Pesan'); ?>
	<?php $this->session->unset_userdata('Pesan'); ?>
<?php endif; ?>
<main class="d-flex w-100">
	<div class="container d-flex flex-column">
		<div class="row vh-100">
			<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
				<div class="d-table-cell align-middle">
					<div class="text-center mt-4">
						<h1 class="h2">Selamat Datang di Rafhely</h1>
					</div>
					<div class="card">
						<div class="card-body">
							<div class="mb-3">
								<p class="lead text-center">
									Login Terlebih Dahulu
								</p>
							</div>
							<div class="m-sm-4">
								<div class="text-center">
									<img src="<?= base_url('assets/img/photos/Rafhely.png'); ?>" alt="Rafhely" class="img-fluid rounded-circle" width="132" height="132" />
								</div>
								<form action="<?= site_url('Login'); ?>" method="POST">
									<div class="mb-3">
										<label for="email" class="form-label">Email</label>
										<input class="form-control form-control-lg" type="email" name="email" placeholder="Masukkan Email Anda " />
										<small class="text-danger"><?= form_error('email'); ?></small>
									</div>
									<div class="mb-3">
										<label class="form-label" for="password">Password</label>
										<input class="form-control form-control-lg" type="password" name="password" placeholder="Masukkan Password Anda " />
										<small class="text-danger"><?= form_error('password'); ?></small>
									</div>
									<div class="text-center mt-3 ">
										<button type="submit" class="btn btn-lg btn-primary">Login</button>
									</div>
									<div>
										<label class="form-check pt-3 text-center">
											<span class="form-check-label">
												Belum punya akun ? <a href="<?= site_url('Login/Pendaftaran'); ?>">Daftar Disini</a>
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