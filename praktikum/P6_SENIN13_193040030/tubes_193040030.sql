-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Apr 2020 pada 09.51
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
-- Database: `tubes_193040030`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `apparel`
--

CREATE TABLE `apparel` (
  `id` int(50) NOT NULL,
  `merek` varchar(50) NOT NULL,
  `img` varchar(100) NOT NULL,
  `ukuran` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `apparel`
--

INSERT INTO `data_baju` (`id`, `merek`, `img`, `ukuran`) VALUES 
('1', 'ADIDAS', 'adidas.jpg', 'XS/S/M/L/XL'), 
('2', 'BERSKA', 'berska.jpg', 'XS/S/M/L/XL'), 
('3', 'BOSS', 'boss.jpg', 'XS/S/M/L/Xl'), 
('4', 'H&M', 'h&m.jpg', 'XS/S/M/L/XL/XXL'), 
('5', 'NIKE', 'nike.jpg', 'S/M/L/XL'), 
('6', 'PULL & BEAR', 'pull&bear.jpg', 'XS/S/M/L/XL'), 
('7', 'STRADIFARIUS', 'stradi.jpg', 'S/M/L/XL'),
('8', 'UNIQLO', 'uniqlo.jpg', 'S/M/L/XL'),
('9', 'VANS', 'vans.jpg', 'S/M/L/XL'),
('10', 'ZARA', 'zara.jpg', 'XS/S/M/L/XL/XXL');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `apparel`
--
ALTER TABLE `apparel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `apparel`
--
ALTER TABLE `apparel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
