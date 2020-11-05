-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Nov 2020 pada 14.30
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minimarket`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan`
--

CREATE TABLE `makanan` (
  `idbarang` varchar(20) NOT NULL,
  `namabarang` varchar(100) DEFAULT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `jumlahstok` char(1) DEFAULT NULL,
  `harga` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `makanan`
--

INSERT INTO `makanan` (`idbarang`, `namabarang`, `kategori`, `jumlahstok`, `harga`) VALUES
('001', 'Nasi Goreng', 'Makanan', '4', '10000'),
('002', 'Soto', 'Makanan', '7', '12000'),
('003', 'Pecel Lele', 'Makanan', '5', '15000'),
('005', 'Mie Ayam', 'Makanan', '5', '13000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `minuman`
--

CREATE TABLE `minuman` (
  `idbarang` varchar(20) NOT NULL,
  `namabarang` varchar(100) DEFAULT NULL,
  `kategori` char(100) DEFAULT NULL,
  `jumlahstok` varchar(200) DEFAULT NULL,
  `harga` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `minuman`
--

INSERT INTO `minuman` (`idbarang`, `namabarang`, `kategori`, `jumlahstok`, `harga`) VALUES
('101', 'Es Teh', 'Minuman', '9', '5000'),
('102', 'Jeruk Hangat', 'Minuman', '7', '7000'),
('104', 'Vanilla Latte', 'Minuman', '10', '10000'),
('105', 'Cappucino', 'Minuman', '2', '7000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`idbarang`);

--
-- Indeks untuk tabel `minuman`
--
ALTER TABLE `minuman`
  ADD PRIMARY KEY (`idbarang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
