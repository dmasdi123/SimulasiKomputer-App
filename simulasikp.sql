-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2021 at 03:59 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simulasikp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_adm` int(11) NOT NULL,
  `username` varchar(254) DEFAULT NULL,
  `password` int(11) DEFAULT NULL,
  `nama_admin` varchar(254) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `no_hp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kat` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kat`) VALUES
(0, 'Prosessor Intel'),
(1, 'Ram'),
(2, 'Motherboard Intel'),
(3, 'Prosessor AMD'),
(4, 'Motherboard AMD'),
(5, 'VGA'),
(6, 'PSU'),
(7, 'HDD'),
(8, 'SSD'),
(9, 'Case'),
(10, 'Cooler'),
(11, 'Peripheral'),
(12, 'Monitor');

-- --------------------------------------------------------

--
-- Table structure for table `master_barang`
--

CREATE TABLE `master_barang` (
  `id_barang` int(11) NOT NULL,
  `id_adm` int(11) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `nama_barang` varchar(254) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `harga_beli` decimal(8,0) DEFAULT NULL,
  `harga_jual` decimal(8,0) DEFAULT NULL,
  `tgl_input` date DEFAULT NULL,
  `power` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_barang`
--

INSERT INTO `master_barang` (`id_barang`, `id_adm`, `id_kategori`, `nama_barang`, `qty`, `harga_beli`, `harga_jual`, `tgl_input`, `power`, `created_at`, `updated_at`) VALUES
(1, NULL, 0, 'Intel Core i3-10100f', 1, '1700000', '2300000', '2021-05-02', NULL, NULL, NULL),
(2, NULL, 1, 'Geil Evo 8x2 16GB', 1, '790000', '1300000', '2021-05-04', NULL, NULL, NULL),
(3, NULL, 2, 'MSI B460M Mortal', 1, '1700000', '1545000', '2021-05-04', NULL, NULL, NULL),
(4, NULL, 3, 'AMD Ryzen 3 3200G', 2, '790000', '2000000', '2021-05-04', NULL, NULL, NULL),
(5, NULL, 4, 'MSI B550M Pro Wifi', 2, '790000', '1750000', '2021-05-04', NULL, NULL, NULL),
(6, NULL, 1, 'VGEN Tsunami 4x2 8GB 2666 DDR4', 2, '790000', '990000', '2021-05-06', NULL, NULL, NULL),
(7, NULL, 5, 'Galax Geforce RTX 3060 12GB', 2, '11000000', '14000000', '2021-05-06', NULL, NULL, NULL),
(8, NULL, 6, 'Aerocool Lux 650W RGB Semi Modular 80+ Bronze', 2, '550000', '650000', '2021-05-06', NULL, NULL, NULL),
(9, NULL, 7, 'Seagate 1TB Sata3', 2, '595000', '650000', '2021-05-10', NULL, NULL, NULL),
(10, NULL, 8, 'Colorful SL300 120GB', 3, '280000', '330000', '2021-05-10', NULL, NULL, NULL),
(11, NULL, 9, 'DarkFlash DLM21 Mesh - Tempered Glass - Matx', 4, '400000', '500000', '2021-05-10', NULL, NULL, NULL),
(12, NULL, 10, 'Alesye TBF-100 RGB Fan Processor', 4, '90000', '100000', '2021-05-10', NULL, NULL, NULL),
(13, NULL, 11, 'TP-Link Wireless Wifi USB', 10, '50000', '75000', '2021-05-10', NULL, NULL, NULL),
(14, NULL, 12, 'LED LG 24MK600 HDMI 75hz', 4, '1300000', '1600000', '2021-05-10', NULL, NULL, NULL),
(15, NULL, 4, 'ASRock X570 Phantom Gaming X', 2, '1200000', '1400000', NULL, NULL, '2021-05-18 11:44:56', '2021-05-18 11:44:56');

-- --------------------------------------------------------

--
-- Table structure for table `nota_simulasi`
--

CREATE TABLE `nota_simulasi` (
  `id_notas` int(11) NOT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `no_nota` varchar(254) DEFAULT NULL,
  `nama_brg` varchar(254) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `harga_jual` double DEFAULT NULL,
  `tgl_input` date DEFAULT NULL,
  `customer` varchar(254) DEFAULT NULL,
  `notelp` varchar(50) DEFAULT NULL,
  `alamat` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nota_simulasi`
--

INSERT INTO `nota_simulasi` (`id_notas`, `id_barang`, `no_nota`, `nama_brg`, `qty`, `harga_jual`, `tgl_input`, `customer`, `notelp`, `alamat`) VALUES
(6, 1, 'SM/MTK/6', 'Intel Core i3-10100f', 2, 4600000, '2021-05-19', NULL, NULL, NULL),
(7, 3, 'SM/MTK/6', 'MSI B460M Mortal', 2, 3090000, '2021-05-19', NULL, NULL, NULL),
(8, 2, 'SM/MTK/6', 'Geil Evo 8x2 16GB', 2, 2600000, '2021-05-19', NULL, NULL, NULL),
(9, 7, 'SM/MTK/6', 'Galax Geforce RTX 3060 12GB', 2, 28000000, '2021-05-19', NULL, NULL, NULL),
(10, 8, 'SM/MTK/6', 'Aerocool Lux 650W RGB Semi Modular 80+ Bronze', 2, 1300000, '2021-05-19', NULL, NULL, NULL),
(11, 9, 'SM/MTK/6', 'Seagate 1TB Sata3', 2, 1300000, '2021-05-19', NULL, NULL, NULL),
(12, 10, 'SM/MTK/6', 'Colorful SL300 120GB', 2, 660000, '2021-05-19', NULL, NULL, NULL),
(13, 11, 'SM/MTK/6', 'DarkFlash DLM21 Mesh - Tempered Glass - Matx', 2, 1000000, '2021-05-19', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_pj` int(11) NOT NULL,
  `id_adm` int(11) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `id_notas` int(11) DEFAULT NULL,
  `invoice` int(11) DEFAULT NULL,
  `nama_brg` varchar(254) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `harga_jual` decimal(8,0) DEFAULT NULL,
  `tgl_input` date DEFAULT NULL,
  `cutomer` varchar(254) DEFAULT NULL,
  `notelp` int(11) DEFAULT NULL,
  `alamat` varchar(254) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_pj`, `id_adm`, `id_barang`, `id_notas`, `invoice`, `nama_brg`, `qty`, `harga_jual`, `tgl_input`, `cutomer`, `notelp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, NULL, NULL, 'Intel Core i3-10100f', 2, '4600000', NULL, NULL, NULL, NULL, '2021-05-19 12:25:27', '2021-05-19 12:25:27'),
(2, NULL, 3, NULL, NULL, 'MSI B460M Mortal', 2, '3090000', NULL, NULL, NULL, NULL, '2021-05-19 12:25:27', '2021-05-19 12:25:27'),
(3, NULL, 2, NULL, NULL, 'Geil Evo 8x2 16GB', 2, '2600000', NULL, NULL, NULL, NULL, '2021-05-19 12:25:27', '2021-05-19 12:25:27'),
(4, NULL, 7, NULL, NULL, 'Galax Geforce RTX 3060 12GB', 2, '28000000', NULL, NULL, NULL, NULL, '2021-05-19 12:25:27', '2021-05-19 12:25:27'),
(5, NULL, 8, NULL, NULL, 'Aerocool Lux 650W RGB Semi Modular 80+ Bronze', 2, '1300000', NULL, NULL, NULL, NULL, '2021-05-19 12:25:27', '2021-05-19 12:25:27'),
(6, NULL, 9, NULL, NULL, 'Seagate 1TB Sata3', 2, '1300000', NULL, NULL, NULL, NULL, '2021-05-19 12:25:27', '2021-05-19 12:25:27'),
(7, NULL, 10, NULL, NULL, 'Colorful SL300 120GB', 2, '660000', NULL, NULL, NULL, NULL, '2021-05-19 12:25:27', '2021-05-19 12:25:27'),
(8, NULL, 11, NULL, NULL, 'DarkFlash DLM21 Mesh - Tempered Glass - Matx', 2, '1000000', NULL, NULL, NULL, NULL, '2021-05-19 12:25:27', '2021-05-19 12:25:27');

-- --------------------------------------------------------

--
-- Table structure for table `test_simulasi`
--

CREATE TABLE `test_simulasi` (
  `id_sm` int(11) NOT NULL,
  `inv` varchar(256) DEFAULT NULL,
  `nm_barang` varchar(256) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `harga` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `master_barang`
--
ALTER TABLE `master_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `FK_MASTER_B_RELATIONS_KATEGORI` (`id_kategori`),
  ADD KEY `FK_MASTER_B_RELATIONS_ADMIN` (`id_adm`);

--
-- Indexes for table `nota_simulasi`
--
ALTER TABLE `nota_simulasi`
  ADD PRIMARY KEY (`id_notas`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_pj`),
  ADD KEY `FK_PENJUALA_RELATIONS_MASTER_B` (`id_barang`),
  ADD KEY `FK_PENJUALA_RELATIONS_ADMIN` (`id_adm`),
  ADD KEY `FK_PENJUALA_RELATIONS_NOTA_SIM` (`id_notas`);

--
-- Indexes for table `test_simulasi`
--
ALTER TABLE `test_simulasi`
  ADD PRIMARY KEY (`id_sm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_pj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `test_simulasi`
--
ALTER TABLE `test_simulasi`
  MODIFY `id_sm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `master_barang`
--
ALTER TABLE `master_barang`
  ADD CONSTRAINT `FK_MASTER_B_RELATIONS_ADMIN` FOREIGN KEY (`id_adm`) REFERENCES `admin` (`id_adm`),
  ADD CONSTRAINT `FK_MASTER_B_RELATIONS_KATEGORI` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `FK_PENJUALA_RELATIONS_ADMIN` FOREIGN KEY (`id_adm`) REFERENCES `admin` (`id_adm`),
  ADD CONSTRAINT `FK_PENJUALA_RELATIONS_MASTER_B` FOREIGN KEY (`id_barang`) REFERENCES `master_barang` (`id_barang`),
  ADD CONSTRAINT `FK_PENJUALA_RELATIONS_NOTA_SIM` FOREIGN KEY (`id_notas`) REFERENCES `nota_simulasi` (`id_notas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
