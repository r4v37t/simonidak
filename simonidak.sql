-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 08. Juli 2019 jam 13:09
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simonidak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `simoni_user`
--

CREATE TABLE IF NOT EXISTS `simoni_user` (
  `userid` varchar(30) NOT NULL,
  `userpwd` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` varchar(30) NOT NULL,
  `last_login` datetime NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `simoni_user`
--

INSERT INTO `simoni_user` (`userid`, `userpwd`, `nama`, `nip`, `email`, `level`, `last_login`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', '-', 'akustevanry@gmail.com', 'Administrator', '2019-07-08 12:24:32'),
('henick', '202cb962ac59075b964b07152d234b70', 'HENI MARIATI, ST', '198103312005012014', 'henimariati@gmail.com', 'PPK', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
