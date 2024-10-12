/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : laravel_siganak

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2024-10-12 13:17:15
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `data_artikel`
-- ----------------------------
DROP TABLE IF EXISTS `data_artikel`;
CREATE TABLE `data_artikel` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `alias` varchar(100) DEFAULT NULL,
  `judul` varchar(200) DEFAULT NULL,
  `teaser` varchar(200) DEFAULT '',
  `isi` text DEFAULT NULL,
  `file_foto` varchar(200) DEFAULT NULL,
  `file_download` varchar(200) DEFAULT NULL,
  `inputby` varchar(100) DEFAULT NULL,
  `tglinput` date DEFAULT NULL,
  `status_publish` char(1) DEFAULT '',
  `tgl_publish` date DEFAULT NULL,
  `ket` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of data_artikel
-- ----------------------------
INSERT INTO data_artikel VALUES ('1', '667e1b45ccca6', 'Publikasi tes', '<p>asd asdas asd asd asd asdasd asdas dasdasd asdasd qweq qwe qwe qwe qwe qwe</p><p>asd aasd asd a</p><p>asd asdasdasd dasd asss sddsd</p>', null, 'file_foto_667e1b45ccca6.jpg', 'file_file_667e1b45ccca6.pdf', null, '2024-06-28', null, null, null, '2024-06-28 02:10:02', '2024-06-28 03:21:33', null);
INSERT INTO data_artikel VALUES ('2', '667e2fcb4c6c8', 'pub 2', '<p>asd asdasd</p>', null, 'file_foto_667e2fcb4c6c8.jpg', 'file_file_667e2fcb4c6c8.pdf', null, '2024-06-27', null, null, null, '2024-06-28 03:37:13', '2024-06-28 03:37:31', '2024-06-28 03:37:31');
