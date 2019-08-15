<main class="mt-5 pt-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="card shadow p-3">
					<div class="card-body">
						<h2 class="text-center pb-2">Daftar Pelanggan</h2>
						<form action="<?= base_url(); ?>login/proses_daftar" method="post">
							<div class="form-group">
								<label for="">Username</label>
								<input type="text" autofocus autocomplete="off" class="form-control" name="username"value="<?= set_value('username'); ?>">
								<small id="emailHelp" class="form-text text-danger"><?= form_error('username'); ?></small>
							</div>
							<div class="form-group">
								<label for="">Email</label>
								<input type="text" autofocus autocomplete="off" class="form-control" name="email_pelanggan" value="<?= set_value('email_pelanggan'); ?>">
								<small id="emailHelp" class="form-text text-danger"><?= form_error('email_pelanggan'); ?></small>
							</div>
							<div class="form-group">
								<label for="">Password</label>
								<input type="password" class="form-control" autocomplete="off" name="password_pelanggan" value="<?= set_value('password_pelanggan'); ?>">
								<small id="emailHelp" class="form-text text-danger"><?= form_error('password_pelanggan'); ?></small>
							</div>
							<div class="form-group">
								<label for="">Nama</label>
								<input type="text" class="form-control" autocomplete="off" name="nama_pelanggan" value="<?= set_value('nama_pelanggan'); ?>">
								<small id="emailHelp" class="form-text text-danger"><?= form_error('nama_pelanggan'); ?></small>
							</div>
							<div class="form-group">
								<label for="">Telepon</label>
								<input type="text" class="form-control" autocomplete="off" name="telepon_pelanggan" value="<?= set_value('telepon_pelanggan'); ?>">
								<small id="emailHelp" class="form-text text-danger"><?= form_error('telepon_pelanggan'); ?></small>
							</div>
							<div class="form-group">
								<label for="">Alamat</label>
								<textarea name="alamat_pelanggan" class="form-control"><?= set_value('nama'); ?></textarea>
								<small id="emailHelp" class="form-text text-danger"><?= form_error('alamat_pelanggan'); ?></small>
							</div>
						<button type="submit" class="btn btn-sm btn-primary mt-3 btn-block" name="daftar">Daftar</button>
						</form>
					</div>
						<p class="text-center mt-3">Sudah punya akun? klik <a href="<?= base_url(); ?>login/index">disini</a></p>
				</div>
			</div>
		</div>
	</div>
</main>