


<main class="pt-5">
  <div class="container">

    <div class="text-center mt-5">

      <?php foreach ($kategori as $ka ): ?>
        <?php $pilih = $ka['nama_kategori']; ?>
      <?php endforeach ?>
      <h2>Buku <?= $pilih; ?></h2>
    </div>
    <hr style="width: 250px; border-top: 3px solid #999;" class="mb-5">


    <!--Section: Products v.3-->
    <section class="text-center mb-4">

      <!--Grid row-->
      <div class="row wow fadeIn">
        <?php if(empty($jenis)) : ?>
          
          <div class="col-md-6 offset-3">
            <div class="alert alert-danger">Mohon maaf kategori buku <strong>kosong</strong></div>
          </div>

          <?php else: ?>

           <!--Grid column-->
           <?php foreach($jenis as $perproduk) : ?>
            <div class="col-lg-3 col-md-8 mb-4">

              <!--Card-->
              <div class="card">

                <!--Card image-->

                <img src="<?= base_url(); ?>assets/img/foto_produk/<?= $perproduk['foto_produk']; ?>" height="300" class="card-img-top"
                alt="">
                

                <!--Card image-->

                <!--Card content-->
                <div class="card-body text-center">
                  <!--Category & Title-->
                  <a href="" class="grey-text">
                    <h6><?= $perproduk['nama_penulis']; ?></h6>
                  </a>
                  <h5>
                    <strong>
                      <a href="" class="dark-grey-text"><?= $perproduk['nama_produk']; ?>
                      <span class="badge badge-pill danger-color"><?= $perproduk['nama_kategori']  ?></span>
                    </a>
                  </strong>
                </h5>

                <h4 class="font-weight-bold blue-text">
                  <strong>Rp. <?= number_format($perproduk['harga_produk']); ?></strong>
                </h4>

                <div class="row">
                  <div class="col-sm-6">
                    <a href="<?= base_url(); ?>home/beli/<?= $perproduk['id_produk']; ?>" class="btn btn-primary btn-sm">Beli</a>
                  </div>

                  <div class="col-sm-6">
                    <a href="<?= base_url(); ?>home/detail/<?= $perproduk['id_produk']; ?>" class="btn btn-warning btn-sm">Detail</a>
                  </div>
                </div>

              </div>
              <!--Card content-->

            </div>
            <!--Card-->

          </div>
        <?php endforeach; ?>
        <!--Grid column-->
      <?php endif; ?> 
    </div>
  </section>
</div>
</main>