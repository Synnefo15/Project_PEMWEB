-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2021 at 05:45 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemwebprojek`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(4) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`) VALUES
(1, 'beras'),
(2, 'daging'),
(3, 'telur');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id` int(4) NOT NULL,
  `nama_kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id`, `nama_kota`, `provinsi`) VALUES
(1, 'lumajang', 'jawa timur'),
(2, 'jember', 'jawa timur'),
(3, 'Surabaya', 'Jawa timur'),
(4, 'Pasuruan', 'Jawa timur'),
(5, 'Mojokerto', 'Jawa timur'),
(6, 'Kediri', 'Jawa timur'),
(7, 'Malang', 'Jawa timur'),
(8, 'Probolinggo', 'Jawa timur'),
(9, 'Ngawi', 'Jawa timur'),
(10, 'Madiun', 'Jawa timur');

-- --------------------------------------------------------

--
-- Table structure for table `pangan`
--

CREATE TABLE `pangan` (
  `id` int(11) NOT NULL,
  `komoditas` varchar(50) NOT NULL,
  `kategori` int(4) NOT NULL,
  `kota` int(4) DEFAULT NULL,
  `harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pangan`
--

INSERT INTO `pangan` (`id`, `komoditas`, `kategori`, `kota`, `harga`) VALUES
(10, 'Beras Kualitas Bawah I (kg)', 1, 1, 11),
(11, 'Beras Kualitas Medium I (kg)', 1, 1, 11),
(12, 'Beras Kualitas Super I (kg)', 1, 1, 13),
(13, 'Beras Kualitas Bawah I (kg)', 1, 2, 11),
(14, 'Beras Kualitas Medium I (kg)', 1, 2, 11),
(15, 'Beras Kualitas Super I (kg)', 1, 2, 13),
(16, 'Beras Kualitas Bawah I (kg)', 1, 3, 11),
(17, 'Beras Kualitas Medium I (kg)', 1, 3, 11),
(18, 'Beras Kualitas Super I (kg)', 1, 3, 13),
(19, 'Beras Kualitas Bawah I (kg)', 1, 4, 11),
(20, 'Beras Kualitas Medium I (kg)', 1, 4, 11),
(21, 'Beras Kualitas Super I (kg)', 1, 4, 13),
(22, 'Beras Kualitas Bawah I (kg)', 1, 5, 11),
(23, 'Beras Kualitas Medium I (kg)', 1, 5, 11),
(24, 'Beras Kualitas Super I (kg)', 1, 5, 13),
(25, 'Beras Kualitas Bawah I (kg)', 1, 6, 11),
(26, 'Beras Kualitas Medium I (kg)', 1, 6, 11),
(27, 'Beras Kualitas Super I (kg)', 1, 6, 13),
(28, 'Beras Kualitas Bawah I (kg)', 1, 7, 11),
(29, 'Beras Kualitas Medium I (kg)', 1, 7, 11),
(30, 'Beras Kualitas Super I (kg)', 1, 7, 13),
(31, 'Beras Kualitas Bawah I (kg)', 1, 8, 11),
(32, 'Beras Kualitas Medium I (kg)', 1, 8, 11),
(33, 'Beras Kualitas Super I (kg)', 1, 8, 13),
(34, 'Beras Kualitas Bawah I (kg)', 1, 9, 11),
(35, 'Beras Kualitas Medium I (kg)', 1, 9, 11),
(36, 'Beras Kualitas Super I (kg)', 1, 9, 13),
(37, 'Beras Kualitas Bawah I (kg)', 1, 10, 11),
(38, 'Beras Kualitas Medium I (kg)', 1, 10, 11),
(39, 'Beras Kualitas Super I (kg)', 1, 10, 13),
(40, 'Daging Ayam', 2, 1, 37),
(41, 'Daging Ayam', 2, 2, 38),
(42, 'Daging Ayam', 2, 3, 38),
(43, 'Daging Ayam', 2, 4, 38),
(44, 'Daging Ayam', 2, 5, 38),
(45, 'Daging Ayam', 2, 6, 38),
(46, 'Daging Ayam', 2, 7, 38),
(47, 'Daging Ayam', 2, 8, 38),
(48, 'Daging Ayam', 2, 9, 38),
(49, 'Daging Ayam', 2, 10, 38),
(50, 'Daging Sapi kualitas I(kg)', 2, 1, 127),
(51, 'Daging Sapi Kualitas II(kg)', 2, 1, 119),
(52, 'Daging Sapi kualitas I(kg)', 2, 2, 127),
(53, 'Daging Sapi Kualitas II(kg)', 2, 2, 119),
(54, 'Daging Sapi kualitas I(kg)', 2, 3, 127),
(55, 'Daging Sapi Kualitas II(kg)', 2, 3, 119),
(56, 'Daging Sapi kualitas I(kg)', 2, 4, 127),
(57, 'Daging Sapi Kualitas II(kg)', 2, 4, 119),
(58, 'Daging Sapi kualitas I(kg)', 2, 5, 127),
(59, 'Daging Sapi Kualitas II(kg)', 2, 5, 119),
(60, 'Daging Sapi kualitas I(kg)', 2, 6, 127),
(61, 'Daging Sapi Kualitas II(kg)', 2, 6, 119),
(62, 'Daging Sapi kualitas I(kg)', 2, 7, 127),
(63, 'Daging Sapi Kualitas II(kg)', 2, 7, 119),
(64, 'Daging Sapi kualitas I(kg)', 2, 8, 127),
(65, 'Daging Sapi Kualitas II(kg)', 2, 8, 119),
(66, 'Daging Sapi kualitas I(kg)', 2, 9, 127),
(67, 'Daging Sapi Kualitas II(kg)', 2, 9, 119),
(68, 'Daging Sapi kualitas I(kg)', 2, 10, 127),
(69, 'Daging Sapi Kualitas II(kg)', 2, 10, 119),
(70, 'Telur Ayam (kg)', 3, 1, 26),
(71, 'Telur Ayam (kg)', 3, 2, 26),
(72, 'Telur Ayam (kg)', 3, 3, 26),
(73, 'Telur Ayam (kg)', 3, 4, 26),
(74, 'Telur Ayam (kg)', 3, 5, 26),
(75, 'Telur Ayam (kg)', 3, 6, 26),
(76, 'Telur Ayam (kg)', 3, 7, 26),
(77, 'Telur Ayam (kg)', 3, 8, 26),
(78, 'Telur Ayam (kg)', 3, 9, 26),
(79, 'Telur Ayam (kg)', 3, 10, 26);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pangan`
--
ALTER TABLE `pangan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kota` (`kota`),
  ADD KEY `pangan_ibfk_1` (`kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pangan`
--
ALTER TABLE `pangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pangan`
--
ALTER TABLE `pangan`
  ADD CONSTRAINT `pangan_ibfk_1` FOREIGN KEY (`kategori`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pangan_ibfk_2` FOREIGN KEY (`kota`) REFERENCES `kota` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
