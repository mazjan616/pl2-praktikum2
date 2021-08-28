/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 100419
Source Host           : localhost:3306
Source Database       : db_kampus

Target Server Type    : MYSQL
Target Server Version : 100419
File Encoding         : 65001

Date: 2021-08-28 10:10:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for dosen
-- ----------------------------
DROP TABLE IF EXISTS `dosen`;
CREATE TABLE `dosen` (
  `id` int(2) NOT NULL,
  `nik_dosen` int(10) DEFAULT NULL,
  `nama_dosen` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of dosen
-- ----------------------------
INSERT INTO `dosen` VALUES ('0', '14190001', 'Anggra Triawan');
INSERT INTO `dosen` VALUES ('1', '14190002', 'Julio Warman');
INSERT INTO `dosen` VALUES ('2', '14190003', 'Didik Suwito Pribadi');
INSERT INTO `dosen` VALUES ('4', '14190004', 'Evy Julianti');
INSERT INTO `dosen` VALUES ('5', '14190005', 'Binanda Wicaksana');

-- ----------------------------
-- Table structure for mahasiswa
-- ----------------------------
DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE `mahasiswa` (
  `id` int(2) NOT NULL,
  `npm` int(10) DEFAULT NULL,
  `nama_mhs` varchar(150) DEFAULT '',
  `prodi` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of mahasiswa
-- ----------------------------
INSERT INTO `mahasiswa` VALUES ('0', '14197023', 'Muhamad Novaldy', 'Sistem Informasi');
INSERT INTO `mahasiswa` VALUES ('1', '14197024', 'Muhamad Ridwan', 'Sistem Informasi');
INSERT INTO `mahasiswa` VALUES ('2', '14197025', 'Muhamad Sahrul', 'Sistem Informasi');
INSERT INTO `mahasiswa` VALUES ('3', '14197026', 'Muhammad Aditya Anwari', 'Sistem Informasi');
INSERT INTO `mahasiswa` VALUES ('4', '14197027', 'Muhammad Dimas Ramadhan', 'Sistem Informasi');
INSERT INTO `mahasiswa` VALUES ('5', '14197032', 'Rio Bagus Saputra', 'Teknik Informasi');
INSERT INTO `mahasiswa` VALUES ('6', '14197034', 'Rivan Disahayyan', 'Teknik Informasi');
INSERT INTO `mahasiswa` VALUES ('7', '14197039', 'Wanda Riswanda', 'Teknik Informasi');
INSERT INTO `mahasiswa` VALUES ('8', '14197040', 'Yadi Ramadhan Tenggara', 'Teknik Informasi');
INSERT INTO `mahasiswa` VALUES ('9', '14197059', 'Rizki Ibnu Fajrin', 'Teknik Informasi');

-- ----------------------------
-- Table structure for matkul
-- ----------------------------
DROP TABLE IF EXISTS `matkul`;
CREATE TABLE `matkul` (
  `id` varchar(10) NOT NULL,
  `mata_kuliah` varchar(150) DEFAULT '',
  `semester` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of matkul
-- ----------------------------
INSERT INTO `matkul` VALUES ('DK301', 'Business Process Design and Management', '3');
INSERT INTO `matkul` VALUES ('DK306', 'Supply Chain Management', '4');
INSERT INTO `matkul` VALUES ('FK307', 'Statistics and Probability', '3');
INSERT INTO `matkul` VALUES ('FK310', 'Management of Science', '4');
INSERT INTO `matkul` VALUES ('GC206', 'Programming Language 2', '4');
INSERT INTO `matkul` VALUES ('GC222', 'Advaced Algorithms', '4');
INSERT INTO `matkul` VALUES ('IS310', 'User Exprerience/Intro. To HCI', '3');
INSERT INTO `matkul` VALUES ('IS311', 'Data and Information System', '3');

-- ----------------------------
-- Table structure for nilai
-- ----------------------------
DROP TABLE IF EXISTS `nilai`;
CREATE TABLE `nilai` (
  `id` int(2) NOT NULL,
  `npm` int(10) NOT NULL,
  `nama_mhs` varchar(150) DEFAULT NULL,
  `id_matkul` varchar(10) NOT NULL,
  `mata_kuliah` varchar(150) DEFAULT NULL,
  `uts` varchar(10) DEFAULT NULL,
  `uas` varchar(10) DEFAULT NULL,
  `quiz` varchar(10) DEFAULT NULL,
  `tugas` varchar(10) DEFAULT NULL,
  `kehadiran` varchar(10) DEFAULT NULL,
  `pertemuan` varchar(10) DEFAULT NULL,
  `absensi` varchar(10) DEFAULT NULL,
  `nilai` varchar(10) DEFAULT NULL,
  `grade` varchar(10) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of nilai
-- ----------------------------
INSERT INTO `nilai` VALUES ('1', '14197024', 'Muhamad Ridwan', 'DK301', 'Business Process Design and Management', '87', '62', '90', '70', '16', '16', null, null, null);
INSERT INTO `nilai` VALUES ('2', '14197033', 'Risti Ramadanti', 'DK301', 'Business Process Design and Management', '77', '86', '80', '70', '16', '16', null, null, '');
INSERT INTO `nilai` VALUES ('3', '14197024', 'Muhamad Novaldy', 'DK301', 'Business Process Design and Management', '70', '77', '90', '75', '16', '16', null, null, '');
INSERT INTO `nilai` VALUES ('4', '14197059', 'Rizki Ibnu Fajrin', 'DK301', 'Business Process Design and Management', '70', '70', '80', '70', '16', '16', null, null, '');
