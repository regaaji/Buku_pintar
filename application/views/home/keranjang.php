<?php 
if(empty($_SESSION['keranjang']) OR !isset($_SESSION['keranjang'])){
	echo "<script>alert('keranjang kosong, silahkan belanja dulu');</script>";
	echo "<script>window.location.href='http://localhost/Buku_pintar/home/index';</script>";
} 


?>

<main class="mt-5 pt-5">
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-12">
				<div class="card shadow">
					<div class="card-header">
						<i class="fas fa-shopping-cart"></i> Keranjang Belanja
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover table-bordered">
								<thead>
									<tr>
										<th scope="col">No</th>
										<th scope="col">Produk</th>
										<th scope="col">Harga</th>
										<th scope="col">Jumlah</th>
										<th scope="col">SubHarga</th>
										<th scope="col">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; ?>
									<?php foreach($_SESSION['keranjang'] as $id_produk => $jumlah) : ?>
										<?php 
										$pecah = $this->db->query("SELECT * FROM produk WHERE id_produk = $id_produk")->result_array();
										?>
										<?php foreach($pecah as $p) : ?>
										<?php
										$subharga = $jumlah*$p['harga_produk'];
										?>
										<tr>
											<th scope="row"><?= $no; ?></th>
											<td><?= $p['nama_produk']; ?></td>
											<td>Rp. <?= number_format($p['harga_produk']); ?></td>
											<td><?= $jumlah ?></td>
											<td>Rp. <?= number_format($subharga); ?></td>
											<td><a href="<?= base_url(); ?>home/hapuskeranjang/<?= $id_produk ?>" class="btn btn-sm btn-danger">Hapus</a></td>
										</tr>
									<?php endforeach; ?>
										<?php $no++; ?>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
						<a href="<?= base_url(); ?>home/index" class="btn btn-default btn-sm">Lanjutkan Belanja</a>
						<?php if(isset($_SESSION['username'])) : ?>
							<a href="<?= base_url(); ?>home/checkout" class="btn btn-primary btn-sm">Checkout</a>	
							<?php else : ?>
								<a href="#" class="btn btn-primary btn-sm" onclick="checkout();">Checkout</a>
							<?php echo"
							<script>
							function checkout() {
								alert('Anda belum login');
								window.location='http://localhost/Buku_pintar/login/index';
							}
							</script>"; 
							?>		
							<?php endif; ?>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>