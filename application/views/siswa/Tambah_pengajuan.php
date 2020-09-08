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

<body id="page-top"
    style="background-image: url('<?= base_url('assets/') ?>img/bg-masthead.JPG'); background-repeat: no-repeat; background-size: cover;">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" style="font-size: 22px;" href="#page-top"><img
                    style="width: 100px; height: 90px;" src="<?= base_url('assets/') ?>img/logo2.png" alt="">SMK N 1
                BANTUL</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" style="font-size: 15px;"
                            href="<?= base_url('siswa/Dashboard/daftar_pkl') ?>"><i class="fas fa-list"></i> Daftar
                            Perusahaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" style="font-size: 15px;"
                            href="<?= base_url('siswa/Dashboard') ?>"><i class="fas fa-home"></i> Home</a>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Masthead -->
    <div class="container mt-5">
        <div class="card" style="height: 90%; width: 100%; margin-top: 150px;">
            <div class="card-header bg-warning text-white">Form Pengajuan</div>
            <div class="card-body">
                <form action="<?php echo base_url('tambah_pengajuan/simpan_pengajuan/'); ?>" method="post"
                    id="tambah-pengajuan">
                    <div class="form-group">
                        <label for="nama_lengkap">Nama</label>
                        <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" required>
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" name="kelas" class="form-control" id="kelas" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_perusahaan">Nama Perusahaan</label>
                        <input type="text" name="nama_perusahaan" class="form-control" id="nama_perusahaan" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat_perusahaan">Alamat Perusahaan</label>
                        <input type="text" name="alamat_perusahaan" class="form-control" id="alamat_perusahaan"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" id="keterangan">
                    </div>
                    <button type="submit" class="btn btn-primary" form="tambah-pengajuan">Kirim</button>
                </form>
            </div>
        </div>
    </div>

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