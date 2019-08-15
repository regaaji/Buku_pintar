

    

   

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
                      <label for="nama_produk">Nama Produk</label>
                      <input type="text" class="form-control" name="nama_produk" id="nama_produk">
                      <small id="emailHelp" class="form-text text-danger"><?= form_error('nama_produk'); ?></small>
                    </div>
                    <div class="form-group">
                      <label for="ketegori_id">Kategori</label>
                      <select name="kategori_id" id="kategori_id" class="form-control">

                        <?php $ambil = $this->db->query("SELECT * FROM kategori"); ?>
                        <option value="pilih kategori" selected>Pilih Kategori</option> 
                        <?php foreach($ambil->result_array() as $pecah) : ?>
                          <option value="<?= $pecah['id_kategori'] ?>"><?= $pecah['nama_kategori'] ?></option>
                        <?php endforeach; ?>

                      </select>
                      <small id="emailHelp" class="form-text text-danger"><?= form_error('kategori_id'); ?></small>
                    </div>
                    <div class="form-group">
                      <label for="nama_penulis">Nama Penulis</label>
                      <input type="text" class="form-control" name="nama_penulis">
                      <small id="emailHelp" class="form-text text-danger"><?= form_error('nama_penulis'); ?></small>
                    </div>
                    <div class="form-group">
                      <label for="harga_produk">Harga (Rp)</label>
                      <input type="number" class="form-control" name="harga_produk">
                      <small id="emailHelp" class="form-text text-danger"><?= form_error('harga_produk'); ?></small>
                    </div>
                     <div class="form-group">
                      <label for="stok_produk">Stok</label>
                      <input type="number" class="form-control" name="stok_produk">
                      <small id="emailHelp" class="form-text text-danger"><?= form_error('stok_produk'); ?></small>
                    </div>
                    <div class="form-group">
                      <label for="foto_produk">Foto</label>
                      <input type="file" class="form-control" name="foto_produk">
                      <small id="emailHelp" class="form-text text-danger"><?= form_error('foto_produk'); ?></small>
                    </div>
                    <div class="form-group">
                      <label for="deskripsi_produk">Deskripsi</label>
                      <textarea name="deskripsi_produk" id="" class="form-control" rows="5"></textarea>
                      <small id="emailHelp" class="form-text text-danger"><?= form_error('deskripsi_produk'); ?></small>
                    </div>
                    <div class="form-group">
                      <label for="detail_produk">Detail</label>
                      <textarea name="detail_produk" id="" class="form-control" rows="5"></textarea>
                      <small id="emailHelp" class="form-text text-danger"><?= form_error('detail_produk'); ?></small>
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

      
