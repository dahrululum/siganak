/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : laravel_siganak

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2024-10-03 13:33:27
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `admins`
-- ----------------------------
DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_wilayah` varchar(10) DEFAULT '',
  `name` varchar(255) NOT NULL,
  `level` char(1) DEFAULT NULL,
  `type` char(1) DEFAULT NULL,
  `nip` varchar(100) DEFAULT '',
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=211 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of admins
-- ----------------------------
INSERT INTO admins VALUES ('1', null, 'admin', '1', null, null, 'dahrul.ulum@gmail.com', null, 'dahrul.ulum@gmail.com', '$2y$10$K9o5RXw.2qeujixYtl17ROaQch6w3mydLdXkbFLW68AgXEMGzDs0y', null, '2020-06-25 14:12:55', '2021-12-24 13:46:12', null);
INSERT INTO admins VALUES ('209', '8', 'Dafa', '2', null, '', 'dafa@gmail.com', null, 'dafa', '$2y$10$r2ub5NBJkY4ugamKTtfC7OcUE3bLNV8GCctEX7OEcAT1YQx.bOKRK', null, '2024-06-24 07:25:51', '2024-06-24 07:33:27', null);
INSERT INTO admins VALUES ('210', '1', 'danish', '2', null, '', 'danish@gmail.com', null, 'danish', '$2y$10$6aGvJ4rW5nTmyU8fNTqx5uLDB62CQHg4YQ2ZwRcjWaflnu.5Kmuaq', null, '2024-08-13 14:29:53', '2024-08-13 14:29:53', null);

-- ----------------------------
-- Table structure for `data_elemen`
-- ----------------------------
DROP TABLE IF EXISTS `data_elemen`;
CREATE TABLE `data_elemen` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_induk` varchar(10) DEFAULT NULL,
  `id_wilayah` varchar(20) DEFAULT NULL,
  `id_jenis` varchar(20) DEFAULT NULL,
  `id_bidang` varchar(20) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `alias` varchar(100) DEFAULT NULL,
  `sumber` varchar(200) DEFAULT NULL,
  `status_aktif` char(1) DEFAULT '',
  `status_verifikasi` char(1) DEFAULT '',
  `ket` text DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of data_elemen
