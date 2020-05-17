-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Bulan Mei 2020 pada 22.36
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
-- Database: `tubes_193040011`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `elektronik`
--

CREATE TABLE `elektronik` (
  `id` int(11) NOT NULL,
  `Nama_Elektronik` char(50) DEFAULT NULL,
  `Harga` int(11) DEFAULT NULL,
  `Gambar` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `elektronik`
--

INSERT INTO `elektronik` (`id`, `Nama_Elektronik`, `Harga`, `Gambar`) VALUES
(1, 'AC', 2000000, 'ac.jpg'),
(2, 'Guitar', 6000000, 'gitar.jpg'),
(3, 'Handphone Iphone 11', 30500000, 'handphone.jpg'),
(4, 'Komputer', 15700000, 'komputer.jpg'),
(5, 'Kulkas', 2500000, 'kulkas.jpg'),
(6, 'Laptop ROG', 26770000, 'laptop.jpg'),
(7, 'Mesin Cuci', 1250000, 'mesin cuci.jpg'),
(8, 'PS 4', 6999000, 'ps.jpg'),
(9, 'Speaker', 560000, 'speaker.jpg'),
(10, 'TV', 2600000, 'tv.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
