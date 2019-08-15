

 

<main class="mt-5">
	<div class="container pt-5">
		<h1 class="text-center mb-5 mt-2">Data Produk</h1>
           <?php foreach($detail as $d) : ?>
		<div class="row justify-content-center">
			
			 <!--Card-->

            <div class="card" style="width: 300px;">

              <!--Card image-->
              
                <div class="zoom-effect">
                	<div class="kotak">
                		<img src="<?= base_url(); ?>assets/img/foto_produk/<?= $d['foto_produk']; ?>" height="300" class="card-img-top"
                  alt="">
                	</div>
                </div>
                
              
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <a href="" class="grey-text">
                  <h6><?= $d['nama_penulis']; ?></h6>
                </a>
                <h5>
                  <strong>
                    <a href="" class="dark-grey-text"><?= $d['nama_produk']; ?>
                      <span class="badge badge-pill danger-color"><?= $d['nama_kategori']  ?></span>
                    </a>
                  </strong>
                </h5>

                <h4 class="font-weight-bold blue-text">
                  <strong>Rp. <?= number_format($d['harga_produk']); ?></strong>
                </h4>

                <div class="row">
                  <div class="col-md-12">
                  	<p class="font-weight-bold mt-4">Stok</p>
                  	<div class="progress" style="height: 12px;">
                  		<div class="progress-bar" role="progressbar" style="width: <?= $d['stok_produk']; ?>%;"><?= $d['stok_produk']; ?></div>
                  	</div>
                  </div>
                </div>

              </div>
              <!--Card content-->

            </div>
    
            <!--Card-->


            
		</div>
        <?php endforeach; ?>  
	</div>


	<div class="container">
		<div class="row justify-content-center">
			<div class="card mt-5">
            	<div class="card-body">
            		<div class="row">
            			<div class="col-md-6">
            				<h3 class="text-center">Deksripsi Produk</h3>
            				<p><?= $d['deskripsi_produk']; ?></p>
            			</div>
            			<div class="col-md-6">
            				<h3 class="text-center">Detail Produk</h3>
            				<p><?= $d['detail_produk']; ?></p>
            			</div>
            		</div>
            	</div>
            </div>
		</div>
	</div>
</main>