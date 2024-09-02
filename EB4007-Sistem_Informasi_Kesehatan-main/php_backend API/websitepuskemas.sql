-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 01:42 AM
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
  `nik_admin` varchar(255) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `username_admin` varchar(255) NOT NULL,
  `password_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akunadministrasi`
--

INSERT INTO `akunadministrasi` (`nik_admin`, `nama_admin`, `username_admin`, `password_admin`) VALUES
('3276080410010007', 'Harun Yahya', 'harunyahya', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `akundokter`
--

CREATE TABLE `akundokter` (
  `nik_dokter` varchar(255) NOT NULL,
  `nama_dokter` varchar(255) NOT NULL,
  `poli` enum('POLI UMUM','POLI GIGI DAN MULUT','POLI MATA','POLI THT') NOT NULL,
  `shift_hari` enum('SENIN','SELASA','RABU','KAMIS','JUMAT','SABTU','MINGGU') NOT NULL,
  `shift_jam` time NOT NULL,
  `username_dokter` varchar(255) NOT NULL,
  `password_dokter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akundokter`
--

INSERT INTO `akundokter` (`nik_dokter`, `nama_dokter`, `poli`, `shift_hari`, `shift_jam`, `username_dokter`, `password_dokter`) VALUES
('3276080410010003', 'Aziz Zaidan', 'POLI UMUM', 'SELASA', '10:00:00', 'azizzaidan', '12345'),
('3275456734561234', 'Lin Zhuang', 'POLI GIGI DAN MULUT', 'RABU', '12:00:00', 'linzhuang', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `akunfarmasi`
--

CREATE TABLE `akunfarmasi` (
  `nik_farmasi` varchar(255) NOT NULL,
  `nama_farmasi` varchar(255) NOT NULL,
  `username_farmasi` varchar(255) NOT NULL,
  `password_farmasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akunfarmasi`
--

INSERT INTO `akunfarmasi` (`nik_farmasi`, `nama_farmasi`, `username_farmasi`, `password_farmasi`) VALUES
('3276080410010001', 'Latifah Khairani', 'latifahk', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `akunpasien`
--

CREATE TABLE `akunpasien` (
  `rekam_medis` int(8) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `usia` int(3) NOT NULL,
  `tempat_tinggal` text NOT NULL,
  `bpjs` enum('Ya','Tidak') NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita') NOT NULL,
  `golongan_darah` enum('A','B','AB','O') NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `nomor_telepon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akunpasien`
--

INSERT INTO `akunpasien` (`rekam_medis`, `nama_lengkap`, `nik`, `tanggal_lahir`, `usia`, `tempat_tinggal`, `bpjs`, `jenis_kelamin`, `golongan_darah`, `pekerjaan`, `nomor_telepon`, `email`, `username`, `password`) VALUES
(202246, 'Muhammad Fairuziko Nurrajab', '3276080411000003', '1999-01-12', 21, 'Bandung', 'Ya', 'Pria', 'A', 'Mahasiswa', '081287543445', 'fairuz.ziko75@gmail.com', 'fairuziko', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5'),
(202247, 'Michelle Angelina', '3276080410010032', '2006-05-15', 15, 'Jakarta', 'Tidak', 'Wanita', 'AB', 'Mahasiswa', '085678901234', 'michellea@gmail.com', 'michelle', '20f3765880a5c269b747e1e906054a4b4a3a991259f1e16b5dde4742cec2319a'),
(202248, 'Muhammad Alief Septiawan', '1371041909010004', '2001-09-19', 21, 'Padang', 'Ya', 'Pria', 'O', 'MAHASISWA', '082272501125', 'septiawan.alief@gmail.com', 'aliefseptiawan', '65e84be33532fb784c48129675f9eff3a682b27168c0ea744b2cf58ee02337c5'),
(202249, 'Arka', '327608041001033', '2022-11-27', 16, 'Depok', 'Ya', 'Pria', 'A', 'Siswa', '0812875434333', '123@gmail.com', 'arka123', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5');

-- --------------------------------------------------------

--
-- Table structure for table `daftarulang`
--

CREATE TABLE `daftarulang` (
  `rekam_medis` int(8) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `bpjs` enum('Ya','Tidak') NOT NULL,
  `poli_dituju` enum('POLI UMUM','POLI GIGI DAN MULUT','POLI MATA','POLI THT') NOT NULL,
  `dokter_dituju` varchar(255) NOT NULL,
  `tanggal_pemeriksaan` date NOT NULL,
  `waktu_pemeriksaan` time NOT NULL,
  `keluhan_pasien` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftarulang`
--

INSERT INTO `daftarulang` (`rekam_medis`, `nama_lengkap`, `nik`, `tanggal_lahir`, `bpjs`, `poli_dituju`, `dokter_dituju`, `tanggal_pemeriksaan`, `waktu_pemeriksaan`, `keluhan_pasien`) VALUES
(202247, 'Michelle Angelina', '3276080410010032', '2006-05-15', 'Tidak', 'POLI GIGI DAN MULUT', 'Lin Zhuang', '2022-12-14', '13:15:00', 'Pasang behel');

-- --------------------------------------------------------

--
-- Table structure for table `pemberianobat`
--

CREATE TABLE `pemberianobat` (
  `rekam_medis` int(8) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
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

--
-- Dumping data for table `pemberianobat`
--

INSERT INTO `pemberianobat` (`rekam_medis`, `nama_lengkap`, `nik`, `tanggal_lahir`, `bpjs`, `poli_dituju`, `dokter_dituju`, `tanggal_pemeriksaan`, `obat_1`, `jumlah_obat_1`, `satuan_obat_1`, `obat_2`, `jumlah_obat_2`, `satuan_obat_2`, `obat_3`, `jumlah_obat_3`, `satuan_obat_3`, `obat_4`, `jumlah_obat_4`, `satuan_obat_4`, `tanggal_ambil_obat`, `waktu_ambil_obat`) VALUES
(202247, 'Michelle Angelina', '3276080410010032', '2006-05-15', 'Tidak', 'POLI GIGI DAN MULUT', 'Lin Zhuang', '2022-12-14', 'Panadol', 10, 'PIL', '', 0, '', '', 0, '', '', 0, '', '2022-12-14', '15:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaandokter`
--

CREATE TABLE `pemeriksaandokter` (
  `rekam_medis` int(8) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `keluhan_pasien` text NOT NULL,
  `diagnosis` text NOT NULL,
  `tindak_lanjut` text NOT NULL,
  `dokter_dituju` varchar(255) NOT NULL,
  `tanggal_pemeriksaan` date NOT NULL,
  `waktu_pemeriksaan` time NOT NULL,
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

--
-- Dumping data for table `pemeriksaandokter`
--

INSERT INTO `pemeriksaandokter` (`rekam_medis`, `nama_lengkap`, `keluhan_pasien`, `diagnosis`, `tindak_lanjut`, `dokter_dituju`, `tanggal_pemeriksaan`, `waktu_pemeriksaan`, `obat_1`, `jumlah_obat_1`, `satuan_obat_1`, `pemakaian_obat_1`, `obat_2`, `jumlah_obat_2`, `satuan_obat_2`, `pemakaian_obat_2`, `obat_3`, `jumlah_obat_3`, `satuan_obat_3`, `pemakaian_obat_3`, `obat_4`, `jumlah_obat_4`, `satuan_obat_4`, `pemakaian_obat_4`) VALUES
(202247, 'Michelle Angelina', 'Pasang behel', 'Gigi berantakan', 'Pemasangan behel', 'Lin Zhuang', '2022-12-14', '13:15:00', 'Panadol', 10, 'PIL', 'Diminum 2x sehari', '', 0, '', '', '', 0, '', '', '', 0, '', '');

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
-- Dumping data for table `persediaanobat`
--

INSERT INTO `persediaanobat` (`nama_obat`, `jenis_obat`, `produsen`, `satuan`, `isi`, `harga_beli`, `harga_satuan`, `harga_1_box`, `stok`) VALUES
('Tolak Angin', 'Obat Masuk Angin', 'STEI', 'BOTOL', 1, 10000, 20000, 20000, 100),
('Promaag', 'Obat Maag', 'SF', 'TABLET', 10, 5000, 7000, 35000, 150),
('Diatab', 'Obat Diare', 'FK ITB', 'KAPSUL', 10, 2000, 5000, 40000, 100),
('Panadol', 'Obat Pusing', 'UI', 'PIL', 100, 50000, 5000, 30000, 60),
('Mylanta', 'Obat Maag', 'ITB', 'KAPSUL', 10, 50000, 6000, 40000, 60),
('Permen Obat', 'Tenggorokan', 'UGM', 'KAPSUL', 5, 10000, 1000, 50000, 30);

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
  MODIFY `rekam_medis` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202252;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
