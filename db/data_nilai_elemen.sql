/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : laravel_siganak

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2024-10-15 12:30:31
*/

SET FOREIGN_KEY_CHECKS=0;
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
) ENGINE=InnoDB AUTO_INCREMENT=219 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of data_elemen
-- ----------------------------
INSERT INTO data_elemen VALUES ('1', '0', null, '1', '1', 'Jumlah Penduduk', '670dc5f3ae2cd', 'BADAN PUSAT STATISTIK', '1', '1', '', '2024-10-15 01:32:04', '2024-10-15 01:32:04', null);
INSERT INTO data_elemen VALUES ('2', '1', null, '1', '1', 'Laki-laki', '670dc6180db10', '-', '1', '1', '', '2024-10-15 01:32:25', '2024-10-15 01:32:25', null);
INSERT INTO data_elemen VALUES ('3', '1', null, '1', '1', 'Perempuan', '670dc62db78f5', '-', '1', '1', '', '2024-10-15 01:32:47', '2024-10-15 01:32:47', null);
INSERT INTO data_elemen VALUES ('4', '0', null, '1', '1', 'Indeks Pembangunan Gender (IPG)', '670dc6471101b', '-', '1', '1', '', '2024-10-15 01:33:20', '2024-10-15 01:33:20', null);
INSERT INTO data_elemen VALUES ('5', '0', null, '1', '1', 'Indeks Pemberdayaan Gender (IDG)', '670dc661a629a', '-', '1', '1', '', '2024-10-15 01:33:45', '2024-10-15 01:33:45', null);
INSERT INTO data_elemen VALUES ('6', '0', null, '1', '2', 'Jumlah Pekerja Dilembaga Pemerintahan', '670dc68353cdf', '-', '1', '1', '', '2024-10-15 01:34:18', '2024-10-15 01:34:18', null);
INSERT INTO data_elemen VALUES ('7', '6', null, '1', '2', 'Laki-laki', '670dc69e1b801', '-', '1', '1', '', '2024-10-15 01:34:35', '2024-10-15 01:34:35', null);
INSERT INTO data_elemen VALUES ('8', '6', null, '1', '2', 'Perempuan', '670dc6add0c00', '-', '1', '1', '', '2024-10-15 01:34:56', '2024-10-15 01:34:56', null);
INSERT INTO data_elemen VALUES ('9', '0', null, '1', '2', 'Sumbangan Pengeluaran', '670dc6c45dd01', '-', '1', '1', '', '2024-10-15 01:35:12', '2024-10-15 01:35:12', null);
INSERT INTO data_elemen VALUES ('10', '9', null, '1', '2', 'Laki-laki', '670dc6d23a555', '-', '1', '1', '', '2024-10-15 01:35:26', '2024-10-15 01:35:26', null);
INSERT INTO data_elemen VALUES ('11', '9', null, '1', '2', 'Perempuan', '670dc6e01abe6', '-', '1', '1', '', '2024-10-15 01:35:39', '2024-10-15 01:35:39', null);
INSERT INTO data_elemen VALUES ('12', '0', null, '1', '2', 'Persentase Anggaran Responsif Gender Terhadap APBD', '670dc6eda180e', '-', '1', '1', '', '2024-10-15 01:36:08', '2024-10-15 01:36:08', null);
INSERT INTO data_elemen VALUES ('13', '0', null, '1', '2', 'Jumlah OPD yang Melaksanakan PPRG', '670dc70ad50bd', '-', '1', '1', '', '2024-10-15 01:36:39', '2024-10-15 01:36:39', null);
INSERT INTO data_elemen VALUES ('14', '0', null, '1', '2', 'Jumlah Pelaku Industri Rumahan/ I.R Perempuan', '670dc72a349c9', '-', '1', '1', '', '2024-10-15 01:37:08', '2024-10-15 01:37:08', null);
INSERT INTO data_elemen VALUES ('15', '14', null, '1', '2', 'Yang Sudah Ikut Pelatihan', '670dc74619110', '-', '1', '1', '', '2024-10-15 01:37:29', '2024-10-15 01:37:29', null);
INSERT INTO data_elemen VALUES ('16', '14', null, '1', '2', 'Yang Belum Dilatih', '670dc75b1dc7d', '-', '1', '1', '', '2024-10-15 01:37:48', '2024-10-15 01:37:48', null);
INSERT INTO data_elemen VALUES ('17', '0', null, '1', '2', 'Angkatan Kerja Perempuan', '670dc771bf74a', '-', '1', '1', '', '2024-10-15 01:38:15', '2024-10-15 01:38:15', null);
INSERT INTO data_elemen VALUES ('18', '0', null, '1', '2', 'Jumlah Perempuan Kepala Keluarga', '670dc78b26b83', '-', '1', '1', '', '2024-10-15 01:38:39', '2024-10-15 01:38:39', null);
INSERT INTO data_elemen VALUES ('19', '0', null, '1', '2', 'Pengeluaran Perkapita', '670dc7a8b9c6a', '-', '1', '1', '', '2024-10-15 01:39:02', '2024-10-15 01:39:02', null);
INSERT INTO data_elemen VALUES ('20', '19', null, '1', '2', 'Laki-laki', '670dc7b82a3b0', '-', '1', '1', '', '2024-10-15 01:39:18', '2024-10-15 01:39:18', null);
INSERT INTO data_elemen VALUES ('21', '19', null, '1', '2', 'Perempuan', '670dc7c829098', '-', '1', '1', '', '2024-10-15 01:39:29', '2024-10-15 01:39:29', null);
INSERT INTO data_elemen VALUES ('22', '0', null, '1', '3', 'Jumlah Anggota Legislatif', '670dc7d9dae00', '-', '1', '1', '', '2024-10-15 01:39:55', '2024-10-15 01:39:55', null);
INSERT INTO data_elemen VALUES ('23', '22', null, '1', '3', 'Laki-laki', '670dc7ec76fab', '-', '1', '1', '', '2024-10-15 01:40:08', '2024-10-15 01:40:08', null);
INSERT INTO data_elemen VALUES ('24', '22', null, '1', '2', 'Perempuan', '670dc7fa36f21', '-', '1', '1', '', '2024-10-15 01:40:19', '2024-10-15 01:40:19', null);
INSERT INTO data_elemen VALUES ('25', '0', null, '1', '3', 'Jumlah Pengurus Partai Politik', '670dc8046c758', '-', '1', '1', '', '2024-10-15 01:40:42', '2024-10-15 01:40:42', null);
INSERT INTO data_elemen VALUES ('26', '25', null, '1', '3', 'Laki-laki', '670dc81bab9f3', '-', '1', '1', '', '2024-10-15 01:40:54', '2024-10-15 01:40:54', null);
INSERT INTO data_elemen VALUES ('27', '25', null, '1', '3', 'Perempuan', '670dc8282af70', '-', '1', '1', '', '2024-10-15 01:41:05', '2024-10-15 01:41:05', null);
INSERT INTO data_elemen VALUES ('28', '0', null, '1', '3', 'Jumlah Perempuan Pengambil Keputusan', '670dc8458c599', '-', '1', '1', '', '2024-10-15 01:41:46', '2024-10-15 01:41:46', null);
INSERT INTO data_elemen VALUES ('29', '28', null, '1', '3', 'Pemerintah', '670dc85e8fe26', '-', '1', '1', '', '2024-10-15 01:42:10', '2024-10-15 01:42:10', null);
INSERT INTO data_elemen VALUES ('30', '29', null, '1', '3', 'Eselon II', '670dc87574915', '-', '1', '1', '', '2024-10-15 01:42:31', '2024-10-15 01:42:31', null);
INSERT INTO data_elemen VALUES ('31', '29', null, '1', '3', 'Eselon III', '670dc89cca737', '-', '1', '1', '', '2024-10-15 01:43:07', '2024-10-15 01:43:07', null);
INSERT INTO data_elemen VALUES ('32', '29', null, '1', '3', 'Eselon IV', '670dc8ad7c24b', '-', '1', '1', '', '2024-10-15 01:43:26', '2024-10-15 01:43:26', null);
INSERT INTO data_elemen VALUES ('33', '28', null, '1', '3', 'Swasta', '670dc8d6b159b', '-', '1', '1', '', '2024-10-15 01:44:25', '2024-10-15 01:44:25', null);
INSERT INTO data_elemen VALUES ('34', '33', null, '1', '3', 'Manager', '670dc8fd664d8', '-', '1', '1', '', '2024-10-15 01:44:50', '2024-10-15 01:44:50', null);
INSERT INTO data_elemen VALUES ('35', '33', null, '1', '3', 'Direktur', '670dc9148994e', '-', '1', '1', '', '2024-10-15 01:45:07', '2024-10-15 01:45:07', null);
INSERT INTO data_elemen VALUES ('36', '33', null, '1', '3', 'Komisaris', '670dc924e0452', '-', '1', '1', '', '2024-10-15 01:45:28', '2024-10-15 01:45:28', null);
INSERT INTO data_elemen VALUES ('37', '33', null, '1', '3', 'C.E.O', '670dc93a25202', '-', '1', '1', '', '2024-10-15 01:45:44', '2024-10-15 01:45:44', null);
INSERT INTO data_elemen VALUES ('38', '33', null, '1', '3', 'dll', '670dc94c15012', '-', '1', '1', '', '2024-10-15 01:46:01', '2024-10-15 01:46:01', null);
INSERT INTO data_elemen VALUES ('39', '0', null, '1', '3', 'Jumlah Pengurus Forum Puspa', '670dc965f1b8f', '-', '1', '1', '', '2024-10-15 01:46:34', '2024-10-15 01:46:34', null);
INSERT INTO data_elemen VALUES ('40', '39', null, '1', '3', 'Kab/Kota', '670dc97bb2e10', '-', '1', '1', '', '2024-10-15 01:46:54', '2024-10-15 01:46:54', null);
INSERT INTO data_elemen VALUES ('41', '39', null, '1', '3', 'Kecamatan', '670dc99026894', '-', '1', '1', '', '2024-10-15 01:47:24', '2024-10-15 01:47:24', null);
INSERT INTO data_elemen VALUES ('42', '39', null, '1', '3', 'Kelurahan/Desa', '670dc9aeaf327', '-', '1', '1', '', '2024-10-15 01:47:44', '2024-10-15 01:47:44', null);
INSERT INTO data_elemen VALUES ('43', '0', null, '1', '3', 'Perempuan Sebagai Tenaga Profesional', '670dc9ca72be9', '-', '1', '1', '', '2024-10-15 01:48:10', '2024-10-15 01:48:10', null);
INSERT INTO data_elemen VALUES ('44', '0', null, '1', '3', 'Jumlah Organisasi Perempuan', '670dc9dc9c7ff', '-', '1', '1', '', '2024-10-15 01:48:28', '2024-10-15 01:48:28', null);
INSERT INTO data_elemen VALUES ('45', '0', null, '1', '3', 'Jumlah Kades/Lurah Perempuan', '670dc9faa5873', '-', '1', '1', '', '2024-10-15 01:48:57', '2024-10-15 01:48:57', null);
INSERT INTO data_elemen VALUES ('46', '0', null, '1', '4', 'Jumlah Kematian Ibu', '670dca1ca393b', '-', '1', '1', '', '2024-10-15 01:49:34', '2024-10-15 01:49:34', null);
INSERT INTO data_elemen VALUES ('47', '0', null, '1', '4', 'Angka Harapan Hidup', '670dca36ab390', '-', '1', '1', '', '2024-10-15 01:50:01', '2024-10-15 01:50:01', null);
INSERT INTO data_elemen VALUES ('48', '47', null, '1', '4', 'Laki-laki', '670dca4ab6dfa', '-', '1', '1', '', '2024-10-15 01:50:26', '2024-10-15 01:50:26', null);
INSERT INTO data_elemen VALUES ('49', '47', null, '1', '4', 'Perempuan', '670dca63c48a1', '-', '1', '1', '', '2024-10-15 01:50:40', '2024-10-15 01:50:40', null);
INSERT INTO data_elemen VALUES ('50', '0', null, '1', '4', 'Jumlah PUS', '670dca761aefd', '-', '1', '1', '', '2024-10-15 01:50:56', '2024-10-15 01:50:56', null);
INSERT INTO data_elemen VALUES ('51', '0', null, '1', '4', 'Jumlah Peserta KB aktif (PA)', '670dca81ad677', '-', '1', '1', '', '2024-10-15 01:51:28', '2024-10-15 01:51:28', null);
INSERT INTO data_elemen VALUES ('52', '51', null, '1', '4', 'Laki-laki', '670dcaa278a22', '-', '1', '1', '', '2024-10-15 01:51:51', '2024-10-15 01:51:51', null);
INSERT INTO data_elemen VALUES ('53', '51', null, '1', '4', 'Perempuan', '670dcab889dc1', '-', '1', '1', '', '2024-10-15 01:52:03', '2024-10-15 01:52:03', null);
INSERT INTO data_elemen VALUES ('54', '0', null, '1', '4', 'Jumlah Peserta KB Baru (PB)', '670dcac7093db', '-', '1', '1', '', '2024-10-15 01:52:28', '2024-10-15 01:52:28', null);
INSERT INTO data_elemen VALUES ('55', '54', null, '1', '4', 'Laki-laki', '670dcaddc0fa5', '-', '1', '1', '', '2024-10-15 01:52:43', '2024-10-15 01:52:43', null);
INSERT INTO data_elemen VALUES ('56', '54', null, '1', '4', 'Perempuan', '670dcaed3d91b', '-', '1', '1', '', '2024-10-15 01:53:03', '2024-10-15 01:53:03', null);
INSERT INTO data_elemen VALUES ('57', '0', null, '1', '4', 'Jumlah Kelompok Bina Keluarga Lansia', '670dcb0b91d48', '-', '1', '1', '', '2024-10-15 01:53:34', '2024-10-15 01:53:34', null);
INSERT INTO data_elemen VALUES ('58', '0', null, '1', '4', 'Jumlah Posyandu Lansia', '670dcb21efa4d', '-', '1', '1', '', '2024-10-15 01:53:55', '2024-10-15 01:53:55', null);
INSERT INTO data_elemen VALUES ('59', '0', null, '1', '5', 'Jumlah Perempuan Korban Kekerasan', '670dcb4fb213f', '-', '1', '1', '', '2024-10-15 01:54:43', '2024-10-15 01:54:43', null);
INSERT INTO data_elemen VALUES ('60', '0', null, '1', '5', 'Jumlah Perempuan Korban Kekerasan Berdasarkan Jenis Kekerasan', '670dcb67e844a', '-', '1', '1', '', '2024-10-15 01:55:11', '2024-10-15 01:55:11', null);
INSERT INTO data_elemen VALUES ('61', '60', null, '1', '5', 'FISIK', '670dcb828701b', '-', '1', '1', '', '2024-10-15 01:55:28', '2024-10-15 01:55:28', null);
INSERT INTO data_elemen VALUES ('62', '60', null, '1', '5', 'Psikis', '670dcb924b805', '-', '1', '1', '', '2024-10-15 01:55:44', '2024-10-15 01:55:44', null);
INSERT INTO data_elemen VALUES ('63', '60', null, '1', '5', 'Seksual', '670dcba301318', '-', '1', '1', '', '2024-10-15 01:56:02', '2024-10-15 01:56:02', null);
INSERT INTO data_elemen VALUES ('64', '60', null, '1', '5', 'Eksploitasi', '670dcbb3ed9cc', '-', '1', '1', '', '2024-10-15 01:56:20', '2024-10-15 01:56:20', null);
INSERT INTO data_elemen VALUES ('65', '60', null, '1', '5', 'Trafficking', '670dcbc597670', '-', '1', '1', '', '2024-10-15 01:56:37', '2024-10-15 01:56:37', null);
INSERT INTO data_elemen VALUES ('66', '60', null, '1', '5', 'Penelantaraan', '670dcbd6e27fa', '-', '1', '1', '', '2024-10-15 01:57:09', '2024-10-15 01:57:09', null);
INSERT INTO data_elemen VALUES ('67', '60', null, '1', '5', 'Lainnya', '670dcbf71a95d', '-', '1', '1', '', '2024-10-15 01:57:26', '2024-10-15 01:57:26', null);
INSERT INTO data_elemen VALUES ('68', '0', null, '1', '5', 'Harapan Lama Sekolah', '670dcc08b3063', '-', '1', '1', '', '2024-10-15 01:57:43', '2024-10-15 01:57:43', null);
INSERT INTO data_elemen VALUES ('69', '68', null, '1', '5', 'Laki-laki', '670dcc1ad0152', '-', '1', '1', '', '2024-10-15 01:58:02', '2024-10-15 01:58:02', null);
INSERT INTO data_elemen VALUES ('70', '68', null, '1', '5', 'Perempuan', '670dcc2bb7839', '-', '1', '1', '', '2024-10-15 01:58:20', '2024-10-15 01:58:20', null);
INSERT INTO data_elemen VALUES ('71', '0', null, '1', '5', 'Rata-rata Lama Sekolah', '670dcc432c15e', '-', '1', '1', '', '2024-10-15 01:58:44', '2024-10-15 01:58:44', null);
INSERT INTO data_elemen VALUES ('72', '71', null, '1', '5', 'Laki-laki', '670dcc599f76d', '-', '1', '1', '', '2024-10-15 01:59:04', '2024-10-15 01:59:04', null);
INSERT INTO data_elemen VALUES ('73', '71', null, '1', '5', 'Perempuan', '670dcc69a3348', '-', '1', '1', '', '2024-10-15 01:59:14', '2024-10-15 01:59:14', null);
INSERT INTO data_elemen VALUES ('74', '0', null, '1', '5', 'Jumlah Satgas Perlindungan Perempuan dan Anak', '670dcc7608ffc', '-', '1', '1', '', '2024-10-15 01:59:39', '2024-10-15 01:59:39', null);
INSERT INTO data_elemen VALUES ('75', '74', null, '1', '5', 'Laki-laki', '670dcc8d61001', '-', '1', '1', '', '2024-10-15 01:59:52', '2024-10-15 01:59:52', null);
INSERT INTO data_elemen VALUES ('76', '74', null, '1', '5', 'Perempuan', '670dcc99a1194', '-', '1', '1', '', '2024-10-15 02:00:06', '2024-10-15 02:00:06', null);
INSERT INTO data_elemen VALUES ('77', '0', null, '1', '5', 'Jumlah Lembaga Peduli Perempuan Yang Aktif', '670dccaf47273', '-', '1', '1', '', '2024-10-15 02:00:32', '2024-10-15 02:00:32', null);
INSERT INTO data_elemen VALUES ('78', '0', null, '2', '6', 'Jumlah Anak', '670dcce4ebed2', '-', '1', '1', '', '2024-10-15 02:01:30', '2024-10-15 02:01:30', null);
INSERT INTO data_elemen VALUES ('79', '78', null, '2', '6', 'Laki-laki', '670dccfe5d9c6', '-', '1', '1', '', '2024-10-15 02:01:49', '2024-10-15 02:01:49', null);
INSERT INTO data_elemen VALUES ('80', '78', null, '2', '6', 'Perempuan', '670dcd0f47abe', '-', '1', '1', '', '2024-10-15 02:02:02', '2024-10-15 02:02:02', null);
INSERT INTO data_elemen VALUES ('81', '0', null, '2', '7', 'Jumlah Anak Yang Memiliki Akta Kelahiran', '670dcd23743ba', '-', '1', '1', '', '2024-10-15 02:02:37', '2024-10-15 02:02:37', null);
INSERT INTO data_elemen VALUES ('82', '81', null, '2', '7', 'Laki-laki', '670dcd3ea776d', '-', '1', '1', '', '2024-10-15 02:02:50', '2024-10-15 02:02:50', null);
INSERT INTO data_elemen VALUES ('83', '81', null, '2', '7', 'Perempuan', '670dcd4bcc5b7', '-', '1', '1', '', '2024-10-15 02:03:03', '2024-10-15 02:03:03', null);
INSERT INTO data_elemen VALUES ('84', '0', null, '2', '7', 'Jumlah Anak Yang Memiliki KIA', '670dcd6d10be1', '-', '1', '1', '', '2024-10-15 02:03:48', '2024-10-15 02:03:48', null);
INSERT INTO data_elemen VALUES ('85', '84', null, '2', '7', 'Laki-laki', '670dcd8d0de51', '-', '1', '1', '', '2024-10-15 02:04:36', '2024-10-15 02:04:36', null);
INSERT INTO data_elemen VALUES ('86', '84', null, '2', '7', 'Perempuan', '670dcdb9e1409', '-', '1', '1', '', '2024-10-15 02:04:52', '2024-10-15 02:04:52', null);
INSERT INTO data_elemen VALUES ('87', '0', null, '2', '8', 'Jumlah Balita Stunting', '670de76733242', '-', '1', '1', '', '2024-10-15 03:54:41', '2024-10-15 03:54:41', null);
INSERT INTO data_elemen VALUES ('88', '87', null, '2', '8', 'Laki-laki', '670de787910b8', '-', '1', '1', '', '2024-10-15 03:55:11', '2024-10-15 03:55:11', null);
INSERT INTO data_elemen VALUES ('89', '87', null, '2', '8', 'Perempuan', '670de7a142e75', '-', '1', '1', '', '2024-10-15 03:55:24', '2024-10-15 03:55:24', null);
INSERT INTO data_elemen VALUES ('90', '0', null, '2', '8', 'Jumlah Kematian Bayi', '670de7b6038a9', '-', '1', '1', '', '2024-10-15 03:55:53', '2024-10-15 03:55:53', null);
INSERT INTO data_elemen VALUES ('91', '90', null, '2', '8', 'Laki-laki', '670de7caf2142', '-', '1', '1', '', '2024-10-15 03:56:05', '2024-10-15 03:56:05', null);
INSERT INTO data_elemen VALUES ('92', '90', null, '2', '8', 'Perempuan', '670de7e325a21', '-', '1', '1', '', '2024-10-15 03:56:30', '2024-10-15 03:56:30', null);
INSERT INTO data_elemen VALUES ('93', '0', null, '2', '8', 'Jumlah Kematian Balita', '670de7f5e6f3e', '-', '1', '1', '', '2024-10-15 03:56:54', '2024-10-15 03:56:54', null);
INSERT INTO data_elemen VALUES ('94', '93', null, '2', '8', 'Laki-laki', '670de807bea97', '-', '1', '1', '', '2024-10-15 03:57:08', '2024-10-15 03:57:08', null);
INSERT INTO data_elemen VALUES ('95', '93', null, '2', '8', 'Perempuan', '670de815a850a', '-', '1', '1', '', '2024-10-15 03:57:21', '2024-10-15 03:57:21', null);
INSERT INTO data_elemen VALUES ('96', '0', null, '2', '8', 'Anak Gizi Lebih', '670de83351e77', '-', '1', '1', '', '2024-10-15 03:57:51', '2024-10-15 03:57:51', null);
INSERT INTO data_elemen VALUES ('97', '96', null, '2', '8', 'Laki-laki', '670de841794a9', '-', '1', '1', '', '2024-10-15 03:58:04', '2024-10-15 03:58:04', null);
INSERT INTO data_elemen VALUES ('98', '96', null, '2', '8', 'Perempuan', '670de8523033f', '-', '1', '1', '', '2024-10-15 03:58:29', '2024-10-15 03:58:29', null);
INSERT INTO data_elemen VALUES ('99', '0', null, '2', '8', 'Anak Gizi Kurang', '670de86d6dfbc', '-', '1', '1', '', '2024-10-15 03:58:51', '2024-10-15 03:58:51', null);
INSERT INTO data_elemen VALUES ('100', '99', null, '2', '8', 'Laki-laki', '670de87d07534', '-', '1', '1', '', '2024-10-15 03:59:05', '2024-10-15 03:59:05', null);
INSERT INTO data_elemen VALUES ('101', '99', null, '2', '8', 'Perempuan', '670de88b2dc66', '-', '1', '1', '', '2024-10-15 03:59:19', '2024-10-15 03:59:19', null);
INSERT INTO data_elemen VALUES ('102', '0', null, '2', '8', 'Jumlah Bina Keluarga Balita (BKB)', '670de8a05e4b7', '-', '1', '1', '', '2024-10-15 03:59:48', '2024-10-15 03:59:48', null);
INSERT INTO data_elemen VALUES ('103', '0', null, '2', '8', 'Jumlah Bina Keluarga Remaja (BKR)', '670de8b5e56fd', '-', '1', '1', '', '2024-10-15 04:00:10', '2024-10-15 04:00:10', null);
INSERT INTO data_elemen VALUES ('104', '0', null, '2', '8', 'Posyandu Balita', '670de8cca408b', '-', '1', '1', '', '2024-10-15 04:00:25', '2024-10-15 04:00:25', null);
INSERT INTO data_elemen VALUES ('105', '0', null, '2', '8', 'Posyandu Remaja', '670de8db92d46', '-', '1', '1', '', '2024-10-15 04:00:39', '2024-10-15 04:00:39', null);
INSERT INTO data_elemen VALUES ('106', '0', null, '2', '8', 'Jumlah Ruang Bermain Anak', '670de8f3edbe1', '-', '1', '1', '', '2024-10-15 04:01:09', '2024-10-15 04:01:09', null);
INSERT INTO data_elemen VALUES ('107', '106', null, '2', '8', 'Tempat Publik', '670de91d8800d', '-', '1', '1', '', '2024-10-15 04:02:08', '2024-10-15 04:02:08', null);
INSERT INTO data_elemen VALUES ('108', '106', null, '2', '8', 'Instansi Pemerintah', '670de942c9273', '-', '1', '1', '', '2024-10-15 04:02:29', '2024-10-15 04:02:29', null);
INSERT INTO data_elemen VALUES ('109', '106', null, '2', '8', 'Instansi Non Pemerintah', '670de9571456a', '-', '1', '1', '', '2024-10-15 04:02:50', '2024-10-15 04:02:50', null);
INSERT INTO data_elemen VALUES ('110', '106', null, '2', '8', 'Desa/Kelurahan/Kecamatan', '670de96e0e4bf', '-', '1', '1', '', '2024-10-15 04:03:20', '2024-10-15 04:03:20', null);
INSERT INTO data_elemen VALUES ('111', '0', null, '2', '8', 'Jumlah Ruang Bermain Ramah Anak', '670de99a200ed', '-', '1', '1', '', '2024-10-15 04:03:59', '2024-10-15 04:03:59', null);
INSERT INTO data_elemen VALUES ('112', '0', null, '2', '8', 'Ruang Laktasi', '670de9b271ad9', '-', '1', '1', '', '2024-10-15 04:05:58', '2024-10-15 04:05:58', null);
INSERT INTO data_elemen VALUES ('113', '112', null, '2', '8', 'Di Tempat Umum', '670dea29cc3ed', '-', '1', '1', '', '2024-10-15 04:06:19', '2024-10-15 04:06:19', null);
INSERT INTO data_elemen VALUES ('114', '112', null, '2', '8', 'Di Instansi Pemerintah', '670dea3d53cd1', '-', '1', '1', '', '2024-10-15 04:06:49', '2024-10-15 04:06:49', null);
INSERT INTO data_elemen VALUES ('115', '112', null, '2', '8', 'Di Instansi Non Pemerintah', '670dea5b17c5e', '-', '1', '1', '', '2024-10-15 04:07:18', '2024-10-15 04:07:18', null);
INSERT INTO data_elemen VALUES ('116', '0', null, '2', '8', 'Jumlah LKSA (Lembaga Kesejahteraan Sosial Anak)', '670dea832ee53', '-', '1', '1', '', '2024-10-15 04:07:55', '2024-10-15 04:07:55', null);
INSERT INTO data_elemen VALUES ('117', '0', null, '2', '9', 'Jumlah Pengurus Forum Anak Di Semua Tingkatan', '670dead16cd5f', '-', '1', '1', '', '2024-10-15 04:11:03', '2024-10-15 04:11:03', null);
INSERT INTO data_elemen VALUES ('118', '117', null, '2', '9', 'Kota/Kabupaten', '670debc61467a', '-', '1', '1', '', '2024-10-15 04:13:20', '2024-10-15 04:13:20', null);
INSERT INTO data_elemen VALUES ('119', '118', null, '2', '9', 'Laki-laki', '670debe1e9daf', '-', '1', '1', '', '2024-10-15 04:13:49', '2024-10-15 04:13:49', null);
INSERT INTO data_elemen VALUES ('120', '118', null, '2', '9', 'Perempuan', '670debff2c581', '-', '1', '1', '', '2024-10-15 04:14:06', '2024-10-15 04:14:06', null);
INSERT INTO data_elemen VALUES ('121', '117', null, '2', '9', 'Kecamatan', '670dec190b2bc', '-', '1', '1', '', '2024-10-15 04:14:55', '2024-10-15 04:14:55', null);
INSERT INTO data_elemen VALUES ('122', '121', null, '2', '9', 'Laki-laki', '670dec4155131', '-', '1', '1', '', '2024-10-15 04:15:08', '2024-10-15 04:15:08', null);
INSERT INTO data_elemen VALUES ('123', '121', null, '2', '9', 'Perempuan', '670dec5522c80', '-', '1', '1', '', '2024-10-15 04:15:36', '2024-10-15 04:15:36', null);
INSERT INTO data_elemen VALUES ('124', '117', null, '2', '9', 'Desa', '670dec77b93ad', '-', '1', '1', '', '2024-10-15 04:16:15', '2024-10-15 04:16:15', null);
INSERT INTO data_elemen VALUES ('125', '124', null, '2', '9', 'Laki-laki', '670dec950d13f', '-', '1', '1', '', '2024-10-15 04:16:34', '2024-10-15 04:16:34', null);
INSERT INTO data_elemen VALUES ('126', '124', null, '2', '9', 'Perempuan', '670deca4bd75b', '-', '1', '1', '', '2024-10-15 04:16:46', '2024-10-15 04:16:46', null);
INSERT INTO data_elemen VALUES ('127', '0', null, '2', '9', 'Jumlah Anak Putus Sekolah', '670decbdcb00f', '-', '1', '1', '', '2024-10-15 04:17:26', '2024-10-15 04:17:26', null);
INSERT INTO data_elemen VALUES ('128', '127', null, '2', '9', 'Laki-laki', '670decdc202fa', '-', '1', '1', '', '2024-10-15 04:17:48', '2024-10-15 04:17:48', null);
INSERT INTO data_elemen VALUES ('129', '127', null, '2', '9', 'Perempuan', '670decee26bef', '-', '1', '1', '', '2024-10-15 04:18:01', '2024-10-15 04:18:01', null);
INSERT INTO data_elemen VALUES ('130', '0', null, '2', '9', 'Jumlah Anak Usia Sekolah Yang Tidak Bersekolah', '670ded44c36d5', '-', '1', '1', '', '2024-10-15 04:19:37', '2024-10-15 04:19:37', null);
INSERT INTO data_elemen VALUES ('131', '130', null, '2', '9', 'Laki-laki', '670ded5a7134e', '-', '1', '1', '', '2024-10-15 04:19:51', '2024-10-15 04:19:51', null);
INSERT INTO data_elemen VALUES ('132', '130', null, '2', '9', 'Perempuan', '670ded68ccb66', '-', '1', '1', '', '2024-10-15 04:20:05', '2024-10-15 04:20:05', null);
INSERT INTO data_elemen VALUES ('133', '0', null, '2', '9', 'Jumlah Sekolah', '670ded802c3ce', '-', '1', '1', '', '2024-10-15 04:20:26', '2024-10-15 04:20:26', null);
INSERT INTO data_elemen VALUES ('134', '133', null, '2', '9', 'Paud/Tk/Ra', '670ded8c2e7bf', '-', '1', '1', '', '2024-10-15 04:20:48', '2024-10-15 04:20:48', null);
INSERT INTO data_elemen VALUES ('135', '133', null, '2', '9', 'SD', '670deda239964', '-', '1', '1', '', '2024-10-15 04:21:09', '2024-10-15 04:21:09', null);
INSERT INTO data_elemen VALUES ('136', '133', null, '2', '9', 'M.I', '670dedc53d000', '-', '1', '1', '', '2024-10-15 04:21:44', '2024-10-15 04:21:44', null);
INSERT INTO data_elemen VALUES ('137', '133', null, '2', '9', 'SMP', '670dedda4fbff', '-', '1', '1', '', '2024-10-15 04:22:03', '2024-10-15 04:22:03', null);
INSERT INTO data_elemen VALUES ('138', '133', null, '2', '9', 'MTS', '670dedece4894', '-', '1', '1', '', '2024-10-15 04:22:35', '2024-10-15 04:22:35', null);
INSERT INTO data_elemen VALUES ('139', '133', null, '2', '9', 'SMA', '670dee0dd365d', '-', '1', '1', '', '2024-10-15 04:22:50', '2024-10-15 04:22:50', null);
INSERT INTO data_elemen VALUES ('140', '133', null, '2', '9', 'SMK', '670dee1bf361d', '-', '1', '1', '', '2024-10-15 04:23:06', '2024-10-15 04:23:06', null);
INSERT INTO data_elemen VALUES ('141', '133', null, '2', '9', 'M.A', '670dee2b7f0e0', '-', '1', '1', '', '2024-10-15 04:23:34', '2024-10-15 04:23:34', null);
INSERT INTO data_elemen VALUES ('142', '0', null, '2', '9', 'Jumlah Sekolah Ramah Anak', '670deed915d86', '-', '1', '1', '', '2024-10-15 04:26:14', '2024-10-15 04:26:14', null);
INSERT INTO data_elemen VALUES ('143', '142', null, '2', '9', 'Paud/Tk/Ra', '670deee8936a2', '-', '1', '1', '', '2024-10-15 04:26:34', '2024-10-15 04:26:34', null);
INSERT INTO data_elemen VALUES ('144', '142', null, '2', '9', 'SD', '670deefba9a48', '-', '1', '1', '', '2024-10-15 04:26:55', '2024-10-15 04:26:55', null);
INSERT INTO data_elemen VALUES ('145', '142', null, '2', '9', 'M.I', '670def115d318', '-', '1', '1', '', '2024-10-15 04:27:12', '2024-10-15 04:27:12', null);
INSERT INTO data_elemen VALUES ('146', '142', null, '2', '9', 'SMP', '670def21ca76c', '-', '1', '1', '', '2024-10-15 04:27:30', '2024-10-15 04:27:30', null);
INSERT INTO data_elemen VALUES ('147', '142', null, '2', '9', 'MTS', '670def33ebdff', '-', '1', '1', '', '2024-10-15 04:27:46', '2024-10-15 04:27:46', null);
INSERT INTO data_elemen VALUES ('148', '142', null, '2', '9', 'SMA', '670def4409449', '-', '1', '1', '', '2024-10-15 04:28:05', '2024-10-15 04:28:05', null);
INSERT INTO data_elemen VALUES ('149', '142', null, '2', '9', 'SMK', '670def622648f', '-', '1', '1', '', '2024-10-15 04:28:33', '2024-10-15 04:28:33', null);
INSERT INTO data_elemen VALUES ('150', '142', null, '2', '9', 'M.A', '670def72f1781', '-', '1', '1', '', '2024-10-15 04:28:56', '2024-10-15 04:28:56', null);
INSERT INTO data_elemen VALUES ('151', '0', null, '2', '9', 'Jumlah Sekolah Ramah Anak Yang Terstandarisasi', '670def959d2f9', '-', '1', '1', '', '2024-10-15 04:29:30', '2024-10-15 04:29:30', null);
INSERT INTO data_elemen VALUES ('152', '0', null, '2', '9', 'Jumlah Sekolah Anak Berkebutuhan Khusus', '670defac1dacc', '-', '1', '1', '', '2024-10-15 04:29:48', '2024-10-15 04:29:48', null);
INSERT INTO data_elemen VALUES ('153', '0', null, '2', '9', 'Jumlah Pelayanan Ramah Anak di Puskesmas', '670defbe5ebec', '-', '1', '1', '', '2024-10-15 04:30:10', '2024-10-15 04:30:10', null);
INSERT INTO data_elemen VALUES ('154', '0', null, '2', '9', 'Jumlah Pelayanan Ramah Anak di Puskesmas Yang Terstandarisasi', '670defd3c20c4', '-', '1', '1', '', '2024-10-15 04:30:46', '2024-10-15 04:30:46', null);
INSERT INTO data_elemen VALUES ('155', '0', null, '2', '9', 'Rumah Ibadah Ramah Anak', '670deff7e9208', '-', '1', '1', '', '2024-10-15 04:31:06', '2024-10-15 04:31:06', null);
INSERT INTO data_elemen VALUES ('156', '0', null, '2', '9', 'Jumlah Pusat Informasi Layak Anak', '670df00e2904f', '-', '1', '1', '', '2024-10-15 04:31:28', '2024-10-15 04:31:28', null);
INSERT INTO data_elemen VALUES ('157', '0', null, '2', '9', 'Jumlah Pusat Informasi Sahabat Anak Yang Terstandarisasi', '670df022c2f67', '-', '1', '1', '', '2024-10-15 04:31:55', '2024-10-15 04:31:55', null);
INSERT INTO data_elemen VALUES ('158', '0', null, '2', '9', 'Jumlah Pusat Kreatifitas Anak', '670df04d2a954', '-', '1', '1', '', '2024-10-15 04:32:29', '2024-10-15 04:32:29', null);
INSERT INTO data_elemen VALUES ('159', '0', null, '2', '9', 'Jumlah Puspaga', '670df05ea9321', '-', '1', '1', '', '2024-10-15 04:32:48', '2024-10-15 04:32:48', null);
INSERT INTO data_elemen VALUES ('160', '0', null, '2', '9', 'Jumlah Puspaga Terstandarisasi', '670df07242803', '-', '1', '1', '', '2024-10-15 04:33:06', '2024-10-15 04:33:06', null);
INSERT INTO data_elemen VALUES ('161', '0', null, '2', '9', 'LPKRA (Lembaga Perlindungan Khusus Ramah Anak)', '670df088dd632', '-', '1', '1', '', '2024-10-15 04:33:43', '2024-10-15 04:33:43', null);
INSERT INTO data_elemen VALUES ('162', '0', null, '2', '9', 'DRPPA (Desa Ramah Perempuan Peduli Anak)', '670df0a956e6a', '-', '1', '1', null, '2024-10-15 04:34:06', '2024-10-15 04:36:45', null);
INSERT INTO data_elemen VALUES ('163', '0', null, '2', '9', 'DEKELA (Desa/Kelurahan Layak Anak)', '670df0c060b83', '-', '1', '1', '-', '2024-10-15 04:34:34', '2024-10-15 04:36:02', null);
INSERT INTO data_elemen VALUES ('164', '0', null, '2', '9', 'KELANA (KECAMATAN LAYAK ANAK)', '670df0dbed43b', '-', '1', '1', '', '2024-10-15 04:35:06', '2024-10-15 04:35:06', null);
INSERT INTO data_elemen VALUES ('165', '0', null, '2', '9', 'ILA (Informasi Layak Anak)', '670df176af93e', '-', '1', '1', '', '2024-10-15 04:37:33', '2024-10-15 04:37:33', null);
INSERT INTO data_elemen VALUES ('166', '165', null, '2', '9', 'Perpustakaan Daerah', '670df1f2c4dfa', '-', '1', '1', '', '2024-10-15 04:39:34', '2024-10-15 04:39:34', null);
INSERT INTO data_elemen VALUES ('167', '165', null, '2', '9', 'Perpustakaan Desa', '670df2083b6d1', '-', '1', '1', '', '2024-10-15 04:39:51', '2024-10-15 04:39:51', null);
INSERT INTO data_elemen VALUES ('168', '165', null, '2', '9', 'Pojok Baca', '670df2191bf8f', '-', '1', '1', '', '2024-10-15 04:40:15', '2024-10-15 04:40:15', null);
INSERT INTO data_elemen VALUES ('169', '0', null, '2', '9', 'Jumlah Anak Yang Berkunjung Ke Perpustakaan', '670df24c7ab93', '-', '1', '1', '', '2024-10-15 04:41:16', '2024-10-15 04:41:16', null);
INSERT INTO data_elemen VALUES ('170', '169', null, '2', '9', 'Laki-laki', '670df26e2e4d3', '-', '1', '1', '', '2024-10-15 04:41:32', '2024-10-15 04:41:32', null);
INSERT INTO data_elemen VALUES ('171', '169', null, '2', '9', 'Perempuan', '670df27d551fd', '-', '1', '1', '', '2024-10-15 04:41:46', '2024-10-15 04:41:46', null);
INSERT INTO data_elemen VALUES ('172', '0', null, '2', '9', 'Taman Pengasuhan ramah Anak/TPA', '670df28e88713', '-', '1', '1', '', '2024-10-15 04:44:09', '2024-10-15 04:44:09', null);
INSERT INTO data_elemen VALUES ('173', '0', null, '2', '9', 'Taman Pendidikan Alquran', '670df3248ff5f', '-', '1', '1', '', '2024-10-15 04:44:35', '2024-10-15 04:44:35', null);
INSERT INTO data_elemen VALUES ('174', '0', null, '2', '9', 'Jumlah Perusahaan Sahabat Anak', '670df336b3a42', '-', '1', '1', '', '2024-10-15 04:44:55', '2024-10-15 04:44:55', null);
INSERT INTO data_elemen VALUES ('175', '0', null, '2', '10', 'Tenaga Kerja Anak', '670df90bd871b', '-', '1', '1', '', '2024-10-15 05:09:49', '2024-10-15 05:09:49', null);
INSERT INTO data_elemen VALUES ('176', '175', null, '2', '10', 'Laki-laki', '670df9217203d', '-', '1', '1', '', '2024-10-15 05:10:04', '2024-10-15 05:10:04', null);
INSERT INTO data_elemen VALUES ('177', '175', null, '2', '10', 'Perempuan', '670df92e702fc', '-', '1', '1', '', '2024-10-15 05:10:16', '2024-10-15 05:10:16', null);
INSERT INTO data_elemen VALUES ('178', '0', null, '2', '10', 'Jumlah Anak Terlantar', '670df94247c39', '-', '1', '1', '', '2024-10-15 05:12:06', '2024-10-15 05:12:06', null);
INSERT INTO data_elemen VALUES ('179', '178', null, '2', '10', 'Laki-laki', '670df9a7f34a5', '-', '1', '1', '', '2024-10-15 05:12:38', '2024-10-15 05:12:38', null);
INSERT INTO data_elemen VALUES ('180', '178', null, '2', '10', 'Perempuan', '670df9c7f32a3', '-', '1', '1', '', '2024-10-15 05:13:31', '2024-10-15 05:13:31', null);
INSERT INTO data_elemen VALUES ('181', '0', null, '2', '10', 'Jumlah Anak Yang Berhadapan Dengan Hukum', '670dfa2a2882a', '-', '1', '1', '', '2024-10-15 05:15:17', '2024-10-15 05:15:17', null);
INSERT INTO data_elemen VALUES ('182', '181', null, '2', '10', 'Saksi', '670dfa6748148', '-', '1', '1', '', '2024-10-15 05:15:40', '2024-10-15 05:15:40', null);
INSERT INTO data_elemen VALUES ('183', '182', null, '2', '10', 'Laki-laki', '670dfa7dddc2f', '-', '1', '1', '', '2024-10-15 05:16:07', '2024-10-15 05:16:07', null);
INSERT INTO data_elemen VALUES ('184', '182', null, '2', '10', 'Perempuan', '670dfa9929578', '-', '1', '1', '', '2024-10-15 05:16:20', '2024-10-15 05:16:20', null);
INSERT INTO data_elemen VALUES ('185', '181', null, '2', '10', 'Korban', '670dfaa886d77', '-', '1', '1', '', '2024-10-15 05:16:39', '2024-10-15 05:16:39', null);
INSERT INTO data_elemen VALUES ('186', '185', null, '2', '10', 'Laki-laki', '670dfab9159e6', '-', '1', '1', '', '2024-10-15 05:17:01', '2024-10-15 05:17:01', null);
INSERT INTO data_elemen VALUES ('187', '185', null, '2', '10', 'Perempuan', '670dfacf5650f', '-', '1', '1', '', '2024-10-15 05:17:17', '2024-10-15 05:17:17', null);
INSERT INTO data_elemen VALUES ('188', '181', null, '2', '10', 'Pelaku', '670dfae213d48', '-', '1', '1', '', '2024-10-15 05:17:38', '2024-10-15 05:17:38', null);
INSERT INTO data_elemen VALUES ('189', '188', null, '2', '10', 'Laki-laki', '670dfaf46df44', '-', '1', '1', '', '2024-10-15 05:17:56', '2024-10-15 05:17:56', null);
INSERT INTO data_elemen VALUES ('190', '188', null, '2', '10', 'Perempuan', '670dfb068bee6', '-', '1', '1', '', '2024-10-15 05:18:09', '2024-10-15 05:18:09', null);
INSERT INTO data_elemen VALUES ('191', '0', null, '2', '10', 'Jumlah Anak Berkebutuhan Khusus', '670dfb2079942', '-', '1', '1', '', '2024-10-15 05:19:52', '2024-10-15 05:19:52', null);
INSERT INTO data_elemen VALUES ('192', '191', null, '2', '10', 'Laki-laki', '670dfb7c90cce', '-', '1', '1', '', '2024-10-15 05:20:08', '2024-10-15 05:20:08', null);
INSERT INTO data_elemen VALUES ('193', '191', null, '2', '10', 'Perempuan', '670dfb8a991eb', '-', '1', '1', '', '2024-10-15 05:20:42', '2024-10-15 05:20:42', null);
INSERT INTO data_elemen VALUES ('194', '0', null, '2', '10', 'Jumlah Perkawinan Usia Anak', '670dfbc516272', '-', '1', '1', '', '2024-10-15 05:21:33', '2024-10-15 05:21:33', null);
INSERT INTO data_elemen VALUES ('195', '194', null, '2', '10', 'Laki-laki', '670dfbdfb4e3d', '-', '1', '1', '', '2024-10-15 05:21:53', '2024-10-15 05:21:53', null);
INSERT INTO data_elemen VALUES ('196', '194', null, '2', '10', 'Perempuan', '670dfbf33a2ab', '-', '1', '1', '', '2024-10-15 05:22:09', '2024-10-15 05:22:09', null);
INSERT INTO data_elemen VALUES ('197', '0', null, '2', '10', 'Jumlah Anak Yang Menjadi Korban Kekerasan', '670dfc0f90a13', '-', '1', '1', '', '2024-10-15 05:22:43', '2024-10-15 05:22:43', null);
INSERT INTO data_elemen VALUES ('198', '197', null, '2', '10', 'Laki-laki', '670dfc26762f9', '-', '1', '1', '', '2024-10-15 05:23:01', '2024-10-15 05:23:01', null);
INSERT INTO data_elemen VALUES ('199', '197', null, '2', '10', 'Perempuan', '670dfc3696dc2', '-', '1', '1', '', '2024-10-15 05:23:13', '2024-10-15 05:23:13', null);
INSERT INTO data_elemen VALUES ('200', '0', null, '2', '10', 'Jumlah Anak Korban Kekerasan Berdasarkan Jenis Kekerasan', '670dfc43ec4ff', '-', '1', '1', '', '2024-10-15 05:23:38', '2024-10-15 05:23:38', null);
INSERT INTO data_elemen VALUES ('201', '200', null, '2', '10', 'FISIK', '670dfc5c8f784', '-', '1', '1', '', '2024-10-15 05:24:00', '2024-10-15 05:24:00', null);
INSERT INTO data_elemen VALUES ('202', '200', null, '2', '10', 'Psikis', '670dfc7240c7e', '-', '1', '1', '', '2024-10-15 05:24:21', '2024-10-15 05:24:21', null);
INSERT INTO data_elemen VALUES ('203', '200', null, '2', '10', 'Seksual', '670dfc877df0a', '-', '1', '1', '', '2024-10-15 05:24:41', '2024-10-15 05:24:41', null);
INSERT INTO data_elemen VALUES ('204', '200', null, '2', '10', 'Eksploitasi', '670dfc9ae6ec2', '-', '1', '1', '', '2024-10-15 05:24:56', '2024-10-15 05:24:56', null);
INSERT INTO data_elemen VALUES ('205', '200', null, '2', '10', 'Trafficking', '670dfcaa2f605', '-', '1', '1', '', '2024-10-15 05:25:11', '2024-10-15 05:25:11', null);
INSERT INTO data_elemen VALUES ('206', '200', null, '2', '10', 'Penelantaraan', '670dfcb968c56', '-', '1', '1', '', '2024-10-15 05:25:33', '2024-10-15 05:25:33', null);
INSERT INTO data_elemen VALUES ('207', '200', null, '2', '10', 'Lainnya', '670dfccf7f321', '-', '1', '1', '', '2024-10-15 05:25:50', '2024-10-15 05:25:50', null);
INSERT INTO data_elemen VALUES ('208', '0', null, '2', '10', 'Jumlah Aktifis PATBM', '670dfce389188', '-', '1', '1', '', '2024-10-15 05:26:15', '2024-10-15 05:26:15', null);
INSERT INTO data_elemen VALUES ('209', '208', null, '2', '10', 'Kabupaten', '670dfd056fc5a', '-', '1', '1', '', '2024-10-15 05:26:51', '2024-10-15 05:26:51', null);
INSERT INTO data_elemen VALUES ('210', '209', null, '2', '10', 'Laki-laki', '670dfd1c89e8f', '-', '1', '1', '', '2024-10-15 05:27:04', '2024-10-15 05:27:04', null);
INSERT INTO data_elemen VALUES ('211', '209', null, '2', '10', 'Perempuan', '670dfd2a5092f', '-', '1', '1', '', '2024-10-15 05:27:18', '2024-10-15 05:27:18', null);
INSERT INTO data_elemen VALUES ('212', '208', null, '2', '10', 'Desa/Kelurahan', '670dfd3ea098f', '-', '1', '1', '', '2024-10-15 05:27:44', '2024-10-15 05:27:44', null);
INSERT INTO data_elemen VALUES ('213', '212', null, '2', '10', 'Laki-laki', '670dfd51b8bf6', '-', '1', '1', '', '2024-10-15 05:28:02', '2024-10-15 05:28:02', null);
INSERT INTO data_elemen VALUES ('214', '212', null, '2', '10', 'Perempuan', '670dfd63a478c', '-', '1', '1', '', '2024-10-15 05:28:13', '2024-10-15 05:28:13', null);
INSERT INTO data_elemen VALUES ('215', '0', null, '2', '10', 'Jumlah Fasilitator PATBM', '670dfd7b04c34', '-', '1', '1', '', '2024-10-15 05:28:45', '2024-10-15 05:28:45', null);
INSERT INTO data_elemen VALUES ('216', '215', null, '2', '10', 'Laki-laki', '670dfd8ed93e2', '-', '1', '1', '', '2024-10-15 05:28:59', '2024-10-15 05:28:59', null);
INSERT INTO data_elemen VALUES ('217', '215', null, '2', '10', 'Perempuan', '670dfd9ca24d9', '-', '1', '1', '', '2024-10-15 05:29:10', '2024-10-15 05:29:10', null);
INSERT INTO data_elemen VALUES ('218', '0', null, '2', '10', 'Jumlah Lembaga Masyarakat Peduli Anak Yang Aktif', '670dfdaa482d9', '-', '1', '1', '', '2024-10-15 05:29:33', '2024-10-15 05:29:33', null);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of nilai_elemen
-- ----------------------------
