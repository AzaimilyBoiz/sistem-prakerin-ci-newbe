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

    <title>Dashboard | Admin</title>

    <script>
    var baseurl =
        "<?php echo base_url('/'); ?>"; // Buat variabel baseurl untuk nanti di akses pada file config.js
    </script>
    <script src="<?php echo base_url('js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('js/config.js'); ?>"></script> <!-- Load file process.js -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.slim.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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
            <h3><i class="fas fa-user"></i>Daftar Pengguna</h3>

            <?php if ($this->session->flashdata('tambah_pengguna')) : ?>
            <?php if ($this->session->flashdata('tambah_pengguna') == TRUE) : ?>
            <div class="alert alert-success">Berhasil menambahkan pengguna baru</div>
            <?php elseif ($this->session->flashdata('tambah_pengguna') == FALSE) : ?>
            <div class="alert alert-danger">Gagal menambahkan pengguna baru</div>
            <?php endif; ?>
            <?php endif; ?>

            <?php if ($this->session->flashdata('edit_pengguna')) : ?>
            <?php if ($this->session->flashdata('edit_pengguna') == TRUE) : ?>
            <div class="alert alert-success">Berhasil update data pengguna</div>
            <?php elseif ($this->session->flashdata('edit_pengguna') == FALSE) : ?>
            <div class="alert alert-danger">Gagal update data pengguna</div>
            <?php endif; ?>
            <?php endif; ?>

            <?php if ($this->session->flashdata('hapus_pengguna')) : ?>
            <?php if ($this->session->flashdata('hapus_pengguna') == TRUE) : ?>
            <div class="alert alert-success">Berhasil menghapus data pengguna</div>
            <?php elseif ($this->session->flashdata('hapus_pengguna') == FALSE) : ?>
            <div class="alert alert-danger">Gagal menghapus data pengguna</div>
            <?php endif; ?>
            <?php endif; ?>
            <br>
            <!-- <a class="btn btn-primary ml-auto" href="<?php echo base_url('Admin/Dashboard/Tambah'); ?>">Tambah Data
                pengguna</a> -->
            <?php $attributes = array('class' => 'row'); ?>
            <?php echo form_open('Admin/Dashboard/search_user', $attributes); ?>
            <input type="text" name="keyword" placeholder="search" class="form-control col-md-3 ml-auto">
            <input type="submit" value="Search" class="btn btn-warning">
            <a href="<?= base_url('Admin/Dashboard/daftar_pengguna') ?>" class="btn btn-warning">Reset</a>
            <?php echo form_close(); ?>
            <br>
            <br>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Username</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Role</th>
                            <th scope="col">Tanggal/Waktu Dibuat</th>
                            <th scope="col">Akses</th>
                            <th colspan="3" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr> <?php if (count($user) > 0) : ?>
                            <?php $index = 1; ?>
                            <?php foreach ($user as $pe) : ?>
                        <tr>
                            <td><?php echo $index++; ?></td>
                            <td><?php echo $pe->username; ?></td>
                            <td><?php echo $pe->email; ?></td>
                            <td><?php echo $pe->role; ?></td>
                            <td><?php echo $pe->tgl_dibuat; ?></td>
                            <td><?php echo $pe->akses; ?></td>
                            <td>
                                <a class="btn btn-primary"
                                    href="<?php echo base_url('Admin/Dashboard/Edit/' . $pe->id_pengguna); ?>">Edit</a>
                                <a class="btn btn-danger"
                                    href="<?php echo base_url('Admin/Dashboard/Hapus/' . $pe->id_pengguna); ?>">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php else : ?>
                        <tr>
                            <td>Data tidak tersedia</td>
                        </tr>
                        <?php endif; ?>
                        </tr>
                    </tbody>
                </table>
                <!-- <?php echo $this->pagination->create_links(); ?> -->
            </div>
        </div>
    </div>


    </div>
    </div>
    </div>



















    <!-
 - Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script> -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>
        <script type="text/javascript" src="<?= base_url('assets/') ?>admin.js"></script>
</body>

</html>