-- ----------------------------
INSERT INTO data_elemen VALUES ('1', '0', null, '1', '1', 'JUMLAH PENDUDUK', '6678eb7442b58', '-', '1', '1', null, '2024-06-24 03:44:13', '2024-10-03 04:41:44', null);
INSERT INTO data_elemen VALUES ('2', '1', null, '1', '1', 'LAKI-LAKI', '6678ed7fdbedb', '-', '1', '1', null, '2024-06-24 03:52:55', '2024-10-03 04:41:57', null);
INSERT INTO data_elemen VALUES ('3', '1', null, '1', '1', 'Perempuan', '6678f0b7e4c8a', '-', '1', '1', null, '2024-06-24 04:06:28', '2024-10-03 04:42:02', null);
INSERT INTO data_elemen VALUES ('4', '0', null, '1', '1', 'JUMLAH PEKERJA NON LEMBAGA PEMERINTAHAN', '6678f15eb9afa', '-', '1', '1', null, '2024-06-24 04:09:15', '2024-10-03 04:42:11', null);
INSERT INTO data_elemen VALUES ('5', '4', null, '1', null, 'LAKI-LAKI', '6678f25c1c895', '-', '1', '1', '', '2024-06-24 04:13:29', '2024-06-24 04:13:29', null);
INSERT INTO data_elemen VALUES ('6', '4', null, '1', null, 'Perempuan', '6678f26d7bc13', '-', '1', '1', '', '2024-06-24 04:13:42', '2024-06-24 04:13:42', null);
INSERT INTO data_elemen VALUES ('7', '0', null, '1', null, 'JUMLAH PEKERJA DILEMBAGA PEMERINTAHAN', '6678f28429c37', '-', '1', '1', '', '2024-06-24 04:14:22', '2024-06-24 09:01:16', null);
INSERT INTO data_elemen VALUES ('8', '7', null, '1', null, 'LAKI-LAKI', '6678f2a28d66b', '-', '1', '1', '', '2024-06-24 04:14:37', '2024-06-24 04:14:37', null);
INSERT INTO data_elemen VALUES ('9', '7', null, '1', null, 'Perempuan', '6678f2b04ec99', '-', '1', '1', 'keterangan', '2024-06-24 04:14:50', '2024-06-24 08:56:44', null);
INSERT INTO data_elemen VALUES ('10', '0', null, '1', null, 'JUMLAH ANGGOTA LEGISLATIF', '667a6d03607de', '-', '1', '1', '', '2024-06-25 07:09:02', '2024-06-25 07:09:02', null);
INSERT INTO data_elemen VALUES ('11', '10', null, '1', null, 'LAKI-LAKI', '667a6d12b9820', '-', '1', '1', '', '2024-06-25 07:09:22', '2024-06-25 07:09:22', null);
INSERT INTO data_elemen VALUES ('12', '10', null, '1', null, 'Perempuan', '667a6d23cd120', '-', '1', '1', '', '2024-06-25 07:09:33', '2024-06-25 07:09:33', null);
INSERT INTO data_elemen VALUES ('13', '0', null, '1', null, 'INDEKS PEMBANGUNAN GENDER (IPG)', '667a6d36c2b2c', '-', '1', '1', '', '2024-06-25 07:09:57', '2024-06-25 07:09:57', null);
INSERT INTO data_elemen VALUES ('14', '0', null, '1', null, 'INDEKS PEMBERDAYAAN GENDER (IDG)', '667a6d46b7a35', '-', '1', '1', '', '2024-06-25 07:10:08', '2024-06-25 07:10:08', null);
INSERT INTO data_elemen VALUES ('15', '0', null, '1', '3', 'Jumlah Anggota Legislatif', '66fe20b043f2e', null, '1', '1', '', '2024-10-03 04:43:16', '2024-10-03 04:43:16', null);
INSERT INTO data_elemen VALUES ('16', '15', null, '1', '3', 'Laki-laki', '66fe20edf2da3', null, '1', '1', '', '2024-10-03 04:44:17', '2024-10-03 04:44:17', null);
INSERT INTO data_elemen VALUES ('17', '15', null, '1', '3', 'Perempuan', '66fe21255298f', null, '1', '1', '', '2024-10-03 04:44:33', '2024-10-03 04:44:33', null);

