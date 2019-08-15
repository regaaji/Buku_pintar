

    

   

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Pelanggan</h1>

          <div class="row mt-5">
          	
            
           <?php if( $this->session->flashdata('message') ) : ?>
            <?= $this->session->flashdata('message'); ?>

          <?php endif; ?>

             <div class="col-md-10 mb-3">
                   
              <div class="card">
                <div class="card-body">
                
                   <table class="table table-responsive table-hover" id="example1">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Username</th>
                      <th scope="col">Email</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Telepon</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $nomer = 1; ?>
                    <?php $ambil = $this->db->query("SELECT * FROM pelanggan"); ?>
                    <?php foreach($ambil->result_array() as $pecah) : ?>
                      <tr>
                        <td scope="row"><?= $nomer; ?></td>
                        <td><?= $pecah['username']; ?></td>
                        <td><?= $pecah['email_pelanggan']; ?></td>
                        <td><?= $pecah['nama_pelanggan']; ?></td>
                        <td><?= $pecah['telepon_pelanggan']; ?></td>
                        <td><?= $pecah['alamat_pelanggan']; ?></td>
                        <td>
                          <a href="<?= base_url() ?>admin/pelanggan/editpelanggan/<?= $pecah['id_pelanggan']; ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                          <a href="<?= base_url() ?>admin/pelanggan/hapuspelanggan/<?= $pecah['id_pelanggan']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a> 
                        </td>
                      </tr>
                      <?php $nomer++ ?>
                    <?php endforeach; ?>
                  </tbody>
                </table>
                <a href="<?= base_url(); ?>admin/pelanggan/tambahpelanggan" class="btn btn-info mt-4">Tambah Data</a>
 

                   
                </div>
              </div>
            </div>
            

          

          
           </div>   

        
			        

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      
