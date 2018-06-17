-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2018 at 12:59 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_loker`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_perusahaan`
--

CREATE TABLE `jenis_perusahaan` (
  `idJenisPerusahaan` int(11) NOT NULL,
  `jenisPerusahaan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_perusahaan`
--

INSERT INTO `jenis_perusahaan` (`idJenisPerusahaan`, `jenisPerusahaan`) VALUES
(1, 'manufaktur'),
(2, 'dagang');

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `id_lowongan` int(11) NOT NULL,
  `lowongan` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `persyaratan` varchar(255) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `tanggal_post` date NOT NULL,
  `status` enum('buka','tutup') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `idMember` int(11) NOT NULL,
  `namaMember` varchar(100) NOT NULL,
  `jenisKelamin` enum('L','P') NOT NULL,
  `tanggalLahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `noTelp` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fotoMember` varchar(25) NOT NULL,
  `fkUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`idMember`, `namaMember`, `jenisKelamin`, `tanggalLahir`, `agama`, `alamat`, `noTelp`, `email`, `fotoMember`, `fkUser`) VALUES
(1, 'Bambang', 'L', '1996-04-12', 'islam', 'bojonegoro', '085233825415', 'bambang143@gmail.com', '1.jpg', 1),
(2, 'Muhammad Santo', 'L', '1995-04-26', 'islam', 'Bondowoso', '082323443213', 'msanto@gmail.com', '2.jpg', 2),
(3, 'Yulia Rahmawati', 'P', '1996-05-16', 'islam', 'malang', '085432754876', 'yuliar32@gmail.com', '3.jpg', 3),
(4, 'Sintya Kusumawati', 'P', '1995-01-09', 'kristen', 'malang', '083223223432', 'kusumasintya@gmail.com', '4.jpg', 0),
(5, 'coba sam', 'L', '2018-03-03', 'islam', 'lol', '089', 'a@coba', 'monster.png', 26);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id_pendaftar` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `cv` varchar(50) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `status` enum('baru','lolos','tidak lolos') NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `idPerusahaan` int(11) NOT NULL,
  `namaPerusahaan` varchar(25) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `noTelp` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `fax` varchar(12) NOT NULL,
  `visi` varchar(255) NOT NULL,
  `misi` varchar(255) NOT NULL,
  `tahunBerdiri` date NOT NULL,
  `idJenisPerusahaan` int(11) NOT NULL,
  `foto` varchar(25) NOT NULL,
  `fkUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`idPerusahaan`, `namaPerusahaan`, `alamat`, `noTelp`, `email`, `website`, `fax`, `visi`, `misi`, `tahunBerdiri`, `idJenisPerusahaan`, `foto`, `fkUser`) VALUES
(1, 'G4 indonesia', 'asdasd', '0989', 'fahrul4215@gmail.com', 'asdasd', '09809', 'dsada', 'dasdasd', '0000-00-00', 1, 'logo.jpg', 31);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
