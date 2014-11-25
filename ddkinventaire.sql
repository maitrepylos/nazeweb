CREATE DATABASE  IF NOT EXISTS `ddkinventaire` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `ddkinventaire`;
-- MySQL dump 10.13  Distrib 5.6.13, for osx10.6 (i386)
--
-- Host: 127.0.0.1    Database: ddkinventaire
-- ------------------------------------------------------
-- Server version	5.5.25

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
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brands` (
  `id_brands` int(11) NOT NULL AUTO_INCREMENT,
  `brands_name` varchar(45) NOT NULL,
  PRIMARY KEY (`id_brands`),
  UNIQUE KEY `brands_name_UNIQUE` (`brands_name`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` VALUES (1,'Acer'),(2,'Apple'),(28,'Artemide'),(33,'Asus'),(3,'Brother'),(24,'Bruneau'),(26,'Buronomic'),(4,'Canon'),(5,'Cisco'),(29,'Contardi'),(7,'D-Link'),(6,'Dell'),(8,'Epson'),(30,'Fabbian'),(31,'Foscarini'),(9,'Fujitsu'),(10,'HP'),(11,'Iiyama'),(27,'Knoll'),(12,'laCie'),(13,'Lenovo'),(14,'LG'),(15,'Linksys'),(16,'Logitech'),(32,'Martinelli Luce'),(17,'Microsoft'),(18,'Netgear'),(19,'Nokia'),(34,'Philips'),(20,'Samsung'),(21,'Sony'),(25,'Steelcase'),(22,'Toshiba'),(23,'WD');
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `furnitures`
--