-- ----------------------------
-- Table structure for `data_indikator`
-- ----------------------------
DROP TABLE IF EXISTS `data_indikator`;
CREATE TABLE `data_indikator` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_induk` varchar(10) DEFAULT NULL,
  `id_target` varchar(20) DEFAULT '',
  `kode` varchar(40) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `alias` varchar(100) DEFAULT NULL,
  `sumber` varchar(200) DEFAULT NULL,
  `satuan` varchar(100) DEFAULT NULL,
  `tahun1` varchar(40) DEFAULT NULL,
  `tahun2` varchar(40) DEFAULT NULL,
  `tahun3` varchar(40) DEFAULT NULL,
  `tahun4` varchar(40) DEFAULT NULL,
  `tahun5` varchar(40) DEFAULT NULL,
  `status_aktif` char(1) DEFAULT '',
  `status_verifikasi` char(1) DEFAULT '',
  `ket` text DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of data_indikator
-- ----------------------------
INSERT INTO data_indikator VALUES ('1', null, '1', '5.1.1', 'Jumlah kebijakan yang responsif gender mendukung pemberdayaan perempuan', null, 'DPACSKB', 'Dokumen', '145', '250', '280', '300', '-', '1', '', '', null, '2024-08-13 13:13:58', null);
INSERT INTO data_indikator VALUES ('2', null, '2', '5.2.1', 'Prevalensi Kekerasan terhadap anak perempuan dan laki-laki 0-17 th', null, 'DPACSKB', '%', '12', '45', '5', '0', '0', '1', '', '', null, '2024-08-13 13:13:33', null);
INSERT INTO data_indikator VALUES ('3', null, '2', '5.2.2', 'Proporsi perempuan dan anak perempuan menagalami kekerasan Dalam Rumah Tangga (KDRT)', null, 'DP3AP2 dan DINAS PPPA', '%', null, null, null, null, null, '1', '', '', null, null, null);
INSERT INTO data_indikator VALUES ('4', null, '2', '5.2.3', 'Proporsi perempuan dan anak perempuan mengalami kekerasan non-KDRT', null, 'DP3AP2 dan DINAS PPPA', '%', null, null, null, null, null, '1', '', '', null, null, null);
INSERT INTO data_indikator VALUES ('5', null, '2', '5.2.4', 'Persentase korban kekerasan terhdapa perempuan yang mendapat layanan komprehensif', null, 'DP3AP2 dan DINAS PPPA', '%', null, null, null, null, null, '1', '', '', null, null, null);
INSERT INTO data_indikator VALUES ('6', null, '3', '5.3.1', 'Median usia kawin pertama perempuan pernah kawin umur 25-49 tahun', null, 'DP3AP2 dan DINAS PPPA', 'Tahun', null, null, null, null, null, '1', '', '', null, null, null);
INSERT INTO data_indikator VALUES ('7', null, '5', '5.5.1', 'Proporsi kursi yang diduduki perempuan di parlemen tingkat pusat, parlemen daerah dan pemerintah daerah', null, 'DP3AP2 dan DINAS PPPA', '%', null, null, null, null, null, '1', '', '', null, null, null);
INSERT INTO data_indikator VALUES ('8', null, '6', '5.6.1', 'UU dan PP yg menjamin perempuan umur 15-49 th utk mendapatkan pelayanan terkait kesehatan seksual', null, 'DP3AP2 dan DINAS PPPA', 'Dokumen', null, null, null, null, null, '1', '', '', null, null, null);
INSERT INTO data_indikator VALUES ('9', null, '7', '5.7.1', 'Tersedianya pusat layanan korban kekerasan perempuan dan anak', null, 'DP3AP2 dan DINAS PPPA', 'Lembaga', null, null, null, null, null, '1', '', '', null, null, null);
INSERT INTO data_indikator VALUES ('10', null, '1', '5.1.2', 'tes Nama Indikator', null, 'Sumberna', 'Satuanna', null, null, null, null, null, '1', '', '', '2024-08-13 10:04:23', '2024-08-13 10:04:23', null);

-- ----------------------------
-- Table structure for `data_link`
-- ----------------------------
DROP TABLE IF EXISTS `data_link`;
CREATE TABLE `data_link` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `alias` varchar(200) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `file_foto` varchar(200) DEFAULT NULL,
  `urlna` varchar(100) DEFAULT NULL,
  `ket` text DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of data_link
-- ----------------------------
INSERT INTO data_link VALUES ('1', '667e344895655', 'DP3ACSKB Kabupaten Bangka Barat', 'file_foto_667e344895655.png', 'https://www.babarkab.go.id', '<p>asd asdasd</p>', '1', '2024-06-28 03:56:48', '2024-06-28 04:04:17', null);
INSERT INTO data_link VALUES ('2', '667e364755182', 'DP3ACSKB Kabupaten Bangka Selatan', 'file_foto_667e364755182.png', 'https://www.bangkaselatankab.go.id', null, '1', '2024-06-28 04:04:53', '2024-06-28 04:04:53', null);

-- ----------------------------
-- Table structure for `data_publikasi`
-- ----------------------------
DROP TABLE IF EXISTS `data_publikasi`;
CREATE TABLE `data_publikasi` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `alias` varchar(100) DEFAULT NULL,
  `judul` varchar(200) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `file_foto` varchar(200) DEFAULT NULL,
  `file_download` varchar(200) DEFAULT NULL,
  `inputby` varchar(100) DEFAULT NULL,
  `tglinput` date DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `ket` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of data_publikasi
-- ----------------------------
INSERT INTO data_publikasi VALUES ('1', '667e1b45ccca6', 'Publikasi tes', '<p>asd asdas asd asd asd asdasd asdas dasdasd asdasd qweq qwe qwe qwe qwe qwe</p><p>asd aasd asd a</p><p>asd asdasdasd dasd asss sddsd</p>', 'file_foto_667e1b45ccca6.jpg', 'file_file_667e1b45ccca6.pdf', null, '2024-06-28', '1', null, '2024-06-28 02:10:02', '2024-06-28 03:21:33', null);
INSERT INTO data_publikasi VALUES ('2', '667e2fcb4c6c8', 'pub 2', '<p>asd asdasd</p>', 'file_foto_667e2fcb4c6c8.jpg', 'file_file_667e2fcb4c6c8.pdf', null, '2024-06-27', '1', null, '2024-06-28 03:37:13', '2024-06-28 03:37:31', '2024-06-28 03:37:31');

-- ----------------------------
-- Table structure for `nilai_elemen`
-- ----------------------------
DROP TABLE IF EXISTS `nilai_elemen`;
CREATE TABLE `nilai_elemen` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `alias` varchar(100) DEFAULT '',
  `id_elemen` varchar(10) DEFAULT '',
  `id_jenis` varchar(20) DEFAULT '',
  `id_wilayah` varchar(20) DEFAULT '',
  `tahun` varchar(200) DEFAULT '',
  `nilai` varchar(40) DEFAULT NULL,
  `sumber` varchar(200) DEFAULT '',
  `status_aktif` char(1) DEFAULT '',
  `status_verifikasi` char(1) DEFAULT '',
  `ket` text DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of nilai_elemen
-- ----------------------------
INSERT INTO nilai_elemen VALUES ('15', '667ae3579947c', '1', '1', '1', '2020', '1', '', '1', '1', '', '2024-06-25 15:33:43', '2024-06-25 16:34:44', null);
INSERT INTO nilai_elemen VALUES ('16', '667ae3579947c', '2', '1', '1', '2020', '1', '', '1', '1', '', '2024-06-25 15:33:43', '2024-06-25 16:34:44', null);
INSERT INTO nilai_elemen VALUES ('17', '667ae3579947c', '3', '1', '1', '2020', '1', '', '1', '1', '', '2024-06-25 15:33:43', '2024-06-25 16:34:44', null);
INSERT INTO nilai_elemen VALUES ('18', '667ae3579947c', '4', '1', '1', '2020', '1', '', '1', '1', '', '2024-06-25 15:33:43', '2024-06-25 16:34:44', null);
INSERT INTO nilai_elemen VALUES ('19', '667ae3579947c', '5', '1', '1', '2020', '1', '', '1', '1', '', '2024-06-25 15:33:43', '2024-06-25 16:34:44', null);
INSERT INTO nilai_elemen VALUES ('20', '667ae3579947c', '6', '1', '1', '2020', '1', '', '1', '1', '', '2024-06-25 15:33:43', '2024-06-25 16:34:44', null);
INSERT INTO nilai_elemen VALUES ('21', '667ae3579947c', '7', '1', '1', '2020', '1', '', '1', '1', '', '2024-06-25 15:33:43', '2024-06-25 16:34:44', null);
INSERT INTO nilai_elemen VALUES ('22', '667ae3579947c', '8', '1', '1', '2020', '1', '', '1', '1', '', '2024-06-25 15:33:43', '2024-06-25 16:34:44', null);
INSERT INTO nilai_elemen VALUES ('23', '667ae3579947c', '9', '1', '1', '2020', '1', '', '1', '1', '', '2024-06-25 15:33:43', '2024-06-25 16:34:44', null);
INSERT INTO nilai_elemen VALUES ('24', '667ae3579947c', '10', '1', '1', '2020', '1', '', '1', '1', '', '2024-06-25 15:33:43', '2024-06-25 16:34:44', null);
INSERT INTO nilai_elemen VALUES ('25', '667ae3579947c', '11', '1', '1', '2020', '1', '', '1', '1', '', '2024-06-25 15:33:43', '2024-06-25 16:34:44', null);
INSERT INTO nilai_elemen VALUES ('26', '667ae3579947c', '12', '1', '1', '2020', '1', '', '1', '1', '', '2024-06-25 15:33:43', '2024-06-25 16:34:44', null);
INSERT INTO nilai_elemen VALUES ('27', '667ae3579947c', '13', '1', '1', '2020', '1', '', '1', '1', '', '2024-06-25 15:33:43', '2024-06-25 16:34:44', null);
INSERT INTO nilai_elemen VALUES ('28', '667ae3579947c', '14', '1', '1', '2020', '1', '', '1', '1', '', '2024-06-25 15:33:43', '2024-06-25 16:34:44', null);
INSERT INTO nilai_elemen VALUES ('29', '667af1cde52fe', '1', '1', '8', '2020', '23', '', '1', '1', '', '2024-06-25 16:35:25', '2024-06-25 16:36:12', null);
INSERT INTO nilai_elemen VALUES ('30', '667af1cde52fe', '2', '1', '8', '2020', '32', '', '1', '1', '', '2024-06-25 16:35:25', '2024-06-25 16:36:12', null);
INSERT INTO nilai_elemen VALUES ('31', '667af1cde52fe', '3', '1', '8', '2020', '12', '', '1', '1', '', '2024-06-25 16:35:25', '2024-06-25 16:36:12', null);
INSERT INTO nilai_elemen VALUES ('32', '667af1cde52fe', '4', '1', '8', '2020', '21', '', '1', '1', '', '2024-06-25 16:35:25', '2024-06-25 16:36:12', null);
INSERT INTO nilai_elemen VALUES ('33', '667af1cde52fe', '5', '1', '8', '2020', '45', '', '1', '1', '', '2024-06-25 16:35:25', '2024-06-25 16:36:12', null);
INSERT INTO nilai_elemen VALUES ('34', '667af1cde52fe', '6', '1', '8', '2020', '65', '', '1', '1', '', '2024-06-25 16:35:25', '2024-06-25 16:36:12', null);
INSERT INTO nilai_elemen VALUES ('35', '667af1cde52fe', '7', '1', '8', '2020', '67', '', '1', '1', '', '2024-06-25 16:35:25', '2024-06-25 16:36:12', null);
INSERT INTO nilai_elemen VALUES ('36', '667af1cde52fe', '8', '1', '8', '2020', '87', '', '1', '1', '', '2024-06-25 16:35:25', '2024-06-25 16:36:12', null);
INSERT INTO nilai_elemen VALUES ('37', '667af1cde52fe', '9', '1', '8', '2020', '77', '', '1', '1', '', '2024-06-25 16:35:25', '2024-06-25 16:36:12', null);
INSERT INTO nilai_elemen VALUES ('38', '667af1cde52fe', '10', '1', '8', '2020', '66', '', '1', '1', '', '2024-06-25 16:35:25', '2024-06-25 16:36:12', null);
INSERT INTO nilai_elemen VALUES ('39', '667af1cde52fe', '11', '1', '8', '2020', '55', '', '1', '1', '', '2024-06-25 16:35:25', '2024-06-25 16:36:12', null);
INSERT INTO nilai_elemen VALUES ('40', '667af1cde52fe', '12', '1', '8', '2020', '44', '', '1', '1', '', '2024-06-25 16:35:25', '2024-06-25 16:36:12', null);
INSERT INTO nilai_elemen VALUES ('41', '667af1cde52fe', '13', '1', '8', '2020', '33', '', '1', '1', '', '2024-06-25 16:35:25', '2024-06-25 16:36:12', null);
INSERT INTO nilai_elemen VALUES ('42', '667af1cde52fe', '14', '1', '8', '2020', '66', '', '1', '1', '', '2024-06-25 16:35:25', '2024-06-25 16:36:12', null);

-- ----------------------------
-- Table structure for `nilai_indikator`
-- ----------------------------
DROP TABLE IF EXISTS `nilai_indikator`;
CREATE TABLE `nilai_indikator` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `alias` varchar(100) DEFAULT '',
  `id_indikator` varchar(10) DEFAULT '',
  `id_jenis` varchar(20) DEFAULT '',
  `tahun` varchar(200) DEFAULT '',
  `nilai` varchar(40) DEFAULT NULL,
  `sumber` varchar(200) DEFAULT '',
  `status_aktif` char(1) DEFAULT '',
  `status_verifikasi` char(1) DEFAULT '',
  `ket` text DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of nilai_indikator
-- ----------------------------

-- ----------------------------
-- Table structure for `periode`
-- ----------------------------
DROP TABLE IF EXISTS `periode`;
CREATE TABLE `periode` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `namaperiode` varchar(100) DEFAULT NULL,
  `thnawal` varchar(10) DEFAULT NULL,
  `thnakhir` varchar(10) DEFAULT NULL,
  `labelawal` varchar(10) DEFAULT NULL,
  `labelakhir` varchar(10) DEFAULT NULL,
  `ket` varchar(200) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- ----------------------------
-- Records of periode
-- ----------------------------
INSERT INTO periode VALUES ('1', '2021', '2016', '2020', '1', '5', '2016-2020', '0', null, '2024-06-25 02:39:34', null);
INSERT INTO periode VALUES ('2', '2022', '2017', '2021', '2', '6', '2017-2021', '0', null, '2024-06-25 02:39:34', null);
INSERT INTO periode VALUES ('3', '2023', '2018', '2022', '3', '7', '2018-2022', '0', null, '2024-06-25 02:39:34', null);
INSERT INTO periode VALUES ('4', '2024', '2019', '2023', '4', '8', '2019-2023', '0', null, '2024-06-25 02:39:34', null);
INSERT INTO periode VALUES ('5', '2025', '2020', '2024', '5', '9', '2020-2024', '1', null, '2024-06-25 02:39:34', null);

-- ----------------------------
-- Table structure for `ref_bidang`
-- ----------------------------
DROP TABLE IF EXISTS `ref_bidang`;
CREATE TABLE `ref_bidang` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_jenis` varchar(10) DEFAULT '',
  `alias` varchar(100) DEFAULT NULL,
  `namabidang` varchar(200) DEFAULT '',
  `status` char(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of ref_bidang
-- ----------------------------
INSERT INTO ref_bidang VALUES ('1', '1', '66fe1801e7fd7', 'Data Umum', '1', '2024-10-03 04:05:29', '2024-10-03 04:16:29', null);
INSERT INTO ref_bidang VALUES ('2', '1', '66fe1aa01c9c3', 'Bidang Ekonomi', '1', '2024-10-03 04:16:43', '2024-10-03 04:16:43', null);
INSERT INTO ref_bidang VALUES ('3', '1', '66fe1aadb764c', 'Bidang Politik', '1', '2024-10-03 04:17:02', '2024-10-03 04:17:02', null);
INSERT INTO ref_bidang VALUES ('4', '1', '66fe1ac2e44f0', 'Bidang Kesehatan', '1', '2024-10-03 04:17:15', '2024-10-03 04:17:15', null);
INSERT INTO ref_bidang VALUES ('5', '1', '66fe1ad0995bf', 'Bidang Pendidikan, Sosial, Budaya', '1', '2024-10-03 04:17:37', '2024-10-03 04:17:37', null);
INSERT INTO ref_bidang VALUES ('6', '2', '66fe1ae936427', 'Data Umum', '1', '2024-10-03 04:17:52', '2024-10-03 04:17:52', null);
INSERT INTO ref_bidang VALUES ('7', '2', '66fe1af272072', 'Hak Hidup dan Identitas', '1', '2024-10-03 04:18:07', '2024-10-03 04:18:07', null);
INSERT INTO ref_bidang VALUES ('8', '2', '66fe1b00c2e53', 'Hak Tumbuh Kembang', '1', '2024-10-03 04:18:19', '2024-10-03 04:18:19', null);
INSERT INTO ref_bidang VALUES ('9', '2', '66fe1b0d8ce52', 'Hak Partisipasi', '1', '2024-10-03 04:18:32', '2024-10-03 04:18:32', null);
INSERT INTO ref_bidang VALUES ('10', '2', '66fe1b1fd1c2a', 'Hak Perlindungan', '1', '2024-10-03 04:18:50', '2024-10-03 04:18:50', null);

-- ----------------------------
-- Table structure for `ref_jenis`
-- ----------------------------
DROP TABLE IF EXISTS `ref_jenis`;
CREATE TABLE `ref_jenis` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_induk` varchar(10) DEFAULT NULL,
  `alias` varchar(100) DEFAULT NULL,
  `namajenis` varchar(200) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of ref_jenis
-- ----------------------------
INSERT INTO ref_jenis VALUES ('1', null, 'gender', 'Data Gender', '1', null, null, null);
INSERT INTO ref_jenis VALUES ('2', null, 'anak', 'Data Anak', '1', null, null, null);

-- ----------------------------
-- Table structure for `ref_target`
-- ----------------------------
DROP TABLE IF EXISTS `ref_target`;
CREATE TABLE `ref_target` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `kdtarget` varchar(20) DEFAULT '',
  `alias` varchar(100) DEFAULT NULL,
  `namatarget` text DEFAULT '',
  `status` char(1) DEFAULT NULL,
  `ket` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of ref_target
-- ----------------------------
INSERT INTO ref_target VALUES ('1', '5.1', '5-1', 'Mengakhiri segala bentuk diskriminasi terhadap kaum perempuan dimana pun', '1', null, null, null, null);
INSERT INTO ref_target VALUES ('2', '5.2', '5-2', 'Menghilangkan segala bentuk kekerasan terhadap kaum perempuan di ruang publik dan pribadi, termasuk perdagangan manusia dan eksploitasi seksual, serta berbagai jenis eksploitasi lainnya', '1', null, null, null, null);
INSERT INTO ref_target VALUES ('3', '5.3', '5.3', 'Menghapuskan semua praktik berbahaya, seperti perkawinan usia anak, perkawinan dini dan paksa, serta sunat perempuan', '1', null, null, null, null);
INSERT INTO ref_target VALUES ('4', '5.4', '5.4', '-', '0', null, null, null, null);
INSERT INTO ref_target VALUES ('5', '5.5', '5-5', 'Menjamin partisipasi penuh dan efektif, dan kesempatan yang sama bagi perempuan untuk memimpin di semua tingkat pengambilan keputusan dalam kehidupan politik, ekonomi, dan masyarakat', '1', null, null, null, null);
INSERT INTO ref_target VALUES ('6', '5.6', '5-6', 'Menjamin akses universal terhadap kesehatan seksual dan reproduksi, dan hak reproduksi seperti yang telah disepakati sesuai dengan Programme of Action of the International Conference on Population andDevelopment and the Beijing Platform serta dokumen-dokumen hasil reviu dari konferensi-konferensi tersebut', '1', null, null, null, null);
INSERT INTO ref_target VALUES ('7', '5.7', '5-7', 'Mengambil tindakan cepat dan untuk memberantas kerja paksa, mengakhiri perbudakan dan penjualan manusia, mengamankan larangan dan penghapusan bentuk terburuk tenaga kerja anak, termasuk perekrutan dan penggunaan tentara anak- anak, dan pada tahun 2025 mengakhiri tenaga kerja anak dalam segala bentuknya', '1', null, null, null, null);

-- ----------------------------
-- Table structure for `ref_wilayah`
-- ----------------------------
DROP TABLE IF EXISTS `ref_wilayah`;
CREATE TABLE `ref_wilayah` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `kdwilayah` varchar(20) DEFAULT NULL,
  `alias` varchar(100) DEFAULT NULL,
  `namawilayah` varchar(200) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `ket` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of ref_wilayah
-- ----------------------------
INSERT INTO ref_wilayah VALUES ('1', '19', 'prov', 'Provinsi Kepulauan Bangka Belitung', '1', null, null, null, null);
INSERT INTO ref_wilayah VALUES ('2', '19.01', 'bangka', 'Kabupaten Bangka', '1', null, null, null, null);
INSERT INTO ref_wilayah VALUES ('3', '19.02', 'belitung', 'Kabupaten Belitung', '1', null, null, null, null);
INSERT INTO ref_wilayah VALUES ('4', '19.03', 'basel', 'Kabupaten Bangka Selatan', '1', null, null, null, null);
INSERT INTO ref_wilayah VALUES ('5', '19.04', 'bateng', 'Kabupaten Bangka Tengah', '1', null, null, null, null);
INSERT INTO ref_wilayah VALUES ('6', '19.05', 'babar', 'Kabupaten Bangka Barat', '1', null, null, null, null);
INSERT INTO ref_wilayah VALUES ('7', '19.06', 'beltim', 'Kabupaten Belitung Timur', '1', null, null, null, null);
INSERT INTO ref_wilayah VALUES ('8', '19.71', 'pkp', 'Kota Pangkalpinang', '1', null, null, null, null);
