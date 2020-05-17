-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Bulan Mei 2020 pada 08.32
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040011`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'M.Farhan Assidiq', '193040010', '193040010.muhamad@mail.unpas.ac.id', 'Teknik Informatika', 'nophoto.png'),
(2, 'Renal Mutaqin', '193040037', 'renalmutaqin8@gmail.com', 'Teknik Informatika', 'nophoto.png'),
(3, 'Jonathan Liandi', '193040990', 'jonathanliandi@gmail.com', 'Teknik Informatika', 'nophoto.png'),
(4, 'Steven Kurniawan', '193040991', 'stevenkurniawan@gmail.com', 'Teknik Informatika', 'nophoto.png'),
(5, 'Fahmoy', '193040992', 'fahmoy@gmail.com', 'Teknik Informatika', 'nophoto.png'),
(6, 'Andrea Mutiara', '193040993', 'andreamutiara@gmail.com', 'Teknik Informatika', 'nophoto.png'),
(7, 'Reza Arap Oktavian', '193040994', 'rezaarap@gmail.com', 'Teknik Informatika', 'nophoto.png'),
(8, 'Gilarnii', '193040995', 'gilarnii@gmail.com', 'Teknik Informatika', 'nophoto.png'),
(9, 'Brigita Tifany', '193040996', 'brigittatifany@gmail.com', 'Teknik Informatika', 'nophoto.png'),
(10, 'Demilangston', '193040997', 'demilangston@gmail.com', 'Teknik Informatika', 'nophoto.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
