-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Sep 2016 pada 07.03
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mrp_ikan`
--

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`idl`, `idsk`, `tanggal`, `idpd`, `b3`, `h3`, `vol`) VALUES
(1, 1, '2016-09-17', 5, 1579, 14500, 200000),
(2, 2, '2016-09-17', 6, 3114, 16000, 50000),
(3, 3, '2016-09-17', 8, 3074, 19500, 5400),
(4, 6, '2016-09-17', 11, 3182, 14000, 4200),
(5, 7, '2016-09-17', 12, 6420, 21500, 2500),
(6, 2, '2016-09-18', 7, 1185, 16000, 300000),
(7, 4, '2016-09-18', 9, 3644, 20000, 3500),
(8, 5, '2016-09-18', 10, 8000, 18500, 1000),
(9, 7, '2016-09-18', 13, 2340, 21500, 23000);

--
-- Dumping data untuk tabel `margin`
--

INSERT INTO `margin` (`idpm`, `sm_nel`, `sm_pk`, `sm_pd`, `ps_biaya`, `pm_nel`, `pm_pk`, `pm_pd`) VALUES
(1, '0.061', '0.061', '0.149', '0.729', '0.115', '0.094', '0.149');

--
-- Dumping data untuk tabel `nelayan`
--

INSERT INTO `nelayan` (`idn`, `nama`, `no_hp`, `alamat`, `idsk`) VALUES
(5, 'Nelayan 01', NULL, 'Trenggalek', 1),
(6, 'Nelayan 02', NULL, 'Trenggalek', 1),
(7, 'Nelayan 03', NULL, 'Lamongan', 2),
(8, 'Nelayan 04', NULL, 'Lamongan', 2),
(9, 'Nelayan 05', NULL, 'Lamongan', 2),
(10, 'Nelayan 06', NULL, 'Lamongan', 2),
(11, 'Nelayan 07', NULL, 'Lamongan', 2),
(12, 'Nelayan 08', NULL, 'Lamongan', 2),
(13, 'Nelayan 09', NULL, 'Indramayu', 3),
(14, 'Nelayan 10', NULL, 'Indramayu', 3),
(15, 'Nelayan 11', NULL, 'Cilacap', 4),
(16, 'Nelayan 12', NULL, 'Cilacap', 4),
(17, 'Nelayan 13', NULL, 'Cilacap', 4),
(18, 'Nelayan 14', NULL, 'Cilacap', 4),
(19, 'Nelayan 15', NULL, 'Cilacap', 4),
(20, 'Nelayan 16', NULL, 'Sukabumi', 5),
(21, 'Nelayan 17', NULL, 'Sukabumi', 5),
(22, 'Nelayan 18', NULL, 'Sukabumi', 5),
(23, 'Nelayan 19', NULL, 'Gunung Kidul', 6),
(24, 'Nelayan 20', NULL, 'Pekalongan', 7);

--
-- Dumping data untuk tabel `pedagang`
--

INSERT INTO `pedagang` (`idpd`, `nama`, `no_hp`, `alamat`, `idsk`) VALUES
(5, 'Pedagang 01', '', 'Trenggalek', 1),
(6, 'Pedagang 02', '', 'Lamongan', 2),
(7, 'Pedagang 03', '', 'Lamongan', 2),
(8, 'Pedagang 04', '', 'Indramayu', 3),
(9, 'Pedagang 05', '', 'Cilacap', 4),
(10, 'Pedagang 06', '', 'Sukabumi', 5),
(11, 'Pedagang 07', '', 'Gunung Kidul', 6),
(12, 'Pedagang 08', '', 'Pekalongan', 7),
(13, 'Pedagang 09', '', 'Pekalongan', 7),
(14, 'Pedagang 10', '', 'Trenggalek', 1),
(15, 'Pedagang 11', '', 'Trenggalek', 1),
(16, 'Pedagang 12', '', 'Lamongan', 2),
(17, 'Pedagang 13', '', 'Indramayu', 3),
(18, 'Pedagang 14', '', 'Indramayu', 3),
(19, 'Pedagang 15', '', 'Gunung Kidul', 6),
(20, 'Pedagang 16', '', 'Gunung Kidul', 6),
(21, 'Pedagang 17', '', 'Pekalongan', 7),
(22, 'Pedagang 18', '', 'Cilacap', 4),
(23, 'Pedagang 19', '', 'Cilacap', 4),
(24, 'Pedagang 20', '', 'Sukabumi', 5);

--
-- Dumping data untuk tabel `p_kapal`
--

INSERT INTO `p_kapal` (`idpk`, `nama`, `no_hp`, `alamat`, `idsk`) VALUES
(5, 'Pem. Kapal 01', '', 'trenggalek', 1),
(6, 'Pem. Kapal 02', '', 'trenggalek', 1),
(7, 'Pem. Kapal 03', '', 'Lamongan', 2),
(8, 'Pem. Kapal 04', '', 'Lamongan', 2),
(9, 'Pem. Kapal 05', '', 'Lamongan', 2),
(10, 'Pem. Kapal 06', '', 'Lamongan', 2),
(11, 'Pem. Kapal 07', '', 'Lamongan', 2),
(12, 'Pem. Kapal 08', '', 'Lamongan', 2),
(13, 'Pem. Kapal 09', '', 'Indramayu', 3),
(14, 'Pem. Kapal 10', '', 'Indramayu', 3),
(15, 'Pem. Kapal 11', '', 'Cilacap', 4),
(16, 'Pem. Kapal 12', '', 'Cilacap', 4),
(17, 'Pem. Kapal 13', '', 'Cilacap', 4),
(18, 'Pem. Kapal 14', '', 'Cilacap', 4),
(19, 'Pem. Kapal 15', '', 'Cilacap', 4),
(20, 'Pem. Kapal 16', '', 'Sukabumi', 5),
(21, 'Pem. Kapal 17', '', 'Sukabumi', 5),
(22, 'Pem. Kapal 18', '', 'Sukabumi', 5),
(23, 'Pem. Kapal 19', '', 'Gunung Kidul', 6),
(24, 'Pem. Kapal 20', '', 'Pekalongan', 7);

--
-- Dumping data untuk tabel `rata`
--

INSERT INTO `rata` (`idr`, `idsk`, `tanggal`, `br1`, `br2`, `vr1`, `persen`, `hr2`, `vr3`, `hr1`, `br3`, `hr3`, `vr4`) VALUES
(1, 1, '2016-09-17', 6879, 915, 6000, '0.50', 10000, 5000, 7982, 1579, 14500, 200000),
(2, 2, '2016-09-17', 5372, 629, 53000, '0.50', 11867, 53000, 8305, 3114, 16000, 50000),
(3, 3, '2016-09-17', 11599, 1427, 15000, '0.50', 13500, 15000, 11836, 3074, 19500, 5400),
(4, 4, '2016-09-17', 6311, 825, 32500, '0.55', 12167, 32500, 8575, NULL, NULL, NULL),
(7, 6, '2016-09-17', 10513, 1329, 1400, '0.50', 10500, 1400, 9842, 3182, 14000, 4200),
(8, 7, '2016-09-17', 13751, 1086, 50000, '0.50', 13500, 50000, 13083, 6420, 21500, 2500),
(9, 1, '2016-09-18', 3606, 1027, 12000, '0.50', 13000, 12000, 7790, NULL, NULL, NULL),
(10, 2, '2016-09-18', 5217, 608, 25000, '0.50', 12133, 24000, 8371, 1185, 16000, 300000),
(11, 3, '2016-09-18', 12071, 1426, 45000, '0.50', 14500, 45000, 12573, NULL, NULL, NULL),
(12, 4, '2016-09-18', 4857, 660, 35000, '0.55', 1175, 35000, 2903, 3644, 20000, 3500),
(16, 5, '2016-09-17', 10379, 928, 4000, '0.50', 13000, 4000, 11226, NULL, NULL, NULL),
(17, 5, '2016-09-18', 10797, 1283, 13000, '0.50', 14500, 13000, 12007, 8000, 18500, 1000),
(18, 7, '2016-09-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2340, 21500, 23000);

--
-- Dumping data untuk tabel `sektor`
--

INSERT INTO `sektor` (`idsk`, `nama`, `alamat`) VALUES
(1, 'PPN Prigi Trenggalek', 'Jalan Pantai Prigi, Desa Tasikmadu, Watulimo, Kabupaten Trenggalek, Jawa Timur'),
(2, 'PPN Brondong Lamongan', 'JL. Raya Brondong, No. 17, Kabupaten Lamongan, 62263'),
(3, 'PPN Karangsong Indramayu', 'Kabupaten Indramayu, Jawa Barat'),
(4, 'PPS Cilacap', 'Jl. Lingkar Teluk Penyu No.2, Cilacap, Jawa Tengah'),
(5, 'PPN Palabuhanratu Sukabumi', 'JL. Siliwangi, PO BOX 22, Pelabuhan Ratu, Sukabumi, 43364'),
(6, 'PPP Sadeng Gunung Kidul', 'Songbanyu, Girisubo, Gunung Kidul, DIY 55883'),
(7, 'PPN Pekalongan', 'l. WR Supratman No.1, Panjang Wetan, Pekalongan Utara');

--
-- Dumping data untuk tabel `transaksi1`
--

INSERT INTO `transaksi1` (`idt1`, `tanggal`, `idsk`, `idn`, `idpk`, `b1`, `b2`, `vol`, `persen`) VALUES
(1, '2016-09-17', 1, 5, 5, 6879, 915, 6000, '0.50'),
(2, '2016-09-17', 2, 7, 7, 5562, 641, 14000, '0.50'),
(3, '2016-09-17', 2, 8, 8, 4495, 606, 25000, '0.50'),
(4, '2016-09-17', 2, 9, 9, 6058, 641, 14000, '0.50'),
(5, '2016-09-17', 3, 13, 13, 11599, 1427, 15000, '0.50'),
(6, '2016-09-17', 4, 15, 15, 6700, 929, 1500, '0.55'),
(7, '2016-09-17', 4, 16, 16, 6937, 761, 6000, '0.55'),
(8, '2016-09-17', 4, 17, 17, 5295, 786, 25000, '0.55'),
(10, '2016-09-17', 6, 23, 23, 10513, 1329, 1400, '0.50'),
(11, '2016-09-17', 7, 24, 24, 13751, 1086, 50000, '0.50'),
(12, '2016-09-18', 1, 6, 6, 3606, 1027, 12000, '0.50'),
(13, '2016-09-18', 2, 10, 10, 6006, 679, 4000, '0.50'),
(14, '2016-09-18', 2, 11, 11, 5075, 552, 12000, '0.50'),
(15, '2016-09-18', 2, 12, 12, 4571, 593, 9000, '0.50'),
(16, '2016-09-18', 3, 14, 14, 12071, 1426, 45000, '0.50'),
(17, '2016-09-18', 4, 18, 18, 5008, 693, 15000, '0.55'),
(18, '2016-09-18', 4, 19, 19, 4705, 626, 20000, '0.55'),
(21, '2016-09-17', 5, 20, 20, 10379, 928, 4000, '0.50'),
(22, '2016-09-18', 5, 21, 21, 14194, 1930, 1000, '0.50'),
(23, '2016-09-18', 5, 22, 22, 7400, 635, 12000, '0.50');

--
-- Dumping data untuk tabel `transaksi2`
--

INSERT INTO `transaksi2` (`idt2`, `tanggal`, `idsk`, `idpd`, `idpk`, `h2`, `v3`) VALUES
(1, '2016-09-17', 1, 5, 5, 10000, 5000),
(2, '2016-09-17', 2, 6, 7, 12000, 14000),
(3, '2016-09-17', 2, 16, 8, 11000, 25000),
(4, '2016-09-17', 2, 7, 9, 12600, 14000),
(5, '2016-09-17', 3, 18, 13, 13500, 15000),
(6, '2016-09-17', 4, 9, 15, 11000, 1500),
(7, '2016-09-17', 4, 22, 16, 12500, 6000),
(8, '2016-09-17', 4, 22, 17, 13000, 25000),
(10, '2016-09-17', 6, 11, 23, 10500, 1400),
(11, '2016-09-17', 7, 13, 24, 13500, 50000),
(12, '2016-09-18', 1, 14, 6, 13000, 12000),
(13, '2016-09-18', 2, 16, 10, 13000, 4000),
(14, '2016-09-18', 2, 6, 11, 11400, 12000),
(15, '2016-09-18', 2, 6, 12, 12000, 8000),
(16, '2016-09-18', 3, 17, 14, 14500, 45000),
(17, '2016-09-18', 4, 23, 18, 1150, 15000),
(18, '2016-09-18', 4, 22, 19, 1200, 20000),
(21, '2016-09-17', 5, 24, 20, 13000, 4000),
(22, '2016-09-18', 5, 10, 21, 14000, 1000),
(23, '2016-09-18', 5, 24, 22, 15000, 12000);

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `pass`, `nama`, `privilage`, `idsk`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Roni Bintoro', 'admin', NULL),
('cilacap', '3a725fefb342fc86ed5834f51be6eb21', 'PPS Cilacap', 'tpi', 4),
('gunungkidul', 'c7c4402870c010e82960e4edac5ffb70', 'PPP Sadeng', 'tpi', 6),
('indramayu', 'ca8b9dfbf73d4d2ebd2be6a7517bd233', 'PPN Karangsong Indramayu', 'tpi', 3),
('lamongan', '6635a31bd8b7a42981b375cb657314b2', 'PPN Brondong Lamongan', 'tpi', 2),
('pekalongan', '4082dc484ef4b1e8e0f195fec6b495ec', 'PPN Pekalongan', 'tpi', 7),
('sukabumi', '51dc3ff204683f720867ec8bb430f860', 'PPN palabuhanratu', 'tpi', 5),
('trenggalek', 'fdb6c80390c124b26bc3c7794e821905', 'PPN Trenggalek', 'tpi', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
