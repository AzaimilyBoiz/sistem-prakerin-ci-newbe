<html>

<head>
    <title>Surat Pengajuan</title>
    <script src='<?= base_url('assets/') ?>jquery.js'></script>
    <script src="<?= base_url('assets/') ?>jQuery.print.js"></script>
    <script>
    $(function() {
        $('#print').on('click', function() {
            $.print(".print_div");
        });
    });
    </script>
    <style>
    input {
        border-top-style: hidden;
        border-right-style: hidden;
        border-left-style: hidden;
        border-bottom-style: hidden;
        background-color: #eee;
    }

    .coba:focus {
        outline: none;
    }

    .kiri {
        width: 50%;
        height: 100px;
        float: left;
        text-align: center;
    }

    .kanan {
        width: 50%;
        height: 100px;
        float: right;
        text-align: center;
    }
    </style>
</head>

<body style="background-color: white; border-radius: 4px;" width="100%">
    <img src="<?= base_url('assets/') ?>img/lambang-diy.PNG" alt="diy"
        style="position: absolute; width: 80px; height: 120px;">
    <table style="width: 100%;">
        <tr>
            <td align="center">
                <span style="line-height: 1.6; font-size: 18px;">
                    PEMERINTAH DAERAH DAERAH ISTIMEWA YOGYAKARTA <br>
                    DINAS PENDIDIKAN DAN OLAHRAGA
                    <br><b>SMK NEGERI 1 BANTUL</b><br>
                    <em>JL. Parangtritis Km. 11 Sabdodadi Bantul 55702 Telp. 367156</em><br>
                    <em><b>web :<u>www.smkn1bantul.sch.id</u> e-mail</b> : smeanbtl@yahoo.com</em>
                </span>
            </td>
        </tr>
    </table>
    <hr align="left" color="black" size="2" width="100%" />
    <span style="font-family: comic sans ms;">
        <table style="width: 100%px;">
            <tr>
                <td align="right"><span style="font-size: x-small;"><input class="coba" type="text"
                            placeholder="no.surat"></span></td>
            </tr>
        </table>
        <table style="width: 100%px;">
            <tr>
                <td><span style="font-size: x-small;">Kepada Yth,</span></td>
            </tr>
            <tr>
                <td><span style="font-size: x-small;">Pimpinan<b> <u><input type="text"></u></b></span></td>
            </tr>
        </table>
    </span>
    <br />
    <span style="font-size: small;"><input type="text" placeholder="alamat"> </span><br />
    <span style="font-size: small;">Ditempat</span><br />
    <br />
    <table style="width: 100%px;">
        <tbody>
            <tr>
                <td>Diberitahukan dengan hormat bahwa untuk menindak lanjuti Program Kerja Sekolah tahun pelajaran
                    <input type="text"> perihal Praktek Kerja Lapangan (PKL) bagi peserta didik kelas XI Kompetensi
                    keahlian <input type="text" placeholder="jurusan"> di Dunia Usaha Industri dan Instansi Pemerintah
                    akan dilaksanakan tanggal <input type="date">s.d <input type="date">. <br>Untuk itu kami mohon
                    kepada bapak/ibu pemimpin berkenan menerima peserta didik kami di bawah ini Untuk teknis pelaksanaan
                    Praktek Kerja Industri tersebut akan kami sampaikan lebih lanjut. <br /><br />Adapun peserta didik
                    yang akan melaksanakan Praktek Kerja Industri sebagai berikut :</td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <blockquote>
        <table style="width: 100%px;">
            <tbody>
                <tr>
                    <td>Induk </td>
                    <td>: <input type="text"></td>
                </tr>
                <tr>
                    <td>Nama </td>
                    <td>: <input type="text"></td>
                </tr>
                <tr>
                    <td>Tempat,Tanggal Lahir </td>
                    <td>: <input type="text"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: <input type="text"></td>
                </tr>
                <tr>
                    <td>No.Telp/Hp</td>
                    <td>: <input type="text"></td>
                </tr>
                <tr>
                    <td>Asal Sekolah</td>
                    <td>: <input type="text"></td>
                </tr>
            </tbody>
        </table>
    </blockquote>
    <div>
        <table style="width: 100%px;">
            <tbody>
                <tr align="justify">
                    <td><span style="font-size: small;">
                            Demikian permohonan ini kami sampaikan atas bantuan dan kerja sama bapak/ibu kami ucapkan
                            terima kasih. </span></td>
                </tr>
            </tbody>
        </table>
    </div>
    <br />
    <br />
    <div class="kiri">
        <tr>
            <td style="columns: 2;">disetujui/tidak disetujui <br><input style="text-align: center;" type="text"
                    placeholder="nama perusahaan"></td><br /><br /><br /><br /><br />
            <td>............................</td>
        </tr>
    </div>
    <div class="kanan">
        <tr>
            <td>kepala sekolah</td><br /><br /><br />

            <td>
                <img style="width: 60px; height: 50px; position: 
				left;" src="<?= base_url('assets/') ?>img/ttd.jfif" alt="ttd"><br><span style="font-size: small;"><u>Dra.
                        Sudaryati, M.Pd</u></span>
            </td>
        </tr>
    </div>

    <center><button id='print'
       
     style='margin-top: 10px; padding: 10px; border: none; text-align: center; background: black; border-radius: 4px; color: #fff; font-weight: bold; cursor: pointer;'>CETAK</button>
    </center>
</body>

</html>