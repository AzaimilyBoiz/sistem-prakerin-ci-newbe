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

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <a class="navbar-brand" href="#">SELAMAT DATANG ADMIN | <b>SISTEM PRAKERIN</b></a>
        <div class="icon ml-4">
        </div>

        </div>
    </nav>
    <div class="col-md-10 p-5 pt-2">
        <br>
        <h3>Tambah Guru</h3>
        <br>
        <div class="table-responsive">
            <button class="btn btn-primary" type="submit" form="tambah-guru">Simpan</button>

            <form action="<?php echo base_url('tambah_guru/simpan_guru/'); ?>" method="post" id="tambah-guru">
                <br>
                <table class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <td>
                                <label for="id_guru">Id guru</label>
                            </td>
                            <td>
                                <input type="text" name="id_guru" id="id_guru" placeholder="Masukan Id guru" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="name_guru">Nama Guru</label>
                            </td>
                            <td>
                                <input type="text" name="name_guru" id="name_guru" placeholder="Masukan nama guru"
                                    required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                            </td>
                            <td>
                                <label><input type="radio" name="jenis_kelamin" value="pria">Pria</label>
                                <label><input type="radio" name="jenis_kelamin" value="wanita">Wanita</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="email">Email</label>
                            </td>
                            <td>
                                <input type="text" name="email" id="email" placeholder="Masukan E-mail" required>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <a class="btn btn-primary" href="<?php echo base_url('Admin/Dashboard/daftar_guru'); ?>">Back</a>
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
    <sc ript type="text/javascript" src="<?= base_url('assets/') ?>admin.js">
        </script>
</body>

</html>