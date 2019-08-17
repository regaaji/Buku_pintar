  

  <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container dark-grey-text mt-5">

<?php foreach ($detail as $beli ) : ?>
  
      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <img src="<?= base_url(); ?>assets/img/foto_produk/<?= $beli['foto_produk']; ?>" class="img-fluid" style="height: 400px; width: 80%">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <!--Content-->
          <div class="p-4">

            <div class="mb-3">
              <a href="">
                <span class="badge red mr-1"><?= $beli['nama_kategori'] ?></span>
              </a>
            </div>

            <p class="lead">
              <span>Rp. <?= number_format($beli['harga_produk']) ?></span>
            </p>

            <p class="lead font-weight-bold"><?= $beli['nama_produk'] ?></p>

            

            <script>
              var angka = <?= $beli['stok_produk'] ?>;   
              </script>
            <form class="d-flex justify-content-left" method="post">
              <!-- Default input -->
              <input type="text" id="number" max="<?= $beli['stok_produk']; ?>" name="jumlah" class="form-control" style="width: 100px" autocomplete="off" required>
              <?php if( $beli['stok_produk'] == 0) : ?>

                <button class="btn btn-danger btn-md my-0 p" type="button" onclick="alert('Empty Produk');">Empty Produk
                <i class="fas fa-close ml-1"></i>
              </button>

               <?php else : ?> 
              <button class="btn btn-primary btn-md my-0 p" type="submit" name="beli">Add to cart
                <i class="fas fa-shopping-cart ml-1"></i>
              </button>

            <?php endif; ?>

            </form>
            
            <p class="font-weight-bold mt-4">Stok</p>
            <div class="progress" style="height: 12px;">
              <div class="progress-bar" role="progressbar" style="width: <?= $beli['stok_produk']; ?>%;"><?= $beli['stok_produk']; ?></div>
            </div>
            <?php 
            $id_produk = $beli['id_produk'];
            if(isset($_POST["beli"]))
            {
              $jumlah = $_POST["jumlah"];
              $_SESSION['keranjang'][$id_produk] = $jumlah;

              echo "<script>alert('Produk telah masuk ke keranjang');</script>";
              echo "<script>window.location.href='http://localhost/Buku_pintar/home/keranjang';</script>";
            }
             ?> 
          </div>
          <!--Content-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    
<?php endforeach; ?>
     

      

    
  </main>
  <!--Main layout-->