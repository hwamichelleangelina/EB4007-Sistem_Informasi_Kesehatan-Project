-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 09:36 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websitepuskemas`
--

-- --------------------------------------------------------

--
-- Table structure for table `akunadministrasi`
--

CREATE TABLE `akunadministrasi` (
  `nik_admin` int(16) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `username_admin` varchar(255) NOT NULL,
  `password_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `akundokter`
--

CREATE TABLE `akundokter` (
  `nik_dokter` int(16) NOT NULL,
  `nama_dokter` varchar(255) NOT NULL,
  `poli` enum('POLI UMUM','POLI GIGI DAN MULUT','POLI MATA','POLI THT') NOT NULL,
  `shift_hari` enum('SENIN','SELASA','RABU','KAMIS','JUMAT','SABTU','MINGGU') NOT NULL,
  `shift_jam` time NOT NULL,
  `username_dokter` varchar(255) NOT NULL,
  `password_dokter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `akunfarmasi`
--

CREATE TABLE `akunfarmasi` (
  `nik_farmasi` int(16) NOT NULL,
  `nama_farmasi` varchar(255) NOT NULL,
  `username_farmasi` varchar(255) NOT NULL,
  `password_farmasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `akunpasien`
--

CREATE TABLE `akunpasien` (
  `rekam_medis` int(8) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nik` int(16) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `usia` int(3) NOT NULL,
  `tempat_tinggal` text NOT NULL,
  `bpjs` enum('Ya','Tidak') NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita') NOT NULL,
  `golongan_darah` enum('A','B','AB','O') NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `nomor_telepon` int(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akunpasien`
--

INSERT INTO `akunpasien` (`rekam_medis`, `nama_lengkap`, `nik`, `tanggal_lahir`, `usia`, `tempat_tinggal`, `bpjs`, `jenis_kelamin`, `golongan_darah`, `pekerjaan`, `nomor_telepon`, `email`, `username`, `password`) VALUES
(202200, 'Michelle Angelina', 1234567, '2001-11-09', 21, 'Jl. Dago Asri I, No. A1', 'Tidak', 'Wanita', 'A', 'Mahasiswa', 2147483647, 'zmichelleangelina@gmail.com', 'michelleangelina', '09a5545a3489b4acf87784e64d69e66c4bcf1cd4e883ec1243be6c5b1ee7692e');

-- --------------------------------------------------------

--
-- Table structure for table `daftarulang`
--

CREATE TABLE `daftarulang` (
  `rekam_medis` int(8) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nik` int(16) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `bpjs` enum('Ya','Tidak') NOT NULL,
  `poli_dituju` enum('POLI UMUM','POLI GIGI DAN MULUT','POLI MATA','POLI THT') NOT NULL,
  `dokter_dituju` varchar(255) NOT NULL,
  `tanggal_pemeriksaan` date NOT NULL,
  `waktu_pemeriksaan` time NOT NULL,
  `keluhan_pasien` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pemberianobat`
--

CREATE TABLE `pemberianobat` (
  `rekam_medis` int(8) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nik` int(16) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `bpjs` enum('Ya','Tidak') NOT NULL,
  `poli_dituju` enum('POLI UMUM','POLI GIGI DAN MULUT','POLI MATA','POLI THT') NOT NULL,
  `dokter_dituju` varchar(255) NOT NULL,
  `tanggal_pemeriksaan` date NOT NULL,
  `obat_1` varchar(255) NOT NULL,
  `jumlah_obat_1` int(3) NOT NULL,
  `satuan_obat_1` enum('PIL','TABLET','KAPSUL','BOTOL') NOT NULL,
  `obat_2` varchar(255) NOT NULL,
  `jumlah_obat_2` int(3) NOT NULL,
  `satuan_obat_2` enum('PIL','TABLET','KAPSUL','BOTOL') NOT NULL,
  `obat_3` varchar(255) NOT NULL,
  `jumlah_obat_3` int(3) NOT NULL,
  `satuan_obat_3` enum('PIL','TABLET','KAPSUL','BOTOL') NOT NULL,
  `obat_4` varchar(255) NOT NULL,
  `jumlah_obat_4` int(3) NOT NULL,
  `satuan_obat_4` enum('PIL','TABLET','KAPSUL','BOTOL') NOT NULL,
  `tanggal_ambil_obat` date NOT NULL,
  `waktu_ambil_obat` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaandokter`
--

CREATE TABLE `pemeriksaandokter` (
  `rekam_medis` int(8) NOT NULL,
  `keluhan_pasien` text NOT NULL,
  `diagnosis` text NOT NULL,
  `tindak_lanjut` text NOT NULL,
  `obat_1` varchar(255) NOT NULL,
  `jumlah_obat_1` int(3) NOT NULL,
  `satuan_obat_1` enum('PIL','TABLET','KAPSUL','BOTOL') NOT NULL,
  `pemakaian_obat_1` text NOT NULL,
  `obat_2` varchar(255) NOT NULL,
  `jumlah_obat_2` int(3) NOT NULL,
  `satuan_obat_2` enum('PIL','TABLET','KAPSUL','BOTOL') NOT NULL,
  `pemakaian_obat_2` text NOT NULL,
  `obat_3` varchar(255) NOT NULL,
  `jumlah_obat_3` int(3) NOT NULL,
  `satuan_obat_3` enum('PIL','TABLET','KAPSUL','BOTOL') NOT NULL,
  `pemakaian_obat_3` text NOT NULL,
  `obat_4` varchar(255) NOT NULL,
  `jumlah_obat_4` int(3) NOT NULL,
  `satuan_obat_4` enum('PIL','TABLET','KAPSUL','BOTOL') NOT NULL,
  `pemakaian_obat_4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `persediaanobat`
--

CREATE TABLE `persediaanobat` (
  `nama_obat` varchar(255) NOT NULL,
  `jenis_obat` varchar(255) NOT NULL,
  `produsen` varchar(255) NOT NULL,
  `satuan` enum('PIL','TABLET','KAPSUL','BOTOL') NOT NULL,
  `isi` int(3) NOT NULL,
  `harga_beli` int(10) NOT NULL,
  `harga_satuan` int(10) NOT NULL,
  `harga_1_box` int(10) NOT NULL,
  `stok` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akunpasien`
--
ALTER TABLE `akunpasien`
  ADD PRIMARY KEY (`rekam_medis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akunpasien`
--
ALTER TABLE `akunpasien`
  MODIFY `rekam_medis` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202201;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
