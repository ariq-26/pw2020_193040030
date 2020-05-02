-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Apr 2020 pada 07.58
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
-- Database: `pw_193040030`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `img` varchar(100) DEFAULT NULL,
  `nrp` char(9) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `img`, `nrp`, `nama`, `email`, `jurusan`) VALUES 
('1', 'ariq.jpg', '193040030', 'Antasfariq F', '193040030.antasafariq@mail.unpas.ac.id', 'Teknik Informatika'),
('2', 'alwi.jpg', '193040029', 'Alwi Ramadhan', '193040029.alwi@mail.unpas.ac.id', 'Teknik Informatika'),
('3', 'agung.jpg', '193040008', 'Agung Gumelar', '193040008.agung@mail.unpas.ac.id', 'Teknik Informatika'),
('4', 'david.jpg', '193040002', 'David Dalil', '193040002.david@mail.unpas.ac.id', 'Teknik Informatika'), 
('5', 'renal.jpg', '193040037', 'Renal Muttaqin', '193040037.renal@mail.unpas.ac.id', 'Teknik Informatika'),
('6', 'aryogi.jpg', '193040023', 'Aryogi Aziz', '193040023.aryogi@mail.unpas.ac.id', 'Teknik Informatika'),
('7', 'reza.jpg', '193040005', 'Reza Dwiyana', '193040005.reza@mail.unpas.ac.id', 'Teknik Informatika'),
('8', 'aji.jpg', '193040024', 'Yusril Ismail Azi', '1903040024.yusril@mail.unpas.ac.id', 'Teknik Informatika'),
('9', 'fahri.jpg', '193040011', 'Fahri Arliansyah', '193040011.fahri@mai;unpas.ac.id', 'Teknik Informatika'),
('10', 'silvi.jpg', '193040028', 'Silvi Fitriawati', '193040028.silvi@mail.unpas.ac.id', 'Teknik Informatika');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
