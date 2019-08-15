<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
 <h1 class="h3 mb-4 text-gray-800">Produk</h1>

<div class="row mt-5">
  <?php if( $this->session->flashdata('message') ) : ?>
    <?= $this->session->flashdata('message'); ?>

<?php endif; ?>




 <div class="col-md-12 mb-3">

  <div class="card">
    <div class="card-body">

     <table class="table table-responsive table-hover" id="example1">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Produk</th>
          <th scope="col">Nama Kategori</th>
          <th scope="col">Nama Penulis</th>
          <th scope="col">Harga</th>
          <th scope="col">Stok</th>
          <th scope="col">Foto Produk</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $nomer = 1; ?>
        <?php $ambil = $this->db->query("SELECT * FROM produk JOIN kategori ON produk.kategori_id = kategori.id_kategori"); ?>
        <?php foreach($ambil->result_array() as $pecah) : ?>
          <tr>
            <td scope="row"><?= $nomer; ?></td>
            <td><?= $pecah['nama_produk']; ?></td>
            <td><?= $pecah['nama_kategori']; ?></td>
            <td><?= $pecah['nama_penulis']; ?></td>
            <td>
              <?php if( $pecah['stok_produk'] == 0 ) : ?>
              <span class="badge badge-danger">kosong</span>
              <?php else: ?>
                <?= $pecah['stok_produk']; ?>
              <?php endif;?>
            </td>
            <td>Rp. <?= number_format($pecah['harga_produk']); ?></td>
            <td><img src="<?= base_url(); ?>assets/img/foto_produk/<?= $pecah['foto_produk']; ?>" width="50" alt=""></td>
            <td>
              <a href="<?= base_url() ?>admin/produk/editproduk/<?= $pecah['id_produk']; ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
              <a href="<?= base_url() ?>admin/produk/hapusproduk/<?= $pecah['id_produk']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a> 
              <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-warning btn-sm detail" type="button" data-id_produk="<?= $pecah['id_produk'] ?>"><i class="fas fa-info-circle"></i></a>
            </td>
          </tr>
          <?php $nomer++ ?>
        <?php endforeach; ?>
      </tbody>
    </table>
    <a href="<?= base_url(); ?>admin/produk/tambahproduk" class="btn btn-info mt-4">Tambah Data</a>


  </div>
</div>
</div>





</div>   




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-info-circle"></i> Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="row">
        <div class="col-md-6">
          <h6 class="font-weight-bold">Deskripsi Produk</h6>
          <p id="deskripsi_produk"></p>
        </div>
        <div class="col-md-6">
          <h6 class="font-weight-bold">Detail Produk</h6>
          <p id="detail_produk"></p>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-info" data-dismiss="modal">Tutup</button>
    </div>
  </div>
</div>
</div>