-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 20, 2019 at 01:40 AM
-- Server version: 10.0.38-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mule7148_spk_jurusan_saw`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_user` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_user`, `username`, `password`, `nama`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Teguh Hamdani');

-- --------------------------------------------------------

--
-- Table structure for table `calonsiswa`
--

CREATE TABLE `calonsiswa` (
  `id_siswa` varchar(10) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `nama_asal_sekolah` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calonsiswa`
--

INSERT INTO `calonsiswa` (`id_siswa`, `nama_siswa`, `nama_asal_sekolah`) VALUES
('CPB-000001', 'Bintang', 'SMP S Sungai Putih'),
('CPB-000002', 'Bobi', 'SMP N 9 Pekanbaru'),
('CPB-000003', 'Tito Novyantara', 'MTs Negeri 2 Pekanbaru'),
('CPB-000004', 'Jabbar', 'SMP S Sungai Putih'),
('CPB-000005', 'Jeng-Jeng', 'SMP N 17 Pekanbaru');

-- --------------------------------------------------------

--
-- Table structure for table `himpunan`
--

CREATE TABLE `himpunan` (
  `id_himpunan` int(5) NOT NULL,
  `id_kriteria` int(5) NOT NULL,
  `namahimpunan` varchar(100) NOT NULL,
  `nilai` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `himpunan`
--

INSERT INTO `himpunan` (`id_himpunan`, `id_kriteria`, `namahimpunan`, `nilai`, `keterangan`) VALUES
(1, 1, 'Nilai â‰¤ 55', '1', 'Sangat Kurang'),
(2, 1, 'Nilai 56-65', '2', 'Kurang'),
(3, 1, 'Nilai 66-70', '3', 'Cukup'),
(4, 1, 'Nilai 71-85', '4', 'Baik'),
(5, 1, 'Nilai 86-100', '5', 'Sangat Baik'),
(6, 2, 'Nilai â‰¤ 55', '1', 'Sangat Kurang'),
(7, 2, 'Nilai 56-65', '2', 'Kurang'),
(8, 2, 'Nilai 66-70', '3', 'Cukup'),
(9, 2, 'Nilai 71-85', '4', 'Baik'),
(10, 2, 'Nilai 86-100', '5', 'Sangat Baik'),
(11, 3, 'Nilai â‰¤ 55', '1', 'Sangat Kurang'),
(12, 3, 'Nilai 56-65', '2', 'Kurang'),
(13, 3, 'Nilai 66-70', '3', 'Cukup'),
(14, 3, 'Nilai 71-85', '4', 'Baik'),
(15, 3, 'Nilai 86-100', '5', 'Sangat Baik'),
(16, 4, 'Nilai â‰¤ 55', '1', 'Sangat Kurang'),
(17, 4, 'Nilai 56-65', '2', 'Kurang'),
(18, 4, 'Nilai 66-70', '3', 'Cukup'),
(19, 4, 'Nilai 71-85', '4', 'Baik'),
(20, 4, 'Nilai 86-100', '5', 'Sangat Baik'),
(21, 5, 'Nilai â‰¤ 55', '1', 'Sangat Kurang'),
(22, 5, 'Nilai 56-65', '2', 'Kurang'),
(23, 5, 'Nilai 66-70', '3', 'Cukup'),
(24, 5, 'Nilai 71-85', '4', 'Baik'),
(25, 5, 'Nilai 86-100', '5', 'Sangat Baik'),
(26, 6, 'Tidak Minat Jurusan Ini', '1', 'Tidak Minat'),
(27, 6, 'Kurang Minat Jurusan Ini', '2', 'Kurang Minat'),
(28, 6, 'Cukup Minat Jurusan Ini', '3', 'Cukup Minat'),
(29, 6, 'Minat Jurusan Ini', '4', 'Minat'),
(30, 6, 'Sangat Minat Jurusan Ini', '5', 'Sangat Minat'),
(31, 7, 'Tidak Minat Jurusan Ini', '1', 'Tidak Minat'),
(32, 7, 'Kurang Minat Jurusan Ini', '2', 'Kurang Minat'),
(33, 7, 'Cukup Minat Jurusan Ini', '3', 'Cukup Minat'),
(34, 7, 'Minat Jurusan Ini', '4', 'Minat'),
(35, 7, 'Sangat Minat Jurusan Ini', '5', 'Sangat Minat'),
(36, 8, 'Tidak Minat Jurusan Ini', '1', 'Tidak Minat'),
(37, 8, 'Kurang Minat Jurusan Ini', '2', 'Kurang Minat'),
(38, 8, 'Cukup Minat Jurusan Ini', '3', 'Cukup Minat'),
(39, 8, 'Minat Jurusan Ini', '4', 'Minat'),
(40, 8, 'Sangat Minat Jurusan Ini', '5', 'Sangat Minat'),
(41, 9, 'Tidak Minat Jurusan Ini', '1', 'Tidak Minat'),
(42, 9, 'Kurang Minat Jurusan Ini', '2', 'Kurang Minat'),
(43, 9, 'Cukup Minat Jurusan Ini', '3', 'Cukup Minat'),
(44, 9, 'Minat Jurusan Ini', '4', 'Minat'),
(45, 9, 'Sangat Minat Jurusan Ini', '5', 'Sangat Minat');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(10) NOT NULL,
  `kode_jurusan` varchar(50) NOT NULL DEFAULT '0',
  `nama_jurusan` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `kode_jurusan`, `nama_jurusan`) VALUES
