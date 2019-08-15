<!-- Sidebar -->
<ul class="navbar-nav bg-gray-800 sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Buku Pintar</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/admin/') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>  

     <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/kurir/') ?>">
            <i class="fas fa-fw fa-truck-moving"></i>
            <span>Kurir</span></a>
    </li>  

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/produk/') ?>">
            <i class="fas fa-fw fa-book"></i>
            <span>Produk</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/kategori/') ?>">
            <i class="fas fa-fw fa-cubes"></i>
            <span>Kategori</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/pembelian/') ?>">
            <i class="fas fa-fw fa-credit-card"></i>
            <span>Laporan</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/pelanggan') ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Pelanggan</span></a>
    </li>


    <!-- Heading -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/auth/logout/') ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->