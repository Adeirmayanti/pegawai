-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Mei 2018 pada 09.21
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pegawai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `nik` int(30) NOT NULL,
  `nama` varchar(40) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `bagian` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pegawai`
--

INSERT INTO `data_pegawai` (`nik`, `nama`, `tgl_lahir`, `jenis_kelamin`, `bagian`, `alamat`, `agama`, `no_tlp`, `email`, `foto`) VALUES
(12345678, 'Diding Hanif Maulana', '1997-06-17', 'laki-laki', 'Dana dan Jasa', 'cirebon', 'Islam', '08267589001', 'didinghanif97@gmail.com', ''),
(12347658, 'Rafaela Febriani', '1995-08-07', 'perempuan', 'SDM', 'cirbon', 'Hindu', '087772435675', 'rafael09@gmail.com', ''),
(15423786, 'Trio Alan', '1990-12-03', 'laki-laki', 'Dana dan Jasa', 'bekasi', 'Islam', '08155447890', 'trioalan@gmail.com', ''),
(26398765, 'vanessa kristiani', '1995-07-18', 'perempuan', 'Akuntansi', 'Bandung', 'Kristen', '085645789230', 'kristiani_vanessa@yahoo.com', ''),
(34521786, 'wulan', '1992-10-12', 'perempuan', 'SDM', 'kuningan', 'Islam', '089444332176', 'dwulanboo@yahoo.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `nik` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34521787;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
