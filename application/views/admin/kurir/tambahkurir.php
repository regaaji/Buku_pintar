

    

   

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->

          <div class="row mt-5">
          	
            
          

             <div class="col-md-12 mb-3">
                   
              <div class="card">
                <div class="card-body">
                
                  <?php if( $this->session->flashdata('message') ) : ?>
                    <?= $this->session->flashdata('message'); ?>
                  </div>
                <?php endif; ?>
                  <h2 class="mb-3">Tambah Data</h2>
                  <form action="" enctype="multipart/form-data" method="post">
                    
                    <div class="form-group">
                      <label for="nama_kurir">Nama Kurir</label>
                      <input type="text" class="form-control" name="nama_kurir" id="nama_kurir">
                      <small id="emailHelp" class="form-text text-danger"><?= form_error('nama_kurir'); ?></small>
                    </div>

                    <div class="form-group">
                      <label for="tarif_kurir">Tarif Kurir</label>
                      <input type="text" class="form-control" name="tarif_kurir" id="tarif_kurir">
                      <small id="emailHelp" class="form-text text-danger"><?= form_error('tarif_kurir'); ?></small>
                    </div>
                    
                    <button class="btn btn-primary" type="submit" name="simpan">Simpan</button>
                  </form>
                   
                </div>
              </div>
            </div>
            

          

          
           </div>   

        
			        

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      
