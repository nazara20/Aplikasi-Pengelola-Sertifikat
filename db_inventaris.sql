-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2022 at 03:32 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inventaris`
--

-- --------------------------------------------------------

--
-- Table structure for table `biaya`
--

CREATE TABLE `biaya` (
  `id` int(11) NOT NULL,
  `Kode_Biaya` int(16) NOT NULL,
  `Nama_Biaya` text NOT NULL,
  `Biaya` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biaya`
--

INSERT INTO `biaya` (`id`, `Kode_Biaya`, `Nama_Biaya`, `Biaya`) VALUES
(1, 202200001, 'aass', 'ddd'),
(4, 202200004, 'ssaa', '33221'),
(6, 202200006, 'ssasd', '3323'),
(7, 202200007, 'saa', 'sss');

-- --------------------------------------------------------

--
-- Table structure for table `data_tanah`
--

CREATE TABLE `data_tanah` (
  `id` int(11) NOT NULL,
  `No_HAK` varchar(16) NOT NULL,
  `No_KTP` varchar(16) NOT NULL,
  `Letak_Bidang_Tnh` text NOT NULL,
  `Luas_Tnh` varchar(60) NOT NULL,
  `Status_tnh` text NOT NULL,
  `No_kohir` int(40) NOT NULL,
  `No_Persil` int(20) NOT NULL,
  `Nama_pewaris` text NOT NULL,
  `Meninggal_thn` text NOT NULL,
  `Surat_waris` text NOT NULL,
  `Nama_pmbri_hibah` text NOT NULL,
  `tgl_hibah` date NOT NULL,
  `No_akta_hibah` varchar(40) NOT NULL,
  `tgl_pembelian` date NOT NULL,
  `Nm_PPAT_pembelian` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_tanah`
--

INSERT INTO `data_tanah` (`id`, `No_HAK`, `No_KTP`, `Letak_Bidang_Tnh`, `Luas_Tnh`, `Status_tnh`, `No_kohir`, `No_Persil`, `Nama_pewaris`, `Meninggal_thn`, `Surat_waris`, `Nama_pmbri_hibah`, `tgl_hibah`, `No_akta_hibah`, `tgl_pembelian`, `Nm_PPAT_pembelian`) VALUES
(1, '00001', '637111231123', '201', '21', 'Bagus', 8, 1112, 'Aluh', '2019', 'TATA_TERTIB_PENGELOLAAN_BARANG_SEKRETARIAT_ORMAWA_FTI.pdf', '1112', '2022-01-11', '111321', '2022-01-19', 'Lutung');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `No_SPS` varchar(40) NOT NULL,
  `No_Pendaftaran` varchar(50) NOT NULL,
  `Jumlah_Biaya` text NOT NULL,
  `Terbilang` text NOT NULL,
  `Tgl_SPS` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `No_SPS`, `No_Pendaftaran`, `Jumlah_Biaya`, `Terbilang`, `Tgl_SPS`) VALUES
(1, '2022/01/00001', 'A-0001', '20.000', 'Dua Puluh Ribu Rupiah', '2022-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `pemohon`
--

CREATE TABLE `pemohon` (
  `id` int(11) NOT NULL,
  `No_KTP` varchar(16) NOT NULL,
  `Nama_Pemohon` text NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `TTL` text NOT NULL,
  `Alamat` text NOT NULL,
  `Jenis_kelamin` text NOT NULL,
  `Umur` varchar(40) NOT NULL,
  `Pekerjaan` text NOT NULL,
  `Tgl_Pendaftaran` date NOT NULL,
  `Telp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemohon`
--

INSERT INTO `pemohon` (`id`, `No_KTP`, `Nama_Pemohon`, `tempat_lahir`, `TTL`, `Alamat`, `Jenis_kelamin`, `Umur`, `Pekerjaan`, `Tgl_Pendaftaran`, `Telp`) VALUES
(1, '637111231123', 'Nazar', 'Banjarmasin', '2022-01-16', 'Jl. Basirih', 'Laki-laki', '21', 'Staff Admin1', '2022-01-16', '082254887113');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(11) NOT NULL,
  `No_Pendaftaran` varchar(128) NOT NULL,
  `No_KTP` varchar(16) NOT NULL,
  `No_KTPkuasa` varchar(16) NOT NULL,
  `Tgl_Pendaftaran` date NOT NULL,
  `Kode_Biaya` int(50) NOT NULL,
  `No_SuratKuasa` varchar(30) NOT NULL,
  `Tgl_SuratKuasa` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `No_Pendaftaran`, `No_KTP`, `No_KTPkuasa`, `Tgl_Pendaftaran`, `Kode_Biaya`, `No_SuratKuasa`, `Tgl_SuratKuasa`) VALUES
(1, '0', '637111231123', '214748364721', '0000-00-00', 202200003, 'BPN-2022-0001', '17'),
(2, 'A-0001', '637111231123', '2147483647112', '2022-01-17', 202200003, 'BPN-2022-0002', '17 January 2022');

-- --------------------------------------------------------

--
-- Table structure for table `petugas_ukur`
--

CREATE TABLE `petugas_ukur` (
  `id` int(11) NOT NULL,
  `Nip_petugas` int(20) NOT NULL,
  `Nama_Petugas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas_ukur`
--

INSERT INTO `petugas_ukur` (`id`, `Nip_petugas`, `Nama_Petugas`) VALUES
(2, 1232211, 'Lutung');

-- --------------------------------------------------------

--
-- Table structure for table `sertifikat`
--

CREATE TABLE `sertifikat` (
  `id` int(11) NOT NULL,
  `No_Sertifikat` varchar(20) NOT NULL,
  `No_HAK` text NOT NULL,
  `Tgl_Pengesahan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sertifikat`
--

INSERT INTO `sertifikat` (`id`, `No_Sertifikat`, `No_HAK`, `Tgl_Pengesahan`) VALUES
(1, 'BPN/BJM/2022/001', '00001', '2022-01-30');

-- --------------------------------------------------------

--
-- Table structure for table `surat_ukur`
--

CREATE TABLE `surat_ukur` (
  `id` int(11) NOT NULL,
  `No_HAK` varchar(16) NOT NULL,
  `Nip_petugas` int(50) NOT NULL,
  `Provinsi` text NOT NULL,
  `Kecamatan` text NOT NULL,
  `Kelurahan` text NOT NULL,
  `RT/RW` text NOT NULL,
  `Batas_utara` text NOT NULL,
  `Batas_selatan` text NOT NULL,
  `Batas_Barat` text NOT NULL,
  `Batas_timur` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat_ukur`
--

INSERT INTO `surat_ukur` (`id`, `No_HAK`, `Nip_petugas`, `Provinsi`, `Kecamatan`, `Kelurahan`, `RT/RW`, `Batas_utara`, `Batas_selatan`, `Batas_Barat`, `Batas_timur`) VALUES
(1, '1', 1100123211, 'Kalimantan Selatan', 'Banjarmasin', 'Banjarmasin', '06', '211', '211', '211', '211'),
(2, '00001', 1100123211, 'Kalimantan Selatan', 'Banjarmasin', 'Banjarmasin Selatan', '06', '11000', '200', '1000', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'nazar', 'nazar', 'default.jpg', '$2y$10$/PaT5v1jiqLZr1rdbOKpCOOshC9pdsK6yx/mibyNCEYgttEZjNya.', 2, 1, 1640691305),
(2, 'nazar', 'nazar@gmail.com', 'default.jpg', '$2y$10$m3XfquplxjdoL9jCfLl/V.9kdDZhjsbsipCxHD2BYUHKdgFSmfkGW', 2, 1, 1640691594),
(3, 'nazar', 'nzr@gmail.com', 'default.jpg', '$2y$10$l8P93jHqaZEVThcFTC9yzOjsymUOswkUWSf6PnJ.i3YH77CZBvV/O', 2, 1, 1640691641),
(4, 'muhammad', 'muhammad@gmail.com', 'default.jpg', '$2y$10$enwcrcDOsWxqHIYlH7Fw4uHYYI1mpBf0V7r.6bB6IaGcwCbv9N3u6', 2, 1, 1640691707),
(5, 'asdas', 'asdsa@gmail.com', 'default.jpg', '$2y$10$zMqjxRlkp7Yvn/1rkwQovuVsm.6jDOsnTgmhHG5/BVsHwAq3q559S', 2, 1, 1642003217),
(6, 'aida lutung', 'aidalutung@gmail.com', 'default.jpg', '$2y$10$7.GjDAaY38RGMl85VmC.0.XWGGnuZJ30mQXSMlHnEKA7WmMNWN69C', 2, 1, 1642030021),
(7, 'Noraida', 'aidalutung11@gmail.com', 'default.jpg', '$2y$10$Mgdq9PFA1GtZX4aPnO6x9.iZ03GPUp3D2jYEh4WtUvy0EKceaAV7W', 2, 1, 1642030180);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biaya`
--
ALTER TABLE `biaya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_tanah`
--
ALTER TABLE `data_tanah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemohon`
--
ALTER TABLE `pemohon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas_ukur`
--
ALTER TABLE `petugas_ukur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_ukur`
--
ALTER TABLE `surat_ukur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biaya`
--
ALTER TABLE `biaya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `data_tanah`
--
ALTER TABLE `data_tanah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pemohon`
--
ALTER TABLE `pemohon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `petugas_ukur`
--
ALTER TABLE `petugas_ukur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sertifikat`
--
ALTER TABLE `sertifikat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `surat_ukur`
--
ALTER TABLE `surat_ukur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
