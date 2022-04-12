-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Apr 2022 pada 16.40
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wilayah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kabkota`
--

CREATE TABLE `tbl_kabkota` (
  `id_kabkota` int(11) NOT NULL,
  `kode_kabkota` varchar(26) NOT NULL,
  `nama_kabkota` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `kode_provinsi` varchar(26) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kabkota`
--

INSERT INTO `tbl_kabkota` (`id_kabkota`, `kode_kabkota`, `nama_kabkota`, `created_at`, `update_at`, `kode_provinsi`) VALUES
(101, 'KEP-SER', 'Kabupaten Adm. Kepulauan Seribu', '2022-04-09 12:07:50', '2022-04-09 20:36:27', 'ID-JK'),
(102, 'JAK-PUS', 'Kota Adm. Jakarta Pusat', '2022-04-09 12:07:50', '2022-04-09 20:36:27', 'ID-JK'),
(103, 'JAK-UT', 'Kota Adm. Jakarta Utara', '2022-04-09 20:30:47', '2022-04-09 20:36:27', 'ID-JK'),
(104, 'JAK-BAR', 'Kota Adm. Jakarta Barat', '2022-04-09 20:32:55', '2022-04-09 20:36:27', 'ID-JK'),
(105, 'JAK-SEL', 'Kota Adm. Jakarta Selatan', '2022-04-09 20:32:55', '2022-04-09 20:36:27', 'ID-JK'),
(106, 'JAK-TIM', 'Kota Adm. Jakarta Timur', '2022-04-09 20:32:55', '2022-04-09 20:36:27', 'ID-JK'),
(201, 'KB-BOG', 'Kabupaten Bogor', '2022-04-09 20:43:23', '2022-04-09 20:56:51', 'ID-JB'),
(202, 'KB-SUK', 'Kabupaten Sukabumi', '2022-04-09 20:56:10', '2022-04-09 15:43:37', 'ID-JB'),
(203, 'KB-CIAN', 'Kabupaten Cianjur', '2022-04-09 20:56:10', '2022-04-09 15:43:37', 'ID-JB'),
(204, 'KB-BAN', 'Kabupaten Bandung', '2022-04-09 20:56:10', '2022-04-09 15:43:37', 'ID-JB'),
(205, 'KB-GAR', 'Kabupaten Garut', '2022-04-09 20:56:10', '2022-04-09 15:43:37', 'ID-JB'),
(206, 'KB-TAS', 'Kabupaten Tasikmalaya', '2022-04-09 20:56:10', '2022-04-09 15:43:37', 'ID-JB'),
(207, 'KB-CIAM', 'Kabupaten Ciamis', '2022-04-09 20:56:10', '2022-04-09 15:43:37', 'ID-JB'),
(208, 'KB-KUN', 'Kabupaten Kuningan', '2022-04-09 20:56:10', '2022-04-09 15:43:37', 'ID-JB'),
(209, 'KB-CIR', 'Kabupaten Cirebon', '2022-04-09 20:56:10', '2022-04-09 15:43:37', 'ID-JB'),
(210, 'KB-MAJ', 'Kabupaten Majalengka', '2022-04-09 20:56:10', '2022-04-09 15:43:37', 'ID-JB'),
(211, 'KB-SUM', 'Kabupaten Sumedang', '2022-04-09 20:56:10', '2022-04-09 15:43:37', 'ID-JB'),
(212, 'KB-INDR', 'Kabupaten Indramayu', '2022-04-09 20:56:10', '2022-04-09 15:43:37', 'ID-JB'),
(213, 'KB-SUB', 'Kabupaten Subang', '2022-04-09 20:56:10', '2022-04-09 15:43:37', 'ID-JB'),
(214, 'KB-PUR', 'Kabupaten Purwakarta', '2022-04-09 20:56:10', '2022-04-09 15:43:37', 'ID-JB'),
(215, 'KB-KAR', 'Kabupaten Karawang', '2022-04-09 20:56:10', '2022-04-09 15:43:37', 'ID-JB'),
(216, 'KB-BEK', 'Kabupaten Bekasi', '2022-04-09 20:56:10', '2022-04-09 15:43:37', 'ID-JB'),
(217, 'KB-BANBAR', 'Kabupaten Bandung Barat', '2022-04-09 20:56:10', '2022-04-09 15:43:37', 'ID-JB'),
(218, 'KT-BOG', 'Kota Bogor', '2022-04-09 20:56:10', '2022-04-09 15:43:37', 'ID-JB'),
(219, 'KT-SUK', 'Kota Sukabumi', '2022-04-09 20:56:10', '2022-04-09 15:43:37', 'ID-JB'),
(220, 'KT-BAN', 'Kota Bandung', '2022-04-09 20:56:10', '2022-04-09 15:43:37', 'ID-JB'),
(221, 'KT-CIR', 'Kota Cirebon', '2022-04-09 20:56:10', '2022-04-09 15:43:37', 'ID-JB'),
(222, 'KT-BEK', 'Kota Bekasi', '2022-04-09 20:56:10', '2022-04-09 15:43:37', 'ID-JB'),
(223, 'KT-DEP', 'Kota Depok', '2022-04-09 20:56:10', '2022-04-09 15:43:37', 'ID-JB'),
(224, 'KT-CIM', 'Kota Cimahi', '2022-04-09 20:56:10', '2022-04-09 15:43:37', 'ID-JB'),
(225, 'KT-TAS', 'Kota Tasikmalaya', '2022-04-09 20:56:10', '2022-04-09 15:43:37', 'ID-JB'),
(226, 'KT-BANJ', 'Kota Banjar', '2022-04-09 20:56:10', '2022-04-09 15:43:37', 'ID-JB');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_provinsi`
--

CREATE TABLE `tbl_provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `kode_provinsi` varchar(26) NOT NULL,
  `nama_provinsi` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_provinsi`
--

INSERT INTO `tbl_provinsi` (`id_provinsi`, `kode_provinsi`, `nama_provinsi`, `created_at`, `update_at`) VALUES
(1, 'ID-JK', 'DKI Jakarta', '2022-04-09 12:02:41', '2022-04-09 17:58:28'),
(2, 'ID-JB', 'Jawa Barat', '2022-04-09 12:02:41', '2022-04-09 17:58:28');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_kabkota`
--
ALTER TABLE `tbl_kabkota`
  ADD PRIMARY KEY (`id_kabkota`) USING BTREE,
  ADD UNIQUE KEY `kode_kabkota` (`kode_kabkota`) USING BTREE,
  ADD KEY `kode_provinsi` (`kode_provinsi`);

--
-- Indeks untuk tabel `tbl_provinsi`
--
ALTER TABLE `tbl_provinsi`
  ADD PRIMARY KEY (`id_provinsi`) USING BTREE,
  ADD UNIQUE KEY `kode_provinsi` (`kode_provinsi`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_kabkota`
--
ALTER TABLE `tbl_kabkota`
  MODIFY `id_kabkota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=227;

--
-- AUTO_INCREMENT untuk tabel `tbl_provinsi`
--
ALTER TABLE `tbl_provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_kabkota`
--
ALTER TABLE `tbl_kabkota`
  ADD CONSTRAINT `tbl_kabkota_ibfk_1` FOREIGN KEY (`kode_provinsi`) REFERENCES `tbl_provinsi` (`kode_provinsi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
