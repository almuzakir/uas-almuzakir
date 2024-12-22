-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2020 at 08:39 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_rs`
--

-- --------------------------------------------------------

--
-- Table structure for table `jaminan`
--

CREATE TABLE `jaminan` (
  `id` int(11) NOT NULL,
  `jaminan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jaminan`
--

INSERT INTO `jaminan` (`id`, `jaminan`) VALUES
(1, 'BPJS'),
(2, 'Umum'),
(3, 'Asuransi_Prudential'),
(4, 'Asuransi_Allianz'),
(5, 'Asuransi_Sinarmas'),
(6, 'Asuransi_Manulife'),
(7, 'Asuransi_AXA Mandiri');

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `id` int(5) NOT NULL,
  `Poliklinik` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`id`, `Poliklinik`) VALUES
(1, 'Poli Anak'),
(2, 'Poli Bedah'),
(3, 'Poli Umum'),
(4, 'Poli Gizi'),
(5, 'Poli Saraf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `trn_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(29, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2020-05-08 18:04:37'),
(37, 'arifin', 'arifingdr@gmail.com', '89a46a3f7d7fe20f88bd3dbfd7943c89', '2020-05-09 15:47:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `umur` int(3) NOT NULL,
  `Kelamin` varchar(2) DEFAULT NULL,
  `alamat` varchar(100) NOT NULL,
  `jaminan` varchar(255) NOT NULL,
  `Poliklinik` varchar(20) DEFAULT NULL,
  `Kunjungan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `umur`, `Kelamin`, `alamat`, `jaminan`, `Poliklinik`, `Kunjungan`) VALUES
(51, 'baydhowi', 20, 'L', 'Jakim', 'Asuransi_Manulife', 'Poli Bedah', '2020-05-05'),
(56, 'sigit', 17, 'L', 'andara', 'Umum', 'Poli Anak', '2020-05-06'),
(62, 'nur fadilah', 21, 'P', 'Jl.Gandaria', 'Asuransi_Manulife', 'Poli Gizi', '2020-05-07'),
(63, 'fery', 1999, 'L', 'rumah bagus', 'BPJS', 'Poli Umum', '2020-05-07'),
(64, 'ayam', 1998, 'L', 'ksrteng', 'Umum', 'Poli Gizi', '2020-05-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jaminan`
--
ALTER TABLE `jaminan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jaminan`
--
ALTER TABLE `jaminan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
