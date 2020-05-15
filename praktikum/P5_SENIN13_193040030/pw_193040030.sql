-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Bulan Mei 2020 pada 15.36
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040030`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_baju`
--

CREATE TABLE `data_baju` (
  `id` int(20) NOT NULL,
  `merek` varchar(50) NOT NULL,
  `img` varchar(100) NOT NULL,
  `ukuran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_baju`
--

INSERT INTO `data_baju` (`id`, `merek`, `img`, `ukuran`) VALUES
(1, 'ADIDAS', 'adidas.jpg', 'XS/S/M/L/XL'),
(2, 'BERSKA', 'berska.jpg', 'XS/S/M/L/XL'),
(3, 'BOSS', 'boss.jpg', 'XS/S/M/L/Xl'),
(4, 'H&M', 'h&m.jpg', 'XS/S/M/L/XL/XXL'),
(5, 'NIKE', 'nike.jpg', 'S/M/L/XL'),
(6, 'PULL & BEAR', 'pull&bear.jpg', 'XS/S/M/L/XL'),
(7, 'STRADIFARIUS', 'stradi.jpg', 'S/M/L/XL'),
(8, 'UNIQLO', 'uniqlo.jpg', 'S/M/L/XL'),
(9, 'VANS', 'vans.jpg', 'S/M/L/XL'),
(10, 'ZARA', 'zara.jpg', 'XS/S/M/L/XL/XXL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nrp` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `img`, `nrp`, `nama`, `email`, `jurusan`) VALUES
(1, 'ariq.jpg', '193040030', 'Antasfariq F', '193040030.antasafariq@mail.unpas.ac.id', 'Teknik Informatika'),
(2, 'alwi.jpg', '193040029', 'Alwi Ramadhan', '193040029.alwi@mail.unpas.ac.id', 'Teknik Informatika'),
(3, 'agung.jpg', '193040008', 'Agung Gumelar', '193040008.agung@mail.unpas.ac.id', 'Teknik Informatika'),
(4, 'david.jpg', '193040002', 'David Dalil', '193040002.david@mail.unpas.ac.id', 'Teknik Informatika'),
(5, 'renal.jpg', '193040037', 'Renal Muttaqin', '193040037.renal@mail.unpas.ac.id', 'Teknik Informatika'),
(6, 'aryogi.jpg', '193040023', 'Aryogi Aziz', '193040023.aryogi@mail.unpas.ac.id', 'Teknik Informatika'),
(7, 'reza.jpg', '193060005', 'Reza Dwiyana', '193040005.reza@mail.unpas.ac.id', 'Teknik Informatika'),
(8, 'aji.jpg', '193040024', 'Yusril Ismail Azi', '1903040024.yusril@mail.unpas.ac.id', 'Teknik Informatika'),
(9, 'fahri.jpg', '193040011', 'Fahri Arliansyah', '193040011.fahri@mai;unpas.ac.id', 'Teknik Informatika'),
(10, 'silvi.jpg', '193040028', 'Silvi Fitriawati', '193040028.silvi@mail.unpas.ac.id', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(0, 'admin', '$2y$10$9Zk0JsXPT6CLfkHX8vXoMui9b65Zmubeanio1LGz91qlqbhDV/z6a');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_baju`
--
ALTER TABLE `data_baju`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
