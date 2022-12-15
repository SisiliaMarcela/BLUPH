-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 04:28 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bluph`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permission` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `access_date` date DEFAULT NULL,
  `access_time` time DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `created_at`, `updated_at`, `id_admin`, `username`, `password`, `permission`, `access_date`, `access_time`, `active`) VALUES
(1, '2022-12-03 00:14:01', '2022-12-03 00:14:01', 1, 'secon_dblast', 'terserah', 'permisi', '2022-12-03', '16:15:00', 2),
(2, '2022-12-04 08:12:20', '2022-12-04 08:12:20', 1, 'ADmin UPH', 'terserah', 'permisi', '2022-12-04', '23:13:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customized_limit`
--

CREATE TABLE `customized_limit` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_location` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `limit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customized_limit`
--

INSERT INTO `customized_limit` (`id`, `created_at`, `updated_at`, `id_location`, `date`, `limit`) VALUES
(1, '2022-12-04 08:13:44', '2022-12-04 08:13:44', NULL, '2022-12-06', 5);

-- --------------------------------------------------------

--
-- Table structure for table `customized_limits`
--

CREATE TABLE `customized_limits` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `date` date DEFAULT NULL,
  `limit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `disabled_times`
--

CREATE TABLE `disabled_times` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_location_time` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `disabled_times`
--

INSERT INTO `disabled_times` (`id`, `created_at`, `updated_at`, `id_location_time`, `date`) VALUES
(1, '2022-11-25 06:42:48', '2022-11-25 06:42:48', 1, '2022-11-25');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE `krs` (
  `kode_krs` varchar(15) NOT NULL,
  `StudentID` varchar(10) NOT NULL,
  `kode_term` varchar(4) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `krs`
--

INSERT INTO `krs` (`kode_krs`, `StudentID`, `kode_term`, `keterangan`) VALUES
('100000001', '100000001', '1212', ''),
('100000002', '100000001', '1213', ''),
('100000003', '100000002', '1212', ''),
('100000004', '100000002', '1213', '');

-- --------------------------------------------------------

--
-- Table structure for table `krs_detail`
--

CREATE TABLE `krs_detail` (
  `kode_krsdetail` varchar(15) NOT NULL,
  `kode_krs` varchar(15) NOT NULL,
  `kode_matakuliah` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `krs_detail`
--

INSERT INTO `krs_detail` (`kode_krsdetail`, `kode_krs`, `kode_matakuliah`) VALUES
('10000000101', '100000001', 'MK0001'),
('10000000102', '100000001', 'MK0003'),
('10000000201', '100000002', 'MK0002'),
('10000000202', '100000002', 'MK0001'),
('10000000301', '100000003', 'MK0002'),
('10000000302', '100000003', 'MK0001'),
('10000000401', '100000004', 'MK0002'),
('10000000402', '100000004', 'MK0001');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_location` int(11) DEFAULT NULL,
  `name_location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spot_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `max_capacity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `created_at`, `updated_at`, `id_location`, `name_location`, `spot_name`, `max_capacity`, `active`, `image`) VALUES
(1, '2022-12-03 00:16:10', '2022-12-03 00:16:10', 1, 'Jl. Merbabu', 'Lounge library', '7', 1, 'hmm');

-- --------------------------------------------------------

--
-- Table structure for table `location_time`
--

CREATE TABLE `location_time` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_location_time` int(11) DEFAULT NULL,
  `id_location` int(11) DEFAULT NULL,
  `id_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `StudentID` varchar(10) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Jurusan` varchar(30) NOT NULL,
  `Tahun_masuk` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswas`
--

CREATE TABLE `mahasiswas` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_proram` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswas`
--

