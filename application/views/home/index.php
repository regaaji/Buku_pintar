 <!--Carousel Wrapper-->
  <div id="carousel-example-1z" class="carousel slide carousel-fade pt-4" data-ride="carousel">

    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->
      <div class="carousel-item active">
        <div class="view" style="background-image: url('<?= base_url();  ?>/assets/img/foto_produk/home.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow bounce">
              <h1 class="mb-4">
                <strong>Buku Pintar</strong>
              </h1>

              <p>
                <strong>Layanan Penjualan Buku Terbaik</strong>
              </p>

             
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/First slide-->

      <!--Second slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('<?= base_url();  ?>/assets/img/foto_produk/home1.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-right white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>Buku Pintar</strong>
              </h1>

              <p style="font-size: 50px;">
                Siap Melayani Anda...
              </p>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Second slide-->

      <!--Third slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('<?= base_url(); ?>/assets/img/foto_produk/home2.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
             

              <p>
                <strong style="font-size: 20px;">
                  kami bekerja sama dengan para ahli untuk mendapatkan Buku yang bagus
                </strong>
              </p>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Third slide-->

    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->

  </div>
  <!--/.Carousel Wrapper-->


  <!--Main layout-->
  <main>
    <div class="container">

    <div class="text-center mt-5">
    <?php if(empty($produk)) : ?>
    
    <?php else: ?>
      <h2>Buku Favorit</h2>
       <hr style="width: 250px; border-top: 3px solid #999;" class="mb-5">
     <?php endif; ?> 
    </div>
     
   
      <!--Section: Products v.3-->
      <section class="text-center mb-4">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <?php if(empty($produk)) : ?>
            
              <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                  Data tidak ditemukan
                </div>
              </div>
            
           <?php endif; ?> 
  
           <?php foreach($produk as $p) : ?>
           
          <div class="col-lg-3 col-md-8 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              
                <img src="<?= base_url(); ?>/assets/img/foto_produk/<?= $p['foto_produk']; ?>" height="300" class="card-img-top"
                  alt="">
                
              
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <a href="" class="grey-text">
                  <h6><?= $p['nama_penulis']; ?></h6>
                </a>
                <h5>
                  <strong>
                    <a href="" class="dark-grey-text">
                      <span class="badge badge-pill danger-color"></span>
                    </a>
                  </strong>
                </h5>

                <h4 class="font-weight-bold blue-text">
                  <strong>Rp. <?= number_format($p['harga_produk']); ?></strong>
                </h4>

                <div class="row">
                  <div class="col-sm-6">
                    <a href="<?= base_url(); ?>home/beli/<?= $p['id_produk']; ?>" class="btn btn-primary btn-sm">Beli</a>
                  </div>

                  <div class="col-sm-6">
                    <a href="<?= base_url(); ?>home/detail/<?= $p['id_produk']; ?>" class="btn btn-warning btn-sm">Detail</a>
                  </div>
                </div>

              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
          <?php endforeach; ?>
          <!--Grid column-->


         

         

      </section>
      <!--Section: Products v.3-->
     

    </div>
  </main>
  <!--Main layout-->



    <!--Main layout-->
  <main>
    <div class="container">

    <div class="text-center mt-5">
    <?php if(empty($new)) : ?>
    
    <?php else: ?>
      <h2>Buku Baru</h2>
       <hr style="width: 250px; border-top: 3px solid #999;" class="mb-5">
     <?php endif; ?> 
    </div>
     
   
      <!--Section: Products v.3-->
      <section class="text-center mb-4">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <?php if(empty($new)) : ?>
            
              <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                  Data tidak ditemukan
                </div>
              </div>
            
           <?php endif; ?> 
  
           <?php foreach($new as $n) : ?>
           
          <div class="col-lg-3 col-md-8 mb-4">

            <!--Card-->
            <div class="card">

              <!--Card image-->
              
                <img src="<?= base_url(); ?>/assets/img/foto_produk/<?= $n['foto_produk']; ?>" height="300" class="card-img-top"
                  alt="">
                
              
              <!--Card image-->

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
                <a href="" class="grey-text">
                  <h6><?= $n['nama_penulis']; ?> <span class="badge badge-danger badge-sm">New</span></h6> 
                </a>
                <h5>
                  <strong>
                    <a href="" class="dark-grey-text">
                      <span class="badge badge-pill danger-color"></span>
                    </a>
                  </strong>
                </h5>

                <h4 class="font-weight-bold blue-text">
                  <strong>Rp. <?= number_format($n['harga_produk']); ?></strong>
                </h4>
              
                <div class="row">
                  <div class="col-sm-6">
                    <a href="<?= base_url(); ?>home/beli/<?= $n['id_produk']; ?>" class="btn btn-primary btn-sm">Beli</a>
                  </div>

                  <div class="col-sm-6">
                    <a href="<?= base_url(); ?>home/detail/<?= $n['id_produk']; ?>" class="btn btn-warning btn-sm">Detail</a>
                  </div>
                </div>

              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
          <?php endforeach; ?>
          <!--Grid column-->


         

         

      </section>
      <!--Section: Products v.3-->
     

    </div>
  </main>
  <!--Main layout-->