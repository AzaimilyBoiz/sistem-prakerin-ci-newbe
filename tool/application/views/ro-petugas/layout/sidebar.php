        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('ro-petugas') ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Petugas <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('ro-petugas'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Pengaduan
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('ro-petugas/index/pengaduan_masuk'); ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Pengaduan Masuk</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('ro-petugas/index/pengaduan_proses'); ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Pengaduan Proses</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('ro-petugas/index/pengaduan_selesai'); ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Pengaduan Selesai</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('ro-petugas/index/generate_laporan'); ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Generate Laporan</span></a>
            </li>

            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('ro-login/login/logout'); ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
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