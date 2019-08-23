

    

   

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Pembelian</h1>

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
                      <th>No</th>
                      <th>Nama Pelanggan</th>
                      <th>Tanggal</th>
                      <th>Total</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $nomer = 1; ?>
                    <?php $ambil = $this->db->query("SELECT * FROM pembelian JOIN pelanggan ON pembelian.id_pelanggan = pelanggan.id_pelanggan"); ?>
                    <?php foreach($ambil->result_array() as $pecah) : ?>
                      <tr>
                        <td scope="row"><?= $nomer; ?></td>
                        <td><?= $pecah['nama_pelanggan']; ?></td>
                        <td><?= $pecah['tanggal_pembelian']; ?></td>
                        <td>Rp. <?= number_format($pecah['total_pembelian']); ?></td>
                        <td>
                          <a href="<?= base_url() ?>admin/pembelian/detailpembelian/<?= $pecah['id_pembelian']; ?>" class="btn btn-info btn-sm"><i class="fas fa-info-circle"></i></a>
                          <a href="<?= base_url() ?>admin/pembelian/hapuspembelian/<?= $pecah['id_pembelian']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a> 
                        </td>
                      </tr>
                      <?php $nomer++ ?>
                    <?php endforeach; ?>
                  </tbody>
                </table>
                </div>
                   
                </div>
              </div>
            </div>
            

          

          
           </div>   

        
			        

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      
