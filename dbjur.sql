-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2018 pada 07.14
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbjur`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datadiri`
--

CREATE TABLE `datadiri` (
  `Nama` varchar(20) NOT NULL,
  `Nim` bigint(20) NOT NULL,
  `Tgl_lahir` date NOT NULL,
  `JK` text NOT NULL,
  `Progsu` text NOT NULL,
  `fakul` text NOT NULL,
  `asal` text NOT NULL,
  `moto_hidup` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datadiri`
--

INSERT INTO `datadiri` (`Nama`, `Nim`, `Tgl_lahir`, `JK`, `Progsu`, `fakul`, `asal`, `moto_hidup`) VALUES
('rifqi', 6701, '2000-01-24', 'laki-laki', 'DKV', 'FIK', 'jawa', 'be happy'),
('rakha dimas praditya', 67011, '2003-10-22', 'laki-laki', 'Sistem informasi', 'FIT', 'medan', 'nice and slowly'),
('reihan fijannah lbs', 670112, '1999-10-28', 'perempuan', 'DKV', 'FIK', 'medan', 'just do what i want to do');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datadiri`
--
ALTER TABLE `datadiri`
  ADD PRIMARY KEY (`Nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
