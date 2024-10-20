/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : laravel_siganak

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2024-10-18 21:40:00
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of data_artikel
-- ----------------------------
INSERT INTO data_artikel VALUES ('1', '667e1b45ccca6', 'Memotivasi Anak di LPKA, Asyraf: Banyak Orang Berhasil Setelah Melalui Tempaan', 'Anak binaan Lembaga Pembinaan Khusus Anak (LPKA) Kelas II Pangkalpinang antusias saat mengikuti kegiatan membuat karya fiksi, Jumat (4/10/2025).', '<p style=\"margin: 1.5em 0px; margin-block: 1em; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif;\">Pangkalpinang - Anak binaan Lembaga Pembinaan Khusus Anak (LPKA) Kelas II Pangkalpinang antusias saat mengikuti kegiatan membuat karya fiksi, Jumat (4/10/2025). Melalui kegiatan ini diharapkan anak-anak mampu membuat karya terbaiknya.</p><p style=\"margin: 1.5em 0px; margin-block: 1em; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif;\">Dr. Asyraf Suryadin, M.Pd Kepala DP3ACSKB Provinsi Kepulauan Bangka Belitung mengatakan, anak-anak menulis sesuai dengan keinginannya. Bisa menulis mengenai cita-cita yang ingin dicapai ke depan dengan caranya sendiri. </p><p style=\"margin: 1.5em 0px; margin-block: 1em; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif;\">\"Anak-anak harus sekolah terus, sebab banyak orang yang berhasil setelah melalui penempaan,\" kata Asyraf saat membuka kegiatan Pelatihan Pembuatan Karya Fiksi, di LPKA Pangkalpinang, Jumat (4/10/2024).</p><p style=\"margin: 1.5em 0px; margin-block: 1em; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif;\">Bertindak sebagai pemateri kegiatan ini, dosen dan mahasiswa Universitas Muhammadiyah Bangka Belitung. Dijadwalkan kegiatan akan berlangsung hingga tanggal 11 Oktober mendatang.</p><p style=\"margin: 1.5em 0px; margin-block: 1em; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif;\">Lebih jauh Asyraf menjelaskan, karya fiksi yang telah dibuat selanjutnya akan diedit dan diterbitkan dalam bentuk buku. Selain itu, anak-anak yang tulisannya bagus akan mendapatkan tropi dan sertifikat. </p><p style=\"margin: 1.5em 0px; margin-block: 1em; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif;\">\"Semua peserta kegiatan ini, akan mendapatkan sertifikat. Hendaknya kegiatan ini bisa memberikan kesan yang baik,\" harap Asyraf. </p><p style=\"margin: 1.5em 0px; margin-block: 1em; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif;\">Sementara Sitorus Kepala Lembaga Pembinaan Khusus Anak Kelas II Pangkalpinang mengatakan, ini merupakan bukti negara hadir untuk semua warga. Tidak membedakan anak yang di luar dan yang ada di LPKA.</p><p style=\"margin: 1.5em 0px; margin-block: 1em; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif;\">\"Kakak-kakak mahasiswa akan memberikan bimbingan. Manfaatkan kesempatan ini, ikuti arahan yang disampaikan,\" tegasnya.</p>', 'artikel_foto_667e1b45ccca6_083616.jpg', 'file_file_667e1b45ccca6.pdf', 'admin', '2024-10-05', '1', null, null, '2024-06-28 02:10:02', '2024-10-12 08:36:20', null);
INSERT INTO data_artikel VALUES ('2', '667e2fcb4c6c8', 'pub 2', '<p>asd asdasd</p>', null, 'file_foto_667e2fcb4c6c8.jpg', 'file_file_667e2fcb4c6c8.pdf', null, '2024-06-27', null, null, null, '2024-06-28 03:37:13', '2024-06-28 03:37:31', '2024-06-28 03:37:31');
INSERT INTO data_artikel VALUES ('3', '670a23e0a0bc6', 'Cegah Kasus Stunting, Asyraf: Bantu Makanan Bergizi', 'DP3ACSKB Provinsi Kepulauan Bangka Belitung terus berupaya menekan kasus stunting', '<p style=\"margin: 1.5em 0px; margin-block: 1em; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif;\">Sungailiat - DP3ACSKB Provinsi Kepulauan Bangka Belitung terus berupaya menekan kasus stunting. Beberapa upaya itu yakni, melakukan sosialisasi mencegah kasus stunting hingga memberikan bantuan makanan bergizi bagi anak.</p><p style=\"margin: 1.5em 0px; margin-block: 1em; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif;\">Dr. Asyraf Suryadin, M.Pd Kepala DP3ACSKB Provinsi Kepulauan Bangka Belitung mengatakan, sosialisasi yang dilakukan mulai dari sekolah hingga langsung turun ke desa dengan melibatkan masyarakat dan kepala desa.&nbsp;</p><p style=\"margin: 1.5em 0px; margin-block: 1em; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif;\">\"Pernah juga kita menggandeng Komisi 4 DPRD Provinsi Kepulauan Bangka Belitung melakukan kegiatan penanganan stunting tersebut,\" kata Asyraf saat Dialog Interaktif di RRI Pro 1, Sungailiat, Kabupaten Bangka Jumat (4/10/2024).</p><p style=\"margin: 1.5em 0px; margin-block: 1em; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif;\">Sesi Dialog Interaktif kali ini mengusung tema \"Upaya DP3ACSKB dalam Penekanan Stunting\". Lebih jauh Asyraf menjelaskan, pernah DP3ACSKB mengkoordinir ASN untuk ikut peduli menangani kasus stunting. Kegiatan yang dilakukan, setiap ASN menyumbang telur.</p><p style=\"margin: 1.5em 0px; margin-block: 1em; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif;\">\"Selanjutnya telur yang sudah dikumpulkan tersebut dibagikan kepada anak stunting. Ini bentuk dari kepedulian ASN dalam menangani kasus stunting,\" kata Asyraf.</p><p style=\"margin: 1.5em 0px; margin-block: 1em; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif;\">Pola asuh anak harus menjadi perhatian dalam menekan kasus stunting. Asyraf menjelaskan, pemberian ASI eksklusif untuk bayi disarankan selama 6 bulan pertama sejak lahir. Kemudian dilanjutkan hingga usai dua tahun, dibantu dengan susu formula.&nbsp;</p><p style=\"margin: 1.5em 0px; margin-block: 1em; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif;\">Tak kalah penting, kata Asyraf, membangkitkan kesadaran orang tua dalam memberikan asupan gizi dan makanan yang baik bagi pertumbuhan anak. Walaupun keterbatasan dana, namun tidak berhenti mengatasi persoalan stunting.</p><p style=\"margin: 1.5em 0px; margin-block: 1em; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif;\">Pendekatan juga dilakukan melalui tokoh agama dan beberapa organisasi perempuan untuk bersama-sama mengatasi kasus stunting. Asyraf menambahkan, tokoh agama dapat menginformasikan untuk mencegah terjadi pernikahan anak.</p><p style=\"margin: 1.5em 0px; margin-block: 1em; color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif;\">\"Pernikahan usia anak memberikan kontribusi bagi kasus stunting. Pesan tersebut disampaikan saat khotbah Jumat atau momen lainnya,\"&nbsp;kata&nbsp;Asyraf.</p>', 'artikel_foto_670a23e0a0bc6_083658.jpg', null, 'admin', '2024-10-05', '1', null, null, '2024-10-12 07:24:16', '2024-10-12 08:37:01', null);
