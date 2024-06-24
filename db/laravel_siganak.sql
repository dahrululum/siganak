/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : laravel_siganak

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2024-06-24 14:03:56
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
) ENGINE=InnoDB AUTO_INCREMENT=209 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of admins
-- ----------------------------
INSERT INTO admins VALUES ('1', null, 'admin', '1', null, null, 'dahrul.ulum@gmail.com', null, 'dahrul.ulum@gmail.com', '$2y$10$K9o5RXw.2qeujixYtl17ROaQch6w3mydLdXkbFLW68AgXEMGzDs0y', null, '2020-06-25 14:12:55', '2021-12-24 13:46:12', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of data_elemen
-- ----------------------------
INSERT INTO data_elemen VALUES ('1', '0', null, '1', 'JUMLAH PENDUDUK', '6678eb7442b58', '-', '1', '1', null, '2024-06-24 03:44:13', '2024-06-24 03:44:13', null);
INSERT INTO data_elemen VALUES ('2', '1', null, '1', 'LAKI-LAKI', '6678ed7fdbedb', '-', '1', '1', null, '2024-06-24 03:52:55', '2024-06-24 03:52:55', null);
INSERT INTO data_elemen VALUES ('3', '1', null, '1', 'Perempuan', '6678f0b7e4c8a', '-', '1', '1', null, '2024-06-24 04:06:28', '2024-06-24 04:06:28', null);
INSERT INTO data_elemen VALUES ('4', '0', null, '1', 'JUMLAH PEKERJA NON LEMBAGA PEMERINTAHAN', '6678f15eb9afa', '-', '1', '1', '', '2024-06-24 04:09:15', '2024-06-24 04:09:15', null);
INSERT INTO data_elemen VALUES ('5', '4', null, '1', 'LAKI-LAKI', '6678f25c1c895', '-', '1', '1', '', '2024-06-24 04:13:29', '2024-06-24 04:13:29', null);
INSERT INTO data_elemen VALUES ('6', '4', null, '1', 'Perempuan', '6678f26d7bc13', '-', '1', '1', '', '2024-06-24 04:13:42', '2024-06-24 04:13:42', null);
INSERT INTO data_elemen VALUES ('7', '0', null, '1', 'JUMLAH PEKERJA DILEMBAGA PEMERINTAHAN', '6678f28429c37', '-', '1', '1', '', '2024-06-24 04:14:22', '2024-06-24 04:14:22', null);
INSERT INTO data_elemen VALUES ('8', '7', null, '1', 'LAKI-LAKI', '6678f2a28d66b', '-', '1', '1', '', '2024-06-24 04:14:37', '2024-06-24 04:14:37', null);
INSERT INTO data_elemen VALUES ('9', '7', null, '1', 'Perempuan', '6678f2b04ec99', '-', '1', '1', '', '2024-06-24 04:14:50', '2024-06-24 04:14:50', null);

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
