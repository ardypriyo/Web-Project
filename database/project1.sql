-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2018 at 09:40 PM
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
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `status` varchar(1) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `kategori` varchar(4) NOT NULL,
  `tags` text NOT NULL,
  `last_update` datetime NOT NULL,
  `update_by` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `author`, `created_date`, `status`, `judul`, `isi`, `kategori`, `tags`, `last_update`, `update_by`) VALUES
(5, '1', '2018-03-05 11:25:39', '1', 'asdgasd', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>gasdgasdgasdgasdgasd</p>\r\n</body>\r\n</html>', '8', 'a:1:{s:4:\"tags\";a:8:{i:0;s:12:\"First option\";i:1;s:13:\"Second option\";i:2;s:12:\"Third option\";i:3;s:13:\"Fourth option\";i:4;s:12:\"Fifth option\";i:5;s:12:\"Sixth option\";i:6;s:14:\"Seventh option\";i:7;s:13:\"Eighth option\";}}', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `artikel_tags`
--

CREATE TABLE `artikel_tags` (
  `id_artikel` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `id_tags` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `status` varchar(1) NOT NULL,
  `deskripsi` text,
  `created_date` datetime NOT NULL,
  `created_by` varchar(4) NOT NULL,
  `last_update` datetime NOT NULL,
  `update_by` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `status`, `deskripsi`, `created_date`, `created_by`, `last_update`, `update_by`) VALUES
(1, 'Testing', '3', NULL, '2018-03-01 11:47:58', '1', '0000-00-00 00:00:00', ''),
(2, 'Woles', '3', NULL, '2018-03-02 07:46:19', '1', '0000-00-00 00:00:00', ''),
(3, 'Kampret', '3', NULL, '2018-03-02 07:46:25', '1', '0000-00-00 00:00:00', ''),
(4, 'Berubah', '3', NULL, '2018-03-02 07:46:29', '1', '2018-03-02 08:24:11', '1'),
(5, 'Kuproy', '3', NULL, '2018-03-02 07:46:34', '1', '0000-00-00 00:00:00', ''),
(6, 'Ardy', '3', NULL, '2018-03-02 07:47:29', '1', '2018-03-02 08:31:19', '1'),
(7, 'Nenek Lampir', '3', NULL, '2018-03-02 07:47:36', '1', '0000-00-00 00:00:00', ''),
(8, 'Mujair', '3', NULL, '2018-03-02 07:47:41', '1', '0000-00-00 00:00:00', ''),
(9, 'Odong-odong', '3', NULL, '2018-03-02 07:47:46', '1', '0000-00-00 00:00:00', ''),
(10, 'Nenek Sihir', '3', NULL, '2018-03-02 07:47:52', '1', '0000-00-00 00:00:00', ''),
(11, 'Cut Bray', '3', NULL, '2018-03-02 07:47:59', '1', '0000-00-00 00:00:00', ''),
(12, 'Dilan', '3', NULL, '2018-03-02 07:48:03', '1', '0000-00-00 00:00:00', ''),
(13, 'Android', '1', NULL, '2018-03-06 14:19:47', '1', '0000-00-00 00:00:00', ''),
(14, 'Linux', '1', NULL, '2018-03-06 14:19:55', '1', '0000-00-00 00:00:00', ''),
(15, 'Windows', '1', NULL, '2018-03-06 14:20:00', '1', '0000-00-00 00:00:00', ''),
(16, 'Programing', '1', NULL, '2018-03-06 14:20:13', '1', '0000-00-00 00:00:00', ''),
(17, 'Networking', '1', NULL, '2018-03-06 14:20:19', '1', '0000-00-00 00:00:00', ''),
(18, 'Hardware', '1', NULL, '2018-03-06 14:20:32', '1', '0000-00-00 00:00:00', ''),
(19, 'Software', '1', NULL, '2018-03-06 14:20:37', '1', '0000-00-00 00:00:00', ''),
(20, 'Review', '1', NULL, '2018-03-06 14:20:53', '1', '0000-00-00 00:00:00', ''),
(21, 'Tips & Trick', '1', NULL, '2018-03-06 14:20:59', '1', '0000-00-00 00:00:00', ''),
(22, 'Tutorial', '1', NULL, '2018-03-06 14:21:06', '1', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_artikel` varchar(12) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `isi_komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m_admin`
--

CREATE TABLE `m_admin` (
  `userid` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `status` varchar(1) NOT NULL,
  `level` varchar(1) NOT NULL,
  `created_date` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `image` text NOT NULL,
  `is_login` varchar(1) NOT NULL,
  `last_update` datetime NOT NULL,
  `update_by` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_admin`
--

INSERT INTO `m_admin` (`userid`, `email`, `password`, `nama`, `status`, `level`, `created_date`, `last_login`, `image`, `is_login`, `last_update`, `update_by`) VALUES
(1, 'admin@zenformatika.com', 'YWRtaW4xMjM=', 'Super Administrator', '1', '0', '2018-02-20 00:00:00', '2018-03-06 13:54:18', '', '1', '0000-00-00 00:00:00', ''),
(2, 'priyo.ardy@yahoo.com', 'YXJkeTkwMDQ=', 'Ardy Priyo Sudiyantoko', '1', '0', '2018-02-21 18:25:37', '2018-02-23 18:35:11', '', '0', '0000-00-00 00:00:00', ''),
(3, 'admin@gmail.com', 'MTIz', 'Administrator', '1', '1', '2018-02-21 18:26:28', '2018-02-23 18:37:08', '', '0', '2018-02-23 18:08:12', ''),
(4, 'mod@gmail.com', 'MTIz', 'Moderator', '1', '2', '2018-02-21 18:26:46', '2018-02-23 18:35:43', '', '0', '0000-00-00 00:00:00', ''),
(5, 'user@gmail.com', 'MTIz', 'User', '3', '3', '2018-02-21 18:26:58', '0000-00-00 00:00:00', '', '', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `nama_website` varchar(255) NOT NULL,
  `tagline` varchar(255) NOT NULL,
  `status_website` varchar(1) NOT NULL,
  `pesan_offline` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`nama_website`, `tagline`, `status_website`, `pesan_offline`) VALUES
('Zenformatika', 'asdfasdgasd', '1', 'Your Website Is Under Maintenance');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id_tags` int(11) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id_tags`, `tags`, `deskripsi`, `slug`) VALUES
(1, 'android', '                                            asdgasdgas                                        ', ''),
(2, 'Apple', '', ''),
(3, 'Microsoft', '', ''),
(4, 'Samsung', '', ''),
(5, 'PC Game', '', ''),
(6, 'Mobile Game', '', ''),
(7, 'Web', '', ''),
(8, 'Iphone', '', ''),
(9, 'google', '', ''),
(10, 'firefox', '', ''),
(11, 'php', '', ''),
(12, 'jquery', '', ''),
(13, 'JavaScript', '', ''),
(14, 'apache', '', ''),
(15, 'database', '', ''),
(16, 'mysql', '', ''),
(17, 'SQLServer', '', ''),
(18, 'software', '', ''),
(19, 'hardware', '', ''),
(20, 'modding', '', ''),
(21, 'lcd', '', ''),
(22, 'xiaomi', '', ''),
(23, 'asus', '', ''),
(24, 'sound', '', ''),
(25, 'seagate', '', ''),
(26, 'redmi', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `web_setting`
--

CREATE TABLE `web_setting` (
  `nama` varchar(50) NOT NULL,
  `status` varchar(1) NOT NULL,
  `pesan` text NOT NULL,
  `list` varchar(4) NOT NULL,
  `feed` varchar(4) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama_email` varchar(255) NOT NULL,
  `smtp_host` varchar(255) NOT NULL,
  `smtp_port` varchar(8) NOT NULL,
  `smtp_user` varchar(255) NOT NULL,
  `smtp_password` varchar(255) NOT NULL,
  `last_update` datetime NOT NULL,
  `update_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_setting`
--

INSERT INTO `web_setting` (`nama`, `status`, `pesan`, `list`, `feed`, `email`, `nama_email`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_password`, `last_update`, `update_by`) VALUES
('berubah', '0', 'Testing Aja Dulu Broh', '100', '100', 'admin@zenformatika.com', 'Administrator', 'localhost', '4430', 'admin@locahost', 'MTIz', '2018-02-26 18:43:08', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `m_admin`
--
ALTER TABLE `m_admin`
  ADD PRIMARY KEY (`userid`,`email`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id_tags`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_admin`
--
ALTER TABLE `m_admin`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id_tags` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
