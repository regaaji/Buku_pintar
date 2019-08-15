





<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Edit Kurir</h1>

  <div class="row mt-5">




   <div class="col-md-12 mb-3">

    <div class="card">
      <div class="card-body">

        <form action="" enctype="multipart/form-data" method="post">
          <input type="hidden" name="id_kurir" value="<?= $edit['id_kurir']; ?>">
          <div class="form-group">
            <label for="nama_kurir">Nama Kurir</label>
            <input type="text" class="form-control" name="nama_kurir" id="nama_kurir" value="<?= $edit['nama_kurir'] ?>">
            <small id="emailHelp" class="form-text text-danger"><?= form_error('nama_kurir'); ?></small>
          </div>

          <div class="form-group">
            <label for="tarif_kurir">Tarif</label>
            <input type="text" class="form-control" name="tarif_kurir" id="tarif_kurir" value="<?= $edit['tarif_kurir'] ?>">
            <small id="emailHelp" class="form-text text-danger"><?= form_error('tarif_kurir'); ?></small>
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


