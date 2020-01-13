-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jan 2020 pada 10.01
-- Versi server: 10.1.40-MariaDB
-- Versi PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_projek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(4) NOT NULL,
  `nam_leng` text COLLATE utf8_bin NOT NULL,
  `email` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(15) COLLATE utf8_bin NOT NULL,
  `no_rek` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_customer`
--

CREATE TABLE `tb_customer` (
  `id_customer` int(3) NOT NULL,
  `id_kec` int(3) NOT NULL,
  `nam_leng` varchar(30) COLLATE utf8_bin NOT NULL,
  `no_telp` varchar(13) COLLATE utf8_bin NOT NULL,
  `alamat` varchar(30) COLLATE utf8_bin NOT NULL,
  `email` varchar(25) COLLATE utf8_bin NOT NULL,
  `password` varchar(20) COLLATE utf8_bin NOT NULL,
  `foto_diri` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `foto_ktp` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `status_cus` int(1) NOT NULL,
  `status_tukang` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `tb_customer`
--

INSERT INTO `tb_customer` (`id_customer`, `id_kec`, `nam_leng`, `no_telp`, `alamat`, `email`, `password`, `foto_diri`, `foto_ktp`, `status_cus`, `status_tukang`) VALUES
(1, 21, 'M.Ali Romadoni', '089765444123', 'Jl. Haji Uhud 12/a', 'umelsam098@gmail.com', '12345678', 'logo patukang.png', '', 1, 1),
(2, 4, 'Sulistiyo Wati sukma', '12345678910', 'Jl Jawa 6 no.35/a', 'donialii098@gmail.com', '12345678', '', '', 1, 1),
(3, 5, 'Tahu', '123', 'jl.kencong', 'tahu', '123', '', '', 1, 1),
(9, 5, 'Ika Dwi Astuti', '089121221', 'Jl Gajah MAda 14 /a', 'Ikadwi78@gmail.com', '123', '', '', 1, 1),
(10, 1, '1', '1', '1', '1', '1', 'logo patukang.png', '', 1, 1),
(11, 6, '2', '2', '2', '2', '2', '', '', 1, 1),
(12, 1, '3', '4', '3', '3', '3', '', '', 1, 1),
(13, 8, '4', '4', '4', '4', '4', '', '', 1, 1),
(14, 2, '5', '5', '5', '5', '5', '', '', 1, 1),
(15, 5, '6', '6', '6', '6', '6', '', '', 1, 1),
(16, 5, '7', '7', '7', '7', '7', '', '', 1, 1),
(17, 3, '8', '8', '8', '8', '8', '', '$id_customerlogo pat', 1, 1),
(18, 18, 'Andaru Bagus G', '081123456789', 'Jl Gajah MAda 14 /a', 'Andaru@gmail.com', '123', '', '1387911 (1).jpg', 1, 1),
(19, 19, 'q', '11221222', 'q', 'q', 'q', '', 'radial.PNG', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kec`
--

