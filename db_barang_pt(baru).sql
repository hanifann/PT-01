-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Apr 2019 pada 11.14
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_barang_pt`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jual_barang`
--

CREATE TABLE `jual_barang` (
  `id_barang` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `nama_barang` varchar(30) DEFAULT NULL,
  `kondisi_barang` varchar(10) DEFAULT NULL,
  `kategori_barang` varchar(20) DEFAULT NULL,
  `alamat_barang` varchar(100) DEFAULT NULL,
  `harga_barang` int(11) DEFAULT NULL,
  `jumlah_barang` int(11) DEFAULT NULL,
  `deskripsi_barang` varchar(255) DEFAULT NULL,
  `poto_barang` longblob,
  `user_toko` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_jual` int(11) NOT NULL,
  `jumlah_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `id_jual`, `jumlah_barang`) VALUES
(7, 13, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `user_toko` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`id`, `id_barang`, `nama_barang`, `jumlah_barang`, `harga_barang`, `user_toko`) VALUES
(1, 17, 'Cangkul Kepala Dua', 2, 500000, 'padisa');

--
-- Trigger `penjualan`
--
DELIMITER $$
CREATE TRIGGER `tgr_penjualan` AFTER INSERT ON `penjualan` FOR EACH ROW BEGIN
	UPDATE jual_barang SET jumlah_barang=jumlah_barang - NEW.jumlah_barang
    WHERE id_barang = NEW.id_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tambah_stok`
--

CREATE TABLE `tambah_stok` (
  `id` int(11) NOT NULL,
  `nama_barang` int(11) NOT NULL,
  `jumlah_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_toko`
--

CREATE TABLE `tb_toko` (
  `id_toko` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_toko` varchar(50) DEFAULT NULL,
  `alamat_toko` varchar(100) DEFAULT NULL,
  `slogan_toko` varchar(48) DEFAULT NULL,
  `deskripsi_toko` varchar(148) DEFAULT NULL,
  `img_toko` longblob,
  `img_toko_name` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
