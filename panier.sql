-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: panier
-- ------------------------------------------------------
-- Server version	5.7.19

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
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `short_description` text,
  `long_description` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'IBANEZ  Premium JEM7VP-WH White',1450.8,10,'Signature Electric Guitar with DiMarzio Evolution Pickups and Ibanez Edge Tremolo, including Gigbag','With the Ibanez Steve Vai Premium JEM7VP-WH White, Ibanez presents a Signature electric guitar within the range of the Premium series, which corresponds to the tonal and haptic visions of the legendary guitar virtuoso down to the smallest details. Accordingly, Ibanez relies on an alder body with the typical \"Monkey Grip\" and \"Lion\'s Claw\" details, while the bolted, five-piece maple walnut neck with the extremely slim \"Wizard\" profile offers agile playing characteristics for virtuoso solos at top speed. The elegant \"Tree of Life\" inlay in the ebony fingerboard also marks the positions. In addition, the proven HSH setup of DiMarzio Evolution pickups, whose fiery output and enormous assertiveness allow each solo to be cut through the mix, ensures adequate sound conversion. Last but not least the Ibanez Premium JEM7VP is equipped with the classic Ibanez Edge Double-Locking Tremolo and Gotoh tuners.'),(4,'Fender CS Eric Clapton Strat',3759,23,'Built to Slowhands exacting specifications, the Eric Clapton Signature Stratocaster guitar among the \"Cream\" of the Fender crop','Built to Slowhand’s exacting specifications, the Eric Clapton Signature Stratocaster guitar among the \"Cream\" of the Fender crop, so to speak is powered by three Vintage Noiseless pickups and features a special soft V-shaped maple neck, blocked tremolo and Clapton’s signature on the headstock.'),(2,'Gibson Les Paul Custom EB GH',3790,10,'Singlecut electric guitar with nitrocellulose finish and Gibson Humbucker pickups, including case and certificate','The Gibson Les Paul Custom Ebony Gloss is Gibson Custom Shop built as the flagship of the Les Paul series and convinces not only with its stylish Tuxedo Look but also with a broad sound spectrum. The mahogany body with maple top and weight relief is used Gibson , while the glued mahogany neck is provided with long Neck tenon and one Ebenholzgriffbrett and lies comfortably in the hand. The proven pickup setup of one Gibson 490R Humbucker on the neck and one on Gibson 498T Humbucker the bridge promises versatile sounds of the Blues on the guitar amplifier, Rock and Jazz which can be optimally adjusted using the classic Les-Paul circuitry. Last but not least, it Gibson Les Paul Custom Ebony has an Tune -O-Matic bridge with Stopbar tailpiece and classic Grover Rotomatic tuners.'),(3,'Gretsch G6120T-59 Vintage',2845,11,'Holle elektrische gitaar met twee TV Jones Classic pickups en Bigsby vibrato, inclusief koffer en certificaat','De Gretsch G6120T-59 Vintage Select Edition Chet Atkins Hollow Body Bigsby Vintage Orange Stain Lak uit de in Japan gefabriceerde Professional Series van Gretsch overtuigt met klassieke vintage looks en authentieke klanken. De grote Hollow Body elektrische gitaar met Gretsch 1959 Trestle Bracing en twee TV Jones Classic pickups levert een sonore klank met een resonante houtnoot, terwijl de klassieke Bigsby elke noot tot leven brengt met glinsterende vibratos.');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-13 16:53:01
