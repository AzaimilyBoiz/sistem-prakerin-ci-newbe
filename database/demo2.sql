-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 08, 2020 at 12:21 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo2`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` varchar(20) NOT NULL,
  `name_guru` varchar(100) NOT NULL,
  `jenis_kelamin` enum('pria','wanita') NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `name_guru`, `jenis_kelamin`, `email`) VALUES
('443', 'wergrtf ', 'wanita', 'wer@test'),
('87', 'rui', 'wanita', 'rui@test');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` varchar(20) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `jurusan`) VALUES
('1213', 'Teknik Komputer dan Jaringan'),
('45', 'Multimedia');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `nama_lengkap` varchar(225) NOT NULL,
  `kelas` varchar(225) NOT NULL,
  `nama_perusahaan` varchar(225) NOT NULL,
  `waktu_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `alamat_perusahaan` text NOT NULL,
  `keterangan` text NOT NULL,
  `status` varchar(225) DEFAULT 'menunggu konfirmasi'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`id_pengajuan`, `nama_lengkap`, `kelas`, `nama_perusahaan`, `waktu_upload`, `alamat_perusahaan`, `keterangan`, `status`) VALUES
(6, 'super', '11', 'BILL', '2020-02-16 16:41:47', 'YOGYA', 'MASUK', 'Tidak Disetujui'),
(9, 'superuser', '23', 'TI', '2020-02-16 16:41:42', 'yogya', 'free', 'Disetujui'),
(10, 'aku', '11', 'IDWEBHOST', '2020-02-16 15:32:42', 'JL.', 'SUDAH', 'Menunggu Konfirmasi');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` int(20) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL,
  `rekomendasi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `nama_perusahaan`, `alamat`, `email`, `rekomendasi`) VALUES
(1, 'TI ', 'smk ', 'super@test.com', 'RPL'),
(2, 'TRUE', 'smk 1 bantul', 'super@super.com', 'TKJ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_pengguna` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role` int(1) NOT NULL COMMENT '1.admin, 2.siswa',
  `akses` int(1) NOT NULL COMMENT '1.aktif, 2.ditolak',
  `tgl_dibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_pengguna`, `username`, `email`, `password`, `role`, `akses`, `tgl_dibuat`) VALUES
(3, 'admin', 'admin@admin.com', '$2y$10$CsAjPK0Jg2c9fZhEDYQUmeJG/tZxMDosmIRKgeDyRLZnAgnSvoRGu', 1, 1, '2020-02-02 14:55:42'),
(14, 'apip', 'alphatesterofficial@gmail.com', '$2y$10$jwmTbfyNANjJ6L7Voz1UYeBmxyRWFiV2d725SLPIYexnt./73Iiyq', 2, 1, '2020-02-17 14:50:20'),
(17, 'paijo', 'alfiplutfianaluki0962@gmail.com', '$2y$10$YLGMKINy0MDSFXYNQsh9Eu7whQZMwVGQ13QbCmjdMYIzJBkUlbj9K', 2, 1, '2020-02-16 10:24:47');

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `tgl_dibuat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `tgl_dibuat`) VALUES
(10, 'alfiplutfianaluki96@gmail.com', 'WY3AawUFgDHLegCnM8X6ixuc+4agwtafpkGkf00lsH8=', 1580658589),
(11, 'alfiplufianaluki0962@gmail.com', 'AAnyBx15ZvZDKF7yC4FgLNIQ/9DMZSjqbBBWahFANeg=', 1580748189),
(12, 'alfiplufianaluki0962@gmail.com', 'ytwsFZ46jRPKP3KGZiksYJZW1FqbFT3d54yx8eSCaMg=', 1580748666),
(13, 'alphatesterofficial@gmail.com', 'rnW17TERX00r7+1vNUY1TuRQf942Nxtj01jASKvbIzg=', 1581950578),
(14, 'alphatesterofficial@gmail.com', 'g0P81r7n6EUmREezkHF+81EGu5Q31UoY2JXdu5Ujtnw=', 1581950612),
(15, 'alphatesterofficial@gmail.com', 'C0/vjUhpLgpaKrv3DeftIUB87qmptL6TE8nBl/dFA8w=', 1581950837);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
