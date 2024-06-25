/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : laravel_siganak

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2024-06-25 23:43:39
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
) ENGINE=InnoDB AUTO_INCREMENT=210 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of admins
-- ----------------------------
INSERT INTO admins VALUES ('1', null, 'admin', '1', null, null, 'dahrul.ulum@gmail.com', null, 'dahrul.ulum@gmail.com', '$2y$10$K9o5RXw.2qeujixYtl17ROaQch6w3mydLdXkbFLW68AgXEMGzDs0y', null, '2020-06-25 14:12:55', '2021-12-24 13:46:12', null);
INSERT INTO admins VALUES ('209', '8', 'Dafa', '2', null, '', 'dafa@gmail.com', null, 'dafa', '$2y$10$r2ub5NBJkY4ugamKTtfC7OcUE3bLNV8GCctEX7OEcAT1YQx.bOKRK', null, '2024-06-24 07:25:51', '2024-06-24 07:33:27', null);

-- ----------------------------
-- Table structure for `data_elemen`
-- ----------------------------
DROP TABLE IF EXISTS `data_elemen`;
CREATE TABLE `data_elemen` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_induk` varchar(10) DEFAULT NULL,
  `id_wilayah` varchar(20) DEFAULT NULL,
  `id_jenis` varchar(20) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of data_elemen
-- ----------------------------
INSERT INTO data_elemen VALUES ('1', '0', null, '1', 'JUMLAH PENDUDUK', '6678eb7442b58', '-', '1', '1', null, '2024-06-24 03:44:13', '2024-06-24 03:44:13', null);
INSERT INTO data_elemen VALUES ('2', '1', null, '1', 'LAKI-LAKI', '6678ed7fdbedb', '-', '1', '1', null, '2024-06-24 03:52:55', '2024-06-24 03:52:55', null);
INSERT INTO data_elemen VALUES ('3', '1', null, '1', 'Perempuan', '6678f0b7e4c8a', '-', '1', '1', null, '2024-06-24 04:06:28', '2024-06-24 04:06:28', null);
INSERT INTO data_elemen VALUES ('4', '0', null, '1', 'JUMLAH PEKERJA NON LEMBAGA PEMERINTAHAN', '6678f15eb9afa', '-', '1', '1', '', '2024-06-24 04:09:15', '2024-06-24 04:09:15', null);
INSERT INTO data_elemen VALUES ('5', '4', null, '1', 'LAKI-LAKI', '6678f25c1c895', '-', '1', '1', '', '2024-06-24 04:13:29', '2024-06-24 04:13:29', null);
INSERT INTO data_elemen VALUES ('6', '4', null, '1', 'Perempuan', '6678f26d7bc13', '-', '1', '1', '', '2024-06-24 04:13:42', '2024-06-24 04:13:42', null);
INSERT INTO data_elemen VALUES ('7', '0', null, '1', 'JUMLAH PEKERJA DILEMBAGA PEMERINTAHAN', '6678f28429c37', '-', '1', '1', '', '2024-06-24 04:14:22', '2024-06-24 09:01:16', null);
INSERT INTO data_elemen VALUES ('8', '7', null, '1', 'LAKI-LAKI', '6678f2a28d66b', '-', '1', '1', '', '2024-06-24 04:14:37', '2024-06-24 04:14:37', null);
INSERT INTO data_elemen VALUES ('9', '7', null, '1', 'Perempuan', '6678f2b04ec99', '-', '1', '1', 'keterangan', '2024-06-24 04:14:50', '2024-06-24 08:56:44', null);
INSERT INTO data_elemen VALUES ('10', '0', null, '1', 'JUMLAH ANGGOTA LEGISLATIF', '667a6d03607de', '-', '1', '1', '', '2024-06-25 07:09:02', '2024-06-25 07:09:02', null);
INSERT INTO data_elemen VALUES ('11', '10', null, '1', 'LAKI-LAKI', '667a6d12b9820', '-', '1', '1', '', '2024-06-25 07:09:22', '2024-06-25 07:09:22', null);
INSERT INTO data_elemen VALUES ('12', '10', null, '1', 'Perempuan', '667a6d23cd120', '-', '1', '1', '', '2024-06-25 07:09:33', '2024-06-25 07:09:33', null);
INSERT INTO data_elemen VALUES ('13', '0', null, '1', 'INDEKS PEMBANGUNAN GENDER (IPG)', '667a6d36c2b2c', '-', '1', '1', '', '2024-06-25 07:09:57', '2024-06-25 07:09:57', null);
INSERT INTO data_elemen VALUES ('14', '0', null, '1', 'INDEKS PEMBERDAYAAN GENDER (IDG)', '667a6d46b7a35', '-', '1', '1', '', '2024-06-25 07:10:08', '2024-06-25 07:10:08', null);

-- ----------------------------
-- Table structure for `data_nilai`
-- ----------------------------
DROP TABLE IF EXISTS `data_nilai`;
CREATE TABLE `data_nilai` (
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
-- Records of data_nilai
-- ----------------------------
INSERT INTO data_nilai VALUES ('15', '667ae3579947c', '1', '1', '1', '2020', '1', '', '1', '1', '', '2024-06-25 15:33:43', '2024-06-25 16:34:44', null);
INSERT INTO data_nilai VALUES ('16', '667ae3579947c', '2', '1', '1', '2020', '1', '', '1', '1', '', '2024-06-25 15:33:43', '2024-06-25 16:34:44', null);
INSERT INTO data_nilai VALUES ('17', '667ae3579947c', '3', '1', '1', '2020', '1', '', '1', '1', '', '2024-06-25 15:33:43', '2024-06-25 16:34:44', null);
INSERT INTO data_nilai VALUES ('18', '667ae3579947c', '4', '1', '1', '2020', '1', '', '1', '1', '', '2024-06-25 15:33:43', '2024-06-25 16:34:44', null);
INSERT INTO data_nilai VALUES ('19', '667ae3579947c', '5', '1', '1', '2020', '1', '', '1', '1', '', '2024-06-25 15:33:43', '2024-06-25 16:34:44', null);
INSERT INTO data_nilai VALUES ('20', '667ae3579947c', '6', '1', '1', '2020', '1', '', '1', '1', '', '2024-06-25 15:33:43', '2024-06-25 16:34:44', null);
INSERT INTO data_nilai VALUES ('21', '667ae3579947c', '7', '1', '1', '2020', '1', '', '1', '1', '', '2024-06-25 15:33:43', '2024-06-25 16:34:44', null);
INSERT INTO data_nilai VALUES ('22', '667ae3579947c', '8', '1', '1', '2020', '1', '', '1', '1', '', '2024-06-25 15:33:43', '2024-06-25 16:34:44', null);
INSERT INTO data_nilai VALUES ('23', '667ae3579947c', '9', '1', '1', '2020', '1', '', '1', '1', '', '2024-06-25 15:33:43', '2024-06-25 16:34:44', null);
INSERT INTO data_nilai VALUES ('24', '667ae3579947c', '10', '1', '1', '2020', '1', '', '1', '1', '', '2024-06-25 15:33:43', '2024-06-25 16:34:44', null);
INSERT INTO data_nilai VALUES ('25', '667ae3579947c', '11', '1', '1', '2020', '1', '', '1', '1', '', '2024-06-25 15:33:43', '2024-06-25 16:34:44', null);
INSERT INTO data_nilai VALUES ('26', '667ae3579947c', '12', '1', '1', '2020', '1', '', '1', '1', '', '2024-06-25 15:33:43', '2024-06-25 16:34:44', null);
INSERT INTO data_nilai VALUES ('27', '667ae3579947c', '13', '1', '1', '2020', '1', '', '1', '1', '', '2024-06-25 15:33:43', '2024-06-25 16:34:44', null);
INSERT INTO data_nilai VALUES ('28', '667ae3579947c', '14', '1', '1', '2020', '1', '', '1', '1', '', '2024-06-25 15:33:43', '2024-06-25 16:34:44', null);
INSERT INTO data_nilai VALUES ('29', '667af1cde52fe', '1', '1', '8', '2020', '23', '', '1', '1', '', '2024-06-25 16:35:25', '2024-06-25 16:36:12', null);
INSERT INTO data_nilai VALUES ('30', '667af1cde52fe', '2', '1', '8', '2020', '32', '', '1', '1', '', '2024-06-25 16:35:25', '2024-06-25 16:36:12', null);
INSERT INTO data_nilai VALUES ('31', '667af1cde52fe', '3', '1', '8', '2020', '12', '', '1', '1', '', '2024-06-25 16:35:25', '2024-06-25 16:36:12', null);
INSERT INTO data_nilai VALUES ('32', '667af1cde52fe', '4', '1', '8', '2020', '21', '', '1', '1', '', '2024-06-25 16:35:25', '2024-06-25 16:36:12', null);
INSERT INTO data_nilai VALUES ('33', '667af1cde52fe', '5', '1', '8', '2020', '45', '', '1', '1', '', '2024-06-25 16:35:25', '2024-06-25 16:36:12', null);
INSERT INTO data_nilai VALUES ('34', '667af1cde52fe', '6', '1', '8', '2020', '65', '', '1', '1', '', '2024-06-25 16:35:25', '2024-06-25 16:36:12', null);
INSERT INTO data_nilai VALUES ('35', '667af1cde52fe', '7', '1', '8', '2020', '67', '', '1', '1', '', '2024-06-25 16:35:25', '2024-06-25 16:36:12', null);
INSERT INTO data_nilai VALUES ('36', '667af1cde52fe', '8', '1', '8', '2020', '87', '', '1', '1', '', '2024-06-25 16:35:25', '2024-06-25 16:36:12', null);
INSERT INTO data_nilai VALUES ('37', '667af1cde52fe', '9', '1', '8', '2020', '77', '', '1', '1', '', '2024-06-25 16:35:25', '2024-06-25 16:36:12', null);
INSERT INTO data_nilai VALUES ('38', '667af1cde52fe', '10', '1', '8', '2020', '66', '', '1', '1', '', '2024-06-25 16:35:25', '2024-06-25 16:36:12', null);
INSERT INTO data_nilai VALUES ('39', '667af1cde52fe', '11', '1', '8', '2020', '55', '', '1', '1', '', '2024-06-25 16:35:25', '2024-06-25 16:36:12', null);
INSERT INTO data_nilai VALUES ('40', '667af1cde52fe', '12', '1', '8', '2020', '44', '', '1', '1', '', '2024-06-25 16:35:25', '2024-06-25 16:36:12', null);
INSERT INTO data_nilai VALUES ('41', '667af1cde52fe', '13', '1', '8', '2020', '33', '', '1', '1', '', '2024-06-25 16:35:25', '2024-06-25 16:36:12', null);
INSERT INTO data_nilai VALUES ('42', '667af1cde52fe', '14', '1', '8', '2020', '66', '', '1', '1', '', '2024-06-25 16:35:25', '2024-06-25 16:36:12', null);

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
