-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 09, 2015 at 02:29 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '7daacea5f373b4c1c054158b126d317f');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `id_buku` int(11) NOT NULL AUTO_INCREMENT,
  `judul_buku` varchar(30) DEFAULT NULL,
  `penulis_buku` varchar(50) DEFAULT NULL,
  `penerbit_buku` varchar(30) DEFAULT NULL,
  `tahun_buku` int(11) DEFAULT NULL,
  `kategori_buku` int(11) DEFAULT NULL,
  `sampul_buku` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `penulis_buku`, `penerbit_buku`, `tahun_buku`, `kategori_buku`, `sampul_buku`) VALUES
(1, 'Pemrograman Berorientasi Objek', 'Dennis', 'Angkasa Raya', 2000, 2, ''),
(2, 'Pemrogaman Java', 'John', 'Angkasa Raya', 2002, 2, ''),
(3, 'Bahasa Mandarin', 'Eki', 'Gramedia', 2004, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Bahasa'),
(2, 'Pemrograman'),
(3, 'Ekonomi'),
(4, 'Hukum'),
(5, 'fisika'),
(6, 'kimia');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_buku`
--
CREATE TABLE IF NOT EXISTS `view_buku` (
`id_buku` int(11)
,`judul_buku` varchar(30)
,`penulis_buku` varchar(50)
,`penerbit_buku` varchar(30)
,`tahun_buku` int(11)
,`kategori_buku` int(11)
,`sampul_buku` varchar(100)
,`id_kategori` int(11)
,`kategori` varchar(20)
);
-- --------------------------------------------------------

--
-- Structure for view `view_buku`
--
DROP TABLE IF EXISTS `view_buku`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_buku` AS select `buku`.`id_buku` AS `id_buku`,`buku`.`judul_buku` AS `judul_buku`,`buku`.`penulis_buku` AS `penulis_buku`,`buku`.`penerbit_buku` AS `penerbit_buku`,`buku`.`tahun_buku` AS `tahun_buku`,`buku`.`kategori_buku` AS `kategori_buku`,`buku`.`sampul_buku` AS `sampul_buku`,`kategori`.`id_kategori` AS `id_kategori`,`kategori`.`kategori` AS `kategori` from (`kategori` join `buku`) where (`buku`.`kategori_buku` = `kategori`.`id_kategori`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
