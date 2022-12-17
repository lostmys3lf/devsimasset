-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 17 Des 2022 pada 07.58
-- Versi server: 10.7.3-MariaDB-log
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asset`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `no` int(100) NOT NULL,
  `no_id_barang` varchar(25) NOT NULL,
  `tanggal_perolehan` date NOT NULL,
  `id_barang` varchar(25) NOT NULL,
  `id_gedung` varchar(10) NOT NULL,
  `id_lantai` varchar(10) NOT NULL,
  `id_ruangan` varchar(10) NOT NULL,
  `id_pj` varchar(10) NOT NULL,
  `id_kelompok_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `spesifikasi` varchar(50) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `no_seri` varchar(10) NOT NULL,
  `cara_perolehan` varchar(50) NOT NULL,
  `nilai_perolehan` int(11) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `umur_ekonomis` int(11) NOT NULL,
  `tanggal_exp_garansi` date NOT NULL,
  `upload_foto` varchar(100) NOT NULL,
  `upload_dokumen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_detail_barang`
--

CREATE TABLE `tbl_detail_barang` (
  `id_detail_barang` varchar(10) NOT NULL,
  `id_barang` varchar(25) NOT NULL,
  `id_jenis_barang` varchar(10) NOT NULL,
  `no_bast` varchar(25) NOT NULL,
  `qrcode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gedung`
--

CREATE TABLE `tbl_gedung` (
  `no` int(100) NOT NULL,
  `id_tanah` varchar(10) NOT NULL,
  `id_gedung` varchar(10) NOT NULL,
  `nama_gedung` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `provinsi` varchar(25) NOT NULL,
  `kota` varchar(25) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kel/desa` varchar(100) NOT NULL,
  `luas` varchar(100) NOT NULL,
  `jumlah_lantai` varchar(100) NOT NULL,
  `jumlah_ruangan` varchar(100) NOT NULL,
  `cara_perolehan` varchar(100) NOT NULL,
  `nilai_perolehan` varchar(100) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `tanggal_terbit` date NOT NULL,
  `mitra_sewa` varchar(100) NOT NULL,
  `nilai_sewa` varchar(100) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_berakhir` date NOT NULL,
  `upload_dokumen` varchar(100) NOT NULL,
  `upload_foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jenis_barang`
--

CREATE TABLE `tbl_jenis_barang` (
  `id_jenis_barang` varchar(10) NOT NULL,
  `nama_jenis_barang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kawasan`
--

CREATE TABLE `tbl_kawasan` (
  `id_kawasan` varchar(10) NOT NULL,
  `kawasan` varchar(50) NOT NULL,
  `koordx` varchar(100) NOT NULL,
  `koordy` varchar(100) NOT NULL,
  `master_plan` varchar(50) NOT NULL,
  `amdal` varchar(100) NOT NULL,
  `andalalin` varchar(100) NOT NULL,
  `luas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelompok_barang`
--

CREATE TABLE `tbl_kelompok_barang` (
  `id_kelompok_barang` varchar(10) NOT NULL,
  `nama_kelompok_barang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_lantai`
--

CREATE TABLE `tbl_lantai` (
  `id_lantai` varchar(5) NOT NULL,
  `nomor_lantai` int(11) NOT NULL,
  `id_gedung` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_lembaga`
--

CREATE TABLE `tbl_lembaga` (
  `id_lembaga` varchar(5) NOT NULL,
  `id_kawasan` varchar(10) NOT NULL,
  `nama_lembaga` varchar(25) NOT NULL,
  `kode_lokasi` varchar(5) NOT NULL,
  `kode_pp` varchar(10) NOT NULL,
  `id_desa` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp1` varchar(15) NOT NULL,
  `no_telp2` varchar(15) NOT NULL,
  `email1` varchar(30) NOT NULL,
  `email2` varchar(30) NOT NULL,
  `web` varchar(50) NOT NULL,
  `upload_foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_lokasi`
--

CREATE TABLE `tbl_lokasi` (
  `id_lokasi` varchar(5) NOT NULL,
  `longitude` char(50) NOT NULL,
  `latitude` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_moving_asset`
--

CREATE TABLE `tbl_moving_asset` (
  `no` int(100) NOT NULL,
  `id_moving_asset` varchar(10) NOT NULL,
  `id_gedung` varchar(10) NOT NULL,
  `id_ruangan` varchar(10) NOT NULL,
  `id_barang` varchar(10) NOT NULL,
  `jenis_aset` varchar(20) NOT NULL,
  `nama_peminjam` varchar(20) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengembalian_aset`
--

CREATE TABLE `tbl_pengembalian_aset` (
  `no` int(11) NOT NULL,
  `id_pengembalian_aset` varchar(10) NOT NULL,
  `nama_pengembali` varchar(50) NOT NULL,
  `jenis_aset` varchar(25) NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_perolehan_aset`
--

CREATE TABLE `tbl_perolehan_aset` (
  `no` int(11) NOT NULL,
  `id_perolehan_aset` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `total` varchar(100) NOT NULL,
  `status_pengadaan` varchar(100) NOT NULL,
  `tanggal_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ruangan`
--

CREATE TABLE `tbl_ruangan` (
  `id_ruangan` varchar(5) NOT NULL,
  `nama_ruangan` varchar(50) NOT NULL,
  `id_lantai` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tanah`
--

CREATE TABLE `tbl_tanah` (
  `no` int(100) NOT NULL,
  `id_kawasan` varchar(10) NOT NULL,
  `id_tanah` varchar(10) NOT NULL,
  `nama_tanah` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `provinsi` varchar(25) NOT NULL,
  `kota` varchar(25) NOT NULL,
  `kecamatan` varchar(25) NOT NULL,
  `kel/desa` varchar(25) NOT NULL,
  `cara_perolehan` varchar(50) NOT NULL,
  `hak` varchar(50) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `tgl_terbit` date NOT NULL,
  `luas` varchar(100) NOT NULL,
  `upload_dokumen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_unit`
--

CREATE TABLE `tbl_unit` (
  `id_unit` varchar(25) NOT NULL,
  `nama_unit` varchar(50) NOT NULL,
  `id_lembaga` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_kelompok_barang` (`id_kelompok_barang`),
  ADD KEY `fk_id_gedung` (`id_gedung`),
  ADD KEY `fk_id_lantai` (`id_lantai`),
  ADD KEY `fk_id_ruangan` (`id_ruangan`),
  ADD KEY `fk_id_unit` (`id_pj`);

--
-- Indeks untuk tabel `tbl_detail_barang`
--
ALTER TABLE `tbl_detail_barang`
  ADD PRIMARY KEY (`id_detail_barang`),
  ADD KEY `fk_id_barang` (`id_barang`),
  ADD KEY `fk_id_jenis_barang` (`id_jenis_barang`);

--
-- Indeks untuk tabel `tbl_gedung`
--
ALTER TABLE `tbl_gedung`
  ADD PRIMARY KEY (`id_gedung`),
  ADD KEY `fk_id_tanah` (`id_tanah`);

--
-- Indeks untuk tabel `tbl_jenis_barang`
--
ALTER TABLE `tbl_jenis_barang`
  ADD PRIMARY KEY (`id_jenis_barang`);

--
-- Indeks untuk tabel `tbl_kawasan`
--
ALTER TABLE `tbl_kawasan`
  ADD PRIMARY KEY (`id_kawasan`);

--
-- Indeks untuk tabel `tbl_kelompok_barang`
--
ALTER TABLE `tbl_kelompok_barang`
  ADD PRIMARY KEY (`id_kelompok_barang`);

--
-- Indeks untuk tabel `tbl_lantai`
--
ALTER TABLE `tbl_lantai`
  ADD PRIMARY KEY (`id_lantai`),
  ADD KEY `fk_lantai_gedung` (`id_gedung`);

--
-- Indeks untuk tabel `tbl_lembaga`
--
ALTER TABLE `tbl_lembaga`
  ADD PRIMARY KEY (`id_lembaga`),
  ADD UNIQUE KEY `id_kawasan` (`id_kawasan`) USING BTREE;

--
-- Indeks untuk tabel `tbl_lokasi`
--
ALTER TABLE `tbl_lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indeks untuk tabel `tbl_moving_asset`
--
ALTER TABLE `tbl_moving_asset`
  ADD PRIMARY KEY (`id_moving_asset`);

--
-- Indeks untuk tabel `tbl_pengembalian_aset`
--
ALTER TABLE `tbl_pengembalian_aset`
  ADD PRIMARY KEY (`id_pengembalian_aset`);

--
-- Indeks untuk tabel `tbl_perolehan_aset`
--
ALTER TABLE `tbl_perolehan_aset`
  ADD PRIMARY KEY (`id_perolehan_aset`);

--
-- Indeks untuk tabel `tbl_ruangan`
--
ALTER TABLE `tbl_ruangan`
  ADD PRIMARY KEY (`id_ruangan`),
  ADD KEY `fk_ruangan_lantai` (`id_lantai`);

--
-- Indeks untuk tabel `tbl_tanah`
--
ALTER TABLE `tbl_tanah`
  ADD PRIMARY KEY (`id_tanah`),
  ADD KEY `id_kawasan` (`id_kawasan`);

--
-- Indeks untuk tabel `tbl_unit`
--
ALTER TABLE `tbl_unit`
  ADD PRIMARY KEY (`id_unit`),
  ADD KEY `fk_id_lembaga` (`id_lembaga`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD CONSTRAINT `fk_id_gedung` FOREIGN KEY (`id_gedung`) REFERENCES `tbl_gedung` (`id_gedung`),
  ADD CONSTRAINT `fk_id_kelompok_barang` FOREIGN KEY (`id_kelompok_barang`) REFERENCES `tbl_kelompok_barang` (`id_kelompok_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_lantai` FOREIGN KEY (`id_lantai`) REFERENCES `tbl_lantai` (`id_lantai`),
  ADD CONSTRAINT `fk_id_ruangan` FOREIGN KEY (`id_ruangan`) REFERENCES `tbl_ruangan` (`id_ruangan`),
  ADD CONSTRAINT `fk_id_unit` FOREIGN KEY (`id_pj`) REFERENCES `tbl_unit` (`id_unit`);

--
-- Ketidakleluasaan untuk tabel `tbl_detail_barang`
--
ALTER TABLE `tbl_detail_barang`
  ADD CONSTRAINT `fk_id_barang` FOREIGN KEY (`id_barang`) REFERENCES `tbl_barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_jenis_barang` FOREIGN KEY (`id_jenis_barang`) REFERENCES `tbl_jenis_barang` (`id_jenis_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_gedung`
--
ALTER TABLE `tbl_gedung`
  ADD CONSTRAINT `fk_id_tanah` FOREIGN KEY (`id_tanah`) REFERENCES `tbl_tanah` (`id_tanah`);

--
-- Ketidakleluasaan untuk tabel `tbl_lantai`
--
ALTER TABLE `tbl_lantai`
  ADD CONSTRAINT `fk_lantai_gedung` FOREIGN KEY (`id_gedung`) REFERENCES `tbl_gedung` (`id_gedung`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_lembaga`
--
ALTER TABLE `tbl_lembaga`
  ADD CONSTRAINT `fk_id_kawasan` FOREIGN KEY (`id_kawasan`) REFERENCES `tbl_kawasan` (`id_kawasan`);

--
-- Ketidakleluasaan untuk tabel `tbl_ruangan`
--
ALTER TABLE `tbl_ruangan`
  ADD CONSTRAINT `fk_ruangan_lantai` FOREIGN KEY (`id_lantai`) REFERENCES `tbl_lantai` (`id_lantai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_tanah`
--
ALTER TABLE `tbl_tanah`
  ADD CONSTRAINT `fk_tanah_kawasan` FOREIGN KEY (`id_kawasan`) REFERENCES `tbl_kawasan` (`id_kawasan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_unit`
--
ALTER TABLE `tbl_unit`
  ADD CONSTRAINT `fk_id_lembaga` FOREIGN KEY (`id_lembaga`) REFERENCES `tbl_lembaga` (`id_lembaga`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
