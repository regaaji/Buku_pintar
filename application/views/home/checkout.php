<?php 
if(empty($_SESSION['keranjang']) OR !isset($_SESSION['nama_pelanggan'])){
	echo "<script>alert('checkout kosong, silahkan belanja dulu');</script>";
	echo "<script>location='index';</script>";
} 


?>
<main class="pt-5 mt-5">
	<div class="container pt-5">
		<div class="row">
			<div class="col-md-4">
				<div class="card shadow">
					<div class="card-body">
						<form action="" method="post">
							<div class="form-group">
								<label for="">Nama Pembeli</label>
								<input type="text" readonly class="form-control" value="<?= $_SESSION['nama_pelanggan']; ?>">
							</div>

							<div class="form-group">
								<label for="">Telepon Pembeli</label>
								<input type="text" readonly class="form-control" value="<?= $_SESSION['telepon_pelanggan']; ?>">
							</div>
							<!-- <div class="form-group">
								<label for="">Alamat Pengiriman</label>
								<textarea name="alamat_pelanggan" class="form-control"></textarea>
							</div> -->
							<div class="form-group">
								<label for="">Pilih Kurir</label>
								<select id="id_kurir" name="id_kurir" class="form-control">
									<option value="">Pilih Kurir</option>
									<?php foreach( $kurir as $k )  : ?>
									<option value="<?= $k['id_kurir']; ?>"><?= $k['nama_kurir']; ?></option>
								<?php endforeach; ?>
								</select>
							</div>

							<div class="form-group">
								<label for="">Alamat Pengiriman</label>
								<textarea name="alamat_pengiriman" class="form-control" placeholder="Masukkan Alamat Pengiriman"></textarea>
							</div>
							<button class="btn btn-sm btn-primary" name="simpan">Simpan</button>
						</form>	
					
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="card">
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
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; ?>
									<?php $totalbelanja = 0; ?>
									<?php $jumlahbelanja = 0; ?>
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
										</tr>
									<?php endforeach; ?>
									<?php $totalbelanja+=$subharga; ?>
										<?php $jumlahbelanja+=$jumlah; ?>
										<?php $no++; ?>
									<?php endforeach; ?>
								</tbody>
								<tfoot>
									<tr>
										<th colspan="4">Total Belanja</th>
										<th>Rp. <?= number_format($totalbelanja); ?></th>
									</tr>
								</tfoot>
							</table>
									<?php 
							if(isset($_POST['simpan'])){
								$id_pelanggan = $_SESSION['id_pelanggan'];
								$id_kurir = $_POST['id_kurir'];
								$tanggal_pembelian = date('d-m-Y');
								$alamat_pengiriman = $_POST['alamat_pengiriman'];

								$ambil = $this->db->query("SELECT * FROM kurir WHERE id_kurir='$id_kurir'");
								foreach($ambil->result_array() as $arraykurir){
									$nama_kurir = $arraykurir['nama_kurir'];
									$tarif = $arraykurir['tarif_kurir'];
								}
								//$arraykurir = $ambil->fetch_assoc();
								//$nama_kurir = $arraykurir['nama_kurir'];
								
								$total_pembelian = $totalbelanja + $tarif;

								$this->db->query("INSERT INTO pembelian (id_pelanggan, id_kurir, tanggal_pembelian, total_pembelian, nama_kurir, tarif, alamat_pengiriman, status_pembelian) VALUES ('$id_pelanggan', '$id_kurir', '$tanggal_pembelian', '$total_pembelian', '$nama_kurir', '$tarif', '$alamat_pengiriman', '1')");

								$id_pembelian_barusan =  $this->db->insert_id();

								foreach($_SESSION['keranjang'] as $id_produk => $jumlah){

									$ambil = $this->db->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
									
									foreach($ambil->result_array() as $perproduk){
										$nama = $perproduk['nama_produk'];
										$harga = $perproduk['harga_produk'];
										$subharga = $perproduk['harga_produk']*$jumlah;
									}

									

									$this->db->query("INSERT INTO pembelian_produk (id_pembelian, id_produk, jumlah, nama, harga, subharga) VALUES ('$id_pembelian_barusan', '$id_produk', '$jumlah', '$nama', '$harga', '$subharga') ");
								
									$this->db->query("UPDATE produk SET stok_produk= stok_produk - $jumlah WHERE id_produk='$id_produk'");
								}

								unset($_SESSION['keranjang']);

								echo "<script>alert('pembelian sukses');</script>";
								echo "<script>location='nota/$id_pembelian_barusan';</script>";
							}
						 ?>
						</div>

						
					</div>
				</div>
			</div>
		</div>
	</div>
</main>