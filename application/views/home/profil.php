<main class="mt-5 pt-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="card shadow">
					<div class="card-header">
						<i class="fas fa-user pr-2"></i>Profil
					</div>
					<div class="card-body">
						<h2 class="text-center pb-2"><?= $_SESSION['nama_pelanggan']; ?></h2> 
						<hr style="border-top: 3px solid #999; margin-top: -5px;">
						<p>Username : <span class="font-weight-bold"><?= $_SESSION['username'] ?></span></p>
						<p>Email : <span class="font-weight-bold"><?= $_SESSION['email_pelanggan'] ?></span></p>
						<p>Telepon : <span class="font-weight-bold"><?= $_SESSION['telepon_pelanggan'] ?></span></p>
						<p>Alamat : <span class="font-weight-bold"><?= $_SESSION['alamat_pelanggan'] ?></span></p>
					</div>

				</div>
			</div>
		</div>
	</div>
</main>

<main class="mt-5 pt-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card shadow">
					<div class="card-header">
						<i class="fas fa-dollar-sign pr-2"></i>Riwayat Transaksi
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover table-bordered" id="tabel1">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">Nama</th>
										<th scope="col">Telepon</th>
										<th scope="col">Email</th>
										<th scope="col">Tanggal Pembelian</th>
										<th scope="col">Subharga</th>
										<th scope="col">Status</th>
										<th scope="col">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$id_pelanggan = $_SESSION['id_pelanggan'];
									$ambil =  $this->db->query("SELECT * FROM pembelian  where id_pelanggan ='$id_pelanggan'");
									?>
									<?php $no = 1; ?>
									<?php foreach($ambil->result_array() as $pecah) : ?>
								
									<tr>
										<th scope="row"><?= $no; ?></th>
										<th><?= $_SESSION['username']; ?></th>
										<th><?= $_SESSION['telepon_pelanggan'];  ?></th>
										<th><?= $_SESSION['email_pelanggan']; ?></th>
										<th><?= $pecah['tanggal_pembelian']; ?></th>
										<th>Rp. <?= number_format($pecah['total_pembelian']); ?></th>
										<th>
											<?php if($pecah['status_pembelian'] == 1) : ?>
											<span class="badge badge-danger">Menunggu Proses</span>
											<?php else: ?>
												<span class="badge badge-primary">Lunas</span>
											<?php endif; ?>
											
										</th>
										<th>
											<?php if($pecah['status_pembelian'] == 1) : ?>
											<a href="<?= base_url(); ?>home/konfirmasi/<?= $pecah['id_pembelian']; ?>" class="btn btn-success btn-sm">Konfirmasi</a>
											<?php else : ?>
										
											<?php endif; ?>	
											<a href="<?= base_url(); ?>home/nota/<?= $pecah['id_pembelian']; ?>" class="btn btn-info btn-sm">Detail</a>
										</th>
										
										
									</tr>
									<?php $no++; ?>
								<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</main>