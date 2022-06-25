-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2022 at 04:08 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tvri_habari`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_naskah`
--

CREATE TABLE `detail_naskah` (
  `id_detail` int(11) NOT NULL,
  `id_naskah` int(11) NOT NULL,
  `urutan` varchar(3) NOT NULL,
  `su` varchar(20) NOT NULL,
  `naskah_su` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_naskah`
--

INSERT INTO `detail_naskah` (`id_detail`, `id_naskah`, `urutan`, `su`, `naskah_su`) VALUES
(10, 1, '1', 'POLISI IPTU NORMAN -', 'ABID MUHAIMIN HARUN - TVRI GORONTALO'),
(11, 2, '1', 'KLARIFIKASI LUTFI - ', 'WAHYU USMAN - TVRI GORONTALO'),
(12, 0, '1', 'ini dpe siound uo', 'tvri sultra mengabarkan'),
(13, 0, '1', 'imanule', 'tvri sulut mengabarkan');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(2, 'Kesehatan'),
(3, 'Hukum'),
(4, 'Bencana'),
(5, 'Ekonomi'),
(7, 'Sosial'),
(8, 'Keagamaan');

-- --------------------------------------------------------

--
-- Table structure for table `naskah`
--

CREATE TABLE `naskah` (
  `id_naskah` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `kameramen` varchar(50) NOT NULL,
  `tgl_berita` date NOT NULL,
  `id_kategori` varchar(50) NOT NULL,
  `bobot` int(2) NOT NULL,
  `lead` longtext NOT NULL,
  `naskah` longtext NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `sts_periksa` int(2) NOT NULL,
  `sts_edit` int(2) NOT NULL,
  `id_user` int(11) NOT NULL,
  `narasumber` varchar(100) NOT NULL,
  `ket_narsum` varchar(150) NOT NULL,
  `nomorhp_narsum` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `naskah`
--

INSERT INTO `naskah` (`id_naskah`, `judul`, `lokasi`, `kameramen`, `tgl_berita`, `id_kategori`, `bobot`, `lead`, `naskah`, `jenis`, `sts_periksa`, `sts_edit`, `id_user`, `narasumber`, `ket_narsum`, `nomorhp_narsum`) VALUES
(1, 'POLISI TILANG ANAK USIA 6 TAHUN', 'BONE BOLANGO', '1', '2022-06-25', '4', 4, 'IINI LEADD BEBERAPA POLISI MENILANG ORANG ', 'INI NARASIIII BEBERAPA POLISI MENILANG ORANG', 'ghi', 0, 0, 1, '', '', ''),
(2, 'PENGEMIS PUNYA TABUNGAN RATUSAN JUTA', 'KOTA GORONTALO', '12', '2022-06-25', '3', 4, 'PENGEMIS DI KOTA GORONTALO DI DAPATI MEMILIKI TABUNGAN RATUSAN JUTA BBEGINI KONDISINYA', 'LUTFI ADALAH PENGEMIS DENGAN TRABUNGAN RATUSAN JUTA', 'ghi', 0, 0, 12, '', '', ''),
(3, 'aaa', '', '', '2022-06-25', '3', 4, 'aa', '', 'dialog', 0, 0, 1, 'aa', 'aa', 'aa'),
(4, 'JUDUL DIAL', '', '', '2022-06-25', '3', 4, 'LEAD DIALOG', '', 'dialog', 0, 0, 1, 'NAMA DIAL', 'KETERANGAN DIALOG', 'NOMOR DIALOG'),
(5, 'sulampa', 'SULAMPA', 'al', '0000-00-00', '1', 1, '', '', 'sulampa', 0, 0, 1, '', '', ''),
(6, 'a', 'SULAMPA', '', '0000-00-00', '--Pilih Sumber--', 1, '', '', 'sulampa', 0, 0, 1, '', '', ''),
(7, 'ghi', 'ghi', '2', '0000-00-00', '2', 1, '', '', 'ghi', 0, 0, 1, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `naskah_default`
--

CREATE TABLE `naskah_default` (
  `id_naskahdefault` int(11) NOT NULL,
  `judul_naskah` varchar(50) NOT NULL,
  `narasi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `naskah_default`
--

INSERT INTO `naskah_default` (`id_naskahdefault`, `judul_naskah`, `narasi`) VALUES
(3, 'Bridging Iklan', '<p>Pemirsa nantikan sesaat lagi berita hari ini sekian dan salam</p>'),
(4, 'Pengantar Sulampa', '<p>Pemirsa saat ini kita beralih ke pengantar sulampa</p>'),
(5, 'Bridging Ramadhan', '<p>Selamat berbuka ramdahan. marhaban tiba ya ramadhan');

-- --------------------------------------------------------

--
-- Table structure for table `program_cu`
--

CREATE TABLE `program_cu` (
  `id_program_cu` int(11) NOT NULL,
  `nama_program_cu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program_cu`
--

INSERT INTO `program_cu` (`id_program_cu`, `nama_program_cu`) VALUES
(1, 'Mokawali Lipu'),
(2, 'Dunia Olahraga'),
(3, 'Gorontalo Menyapa'),
(4, 'Inspirasi Indonesia'),
(5, 'Lintas Negri'),
(6, 'Tatoonu');

-- --------------------------------------------------------

--
-- Table structure for table `setting_tim_redaksi`
--

CREATE TABLE `setting_tim_redaksi` (
  `id` int(11) NOT NULL,
  `penanggung_jawab` varchar(50) NOT NULL,
  `pelaksana_produser` varchar(50) NOT NULL,
  `pelaksana_berita` varchar(50) NOT NULL,
  `eic` varchar(50) NOT NULL,
  `redaktur` varchar(50) NOT NULL,
  `pd_berita` varchar(50) NOT NULL,
  `fd_berita` varchar(50) NOT NULL,
  `editor` varchar(50) NOT NULL,
  `petugas_it` varchar(50) NOT NULL,
  `penyiar` varchar(50) NOT NULL,
  `pelaksana_cu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting_tim_redaksi`
--

INSERT INTO `setting_tim_redaksi` (`id`, `penanggung_jawab`, `pelaksana_produser`, `pelaksana_berita`, `eic`, `redaktur`, `pd_berita`, `fd_berita`, `editor`, `petugas_it`, `penyiar`, `pelaksana_cu`) VALUES
(1, 'Stella Purukan', 'Steve Sigarlaki', 'Taufik Sako', 'Herni Tanango', 'Redaktur', 'Faisal Abas', 'Hasyim Makruf', 'Ismail Karim', 'Herni Tanango', 'Amelia Mandagi', 'Musafir Mongan');

-- --------------------------------------------------------

--
-- Table structure for table `sumber_berita`
--

CREATE TABLE `sumber_berita` (
  `id_sumber_berita` int(11) NOT NULL,
  `nama_sumber_berita` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sumber_berita`
--

INSERT INTO `sumber_berita` (`id_sumber_berita`, `nama_sumber_berita`) VALUES
(1, 'SULTRA'),
(2, 'SULUT');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `status_user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `user`, `status_user`, `pass`, `level`) VALUES
(1, 'Abid Muhaimin', 'abid001', 'Aktif', 'e84602f509fb2d5dab86272e7b7f3df7', 1),
(2, 'Amir ', 'amir01', 'Aktif', 'e84602f509fb2d5dab86272e7b7f3df7', 2),
(8, 'Administrator', 'admin', 'Aktif', '21232f297a57a5a743894a0e4a801fc3', 0),
(10, 'Azwar', 'azwarrmdhn', 'Aktif', 'e84602f509fb2d5dab86272e7b7f3df7', 2),
(11, 'Andi Nurholis', 'xore', 'Aktif', 'e84602f509fb2d5dab86272e7b7f3df7', 2),
(12, 'Wahyu Usman', 'wayosu', 'Aktif', 'e84602f509fb2d5dab86272e7b7f3df7', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_naskah`
--
ALTER TABLE `detail_naskah`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `naskah`
--
ALTER TABLE `naskah`
  ADD PRIMARY KEY (`id_naskah`);

--
-- Indexes for table `naskah_default`
--
ALTER TABLE `naskah_default`
  ADD PRIMARY KEY (`id_naskahdefault`);

--
-- Indexes for table `program_cu`
--
ALTER TABLE `program_cu`
  ADD PRIMARY KEY (`id_program_cu`);

--
-- Indexes for table `setting_tim_redaksi`
--
ALTER TABLE `setting_tim_redaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sumber_berita`
--
ALTER TABLE `sumber_berita`
  ADD PRIMARY KEY (`id_sumber_berita`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_naskah`
--
ALTER TABLE `detail_naskah`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `naskah`
--
ALTER TABLE `naskah`
  MODIFY `id_naskah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `naskah_default`
--
ALTER TABLE `naskah_default`
  MODIFY `id_naskahdefault` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `program_cu`
--
ALTER TABLE `program_cu`
  MODIFY `id_program_cu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `setting_tim_redaksi`
--
ALTER TABLE `setting_tim_redaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sumber_berita`
--
ALTER TABLE `sumber_berita`
  MODIFY `id_sumber_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
