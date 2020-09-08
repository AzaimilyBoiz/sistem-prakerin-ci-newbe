<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>admin.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>fontawesome-free/css/all.min.css">

    <title>DAFTAR PKL</title>
</head>

<body>
    <br>
    <br>
    <div class="header">
        <center>
            <p style="font-size: 25px"><b>Form Pengajuan<b></p>
        </center>
    </div>
    <a class="btn btn-primary" href="<?php echo base_url('siswa/dashboard/Tambah_pengajuan'); ?>">Tambah pengajuan</a>
    <br>
    <br>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Nama Perusahaan</th>
                <th>Alamat Perusahaan</th>
                <th>Diunggah pada</th>
                <th>Keterangan</th>
                <th>Status</th>
                <th>Hapus</th>

            </tr>
        </thead>
        <tbody>
            <tr> <?php if (count($pengajuan) > 0) : ?>
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
                <td>
                    <a class="btn btn-danger"
                        href="<?php echo base_url('siswa/Dashboard/Hapus_pengajuan_siswa/' . $peng->id_pengajuan); ?>">Hapus</a>
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
    <br>
    <center>
        <a class="btn btn-primary" href="<?php echo base_url('siswa/Dashboard/index'); ?>">Back</a>
    </center>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <sc ript src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
       
     integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>
        <script type="text/javascript" src="<?= base_url('assets/') ?>admin.js"></script>
</body>

</html>