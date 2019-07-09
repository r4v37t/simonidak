-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 09. Juli 2019 jam 10:44
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
-- Struktur dari tabel `simoni_paket`
--

CREATE TABLE IF NOT EXISTS `simoni_paket` (
  `paketid` int(11) NOT NULL AUTO_INCREMENT,
  `bidang` varchar(50) NOT NULL,
  `nama` text NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `pagu` bigint(20) NOT NULL,
  `target` int(11) NOT NULL,
  `satuan` varchar(30) NOT NULL,
  `pengadaan` varchar(30) NOT NULL,
  `dak` varchar(30) NOT NULL,
  `tahun` int(11) NOT NULL,
  PRIMARY KEY (`paketid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data untuk tabel `simoni_paket`
--

INSERT INTO `simoni_paket` (`paketid`, `bidang`, `nama`, `lokasi`, `pagu`, `target`, `satuan`, `pengadaan`, `dak`, `tahun`) VALUES
(1, 'Sanitasi', 'Pembangunan tangki septik skala individual perdesaan di Desa Masupa Ria, Kec. Mandau Talawang (desa ODF)', 'Desa Masupa Ria, Kec. Mandau Talawang', 250000000, 50, 'Unit', 'Swakelola', 'Reguler', 2019),
(3, 'Sanitasi', 'Pembangunan tangki septik skala individual perdesaan di Desa Hurung Pukung, Kec. Kapuas Tengah (desa ODF)', 'Desa Hurung Pukung, Kec. Kapuas Tengah', 400000000, 80, 'Unit', 'Swakelola', 'Reguler', 2019),
(4, 'Sanitasi', 'Pembangunan tangki septik skala individual perdesaan di Desa Rantau Jaya, Kec. Mantangai (desa ODF)', 'Desa Rantau Jaya, Kec. Mantangai', 250000000, 50, 'Unit', 'Swakelola', 'Reguler', 2019),
(5, 'Sanitasi', 'Pembangunan tangki septik skala individual perdesaan di Desa Suka Maju, Kec. Mantangai (desa ODF)', 'Desa Suka Maju, Kec. Mantangai', 250000000, 50, 'Unit', 'Swakelola', 'Reguler', 2019),
(6, 'Sanitasi', 'Penambahan pipa pengumpul dan SR IPAL Komunal di Desa Bungai Jaya, Kec. Basarang', 'Desa Bungai Jaya, Kec. Basarang', 400000000, 60, 'SR', 'Swakelola', 'Reguler', 2019),
(7, 'Sanitasi', 'Pembangunan tangki septik skala individual perdesaan di Desa Dadahup Raya, Kec. Dadahup (desa ODF)', 'Desa Dadahup Raya, Kec. Dadahup', 500000000, 100, 'Unit', 'Swakelola', 'Reguler', 2019),
(8, 'Sanitasi', 'Pembangunan tangki septik skala individual perdesaan di Desa Sumber Agung, Kec. Dadahup (desa ODF)', 'Desa Sumber Agung, Kec. Dadahup', 250000000, 50, 'Unit', 'Swakelola', 'Reguler', 2019),
(9, 'Sanitasi', 'Pembangunan tangki septik skala individual perdesaan di Desa Manggala Permai, Kec. Kapuas Murung (desa ODF)', 'Desa Manggala Permai, Kec. Kapuas Murung', 400000000, 80, 'Unit', 'Swakelola', 'Reguler', 2019),
(10, 'Sanitasi', 'Pembangunan tangki septik skala individual perdesaan di Desa Basuta Raya, Kec. Kapuas Barat (desa ODF)', 'Desa Basuta Raya, Kec. Kapuas Barat', 350000000, 70, 'Unit', 'Swakelola', 'Reguler', 2019),
(11, 'Sanitasi', 'Pembangunan tangki septik skala individual perdesaan di Desa Palingkau Asri, Kec. Kapuas Murung (desa ODF)', 'Desa Palingkau Asri, Kec. Kapuas Murung', 500000000, 100, 'Unit', 'Swakelola', 'Reguler', 2019),
(12, 'Sanitasi', 'Pembangunan tangki septik skala individual perdesaan di Desa Rawa Subur, Kec. Kapuas Murung (desa ODF)', 'Desa Rawa Subur, Kec. Kapuas Murung', 335000000, 67, 'Unit', 'Swakelola', 'Reguler', 2019),
(13, 'Sanitasi', 'Pembangunan tangki septik skala individual perdesaan di Desa Bangun Harjo, Kec. Bataguh (minimal 50 KK)', 'Desa Bangun Harjo, Kec. Bataguh', 500000000, 100, 'Unit', 'Swakelola', 'Penugasan', 2019),
(14, 'Sanitasi', 'Pembangunan tangki septik skala individual perdesaan di Desa Terusan Raya Barat, Kec. Bataguh (minimal 50 KK)', 'Desa Terusan Raya Barat, Kec. Bataguh', 500000000, 100, 'Unit', 'Swakelola', 'Penugasan', 2019),
(15, 'Sanitasi', 'Pembangunan tangki septik skala individual perdesaan di Kel. Selat Barat, Kec. Selat', 'Kel. Selat Barat, Kec. Selat', 1000000000, 200, 'Unit', 'Swakelola', 'Penugasan', 2019),
(16, 'Sanitasi', 'Pembangunan tangki septik skala individual perdesaan di Kel. Panamas, Kec. Selat', 'Kel. Panamas, Kec. Selat', 1000000000, 200, 'Unit', 'Swakelola', 'Penugasan', 2019),
(17, 'Sanitasi', 'Pembangunan tangki septik skala individual perdesaan di Kel. Selat Utara, Kec. Selat', 'Kel. Selat Utara, Kec. Selat', 1000000000, 200, 'Unit', 'Swakelola', 'Penugasan', 2019),
(18, 'Sanitasi', 'Pembangunan tangki septik skala individual perdesaan di Desa Batuah, Kec. Basarang (minimal 50 KK)', 'Desa Batuah, Kec. Basarang', 700000000, 140, 'Unit', 'Swakelola', 'Penugasan', 2019),
(19, 'Sanitasi', 'Pembangunan baru IPAL Kombinasi MCK di Desa Mawar Mekar, Kec. Pulau Petak dengan jumlah layanan minimal 25 KK', 'Desa Mawar Mekar, Kec. Pulau Petak', 600000000, 1, 'Unit', 'Swakelola', 'Afirmasi', 2019),
(20, 'Sanitasi', 'Pembangunan baru IPAL Kombinasi MCK di Desa Bunga Mawar, Kec. Pulau Petak dengan jumlah layanan minimal 25 KK', 'Desa Bunga Mawar, Kec. Pulau Petak', 600000000, 1, 'Unit', 'Swakelola', 'Afirmasi', 2019),
(21, 'Sanitasi', 'Pembangunan Tangki Septik Skala komunal di Desa Pulau Mambulau, Kec. Bataguh', 'Desa Pulau Mambulau, Kec. Bataguh', 400000000, 10, 'Unit', 'Swakelola', 'Afirmasi', 2019),
(22, 'Sanitasi', 'Pembangunan tangki septik skala individual perdesaan di Desa Palingkau Jaya, Kec. Kapuas Murung (minimal 50 KK)', 'Desa Palingkau Jaya, Kec. Kapuas Murung', 400000000, 80, 'Unit', 'Swakelola', 'Afirmasi', 2019);

-- --------------------------------------------------------

--
-- Struktur dari tabel `simoni_ppk`
--

CREATE TABLE IF NOT EXISTS `simoni_ppk` (
  `ppkid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(30) NOT NULL,
  `paketid` int(11) NOT NULL,
  PRIMARY KEY (`ppkid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data untuk tabel `simoni_ppk`
--

INSERT INTO `simoni_ppk` (`ppkid`, `userid`, `paketid`) VALUES
(2, 'henick', 3),
(3, 'henick', 4),
(4, 'henick', 5),
(5, 'henick', 6),
(6, 'henick', 7),
(7, 'henick', 8),
(8, 'henick', 9),
(9, 'henick', 10),
(10, 'henick', 11),
(11, 'henick', 12),
(12, 'henick', 13),
(13, 'henick', 14),
(14, 'henick', 15),
(15, 'henick', 16),
(16, 'henick', 17),
(17, 'henick', 18),
(18, 'henick', 19),
(19, 'henick', 20),
(20, 'henick', 21),
(21, 'henick', 22),
(22, 'henick', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `simoni_pptk`
--

CREATE TABLE IF NOT EXISTS `simoni_pptk` (
  `pptkid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(30) NOT NULL,
  `paketid` int(11) NOT NULL,
  PRIMARY KEY (`pptkid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data untuk tabel `simoni_pptk`
--

INSERT INTO `simoni_pptk` (`pptkid`, `userid`, `paketid`) VALUES
(2, 'wanter', 1),
(3, 'wanter', 3),
(4, 'wanter', 4),
(5, 'wanter', 5),
(6, 'wanter', 6),
(7, 'wanter', 7),
(8, 'wanter', 8),
(9, 'wanter', 9),
(10, 'wanter', 10),
(11, 'wanter', 11),
(12, 'wanter', 12),
(13, 'derianson', 13),
(14, 'derianson', 14),
(15, 'wanter', 15),
(16, 'derianson', 16),
(17, 'wanter', 17),
(18, 'derianson', 18),
(19, 'derianson', 19),
(20, 'derianson', 20),
(21, 'derianson', 21),
(22, 'derianson', 22);

-- --------------------------------------------------------

--
-- Struktur dari tabel `simoni_tfl`
--

CREATE TABLE IF NOT EXISTS `simoni_tfl` (
  `tflid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(30) NOT NULL,
  `paketid` int(11) NOT NULL,
  PRIMARY KEY (`tflid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data untuk tabel `simoni_tfl`
--

INSERT INTO `simoni_tfl` (`tflid`, `userid`, `paketid`) VALUES
(1, 'adventus', 1),
(2, 'merhad', 1),
(3, 'adventus', 3),
(4, 'merhad', 3),
(5, 'harianto', 4),
(6, 'nordiana', 4),
(7, 'harianto', 5),
(8, 'nordiana', 5),
(9, 'deliawaty', 6),
(10, 'khaifani', 6),
(11, 'deliawaty', 7),
(12, 'khaifani', 7),
(13, 'deliawaty', 8),
(14, 'khaifani', 8),
(15, 'septian', 9),
(16, 'mufti', 9),
(17, 'septian', 10),
(18, 'mufti', 10),
(19, 'lenny', 11),
(20, 'irnalisa', 11),
(21, 'lenny', 12),
(22, 'irnalisa', 12),
(23, 'srifajar', 13),
(24, 'sesko', 13),
(25, 'srifajar', 14),
(26, 'sesko', 14),
(27, 'parlin', 15),
(28, 'yosua', 15),
(29, 'parlin', 16),
(30, 'yosua', 16),
(31, 'tanty', 17),
(32, 'hadi', 17),
(33, 'tanty', 18),
(34, 'hadi', 18),
(35, 'yanster', 19),
(36, 'eka', 19),
(37, 'yanster', 20),
(38, 'eka', 20),
(39, 'kuncaro', 21),
(40, 'tanca', 21),
(41, 'kuncaro', 22),
(42, 'tanca', 22);

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
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', '-', 'akustevanry@gmail.com', 'Administrator', '2019-07-09 05:34:59'),
('adventus', '202cb962ac59075b964b07152d234b70', 'ADVENTUS ATHUR, ST', '-', '081349140042@gmail.com', 'TFL Teknik', '2019-07-09 12:43:01'),
('deliawaty', '202cb962ac59075b964b07152d234b70', 'DELIAWATY, ST', '-', '085391861237@gmail.com', 'TFL Teknik', '2019-07-09 12:45:53'),
('derianson', '202cb962ac59075b964b07152d234b70', 'DERIANSON, ST', '196408171990031013', 'ciptakarya.dpukapuas@gmail.com', 'PPTK', '0000-00-00 00:00:00'),
('eka', '202cb962ac59075b964b07152d234b70', 'EKA LESTARI AGUSTINAH, SE', '-', '082255496845@gmail.com', 'TFL Pemberdayaan', '2019-07-09 12:59:26'),
('hadi', '202cb962ac59075b964b07152d234b70', 'HADI SULAIMAN, SH', '-', '0811529300@gmail.com', 'TFL Pemberdayaan', '2019-07-09 12:57:10'),
('harianto', '202cb962ac59075b964b07152d234b70', 'HARIANTO, ST', '-', '08524607006@gmail.com', 'TFL Teknik', '2019-07-09 12:45:09'),
('henick', '202cb962ac59075b964b07152d234b70', 'HENI MARIATI, ST', '198103312005012014', 'henimariati@gmail.com', 'PPK', '0000-00-00 00:00:00'),
('irnalisa', '202cb962ac59075b964b07152d234b70', 'IRNALISA, SE', '-', '085249115723@gmail.com', 'TFL Pemberdayaan', '2019-07-09 12:56:20'),
('khaifani', '202cb962ac59075b964b07152d234b70', 'MOH. KHAIFANI HILAL, S.Pd', '-', '085387819155@gmail.com', 'TFL Pemberdayaan', '2019-07-09 12:53:27'),
('kuncaro', '202cb962ac59075b964b07152d234b70', 'KUNCARO ADI PRAYOGA, ST', '-', '08125076351@gmail.com', 'TFL Teknik', '2019-07-09 12:51:15'),
('lenny', '202cb962ac59075b964b07152d234b70', 'LENNY EKA SEPTIANY, ST', '-', '085249026254@gmail.com', 'TFL Teknik', '2019-07-09 12:51:55'),
('merhad', '202cb962ac59075b964b07152d234b70', 'MERHAD, S.Sos', '-', '081352883307@gmail.com', 'TFL Pemberdayaan', '2019-07-09 13:00:54'),
('mufti', '202cb962ac59075b964b07152d234b70', 'MUFTI WARDANI, S.Kom', '-', '082253269211@gmail.com', 'TFL Pemberdayaan', '2019-07-09 13:00:15'),
('nordiana', '202cb962ac59075b964b07152d234b70', 'NORDIANA, S.Pd', '-', '082352496134@gmail.com', 'TFL Pemberdayaan', '2019-07-09 12:55:30'),
('parlin', '202cb962ac59075b964b07152d234b70', 'PARLIN, ST', '-', '082255533765@gmail.com', 'TFL Teknik', '2019-07-09 12:47:50'),
('septian', '202cb962ac59075b964b07152d234b70', 'SEPTIAN AFRELLY, ST', '-', '087803246013@gmail.com', 'TFL Teknik', '2019-07-09 12:47:00'),
('sesko', '202cb962ac59075b964b07152d234b70', 'SESKO OKTA GARSIA, A.Md.Kep', '-', '082352601169@gmail.com', 'TFL Pemberdayaan', '2019-07-09 12:58:40'),
('srifajar', '202cb962ac59075b964b07152d234b70', 'SRI FAJAR, ST', '-', '081253332878@gmail.com', 'TFL Teknik', '2019-07-09 12:44:24'),
('tanca', '202cb962ac59075b964b07152d234b70', 'TANCA RIA PUTRA, S.Pd', '-', '085245564368@gmail.com', 'TFL Pemberdayaan', '2019-07-09 12:54:36'),
('tanty', '202cb962ac59075b964b07152d234b70', 'TANTY PUSPA SARI, ST', '-', '081350224687@gmail.com', 'TFL Teknik', '2019-07-09 12:49:32'),
('wanter', '202cb962ac59075b964b07152d234b70', 'WANTER SIHOTANG, ST., MM', '197608132006041012', 'ciptakarya.dpukapuas@gmail.com', 'PPTK', '0000-00-00 00:00:00'),
('yanster', '202cb962ac59075b964b07152d234b70', 'YANSTER SURYONO, ST', '-', '081251881939@gmail.com', 'TFL Teknik', '2019-07-09 12:48:34'),
('yosua', '202cb962ac59075b964b07152d234b70', 'YOSUA RASAT, SH', '-', '082154838355@gmail.com', 'TFL Pemberdayaan', '2019-07-09 12:57:49');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
