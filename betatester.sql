-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Nov 2020 pada 16.20
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
-- Database: `betatester`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `ID_admin` int(20) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`ID_admin`, `username`, `password`, `nama`, `level`) VALUES
(1, 'jeremy', '6967cabefd763ac1a1a88e11159957db', 'Jeremy Martin S', 'admin'),
(3, 'mona', '4af5cab77c62eaec5f87b570f2d2b127', 'Mona (Hydro)', 'developer'),
(4, 'lisa', 'ed14f4a4d7ecddb6dae8e54900300b1e', 'Lisa (Electro)', 'developer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `betatester`
--

CREATE TABLE `betatester` (
  `id` int(25) NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(150) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `betatester`
--

INSERT INTO `betatester` (`id`, `username`, `email`) VALUES
(444, 'TompelL', 'tompell21@jalan.com'),
(789, 'DC', 'cariangin@kitabisa.com'),
(987, 'Lord Kazuma', 'isekai@anime.com'),
(989, 'Tamvan', 'Tamvan@dino.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `developer`
--

CREATE TABLE `developer` (
  `id` int(25) NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 NOT NULL,
  `bidang` varchar(15) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `developer`
--

INSERT INTO `developer` (`id`, `nama`, `bidang`) VALUES
(444, 'Lisa', 'Grafis'),
(987, 'Mona', 'Software');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluhan`
--

CREATE TABLE `keluhan` (
  `id` int(25) NOT NULL,
  `masalah` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tanggal` varchar(50) CHARACTER SET latin1 NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `keluhan`
--

INSERT INTO `keluhan` (`id`, `masalah`, `tanggal`, `username`) VALUES
(223, 'Ada masalah jaringan', '19', 'Lord Kazuma'),
(654, 'Masalah', '21', 'DC'),
(878, 'Tidak bisa login di aku lain', '17', 'DC');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_admin`);

--
-- Indeks untuk tabel `betatester`
--
ALTER TABLE `betatester`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `developer`
--
ALTER TABLE `developer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_admin` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `betatester`
--
ALTER TABLE `betatester`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT untuk tabel `developer`
--
ALTER TABLE `developer`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=989;

--
-- AUTO_INCREMENT untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4546;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
