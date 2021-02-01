-- MySQL dump 10.16  Distrib 10.1.38-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: db_penilaian_fikri_husen_badjeber
-- ------------------------------------------------------
-- Server version	10.1.38-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tab_guru`
--

DROP TABLE IF EXISTS `tab_guru`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_guru` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `pendidikan_terakhir` varchar(3) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_guru`
--

LOCK TABLES `tab_guru` WRITE;
/*!40000 ALTER TABLE `tab_guru` DISABLE KEYS */;
/*!40000 ALTER TABLE `tab_guru` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_lulus`
--

DROP TABLE IF EXISTS `tab_lulus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_lulus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `nisn` varchar(30) DEFAULT NULL,
  `keterangan` int(1) DEFAULT NULL,
  `nilai` varchar(15) DEFAULT NULL,
  `jurusan` varchar(15) DEFAULT NULL,
  `no_ujian` varchar(30) NOT NULL,
  `ttl` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_lulus`
--

LOCK TABLES `tab_lulus` WRITE;
/*!40000 ALTER TABLE `tab_lulus` DISABLE KEYS */;
INSERT INTO `tab_lulus` VALUES (1,'Abdi Rizki Ananda','1351',NULL,'','DPIB','',''),(2,'Dewi Kurnia Sari','1354',NULL,'','DPIB','',''),(3,'Edwar','1355',NULL,NULL,'DPIB','',''),(4,'Gita Tiara','1356',NULL,NULL,'DPIB','',''),(5,'Irma Muhaini','1357',NULL,NULL,'DPIB','',''),(6,'Maharani Della Rosa','1358',NULL,NULL,'DPIB','',''),(7,'Muhammad Farhan','1360',NULL,NULL,'DPIB','',''),(8,'Muhammad Iqbal','1361',NULL,NULL,'DPIB','',''),(9,'Muhammad Riza Anugrah','1362',NULL,NULL,'DPIB','',''),(10,'Neneng Habibah','1364',NULL,NULL,'DPIB','',''),(11,'Rajibul Ihsan','1365',NULL,NULL,'DPIB','',''),(12,'Resky Ganda Yusra','1366',NULL,NULL,'DPIB','',''),(13,'Rizky Rianda','1368',NULL,NULL,'DPIB','',''),(14,'Selvi Loranika','1369',NULL,NULL,'DPIB','',''),(15,'Tiara','1372',NULL,NULL,'DPIB','',''),(16,'Tsamratul Fajri','1373',NULL,NULL,'DPIB','',''),(17,'Wahyu Alfarizi','1375',NULL,NULL,'DPIB','',''),(18,'Yulia Elvionita','1376',1,'','DPIB','1010-1010-1111','Tilatang Kamang, 27 Mei 2003'),(21,'Fikri Husen Badjeber','123123123123',1,'100','RPL','123123123123','asdfasdfjlasjdf');
/*!40000 ALTER TABLE `tab_lulus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_pelajaran`
--

DROP TABLE IF EXISTS `tab_pelajaran`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_pelajaran` (
  `id` int(11) NOT NULL,
  `mata_pelajaran` varchar(50) DEFAULT NULL,
  `jurusan` varchar(30) DEFAULT NULL,
  `kelas` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_pelajaran`
--

LOCK TABLES `tab_pelajaran` WRITE;
/*!40000 ALTER TABLE `tab_pelajaran` DISABLE KEYS */;
/*!40000 ALTER TABLE `tab_pelajaran` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_setting`
--

DROP TABLE IF EXISTS `tab_setting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_setting` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `footer` text NOT NULL,
  `running` text NOT NULL,
  `logo` text NOT NULL,
  `pavicon` text NOT NULL,
  `isaktif` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_setting`
--

LOCK TABLES `tab_setting` WRITE;
/*!40000 ALTER TABLE `tab_setting` DISABLE KEYS */;
INSERT INTO `tab_setting` VALUES (1,'SMK Negeri 1 Tilatang Kaman','SMK Negeri 1 Tilatang Kamang','','assets/images/Untitled_1.png','assets/images/favicon.png',1),(2,'setting_evaluasi','','','','',1),(3,'pmb','','','','',0);
/*!40000 ALTER TABLE `tab_setting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tab_user`
--

DROP TABLE IF EXISTS `tab_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tab_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_emp` int(11) NOT NULL DEFAULT '0',
  `nim` varchar(11) NOT NULL,
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `statuslogin` varchar(1) NOT NULL DEFAULT '0',
  `lastlogin` datetime DEFAULT NULL,
  `authority` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(100) DEFAULT NULL,
  `nomerhp` varchar(15) NOT NULL,
  `Userinsert` varchar(100) DEFAULT NULL,
  `tglinsert` datetime DEFAULT NULL,
  `Useredit` varchar(100) DEFAULT NULL,
  `tgledit` datetime DEFAULT NULL,
  `isadmin` varchar(1) DEFAULT '0',
  `jmlogin` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tab_user`
--

LOCK TABLES `tab_user` WRITE;
/*!40000 ALTER TABLE `tab_user` DISABLE KEYS */;
INSERT INTO `tab_user` VALUES (1,1,'','admin','0cc175b9c0f1b6a831c399e269772661','1','2021-01-21 23:04:04','1111111111111111111111111',NULL,'',NULL,'0000-00-00 00:00:00','nofri','2009-08-19 15:13:27','1',1),(2,2,'','dev','0cc175b9c0f1b6a831c399e269772661','1','2021-01-09 22:32:07','1111111111111111111111111','','','','0000-00-00 00:00:00','nofri','2009-08-19 15:13:27','1',1);
/*!40000 ALTER TABLE `tab_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-23  0:27:23
