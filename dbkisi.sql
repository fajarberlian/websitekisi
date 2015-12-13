-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2015 at 06:01 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbkisi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `level` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT 'user',
  `blokir` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `password`, `nama_lengkap`, `email`, `no_telp`, `level`, `blokir`) VALUES
('admin', '123', 'Administrator', 'admin@kisi-its.tk', '085259164034', 'admin', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `id_galeri` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(1000) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tgl_masuk` date NOT NULL,
  PRIMARY KEY (`id_galeri`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `gambar`, `judul`, `tgl_masuk`) VALUES
(6, '6535281.jpg', 'Install1', '2015-12-13'),
(7, '9235291.jpg', 'Install1', '2015-12-13'),
(8, '535294.jpg', 'Install1', '2015-12-13');

-- --------------------------------------------------------

--
-- Table structure for table `hubungi`
--

CREATE TABLE IF NOT EXISTS `hubungi` (
  `nama` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `pesan` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`nama`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `hubungi`
--

INSERT INTO `hubungi` (`nama`, `email`, `pesan`) VALUES
('berli', 'fajarberli@hotmail.com', 'adassgasggasgasas'),
('ber', 'ber@kisi.com', 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `isi` text COLLATE latin1_general_ci NOT NULL,
  `tgl_masuk` date NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_produk`),
  FULLTEXT KEY `isi` (`isi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=45 ;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `judul`, `isi`, `tgl_masuk`, `gambar`) VALUES
(40, 'kisi', 'adalah', '2015-12-13', '75173488.jpg'),
(44, 'Dota', '[KISI MUDA MEMBERDAYA PRESENTS]\r\nDirOsah Ta''lim Muta''alim!\r\n\r\nMau tau cara sukses dan adab menuntut ilmu menurut Islam? Ngaji kitab Ta''lim Muta''alim Karangan Syekh Az-Zarnuji merupakan salah satu cara untuk mengungkap itu semua! Kabar gembiranya Wajib/Fardhu ''ain untuk Pengurus KISI Muda Memberdaya untuk mengikuti Dirosah(Belajar) ini!\r\n\r\nKapan?\r\nSetiap Jum''at pagi Pukul 8.00 mulai 2 Oktober 2015.\r\n\r\nBeli kitabnya dimana? Teman-teman dari Departemen Syiar akan membantu membelikan Kitab Ta''lim Muta''alim dengan Iuran sejumlah 10k.\r\n\r\nBayarnya dimana? Bayarnya di Najib atau Mas Farhad\r\n\r\n#KISIMudaMemberdaya #KISINgaji', '2015-12-13', '7BASMALLAH `.jpg'),
(43, 'Lagi', 'Lagi', '2015-12-13', '85alhusniyah.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
