/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : laravel_siganak

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2024-11-05 14:48:54
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `data_forumanak`
-- ----------------------------
DROP TABLE IF EXISTS `data_forumanak`;
CREATE TABLE `data_forumanak` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `alias` varchar(100) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `teaser` text DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `file_foto` varchar(255) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `inputby` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of data_forumanak
-- ----------------------------
INSERT INTO data_forumanak VALUES ('1', '6729b87685099', 'Visi Misi', null, '<p><b>Visi dari PT. Bangka Media Grafika adalah sebagai berikut :\r\n</b></p><ol><li>Menjadi Lembaga pers yang terpercaya\r\n</li><li>Memberikan pencerahan, mendorong demokratisasi dan keadilan sosial  bagi masyarakat Bangka Belitung yang bermartabat\r\n</li></ol><p><b>Misi PT. Bangka Media Grafika adalah sebagai berikut :\r\n</b></p><ol><li>Menyediakan informasi yang terpercaya dan akses potensial bagi pembaca\r\n</li><li>Pengiklan dan mitra kerja dengan layanan yang optimal dan professional\r\n</li></ol>', null, '1', 'admin', '2024-11-05 06:17:34', '2024-11-05 06:27:25', null);
INSERT INTO data_forumanak VALUES ('2', '6729bb2235201', 'Sejarah', null, '<p>PT. Bangka Media Grafika adalah perusahaan yang bergerak dalam bidang media percetakan. Perusahaan ini didirikan pada tanggal 25 Mei 1999, yang di pimpin oleh Bapak Daryono sebagai pimpinan perusahaan dan Bapak Agus Ismunarno Sebagai pimpinan redaksi dan pimpinan umum.</p><p>Harian Pagi Bangka Pos merupakan koran lokal pertama di Provinsi Kepulauan Bangka Belitung. Koran Bangka Pos tanggal 25 Mei 1999 terbit pertama kali dengan motto “Yo Kite Punye Provinsi!” (Ayo kita punya Provinsi!), Harian ini ikut menjadi saksi dan penggerak sejarah terbentuknya Provinsi ke-33 di Republik Indonesia yang telah diidamkan seluruh masyarakat Bangka Belitung. Setelah provinsi terwujud, koran ini bersemboyan “Yo Kite Bangun Provinsi!” (Ayo Kita Bangun Provinsi).</p><div><br></div>', null, '1', 'admin', '2024-11-05 06:29:17', '2024-11-05 06:29:17', null);
INSERT INTO data_forumanak VALUES ('3', '6729bb517d208', 'Struktur Organisasi', null, '<p>Berikut adalah Struktur Organisasi :</p>', 'profilfa_foto_6729bb517d208_063127.JPG', '1', 'admin', '2024-11-05 06:30:43', '2024-11-05 06:31:29', null);
