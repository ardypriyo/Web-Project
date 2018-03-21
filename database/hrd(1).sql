-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2018 at 05:08 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrd`
--

-- --------------------------------------------------------

--
-- Table structure for table `hrd_config_absensi`
--

CREATE TABLE `hrd_config_absensi` (
  `id` int(4) NOT NULL,
  `kode_absen` varchar(5) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `tipe` varchar(1) NOT NULL,
  `background` varchar(150) NOT NULL,
  `status` varchar(1) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` varchar(70) NOT NULL,
  `last_update` datetime NOT NULL,
  `update_by` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hrd_config_absensi`
--

INSERT INTO `hrd_config_absensi` (`id`, `kode_absen`, `keterangan`, `tipe`, `background`, `status`, `created_date`, `created_by`, `last_update`, `update_by`) VALUES
(1, 'C', 'Cuti', '1', '', '1', '2018-03-19 13:44:19', '1', '0000-00-00 00:00:00', ''),
(2, 'HR', 'Hari Raya', '1', '', '1', '2018-03-19 13:45:20', '1', '0000-00-00 00:00:00', ''),
(3, 'A', 'Alpha', '0', '', '1', '2018-03-19 13:45:30', '1', '2018-03-19 14:14:28', '1'),
(4, 'S', 'Sakit', '1', '', '1', '2018-03-19 13:45:43', '1', '0000-00-00 00:00:00', ''),
(5, 'I', 'Izin', '0', '', '1', '2018-03-19 13:45:57', '1', '0000-00-00 00:00:00', ''),
(6, 'PL', 'Pengganti Lembur', '1', '', '1', '2018-03-19 13:46:11', '1', '0000-00-00 00:00:00', ''),
(7, 'STD', 'Sakit Tanpa Surat Dokter', '0', '', '1', '2018-03-19 13:46:29', '1', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `hrd_config_email`
--

CREATE TABLE `hrd_config_email` (
  `nama_pengirim` varchar(70) NOT NULL,
  `smtp_host` varchar(100) NOT NULL,
  `smtp_user` varchar(70) NOT NULL,
  `smtp_password` varchar(50) NOT NULL,
  `smtp_port` varchar(6) NOT NULL,
  `keamanan` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hrd_config_email`
--

INSERT INTO `hrd_config_email` (`nama_pengirim`, `smtp_host`, `smtp_user`, `smtp_password`, `smtp_port`, `keamanan`) VALUES
('Administrator', 'mail.google.com', 'priyo.ardy@gmail.com', 'YXJkeTkwMDQ=', '465', 'ssl');

-- --------------------------------------------------------

--
-- Table structure for table `hrd_config_jenis_libur`
--

