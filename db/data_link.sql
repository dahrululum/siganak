-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 12, 2024 at 09:47 PM
-- Server version: 8.0.39
-- PHP Version: 8.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c70i272mhu_siganak`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_link`
--

CREATE TABLE `data_link` (
  `id` int NOT NULL,
  `alias` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `file_foto` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `urlna` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ket` text COLLATE utf8mb4_general_ci,
  `status` char(1) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_link`
--

INSERT INTO `data_link` (`id`, `alias`, `nama`, `file_foto`, `urlna`, `ket`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '667e344895655', 'DP3ACSKB Kabupaten Bangka Barat', 'file_foto_667e344895655.png', 'https://www.babarkab.go.id', '<p>asd asdasd</p>', '1', '2024-06-27 20:56:48', '2024-06-27 21:04:17', NULL),
(2, '667e364755182', 'DP3ACSKB Kabupaten Bangka Selatan', 'file_foto_667e364755182.png', 'https://www.bangkaselatankab.go.id', NULL, '1', '2024-06-27 21:04:53', '2024-06-27 21:04:53', NULL),
(3, '6705ede4646bd', 'DINAS PPPA KOTA PANGKALPINANG', 'file_foto_6705ede4646bd.jpeg', 'https://dpppakb.pangkalpinangkota.go.id', NULL, '1', '2024-10-08 19:47:14', '2024-10-08 19:57:02', NULL),
(4, '6705f007ce1c1', 'DINAS PPPA KAB. BELITUNG', 'file_foto_6705f007ce1c1.png', 'https://dspppa.belitung.go.id/', NULL, '1', '2024-10-08 19:54:25', '2024-10-08 19:55:41', NULL),
(5, '6705f11cae3c5', 'DINAS PPPA KAB. BELITUNG TIMUR', 'file_foto_6705f11cae3c5.jpeg', 'https://dinsospmd.beltim.go.id/', NULL, '1', '2024-10-08 19:59:25', '2024-10-08 20:00:42', NULL),
(6, '6705f1e7066ff', 'DINAS PPPA KAB. BANGKA', 'file_foto_6705f1e7066ff.jpeg', 'http://dp2kbp3a.bangka.go.id/', NULL, '1', '2024-10-08 20:02:55', '2024-10-08 20:15:27', NULL),
(7, '6705f2c1cf358', 'DINAS PPPA BANGKA TENGAH', 'file_foto_6705f2c1cf358.jpeg', 'http://bangkatengahkab.go.id', NULL, '1', '2024-10-08 20:09:22', '2024-10-08 20:09:37', NULL),
(8, '6705f43729cfb', 'DP3ACSKB PROV. KEPULAUAN BANGKA BELITUNG', 'file_foto_6705f43729cfb.jpeg', 'https://dp3acskb.babelprov.go.id', NULL, '1', '2024-10-08 20:12:26', '2024-10-08 20:12:26', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_link`
--
ALTER TABLE `data_link`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_link`
--
ALTER TABLE `data_link`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