INSERT INTO `mahasiswas` (`id`, `created_at`, `updated_at`, `nim`, `nama`, `kelas`, `email`, `id_proram`) VALUES
(2, '2022-11-25 06:41:58', '2022-12-08 00:55:51', '03081190050', 'Sisilia Marcela', '19IS2', 'sisiliamarc@gmail.com', 1),
(3, '2022-12-04 08:08:24', '2022-12-04 08:08:24', '03081190044', 'Almondo Chen', '19IS1', 'hshjkafehdc@gmail.com', 2),
(4, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0306857892', 'Jatmiko Sakti Widodo', 'kelas', 'email', 312826127),
(5, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0389485540', 'Kamila Lestari S.Gz', 'kelas', 'email', 302162539),
(6, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0361548309', 'Empluk Cemani Maheswara', 'kelas', 'email', 375331940),
(7, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0330553744', 'Viman Edi Siregar S.IP', 'kelas', 'email', 336866006),
(8, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0371133084', 'Cager Vino Pradana', 'kelas', 'email', 377738575),
(9, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0397625546', 'Nardi Pangestu S.E.', 'kelas', 'email', 398777668),
(10, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0397722664', 'Paris Tami Agustina S.E.', 'kelas', 'email', 344030401),
(11, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0359340399', 'Karen Agustina S.Farm', 'kelas', 'email', 349746359),
(12, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0354721153', 'Cakrawala Sinaga S.T.', 'kelas', 'email', 354203431),
(13, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0309624364', 'Chandra Firmansyah', 'kelas', 'email', 376012530),
(14, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0385869832', 'Gabriella Usada', 'kelas', 'email', 308723225),
(15, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0376922410', 'Siska Jasmin Puspita S.H.', 'kelas', 'email', 323542315),
(16, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0348140579', 'Laksana Embuh Permadi', 'kelas', 'email', 380513110),
(17, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0341265926', 'Kawaya Iswahyudi', 'kelas', 'email', 387460187),
(18, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0334987547', 'Cinta Purnawati', 'kelas', 'email', 397687264),
(19, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0367350461', 'Laras Winarsih', 'kelas', 'email', 351975059),
(20, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0380597235', 'Prakosa Balijan Saragih M.M.', 'kelas', 'email', 381748440),
(21, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0354705827', 'Uchita Mardhiyah', 'kelas', 'email', 397682642),
(22, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0311653432', 'Jayeng Asmianto Prasetya S.IP', 'kelas', 'email', 304587333),
(23, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0386438407', 'Rafid Waluyo', 'kelas', 'email', 311665184),
(24, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0346282322', 'Irnanto Kusumo S.Farm', 'kelas', 'email', 332036539),
(25, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0326821733', 'Keisha Tari Pudjiastuti S.E.', 'kelas', 'email', 318258417),
(26, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0304134065', 'Kasiyah Hasanah', 'kelas', 'email', 357998978),
(27, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0312066140', 'Baktiadi Pangeran Pratama', 'kelas', 'email', 301230975),
(28, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0320922156', 'Oni Hasanah', 'kelas', 'email', 325740879),
(29, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0361715828', 'Carla Nuraini S.IP', 'kelas', 'email', 398466865),
(30, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0370307670', 'Cindy Keisha Yolanda', 'kelas', 'email', 330527048),
(31, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0361528664', 'Darimin Darsirah Prayoga', 'kelas', 'email', 359615771),
(32, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0325514357', 'Dian Laksita', 'kelas', 'email', 315659374),
(33, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0399058226', 'Mustofa Wibisono', 'kelas', 'email', 321548755),
(34, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0385066392', 'Cakrawangsa Ganjaran Prakasa', 'kelas', 'email', 394361647),
(35, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0304971436', 'Putri Rahmi Novitasari S.Psi', 'kelas', 'email', 396056534),
(36, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0393574750', 'Luluh Wijaya', 'kelas', 'email', 302047751),
(37, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0311788842', 'Agnes Aryani', 'kelas', 'email', 337259541),
(38, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0345872060', 'Zaenab Ira Namaga', 'kelas', 'email', 303759772),
(39, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0379919758', 'Aris Budiyanto', 'kelas', 'email', 371341734),
(40, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0307953645', 'Bakiman Saptono', 'kelas', 'email', 300538437),
(41, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0370210334', 'Jaga Salahudin S.Gz', 'kelas', 'email', 387696797),
(42, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0329884383', 'Caraka Thamrin', 'kelas', 'email', 342379604),
(43, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0376941411', 'Kawaya Damanik', 'kelas', 'email', 371592750),
(44, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0318683621', 'Wulan Iriana Haryanti', 'kelas', 'email', 353278500),
(45, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0377125499', 'Elma Novitasari', 'kelas', 'email', 359022257),
(46, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0366135927', 'Hasna Qori Kusmawati S.Psi', 'kelas', 'email', 369709532),
(47, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0393642386', 'Martani Napitupulu S.Sos', 'kelas', 'email', 311588506),
(48, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0366360011', 'Maya Rahayu M.Pd', 'kelas', 'email', 395309708),
(49, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0358345776', 'Dewi Halimah', 'kelas', 'email', 359123474),
(50, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0372929860', 'Natalia Natalia Novitasari', 'kelas', 'email', 331521813),
(51, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0310267871', 'Bakianto Hutapea S.Farm', 'kelas', 'email', 365274011),
(52, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0379842592', 'Kani Uyainah M.Ak', 'kelas', 'email', 305770842),
(53, '2022-12-11 07:00:06', '2022-12-11 07:00:06', '0386813040', 'Melinda Kamaria Usamah S.Psi', 'kelas', 'email', 357017854),
(54, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0313064639', 'Rangga Irfan Thamrin M.Pd', '19SI', 'Ilmu Komputer', 367987927),
(55, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0360126691', 'Harjasa Maulana S.Pd', '19SI', 'Ilmu Komputer', 336383699),
(56, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0385868038', 'Aditya Prakasa', '19SI', 'Ilmu Komputer', 385745261),
(57, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0390681550', 'Cengkal Margana Zulkarnain M.Ak', '19SI', 'Ilmu Komputer', 358070249),
(58, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0348822435', 'Oliva Puji Pratiwi M.M.', '19SI', 'Ilmu Komputer', 305223418),
(59, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0307061038', 'Elvina Lintang Puspita', '19SI', 'Ilmu Komputer', 335934416),
(60, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0391405781', 'Harjo Suryono S.I.Kom', '19SI', 'Ilmu Komputer', 349152714),
(61, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0395729989', 'Hendra Siregar', '19SI', 'Ilmu Komputer', 353289072),
(62, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0389864365', 'Kemba Sihotang', '19SI', 'Ilmu Komputer', 339880923),
(63, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0325049341', 'Septi Hariyah', '19SI', 'Ilmu Komputer', 386994251),
(64, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0328019925', 'Asmadi Baktiono Ramadan S.Farm', '19SI', 'Ilmu Komputer', 343353060),
(65, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0325464199', 'Wulan Yuliarti', '19SI', 'Ilmu Komputer', 347443938),
(66, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0362820062', 'Yoga Mansur S.T.', '19SI', 'Ilmu Komputer', 350258090),
(67, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0394889725', 'Saka Santoso', '19SI', 'Ilmu Komputer', 328221735),
(68, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0371077347', 'Malik Anggabaya Nainggolan', '19SI', 'Ilmu Komputer', 340203518),
(69, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0338222610', 'Prayogo Bagiya Sihombing S.T.', '19SI', 'Ilmu Komputer', 364493312),
(70, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0370648080', 'Putri Kasiyah Pertiwi S.Sos', '19SI', 'Ilmu Komputer', 344739490),
(71, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0321755662', 'Yunita Pudjiastuti', '19SI', 'Ilmu Komputer', 365426742),
(72, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0350103728', 'Luis Atmaja Sihombing', '19SI', 'Ilmu Komputer', 312335354),
(73, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0393984692', 'Vivi Mandasari', '19SI', 'Ilmu Komputer', 390075496),
(74, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0377751526', 'Cahya Manullang S.IP', '19SI', 'Ilmu Komputer', 302211684),
(75, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0326704612', 'Patricia Umi Rahayu', '19SI', 'Ilmu Komputer', 369065581),
(76, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0301591871', 'Jamil Latif Januar S.E.I', '19SI', 'Ilmu Komputer', 338803912),
(77, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0304574268', 'Kezia Siska Palastri', '19SI', 'Ilmu Komputer', 343600152),
(78, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0327327897', 'Gantar Sirait M.Kom.', '19SI', 'Ilmu Komputer', 368524327),
(79, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0365927259', 'Cengkal Lega Simanjuntak M.Farm', '19SI', 'Ilmu Komputer', 329315468),
(80, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0397355554', 'Zelaya Vicky Suartini M.Kom.', '19SI', 'Ilmu Komputer', 338061718),
(81, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0364517675', 'Harjaya Pradipta', '19SI', 'Ilmu Komputer', 301235768),
(82, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0392632523', 'Elisa Maida Yolanda S.Pt', '19SI', 'Ilmu Komputer', 303001411),
(83, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0306672668', 'Hasim Nababan', '19SI', 'Ilmu Komputer', 340923527),
(84, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0320695032', 'Hani Laksmiwati S.E.I', '19SI', 'Ilmu Komputer', 310523267),
(85, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0397321973', 'Hendra Rajata', '19SI', 'Ilmu Komputer', 391017518),
(86, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0340155999', 'Catur Sihombing', '19SI', 'Ilmu Komputer', 383238472),
(87, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0359226093', 'Cakrajiya Hutagalung', '19SI', 'Ilmu Komputer', 309101676),
(88, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0369846688', 'Kalim Sitorus', '19SI', 'Ilmu Komputer', 373519664),
(89, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0344967993', 'Bahuwarna Wibisono S.I.Kom', '19SI', 'Ilmu Komputer', 313525322),
(90, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0362307385', 'Raisa Pudjiastuti', '19SI', 'Ilmu Komputer', 380889751),
(91, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0347325289', 'Karimah Anggraini', '19SI', 'Ilmu Komputer', 343308048),
(92, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0351047847', 'Novi Novitasari', '19SI', 'Ilmu Komputer', 316336665),
(93, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0342550627', 'Darsirah Martana Sitorus', '19SI', 'Ilmu Komputer', 301224620),
(94, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0395951480', 'Estiawan Rahman Pranowo', '19SI', 'Ilmu Komputer', 337389172),
(95, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0382011224', 'Prayogo Samosir', '19SI', 'Ilmu Komputer', 314313252),
(96, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0360906146', 'Vero Saputra', '19SI', 'Ilmu Komputer', 334599726),
(97, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0309747100', 'Jaga Damanik', '19SI', 'Ilmu Komputer', 395149302),
(98, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0333407264', 'Faizah Kamila Melani', '19SI', 'Ilmu Komputer', 366547851),
(99, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0370475094', 'Wirda Oktaviani', '19SI', 'Ilmu Komputer', 394268951),
(100, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0394423631', 'Karimah Ulya Lailasari S.IP', '19SI', 'Ilmu Komputer', 310830512),
(101, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0338339875', 'Halim Natsir M.TI.', '19SI', 'Ilmu Komputer', 361290373),
(102, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0390774002', 'Septi Novitasari S.Psi', '19SI', 'Ilmu Komputer', 328955347),
(103, '2022-12-12 07:00:50', '2022-12-12 07:00:50', '0312301887', 'Balapati Nugroho S.Farm', '19SI', 'Ilmu Komputer', 397556774);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_24_162501_create_customized_limits_table', 1),
(6, '2022_11_24_165223_create_times_table', 2),
(7, '2022_11_24_170322_create_customized_limits_table', 3),
(8, '2022_11_24_170340_create_times_table', 3),
(9, '2022_11_24_170722_create_location_times_table', 3),
(10, '2022_11_24_173458_create_disabled_times_table', 4),
(11, '2022_11_25_082857_create_mahasiswas_table', 5),
(12, '2022_11_25_083219_create_programs_table', 5),
(13, '2022_11_25_083851_create_admins_table', 5),
(14, '2022_11_25_084432_create_orders_table', 5),
(15, '2022_11_25_085244_create_locations_table', 5),
(16, '2022_12_10_112205_create_replacement_lounges_table', 6),
(17, '2022_12_10_112841_create_replacement_lounges_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `id_location` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_time` int(11) DEFAULT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present` tinyint(4) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `handle_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `created_at`, `updated_at`, `order_id`, `id_location`, `date`, `nim`, `id_time`, `order_status`, `note`, `present`, `id_admin`, `handle_by`) VALUES
(1, '2022-11-25 06:50:51', '2022-11-25 06:50:51', 1, 1, '2022-11-25', '03081190050', 1, 'terserah', 'terserah', 1, 1, 'gak tau dan gak mau tau'),
(2, '2022-12-04 08:09:42', '2022-12-04 08:09:42', 1, 2, '2022-12-04', '03081190044', 1, 'terserah', 'terserah', 1, 1, 'gak tau dan gak mau tau');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_program` int(11) DEFAULT NULL,
  `program_namee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `created_at`, `updated_at`, `id_program`, `program_namee`) VALUES
(1, '2022-11-28 19:36:58', '2022-11-28 19:36:58', 1, 'Program Mahasiswa'),
(2, '2022-12-03 00:10:31', '2022-12-03 00:10:31', 1, 'Program Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `replacement_lounge`
--

CREATE TABLE `replacement_lounge` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama_student` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `studentID` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intake` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jadwal_jam_kuliah` datetime DEFAULT NULL,
  `alasan_melakukan_replacement_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `replacement_lounges`
--

CREATE TABLE `replacement_lounges` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama_student` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `studentID` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intake` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jadwal_jam_kuliah` datetime DEFAULT NULL,
  `alasan_melakukan_replacement_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `replacement_lounges`
--

INSERT INTO `replacement_lounges` (`id`, `created_at`, `updated_at`, `nama_student`, `studentID`, `intake`, `jadwal_jam_kuliah`, `alasan_melakukan_replacement_class`) VALUES
(1, '2022-12-10 04:50:36', '2022-12-10 04:51:50', 'Sisilia Marcela', '03081190050', '2019', '2022-12-10 18:48:00', 'Karena jadwal booking bentrok dengan jam kuliah');

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_time` int(11) DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`id`, `created_at`, `updated_at`, `id_time`, `time`) VALUES
(1, '2022-12-04 08:15:06', '2022-12-04 08:15:06', NULL, '17:30 PM');

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

CREATE TABLE `times` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sisilia', 'sisiliamarc@gmail.com', NULL, '$2y$10$70hlrL0mBpPYi6MpxkhileIm7TgsvJ8vTEQ1XKVpIwKlMj6vV5P6e', NULL, '2022-12-07 23:45:57', '2022-12-07 23:45:57'),
(2, 'Almondo Chen', 'popokece@gmail.com', NULL, '$2y$10$HIvnWZHsLd/Wjy/VeLBUQeg8VDR/JfTBfJw0ddqxmPhV08tf52NR6', NULL, '2022-12-10 05:22:55', '2022-12-10 05:22:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customized_limit`
--
ALTER TABLE `customized_limit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customized_limits`
--
ALTER TABLE `customized_limits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disabled_times`
--
ALTER TABLE `disabled_times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location_time`
--
ALTER TABLE `location_time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replacement_lounge`
--
ALTER TABLE `replacement_lounge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replacement_lounges`
--
ALTER TABLE `replacement_lounges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customized_limit`
--
ALTER TABLE `customized_limit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customized_limits`
--
ALTER TABLE `customized_limits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `disabled_times`
--
ALTER TABLE `disabled_times`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `location_time`
--
ALTER TABLE `location_time`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `replacement_lounge`
--
ALTER TABLE `replacement_lounge`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `replacement_lounges`
--
ALTER TABLE `replacement_lounges`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `time`
--
ALTER TABLE `time`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
