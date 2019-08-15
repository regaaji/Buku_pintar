

    

   

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
                      <label for="nama_kategori">Nama Kategori</label>
                      <input type="text" class="form-control" name="nama_kategori" id="nama_kategori">
                      <small id="emailHelp" class="form-text text-danger"><?= form_error('nama_kategori'); ?></small>
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

      
