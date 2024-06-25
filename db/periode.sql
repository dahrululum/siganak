/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : laravel_siganak

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2024-06-25 12:48:53
*/

SET FOREIGN_KEY_CHECKS=0;
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
