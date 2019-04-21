-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 21, 2019 at 05:28 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_barang_PT`
--

-- --------------------------------------------------------

--
-- Table structure for table `jual_barang`
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
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_jual` int(11) NOT NULL,
  `jumlah_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `id_jual`, `jumlah_barang`) VALUES
(7, 13, 0);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
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
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id`, `id_barang`, `nama_barang`, `jumlah_barang`, `harga_barang`, `user_toko`) VALUES
(1, 17, 'Cangkul Kepala Dua', 2, 500000, 'padisa');

--
-- Triggers `penjualan`
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
-- Table structure for table `tambah_stok`
--

CREATE TABLE `tambah_stok` (
  `id` int(11) NOT NULL,
  `nama_barang` int(11) NOT NULL,
  `jumlah_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_toko`
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

--
-- Dumping data for table `tb_toko`
--

INSERT INTO `tb_toko` (`id_toko`, `id_user`, `nama_toko`, `alamat_toko`, `slogan_toko`, `deskripsi_toko`, `img_toko`, `img_toko_name`) VALUES
(9, 8, 'haris', NULL, NULL, NULL, NULL, NULL),
(10, 9, 'restu', NULL, NULL, NULL, NULL, NULL),
(11, 10, 'dadan', NULL, NULL, NULL, NULL, NULL),
(12, 11, 'padisa', NULL, NULL, NULL, NULL, NULL),
(13, 12, 'budi', NULL, NULL, NULL, NULL, NULL),
(14, 13, 'putri', NULL, NULL, NULL, NULL, NULL),
(4, 4, 'toko bambang', NULL, 'ali manjaro', 'bambang', '', 'boot.jpg'),
(6, 5, 'bama', NULL, NULL, NULL, NULL, NULL),
(7, 6, 'hawa', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(1, 'hasbi', '$2y$10$Ta1Vz8gOlOt4mZI2UM7FT.wYCfNMiyMtlrBKLAQQ7D.7vH9mGjEv6', 'hasbi@n.com'),
(4, 'wumbo', '$2y$10$tZbEiruZOE5wsmnSDPQxYe/bQwfD.t1jYU49MjI6..ebuh0uA8j0m', 'wumbo@gmail.com'),
(5, 'bama', '$2y$10$IUrUY4299dcqRlvE6ojC4eM4x6eTckJVifg1Q3PnGDfql2oUSYTsG', 'bama@gmail.com'),
(6, 'hawa', '$2y$10$AVS8wqLovVhjHExNAD2QhuXEVVZM/9uEAjbbVb/zi9713AA1uEove', 'hawa@h.com'),
(7, 'bambang', '$2y$10$GcLXezmqT7Rz5AAxhtOFceFkSGm7HPvqtj1xZaEhmsIe2SKTIGnA6', 'bambang@go.com'),
(8, 'haris', '$2y$10$gtgbb.9rA3pvP1aP8ojZXO8fZi9MzPaIgItUYm02xAdEDA01rUKti', 'haris@gmail.com'),
(9, 'restu', '$2y$10$Pb4e7JEEWCctpnRIX90giOqA/rZ3NHoR0i.rJdMh0hn0rPpr1eC2m', 'restu@gmail.com'),
(10, 'dadan', '$2y$10$Z165Wandd9lpJIDlS0wcxu4TVMmEL8pxCzsuQfdz2izbdNQOZ7fgW', 'dadan@gmail.com'),
(11, 'padisa', '$2y$10$83AibsdbwZIKDSjPHIbcLeVaQ2aH3T49P2INVYliLhAf74IkkY/Wu', 'padisa@gmail.com'),
(12, 'budi', '$2y$10$vC9rG3UBzkIDeVHCw/J7N.9Nxai4PAK0YQ/pe6H5h5x5yRms6JSWC', 'budi@gulag.com'),
(13, 'putri', '$2y$10$eiiTmUQjOUOUwzYawDYXBOjn..YPEfU3xS9vnhz2jtXSEnXGfuDJq', 'putri@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
