-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Apr 2020 pada 17.00
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
-- Struktur dari tabel `makanan`
--

CREATE TABLE `makanan` (
  `id` int(11) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `nama makanan` varchar(100) NOT NULL,
  `jenis makanan` varchar(100) NOT NULL,
  `komposisi` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `makanan`
--

INSERT INTO `makanan` (`id`, `kode`, `nama makanan`, `jenis makanan`, `komposisi`, `harga`, `gambar`) VALUES
(1, 'M001', 'Mie Ayam Solo', 'Mie', 'Mie kering kluntung, Sawi, Daun bawang, Bawang goreng.', 15000, 'mieaymm.png'),
(2, 'M002', 'Soto Ayam', 'Lontong', 'Ayam, Bawang putih, Kunyit, Jahe, Lengkuas, Daun jeruk, Sereh.', 13000, 'sotoo.png'),
(3, 'M003', 'Ayam Geprek', 'Daging', 'Ayam, Cabe merah, cabe rawit,Garam, Kunyit, Gula tumbar.', 15000, 'geprekk.png'),
(4, 'M004', 'Rendang Sapi Presto', 'Daging', 'Daging sapi presto, cabe, bawang putih&merah, engkuas, serai, jahe', 20000, 'rendangg.png'),
(5, 'M005', 'Snack Terigu Keju', 'Snack', 'Terigu, Keju chedar, Magarin, Air secukupnya, Minyak goreng', 8000, 'snackk.png'),
(6, 'M006', 'Siomay', 'Snack', 'Pangsit, bawang merah&putih, Wortel, Telor, Garam, Royco ayam', 10000, 'somayy.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
