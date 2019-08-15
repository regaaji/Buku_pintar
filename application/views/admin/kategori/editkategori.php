





<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Edit Produk</h1>

  <div class="row mt-5">




   <div class="col-md-12 mb-3">

    <div class="card">
      <div class="card-body">

        <form action="" enctype="multipart/form-data" method="post">
          <input type="hidden" name="id_kategori" value="<?= $edit['id_kategori']; ?>">
          <div class="form-group">
            <label for="nama_kategori">Nama Kategori</label>
            <input type="text" class="form-control" name="nama_kategori" id="nama_kategori" value="<?= $edit['nama_kategori'] ?>">
            <small id="emailHelp" class="form-text text-danger"><?= form_error('nama_kategori'); ?></small>
          </div>
          
            <button class="btn btn-primary" type="submit" name="ubah">Ubah</button>
          </form>


        </div>
      </div>
    </div>





  </div>   




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