DROP TABLE IF EXISTS `furnitures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `furnitures` (
  `id_furnitures` int(11) NOT NULL AUTO_INCREMENT,
  `furnitures_reference` varchar(45) NOT NULL,
  `models_id_models` int(11) NOT NULL,
  `types_id_types` int(11) NOT NULL,
  `places_id_places` int(11) NOT NULL,
  PRIMARY KEY (`id_furnitures`),
  KEY `fk_furnitures_models1_idx` (`models_id_models`),
  KEY `fk_furnitures_types1_idx` (`types_id_types`),
  KEY `fk_furnitures_places1_idx` (`places_id_places`),
  CONSTRAINT `fk_furnitures_models1` FOREIGN KEY (`models_id_models`) REFERENCES `models` (`id_models`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_furnitures_places1` FOREIGN KEY (`places_id_places`) REFERENCES `places` (`id_places`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_furnitures_types1` FOREIGN KEY (`types_id_types`) REFERENCES `types` (`id_types`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `furnitures`
--

LOCK TABLES `furnitures` WRITE;
/*!40000 ALTER TABLE `furnitures` DISABLE KEYS */;
INSERT INTO `furnitures` VALUES (2,'F8103B',61,11,1),(3,'BF53C7',61,11,2),(5,'C3A894',64,12,4),(6,'13D802',65,12,1),(8,'9B641C',68,13,1),(9,'97402A',68,13,5),(10,'8CBE3A',63,11,1),(11,'07BED8',62,11,2),(12,'FD7B04',66,12,3),(13,'27F38A',66,12,3),(14,'4B60FD',67,12,3),(15,'54A1F3',69,13,2),(16,'D07492',69,13,3),(18,'7F28AB',71,14,1),(21,'312C74',78,14,5),(22,'C79FDE',77,14,4),(23,'26CBA8',76,14,1),(24,'E4526C',81,14,3),(25,'A6950B',80,14,3),(26,'C718A2',77,14,1),(27,'8CB24A',80,14,4),(30,'903BD4',83,14,4),(31,'73064E',72,14,4),(32,'A5CED7',74,14,2),(33,'507AE2',61,11,1),(34,'AECF18',73,11,1),(35,'AB596F',61,11,1),(36,'35B2A0',61,11,2);
/*!40000 ALTER TABLE `furnitures` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hardwares`
--

DROP TABLE IF EXISTS `hardwares`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hardwares` (
  `id_hardwares` int(11) NOT NULL AUTO_INCREMENT,
  `hardwares_reference` varchar(45) NOT NULL,
  `models_id_models` int(11) NOT NULL,
  `types_id_types` int(11) NOT NULL,
  `users_id_users` int(11) NOT NULL,
  PRIMARY KEY (`id_hardwares`),
  UNIQUE KEY `hardwares_reference_UNIQUE` (`hardwares_reference`),
  KEY `fk_hardwares_models1_idx` (`models_id_models`),
  KEY `fk_hardwares_types1_idx` (`types_id_types`),
  KEY `fk_hardwares_users1_idx` (`users_id_users`),
  CONSTRAINT `fk_hardwares_models1` FOREIGN KEY (`models_id_models`) REFERENCES `models` (`id_models`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_hardwares_types1` FOREIGN KEY (`types_id_types`) REFERENCES `types` (`id_types`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_hardwares_users1` FOREIGN KEY (`users_id_users`) REFERENCES `users` (`id_users`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hardwares`
--

LOCK TABLES `hardwares` WRITE;
/*!40000 ALTER TABLE `hardwares` DISABLE KEYS */;
INSERT INTO `hardwares` VALUES (1,'6E78BD',18,3,2),(2,'A438C9',41,7,16),(4,'5619B2',23,4,11),(5,'987CD0',52,9,10),(6,'E0B7A3',56,10,9),(7,'3418D7',51,8,15),(8,'ED0512',56,10,14),(9,'E45A13',36,6,8),(11,'8AF7B1',18,3,15),(12,'A40B5F',16,2,8),(13,'5DAB12',22,4,2),(14,'FB609D',53,9,11),(16,'DCE251',27,4,1),(18,'3C47A5',35,6,15),(19,'84FE2C',50,8,8),(20,'48B607',58,10,5),(22,'1CF692',18,3,11),(23,'9D2E3A',43,7,20),(24,'71CF6D',25,4,9),(25,'86345D',58,10,9),(27,'FD56EC',18,3,1),(28,'915A48',43,7,5),(29,'AB6E4C',25,4,20),(30,'D2C915',58,10,1),(31,'5FAB27',12,2,16),(32,'3A5F6C',23,4,1),(33,'DE7564',21,3,14),(34,'2D4A3E',28,4,15),(35,'EB2F4A',54,9,6),(36,'AC3408',50,8,13),(37,'B13587',39,6,5),(39,'C7E593',31,5,12),(40,'17BFE8',31,5,18),(41,'C91FE4',32,5,1),(42,'DC2B3A',9,1,12),(43,'E345BC',20,3,1),(44,'3A9574',34,6,19),(45,'8D5713',20,3,20),(46,'49BE65',12,2,6),(47,'724D50',9,1,6),(49,'59DE84',37,6,19),(50,'3BECF4',37,6,10),(51,'E4DA36',56,10,12),(52,'21F053',57,10,3),(53,'A17E46',47,8,1),(54,'E6A0B4',36,6,5),(55,'6D15C7',9,1,9),(57,'7A460D',33,5,10),(58,'4A69DF',13,2,1),(59,'8CAB12',13,2,19),(60,'E79BF8',48,8,16),(66,'CE1207',1,1,14),(70,'1BED76',1,1,1),(71,'7DC1AB',1,1,14);
/*!40000 ALTER TABLE `hardwares` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `models`
--

DROP TABLE IF EXISTS `models`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `models` (
  `id_models` int(11) NOT NULL AUTO_INCREMENT,
  `models_name` varchar(45) NOT NULL,
  `brands_id_brands` int(11) NOT NULL,
  PRIMARY KEY (`id_models`),
  UNIQUE KEY `models_name_UNIQUE` (`models_name`),
  KEY `fk_models_brands_idx` (`brands_id_brands`),
  CONSTRAINT `fk_models_brands` FOREIGN KEY (`brands_id_brands`) REFERENCES `brands` (`id_brands`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `models`
--

LOCK TABLES `models` WRITE;
/*!40000 ALTER TABLE `models` DISABLE KEYS */;
INSERT INTO `models` VALUES (1,'EliteBook 8570p',10),(2,'Aspire E1-570-33214G50Mnii',1),(3,'Satellite Pro C70-B-11T',22),(4,'LIFEBOOK A544',9),(5,'EliteBook 850 G1',10),(6,'EliteBook 840 G1',10),(7,'ProBook 450 G1',10),(8,'TravelMate P255-M-34014G50Mnkk',1),(9,'MacBook Air',2),(10,'MacBook Pro',2),(11,'ProDesk 600 G1',10),(12,'ESPRIMO P720 E90+',9),(13,'ProDesk 400 G1',10),(14,'OptiPlex 3020',6),(15,'Veriton E430',1),(16,'ProDesk 400 G2',10),(17,'Galaxy Tab 3',20),(18,'iPad Air',2),(19,'Galaxy Note 10.1',20),(20,'IdeaTab',13),(21,'VAIO Duo 13 SVD1323A4E',21),(22,'Officejet Pro 8620',10),(23,'Deskjet 2540',10),(24,'MFC',3),(25,'Photosmart 5525',10),(26,'PIXMA MX925',4),(27,'PIXMA MX395',4),(28,'PIXMA MG4250',4),(29,'WorkForce WF-3520DWF',8),(30,'Porsche Design P\'9230',12),(31,'My Book Essential',23),(32,'My Passport',23),(33,'My Book',23),(34,'DGN2200',18),(35,'Small Business RV320',5),(36,'WRT54GL',15),(37,'RangeMax WNR1000',18),(38,'Wireless N DWR-512',7),(39,'ProSafe FVS318G',18),(40,'S24C450B',20),(41,'Z Display Z23i',10),(42,'S24D390HL',20),(43,'ProLite E2483HS-1',11),(44,'24EB23PM-B',14),(45,'S24C750P',20),(46,'GALAXY Xcover 2',20),(47,'Lumia 625',19),(48,'Lumia 520',19),(49,'iPhone 5c',2),(50,'iPhone 4s',2),(51,'iPhone 5s',2),(52,'M175',16),(53,'B100',16),(54,'M705',16),(55,'M510',16),(56,'K120',16),(57,'Wired Keyboard 200',17),(58,'Wired Desktop 600',17),(59,'KB520',9),(60,'Galaxy SII',20),(61,'Excellens',24),(62,'Tenaro',25),(63,'Osmose',26),(64,'Direction',24),(65,'Président',24),(66,'Think',25),(67,'Let\'s B',25),(68,'Evolution',24),(69,'Classeur',25),(70,'Enfilades',27),(71,'Dalu',28),(72,'Tolomeo',28),(73,'Edge',28),(74,'Flexiled',29),(75,'Paddle',30),(76,'Cubetto',30),(77,'Domina',30),(78,'Flow',30),(79,'Havana',31),(80,'Maki',31),(81,'Binic',31),(82,'Mini Pipistrello',32),(83,'Pipistrello',32),(84,'MX239H',33),(85,'Ipod nano',2);
/*!40000 ALTER TABLE `models` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `places`
--

DROP TABLE IF EXISTS `places`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `places` (
  `id_places` int(11) NOT NULL AUTO_INCREMENT,
  `places_name` varchar(45) NOT NULL,
  PRIMARY KEY (`id_places`),
  UNIQUE KEY `places_name_UNIQUE` (`places_name`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `places`
--

LOCK TABLES `places` WRITE;
/*!40000 ALTER TABLE `places` DISABLE KEYS */;
INSERT INTO `places` VALUES (2,'Bureau A bis'),(3,'Bureau B'),(4,'Bureau C'),(7,'Bureau D'),(8,'Bureau E'),(6,'Salle des serveurs'),(5,'Sous-sol'),(1,'Stock');
/*!40000 ALTER TABLE `places` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `types`
--

DROP TABLE IF EXISTS `types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `types` (
  `id_types` int(11) NOT NULL AUTO_INCREMENT,
  `types_sort` varchar(45) NOT NULL,
  PRIMARY KEY (`id_types`),
  UNIQUE KEY `types_sort_UNIQUE` (`types_sort`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `types`
--

LOCK TABLES `types` WRITE;
/*!40000 ALTER TABLE `types` DISABLE KEYS */;
INSERT INTO `types` VALUES (11,'Bureau'),(15,'Casque'),(10,'Clavier'),(16,'Consommables'),(5,'Disque Dur'),(12,'Fauteuil'),(4,'Impression'),(14,'Luminaire'),(7,'Moniteur'),(2,'Ordinateur de bureau'),(1,'Ordinateur portable'),(13,'Rangement'),(6,'Réseau'),(8,'Smartphone'),(9,'Souris'),(3,'Tablette');
/*!40000 ALTER TABLE `types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  `users_lastname` varchar(45) NOT NULL,
  `users_firstname` varchar(45) NOT NULL,
  PRIMARY KEY (`id_users`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admnistrateur','Admnistrateur'),(2,'De Ketelaere','Dorian'),(3,'Ernaelsten','Gérard'),(4,'Ramos','Ahmed'),(5,'Mooney','Merritt'),(6,'Larson','Amber'),(7,'Wise','Zephr'),(8,'Paul','Alea'),(9,'Daniel','Leilani'),(10,'Blevins','Barbara'),(11,'Santos','Josiah'),(12,'Carey','Danielle'),(13,'Eaton','Brynne'),(14,'Alvarado','Alika'),(15,'Wilkinson','Owen'),(16,'Sargent','Autumn'),(17,'Flores','Sheila'),(18,'Espinoza','Hayley'),(19,'Richard','Sheila'),(20,'Nolan','Murphy'),(21,'Pierre','Paul'),(22,'John','Doe'),(23,'Body','Joffrey'),(24,'D\'hulst','Antoine');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-08-17 22:31:58
