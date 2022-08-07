-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2022 at 03:00 PM
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
-- Table structure for table `data_pimpinan`
--

CREATE TABLE `data_pimpinan` (
  `id_pimpinan` int(11) NOT NULL,
  `nama_jabatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `detail_naskah`
--

CREATE TABLE `detail_naskah` (
  `id_detail` int(11) NOT NULL,
  `id_naskah` int(11) NOT NULL,
  `urutan` varchar(3) NOT NULL,
  `su` longtext NOT NULL,
  `naskah_su` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_naskah`
--

INSERT INTO `detail_naskah` (`id_detail`, `id_naskah`, `urutan`, `su`, `naskah_su`) VALUES
(17, 7, '1', 'SIAPA SO', ' narasii dua sulampa narasii dua sulampa narasii dua sulampa narasii dua sulampa narasii dua sulampanarasii dua sulampa narasii dua sulampa narasii dua sulampa narasii dua sulampanarasii dua sulampanarasii dua sulampanarasii dua sulampanarasii dua sulampanarasii dua sulampaVVVnarasii dua sulampanarasii dua sulampanarasii dua sulampa'),
(23, 5, '2', ' Fatimah asri mutmainnah - Komisioner komisi nasional disabilitas republik indonesia', 'Tak hanya itu/ Untuk memastikan Implementasi peraturan daerah (perda) dapat konfrehensif dan akomodatif bagi penyandang disabilitas/ pihaknya akan melakukan kolaborasi dengan berbagai pihak/  baik dari knd/ maupun pemerintah daerah/ terkait percepatan penanganan terhadap pemenuhan hak penyandang disabilitas// \r\n\r\n\r\nTeti Novianti/ Ipong Stive/ TVRI Gorontalo'),
(24, 5, '1', ' Doktor insinyur haji yosef p. Koton - staf ahli gubernur bidang kemasyarakatan dan sdm provinsi gorontalo', 'Sementara itu/ Komisioner komisi nasional disabilitas republik indonesia/ Fatimah asri mutmainnah/ mengungkap provinsi gorontalo  merupakan wilayah pertama di sulawesi yang \r\nmemiliki indeks pembangunan manusia yang masih rendah//\r\n\r\nOlehnya hal tersebut menjadi perhatian dan evaluasi bagi komisi nasional disabilitas/ bagaimana pihaknya mengikuti pengarusutamaan disabilitas yang sedang massif digencarkan oleh pemerintah/sehinga pemenuhan hak disabilitas bisa tercapai// '),
(25, 6, '2', ' Fatimah asri mutmainnah - Komisioner komisi nasional disabilitas republik indonesia', 'Tak hanya itu/ Untuk memastikan Implementasi peraturan daerah (perda) dapat konfrehensif dan akomodatif bagi penyandang disabilitas/ pihaknya akan melakukan kolaborasi dengan berbagai pihak/  baik dari knd/ maupun pemerintah daerah/ terkait percepatan penanganan terhadap pemenuhan hak penyandang disabilitas// \r\n\r\n\r\nTeti Novianti/ Ipong Stive/ TVRI Gorontalo'),
(26, 6, '1', ' Doktor insinyur haji yosef p. Koton - staf ahli gubernur bidang kemasyarakatan dan sdm provinsi gorontalo', 'Sementara itu/ Komisioner komisi nasional disabilitas republik indonesia/ Fatimah asri mutmainnah/ mengungkap provinsi gorontalo  merupakan wilayah pertama di sulawesi yang \r\nmemiliki indeks pembangunan manusia yang masih rendah//\r\n\r\nOlehnya hal tersebut menjadi perhatian dan evaluasi bagi komisi nasional disabilitas/ bagaimana pihaknya mengikuti pengarusutamaan disabilitas yang sedang massif digencarkan oleh pemerintah/sehinga pemenuhan hak disabilitas bisa tercapai// '),
(28, 10, '1', 'LUCAS - CEO MAJALAH FORBES', 'LAKASITU / SALIMAN // TVRI SULAWESI UTARA'),
(36, 11, '1', 'ALIKUSU - PENGOLAH  NASI KUNING', 'ABID HARUN TVRI GORONTALO'),
(37, 9, '1', 'SITOMPUL - ASN TERBAIK SEPANJANG MASA', 'ABID HARUN / AMIR PANEO // TVRI GORONTALO'),
(48, 3, '2', ' Fatimah asri mutmainnah - Komisioner komisi nasional disabilitas republik indonesia', 'Tak hanya itu/ Untuk memastikan Implementasi peraturan daerah (perda) dapat konfrehensif dan akomodatif bagi penyandang disabilitas/ pihaknya akan melakukan kolaborasi dengan berbagai pihak/  baik dari knd/ maupun pemerintah daerah/ terkait percepatan penanganan terhadap pemenuhan hak penyandang disabilitas// \r\n\r\n\r\nTeti Novianti/ Ipong Stive/ TVRI Gorontalo'),
(49, 3, '1', ' Doktor insinyur haji yosef p. Koton - staf ahli gubernur bidang kemasyarakatan dan sdm provinsi gorontalo', 'Sementara itu/ Komisioner komisi nasional disabilitas republik indonesia/ Fatimah asri mutmainnah/ mengungkap provinsi gorontalo  merupakan wilayah pertama di sulawesi yang \r\nmemiliki indeks pembangunan manusia yang masih rendah//\r\n\r\nOlehnya hal tersebut menjadi perhatian dan evaluasi bagi komisi nasional disabilitas/ bagaimana pihaknya mengikuti pengarusutamaan disabilitas yang sedang massif digencarkan oleh pemerintah/sehinga pemenuhan hak disabilitas bisa tercapai// '),
(50, 2, '1', 'biasa', 'Untuk memastikan potensi penambahan kursi tersebut terwujud/ maka pihak kpu kota gorontalo berencana akan menggelar rapat kerja  bersama dengan dprd kota terkait mekanisme penambahan sesuai regulasi yang ada//  Namun/ Meksi ada perubahan jumlah penduduk/ pihaknya memastikan tidak akan berdampak pada perubahan jumlah daerah pemilihan (dapil)/ yakni 4 dapil di kota gorontalo// \r\n\r\n\r\n\r\nTeti Novianti/ Wahyu Thalib/ TVRI Gorontalo//'),
(51, 4, '2', ' Fatimah asri mutmainnah - Komisioner komisi nasional disabilitas republik indonesia', 'Tak hanya itu/ Untuk memastikan Implementasi peraturan daerah (perda) dapat konfrehensif dan akomodatif bagi penyandang disabilitas/ pihaknya akan melakukan kolaborasi dengan berbagai pihak/  baik dari knd/ maupun pemerintah daerah/ terkait percepatan penanganan terhadap pemenuhan hak penyandang disabilitas// \r\n\r\n\r\nTeti Novianti/ Ipong Stive/ TVRI Gorontalo'),
(52, 4, '1', ' Doktor insinyur haji yosef p. Koton - staf ahli gubernur bidang kemasyarakatan dan sdm provinsi gorontalo', 'Sementara itu/ Komisioner komisi nasional disabilitas republik indonesia/ Fatimah asri mutmainnah/ mengungkap provinsi gorontalo  merupakan wilayah pertama di sulawesi yang \r\nmemiliki indeks pembangunan manusia yang masih rendah//\r\n\r\nOlehnya hal tersebut menjadi perhatian dan evaluasi bagi komisi nasional disabilitas/ bagaimana pihaknya mengikuti pengarusutamaan disabilitas yang sedang massif digencarkan oleh pemerintah/sehinga pemenuhan hak disabilitas bisa tercapai// '),
(53, 14, '1', 'ALIKUSU - PENGOLAH  NASI KUNING', 'ABID HARUN TVRI GORONTALO'),
(54, 13, '1', 'SITOMPUL - ASN TERBAIK SEPANJANG MASA', 'ABID HARUN / AMIR PANEO // TVRI GORONTALO'),
(55, 12, '1', 'SITOMPUL - ASN TERBAIK SEPANJANG MASA', 'ABID HARUN / AMIR PANEO // TVRI GORONTALO');

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
(8, 'Keagamaan'),
(9, 'Pemerintahan');

-- --------------------------------------------------------

--
-- Table structure for table `naskah`
--

CREATE TABLE `naskah` (
  `id_naskah` int(11) NOT NULL,
  `judul` longtext NOT NULL,
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
  `nomorhp_narsum` varchar(20) NOT NULL,
  `durasi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `naskah`
--

INSERT INTO `naskah` (`id_naskah`, `judul`, `lokasi`, `kameramen`, `tgl_berita`, `id_kategori`, `bobot`, `lead`, `naskah`, `jenis`, `sts_periksa`, `sts_edit`, `id_user`, `narasumber`, `ket_narsum`, `nomorhp_narsum`, `durasi`) VALUES
(2, 'Alokasi kursi dprd kota gorontalo berpotensi akan ', 'kota gorontalo', '10', '2022-08-01', '5', 3, 'Komisi pemilihan umum (KPU) kota gorontalo/ memprediksi penambahan kuota kursi dewan perwakilan rakyat daerah (DPRD) kota gorontalo/ jelang pemilu 2024// potensi penambahan kursi dilakukan/ mengingat jumlah penduduk di kota gorontalo pada priode 2021/ sudah melebihi jumlah yang telah ditetapkan yakni 201 ribu jiwa// ', 'Alokasi kursi dewan perwakilan rakyat daerah (DPRD) kota gorontalo berpotensi akan bertambah pada pemilu 2024 mendatang menjadi 30 kursi// hal ini dipengaruhi lantaran adanya penambahan jumlah penduduk di kota gorontalo pada priode 2021 yang sudah menembus angka 201 ribu jiwa//\r\n\r\nKetua komisi pemilihan umum (kpu) kota gorontalo/ sukrin saleh taib Membeberkan/ rumus penambahan kursi ini ditentukan dari jumlah penduduk// dimana penduduk dengan jumlah 100 ribu jiwa mendapatkan kuota 20 kursi/ sementara jumlah 200 ribu jiwa dialokasikan menjadi 25 kursi/ dan jika lebih dari jumlah tersebut/ atau sekitar 300 kursi maka bertambah menjadi 30 kursi// \r\n\r\nSementara saat ini menurutnya/ jumlah penduduk kota gorontalo yang terdata di dinas kependudukan dan catatan sipil (disdukcapil) kota gorontalo/ sudah lebih dari 200 ribu jiwa// dimana Merujuk pada pasal 188 ayat 2 UU nomor 7 tahun 2017/ tentang Pemilu/ kota dengan jumlah penduduk lebih dari 200 ribu jiwa memperoleh alokasi 30 kursi di DPRD kota// ', 'ghi', 1, 1, 1, '', '', '', ':01:00'),
(3, 'pemprov gorontalo mendukung peran komisi nasional ', 'kota gorontalo', '2', '2022-08-01', '5', 4, 'Pemerintah Provinsi (Pemprov) Gorontalo/ mendukung peran Komisi Nasional Disabilitas (KND) Republik Indonesia (RI)/ untuk memberikan Perlindungan dan Pemenuhan Hak  Penyandang Disabilitas di gorontalo//  pihak pemerintah pun/ meminta agar regulasi tentang pemenuhan hak disabilitas ini/ segera direalisasikan//', 'Dalam rangka melaksanakan tugas pemantauan dan melihat praktik baik atas pelaksanaan/ dan pemenuhan hak penyandang disabilitas di gorontalo/ komisi nasional disabilitas (KND)/ menggelar seserahan pemenuhan hak penyandang disabilitas/ dan sosialisasi tugas dan fungsi KND/ di aula kantor gubernur gorontalo/ Rabu siang//\r\n\r\nKegiatan yang dihadiri sejumlah stakeholder/ baik dari pemerintah gorontalo/ maupun  organisasi perangkat daerah ini/ mendapat dukungan dan apresiasi dari pemerintah provinsi gorontalo// \r\n\r\nstaf ahli gubernur bidang kemasyarakatan dan sdm provinsi gorontalo/ Doktor insinyur haji yosef p. Koton/ mengungkap/ kehadiran komisi nasional disabilitas KND/ sangat dibutuhkan untuk mengakomodir aduan dari organisasi terkait permasalahan penyandang disabilitas// baik dari dalam individu/ maupun sebagai wadah untuk berkontribusi menyalurkan bakat dan minat mereka// \r\n\r\nDiketahui/ provinsi gorontalo sendiri/ memiliki 7 ribu penyandang disabilitas/ yang menurutnya harus mendapatkan perhatian dan perlindungan hak// sebab pada dasarnya hak dan kewajiban para penyandang disabilitas ini/ sama dengan warga negara indonesia pada umumnya// ', 'ghi', 1, 1, 1, '', '', '', '01:00:00'),
(4, 'BARU pemprov gorontalo mendukung peran komisi nasi', 'kota gorontalo', '2', '2022-08-01', '5', 4, 'Pemerintah Provinsi (Pemprov) Gorontalo/ mendukung peran Komisi Nasional Disabilitas (KND) Republik Indonesia (RI)/ untuk memberikan Perlindungan dan Pemenuhan Hak  Penyandang Disabilitas di gorontalo//  pihak pemerintah pun/ meminta agar regulasi tentang pemenuhan hak disabilitas ini/ segera direalisasikan//', 'Dalam rangka melaksanakan tugas pemantauan dan melihat praktik baik atas pelaksanaan/ dan pemenuhan hak penyandang disabilitas di gorontalo/ komisi nasional disabilitas (KND)/ menggelar seserahan pemenuhan hak penyandang disabilitas/ dan sosialisasi tugas dan fungsi KND/ di aula kantor gubernur gorontalo/ Rabu siang//\r\n\r\nKegiatan yang dihadiri sejumlah stakeholder/ baik dari pemerintah gorontalo/ maupun  organisasi perangkat daerah ini/ mendapat dukungan dan apresiasi dari pemerintah provinsi gorontalo// \r\n\r\nstaf ahli gubernur bidang kemasyarakatan dan sdm provinsi gorontalo/ Doktor insinyur haji yosef p. Koton/ mengungkap/ kehadiran komisi nasional disabilitas KND/ sangat dibutuhkan untuk mengakomodir aduan dari organisasi terkait permasalahan penyandang disabilitas// baik dari dalam individu/ maupun sebagai wadah untuk berkontribusi menyalurkan bakat dan minat mereka// \r\n\r\nDiketahui/ provinsi gorontalo sendiri/ memiliki 7 ribu penyandang disabilitas/ yang menurutnya harus mendapatkan perhatian dan perlindungan hak// sebab pada dasarnya hak dan kewajiban para penyandang disabilitas ini/ sama dengan warga negara indonesia pada umumnya// ', 'ghi', 1, 1, 1, '', '', '', '02:30:30'),
(5, 'GNS pemprov gorontalo mendukung peran komisi nasi', 'GNS kota gorontalo', '2', '2022-07-04', '5', 4, 'Pemerintah Provinsi (Pemprov) Gorontalo/ mendukung peran Komisi Nasional Disabilitas (KND) Republik Indonesia (RI)/ untuk memberikan Perlindungan dan Pemenuhan Hak  Penyandang Disabilitas di gorontalo//  pihak pemerintah pun/ meminta agar regulasi tentang pemenuhan hak disabilitas ini/ segera direalisasikan//', 'Dalam rangka melaksanakan tugas pemantauan dan melihat praktik baik atas pelaksanaan/ dan pemenuhan hak penyandang disabilitas di gorontalo/ komisi nasional disabilitas (KND)/ menggelar seserahan pemenuhan hak penyandang disabilitas/ dan sosialisasi tugas dan fungsi KND/ di aula kantor gubernur gorontalo/ Rabu siang//\r\n\r\nKegiatan yang dihadiri sejumlah stakeholder/ baik dari pemerintah gorontalo/ maupun  organisasi perangkat daerah ini/ mendapat dukungan dan apresiasi dari pemerintah provinsi gorontalo// \r\n\r\nstaf ahli gubernur bidang kemasyarakatan dan sdm provinsi gorontalo/ Doktor insinyur haji yosef p. Koton/ mengungkap/ kehadiran komisi nasional disabilitas KND/ sangat dibutuhkan untuk mengakomodir aduan dari organisasi terkait permasalahan penyandang disabilitas// baik dari dalam individu/ maupun sebagai wadah untuk berkontribusi menyalurkan bakat dan minat mereka// \r\n\r\nDiketahui/ provinsi gorontalo sendiri/ memiliki 7 ribu penyandang disabilitas/ yang menurutnya harus mendapatkan perhatian dan perlindungan hak// sebab pada dasarnya hak dan kewajiban para penyandang disabilitas ini/ sama dengan warga negara indonesia pada umumnya// ', 'gns', 1, 1, 1, '', '', '', ':09:09'),
(6, 'HABARI pemprov gorontalo mendukung peran komisi nasional ', 'HABARI kota gorontalo', '2', '2022-07-03', '5', 4, 'Pemerintah Provinsi (Pemprov) Gorontalo/ mendukung peran Komisi Nasional Disabilitas (KND) Republik Indonesia (RI)/ untuk memberikan Perlindungan dan Pemenuhan Hak  Penyandang Disabilitas di gorontalo//  pihak pemerintah pun/ meminta agar regulasi tentang pemenuhan hak disabilitas ini/ segera direalisasikan//', 'Dalam rangka melaksanakan tugas pemantauan dan melihat praktik baik atas pelaksanaan/ dan pemenuhan hak penyandang disabilitas di gorontalo/ komisi nasional disabilitas (KND)/ menggelar seserahan pemenuhan hak penyandang disabilitas/ dan sosialisasi tugas dan fungsi KND/ di aula kantor gubernur gorontalo/ Rabu siang//\r\n\r\nKegiatan yang dihadiri sejumlah stakeholder/ baik dari pemerintah gorontalo/ maupun  organisasi perangkat daerah ini/ mendapat dukungan dan apresiasi dari pemerintah provinsi gorontalo// \r\n\r\nstaf ahli gubernur bidang kemasyarakatan dan sdm provinsi gorontalo/ Doktor insinyur haji yosef p. Koton/ mengungkap/ kehadiran komisi nasional disabilitas KND/ sangat dibutuhkan untuk mengakomodir aduan dari organisasi terkait permasalahan penyandang disabilitas// baik dari dalam individu/ maupun sebagai wadah untuk berkontribusi menyalurkan bakat dan minat mereka// \r\n\r\nDiketahui/ provinsi gorontalo sendiri/ memiliki 7 ribu penyandang disabilitas/ yang menurutnya harus mendapatkan perhatian dan perlindungan hak// sebab pada dasarnya hak dan kewajiban para penyandang disabilitas ini/ sama dengan warga negara indonesia pada umumnya// ', 'habari', 1, 1, 1, '', '', '', '02:09:09'),
(7, 'INI SULAMPA KASE PANJANGGG', 'SULAMPA', 'amir - rasam', '2022-07-04', '1', 0, 'lead dari berita SULAMPA lead dari berita SULAMPA lead dari berita SULAMPA lead dari berita SULAMPA lead dari berita SULAMPA lead dari berita SULAMPA lead dari berita SULAMPAlead dari berita SULAMPAlead dari berita SULAMPAlead dari berita SULAMPAlead dari berita SULAMPA', 'ini narasi dari berita SULAMPA ya ges yak ini narasi dari berita SULAMPA ya ges yak ini narasi dari berita SULAMPA ya ges yak ini narasi dari berita SULAMPA ya ges yakini narasi dari berita SULAMPA ya ges yak ini narasi dari berita SULAMPA ya ges yak ini narasi dari berita SULAMPA ya ges yak ini narasi dari berita SULAMPA ya ges yak ini narasi dari berita SULAMPA ya ges yak ini narasi dari berita SULAMPA ya ges yak ini narasi dari berita SULAMPA ya ges yakini narasi dari berita SULAMPA ya ges yak ini narasi dari berita SULAMPA ya ges yakini narasi dari berita SULAMPA ya ges yak ini narasi dari berita SULAMPA ya ges yak', 'sulampa', 0, 1, 12, '', '', '', '::'),
(8, 'PENCURIAN MOTOR DIAMUK WARGA OKNUM POLISI IKUT DALAM BAKU HANTAMz', '', '', '2022-07-04', '7', 4, 'PEMIRSA / PENCURIAN MOTOR DI DESA PILOHAYANGA ADALAH HAL YANG BARU BAGI SEBAGIAN ORANG DI DESA TERSEBUT // HAL INI MEMBUAT TIM REDAKSI TVRI GORONTALO MENCARI PELAKU TERSEBUT // DIDAPATI DARI REKAMAN VIDEO AMATIR ADA OKNUM POLISI DAN TENTARA YANG TERLIBAT DALAM AKSI BAKU HANTAM // KALI INI SAYA SUDAH TERHUBUNG DENGAN KADIS KEAMANAN DAN KESELAMATAN WARGA PILOHAYANGA SETEMPAT MELALUI SAMBUNGAN ZOOM //\r\n\r\nSELAMAT PAGI BUNG RIVALDI // \r\n\r\n1. BISA JELASKAN KEJADIAN KEMARIN PAK RIVAL ? \r\n2. APA YANG MEMBUAT ANDA MENJADI SEPERTI ITU PAK RIVAL ?\r\n3. SUNGGUH TEGANYA ANDA SEBAGAI KADIS MEMBIARKAN HAL ITU !\r\n4. KEMBANGKAN PERTANYAANNYA\r\n', '', 'dialog', 1, 1, 12, 'RIVALDI MUSA', 'KASAT ESKRIM', '0808080808', '08:08:08'),
(9, 'MENCOBA TIADA SALAHNYAs', 'BONE BOLANGO', '2', '2022-07-31', '7', 1, 'KITA SEBAGAI MANUSIA SERING SEKALI BERBUAT KESALAHAN KADANG KITA SALAH // TAPI TIDAK ADA SALAHNYA KITA TERUS MENCOBA / AGAR MENDAPAT PENGALAMAN YANG BAIK // SITOMPUL ADALAH SALAH SEORANG YANG GAGAL DALAM BERJUANG DI CPNS / TAPI DIA TIDAK PATAH SEMANGAT DALAM BERJUANG // KINI SITOMPUL MENJADI ASN TERBAIK SEPANJANG MASA // BERIKUT CUPLIKANNYA', 'SITOMPUL ADALAH ANAK YANG BAIK DAN RAJIN DAN TIDAK PERNAH LUPA DALAM BERIBADAH', 'ghi', 1, 1, 1, '', '', '', '::6'),
(10, 'BUNAKEN MENJADI TEMPAT TERINDAH DI DUNIA', 'SULAMPA', 'LAKASITU - SALIMAN', '2022-07-03', '3', 0, 'MAJALAH FORBES BARU BARU INI MENERBITKAN 10 TEMPAT WISATA YANG LAYAK DAN TERBAIK UNTUK DIKUNJUNGI / TAK DISANGKA / BUNAKEN MENJADI SALAH SATUNYA //', 'INI LAH DETIK DETIK PENGUMUMAN PEMENANG TEMPAT WISATA TERBAIK SEDUNIA', 'sulampa', 1, 1, 1, '', '', '', '09:09:09'),
(11, 'MAKAN NASI KUNING DENGAN MERAH', 'KOTA GORONTALO', '1', '2022-07-31', '5', 1, 'INI LEAD DARI JUDUL MKAAN NASI KUNING INI LEAD DARI JUDUL MKAAN NASI KUNING INI LEAD DARI JUDUL MKAAN NASI KUNING INI LEAD DARI JUDUL MKAAN NASI KUNING INI LEAD DARI JUDUL MKAAN NASI KUNING INI LEAD DARI JUDUL MKAAN NASI KUNING INI LEAD DARI JUDUL MKAAN NASI KUNING INI LEAD DARI JUDUL MKAAN NASI KUNING INI LEAD DARI JUDUL MKAAN NASI KUNING MERAH', 'IINI NARASI DARI JUDUL MAKAN NASI KUNING INI LEAD DARI JUDUL MKAAN NASI KUNING INI LEAD DARI JUDUL MKAAN NASI KUNING INI LEAD DARI JUDUL MKAAN NASI KUNING INI LEAD DARI JUDUL MKAAN NASI KUNING INI LEAD DARI JUDUL MKAAN NASI KUNING MERAHH', 'ghi', 1, 1, 1, '', '', '', '00:02:23'),
(12, 'MENCOBA TIADA SALAHNYAs', 'BONE BOLANGO', '2', '2022-07-31', '7', 1, 'KITA SEBAGAI MANUSIA SERING SEKALI BERBUAT KESALAHAN KADANG KITA SALAH // TAPI TIDAK ADA SALAHNYA KITA TERUS MENCOBA / AGAR MENDAPAT PENGALAMAN YANG BAIK // SITOMPUL ADALAH SALAH SEORANG YANG GAGAL DALAM BERJUANG DI CPNS / TAPI DIA TIDAK PATAH SEMANGAT DALAM BERJUANG // KINI SITOMPUL MENJADI ASN TERBAIK SEPANJANG MASA // BERIKUT CUPLIKANNYA', 'SITOMPUL ADALAH ANAK YANG BAIK DAN RAJIN DAN TIDAK PERNAH LUPA DALAM BERIBADAH', 'ghi', 1, 1, 1, '', '', '', ':01:05'),
(13, 'MENCOBA TIADA SALAHNYAs', 'BONE BOLANGO', '2', '2022-08-01', '7', 1, 'KITA SEBAGAI MANUSIA SERING SEKALI BERBUAT KESALAHAN KADANG KITA SALAH // TAPI TIDAK ADA SALAHNYA KITA TERUS MENCOBA / AGAR MENDAPAT PENGALAMAN YANG BAIK // SITOMPUL ADALAH SALAH SEORANG YANG GAGAL DALAM BERJUANG DI CPNS / TAPI DIA TIDAK PATAH SEMANGAT DALAM BERJUANG // KINI SITOMPUL MENJADI ASN TERBAIK SEPANJANG MASA // BERIKUT CUPLIKANNYA', 'SITOMPUL ADALAH ANAK YANG BAIK DAN RAJIN DAN TIDAK PERNAH LUPA DALAM BERIBADAH', 'ghi', 1, 1, 1, '', '', '', ':01:05'),
(14, 'MAKAN NASI KUNING DENGAN MERAH', 'KOTA GORONTALO', '1', '2022-08-01', '5', 1, 'INI LEAD DARI JUDUL MKAAN NASI KUNING INI LEAD DARI JUDUL MKAAN NASI KUNING INI LEAD DARI JUDUL MKAAN NASI KUNING INI LEAD DARI JUDUL MKAAN NASI KUNING INI LEAD DARI JUDUL MKAAN NASI KUNING INI LEAD DARI JUDUL MKAAN NASI KUNING INI LEAD DARI JUDUL MKAAN NASI KUNING INI LEAD DARI JUDUL MKAAN NASI KUNING INI LEAD DARI JUDUL MKAAN NASI KUNING MERAH', 'IINI NARASI DARI JUDUL MAKAN NASI KUNING INI LEAD DARI JUDUL MKAAN NASI KUNING INI LEAD DARI JUDUL MKAAN NASI KUNING INI LEAD DARI JUDUL MKAAN NASI KUNING INI LEAD DARI JUDUL MKAAN NASI KUNING INI LEAD DARI JUDUL MKAAN NASI KUNING MERAHH', 'ghi', 1, 1, 1, '', '', '', ':01:00');

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
(5, 'Bridging Ramadhan', '<p>Selamat berbuka ramdahan. marhaban tiba ya ramadhan'),
(8, 'coba', '<p>HALO</p>');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `program_paket` int(11) NOT NULL,
  `judul_paket` varchar(100) NOT NULL,
  `pengarah_acara` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `tgl_tayang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `program_paket`, `judul_paket`, `pengarah_acara`, `status`, `tgl_tayang`) VALUES
(1, 1, 'MERAJUT ASA DI UTARA GORONTALO', 1, 3, '2022-07-29'),
(2, 4, 'VETERAN BUKAN CUMAN TENTARA', 2, 2, '2022-08-17'),
(3, 1, 'KESEHATAN SAMPAI MATI', 12, 3, '2022-07-22'),
(4, 6, 'SOSOK PEJUANG KOKA', 11, 1, '2022-09-10');

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
(6, 'Tatoonu'),
(8, 'Jejak Non Islam');

-- --------------------------------------------------------

--
-- Table structure for table `sumber_berita`
--

CREATE TABLE `sumber_berita` (
  `id_sumber_berita` int(11) NOT NULL,
  `nama_sumber_berita` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sumber_berita`
--

INSERT INTO `sumber_berita` (`id_sumber_berita`, `nama_sumber_berita`) VALUES
(1, 'TVRI SULTRA'),
(2, 'TVRI SULUT'),
(3, 'TVRI SULTENG'),
(4, 'TVRI MALUKU');

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
(12, 'Wahyu Usman', 'wayosu', 'Aktif', 'e84602f509fb2d5dab86272e7b7f3df7', 1),
(13, 'Ilham', 'lambutz', 'Aktif', 'e84602f509fb2d5dab86272e7b7f3df7', 4),
(14, 'Ahlan', 'ahlan01', 'Aktif', 'e84602f509fb2d5dab86272e7b7f3df7', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pimpinan`
--
ALTER TABLE `data_pimpinan`
  ADD PRIMARY KEY (`id_pimpinan`);

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
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `program_cu`
--
ALTER TABLE `program_cu`
  ADD PRIMARY KEY (`id_program_cu`);

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
-- AUTO_INCREMENT for table `data_pimpinan`
--
ALTER TABLE `data_pimpinan`
  MODIFY `id_pimpinan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_naskah`
--
ALTER TABLE `detail_naskah`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `naskah`
--
ALTER TABLE `naskah`
  MODIFY `id_naskah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `naskah_default`
--
ALTER TABLE `naskah_default`
  MODIFY `id_naskahdefault` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `program_cu`
--
ALTER TABLE `program_cu`
  MODIFY `id_program_cu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sumber_berita`
--
ALTER TABLE `sumber_berita`
  MODIFY `id_sumber_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
