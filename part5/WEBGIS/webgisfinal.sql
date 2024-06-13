-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2024 at 07:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webgisfinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_kabupaten`
--

CREATE TABLE `m_kabupaten` (
  `id_kabupaten` int(10) NOT NULL,
  `k_wilayah` varchar(50) NOT NULL,
  `nm_daerah` varchar(50) NOT NULL,
  `daerah_induk` text NOT NULL,
  `ibu_kota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_kabupaten`
--

INSERT INTO `m_kabupaten` (`id_kabupaten`, `k_wilayah`, `nm_daerah`, `daerah_induk`, `ibu_kota`) VALUES
(1, '62.05', 'Kabupaten Barito Utara ', '-', 'Muara Teweh'),
(2, '212312', 'dasdas', 'fcadfa', 'asda'),
(3, '34234', 'wrwer', 'sdfs', 'sfwers');

-- --------------------------------------------------------

--
-- Table structure for table `m_pengguna`
--

CREATE TABLE `m_pengguna` (
  `id_pengguna` int(10) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `e_pengguna` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `m_pengguna`
--

INSERT INTO `m_pengguna` (`id_pengguna`, `nama_pengguna`, `e_pengguna`, `password`, `level`) VALUES
(1, 'Muhammad Rifky Irsada', 'rifkyirsada@gmail.co', '1234', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(10) NOT NULL,
  `nm_pengguna` varchar(25) NOT NULL,
  `kt_sandi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nm_pengguna`, `kt_sandi`) VALUES
(1, 'admin', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_kabupaten`
--
ALTER TABLE `m_kabupaten`
  ADD PRIMARY KEY (`id_kabupaten`);

--
-- Indexes for table `m_pengguna`
--
ALTER TABLE `m_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_kabupaten`
--
ALTER TABLE `m_kabupaten`
  MODIFY `id_kabupaten` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `m_pengguna`
--
ALTER TABLE `m_pengguna`
  MODIFY `id_pengguna` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