CREATE TABLE `tb_kec` (
  `id_kec` int(3) NOT NULL,
  `kecamatan` text COLLATE utf8_bin NOT NULL,
  `kelurahan` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `tb_kec`
--

INSERT INTO `tb_kec` (`id_kec`, `kecamatan`, `kelurahan`) VALUES
(1, 'KENCONG', 'PASEBAN'),
(2, 'KENCONG', 'CAKRU'),
(3, 'KENCONG', 'KRATON'),
(4, 'KENCONG', 'WONOREJO'),
(5, 'KENCONG', 'KENCONG'),
(6, 'GUMUKMAS', 'KEPANJEN'),
(7, 'GUMUKMAS', 'MAYANGAN'),
(8, 'GUMUKMAS', 'MENAMPU'),
(9, 'GUMUKMAS', 'BAGOREJO'),
(10, 'GUMUKMAS', 'GUMUKMAS'),
(11, 'GUMUKMAS', 'PURWOSARI'),
(12, 'GUMUKMAS', 'TEMBOKREJO'),
(13, 'GUMUKMAS', 'KARANG REJO'),
(14, 'PUGER', 'MOJOMULYO'),
(15, 'PUGER', 'MOJOSARI'),
(16, 'PUGER', 'PUGER KULON'),
(17, 'PUGER', 'PUGER WETAN'),
(18, 'PUGER', 'GRENDEN'),
(19, 'PUGER', 'MLOKOREJO'),
(20, 'PUGER', 'KASIYAN'),
(21, 'PUGER', 'KASIYAN TIMUR'),
(22, 'PUGER', 'WONOSARI'),
(23, 'PUGER', 'JAMBEARUM'),
(24, 'PUGER', 'BAGON'),
(25, 'PUGER', 'WRINGIN TELU'),
(26, 'WULUHAN', 'LOJEJER'),
(27, 'WULUHAN', 'AMPEL'),
(28, 'WULUHAN', 'TANJUNG REJO'),
(29, 'WULUHAN', 'KESILIR'),
(30, 'WULUHAN', 'DUKUH DEMPOK'),
(31, 'WULUHAN', 'TAMANSARI'),
(32, 'WULUHAN', 'GLUNDENGAN'),
(33, 'AMBULU', 'SUMBERREJO'),
(34, 'AMBULU', 'ANDONGSARI'),
(35, 'AMBULU', 'SABRANG'),
(36, 'AMBULU', 'AMBULU'),
(37, 'AMBULU', 'PONTANG'),
(38, 'AMBULU', 'KARANGANYAR'),
(39, 'AMBULU', 'TEGALSARI'),
(40, 'TEMPUREJO', 'ANDONGREJO'),
(41, 'TEMPUREJO', 'CURAHNONGKO'),
(42, 'TEMPUREJO', 'SANENREJO'),
(43, 'TEMPUREJO', 'WONOASRI'),
(44, 'TEMPUREJO', 'SIDODADI'),
(45, 'TEMPUREJO', 'PONDOKREJO'),
(46, 'TEMPUREJO', 'CURAHTAKIR'),
(47, 'TEMPUREJO', 'TEMPUREJO'),
(48, 'SILO', 'MULYOREJO'),
(49, 'SILO', 'PACE'),
(50, 'SILO', 'HARJOMULYO'),
(51, 'SILO', 'KARANGHARJO'),
(52, 'SILO', 'SILO'),
(53, 'SILO', 'SEMPOLAN'),
(54, 'SILO', 'SUMBERJATI'),
(55, 'SILO', 'GARAHAN'),
(56, 'SILO', 'SIDOMULYO'),
(57, 'MAYANG', 'SEPUTIH'),
(58, 'MAYANG', 'SIDOMUKTI'),
(59, 'MAYANG', 'SUMBER KEJAYAN'),
(60, 'MAYANG', 'TEGALREJO'),
(61, 'MAYANG', 'TEGALWARU'),
(62, 'MAYANG', 'MAYANG'),
(63, 'MAYANG', 'MRAWAN'),
(64, 'MUMBULSARI', 'KAWANGREJO'),
(65, 'MUMBULSARI', 'TAMANSARI'),
(66, 'MUMBULSARI', 'SUCO'),
(67, 'MUMBULSARI', 'LAMPEJI'),
(68, 'MUMBULSARI', 'MUMBULSARI'),
(69, 'MUMBULSARI', 'LENGKONG'),
(70, 'MUMBULSARI', 'KARANGKEDAWUNG'),
(71, 'JENGGAWAH', 'KEMUNINGSARI KIDUL'),
(72, 'JENGGAWAH', 'KERTONEGORO'),
(73, 'JENGGAWAH', 'JATISARI'),
(74, 'JENGGAWAH', 'SRUNI'),
(75, 'JENGGAWAH', 'CANGKRING'),
(76, 'JENGGAWAH', 'WONOJATI'),
(77, 'JENGGAWAH', 'JENGGAWAH'),
(78, 'JENGGAWAH', 'JATIMULYO'),
(79, 'AJUNG', 'MANGARAN'),
(80, 'AJUNG', 'SUKAMAKMUR'),
(81, 'AJUNG', 'KLOMPANGAN'),
(82, 'AJUNG', 'PANCAKARYA'),
(83, 'AJUNG', 'AJUNG'),
(84, 'AJUNG', 'WIROWONGSO'),
(85, 'AJUNG', 'ROWO INDAH'),
(86, 'RAMBIPUJI', 'CURAHMALANG'),
(87, 'RAMBIPUJI', 'NOGOSARI'),
(88, 'RAMBIPUJI', 'ROWOTAMTU'),
(89, 'RAMBIPUJI', 'PECORO'),
(90, 'RAMBIPUJI', 'RAMBIPUJI'),
(91, 'RAMBIPUJI', 'KALIWINING'),
(92, 'RAMBIPUJI', 'RAMBIGUNDAM'),
(93, 'RAMBIPUJI', 'GUGUT'),
(94, 'BALUNG', 'KARANG DUREN'),
(95, 'BALUNG', 'KARANG SEMANDING'),
(96, 'BALUNG', 'TUTUL'),
(97, 'BALUNG', 'BALUNG KULON'),
(98, 'BALUNG', 'BALUNG KIDUL'),
(99, 'BALUNG', 'BALUNG LOR'),
(100, 'BALUNG', 'GUMELAR'),
(101, 'BALUNG', 'CURAH LELE'),
(102, 'UMBULSARI', 'SUKORENO'),
(103, 'UMBULSARI', 'GUNUNGSARI'),
(104, 'UMBULSARI', 'UMBULSARI'),
(105, 'UMBULSARI', 'TANJUNGSARI'),
(106, 'UMBULSARI', 'PALERAN'),
(107, 'UMBULSARI', 'UMBULREJO'),
(108, 'UMBULSARI', 'GADINGREJO'),
(109, 'UMBULSARI', 'SIDOREJO'),
(110, 'UMBULSARI', 'TEGALWANGI'),
(111, 'UMBULSARI', 'MUNDUREJO'),
(112, 'SEMBORO', 'REJO AGUNG'),
(113, 'SEMBORO', 'SEMBORO'),
(114, 'SEMBORO', 'SIDOMEKAR'),
(115, 'SEMBORO', 'SIDOMULYO'),
(116, 'SEMBORO', 'PONDOK JOYO'),
(117, 'SEMBORO', 'PODOK DALEM'),
(118, 'JOMBANG', 'KETING'),
(119, 'JOMBANG', 'JOMBANG'),
(120, 'JOMBANG', 'PADOMASAN'),
(121, 'JOMBANG', 'NGAMPELREJO'),
(122, 'JOMBANG', 'WRINGIN AGUNG'),
(123, 'JOMBANG', 'SARI MULYO'),
(124, 'SUMBERBARU', 'SUMBER AGUNG'),
(125, 'SUMBERBARU', 'ROWO TENGAH'),
(126, 'SUMBERBARU', 'YOSORATI'),
(127, 'SUMBERBARU', 'PRINGGOWIRAWAN'),
(128, 'SUMBERBARU', 'KARANG BAYAT'),
(129, 'SUMBERBARU', 'GELANG'),
(130, 'SUMBERBARU', 'JATIROTO'),
(131, 'SUMBERBARU', 'JAMINTORO'),
(132, 'SUMBERBARU', 'KALIGLAGAH'),
(133, 'SUMBERBARU', 'JAMBESARI'),
(134, 'TANGGUL', 'TANGGUL KULON'),
(135, 'TANGGUL', 'TANGGUL WETAN'),
(136, 'TANGGUL', 'KLATAKAN'),
(137, 'TANGGUL', 'SELODAKON'),
(138, 'TANGGUL', 'DARUNGAN'),
(139, 'TANGGUL', 'MANGGISAN'),
(140, 'TANGGUL', 'PATEMON'),
(141, 'TANGGUL', 'KRAMAT SUKOHARJO'),
(142, 'BANGSALSARI', 'KARANGSONO'),
(143, 'BANGSALSARI', 'SUKOREJO'),
(144, 'BANGSALSARI', 'PETUNG'),
(145, 'BANGSALSARI', 'TISNOGAMBAR'),
(146, 'BANGSALSARI', 'LANGKAP'),
(147, 'BANGSALSARI', 'BANGALSARI'),
(148, 'BANGSALSARI', 'GAMBIRONO'),
(149, 'BANGSALSARI', 'CURAH KALONG'),
(150, 'BANGSALSARI', 'TUGUSARI'),
(151, 'BANGSALSARI', 'BANJARSARI'),
(152, 'BANGSALSARI', 'BADEAN'),
(153, 'PANTI', 'KEMUNINGSARI LOR'),
(154, 'PANTI', 'GLAGAHWERO'),
(155, 'PANTI', 'SERUT'),
(156, 'PANTI', 'PANTI'),
(157, 'PANTI', 'PAKIS'),
(158, 'PANTI', 'SUCI'),
(159, 'PANTI', 'KEMIRI'),
(160, 'SUKORAMBI', 'JUBUNG'),
(161, 'SUKORAMBI', 'DUKUH MENCEK'),
(162, 'SUKORAMBI', 'SUKORAMBI'),
(163, 'SUKORAMBI', 'KARANGPRING'),
(164, 'SUKORAMBI', 'KELUNGKUNG'),
(165, 'ARJASA', 'KEMUNING LOR'),
(166, 'ARJASA', 'DARSONO'),
(167, 'ARJASA', 'ARJASA'),
(168, 'ARJASA', 'BITING'),
(169, 'ARJASA', 'CANDIJATI'),
(170, 'ARJASA', 'KAMAL'),
(171, 'PAKUSARI', 'KERTOSARI'),
(172, 'PAKUSARI', 'PAKUSARI'),
(173, 'PAKUSARI', 'JATIAN'),
(174, 'PAKUSARI', 'SUBO'),
(175, 'PAKUSARI', 'SUMBERPINANG'),
(176, 'PAKUSARI', 'BEDADUNG'),
(177, 'PAKUSARI', 'PATEMON'),
(178, 'KALISAT', 'GAMBIRAN'),
(179, 'KALISAT', 'PLALANGAN'),
(180, 'KALISAT', 'AJUNG'),
(181, 'KALISAT', 'GLAGAHWERO'),
(182, 'KALISAT', 'SUMBER JERUK'),
(183, 'KALISAT', 'GUMUKSARI'),
(184, 'KALISAT', 'PATEMPURAN'),
(185, 'KALISAT', 'KALISAT'),
(186, 'KALISAT', 'SUMBER KETEMPAH'),
(187, 'KALISAT', 'SUKORENO'),
(188, 'KALISAT', 'SUMBER KALONG'),
(189, 'KALISAT', 'SEBANEN'),
(190, 'LEDOKOMBO', 'SUREN'),
(191, 'LEDOKOMBO', 'SUMBER SALAK'),
(192, 'LEDOKOMBO', 'SUMBER BULUS'),
(193, 'LEDOKOMBO', 'SUMBER LESUNG'),
(194, 'LEDOKOMBO', 'LEMBENGAN'),
(195, 'LEDOKOMBO', 'SUMBER ANGET'),
(196, 'LEDOKOMBO', 'LEDOKOMBO'),
(197, 'LEDOKOMBO', 'SLATENG'),
(198, 'LEDOKOMBO', 'SUKOGIDRI'),
(199, 'LEDOKOMBO', 'KARANG PAITON'),
(200, 'SUMBERJAMBE', 'RANDU AGUNG'),
(201, 'SUMBERJAMBE', 'CUMEDAK'),
(202, 'SUMBERJAMBE', 'GUNUNG MALANG'),
(203, 'SUMBERJAMBE', 'ROWOSARI'),
(204, 'SUMBERJAMBE', 'SUMBER JAMBE'),
(205, 'SUMBERJAMBE', 'SUMBER PAKEM'),
(206, 'SUMBERJAMBE', 'PLEREYAN'),
(207, 'SUMBERJAMBE', 'PRINGGONDANI'),
(208, 'SUMBERJAMBE', 'JAMBE ARUM'),
(209, 'SUKOWONO', 'SUMBERWARU'),
(210, 'SUKOWONO', 'SUKOREJO'),
(211, 'SUKOWONO', 'SUKOSARI'),
(212, 'SUKOWONO', 'BALET BARU'),
(213, 'SUKOWONO', 'SUMBER WRINGIN'),
(214, 'SUKOWONO', 'MOJOGENI'),
(215, 'SUKOWONO', 'SUKOKERTO'),
(216, 'SUKOWONO', 'SUKOWONO'),
(217, 'SUKOWONO', 'DAWUHAN MANGLI'),
(218, 'SUKOWONO', 'ARJASA'),
(219, 'SUKOWONO', 'SUMBERDANTI'),
(220, 'SUKOWONO', 'POCANGAN'),
(221, 'JELBUK', 'PANDUMAN'),
(222, 'JELBUK', 'JELBUK'),
(223, 'JELBUK', 'SUKOWIRYO'),
(224, 'JELBUK', 'SUGER KIDUL'),
(225, 'JELBUK', 'SUKO JEMBER'),
(226, 'JELBUK', 'SUCO PENGEPOK'),
(227, 'KALIWATES', 'MANGLI'),
(228, 'KALIWATES', 'SEMPUSARI'),
(229, 'KALIWATES', 'KALIWATES'),
(230, 'KALIWATES', 'TEGAL BESAR'),
(231, 'KALIWATES', 'JEMBER KIDUL'),
(232, 'KALIWATES', 'KEPATIHAN'),
(233, 'KALIWATES', 'KEBON AGUNG'),
(234, 'SUMBERSARI', 'KERANJINGAN'),
(235, 'SUMBERSARI', 'WIROLEGI'),
(236, 'SUMBERSARI', 'KARANGREJO'),
(237, 'SUMBERSARI', 'KEBONSARI'),
(238, 'SUMBERSARI', 'SUMBERSARI'),
(239, 'SUMBERSARI', 'TEGAL GEDE'),
(240, 'SUMBERSARI', 'ANTIROGO'),
(241, 'PATRANG', 'GEBANG'),
(242, 'PATRANG', 'JEMBER LOR'),
(243, 'PATRANG', 'PATRANG'),
(244, 'PATRANG', 'BARATAN'),
(245, 'PATRANG', 'BINTORO'),
(246, 'PATRANG', 'SLAWU'),
(247, 'PATRANG', 'JUMERTO'),
(248, 'PATRANG', 'BANJARSENGON');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembayaran_cus`
--

CREATE TABLE `tb_pembayaran_cus` (
  `id_pemb_cus` int(5) NOT NULL,
  `id_sewa` int(5) NOT NULL,
  `no_rek_cus` varchar(20) COLLATE utf8_bin NOT NULL,
  `tgl_pemb` date NOT NULL,
  `foto_transaksi` varchar(50) COLLATE utf8_bin NOT NULL,
  `status_pemb_cus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `tb_pembayaran_cus`
--

INSERT INTO `tb_pembayaran_cus` (`id_pemb_cus`, `id_sewa`, `no_rek_cus`, `tgl_pemb`, `foto_transaksi`, `status_pemb_cus`) VALUES
(7, 10, '1234123412341234', '2020-01-13', '2020-01-13-logo patukang.png', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembayaran_tukang`
--

CREATE TABLE `tb_pembayaran_tukang` (
  `id_pemb_tukang` int(5) NOT NULL,
  `id_sewa` int(5) NOT NULL,
  `id_admin` int(4) NOT NULL,
  `tgl_pemb` date NOT NULL,
  `waktu_pemb` time NOT NULL,
  `status_pemb_tukang` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sewa`
--

CREATE TABLE `tb_sewa` (
  `id_sewa` int(5) NOT NULL,
  `id_customer` int(3) NOT NULL,
  `id_tukang` int(3) NOT NULL,
  `alamat_sewa` varchar(30) COLLATE utf8_bin NOT NULL,
  `luas_sewa` int(11) NOT NULL,
  `detail_sewa` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `total_sewa` int(11) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `waktu_sewa` time NOT NULL,
  `status_sewa` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `tb_sewa`
--

INSERT INTO `tb_sewa` (`id_sewa`, `id_customer`, `id_tukang`, `alamat_sewa`, `luas_sewa`, `detail_sewa`, `total_sewa`, `tgl_sewa`, `waktu_sewa`, `status_sewa`) VALUES
(1, 1, 9, 'tes', 100, 'rehab', 200000, '2019-12-28', '00:00:00', 4),
(3, 3, 1, 'jl.jawa', 200, 'rehab', 200000, '2019-12-30', '00:00:00', 2),
(5, 9, 1, 'Jl Riau 12 no 7a', 900, 'ssadoadoadh', 200000, '2020-01-25', '00:00:00', 2),
(6, 9, 8, 'jl.karimata', 678, 'rehab', 200000, '2020-01-31', '00:00:00', 0),
(9, 1, 23, 'Jl Riau 12 no 7a', 788777, 'rehab', 7098993, '2020-01-25', '00:00:00', 1),
(10, 1, 15, 'jl.karimata', 900000, 'rehab', 79200000, '2020-01-25', '00:00:00', 3),
(11, 18, 15, 'Jl Riau 12 no 7a', 900000, 'rehab', 80100000, '2020-01-25', '00:00:00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tukang`
--

CREATE TABLE `tb_tukang` (
  `id_tukang` int(3) NOT NULL,
  `id_customer` int(3) NOT NULL,
  `Keahlian` varchar(20) COLLATE utf8_bin NOT NULL,
  `harga_tukang` int(11) NOT NULL,
  `no_rek` varchar(20) COLLATE utf8_bin NOT NULL,
  `rating` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `tb_tukang`
--

INSERT INTO `tb_tukang` (`id_tukang`, `id_customer`, `Keahlian`, `harga_tukang`, `no_rek`, `rating`) VALUES
(1, 1, 'Tukang Keramik', 10000, '111111111', 3),
(8, 2, 'Tukang Keramik', 123, '123', 0),
(9, 3, 'Tukang Plafon', 2000, '123', 1),
(14, 9, 'Tukang Alumuniu', 900000, '2147483647', 0),
(15, 10, 'Tukang Alumuniu', 900000, '12233', 0),
(22, 11, 'Tukang Cat', 908809, '898989', 0),
(23, 12, 'Tukang Atap', 788777, '7687868', 4),
(27, 13, 'Tukang Plafon', 888, '909', 0),
(28, 14, 'Tukang Keramik', 211, '1212', 0),
(29, 15, 'Tukang Alumuniu', 123, '123', 0),
(30, 16, 'Tukang Alumunium', 12, '12', 0),
(32, 18, 'Tukang Cat', 900000, '1234123412341234', 0),
(33, 19, 'Tukang Keramik', 900000, '8988998988', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`id_customer`),
  ADD KEY `id_kec` (`id_kec`);

--
-- Indeks untuk tabel `tb_kec`
--
ALTER TABLE `tb_kec`
  ADD PRIMARY KEY (`id_kec`);

--
-- Indeks untuk tabel `tb_pembayaran_cus`
--
ALTER TABLE `tb_pembayaran_cus`
  ADD PRIMARY KEY (`id_pemb_cus`),
  ADD KEY `tb_pembayaran_cus_ibfk_1` (`id_sewa`);

--
-- Indeks untuk tabel `tb_pembayaran_tukang`
--
ALTER TABLE `tb_pembayaran_tukang`
  ADD PRIMARY KEY (`id_pemb_tukang`),
  ADD UNIQUE KEY `id_admin` (`id_admin`),
  ADD KEY `id_sewa` (`id_sewa`);

--
-- Indeks untuk tabel `tb_sewa`
--
ALTER TABLE `tb_sewa`
  ADD PRIMARY KEY (`id_sewa`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_tukang` (`id_tukang`);

--
-- Indeks untuk tabel `tb_tukang`
--
ALTER TABLE `tb_tukang`
  ADD PRIMARY KEY (`id_tukang`),
  ADD KEY `id_customer` (`id_customer`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `id_customer` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tb_pembayaran_cus`
--
ALTER TABLE `tb_pembayaran_cus`
  MODIFY `id_pemb_cus` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_pembayaran_tukang`
--
ALTER TABLE `tb_pembayaran_tukang`
  MODIFY `id_pemb_tukang` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_sewa`
--
ALTER TABLE `tb_sewa`
  MODIFY `id_sewa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_tukang`
--
ALTER TABLE `tb_tukang`
  MODIFY `id_tukang` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD CONSTRAINT `tb_customer_ibfk_1` FOREIGN KEY (`id_kec`) REFERENCES `tb_kec` (`id_kec`);

--
-- Ketidakleluasaan untuk tabel `tb_pembayaran_cus`
--
ALTER TABLE `tb_pembayaran_cus`
  ADD CONSTRAINT `tb_pembayaran_cus_ibfk_1` FOREIGN KEY (`id_sewa`) REFERENCES `tb_sewa` (`id_sewa`);

--
-- Ketidakleluasaan untuk tabel `tb_pembayaran_tukang`
--
ALTER TABLE `tb_pembayaran_tukang`
  ADD CONSTRAINT `tb_pembayaran_tukang_ibfk_1` FOREIGN KEY (`id_sewa`) REFERENCES `tb_sewa` (`id_sewa`);

--
-- Ketidakleluasaan untuk tabel `tb_sewa`
--
ALTER TABLE `tb_sewa`
  ADD CONSTRAINT `tb_sewa_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `tb_customer` (`id_customer`),
  ADD CONSTRAINT `tb_sewa_ibfk_2` FOREIGN KEY (`id_tukang`) REFERENCES `tb_tukang` (`id_tukang`);

--
-- Ketidakleluasaan untuk tabel `tb_tukang`
--
ALTER TABLE `tb_tukang`
  ADD CONSTRAINT `tb_tukang_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `tb_customer` (`id_customer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
