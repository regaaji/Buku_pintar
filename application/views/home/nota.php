<main class="pt-5 mt-5">
	<div class="container pt-5">
		<div class="row">
			
			<div class="col-md-12">
				<h2 class="mb-4">Detail Pembelian</h2>
			
				<div class="card">
					<div class="card-body">
						<div class="row">
						<?php foreach( $nota as $detail ) : ?>
							<?php $status = $detail['status_pembelian']; ?>
							<?php $id_pembelian_barusan = $detail['id_pembelian']; ?>
							<div class="col-md-4">
								<h4>Pembelian</h4>
								<strong>No. Pembelian: <?= $detail['id_pembelian']; ?></strong> <br>
								<p>
									Tanggal : <?= $detail['tanggal_pembelian']; ?><br>
									Total	: Rp. <?= number_format($detail['total_pembelian']); ?><br>
									<?php if($detail['status_pembelian'] == 1) : ?>
									Status	: <span class="badge badge-danger">Menuggu Proses</span>
									<?php else: ?>
									Status	: <span class="badge badge-primary">Lunas</span>
									<?php endif; ?>
								</p>
							</div>
							<div class="col-md-4">
								<h4>Pelanggan</h4>
								<strong><?= $detail['nama_pelanggan']; ?></strong><br>
								<p>
									<?= $detail['telepon_pelanggan']; ?><br>
									<?= $detail['email_pelanggan']; ?>
								</p>
							</div>
							<div class="col-md-4">
								<h4>Pengiriman</h4>
								<strong><?= $detail['nama_kurir']; ?></strong> <br>
								Biaya Pengiriman: Rp. <?= number_format($detail['tarif']); ?><br>
								Alamat: <?= $detail['alamat_pengiriman']; ?>
							</div>
						</div>
					<?php endforeach; ?>
						<div class="table-responsive">
							<table class="table table-hover table-bordered">
							<thead class="bg-gray">
								<tr>
									<th>No.</th>
									<th>Nama Produk</th>
									<th>Harga</th>
									<th>Jumlah</th>
									<th>Subharga</th>
								</tr>
							</thead>
							<tbody>
								<?php $i = 1; ?>
								<?php foreach($bukti as $pecah) : ?>
									<tr>
										<td><?= $i; ?></td>
										<td><?= $pecah['nama']; ?></td>
										<td>Rp. <?= number_format($pecah['harga']); ?></td>
										<td><?= $pecah['jumlah']; ?></td>
										<td>Rp. <?= number_format($pecah['harga'] * $pecah['jumlah']); ?></td>
									</tr>
									<?php $i++; ?>
									
								<?php endforeach; ?>
							</tbody>
						</table>
						
						
						<?php if($status == 1) : ?>
						<div class="row">
							<div class="col-md-7">
								<div class="alert alert-warning">
									<p>
										Silahkan melakukan pembayaran Rp. <?= number_format($detail['total_pembelian']); ?> ke <br>
										<strong>Bank BRI 345-096345-56790 AN. Programmer</strong>
									</p>
								</div>
								
								<div class="col-md-5">
									<a href="<?= base_url(); ?>home/konfirmasi/<?= $id_pembelian_barusan; ?>"><button class="btn btn-success btn-sm">Konfirmasi</button></a>
								</div>
								
							</div>
						</div>
						<?php else : ?>

						<?php endif; ?>
						

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>