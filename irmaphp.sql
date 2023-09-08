-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Sep 2023 pada 05.54
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `irmaphp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nis` char(9) CHARACTER SET utf8 NOT NULL,
  `nama` varchar(250) CHARACTER SET latin1 NOT NULL,
  `email` varchar(250) NOT NULL,
  `jurusan` varchar(64) CHARACTER SET latin1 NOT NULL,
  `gambar` varchar(64) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nis`, `nama`, `email`, `jurusan`, `gambar`) VALUES
(1, '12345678', 'Irma Dianasari', 'irmadianasari775@gmail.com', 'RPL1', '1.jpg'),
(2, '87654321', 'Dianasari', 'dianasari@gmail.com', 'RPL2', '2.JPG'),
(3, '12345677', 'Sari', 'sari@gmail.com', 'RPL', '1.jpg'),
(5, '12345670', 'mamik', 'mamik@gmail.com', 'RPL1', '1.jpg'),
(6, '12345675', 'random', 'random@gmail.com', 'RPL1', '1.jpg'),
(9, '076545678', 'Dinda', 'dinda@gmail.com', 'RPL1', '2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
