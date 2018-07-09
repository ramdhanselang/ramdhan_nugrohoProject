-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2018 at 03:34 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project.uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `domisili`
--

CREATE TABLE `domisili` (
  `idDms` int(2) NOT NULL,
  `alamatDms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rtDms` int(2) NOT NULL,
  `rwDms` int(2) NOT NULL,
  `kelDms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecDms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kotaDms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provDms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kpDms` int(6) NOT NULL,
  `fkNimMhs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `domisili`
--

INSERT INTO `domisili` (`idDms`, `alamatDms`, `rtDms`, `rwDms`, `kelDms`, `kecDms`, `kotaDms`, `provDms`, `kpDms`, `fkNimMhs`) VALUES
(1, 'JL. Anthorium No.1A', 27, 2, 'Munggut', 'Wungu', 'Kab. Madiun', 'Jawa Timur', 63181, 1641720187),
(2, 'Lingkungan SKEP Kel. Salahuddin', 4, 1, 'Salahuddin', 'Koter Tengah', 'Ternate', 'Maluku Utara', 97722, 1641720137);

-- --------------------------------------------------------

--
-- Table structure for table `ipk`
--

CREATE TABLE `ipk` (
  `idIPK` int(11) NOT NULL,
  `jmlhIPK` decimal(3,2) NOT NULL,
  `fkNimMhs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ipk`
--

INSERT INTO `ipk` (`idIPK`, `jmlhIPK`, `fkNimMhs`) VALUES
(1, '3.63', 1641720187),
(2, '3.45', 1641720137);

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

CREATE TABLE `keluarga` (
  `idKlg` int(2) NOT NULL,
  `namaAyah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nikAyah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaIbu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nikIbu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fkNimMhs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keluarga`
--

INSERT INTO `keluarga` (`idKlg`, `namaAyah`, `nikAyah`, `namaIbu`, `nikIbu`, `fkNimMhs`) VALUES
(1, 'Andriyanto', '3577010707680001', 'Nursiyami', '3577016911700002', 1641720187),
(2, 'Sarif Selang', '8271032609700002', 'Hartati Mas\'ud', '8271035710740002', 1641720137);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nimMhs` int(11) NOT NULL,
  `namaMahasiswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tglLahirMhs` date NOT NULL,
  `kotaLahirMhs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NIKMhs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agamaMhs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jkMhs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohpMhs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailMhs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nimMhs`, `namaMahasiswa`, `tglLahirMhs`, `kotaLahirMhs`, `NIKMhs`, `agamaMhs`, `jkMhs`, `nohpMhs`, `emailMhs`) VALUES