CREATE TABLE `hrd_config_jenis_libur` (
  `id_jenis_libur` int(10) NOT NULL,
  `nama_jenis_libur` varchar(255) NOT NULL,
  `status` varchar(1) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` varchar(70) NOT NULL,
  `last_update` datetime NOT NULL,
  `updated_by` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hrd_config_jenis_libur`
--

INSERT INTO `hrd_config_jenis_libur` (`id_jenis_libur`, `nama_jenis_libur`, `status`, `created_date`, `created_by`, `last_update`, `updated_by`) VALUES
(1, 'Weekend', '1', '2018-03-15 00:00:00', 'admin', '0000-00-00 00:00:00', ''),
(2, 'Libur Nasional', '1', '2018-03-15 00:00:00', 'admin', '0000-00-00 00:00:00', ''),
(3, 'Libur Hari Raya', '1', '2018-03-15 00:00:00', 'admin', '0000-00-00 00:00:00', ''),
(4, 'Cuti Bersama', '1', '2018-03-15 00:00:00', 'admin', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `hrd_config_libur`
--

CREATE TABLE `hrd_config_libur` (
  `id_libur` int(10) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `keterangan` text NOT NULL,
  `jenis_libur` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` varchar(70) NOT NULL,
  `last_update` datetime NOT NULL,
  `update_by` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hrd_config_libur`
--

INSERT INTO `hrd_config_libur` (`id_libur`, `tahun`, `keterangan`, `jenis_libur`, `tanggal`, `created_date`, `created_by`, `last_update`, `update_by`) VALUES
(23, '2018', 'Tahun Baru Masehi 2018', '2', '2018-01-01', '2018-03-15 09:51:10', '1', '2018-03-15 11:11:45', '1');

-- --------------------------------------------------------

--
-- Table structure for table `hrd_config_periode_absen`
--

CREATE TABLE `hrd_config_periode_absen` (
  `id` int(9) NOT NULL,
  `keterangan` varchar(70) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `status` varchar(1) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` varchar(70) NOT NULL,
  `last_update` datetime NOT NULL,
  `update_by` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hrd_config_periode_absen`
--

INSERT INTO `hrd_config_periode_absen` (`id`, `keterangan`, `tgl_mulai`, `tgl_selesai`, `status`, `created_date`, `created_by`, `last_update`, `update_by`) VALUES
(4, 'Januari 2018', '2018-01-01', '2018-01-31', '1', '2018-03-15 10:19:50', '1', '0000-00-00 00:00:00', ''),
(5, 'Februari 2018', '2018-02-01', '2018-02-28', '1', '2018-03-15 10:20:48', '1', '0000-00-00 00:00:00', ''),
(6, 'Maret 2018', '2018-03-01', '2018-03-31', '1', '2018-03-15 10:21:01', '1', '2018-03-15 10:25:14', '1'),
(7, 'April 2018', '2018-04-01', '2018-04-30', '1', '2018-03-15 10:27:44', '1', '0000-00-00 00:00:00', ''),
(8, 'Mei 2018', '2018-05-01', '2018-05-31', '1', '2018-03-15 10:28:12', '1', '0000-00-00 00:00:00', ''),
(9, 'Juni 2018', '2018-06-01', '2018-06-30', '1', '2018-03-15 10:30:42', '1', '0000-00-00 00:00:00', ''),
(10, 'Juli 2018', '2018-07-01', '2018-07-31', '1', '2018-03-15 10:30:59', '1', '0000-00-00 00:00:00', ''),
(11, 'Agustus 2018', '2018-08-01', '2018-08-31', '1', '2018-03-15 10:31:16', '1', '2018-03-19 14:09:10', '1'),
(12, 'September 2018', '2018-09-01', '2018-09-30', '1', '2018-03-15 10:31:45', '1', '0000-00-00 00:00:00', ''),
(13, 'Oktober 2018', '2018-10-01', '2018-10-31', '1', '2018-03-15 10:32:04', '1', '0000-00-00 00:00:00', ''),
(14, 'Nopember 2018', '2018-11-01', '2018-11-30', '1', '2018-03-15 10:32:28', '1', '0000-00-00 00:00:00', ''),
(15, 'Desember 2018', '2018-12-01', '2018-12-31', '1', '2018-03-15 10:32:54', '1', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `hrd_config_shift`
--

CREATE TABLE `hrd_config_shift` (
  `id_shift` int(10) NOT NULL,
  `kode_shift` varchar(10) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `status` varchar(1) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` varchar(70) NOT NULL,
  `last_update` datetime NOT NULL,
  `update_by` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hrd_config_shift`
--

INSERT INTO `hrd_config_shift` (`id_shift`, `kode_shift`, `keterangan`, `jam_mulai`, `jam_selesai`, `status`, `created_date`, `created_by`, `last_update`, `update_by`) VALUES
(1, 'Office', 'Jam Kerja Office', '08:00:00', '17:00:00', '1', '2018-03-19 15:32:54', '1', '2018-03-19 15:53:26', '1');

-- --------------------------------------------------------

--
-- Table structure for table `hrd_master_kota`
--

CREATE TABLE `hrd_master_kota` (
  `id_kota` int(9) NOT NULL,
  `id_provinsi` varchar(5) NOT NULL,
  `nama_kota` varchar(50) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hrd_master_kota`
--

INSERT INTO `hrd_master_kota` (`id_kota`, `id_provinsi`, `nama_kota`, `status`) VALUES
(1, '1', 'Kabupaten Badung', '1'),
(2, '1', 'Kabupaten Bangli', '1'),
(3, '1', 'Kabupaten Buleleng', '1'),
(4, '1', 'Kabupaten Gianyar', '1'),
(5, '1', 'Kabupaten Jembrana', '1'),
(6, '1', 'Kabupaten Karangasem', '1'),
(7, '1', 'Kabupaten Klungkung', '1'),
(8, '1', 'Kabupaten Tabanan', '1'),
(9, '1', 'Kota Denpasar', '1'),
(10, '2', 'Kabupaten Bangka', '1'),
(11, '2', 'Kabupaten Bangka Barat', '1'),
(12, '2', 'Kabupaten Bangka Selatan', '1'),
(13, '2', 'Kabupaten Bangka Tengah', '1'),
(14, '2', 'Kabupaten Belitung', '1'),
(15, '2', 'Kabupaten Belitung Timur', '1'),
(16, '2', 'Kota Pangkal Pinang', '1'),
(17, '3', 'Kabupaten Lebak', '1'),
(18, '3', 'Kabupaten Pandeglang', '1'),
(19, '3', 'Kabupaten Serang', '1'),
(20, '3', 'Kabupaten Tangerang', '1'),
(21, '3', 'Kota Cilegon', '1'),
(22, '3', 'Kota Serang', '1'),
(23, '3', 'Kota Tangerang', '1'),
(24, '3', 'Kota Tangerang Selatan', '1'),
(25, '4', 'Kabupaten Bengkulu Selatan', '1'),
(26, '4', 'Kabupaten Bengkulu Tengah', '1'),
(27, '4', 'Kabupaten Bengkulu Utara', '1'),
(28, '4', 'Kabupaten Kaur', '1'),
(29, '4', 'Kabupaten Kepahiang', '1'),
(30, '4', 'Kabupaten Lebong', '1'),
(31, '4', 'Kabupaten Muko Muko', '1'),
(32, '4', 'Kabupaten Rejang Lebong', '1'),
(33, '4', 'Kabupaten Seluma', '1'),
(34, '4', 'Kota Bengkulu', '1'),
(35, '5', 'Kabupaten Bantul', '1'),
(36, '5', 'Kabupaten Gunung Kidul', '1'),
(37, '5', 'Kabupaten Kulon Progo', '1'),
(38, '5', 'Kabupaten Sleman', '1'),
(39, '5', 'Kota Yogyakarta', '1'),
(40, '6', 'Kabupaten Kepulauan Seribu', '1'),
(41, '6', 'Kota Jakarta Barat', '1'),
(42, '6', 'Kota Jakarta Pusat', '1'),
(43, '6', 'Kota Jakarta Selatan', '1'),
(44, '6', 'Kota Jakarta Timur', '1'),
(45, '6', 'Kota Jakarta Utara', '1'),
(46, '7', 'Kabupaten Boalemo', '1'),
(47, '7', 'Kabupaten Bone Bolango', '1'),
(48, '7', 'Kabupaten Gorontalo', '1'),
(49, '7', 'Kabupaten Gorontalo Utara', '1'),
(50, '7', 'Kabupaten Pohuwato', '1'),
(51, '7', 'Kota Gorontalo', '1'),
(52, '8', 'Kabupaten Batang Hari', '1'),
(53, '8', 'Kabupaten Bungo', '1'),
(54, '8', 'Kabupaten Kerinci', '1'),
(55, '8', 'Kabupaten Merangin', '1'),
(56, '8', 'Kabupaten Muaro Jambi', '1'),
(57, '8', 'Kabupaten Sarolangun', '1'),
(58, '8', 'Kabupaten Tanjung Jabung Barat', '1'),
(59, '8', 'Kabupaten Tanjung Jabung Timur', '1'),
(60, '8', 'Kabupaten Tebo', '1'),
(61, '8', 'Kota Jambi', '1'),
(62, '8', 'Kota Sungaipenuh', '1'),
(63, '9', 'Kabupaten Bandung', '1'),
(64, '9', 'Kabupaten Bandung Barat', '1'),
(65, '9', 'Kabupaten Bekasi', '1'),
(66, '9', 'Kabupaten Bogor', '1'),
(67, '9', 'Kabupaten Ciamis', '1'),
(68, '9', 'Kabupaten Cianjur', '1'),
(69, '9', 'Kabupaten Cirebon', '1'),
(70, '9', 'Kabupaten Garut', '1'),
(71, '9', 'Kabupaten Indramayu', '1'),
(72, '9', 'Kabupaten Karawang', '1'),
(73, '9', 'Kabupaten Kuningan', '1'),
(74, '9', 'Kabupaten Majalengka', '1'),
(75, '9', 'Kabupaten Pangandaran', '1'),
(76, '9', 'Kabupaten Purwakarta', '1'),
(77, '9', 'Kabupaten Subang', '1'),
(78, '9', 'Kabupaten Sukabumi', '1'),
(79, '9', 'Kabupaten Sumedang', '1'),
(80, '9', 'Kabupaten Tasikmalaya', '1'),
(81, '9', 'Kota Bandung', '1'),
(82, '9', 'Kota Banjar', '1'),
(83, '9', 'Kota Bekasi', '1'),
(84, '9', 'Kota Bogor', '1'),
(85, '9', 'Kota Cimahi', '1'),
(86, '9', 'Kota Cirebon', '1'),
(87, '9', 'Kota Depok', '1'),
(88, '9', 'Kota Sukabumi', '1'),
(89, '9', 'Kota Tasikmalaya', '1'),
(90, '10', 'Kabupaten Banjarnegara', '1'),
(91, '10', 'Kabupaten Banyumas', '1'),
(92, '10', 'Kabupaten Batang', '1'),
(93, '10', 'Kabupaten Blora', '1'),
(94, '10', 'Kabupaten Boyolali', '1'),
(95, '10', 'Kabupaten Brebes', '1'),
(96, '10', 'Kabupaten Cilacap', '1'),
(97, '10', 'Kabupaten Demak', '1'),
(98, '10', 'Kabupaten Grobogan', '1'),
(99, '10', 'Kabupaten Jepara', '1'),
(100, '10', 'Kabupaten Karanganyar', '1'),
(101, '10', 'Kabupaten Kebumen', '1'),
(102, '10', 'Kabupaten Kendal', '1'),
(103, '10', 'Kabupaten Klaten', '1'),
(104, '10', 'Kabupaten Kudus', '1'),
(105, '10', 'Kabupaten Magelang', '1'),
(106, '10', 'Kabupaten Pati', '1'),
(107, '10', 'Kabupaten Pekalongan', '1'),
(108, '10', 'Kabupaten Pemalang', '1'),
(109, '10', 'Kabupaten Purbalingga', '1'),
(110, '10', 'Kabupaten Purworejo', '1'),
(111, '10', 'Kabupaten Rembang', '1'),
(112, '10', 'Kabupaten Semarang', '1'),
(113, '10', 'Kabupaten Sragen', '1'),
(114, '10', 'Kabupaten Sukoharjo', '1'),
(115, '10', 'Kabupaten Tegal', '1'),
(116, '10', 'Kabupaten Temanggung', '1'),
(117, '10', 'Kabupaten Wonogiri', '1'),
(118, '10', 'Kabupaten Wonosobo', '1'),
(119, '10', 'Kota Magelang', '1'),
(120, '10', 'Kota Pekalongan', '1'),
(121, '10', 'Kota Salatiga', '1'),
(122, '10', 'Kota Semarang', '1'),
(123, '10', 'Kota Surakarta', '1'),
(124, '10', 'Kota Tegal', '1'),
(125, '11', 'Kabupaten Bangkalan', '1'),
(126, '11', 'Kabupaten Banyuwangi', '1'),
(127, '11', 'Kabupaten Blitar', '1'),
(128, '11', 'Kabupaten Bojonegoro', '1'),
(129, '11', 'Kabupaten Bondowoso', '1'),
(130, '11', 'Kabupaten Gresik', '1'),
(131, '11', 'Kabupaten Jember', '1'),
(132, '11', 'Kabupaten Jombang', '1'),
(133, '11', 'Kabupaten Kediri', '1'),
(134, '11', 'Kabupaten Lamongan', '1'),
(135, '11', 'Kabupaten Lumajang', '1'),
(136, '11', 'Kabupaten Madiun', '1'),
(137, '11', 'Kabupaten Magetan', '1'),
(138, '11', 'Kabupaten Malang', '1'),
(139, '11', 'Kabupaten Mojokerto', '1'),
(140, '11', 'Kabupaten Nganjuk', '1'),
(141, '11', 'Kabupaten Ngawi', '1'),
(142, '11', 'Kabupaten Pacitan', '1'),
(143, '11', 'Kabupaten Pamekasan', '1'),
(144, '11', 'Kabupaten Pasuruan', '1'),
(145, '11', 'Kabupaten Ponorogo', '1'),
(146, '11', 'Kabupaten Probolinggo', '1'),
(147, '11', 'Kabupaten Sampang', '1'),
(148, '11', 'Kabupaten Sidoarjo', '1'),
(149, '11', 'Kabupaten Situbondo', '1'),
(150, '11', 'Kabupaten Sumenep', '1'),
(151, '11', 'Kabupaten Trenggalek', '1'),
(152, '11', 'Kabupaten Tuban', '1'),
(153, '11', 'Kabupaten Tulungagung', '1'),
(154, '11', 'Kota Batu', '1'),
(155, '11', 'Kota Blitar', '1'),
(156, '11', 'Kota Kediri', '1'),
(157, '11', 'Kota Madiun', '1'),
(158, '11', 'Kota Malang', '1'),
(159, '11', 'Kota Mojokerto', '1'),
(160, '11', 'Kota Pasuruan', '1'),
(161, '11', 'Kota Probolinggo', '1'),
(162, '11', 'Kota Surabaya', '1'),
(163, '12', 'Kabupaten Bengkayang', '1'),
(164, '12', 'Kabupaten Kapuas Hulu', '1'),
(165, '12', 'Kabupaten Kayong Utara', '1'),
(166, '12', 'Kabupaten Ketapang', '1'),
(167, '12', 'Kabupaten Kubu Raya', '1'),
(168, '12', 'Kabupaten Landak', '1'),
(169, '12', 'Kabupaten Melawi', '1'),
(170, '12', 'Kabupaten Mempawah', '1'),
(171, '12', 'Kabupaten Sambas', '1'),
(172, '12', 'Kabupaten Sanggau', '1'),
(173, '12', 'Kabupaten Sekadau', '1'),
(174, '12', 'Kabupaten Sintang', '1'),
(175, '12', 'Kota Pontianak', '1'),
(176, '12', 'Kota Singkawang', '1'),
(177, '13', 'Kabupaten Balangan', '1'),
(178, '13', 'Kabupaten Banjar', '1'),
(179, '13', 'Kabupaten Barito Kuala', '1'),
(180, '13', 'Kabupaten Hulu Sungai Selatan', '1'),
(181, '13', 'Kabupaten Hulu Sungai Tengah', '1'),
(182, '13', 'Kabupaten Hulu Sungai Utara', '1'),
(183, '13', 'Kabupaten Kotabaru', '1'),
(184, '13', 'Kabupaten Tabalong', '1'),
(185, '13', 'Kabupaten Tanah Bumbu', '1'),
(186, '13', 'Kabupaten Tanah Laut', '1'),
(187, '13', 'Kabupaten Tapin', '1'),
(188, '13', 'Kota Banjarbaru', '1'),
(189, '13', 'Kota Banjarmasin', '1'),
(190, '14', 'Kabupaten Barito Selatan', '1'),
(191, '14', 'Kabupaten Barito Timur', '1'),
(192, '14', 'Kabupaten Barito Utara', '1'),
(193, '14', 'Kabupaten Gunung Mas', '1'),
(194, '14', 'Kabupaten Kapuas', '1'),
(195, '14', 'Kabupaten Katingan', '1'),
(196, '14', 'Kabupaten Kotawaringin Barat', '1'),
(197, '14', 'Kabupaten Kotawaringin Timur', '1'),
(198, '14', 'Kabupaten Lamandau', '1'),
(199, '14', 'Kabupaten Murung Raya', '1'),
(200, '14', 'Kabupaten Pulang Pisau', '1'),
(201, '14', 'Kabupaten Seruyan', '1'),
(202, '14', 'Kabupaten Sukamara', '1'),
(203, '14', 'Kota Palangka Raya', '1'),
(204, '15', 'Kabupaten Berau', '1'),
(205, '15', 'Kabupaten Kutai Barat', '1'),
(206, '15', 'Kabupaten Kutai Kartanegara', '1'),
(207, '15', 'Kabupaten Kutai Timur', '1'),
(208, '15', 'Kabupaten Mahakam Ulu', '1'),
(209, '15', 'Kabupaten Paser', '1'),
(210, '15', 'Kabupaten Penajam Paser Utara', '1'),
(211, '15', 'Kota Balikpapan', '1'),
(212, '15', 'Kota Bontang', '1'),
(213, '15', 'Kota Samarinda', '1'),
(214, '16', 'Kabupaten Bulungan', '1'),
(215, '16', 'Kabupaten Malinau', '1'),
(216, '16', 'Kabupaten Nunukan', '1'),
(217, '16', 'Kabupaten Tana Tidung', '1'),
(218, '16', 'Kota Tarakan', '1'),
(219, '17', 'Kabupaten Bintan', '1'),
(220, '17', 'Kabupaten Karimun', '1'),
(221, '17', 'Kabupaten Kepulauan Anambas', '1'),
(222, '17', 'Kabupaten Lingga', '1'),
(223, '17', 'Kabupaten Natuna', '1'),
(224, '17', 'Kota Batam', '1'),
(225, '17', 'Kota Tanjung Pinang', '1'),
(226, '18', 'Kabupaten Lampung Barat', '1'),
(227, '18', 'Kabupaten Lampung Selatan', '1'),
(228, '18', 'Kabupaten Lampung Tengah', '1'),
(229, '18', 'Kabupaten Lampung Timur', '1'),
(230, '18', 'Kabupaten Lampung Utara', '1'),
(231, '18', 'Kabupaten Mesuji', '1'),
(232, '18', 'Kabupaten Pesawaran', '1'),
(233, '18', 'Kabupaten Pesisir Barat', '1'),
(234, '18', 'Kabupaten Pringsewu', '1'),
(235, '18', 'Kabupaten Tanggamus', '1'),
(236, '18', 'Kabupaten Tulang Bawang', '1'),
(237, '18', 'Kabupaten Tulang Bawang Barat', '1'),
(238, '18', 'Kabupaten Way Kanan', '1'),
(239, '18', 'Kota Bandar Lampung', '1'),
(240, '18', 'Kota Metro', '1'),
(241, '19', 'Kabupaten Buru', '1'),
(242, '19', 'Kabupaten Buru Selatan', '1'),
(243, '19', 'Kabupaten Kepulauan Aru', '1'),
(244, '19', 'Kabupaten Maluku Barat Daya', '1'),
(245, '19', 'Kabupaten Maluku Tengah', '1'),
(246, '19', 'Kabupaten Maluku Tenggara', '1'),
(247, '19', 'Kabupaten Maluku Tenggara Barat', '1'),
(248, '19', 'Kabupaten Seram Bagian Barat', '1'),
(249, '19', 'Kabupaten Seram Bagian Timur', '1'),
(250, '19', 'Kota Ambon', '1'),
(251, '19', 'Kota Tual', '1'),
(252, '20', 'Kabupaten Halmahera Barat', '1'),
(253, '20', 'Kabupaten Halmahera Selatan', '1'),
(254, '20', 'Kabupaten Halmahera Tengah', '1'),
(255, '20', 'Kabupaten Halmahera Timur', '1'),
(256, '20', 'Kabupaten Halmahera Utara', '1'),
(257, '20', 'Kabupaten Kepulauan Sula', '1'),
(258, '20', 'Kabupaten Pulau Morotai', '1'),
(259, '20', 'Kabupaten Pulau Taliabu', '1'),
(260, '20', 'Kota Ternate', '1'),
(261, '20', 'Kota Tidore Kepulauan', '1'),
(262, '21', 'Kabupaten Aceh Barat', '1'),
(263, '21', 'Kabupaten Aceh Barat Daya', '1'),
(264, '21', 'Kabupaten Aceh Besar', '1'),
(265, '21', 'Kabupaten Aceh Jaya', '1'),
(266, '21', 'Kabupaten Aceh Selatan', '1'),
(267, '21', 'Kabupaten Aceh Singkil', '1'),
(268, '21', 'Kabupaten Aceh Tamiang', '1'),
(269, '21', 'Kabupaten Aceh Tengah', '1'),
(270, '21', 'Kabupaten Aceh Tenggara', '1'),
(271, '21', 'Kabupaten Aceh Timur', '1'),
(272, '21', 'Kabupaten Aceh Utara', '1'),
(273, '21', 'Kabupaten Bener Meriah', '1'),
(274, '21', 'Kabupaten Bireuen', '1'),
(275, '21', 'Kabupaten Gayo Lues', '1'),
(276, '21', 'Kabupaten Nagan Raya', '1'),
(277, '21', 'Kabupaten Pidie', '1'),
(278, '21', 'Kabupaten Pidie Jaya', '1'),
(279, '21', 'Kabupaten Simeulue', '1'),
(280, '21', 'Kota Banda Aceh', '1'),
(281, '21', 'Kota Lhokseumawe', '1'),
(282, '21', 'Kota Sabang', '1'),
(283, '21', 'Kota Subulussalam', '1'),
(284, '22', 'Kabupaten Bima', '1'),
(285, '22', 'Kabupaten Dompu', '1'),
(286, '22', 'Kabupaten Lombok Barat', '1'),
(287, '22', 'Kabupaten Lombok Tengah', '1'),
(288, '22', 'Kabupaten Lombok Timur', '1'),
(289, '22', 'Kabupaten Lombok Utara', '1'),
(290, '22', 'Kabupaten Sumbawa', '1'),
(291, '22', 'Kabupaten Sumbawa Barat', '1'),
(292, '22', 'Kota Bima', '1'),
(293, '22', 'Kota Mataram', '1'),
(294, '23', 'Kabupaten Alor', '1'),
(295, '23', 'Kabupaten Belu', '1'),
(296, '23', 'Kabupaten Ende', '1'),
(297, '23', 'Kabupaten Ende', '1'),
(298, '23', 'Kabupaten Flores Timur', '1'),
(299, '23', 'Kabupaten Flores Timur', '1'),
(300, '23', 'Kabupaten Kupang', '1'),
(301, '23', 'Kabupaten Lembata', '1'),
(302, '23', 'Kabupaten Malaka', '1'),
(303, '23', 'Kabupaten Manggarai', '1'),
(304, '23', 'Kabupaten Manggarai Barat', '1'),
(305, '23', 'Kabupaten Manggarai Timur', '1'),
(306, '23', 'Kabupaten Nagekeo', '1'),
(307, '23', 'Kabupaten Ngada', '1'),
(308, '23', 'Kabupaten Rote Ndao', '1'),
(309, '23', 'Kabupaten Sabu Raijua', '1'),
(310, '23', 'Kabupaten Sikka', '1'),
(311, '23', 'Kabupaten Sumba Barat', '1'),
(312, '23', 'Kabupaten Sumba Barat Daya', '1'),
(313, '23', 'Kabupaten Sumba Tengah', '1'),
(314, '23', 'Kabupaten Sumba Timur', '1'),
(315, '23', 'Kabupaten Timor Tengah Selatan', '1'),
(316, '23', 'Kabupaten Timor Tengah Utara', '1'),
(317, '23', 'Kota Kupang', '1'),
(318, '24', 'Kabupaten Asmat', '1'),
(319, '24', 'Kabupaten Biak Numfor', '1'),
(320, '24', 'Kabupaten Boven Digoel', '1'),
(321, '24', 'Kabupaten Deiyai', '1'),
(322, '24', 'Kabupaten Dogiyai', '1'),
(323, '24', 'Kabupaten Intan Jaya', '1'),
(324, '24', 'Kabupaten Jayapura', '1'),
(325, '24', 'Kabupaten Jayawijaya', '1'),
(326, '24', 'Kabupaten Keerom', '1'),
(327, '24', 'Kabupaten Kepulauan Yapen', '1'),
(328, '24', 'Kabupaten Lanny Jaya', '1'),
(329, '24', 'Kabupaten Mamberamo Raya', '1'),
(330, '24', 'Kabupaten Mamberamo Tengah', '1'),
(331, '24', 'Kabupaten Mappi', '1'),
(332, '24', 'Kabupaten Merauke', '1'),
(333, '24', 'Kabupaten Mimika', '1'),
(334, '24', 'Kabupaten Nabire', '1'),
(335, '24', 'Kabupaten Nduga', '1'),
(336, '24', 'Kabupaten Paniai', '1'),
(337, '24', 'Kabupaten Pegunungan Bintang', '1'),
(338, '24', 'Kabupaten Puncak', '1'),
(339, '24', 'Kabupaten Puncak Jaya', '1'),
(340, '24', 'Kabupaten Sarmi', '1'),
(341, '24', 'Kabupaten Supiori', '1'),
(342, '24', 'Kabupaten Tolikara', '1'),
(343, '24', 'Kabupaten Waropen', '1'),
(344, '24', 'Kabupaten Yahukimo', '1'),
(345, '24', 'Kabupaten Yalimo', '1'),
(346, '24', 'Kota Jayapura', '1'),
(347, '25', 'Kabupaten Fakfak', '1'),
(348, '25', 'Kabupaten Kaimana', '1'),
(349, '25', 'Kabupaten Manokwari', '1'),
(350, '25', 'Kabupaten Manokwari Selatan', '1'),
(351, '25', 'Kabupaten Maybrat', '1'),
(352, '25', 'Kabupaten Pegunungan Arfak', '1'),
(353, '25', 'Kabupaten Raja Ampat', '1'),
(354, '25', 'Kabupaten Sorong', '1'),
(355, '25', 'Kabupaten Sorong Selatan', '1'),
(356, '25', 'Kabupaten Tambrauw', '1'),
(357, '25', 'Kabupaten Teluk Bintuni', '1'),
(358, '25', 'Kabupaten Teluk Wondama', '1'),
(359, '25', 'Kota Sorong', '1'),
(360, '26', 'Kabupaten Bengkalis', '1'),
(361, '26', 'Kabupaten Indragiri Hilir', '1'),
(362, '26', 'Kabupaten Indragiri Hulu', '1'),
(363, '26', 'Kabupaten Kampar', '1'),
(364, '26', 'Kabupaten Kepulauan Meranti', '1'),
(365, '26', 'Kabupaten Kuantan Singingi', '1'),
(366, '26', 'Kabupaten Pelalawan', '1'),
(367, '26', 'Kabupaten Rokan Hilir', '1'),
(368, '26', 'Kabupaten Rokan Hulu', '1'),
(369, '26', 'Kabupaten Siak', '1'),
(370, '26', 'Kota Dumai', '1'),
(371, '26', 'Kota Pekanbaru', '1'),
(372, '27', 'Kabupaten Majene', '1'),
(373, '27', 'Kabupaten Mamasa', '1'),
(374, '27', 'Kabupaten Mamuju', '1'),
(375, '27', 'Kabupaten Mamuju Tengah', '1'),
(376, '27', 'Kabupaten Mamuju Utara', '1'),
(377, '27', 'Kabupaten Polewali Mandar', '1'),
(378, '28', 'Kabupaten Bantaeng', '1'),
(379, '28', 'Kabupaten Barru', '1'),
(380, '28', 'Kabupaten Bone', '1'),
(381, '28', 'Kabupaten Bulukumba', '1'),
(382, '28', 'Kabupaten Enrekang', '1'),
(383, '28', 'Kabupaten Gowa', '1'),
(384, '28', 'Kabupaten Jeneponto', '1'),
(385, '28', 'Kabupaten Kepulauan Selayar', '1'),
(386, '28', 'Kabupaten Luwu', '1'),
(387, '28', 'Kabupaten Luwu Timur', '1'),
(388, '28', 'Kabupaten Luwu Utara', '1'),
(389, '28', 'Kabupaten Maros', '1'),
(390, '28', 'Kabupaten Pangkajene Kepulauan', '1'),
(391, '28', 'Kabupaten Pinrang', '1'),
(392, '28', 'Kabupaten Sidenreng Rappang', '1'),
(393, '28', 'Kabupaten Sinjai', '1'),
(394, '28', 'Kabupaten Soppeng', '1'),
(395, '28', 'Kabupaten Takalar', '1'),
(396, '28', 'Kabupaten Tana Toraja', '1'),
(397, '28', 'Kabupaten Toraja Utara', '1'),
(398, '28', 'Kabupaten Wajo', '1'),
(399, '28', 'Kota Makassar', '1'),
(400, '28', 'Kota Palopo', '1'),
(401, '28', 'Kota Parepare', '1'),
(402, '29', 'Kabupaten Banggai', '1'),
(403, '29', 'Kabupaten Banggai Kepulauan', '1'),
(404, '29', 'Kabupaten Banggai Laut', '1'),
(405, '29', 'Kabupaten Buol', '1'),
(406, '29', 'Kabupaten Donggala', '1'),
(407, '29', 'Kabupaten Morowali', '1'),
(408, '29', 'Kabupaten Morowali Utara', '1'),
(409, '29', 'Kabupaten Parigi Moutong', '1'),
(410, '29', 'Kabupaten Poso', '1'),
(411, '29', 'Kabupaten Sigi', '1'),
(412, '29', 'Kabupaten Tojo Una-Una', '1'),
(413, '29', 'Kabupaten Toli-Toli', '1'),
(414, '29', 'Kota Palu', '1'),
(415, '30', 'Kabupaten Bombana', '1'),
(416, '30', 'Kabupaten Buton', '1'),
(417, '30', 'Kabupaten Buton Selatan', '1'),
(418, '30', 'Kabupaten Buton Tengah', '1'),
(419, '30', 'Kabupaten Buton Utara', '1'),
(420, '30', 'Kabupaten Kolaka', '1'),
(421, '30', 'Kabupaten Kolaka Timur', '1'),
(422, '30', 'Kabupaten Kolaka Utara', '1'),
(423, '30', 'Kabupaten Konawe', '1'),
(424, '30', 'Kabupaten Konawe Kepulauan', '1'),
(425, '30', 'Kabupaten Konawe Selatan', '1'),
(426, '30', 'Kabupaten Konawe Utara', '1'),
(427, '30', 'Kabupaten Muna', '1'),
(428, '30', 'Kabupaten Muna Barat', '1'),
(429, '30', 'Kabupaten Wakatobi', '1'),
(430, '30', 'Kota Bau-Bau', '1'),
(431, '30', 'Kota Kendari', '1'),
(432, '31', 'Kabupaten Bolaang Mongondow', '1'),
(433, '31', 'Kabupaten Bolaang Mongondow Selatan', '1'),
(434, '31', 'Kabupaten Bolaang Mongondow Timur', '1'),
(435, '31', 'Kabupaten Bolaang Mongondow Utara', '1'),
(436, '31', 'Kabupaten Kepulauan Sangihe', '1'),
(437, '31', 'Kabupaten Kepulauan Siau Tagulandang Biaro (Sitaro', '1'),
(438, '31', 'Kabupaten Kepulauan Talaud', '1'),
(439, '31', 'Kabupaten Minahasa', '1'),
(440, '31', 'Kabupaten Minahasa Selatan', '1'),
(441, '31', 'Kabupaten Minahasa Tenggara', '1'),
(442, '31', 'Kabupaten Minahasa Utara', '1'),
(443, '31', 'Kota Bitung', '1'),
(444, '31', 'Kota Kotamobagu', '1'),
(445, '31', 'Kota Manado', '1'),
(446, '31', 'Kota Tomohon', '1'),
(447, '32', 'Kabupaten Agam', '1'),
(448, '32', 'Kabupaten Dharmasraya', '1'),
(449, '32', 'Kabupaten Kepulauan Mentawai', '1'),
(450, '32', 'Kabupaten Lima Puluh Kota', '1'),
(451, '32', 'Kabupaten Padang Pariaman', '1'),
(452, '32', 'Kabupaten Pasaman', '1'),
(453, '32', 'Kabupaten Pasaman Barat', '1'),
(454, '32', 'Kabupaten Pesisir Selatan', '1'),
(455, '32', 'Kabupaten Sijunjung', '1'),
(456, '32', 'Kabupaten Solok', '1'),
(457, '32', 'Kabupaten Solok Selatan', '1'),
(458, '32', 'Kabupaten Tanah Datar', '1'),
(459, '32', 'Kota Bukittinggi', '1'),
(460, '32', 'Kota Padang', '1'),
(461, '32', 'Kota Padang Panjang', '1'),
(462, '32', 'Kota Pariaman', '1'),
(463, '32', 'Kota Payakumbuh', '1'),
(464, '32', 'Kota Sawah Lunto', '1'),
(465, '32', 'Kota Solok', '1'),
(466, '33', 'Kabupaten Asahan', '1'),
(467, '33', 'Kabupaten Banyuasin', '1'),
(468, '33', 'Kabupaten Empat Lawang', '1'),
(469, '33', 'Kabupaten Lahat', '1'),
(470, '33', 'Kabupaten Muara Enim', '1'),
(471, '33', 'Kabupaten Musi Banyuasin', '1'),
(472, '33', 'Kabupaten Musi Rawas', '1'),
(473, '33', 'Kabupaten Musi Rawas Utara', '1'),
(474, '33', 'Kabupaten Ogan Ilir', '1'),
(475, '33', 'Kabupaten Ogan Komering Ilir', '1'),
(476, '33', 'Kabupaten Ogan Komering Ulu', '1'),
(477, '33', 'Kabupaten Ogan Komering Ulu Selatan', '1'),
(478, '33', 'Kabupaten Ogan Komering Ulu Timur', '1'),
(479, '33', 'Kabupaten Penukal Abab Lematang Ilir', '1'),
(480, '33', 'Kota Lubuk Linggau', '1'),
(481, '33', 'Kota Pagar Alam', '1'),
(482, '33', 'Kota Palembang', '1'),
(483, '33', 'Kota Prabumulih', '1'),
(484, '34', 'Kabupaten Batu Bara', '1'),
(485, '34', 'Kabupaten Dairi', '1'),
(486, '34', 'Kabupaten Deli Serdang', '1'),
(487, '34', 'Kabupaten Humbang Hasundutan', '1'),
(488, '34', 'Kabupaten Karo', '1'),
(489, '34', 'Kabupaten Labuhanbatu', '1'),
(490, '34', 'Kabupaten Labuhanbatu Selatan', '1'),
(491, '34', 'Kabupaten Labuhanbatu Utara', '1'),
(492, '34', 'Kabupaten Langkat', '1'),
(493, '34', 'Kabupaten Mandailing Natal', '1'),
(494, '34', 'Kabupaten Nias', '1'),
(495, '34', 'Kabupaten Nias Barat', '1'),
(496, '34', 'Kabupaten Nias Selatan', '1'),
(497, '34', 'Kabupaten Nias Utara', '1'),
(498, '34', 'Kabupaten Padang Lawas', '1'),
(499, '34', 'Kabupaten Padang Lawas Utara', '1'),
(500, '34', 'Kabupaten Pakpak Bharat', '1'),
(501, '34', 'Kabupaten Samosir', '1'),
(502, '34', 'Kabupaten Serdang Bedagai', '1'),
(503, '34', 'Kabupaten Simalungun', '1'),
(504, '34', 'Kabupaten Tapanuli Selatan', '1'),
(505, '34', 'Kabupaten Tapanuli Tengah', '1'),
(506, '34', 'Kabupaten Tapanuli Utara', '1'),
(507, '34', 'Kabupaten Toba Samosir', '1'),
(508, '34', 'Kota Binjai', '1'),
(509, '34', 'Kota Gunungsitoli', '1'),
(510, '34', 'Kota Medan', '1'),
(511, '34', 'Kota Padang Sidempuan', '1'),
(512, '34', 'Kota Pematang Siantar', '1'),
(513, '34', 'Kota Sibolga', '1'),
(514, '34', 'Kota Tanjung Balai', '1'),
(515, '34', 'Kota Tebing Tinggi', '1'),
(516, '1', 'aaaaaaa', '1'),
(517, '1', 'bbbbbb', '1'),
(518, '1', 'cccccc', '1');

-- --------------------------------------------------------

--
-- Table structure for table `hrd_master_negara`
--

CREATE TABLE `hrd_master_negara` (
  `id_negara` int(9) NOT NULL,
  `nama_negara` varchar(50) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hrd_master_negara`
--

INSERT INTO `hrd_master_negara` (`id_negara`, `nama_negara`, `status`) VALUES
(1, 'Afganistan', 1),
(2, 'Afrika Selatan', 1),
(3, 'Albania', 1),
(4, 'Aljazair', 1),
(5, 'Amerika Serikat', 1),
(6, 'Andorra', 1),
(7, 'Angola', 1),
(8, 'Anguilla', 1),
(9, 'Antigua dan Barbuda', 1),
(10, 'Antillen Belanda', 1),
(11, 'Arab Saudi', 1),
(12, 'Argentina', 1),
(13, 'Armenia', 1),
(14, 'Aruba', 1),
(15, 'Atol Johnston', 1),
(16, 'Australia', 1),
(17, 'Austria', 1),
(18, 'Azerbaijan', 1),
(19, 'Bahama', 1),
(20, 'Bahrain', 1),
(21, 'Bangladesh', 1),
(22, 'Barbados', 1),
(23, 'Belanda', 1),
(24, 'Belarus', 1),
(25, 'Belgia', 1),
(26, 'Belize', 1),
(27, 'Benin', 1),
(28, 'Bermuda', 1),
(29, 'Bhutan', 1),
(30, 'Bolivia', 1),
(31, 'Bosnia Herzegovina', 1),
(32, 'Botswana', 1),
(33, 'Brasil', 1),
(34, 'Britania Raya', 1),
(35, 'Brunei', 1),
(36, 'Bulgaria', 1),
(37, 'Burkina Faso', 1),
(38, 'Burundi', 1),
(39, 'Ceko', 1),
(40, 'Chad', 1),
(41, 'Chili', 1),
(42, 'Denmark', 1),
(43, 'Djibouti', 1),
(44, 'Dominika', 1),
(45, 'Ekuador', 1),
(46, 'El Salvador', 1),
(47, 'Eritrea', 1),
(48, 'Estonia', 1),
(49, 'Ethiopia', 1),
(50, 'Fiji', 1),
(51, 'Filipina', 1),
(52, 'Finlandia', 1),
(53, 'Gabon', 1),
(54, 'Gambia', 1),
(55, 'Georgia', 1),
(56, 'Ghana', 1),
(57, 'Gibraltar', 1),
(58, 'Greenland', 1),
(59, 'Grenada', 1),
(60, 'Guadeloupe', 1),
(61, 'Guam', 1),
(62, 'Guatemala', 1),
(63, 'Guernsey', 1),
(64, 'Guinea', 1),
(65, 'Guinea Bissau', 1),
(66, 'Guinea Khatulistiwa', 1),
(67, 'Guyana', 1),
(68, 'Guyana Perancis', 1),
(69, 'Haiti', 1),
(70, 'Honduras', 1),
(71, 'Hong Kong', 1),
(72, 'Hongaria', 1),
(73, 'India', 1),
(74, 'Indonesia', 1),
(75, 'Irak', 1),
(76, 'Iran', 1),
(77, 'Irlandia', 1),
(78, 'Islandia', 1),
(79, 'Israel', 1),
(80, 'Italia', 1),
(81, 'Jalur Gaza', 1),
(82, 'Jamaika', 1),
(83, 'Jepang', 1),
(84, 'Jerman', 1),
(85, 'Jersey', 1),
(86, 'Kaledonia Baru', 1),
(87, 'Kamboja', 1),
(88, 'Kamerun', 1),
(89, 'Kanada', 1),
(90, 'Kazakhstan', 1),
(91, 'Kenya', 1),
(92, 'Kepulauan Cayman', 1),
(93, 'Kepulauan Cocos', 1),
(94, 'Kepulauan Cook', 1),
(95, 'Kepulauan Falkland', 1),
(96, 'Kepulauan Faroe', 1),
(97, 'Kepulauan Mariana Utara', 1),
(98, 'Kepulauan Marshall', 1),
(99, 'Kepulauan Pitcairn', 1),
(100, 'Kepulauan Turks dan Caicos', 1),
(101, 'Kepulauan Virgin', 1),
(102, 'Kepulauan Virgin Inggris', 1),
(103, 'Kirgizia', 1),
(104, 'Kiribati', 1),
(105, 'Kolombia', 1),
(106, 'Komoro', 1),
(107, 'Korea Selatan', 1),
(108, 'Korea Utara', 1),
(109, 'Kosta Rika', 1),
(110, 'Kroasia', 1),
(111, 'Kuba', 1),
(112, 'Kuwait', 1),
(113, 'Laos', 1),
(114, 'Latvia', 1),
(115, 'Lebanon', 1),
(116, 'Lesotho', 1),
(117, 'Liberia', 1),
(118, 'Libya', 1),
(119, 'Liechtenstein', 1),
(120, 'Lithuania', 1),
(121, 'Luxembourg', 1),
(122, 'Madagaskar', 1),
(123, 'Makau', 1),
(124, 'Makedonia', 1),
(125, 'Maladewa', 1),
(126, 'Malawi', 1),
(127, 'Malaysia', 1),
(128, 'Mali', 1),
(129, 'Malta', 1),
(130, 'Maroko', 1),
(131, 'Martinique', 1),
(132, 'Mauritania', 1),
(133, 'Mauritius', 1),
(134, 'Mayotte', 1),
(135, 'Meksiko', 1),
(136, 'Mesir', 1),
(137, 'Mikronesia', 1),
(138, 'Moldavia', 1),
(139, 'Monako', 1),
(140, 'Mongolia', 1),
(141, 'Montserrat', 1),
(142, 'Mozambik', 1),
(143, 'Myanmar', 1),
(144, 'Namibia', 1),
(145, 'Nauru', 1),
(146, 'Nepal', 1),
(147, 'Niger', 1),
(148, 'Nigeria', 1),
(149, 'Nikaragua', 1),
(150, 'Norwegia', 1),
(151, 'Oman', 1),
(152, 'Pakistan', 1),
(153, 'Palau', 1),
(154, 'Panama', 1),
(155, 'Pantai Gading', 1),
(156, 'Papua Nugini', 1),
(157, 'Paraguay', 1),
(158, 'Perancis (Metropolitan)', 1),
(159, 'Peru', 1),
(160, 'Polandia', 1),
(161, 'Polinesia Perancis', 1),
(162, 'Portugal', 1),
(163, 'Puerto Riko', 1),
(164, 'Pulau Man', 1),
(165, 'Pulau Natal', 1),
(166, 'Pulau Norfolk', 1),
(167, 'Qatar', 1),
(168, 'Rep Afrika Tengah', 1),
(169, 'Republik Cina (Taiwan)', 1),
(170, 'Republik Demokratik Kongo', 1),
(171, 'Republik Dominika', 1),
(172, 'Republik Kongo', 1),
(173, 'Republik Rakyat Cina', 1),
(174, 'Reunion', 1),
(175, 'Romania', 1),
(176, 'Rusia', 1),
(177, 'Rwanda', 1),
(178, 'Sahara Barat', 1),
(179, 'Saint Helena', 1),
(180, 'Saint Kitts dan Nevis', 1),
(181, 'Saint Lucia', 1),
(182, 'Saint Pierre dan Miquelon', 1),
(183, 'Saint Vincent dan Grenadines', 1),
(184, 'Samoa', 1),
(185, 'Samoa Amerika', 1),
(186, 'San Marino', 1),
(187, 'Sao Tome dan Principe', 1),
(188, 'Selandia Baru', 1),
(189, 'Senegal', 1),
(190, 'Serbia dan Montenegro', 1),
(191, 'Seychelles', 1),
(192, 'Sierra Leone', 1),
(193, 'Singapura', 1),
(194, 'Siprus', 1),
(195, 'Slovenia', 1),
(196, 'Slowakia', 1),
(197, 'Solomon', 1),
(198, 'Somalia', 1),
(199, 'Spanyol', 1),
(200, 'Sri Lanka', 1),
(201, 'Sudan', 1),
(202, 'Suriah', 1),
(203, 'Suriname', 1),
(204, 'Svalbard', 1),
(205, 'Swaziland', 1),
(206, 'Swedia', 1),
(207, 'Swiss', 1),
(208, 'Tajikistan', 1),
(209, 'Tanjung Verde', 1),
(210, 'Tanzania', 1),
(211, 'Tepi Barat', 1),
(212, 'Thailand', 1),
(213, 'Timor Leste', 1),
(214, 'Togo', 1),
(215, 'Tokelau', 1),
(216, 'Tonga', 1),
(217, 'Trinidad dan Tobago', 1),
(218, 'Tunisia', 1),
(219, 'Turki', 1),
(220, 'Turkmenistan', 1),
(221, 'Tuvalu', 1),
(222, 'Uganda', 1),
(223, 'Ukraina', 1),
(224, 'Uni Emirat Arab', 1),
(225, 'Uni Eropa', 1),
(226, 'Uruguay', 1),
(227, 'Uzbekistan', 1),
(228, 'Vanuatu', 1),
(229, 'Vatikan', 1),
(230, 'Venezuela', 1),
(231, 'Vietnam', 1),
(232, 'Wallis dan Futuna', 1),
(233, 'Yaman', 1),
(234, 'Yordania', 1),
(235, 'Yunani', 1),
(236, 'Zambia', 1),
(237, 'Zimbabwe', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hrd_master_provinsi`
--

CREATE TABLE `hrd_master_provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `nama_provinsi` varchar(50) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hrd_master_provinsi`
--

INSERT INTO `hrd_master_provinsi` (`id_provinsi`, `nama_provinsi`, `status`) VALUES
(1, 'Bali', '1'),
(2, 'Bangka Belitung', '1'),
(3, 'Banten', '1'),
(4, 'Bengkulu', '1'),
(5, 'DI Yogyakarta', '1'),
(6, 'DKI Jakarta', '1'),
(7, 'Gorontalo', '1'),
(8, 'Jambi', '1'),
(9, 'Jawa Barat', '1'),
(10, 'Jawa Tengah', '1'),
(11, 'Jawa Timur', '1'),
(12, 'Kalimantan Barat', '1'),
(13, 'Kalimantan Selatan', '1'),
(14, 'Kalimantan Tengah', '1'),
(15, 'Kalimantan Timur', '1'),
(16, 'Kalimantan Utara', '1'),
(17, 'Kepulauan Riau', '1'),
(18, 'Lampung', '1'),
(19, 'Maluku', '1'),
(20, 'Maluku Utara', '1'),
(21, 'Nanggroe Aceh Darussalam (NAD)', '1'),
(22, 'Nusa Tenggara Barat (NTB)', '1'),
(23, 'Nusa Tenggara Timur (NTT)', '1'),
(24, 'Papua', '1'),
(25, 'Papua Barat', '1'),
(26, 'Riau', '1'),
(27, 'Sulawesi Barat', '1'),
(28, 'Sulawesi Selatan', '1'),
(29, 'Sulawesi Tengah', '1'),
(30, 'Sulawesi Tenggara', '1'),
(31, 'Sulawesi Utara', '1'),
(32, 'Sumatera Barat', '1'),
(33, 'Sumatera Selatan', '1'),
(34, 'Sumatera Utara', '1');

-- --------------------------------------------------------

--
-- Table structure for table `hrd_parameter`
--

CREATE TABLE `hrd_parameter` (
  `id` int(1) NOT NULL,
  `bulan` varchar(2) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `jam_masuk` time NOT NULL,
  `toleransi` time NOT NULL,
  `jam_keluar` time NOT NULL,
  `jam_mulai_lembur` time NOT NULL,
  `status_lembur` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hrd_parameter`
--

INSERT INTO `hrd_parameter` (`id`, `bulan`, `tahun`, `jam_masuk`, `toleransi`, `jam_keluar`, `jam_mulai_lembur`, `status_lembur`) VALUES
(1, '03', '2018', '08:00:00', '08:15:00', '17:00:00', '18:00:00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `hrd_user`
--

CREATE TABLE `hrd_user` (
  `user_id` int(10) NOT NULL,
  `user_role` varchar(10) NOT NULL,
  `nik` varchar(15) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `full_name` varchar(70) NOT NULL,
  `email` varchar(150) NOT NULL,
  `status` int(1) NOT NULL,
  `deleted` int(1) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` varchar(10) NOT NULL,
  `last_update` datetime NOT NULL,
  `update_by` varchar(10) NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hrd_user`
--

INSERT INTO `hrd_user` (`user_id`, `user_role`, `nik`, `user_name`, `user_password`, `full_name`, `email`, `status`, `deleted`, `created_date`, `created_by`, `last_update`, `update_by`, `last_login`) VALUES
(1, '0', '', 'admin', 'YWRtaW4=', 'admin', 'priyo.ardy@yahoo.com', 1, 0, '2018-03-08 14:34:27', '', '0000-00-00 00:00:00', '', '2018-03-19 16:31:31');

-- --------------------------------------------------------

--
-- Table structure for table `hrd_user_role`
--

CREATE TABLE `hrd_user_role` (
  `role_id` int(10) NOT NULL,
  `role_code` varchar(10) NOT NULL,
  `role_name` varchar(50) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hrd_user_role`
--

INSERT INTO `hrd_user_role` (`role_id`, `role_code`, `role_name`, `status`) VALUES
(1, 'Admin', 'Administrator', 1),
(2, 'SPV', 'Supervisor', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hrd_user_security`
--

CREATE TABLE `hrd_user_security` (
  `id` int(10) NOT NULL,
  `userid` varchar(70) NOT NULL,
  `user_role` varchar(70) NOT NULL,
  `akses` varchar(1) NOT NULL,
  `baca` varchar(1) NOT NULL,
  `tulis` varchar(1) NOT NULL,
  `ubah` varchar(1) NOT NULL,
  `hapus` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hrd_config_absensi`
--
ALTER TABLE `hrd_config_absensi`
  ADD PRIMARY KEY (`id`,`kode_absen`);

--
-- Indexes for table `hrd_config_jenis_libur`
--
ALTER TABLE `hrd_config_jenis_libur`
  ADD PRIMARY KEY (`id_jenis_libur`);

--
-- Indexes for table `hrd_config_libur`
--
ALTER TABLE `hrd_config_libur`
  ADD PRIMARY KEY (`id_libur`);

--
-- Indexes for table `hrd_config_periode_absen`
--
ALTER TABLE `hrd_config_periode_absen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hrd_config_shift`
--
ALTER TABLE `hrd_config_shift`
  ADD PRIMARY KEY (`id_shift`,`kode_shift`);

--
-- Indexes for table `hrd_master_kota`
--
ALTER TABLE `hrd_master_kota`
  ADD PRIMARY KEY (`id_kota`),
  ADD KEY `id_provinsi` (`id_provinsi`);

--
-- Indexes for table `hrd_master_negara`
--
ALTER TABLE `hrd_master_negara`
  ADD PRIMARY KEY (`id_negara`);

--
-- Indexes for table `hrd_master_provinsi`
--
ALTER TABLE `hrd_master_provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `hrd_parameter`
--
ALTER TABLE `hrd_parameter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hrd_user`
--
ALTER TABLE `hrd_user`
  ADD PRIMARY KEY (`user_id`,`user_name`);

--
-- Indexes for table `hrd_user_role`
--
ALTER TABLE `hrd_user_role`
  ADD PRIMARY KEY (`role_id`),
  ADD KEY `role_code` (`role_code`);

--
-- Indexes for table `hrd_user_security`
--
ALTER TABLE `hrd_user_security`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hrd_config_absensi`
--
ALTER TABLE `hrd_config_absensi`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hrd_config_jenis_libur`
--
ALTER TABLE `hrd_config_jenis_libur`
  MODIFY `id_jenis_libur` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hrd_config_libur`
--
ALTER TABLE `hrd_config_libur`
  MODIFY `id_libur` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `hrd_config_periode_absen`
--
ALTER TABLE `hrd_config_periode_absen`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `hrd_config_shift`
--
ALTER TABLE `hrd_config_shift`
  MODIFY `id_shift` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hrd_master_kota`
--
ALTER TABLE `hrd_master_kota`
  MODIFY `id_kota` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=519;

--
-- AUTO_INCREMENT for table `hrd_master_negara`
--
ALTER TABLE `hrd_master_negara`
  MODIFY `id_negara` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=238;

--
-- AUTO_INCREMENT for table `hrd_master_provinsi`
--
ALTER TABLE `hrd_master_provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `hrd_parameter`
--
ALTER TABLE `hrd_parameter`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hrd_user`
--
ALTER TABLE `hrd_user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hrd_user_role`
--
ALTER TABLE `hrd_user_role`
  MODIFY `role_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hrd_user_security`
--
ALTER TABLE `hrd_user_security`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
