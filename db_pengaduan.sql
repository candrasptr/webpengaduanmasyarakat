-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Mar 2021 pada 10.37
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pengaduan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_masyarakat`
--

CREATE TABLE `tbl_masyarakat` (
  `nik` varchar(20) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(100) NOT NULL,
  `telp` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_masyarakat`
--

INSERT INTO `tbl_masyarakat` (`nik`, `nama`, `username`, `password`, `telp`) VALUES
('12343', 'candra', 'candra', '$2y$10$5AO0gGQOpsQVN9b0qYGF3O0KMceqOocfi1tQEtZCoWjpzqMBKdpji', '085157'),
('12345678', 'Candra saputra', 'armin', '$2y$10$S/kPnmqJIw0y2RO6kKyrbOuEOMW92CBLWDfFQDZUsAvJSHgzOHqBO', '089');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengaduan`
--

CREATE TABLE `tbl_pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `tanggal_pengaduan` date NOT NULL,
  `nik_id` varchar(20) NOT NULL,
  `isi_laporan` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  `status` enum('terkirim','proses','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_petugas`
--

CREATE TABLE `tbl_petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(100) NOT NULL,
  `telp` varchar(13) DEFAULT NULL,
  `status` enum('admin','petugas') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_petugas`
--

INSERT INTO `tbl_petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `telp`, `status`, `created_at`, `updated_at`) VALUES
(1, 'candra', 'admin', '$2y$10$MmwsN.RmXTT5lpR9m5dfS.NH6CF8/4dxmvLuRiyUirLEj.Yh9Z6.e', '089', 'admin', '2021-03-02 01:24:25', '2021-03-02 01:24:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tanggal`
--

CREATE TABLE `tbl_tanggal` (
  `id_tanggapan` int(11) NOT NULL,
  `pengaduan_id` int(11) NOT NULL,
  `tanggapan_id` int(11) NOT NULL,
  `tanggapan` text NOT NULL,
  `petugas_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_masyarakat`
--
ALTER TABLE `tbl_masyarakat`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `tbl_pengaduan`
--
ALTER TABLE `tbl_pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indeks untuk tabel `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `tbl_tanggal`
--
ALTER TABLE `tbl_tanggal`
  ADD PRIMARY KEY (`id_tanggapan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_pengaduan`
--
ALTER TABLE `tbl_pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_tanggal`
--
ALTER TABLE `tbl_tanggal`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
