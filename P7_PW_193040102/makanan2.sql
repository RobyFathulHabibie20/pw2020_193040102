-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Bulan Mei 2020 pada 21.33
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040102`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan2`
--

CREATE TABLE `makanan2` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `bahan` varchar(100) NOT NULL,
  `asal` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `makanan2`
--

INSERT INTO `makanan2` (`id`, `nama`, `jenis`, `bahan`, `asal`, `harga`, `gambar`) VALUES
(1, 'Rendang', 'Daging', 'Daging sapi dan rempah', 'Padang', 20000, 'rendangg.png'),
(2, 'Sate', 'Daging', 'Daging sapi,ayam,kambing', 'Jawa', 15000, 'sate.png'),
(3, 'Lotek', 'Sayuran', 'Kangkung, kol dan tauge', 'Sunda', 8000, 'lotek.png'),
(4, 'Mie Bangka', 'Mie', 'Mie dan sayuran', 'Bangka', 12000, 'mie.png'),
(5, 'Seruit', 'Daging', 'Ikan dan sambal', 'Lampung', 18000, 'seruit.png'),
(6, 'Gudeg', 'nasi', 'Nasi, nangka muda dan lauk pauk', 'Jogja', 25000, 'gudeg.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `makanan2`
--
ALTER TABLE `makanan2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `makanan2`
--
ALTER TABLE `makanan2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