(1, 'TKJ', 'Teknik Komputer dan Jaringan'),
(2, 'TAV', 'Teknik Audio Video'),
(3, 'TAB', 'Teknik Alat Berat'),
(4, 'TITL', 'Teknik Instalasi Listrik');

-- --------------------------------------------------------

--
-- Table structure for table `klasifikasi`
--

CREATE TABLE `klasifikasi` (
  `id_klasifikasi` int(5) NOT NULL,
  `id_siswa` varchar(10) NOT NULL,
  `nilai_matematika` double NOT NULL DEFAULT '0',
  `nilai_bahasaindonesia` double NOT NULL DEFAULT '0',
  `nilai_bahasainggris` double NOT NULL DEFAULT '0',
  `nilai_ipa` double NOT NULL DEFAULT '0',
  `nilai_tik` double NOT NULL DEFAULT '0',
  `minat_tkj` double NOT NULL DEFAULT '0',
  `minat_tav` double NOT NULL DEFAULT '0',
  `minat_tab` double NOT NULL DEFAULT '0',
  `minat_titl` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `klasifikasi`
--

INSERT INTO `klasifikasi` (`id_klasifikasi`, `id_siswa`, `nilai_matematika`, `nilai_bahasaindonesia`, `nilai_bahasainggris`, `nilai_ipa`, `nilai_tik`, `minat_tkj`, `minat_tav`, `minat_tab`, `minat_titl`) VALUES
(1, 'CPB-000001', 3, 2, 4, 4, 3, 5, 4, 3, 1),
(2, 'CPB-000002', 3, 4, 4, 4, 3, 4, 5, 1, 1),
(3, 'CPB-000003', 4, 2, 4, 3, 4, 1, 2, 5, 4),
(4, 'CPB-000004', 4, 3, 3, 3, 4, 2, 4, 1, 5),
(5, 'CPB-000005', 4, 4, 4, 4, 4, 5, 1, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(5) NOT NULL,
  `namakriteria` varchar(100) NOT NULL,
  `atribut` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `namakriteria`, `atribut`) VALUES
(1, 'Nilai Matematika', 'Benefit'),
(2, 'Nilai Bahasa Indonesia', 'Benefit'),
(3, 'Nilai Bahasa Inggris', 'Benefit'),
(4, 'Nilai IPA', 'Benefit'),
(5, 'Nilai TIK', 'Benefit'),
(6, 'Minat TKJ', 'Cost'),
(7, 'Minat TAV', 'Cost'),
(8, 'Minat TAB', 'Cost'),
(9, 'Minat TITL', 'Cost');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_bobot`
--

CREATE TABLE `kriteria_bobot` (
  `id_bobot` int(10) NOT NULL,
  `kode_jurusan` varchar(50) NOT NULL DEFAULT '0',
  `c1` double NOT NULL DEFAULT '0',
  `c2` double NOT NULL DEFAULT '0',
  `c3` double NOT NULL DEFAULT '0',
  `c4` double NOT NULL DEFAULT '0',
  `c5` double NOT NULL DEFAULT '0',
  `c6` double NOT NULL DEFAULT '0',
  `c7` double NOT NULL DEFAULT '0',
  `c8` double NOT NULL DEFAULT '0',
  `c9` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_bobot`
--

INSERT INTO `kriteria_bobot` (`id_bobot`, `kode_jurusan`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `c9`) VALUES
(1, 'TKJ', 0.6, 0.4, 0.8, 0.2, 0.8, 1, 0.4, 0.4, 0.4),
(2, 'TAV', 0.6, 0.4, 0.6, 0.2, 0.6, 0.4, 1, 0.4, 0.4),
(3, 'TAB', 0.8, 0.4, 0.8, 0.2, 0.8, 0.4, 0.4, 1, 0.4),
(4, 'TITL', 0.6, 0.4, 0.6, 0.2, 0.2, 0.4, 0.4, 0.4, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `calonsiswa`
--
ALTER TABLE `calonsiswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `himpunan`
--
ALTER TABLE `himpunan`
  ADD PRIMARY KEY (`id_himpunan`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`),
  ADD UNIQUE KEY `kode_jurusan` (`kode_jurusan`);

--
-- Indexes for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  ADD PRIMARY KEY (`id_klasifikasi`),
  ADD UNIQUE KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `kriteria_bobot`
--
ALTER TABLE `kriteria_bobot`
  ADD PRIMARY KEY (`id_bobot`),
  ADD UNIQUE KEY `id_kriteria` (`kode_jurusan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `himpunan`
--
ALTER TABLE `himpunan`
  MODIFY `id_himpunan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  MODIFY `id_klasifikasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kriteria_bobot`
--
ALTER TABLE `kriteria_bobot`
  MODIFY `id_bobot` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
