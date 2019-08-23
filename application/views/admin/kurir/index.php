

    

   

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Kurir</h1>

          <div class="row mt-5">
            
            
           <?php if( $this->session->flashdata('message') ) : ?>
            <?= $this->session->flashdata('message'); ?>

          <?php endif; ?>

             <div class="col-md-12 mb-3">
                   
              <div class="card">
                <div class="card-body">
                <div class="table-responsive">
                 <table class="table table-hover table-bordered" id="example1" width="1000">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Kurir</th>
                      <th scope="col">Tarif</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $nomer = 1; ?>
                    <?php $ambil = $this->db->query("SELECT * FROM kurir"); ?>
                    <?php foreach($ambil->result_array() as $pecah) : ?>
                      <tr>
                        <td scope="row"><?= $nomer; ?></td>
                        <td><?= $pecah['nama_kurir']; ?></td>
                        <td>Rp. <?= number_format($pecah['tarif_kurir']); ?></td>
                        <td>
                          <a href="<?= base_url() ?>admin/kurir/editkurir/<?= $pecah['id_kurir']; ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                          <a href="<?= base_url() ?>admin/kurir/hapuskurir/<?= $pecah['id_kurir']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a> 
                        </td>
                      </tr>
                      <?php $nomer++ ?>
                    <?php endforeach; ?>
                  </tbody>
                </table>
                </div>
                <a href="<?= base_url(); ?>admin/kurir/tambahkurir" class="btn btn-info mt-4">Tambah Data</a>

                   
                </div>
              </div>
            </div>
            

          

          
           </div>   

        
                    

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      
