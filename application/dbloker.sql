-- MySQL dump 10.13  Distrib 5.7.24, for Win64 (x86_64)
--
-- Host: localhost    Database: dblokernf
-- ------------------------------------------------------
-- Server version	5.7.24

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
-- Table structure for table `bidang_usaha`
--

DROP TABLE IF EXISTS `bidang_usaha`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bidang_usaha` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bidang_usaha`
--

LOCK TABLES `bidang_usaha` WRITE;
/*!40000 ALTER TABLE `bidang_usaha` DISABLE KEYS */;
INSERT INTO `bidang_usaha` VALUES (1,'Teknologi Informasi dan Komunikasi'),(2,'Perbankan'),(3,'Pendidikan'),(4,'Transporasi'),(5,'Industri Nasional');
/*!40000 ALTER TABLE `bidang_usaha` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `keahlian`
--

DROP TABLE IF EXISTS `keahlian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `keahlian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `keahlian`
--

LOCK TABLES `keahlian` WRITE;
/*!40000 ALTER TABLE `keahlian` DISABLE KEYS */;
INSERT INTO `keahlian` VALUES (1,'Programmer'),(2,'Infrastruktur & Jaringan'),(3,'Accounting'),(4,'Bahasa Inggris'),(5,'Database'),(6,'Web Design');
/*!40000 ALTER TABLE `keahlian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lowongan`
--

DROP TABLE IF EXISTS `lowongan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lowongan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deskripsi_pekerjaan` text,
  `tanggal_akhir` date DEFAULT NULL,
  `mitra_id` int(11) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_lowongan_mitra1_idx` (`mitra_id`),
  CONSTRAINT `fk_lowongan_mitra1` FOREIGN KEY (`mitra_id`) REFERENCES `mitra` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lowongan`
--

LOCK TABLES `lowongan` WRITE;
/*!40000 ALTER TABLE `lowongan` DISABLE KEYS */;
INSERT INTO `lowongan` VALUES (1,'Dibutuhkan tenaga programmer/analyst','2021-07-01',2,'hrd@bukalapak.go.id');
/*!40000 ALTER TABLE `lowongan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lowongan_keahlian`
--

DROP TABLE IF EXISTS `lowongan_keahlian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lowongan_keahlian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keahlian_id` int(11) NOT NULL,
  `lowongan_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_lowongan_keahlian_keahlian1_idx` (`keahlian_id`),
  KEY `fk_lowongan_keahlian_lowongan1_idx` (`lowongan_id`),
  CONSTRAINT `fk_lowongan_keahlian_keahlian1` FOREIGN KEY (`keahlian_id`) REFERENCES `keahlian` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_lowongan_keahlian_lowongan1` FOREIGN KEY (`lowongan_id`) REFERENCES `lowongan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lowongan_keahlian`
--

LOCK TABLES `lowongan_keahlian` WRITE;
/*!40000 ALTER TABLE `lowongan_keahlian` DISABLE KEYS */;
INSERT INTO `lowongan_keahlian` VALUES (1,1,1),(2,5,1),(3,6,1);
/*!40000 ALTER TABLE `lowongan_keahlian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mitra`
--

DROP TABLE IF EXISTS `mitra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mitra` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `kontak` varchar(30) DEFAULT NULL,
  `telpon` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `web` varchar(45) DEFAULT NULL,
  `bidang_usaha_id` int(11) NOT NULL,
  `sektor_usaha_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_mitra_bidang_usaha_idx` (`bidang_usaha_id`),
  KEY `fk_mitra_sektor_usaha1_idx` (`sektor_usaha_id`),
  CONSTRAINT `fk_mitra_bidang_usaha` FOREIGN KEY (`bidang_usaha_id`) REFERENCES `bidang_usaha` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_mitra_sektor_usaha1` FOREIGN KEY (`sektor_usaha_id`) REFERENCES `sektor_usaha` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mitra`
--

LOCK TABLES `mitra` WRITE;
/*!40000 ALTER TABLE `mitra` DISABLE KEYS */;
INSERT INTO `mitra` VALUES (1,'PT Rekayasa Industri','Jl Makam Pahlawan xbata No 182','Aries P','0812-8882329','hrd@rekin.go.id','www.rekin.go.id',5,2),(2,'PT Bukalapak','Jl Kemang No. 12','Zaki F','0859-42029','hrd@bukalapak.com','bukalapak.com',1,4);
/*!40000 ALTER TABLE `mitra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `peminat_lowongan`
--

DROP TABLE IF EXISTS `peminat_lowongan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `peminat_lowongan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(10) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `alasan` text,
  `prodi_id` int(11) NOT NULL,
  `lowongan_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_peminat_lowongan_prodi1_idx` (`prodi_id`),
  KEY `fk_peminat_lowongan_lowongan1_idx` (`lowongan_id`),
  CONSTRAINT `fk_peminat_lowongan_lowongan1` FOREIGN KEY (`lowongan_id`) REFERENCES `lowongan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_peminat_lowongan_prodi1` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peminat_lowongan`
--

LOCK TABLES `peminat_lowongan` WRITE;
/*!40000 ALTER TABLE `peminat_lowongan` DISABLE KEYS */;
/*!40000 ALTER TABLE `peminat_lowongan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prodi`
--

DROP TABLE IF EXISTS `prodi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prodi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(2) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prodi`
--

LOCK TABLES `prodi` WRITE;
/*!40000 ALTER TABLE `prodi` DISABLE KEYS */;
INSERT INTO `prodi` VALUES (1,'SI','Sistem Informasi'),(2,'TI','Teknik Informatika'),(3,'BD','Bisnis Digital');
/*!40000 ALTER TABLE `prodi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sektor_usaha`
--

DROP TABLE IF EXISTS `sektor_usaha`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sektor_usaha` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sektor_usaha`
--

LOCK TABLES `sektor_usaha` WRITE;
/*!40000 ALTER TABLE `sektor_usaha` DISABLE KEYS */;
INSERT INTO `sektor_usaha` VALUES (1,'Pemerintahan'),(2,'BUMN'),(3,'Swasta'),(4,'Startup');
/*!40000 ALTER TABLE `sektor_usaha` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-24  8:51:19