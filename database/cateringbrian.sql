-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Agu 2019 pada 18.09
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cateringbrian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `balasanrequest`
--

CREATE TABLE `balasanrequest` (
  `idbalasanreqpegawai` int(11) NOT NULL,
  `kepada` varchar(50) NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `subject` varchar(100) NOT NULL,
  `isi` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `idlog` int(11) NOT NULL,
  `action` varchar(400) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user` varchar(400) NOT NULL,
  `keterangan` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`idlog`, `action`, `tanggal`, `user`, `keterangan`) VALUES
(1, 'Login', '0000-00-00 00:00:00', 'admin', ''),
(2, 'Login', '2019-01-07 05:06:54', 'admin ', ''),
(3, 'Login', '2019-01-07 05:08:28', 'admin', ''),
(4, 'Logout', '2019-01-07 05:31:28', 'admin', ''),
(5, 'Login', '2019-01-07 18:55:43', 'admin', ''),
(7, 'Login', '2019-01-07 19:20:51', 'admin', ''),
(8, 'Logout', '2019-01-07 19:21:09', 'admin', ''),
(9, 'Login', '2019-01-07 19:21:23', 'admin', ''),
(10, 'Delete Data', '2019-01-07 19:21:35', 'admin', ''),
(11, 'Delete Data', '2019-01-07 20:42:47', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar12'),
(12, 'Delete Data', '2019-01-07 20:45:52', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar12 '),
(13, 'Delete Data', '2019-01-07 20:46:16', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar11'),
(14, 'Delete Data', '2019-01-07 20:48:08', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar19'),
(40, 'Login', '2019-01-20 17:52:15', 'admin ', ''),
(41, 'Login', '2019-01-20 17:52:50', 'admin ', ''),
(42, 'Login', '2019-01-20 17:53:55', 'admin ', ''),
(43, 'Login', '2019-01-20 17:53:55', 'admin ', ''),
(44, 'Logout', '2019-01-20 17:57:36', 'admin', ''),
(45, 'Login', '2019-01-20 17:57:47', 'admin', ''),
(46, 'Login', '2019-01-20 17:58:01', 'admin ', ''),
(47, 'Login', '2019-01-20 17:58:24', 'admin', ''),
(48, 'Delete Data', '2019-01-20 17:59:13', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar 1 dan Berikut detailnya : <br/>\nnama : brian<br/>\nemail : qeqweqw<br/>\nalamat : qweqweqe<br/>\nNomor Telpon : 1231432424'),
(49, 'Login', '2009-08-19 17:03:22', 'admin', ''),
(50, 'Delete Data', '2018-01-13 17:07:53', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar  dan Berikut detailnya : <br/>\r\nnama : adas<br/>\r\nemail : asdad@gmail.com<br/>\r\nalamat : malang<br/>\r\nNomor Telpon : 546789'),
(51, 'Login', '2009-08-19 19:19:53', 'admin', ''),
(52, 'Logout', '2009-08-19 19:28:24', 'admin', ''),
(53, 'Login', '2009-08-19 19:29:21', 'admin', ''),
(54, 'Login', '2019-01-19 17:39:12', 'admin', ''),
(55, 'Add Data', '2019-01-19 17:39:56', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar  dan Berikut detailnya : <br/>\r\nnama : brian <br/>\r\nemail : sjbdasdbs@gmail.com<br/>\r\nalamat : asjddbusdfasdasd<br/>\r\nNomor Telpon : 0821222222'),
(56, 'Add Data', '2019-01-19 17:46:45', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar  dan Berikut detailnya : <br/>\r\nnama : wertfyio,<br/>\r\nemail : briannehemia@gmail.com<br/>\r\nalamat : g jsad as djasdasd<br/>\r\nNomor Telpon : 0821222222'),
(57, 'Add Data', '2019-01-19 17:47:45', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar  dan Berikut detailnya : <br/>\r\nnama : brian nehemia <br/>\r\nemail : ahsvd@gmail.com<br/>\r\nalamat : jhvsdjvasda<br/>\r\nNomor Telpon : 0821222222'),
(58, 'Add Data', '2019-01-19 17:51:02', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar  dan Berikut detailnya : <br/>\r\nnama : brian nehemia <br/>\r\nemail : briannehemia@gmail.com<br/>\r\nalamat : surabaya <br/>\r\nNomor Telpon : 0821222222'),
(59, 'Add Data', '2019-01-19 18:18:52', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar  dan Berikut detailnya : <br/>\r\nnama : brian nehemia <br/>\r\nemail : coba@gmail.com<br/>\r\nalamat : surabaya<br/>\r\nNomor Telpon : 0821222222'),
(60, 'Add Data', '2019-01-19 18:20:32', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar  dan Berikut detailnya : <br/>\r\nnama : brian nehemia <br/>\r\nemail : briannehemia@gmail.com<br/>\r\nalamat : coba<br/>\r\nNomor Telpon : 0821222222'),
(61, 'Add Data', '2019-01-19 18:29:06', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar  dan Berikut detailnya : <br/>\r\nnama : admin<br/>\r\nemail : adas@gmail.com<br/>\r\nalamat : adasds<br/>\r\nNomor Telpon : 0821222222'),
(62, 'Add Data', '2019-01-19 18:29:35', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar  dan Berikut detailnya : <br/>\r\nnama : admin<br/>\r\nemail : adas@gmail.com<br/>\r\nalamat : adasds<br/>\r\nNomor Telpon : 0821222222'),
(63, 'Add Data', '2019-01-19 18:36:04', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar  dan Berikut detailnya : <br/>\r\nnama : admin<br/>\r\nemail : adas@gmail.com<br/>\r\nalamat : adasds<br/>\r\nNomor Telpon : 0821222222'),
(64, 'Add Data', '2019-01-19 18:58:03', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN0 dan Berikut detailnya : <br/>\r\nnama : admin<br/>\r\nemail : adas@gmail.com<br/>\r\nalamat : adasds<br/>\r\nNomor Telpon : 0821222222'),
(65, 'Login', '2019-01-22 07:44:26', 'admin', ''),
(66, 'Add Data', '2019-01-22 07:44:57', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar  dan Berikut detailnya : <br/>\r\nnama : brian nehemia <br/>\r\nemail : briannehemia@gmail.com<br/>\r\nalamat : surabaya<br/>\r\nNomor Telpon : 0821222222'),
(67, 'Add Data', '2019-01-22 07:46:33', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar  dan Berikut detailnya : <br/>\r\nnama : brian nehemia <br/>\r\nemail : briannehemia@gmail.com<br/>\r\nalamat : cgvhgbjhkjnasd najsbd<br/>\r\nNomor Telpon : 0821222222'),
(68, 'Add Data', '2019-01-22 07:50:32', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar  dan Berikut detailnya : <br/>\r\nnama : brian nehemia <br/>\r\nemail : briannehemia@gmail.com<br/>\r\nalamat : cgvhgbjhkjnasd najsbd<br/>\r\nNomor Telpon : 0821222222'),
(69, 'Add Data', '2019-01-22 07:53:52', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar  dan Berikut detailnya : <br/>\r\nnama : brian nehemia <br/>\r\nemail : briannehemia@gmail.com<br/>\r\nalamat : cgvhgbjhkjnasd najsbd<br/>\r\nNomor Telpon : 0821222222'),
(70, 'Add Data', '2019-01-22 08:00:13', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar  dan Berikut detailnya : <br/>\r\nnama : brian nehemia <br/>\r\nemail : briannehemia@gmail.com<br/>\r\nalamat : admin<br/>\r\nNomor Telpon : 0821222222'),
(71, 'Add Data', '2019-01-22 08:02:48', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar  dan Berikut detailnya : <br/>\r\nnama : brian nehemia <br/>\r\nemail : briannehemia@gmail.com<br/>\r\nalamat : admin<br/>\r\nNomor Telpon : 0821222222'),
(72, 'Add Data', '2019-01-22 08:07:20', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN1001 dan Berikut detailnya : <br/>\r\nnama : brian nehemia <br/>\r\nemail : briannehemia@gmail.com<br/>\r\nalamat : SDADASD<br/>\r\nNomor Telpon : 0821222222'),
(73, 'Add Data', '2019-01-22 08:08:26', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN1001 dan Berikut detailnya : <br/>\r\nnama : brian nehemia <br/>\r\nemail : briannehemia@gmail.com<br/>\r\nalamat : SDADASD<br/>\r\nNomor Telpon : 0821222222'),
(74, 'Login', '2019-01-22 17:32:45', 'admin', ''),
(75, 'Add Data', '2019-01-22 17:33:22', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN1002 dan Berikut detailnya : <br/>\r\nnama : coba<br/>\r\nemail : coba@gmail.com<br/>\r\nalamat : surabaya<br/>\r\nNomor Telpon : 081223015869'),
(76, 'Add Data', '2019-01-22 17:40:01', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar  dan Berikut detailnya : <br/>\r\nnama : cobasaja<br/>\r\nemail : coba@gmail.com<br/>\r\nalamat : cobasaja<br/>\r\nNomor Telpon : 081223015869'),
(77, 'Login', '2019-01-23 21:27:53', 'admin', ''),
(78, 'Add Data', '2019-01-23 21:29:13', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar  dan Berikut detailnya : <br/>\r\nnama : coba<br/>\r\nemail : coba@gmail.com<br/>\r\nalamat : asdasd<br/>\r\nNomor Telpon : 081223015869'),
(79, 'Add Data', '2019-01-23 21:31:34', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar  dan Berikut detailnya : <br/>\r\nnama : coba<br/>\r\nemail : coba@gmail.com<br/>\r\nalamat : asdasd<br/>\r\nNomor Telpon : 081223015869'),
(80, 'Add Data', '2019-01-23 21:33:02', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar  dan Berikut detailnya : <br/>\r\nnama : coba<br/>\r\nemail : coba@gmail.com<br/>\r\nalamat : asdasd<br/>\r\nNomor Telpon : 081223015869'),
(81, 'Add Data', '2019-01-23 21:35:00', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar  dan Berikut detailnya : <br/>\r\nnama : coba<br/>\r\nemail : coba@gmail.com<br/>\r\nalamat : asdasd<br/>\r\nNomor Telpon : 081223015869'),
(82, 'Add Data', '2019-01-23 21:35:08', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar  dan Berikut detailnya : <br/>\r\nnama : coba<br/>\r\nemail : coba@gmail.com<br/>\r\nalamat : asdasd<br/>\r\nNomor Telpon : 081223015869'),
(83, 'Add Data', '2019-01-23 21:42:40', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar  dan Berikut detailnya : <br/>\r\nnama : coba<br/>\r\nemail : coba@gmail.com<br/>\r\nalamat : asdasd<br/>\r\nNomor Telpon : 081223015869'),
(84, 'Add Data', '2019-01-23 21:46:45', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN002 dan Berikut detailnya : <br/>\r\nnama : coba<br/>\r\nemail : coba@gmail.com<br/>\r\nalamat : ASDASD<br/>\r\nNomor Telpon : 081223015869'),
(85, 'Add Data', '2019-01-23 21:49:52', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN003 dan Berikut detailnya : <br/>\nnama : qwqweqwe<br/>\nemail : coba@gmail.com<br/>\nalamat : qweqwe<br/>\nNomor Telpon : 081223015869'),
(86, 'Delete Data', '2019-01-23 21:51:31', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN002 dan Berikut detailnya : <br/>\r\nnama : Y29iYQ==<br/>\r\nemail : coba@gmail.com<br/>\r\nalamat : ASDASD<br/>\r\nNomor Telpon : 081223015869'),
(87, 'Logout', '2019-01-24 02:34:34', 'admin', ''),
(88, 'Login', '2019-02-06 05:46:33', 'admin', ''),
(89, 'Add Data', '2019-02-06 05:47:18', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN005 dan Berikut detailnya : <br/>\r\nnama : admin<br/>\r\nemail : admin@gmail.com<br/>\r\nalamat : cobasaja<br/>\r\nNomor Telpon : 1234567890'),
(90, 'Login', '2019-02-10 17:12:55', 'admin', ''),
(91, 'Add Data', '2019-02-10 17:50:04', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN011 dan Berikut detailnya : <br/>\r\nnama : admin1<br/>\r\nemail : admin@gmail.com<br/>\r\nalamat : qwerty<br/>\r\nNomor Telpon : 1234567890'),
(92, 'Add Data', '2019-02-10 17:52:08', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN011 dan Berikut detailnya : <br/>\r\nnama : admin1<br/>\r\nemail : admin@gmail.com<br/>\r\nalamat : qwerty<br/>\r\nNomor Telpon : 1234567890'),
(93, 'Delete Data', '2019-02-10 17:53:26', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN004 dan Berikut detailnya : <br/>\r\nnama : <br/>\r\nemail : <br/>\r\nalamat : <br/>\r\nNomor Telpon : '),
(94, 'Delete Data', '2019-02-10 17:53:28', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN006 dan Berikut detailnya : <br/>\r\nnama : <br/>\r\nemail : <br/>\r\nalamat : <br/>\r\nNomor Telpon : '),
(95, 'Delete Data', '2019-02-10 17:53:29', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN007 dan Berikut detailnya : <br/>\r\nnama : <br/>\r\nemail : <br/>\r\nalamat : <br/>\r\nNomor Telpon : '),
(96, 'Delete Data', '2019-02-10 17:53:30', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN008 dan Berikut detailnya : <br/>\r\nnama : <br/>\r\nemail : <br/>\r\nalamat : <br/>\r\nNomor Telpon : '),
(97, 'Add Data', '2019-02-10 17:55:28', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN011 dan Berikut detailnya : <br/>\r\nnama : admin<br/>\r\nemail : admin@gmail.com<br/>\r\nalamat : 12345782jsakjdbaksd<br/>\r\nNomor Telpon : 1234567890'),
(98, 'Add Data', '2019-02-10 17:59:17', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN011 dan Berikut detailnya : <br/>\r\nnama : admin<br/>\r\nemail : admin@gmail.com<br/>\r\nalamat : 12345tqwtffsad<br/>\r\nNomor Telpon : 1234567890'),
(99, 'Add Data', '2019-02-11 17:16:00', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN012 dan Berikut detailnya : <br/>\nnama : admin<br/>\nemail : admin@gmail.com<br/>\nalamat : 12345tqwtffsad<br/>\nNomor Telpon : 1234567890'),
(100, 'Login', '2019-02-11 17:49:24', 'asdas', ''),
(101, 'Login', '2019-02-11 19:57:58', 'admin', ''),
(102, 'Add Data', '2019-02-11 19:59:32', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN012 dan Berikut detailnya : <br/>\r\nnama : admin<br/>\r\nemail : admin@gmail.com<br/>\r\nalamat : asbad<br/>\r\nNomor Telpon : 1234567890'),
(103, 'Login', '2019-02-11 19:24:37', 'admin11asda', ''),
(104, 'Login', '2019-02-11 19:31:27', 'adminjnj', ''),
(105, 'Login', '2019-02-11 19:33:03', 'adminjnj', ''),
(106, 'Login', '2019-02-11 19:33:11', 'admin', ''),
(107, 'Login', '2019-02-11 19:33:37', 'admin', ''),
(108, 'Logout', '2019-02-11 19:33:42', 'admin', ''),
(109, 'Login', '2019-02-11 19:33:50', 'adminjnj', ''),
(110, 'Login', '2019-02-11 19:49:41', 'coba', ''),
(111, 'Login', '2019-02-11 21:19:23', '', ''),
(112, 'Login', '2019-02-11 21:19:58', '', ''),
(113, 'Login', '2019-02-11 21:20:05', '', ''),
(114, 'Login', '2019-02-11 21:20:16', 'admin', ''),
(115, 'Add Data', '2019-02-11 23:30:17', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN012 dan Berikut detailnya : <br/>\r\nnama : admin<br/>\r\nemail : admin@gmail.com<br/>\r\nalamat : gcghv<br/>\r\nNomor Telpon : 1234567890'),
(116, 'Add Data', '2019-02-11 23:32:36', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN012 dan Berikut detailnya : <br/>\r\nnama : admin2<br/>\r\nemail : admin@gmail.com<br/>\r\nalamat : asdasd<br/>\r\nNomor Telpon : 1234567890'),
(117, 'Add Data', '2019-02-11 23:39:20', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN012 dan Berikut detailnya : <br/>\r\nnama : admin2<br/>\r\nemail : admin@gmail.com<br/>\r\nalamat : asdasd<br/>\r\nNomor Telpon : coasasd233'),
(118, 'Logout', '2019-02-11 23:44:56', 'admin', ''),
(119, 'Login', '2019-02-11 23:45:04', 'admin', ''),
(120, 'Add Data', '2019-02-11 23:45:56', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN012 dan Berikut detailnya : <br/>\r\nnama : admin1<br/>\r\nemail : admin@gmail.com<br/>\r\nalamat : asdasfff<br/>\r\nNomor Telpon : 1234567890'),
(121, 'Add Data', '2019-02-11 23:48:44', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN012 dan Berikut detailnya : <br/>\r\nnama : admin1<br/>\r\nemail : admin@gmail.com<br/>\r\nalamat : asdasfff<br/>\r\nNomor Telpon : 1234567890'),
(122, 'Add Data', '2019-02-11 23:50:23', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN012 dan Berikut detailnya : <br/>\r\nnama : admin<br/>\r\nemail : admin@gmail.com<br/>\r\nalamat : kjnjsdns<br/>\r\nNomor Telpon : 1234567890'),
(123, 'Add Data', '2019-02-11 23:58:57', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN012 dan Berikut detailnya : <br/>\r\nnama : admin<br/>\r\nemail : admin@gmail.com<br/>\r\nalamat : dasdasf<br/>\r\nNomor Telpon : 1234567890'),
(124, 'Add Data', '2019-02-12 00:03:04', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN012 dan Berikut detailnya : <br/>\r\nnama : admin1<br/>\r\nemail : admin@gmail.com<br/>\r\nalamat : kjnkjn<br/>\r\nNomor Telpon : 1234567890'),
(125, 'Add Data', '2019-02-12 00:10:51', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN001 dan Berikut detailnya : <br/>\r\nnama : admin1<br/>\r\nemail : admin@gmail.com<br/>\r\nalamat : kjnkjn<br/>\r\nNomor Telpon : 1234567890'),
(126, 'Add Data', '2019-02-12 00:12:32', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN001 dan Berikut detailnya : <br/>\r\nnama : admin<br/>\r\nemail : admin@gmail.com<br/>\r\nalamat : asdasdf<br/>\r\nNomor Telpon : 1234567890'),
(127, 'Add Data', '2019-02-12 00:20:47', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN002 dan Berikut detailnya : <br/>\r\nnama : admin<br/>\r\nemail : admin@gmail.com<br/>\r\nalamat : ssdsdsfff<br/>\r\nNomor Telpon : 1234567890'),
(128, 'Add Data', '2019-02-12 00:25:41', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN002 dan Berikut detailnya : <br/>\r\nnama : admin<br/>\r\nemail : admin@gmail.com<br/>\r\nalamat : asdsaff<br/>\r\nNomor Telpon : 1234567890'),
(129, 'Add Data', '2019-02-12 00:30:09', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN002 dan Berikut detailnya : <br/>\r\nnama : admin<br/>\r\nemail : admin@gmail.com<br/>\r\nalamat : zzzzz<br/>\r\nNomor Telpon : zzzzz'),
(130, 'Add Data', '2019-02-12 00:31:40', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN003 dan Berikut detailnya : <br/>\r\nnama : zzzz<br/>\r\nemail : zzzz@gmail.com<br/>\r\nalamat : zzzzz<br/>\r\nNomor Telpon : 1234567890'),
(131, 'Add Data', '2019-02-12 00:33:09', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN003 dan Berikut detailnya : <br/>\r\nnama : coba<br/>\r\nemail : admin@gmail.com<br/>\r\nalamat : coba<br/>\r\nNomor Telpon : 1234567890'),
(132, 'Add Data', '2019-02-12 00:34:51', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN004 dan Berikut detailnya : <br/>\r\nnama : Chef<br/>\r\nemail : coba@gmail.com<br/>\r\nalamat : coba<br/>\r\nNomor Telpon : coba'),
(133, 'Add Data', '2019-02-12 00:37:41', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN004 dan Berikut detailnya : <br/>\r\nnama : admin<br/>\r\nemail : admin@gmail.com<br/>\r\nalamat : adasd<br/>\r\nNomor Telpon : 1234567890'),
(134, 'Add Data', '2019-02-12 00:42:43', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN004 dan Berikut detailnya : <br/>\r\nnama : admin<br/>\r\nemail : admin@gmail.com<br/>\r\nalamat : asdasd<br/>\r\nNomor Telpon : 1234567890'),
(135, 'Add Data', '2019-02-12 00:44:42', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN004 dan Berikut detailnya : <br/>\r\nnama : admin<br/>\r\nemail : admin@gmail.com<br/>\r\nalamat : con<br/>\r\nNomor Telpon : 1234567890'),
(136, 'Add Data', '2019-02-12 00:46:39', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN004 dan Berikut detailnya : <br/>\r\nnama : admin<br/>\r\nemail : admin@gmail.com<br/>\r\nalamat : coba<br/>\r\nNomor Telpon : 1234567890'),
(137, 'Add Data', '2019-02-12 00:48:25', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN005 dan Berikut detailnya : <br/>\r\nnama : zzz<br/>\r\nemail : zzz@gmail.com<br/>\r\nalamat : malang<br/>\r\nNomor Telpon : 081252147847'),
(138, 'Add Data', '2019-02-12 01:10:28', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN006 dan Berikut detailnya : <br/>\r\nnama : coba<br/>\r\nemail : coba@gmail.com<br/>\r\nalamat : cobasaja<br/>\r\nNomor Telpon : 1234567890'),
(139, 'Logout', '2019-02-13 07:55:31', 'admin', ''),
(140, 'Login', '2019-02-13 07:56:47', 'admin', ''),
(141, 'Login', '2019-02-13 10:12:04', 'admin', ''),
(142, 'Login', '2019-02-14 03:32:09', 'admin', ''),
(143, 'Add Data', '2019-02-14 03:34:59', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN008 dan Berikut detailnya : <br/>\r\nnama : admin<br/>\r\nemail : admin@gmail.com<br/>\r\nalamat : alamat<br/>\r\nNomor Telpon : 1234567890'),
(144, 'Add Data', '2019-02-14 04:10:05', 'admin', 'Data yang telah di hapus adalah data dengan id pendaftar PN009 dan Berikut detailnya : <br/>\r\nnama : admin<br/>\r\nemail : admin@gmail.com<br/>\r\nalamat : coba<br/>\r\nNomor Telpon : 1234567890'),
(145, 'Login', '2019-02-15 05:54:13', 'admin', ''),
(146, 'Login', '2019-02-19 05:49:34', 'admin', ''),
(147, 'Login', '2019-02-27 21:29:29', 'admin', ''),
(148, 'Logout', '2019-02-27 21:29:38', 'admin', ''),
(149, 'Login', '2019-02-27 21:30:01', 'brinehemia', ''),
(150, 'Login', '2019-02-27 21:30:24', 'brinehemia', ''),
(151, 'Logout', '2019-02-27 21:31:46', 'brinehemia', ''),
(152, 'Login', '2019-02-27 21:31:58', 'briannehemia@gmail.com', ''),
(153, 'Login', '2019-02-27 21:32:09', 'briannehemia@gmail.com', ''),
(154, 'Login', '2019-02-27 21:32:37', 'briannehemia@gmail.com', ''),
(155, 'Login', '2019-02-27 21:32:49', 'brinehemia', ''),
(156, 'Login', '2019-02-27 21:33:00', 'admin', ''),
(157, 'Logout', '2019-02-27 21:33:23', 'admin', ''),
(158, 'Login', '2019-02-27 21:33:28', 'brinehemia', ''),
(159, 'Login', '2019-02-27 21:34:46', 'brinehemia', ''),
(160, 'Login', '2019-02-27 21:35:55', 'admin', ''),
(161, 'Login', '2019-02-27 21:36:01', 'admin', ''),
(162, 'Login', '2019-02-27 21:36:23', 'admin', ''),
(163, 'Logout', '2019-02-27 21:36:33', 'admin', ''),
(164, 'Login', '2019-02-27 21:37:51', 'brinehemia', ''),
(165, 'Logout', '2019-02-27 21:38:03', 'Brian Nehemia Prasetyo', ''),
(166, 'Login', '2019-02-27 21:38:20', 'briannehemia@gmail.com', ''),
(167, 'Login', '2019-02-27 21:39:02', 'briannehemia@gmail.com', ''),
(168, 'Login', '2019-02-27 21:39:13', 'briannehemia@gmail.com', ''),
(169, 'Login', '2019-02-27 21:39:52', 'briannehemia@gmail.com', ''),
(170, 'Login', '2019-02-27 21:40:07', 'brinehemia', ''),
(171, 'Login', '2019-02-27 21:40:28', 'brinehemia', ''),
(172, 'Logout', '2019-02-27 21:41:15', 'Brian Nehemia Prasetyo', ''),
(173, 'Login', '2019-02-27 21:41:26', 'briannehemia@gmail.com', ''),
(174, 'Login', '2019-02-27 21:41:46', 'briannehemia@gmail.com', ''),
(175, 'Login', '2019-02-27 21:42:25', 'brinehemia', ''),
(176, 'Logout', '2019-02-27 21:44:06', 'Brian Nehemia Prasetyo', ''),
(177, 'Login', '2019-02-27 21:44:21', 'briannehemia@gmail.com', ''),
(178, 'Login', '2019-02-27 21:44:39', 'brinehemia', ''),
(179, 'Logout', '2019-02-27 21:53:51', 'Brian Nehemia Prasetyo', ''),
(180, 'Login', '2019-02-27 21:53:59', 'briannehemia@gmail.com', ''),
(181, 'Logout', '2019-02-27 21:54:04', 'Brian Nehemia Prasetyo', ''),
(182, 'Login', '2019-02-27 21:54:11', 'brinehemia', ''),
(183, 'Logout', '2019-02-27 21:54:16', 'Brian Nehemia Prasetyo', ''),
(184, 'Login', '2019-02-27 21:55:25', 'asdaa', ''),
(185, 'Login', '2019-02-27 21:56:36', 'asdaa', ''),
(186, 'Login', '2019-02-27 22:05:44', 'brinehemia', ''),
(187, 'Login', '2019-02-27 22:06:53', 'admin', ''),
(188, 'Login', '2019-02-27 22:07:34', 'admin', ''),
(189, 'Logout', '2019-02-27 22:09:25', 'coba saja ini', ''),
(190, 'Login', '2019-02-27 22:09:46', 'admin', ''),
(191, 'Login', '2019-02-27 22:14:30', 'admin@gmail.com', ''),
(192, 'Login', '2019-02-27 22:14:47', 'brinehemia', ''),
(193, 'Logout', '2019-02-27 22:18:30', 'Brian Nehemia Prasetyo', ''),
(194, 'Login', '2019-02-27 22:18:39', 'admin@gmail.com', ''),
(195, 'Login', '2019-02-27 22:19:19', 'admin@gmail.com', ''),
(196, 'Login', '2019-02-27 22:20:47', 'brinehemia', ''),
(197, 'Login', '2019-02-27 22:23:47', 'brinehemia', ''),
(198, 'Logout', '2019-02-27 22:32:58', 'Brian Nehemia Prasetyo', ''),
(199, 'Login', '2019-02-27 22:35:05', 'untukcoba@gmail.com', ''),
(200, 'Login', '2019-02-27 22:35:46', 'untukcoba@gmail.com', ''),
(201, 'Login', '2019-02-27 22:38:32', 'untukcoba@gmail.com', ''),
(202, 'Login', '2019-02-27 22:39:12', 'untukcoba@gmail.com', ''),
(203, 'Login', '2019-02-27 22:39:39', 'brinehemia', ''),
(204, 'Logout', '2019-02-27 22:40:34', 'Brian Nehemia Prasetyo', ''),
(205, 'Login', '2019-02-27 22:41:55', 'untukcoba@gmail.com', ''),
(206, 'Login', '2019-02-27 22:44:58', 'untukcoba@gmail.com', ''),
(207, 'Login', '2019-02-27 22:45:17', 'untukcoba@gmail.com', ''),
(208, 'Login', '2019-02-27 22:46:29', 'untukcoba@gmail.com', ''),
(209, 'Login', '2019-02-27 22:46:42', 'brinehemia', ''),
(210, 'Login', '2019-02-27 22:49:27', 'brinehemia', ''),
(211, 'Logout', '2019-02-27 22:49:33', 'Brian Nehemia Prasetyo', ''),
(212, 'Login', '2019-02-27 22:49:42', 'briannehemia@gmail.com', ''),
(213, 'Logout', '2019-02-27 22:49:48', 'Brian Nehemia Prasetyo', ''),
(214, 'Login', '2019-02-27 22:49:53', 'sfsdf', ''),
(215, 'Login', '2019-02-27 22:52:45', 'hanyacoba@gmail.com', ''),
(216, 'Login', '2019-02-27 22:53:20', 'untukcoba@gmail.com', ''),
(217, 'Login', '2019-02-27 22:53:31', 'hvjvc', ''),
(218, 'Login', '2019-02-27 22:53:59', 'hvjvc', ''),
(219, 'Login', '2019-02-27 22:54:24', 'hvjvc', ''),
(220, 'Login', '2019-02-27 22:55:50', 'hvjvc', ''),
(221, 'Login', '2019-02-27 22:56:00', 'brinehemia', ''),
(222, 'Login', '2019-02-27 22:57:04', 'brinehemia', ''),
(223, 'Logout', '2019-02-27 22:57:12', 'Brian Nehemia Prasetyo', ''),
(224, 'Login', '2019-02-27 22:57:24', 'briannehemia@gmail.com', ''),
(225, 'Logout', '2019-02-27 22:57:31', 'Brian Nehemia Prasetyo', ''),
(226, 'Login', '2019-02-27 22:59:03', 'AKJSBDAD', ''),
(227, 'Login', '2019-02-27 22:59:11', 'brinehemia', ''),
(228, 'Logout', '2019-02-27 22:59:18', 'Brian Nehemia Prasetyo', ''),
(229, 'Login', '2019-02-27 22:59:45', 'JANCOK', ''),
(230, 'Login', '2019-02-27 23:01:14', 'brinehemia', ''),
(231, 'Logout', '2019-02-27 23:01:19', 'Brian Nehemia Prasetyo', ''),
(232, 'Login', '2019-02-27 23:01:24', 'brinehemia', ''),
(233, 'Logout', '2019-02-27 23:01:28', 'Brian Nehemia Prasetyo', ''),
(234, 'Login', '2019-02-27 23:02:02', 'brinehemia', ''),
(235, 'Logout', '2019-02-27 23:02:06', 'Brian Nehemia Prasetyo', ''),
(236, 'Login', '2019-02-27 23:02:31', 'brinehemia', ''),
(237, 'Login', '2019-02-27 23:02:47', 'brinehemia', ''),
(238, 'Login', '2019-02-27 23:05:29', 'brinehemia', ''),
(239, 'Logout', '2019-02-27 23:06:48', 'Brian Nehemia Prasetyo', ''),
(240, 'Login', '2019-02-27 23:06:58', 'brinehemia', ''),
(241, 'Logout', '2019-02-27 23:08:36', 'Brian Nehemia Prasetyo', ''),
(242, 'Login', '2019-02-27 23:08:41', 'brinehemia', ''),
(243, 'Logout', '2019-02-27 23:08:46', 'Brian Nehemia Prasetyo', ''),
(244, 'Login', '2019-02-27 23:08:55', 'untukcoba@gmail.com', ''),
(245, 'Login', '2019-02-27 23:09:03', 'untukcoba@gmail.com', ''),
(246, 'Login', '2019-02-27 23:09:19', 'untukcoba@gmail.com', ''),
(247, 'Login', '2019-02-27 23:10:41', 'brinehemia', ''),
(248, 'Login', '2019-02-27 23:10:55', 'brinehemia', ''),
(249, 'Login', '2019-02-27 23:11:47', 'brinehemia', ''),
(250, 'Login', '2019-02-27 23:11:59', 'brinehemia', ''),
(251, 'Logout', '2019-02-27 23:12:03', 'Brian Nehemia Prasetyo', ''),
(252, 'Login', '2019-02-27 23:12:18', 'untukcoba@gmail.com', ''),
(253, 'Login', '2019-02-27 23:12:29', 'untukcoba@gmail.com', ''),
(254, 'Login', '2019-02-27 23:12:51', 'briannehemia@gmail.com', ''),
(255, 'Login', '2019-02-27 23:13:07', 'briannehemia@gmail.com', ''),
(256, 'Logout', '2019-02-27 23:13:11', 'Brian Nehemia Prasetyo', ''),
(257, 'Login', '2019-02-28 16:19:50', 'untukcoba@gmail.com', ''),
(258, 'Login', '2019-02-28 16:32:37', 'untukcoba@gmail.com', ''),
(259, 'Login', '2019-02-28 16:42:20', 'untukcoba@gmail.com', ''),
(260, 'Login', '2019-02-28 16:47:52', 'admin', ''),
(261, 'Logout', '2019-02-28 19:57:15', 'coba saja ini', ''),
(262, 'Login', '2019-02-28 19:57:21', 'untukcoba@gmail.com', ''),
(263, 'Login', '2019-02-28 20:12:24', 'untukcoba@gmail.com', ''),
(264, 'Login', '2019-02-28 20:34:10', 'untukcoba@gmail.com', ''),
(265, 'Login', '2019-03-07 07:56:11', 'untukcoba@gmail.com', ''),
(266, 'Login', '2019-03-07 07:56:24', 'untukcoba@gmail.com', ''),
(267, 'Login', '2019-03-08 05:18:06', 'admin', ''),
(268, 'Logout', '2019-03-08 05:24:00', 'coba saja ini', ''),
(269, 'Login', '2019-03-08 05:26:13', 'admin', ''),
(270, 'Login', '2019-03-08 05:26:55', 'untukcoba@gmail.com', ''),
(271, 'Login', '2019-03-08 05:27:20', 'untukcoba@gmail.com', ''),
(272, 'Logout', '2019-03-08 05:30:28', 'coba saja ini', ''),
(273, 'Login', '2019-03-08 05:37:20', 'admin', ''),
(274, 'Logout', '2019-03-08 05:53:57', 'coba saja ini', ''),
(275, 'Login', '2019-03-08 05:54:04', 'untukcoba@gmail.com', ''),
(276, 'Login', '2019-03-08 05:54:11', 'untukcoba@gmail.com', ''),
(277, 'Login', '2019-03-10 08:39:13', 'admin', ''),
(278, 'Login', '2019-03-10 20:30:42', 'untukcoba@gmail.com', ''),
(279, 'Login', '2019-03-16 18:38:53', 'admin', ''),
(280, 'Login', '2019-05-23 03:04:01', 'admin', ''),
(281, 'Login', '2019-05-24 00:16:45', 'admin', ''),
(282, 'Login', '2019-06-22 14:31:49', 'admin', ''),
(283, 'Login', '2019-06-23 05:31:27', 'admin', ''),
(284, 'Login', '2019-06-26 19:42:18', 'admin', ''),
(285, 'Login', '2019-06-26 20:50:41', 'admin', ''),
(286, 'Logout', '2019-06-26 20:51:00', 'coba saja ini', ''),
(287, 'Login', '2019-06-26 20:51:09', 'admin', ''),
(288, 'Logout', '2019-06-26 21:01:57', 'coba saja ini', ''),
(289, 'Login', '2019-06-26 21:02:04', 'untukcoba@gmail.com', ''),
(290, 'Login', '2019-06-27 20:04:44', 'admin', ''),
(291, 'Logout', '2019-06-27 20:14:57', 'coba saja ini', ''),
(292, 'Login', '2019-06-27 20:15:06', 'brinehemia', ''),
(293, 'Login', '2019-06-28 05:35:55', 'admin', ''),
(294, 'Login', '2019-06-28 05:40:22', 'untukcoba@gmail.com', ''),
(295, 'Login', '2019-06-28 05:41:22', 'untukcoba@gmail.com', ''),
(296, 'Logout', '2019-06-28 05:41:39', 'coba saja ini', ''),
(297, 'Login', '2019-06-28 05:41:44', 'admin', ''),
(298, 'Login', '2019-06-29 06:07:05', 'admin', ''),
(299, 'Login', '2019-06-29 06:58:19', 'admin', ''),
(300, 'Login', '2019-06-29 07:43:16', 'admin', ''),
(301, 'Add Data', '2019-06-29 08:44:23', 'coba saja ini', 'Data yang telah di hapus adalah data dengan id pendaftar  dan Berikut detailnya : <br/>\r\nnama : <br/>\r\nemail : <br/>\r\nalamat : <br/>\r\nNomor Telpon : '),
(302, 'Add Data', '2019-06-29 08:45:08', 'coba saja ini', 'Data yang telah di hapus adalah data dengan id pendaftar  dan Berikut detailnya : <br/>\r\nnama : <br/>\r\nemail : <br/>\r\nalamat : <br/>\r\nNomor Telpon : '),
(303, 'Login', '2019-06-29 09:42:44', 'untukcoba@gmail.com', ''),
(304, 'Login', '2019-06-29 16:15:43', 'admin', ''),
(305, 'Logout', '2019-06-29 17:00:24', 'coba saja ini', ''),
(306, 'Login', '2019-06-29 17:01:55', 'admin', ''),
(307, 'Login', '2019-06-30 02:29:04', 'admin', ''),
(308, 'Login', '2019-06-30 06:55:19', 'admin', ''),
(309, 'Login', '2019-07-01 00:09:44', 'admin', ''),
(310, 'Login', '2019-07-01 17:48:02', 'admin', ''),
(311, 'Login', '2019-07-02 00:26:39', 'admina', ''),
(312, 'Login', '2019-07-02 00:26:48', 'admin', ''),
(313, 'Login', '2019-07-03 18:07:50', 'admin', ''),
(314, 'Add Data', '2019-07-03 18:27:25', 'coba saja ini', 'Data yang telah di tambah adalah data dengan id pendaftar  dan Berikut detailnya : <br/>\r\nnama : Call Center Duta Catering<br/>\r\nemail : <br/>\r\nalamat : <br/>\r\nNomor Telpon : '),
(315, 'Logout', '2019-07-03 21:33:30', 'coba saja ini', ''),
(316, 'Login', '2019-07-03 21:33:38', 'untukcoba@gmail.com', ''),
(317, 'Login', '2019-07-03 21:42:21', 'zzz@gmail.com', ''),
(318, 'Login', '2019-07-03 21:42:30', 'admin', ''),
(319, 'Logout', '2019-07-03 21:43:16', 'coba saja ini', ''),
(320, 'Login', '2019-07-03 21:43:44', 'admin@gmail.com', ''),
(321, 'Login', '2019-07-03 21:46:47', 'admin@gmail.com', ''),
(322, 'Login', '2019-07-03 21:47:38', 'zzz@gmail.com', ''),
(323, 'Login', '2019-07-03 21:47:46', 'untukcoba@gmail.com', ''),
(324, 'Login', '2019-07-03 21:48:03', 'untukcoba@gmail.com', ''),
(325, 'Login', '2019-07-03 21:48:09', 'admin', ''),
(326, 'Logout', '2019-07-03 21:48:13', 'coba saja ini', ''),
(327, 'Login', '2019-07-03 21:54:02', 'zzz@gmail.com', ''),
(328, 'Login', '2019-07-03 21:54:10', 'untukcoba@gmail.com', ''),
(329, 'Login', '2019-07-03 21:54:29', 'untukcoba@gmail.com', ''),
(330, 'Login', '2019-07-03 21:54:41', 'untukcoba@gmail.com', ''),
(331, 'Login', '2019-07-03 21:54:58', 'zzz@gmail.com', ''),
(332, 'Login', '2019-07-03 21:55:28', 'zzz@gmail.com', ''),
(333, 'Login', '2019-07-03 21:55:39', 'zzz@gmail.com', ''),
(334, 'Login', '2019-07-03 21:56:40', 'zzz@gmail.com', ''),
(335, 'Login', '2019-07-03 21:57:06', 'zzz@gmail.com', ''),
(336, 'Login', '2019-07-03 21:57:12', 'zzz@gmail.com', ''),
(337, 'Login', '2019-07-03 21:57:23', 'zzz@gmail.com', ''),
(338, 'Login', '2019-07-03 21:57:43', 'zzz@gmail.com', ''),
(339, 'Login', '2019-07-03 21:59:08', 'zzz@gmail.com', ''),
(340, 'Login', '2019-07-03 21:59:15', 'zzz@gmail.com', ''),
(341, 'Login', '2019-07-03 22:02:17', 'admin@gmail.com', ''),
(342, 'Login', '2019-07-03 22:02:26', 'untukcoba@gmail.com', ''),
(343, 'Login', '2019-07-03 22:02:32', 'admin', ''),
(344, 'Logout', '2019-07-03 22:02:36', 'coba saja ini', ''),
(345, 'Login', '2019-07-03 22:03:21', 'zzz@gmail.com', ''),
(346, 'Login', '2019-07-03 22:05:53', 'zzz@gmail.com', ''),
(347, 'Login', '2019-07-03 22:06:40', 'untukcoba@gmail.com', ''),
(348, 'Login', '2019-07-03 22:10:19', 'Yantogaming@gmail.com', ''),
(349, 'Login', '2019-07-03 22:10:54', 'untukcoba@gmail.com', ''),
(350, 'Login', '2019-07-03 22:12:58', 'Yantogaming@gmail.com', ''),
(351, 'Login', '2019-07-03 22:13:55', 'admin@gmail.com', ''),
(352, 'Login', '2019-07-03 22:14:54', 'admin@gmail.com', ''),
(353, 'Login', '2019-07-03 22:15:25', 'admin1@gmail.com', ''),
(354, 'Login', '2019-07-03 22:15:48', 'admin1@gmail.com', ''),
(355, 'Login', '2019-07-03 22:16:01', 'admin1@gmail.com', ''),
(356, 'Login', '2019-07-03 22:16:23', 'admin1@gmail.com', ''),
(357, 'Login', '2019-07-03 22:20:26', 'zzz@gmail.com', ''),
(358, 'Login', '2019-07-03 22:22:51', 'zzz@gmail.com', ''),
(359, 'Login', '2019-07-03 22:23:08', 'zzz@gmail.com', ''),
(360, 'Login', '2019-07-03 22:25:27', 'admin1@gmail.com', ''),
(361, 'Login', '2019-07-03 22:25:41', 'admin', ''),
(362, 'Logout', '2019-07-03 22:25:48', 'coba saja ini', ''),
(363, 'Login', '2019-07-03 22:26:11', 'brinehemia', ''),
(364, 'Logout', '2019-07-03 22:26:22', 'Brian Nehemia Prasetyo', ''),
(365, 'Login', '2019-07-03 22:26:31', 'admin1@gmail.com', ''),
(366, 'Login', '2019-07-03 22:26:46', 'untukcoba@gmail.com', ''),
(367, 'Login', '2019-07-03 22:30:19', 'untukcoba@gmail.com', ''),
(368, 'Login', '2019-07-04 07:03:23', 'untukcoba@gmail.com', ''),
(369, 'Login', '2019-07-04 09:44:23', 'untukcoba@gmail.com', ''),
(370, 'Login', '2019-07-04 10:13:22', 'admin', ''),
(371, 'Logout', '2019-07-04 10:21:22', 'coba saja ini', ''),
(372, 'Login', '2019-07-04 10:21:28', 'zzz@gmail.com', ''),
(373, 'Login', '2019-07-04 10:21:45', 'untukcoba@gmail.com', ''),
(374, 'Login', '2019-07-04 10:26:52', 'untukcoba@gmail.com', ''),
(375, 'Login', '2019-07-04 10:49:25', 'admin', ''),
(376, 'Logout', '2019-07-04 11:10:33', 'coba saja ini', ''),
(377, 'Login', '2019-07-04 11:10:50', 'admin', ''),
(378, 'Logout', '2019-07-04 11:13:28', 'coba saja ini', ''),
(379, 'Login', '2019-07-04 11:13:33', 'untukcoba@gmail.com', ''),
(380, 'Login', '2019-07-04 11:14:08', 'admin', ''),
(381, 'Login', '2019-07-04 21:33:56', 'untukcoba@gmail.com', ''),
(382, 'Logout', '2019-07-04 22:14:28', 'coba saja ini', ''),
(383, 'Login', '2019-07-04 22:14:34', 'admin1@gmail.com', ''),
(384, 'Login', '2019-07-04 22:14:47', 'admin', ''),
(385, 'Logout', '2019-07-04 22:15:15', 'coba saja ini', ''),
(386, 'Login', '2019-07-04 22:15:21', 'admin1@gmail.com', ''),
(387, 'Login', '2019-07-04 22:20:09', 'admin', ''),
(388, 'Logout', '2019-07-04 22:22:12', 'coba saja ini', ''),
(389, 'Login', '2019-07-04 22:22:23', 'untukcoba@gmail.com', ''),
(390, 'Login', '2019-07-04 22:22:30', 'untukcoba@gmail.com', ''),
(391, 'Login', '2019-07-04 22:22:37', 'untukcoba@gmail.com', ''),
(392, 'Login', '2019-07-04 22:23:02', 'untukcoba@gmail.com', ''),
(393, 'Login', '2019-07-04 23:50:56', 'untukcoba@gmail.com', ''),
(394, 'Login', '2019-07-04 23:51:06', 'untukcoba@gmail.com', ''),
(395, 'Login', '2019-07-05 00:20:17', 'admin', ''),
(396, 'Delete Data', '2019-07-05 00:25:04', 'coba saja ini', 'Data yang telah di hapus adalah data dengan id pendaftar PN009 dan Berikut detailnya : <br/>\r\nnama : <br/>\r\nemail : admin@gmail.com<br/>\r\nalamat : coba<br/>\r\nNomor Telpon : MTIzNDU2Nzg5MA='),
(397, 'Logout', '2019-07-05 00:27:57', 'coba saja ini', ''),
(398, 'Login', '2019-07-05 00:28:02', 'untukcoba@gmail.com', ''),
(399, 'Login', '2019-07-05 05:06:01', 'untukcoba@gmail.com', ''),
(400, 'Login', '2019-07-05 05:06:12', 'untukcoba@gmail.com', ''),
(401, 'Login', '2019-07-05 05:06:24', 'admin', ''),
(402, 'Delete Data', '2019-07-05 05:23:09', 'coba saja ini', 'Data yang telah di hapus adalah data dengan id pendaftar PN009 dan Berikut detailnya : <br/>\r\nnama : <br/>\r\nemail : admin@gmail.com<br/>\r\nalamat : coba<br/>\r\nNomor Telpon : MTIzNDU2Nzg5MA='),
(403, 'Logout', '2019-07-05 16:44:49', 'coba saja ini', ''),
(404, 'Login', '2019-07-05 16:45:02', 'untukcoba@gmail.com', ''),
(405, 'Login', '2019-07-05 16:45:08', 'untukcoba@gmail.com', ''),
(406, 'Login', '2019-07-06 02:17:07', 'untukcoba@gmail.com', ''),
(407, 'Login', '2019-07-06 02:17:14', 'untukcoba@gmail.com', ''),
(408, 'Login', '2019-07-06 03:25:31', 'untukcoba@gmail.com', ''),
(409, 'Login', '2019-07-06 04:13:33', 'admin', ''),
(410, 'Login', '2019-07-06 07:57:00', 'untukcoba@gmail.com', ''),
(411, 'Login', '2019-07-06 07:59:13', 'admin', ''),
(412, 'Login', '2019-07-06 09:49:30', 'admin', ''),
(413, 'Login', '2019-07-06 11:01:57', 'admin', ''),
(414, 'Login', '2019-07-06 12:05:50', 'admin', ''),
(415, 'Login', '2019-07-06 17:08:08', 'admin', ''),
(416, 'Logout', '2019-07-06 17:54:19', 'coba saja ini', ''),
(417, 'Login', '2019-07-06 17:54:25', 'admin', ''),
(418, 'Login', '2019-07-07 01:15:08', 'admin', ''),
(419, 'Login', '2019-07-07 05:23:56', 'untukcoba@gmail.com', ''),
(420, 'Login', '2019-07-07 05:24:03', 'untukcoba@gmail.com', ''),
(421, 'Logout', '2019-07-07 05:26:42', 'coba saja ini', ''),
(422, 'Login', '2019-07-07 05:33:46', 'untukcoba@gmail.com', ''),
(423, 'Login', '2019-07-07 05:46:01', 'admin', ''),
(424, 'Logout', '2019-07-07 05:49:50', 'coba saja ini', ''),
(425, 'Login', '2019-07-07 05:49:59', 'untukcoba@gmail.com', ''),
(426, 'Login', '2019-07-07 05:53:28', 'admin', ''),
(427, 'Logout', '2019-07-07 06:13:46', 'coba saja ini', ''),
(428, 'Login', '2019-07-07 06:13:55', 'untukcoba@gmail.com', ''),
(429, 'Login', '2019-07-07 06:34:54', 'admin1@gmail.com', ''),
(430, 'Login', '2019-07-07 11:33:44', 'untukcoba@gmail.com', ''),
(431, 'Login', '2019-07-07 11:33:53', 'untukcoba@gmail.com', ''),
(432, 'Login', '2019-07-07 11:33:53', 'untukcoba@gmail.com', ''),
(433, 'Login', '2019-07-07 11:34:04', 'untukcoba@gmail.com', ''),
(434, 'Login', '2019-07-07 11:34:35', 'untukcoba@gmail.com', ''),
(435, 'Login', '2019-07-07 11:35:00', 'untukcoba@gmail.com', ''),
(436, 'Login', '2019-07-07 11:42:58', 'admin', ''),
(437, 'Login', '2019-07-08 15:31:28', 'admin', ''),
(438, 'Login', '2019-07-08 18:01:10', 'admin', ''),
(439, 'Login', '2019-07-09 00:25:24', 'admin', ''),
(440, 'Login', '2019-07-09 08:32:11', 'untukcoba@gmail.com', ''),
(441, 'Login', '2019-07-09 08:32:18', 'untukcoba@gmail.com', ''),
(442, 'Login', '2019-07-09 08:33:33', 'admin', ''),
(443, 'Logout', '2019-07-09 09:07:21', 'coba saja ini', ''),
(444, 'Login', '2019-07-09 09:07:43', 'untukcoba@gmail.com', ''),
(445, 'Login', '2019-07-09 09:20:06', 'untukcoba@gmail.com', ''),
(446, 'Login', '2019-07-09 09:21:26', 'admin', ''),
(447, 'Logout', '2019-07-09 09:24:15', 'coba saja ini', ''),
(448, 'Login', '2019-07-09 09:24:25', 'untukcoba@gmail.com', ''),
(449, 'Login', '2019-07-09 09:25:00', 'admin', ''),
(450, 'Logout', '2019-07-09 09:33:53', 'coba saja ini', ''),
(451, 'Login', '2019-07-09 09:34:02', 'untukcoba@gmail.com', ''),
(452, 'Login', '2019-07-09 09:34:30', 'admin', ''),
(453, 'Login', '2019-07-09 09:43:21', 'admin', ''),
(454, 'Login', '2019-07-09 09:43:55', 'admin', ''),
(455, 'Login', '2019-07-09 15:45:05', 'admin', ''),
(456, 'Login', '2019-07-09 15:55:40', 'admin', ''),
(457, 'Logout', '2019-07-09 21:42:46', 'coba saja ini', ''),
(458, 'Login', '2019-07-09 21:42:52', 'untukcoba@gmail.com', ''),
(459, 'Login', '2019-07-09 21:42:59', 'admin1@gmail.com', ''),
(460, 'Login', '2019-07-09 21:44:37', 'admin', ''),
(461, 'Login', '2019-07-12 03:49:52', 'untukcoba@gmail.com', ''),
(462, 'Login', '2019-07-12 16:07:59', 'lulud@gmail.com', ''),
(463, 'Login', '2019-07-12 16:08:11', 'lulud@gmail.com', ''),
(464, 'Login', '2019-07-12 16:08:27', 'untukcoba@gmail.com', ''),
(465, 'Login', '2019-07-12 16:09:33', 'lulud@gmail.com', ''),
(466, 'Login', '2019-07-12 16:09:47', 'lulud@gmail.com', ''),
(467, 'Login', '2019-07-12 16:11:25', 'untukcoba@gmail.com', ''),
(468, 'Login', '2019-07-12 16:14:42', 'lulud@gmail.com', ''),
(469, 'Login', '2019-07-12 16:14:52', 'lulud@gmail.com', ''),
(470, 'Login', '2019-07-12 16:25:19', 'lulud@gmail.com', ''),
(471, 'Login', '2019-07-12 16:38:55', 'thor@gmail.com', ''),
(472, 'Login', '2019-07-12 18:49:58', 'admin', ''),
(473, 'Login', '2019-07-14 06:21:11', 'admin', ''),
(474, 'Logout', '2019-07-14 06:21:29', 'coba saja ini', ''),
(475, 'Login', '2019-07-14 06:22:17', 'untukcoba@gmail.com', ''),
(476, 'Login', '2019-07-14 06:25:11', 'untukcoba@gmail.com', ''),
(477, 'Login', '2019-07-14 06:25:21', 'untukcoba@gmail.com', ''),
(478, 'Login', '2019-07-14 06:26:06', 'untukcoba@gmail.com', ''),
(479, 'Login', '2019-07-14 16:44:04', 'admin', ''),
(480, 'Logout', '2019-07-14 16:50:44', 'coba saja ini', ''),
(481, 'Login', '2019-07-14 16:51:20', 'untukcoba@gmail.com', ''),
(482, 'Login', '2019-07-14 16:52:19', 'aldikurnia', ''),
(483, 'Login', '2019-07-14 16:52:48', 'brinehemia', ''),
(484, 'Login', '2019-07-14 16:53:22', 'resma123', ''),
(485, 'Logout', '2019-07-14 16:54:26', 'Brian Nehemia Prasetyo', ''),
(486, 'Login', '2019-07-14 16:54:38', 'aldikurnia', ''),
(487, 'Login', '2019-07-15 01:53:16', 'admin', ''),
(488, 'Login', '2019-07-15 04:15:50', 'arda@gmail.com', ''),
(489, 'Logout', '2019-07-15 04:18:03', 'coba saja ini', ''),
(490, 'Login', '2019-07-15 04:18:50', 'admin', ''),
(491, 'Login', '2019-07-15 10:19:27', 'admin', ''),
(492, 'Logout', '2019-07-15 10:20:34', 'coba saja ini', ''),
(493, 'Login', '2019-07-15 10:20:45', 'arda@gmail.com', ''),
(494, 'Login', '2019-07-15 10:23:47', 'admin', ''),
(495, 'Logout', '2019-07-15 10:26:59', 'coba saja ini', ''),
(496, 'Login', '2019-07-15 10:27:05', 'admin', ''),
(497, 'Logout', '2019-07-15 10:30:08', 'coba saja ini', ''),
(498, 'Login', '2019-07-15 16:54:24', 'admin', ''),
(499, 'Login', '2019-07-16 12:22:05', 'admin', ''),
(500, 'Login', '2019-07-16 20:12:45', 'admin', ''),
(501, 'Add Data', '2019-07-16 20:59:44', 'coba saja ini', 'Data yang telah di tambah adalah data dengan id pendaftar  dan Berikut detailnya : <br/>\r\nnama : admin<br/>\r\nemail : <br/>\r\nalamat : <br/>\r\nNomor Telpon : '),
(502, 'Logout', '2019-07-16 23:19:51', 'coba saja ini', ''),
(503, 'Login', '2019-07-16 23:20:14', 'untukcoba@gmail.com', ''),
(504, 'Login', '2019-07-16 23:24:43', 'admin', ''),
(505, 'Login', '2019-07-17 00:27:33', 'admin', ''),
(506, 'Login', '2019-07-17 00:28:06', 'admin', ''),
(507, 'Logout', '2019-07-17 00:49:53', 'coba saja ini', ''),
(508, 'Login', '2019-07-17 00:49:57', 'admin', ''),
(509, 'Login', '2019-07-17 12:35:01', 'arda@gmail.com', ''),
(510, 'Login', '2019-07-17 12:39:03', 'untukcoba@gmail.com', ''),
(511, 'Login', '2019-07-17 12:55:35', 'admin', ''),
(512, 'Login', '2019-07-17 16:56:54', 'admin', ''),
(513, 'Login', '2019-07-17 16:58:09', 'resma123', ''),
(514, 'Login', '2019-07-17 16:58:57', 'resma123', ''),
(515, 'Login', '2019-07-17 17:01:01', 'resma123', ''),
(516, 'Logout', '2019-07-17 17:01:16', 'Resma Septianawati', ''),
(517, 'Login', '2019-07-17 17:01:20', 'admin', ''),
(518, 'Login', '2019-07-17 23:36:25', 'wkwkwk@gmail.com', ''),
(519, 'Logout', '2019-07-17 23:53:45', 'coba saja ini', ''),
(520, 'Login', '2019-07-17 23:53:51', 'admin', ''),
(521, 'Logout', '2019-07-17 23:56:12', 'coba saja ini', ''),
(522, 'Login', '2019-07-18 00:37:37', 'admin', ''),
(523, 'Login', '2019-07-18 01:27:55', 'inisidang@gmail.com', ''),
(524, 'Login', '2019-07-18 01:28:12', 'inisidang@gmail.com', ''),
(525, 'Logout', '2019-07-18 01:29:15', 'coba saja ini', ''),
(526, 'Login', '2019-07-18 01:29:22', 'admin', ''),
(527, 'Logout', '2019-07-18 01:30:45', 'coba saja ini', ''),
(528, 'Login', '2019-07-18 01:30:54', 'inisidang@gmail.com', ''),
(529, 'Login', '2019-07-18 01:32:53', 'admin', ''),
(530, 'Login', '2019-07-18 01:38:20', 'inisidang@gmail.com', ''),
(531, 'Login', '2019-07-18 01:38:32', 'inisidang@gmail.com', ''),
(532, 'Login', '2019-07-18 01:43:17', 'admin', ''),
(533, 'Login', '2019-07-18 01:45:02', 'admin', ''),
(534, 'Logout', '2019-07-18 01:45:41', 'coba saja ini', ''),
(535, 'Login', '2019-07-18 01:45:47', 'inisidang@gmail.com', ''),
(536, 'Login', '2019-07-18 01:46:50', 'admin', ''),
(537, 'Logout', '2019-07-18 01:48:56', 'coba saja ini', ''),
(538, 'Login', '2019-07-18 01:49:38', 'resma123', ''),
(539, 'Logout', '2019-07-18 01:50:02', 'Resma Septianawati', ''),
(540, 'Login', '2019-07-18 01:50:07', 'admin', ''),
(541, 'Login', '2019-07-18 06:27:42', 'admin', ''),
(542, 'Login', '2019-07-18 11:19:01', 'admin', ''),
(543, 'Login', '2019-07-19 02:38:58', 'admin', ''),
(544, 'Login', '2019-07-19 02:42:38', 'admin', ''),
(545, 'Login', '2019-07-19 02:42:58', 'admin', ''),
(546, 'Login', '2019-07-19 02:44:09', 'untukcoba@gmail.com', ''),
(547, 'Logout', '2019-07-19 02:51:00', 'coba saja ini', ''),
(548, 'Login', '2019-07-19 02:51:20', 'admin', ''),
(549, 'Login', '2019-07-19 02:52:11', 'untukcoba@gmail.com', ''),
(550, 'Logout', '2019-07-19 02:56:16', 'coba saja ini', ''),
(551, 'Login', '2019-07-19 03:58:33', 'admin', ''),
(552, 'Logout', '2019-07-19 04:04:01', 'coba saja ini', ''),
(553, 'Login', '2019-07-19 04:04:09', 'admin', ''),
(554, 'Login', '2019-07-20 16:05:21', 'admin', ''),
(555, 'Login', '2019-07-20 16:54:55', 'admin', ''),
(556, 'Login', '2019-07-21 04:29:27', 'admin', ''),
(557, 'Login', '2019-07-22 01:47:25', 'admin', ''),
(558, 'Login', '2019-07-22 03:41:59', 'admin', ''),
(559, 'Login', '2019-07-22 03:47:24', 'inirevisi@gmail.com', ''),
(560, 'Login', '2019-07-22 03:52:09', 'inirevisi@gmail.com', ''),
(561, 'Logout', '2019-07-22 03:52:18', 'Ini Admin', ''),
(562, 'Login', '2019-07-22 03:52:39', 'admin', ''),
(563, 'Logout', '2019-07-22 03:54:27', 'Ini Admin', ''),
(564, 'Login', '2019-07-22 05:10:39', 'admin', ''),
(565, 'Login', '2019-07-22 05:11:11', 'inirevisi@gmail.com', ''),
(566, 'Login', '2019-07-25 20:57:35', 'admin', ''),
(567, 'Login', '2019-08-25 13:39:59', 'inisidang@gmail.com', ''),
(568, 'Login', '2019-08-25 13:40:06', 'admin', ''),
(569, 'Login', '2019-08-25 14:54:13', 'admin', ''),
(570, 'Login', '2019-08-25 15:07:42', 'inipelamar@gmail.com', ''),
(571, 'Login', '2019-08-25 15:10:47', 'admin', ''),
(572, 'Logout', '2019-08-25 15:39:58', 'Ini Admin', ''),
(573, 'Login', '2019-08-25 15:40:52', 'ardaputra', ''),
(574, 'Logout', '2019-08-25 15:54:34', 'Arda Putra', ''),
(575, 'Login', '2019-08-25 15:54:41', 'inipegawai', ''),
(576, 'Login', '2019-08-25 15:55:35', 'inipegawai', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `requestpegawai`
--

CREATE TABLE `requestpegawai` (
  `idrequestpegawai` varchar(25) NOT NULL,
  `kodedivisi` varchar(11) DEFAULT NULL,
  `tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `namapekerjaan` varchar(200) DEFAULT NULL,
  `jumlahdibutuhkan` int(11) NOT NULL,
  `alasan` varchar(300) NOT NULL,
  `syarat` varchar(300) NOT NULL,
  `statuspengajuan` varchar(100) DEFAULT NULL,
  `keputusan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `requestpegawai`
--

INSERT INTO `requestpegawai` (`idrequestpegawai`, `kodedivisi`, `tanggal`, `namapekerjaan`, `jumlahdibutuhkan`, `alasan`, `syarat`, `statuspengajuan`, `keputusan`) VALUES
('SRPGW0001/HR/0719', 'HR', '2019-07-13 07:20:07', 'tim analisi pergudangan', 9, 'dasddasf', '<p>dsfsdfdfsf</p>', NULL, NULL),
('SRPGW0001/KU/0719', 'KU', '2019-07-16 15:08:28', 'Junior Akuntansi', 6, 'coba ini', '<p>ini juga</p>', 'Done', 'Tidak Disetujui'),
('SRPGW0002/KA/0719', 'KA', '2019-07-13 07:22:21', 'Supir pengiriman', 9, 'asdasdvbn', '<p>fghjghjjhk</p>', NULL, NULL),
('SRPGW0003/KU/0719', 'KU', '2019-07-13 07:22:41', 'Tim kordinasi acara', 3, 'fghfghfgjh', '<p>asdasfdfghhdfg</p>', 'Done', 'setujui'),
('SRPGW0004/PD/0719', 'PD', '2019-07-13 07:24:37', 'asd', 9, 'asdasdf', '<p>fasdfasda</p>', NULL, NULL),
('SRPGW0005/KA/0719', 'KA', '2019-07-14 06:52:50', 'tim analisi pergudangan', 12, 'admin', '<p></p><p></p><ol><li>29347434</li><li>asdasdf</li><li>asffdhfdh</li></ol><p></p><p></p>', 'Done', 'setujui'),
('SRPGW0006/HR/0719', 'HR', '2019-07-14 16:47:58', 'tim analisi pergudangan', 45, 'asdsad', '<p>sdfsdf</p>', 'Done', 'setujui'),
('SRPGW0007/KR/0719', 'KR', '2019-07-15 02:10:58', 'Admin CS', 4, 'kekurangan tenaga', '<p></p><p></p><ol><li>Wanita +- 25 tahun</li><li>lulusan min SMA</li><li>pengalaman 1 tahun</li></ol><p></p><p></p>', 'Done', 'SETUJUI'),
('SRPGW0008/CS/0719', 'CS', '2019-07-15 17:19:33', 'admin', 6, 'admin', '<p></p><ol><li>contoh ini&nbsp;</li><li>cobasaja</li><li>admin</li><li>admin</li></ol><p></p>', 'Done', 'Tidak Disetujui'),
('SRPGW0009/KA/0719', 'KA', '2019-07-16 14:15:06', 'Tim pengiriman', 6, 'kekurangan tenaga supir dan kelebihan jobdesk', '<p></p><ol><li>coba saja ini</li><li>ini juga cobasaja</li></ol><p></p>', 'Done', 'Tidak Disetujui'),
('SRPGW0010/KU/0719', 'KU', '2019-07-16 14:35:29', 'Junior Akuntansi', 8, 'pegawai telah mengundurkan diri sebelumnya mengundurkan diri', '<p></p><ol><li>S1 Akuntasi&nbsp;</li><li>wanita</li><li>maks 26</li></ol><p></p>', 'Menunggu persetujuan', 'NULL'),
('SRPGW0011/GD/0719', 'GD', '2019-07-16 15:13:30', 'Tim pengiriman', 20, 'hanya coba', '<p>admin</p>', 'Done', 'Tidak Disetujui'),
('SRPGW0012/KU/0719', 'KU', '2019-07-16 15:14:48', 'Junior Akuntansi', 4, 'hanya coba saja ini karena', '<p>hahahahahaha</p>', 'Done', 'Tidak Disetujui'),
('SRPGW0013/HR/0719', 'HR', '2019-07-16 15:52:11', 'Junior Akuntansi', 4, 'ini hanya coba', '<p>ini juga</p>', 'Menunggu Keputusan', NULL),
('SRPGW0014/HR/0719', 'HR', '2019-07-16 15:54:48', 'Junior Akuntansi', 11, 'coba ', '<p>ini juga boy</p>', 'Done', 'SETUJUI'),
('SRPGW0015/HR/0719', 'HR', '2019-07-16 15:56:09', 'Tim pengiriman', 11, 'oke', '<p>oke juga</p>', 'Done', 'Tidak Setujui'),
('SRPGW0016/GD/0719', 'GD', '2019-07-16 15:56:53', 'Junior Akuntansi', 12, 'coba', '<p>ini</p>', 'Done', 'SETUJUI'),
('SRPGW0017/GD/0719', 'GD', '2019-07-16 16:01:15', 'Junior Akuntansi', 6, 'hanya coba', '<p>ini juga</p>', 'Done', 'SETUJUI'),
('SRPGW0018/KR/0719', 'KR', '2019-07-16 16:01:55', 'Tim pengiriman', 0, 'hanya coba saja', '<p>admin</p><p><br></p>', 'Done', 'Tidak Setujui'),
('SRPGW0019/CS/0719', 'CS', '2019-07-18 01:24:19', 'tim customer', 12, 'karena kekurangan pegawai', '<p>1. SMA&nbsp;<br>2.&nbsp; Perempuan</p>', 'Done', 'SETUJUI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbbalasanpengajuan`
--

CREATE TABLE `tbbalasanpengajuan` (
  `idbalasanpengajuan` varchar(11) NOT NULL,
  `idrequestpegawai` varchar(25) DEFAULT NULL,
  `Isi` varchar(3000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbbalasanpengajuan`
--

INSERT INTO `tbbalasanpengajuan` (`idbalasanpengajuan`, `idrequestpegawai`, `Isi`) VALUES
('PNK0001', 'SRPGW0009/KA/0719', 'COBA INI'),
('PNK0002', 'SRPGW0010/KU/0719', 'coba ini'),
('PNK0003', 'SRPGW0010/KU/0719', 'coba ini'),
('PNK0004', 'SRPGW0010/KU/0719', 'coba ini'),
('PNK0005', 'SRPGW0001/KU/0719', 'coba saja ini'),
('PNK0006', 'SRPGW0011/GD/0719', 'karena'),
('PNK0007', 'SRPGW0012/KU/0719', 'karena coba'),
('PNK0008', 'SRPGW0018/KR/0719', 'karena itu saja kemampuanmu'),
('PNK0009', 'SRPGW0015/HR/0719', 'karena itu saja kemampuanmu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbbulan`
--

CREATE TABLE `tbbulan` (
  `idbulan` varchar(11) NOT NULL,
  `namabulan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbbulan`
--

INSERT INTO `tbbulan` (`idbulan`, `namabulan`) VALUES
('BLN01', 'Januari'),
('BLN02', 'Februari'),
('BLN03', 'Maret'),
('BLN04', 'April'),
('BLN05', 'Mei'),
('BLN06', 'Juni'),
('BLN07', 'Juli'),
('BLN08', 'Agustus'),
('BLN09', 'September'),
('BLN10', 'Oktober'),
('BLN11', 'November'),
('BLN12', 'Desember');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbcoba`
--

CREATE TABLE `tbcoba` (
  `idcoba` int(11) NOT NULL,
  `kompetensi` varchar(100) DEFAULT NULL,
  `nilai_kompetensi` int(3) DEFAULT NULL,
  `atitude` varchar(100) DEFAULT NULL,
  `nilai_atitude` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbcoba`
--

INSERT INTO `tbcoba` (`idcoba`, `kompetensi`, `nilai_kompetensi`, `atitude`, `nilai_atitude`) VALUES
(5, 'kurang', 1, NULL, NULL),
(6, 'Baik', 2, NULL, NULL),
(7, 'Sangat Baik', 3, NULL, NULL),
(8, 'kurang', 1, 'Sangat Baik', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbcv`
--

CREATE TABLE `tbcv` (
  `idcv` varchar(11) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `skill` varchar(1000) NOT NULL,
  `pengalamankerja` varchar(1000) NOT NULL,
  `tentangdiri` varchar(1000) DEFAULT NULL,
  `alasan` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbcv`
--

INSERT INTO `tbcv` (`idcv`, `pendidikan`, `skill`, `pengalamankerja`, `tentangdiri`, `alasan`) VALUES
('CV0001', '<p>1. SMA 1 Gedeg tahun 2011-2014</p>\r\n', '<p>1. Kemampuan berbahasa asing<br>\r\n2. Analisis data</p>\r\n', '<p>1. PT apasaja selama 2 tahun</p>\r\n', 'Demikian curriculum vitae ini saya buat dengan cukup singkat dan apa adanya sesuai dengan daftar riw', 'cobagasdashdbajhsbvhjvjgfvsajdvfsahjgdvfashgdfsadfsa'),
('CV0002', '<p>asdasff</p>\r\n', '<p>asdasfff</p>\r\n', '<p>lknlxzknclkc</p>\r\n', 'zzzzz', 'zzzz'),
('CV0003', '<p>zzzz</p>\r\n', '<p>zzzz</p>\r\n', '<p>zzzzz</p>\r\n', 'zzzzzz', 'zzzzzz'),
('CV0004', '<p>adasdff</p>\r\n', '<p>asdff</p>\r\n', '<p>admin</p>\r\n', 'dadd', 'dasdsf'),
('CV0005', '<p>zzzz</p>\r\n', '<p>zzzz</p>\r\n', '<p>zzzzz</p>\r\n', 'zzzzz', 'zzzzz'),
('CV0006', '<p>coba</p>\r\n', '<p>coba</p>\r\n', '<p>coba</p>\r\n', 'coba', 'coba'),
('CV0007', '<p>coba</p>\r\n', '<p>coba</p>\r\n', '<p>coba</p>\r\n', 'coba', 'coba'),
('CV0008', '<p>asdd</p>\r\n', '<p>asdff</p>\r\n', '<p>asasd</p>\r\n', 'asadf', 'adasd'),
('CV0009', '<p>adsad</p>\r\n', '<p>adasddd</p>\r\n', '<p>asdasd</p>\r\n', 'asdasdf', 'asads'),
('CV0010', '<p>asdfdgdfg</p>\r\n', '<p>asdfsdfsdfdfs</p>\r\n', '<p>fghfhfgh</p>\r\n', 'ini hanya coba', 'asdsdfd'),
('CV0011', '<p>htsd</p>\r\n', '<p>jysgd</p>\r\n', '<p>jysd</p>\r\n', '', ''),
('CV0012', '<p>Coba&nbsp;</p>\r\n', '<p>admmimmn</p>\r\n', '<p>ini coba</p>\r\n', 'admin', 'admin'),
('CV0013', '<p>coba ini</p>\r\n', '<p>admin</p>\r\n', '<p>admin</p>\r\n', 'ini hanya coba', 'ini hanya coba'),
('CV0014', '<p>2376w</p>\r\n', '<p>qweqw</p>\r\n', '<p>qwqr</p>\r\n', 'gvsdfus', 'sdefybs'),
('CV0015', '<p>1.SD 1 Mana 2015-2016<br />\r\n2.SMP 1 Mana 2015-2016<br />\r\n3.SMA 1 Mana 2015-2016<br />\r\n4.S1 Man', '<p>1.Skill 1<br />\r\n2. Skill 2&nbsp;<br />\r\n3. Skill&nbsp;3</p>\r\n', '<p>1. Bekerja pada (2 tahun) 2016-2018<br />\r\n2.&nbsp;Bekerja pada (2 tahun) 2016-2018</p>\r\n', 'Tentang diri misal', 'kenapa saya melamar di sini'),
('CV0016', '<p>1.SD 1 Mana 2015-2016<br />\r\n2.SMP 1 Mana 2015-2016<br />\r\n3.SMA 1 Mana 2015-2016<br />\r\n4.S1 Man', '<p>1.Skill 1<br />\r\n2. Skill 2&nbsp;<br />\r\n3. Skill&nbsp;3</p>\r\n', '<p>1. Bekerja pada (2 tahun) 2016-2018<br />\r\n2.&nbsp;Bekerja pada (2 tahun) 2016-2018</p>\r\n', 'coba', 'admin'),
('CV0017', '<p>1. ini hanya coba</p>\r\n', '<p>1. ini hanya coba</p>\r\n', '<p>1. ini hanya coba</p>\r\n', 'saya adalah', 'ini adalah'),
('CV0018', '<p>1. hanya coba&nbsp;<br />\r\n2. ini juga<br />\r\n3. dan ini juga</p>\r\n', '<p>1. hanya coba&nbsp;<br />\r\n2. ini juga<br />\r\n3. dan ini juga</p>\r\n', '<p>1. hanya coba&nbsp;<br />\r\n2. ini juga<br />\r\n3. dan ini juga</p>\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dolor sed viverra ipsum nunc aliquet bibendum enim. In massa tempor nec feugiat.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dolor sed viverra ipsum nunc aliquet bibendum enim. In massa tempor nec feugiat. ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbdivisi`
--

CREATE TABLE `tbdivisi` (
  `kodedivisi` varchar(11) NOT NULL,
  `namadivisi` varchar(100) NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbdivisi`
--

INSERT INTO `tbdivisi` (`kodedivisi`, `namadivisi`, `keterangan`) VALUES
('CS', 'Customer Service', ''),
('GD', 'Pergudangan', ''),
('HR', 'Kepegawaian', 'untuk ...'),
('KA', 'Kordinasi acara', ''),
('KR', 'Pengiriman', ''),
('KU', 'keuangan', 'Bertugas sebagai ...'),
('MJ', 'Manajer', ''),
('PD', 'Produksi', 'produksi..');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbevaluasi`
--

CREATE TABLE `tbevaluasi` (
  `idevaluasi` varchar(11) NOT NULL,
  `idpegawai` varchar(11) NOT NULL,
  `idpenilaian` varchar(11) NOT NULL,
  `penyelesaian` varchar(3000) NOT NULL,
  `saran` varchar(3000) NOT NULL,
  `tanggalevaluasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbjobdesk`
--

CREATE TABLE `tbjobdesk` (
  `idjobdesk` varchar(11) NOT NULL,
  `namajobdesk` varchar(200) DEFAULT NULL,
  `jobdesk1` varchar(1000) DEFAULT NULL,
  `jobdesk2` varchar(2000) DEFAULT NULL,
  `jobdesk3` varchar(2000) DEFAULT NULL,
  `jobdesk4` varchar(2000) DEFAULT NULL,
  `jobdesk5` varchar(2000) DEFAULT NULL,
  `jobdesk6` varchar(2000) DEFAULT NULL,
  `jobdesk7` varchar(2000) DEFAULT NULL,
  `jobdesk8` varchar(2000) DEFAULT NULL,
  `jobdesk9` varchar(2000) DEFAULT NULL,
  `jobdesk10` varchar(2000) DEFAULT NULL,
  `tanggalmulai` date DEFAULT NULL,
  `deadline` date NOT NULL,
  `Detailwaktu` time DEFAULT NULL,
  `keterangan` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbjobdesk`
--

INSERT INTO `tbjobdesk` (`idjobdesk`, `namajobdesk`, `jobdesk1`, `jobdesk2`, `jobdesk3`, `jobdesk4`, `jobdesk5`, `jobdesk6`, `jobdesk7`, `jobdesk8`, `jobdesk9`, `jobdesk10`, `tanggalmulai`, `deadline`, `Detailwaktu`, `keterangan`) VALUES
('JBD001', 'Pengiriman pada event', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-17', '2019-07-17', '05:00:00', 'asdsd'),
('JBD002', 'Pengiriman pada event', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-23', '2019-07-31', '12:43:00', 'asdasgghgjjhk'),
('JBD003', 'Pengiriman pada event', 'jancok', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-23', '2019-07-31', '12:43:00', 'asdasgghgjjhk'),
('JBD004', 'Pengiriman pada event', 'jancok', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-23', '2019-07-31', '12:43:00', 'asdasgghgjjhk'),
('JBD005', 'Restock analisis & Rekap', 'aku ini 1', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-23', '2019-07-24', '23:00:00', 'admin inni'),
('JBD006', 'Restock analisis & Rekap', 'aku ini 1', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-23', '2019-07-24', '23:00:00', 'admin inni'),
('JBD007', 'Restock analisis & Rekap', 'aku ini 1', 'asdsadfffg', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-23', '2019-07-24', '23:00:00', 'admin inni'),
('JBD008', 'Pengiriman pada event', 'admin2', 'admin1', 'sdasdasds', 'adasasd', 'asdasdfdfgdf', 'sdfsdfsdf', 'asdasdsa', 'sdfsdfsdfsdfsf', 'sdfsdfsfsdfsdf', 'sdfsdgfdgdfg', '2019-07-17', '2019-07-16', '12:43:00', 'asdasdaddfgdfg'),
('JBD009', 'untuk pengiriman', 'pengiriman jam 1 Acara a', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-09', '2019-07-09', '01:00:00', 'hanya coba');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbkategorinilai`
--

CREATE TABLE `tbkategorinilai` (
  `idkategorinilai` varchar(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nilai` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbkategorinilai`
--

INSERT INTO `tbkategorinilai` (`idkategorinilai`, `nama`, `nilai`) VALUES
('KTGN01', 'Sangat Baik', 10),
('KTGN02', 'Cukup Baik', 8),
('KTGN03', 'Baik', 6),
('KTGN04', 'Kurang', 4),
('KTGN05', 'Sangat Kurang', 2),
('KTGN06', 'Tidak dapat dinilai', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbkategoripengajuan`
--

CREATE TABLE `tbkategoripengajuan` (
  `idkategoripengajuan` varchar(11) NOT NULL,
  `namapengajuan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbkategoripengajuan`
--

INSERT INTO `tbkategoripengajuan` (`idkategoripengajuan`, `namapengajuan`) VALUES
('PNJ01', 'pengajuan tidak masuk kerja'),
('PNJ02', 'pengajuan cuti'),
('PNJ03', 'pengajuan tentang kerja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblowonganpekerjaan`
--

CREATE TABLE `tblowonganpekerjaan` (
  `idlowongan` varchar(6) NOT NULL,
  `namalowongan` varchar(100) NOT NULL,
  `deskripsipekerjaan` varchar(1000) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `syarat` varchar(1000) NOT NULL,
  `kodedivisi` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblowonganpekerjaan`
--

INSERT INTO `tblowonganpekerjaan` (`idlowongan`, `namalowongan`, `deskripsipekerjaan`, `jumlah`, `syarat`, `kodedivisi`) VALUES
('Lw0001', 'Tim apa ini', 'iya ini cuma coba', 4, '<p>ini hanya coba</p>', 'CS'),
('Lw0002', 'Tim apa ini2', 'iya ini coba', 3, '<p></p><ol><li>harus coba</li><li>ini cuma coba</li></ol><p></p>', 'KR'),
('LW0003', 'admin', 'admin akun sosmed', 10, 'harus', 'MJ'),
('LW0004', 'Call Center Duta Catering', 'Akan ditempatkan di kantor duta catering,  Jl. Ir. Soekarno No.26, Dadaprejo, Kec. Junrejo, Kota Batu, dan menjalani training selama 1 bulan', 30, '<p>1. Knowledge Retention<br />\r\n2.&nbsp;Attention to Detail<br />\r\n3. Organization<br />\r\n4. Flexibility<br />\r\n5. Friendly<br />\r\n6. Calm Under Pressure<br />\r\n7. Effective Communication Skills<br />\r\n8. Creativity</p>\r\n', 'HR'),
('LW0005', 'Tim analisis kinerja', 'coba ini', 3, '<ol>\r\n	<li>harus ini</li>\r\n	<li>harus itu</li>\r\n	<li>coba saja ini</li>\r\n	<li>iya coba saja</li>\r\n</ol>\r\n', 'HR'),
('LW0006', 'tim customer', 'hanya coba', 12, '<p>1. SMA&nbsp;<br />\r\n2.&nbsp; Perempuan</p>\r\n', 'CS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpegawai`
--

CREATE TABLE `tbpegawai` (
  `idpegawai` varchar(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `namapegawai` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tanggallahir` date DEFAULT NULL,
  `jeniskelamin` varchar(100) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `tanggalaktifkerja` date DEFAULT NULL,
  `kodedivisi` varchar(11) DEFAULT NULL,
  `level` varchar(200) DEFAULT NULL,
  `idstatuspegawai` varchar(11) DEFAULT NULL,
  `idtim` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbpegawai`
--

INSERT INTO `tbpegawai` (`idpegawai`, `username`, `password`, `namapegawai`, `email`, `alamat`, `tanggallahir`, `jeniskelamin`, `nohp`, `foto`, `tanggalaktifkerja`, `kodedivisi`, `level`, `idstatuspegawai`, `idtim`) VALUES
('HR01', 'brinehemia', 'qwerty123', 'Brian Nehemia Prasetyo', 'briannehemia@gmail.com', 'Malang', NULL, 'Laki-Laki', '081252147847', '', NULL, 'HR', 'admin', 'STS01', ''),
('HR02', 'admin', 'admin', 'Ini Admin', 'coba@gmail.com', 'sumbersari, lowokwaru, malang', NULL, 'laki-laki', '081252147847', '', NULL, 'HR', 'admin', 'STS01', ''),
('PGW0001', 'inipegawai', 'inipegawai', 'Ini hanya coba', 'inipegawai@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore ', '1998-07-16', 'Laki-laki', '08541269734', '', '2019-07-09', 'MJ', 'Pegawai', 'STS04', NULL),
('PGW0002', 'aldikurnia', 'aldikurnia', 'Mochamad aldi kurnia', 'aldikurnia@gmail.com', 'Jl. Jenderal Basuki Rahmat No.5, Kauman, Kec. Klojen, Kota Malang, Jawa Timur 65119', NULL, 'Laki-Laki', '085471965328', '', NULL, 'HR', 'admin', 'STS04', ''),
('PGW0003', 'resma123', 'qwerty', 'Resma Septianawati', 'resmaseptianawati@gmail.com', 'Jalan Joyosuko Metro Gg 2B No. 60 41/R3 RT.3 RW12, Merjosari, Kec. Lowokwaru, Kota Malang', NULL, 'Perempuan', '082258466463', '', '2018-07-17', 'KU', 'Pegawai', 'STS04', 'TIM001'),
('PGW0004', 'luludsaja', 'qwerty', 'Lulud Mahardika', 'lulud@gmail.com', 'Jl. Ahmad Yani No. 162 Kode Pos 65163 Kepanjen', '2016-11-16', 'Laki-laki', '69696969', '', '2019-07-07', 'KU', 'Pegawai', 'STS01', ''),
('PGW0005', 'adinda123', 'qwerty', 'Adinda Parawika', 'yamija@gmail.com', 'sdfsdfggkyertert', '2016-11-16', 'Laki-laki', '69696969', '', '2019-07-07', 'HR', 'Pegawai', 'STS04', NULL),
('PGW0006', 'ardaputra', 'qwerty', 'Arda Putra', 'arda123@gmail.com', 'Jalan Sultan Agung No.2 Kode Pos 65163 Kepanjen', '1997-08-21', 'Laki-laki', '08264785359', '', '2019-07-09', 'KU', 'Pegawai', 'STS01', NULL),
('PGW0007', 'thoriq123', 'qwerty', 'Muhammad thoriq', 'muhammadthoriq@gmail.com', 'Jl. Anggrek No. 31 Kepanjen', '1998-07-16', 'Laki-Laki', '08541269734', '', '2019-07-09', 'PD', 'Pegawai', 'STS04', NULL),
('PGW0008', 'anandaapril', 'qwerty', 'Ananda aprilia', 'anandaaprilia@gmail.com', 'JL. Sumber Taman No. 02 RT. 01 RW. 04 Kalirejo-Lawang', '1998-04-08', 'Perempuan', '08165489726', '', '2019-07-09', 'KA', 'Pegawai', 'STS04', NULL),
('PGW0009', 'evika123', 'qwerty', 'Evika ', 'evika@gmail.com', 'Jl. Stadion Utara No. 02 RT.01 RW.15 Kel. Turen, Kec. Turen', '1998-08-09', 'Perempuan', '08465231879', '', '2019-07-09', 'GD', 'Pegawai', 'STS01', NULL),
('PGW0010', 'naurasari', 'qwerty', 'Naura Sari', 'naurasari@gmail.com', 'Jl. Gatot Subroto No. 110 Turen\r\nTelp. (0341)824311', '1997-02-12', 'Perempuan', '08462318957', '', '2019-07-12', 'KR', 'Pegawai', 'STS01', NULL),
('PGW0011', 'nabeladenaga', 'qwerty', 'Nabela Denaga', 'nabeladenaga', 'jl.sumbersuko No. 1 Kode Pos 65211 Lawang', '1997-12-18', 'Laki-Laki', '08547962453', '', '2019-07-19', 'GD', 'Pegawai', 'STS01', NULL),
('PGW0012', 'ahmadsubroto', 'qwerty', 'Ahmad Subroto', 'madsubroto@gmail.com', 'JL. Sumber Taman No. 02 RT. 01 RW. 04 Kalirejo-Lawang\r\nTelp. (0341)426398', '1986-01-14', 'Laki-Laki', '08264789546', '', '2019-07-17', 'KR', 'Pegawai', 'STS01', NULL),
('PGW0013', 'menikhariyanti', 'qwerty', 'Menik hariyanti', 'menikhariyanti@gmail.com', 'Jl.Sultan Hasanudin No.17 Kode Pos .65163 Kepanjen', '1988-06-19', 'Perempuan', '085746524982', '', '2017-10-18', 'MJ', 'Pegawai', 'STS01', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpendaftar`
--

CREATE TABLE `tbpendaftar` (
  `idpendaftar` varchar(11) NOT NULL,
  `namapelamar` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `usia` int(5) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `jenis_kelamin` varchar(100) DEFAULT NULL,
  `foto` blob,
  `idcv` varchar(6) DEFAULT NULL,
  `idlowongan` varchar(6) DEFAULT NULL,
  `tanggaldaftar` date DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `level` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbpendaftar`
--

INSERT INTO `tbpendaftar` (`idpendaftar`, `namapelamar`, `email`, `password`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `usia`, `no_telp`, `jenis_kelamin`, `foto`, `idcv`, `idlowongan`, `tanggaldaftar`, `status`, `level`) VALUES
('PN001', 'untukcoba', 'untukcoba@gmail.com', 'MTIzNDU2', 'Jalan Sumbersari gang 3B, NO 298, Lowokwaru, Malang', 'Surabaya', '1996-11-30', 21, '081252147847', 'Laki-Laki', NULL, 'CV0001', 'Lw0002', '2019-03-20', 'Diterima pekerjaan', 'pelamar'),
('PN002', 'YWRtaW4=', 'admin1@gmail.com', 'YXVzenhjdHZibm0=', 'zzzzz', 'zzzzz', '2019-02-13', 99, 'enp6eno=', 'Laki-Laki', NULL, 'CV0002', 'LW0003', '0000-00-00', 'Diterima pekerjaan', 'pelamar'),
('PN003', 'Y29iYQ==', 'admin@gmail.com', 'YXVzenhjdHZibm0=', 'coba', 'surabaya', '2019-02-15', 21, 'MTIzNDU2Nzg5MA=', 'Laki-Laki', NULL, 'CV0003', 'LW0004', '0000-00-00', 'Terjadwal', NULL),
('PN004', 'YWRtaW4=', 'admin@gmail.com', 'YXVzenhjdHZibm0=', 'coba', 'malang', '2019-02-22', 21, 'MTIzNDU2Nzg5MA=', 'Laki-Laki', NULL, 'CV0004', 'Lw0002', '0000-00-00', 'Diterima pekerjaan', NULL),
('PN005', 'enp6', 'zzz@gmail.com', 'YXVzenhjdHZibm0=', 'malang', 'malang', '2019-02-15', 21, 'MDgxMjUyMTQ3ODQ', 'Laki-Laki', NULL, 'CV0005', 'LW0004', '0000-00-00', 'Diterima pekerjaan', NULL),
('PN006', 'Y29iYQ==', 'coba@gmail.com', 'YXVzenhjdHZibm0=', 'cobasaja', 'coba', '2019-02-15', 21, 'MTIzNDU2Nzg5MA=', 'Perempuan', NULL, 'CV0006', 'Lw0001', '0000-00-00', 'Registrasi', NULL),
('PN007', 'Y29iYQ==', 'admin@gmail.com', 'YWRtaW4=', 'coba', 'malang', '2019-02-13', 21, 'MTIzNDU2Nzg5MA=', 'Perempuan', NULL, 'CV0007', 'Lw0001', '0000-00-00', 'Registrasi', NULL),
('PN008', 'YWRtaW4=', 'admin@gmail.com', 'YXVzenhjdHZibm0=', 'alamat', 'malang', '2019-02-21', 21, 'MTIzNDU2Nzg5MA=', 'Laki-Laki', NULL, 'CV0008', 'Lw0001', '2019-02-14', 'Registrasi', NULL),
('PN009', 'YWRtaW4=', 'admin@gmail.com', 'YXVzenhjdHZibm0=', 'coba', 'surabaya', '2019-02-22', 21, 'MTIzNDU2Nzg5MA=', 'Laki-Laki', NULL, 'CV0009', 'Lw0002', '2019-02-14', 'Terjadwal', NULL),
('PN010', 'TnVydWwgYXNyaQ==', 'Nurul17@gmail.com', 'cXdlcnR5MTIz', 'Jalan Surabaya, lowokwaru malang', 'Malang', '1994-04-12', 21, 'MDg1OTYzNDU4MTI', 'Perempuan', NULL, 'CV0010', 'Lw0002', '2019-07-03', 'Registrasi', NULL),
('PN011', 'RGluZGE=', 'dinda@gmail.com', 'dXl3ZmR1eWY=', 'jasfdad', 'dgfuk', '2019-07-23', 12, 'MzU0NTY0Mw==', 'Perempuan', NULL, 'CV0011', 'LW0003', '2019-07-12', 'Registrasi', NULL),
('PN012', 'THVsdWQgbWFyZGlhdGlya2E=', 'lulud@gmail.com', 'bHVsdWQx', 'nganjuk', 'admin', '2019-02-12', 21, 'MDg0NTE1MjY3Nw=', 'Perempuan', NULL, 'CV0012', 'LW0003', '2019-07-12', 'Registrasi', 'pelamar'),
('PN013', 'dGhvcg==', 'thor@gmail.com', 'YWRtaW4=', 'coba', 'admin', '1997-04-12', 21, 'MDg1NDYyMzc3Nzg', 'Laki-Laki', NULL, 'CV0013', 'LW0004', '2019-07-12', 'Registrasi', 'pelamar'),
('PN014', 'YXJkYQ==', 'arda@gmail.com', 'YXJkYQ==', 'jombang', '', '1887-03-20', 21, 'MDU1NDg1NTU=', 'Laki-Laki', NULL, 'CV0014', 'LW0003', '2019-07-15', 'Terjadwal', 'pelamar'),
('PN015', 'THVsdWQgbWFoYXJkaWth', 'wkwkwk@gmail.com', 'cXdlcnR5', 'Jalan coba, malang', 'surabaya', '1995-06-12', 21, 'MDg1ODIzNDQ1NQ=', 'Perempuan', NULL, 'CV0015', 'LW0004', '2019-07-18', 'Registrasi', 'pelamar'),
('PN016', 'aW5pIHNpZGFuZw==', 'inisidang@gmail.com', 'cXdlcnR5', 'malang', 'surabaya', '1996-02-12', 21, 'MDgyNDQzMzY2', 'Laki-Laki', NULL, 'CV0016', 'LW0006', '2019-07-18', 'Diterima pekerjaan', 'pelamar'),
('PN017', 'aW5pIHJldmlzaQ==', 'inirevisi@gmail.com', 'cXdlcnR5', 'jalan di malang saja', 'surabaya', '1996-02-12', 21, 'MDg0NTEyMzY1NDY', 'Laki-Laki', NULL, 'CV0017', 'LW0005', '2019-07-22', 'Terjadwal', 'pelamar'),
('PN018', 'SW5pIFBlbGFtYXI=', 'inipelamar@gmail.com', 'aW5pcGVsYW1hcg==', 'Jalan Sumbersari gang 3 b no 197 Lowokwaru, Malang', 'admin', '2019-08-21', 22, 'MDgxMjUyMTQ3ODQ', 'Laki-Laki', NULL, 'CV0018', 'LW0004', '2019-08-25', 'Registrasi', 'pelamar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpenguji`
--

CREATE TABLE `tbpenguji` (
  `idpenguji` varchar(11) NOT NULL,
  `idpegawai` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbpenguji`
--

INSERT INTO `tbpenguji` (`idpenguji`, `idpegawai`) VALUES
('PGJ001', 'HR01'),
('PGJ002', 'HR02'),
('PGJ003', 'PGW0002');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpenilaianabsensi`
--

CREATE TABLE `tbpenilaianabsensi` (
  `idabsensi` varchar(11) NOT NULL,
  `idpegawai` varchar(11) NOT NULL,
  `jumlahharikerja` int(10) NOT NULL,
  `absen` int(10) NOT NULL,
  `sakit` int(10) NOT NULL,
  `ijin` int(10) NOT NULL,
  `nilai` int(10) NOT NULL,
  `idkategorinilai` varchar(11) NOT NULL,
  `idbulan` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpenilaianpegawai`
--

CREATE TABLE `tbpenilaianpegawai` (
  `idpenilaianpegawai` varchar(11) NOT NULL,
  `idpegawai` varchar(11) DEFAULT NULL,
  `keterangan` varchar(2000) NOT NULL,
  `keaktifan` varchar(30) DEFAULT NULL,
  `ketepatanwaktu` varchar(30) DEFAULT NULL,
  `kesalahankerja` varchar(30) DEFAULT NULL,
  `perilaku` varchar(30) DEFAULT NULL,
  `kebersihan` varchar(30) DEFAULT NULL,
  `kualitashasil` varchar(30) DEFAULT NULL,
  `absensi` varchar(30) DEFAULT NULL,
  `inisiatif` varchar(30) DEFAULT NULL,
  `kerjasama` varchar(30) DEFAULT NULL,
  `pengetahuan` varchar(30) DEFAULT NULL,
  `nilai_keaktifan` int(10) DEFAULT NULL,
  `nilai_ketepatanwaktu` int(10) DEFAULT NULL,
  `nilai_kesalahankerja` int(10) DEFAULT NULL,
  `nilai_perilaku` int(10) DEFAULT NULL,
  `nilai_kebersihan` int(10) DEFAULT NULL,
  `nilai_kualitashasil` int(10) DEFAULT NULL,
  `nilai_absensi` int(10) DEFAULT NULL,
  `nilai_inisiatif` int(10) DEFAULT NULL,
  `nilai_kerjasama` int(10) DEFAULT NULL,
  `nilai_pengetahuan` int(10) DEFAULT NULL,
  `jumlahnilai` int(10) NOT NULL,
  `idbulan` varchar(11) NOT NULL,
  `idtahun` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbpenilaianpegawai`
--

INSERT INTO `tbpenilaianpegawai` (`idpenilaianpegawai`, `idpegawai`, `keterangan`, `keaktifan`, `ketepatanwaktu`, `kesalahankerja`, `perilaku`, `kebersihan`, `kualitashasil`, `absensi`, `inisiatif`, `kerjasama`, `pengetahuan`, `nilai_keaktifan`, `nilai_ketepatanwaktu`, `nilai_kesalahankerja`, `nilai_perilaku`, `nilai_kebersihan`, `nilai_kualitashasil`, `nilai_absensi`, `nilai_inisiatif`, `nilai_kerjasama`, `nilai_pengetahuan`, `jumlahnilai`, `idbulan`, `idtahun`) VALUES
('PNP0001', 'PGW0003', 'coba saja ini', 'Cukup Baik', 'Baik', 'Baik', 'Kurang', 'Kurang', 'Kurang', 'Baik', 'Baik', 'Baik', 'Kurang', 4, 3, 3, 2, 2, 2, 3, 3, 3, 2, 27, 'BLN06', 'THN02'),
('PNP0002', 'PGW0003', 'coba saja ini', 'Cukup Baik', 'Baik', 'Baik', 'Kurang', 'Kurang', 'Kurang', 'Baik', 'Baik', 'Baik', 'Kurang', 4, 3, 3, 2, 2, 2, 3, 3, 3, 2, 27, 'BLN08', 'THN02'),
('PNP0003', 'PGW0002', 'coba', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'BLN06', 'THN01'),
('PNP0004', 'PGW0003', 'coba', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100, 'BLN09', 'THN02'),
('PNP0005', 'PGW0003', 'coba saja ini', 'Cukup Baik', 'Kurang', 'Kurang', 'Sangat Baik', 'Cukup Baik', 'Kurang', 'Cukup Baik', 'Kurang', 'Cukup Baik', 'Baik', 4, 2, 2, 5, 4, 2, 4, 2, 4, 3, 32, 'BLN06', 'THN02'),
('PNP0006', 'PGW0003', 'coba saja ini', 'Cukup Baik', 'Cukup Baik', 'Sangat Baik', 'Sangat Baik', 'Cukup Baik', 'Kurang', 'Sangat Baik', 'Kurang', 'Kurang', 'Baik', 4, 4, 5, 5, 4, 2, 5, 2, 2, 3, 36, 'BLN06', 'THN02'),
('PNP0007', 'PGW0004', 'Pertahankan', 'Baik', 'Sangat Baik', 'Kurang', 'Cukup Baik', 'Baik', 'Sangat Baik', 'Baik', 'Cukup Baik', 'Baik', 'Baik', 3, 5, 2, 4, 3, 5, 3, 4, 3, 3, 35, 'BLN07', 'THN02'),
('PNP0008', 'PGW0004', 'Pertahankan', 'Baik', 'Sangat Baik', 'Kurang', 'Cukup Baik', 'Baik', 'Sangat Baik', 'Baik', 'Cukup Baik', 'Baik', 'Baik', 3, 5, 2, 4, 3, 5, 3, 4, 3, 3, 35, 'BLN08', 'THN02'),
('PNP0009', 'HR01', 'asjd', 'Sangat Baik', 'Cukup Baik', 'Baik', 'Cukup Baik', 'Baik', 'Cukup Baik', 'Kurang', 'Baik', 'Cukup Baik', 'Cukup Baik', 5, 4, 3, 4, 3, 4, 2, 3, 4, 4, 36, 'BLN07', 'THN02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpenilaianpelamar`
--

CREATE TABLE `tbpenilaianpelamar` (
  `idpenilaianpelamar` varchar(11) NOT NULL,
  `idwawancara` varchar(11) NOT NULL,
  `kompetensi` varchar(11) NOT NULL,
  `nilai_kompetensi` int(5) NOT NULL,
  `atitude` varchar(11) NOT NULL,
  `nilai_atitude` int(11) DEFAULT NULL,
  `komunikasi` varchar(11) NOT NULL,
  `nilai_komunikasi` int(5) DEFAULT NULL,
  `grooming` varchar(11) NOT NULL,
  `nilai_grooming` int(5) DEFAULT NULL,
  `antusiasme` varchar(11) NOT NULL,
  `nilai_antusiasme` int(11) NOT NULL,
  `hasilpenilaianpelamar` int(3) NOT NULL,
  `catatanlain` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbpenilaianpelamar`
--

INSERT INTO `tbpenilaianpelamar` (`idpenilaianpelamar`, `idwawancara`, `kompetensi`, `nilai_kompetensi`, `atitude`, `nilai_atitude`, `komunikasi`, `nilai_komunikasi`, `grooming`, `nilai_grooming`, `antusiasme`, `nilai_antusiasme`, `hasilpenilaianpelamar`, `catatanlain`) VALUES
('PNL0001', 'WCR003', 'Baik', 2, 'Baik', 2, 'Sangat Baik', 3, 'Baik', 2, 'kurang', 1, 10, ''),
('PNL0002', 'WCR004', 'kurang', 1, 'Baik', 2, 'Sangat Baik', 3, 'kurang', 1, 'Baik', 2, 9, '<p>asdsddfg</p>\r\n'),
('PNL0003', 'WCR006', 'Baik', 2, 'Sangat Baik', 3, 'Baik', 2, 'Baik', 2, 'Sangat Baik', 3, 12, '<p>coba</p>\r\n'),
('PNL0004', 'WCR007', 'kurang', 1, 'Sangat Baik', 3, 'Baik', 2, 'Baik', 2, 'Baik', 2, 10, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpenilaiantraininghrd`
--

CREATE TABLE `tbpenilaiantraininghrd` (
  `idpenilaian` varchar(11) NOT NULL,
  `idpegawai` varchar(11) NOT NULL,
  `keterangan` varchar(2000) NOT NULL,
  `keaktifan` varchar(11) NOT NULL,
  `ketepatanwaktu` varchar(11) NOT NULL,
  `kesalahankerja` varchar(11) NOT NULL,
  `perilaku` varchar(11) NOT NULL,
  `kebersihan` varchar(11) NOT NULL,
  `kualitashasil` varchar(11) NOT NULL,
  `absensi` varchar(11) NOT NULL,
  `inisiatif` varchar(11) NOT NULL,
  `pengetahuan` varchar(11) NOT NULL,
  `jumlahnilai` int(10) NOT NULL,
  `idbulan` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpenilaiantrainingpj`
--

CREATE TABLE `tbpenilaiantrainingpj` (
  `idpenilaian` varchar(11) NOT NULL,
  `idpegawai` varchar(11) NOT NULL,
  `keterangan` varchar(2000) NOT NULL,
  `keaktifan` varchar(11) NOT NULL,
  `ketepatanwaktu` varchar(11) NOT NULL,
  `kesalahankerja` varchar(11) NOT NULL,
  `perilaku` varchar(11) NOT NULL,
  `kebersihan` varchar(11) NOT NULL,
  `kualitashasil` varchar(11) NOT NULL,
  `absensi` varchar(11) NOT NULL,
  `inisiatif` varchar(11) NOT NULL,
  `pengetahuan` varchar(11) NOT NULL,
  `jumlahnilai` int(10) NOT NULL,
  `idbulan` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbrangenilaipelamar`
--

CREATE TABLE `tbrangenilaipelamar` (
  `idrangepelamar` varchar(11) NOT NULL,
  `nilaipelamar` varchar(50) NOT NULL,
  `jumlah` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbrangenilaipelamar`
--

INSERT INTO `tbrangenilaipelamar` (`idrangepelamar`, `nilaipelamar`, `jumlah`) VALUES
('NP01', 'Kurang', '1'),
('NP02', 'Baik', '2'),
('NP03', 'Sangat Baik', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbrekappenilaian`
--

CREATE TABLE `tbrekappenilaian` (
  `idrekappenilaian` varchar(11) NOT NULL,
  `idpegawai` varchar(11) DEFAULT NULL,
  `totalskor` int(11) NOT NULL,
  `idbulan` varchar(11) DEFAULT NULL,
  `idtahun` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbrekappenilaian`
--

INSERT INTO `tbrekappenilaian` (`idrekappenilaian`, `idpegawai`, `totalskor`, `idbulan`, `idtahun`) VALUES
('RKP0001', 'PGW0003', 222, NULL, 'THN02'),
('RKP0002', 'PGW0002', 0, NULL, 'THN01'),
('RKP0003', 'PGW0004', 70, NULL, 'THN02'),
('RKP0004', 'HR01', 36, NULL, 'THN02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbstatuspegawai`
--

CREATE TABLE `tbstatuspegawai` (
  `idstatuspegawai` varchar(11) NOT NULL,
  `namastatus` varchar(100) NOT NULL,
  `deskripsi` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbstatuspegawai`
--

INSERT INTO `tbstatuspegawai` (`idstatuspegawai`, `namastatus`, `deskripsi`) VALUES
('STS01', 'Tetap', 'adalah pegawai yang menerima atau memperoleh penghasilan dalam jumlah tertentu secara teratur,'),
('STS02', 'Kontrak', 'pegawai yang bekerja hanya untuk waktu tertentu berdasar kesepakatan antara pegawai dengan Perusahaa'),
('STS03', 'Magang', NULL),
('STS04', 'Training', NULL),
('STS05', 'Pensiun', NULL),
('STS06', 'Dikerluarkan', NULL),
('STS07', 'Menunggu Pengaktifan Akun', 'pengaktifan akan dikonfirmasi oleh divisi kepegawaian, harap tunggu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbstatuspengajuan`
--

CREATE TABLE `tbstatuspengajuan` (
  `idstatuspengajuan` varchar(11) NOT NULL,
  `namastatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbstatuspengajuan`
--

INSERT INTO `tbstatuspengajuan` (`idstatuspengajuan`, `namastatus`) VALUES
('STP01', 'Dikirim'),
('STP02', 'proses'),
('STP03', 'Pending'),
('STP04', 'diterima - masih proses'),
('STP05', 'Tidak diterima'),
('STP06', 'Ditutup');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbtahun`
--

CREATE TABLE `tbtahun` (
  `idtahun` varchar(11) NOT NULL,
  `namatahun` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbtahun`
--

INSERT INTO `tbtahun` (`idtahun`, `namatahun`) VALUES
('THN01', '2018'),
('THN02', '2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbtim`
--

CREATE TABLE `tbtim` (
  `idtim` varchar(11) NOT NULL,
  `idjobdesk` varchar(11) DEFAULT NULL,
  `namatim` varchar(100) NOT NULL,
  `deskripsi` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbtim`
--

INSERT INTO `tbtim` (`idtim`, `idjobdesk`, `namatim`, `deskripsi`) VALUES
('TIM001', 'JBD008', 'Tim Pengiriman sesi 1', 'Tim pengirim adalah...'),
('TIM002', 'JBD009', 'tim pengiriman', 'contoh ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbtrainingtime`
--

CREATE TABLE `tbtrainingtime` (
  `idtrainingtime` varchar(11) NOT NULL,
  `idpegawai` varchar(11) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_berakhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbverifikasipegawai`
--

CREATE TABLE `tbverifikasipegawai` (
  `idverifikasipelamar` varchar(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `namapegawai` varchar(300) NOT NULL,
  `tanggallahir` date NOT NULL,
  `alamat` varchar(1000) NOT NULL,
  `email` varchar(300) DEFAULT NULL,
  `nohp` varchar(13) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `tanggalverifikasi` date NOT NULL,
  `idstatuspegawai` varchar(11) NOT NULL,
  `idwawancara` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbwawancara`
--

CREATE TABLE `tbwawancara` (
  `idwawancara` varchar(11) NOT NULL,
  `idpendaftar` varchar(11) NOT NULL,
  `idpenguji` varchar(11) NOT NULL,
  `tgl_wawancara` date NOT NULL,
  `jam` time NOT NULL,
  `keterangan` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbwawancara`
--

INSERT INTO `tbwawancara` (`idwawancara`, `idpendaftar`, `idpenguji`, `tgl_wawancara`, `jam`, `keterangan`) VALUES
('WCR001', 'PN002', 'PGJ001', '2019-02-20', '13:00:00', 'contoh'),
('WCR002', 'PN004', 'PGJ001', '2019-02-18', '12:00:00', 'admin'),
('WCR003', 'PN009', 'PGJ001', '2019-06-30', '12:00:00', ''),
('WCR004', 'PN001', 'PGJ001', '2019-07-15', '14:00:00', 'Terserah'),
('WCR005', 'PN003', 'PGJ002', '2019-07-16', '03:00:00', 'jangan telat'),
('WCR006', 'PN005', 'PGJ001', '2019-07-09', '21:00:00', 'iysdf'),
('WCR007', 'PN014', 'PGJ001', '0000-00-00', '00:00:00', 'admin'),
('WCR008', 'PN016', 'PGJ002', '2019-07-19', '12:00:00', 'hanya coba'),
('WCR009', 'PN017', 'PGJ002', '2019-07-17', '09:00:00', 'ini wawancara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `iduser` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` blob,
  `level` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`iduser`, `username`, `password`, `email`, `foto`, `level`) VALUES
(1, 'admin', 'admin', 'komaldevadmin@gmail.com', NULL, 'admin'),
(2, 'briannehemia', 'qwerty123', 'briannehemia@gmail.com', NULL, 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `balasanrequest`
--
ALTER TABLE `balasanrequest`
  ADD PRIMARY KEY (`idbalasanreqpegawai`);

--
-- Indeks untuk tabel `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`idlog`);

--
-- Indeks untuk tabel `requestpegawai`
--
ALTER TABLE `requestpegawai`
  ADD PRIMARY KEY (`idrequestpegawai`),
  ADD KEY `kodedivisi` (`kodedivisi`);

--
-- Indeks untuk tabel `tbbalasanpengajuan`
--
ALTER TABLE `tbbalasanpengajuan`
  ADD PRIMARY KEY (`idbalasanpengajuan`),
  ADD KEY `idpengajuan` (`idrequestpegawai`);

--
-- Indeks untuk tabel `tbbulan`
--
ALTER TABLE `tbbulan`
  ADD PRIMARY KEY (`idbulan`);

--
-- Indeks untuk tabel `tbcoba`
--
ALTER TABLE `tbcoba`
  ADD PRIMARY KEY (`idcoba`);

--
-- Indeks untuk tabel `tbcv`
--
ALTER TABLE `tbcv`
  ADD PRIMARY KEY (`idcv`);

--
-- Indeks untuk tabel `tbdivisi`
--
ALTER TABLE `tbdivisi`
  ADD PRIMARY KEY (`kodedivisi`);

--
-- Indeks untuk tabel `tbevaluasi`
--
ALTER TABLE `tbevaluasi`
  ADD PRIMARY KEY (`idevaluasi`),
  ADD KEY `idpegawai` (`idpegawai`);

--
-- Indeks untuk tabel `tbjobdesk`
--
ALTER TABLE `tbjobdesk`
  ADD PRIMARY KEY (`idjobdesk`);

--
-- Indeks untuk tabel `tbkategorinilai`
--
ALTER TABLE `tbkategorinilai`
  ADD PRIMARY KEY (`idkategorinilai`);

--
-- Indeks untuk tabel `tbkategoripengajuan`
--
ALTER TABLE `tbkategoripengajuan`
  ADD PRIMARY KEY (`idkategoripengajuan`);

--
-- Indeks untuk tabel `tblowonganpekerjaan`
--
ALTER TABLE `tblowonganpekerjaan`
  ADD PRIMARY KEY (`idlowongan`),
  ADD KEY `kodedivisi` (`kodedivisi`);

--
-- Indeks untuk tabel `tbpegawai`
--
ALTER TABLE `tbpegawai`
  ADD PRIMARY KEY (`idpegawai`),
  ADD KEY `kodedivisi` (`kodedivisi`),
  ADD KEY `idstatuspegawai` (`idstatuspegawai`);

--
-- Indeks untuk tabel `tbpendaftar`
--
ALTER TABLE `tbpendaftar`
  ADD PRIMARY KEY (`idpendaftar`),
  ADD KEY `idcv` (`idcv`),
  ADD KEY `idlowongan` (`idlowongan`);

--
-- Indeks untuk tabel `tbpenguji`
--
ALTER TABLE `tbpenguji`
  ADD PRIMARY KEY (`idpenguji`),
  ADD KEY `idpegawai` (`idpegawai`);

--
-- Indeks untuk tabel `tbpenilaianabsensi`
--
ALTER TABLE `tbpenilaianabsensi`
  ADD PRIMARY KEY (`idabsensi`),
  ADD KEY `idpegawai` (`idpegawai`),
  ADD KEY `idbulan` (`idbulan`),
  ADD KEY `idkategorinilai` (`idkategorinilai`);

--
-- Indeks untuk tabel `tbpenilaianpegawai`
--
ALTER TABLE `tbpenilaianpegawai`
  ADD PRIMARY KEY (`idpenilaianpegawai`),
  ADD KEY `idpegawai` (`idpegawai`),
  ADD KEY `idbulan` (`idbulan`),
  ADD KEY `absensi` (`absensi`),
  ADD KEY `idtahun` (`idtahun`);

--
-- Indeks untuk tabel `tbpenilaianpelamar`
--
ALTER TABLE `tbpenilaianpelamar`
  ADD PRIMARY KEY (`idpenilaianpelamar`),
  ADD KEY `idwawancara` (`idwawancara`);

--
-- Indeks untuk tabel `tbpenilaiantraininghrd`
--
ALTER TABLE `tbpenilaiantraininghrd`
  ADD PRIMARY KEY (`idpenilaian`),
  ADD KEY `idpegawai` (`idpegawai`),
  ADD KEY `idbulan` (`idbulan`),
  ADD KEY `absensi` (`absensi`);

--
-- Indeks untuk tabel `tbpenilaiantrainingpj`
--
ALTER TABLE `tbpenilaiantrainingpj`
  ADD PRIMARY KEY (`idpenilaian`),
  ADD KEY `idpegawai` (`idpegawai`),
  ADD KEY `idbulan` (`idbulan`),
  ADD KEY `absensi` (`absensi`);

--
-- Indeks untuk tabel `tbrangenilaipelamar`
--
ALTER TABLE `tbrangenilaipelamar`
  ADD PRIMARY KEY (`idrangepelamar`);

--
-- Indeks untuk tabel `tbrekappenilaian`
--
ALTER TABLE `tbrekappenilaian`
  ADD KEY `idpegawai` (`idpegawai`),
  ADD KEY `idtahun` (`idtahun`);

--
-- Indeks untuk tabel `tbstatuspegawai`
--
ALTER TABLE `tbstatuspegawai`
  ADD PRIMARY KEY (`idstatuspegawai`);

--
-- Indeks untuk tabel `tbstatuspengajuan`
--
ALTER TABLE `tbstatuspengajuan`
  ADD PRIMARY KEY (`idstatuspengajuan`);

--
-- Indeks untuk tabel `tbtahun`
--
ALTER TABLE `tbtahun`
  ADD PRIMARY KEY (`idtahun`);

--
-- Indeks untuk tabel `tbtim`
--
ALTER TABLE `tbtim`
  ADD PRIMARY KEY (`idtim`),
  ADD KEY `idjobdesk` (`idjobdesk`);

--
-- Indeks untuk tabel `tbtrainingtime`
--
ALTER TABLE `tbtrainingtime`
  ADD KEY `idpegawai` (`idpegawai`);

--
-- Indeks untuk tabel `tbverifikasipegawai`
--
ALTER TABLE `tbverifikasipegawai`
  ADD PRIMARY KEY (`idverifikasipelamar`),
  ADD KEY `idstatuspegawai` (`idstatuspegawai`) USING BTREE,
  ADD KEY `idwawancara` (`idwawancara`);

--
-- Indeks untuk tabel `tbwawancara`
--
ALTER TABLE `tbwawancara`
  ADD PRIMARY KEY (`idwawancara`),
  ADD KEY `idpendaftar` (`idpendaftar`),
  ADD KEY `idpenguji` (`idpenguji`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `balasanrequest`
--
ALTER TABLE `balasanrequest`
  MODIFY `idbalasanreqpegawai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `log`
--
ALTER TABLE `log`
  MODIFY `idlog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=577;

--
-- AUTO_INCREMENT untuk tabel `tbcoba`
--
ALTER TABLE `tbcoba`
  MODIFY `idcoba` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `requestpegawai`
--
ALTER TABLE `requestpegawai`
  ADD CONSTRAINT `requestpegawai_ibfk_1` FOREIGN KEY (`kodedivisi`) REFERENCES `tbdivisi` (`kodedivisi`);

--
-- Ketidakleluasaan untuk tabel `tbbalasanpengajuan`
--
ALTER TABLE `tbbalasanpengajuan`
  ADD CONSTRAINT `tbbalasanpengajuan_ibfk_1` FOREIGN KEY (`idrequestpegawai`) REFERENCES `requestpegawai` (`idrequestpegawai`);

--
-- Ketidakleluasaan untuk tabel `tbevaluasi`
--
ALTER TABLE `tbevaluasi`
  ADD CONSTRAINT `tbevaluasi_ibfk_1` FOREIGN KEY (`idpegawai`) REFERENCES `tbpegawai` (`idpegawai`);

--
-- Ketidakleluasaan untuk tabel `tblowonganpekerjaan`
--
ALTER TABLE `tblowonganpekerjaan`
  ADD CONSTRAINT `tblowonganpekerjaan_ibfk_1` FOREIGN KEY (`kodedivisi`) REFERENCES `tbdivisi` (`kodedivisi`);

--
-- Ketidakleluasaan untuk tabel `tbpegawai`
--
ALTER TABLE `tbpegawai`
  ADD CONSTRAINT `tbpegawai_ibfk_1` FOREIGN KEY (`kodedivisi`) REFERENCES `tbdivisi` (`kodedivisi`),
  ADD CONSTRAINT `tbpegawai_ibfk_2` FOREIGN KEY (`idstatuspegawai`) REFERENCES `tbstatuspegawai` (`idstatuspegawai`);

--
-- Ketidakleluasaan untuk tabel `tbpendaftar`
--
ALTER TABLE `tbpendaftar`
  ADD CONSTRAINT `tbpendaftar_ibfk_1` FOREIGN KEY (`idcv`) REFERENCES `tbcv` (`idcv`),
  ADD CONSTRAINT `tbpendaftar_ibfk_2` FOREIGN KEY (`idlowongan`) REFERENCES `tblowonganpekerjaan` (`idlowongan`);

--
-- Ketidakleluasaan untuk tabel `tbpenguji`
--
ALTER TABLE `tbpenguji`
  ADD CONSTRAINT `tbpenguji_ibfk_1` FOREIGN KEY (`idpegawai`) REFERENCES `tbpegawai` (`idpegawai`);

--
-- Ketidakleluasaan untuk tabel `tbpenilaianabsensi`
--
ALTER TABLE `tbpenilaianabsensi`
  ADD CONSTRAINT `tbpenilaianabsensi_ibfk_1` FOREIGN KEY (`idpegawai`) REFERENCES `tbpegawai` (`idpegawai`),
  ADD CONSTRAINT `tbpenilaianabsensi_ibfk_2` FOREIGN KEY (`idbulan`) REFERENCES `tbbulan` (`idbulan`),
  ADD CONSTRAINT `tbpenilaianabsensi_ibfk_3` FOREIGN KEY (`idkategorinilai`) REFERENCES `tbkategorinilai` (`idkategorinilai`);

--
-- Ketidakleluasaan untuk tabel `tbpenilaianpegawai`
--
ALTER TABLE `tbpenilaianpegawai`
  ADD CONSTRAINT `tbpenilaianpegawai_ibfk_1` FOREIGN KEY (`idpegawai`) REFERENCES `tbpegawai` (`idpegawai`),
  ADD CONSTRAINT `tbpenilaianpegawai_ibfk_2` FOREIGN KEY (`idbulan`) REFERENCES `tbbulan` (`idbulan`),
  ADD CONSTRAINT `tbpenilaianpegawai_ibfk_4` FOREIGN KEY (`idtahun`) REFERENCES `tbtahun` (`idtahun`);

--
-- Ketidakleluasaan untuk tabel `tbpenilaianpelamar`
--
ALTER TABLE `tbpenilaianpelamar`
  ADD CONSTRAINT `tbpenilaianpelamar_ibfk_1` FOREIGN KEY (`idwawancara`) REFERENCES `tbwawancara` (`idwawancara`);

--
-- Ketidakleluasaan untuk tabel `tbpenilaiantraininghrd`
--
ALTER TABLE `tbpenilaiantraininghrd`
  ADD CONSTRAINT `tbpenilaiantraininghrd_ibfk_1` FOREIGN KEY (`idpegawai`) REFERENCES `tbpegawai` (`idpegawai`),
  ADD CONSTRAINT `tbpenilaiantraininghrd_ibfk_2` FOREIGN KEY (`idbulan`) REFERENCES `tbbulan` (`idbulan`),
  ADD CONSTRAINT `tbpenilaiantraininghrd_ibfk_3` FOREIGN KEY (`absensi`) REFERENCES `tbpenilaianabsensi` (`idabsensi`);

--
-- Ketidakleluasaan untuk tabel `tbpenilaiantrainingpj`
--
ALTER TABLE `tbpenilaiantrainingpj`
  ADD CONSTRAINT `tbpenilaiantrainingpj_ibfk_1` FOREIGN KEY (`idpegawai`) REFERENCES `tbpegawai` (`idpegawai`),
  ADD CONSTRAINT `tbpenilaiantrainingpj_ibfk_2` FOREIGN KEY (`idbulan`) REFERENCES `tbbulan` (`idbulan`),
  ADD CONSTRAINT `tbpenilaiantrainingpj_ibfk_3` FOREIGN KEY (`absensi`) REFERENCES `tbpenilaianabsensi` (`idabsensi`);

--
-- Ketidakleluasaan untuk tabel `tbrekappenilaian`
--
ALTER TABLE `tbrekappenilaian`
  ADD CONSTRAINT `tbrekappenilaian_ibfk_1` FOREIGN KEY (`idpegawai`) REFERENCES `tbpegawai` (`idpegawai`),
  ADD CONSTRAINT `tbrekappenilaian_ibfk_2` FOREIGN KEY (`idtahun`) REFERENCES `tbtahun` (`idtahun`);

--
-- Ketidakleluasaan untuk tabel `tbtim`
--
ALTER TABLE `tbtim`
  ADD CONSTRAINT `tbtim_ibfk_1` FOREIGN KEY (`idjobdesk`) REFERENCES `tbjobdesk` (`idjobdesk`);

--
-- Ketidakleluasaan untuk tabel `tbtrainingtime`
--
ALTER TABLE `tbtrainingtime`
  ADD CONSTRAINT `tbtrainingtime_ibfk_1` FOREIGN KEY (`idpegawai`) REFERENCES `tbpegawai` (`idpegawai`);

--
-- Ketidakleluasaan untuk tabel `tbverifikasipegawai`
--
ALTER TABLE `tbverifikasipegawai`
  ADD CONSTRAINT `tbverifikasipegawai_ibfk_1` FOREIGN KEY (`idstatuspegawai`) REFERENCES `tbstatuspegawai` (`idstatuspegawai`),
  ADD CONSTRAINT `tbverifikasipegawai_ibfk_2` FOREIGN KEY (`idwawancara`) REFERENCES `tbwawancara` (`idwawancara`);

--
-- Ketidakleluasaan untuk tabel `tbwawancara`
--
ALTER TABLE `tbwawancara`
  ADD CONSTRAINT `tbwawancara_ibfk_1` FOREIGN KEY (`idpendaftar`) REFERENCES `tbpendaftar` (`idpendaftar`),
  ADD CONSTRAINT `tbwawancara_ibfk_2` FOREIGN KEY (`idpenguji`) REFERENCES `tbpenguji` (`idpenguji`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
