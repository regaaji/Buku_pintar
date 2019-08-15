<main class="mt-5 pt-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="card shadow">
					<div class="card-header bg-primary text-white">
						<i class="fas fa-cubes pr-2"></i>Pilih Kategori
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover table-bordered" id="tabel1">
								<thead>
									<tr>
										<th scope="col">No</th>
										<th scope="col">Nama Kategori</th>
										<th scope="col">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; ?>
										<?php 
										$pecah = $this->db->query("SELECT * FROM kategori")->result_array();
										?>
										<?php foreach($pecah as $p) : ?>
										<?php $id_kategori = $p['id_kategori']; ?>

										<tr>
											<th scope="row"><?= $no; ?></th>
											<td><?= $p['nama_kategori']; ?></td>
											<td><a href="<?= base_url(); ?>kategori/jenis_kategori/<?= $id_kategori; ?>" class="btn btn-sm btn-primary">Lihat</a></td>
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