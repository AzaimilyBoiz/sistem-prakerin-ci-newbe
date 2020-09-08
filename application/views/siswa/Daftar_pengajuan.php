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

<body
    style="background-attachment: scroll; cursor: pointer; background-image: url('<?= base_url('assets/') ?>img/bg-masthead.JPG'); background-repeat: no-repeat; background-size: cover;">

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
    <div class="container" style="margin-top: 150px;">
        <div class="table-responsive" style="text-align: center;">
            <a class="btn btn-primary mr-0" href="<?php echo base_url('siswa/dashboard/Tambah_pengajuan'); ?>">Tambah
                pengajuan</a>
            <br>
            <br>

            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama </th>
                        <th scope="col">Kelas/Jurusan </th>
                        <th scope="col">Nama Perusahaan </th>
                        <th scope="col">Alamat Perusahaan </th>
                        <th scope="col">Keterangan </th>
                        <th scope="col">Status </th>
                        <!-- <th scope="col">Action </th> -->
                    </tr>
                </thead>
                <tbody class="text-dark table-light">
                    <tr> <?php if (count($pengajuan) > 0) : ?>
                        <?php $index = 1; ?>
                        <?php foreach ($pengajuan as $peng) : ?>
                    <tr>
                        <td><?php echo $index++; ?></td>
                        <td><?php echo $peng->nama_lengkap; ?></td>
                        <td><?php echo $peng->kelas; ?></td>
                        <td><?php echo $peng->nama_perusahaan; ?></td>
                        <td><?php echo $peng->alamat_perusahaan; ?></td>
                        <td><?php echo $peng->keterangan; ?></td>
                        <td><?php echo $peng->status; ?></td>
                        <!-- <td>
                            <a class="btn btn-danger"
                                href="<?php echo base_url('siswa/Dashboard/Hapus_pengajuan_siswa/' . $peng->id_pengajuan); ?>">Hapus</a>
                        </td> -->
                    </tr>
                    <?php endforeach; ?>
                    <?php else : ?>
                    <tr>
                        <td>Data tidak tersedia</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <sc ript src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js">

        </script>







        <script src="<?= base_url('assets/') ?>vendor/magnific-popup/jquery.magnific-popup.min.js"></script>




        <!-- Custom scripts for this template -->
        <script src="<?= base_url('assets/') ?>js/creative.min.js"></script>
        <script type="text/javascript" src="<?= base_url('assets/') ?>assets/js/bootstrap.js"></script>
        <script type="text/javascript" src="<?= base_url('assets/') ?>assets/fontawesome/all.js"></script>
</body>

</html>