(1641720137, 'Muhammad Ramdhan Selang', '1998-10-18', 'Ternate', '8271031810980001', 'Islam', 'Laki-laki', '+628113033810', 'danielvagenza@gmail.com'),
(1641720187, 'Nugroho Febriyanto', '1998-02-14', 'Magelang', '3577011402980001', 'Islam', 'Laki-laki', '+628819135627', 'nugrohofebriyanto15@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `matakulah`
--

CREATE TABLE `matakulah` (
  `idMK` int(3) NOT NULL,
  `namaMK` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sksMK` int(2) NOT NULL,
  `jamMK` int(2) NOT NULL,
  `nilaiMK` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smsMK` int(2) NOT NULL,
  `fkNimMhs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matakulah`
--

INSERT INTO `matakulah` (`idMK`, `namaMK`, `sksMK`, `jamMK`, `nilaiMK`, `smsMK`, `fkNimMhs`) VALUES
(1, 'Algoritma dan Struktur Data', 2, 4, 'A', 1, 1641720187),
(2, 'Aplikasi Komputer Perkantoran', 2, 3, 'B', 1, 1641720187),
(3, 'Dasar Internet dan Web', 3, 6, 'A', 1, 1641720187),
(4, 'Kesehatan dan Keselamatan Kerja', 2, 3, 'B+', 1, 1641720187),
(5, 'Matematika Informatika', 2, 4, 'B+', 1, 1641720187),
(6, 'Organisasi dan Arsitektur Komputer', 2, 4, 'B+', 1, 1641720187),
(7, 'Pancasila', 2, 3, 'B+', 1, 1641720187),
(8, 'Pengantar Teknologi Informasi', 2, 4, 'B+', 1, 1641720187),
(9, 'Praktikum Algoritma dan Struktur Data', 2, 6, 'A', 1, 1641720187),
(10, 'Kesehatan dan Keselamatan Kerja', 2, 3, 'B', 1, 1641720137),
(11, 'Matematika Informatika', 2, 4, 'B', 1, 1641720137),
(12, 'Organisasi dan Arsitektur Komputer', 2, 4, 'B', 1, 1641720137),
(13, 'Pancasila', 2, 3, 'B', 1, 1641720137),
(14, 'Pengantar Teknologi Informasi', 2, 4, 'A', 1, 1641720137),
(15, 'Praktikum Algoritma dan Struktur Data', 2, 6, 'A', 1, 1641720137),
(16, 'Algoritma dan Struktur Data', 2, 4, 'B+', 1, 1641720137),
(17, 'Aplikasi Komputer Perkantoran', 2, 4, 'B', 1, 1641720137),
(18, 'Dasar Internet dan Web', 3, 6, 'A', 1, 1641720137);

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `idSkl` int(3) NOT NULL,
  `namaSkl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusanSkl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nisnSkl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilaiUNskl` decimal(5,2) NOT NULL,
  `jmlhMPSkl` int(2) NOT NULL,
  `rtUNSkl` decimal(4,2) NOT NULL,
  `fkNimMhs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`idSkl`, `namaSkl`, `jurusanSkl`, `nisnSkl`, `nilaiUNskl`, `jmlhMPSkl`, `rtUNSkl`, `fkNimMhs`) VALUES
(1, 'SMA Negeri 5 Madiun', 'IPA', '9981322612', '300.50', 6, '50.10', 1641720187),
(2, 'SMK PGRI 3 Malang', 'Rekayasa Perangkat Lunak', '8271031810980001', '208.50', 4, '50.50', 1641720137);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(2) NOT NULL,
  `levelUser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passwordUser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usernameUser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `levelUser`, `passwordUser`, `usernameUser`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'user', 'b84a0b912cf648fe28df3c82d96148f8', 'Nugroho'),
(3, 'user', 'df901a7267dc3beb10fde481d2636ca2', 'Ramdhan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `domisili`
--
ALTER TABLE `domisili`
  ADD PRIMARY KEY (`idDms`),
  ADD KEY `domisili_ibfk_1` (`fkNimMhs`);

--
-- Indexes for table `ipk`
--
ALTER TABLE `ipk`
  ADD PRIMARY KEY (`idIPK`),
  ADD KEY `fkNimMhs` (`fkNimMhs`);

--
-- Indexes for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`idKlg`),
  ADD KEY `keluarga_ibfk_1` (`fkNimMhs`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nimMhs`);

--
-- Indexes for table `matakulah`
--
ALTER TABLE `matakulah`
  ADD PRIMARY KEY (`idMK`),
  ADD KEY `matakulah_ibfk_1` (`fkNimMhs`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`idSkl`),
  ADD KEY `sekolah_ibfk_1` (`fkNimMhs`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `domisili`
--
ALTER TABLE `domisili`
  MODIFY `idDms` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ipk`
--
ALTER TABLE `ipk`
  MODIFY `idIPK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `keluarga`
--
ALTER TABLE `keluarga`
  MODIFY `idKlg` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `matakulah`
--
ALTER TABLE `matakulah`
  MODIFY `idMK` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `idSkl` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `domisili`
--
ALTER TABLE `domisili`
  ADD CONSTRAINT `domisili_ibfk_1` FOREIGN KEY (`fkNimMhs`) REFERENCES `mahasiswa` (`nimMhs`);

--
-- Constraints for table `ipk`
--
ALTER TABLE `ipk`
  ADD CONSTRAINT `ipk_ibfk_1` FOREIGN KEY (`fkNimMhs`) REFERENCES `mahasiswa` (`nimMhs`);

--
-- Constraints for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD CONSTRAINT `keluarga_ibfk_1` FOREIGN KEY (`fkNimMhs`) REFERENCES `mahasiswa` (`nimMhs`);

--
-- Constraints for table `matakulah`
--
ALTER TABLE `matakulah`
  ADD CONSTRAINT `matakulah_ibfk_1` FOREIGN KEY (`fkNimMhs`) REFERENCES `mahasiswa` (`nimMhs`);

--
-- Constraints for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD CONSTRAINT `sekolah_ibfk_1` FOREIGN KEY (`fkNimMhs`) REFERENCES `mahasiswa` (`nimMhs`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
