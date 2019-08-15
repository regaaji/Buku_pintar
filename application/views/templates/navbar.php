<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?= $judul; ?></title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url();  ?>/assets/fontawesome-free/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="<?= base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?= base_url(); ?>/assets/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?= base_url(); ?>/assets/css/style.min.css" rel="stylesheet">
  <!-- Datatables -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/DataTables/datatables.min.css">
  <!-- icon -->
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/img/icon.png">
  <!-- map -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/lefleat/leaflet.css"/>
  <script src="<?= base_url(); ?>/assets/lefleat/leaflet.js"></script>

  <style type="text/css">
    html,
    body,
    header,
    .carousel {
      height: 60vh;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    #map{
    width: 700px;
    height: 300px;
  }


 
.zoom-effect:hover .kotak img {
  -webkit-transform: scale(1.08);
  transform: scale(1.08);
    -webkit-transition: 0.4s ease;
  transition: 0.4s ease;
}
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="<?= base_url(); ?>">
        <strong class="blue-text">Buku Pintar</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link waves-effect" href="<?= base_url(); ?>">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="<?= base_url(); ?>tentang/">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="<?= base_url(); ?>kategori/">Kategori</a>
          </li>
        
          
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a class="nav-link waves-effect" href="<?= base_url(); ?>home/keranjang">
              <?php if(empty($_SESSION['keranjang']) OR !isset($_SESSION['keranjang'])) : ?>

                <?php else : ?>
                <span class="badge red z-depth-1 mr-1"> <?= count($_SESSION['keranjang']); ?> </span>

                <?php endif; ?>
              <i class="fas fa-shopping-cart"></i>
              <span class="clearfix d-none d-sm-inline-block"> Cart </span>
            </a>
          </li>
          <?php if (isset($_SESSION['username'])): ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Selamat Datang, <?= $_SESSION['username']; ?>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?= base_url(); ?>home/profil"><i class="fas fa-user pr-2"></i>Profil</a>
                <a class="dropdown-item" href="<?= base_url(); ?>login/logout"><i class="fas fa-sign-out-alt pr-2"></i>Logout</a>
              </div>
            </li>
          <?php else: ?>
           <li class="nav-item">
            <a class="nav-link waves-effect" href="<?= base_url(); ?>login">Login</a>
          </li>
          <?php endif ?>
         
        </ul>
       
      </div>

    </div>
  </nav>
  <!-- Navbar -->