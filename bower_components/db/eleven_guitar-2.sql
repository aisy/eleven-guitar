-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Feb 2017 pada 07.31
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eleven_guitar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `admin`) VALUES
(1, 'vidi', '123456', 1),
(2, 'aisymr', '1241180090', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `id_kategori` varchar(10) NOT NULL,
  `foto` text NOT NULL,
  `harga` varchar(10) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `id_kategori`, `foto`, `harga`, `keterangan`) VALUES
(4, 'gitar f', '1', '11.jpg', '23', 'lkfhdlkfh'),
(5, 'bass', '2', '41.jpg', '40', ';LDESPROPE'),
(6, 'MELODI', '4', '21.jpg', '50', 'SLKDHLFKDFH'),
(8, 'asas', '2', 'Asset_11.png', 'as', 'as'),
(9, 'sds', '1', '541d2ca34b11da334ba710f8d7fd7961.jpg', '23', 'sdsd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_kategori`
--

CREATE TABLE `barang_kategori` (
  `id_kategori` int(10) NOT NULL,
  `nama_kategori` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang_kategori`
--

INSERT INTO `barang_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Gitar'),
(2, 'Bass'),
(3, 'Ampli'),
(4, 'Effect'),
(5, 'pickup'),
(6, 'sdfdsf1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten_pembayaran`
--

CREATE TABLE `konten_pembayaran` (
  `id_kpembayaran` int(11) NOT NULL,
  `nama_section` varchar(40) NOT NULL,
  `judul_section` varchar(40) NOT NULL,
  `isi_section` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten_produk`
--

CREATE TABLE `konten_produk` (
  `id_kproduk` int(11) NOT NULL,
  `nama_section` varchar(40) NOT NULL,
  `judul_section` varchar(40) NOT NULL,
  `isi_section` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten_testimoni`
--

CREATE TABLE `konten_testimoni` (
  `id_ktestimoni` int(11) NOT NULL,
  `judul_testimoni` varchar(30) NOT NULL,
  `caption` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten_utama`
--

CREATE TABLE `konten_utama` (
  `id_kutama` int(11) NOT NULL,
  `nama_section` varchar(30) NOT NULL,
  `judul_section` varchar(40) NOT NULL,
  `isi section` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_owner`
--

CREATE TABLE `list_owner` (
  `id_listown` int(11) NOT NULL,
  `nama_list` varchar(30) NOT NULL,
  `caption` text NOT NULL,
  `icon` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_pembayaran`
--

CREATE TABLE `list_pembayaran` (
  `id_list` int(11) NOT NULL,
  `nama_list` varchar(30) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `caption` text NOT NULL,
  `warna` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_testimoni`
--

CREATE TABLE `list_testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `isi_testimoni` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `gambar_header` varchar(100) NOT NULL,
  `isi_profil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_owner`
--

CREATE TABLE `profil_owner` (
  `id_powner` int(11) NOT NULL,
  `nama_owner` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `id_listown` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `caption` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `barang_kategori`
--
ALTER TABLE `barang_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konten_pembayaran`
--
ALTER TABLE `konten_pembayaran`
  ADD PRIMARY KEY (`id_kpembayaran`);

--
-- Indexes for table `konten_produk`
--
ALTER TABLE `konten_produk`
  ADD PRIMARY KEY (`id_kproduk`);

--
-- Indexes for table `konten_testimoni`
--
ALTER TABLE `konten_testimoni`
  ADD PRIMARY KEY (`id_ktestimoni`);

--
-- Indexes for table `konten_utama`
--
ALTER TABLE `konten_utama`
  ADD PRIMARY KEY (`id_kutama`);

--
-- Indexes for table `list_owner`
--
ALTER TABLE `list_owner`
  ADD PRIMARY KEY (`id_listown`);

--
-- Indexes for table `list_pembayaran`
--
ALTER TABLE `list_pembayaran`
  ADD PRIMARY KEY (`id_list`);

--
-- Indexes for table `list_testimoni`
--
ALTER TABLE `list_testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `profil_owner`
--
ALTER TABLE `profil_owner`
  ADD PRIMARY KEY (`id_powner`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `barang_kategori`
--
ALTER TABLE `barang_kategori`
  MODIFY `id_kategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `konten_produk`
--
ALTER TABLE `konten_produk`
  MODIFY `id_kproduk` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `konten_testimoni`
--
ALTER TABLE `konten_testimoni`
  MODIFY `id_ktestimoni` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `konten_utama`
--
ALTER TABLE `konten_utama`
  MODIFY `id_kutama` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `list_owner`
--
ALTER TABLE `list_owner`
  MODIFY `id_listown` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `list_pembayaran`
--
ALTER TABLE `list_pembayaran`
  MODIFY `id_list` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `list_testimoni`
--
ALTER TABLE `list_testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profil_owner`
--
ALTER TABLE `profil_owner`
  MODIFY `id_powner` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
