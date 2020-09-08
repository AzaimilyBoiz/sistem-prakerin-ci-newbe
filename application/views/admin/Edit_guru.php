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
        <div class="icon ml-4"> </div>

        </div>
    </nav>
    <div class="col-md-10 p-5 pt-2">
        <br>
        <br>
        <h3>Edit Guru</h3>
        <br>

        <div class="table-responsive">

            <button type="submit" form="edit-guru" class="btn btn-primary">Simpan</button>

            <form action="<?php echo base_url('edit_guru/simpan_guru/' . $guru->id_guru); ?>" method="post"
                id="edit-guru">
                <br>
                <table class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <td>
                                <label for="name_guru">Nama Guru</label>
                            </td>
                            <td>
                                <input type="text" name="name_guru" id="name_guru"
                                    value="<?php echo $guru->name_guru; ?> " required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="jens_kelamin">Jenis Kelamin</label>
                            </td>
                            <td>
                                <label><input type="radio" name="jenis_kelamin" value="pria"
                                        <?php echo ($guru->jenis_kelamin == 'pria' ? 'checked' : ''); ?>>Pria</label>
                                <labe><input type="radio" name="jenis_kelamin" value="wanita"
                                        <?php echo ($guru->jenis_kelamin == 'wanita' ? 'checked' : '') ?>>Wanita</labe>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="email">Email</label>
                            </td>
                            <td>
                                <input type="text" name="email" id="email" value="<?php echo $guru->email; ?>" required>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <a href="<?php echo base_url('Admin/Dashboard/daftar_guru'); ?>" class="btn btn-primary">Back</a>
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
    <script type="text/javascript" src="<?= base_url('assets/') ?>admin.js"></script>
</body>

</html>