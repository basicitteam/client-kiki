-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 26, 2012 at 04:19 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elearning`
--
CREATE DATABASE `elearning` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `elearning`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_admin`, `timestamp`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin akademik', '2012-11-19 17:03:33');

-- --------------------------------------------------------

--
-- Table structure for table `el_sessions`
--

CREATE TABLE IF NOT EXISTS `el_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `el_sessions`
--

INSERT INTO `el_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('3f9cedbe8bf34ac6f8d46f1cf49391d0', '0.0.0.0', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.64 Safari/537.11', 1353922868, 'a:5:{s:9:"user_data";s:0:"";s:3:"nip";s:8:"87654321";s:4:"nama";s:5:"admin";s:4:"role";s:5:"admin";s:9:"logged_in";b:1;}'),
('de4ae637afaafcd9566b52e6d3efb8fb', '0.0.0.0', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.64 Safari/537.11', 1353942535, 'a:5:{s:9:"user_data";s:0:"";s:3:"nip";s:8:"87654321";s:4:"nama";N;s:4:"role";s:4:"guru";s:9:"logged_in";b:1;}');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `id_guru` int(11) NOT NULL AUTO_INCREMENT,
  `nama_guru` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `jns_kelamin` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_guru`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nama_guru`, `nip`, `no_telp`, `email`, `foto`, `alamat`, `jns_kelamin`, `password`, `timestamp`) VALUES
(7, 'Guru Pertama', '87654321', '08989970289', 'guru@pertama.com', 'Koala.jpg', 'Alamatnya Guru Pertama', 'Laki - Laki', '8b9a7246cf21d8803faf462d85b727e8', '2012-11-25 15:39:43'),
(8, 'Guru Kedua', '98765432', '0192837656', 'guru@kedua.com', 'Penguins.jpg', 'Alamatnya guru kedua', 'Laki - Laki', 'dc3a272cae18e19bf62d634b98e06077', '2012-11-25 15:40:24'),
(9, 'rogers', '21436587', '08989970289', 'rogers@gmail.com', 'Chrysanthemum.jpg', 'Baleendah Indonesia', 'Laki - Laki', '7e78efd1807895e2d634ab3bbb6bc15e', '2012-11-26 08:51:42');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE IF NOT EXISTS `jawaban` (
  `id_jawaban` int(11) NOT NULL AUTO_INCREMENT,
  `id_soal` int(11) NOT NULL,
  `jawaban` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id_jawaban`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `kelas` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas`, `keterangan`) VALUES
(1, '10A', ''),
(2, '10B', ''),
(3, '10C', '');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE IF NOT EXISTS `mapel` (
  `id_mapel` int(11) NOT NULL AUTO_INCREMENT,
  `mapel` varchar(255) NOT NULL,
  `keterangan` text,
  PRIMARY KEY (`id_mapel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `mapel`, `keterangan`) VALUES
(6, 'Biologi 1', NULL),
(7, 'Matematika', NULL),
(8, 'Fisika', NULL),
(9, 'B. Indonesia', NULL),
(10, 'Biologi 2', NULL),
(11, 'Fisika 2', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE IF NOT EXISTS `materi` (
  `id_materi` int(11) NOT NULL AUTO_INCREMENT,
  `id_mengajar` int(11) NOT NULL,
  `materi` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_materi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id_materi`, `id_mengajar`, `materi`, `keterangan`, `file`, `timestamp`) VALUES
(4, 10, 'asdasd', 'asdasd', 'caldecott-ap-aws.zip', '2012-11-26 09:40:50'),
(5, 11, 'materi biologi 1', 'coba materi biologi', 'PROPOSAL.docx', '2012-11-26 14:50:29');

-- --------------------------------------------------------

--
-- Table structure for table `mengajar`
--

CREATE TABLE IF NOT EXISTS `mengajar` (
  `id_mengajar` int(11) NOT NULL AUTO_INCREMENT,
  `id_guru` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_semester` int(11) NOT NULL,
  PRIMARY KEY (`id_mengajar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `mengajar`
--

INSERT INTO `mengajar` (`id_mengajar`, `id_guru`, `id_mapel`, `id_semester`) VALUES
(10, 7, 9, 3),
(11, 7, 6, 3),
(12, 8, 9, 3),
(13, 8, 6, 3),
(14, 8, 10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `mengambil`
--

CREATE TABLE IF NOT EXISTS `mengambil` (
  `id_mengambil` int(11) NOT NULL AUTO_INCREMENT,
  `id_mengajar` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  PRIMARY KEY (`id_mengambil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `mengambil`
--

INSERT INTO `mengambil` (`id_mengambil`, `id_mengajar`, `nis`) VALUES
(9, 10, 12345678),
(10, 11, 12345678),
(11, 10, 23456789),
(12, 11, 23456789),
(13, 12, 23456789),
(14, 13, 23456789);

-- --------------------------------------------------------

--
-- Table structure for table `mengerjakan_tugas`
--

CREATE TABLE IF NOT EXISTS `mengerjakan_tugas` (
  `id_tugas` int(11) NOT NULL AUTO_INCREMENT,
  `id_mengambil` int(11) NOT NULL,
  `nilai` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_tugas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mengerjakan_ujian`
--

CREATE TABLE IF NOT EXISTS `mengerjakan_ujian` (
  `id_mengerjakan_ujian` int(11) NOT NULL AUTO_INCREMENT,
  `id_mengambil` int(11) NOT NULL,
  `id_ujian` int(11) NOT NULL,
  `nilai` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_mengerjakan_ujian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE IF NOT EXISTS `semester` (
  `id_semester` int(11) NOT NULL AUTO_INCREMENT,
  `id_tahun_ajaran` int(11) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_semester`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id_semester`, `id_tahun_ajaran`, `semester`, `status`) VALUES
(3, 9, 'Semester 1', 1),
(4, 9, 'Semester 2', 0),
(7, 11, 'Semester 1', 0),
(8, 11, 'Semester 2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nis` int(11) NOT NULL AUTO_INCREMENT,
  `id_kelas` int(11) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `jns_kelamin` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23456790 ;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `id_kelas`, `nama_siswa`, `alamat`, `foto`, `jns_kelamin`, `password`, `timestamp`) VALUES
(12345678, 1, 'Siswa Pertama', 'Alamat Siswa Pertama', 'Penguins.jpg', 'Laki-Laki', '4ac8d6191e2b07592ec192503d4fdc3f', '2012-11-25 15:38:18'),
(23456789, 1, 'Siswa Kedua', 'Alamatnya Siswa Kedua', 'Chrysanthemum.jpg', 'Laki-Laki', '1716f8cd27936ebdccb8c33a5badac75', '2012-11-25 15:38:53');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE IF NOT EXISTS `soal` (
  `id_soal` int(11) NOT NULL AUTO_INCREMENT,
  `id_ujian` int(11) NOT NULL,
  `soal` text NOT NULL,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`id_soal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tahun_ajaran`
--

CREATE TABLE IF NOT EXISTS `tahun_ajaran` (
  `id_tahun_ajaran` int(11) NOT NULL AUTO_INCREMENT,
  `tahun_ajaran` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_tahun_ajaran`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tahun_ajaran`
--

INSERT INTO `tahun_ajaran` (`id_tahun_ajaran`, `tahun_ajaran`, `keterangan`) VALUES
(9, '2012 - 2013', ''),
(11, '2013 - 2014', '');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE IF NOT EXISTS `tugas` (
  `id_tugas` int(11) NOT NULL AUTO_INCREMENT,
  `id_mengajar` int(11) NOT NULL,
  `nama_tugas` int(11) NOT NULL,
  `keterangan` int(11) NOT NULL,
  `file` int(11) NOT NULL,
  `tugas_created` int(11) NOT NULL,
  `deadline` int(11) NOT NULL,
  PRIMARY KEY (`id_tugas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ujian`
--

CREATE TABLE IF NOT EXISTS `ujian` (
  `id_ujian` int(11) NOT NULL AUTO_INCREMENT,
  `id_mengajar` int(11) NOT NULL,
  `nama_ujian` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `start_ujian` varchar(255) NOT NULL,
  `end_ujian` varchar(255) NOT NULL,
  `ujian_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_ujian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
