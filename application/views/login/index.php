<main class="mt-5 pt-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="card shadow p-3">
					<div class="card-body">
						<?php if( $this->session->flashdata('flash') ) : ?>
							<div class="alert alert-primary alert-dismissible fade show" role="alert">
								Data <strong>berhasil</strong> ditambahkan
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						<?php endif; ?>

						<?php if( $this->session->flashdata('message') ) : ?>
							<?= $this->session->flashdata('message'); ?>
						<?php endif; ?>

						<h2 class="text-center pb-2">Login Pelanggan</h2>
						<form action="<?= base_url(); ?>login/proses_login" method="post">
							<div class="form-group">
								<label for="">Username</label>
								<input type="text" autofocus autocomplete="off" class="form-control" name="username" value="<?= set_value('username') ?>">
								<small id="emailHelp" class="form-text text-danger"><?= form_error('username'); ?></small>
							</div>
							<div class="form-group">
								<label for="">Password</label>
								<input type="password" class="form-control" autocomplete="off" name="password_pelanggan" value="<?= set_value('password_pelanggan') ?>">
								<small id="emailHelp" class="form-text text-danger"><?= form_error('password_pelanggan'); ?></small>
							</div>
						<button type="submit" class="btn btn-sm btn-primary mt-3 btn-block" name="masuk">Login</button>
						</form>
					</div>
						<p class="text-center mt-3">Tidak punya akun? klik <a href="<?= base_url(); ?>login/daftar">disini</a></p>
				</div>
			</div>
		</div>
	</div>
</main>