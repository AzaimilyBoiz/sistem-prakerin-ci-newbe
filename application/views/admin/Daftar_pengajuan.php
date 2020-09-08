<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>admin.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>fontawesome-free/css/all.min.css">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <title>Dashboard | Admin</title>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <a class="navbar-brand" href="#">SELAMAT DATANG ADMIN | <b>SISTEM PRAKERIN</b></a>

        <form class="form-inline my-2 my-lg-0 ml-auto">
            <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
        </form>

        <div class="icon ml-4">
            <h5>

                <a href="<?= site_url('auth/logout'); ?>"> <i class="fas fa-sign-out-alt mr-3" data-toggle="tooltip"
                        title="Sign Out" aria-hidden="true"></i>

            </h5>
        </div>

        </div>
    </nav>
    <div class="row no-gutters mt-5">
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
            <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo site_url('Admin/Dashboard/daftar_pengajuan'); ?>"><i
                            class="fas fa-address-card"></i> Daftar Pengajuan</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo site_url('Admin/Dashboard/daftar_pengguna'); ?>"><i
                            class="fas fa-user"></i> Daftar Pengguna</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo site_url('Admin/Dashboard/daftar_jurusan'); ?>"><i
                            class="fab fa-leanpub"></i> Daftar Jurusan </a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo site_url('Admin/Dashboard/daftar_guru'); ?>"><i
                            class="fas fa-chalkboard-teacher mr-1"></i> Daftar Guru </a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white"
                        href="<?php echo site_url('Admin/Dashboard/daftar_perusahaan'); ?>"><i
                            class="fas fa-building mr-1"></i> Daftar Perusahaan</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo site_url('Admin/Dashboard/kirim_email'); ?>"><i
                            class="far fa-envelope"></i> Kirim Email</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo site_url('Admin/Dashboard/print_surat'); ?>"><i
                            class="fas fa-print"></i> Print Surat</a>
                    <hr class="bg-secondary">
                </li>
            </ul>
        </div>
        <div class="col-md-10 p-5 pt-2">
            <div class="ml-auto">
                <h3><i class="fas fa-address-card"></i> Form pengajuan</h3>
                <br>
                <a class="btn btn-primary" href="<?php echo base_url('Admin/Dashboard/Tambah_pengajuan'); ?>">Tambah
                    Data
                    pengajuan</a>
                <?php $attributes = array('class' => 'row'); ?>
                <?php echo form_open('Admin/Dashboard/search_pengajuan', $attributes); ?>
                <input type="text" name="keyword" placeholder="search" class="form-control col-md-3 ml-auto">
                <input type="submit" value="Search" class="btn btn-warning col-md-1">
                <a href="<?= base_url('Admin/Dashboard/daftar_pengajuan') ?>" class="btn btn-warning col-md-1">Reset</a>
                <?php echo form_close(); ?>
            </div>
            <br>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kelas/Jurusan</th>
                            <th scope="col">Nama Perusahaan</th>
                            <th scope="col">Alamat Perusahaan</th>
                            <th scope="col">Diunggah pada</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Status</th>
                            <th scope="col">Ganti Status</th>
                            <th scope="col">Hapus</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php if (count($pengajuan) > 0) : ?>
                            <?php $index = 1; ?>
                            <?php foreach ($pengajuan as $peng) : ?>
                        <tr>
                            <td><?php echo $index++; ?></td>
                            <td><?php echo $peng->nama_lengkap; ?></td>
                            <td><?php echo $peng->kelas; ?></td>
                            <td><?php echo $peng->nama_perusahaan; ?></td>
                            <td><?php echo $peng->alamat_perusahaan; ?></td>
                            <td><?php echo $peng->waktu_upload; ?></td>
                            <td><?php echo $peng->keterangan; ?></td>
                            <td><?php echo $peng->status; ?></td>
                            <td><a href="<?= base_url('Admin/Dashboard/ganti_status/' . $peng->id_pengajuan); ?>"
                                    class="btn btn-primary">Ganti</a>
                            </td>
                            <td>
                                <a class="btn btn-danger"
                                    href="<?php echo base_url('Admin/Dashboard/Hapus_pengajuan/' . $peng->id_pengajuan); ?>">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php else : ?>
                        <tr>
                            <td>Data tidak tersedia</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
                <?php echo $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <!-- 
    <sc
ript ty
pe="tex
t/javas
cript" 
src="<?= base_url('assets/') ?>admin.js"></script> -->

    <!-- Bootstrap core JavaScript-->
    <sc ript src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js">

























        </script>
        <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
</body>

</html>