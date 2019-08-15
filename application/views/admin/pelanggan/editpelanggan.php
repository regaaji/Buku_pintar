





<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Edit Pelanggan</h1>

  <div class="row mt-5">




   <div class="col-md-12 mb-3">

    <div class="card">
      <div class="card-body">

        <form action="" enctype="multipart/form-data" method="post">
          <input type="hidden" name="id_pelanggan" value="<?= $edit['id_pelanggan']; ?>">
          <input type="hidden" name="password_pelanggan" value="<?= $edit['password_pelanggan']; ?>">
         
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" id="username" value="<?= $edit['username'] ?>">
            <small id="emailHelp" class="form-text text-danger"><?= form_error('username'); ?></small>
          </div>

          <div class="form-group">
            <label for="email_pelanggan">Email</label>
            <input type="text" class="form-control" name="email_pelanggan" id="email_pelanggan" value="<?= $edit['email_pelanggan'] ?>">
            <small id="emailHelp" class="form-text text-danger"><?= form_error('email_pelanggan'); ?></small>
          </div>

          <div class="form-group">
            <label for="nama_pelanggan">Nama</label>
            <input type="text" class="form-control" name="nama_pelanggan" id="nama_pelanggan" value="<?= $edit['nama_pelanggan'] ?>">
            <small id="emailHelp" class="form-text text-danger"><?= form_error('nama_pelanggan'); ?></small>
          </div>

           <div class="form-group">
            <label for="telepon_pelanggan">Telepon</label>
            <input type="text" class="form-control" name="telepon_pelanggan" id="telepon_pelanggan" value="<?= $edit['telepon_pelanggan'] ?>">
            <small id="emailHelp" class="form-text text-danger"><?= form_error('telepon_pelanggan'); ?></small>
          </div>

          <div class="form-group">
            <label for="alamat_pelanggan">Alamat</label>
            <textarea name="alamat_pelanggan" id="" class="form-control"><?= $edit['alamat_pelanggan'];  ?></textarea>
            <small id="emailHelp" class="form-text text-danger"><?= form_error('alamat_pelanggan'); ?></small>
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


