-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jun 2019 pada 10.14
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olahdata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `email`, `username`, `password`) VALUES
(1, 'hidayatfachri11@gmail.com', 'fachry7', '1234567'),
(2, 'admin@gmail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang`
--

CREATE TABLE `data_barang` (
  `id_terima` varchar(7) NOT NULL,
  `kode_barang` varchar(7) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `stok` varchar(20) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `nama_suplier` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_barang`
--

INSERT INTO `data_barang` (`id_terima`, `kode_barang`, `nama_barang`, `stok`, `lokasi`, `nama_suplier`) VALUES
('TER1', 'BAR989', 'Sendok', '100', 'Gudang 2', 'Makmur Abadi'),
('TER19', 'BAR444', 'Sabun Madu', '100', 'Gudang 1', 'Dallah'),
('TER22', 'BAR88', 'Handuk Kecil', '100', 'Gudang 2', 'Dallah'),
('TER3', 'BAR645', 'Handuk', '100', 'Gudang 3', 'Sejahtara'),
('TER9', 'BAR56', 'Sendok Panjang', '70', 'Gudang 3', 'Makmur Abadi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_suplier`
--

CREATE TABLE `data_suplier` (
  `id_suplier` varchar(7) NOT NULL,
  `nama_suplier` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_suplier`
--

INSERT INTO `data_suplier` (`id_suplier`, `nama_suplier`, `alamat`, `no_hp`) VALUES
('SUP1', 'Sukamaju', 'Depok', '021225252'),
('SUP2', 'Makmur Abadi', 'Bogor', '021726212'),
('SUP3', 'Sejahtara', 'Jakarta', '021672121'),
('SUP7', 'Dallah', 'Padang', '021343212');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_vendor`
--

CREATE TABLE `data_vendor` (
  `id_vendor` varchar(7) NOT NULL,
  `nama_vendor` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_vendor`
--

INSERT INTO `data_vendor` (`id_vendor`, `nama_vendor`, `alamat`, `no_hp`) VALUES
('2ven3', 'PT Cocacola', 'bogor', '0812323232'),
('3ven5', 'PT Unilever', 'depok', '021222121'),
('5ven7', 'PT Astra', 'Jakarta', '02187871');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` varchar(7) NOT NULL,
  `nama_lokasi` varchar(30) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `nama_lokasi`, `detail`) VALUES
('123', 'Gudang 2', 'Di tempat terang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permintaan_barang`
--

CREATE TABLE `permintaan_barang` (
  `id_po` varchar(7) NOT NULL,
  `kode_barang` varchar(7) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `nama_vendor` varchar(20) NOT NULL,
  `stok` int(10) NOT NULL,
  `harga` int(15) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `permintaan_barang`
--

INSERT INTO `permintaan_barang` (`id_po`, `kode_barang`, `nama_barang`, `nama_vendor`, `stok`, `harga`, `status`) VALUES
('PO12', 'BAR123', 'Cocacola', 'PT Cocacola', 10, 20000, 'ACC'),
('PO15', 'BAR377', 'Sendok', 'PT Unilever', 200, 2000000, 'ACC'),
('PO33', 'BAR232', 'Lilin', 'PT Cocacola', 10, 200000, 'ACC'),
('PO899', 'BAR423', 'Sendok', 'PT Cocacola', 102, 1000000, 'ACC'),
('PO90', 'BAR765', 'Garpu', 'PT Astra', 30, 100000, 'Belum ACC');

-- --------------------------------------------------------

--
-- Struktur dari tabel `purchase_order`
--

CREATE TABLE `purchase_order` (
  `id_po` varchar(7) NOT NULL,
  `nama_vendor` varchar(30) NOT NULL,
  `kode_barang` varchar(7) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `stok` int(15) NOT NULL,
  `harga` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_masuk`
--

CREATE TABLE `transaksi_masuk` (
  `id_terima` varchar(7) NOT NULL,
  `nama_suplier` varchar(30) NOT NULL,
  `kode_barang` varchar(7) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `jumlah` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi_masuk`
--

INSERT INTO `transaksi_masuk` (`id_terima`, `nama_suplier`, `kode_barang`, `nama_barang`, `jumlah`) VALUES
('TER1', 'Makmur Abadi', 'BAR989', 'Sendok', 100),
('TER19', 'Dallah', 'BAR444', 'Sabun Madu', 100),
('TER22', 'Dallah', 'BAR88', 'Handuk Kecil', 100),
('TER3', 'Sejahtara', 'BAR645', 'Handuk', 100),
('TER9', 'Makmur Abadi', 'BAR56', 'Sendok Panjang', 70);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`id_terima`);

--
-- Indeks untuk tabel `data_suplier`
--
ALTER TABLE `data_suplier`
  ADD PRIMARY KEY (`id_suplier`);

--
-- Indeks untuk tabel `data_vendor`
--
ALTER TABLE `data_vendor`
  ADD PRIMARY KEY (`id_vendor`);

--
-- Indeks untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indeks untuk tabel `permintaan_barang`
--
ALTER TABLE `permintaan_barang`
  ADD PRIMARY KEY (`id_po`);

--
-- Indeks untuk tabel `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`id_po`);

--
-- Indeks untuk tabel `transaksi_masuk`
--
ALTER TABLE `transaksi_masuk`
  ADD PRIMARY KEY (`id_terima`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
