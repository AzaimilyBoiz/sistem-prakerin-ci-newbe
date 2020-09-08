<html>

<head>
    <title>Daftar</title>
</head>

<body>
    <h3>Daftar Pengguna</h3>

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

    <a href="<?php echo base_url('Daftar_controller/Tambah'); ?>">Tambah pengguna</a>
    <br>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Id</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Jenis Kelamin</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($pengguna) > 0) : ?>
            <?php $index = 1; ?>
            <?php foreach ($pengguna as $pe) : ?>
            <tr>
                <td><?php echo $index++; ?></td>
                <td><?php echo $pe->id_pengguna; ?></td>
                <td><?php echo $pe->nama_lengkap; ?></td>
                <td><?php echo $pe->username; ?></td>
                <td><?php echo $pe->jenis_kelamin; ?></td>
                <td><?php echo $pe->email; ?></td>
                <td><?php echo $pe->role; ?></td>
                <td>
                    <a href="<?php echo base_url('Daftar_controller/Edit/' . $pe->id_pengguna); ?>">Edit</a>
                    <a href="<?php echo base_url('Daftar_controller/Hapus/' . $pe->id_pengguna); ?>">Hapus</a>
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
    <br>
    <?php echo $this->pagination->create_links(); ?>
    <br>
    <br>
    <br>
    <br>
    <h3>==================================================================</h3>
    <h3>Daftar Jurusan</h3>
    <br>
    <br>
    <?php if ($this->session->flashdata('tambah_jurusan')) : ?>
    <?php if ($this->session->flashdata('tambah_jurusan') == TRUE) : ?>
    <div class="alert alert-success">Berhasil menambahkan jurusan baru</div>
    <?php elseif ($this->session->flashdata('tambah_jurusan') == FALSE) : ?>
    <div class="alert alert-danger">Gagal menambahkan jurusan baru</div>
    <?php endif; ?>
    <?php endif; ?>

    <?php if ($this->session->flashdata('edit_jurusan')) : ?>
    <?php if ($this->session->flashdata('edit_jurusan') == TRUE) : ?>
    <div class="alert alert-success">Berhasil update data jurusan</div>
    <?php elseif ($this->session->flashdata('edit_jurusan') == FALSE) : ?>
    <div class="alert alert-danger">Gagal update data jurusan</div>
    <?php endif; ?>
    <?php endif; ?>

    <?php if ($this->session->flashdata('hapus_jurusan')) : ?>
    <?php if ($this->session->flashdata('hapus_jurusan') == TRUE) : ?>
    <div class="alert alert-success">Berhasil menghapus data jurusan</div>
    <?php elseif ($this->session->flashdata('hapus_jurusan') == FALSE) : ?>
    <div class="alert alert-danger">Gagal menghapus data jurusan</div>
    <?php endif; ?>
    <?php endif; ?>

    <a href="<?php echo base_url('Daftar_controller/Tambah_jurusan'); ?>">Tambah Jurusan</a>
    <br>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Id Jurusan</th>
                <th>Nama Jurusan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($jurusan) > 0) : ?>
            <?php $index = 1; ?>
            <?php foreach ($jurusan as $jur) : ?>
            <tr>
                <td><?php echo $index++; ?></td>
                <td><?php echo $jur->id_jurusan; ?></td>
                <td><?php echo $jur->jurusan; ?></td>
                <td>
                    <a href="<?php echo base_url('Daftar_controller/Edit_jurusan/' . $jur->id_jurusan); ?>">Edit</a>
                    <a href="<?php echo base_url('Daftar_controller/Hapus_jurusan/' . $jur->id_jurusan); ?>">Hapus</a>
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
    <br>
    <?php echo $this->pagination->create_links(); ?>
    <br>
    <br>
    <br>
    <h3>================================================================</h3>
    <h3>Daftar guru</h3>

    <?php if ($this->session->flashdata('tambah_guru')) : ?>
    <?php if ($this->session->flashdata('tambah_guru') == TRUE) : ?>
    <div class="alert alert-success">Berhasil menambahkan guru baru</div>
    <?php elseif ($this->session->flashdata('tambah_guru') == FALSE) : ?>
    <div class="alert alert-danger">Gagal menambahkan guru baru</div>
    <?php endif; ?>
    <?php endif; ?>

    <?php if ($this->session->flashdata('edit_guru')) : ?>
    <?php if ($this->session->flashdata('edit_guru') == TRUE) : ?>
    <div class="alert alert-success">Berhasil update data guru</div>
    <?php elseif ($this->session->flashdata('edit_guru') == FALSE) : ?>
    <div class="alert alert-danger">Gagal update data guru</div>
    <?php endif; ?>
    <?php endif; ?>

    <?php if ($this->session->flashdata('hapus_guru')) : ?>
    <?php if ($this->session->flashdata('hapus_guru') == TRUE) : ?>
    <div class="alert alert-success">Berhasil menghapus data guru</div>
    <?php elseif ($this->session->flashdata('hapus_guru') == FALSE) : ?>
    <div class="alert alert-danger">Gagal menghapus data guru</div>
    <?php endif; ?>
    <?php endif; ?>

    <a href="<?php echo base_url('Daftar_controller/Tambah_guru'); ?>">Tambah Data Guru</a>
    <br>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Id</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($guru) > 0) : ?>
            <?php $index = 1; ?>
            <?php foreach ($guru as $gu) : ?>
            <tr>
                <td><?php echo $index++; ?></td>
                <td><?php echo $gu->id_guru; ?></td>
                <td><?php echo $gu->name_guru; ?></td>
                <td><?php echo $gu->jenis_kelamin; ?></td>
                <td><?php echo $gu->email; ?></td>
                <td>
                    <a href="<?php echo base_url('Daftar_controller/Edit_guru/' . $gu->id_guru); ?>">Edit</a>
                    <a href="<?php echo base_url('Daftar_controller/Hapus_guru/' . $gu->id_guru); ?>">Hapus</a>
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
    <br>
    <?php echo $this->pagination->create_links(); ?>
    <br>
    <br>
    <br>
    <br>
    <h3>==================================================================</h3>
    <br>
    <br>
    <h3>Daftar perusahaan</h3>

    <?php if ($this->session->flashdata('tambah_perusahaan')) : ?>
    <?php if ($this->session->flashdata('tambah_perusahaan') == TRUE) : ?>
    <div class="alert alert-success">Berhasil menambahkan perusahaan baru</div>
    <?php elseif ($this->session->flashdata('tambah_perusahaan') == FALSE) : ?>
    <div class="alert alert-danger">Gagal menambahkan perusahaan baru</div>
    <?php endif; ?>
    <?php endif; ?>

    <?php if ($this->session->flashdata('edit_perusahaan')) : ?>
    <?php if ($this->session->flashdata('edit_perusahaan') == TRUE) : ?>
    <div class="alert alert-success">Berhasil update data perusahaan</div>
    <?php elseif ($this->session->flashdata('edit_perusahaan') == FALSE) : ?>
    <div class="alert alert-danger">Gagal update data perusahaan</div>
    <?php endif; ?>
    <?php endif; ?>

    <?php if ($this->session->flashdata('hapus_perusahaan')) : ?>
    <?php if ($this->session->flashdata('hapus_perusahaan') == TRUE) : ?>
    <div class="alert alert-success">Berhasil menghapus data perusahaan</div>
    <?php elseif ($this->session->flashdata('hapus_perusahaan') == FALSE) : ?>
    <div class="alert alert-danger">Gagal menghapus data perusahaan</div>
    <?php endif; ?>
    <?php endif; ?>

    <a href="<?php echo base_url('Daftar_controller/Tambah_perusahaan'); ?>">Tambah Data perusahaan</a>
    <br>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Id</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($perusahaan) > 0) : ?>
            <?php $index = 1; ?>
            <?php foreach ($perusahaan as $peru) : ?>
            <tr>
                <td><?php echo $index++; ?></td>
                <td><?php echo $peru->id_perusahaan; ?></td>
                <td><?php echo $peru->nama_perusahaan; ?></td>
                <td><?php echo $peru->alamat; ?></td>
                <td><?php echo $peru->email; ?></td>
                <td>
                    <a
                        href="<?php echo base_url('Daftar_controller/Edit_perusahaan/' . $peru->id_perusahaan); ?>">Edit</a>
                    <a
                        href="<?php echo base_url('Daftar_controller/Hapus_perusahaan/' . $peru->id_perusahaan); ?>">Hapus</a>
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
    <br>
    <?php echo $this->pagination->create_links(); ?>
    <br>
    <br>
    <br>
    <br>
    <h3>==================================================================</h3>


</body>



</html>