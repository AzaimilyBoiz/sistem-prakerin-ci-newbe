<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>home</title>

    <!-- Font Awesome Icons -->
    <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic'
        rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?= base_url('assets/') ?>vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS - Includes Bootstrap -->
    <link href="<?= base_url('assets/') ?>css/creative.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger ml-0" style="font-size: 22px;" href="#page-top"><img
                    style="width: 100px; height: 90px;" src="<?= base_url('assets/') ?>img/logo2.png" alt="" width="400"
                    height="400">SMK N 1
                BANTUL</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" style="font-size: 15px;" href="#about">Daftar Perusahaan
                            <i class="fas fa-list"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" style="font-size: 15px;" href="#contact">Contact <i
                                class="fas fa-phone"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" style="font-size: 15px;"
                            href="<?= base_url('Auth') ?>">Logout <i class="fas fa-sign-out-alt"></i> </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Masthead -->
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h1 class="text-uppercase text-white font-weight-bold">SELAMAT DATANG DIAPLIKASI PRAKERIN</h1>
                    <hr class="divider my-4">
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 font-weight-light mb-5">AJUKAN SURAT PERMINTAAN PRAKERIN ANDA DIBAWAH INI
                        SEKARANG</p>
                    <a class="btn btn-primary btn-xl js-scroll-trigger"
                        href="<?= base_url('siswa/Dashboard/daftar_pengajuan') ?>">HALAMAN PENGAJUAN</a>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section class="page-section bg-primary" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">Lihat Daftar Tempat Prakerin</h2>
                    <hr class="divider light my-4">
                    <p class="text-white-50 mb-4">Silahkan cari tempat prakerin yang cocok dengan jurusan Anda ,Setelah
                        itu kirimkan Surat Pengajuan lewat form diatas!</p>
                    <a class="btn btn-light btn-xl js-scroll-trigger"
                        href="<?= base_url('siswa/Dashboard/daftar_pkl') ?>">Lihat</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mt-0">Contact</h2>
                    <hr class="divider my-4">
                    <p class="text-muted mb-5">Silahkan hubungi Kami jika ada yang ingin ditanyakan!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                    <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                    <div>+62 87838405292</div>
                </div>
                <div class="col-lg-4 mr-auto text-center">
                    <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                    <!-- Make sure to change the email address in anchor text AND the link below! -->
                    <a class="d-block" href="mailto:pkl@pkl.id.or.id">pkl@pkl.id.or.id</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-light py-5">
        <div class="container">
            <div class="small text-center text-muted">Copyright &copy; <?= date('Y'); ?> SMK N 1 BANTUL</div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/magnific-popup/jquery.magnific-popup.min.js"></script>











    <!-- Custom scripts for this template -->
    <script src="<?= base_url('assets/') ?>js/creative.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/') ?>assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/') ?>assets/fontawesome/all.js"></script>
</body>

</html>