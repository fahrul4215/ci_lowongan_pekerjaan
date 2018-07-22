-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2018 at 09:09 PM
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
(2, 'dagang'),
(3, 'lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_pekerjaan`
--

CREATE TABLE `kategori_pekerjaan` (
  `idKategori` int(11) NOT NULL,
  `namaKategori` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_pekerjaan`
--

INSERT INTO `kategori_pekerjaan` (`idKategori`, `namaKategori`, `gambar`) VALUES
(1, 'Accounting', 'o1.png'),
(2, 'Development', 'o2.png'),
(3, 'Teknologi', 'o3.png'),
(4, 'Media Massa', 'o4.png'),
(5, 'Kesehatan', 'o5.png'),
(6, 'Pemerintahan', 'o6.png');

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `idLowongan` int(11) NOT NULL,
  `lowongan` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `persyaratan` varchar(255) NOT NULL,
  `idPerusahaan` int(11) NOT NULL,
  `tglPost` date NOT NULL,
  `status` enum('buka','tutup') NOT NULL,
  `gaji` bigint(20) NOT NULL,
  `kota` varchar(25) NOT NULL,
  `jamKerja` enum('0','1','2') NOT NULL,
  `kuota` int(11) NOT NULL,
  `fkKategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lowongan`
--

INSERT INTO `lowongan` (`idLowongan`, `lowongan`, `deskripsi`, `persyaratan`, `idPerusahaan`, `tglPost`, `status`, `gaji`, `kota`, `jamKerja`, `kuota`, `fkKategori`) VALUES
(1, 'Junior Programmer', 'Dibutuhkan junior programmer yang dapat bekerja full time di bagian web development', 'lulusan sma/sederajat\numur diatas 17 tahun\nlaki2/perempuan\nsingle', 1, '2018-06-20', 'buka', 500000, 'Malang', '0', 1, 3),
(2, 'Senior Programmer', 'Dibutuhkan senior programmer pada divisi web development', 'menguasai framework ci\r\nlulusan s1', 1, '2018-06-28', 'buka', 1000000, 'Malang', '1', 3, 3),
(4, 'Pekerja LOL', 'Pekerjaan yang LOL sekali :v', 'Harus LOL lah\nDiutamakan Orang LOL', 2, '2018-07-10', 'buka', 10001, 'Malang', '0', 2, 4);

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
(2, 'Muhammad Santo', 'L', '1995-04-26', 'islam', 'Bondowoso 8991', '082323443213', 'masssanto@gmail.com', 'ss_night_job.PNG', 2),
(3, 'Yulia Rahmawati', 'P', '1996-05-16', 'islam', 'malang', '085432754876', 'yuliar32@gmail.com', '3.jpg', 3),
(4, 'Sintya Kusumawati', 'P', '1995-01-09', 'kristen', 'malang', '083223223432', 'kusumasintya@gmail.com', '4.jpg', 7),
(6, 'Muchammad Fahrul Yurisnan', 'L', '1998-03-03', 'islam', 'jl. jaksa agung suprapto gg. 1b no. 197', '082232221741', 'fahrul4215@gmail.com', '~PP1.jpg', 8);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `idPendaftar` int(11) NOT NULL,
  `idMember` int(11) NOT NULL,
  `idLowongan` int(11) NOT NULL,
  `tglDaftar` date NOT NULL,
  `cv` varchar(100) NOT NULL,
  `statusDaftar` enum('baru','lolos','tidak lolos') NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`idPendaftar`, `idMember`, `idLowongan`, `tglDaftar`, `cv`, `statusDaftar`, `keterangan`) VALUES
(10, 4, 4, '2018-07-22', '1_4-SKKNI-Pemrograman.pdf', 'lolos', 'Terverifikasi'),
(11, 2, 4, '2018-07-22', 'Modul_Praktikum_12_-_Hotspot_Pada_Mikrotik.pdf', 'tidak lolos', 'Terverifikasi'),
(12, 2, 2, '2018-07-22', 'welcome-1531107515.pdf', 'baru', 'Belum di verifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `idPerusahaan` int(11) NOT NULL,
  `namaPerusahaan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noTelp` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahunBerdiri` date NOT NULL,
  `idJenisPerusahaan` int(11) NOT NULL,
  `fotoPerusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fkUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`idPerusahaan`, `namaPerusahaan`, `alamat`, `noTelp`, `email`, `website`, `visi`, `misi`, `tahunBerdiri`, `idJenisPerusahaan`, `fotoPerusahaan`, `fkUser`) VALUES
(1, 'G4 Indonesia', 'Jalan Jaksa Agung Suprapto', '08971251007', 'g4indonesia@gmail.com', 'g4.id', '  terbaik ', '  terdepan terpercaya', '2010-06-01', 1, 'lol.jpg', 3),
(2, 'PT. LOL', 'jalan lol', '123456789012', 'lol@lol.lol', 'www.lol.com', 'lol lah', 'lol lah', '2017-06-28', 2, 'lol.jpg', 4),
(3, 'Ngalam Kuliner', 'Jalan Ngalam Rumit', '08971251007', 'ngalamkuliner@gmail.com', 'ngalamkuliner.com', 'Salam Satu Jiwa', 'Mantap Jiwa', '2015-12-31', 2, 'logo1.jpg', 6);

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
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 2),
(3, 'perusahaan', 'ee11cbb19052e40b07aac0ca060c23ee', 3),
(4, 'lol', '9cdfb439c7876e703e307864c9167a15', 3),
(5, 'pol', '627a1f8f3e1f8a2a0cbb9aedc33ade8c', 2),
(6, 'coba', 'c3ec0f7b054e729c5a716c8125839829', 3),
(7, 'paul', '6c63212ab48e8401eaf6b59b95d816a9', 2),
(8, 'fahrul', '9b5317575f071bdccef2175b72191004', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_perusahaan`
--
ALTER TABLE `jenis_perusahaan`
  ADD PRIMARY KEY (`idJenisPerusahaan`);

--
-- Indexes for table `kategori_pekerjaan`
--
ALTER TABLE `kategori_pekerjaan`
  ADD PRIMARY KEY (`idKategori`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`idLowongan`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`idMember`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`idPendaftar`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`idPerusahaan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_perusahaan`
--
ALTER TABLE `jenis_perusahaan`
  MODIFY `idJenisPerusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori_pekerjaan`
--
ALTER TABLE `kategori_pekerjaan`
  MODIFY `idKategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `idLowongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `idMember` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `idPendaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `idPerusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
