<?php 
foreach($nota as $n) :
$id_pembelian = $n['id_pembelian'];
endforeach;
if (isset($_POST['kirim'])) {

	$this->db->query("UPDATE pembelian SET status_pembelian='2' WHERE id_pembelian='$id_pembelian'");

	echo "<script>alert('berhasil di upload');</script>";
	echo "<script>location='http://localhost/Buku_pintar/home/profil';</script>";
}

 ?>

<main class="mt-5 pt-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="card shadow">
					<div class="card-header bg-primary text-white">
						<i class="fas fa-money-bill pr-2"></i>Cek Pembayaran
					</div>
					<div class="card-body">
						<form action="" method="post">
							<div class="form-group">
								<div class="alert alert-danger mb-3" role="alert">
									<h4 class="alert-heading">Perhatian!</h4>
									<p>Masukkan Bukti Pembayaran Anda</p>
									<hr>
									<p class="mb-0"></p>
								</div>
								<input type="file" autofocus autocomplete="off" class="form-control"> 
							</div>
							
							<div class="text-center mt-3">
								<button class="btn btn-primary btn-sm" type="submit" name="kirim">Kirim <i class="fas fa-paper-plane pl-2"></i></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>