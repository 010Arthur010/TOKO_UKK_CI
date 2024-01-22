-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jan 2024 pada 08.12
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_buku_ci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `noisbn` int(50) DEFAULT NULL,
  `penulis` varchar(255) DEFAULT NULL,
  `penerbit` varchar(255) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `stok` int(50) DEFAULT NULL,
  `harga_pokok` int(255) DEFAULT NULL,
  `harga_jual` int(255) DEFAULT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `noisbn`, `penulis`, `penerbit`, `tahun`, `stok`, `harga_pokok`, `harga_jual`, `gambar`) VALUES
(26, 'ParasiteMage', 444, 'Parasite', 'Penerbitku', 2023, 100, 20000, 22000, 'Mage1.jpg'),
(27, 'Musical Adventure', 445, 'Venture', 'Penerbitku', 2023, 100, 30000, 32000, 'Adventure2.jpg'),
(28, 'The Erth Dragon', 446, 'My Dragon', 'Penerbitku', 2024, 100, 25000, 27000, 'Dragon1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `id_detail_penjualan` int(11) NOT NULL,
  `id_penjualan` int(11) DEFAULT NULL,
  `id_buku` int(11) DEFAULT NULL,
  `jumlah` int(50) DEFAULT NULL,
  `harga` int(50) DEFAULT NULL,
  `total` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detail_penjualan`
--

INSERT INTO `detail_penjualan` (`id_detail_penjualan`, `id_penjualan`, `id_buku`, `jumlah`, `harga`, `total`) VALUES
(2, 19, 20, 2, 30000, 60000),
(3, 19, 18, 2, 28000, 56000),
(4, 20, 20, 1, 30000, 30000),
(5, 21, 20, 1, 30000, 30000),
(6, 21, 18, 1, 28000, 28000),
(7, 22, 21, 4, 32000, 128000),
(8, 23, 21, 4, 32000, 128000),
(9, 24, 21, 1, 32000, 32000),
(10, 24, 18, 1, 23000, 23000),
(11, 25, 18, 1, 30000, 30000),
(12, 25, 21, 1, 32000, 32000),
(13, 25, 22, 1, 30000, 30000),
(14, 29, 18, 1, 30000, 30000),
(15, 29, 21, 1, 32000, 32000),
(16, 30, 18, 2, 30000, 60000),
(17, 31, 22, 1, 30000, 30000),
(18, 31, 24, 1, 40000, 40000),
(19, 31, 21, 1, 32000, 32000),
(20, 32, 21, 1, 32000, 32000),
(21, 32, 22, 1, 30000, 30000),
(22, 32, 24, 1, 40000, 40000),
(23, 32, 18, 1, 30000, 30000),
(24, 33, 26, 1, 22000, 22000),
(25, 33, 27, 1, 32000, 32000),
(26, 33, 28, 2, 27000, 54000),
(27, 34, 26, 1, 22000, 22000),
(28, 34, 27, 1, 32000, 32000),
(29, 34, 28, 1, 27000, 27000),
(30, 35, 26, 1, 22000, 22000),
(31, 35, 27, 1, 32000, 32000),
(32, 35, 28, 3, 27000, 81000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `distributor`
--

CREATE TABLE `distributor` (
  `id_distributor` int(11) NOT NULL,
  `nama_distributor` varchar(11) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `distributor`
--

INSERT INTO `distributor` (`id_distributor`, `nama_distributor`, `alamat`, `telepon`) VALUES
(3, 'Denny1', 'JL.Simpang Gajayana', '444444'),
(5, 'Arthur', 'Unknown', '987778'),
(7, 'Sa', 'Jl.Sarden1223', '0854672289');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasir`
--

CREATE TABLE `kasir` (
  `id_kasir` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` int(15) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `username` varchar(155) NOT NULL,
  `password` varchar(155) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kasir`
--

INSERT INTO `kasir` (`id_kasir`, `nama`, `alamat`, `telepon`, `status`, `username`, `password`, `level`) VALUES
(1, 'admin', 'Jl.SImpang Gajayana', 123123, '1', 'denny', '202cb962ac59075b964b07152d234b70', 'admin'),
(11, 'user', 'alamat', 4545454, '1', 'user', '202cb962ac59075b964b07152d234b70', 'user'),
(13, 'denny', 'dawdaw', 1231312, '1', 'sss', '202cb962ac59075b964b07152d234b70', 'admin'),
(16, 'aku', 'xxxx', 1231231, '1', 'saya', '243e61e9410a9f577d2d662c67025ee9', 'user'),
(17, 'denn', 'awdadsdaw', 42321, '1', 'denn', '698d51a19d8a121ce581499d7b701668', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasok`
--

CREATE TABLE `pasok` (
  `id_pasok` int(11) NOT NULL,
  `id_distributor` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pasok`
--

INSERT INTO `pasok` (`id_pasok`, `id_distributor`, `id_buku`, `jumlah`, `tanggal`) VALUES
(34, 3, 28, 100, '2024-01-13'),
(35, 5, 27, 100, '2024-01-12'),
(36, 7, 26, 100, '2024-01-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `id_kasir` int(11) DEFAULT NULL,
  `total` int(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`id_penjualan`, `id_kasir`, `total`, `tanggal`) VALUES
(19, 1, 116000, '2023-11-01'),
(20, 1, 30000, '2023-11-01'),
(21, 1, 58000, '2023-11-01'),
(22, 1, 128000, '2023-11-03'),
(23, 1, 128000, '2023-11-03'),
(24, 1, 55000, '2023-11-22'),
(25, NULL, 92000, '2023-12-06'),
(29, 1, 62000, '2023-12-08'),
(30, 1, 60000, '2024-01-03'),
(31, 1, 102000, '2024-01-03'),
(32, 13, 132000, '2024-01-10'),
(33, 1, 108000, '2024-01-13'),
(34, 17, 81000, '2024-01-15'),
(35, 1, 135000, '2024-01-22');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD PRIMARY KEY (`id_detail_penjualan`),
  ADD KEY `id_penjualan` (`id_penjualan`);

--
-- Indeks untuk tabel `distributor`
--
ALTER TABLE `distributor`
  ADD PRIMARY KEY (`id_distributor`);

--
-- Indeks untuk tabel `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id_kasir`);

--
-- Indeks untuk tabel `pasok`
--
ALTER TABLE `pasok`
  ADD PRIMARY KEY (`id_pasok`),
  ADD KEY `id_distributor` (`id_distributor`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `id_kasir` (`id_kasir`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  MODIFY `id_detail_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `distributor`
--
ALTER TABLE `distributor`
  MODIFY `id_distributor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kasir`
--
ALTER TABLE `kasir`
  MODIFY `id_kasir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `pasok`
--
ALTER TABLE `pasok`
  MODIFY `id_pasok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD CONSTRAINT `detail_penjualan_ibfk_1` FOREIGN KEY (`id_penjualan`) REFERENCES `penjualan` (`id_penjualan`);

--
-- Ketidakleluasaan untuk tabel `pasok`
--
ALTER TABLE `pasok`
  ADD CONSTRAINT `pasok_ibfk_1` FOREIGN KEY (`id_distributor`) REFERENCES `distributor` (`id_distributor`),
  ADD CONSTRAINT `pasok_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`);

--
-- Ketidakleluasaan untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_2` FOREIGN KEY (`id_kasir`) REFERENCES `kasir` (`id_kasir`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
