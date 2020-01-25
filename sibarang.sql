-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 20, 2018 at 04:32 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sibarang`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kd_barang` varchar(5) NOT NULL,
  `nm_barang` varchar(25) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kd_barang`, `nm_barang`, `merk`, `harga`, `jumlah`, `foto`) VALUES
('B0001', 'TV', 'Sony', 3500000, 18, 'tv_sony.jpg'),
('B0002', 'Kulkas', 'Samsung', 1500000, 25, 'kulkas_samsung.jpg'),
('B0003', 'AC', 'Hitachi', 5000000, 15, 'ac_hitachi.jpg'),
('B0004', 'Mesin Cuci', 'Panasonic', 2500000, 13, 'mesincuci_panasonic.jpg'),
('B0005', 'Kipas Angin', 'Panasonic', 1000000, 17, 'kipasangin_panasonic.jpg'),
('B0006', 'TV', 'Samsung', 4000000, 28, 'tv_samsung.jpg'),
('B0007', 'Kulkas', 'Sanyo', 4500000, 46, 'kulkas_sanyo.jpg'),
('B0008', 'AC', 'Sharp', 6000000, 17, 'ac_sharp.jpg'),
('B0009', 'Mesin Cuci', 'Samsung', 2800000, 11, 'mesincuci_samsung.jpg'),
('B0010', 'Kipas Angin', 'Cosmos', 1000000, 26, 'kipasangin_cosmos.jpg'),
('B0011', 'TV', 'Sharp', 1500000, 20, 'tv_sharp.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `nik` varchar(4) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `bagian` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`nik`, `nama`, `alamat`, `bagian`) VALUES
('G-01', 'Bayu', 'Kemang Timur', 'Kabag Gudang'),
('G-02', 'Faishal', 'Taman Bougenvile', 'Staff Gudang'),
('G-03', 'Farid ', 'Mustika Jaya', 'Staff Gudang'),
('K-01', 'Indra ', 'Kemang Pratama', 'Kabag Keuangan'),
('K-02', 'Yanti', 'Taman Cikunir Indah', 'Staff Keuangan'),
('K-03', 'Haris', 'Pancoran', 'Staff Keuangan'),
('M-01', 'Rafli', 'Narogong', 'Direktur'),
('P-01', 'Fadhil', 'Jatibening Estate', 'Kabag Pemasaran'),
('P-02', 'Alvin', 'Pondok Gede', 'Staff Pemasaran'),
('P-03', 'Vina', 'Pondok Ungu', 'Staff Pemasaran');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `iduser` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`iduser`, `username`, `password`) VALUES
(1, 'ibnu', 'ibnu194'),
(2, 'farid', 'farid123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kd_barang`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`iduser`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
