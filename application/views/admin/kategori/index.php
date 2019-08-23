

    

   

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Kategori</h1>

          <div class="row mt-5">
            
            
           <?php if( $this->session->flashdata('message') ) : ?>
            <?= $this->session->flashdata('message'); ?>

          <?php endif; ?>

             <div class="col-md-12 mb-3">
                   
              <div class="card">
                <div class="card-body">
                <div class="table-responsive">
                 <table class="table table-bordered table-hover" id="example1" width="1000">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Kategori</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $nomer = 1; ?>
                    <?php $ambil = $this->db->query("SELECT * FROM kategori"); ?>
                    <?php foreach($ambil->result_array() as $pecah) : ?>
                      <tr>
                        <td scope="row"><?= $nomer; ?></td>
                        <td><?= $pecah['nama_kategori']; ?></td>
                        <td>
                          <a href="<?= base_url() ?>admin/kategori/editkategori/<?= $pecah['id_kategori']; ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                          <a href="<?= base_url() ?>admin/kategori/hapuskategori/<?= $pecah['id_kategori']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a> 
                        </td>
                      </tr>
                      <?php $nomer++ ?>
                    <?php endforeach; ?>
                  </tbody>
                </table>
                </div>
                <a href="<?= base_url(); ?>admin/kategori/tambahkategori" class="btn btn-info mt-4">Tambah Data</a>

                   
                </div>
              </div>
            </div>
            

          

          
           </div>   

        
                    

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      
