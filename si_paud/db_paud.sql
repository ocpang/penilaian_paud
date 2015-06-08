-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2014 at 04:20 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_paud`
--
CREATE DATABASE IF NOT EXISTS `db_paud` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_paud`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `idlogin` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('admin','user') NOT NULL,
  `timelogin` datetime NOT NULL,
  `timelogout` datetime NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`idadmin`, `nama`, `idlogin`, `password`, `status`, `timelogin`, `timelogout`) VALUES
(2, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2014-12-09 22:02:44', '2014-12-10 10:12:11'),
(3, 'Octavian Panggestu', 'ocpang', '6338cf6e705f028139d42a8093c4a813', 'admin', '2014-12-10 10:12:16', '2014-12-10 10:12:29'),
(6, 'Yunanto Eko P', 'yunan', '76afb9e85728397806b138b4c9a109ff', 'user', '2014-12-09 15:07:31', '2014-12-09 15:07:38'),
(9, 'Suci Tresnati Gusti', 'suci', '1cc6545f956f39a79c80b05f65df3c0a', 'user', '2014-12-10 10:12:34', '2014-12-10 10:20:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anak`
--

CREATE TABLE IF NOT EXISTS `tbl_anak` (
  `noinduk` int(5) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `tempatlahir` varchar(50) NOT NULL,
  `tgllahir` date NOT NULL,
  `agama` enum('Islam','Khatolik','Protestan','Budha','Hindu','Kong Hu Chu') NOT NULL,
  `statusanak` enum('Kandung','Tiri') NOT NULL,
  `namaayah` varchar(50) NOT NULL,
  `namaibu` varchar(50) NOT NULL,
  `namawali` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`noinduk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_anak`
--

INSERT INTO `tbl_anak` (`noinduk`, `namalengkap`, `tempatlahir`, `tgllahir`, `agama`, `statusanak`, `namaayah`, `namaibu`, `namawali`, `password`) VALUES
(1314, 'Rahayu Indah Lestari', 'Jakarta', '2009-08-14', 'Islam', 'Kandung', 'Wakiman', 'Siti Hasanah', '', 'b3f09d84c498a680d610ec4de2ff29aa'),
(1315, 'Amelia Maratus', 'Bogor', '2008-06-13', 'Islam', 'Kandung', 'Ade Mahmud', 'Siti Maesaroh', 'Agus Widodo', 'dfd7468ac613286cdbb40872c8ef3b06'),
(1316, 'Agus Marwanto', 'Depok', '2007-02-23', 'Islam', 'Tiri', 'Wakiman', 'Siti Maesaroh', 'Joko Siswanto', 'fdf169558242ee051cca1479770ebac3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategorinilai`
--

CREATE TABLE IF NOT EXISTS `tbl_kategorinilai` (
  `idkategorinilai` int(2) NOT NULL AUTO_INCREMENT,
  `namakategori` varchar(30) NOT NULL,
  PRIMARY KEY (`idkategorinilai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_kategorinilai`
--

INSERT INTO `tbl_kategorinilai` (`idkategorinilai`, `namakategori`) VALUES
(1, 'Agama'),
(2, 'Bahasa'),
(3, 'Fisik'),
(4, 'Konsep'),
(5, 'Pengetahuan'),
(6, 'Sosial');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilaiagama`
--

CREATE TABLE IF NOT EXISTS `tbl_nilaiagama` (
  `idnilaiagama` int(11) NOT NULL AUTO_INCREMENT,
  `noinduk` int(5) NOT NULL,
  `idpenilaian` int(2) NOT NULL,
  `nilai` enum('Baik','Cukup','Perlu dilatih') NOT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idnilaiagama`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_nilaiagama`
--

INSERT INTO `tbl_nilaiagama` (`idnilaiagama`, `noinduk`, `idpenilaian`, `nilai`, `keterangan`) VALUES
(1, 1314, 1, 'Baik', 'Harus dipertahankan'),
(2, 1314, 2, 'Baik', 'Harus dipertahankan'),
(3, 1314, 3, 'Baik', 'Harus dipertahankan'),
(4, 1314, 4, 'Cukup', 'Ditingkatkan lagi'),
(5, 1314, 5, 'Cukup', 'Harus dipertahankan'),
(6, 1314, 6, 'Perlu dilatih', 'Latihan lagi'),
(7, 1315, 1, 'Baik', 'Sangat baik'),
(8, 1, 0, '', ''),
(12, 1315, 6, 'Baik', 'Ditingkatkan lagi'),
(13, 1314, 3, 'Baik', 'Ditingkatkan lagi'),
(14, 1315, 2, 'Cukup', 'Dibutuhkan segera.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilaibahasa`
--

CREATE TABLE IF NOT EXISTS `tbl_nilaibahasa` (
  `idnilaibahasa` int(11) NOT NULL AUTO_INCREMENT,
  `noinduk` int(5) NOT NULL,
  `idpenilaian` int(2) NOT NULL,
  `nilai` enum('Baik','Cukup','Perlu dilatih') NOT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idnilaibahasa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_nilaibahasa`
--

INSERT INTO `tbl_nilaibahasa` (`idnilaibahasa`, `noinduk`, `idpenilaian`, `nilai`, `keterangan`) VALUES
(1, 1314, 7, 'Cukup', 'Ditingkatkan lagi'),
(2, 1314, 8, 'Baik', 'Harus dipertahankan'),
(3, 1314, 9, 'Perlu dilatih', 'Latihan lagi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilaifisik`
--

CREATE TABLE IF NOT EXISTS `tbl_nilaifisik` (
  `idnilaifisik` int(11) NOT NULL AUTO_INCREMENT,
  `noinduk` int(5) NOT NULL,
  `idpenilaian` int(2) NOT NULL,
  `nilai` enum('Baik','Cukup','Perlu dilatih') NOT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idnilaifisik`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_nilaifisik`
--

INSERT INTO `tbl_nilaifisik` (`idnilaifisik`, `noinduk`, `idpenilaian`, `nilai`, `keterangan`) VALUES
(1, 1314, 19, 'Baik', 'Dipertahankan lagi'),
(3, 1314, 20, 'Cukup', 'Ditingkatkan lagi'),
(4, 1314, 21, 'Cukup', 'Ditingkatkan lagi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilaikonsep`
--

CREATE TABLE IF NOT EXISTS `tbl_nilaikonsep` (
  `idnilaikonsep` int(11) NOT NULL AUTO_INCREMENT,
  `noinduk` int(5) NOT NULL,
  `idpenilaian` int(2) NOT NULL,
  `nilai` enum('Baik','Cukup','Perlu dilatih') NOT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idnilaikonsep`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_nilaikonsep`
--

INSERT INTO `tbl_nilaikonsep` (`idnilaikonsep`, `noinduk`, `idpenilaian`, `nilai`, `keterangan`) VALUES
(1, 1314, 27, 'Cukup', 'Ditingkatkan lagi'),
(2, 1314, 28, 'Baik', 'Dipertahankan lagi'),
(3, 1314, 29, 'Cukup', 'Ditingkatkan lagi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilaipengetahuan`
--

CREATE TABLE IF NOT EXISTS `tbl_nilaipengetahuan` (
  `idnilaipengetahuan` int(11) NOT NULL AUTO_INCREMENT,
  `noinduk` int(5) NOT NULL,
  `idpenilaian` int(2) NOT NULL,
  `nilai` enum('Baik','Cukup','Perlu dilatih') NOT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idnilaipengetahuan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_nilaipengetahuan`
--

INSERT INTO `tbl_nilaipengetahuan` (`idnilaipengetahuan`, `noinduk`, `idpenilaian`, `nilai`, `keterangan`) VALUES
(1, 1314, 34, 'Baik', 'Harus dipertahankan'),
(2, 1314, 35, 'Cukup', 'Ditingkatkan lagi'),
(3, 1314, 36, 'Baik', 'Harus dipertahankan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilaisosial`
--

CREATE TABLE IF NOT EXISTS `tbl_nilaisosial` (
  `idnilaisosial` int(11) NOT NULL AUTO_INCREMENT,
  `noinduk` int(5) NOT NULL,
  `idpenilaian` int(2) NOT NULL,
  `nilai` enum('Baik','Cukup','Perlu dilatih') NOT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idnilaisosial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_nilaisosial`
--

INSERT INTO `tbl_nilaisosial` (`idnilaisosial`, `noinduk`, `idpenilaian`, `nilai`, `keterangan`) VALUES
(1, 1314, 39, 'Cukup', 'Ditingkatkan lagi'),
(2, 1314, 40, 'Cukup', 'Ditingkatkan lagi'),
(3, 1314, 41, 'Perlu dilatih', 'Latihan lagi'),
(4, 1314, 42, 'Baik', 'Dipertahankan lagi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penilaian`
--

CREATE TABLE IF NOT EXISTS `tbl_penilaian` (
  `idpenilaian` int(11) NOT NULL AUTO_INCREMENT,
  `idkategorinilai` int(2) NOT NULL,
  `penilaian` varchar(150) NOT NULL,
  PRIMARY KEY (`idpenilaian`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `tbl_penilaian`
--

INSERT INTO `tbl_penilaian` (`idpenilaian`, `idkategorinilai`, `penilaian`) VALUES
(1, 1, 'Mengenal Tuhan melalui agama yang dianutnya'),
(2, 1, 'Menirukan gerakan ibadah'),
(3, 1, 'Mengucapkan doa sebelum dan/atau sesudah melakukan kegiatan'),
(4, 1, 'Mengenal perilaku baik/sopan dan buruk'),
(5, 1, 'Membiasakan diri berperilaku baik'),
(6, 1, 'Mengucapkan salam dan membalas salam'),
(7, 2, 'Menyimak perkataan orang lain (bahasa ibu atau bahasa lainnya'),
(8, 2, 'Mengerti dua perintah yang diberikan bersamaan'),
(9, 2, 'Memahami cerita yang dibacakan'),
(10, 2, 'Mengenal perbendaharaan kata'),
(11, 2, 'Mengenal kata sifat (nakal, baik, dan sebagainnya)'),
(12, 2, 'Mengulang kalimat sederhana'),
(13, 2, 'Menjawab pertanyaan sederhana'),
(14, 2, 'Mengungkapkan perasaan dengan kata sifat (baik,senang,nakal,pelit,baik hati,berani,jelek, dll)'),
(15, 2, 'Menyebutkan kata-kata yang dikenal'),
(16, 2, 'Mengutarakan pendapat pada orang lain'),
(17, 2, 'Menyatakan alasan terhadap sesuatu yang diinginkan atau ketidak setujuan'),
(18, 2, 'Menceritakan kembali cerita/dongen yang pernah didengar'),
(19, 3, 'Menirukan gerakan binatang, pohon tertiup angin, pesawat terbang, dsb.'),
(20, 3, 'Melakukan gerakan menggantung bergelayut'),
(21, 3, 'Melakukan gerakan melompat, meloncat dan berlari secara terkoordinasi'),
(22, 3, 'Melempar sesuatu secara terarah'),
(23, 3, 'Menangkap sesuatu secara tepat'),
(24, 3, 'Melakukan gerakan antisipasi'),
(25, 3, 'Menendang sesuatu secara terarah'),
(26, 3, 'Memanfaatkan alat permainan di luar kelas'),
(27, 4, 'Mengklasifikasikan benda berdasarkan bentuk,warna atau ukuran'),
(28, 4, 'Mengklasifikasikan benda kedalam kelompok yang sama atau kelompok yang sejenis/kelompok yang berpasa'),
(29, 4, 'Mengenal konsep banyak dan sedikit'),
(30, 4, 'Mengurutkan benda berdasarkan lima variasi ukuran warna'),
(31, 4, 'Membilang banyak benda sampai sepuluh'),
(32, 4, 'Mengenal konsep bilangan'),
(33, 4, 'Mengenal lambang huruf'),
(34, 5, 'Mengenal benda berdasarkan fungsi pisau untuk memotong, pensil untuk menulis'),
(35, 5, 'Menggunakan benda-benda sebagai permainan simbolik kursi sebagai mobil'),
(36, 5, 'Mengenal gejala sebab akibat yang terkait dengan dirinya'),
(37, 5, 'Mengenal konsep sederhana dalam kehidupan sehari-hari gerimis,hujan,gelap,terang,temaram,dll'),
(38, 5, 'Mengkreasikan sesuatu sesuai dengan idenya sendiri'),
(39, 6, 'Menunjukkan sikap mandiri dalam memilih kegiatan'),
(40, 6, 'Mau berbagi,menolong dan membantu orang lain'),
(41, 6, 'Menunjukkan antusiasme dalam melakukan permainan kompetetif secara positif'),
(42, 6, 'Mengendalikan perasaan'),
(43, 6, 'Menaati aturan yang berlaku dalam suatu permainan'),
(44, 6, 'Menujukkan rasa percaya diri'),
(45, 6, 'Menjaga diri sendiri dari lingkungannya'),
(46, 6, 'Menghargai orang lain');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesan`
--

CREATE TABLE IF NOT EXISTS `tbl_pesan` (
  `idpesan` int(4) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `status` enum('Belum Dibaca','Dibaca') NOT NULL,
  PRIMARY KEY (`idpesan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_pesan`
--

INSERT INTO `tbl_pesan` (`idpesan`, `nama`, `email`, `pesan`, `status`) VALUES
(2, 'Octavian Panggestu', 'octavian_ocpang@ymail.com', 'Webnya menarik', 'Belum Dibaca'),
(4, 'Yunanto Eko P', 'yunanto@gmail.com', 'webnya bagus bangeeetttt {y}', 'Dibaca'),
(5, 'Suci Tresnati Gusti', 'sucitigusti@gmail.com', 'semangaaaatt !!!', 'Belum Dibaca');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
